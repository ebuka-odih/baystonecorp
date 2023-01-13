@extends('pages.layouts.app')
@section('content')

<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/1920x480/W001-digital-transformation-07-20-test.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/1920x480/W001-digital-transformation-07-20-test.jpg);">
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
                                                    <a href="{{ route('solutions') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Solutions</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Digital Transformation</span>
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
                                                            <h1>Wondering how to start a digital transformation in your company?</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Explore our interactive Digital Factory Experience and chart your path in power, oil and gas, chemicals, and manufacturing industries</p>
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
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Empowering People with Smarter Ways of Doing Business</h2>
                                <div class="background-container__description rte-content">
                                    <p>Baystone Corporation illuminates the value digital acceleration brings to industries. Our technology seamlessly delivers the data and insight enterprises need to empower the modern workforce. We help customers become more sustainable and profitable across engineering and operations, and maximize asset, production and supply chain performance.</p>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">What Does Real Digital Transformation Mean?</h2>
                                <div class="background-container__description rte-content">
                                    <p>Baystone Corporation partners with customers to deliver real world value through accelerated digital transformation.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">10M$</span></p>
                                                    <p style="text-align: center;">Impact for a $100M capital project</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">20%</span></p>
                                                    <p style="text-align: center;">Increase in sales value of production</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">20%</span></p>
                                                    <p style="text-align: center;">Increase in equipment utilization</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">15%</span></p>
                                                    <p style="text-align: center;">Manufacturing cost reduction</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/offers/W004-macro-layer-07-10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/W004-macro-layer-07-10-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Industry is transforming. Transformation is hard.</h2>
                                                        </div>
                                                        <div class="description rte-content">
                                                            <p>Learn more about the 4 organizational disconnects that industrial companies face with the IX program.</p>
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
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Baystone Corporation has more than 50 years of industrial software innovation.</h2>
                                <div class="background-container__description rte-content">
                                    <p>Learn how our customers have maximized their ROI through partnering with Baystone Corporation.</p>
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
                                                            <h2>Are you digitally mature?</h2>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>How far into your digital transformation journey are you? Have you struggled to succeed? Do you know where to begin?</p>
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
                                <h2 class="background-container__heading">The Latest Thinking</h2>
                                <div class="background-container__description rte-content">
                                    <p>Access up-to-date resources that make digital transformation a reality with new ideas, new opportunities, and next steps</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-carousel section">
                                                <section class="custom-carousel">
                                                    <div class="slider">
                                                        <div class="tiny-slider">
                                                            <a class="tiny-slider-buttons tiny-slider-buttons--prev" href="#"><span class="icon-left-arrow"></span></a>
                                                            <div class="viewport">
                                                                <ul class="overview">
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/432x324/W010-digital-transformation03-07-20.jpg.rendition/mobile-1x.png" alt="Engineer_CardBlock_600x400" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Digital Transformation Key Enablers</h3>
                                                                                    <div class="card-v3__description rte-content">
                                                                                        <p>Discover how industrial digital transformation improves profitability and return on capital.</p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/432x324/W010-digital-transformation02-07-20.jpg.rendition/mobile-1x.png" alt="GartnerReport_CardBlock_600x400" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Digital Twin Strategies</h3>
                                                                                    <div class="card-v3__description rte-content">
                                                                                        <p>Improve multi-party collaboration around connected assets </p>

                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/432x324/W010-digital-transformation01-07-20.jpg.rendition/mobile-1x.png" alt="Technician_CardBlock_600x400" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Cyber Security for Industrial Networks</h3>
                                                                                    <div class="card-v3__description rte-content">
                                                                                        <p>How to protect your critical data in the IIoT age.</p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <a class="tiny-slider-buttons tiny-slider-buttons--next" href="#"><span class="icon-right-arrow"></span></a>
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
                                                            <h2>Find Your Digital Compass</h2>
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
                                <h2 class="background-container__heading">How Does Baystone Corporation Accelerate Digital Transformation?</h2>
                                <div class="background-container__description rte-content">
                                    <p style="text-align: left;">At Baystone Corporation, we partner with customers to lead this transformation, enhancing engineering, operations, and performance, to maximize business value. Our comprehensive software portfolio provides everything you need to transform your industry and unlock real business value.</p>
                                </div>
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
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation05-7-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation05-7-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-digital-transformation05-7-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1641334813765" name="accordionwithcard" checked />
                                                                <label class="accordion-card-leaf--heading" for="rd-1641334813765">
                                                                    <h3>Asset Performance Management</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation04-7-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation04-7-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-digital-transformation04-7-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1641334813781" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1641334813781">
                                                                    <h3>Unified Engineering</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation helps customers reduce capital project time by up to 20%, reduce cost by 30% and overall CAPEX  by 5% through Unified Engineering.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation03-7-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation03-7-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-digital-transformation03-7-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1641334813793" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1641334813793">
                                                                    <h3>Unified Operations Center</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation offers edge to enterprise visibility and control that enables agile, efficient and responsive operations.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation02-7-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation02-7-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-digital-transformation02-7-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1641334813805" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1641334813805">
                                                                    <h3>Value Chain Optimization</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation delivers a unified operations management solution across the end-to-end value chain from feedstock supply trading to distribution.</p>
                                                                    </div>

                                                                </div>
                                                            </div>

                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation01-7-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation01-7-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-digital-transformation01-7-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1641334813816" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1641334813816">
                                                                    <h3>Unified Project Execution</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Baystone Corporation integrates its digital project execution and construction management capabilities integrated with its engineering solutions.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image-text-component__colunm-two">
                                                            <img class="lozad" data-src="/content/dam/aveva/images/cards/664x498/W007-digital-transformation05-7-20.jpg" alt="Black Image" />
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
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-small u-banner-light" data-bg="/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Embrace Your Digital Transformation</h2>
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
                                                            Contact Us
                                                        </a>
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
