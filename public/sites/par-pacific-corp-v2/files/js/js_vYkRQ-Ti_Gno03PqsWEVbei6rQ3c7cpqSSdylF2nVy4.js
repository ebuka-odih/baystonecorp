/**
 * @file
 * Drupal Bootstrap object.
 */

/**
 * All Drupal Bootstrap JavaScript APIs are contained in this namespace.
 *
 * @namespace
 */
(function (_, $, Drupal, drupalSettings) {
  'use strict';

  var Bootstrap = {
    processedOnce: {},
    settings: drupalSettings.bootstrap || {}
  };

  /**
   * Wraps Drupal.checkPlain() to ensure value passed isn't empty.
   *
   * Encodes special characters in a plain-text string for display as HTML.
   *
   * @param {string} str
   *   The string to be encoded.
   *
   * @return {string}
   *   The encoded string.
   *
   * @ingroup sanitization
   */
  Bootstrap.checkPlain = function (str) {
    return str && Drupal.checkPlain(str) || '';
  };

  /**
   * Creates a jQuery plugin.
   *
   * @param {String} id
   *   A jQuery plugin identifier located in $.fn.
   * @param {Function} plugin
   *   A constructor function used to initialize the for the jQuery plugin.
   * @param {Boolean} [noConflict]
   *   Flag indicating whether or not to create a ".noConflict()" helper method
   *   for the plugin.
   */
  Bootstrap.createPlugin = function (id, plugin, noConflict) {
    // Immediately return if plugin doesn't exist.
    if ($.fn[id] !== void 0) {
      return this.fatal('Specified jQuery plugin identifier already exists: @id. Use Drupal.bootstrap.replacePlugin() instead.', {'@id': id});
    }

    // Immediately return if plugin isn't a function.
    if (typeof plugin !== 'function') {
      return this.fatal('You must provide a constructor function to create a jQuery plugin "@id": @plugin', {'@id': id, '@plugin':  plugin});
    }

    // Add a ".noConflict()" helper method.
    this.pluginNoConflict(id, plugin, noConflict);

    $.fn[id] = plugin;
  };

  /**
   * Diff object properties.
   *
   * @param {...Object} objects
   *   Two or more objects. The first object will be used to return properties
   *   values.
   *
   * @return {Object}
   *   Returns the properties of the first passed object that are not present
   *   in all other passed objects.
   */
  Bootstrap.diffObjects = function (objects) {
    var args = Array.prototype.slice.call(arguments);
    return _.pick(args[0], _.difference.apply(_, _.map(args, function (obj) {
      return Object.keys(obj);
    })));
  };

  /**
   * Map of supported events by regular expression.
   *
   * @type {Object<Event|MouseEvent|KeyboardEvent|TouchEvent,RegExp>}
   */
  Bootstrap.eventMap = {
    Event: /^(?:load|unload|abort|error|select|change|submit|reset|focus|blur|resize|scroll)$/,
    MouseEvent: /^(?:click|dblclick|mouse(?:down|enter|leave|up|over|move|out))$/,
    KeyboardEvent: /^(?:key(?:down|press|up))$/,
    TouchEvent: /^(?:touch(?:start|end|move|cancel))$/
  };

  /**
   * Extends a jQuery Plugin.
   *
   * @param {String} id
   *   A jQuery plugin identifier located in $.fn.
   * @param {Function} callback
   *   A constructor function used to initialize the for the jQuery plugin.
   *
   * @return {Function|Boolean}
   *   The jQuery plugin constructor or FALSE if the plugin does not exist.
   */
  Bootstrap.extendPlugin = function (id, callback) {
    // Immediately return if plugin doesn't exist.
    if (typeof $.fn[id] !== 'function') {
      return this.fatal('Specified jQuery plugin identifier does not exist: @id', {'@id':  id});
    }

    // Immediately return if callback isn't a function.
    if (typeof callback !== 'function') {
      return this.fatal('You must provide a callback function to extend the jQuery plugin "@id": @callback', {'@id': id, '@callback':  callback});
    }

    // Determine existing plugin constructor.
    var constructor = $.fn[id] && $.fn[id].Constructor || $.fn[id];
    var proto = constructor.prototype;

    var obj = callback.apply(constructor, [this.settings]);
    if (!$.isPlainObject(obj)) {
      return this.fatal('Returned value from callback is not a plain object that can be used to extend the jQuery plugin "@id": @obj', {'@obj':  obj});
    }

    // Add a jQuery UI like option getter/setter method.
    var option = this.option;
    if (proto.option === void(0)) {
      proto.option = function () {
        return option.apply(this, arguments);
      };
    }

    // Handle prototype properties separately.
    if (obj.prototype !== void 0) {
      for (var key in obj.prototype) {
        if (!obj.prototype.hasOwnProperty(key)) continue;
        var value = obj.prototype[key];
        if (typeof value === 'function') {
          proto[key] = this.superWrapper(proto[key] || function () {}, value);
        }
        else {
          proto[key] = $.isPlainObject(value) ? $.extend(true, {}, proto[key], value) : value;
        }
      }
    }
    delete obj.prototype;

    // Handle static properties.
    for (key in obj) {
      if (!obj.hasOwnProperty(key)) continue;
      value = obj[key];
      if (typeof value === 'function') {
        constructor[key] = this.superWrapper(constructor[key] || function () {}, value);
      }
      else {
        constructor[key] = $.isPlainObject(value) ? $.extend(true, {}, constructor[key], value) : value;
      }
    }

    return $.fn[id];
  };

  Bootstrap.superWrapper = function (parent, fn) {
    return function () {
      var previousSuper = this.super;
      this.super = parent;
      var ret = fn.apply(this, arguments);
      if (previousSuper) {
        this.super = previousSuper;
      }
      else {
        delete this.super;
      }
      return ret;
    };
  };

  /**
   * Provide a helper method for displaying when something is went wrong.
   *
   * @param {String} message
   *   The message to display.
   * @param {Object} [args]
   *   An arguments to use in message.
   *
   * @return {Boolean}
   *   Always returns FALSE.
   */
  Bootstrap.fatal = function (message, args) {
    if (this.settings.dev && console.warn) {
      for (var name in args) {
        if (args.hasOwnProperty(name) && typeof args[name] === 'object') {
          args[name] = JSON.stringify(args[name]);
        }
      }
      Drupal.throwError(new Error(Drupal.formatString(message, args)));
    }
    return false;
  };

  /**
   * Intersects object properties.
   *
   * @param {...Object} objects
   *   Two or more objects. The first object will be used to return properties
   *   values.
   *
   * @return {Object}
   *   Returns the properties of first passed object that intersects with all
   *   other passed objects.
   */
  Bootstrap.intersectObjects = function (objects) {
    var args = Array.prototype.slice.call(arguments);
    return _.pick(args[0], _.intersection.apply(_, _.map(args, function (obj) {
      return Object.keys(obj);
    })));
  };

  /**
   * An object based once plugin (similar to jquery.once, but without the DOM).
   *
   * @param {String} id
   *   A unique identifier.
   * @param {Function} callback
   *   The callback to invoke if the identifier has not yet been seen.
   *
   * @return {Bootstrap}
   */
  Bootstrap.once = function (id, callback) {
    // Immediately return if identifier has already been processed.
    if (this.processedOnce[id]) {
      return this;
    }
    callback.call(this, this.settings);
    this.processedOnce[id] = true;
    return this;
  };

  /**
   * Provide jQuery UI like ability to get/set options for Bootstrap plugins.
   *
   * @param {string|object} key
   *   A string value of the option to set, can be dot like to a nested key.
   *   An object of key/value pairs.
   * @param {*} [value]
   *   (optional) A value to set for key.
   *
   * @returns {*}
   *   - Returns nothing if key is an object or both key and value parameters
   *   were provided to set an option.
   *   - Returns the a value for a specific setting if key was provided.
   *   - Returns an object of key/value pairs of all the options if no key or
   *   value parameter was provided.
   *
   * @see https://github.com/jquery/jquery-ui/blob/master/ui/widget.js
   */
  Bootstrap.option = function (key, value) {
    var options = $.isPlainObject(key) ? $.extend({}, key) : {};

    // Get all options (clone so it doesn't reference the internal object).
    if (arguments.length === 0) {
      return $.extend({}, this.options);
    }

    // Get/set single option.
    if (typeof key === "string") {
      // Handle nested keys in dot notation.
      // e.g., "foo.bar" => { foo: { bar: true } }
      var parts = key.split('.');
      key = parts.shift();
      var obj = options;
      if (parts.length) {
        for (var i = 0; i < parts.length - 1; i++) {
          obj[parts[i]] = obj[parts[i]] || {};
          obj = obj[parts[i]];
        }
        key = parts.pop();
      }

      // Get.
      if (arguments.length === 1) {
        return obj[key] === void 0 ? null : obj[key];
      }

      // Set.
      obj[key] = value;
    }

    // Set multiple options.
    $.extend(true, this.options, options);
  };

  /**
   * Adds a ".noConflict()" helper method if needed.
   *
   * @param {String} id
   *   A jQuery plugin identifier located in $.fn.
   * @param {Function} plugin
   * @param {Function} plugin
   *   A constructor function used to initialize the for the jQuery plugin.
   * @param {Boolean} [noConflict]
   *   Flag indicating whether or not to create a ".noConflict()" helper method
   *   for the plugin.
   */
  Bootstrap.pluginNoConflict = function (id, plugin, noConflict) {
    if (plugin.noConflict === void 0 && (noConflict === void 0 || noConflict)) {
      var old = $.fn[id];
      plugin.noConflict = function () {
        $.fn[id] = old;
        return this;
      };
    }
  };

  /**
   * Replaces a Bootstrap jQuery plugin definition.
   *
   * @param {String} id
   *   A jQuery plugin identifier located in $.fn.
   * @param {Function} callback
   *   A callback function that is immediately invoked and must return a
   *   function that will be used as the plugin constructor.
   * @param {Boolean} [noConflict]
   *   Flag indicating whether or not to create a ".noConflict()" helper method
   *   for the plugin.
   */
  Bootstrap.replacePlugin = function (id, callback, noConflict) {
    // Immediately return if plugin doesn't exist.
    if (typeof $.fn[id] !== 'function') {
      return this.fatal('Specified jQuery plugin identifier does not exist: @id', {'@id':  id});
    }

    // Immediately return if callback isn't a function.
    if (typeof callback !== 'function') {
      return this.fatal('You must provide a valid callback function to replace a jQuery plugin: @callback', {'@callback': callback});
    }

    // Determine existing plugin constructor.
    var constructor = $.fn[id] && $.fn[id].Constructor || $.fn[id];
    var plugin = callback.apply(constructor, [this.settings]);

    // Immediately return if plugin isn't a function.
    if (typeof plugin !== 'function') {
      return this.fatal('Returned value from callback is not a usable function to replace a jQuery plugin "@id": @plugin', {'@id': id, '@plugin': plugin});
    }

    // Add a ".noConflict()" helper method.
    this.pluginNoConflict(id, plugin, noConflict);

    $.fn[id] = plugin;
  };

  /**
   * Simulates a native event on an element in the browser.
   *
   * Note: This is a pretty complete modern implementation. If things are quite
   * working the way you intend (in older browsers), you may wish to use the
   * jQuery.simulate plugin. If it's available, this method will defer to it.
   *
   * @see https://github.com/jquery/jquery-simulate
   *
   * @param {HTMLElement} element
   *   A DOM element to dispatch event on.
   * @param {String} type
   *   The type of event to simulate.
   * @param {Object} [options]
   *   An object of options to pass to the event constructor. Typically, if
   *   an event is being proxied, you should just pass the original event
   *   object here. This allows, if the browser supports it, to be a truly
   *   simulated event.
   */
  Bootstrap.simulate = function (element, type, options) {
    // Defer to the jQuery.simulate plugin, if it's available.
    if (typeof $.simulate === 'function') {
      new $.simulate(element, type, options);
      return;
    }
    var event;
    var ctor;
    for (var name in this.eventMap) {
      if (this.eventMap[name].test(type)) {
        ctor = name;
        break;
      }
    }
    if (!ctor) {
      throw new SyntaxError('Only rudimentary HTMLEvents, KeyboardEvents and MouseEvents are supported: ' + type);
    }
    var opts = {bubbles: true, cancelable: true};
    if (ctor === 'KeyboardEvent' || ctor === 'MouseEvent') {
      $.extend(opts, {ctrlKey: !1, altKey: !1, shiftKey: !1, metaKey: !1});
    }
    if (ctor === 'MouseEvent') {
      $.extend(opts, {button: 0, pointerX: 0, pointerY: 0, view: window});
    }
    if (options) {
      $.extend(opts, options);
    }
    if (typeof window[ctor] === 'function') {
      event = new window[ctor](type, opts);
      element.dispatchEvent(event);
    }
    else if (document.createEvent) {
      event = document.createEvent(ctor);
      event.initEvent(type, opts.bubbles, opts.cancelable);
      element.dispatchEvent(event);
    }
    else if (typeof element.fireEvent === 'function') {
      event = $.extend(document.createEventObject(), opts);
      element.fireEvent('on' + type, event);
    }
    else if (typeof element[type]) {
      element[type]();
    }
  };

  /**
   * Provide a helper method for displaying when something is unsupported.
   *
   * @param {String} type
   *   The type of unsupported object, e.g. method or option.
   * @param {String} name
   *   The name of the unsupported object.
   * @param {*} [value]
   *   The value of the unsupported object.
   */
  Bootstrap.unsupported = function (type, name, value) {
    if (this.settings.dev && console.warn) {
      console.warn(Drupal.formatString('Unsupported Drupal Bootstrap Modal @type: @name -> @value', {
        '@type': type,
        '@name': name,
        '@value': typeof value === 'object' ? JSON.stringify(value) : value
      }));
    }
  };

  /**
   * Add Bootstrap to the global Drupal object.
   *
   * @type {Bootstrap}
   */
  Drupal.bootstrap = Drupal.bootstrap || Bootstrap;

})(window._, window.jQuery, window.Drupal, window.drupalSettings);
;
(function ($, _) {

  /**
   * @class Attributes
   *
   * Modifies attributes.
   *
   * @param {Object|Attributes} attributes
   *   An object to initialize attributes with.
   */
  var Attributes = function (attributes) {
    this.data = {};
    this.data['class'] = [];
    this.merge(attributes);
  };

  /**
   * Renders the attributes object as a string to inject into an HTML element.
   *
   * @return {String}
   *   A rendered string suitable for inclusion in HTML markup.
   */
  Attributes.prototype.toString = function () {
    var output = '';
    var name, value;
    var checkPlain = function (str) {
      return str && str.toString().replace(/&/g, '&amp;').replace(/"/g, '&quot;').replace(/</g, '&lt;').replace(/>/g, '&gt;') || '';
    };
    var data = this.getData();
    for (name in data) {
      if (!data.hasOwnProperty(name)) continue;
      value = data[name];
      if (_.isFunction(value)) value = value();
      if (_.isObject(value)) value = _.values(value);
      if (_.isArray(value)) value = value.join(' ');
      output += ' ' + checkPlain(name) + '="' + checkPlain(value) + '"';
    }
    return output;
  };

  /**
   * Renders the Attributes object as a plain object.
   *
   * @return {Object}
   *   A plain object suitable for inclusion in DOM elements.
   */
  Attributes.prototype.toPlainObject = function () {
    var object = {};
    var name, value;
    var data = this.getData();
    for (name in data) {
      if (!data.hasOwnProperty(name)) continue;
      value = data[name];
      if (_.isFunction(value)) value = value();
      if (_.isObject(value)) value = _.values(value);
      if (_.isArray(value)) value = value.join(' ');
      object[name] = value;
    }
    return object;
  };

  /**
   * Add class(es) to the array.
   *
   * @param {string|Array} value
   *   An individual class or an array of classes to add.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.addClass = function (value) {
    var args = Array.prototype.slice.call(arguments);
    this.data['class'] = this.sanitizeClasses(this.data['class'].concat(args));
    return this;
  };

  /**
   * Returns whether the requested attribute exists.
   *
   * @param {string} name
   *   An attribute name to check.
   *
   * @return {boolean}
   *   TRUE or FALSE
   */
  Attributes.prototype.exists = function (name) {
    return this.data[name] !== void(0) && this.data[name] !== null;
  };

  /**
   * Retrieve a specific attribute from the array.
   *
   * @param {string} name
   *   The specific attribute to retrieve.
   * @param {*} defaultValue
   *   (optional) The default value to set if the attribute does not exist.
   *
   * @return {*}
   *   A specific attribute value, passed by reference.
   */
  Attributes.prototype.get = function (name, defaultValue) {
    if (!this.exists(name)) this.data[name] = defaultValue;
    return this.data[name];
  };

  /**
   * Retrieves a cloned copy of the internal attributes data object.
   *
   * @return {Object}
   */
  Attributes.prototype.getData = function () {
    return _.extend({}, this.data);
  };

  /**
   * Retrieves classes from the array.
   *
   * @return {Array}
   *   The classes array.
   */
  Attributes.prototype.getClasses = function () {
    return this.get('class', []);
  };

  /**
   * Indicates whether a class is present in the array.
   *
   * @param {string|Array} className
   *   The class(es) to search for.
   *
   * @return {boolean}
   *   TRUE or FALSE
   */
  Attributes.prototype.hasClass = function (className) {
    className = this.sanitizeClasses(Array.prototype.slice.call(arguments));
    var classes = this.getClasses();
    for (var i = 0, l = className.length; i < l; i++) {
      // If one of the classes fails, immediately return false.
      if (_.indexOf(classes, className[i]) === -1) {
        return false;
      }
    }
    return true;
  };

  /**
   * Merges multiple values into the array.
   *
   * @param {Attributes|Node|jQuery|Object} object
   *   An Attributes object with existing data, a Node DOM element, a jQuery
   *   instance or a plain object where the key is the attribute name and the
   *   value is the attribute value.
   * @param {boolean} [recursive]
   *   Flag determining whether or not to recursively merge key/value pairs.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.merge = function (object, recursive) {
    // Immediately return if there is nothing to merge.
    if (!object) {
      return this;
    }

    // Get attributes from a jQuery element.
    if (object instanceof $) {
      object = object[0];
    }

    // Get attributes from a DOM element.
    if (object instanceof Node) {
      object = Array.prototype.slice.call(object.attributes).reduce(function (attributes, attribute) {
        attributes[attribute.name] = attribute.value;
        return attributes;
      }, {});
    }
    // Get attributes from an Attributes instance.
    else if (object instanceof Attributes) {
      object = object.getData();
    }
    // Otherwise, clone the object.
    else {
      object = _.extend({}, object);
    }

    // By this point, there should be a valid plain object.
    if (!$.isPlainObject(object)) {
      setTimeout(function () {
        throw new Error('Passed object is not supported: ' + object);
      });
      return this;
    }

    // Handle classes separately.
    if (object && object['class'] !== void 0) {
      this.addClass(object['class']);
      delete object['class'];
    }

    if (recursive === void 0 || recursive) {
      this.data = $.extend(true, {}, this.data, object);
    }
    else {
      this.data = $.extend({}, this.data, object);
    }

    return this;
  };

  /**
   * Removes an attribute from the array.
   *
   * @param {string} name
   *   The name of the attribute to remove.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.remove = function (name) {
    if (this.exists(name)) delete this.data[name];
    return this;
  };

  /**
   * Removes a class from the attributes array.
   *
   * @param {...string|Array} className
   *   An individual class or an array of classes to remove.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.removeClass = function (className) {
    var remove = this.sanitizeClasses(Array.prototype.slice.apply(arguments));
    this.data['class'] = _.without(this.getClasses(), remove);
    return this;
  };

  /**
   * Replaces a class in the attributes array.
   *
   * @param {string} oldValue
   *   The old class to remove.
   * @param {string} newValue
   *   The new class. It will not be added if the old class does not exist.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.replaceClass = function (oldValue, newValue) {
    var classes = this.getClasses();
    var i = _.indexOf(this.sanitizeClasses(oldValue), classes);
    if (i >= 0) {
      classes[i] = newValue;
      this.set('class', classes);
    }
    return this;
  };

  /**
   * Ensures classes are flattened into a single is an array and sanitized.
   *
   * @param {...String|Array} classes
   *   The class or classes to sanitize.
   *
   * @return {Array}
   *   A sanitized array of classes.
   */
  Attributes.prototype.sanitizeClasses = function (classes) {
    return _.chain(Array.prototype.slice.call(arguments))
      // Flatten in case there's a mix of strings and arrays.
      .flatten()

      // Split classes that may have been added with a space as a separator.
      .map(function (string) {
        return string.split(' ');
      })

      // Flatten again since it was just split into arrays.
      .flatten()

      // Filter out empty items.
      .filter()

      // Clean the class to ensure it's a valid class name.
      .map(function (value) {
        return Attributes.cleanClass(value);
      })

      // Ensure classes are unique.
      .uniq()

      // Retrieve the final value.
      .value();
  };

  /**
   * Sets an attribute on the array.
   *
   * @param {string} name
   *   The name of the attribute to set.
   * @param {*} value
   *   The value of the attribute to set.
   *
   * @return {Attributes}
   *
   * @chainable
   */
  Attributes.prototype.set = function (name, value) {
    var obj = $.isPlainObject(name) ? name : {};
    if (typeof name === 'string') {
      obj[name] = value;
    }
    return this.merge(obj);
  };

  /**
   * Prepares a string for use as a CSS identifier (element, class, or ID name).
   *
   * Note: this is essentially a direct copy from
   * \Drupal\Component\Utility\Html::cleanCssIdentifier
   *
   * @param {string} identifier
   *   The identifier to clean.
   * @param {Object} [filter]
   *   An object of string replacements to use on the identifier.
   *
   * @return {string}
   *   The cleaned identifier.
   */
  Attributes.cleanClass = function (identifier, filter) {
    filter = filter || {
      ' ': '-',
      '_': '-',
      '/': '-',
      '[': '-',
      ']': ''
    };

    identifier = identifier.toLowerCase();

    if (filter['__'] === void 0) {
      identifier = identifier.replace('__', '#DOUBLE_UNDERSCORE#', identifier);
    }

    identifier = identifier.replace(Object.keys(filter), Object.keys(filter).map(function(key) { return filter[key]; }), identifier);

    if (filter['__'] === void 0) {
      identifier = identifier.replace('#DOUBLE_UNDERSCORE#', '__', identifier);
    }

    identifier = identifier.replace(/[^\u002D\u0030-\u0039\u0041-\u005A\u005F\u0061-\u007A\u00A1-\uFFFF]/g, '');
    identifier = identifier.replace(['/^[0-9]/', '/^(-[0-9])|^(--)/'], ['_', '__'], identifier);

    return identifier;
  };

  /**
   * Creates an Attributes instance.
   *
   * @param {object|Attributes} [attributes]
   *   An object to initialize attributes with.
   *
   * @return {Attributes}
   *   An Attributes instance.
   *
   * @constructor
   */
  Attributes.create = function (attributes) {
    return new Attributes(attributes);
  };

  window.Attributes = Attributes;

})(window.jQuery, window._);
;
/**
 * @file
 * Theme hooks for the Drupal Bootstrap base theme.
 */
(function ($, Drupal, Bootstrap, Attributes) {

  /**
   * Fallback for theming an icon if the Icon API module is not installed.
   */
  if (!Drupal.icon) Drupal.icon = { bundles: {} };
  if (!Drupal.theme.icon || Drupal.theme.prototype.icon) {
    $.extend(Drupal.theme, /** @lends Drupal.theme */ {
      /**
       * Renders an icon.
       *
       * @param {string} bundle
       *   The bundle which the icon belongs to.
       * @param {string} icon
       *   The name of the icon to render.
       * @param {object|Attributes} [attributes]
       *   An object of attributes to also apply to the icon.
       *
       * @returns {string}
       */
      icon: function (bundle, icon, attributes) {
        if (!Drupal.icon.bundles[bundle]) return '';
        attributes = Attributes.create(attributes).addClass('icon').set('aria-hidden', 'true');
        icon = Drupal.icon.bundles[bundle](icon, attributes);
        return '<span' + attributes + '></span>';
      }
    });
  }

  /**
   * Callback for modifying an icon in the "bootstrap" icon bundle.
   *
   * @param {string} icon
   *   The icon being rendered.
   * @param {Attributes} attributes
   *   Attributes object for the icon.
   */
  Drupal.icon.bundles.bootstrap = function (icon, attributes) {
    attributes.addClass(['glyphicon', 'glyphicon-' + icon]);
  };

  /**
   * Add necessary theming hooks.
   */
  $.extend(Drupal.theme, /** @lends Drupal.theme */ {

    /**
     * Renders a Bootstrap AJAX glyphicon throbber.
     *
     * @returns {string}
     */
    ajaxThrobber: function () {
      return Drupal.theme('bootstrapIcon', 'refresh', {'class': ['ajax-throbber', 'glyphicon-spin'] });
    },

    /**
     * Renders a button element.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button. If it contains one of:
     *   - value: The label of the button.
     *   - context: The context type of Bootstrap button, can be one of:
     *     - default
     *     - primary
     *     - success
     *     - info
     *     - warning
     *     - danger
     *     - link
     *
     * @returns {string}
     */
    button: function (attributes) {
      attributes = Attributes.create(attributes).addClass('btn');
      var context = attributes.get('context', 'default');
      var label = attributes.get('value', '');
      attributes.remove('context').remove('value');
      if (!attributes.hasClass(['btn-default', 'btn-primary', 'btn-success', 'btn-info', 'btn-warning', 'btn-danger', 'btn-link'])) {
        attributes.addClass('btn-' + Bootstrap.checkPlain(context));
      }

      // Attempt to, intelligently, provide a default button "type".
      if (!attributes.exists('type')) {
        attributes.set('type', attributes.hasClass('form-submit') ? 'submit' : 'button');
      }

      return '<button' + attributes + '>' + label + '</button>';
    },

    /**
     * Alias for "button" theme hook.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button.
     *
     * @see Drupal.theme.button()
     *
     * @returns {string}
     */
    btn: function (attributes) {
      return Drupal.theme('button', attributes);
    },

    /**
     * Renders a button block element.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button.
     *
     * @see Drupal.theme.button()
     *
     * @returns {string}
     */
    'btn-block': function (attributes) {
      return Drupal.theme('button', Attributes.create(attributes).addClass('btn-block'));
    },

    /**
     * Renders a large button element.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button.
     *
     * @see Drupal.theme.button()
     *
     * @returns {string}
     */
    'btn-lg': function (attributes) {
      return Drupal.theme('button', Attributes.create(attributes).addClass('btn-lg'));
    },

    /**
     * Renders a small button element.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button.
     *
     * @see Drupal.theme.button()
     *
     * @returns {string}
     */
    'btn-sm': function (attributes) {
      return Drupal.theme('button', Attributes.create(attributes).addClass('btn-sm'));
    },

    /**
     * Renders an extra small button element.
     *
     * @param {object|Attributes} attributes
     *   An object of attributes to apply to the button.
     *
     * @see Drupal.theme.button()
     *
     * @returns {string}
     */
    'btn-xs': function (attributes) {
      return Drupal.theme('button', Attributes.create(attributes).addClass('btn-xs'));
    },

    /**
     * Renders a glyphicon.
     *
     * @param {string} name
     *   The name of the glyphicon.
     * @param {object|Attributes} [attributes]
     *   An object of attributes to apply to the icon.
     *
     * @returns {string}
     */
    bootstrapIcon: function (name, attributes) {
      return Drupal.theme('icon', 'bootstrap', name, attributes);
    }

  });

})(window.jQuery, window.Drupal, window.Drupal.bootstrap, window.Attributes);
;
(function($) {

    "use strict";

    $.fn.mobileMenu = function(options) {

        var settings = $.extend({
            pageSelector: '#page',
            targetWrapper: '.navbar-we-mega-menu',
            accordionMenu: 'false',
            toggledClass: 'toggled'
        }, options);

        if ($(window).width() <= 991) {
            $(settings.targetWrapper).addClass('mobile-main-menu');
            //$(".menu-back").trigger('click');
        }

        var toggleButton = this;

        $(window).resize(function() {
            if ($(window).width() <= 991) {
                $(settings.targetWrapper).addClass('mobile-main-menu');
            } else {
                $(settings.targetWrapper).removeClass('mobile-main-menu');
                $('html, body').css('overflow', '');
                $('html, body').css('height', '');
                $('html, body').css('position', '');
                $(settings.pageSelector).removeClass(settings.toggledClass);
                $(settings.pageSelector).find('.overlay').remove();
                $(settings.pageSelector).css('position', '');
                if(item){
                    item.removeClass('open');
                    item.find('ul').css('display', '');
                }
            }
        });

        this.off('click.mobileMenu');
        this.on('click.mobileMenu', function(e) {
            var wrapper = $(settings.pageSelector);
            if (!wrapper.hasClass(settings.toggledClass)) {
                wrapper.addClass(settings.toggledClass).css('position', 'relative');
                $(settings.targetWrapper).addClass('mobile-main-menu');
                if (wrapper.find('.overlay').length == 0) {
                    var overlay = $('<div class="overlay"></div>');
                    overlay.prependTo(wrapper);
                    overlay.click(function() {
                        toggleButton.trigger('click');
                    });
                    $('html, body').css('overflow', 'hidden');
                    $('html, body').css('btn-close', 'hidden');
                    $('html, body').css('height', '100%');
                    $('html, body').css('position', 'relative');
                }
                if (wrapper.find('.btn-close').length == 0) {
                    var btnClose = $('<span class="btn-close"></span>');
                    btnClose.prependTo(wrapper);

                    $('.btn-close').on('click', function(e) {
                        toggleButton.trigger('click');
                        e.preventDefault();                        
                        return false;
                    });
                }

            } else {
                var overlay = wrapper.find('.overlay');
                wrapper.css({
                    'width': '',
                    'position': ''
                });
                wrapper.removeClass(settings.toggledClass);

                if (overlay.length > 0) {
                    wrapper.find('.btn-close').remove();
                    overlay.remove();
                    $('html, body').css('overflow', '');
                    $('html, body').css('height', '');
                    $('html, body').css('position', '');
                }
            }
            //var topLinksPosition = $(window).height() - $(".we-mega-menu-ul").height() - $(".top-links").height() - 100 - 40 -40;
            var topLinksPosition = $j(window).height() - $j(".we-mega-menu-ul").height() - $j(".top-links").height() - parseInt($j(".mobile-main-menu").css("padding-top"))-$j("header").height()+80;
            var aboveMenuheight = $j(".we-mega-menu-submenu").height();
            if(currWidth < 768) {
                var topLinksPosition = $j(window).height() - $j(".we-mega-menu-ul").height() - $j(".top-links").height() - parseInt($j(".mobile-main-menu").css("padding-top"))-$j("header").height()+80;
                $j(".top-links.in-device").css("bottom", "0");
            }
                
            else
                $j(".top-links.in-device").css("bottom", "0");
            
            if(topLinksPosition < -15)
                topLinksPosition=0;
            $(".top-links").css("margin-top",aboveMenuheight);
            e.preventDefault();
            e.stopPropagation();
        });

        if (settings.accordionMenu == 'true') {
            var menu = $(settings.targetWrapper).find('ul.we-mega-menu-ul').first();
            var item = menu.find('> li[data-submenu=1]');
            var item_active = menu.find('> li[data-submenu=1].active');
            if ($(window).width() <= 991) {
                item_active.addClass('open');
                item_active.find('> ul').css('display', 'block');
            }
            item.click(function() {
                if ($(window).width() <= 991) {
                    var $this = $(this);
                    var $sub_menu_inner = $this.find('> .we-mega-menu-submenu');
                    if (!$this.hasClass('open')) {
                        $(item).not($this).removeClass('open');
                        item.find('> .we-mega-menu-submenu').slideUp();
                        $this.toggleClass('open');
                        if ($this.hasClass('open')) {
                            $sub_menu_inner.slideDown();
                            setTimeout(function() {
                                $(settings.targetWrapper).animate({
                                    scrollTop: $this.offset().top
                                }, 700);
                            }, 500);

                        } else {
                            $sub_menu_inner.slideUp();
                        }
                        return false;
                    }
                }
            });
        } else {
            if ($(window).width() <= 991) {
                $('.navbar-we-mega-menu ul > li.dropdown-menu').each(function() {
                    $(this).find('> a').append('<span class="toggle-switch"></span>');
                    $(this).find('.we-mega-menu-submenu').prepend('<span class="menu-back">Back</span>');
                });
                $('.toggle-switch').on('click', function(e) {
                    e.preventDefault();
                    if ($(this).parent().siblings('.we-mega-menu-submenu').hasClass('active-mmenu')) {
                        $(this).parent().siblings('.we-mega-menu-submenu').removeClass('active-mmenu');
                    } else {
                        $('.we-mega-menu-submenu').removeClass('active-mmenu');
                        $(this).parent().siblings('.we-mega-menu-submenu').addClass('active-mmenu');
                    }
                    //jQuery(".top-links").css("display","none!important");
                    //jQuery(".top-links").fadeOut();
                    var topLinksMargin = jQuery(".we-mega-menu-submenu.active-mmenu .we-mega-menu-row").height() - jQuery(".top-links").prev(".container-fluid").height(); 
                            jQuery(".top-links").css("margin-top", topLinksMargin);
                    jQuery(".navbar-we-mega-menu").addClass("in-side-menu");
                });
                $('.menu-back').on('click', function() {
                    $(this).parents('nav').scrollTop(0);
                    $(this).parent('.we-mega-menu-submenu').removeClass('active-mmenu');
                    jQuery(".top-links").css("display","block!important");
                    //jQuery(".top-links").fadeIn();
                    var topLinksPositionRe = $j(window).height() - $j(".we-mega-menu-ul").height() - $j(".top-links").height() - parseInt($j(".mobile-main-menu").css("padding-top"))-$j("header").height()-30;
                    if(currWidth < 768) {
                        var topLinksPositionRe = $j(".we-mega-menu-ul").height() - $j(".top-links").height() - parseInt($j(".mobile-main-menu").css("padding-top"))- $j("header").height()+40;
                    }
                    jQuery(".top-links").css("margin-top", topLinksPositionRe);
                    jQuery(".navbar-we-mega-menu").removeClass("in-side-menu");
                });
               $j('.we-mega-menu-li').each(function(){
                    $j(this).find('.we-mega-menu-submenu-inner .we-mega-menu-col:eq(0) li').each(function(){
                        if($j(this).hasClass('active')){
                        $j(this).closest('.we-mega-menu-submenu').addClass('active-mmenu'); 
                        //$j(".top-links.in-device").css("display", "none");
                    }
                    });
                });
            }

        }
    };
}(jQuery)); 
;
//adding back to top link functionality
jQuery(window).scroll(function() {
    var height = jQuery(window).scrollTop();
    if (height > 100) {
        jQuery('#back2Top').fadeIn();
    } else {
        jQuery('#back2Top').fadeOut();
    }
});

jQuery(document).ready(function() {
    jQuery("#back2Top").click(function(event) {
        event.preventDefault();
        jQuery("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
    });
    jQuery('.ac.first.active').find('.ac-text').show();
    // jQuery(".banner-image .page_share_icon").click(function(event) {
    //     jQuery(".top-nav-share > a").trigger("click");
    // });

    //hide row when column content is blank
    jQuery('.scroll-table-container table tr').filter(function() {
        return jQuery(this).children().filter(function() {
            return jQuery.trim(jQuery(this).html()) !== '';
        }).length === 0;
    }).hide();

    /* Menu hover effect */
    var hoverVarLevel1;
    $j(".we-mega-menu-col ul li.level-1").hover(function(e){
        var cur = $j(this);
        clearTimeout(hoverVarLevel1)
        if (cur.hasClass('dropdown-menu'))
        {
        hoverVarLevel1 = setTimeout(function(){
        $j('.we-mega-menu-col ul li.dropdown-menu').removeClass('showchildDiv');
        cur.addClass('showchildDiv');
        }, 400);
        }
        else
        {
            hoverVarLevel1 = setTimeout(
                function () {
                    $j('.we-mega-menu-col ul li.dropdown-menu').removeClass('showchildDiv');
                }, 400)
        }

    });

    $j("header").hover(function(e){
        $j('.we-mega-menu-col ul li.dropdown-menu').removeClass('showchildDiv');
     });

});

jQuery('.owl-thumbs__scrolltoBottom').detach().appendTo('body .owl-thumbs').last();

jQuery(".we-mega-menu-ul > li.dropdown-menu > a").each(function() {
    var linktext = jQuery(this).html();
    var subtitleText = "<div class='subtitle'><sapn>"+linktext+"</span></div>";
    jQuery(this).next().find('.we-mega-menu-submenu-inner').prepend(subtitleText);
});

/****************Menu show hide on scroll*****************/

var winScroll,headerHeight, winFlag = 0,winPos = 0;
jQuery(window).on('scroll', function() {
headerHeight = jQuery('.header').outerHeight();
    winScroll = jQuery(this).scrollTop();

    if (winScroll > winPos && winScroll > 120) {
        jQuery('.header').addClass('menudown').css('top',-headerHeight + 'px');
        jQuery('.header').removeClass('menuup');
    }
     else {
           jQuery('.header').removeClass('menudown').css('top',0);
        jQuery('.header').addClass('menuup');
    }
    winPos = winScroll;
    if(winScroll == 0){
        jQuery('.header').removeClass('menuup');
    }
});

jQuery(".view-latest-news-homepage .new-item").click(function() {
  window.location = jQuery(this).find("a").attr("href");
  return false;
});


/* For homepage banner */
// var windowwth = jQuery(window).width();
// if(windowwth < 767){
//     jQuery('.view-banner-header .owl-thumbs .owl-thumb-item').append().after('<b></b>');

//     // investor news
//     jQuery('.feat-wrp-content--full').detach().appendTo('.feat-wrp-img--full');
// }

/****************share link*****************/
// jQuery('.page_share_icon').on('click', function(){
//     jQuery('.banner-image__shareWrapper__links').slideToggle();
// });
;
/* © InvestisDigital, All rights reserved, v1.1.1 */
var CookieConsent = function CookieConsent(_ref) {
  var _this = this;

  var startTitle = _ref.startTitle,
      startDescription = _ref.startDescription,
      acceptAllBtnText = _ref.acceptAllBtnText,
      saveBtnText = _ref.saveBtnText,
      title = _ref.title,
      _ref$excludePages = _ref.excludePages,
      excludePages = _ref$excludePages === void 0 ? false : _ref$excludePages,
      cookieCategory = _ref.categories,
      cookieName = _ref.cookieName,
      _ref$expiry = _ref.expiry,
      expiry = _ref$expiry === void 0 ? 90 : _ref$expiry,
      _ref$modalClassName = _ref.modalClassName,
      modalClassName = _ref$modalClassName === void 0 ? 'ccModal' : _ref$modalClassName,
      _ref$beforeInit = _ref.beforeInit,
      beforeInit = _ref$beforeInit === void 0 ? function () {} : _ref$beforeInit,
      _ref$onPreferenceChan = _ref.onPreferenceChange,
      onPreferenceChange = _ref$onPreferenceChan === void 0 ? function () {} : _ref$onPreferenceChan,
      cookieSettingBtnText = _ref.cookieSettingBtnText,
      noticeText = _ref.noticeText,
      noticeButtonText = _ref.noticeButtonText,
      legacyCookieName = _ref.legacyCookieName,
      _ref$debug = _ref.debug,
      debug = _ref$debug === void 0 ? false : _ref$debug;
  this.categories = {};

  this.version = function () {
    return '1.1.1';
  };

  var getCookies = function getCookies() {
    var cookieStrings = document.cookie.split(';');
    var cookies = [];
    var regex = new RegExp('^\\s*([^=]+)\\s*=\\s*(.*?)$');

    for (var i = 0; i < cookieStrings.length; i++) {
      var cookieStr = cookieStrings[i];
      var match = regex.exec(cookieStr);

      if (match === null) {
        continue;
      }

      cookies.push({
        name: match[1],
        value: match[2]
      });
    }

    return cookies;
  };

  var getCookie = function getCookie(name) {
    var cookies = getCookies();

    for (var i = 0; i < cookies.length; i++) {
      if (cookies[i].name === name) {
        return cookies[i];
      }
    }

    return null;
  };

  var deleteCookie = function deleteCookie(name, path, domain) {
    var cookieString = "".concat(name, "=; Max-Age=-99999999;").concat(path !== undefined ? " path=".concat(path, ";") : ' path=/;');

    if (domain !== undefined) {
      document.cookie = "".concat(cookieString, " domain=").concat(domain, ";");
      return;
    }

    document.cookie = cookieString;
    document.cookie = "".concat(cookieString, " domain=.").concat(location.hostname, ";");
    document.cookie = "".concat(cookieString, " domain=.").concat(location.hostname.split('.').slice(-2).join('.'), ";");
  };

  var setCookie = function setCookie(name, value, days) {
    var expires = '';

    if (days) {
      var date = new Date();
      date.setTime(date.getTime() + days * 24 * 60 * 60 * 1000);
      expires = '; expires=' + date.toUTCString();
    }

    document.cookie = name + '=' + (value || '') + expires + '; path=/';
  };

  var isCCEnabled = function isCCEnabled() {
    if (getCookie(cookieName) == null) {
      if (typeof __CCEnabled === 'undefined' || __CCEnabled === true) {
        return true;
      } else {
        return false;
      }
    } else {
      return JSON.parse(getCookie(cookieName).value)[2].__CCEnabled;
    }
  };

  var isCNAccepted = function isCNAccepted() {
    if (getCookie(cookieName) != null) {
      if (debug) console.log('isCNAccepted(): ', JSON.parse(getCookie(cookieName).value)[1].accepted);
      return JSON.parse(getCookie(cookieName).value)[1].accepted;
    }

    if (debug) console.log('isCNAccepted(): ', false);
    return false;
  };

  if (legacyCookieName !== '') {
    if (debug) console.log('Deleting legacy cookie: ', legacyCookieName);
    deleteCookie(legacyCookieName);
  }

  var userCookiePopupClose = function userCookiePopupClose() {
    if (debug) console.log('Binding User click on background');

    if (getCookie(cookieName) !== null) {
      document.querySelector('#__cookieWrapper .ccBg').addEventListener('click', function () {
        document.querySelector('#__cookieWrapper').innerHTML = '';
      }, false);

      document.onkeydown = function (evt) {
        evt = evt || window.event;
        var isEscape = false;

        if ('key' in evt) {
          isEscape = evt.key === 'Escape' || evt.key === 'Esc';
        } else {
          isEscape = evt.keyCode === 27;
        }

        if (isEscape) {
          document.querySelector('#__cookieWrapper').innerHTML = '';
        }
      };
    } else {
      if (debug) console.log('User Click Not binned as Cookie Consent is not yet accepted even once.');
    }
  };

  beforeInit();

  var init = function init() {
    var cookieConsentType = '';
    var excluded = false;

    if (isCCEnabled()) {
      var __currURL = window.location.pathname + window.location.search;

      if (excludePages) {
        excludePages.forEach(function (value) {
          _this.show = function () {
            startBox();
          };

          if (__currURL.indexOf(value) > -1) {
            excluded = true;
          }

          cookieConsentType = '__cookieWrapper';
        });
      }
    } else {
      cookieConsentType = '__cookieNoticeWrapper';
    }

    var _element = document.createElement('div');

    _element.id = cookieConsentType;
    _element.className = cookieConsentType;
    document.querySelector('body').prepend(_element);

    if (cookieConsentType !== '' && !excluded) {
      getCookie(cookieName) == null ? startBox() : cookiePresent();
    }
  };

  var cookiePresent = function cookiePresent() {
    if (!isCCEnabled()) {
      if (!isCNAccepted()) {
        var _element = document.getElementById('__cookieNoticeWrapper');

        _element.innerHTML = '<div class="__cookieNotice"><div class="container-fluid"><p>' + noticeText + '</p> <input name="cookieAgree" class="cookieAgree ccBtn" value="' + noticeButtonText + '" type="button"></div></div>';
      }
    }
  };

  var basicPopUp = function basicPopUp(context, title, description, btn) {
    var _element = document.querySelector('#__cookieWrapper');

    _element.innerHTML = '<div class="cookieModal"><div class="ccBg"></div><div class="' + modalClassName + '"></div></div>';
    _element = document.createElement('div');
    _element.className = 'ccHeader';
    _element.innerHTML = '<p class="title">' + title + '</p>';
    document.getElementsByClassName(modalClassName)[0].append(_element);
    _element = document.createElement('div');
    _element.className = 'ccBody';

    if (description !== '') {
      _element.innerHTML = '<p>' + description + '</p>';
    }

    document.getElementsByClassName(modalClassName)[0].append(_element);
    _element = document.createElement('div');
    _element.className = 'ccFooter';
    _element.innerHTML = '<button id="cc-saveAll-' + context + 'Btn" class="ccBtn ccBtnAcceptAll" type="button">' + acceptAllBtnText + '</button>' + btn;
    document.getElementsByClassName(modalClassName)[0].append(_element);
  };

  var startBox = function startBox() {
    var btn = '<button id="cc-openBoxBtn" class="ccBtn ccBtnOpenBox" type="button">' + cookieSettingBtnText + '</button>';
    basicPopUp('start', startTitle, startDescription, btn);
    btn = document.querySelector('#__cookieWrapper .ccBtnOpenBox');
    btn.addEventListener('click', function () {
      detailsBox();
    }, false);
    userCookiePopupClose();
  };

  var detailsBox = function detailsBox() {
    var btn = '<button class="ccBtn ccBtnSave" type="button">' + saveBtnText + '</button>';
    basicPopUp('details', title, '', btn);
    var _categories = '';
    _this.categories = {};
    var cookieFound = false;

    if (getCookie(cookieName) !== null) {
      cookieFound = true;
      _this.categories = JSON.parse(getCookie(cookieName).value)[0];
    }

    cookieCategory.forEach(function (i) {
      if (!cookieFound) {
        var state = false;

        if (i.required) {
          state = true;
        } else {
          state = i.defaultState;
        }

        _this.categories[i.name] = state;
      }

      _categories += appItem(i);
    });

    var _element = document.createElement('div');

    _element.className = 'ccCategories';
    _element.innerHTML = _categories;
    document.querySelector('.ccBody').append(_element);
    var setCustomPreferenceBtn = document.querySelector('#__cookieWrapper .ccBtnSave');
    setCustomPreferenceBtn.addEventListener('click', function () {
      cookieCategory.forEach(function (i) {
        if (document.querySelector('#app-item-' + i.name) !== null) {
          _this.categories[i.name] = document.querySelector('#app-item-' + i.name).checked;
        }
      });
      setCookie(cookieName, '[' + JSON.stringify(_this.categories) + ',{"accepted":' + isCNAccepted() + '},{"__CCEnabled":' + isCCEnabled() + '}]', expiry);
      execute();
      document.querySelector('#__cookieWrapper').innerHTML = '';
    }, false);
    var accordions = document.getElementsByClassName('appTitleClick');

    for (var i = 0; i < accordions.length; i++) {
      accordions[i].onclick = function () {
        this.classList.toggle('is-open');
        var content = this.parentElement.nextElementSibling;

        if (content.style.display !== 'block') {
          content.style.display = 'block';
        } else {
          content.style.display = 'none';
        }
      };
    }

    userCookiePopupClose();
  };

  var appItem = function appItem(item) {
    var first = '<div class="ccApp"><div class="appTitle" id="app-item-' + item.name + '-title"><a href="javascript:;" class="leftPart appTitleClick"><p class="ccAppTitle">' + item.title + '</p></a><div class="rightPart">';

    if (item.required) {
      first += '<span class="ccRequired">' + item.requiredText + '</span></div></div>';
    } else {
      var checked = _this.categories[item.name] === true ? 'checked' : '';
      first += '<input id="app-item-' + item.name + '"' + checked + ' class="ccAppInput" aria-describedBy="app-item-' + item.name + '-description" type="checkbox"><label for="app-item-' + item.name + '" class="ccApp-label"><span class="switch"><div class="slider round active"></div></span></label></div></div>';
    }

    first += '<div class="appDescription" id="app-item-' + item.name + '-description"><p class="ccAppDescription">' + item.description + '</p></div></div>';
    return first;
  };

  var execute = function execute(acceptAll) {
    if (acceptAll) {
      cookieCategory.forEach(function (i) {
        _this.categories[i.name] = true;
      });
      setCookie(cookieName, '[' + JSON.stringify(_this.categories) + ',{"accepted":' + isCNAccepted() + '},{"__CCEnabled":' + isCCEnabled() + '}]', expiry);
    } else if (getCookie(cookieName) !== null) {
      _this.categories = JSON.parse(getCookie(cookieName).value)[0];
    } else {
      cookieCategory.forEach(function (i) {
        var state = false;

        if (i.required) {
          state = true;
        } else {
          state = i.defaultState;
        }

        _this.categories[i.name] = state;
      });
    }

    for (var key in _this.categories) {
      if (_this.categories[key]) {
        document.querySelectorAll('script[data-name=' + key + ']').forEach(function (i) {
          if (!i.hasAttribute('data-processed')) {
            if (i.innerHTML.trim() !== '') {
              eval(i.innerHTML);
            }

            if (i.src !== '') {
              var script = document.createElement('script');
              script.type = 'text/javascript';
              script.src = i.src;
              i.insertAdjacentElement('afterend', script);
            }

            i.setAttribute('data-processed', 'true');
          }
        });
      }
    }

    setTimeout(function () {
      onPreferenceChange();
    }, 500);
  };

  document.addEventListener('DOMContentLoaded', function (event) {
    if (isCCEnabled()) {
      document.querySelector('body').classList += ' __CCEnabled';
      init();
      execute();
    } else {
      init();
      execute(true);
    }
  });

  if (isCCEnabled()) {
    execute();
  } else {
    execute(true);
  }

  document.addEventListener('click', function (event) {
    if (event.target.className.split(' ').indexOf('ccBtnAcceptAll') > -1) {
      execute(true);
      document.querySelector('#__cookieWrapper').innerHTML = '';
    }

    if (event.target.className.split(' ').indexOf('__CookieSetting') > -1) {
      event.preventDefault();

      if (isCCEnabled()) {
        window.CookieConsent.show();
      }
    }

    if (event.target.className.split(' ').indexOf('ccAppTitle') > -1) {
      event.preventDefault();
    }

    if (event.target.className.split(' ').indexOf('cookieAgree') > -1) {
      document.querySelector('#__cookieNoticeWrapper').innerHTML = '';
      var cookieValue = JSON.parse(getCookie(cookieName).value)[0];
      setCookie(cookieName, '[' + JSON.stringify(cookieValue) + ',{"accepted": true}, {"__CCEnabled":' + isCCEnabled() + '}]', expiry);
    }
  }, false);
};

if (typeof NodeList !== 'undefined' && NodeList.prototype && !NodeList.prototype.forEach) {
  NodeList.prototype.forEach = Array.prototype.forEach;
}

(function (arr) {
  arr.forEach(function (item) {
    if (item.hasOwnProperty('append')) {
      return;
    }

    Object.defineProperty(item, 'append', {
      configurable: true,
      enumerable: true,
      writable: true,
      value: function append() {
        var argArr = Array.prototype.slice.call(arguments);
        var docFrag = document.createDocumentFragment();
        argArr.forEach(function (argItem) {
          var isNode = argItem instanceof Node;
          docFrag.appendChild(isNode ? argItem : document.createTextNode(String(argItem)));
        });
        this.appendChild(docFrag);
      }
    });
  });
})([Element.prototype, Document.prototype, DocumentFragment.prototype]);

(function (arr) {
  arr.forEach(function (item) {
    if (item.hasOwnProperty('prepend')) {
      return;
    }

    Object.defineProperty(item, 'prepend', {
      configurable: true,
      enumerable: true,
      writable: true,
      value: function prepend() {
        var argArr = Array.prototype.slice.call(arguments);
        var docFrag = document.createDocumentFragment();
        argArr.forEach(function (argItem) {
          var isNode = argItem instanceof Node;
          docFrag.appendChild(isNode ? argItem : document.createTextNode(String(argItem)));
        });
        this.insertBefore(docFrag, this.firstChild);
      }
    });
  });
})([Element.prototype, Document.prototype, DocumentFragment.prototype]);;
/* © InvestisDigital, All rights reserved, v1.1.1 */
var __CookieConsentConfig = {
  startTitle: 'This site uses cookies to improve your experience.',
  startDescription: 'We use cookies to personalize content and to analyze our traffic. We also share information about your use of our site with our analytics partners. View our <a target="_blank" title="Opens in a new window" href="/cookie-notice">cookies page</a>.',
  acceptAllBtnText: 'Accept all cookies',
  cookieSettingBtnText: 'Change cookie preferences',
  saveBtnText: 'Set custom preferences',
  title: 'Cookie Preferences',
  expiry: 90,
  cookieName: '__CookieConsentV111',
  legacyCookieName: '__CookieConsent',
  excludePages: ['/cookie-notice'],
  categories: [{
    name: 'necessaryCookie',
    title: 'Strictly necessary cookies',
    description: 'These cookies allow the website to remember choices you make and provide enhanced, more personal features. The information these cookies collect may be anonymized and they cannot track your browsing activity on other websites.',
    required: true,
    requiredText: 'Required'
  }, {
    name: 'optional',
    title: 'Optional cookies',
    description: 'We\'d like to set Analytics cookies to help us to improve our website by collecting and reporting information on how you use it. For more information on how these cookies work please see our <a target="_blank" title="Opens in a new window" href="/cookie-notice">cookies notice</a>. The cookies collect information in an anonymous form.',
    required: false,
    defaultState: false
  }],
  noticeText: 'This site uses cookies. To see how cookies are used, please review our <a href="/cookie-notice">cookie notice</a>. If you agree to our use of cookies, please continue to use our site.',
  noticeButtonText: 'Continue'
};
window.CookieConsent = new CookieConsent(__CookieConsentConfig);
;
/**
 * magicHeight 1.0.0
 *
 */

;(function ($) {
    'use strict';

    var pluginName = 'magicHeight',
        defaults = {
            itemClass: '.item',
            line: 'auto',
            resize: true,
            load: true
        };

    var Plugin = function (element, options) {
        this.element = element;
        this.options = $.extend({}, defaults, options);
        this.init();
    };

    Plugin.prototype = {
        init: function () {
            this.elements = this.element.find(this.options.itemClass);

            this._setHeight();

            if (this.options.resize)
                $(window).on('resize', $.proxy(this._setHeight, this));

            if (this.options.onload)
                $(window).on('load', $.proxy(this._setHeight, this));
        },

        update: function () {
            this.elements = this.element.find(this.options.itemClass);
            this._setHeight();
        },

        _getElementsInLine: function () {
            var elements_in_line;

            if (this.options.line === 'all') {
                elements_in_line = this.elements.length;
            } else if (this.options.line === 'number' && this.options.line % 1 === 0 && this.options.line > 0) {
                elements_in_line = this.options.line;
            } else {
                var last_top_offset = this.elements.first().offset().top,
                    i = 0;

                this.elements.each(function () {
                    var el_offset_top = $(this).offset().top;

                    if (last_top_offset === el_offset_top) {
                        i++;
                        last_top_offset = el_offset_top;
                    } else {
                        return false;
                    }
                });

                elements_in_line = i;
            }

            return elements_in_line
        },

        _setHeight: function () {
            var self = this,
                set_height = 0,
                elements_in_line = this._getElementsInLine();

            this.elements.css('height', '').each(function (i) {
                var item = $(this),
                    item_h = item.height();

                if (item_h > set_height)
                    set_height = item_h;

                //last element in row
                if (i > 0 && i % elements_in_line === elements_in_line - 1) {
                    //update elements in current row
                    self.elements.slice(i - elements_in_line + 1, i + 1).height(set_height);
                    //reset set height
                    set_height = 0;

                    //last element
                } else if (i === self.elements.length - 1) {
                    var index = i % elements_in_line + 1;
                    //last elements in last row
                    self.elements.slice(-index).height(set_height);
                    set_height = 0;
                }
            });
        }
    };


    $.fn[pluginName] = function (options) {
        if (options === undefined || typeof options === 'object') {
            this.each(function () {
                $(this).data('plugin_' + pluginName, new Plugin($(this), options));
            });
        } else if (typeof options === 'string' && options[0] !== '_' && options !== 'init') {
            var returns;

            this.each(function () {
                var instance = $(this).data('plugin_' + pluginName);

                if (instance instanceof Plugin && typeof instance[options] === 'function')
                    returns = instance[options].apply(instance, Array.prototype.slice.call(arguments, 1));
            });

            return returns !== undefined ? returns : this;
        }

        return this;
    };
})(jQuery);;
    var totalItems = jQuery('.carousel-item.item').length;
    var currentIndex = jQuery('div.item.active').index() + 1;

    jQuery('.carousel').on('slid.bs.carousel', function() {
        currentIndex = jQuery('div.active').index() + 1;
      jQuery('.slide-num').html(''+currentIndex+'/'+totalItems+'');
    });

jQuery(document).ready(function() {

  //jQuery(".we-mega-menu-li[data-id='/member/login']").hide();

    if(jQuery(".product-login-section").length > 0 && !jQuery("body").hasClass("adminimal-admin-toolbar")){
      if(jQuery(".product-loggedin").length > 0){
         jQuery(".login-register-wrapper").hide();
         jQuery(".product-login-section:not(.layout-flexible)").hide();
      }
    }
    

    var totalItems = jQuery('.carousel-item.item').length;
    var currentIndex = jQuery('div.item.active').index() + 1;
    jQuery('.slide-num').html(''+currentIndex+'/'+totalItems+'');

    var swiper = new Swiper('.swiper-container-keyfacts', {
    slidesPerView: 4,
    spaceBetween: 30,
    slidesPerGroup: 1,
    loop: false,
    loopFillGroupWithBlank: true,
    breakpoints: {
      480: {
        slidesPerView: 1,
        slidesPerGroup: 1,
      },
      768: {
        slidesPerView: 2,
        slidesPerGroup: 2,
      },
    },
     keyboard: {
       enabled: true,
     },
     pagination: {
       el: '.swiper-pagination-1',
       clickable: true,
     },
     navigation: {
       nextEl: '.swiper-button-next-1',
       prevEl: '.swiper-button-prev-1',
     },
   });

   if (jQuery('.view-photo-gallery-slider .views-field-field-image-slide .field-content').lengt>0){
    jQuery('.view-photo-gallery-slider .views-field-field-image-slide .field-content').slick({
         infinite: true,
         slidesToShow: 3,
         slidesToScroll: 1,
         dots: true,
         responsive: [
           {
             breakpoint: 1024,
             settings: {
               slidesToShow: 2,
               slidesToScroll: 1,
               infinite: true,
               dots: true
             }
           },
           {
             breakpoint: 600,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           },
           {
             breakpoint: 480,
             settings: {
               slidesToShow: 1,
               slidesToScroll: 1
             }
           }

         ]
     });
   }

      loginPageBodyWrapper(); 
      Drupal.behaviors.tablecomponent = {
          attach: function(context, settings) {
            loginPageBodyWrapper();                             
          }
      } 

   }); 
   // Ready End
   
   function loginPageBodyWrapper(){
   
   
   jQuery('.product-login-section .nav-tabs-wrapper ul li').first().find('a').attr('id', 'login-section').text(function(_,text){ 
     return text + "Login"; 
   });
   
   jQuery('.product-login-section .nav-tabs-wrapper ul li').last().find('a').attr('id', 'register-section').text(function(_,text){ 
       return text + "Register"; 
   });
   
   jQuery('.register-section').on('click', function(){
     jQuery('#register-section').trigger('click');
     jQuery('html, body').animate({
         scrollTop: jQuery("#register-section").offset().top - '100'
     }, 800);
   });
   
   jQuery('.login-section').on('click', function(){
     jQuery('#login-section').trigger('click');
     jQuery('html, body').animate({
         scrollTop: jQuery("#login-section").offset().top - '100'
     }, 800);
   }); 
};


jQuery('.rotation-box--wrap').on('click', function(){
  jQuery(this).toggleClass('flipped');
});

// Roating Boxes
// $(function () {

//   var toolbox = $('.rotation-boxes--wrapper .rotation-box--wrap .boxes--content p'),
//               height = toolbox.height(),
//               scrollHeight = toolbox.get(0).scrollHeight;

//           toolbox.off("mousewheel").on("mousewheel", function (event) {
//   var blockScrolling = this.scrollTop === scrollHeight - height && event.deltaY < 0 || this.scrollTop === 0 && event.deltaY > 0;
//   return !blockScrolling;
//           });

//   });


jQuery(document).ready(function(e) {

  $j(".ac.first").removeClass("active");
  $j(".ac:first .ac-text").hide();
 


	jQuery('img[usemap]').rwdImageMaps();

	jQuery('area').on('click', function() {
		alert(jQuery(this).attr('alt') + ' clicked');
		return false;
  });

  /* applying the js for the par-pacific-corp-v2.u-did2-e1 */

  $j(".ac-text").hide();
  $j(".ac.active .ac-text").show();

  /* applying the js for the par-pacific-corp-v2.u-did2-e1 */




$j(".view-content .nav-tabs-horizontal ul.nav li").each(function(){
    var href = $j(this).children().attr("href");
    $j(this).children().attr("id",href);
    $j(this).children().attr("href",href+"#yearsTabs");
});
$j(".view-content .nav-tabs-horizontal ul.nav").attr("id", "yearsTabs");

if(window.location.hash == "#yearsTabs") {
  $j('html, body').animate({
      scrollTop: $j("#yearsTabs").offset().top
  }, 1000);
} else {
  // Fragment doesn't exist
}

});

/****************************/
/*** For Multi Quote Carousel Module ***/
/****************************/
if($j('.multiple-quote-carousel-component').length){
  $j('.multiple-quote-carousel-component').each(function(){
    var modID=$j(this).attr('id');
    $j('#'+ modID +' .mutli-quote-carousel-content').carousel({
      interval: 7000,
      pause : true
    });
    $j('#'+ modID +' .mutli-quote-carousel-img').carousel({
      interval: 7000,
      pause : true
    });

    $j('#'+ modID +' .prevLink').click(function(){
      $j('#'+ modID +' .mutli-quote-carousel-content').carousel("prev");
      $j('#'+ modID +' .mutli-quote-carousel-img').carousel("prev");     
    });

    $j('#'+ modID +' .nextLink').click(function(){
      $j('#'+ modID +' .mutli-quote-carousel-content').carousel("next");
      $j('#'+ modID +' .mutli-quote-carousel-img').carousel("next");
    });
  });
}

function setContentwrapper(){
};
jQuery( document ).ready(function() {
  jQuery('.image-with-white-background-signpost--wrapper').magicHeight({
    itemClass: '.signpost-wrap'
  });
});
;
/**
 * Created by nirbhav.gupta on 30-06-2015.
 */
var file_path_loc;
var sizeIn;
jQuery(function() {
    
    jQuery('#maincontentWrapper a[href]').each(function() {
       if((C = jQuery(this).attr('href').toLowerCase().match(/[.](doc|xls|xlsx|pdf|pptx|docx|ppt)$/))) {
           jQuery(this).addClass(C[1]);
           jQuery(this).addClass('filelink');
       }
    });
    
    jQuery(document).on("mouseover","a.filelink", function() 
    { 
            if(jQuery(this).hasClass("ext-file")){
                return false;
            }
            var file_loc = jQuery(this).attr("href");
            var file_type = jQuery(this).attr("href").split('.').pop();
            var arr = [ "pdf", "doc", "docx", "xlsx", "xls", "ppt", "pptx", "PDF" ];
            var sizeinfo;
            if( jQuery.inArray( file_type , arr ) !== -1 ){
                var size = jQuery(this).prop('type');
                if( size != '' ){
                    var file_size = size.split('=');
                    if( file_size[1] > 900000 ){
                         sizeIn = fileSize(file_size[1],'mb');
                    }else{
                         sizeIn = fileSize(file_size[1],'kb');
                    }

                    var pathname = window.location.pathname;
                    var pieces = pathname.split("/");
                    
                    var msg = file_type.toUpperCase()+', '+ sizeIn +', opens in a new window';
                    jQuery(this).attr('title',msg);
                }else {
                    if (file_path_loc != file_loc ) {
                        file_path_loc = file_loc;
                        var req = new XMLHttpRequest();
                        req.open('HEAD', file_loc, false);
                        req.send(null);
                        var headers_size = req.getResponseHeader("Content-Length");
                        sizeinfo = headers_size;
                        if (sizeinfo > 900000) {
                             sizeIn = fileSize(sizeinfo, 'mb');
                        } else {
                             sizeIn = fileSize(sizeinfo, 'kb');
                        }
                        var pathname = window.location.pathname;
                        var pieces = pathname.split("/");                        
                        var msg = file_type.toUpperCase()+', '+ sizeIn +', opens in a new window';
                        jQuery(this).attr('title', msg);
                        jQuery(this).attr('target', '_blank');
                    }else{
                        var pathname = window.location.pathname;
                        var pieces = pathname.split("/");
                        
                        var msg = file_type.toUpperCase()+', '+ sizeIn +', opens in a new window';
                        jQuery(this).attr('title', msg);
                        jQuery(this).attr('target', '_blank');
                    }
                }
            }
        });



        
});


function fileSize(bytes, unit) {

    if ((!unit && bytes >= 1 << 30) || unit == "GB")
        return number_format(bytes / (1 << 30), 2) + "GB";

    if ((!unit && bytes >= 1 << 20) || unit == "mb")
        return number_format(bytes / (1 << 20), 1) + "MB";

    if ((!unit && bytes >= 1 << 10) || unit == "kb")
        return number_format(bytes / (1 << 10), 0) + "KB";

    return number_format(bytes) + " bytes";
}

function number_format(number, decimals, dec_point, thousands_sep) {
    //  discuss at: http://phpjs.org/functions/number_format/
    // original by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // improved by: davook
    // improved by: Brett Zamir (http://brett-zamir.me)
    // improved by: Brett Zamir (http://brett-zamir.me)
    // improved by: Theriault
    // improved by: Kevin van Zonneveld (http://kevin.vanzonneveld.net)
    // bugfixed by: Michael White (http://getsprink.com)
    // bugfixed by: Benjamin Lupton
    // bugfixed by: Allan Jensen (http://www.winternet.no)
    // bugfixed by: Howard Yeend
    // bugfixed by: Diogo Resende
    // bugfixed by: Rival
    // bugfixed by: Brett Zamir (http://brett-zamir.me)
    //  revised by: Jonas Raoni Soares Silva (http://www.jsfromhell.com)
    //  revised by: Luke Smith (http://lucassmith.name)
    //    input by: Kheang Hok Chin (http://www.distantia.ca/)
    //    input by: Jay Klehr
    //    input by: Amir Habibi (http://www.residence-mixte.com/)
    //    input by: Amirouche
    //   example 1: number_format(1234.56);
    //   returns 1: '1,235'
    //   example 2: number_format(1234.56, 2, ',', ' ');
    //   returns 2: '1 234,56'
    //   example 3: number_format(1234.5678, 2, '.', '');
    //   returns 3: '1234.57'
    //   example 4: number_format(67, 2, ',', '.');
    //   returns 4: '67,00'
    //   example 5: number_format(1000);
    //   returns 5: '1,000'
    //   example 6: number_format(67.311, 2);
    //   returns 6: '67.31'
    //   example 7: number_format(1000.55, 1);
    //   returns 7: '1,000.6'
    //   example 8: number_format(67000, 5, ',', '.');
    //   returns 8: '67.000,00000'
    //   example 9: number_format(0.9, 0);
    //   returns 9: '1'
    //  example 10: number_format('1.20', 2);
    //  returns 10: '1.20'
    //  example 11: number_format('1.20', 4);
    //  returns 11: '1.2000'
    //  example 12: number_format('1.2000', 3);
    //  returns 12: '1.200'
    //  example 13: number_format('1 000,50', 2, '.', ' ');
    //  returns 13: '100 050.00'
    //  example 14: number_format(1e-8, 8, '.', '');
    //  returns 14: '0.00000001'

    number = (number + '')
        .replace(/[^0-9+\-Ee.]/g, '');
    var n = !isFinite(+number) ? 0 : +number,
        prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
        sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
        dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
        s = '',
        toFixedFix = function(n, prec) {
            var k = Math.pow(10, prec);
            return '' + (Math.round(n * k) / k)
                    .toFixed(prec);
        };
    // Fix for IE parseFloat(0.55).toFixed(0) = 0;
    s = (prec ? toFixedFix(n, prec) : '' + Math.round(n))
        .split('.');
    if (s[0].length > 3) {
        s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
    }
    if ((s[1] || '')
            .length < prec) {
        s[1] = s[1] || '';
        s[1] += new Array(prec - s[1].length + 1)
            .join('0');
    }
    return s.join(dec);
}
;
/*
* rwdImageMaps jQuery plugin v1.5
*
* Allows image maps to be used in a responsive design by recalculating the area coordinates to match the actual image size on load and window.resize
*
* Copyright (c) 2013 Matt Stow
* https://github.com/stowball/jQuery-rwdImageMaps
* http://mattstow.com
* Licensed under the MIT license
*/
;(function(a){a.fn.rwdImageMaps=function(){var c=this;var b=function(){c.each(function(){if(typeof(a(this).attr("usemap"))=="undefined"){return}var e=this,d=a(e);a("<img />").on("load",function(){var g="width",m="height",n=d.attr(g),j=d.attr(m);if(!n||!j){var o=new Image();o.src=d.attr("src");if(!n){n=o.width}if(!j){j=o.height}}var f=d.width()/100,k=d.height()/100,i=d.attr("usemap").replace("#",""),l="coords";a('map[name="'+i+'"]').find("area").each(function(){var r=a(this);if(!r.data(l)){r.data(l,r.attr(l))}var q=r.data(l).split(","),p=new Array(q.length);for(var h=0;h<p.length;++h){if(h%2===0){p[h]=parseInt(((q[h]/n)*100)*f)}else{p[h]=parseInt(((q[h]/j)*100)*k)}}r.attr(l,p.toString())})}).attr("src",d.attr("src"))})};a(window).resize(b).trigger("resize");return this}})(jQuery);;
/**
 * @file
 * Bootstrap Popovers.
 */

var Drupal = Drupal || {};

(function ($, Drupal, Bootstrap) {
  "use strict";

  /**
   * Extend the Bootstrap Popover plugin constructor class.
   */
  Bootstrap.extendPlugin('popover', function (settings) {
    return {
      DEFAULTS: {
        animation: !!settings.popover_animation,
        enabled: settings.popover_enabled,
        html: !!settings.popover_html,
        placement: settings.popover_placement,
        selector: settings.popover_selector,
        trigger: settings.popover_trigger,
        triggerAutoclose: !!settings.popover_trigger_autoclose,
        title: settings.popover_title,
        content: settings.popover_content,
        delay: parseInt(settings.popover_delay, 10),
        container: settings.popover_container
      }
    };
  });

  /**
   * Bootstrap Popovers.
   *
   * @todo This should really be properly delegated if selector option is set.
   */
  Drupal.behaviors.bootstrapPopovers = {
    attach: function (context) {
      // Immediately return if popovers are not available.
      if (!$.fn.popover || !$.fn.popover.Constructor.DEFAULTS.enabled) {
        return;
      }

      // Popover autoclose.
      if ($.fn.popover.Constructor.DEFAULTS.triggerAutoclose) {
        var $currentPopover = null;
        $(document)
          .on('show.bs.popover', '[data-toggle=popover]', function () {
            var $trigger = $(this);
            var popover = $trigger.data('bs.popover');

            // Only keep track of clicked triggers that we're manually handling.
            if (popover.options.originalTrigger === 'click') {
              if ($currentPopover && !$currentPopover.is($trigger)) {
                $currentPopover.popover('hide');
              }
              $currentPopover = $trigger;
            }
          })
          .on('click', function (e) {
            var $target = $(e.target);
            var popover = $target.is('[data-toggle=popover]') && $target.data('bs.popover');
            if ($currentPopover && !$target.is('[data-toggle=popover]') && !$target.closest('.popover.in')[0]) {
              $currentPopover.popover('hide');
              $currentPopover = null;
            }
          })
        ;
      }

      var elements = $(context).find('[data-toggle=popover]').toArray();
      for (var i = 0; i < elements.length; i++) {
        var $element = $(elements[i]);
        var options = $.extend({}, $.fn.popover.Constructor.DEFAULTS, $element.data());

        // Store the original trigger.
        options.originalTrigger = options.trigger;

        // If the trigger is "click", then we'll handle it manually here.
        if (options.trigger === 'click') {
          options.trigger = 'manual';
        }

        // Retrieve content from a target element.
        var $target = $(options.target || $element.is('a[href^="#"]') && $element.attr('href')).clone();
        if (!options.content && $target[0]) {
          $target.removeClass('visually-hidden hidden').removeAttr('aria-hidden');
          options.content = $target.wrap('<div/>').parent()[options.html ? 'html' : 'text']() || '';
        }

        // Initialize the popover.
        $element.popover(options);

        // Handle clicks manually.
        if (options.originalTrigger === 'click') {
          // To ensure the element is bound multiple times, remove any
          // previously set event handler before adding another one.
          $element
            .off('click.drupal.bootstrap.popover')
            .on('click.drupal.bootstrap.popover', function (e) {
              $(this).popover('toggle');
              e.preventDefault();
              e.stopPropagation();
            })
          ;
        }
      }
    },
    detach: function (context) {
      // Immediately return if popovers are not available.
      if (!$.fn.popover || !$.fn.popover.Constructor.DEFAULTS.enabled) {
        return;
      }

      // Destroy all popovers.
      $(context).find('[data-toggle="popover"]')
        .off('click.drupal.bootstrap.popover')
        .popover('destroy')
      ;
    }
  };

})(window.jQuery, window.Drupal, window.Drupal.bootstrap);
;
/*--------Equal height plugin starts-----------*/

(function ($, Drupal) {

  function init() {
      
      
            $(".t2-featured-content-block").hover(
                function () {
                    $(this).addClass("hover");
                },
                function () {
                    $(this).removeClass("hover");
                }
            );
          


    //for signpost  featured content height fix
    setTimeout(function(){
      image_height_align();
    },200);
    

  } // initi

  jQuery(window).resize(function () {
    image_height_align();
  });


  /*T2 featured content image height fix starts*/
  function image_height_align() {
    var block_height = 0;
    $(".news-image-wrap").css("height", "auto");
    $(".t2-featured-content-block").each(function(){
      block_height = $(this).outerHeight();
      $(this).find('.news-image-wrap').css("height", block_height);
      //console.log(block_height);
   });
    //console.log(block_height);
    
  }
  /*T2 featured content image height fix ends*/


  Drupal.behaviors.customMapBehavior = {
    attach: function (context, settings) {
      init();
    }
  };

})(jQuery, Drupal);
;
(function ($, Drupal) {
  var speed_value = "";

  function init() {
    speed_value = $(".ss_speed").data("speed");

    var countDecimals = function (value) { return value % 1 ? value.toString().split(".")[1].length : 0; };
    // start all the timers
    $('.timer').each(function () {
      var num = countDecimals($(this).data('to'));
      $(this).data('decimals', num);
    });

    // Function to spin numbers
    $.fn.countTo = function (options) {
      options = options || {};

      return $(this).each(function () {
        // set options for current element
        var settings = $.extend({}, $.fn.countTo.defaults, {
          from: $(this).data('from'),
          to: $(this).data('to'),
          speed: speed_value,
          refreshInterval: $(this).data('refresh-interval'),
          decimals: $(this).data('decimals')
        }, options);

        // how many times to update the value, and how much to increment the value on each update
        var loops = Math.ceil(settings.speed / settings.refreshInterval),
          increment = (settings.to - settings.from) / loops;

        // references & variables that will change with each update
        var self = this,
          $self = $(this),
          loopCount = 0,
          value = settings.from,
          data = $self.data('countTo') || {};

        $self.data('countTo', data);

        // if an existing interval can be found, clear it first
        if (data.interval) {
          clearInterval(data.interval);
        }
        data.interval = setInterval(updateTimer, settings.refreshInterval);

        // initialize the element with the starting value
        render(value);

        function updateTimer() {
          value += increment;
          loopCount++;

          render(value);

          if (typeof (settings.onUpdate) == 'function') {
            settings.onUpdate.call(self, value);
          }

          if (loopCount >= loops) {
            // remove the interval
            $self.removeData('countTo');
            clearInterval(data.interval);
            value = settings.to;

            if (typeof (settings.onComplete) == 'function') {
              settings.onComplete.call(self, value);
            }
          }
        }

        function render(value) {
          var formattedValue = settings.formatter.call(self, value, settings);
          $self.text(formattedValue);
        }
      });
    };

    $.fn.countTo.defaults = {
      from: 0,               // the number the element should start at
      to: 0,                 // the number the element should end at
      speed: 1000,           // how long it should take to count between the target numbers
      refreshInterval: 100,  // how often the element should be updated
      decimals: 0,           // the number of decimal places to show
      formatter: formatter,  // handler for formatting the value before rendering
      onUpdate: null,        // callback method for every time the element is updated
      onComplete: null       // callback method for when the element finishes updating
    };

    function formatter(value, settings) {
      var parts = value.toFixed(settings.decimals).split(".");
      return parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",") + (parts[1] ? "." + parts[1] : "");
    }

    // start all the timers
    //$('.timer').each(count);

    // function count(options) {
    //   var $this = $(this);
    //   options = $.extend({}, options || {}, $this.data('countToOptions') || {});
    //   $this.countTo(options);
    // }
  }

  jQuery(document).ready(function ($) {
    var flagCounter = true;

    // Check counter section in in viewport or not
    if ($('.counter-section').isOnScreen() && flagCounter == true) {
      $('.timer').each(count);
      flagCounter = false;
    }
    function count(options) {
      var $this = $(this);
      options = $.extend({}, options || {}, $this.data('countToOptions') || {});
      // $this.countTo(options);
    }


    // if ($(window).scrollTop() > 100 && $(window).scrollTop() < 850) {
    //   $('.timer').each(count);
    // }

    // Check counter section in in viewport or not (on scroll)
    $(window).scroll(function () {
      if ($('.counter-section').isOnScreen() && flagCounter == true) {
        $('.timer').each(count);
        flagCounter = false;
      }
    });
  });

  Drupal.behaviors.customMapBehavior = {
    attach: function (context, settings) {
      init();
    }
  };

  // viewport visibility
  $.fn.isOnScreen = function () {

    var win = $(window);

    var viewport = {
      top: win.scrollTop(),
      left: win.scrollLeft()
    };
    viewport.right = viewport.left + win.width();
    viewport.bottom = viewport.top + win.height();

    var bounds = this.offset();
    bounds.right = bounds.left + this.outerWidth();
    bounds.bottom = bounds.top + this.outerHeight();

    return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

  };

})(jQuery, Drupal);
;
