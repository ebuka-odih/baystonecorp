<!DOCTYPE HTML>
<html lang="en">
<!-- Mirrored from www.aveva.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 18:25:16 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8" />
    <title>Baystone Corporation - Global Leader in Industrial Software</title>
    <meta name="keywords" content="English" />
    <meta name="description" content="At Baystone Corporation, we work with you and harness the power of our ecosystem, to deliver solutions and expertise to optimize engineering, operations and performance." />
    <meta name="template" content="home-page-template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="facebook-domain-verification" content="val45168a21a3qtvtwi1b2oqjluy50" />
    <link rel="canonical" href="en/index.html" />
    <link rel="stylesheet" href="{{ asset('etc.clientlibs/aveva/clientlibs/clientlib-base.min.4029e6e4e35671d9da50165b51942268.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('etc.clientlibs/aveva/clientlibs/clientlib-productfinder.min.9552b59258b5bc851d300bed0911ac52.css') }}" type="text/css">

    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-W5FPMZ');
    </script>
    <script>
        var digitalData = [];
        var pageType;
        var language = document.documentElement.lang.toLowerCase();
        var pathArrays = window.location.pathname.split('index.html');
        var sitesection = window.location.pathname.split('index.html');
        var index = pathArrays.indexOf(language);
        var pathArray = pathArrays.splice(index);
        var pageType = pathArray[1] || "home";
        pageType = pageType.replace('.html', '');
        var video = [];
        if(document.title === 'Page Not Found') {
            pageType = 'errorPage';
        }
        _init();

        function _init() {
            setCategory();
            getSiteSection();
        }

        function setCategory() {
            var pageInfo = {
                pageName: getPageName(pathArray),
                URL: window.location.href,
            };
            var category = {
                pageType: pageType,
                org: "aveva",
                country: getCountry(),
                language: language,
                siteSection: document.title === 'Page Not Found' ? '' : sitesection[1]
            };
            digitalData.pageInfo = pageInfo;
            digitalData.category = category;
        }

        function getSiteSection() {
            if(document.title === 'Page Not Found') {
                return;
            }
            var i;
            for(i = 1; i <= sitesection.length - 2; i++) {
                var newUser = "siteSection" + i;
                var newValue = sitesection[i + 1]
                digitalData.category[newUser] = newValue.replace('.html', '');
            }
        }

        function getDomain() {
            return window.location.hostname;
        }

        function getCountry() {
            var country = language.split("-")[1];
            return country ? country : 'uk';
        }

        function getPageName(pathArray) {
            return "aveva:" + getCountry() + ":" + language + ":" + getName();
        }

        function getName() {
            var pageName = pathArray[pathArray.length - 1];
            pageName = pageName.replace('.html', '');
            if(pageName === "") {
                pageName = pathArray[pathArray.length - 2];
            }
            if(!pageName || pageName.toLowerCase() === language) {
                pageName = "home";
            }
            if(document.title === 'Page Not Found') {
                pageName = "errorPage";
            }
            return pageName;
        }
        //For perspective pages info details
        function getperspectiveInfo() {
            var perspectiveInfo = {
                perspectiveType: pathArray[2],
                title: getInfo('.cmp-text h1', 'innerText') || getInfo('.herobanner .heading', 'innerText'),
                authorName: getInfo('.biographycomponent__authorName', 'innerText'),
            };
            digitalData.perspectiveInfo = perspectiveInfo;
        }
        //For productInfo details
        function getProductInfo() {
            var productInfo = {
                productName: getInfo('.heading h1', 'innerText'),
            };
            digitalData.productInfo = productInfo;
        }
        //For Query selector
        function getInfo(elemSelector, property) {
            var elm = document.querySelector(elemSelector);
            if(elm) {
                return elm[property] || '';
            }
            return '';
        }
        //Form Component
        function getform() {
            var form;
            var hsbtForm = document.querySelectorAll(".hbspt-form");
            for(var index = 0; index < hsbtForm.length; index++) {
                var item = hsbtForm[index];
                if(!item.getAttribute('data-form-id')) {
                    return;
                }
                if(index === 0) {
                    form = {
                        formId0: item.getAttribute('data-form-id'),
                        portalId0: item.getAttribute('data-portal-id'),
                        formStatus0: "Form Load"
                    }
                } else {
                    form["formId" + index] = item.getAttribute('data-form-id');
                    form["portalId" + index] = item.getAttribute('data-portal-id');
                    form["eventName" + index] = "HubSpotFormLoad";
                    form["formStatus" + index] = "Form Load"
                }
            }
            if(form !== undefined) {
                digitalData.form = form;
            }
        }

        function getVideo() {
            var iframes = document.querySelectorAll(".videocomponent__player iframe");
            for(var i = 0; i < iframes.length; i++) {
                getVideoName(iframes[i].getAttribute('src'), i);
            }
            if(video !== undefined) {
                digitalData.video = video;
            }
        }

        function getVideoName(item, index) {
            var responseData;
            if(item.indexOf("fast.wistia.net") !== -1) {
                var src = item.split('index.html');
                var videoName = src.indexOf("iframe");
                var videoName = src.splice(videoName);
                var url = 'https://fast.wistia.com/oembed?url=http://home.wistia.com/medias/' + videoName[1].split('?')[0];
                loadXMLDoc(url, function(data) {
                    video["videoName" + index] = data.title;
                    video["videoType" + index] = "wistia";
                });
            } else if(item.indexOf("www.youtube.com") !== -1) {
                var src = item.split('index.html');
                var videoName = src.indexOf("embed");
                var videoName = src.splice(videoName);
                var url = "https://noembed.com/embed?url=https://www.youtube.com/watch?v=" + videoName[1].split('?')[0];
                loadXMLDoc(url, function(data) {
                    video["videoName" + index] = data.title;
                    video["videoType" + index] = "youtube";
                });
            } else if(item.indexOf("player.vimeo.com") !== -1) {
                var src = item.split('index.html');
                var videoName = src.indexOf("video");
                var videoName = src.splice(videoName);
                var url = 'https://vimeo.com/api/v2/video/' + videoName[1].split('?')[0] + '.json';
                loadXMLDoc(url, function(data) {
                    video["videoName" + index] = data[0].title;
                    video["videoType" + index] = "vimeo";
                });
            }
        }

        function loadXMLDoc(url, callback) {
            var callbackName = 'jsonp_callback_' + Math.round(100000 * Math.random());
            window[callbackName] = function(data) {
                delete window[callbackName];
                document.body.removeChild(script);
                callback(data);
            };
            var script = document.createElement('script');
            script.src = url + (url.indexOf('?') >= 0 ? '&' : '?') + 'callback=' + callbackName;
            document.body.appendChild(script);
        }
        // lazy loading for hubspot
        var hbspt = {};
        hbspt.forms = {};
        var formsconfigs = [];
        // funtion to get all the data, use the same function in order to change the existing
        // implementation
        hbspt.forms.create = function(config) {
            formsconfigs.push(config);
        };
        // function to generate the forms and also append
        var loadForm = function(formsconfigs) {
            for(var i = 0; i < formsconfigs.length; i++) {
                hbspt.forms.create({
                    portalId: formsconfigs[i].portalId,
                    formId: formsconfigs[i].formId,
                    css: formsconfigs[i].css,
                    target: formsconfigs[i].target
                });
            }
        };
        // function to load the sciprt tag and also call the hubspot form crete
        document.addEventListener("DOMContentLoaded", function() {
            if(formsconfigs.length > 0) {
                var script = document.createElement('script');
                script.charset = "utf-8";
                script.type = "text/javascript";
                script.onload = function() {
                    loadForm(formsconfigs);
                }
                script.src = "http://js.hsforms.net/forms/v2.js";
                document.head.appendChild(script);
            }
        });
        document.addEventListener("DOMContentLoaded", function() {
            switch(pageType) {
                case "perspectives":
                    getperspectiveInfo();
                    break;
                case "products":
                    getProductInfo();
                    break;
            }
            getVideo();
            getform();
        });
    </script>
    <script>
        (function(g, b, d, f) {
            (function(a, c, d) {
                if(a) {
                    var e = b.createElement("style");
                    e.id = c;
                    e.innerHTML = d;
                    a.appendChild(e)
                }
            })(b.getElementsByTagName("head")[0], "at-body-style", d);
            setTimeout(function() {
                var a = b.getElementsByTagName("head")[0];
                if(a) {
                    var c = b.getElementById("at-body-style");
                    c && a.removeChild(c)
                }
            }, f)
        })(window, document, "body {opacity: 0 !important}", 3E3);
    </script>
    <script type="text/javascript" src="http://assets.adobedtm.com/29609a6a8d3a/bfb7aaab41bc/launch-ac08022bebc9.min.js" async></script>
    <!--[if lte IE 8]>
    <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/v2-legacy.js"></script>
    <![endif]-->
