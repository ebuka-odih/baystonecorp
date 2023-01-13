@extends('pages.layouts.app')
@section('content')

<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/1920x480/W001-performance-07-20-new.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/1920x480/W001-performance-07-20-new.jpg);">
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
                                                    <span itemprop="name">Oil and Gas</span>
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
                                                            <h1>Digital Transformation amid Market Uncertainty and IMO2020</h1>
                                                        </div>
                                                        <span class="hr"></span>

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
                        <section id="overview" class="background-container" style=" padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">How does Baystone Corporation help Companies Within the Energy Industry?</h2>
                                <div class="background-container__description rte-content">
                                    <p>Baystone Corporation has over 50 years of experience in software solutions and innovations for companies in energy industries. Empowering customers to save up to $320M/year. We help customers achieve superior performance by driving value, agility, and sustainability throughout their asset and operations lifecycles. We enable 19 of top 20 petroleum companies, over 300 refineries, most of the world's petrochemical crackers, and 900K miles of pipeline with the most comprehensive integrated and unified operations. </p>
                                    <p> </p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="/content/dam/aveva/images/banners/generic/W004-macro-layer-04-10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/generic/W004-macro-layer-04-10-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Explore our interactive guide to digitally transform the oil and gas industry </h2>
                                                        </div>
                                                        <span class="hr"></span>

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
                        <section id="solution" class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">What Solutions do Baystone Corporation Offer for Energy Companies?</h2>
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
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-energy01-07-20.png">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-energy01-07-20.png" alt="/content/dam/aveva/images/cards/664x498/W005-energy01-07-20.png" />
                                                                </div>
                                                                <input type="radio" id="rd-1640756110341" name="accordionwithcard" checked />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640756110341">
                                                                    <h3>Exploration and Production</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation helps maximize production of oil and gas from onshore and offshore wells safely and economically.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-energy02-07-20.png">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-energy02-07-20.png" alt="/content/dam/aveva/images/cards/664x498/W005-energy02-07-20.png" />
                                                                </div>
                                                                <input type="radio" id="rd-1640756110352" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640756110352">
                                                                    <h3>Transportation Pipelines</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation helps manage day-to-day activities of crude, refined products, gas, and petrochemical pipelines to ensure your operations are safe and efficient.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-energy03-07-20.png">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-energy03-07-20.png" alt="/content/dam/aveva/images/cards/664x498/W005-energy03-07-20.png" />
                                                                </div>
                                                                <input type="radio" id="rd-1640756110362" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640756110362">
                                                                    <h3>Gas/LNG Processing</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation maximises LNG production through improved asset reliability, reduced energy usage, and optimized process yields and throughput.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W005-energy04-07-20.png">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W005-energy04-07-20.png" alt="/content/dam/aveva/images/cards/664x498/W005-energy04-07-20.png" />
                                                                </div>
                                                                <input type="radio" id="rd-1640756110373" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640756110373">
                                                                    <h3>Refining</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation helps customers achieve superior plant performance through reduced energy usage and operating costs, optimized process yields and throughput, and fewer safety-related incidents.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image-text-component__colunm-two">
                                                            <img class="lozad" data-src="/content/dam/aveva/images/cards/664x498/W005-energy01-07-20.png" alt="Black Image" />
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
                        <section id="success" class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">See What We Have Done for Your Peers</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_ADNOC_10-20.jpg.rendition/mobile-1x.png" />

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_Energy01_11-20_updated.jpg.rendition/mobile-1x.png" />

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
                                <h2 class="background-container__heading">Explore Products by Solution</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Unified Operations Center</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers edge to enterprise visibility and control that enables agile, efficient and responsive operations. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Value Chain Optimization</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation delivers end-to-end value chain optimization to help you reduce value leaks, sustain productivity, and make better, faster decisions.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Unified Engineering</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation™ Unified Engineering brings together engineering, design and simulation to enable global multi-discipline teams to work concurrently in a common, data-centric environment for maximum transparency and collaboration.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Performance</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals. </p>

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


                                                        <a href="{{ route('contact') }}" class="secondary-white-btn  "   >
                                                            Contact Us </a>
                                                        <div class="modal fade" id="lb-6216552530446894" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                                                                    target: "#f1640756110516"
                                                                                });
                                                                            </script>
                                                                            <div class="hbspt-form" data-portal-id="2900448" data-form-id="70596ae8-2111-42df-9fc9-5210147f43e0" data-name-0="business_unit" data-name-1="unified_industry" data-name-2="sub_segment_infrastructure" data-name-3="products" data-name-4="dx_products" data-name-5="dx_content">
                                                                                <h3 class="hbspt-form--heading"></h3>
                                                                                <div class="hbspt-form--formWrapper" id="f1640756110516"></div>
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
