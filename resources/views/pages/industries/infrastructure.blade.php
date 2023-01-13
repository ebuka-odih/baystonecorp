@extends('pages.layouts.app')
@section('content')

    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/1920x480/W001-infrastructure-07-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/1920x480/W001-infrastructure-07-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="breadcrumb-wrapper"><nav class="cmp-breadcrumb" aria-label="Breadcrumb">
                                            <ol class="cmp-breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="{{ route('homepage') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Home</span>
                                                    </a>
                                                    <meta itemprop="position" content="1" />
                                                </li>
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="{{ route('industries') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Industries</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Infrastructure</span>
                                                    <meta itemprop="position" content="3" />
                                                </li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h1>Digitally Transform Your Infrastructure Operations</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Deliver safer, more reliable, and more efficient services to your users</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <div class="background-container__description rte-content">
                                    <p style="text-align: center;">We empower infrastructure operators to deliver <b>safer</b>, <b>more reliable</b>, <b>more resilient</b>, <b>more sustainable</b>, and <b>more efficient</b> services to their customers while <b>minimizing risk</b> and lowering <b>total cost to operate</b>.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Baystone Corporation Solutions for Your Industry​</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="accordionwithcard section">
                                                <section class="image-text-component">
                                                    <div class="image-text-component__main-container">
                                                        <div class="image-text-component__column-one">
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-DataCenters-11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-DataCenters-11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W005-DataCenters-11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676668" name="accordionwithcard" checked />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676668">
                                                                    <h3>Data Centers</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation’s capabilities in monitoring &amp; control, asset performance, and operations optimization is a perfect fit for data center operators seeking to digitally transform their operations to reduce risk, save costs, optimize performance, and speed crisis response.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-SmartCities-11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-SmartCities-11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W005-SmartCities-11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676720" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676720">
                                                                    <h3>Smart Cities</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>A true “System of Systems” approach to solving the complex challenges of Smart Cities, brought to you by people who have been solving these problems in industrial automation for more than 30 years​.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-Transportation-SmartAirports-11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-Transportation-SmartAirports-11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W005-Transportation-SmartAirports-11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676748" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676748">
                                                                    <h3>Transportation and Smart Airports</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation’ solutions deliver scalable, sustainable, and integrated management of technology for efficient, safe, and reliable operations ​</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/panels/W005-enterprise-learning02-07-20.jpg">
                                                                    <img src="/content/dam/aveva/images/panels/W005-enterprise-learning02-07-20.jpg" alt="/content/dam/aveva/images/panels/W005-enterprise-learning02-07-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676785" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676785">
                                                                    <h3>Buildings</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation solutions deliver secure, efficient and reliable facilities management operations, whether a single building or a large multi-building campus.​</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image-text-component__colunm-two">
                                                            <img class="lozad" data-src="/content/dam/aveva/images/cards/664x498/W005-DataCenters-11-20.jpg" alt="Black Image" />
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">See What We Have Done for Your Peers</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-Nava-Raipur_664x498.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">The Nava Raipur Smart City</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Learn how Baystone Corporation's Unified Operations Center helped Nava Raipur develop India's first greenfield smart city, enhancing quality of life through safety, efficiency, sustainability, and livability while acting as the new benchmark for smart city development around the nation.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-China-Ministry-of-Railways-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">China Ministry of Railways</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                When the China Ministry of Railways set out to expand and update its high-speed rail system ahead of the 2008 Olympics, it also needed to integrate multiple hardware and software vendors into a central hub. Baystone Corporation’s Passenger Information System was installed into 220 railway stations and 15 high-speed rail lines across China, including public address systems, closed circuit television, video displays, and ticket sales.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Explore Products by Solution​</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Performance</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Unified Operations Center</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers edge to enterprise visibility and control that enables agile, efficient and responsive operations. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Unified Engineering</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation™ Unified Engineering brings together engineering, design and simulation to enable global multi-discipline teams to work concurrently in a common, data-centric environment for maximum transparency and collaboration.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Unified Project Execution</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation provides digital project execution and construction management capabilities integrated within the engineering solutions.​</p>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-small u-banner-light" style="background-color:#3E1054;">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h1>Embrace Your Digital Transformation</h1>
                                                        </div>
                                                        <div class="description rte-content">
                                                            <p>Start your journey today.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                    <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">


                                                        <a href="{{ route('contact') }}" class="secondary-white-btn  "  >
                                                            Contact Us </a>
                                                        <div class="modal fade" id="lb-6214119208433970" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="form-dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <script>
                                                                                hbspt.forms.create({
                                                                                    portalId: "2900448",
                                                                                    formId: "70596ae8\u002D2111\u002D42df\u002D9fc9\u002D5210147f43e0",
                                                                                    css: "",
                                                                                    target: "#f1640753677194"
                                                                                });
                                                                            </script>
                                                                            <div class="hbspt-form" data-portal-id="2900448" data-form-id="70596ae8-2111-42df-9fc9-5210147f43e0" data-name-0="business_unit" data-name-1="unified_industry" data-name-2="sub_segment_infrastructure" data-name-3="products" data-name-4="dx_products" data-name-5="dx_content">
                                                                                <h3 class="hbspt-form--heading"></h3>
                                                                                <div class="hbspt-form--formWrapper" id="f1640753677194"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main></div>

@endsection
