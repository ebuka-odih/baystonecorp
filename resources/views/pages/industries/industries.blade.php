@extends('pages.layouts.app')
@section('content')


<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="false" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/1920x480/W001-industries-07-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/1920x480/W001-industries-07-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="breadcrumb-wrapper">
                                        <nav class="cmp-breadcrumb" aria-label="Breadcrumb">
                                            <ol class="cmp-breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="/en/" class="cmp-breadcrumb__item-link" itemprop="item"> <span itemprop="name">Home</span> </a>
                                                    <meta itemprop="position" content="1" /> </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <span itemprop="name">Industries</span>
                                                    <meta itemprop="position" content="2" /> </li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h1>Baystone Corporation Solutions by Industry</h1> </div> <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Drive value and sustainability by applying technologies and expertise to address high value industry challenges</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
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
                                <h2 class="background-container__heading">Software Solutions by Industry</h2>
                                <div class="background-container__description rte-content">
                                    <p>Baystone Corporation solutions drive value and sustainability by applying technology and expertize to address industry challenges and continuously improve industrial operations. We work with leading companies in multiple industries to drive profitability and maximize return on capital across engineering, operations and performance.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/316x237/W011-chemicals-industry-card-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Chemicals</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('chemicals') }}" class="body-action" data-at="Link-Chemicals" data-track="Card Images" data-title="Chemicals" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/664x498/W010-Energy-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Oil and Gas</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('energy') }}" class="body-action" data-at="Link-Oil and Gas" data-track="Card Images" data-title="Oil and Gas" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3">
                                                    <img class="card-v3__img lozad" height="240" data-src="img/construction.JPG" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Construction</h3>
                                                        <div class="card-link card-v3__link"> <a href="/en/industries/food-beverage/" class="body-action" data-at="Link-Food and Beverage/CPG" data-track="Card Images" data-title="Food and Beverage/CPG" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3">
                                                    <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/664x498/W010-Infrastructure-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Infrastructure</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('infrastructure') }}" class="body-action" data-at="Link-Infrastructure" data-track="Card Images" data-title="Infrastructure" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space horizontal-space--12px" /> </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/316x237/W011-manufacturing-industry-card-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Manufacturing</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('manufacturing') }}" class="body-action" data-at="Link-Manufacturing" data-track="Card Images" data-title="Manufacturing" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/316x237/W011-marine-industry-card-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Marine</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('marine') }}" class="body-action" data-at="Link-Marine" data-track="Card Images" data-title="Marine" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/664x498/W010-Mining-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Mining</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('mining') }}" class="body-action" data-at="Link-Mining" data-track="Card Images" data-title="Mining" data-cta="Link" target="_self">Link</a> </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin mini-card-v3"> <img class="card-v3__img lozad" data-src="/content/dam/aveva/images/cards/316x237/W011-power-utilities-industry-card-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Power and Utilities</h3>
                                                        <div class="card-link card-v3__link"> <a href="{{ route('power_utilities') }}" class="body-action" data-at="Link-Power and Utilities" data-track="Card Images" data-title="Power and Utilities" data-cta="Link" target="_self">Link</a> </div>
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-bg="/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>See how our Digital Factory Experience can guide you to success</h2> </div> <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Explore our interactive guide with digital transformation solutions for the power, oil and gas, chemicals, and consumer packaged goods industries </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                        <div class="hero-banner-btn-wrapper">
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                    <div class="smartbutton embed aem-GridColumn aem-GridColumn--default--12"> <a href="http://www.aveva.com/dfe" data-at="Learn More-See how our Digital Factory Experience can guide you to success" data-track="herobanner" data-title="See how our Digital Factory Experience can guide you to success" data-cta="Learn More" class="secondary-white-btn  " rel="noopener noreferrer" target="_blank">Learn More</a> </div>
                                                </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
                                            </div>
                                            <div class="smartbutton embed section">
                                                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 "> </div>
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
    </main>
</div>

@endsection
