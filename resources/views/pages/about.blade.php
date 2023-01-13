@extends('pages.layouts.app')
@section('content')

    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001_About_Us_10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001_About_Us_10-20.jpg);">
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
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">About Us</span>
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
                                                            <h1>About Us</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Baystone Corporation pioneers innovations that empower industry leaders to optimize value, efficiency and sustainability</p>
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
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Getting to Know Baystone Corporation</h2>
                                <div class="background-container__description rte-content">
                                    <p>Learn more about Baystone Corporation’s culture, diversity and people and our commitment to help shape the future of industry and the world. </p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">About Baystone Corporation</h3>
                                                        <p class="card-v2-t4__description">Discover Baystone Corporation’s culture, values and why our customers choose to work with us to shape their sustainable future</p>
                                                        <div class="card-link card-v2-t4__link">
                                                            <a href="{{ route('about_premaxcorp') }}" class="body-action" data-at="Read More-About Baystone Corporation" data-track="Card 2x2 Section Layout" data-title="About Baystone Corporation" data-cta="Read More" target="_self">Read More</a>
                                                        </div>
                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Success Stories</h3>
                                                        <p class="card-v2-t4__description">This is what our stories are all about: sharing innovative examples of how companies are performing their work better, faster, less expensively, and greener on the fast track to achieving operational excellence with a little help from Baystone Corporation.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Press Releases</h3>
                                                        <p class="card-v2-t4__description">Get the latest technology announcements, insights, and customer stories within the Plant, Marine, and Infrastructure engineering industries.</p>
{{--                                                        <div class="card-link card-v2-t4__link">--}}
{{--                                                            <a href="/en/about/news/press-releases/" class="body-action" data-at="Read More-Press Releases" data-track="Card 2x2 Section Layout" data-title="Press Releases" data-cta="Read More" target="_self">Read More</a>--}}
{{--                                                        </div>--}}
                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Investor Relations</h3>
                                                        <p class="card-v2-t4__description">Our dedicated Investor portal with the latest trading updates, Annual Report and results, Regulatory News and Investor Proposition.</p>

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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/offers/W004_Three-Pillars-Infographic_0721.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/W004_Three-Pillars-Infographic_0721.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Our pledge to drive the sustainable industries of the future</h2>
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
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Partners</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation’s partner ecosystem consists of over 5,000 business partners worldwide and growing. These expert partners provide sales, delivery, and technology expertise that supports Baystone Corporation’s Monitor &amp; Control, Asset Performance Management, Engineering, and Planning and Operation revenue growth.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Career</h3>
                                                        <p class="card-v2-t4__description">At Baystone Corporation, we create pioneering, end-to-end industrial software that enables the world’s most innovative companies to build a better future.</p>

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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="/content/dam/aveva/images/banners/offers/awd-3_OneSpace-1920x274_r1B.png" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/awd-3_OneSpace-1920x274_r1B.png);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>See Innovation live at Baystone Corporation World Digital</h2>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                    <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12">

                                                        <a href="{{ route('contact') }}" data-at="Learn More-See Innovation live at Baystone Corporation World Digital" data-track="herobanner" data-title="See Innovation live at Baystone Corporation World Digital" data-cta="Learn More" class="secondary-white-btn  " rel="noopener noreferrer" target="_blank">Learn More</a>

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
