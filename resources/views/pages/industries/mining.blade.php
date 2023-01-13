@extends('pages.layouts.app')
@section('content')


    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001_Mining_11-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001_Mining_11-20.jpg);">
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
                                                    <span itemprop="name">Mining</span>
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
                                                            <h1>Mining</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Exceed reliability, safety and performance goals like never before</p>
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
                                <h2 class="background-container__heading">Digital Mining Transformation Begins with You</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;">In a volatile market, you need to ensure your mining operations perform as efficiently as possible. Baystone Corporation empowers our customers to manage the entire asset lifecycle to maximize production, increase asset reliability, and improve workforce safety.</p>
                                                    <p style="text-align: center;">Digital technology can help you unite, analyse, and manage your engineering data, processes, and supply chain in an intelligent and efficient way. It can also help you operate with the highest levels of corporate social responsibility.</p>
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
                                                            <h2>&#34;We’ve improved product quality by 125% through our Digital at Exxaro strategy with Baystone Corporation&#34;</h2>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Watch Pleasure Mnisi, CTO Exxaro, share his 3 secrets of successful digital transformation.&quot;</p>
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
                                <h2 class="background-container__heading">Baystone Corporation Solutions That Fit Your Mine</h2>
                                <div class="background-container__description rte-content">
                                    <p>Identify, target &amp; solve pain points within your mining enterprise through Baystone Corporation’s complete end-to-end industrial portfolio, designed to help your mine conquer any operational issue, no matter the size or complexity.</p>
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
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007_Mining01_11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007_Mining01_11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007_Mining01_11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676758" name="accordionwithcard" checked />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676758">
                                                                    <h3>Digital Mining Transformation E-Book</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Digitally transform your mining operations and take your business to new heights of productivity and profitability. </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007_Mining02_11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007_Mining02_11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007_Mining02_11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676808" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676808">
                                                                    <h3>Value Chain Optimization</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Transform your entire mining value chain from pit-to-port to increase overall visibility and productivity throughout the business.</p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007_Mining03_11-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007_Mining03_11-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007_Mining03_11-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640753676853" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640753676853">
                                                                    <h3>Asset Performance Management 4.0 in Mining</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Make the most of your existing assets by harnessing the incredible power of Industry 4.0 and Asset Performance Management in Mining. </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image-text-component__colunm-two">
                                                            <img class="lozad" data-src="/content/dam/aveva/images/cards/664x498/W007_Mining01_11-20.jpg" alt="Black Image" />
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
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_Mining02_11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Black Rock Mine Operations (BRMO)</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Black Rock Mine Operations (BRMO), which excavates and produces 3.6 million tons of iron and manganese ore per year, saw a double-digit growth in productivity after creating a central control room powered by Baystone Corporation solutions. Data quality has improved as much as 500% from some sources, and in-shift reporting skyrocketed from just 50% to as much as 90%.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_Mining01_11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">MMG Limited</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                MMG Limited implemented Baystone Corporation MES solution to standardize asset utilization across five mines globally and take the old OEE lag indicator into a real-time lead indicator.
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
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
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
                                                        <h3 class="card-v2-t4__heading">Value Chain Optimization</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation delivers end-to-end value chain optimization to help you reduce value leaks, sustain productivity, and make better, faster decisions.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Unified Operations Center</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers edge to enterprise visibility and control that enables agile, efficient and responsive operations. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Performance</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals. </p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Unified Project Execution</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation provides digital project execution and construction management capabilities integrated within the engineering solutions.​</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Unified Engineering</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation™ Unified Engineering brings together engineering, design and simulation to enable global multi-discipline teams to work concurrently in a common, data-centric environment for maximum transparency and collaboration.</p>

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