</head>

<body class="homepage basepage page basicpage  en">

<a class="skip" href="#main-content">Skip to main content</a>

<div class="root responsivegrid">
    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
        <div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
            <div class="cmp-experiencefragment cmp-experiencefragment--header">
                <div class="xf-content-height">
                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                <div class="globalheader aem-GridColumn aem-GridColumn--default--12">
                                    <header role="banner">
                                        <div class="utility-nav" aria-label="Utility Navigation" role="navigation">
                                            <ul class="container-xl container-sm utility-nav__list">

                                            </ul>
                                        </div>
                                        <nav class="main-navbar">
                                            <div class="container-md main-navbar__wrapper" aria-label="Main Navigation" role="navigation"> <a class="main-navbar__toggle" href="#"><span></span></a>
                                                <a class="main-navbar__logo" href="{{ route('homepage') }}" data-track="Global Header/Footer" data-at="Aveva" data-cta="Baystone Corporation">
                                                    <img height="60" class="logo" src="{{ asset('img/logo.png') }}" alt="Par Pacific" />
{{--                                                    <img src="content/experience-fragments/aveva/en/site/header/master/_jcr_content/root/responsivegrid/globalheader/logo.coreimg.svg/1596291684683/header-logo.svg" alt="Aveva" /> --}}
                                                </a>
                                                <ul class="main-navbar-links">
                                                    <li> <a href="{{ route('industries') }}" data-cta="Industries" data-at="Industries" data-track="Global Header" class="level0-item" target="_self">Industries</a>
                                                        <div class="main-navbar-submenu">
                                                            <div class="main-navbar-submenu__list">
                                                                <ul>
                                                                    <li class="desktop-l1-item selected" data-id="desktop-chemicals"> <a href="{{ route('chemicals') }}" data-cta="Chemicals" data-track="Global Header" data-title="Industries" data-at="Industries-Chemicals" target="_self">Chemicals</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-energy"> <a href="{{ route('energy') }}" data-cta="Energy" data-track="Global Header" data-title="Industries" data-at="Industries-Energy" target="_self">Energy</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-food-and-beverage--cpg"> <a href="{{ route('constructions') }}" data-cta="Food and Beverage, CPG" data-track="Global Header" data-title="Industries" data-at="Industries-Food and Beverage, CPG" target="_self">Construction</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-infrastructure"> <a href="{{ route('infrastructure') }}" data-cta="Infrastructure" data-track="Global Header" data-title="Industries" data-at="Industries-Infrastructure" target="_self">Infrastructure</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-manufacturing"> <a href="{{ route('manufacturing') }}" data-cta="Manufacturing" data-track="Global Header" data-title="Industries" data-at="Industries-Manufacturing" target="_self">Manufacturing</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-marine"> <a href="{{ route('marine') }}" data-cta="Marine" data-track="Global Header" data-title="Industries" data-at="Industries-Marine" target="_self">Marine</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-mining"> <a href="{{ route('mining') }}" data-cta="Mining" data-track="Global Header" data-title="Industries" data-at="Industries-Mining" target="_self">Mining</a> </li>
                                                                    <li class="desktop-l1-item " data-id="desktop-power-and-utilities"> <a href="{{ route('power_utilities') }}" data-cta="Power and Utilities" data-track="Global Header" data-title="Industries" data-at="Industries-Power and Utilities" target="_self">Power and Utilities</a> </li>
{{--                                                                    <li class="desktop-l1-item " data-id="desktop-water-and-wastewater"> <a href="en/industries/power-utilities/water-wastewater/index.html" data-cta="Water and Wastewater" data-track="Global Header" data-title="Industries" data-at="Industries-Water and Wastewater" target="_self">Water and Wastewater</a> </li>--}}
                                                                </ul>
                                                            </div>
{{--                                                            <div class="submenu-content" role="navigation" aria-label="Main Navigation Submenu">--}}
{{--                                                                <div class="main-navbar-submenu__sublist">--}}

