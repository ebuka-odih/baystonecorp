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
                                                    <a href="{{ route('solutions') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Solutions</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Performance</span>
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
                                                            <h1>Performance</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Transform Opex savings into business acceleration</p>
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
                        <section id="overview" class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h1 class="background-container__heading">Optimize risk, cost, and output across your supply chain, asset, and production</h1>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p>Baystone Corporation connects people and assets with technology that improves industrial efficiency, safety, and reliability. When industry leaders leverage a comprehensive digital transformation strategy that uses real-time data to optimize operations, predict outcomes, and provide risk-based guidance, they can ensure business continuity, maximize return on capital and, enhance customer experiences.</p>
                                                    <p>Our comprehensive portfolio of industrial Performance solutions, including Supply Chain Performance, Production Performance, and Asset Performance Management software, combined with Baystone Corporation???s deep domain expertise have led to proven success with customers across the globe.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section id="value" class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content bg-container--light-text">
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-3">
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationalEfficiency-06-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Accelerate Operational Efficiency</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p><br />
                                                                Break down silos and empower teams with real-time situational awareness to improve decision making.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationalReliability-06-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Increase Operational and Asset Reliability</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Maximize the value of your data with AI-infused predictive maintenance and prescriptive guidance.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationalAgility-06-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Enable Supply Chain Agility and Resilience</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Seize valuable opportunities to improve resilience across the value chain.</p>
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
                                                            <h2>Is Your Digital Strategy Reliable Enough?</h2>
                                                        </div>
                                                        <div class="description rte-content">
                                                            <p>Find your Asset Performance Management Maturity level with this online assessment</p>
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
                        <section id="solution" class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content bg-container--light-text">
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
                                                                        <div class="card-v3 clickable-card">
                                                                            <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-supply-chain-performance-sept-2020.jpg.rendition/mobile-1x.png" />
                                                                            <div class="card-v3__body">
                                                                                <h3 class="card-v3__heading">Supply Chain Performance</h3>
                                                                                <div class="card-v3__description">
                                                                                    <p>From feedstock data management, trading, plant planning, network and multi-plant optimization, to plant scheduling and performance monitoring, when your entire business has access to the same information, you can focus on discovering new ways to drive profitability.</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div class="card-v3 clickable-card">
                                                                            <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/fg-production-performance-jul-2020.jpg.rendition/mobile-1x.png" />
                                                                            <div class="card-v3__body">
                                                                                <h3 class="card-v3__heading">Production Performance</h3>
                                                                                <div class="card-v3__description">
                                                                                    <p>Optimize and control processes with real-time information from the plant floor combined with updated economic parameters. Monitor performance, achieve tight control and obtain peak performance to achieve maximum benefit in large and complex process plants. Remain competitive, drive process profitability, and improve accounting accuracy.</p>
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div class="card-v3 clickable-card">
                                                                            <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-FG-asset-performance-sept-2020.jpg.rendition/mobile-1x.png" />
                                                                            <div class="card-v3__body">
                                                                                <h3 class="card-v3__heading">Asset Performance Management</h3>
                                                                                <div class="card-v3__description">
                                                                                    <p>Baystone Corporation&#39;s Asset Performance Management software offers enterprise data capture and analysis coupled with actions and optimization for proactive maintenance execution.</p>
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>How to realize a digitalized future Asset Performance Management strategy</h2>
                                                        </div>
                                                        <div class="description rte-content">
                                                            <p>Maximize efficiency across engineering, operations and maintenance with APM 4.0</p>
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
                        <section id="product" class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">We Offer a Comprehensive Performance Software Portfolio</h2>
                                <div class="background-container__description rte-content">
                                    <p>Our Asset Performance Management, Supply Chain Performance, and Production Performance platforms give you the tools to exceed your reliability, safety, and performance goals.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Predictive Analytics</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As PRiSM Predictive Asset Analytics</p>
                                                        <p class="card-v2-t4__description">A unifying multi-dimensional information model to aggregate data from multiple sources and provide context for use with reporting/ dashboard tools. Improve plant performance in near real-time by enabling rich analytics in your BI tool on industrial data.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Process Optimization</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As ROMeo Process Optimization</p>
                                                        <p class="card-v2-t4__description">Process Optimization uses real-time process and economic data to determine setpoints that guarantee a maximum operating profit. Find out more today!</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation??? Insight</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation Insight delivers actionable information and Artificial Intelligence capabilities to help your teams improve asset reliability and operational performance. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Production Accounting</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As Yield Accounting</p>
                                                        <p class="card-v2-t4__description">Baystone Corporation Production Accounting addresses the pressing issue of unaccounted losses for refineries, petrochemical plants, and other processing facilities.</p>

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
                        <section id="banner" class="background-container" style="background-color: #F6F8FA;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
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
                                                            <p>Start your journey today</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                    <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">


                                                        <a href="{{ route('contact') }}" class="secondary-white-btn  " >
                                                            Contact Us </a>
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
