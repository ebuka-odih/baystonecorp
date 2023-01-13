@extends('pages.layouts.app')
@section('content')

<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="/content/dam/aveva/images/banners/top/W001_Chemicals_1920x600_10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001_Chemicals_1920x600_10-20.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="breadcrumb-wrapper">
                                        <nav class="cmp-breadcrumb" aria-label="Breadcrumb">
                                            <ol class="cmp-breadcrumb__list" itemscope itemtype="http://schema.org/BreadcrumbList">
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="/en/" class="cmp-breadcrumb__item-link" itemprop="item"> <span itemprop="name">Home</span> </a>
                                                    <meta itemprop="position" content="1" /> </li>
                                                <li class="cmp-breadcrumb__item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <a href="{{ route('industries') }}" class="cmp-breadcrumb__item-link" itemprop="item"> <span itemprop="name">Industries</span> </a>
                                                    <meta itemprop="position" content="2" /> </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"> <span itemprop="name">Chemicals</span>
                                                    <meta itemprop="position" content="3" /> </li>
                                            </ol>
                                        </nav>
                                    </div>
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h1>Digital twins powered by AI and cloud help improve chemical processes and operations, driving sustainability and safety</h1> </div> <span class="hr"></span>

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
                                <h2 class="background-container__heading">Maximize Value with Savings up to $30M/year</h2> </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;margin:auto">
                                                    <p style="text-align: center;">Baystone Corporation´s Digital Twin supports chemical plants during engineering &amp; design, operations and also to improve the learning process. Leading chemical companies rely on Baystone Corporation to actively drive value &amp; sustainability. By applying our technologies and expertise, we enable faster engineering and improved manufacturing. With Baystone Corporation, you can optimize CAPEX and reach more agile production, better quality management, and compliance with ESG targets.</p>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section id="solution" class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">What Technology does Baystone Corporation Offer for Chemical Companies?</h2> </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h3>Baystone Corporation Solutions for Chemicals<br />
                                                    </h3> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h3>Basic Chemicals</h3>
                                                    <p>Baystone Corporation works to maximize yield, throughput throughout and energy savings with a digital twin for operations. We help you ensure safe operations, reliable planning &amp; scheduling and the best utilization for your feedstock. This helps you to actively drive value and sustainability to continuously improve manufacturing, provide more flexible and agile production capabilities and reduce energy and emissions.
                                                        <br />
                                                        <br /> We enable 15 out of the top 15 chemical companies and most petrochemical crackers worldwide, with a highly comprehensive portfolio that ties profitability to sustainability goals.</p>
                                                </div>
                                            </div>
{{--                                            <div class="smartbutton embed section"> <a href="{{ route('basic_chemicals') }}" data-at="Learn more-" data-track="smartbutton" data-cta="Learn more" class="body-action margin-top-medium smart-link margin-bottom-medium smart-link" target="_self">Learn more</a> </div>--}}
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h3>Specialty Chemicals</h3>
                                                    <p>With the continuous need for innovation, Specialty Chemicals manufacturers need to increase product variety while safeguarding quality and safety. Baystone Corporation enables manufacturers to improve productivity (OEE), reduce costs, and provide the agility and traceability with a manufacturing execution system that supports the needs of the Specialty Chemicals market always to deliver more.</p>
                                                </div>
                                            </div>
{{--                                            <div class="smartbutton embed section"> <a href="/en/industries/chemicals/specialty-chemicals/" data-at="Learn more-" data-track="smartbutton" data-cta="Learn more" class="body-action margin-top-medium smart-link margin-bottom-medium smart-link" target="_self">Learn more</a> </div>--}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F6F8FA; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Explore Products by Solution</h2> </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Unified Engineering</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation™ Unified Engineering brings together engineering, design and simulation to enable global multi-discipline teams to work concurrently in a common, data-centric environment for maximum transparency and collaboration.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Performance</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals. </p>
                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Value Chain Optimization</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation delivers end-to-end value chain optimization to help you reduce value leaks, sustain productivity, and make better, faster decisions.</p>
                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Unified Operations Center</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers edge to enterprise visibility and control that enables agile, efficient and responsive operations. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
{{--                            <div class="smartbutton embed text-center section"> <a href="/en/products/" data-at="View All Products-" data-track="smartbutton" data-cta="View All Products" class="next-step-action margin-top-medium smart-link " target="_self">View All Products</a> </div>--}}
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
                                                            <h2>Chemical companies can improve operational performance with enhanced execution</h2> </div>
                                                        <div class="description rte-content">
                                                            <p>According to LNS Research, chemical companies are beginning to recognize the value of data created within their plants. Still, for many, the use of that data does not extend past manufacturing operations. Learn how to unlock hidden value and drive profitability through better use of plant and process data.</p>
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
                </div>
            </div>
        </div>
    </main>
</div>

@endsection