{{--                                                                    --}}
{{--                                                                </div>--}}
{{--                                                            </div>--}}
                                                        </div>
                                                    </li>
                                                    <li> <a href="{{ route('about') }}" data-cta="About Us" data-at="About Us" data-track="Global Header" class="level0-item" target="_self">About Us</a>
                                                        <div class="main-navbar-submenu">
                                                            <div class="main-navbar-submenu__list">
                                                                <ul>
                                                                    <li class="desktop-l1-item selected" data-id="desktop-about-us"> <a href="{{ route('about') }}" data-cta="About Us" data-track="Global Header" data-title="About Us" data-at="About Us-About Us" target="_self">About Us</a> </li>
                                                                    <li class="desktop-l1-item" data-id="desktop-solutions"> <a href="{{ route('solutions') }}" data-cta="Solutions" data-track="Global Header" data-title="Offerings" data-at="Offerings-Solutions" target="_self">Solutions</a> </li>

                                                                </ul>
                                                            </div>
                                                            <div class="submenu-content" role="navigation" aria-label="Main Navigation Submenu">
                                                                <div class="main-navbar-submenu__sublist">
                                                                    <div class="sublist-wrapper">
                                                                        <ul class="u-hide" id="desktop-about-us">
                                                                            <li> <a href="{{ route('about_premaxcorp') }}" data-cta="About Baystone Corporation" data-at="About Us-About Us-About Baystone Corporation" data-track="Global Header" data-title="About Us" target="_self">About Baystone Corporation</a> </li>
                                                                            <li> <a href="{{ route('diversity') }}" data-cta="Diversity &amp; Inclusion" data-at="About Us-About Us-Diversity &amp; Inclusion" data-track="Global Header" data-title="About Us" target="_self">Diversity &amp; Inclusion</a> </li>
{{--                                                                            <li> <a href="en/about/leadership/index.html" data-cta="Leadership" data-at="About Us-About Us-Leadership" data-track="Global Header" data-title="About Us" target="_self">Leadership</a> </li>--}}
                                                                            <li> <a href="{{ route('board_of_directors') }}" data-cta="Board of Directors" data-at="About Us-About Us-Board of Directors" data-track="Global Header" data-title="About Us" target="_self">Board of Directors</a> </li>
                                                                        </ul>
                                                                    </div>
                                                                    <div class="sublist-wrapper">
                                                                        <ul class="u-hide" id="desktop-solutions">
                                                                            <li> <a href="{{ route('digital_transformation') }}" data-cta="Digital Transformation" data-at="Offerings-Solutions-Digital Transformation" data-track="Global Header" data-title="Offerings" target="_self">Digital Transformation</a> </li>
                                                                            <li> <a href="{{ route('engineering') }}" data-cta="Engineering" data-at="Offerings-Solutions-Engineering" data-track="Global Header" data-title="Offerings" target="_self">Engineering</a> </li>
                                                                            <li> <a href="{{ route('operations') }}" data-cta="Operations" data-at="Offerings-Solutions-Operations" data-track="Global Header" data-title="Offerings" target="_self">Operations</a> </li>
                                                                            <li> <a href="{{ route('performance') }}" data-cta="Performance" data-at="Offerings-Solutions-Performance" data-track="Global Header" data-title="Offerings" target="_self">Performance</a> </li>
{{--                                                                            <li> <a href="en/solutions/aveva-connect/index.html" data-cta="Cloud Services" data-at="Offerings-Solutions-Cloud Services" data-track="Global Header" data-title="Offerings" target="_self">Cloud Services</a> </li>--}}
                                                                        </ul>
                                                                    </div>


                                                                    <div class="sublist-wrapper">
                                                                        <ul class="u-hide" id="desktop-sustainability"> </ul>
                                                                    </div>
{{--                                                                    <div class="sublist-wrapper">--}}
{{--                                                                        <ul class="u-hide" id="desktop-careers">--}}
{{--                                                                            <li> <a href="en/about/careers/vacancies/index.html" data-cta="Job Vacancies" data-at="About Us-Careers-Job Vacancies" data-track="Global Header" data-title="About Us" target="_self">Job Vacancies</a> </li>--}}
{{--                                                                        </ul>--}}
{{--                                                                    </div>--}}
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('project') }}"  class="level0-item" target="_self">Project</a>
                                                    </li>

                                                    <li>
                                                        <a href="{{ route('contact') }}"  class="level0-item" target="_self">Contact Us</a>
                                                    </li>
                                                </ul>
                                                <div class="main-navbar__actions">
                                                    <span class="i search__action" data-track="Global Header" data-cta="Search" data-at="Search"></span>
                                                </div>

                                            </div>
                                            <div class="main-navbar-responsive-wrapper u-hide">
                                                <div class="container-md main-navbar-responsive" role="navigation" aria-label="Responsive Navigation">
                                                    <ul class="main-navbar-responsive__main-list level1">
                                                        <li class="l1-item"> <a href="en/industries/index.html" data-id="industries" data-cta="Industries" data-at="Industries" data-track="Global Header" target="_self">Industries
                                                                <i class="icon-right-arrow l1-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l1-item"> <a href="en/offerings/index.html" data-id="offerings" data-cta="Offerings" data-at="Offerings" data-track="Global Header" target="_self">Offerings
                                                                <i class="icon-right-arrow l1-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l1-item"> <a href="en/perspectives/index.html" data-id="resources" data-cta="Resources" data-at="Resources" data-track="Global Header" target="_self">Resources
                                                                <i class="icon-right-arrow l1-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l1-item"> <a href="en/about/index.html" data-id="about-us" data-cta="About Us" data-at="About Us" data-track="Global Header" target="_self">About Us
                                                                <i class="icon-right-arrow l1-right--arrow"></i>
                                                            </a> </li>
                                                    </ul>
                                                    <ul class="main-navbar-responsive__utility-list">
                                                        <li> <a href="https://investors.aveva.com/" rel="noopener noreferrer" target="_blank">Investors</a> </li>
                                                        <li> <a href="en/about/partners/index.html" target="_self">Partners</a> </li>
                                                        <li> <a href="en/education/index.html" target="_self">Education</a> </li>
                                                        <li> <a href="en/training/index.html" target="_self">Training</a> </li>
                                                        <li> <a href="en/support-and-success/index.html" target="_self">Support &amp; Success</a> </li>
                                                        <li> <a href="en/contact/index.html" target="_self">Contact Us</a> </li>
                                                    </ul>

                                                </div>

                                                <div class="responsive-selector-list"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="lang-back-btn">Back</a>
                                                    <ul>
                                                        <li>
                                                            <div class="resp-lang-container"> <span class="checkmark "></span> <img />
                                                                <a class="responsive-selector-list__lang"></a>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div id="industries" class="level2 u-hide" role="navigation" aria-label="Level 2 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level2__backBtn">Back</a>
                                                    <ul>
                                                        <li class="l2-item"> <a href="en/industries/chemicals/index.html" data-id="chemicals" data-cta="Chemicals" data-track="Global Header" data-title="Industries" data-at="Industries-Chemicals" target="_self">Chemicals
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/energy/index.html" data-id="energy" data-cta="Energy" data-track="Global Header" data-title="Industries" data-at="Industries-Energy" target="_self">Energy
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/food-beverage/index.html" data-id="food-and-beverage--cpg" data-cta="Food and Beverage, CPG" data-track="Global Header" data-title="Industries" data-at="Industries-Food and Beverage, CPG" target="_self">Food and Beverage, CPG
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/infrastructure/index.html" data-id="infrastructure" data-cta="Infrastructure" data-track="Global Header" data-title="Industries" data-at="Industries-Infrastructure" target="_self">Infrastructure
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/manufacturing/index.html" data-id="manufacturing" data-cta="Manufacturing" data-track="Global Header" data-title="Industries" data-at="Industries-Manufacturing" target="_self">Manufacturing
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/marine/index.html" data-id="marine" data-cta="Marine" data-track="Global Header" data-title="Industries" data-at="Industries-Marine" target="_self">Marine
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/mining/index.html" data-id="mining" data-cta="Mining" data-track="Global Header" data-title="Industries" data-at="Industries-Mining" target="_self">Mining
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/power-utilities/index.html" data-id="power-and-utilities" data-cta="Power and Utilities" data-track="Global Header" data-title="Industries" data-at="Industries-Power and Utilities" target="_self">Power and Utilities
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/industries/power-utilities/water-wastewater/index.html" data-id="water-and-wastewater" data-cta="Water and Wastewater" data-track="Global Header" data-title="Industries" data-at="Industries-Water and Wastewater" target="_self">Water and Wastewater
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                    </ul>
                                                </div>
                                                <div id="offerings" class="level2 u-hide" role="navigation" aria-label="Level 2 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level2__backBtn">Back</a>
                                                    <ul>
                                                        <li class="l2-item"> <a href="en/solutions/index.html" data-id="solutions" data-cta="Solutions" data-track="Global Header" data-title="Offerings" data-at="Offerings-Solutions" target="_self">Solutions
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/products/index.html" data-id="products" data-cta="Products" data-track="Global Header" data-title="Offerings" data-at="Offerings-Products" target="_self">Products
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/solutions/flex-subscription/index.html" data-id="subscription-program" data-cta="Subscription Program" data-track="Global Header" data-title="Offerings" data-at="Offerings-Subscription Program" target="_self">Subscription Program
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                    </ul>
                                                </div>
                                                <div id="resources" class="level2 u-hide" role="navigation" aria-label="Level 2 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level2__backBtn">Back</a>
                                                    <ul>
                                                        <li class="l2-item"> <a href="en/perspectives/blog/index.html" data-id="blog" data-cta="Blog" data-track="Global Header" data-title="Resources" data-at="Resources-Blog" target="_self">Blog
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/perspectives/success-stories/index.html" data-id="success-stories" data-cta="Success Stories" data-track="Global Header" data-title="Resources" data-at="Resources-Success Stories" target="_self">Success Stories
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/perspectives/webinars/index.html" data-id="webinars" data-cta="Webinars" data-track="Global Header" data-title="Resources" data-at="Resources-Webinars" target="_self">Webinars
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/perspectives/white-papers/index.html" data-id="white-papers" data-cta="White Papers" data-track="Global Header" data-title="Resources" data-at="Resources-White Papers" target="_self">White Papers
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                    </ul>
                                                </div>
                                                <div id="about-us" class="level2 u-hide" role="navigation" aria-label="Level 2 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level2__backBtn">Back</a>
                                                    <ul>
                                                        <li class="l2-item"> <a href="en/about/index.html" data-id="about-us" data-cta="About Us" data-track="Global Header" data-title="About Us" data-at="About Us-About Us" target="_self">About Us
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/about/partners/index.html" data-id="our-partners" data-cta="Our Partners" data-track="Global Header" data-title="About Us" data-at="About Us-Our Partners" target="_self">Our Partners
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/about/news/index.html" data-id="news-and-press" data-cta="News and Press" data-track="Global Header" data-title="About Us" data-at="About Us-News and Press" target="_self">News and Press
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/about/events/index.html" data-id="events" data-cta="Events" data-track="Global Header" data-title="About Us" data-at="About Us-Events" target="_self">Events
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="https://investors.aveva.com/" data-id="investors" data-cta="Investors" data-track="Global Header" data-title="About Us" data-at="About Us-Investors" rel="noopener noreferrer" target="_blank">Investors
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/about/sustainability/index.html" data-id="sustainability" data-cta="Sustainability" data-track="Global Header" data-title="About Us" data-at="About Us-Sustainability" target="_self">Sustainability
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                        <li class="l2-item"> <a href="en/about/careers/life-at-aveva/index.html" data-id="careers" data-cta="Careers" data-track="Global Header" data-title="About Us" data-at="About Us-Careers" target="_self">Careers
                                                                <i class="icon-right-arrow l2-right--arrow"></i>
                                                            </a> </li>
                                                    </ul>
                                                </div>
                                                <div id="chemicals" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/chemicals/basic-chemicals/index.html" data-id="basic-chemicals" data-at="Industries-Chemicals-Basic Chemicals" data-track="Global Header" data-title="Industries" target="_self">Basic Chemicals</a> </li>
                                                        <li> <a href="en/industries/chemicals/specialty-chemicals/index.html" data-id="specialty-chemicals" data-at="Industries-Chemicals-Specialty Chemicals" data-track="Global Header" data-title="Industries" target="_self">Specialty Chemicals</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="energy" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/energy/exploration-production/index.html" data-id="exploration-and-production" data-at="Industries-Energy-Exploration and Production" data-track="Global Header" data-title="Industries" target="_self">Exploration and Production</a> </li>
                                                        <li> <a href="en/industries/energy/transportation-pipelines/index.html" data-id="transportation-pipelines" data-at="Industries-Energy-Transportation Pipelines" data-track="Global Header" data-title="Industries" target="_self">Transportation Pipelines</a> </li>
                                                        <li> <a href="en/industries/energy/lng-gas-processing/index.html" data-id="gas/lng-processing" data-at="Industries-Energy-Gas/LNG Processing" data-track="Global Header" data-title="Industries" target="_self">Gas/LNG Processing</a> </li>
                                                        <li> <a href="en/industries/energy/refining/index.html" data-id="refining" data-at="Industries-Energy-Refining" data-track="Global Header" data-title="Industries" target="_self">Refining</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="food-and-beverage--cpg" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/food-beverage/dairy/index.html" data-id="dairy" data-at="Industries-Food and Beverage, CPG-Dairy" data-track="Global Header" data-title="Industries" target="_self">Dairy</a> </li>
                                                        <li> <a href="en/industries/food-beverage/beverages-brewing/index.html" data-id="beverages-and-brewing" data-at="Industries-Food and Beverage, CPG-Beverages and Brewing" data-track="Global Header" data-title="Industries" target="_self">Beverages and Brewing</a> </li>
                                                        <li> <a href="en/industries/food-beverage/grains-baked-goods-confectionery/index.html" data-id="grains--baked-goods--and-confectionery" data-at="Industries-Food and Beverage, CPG-Grains, Baked Goods, and Confectionery" data-track="Global Header" data-title="Industries" target="_self">Grains, Baked Goods, and Confectionery</a> </li>
                                                        <li> <a href="en/industries/food-beverage/sugar-oil-biofuels/index.html" data-id="sugar--oil-and-biofuels" data-at="Industries-Food and Beverage, CPG-Sugar, Oil and Biofuels" data-track="Global Header" data-title="Industries" target="_self">Sugar, Oil and Biofuels</a> </li>
                                                        <li> <a href="en/industries/food-beverage/consumer-packaged-goods/index.html" data-id="consumer-packaged-goods" data-at="Industries-Food and Beverage, CPG-Consumer Packaged Goods" data-track="Global Header" data-title="Industries" target="_self">Consumer Packaged Goods</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="infrastructure" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/infrastructure/data-centers/index.html" data-id="data-centers" data-at="Industries-Infrastructure-Data Centers" data-track="Global Header" data-title="Industries" target="_self">Data Centers</a> </li>
                                                        <li> <a href="en/industries/infrastructure/smart-cities/index.html" data-id="smart-cities" data-at="Industries-Infrastructure-Smart Cities" data-track="Global Header" data-title="Industries" target="_self">Smart Cities</a> </li>
                                                        <li> <a href="en/industries/infrastructure/transportation/index.html" data-id="transportation" data-at="Industries-Infrastructure-Transportation" data-track="Global Header" data-title="Industries" target="_self">Transportation</a> </li>
                                                        <li> <a href="en/industries/infrastructure/facility-management/index.html" data-id="facility-management" data-at="Industries-Infrastructure-Facility Management" data-track="Global Header" data-title="Industries" target="_self">Facility Management</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="manufacturing" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/manufacturing/discrete-manufacturing/index.html" data-id="discrete-manufacturing" data-at="Industries-Manufacturing-Discrete Manufacturing" data-track="Global Header" data-title="Industries" target="_self">Discrete Manufacturing</a> </li>
                                                        <li> <a href="en/industries/manufacturing/life-sciences/index.html" data-id="life-sciences" data-at="Industries-Manufacturing-Life Sciences" data-track="Global Header" data-title="Industries" target="_self">Life Sciences</a> </li>
                                                        <li> <a href="en/industries/manufacturing/pulp-paper/index.html" data-id="pulp-and-paper" data-at="Industries-Manufacturing-Pulp and Paper" data-track="Global Header" data-title="Industries" target="_self">Pulp and Paper</a> </li>
                                                        <li> <a href="en/industries/manufacturing/steel-fabrication/index.html" data-id="steel-fabrication" data-at="Industries-Manufacturing-Steel Fabrication" data-track="Global Header" data-title="Industries" target="_self">Steel Fabrication</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="marine" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/marine/ship-building/index.html" data-id="ship-building" data-at="Industries-Marine-Ship Building" data-track="Global Header" data-title="Industries" target="_self">Ship Building</a> </li>
                                                        <li> <a href="en/industries/marine/ship-operations/index.html" data-id="ship-operations" data-at="Industries-Marine-Ship Operations" data-track="Global Header" data-title="Industries" target="_self">Ship Operations</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="mining" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/mining/index.html" data-id="view-all" data-at="Industries-Mining-View All" data-track="Global Header" data-title="Industries" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="power-and-utilities" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/industries/power-utilities/power-generation/index.html" data-id="power-generation" data-at="Industries-Power and Utilities-Power Generation" data-track="Global Header" data-title="Industries" target="_self">Power Generation</a> </li>
                                                        <li> <a href="en/industries/power-utilities/transmission-distribution/index.html" data-id="transmission-distribution" data-at="Industries-Power and Utilities-Transmission Distribution" data-track="Global Header" data-title="Industries" target="_self">Transmission Distribution</a> </li>
                                                        <li> <a href="en/industries/power-utilities/water-wastewater/index.html" data-id="water-wastewater" data-at="Industries-Power and Utilities-Water Wastewater" data-track="Global Header" data-title="Industries" target="_self">Water Wastewater</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="water-and-wastewater" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a> </div>
                                                <div id="solutions" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/solutions/digital-transformation/index.html" data-id="digital-transformation" data-at="Offerings-Solutions-Digital Transformation" data-track="Global Header" data-title="Offerings" target="_self">Digital Transformation</a> </li>
                                                        <li> <a href="en/solutions/engineering/index.html" data-id="engineering" data-at="Offerings-Solutions-Engineering" data-track="Global Header" data-title="Offerings" target="_self">Engineering</a> </li>
                                                        <li> <a href="en/solutions/operations/index.html" data-id="operations" data-at="Offerings-Solutions-Operations" data-track="Global Header" data-title="Offerings" target="_self">Operations</a> </li>
                                                        <li> <a href="en/solutions/performance/index.html" data-id="performance" data-at="Offerings-Solutions-Performance" data-track="Global Header" data-title="Offerings" target="_self">Performance</a> </li>
                                                        <li> <a href="en/solutions/flex-subscription/index.html" data-id="subscription-options" data-at="Offerings-Solutions-Subscription Options" data-track="Global Header" data-title="Offerings" target="_self">Subscription Options</a> </li>
                                                        <li> <a href="en/solutions/aveva-connect/index.html" data-id="cloud-services" data-at="Offerings-Solutions-Cloud Services" data-track="Global Header" data-title="Offerings" target="_self">Cloud Services</a> </li>
                                                        <li> <a href="en/solutions/index.html" data-id="view-all" data-at="Offerings-Solutions-View All" data-track="Global Header" data-title="Offerings" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="products" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/products/e3d-design/index.html" data-id="aveva-e3d-design" data-at="Offerings-Products-Baystone Corporation E3D Design" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation E3D Design</a> </li>
                                                        <li> <a href="en/products/enterprise-resource-management/index.html" data-id="aveva-enterprise-resource-management" data-at="Offerings-Products-Baystone Corporation Enterprise Resource Management" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation Enterprise Resource Management</a> </li>
                                                        <li> <a href="en/products/system-platform/index.html" data-id="aveva-system-platform" data-at="Offerings-Products-Baystone Corporation System Platform" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation System Platform</a> </li>
                                                        <li> <a href="en/products/intouch-hmi/index.html" data-id="aveva-intouch-hmi" data-at="Offerings-Products-Baystone Corporation InTouch HMI" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation InTouch HMI</a> </li>
                                                        <li> <a href="en/solutions/flex-subscription/aveva-operations-control/index.html" data-id="aveva-operations-control" data-at="Offerings-Products-Baystone Corporation Operations Control" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation Operations Control</a> </li>
                                                        <li> <a href="en/products/predictive-analytics/index.html" data-id="aveva-predictive-analytics" data-at="Offerings-Products-Baystone Corporation Predictive Analytics" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation Predictive Analytics</a> </li>
                                                        <li> <a href="en/products/insight/index.html" data-id="aveva-insight" data-at="Offerings-Products-Baystone Corporation Insight" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation Insight</a> </li>
                                                        <li> <a href="en/products/pi-system/index.html" data-id="pi-system" data-at="Offerings-Products-PI System" data-track="Global Header" data-title="Offerings" target="_self">PI System</a> </li>
                                                        <li> <a href="en/products/index.html" data-id="view-all" data-at="Offerings-Products-View All" data-track="Global Header" data-title="Offerings" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="subscription-program" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/solutions/flex-subscription/index.html" data-id="aveva-flex-subscription" data-at="Offerings-Subscription Program-Baystone Corporation Flex Subscription" data-track="Global Header" data-title="Offerings" target="_self">Baystone Corporation Flex Subscription</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="blog" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/perspectives/blog/index.html" data-id="view-all" data-at="Resources-Blog-View All" data-track="Global Header" data-title="Resources" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="success-stories" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/perspectives/success-stories/index.html" data-id="view-all" data-at="Resources-Success Stories-View All" data-track="Global Header" data-title="Resources" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="webinars" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/perspectives/webinars/index.html" data-id="view-all" data-at="Resources-Webinars-View All" data-track="Global Header" data-title="Resources" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="white-papers" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/perspectives/white-papers/index.html" data-id="view-all" data-at="Resources-White Papers-View All" data-track="Global Header" data-title="Resources" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="about-us" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/about/about-aveva/index.html" data-id="about-aveva" data-at="About Us-About Us-About Baystone Corporation" data-track="Global Header" data-title="About Us" target="_self">About Baystone Corporation</a> </li>
                                                        <li> <a href="en/about/about-aveva/diversity-equity-inclusion/index.html" data-id="diversity-&amp;-inclusion" data-at="About Us-About Us-Diversity &amp; Inclusion" data-track="Global Header" data-title="About Us" target="_self">Diversity &amp; Inclusion</a> </li>
                                                        <li> <a href="en/about/leadership/index.html" data-id="leadership" data-at="About Us-About Us-Leadership" data-track="Global Header" data-title="About Us" target="_self">Leadership</a> </li>
                                                        <li> <a href="en/about/board-of-directors/index.html" data-id="board-of-directors" data-at="About Us-About Us-Board of Directors" data-track="Global Header" data-title="About Us" target="_self">Board of Directors</a> </li>
                                                        <li> <a href="en/about/locations/index.html" data-id="global-offices" data-at="About Us-About Us-Global Offices" data-track="Global Header" data-title="About Us" target="_self">Global Offices</a> </li>
                                                        <li> <a href="en/about/index.html" data-id="view-all" data-at="About Us-About Us-View All" data-track="Global Header" data-title="About Us" target="_self">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="our-partners" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/about/partners/find-a-partner/index.html" data-id="find-a-partner" data-at="About Us-Our Partners-Find a Partner" data-track="Global Header" data-title="About Us" target="_self">Find a Partner</a> </li>
                                                        <li> <a href="en/about/partners/aveva-select/index.html" data-id="aveva-select" data-at="About Us-Our Partners-Baystone Corporation Select" data-track="Global Header" data-title="About Us" target="_self">Baystone Corporation Select</a> </li>
                                                        <li> <a href="en/about/partners/sales-and-support-partners/index.html" data-id="sales-&amp;-support-partners" data-at="About Us-Our Partners-Sales &amp; Support Partners" data-track="Global Header" data-title="About Us" target="_self">Sales &amp; Support Partners</a> </li>
                                                        <li> <a href="en/about/partners/system-integrator-partners/index.html" data-id="system-integrators" data-at="About Us-Our Partners-System Integrators" data-track="Global Header" data-title="About Us" target="_self">System Integrators</a> </li>
                                                        <li> <a href="en/about/partners/global-alliances/index.html" data-id="alliance-partners" data-at="About Us-Our Partners-Alliance Partners" data-track="Global Header" data-title="About Us" target="_self">Alliance Partners</a> </li>
                                                        <li> <a href="en/about/partners/login/index.html" data-id="partner-login" data-at="About Us-Our Partners-Partner Login" data-track="Global Header" data-title="About Us" target="_self">Partner Login</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="news-and-press" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/about/news/press-releases/index.html" data-id="newsroom" data-at="About Us-News and Press-Newsroom" data-track="Global Header" data-title="About Us" target="_self">Newsroom</a> </li>
                                                        <li> <a href="en/about/news/press-contacts/index.html" data-id="press-contacts" data-at="About Us-News and Press-Press Contacts" data-track="Global Header" data-title="About Us" target="_self">Press Contacts</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="events" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="https://www.avevaworld.com/" data-id="aveva-world-digital" data-at="About Us-Events-Baystone Corporation World Digital" data-track="Global Header" data-title="About Us" rel="noopener noreferrer" target="_blank">Baystone Corporation World Digital</a> </li>
                                                        <li> <a href="en/about/events/index.html" data-id="find-an-event" data-at="About Us-Events-Find an Event" data-track="Global Header" data-title="About Us" target="_self">Find an Event</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="investors" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="https://investors.aveva.com/" data-id="view-all" data-at="About Us-Investors-View All" data-track="Global Header" data-title="About Us" rel="noopener noreferrer" target="_blank">View All</a> </li>
                                                    </ul>
                                                </div>
                                                <div id="sustainability" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a> </div>
                                                <div id="careers" class="level3 u-hide" role="navigation" aria-label="Level 3 Navigation"> <i class="icon-left-arrow left--arrow"></i> <a href="#" class="level3__backBtn">
                                                        Back <span class="level3__backBtn-text"></span>
                                                    </a>
                                                    <ul>
                                                        <li> <a href="en/about/careers/vacancies/index.html" data-id="job-vacancies" data-at="About Us-Careers-Job Vacancies" data-track="Global Header" data-title="About Us" target="_self">Job Vacancies</a> </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </nav>

                                    </header>
                                    <div class="u-search-overlay u-hide"></div>
                                    <div class="u-header-overlay u-hide"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     @yield('content')
        <div class="experiencefragment aem-GridColumn aem-GridColumn--default--12">
            <div class="cmp-experiencefragment cmp-experiencefragment--footer">
                <div class="xf-content-height">
                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                        <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                <div class="globalfooter aem-GridColumn aem-GridColumn--default--12">
                                    <footer class="global-footer">

                                        <div class="large-screen-ruler"> </div>
                                        <div class="large-screen-container container-md">

                                            <div class="copyright-text container-md">
{{--                                                <div class="logo">--}}
{{--                                                    <a class="main-navbar__logo" href="{{ route('homepage') }}" data-track="Global Header/Footer" data-at="Baystone Corporation" data-cta="Baystone Corporation">--}}
{{--                                                        <img height="150" width="150" class="logo" src="{{ asset('img/logo.png') }}" alt="Baystone Corporation" />--}}

