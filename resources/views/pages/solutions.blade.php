@extends('pages.layouts.app')
@section('content')

<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/1920x480/W001-solutions-07-20-new.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/1920x480/W001-solutions-07-20-new.jpg);">
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
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Solutions</span>
                                                    <meta itemprop="position" content="2" />
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
                                                            <h1>Solutions</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
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
                    <div class="secondarynavigation aem-GridColumn aem-GridColumn--default--12">
                        <nav class="secondary-nav" aria-label="Secondary Navigation" role="navigation">
                            <ul class="container-md">
                                <li>
                                    <a target="_self" data-cta="Engineering" data-at="Engineering" data-track="Secondary Navigation" href="{{ route('engineering') }}">Engineering</a>
                                </li>
                                <li>
                                    <a target="_self" data-cta="Operations" data-at="Operations" data-track="Secondary Navigation" href="{{ route('operations') }}">Operations</a>
                                </li>
                                <li>
                                    <a target="_self" data-cta="Performance" data-at="Performance" data-track="Secondary Navigation" href="{{ route('performance') }}">Performance</a>
                                </li>
                                <li>
                                    <a target="_self" data-cta="Digital Transformation" data-at="Digital Transformation" data-track="Secondary Navigation" href="{{ route('digital_transformation') }}">Digital Transformation</a>
                                </li>
{{--                                <li>--}}
{{--                                    <a target="_self" data-cta="Cloud" data-at="Cloud" data-track="Secondary Navigation" href="/en/solutions/digital-transformation/cloud-computing/">Cloud</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a target="_self" data-cta="Subscription" data-at="Subscription" data-track="Secondary Navigation" href="/en/solutions/flex-subscription/">Subscription</a>--}}
{{--                                </li>--}}
                            </ul>
                        </nav>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F2F5F7; width: 100%; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Baystone Corporation Addresses Your Business Challenges</h2>
                                <div class="background-container__description rte-content">
                                    <p>Discover more about Baystone Corporation’s solutions, helping to empower industry leaders to optimize value, efficiency and sustainability. </p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-3">
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-icons section">
                                                <div class="card-v2-t1 clickable-card card-margin">
                                                    <img class="card-v2-t1__img lozad" data-src="/content/dam/aveva/images/cards/icons/64x64/W012-Engineering-icon-07-20.jpg" alt="Engineering" />
                                                    <div class="card-v2-t1__body">
                                                        <h3 class="card-v2-t1__heading">Engineering</h3>
                                                        <div class="card-v2-t1__desciption">
                                                            <p>Deliver capital projects to operations efficiently, on-time and on-budget</p>
                                                        </div>
                                                        <div class="card-v2-t1__link card-link">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">

                                                                    <a href="{{ route('engineering') }}" data-at="Explore-Engineering" data-track="card_icons" data-title="Engineering" data-cta="Explore" class="body-action  " target="_self">Explore</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-icons section">
                                                <div class="card-v2-t1 clickable-card card-margin">
                                                    <img class="card-v2-t1__img lozad" data-src="/content/dam/aveva/images/cards/icons/64x64/W012-Operations-icon-Jul-20.jpg" alt="Operations" />
                                                    <div class="card-v2-t1__body">
                                                        <h3 class="card-v2-t1__heading">Operations</h3>
                                                        <div class="card-v2-t1__desciption">
                                                            <p>Eliminate value leaks, increase operational efficiency and maximize collaboration</p>
                                                        </div>
                                                        <div class="card-v2-t1__link card-link">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">

                                                                    <a href="{{ route('operations') }}" data-at="Explore-Operations" data-track="card_icons" data-title="Operations" data-cta="Explore" class="body-action  " target="_self">Explore</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-4">
                                            <div class="card-icons section">
                                                <div class="card-v2-t1 clickable-card card-margin">
                                                    <img class="card-v2-t1__img lozad" data-src="/content/dam/aveva/images/cards/icons/64x64/W012-Performance-icon-Jul-20.jpg" alt="Performance" />
                                                    <div class="card-v2-t1__body">
                                                        <h3 class="card-v2-t1__heading">Performance</h3>
                                                        <div class="card-v2-t1__desciption">
                                                            <p>Balance operating expenses and risk to optimize the supply chain, production and asset performance</p>
                                                        </div>
                                                        <div class="card-v2-t1__link card-link">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">

                                                                    <a href="{{ route('performance') }}" data-at="Explore-Performance" data-track="card_icons" data-title="Performance" data-cta="Explore" class="body-action  " target="_self">Explore</a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-icons section">
                                                <div class="card-v2-t6 clickable-card card-margin">
                                                    <img class="lozad" data-src="/content/dam/aveva/images/cards/icons/64x64/W012-Digital-transformation-icon-Jul-20.jpg" alt="Digital Transformation" />
                                                    <div class="card-v2-t6__body">
                                                        <div class="card-v2-t6__textwrapper">
                                                            <h3 class="card-v2-t6__heading">Plan your next digital transformation</h3>
                                                            <div class="card-v2-t6__description">
                                                                <p>Optimize your strategy with our interactive digital maturity calculator</p>
                                                            </div>
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/offers/W004_Sustainability_UN-SDGs_10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/W004_Sustainability_UN-SDGs_10-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Discover how our software supports the United Nations Sustainable Development Goals</h2>
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
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-Solutions-SubscriptionServices-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Baystone Corporation Flex</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Just imagine if you could have complete flexibility in how you purchase, design and use your industrial software.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-PointCloudManagement-Connect-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Baystone Corporation™ Connect</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Our common cloud platform: securely access the broadest and deepest industrial software-as-a-service (SaaS) portfolio enhanced by the power of industrial Artificial Intelligence (AI).
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
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-small u-banner-light" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/offers/aveva-cta-bg-texture.png" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/aveva-cta-bg-texture.png);">
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


                                                        <a href="{{ route('contact') }}" class="secondary-white-btn  ">
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
