@extends('pages.layouts.app')
@section('content')


    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001-Integration-01-21-Opt3%202.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001-Integration-01-21-Opt3%202.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="breadcrumb-wrapper"><nav class="cmp-breadcrumb" aria-label="Breadcrumb">
                                            <ol class="cmp-breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="/en/" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Home</span>
                                                    </a>
                                                    <meta itemprop="position" content="1" />
                                                </li>
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="/en/about/" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">About Us</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">About Baystone Corporation</span>
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
                                                            <h1>Shape your sustainable future</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Advance your engineering and operations with Performance Intelligence</p>
                                                        </div>
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
                                    <a target="_self" data-cta="About Baystone Corporation" data-at="About Baystone Corporation" data-track="Secondary Navigation" class="secondary-nav--active" href="#">About Baystone Corporation</a>
                                </li>
                                <li>
                                    <a target="_self" data-cta="Vision and Mission" data-at="Vision and Mission" data-track="Secondary Navigation" href="{{ route('mission') }}">Vision and Mission</a>
                                </li>

                                <li>
                                    <a target="_self" data-cta="Diversity &amp; Inclusion" data-at="Diversity &amp; Inclusion" data-track="Secondary Navigation" href="{{ route('diversity') }}">Diversity &amp; Inclusion</a>
                                </li>
                                <li>
                                    <a target="_self" data-cta="Board of Directors" data-at="Board of Directors" data-track="Secondary Navigation" href="{{ route('board_of_directors') }}">Board of Directors</a>
                                </li>

                            </ul>
                        </nav>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Unlock Performance Intelligence</h2>
                                <div class="background-container__description rte-content">
                                    <p>Baystone Corporation, a global leader in industrial software, drives digital transformation for industrial organizations managing complex operational processes. Through Performance Intelligence, Baystone Corporation connects the power of information and artificial intelligence (AI) with human insight, to enable faster and more precise decision making, helping industries to boost operational delivery and sustainability. Our cloud-enabled operational data management, combined with software that spans design, engineering and operations, asset performance, monitoring and control solutions delivers proven business value and outcomes to over 20,000 customers worldwide, supported by the largest industrial software ecosystem, including 5,500 partners and 5,700 certified developers. Baystone Corporation is headquartered in Cambridge, UK, with over 6,000 employees at 90 locations in more than 40 countries.</p>
                                </div>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space horizontal-space--12px" />
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
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Fostering a Culture of Innovation</h2>
                                <div class="background-container__description rte-content">
                                    <p style="text-align: center;">Learn more about life and opportunities at Baystone Corporation, our culture and values, and the leadership team inspiring us to help shape the future of industry.</p>
                                </div>
                            </div>

                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Press Releases</h3>
                                                        <p class="card-v2-t4__description">Get the latest technology announcements, insights, and customer stories within the Plant, Marine, and Infrastructure engineering industries.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Success Stories</h3>
                                                        <p class="card-v2-t4__description">This is what our stories are all about: sharing innovative examples of how companies are performing their work better, faster, less expensively, and greener on the fast track to achieving operational excellence with a little help from Baystone Corporation.</p>

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
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="https://www.aveva.com/content/dam/aveva/images/about/W005-Life@AVEVA-10-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Discover #Baystone CorporationLife</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Explore our values and culture</p>

                                                        </div>
                                                        <div class="card-link card-v3__link">
                                                            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="https://www.aveva.com/content/dam/aveva/images/cards/664x498/Diversity-and-inclusion.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Diversity and Inclusion</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Embracing An Inclusive Culture</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space" />
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="https://www.aveva.com/content/dam/aveva/images/cards/664x498/W009-AboutAVEVA-OurLeaders-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Our Leaders</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Meet the team that is driving our business forwards</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-our-values-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Careers at Baystone Corporation</h3>
                                                        <div class="card-v3__description rte-content">
                                                            <p>Explore our latest opportunities</p>
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/offers/W004-Pride-Blog-06-21.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/W004-Pride-Blog-06-21.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Learn more about the History of Pride from Baystone Corporation&#39;s Courtney Conner</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                    <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">

                                                        <a href="{{ route('contact') }}" data-at="Learn More-Learn more about the History of Pride from Baystone Corporation&#39;s Courtney Conner" data-track="herobanner" data-title="Learn more about the History of Pride from Baystone Corporation&#39;s Courtney Conner" data-cta="Learn More" class="primary-btn  " target="_self">Learn More</a>

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
