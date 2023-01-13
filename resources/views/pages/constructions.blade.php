@extends('pages.layouts.app')
@section('content')

    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
        <main id="main-content">
            <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                        <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                            <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001-Operations-11-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001-Operations-11-20.jpg);">
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
                                                        <span itemprop="name">Construction </span>
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
                                                                <h1>Construction</h1>
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
                            <section id="overview" class="background-container" style="background-color: #FFFFFF; padding-top: 40px;" role="contentinfo" aria-label="Background Container">
                                <div class="background-container-wrapper container-md bg-container--center-content ">
                                    <h2 class="background-container__heading">A RANGE OF SOLUTIONS</h2>
                                </div>
                                <div class="column-control section">
                                    <div class="container">
                                        <div class="row align-items-center coltype-1">
                                            <div class="col col-12">
                                                <div class="text section">
                                                    <div class="cmp-text" style="width:100%;">
                                                        <h4><i>
                                                            Our civil expertise allows us to be nimble, save time and money, and address clients’ specific challenges and requirements.
                                                            </i>
                                                        </h4>
                                                        <p>
                                                            Baystone Corporation offers a wide range of self-perform solutions for horizontal work on all types of projects. These include excavation, grading, and underground utility work, as well as concrete for roadways, runways, bridges and walls, among other scopes. We self-perform an average of 2 million yards of earthwork and over 100,000 cubic yards of concrete paving on roadways, airfields, and intermodal facilities each year.

                                                        </p>
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
                                </div>
                                <div class="column-control section">
                                    <div class="container">
                                        <div class="row align-items-center coltype-3">
                                            <div class="col col-12 col-sm-6">
                                                <div class="card-images section">
                                                    <div class="card-v3 clickable-card card-margin">
                                                        <img class="card-v3__img" src="{{ asset('img/Road_Work.jpg') }}" />
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
                                            <div class="col col-12 col-sm-6">
                                                <div class="card-images section">
                                                    <div class="card-v3 clickable-card card-margin">
                                                        <img class="card-v3__img" src="{{ asset('img/Relationship-Advantage.jpg') }}" />
                                                        <div class="card-v3__body">
                                                            <h3 class="card-v3__heading">Increase Operational and Asset Reliability</h3>
                                                            <div class="card-v3__description rte-content">
                                                                <p>Maximize the value of your data with AI-infused predictive maintenance and prescriptive guidance.</p>
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
                            <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="false" data-bg="/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg);">
                                <div class="container-md hero-banner__wrapper">
                                    <div class="hero-banner-left-section">
                                        <div class="hero-banner-content">
                                            <div>
                                                <section>
                                                    <div class="heading-horizontalline-container ">
                                                        <div class="heading-horizontalline-container__wrapper ">
                                                            <div class="heading">
                                                                <h2>Learn how to accelerate your digital transformation with Operational Excellence</h2>
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
                            <section id="overview" class="background-container" style="background-color: #FFFFFF; padding-top: 40px;" role="contentinfo" aria-label="Background Container">
                                <div class="background-container-wrapper container-md bg-container--center-content ">
                                    <h2 class="background-container__heading">RELATIONSHIP ADVANTAGE</h2>
                                </div>
                                <div class="column-control section">
                                    <div class="container">
                                        <div class="row align-items-center coltype-1">
                                            <div class="col col-12 col-md-6">
                                                <div class="text section">
                                                    <div class="cmp-text" >
                                                        <h4><i>
                                                                Baystone Corporation civil personnel specialize in partnering with stakeholders and meeting tight deadlines.

                                                            </i>
                                                        </h4>
                                                        <p>Through each phase, we have the flexibility with civil scopes to provide better project control and cost certainty to owners. This can range from identifying unseen issues through BIM technologies all the way to self-performing a time-sensitive critical-path element, without having to work around third-party availability. Also, our longstanding relationships with private and public utilities give us an advantage when performing highly technical underground work, which might otherwise pose unnecessary risk or expense.

                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col col-12 col-md-6">
                                                <div class="text section">
                                                    <div class="cmp-text" >
                                                <img height="300" src="{{ asset('img/construction.JPG') }}" alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>

                        <br>

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