{{--                                                        --}}{{--                                                    <img src="content/experience-fragments/aveva/en/site/footer/master/_jcr_content/root/responsivegrid/globalfooter/footer-logo.coreimg.png/1596291680918/footer-logo.png" alt="Baystone Corporation" /> --}}
{{--                                                    </a>--}}
{{--                                                </div>--}}
                                                <p>
                                                    © 2020-2023 Baystone Corporation and its subsidiaries. All Rights Reserved. Baystone Corporation and the Baystone Corporation logo are a trademark or registered trademark of Baystone Corporation International in the U.S. and other countries.
                                                    <a href="en/legal/terms-of-use/index.html" target="_self">Terms and Conditions</a>
                                                </p>

                                            </div>
                                        </div>

                                    </footer>
                                </div>
                                <div class="interactive-content aem-GridColumn aem-GridColumn--default--12">
                                    <script async="async" src="http://consent.trustarc.com/notice?domain=aveva.com&amp;c=teconsent&amp;js=nj&amp;noticeType=bb&amp;text=true&amp;gtm=1&amp;pcookie" crossorigin></script>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="connect-us">
    <div class="connect-us__desktop connect-us__item">
        <div class="connect-us__img"> <img class="lozad" data-src="/content/dam/aveva/images/icons/contact/ContactAVEVA.svg" /> <span>Contact Baystone Corporation</span> </div>
    </div>
    <div class="connect-us__menu">
        <div class="connect-us__chat connect-us__item">
            <div class="connect-us__img"> <img class="lozad" data-src="/content/dam/aveva/images/icons/contact/Livechat.svg" /> <span>Live Chat</span> </div>
        </div>
        <div class="connect-us__demo connect-us__item">
            <div class="connect-us__img" data-toggle="modal" data-target="#connect-us-demo-popup"> <img class="lozad" data-src="/content/dam/aveva/images/icons/contact/ScheduleDemo.svg" /> <span>Schedule Demo</span> </div>
        </div>
    </div>
    <script>
        "use strict";
        ! function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if(!t.init) {
                if(t.invoked) return void(window.console && console.error && console.error("Drift snippet included twice."));
                t.invoked = !0, t.methods = ["identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on"],
                    t.factory = function(e) {
                        return function() {
                            var n = Array.prototype.slice.call(arguments);
                            return n.unshift(e), t.push(n), t;
                        };
                    }, t.methods.forEach(function(e) {
                    t[e] = t.factory(e);
                }), t.load = function(t) {
                    var e = 3e5,
                        n = Math.ceil(new Date() / e) * e,
                        o = document.createElement("script");
                    o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                    var i = document.getElementsByTagName("script")[0];
                    i.parentNode.insertBefore(o, i);
                };
            }
        }();
        drift.SNIPPET_VERSION = '0.3.1';
        drift.load('7ankh63d5whr');;
    </script>
</div>
<script type="text/javascript" src="{{ asset('etc.clientlibs/aveva/clientlibs/clientlib-base.min.0973f67d129a030730e2eee94a23394e.js') }}"></script>
<script type="text/javascript" src="{{ asset('etc.clientlibs/aveva/clientlibs/clientlib-productfinder.min.eb3da53bd9a62c852d61f9aa46ca313e.js') }}"></script>
<script type="text/javascript" id="social-share" data-script-src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5ebc07e36e205754
"></script>
<script type="text/javascript" id="hs-script-loader" async defer src="http://js.hs-scripts.com/2900448.js"></script>
<script type="text/javascript" src="https://polyfill.io/v3/polyfill.min.js?flags=gated&amp;features=Object.assign%2CIntersectionObserver"></script>
<script type="text/javascript" src="{{ asset('etc.clientlibs/aveva/clientlibs/clientlib-lozad.min.494a184dbf98bfe3418d8520472845d9.js') }}"></script>
<script>
    (function() {
        var observer = lozad(); // lazy loads elements with default selector as '.lozad'
        observer.observe();
    })();
</script>

</body>
<!-- Mirrored from www.aveva.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Dec 2021 18:26:06 GMT -->

</html>
