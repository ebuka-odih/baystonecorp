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
                                                    <a href="{{ route('solutions') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">Solutions</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Operations </span>
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
                                                            <h1>Operations</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Master operations management through planning, cost reduction, asset performance optimization, and bridging OT and IT systems. Pinpoint the best strategy for the business with an intelligent assessment that delivers operations excellence across the enterprise</p>
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
                                <h2 class="background-container__heading">Overcome Challenges in Your Operations</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p>Drive Operational Excellence and turn market opportunities into sustainable business value with performance intelligence. Eliminate silos, power supply chain agility, increase asset reliability, and optimize efficiency from edge to enterprise.</p>
                                                    <p>Baystone Corporation is the only industrial software solution provider that can provide everything from monitoring and control at the HMI/SCADA and Enterprise levels, planning and supply chain systems for operational execution, and a path toward zero unplanned downtime with Asset Performance Management making it easy to scale operations, empower your people, and optimize production capacity as the business grows.</p>
                                                    <p> </p>
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
                        <section id="solution" class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Our Solutions</h2>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space horizontal-space--12px" />
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationalControl-06-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Baystone Corporation Operations Control</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                The Baystone Corporation Operations Control solution empowers operations teams with the software necessary for modern industrial operations and offers a consistent method of connecting teams across the business.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/fg-operations-control-hmi-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Operations Control and HMI</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Operations Control and HMI software offers a winning strategy for meeting the complex demands of your current requirements along with the flexibility to need for rapid change and expansion.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationsExecution-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Operations Execution</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Baystone Corporation Operations Execution solutions ensures operations is always executing on the actual schedule and scheduling is always aware of the actual operations.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W010-OperationsInformation-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Operations Information</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Baystone Corporation Operations Information solutions funnel multiple data sources into a single functional lens, enabling your people to visualize operational data.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space horizontal-space--12px" />
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-FB-HMI-Process-and-Operators-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">HMI - The Interface Between Process and Operators</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Used in more than one-third of the world’s industrial facilities, in virtually every country and industry, Baystone Corporation HMI solutions continue to deliver business value in engineering simplicity, operational agility, and real-time performance mastery.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/fg-operator-training-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">What is SCADA - Making Use of Operational Data</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                SCADA stands for supervisory control and data acquisition. A world class SCADA system of software can provide gains in efficiency and productivity.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-manufacturing-operations-management-03-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">Manufacturing Operations Management</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Manufacturing Operations Management (MOM) is the art of setting the policies and rules necessary to maintain production value, ensuring that everyone and everything operate accordingly. It involves the optimization of equipment, inventory, process execution and staffing around strategic objectives.
                                                            </p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-images section">
                                                <div class="card-v3 clickable-card card-margin">
                                                    <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-overall-equipment-effectiveness-03-21.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v3__body">
                                                        <h3 class="card-v3__heading">What is OEE Overall Equipment Effectiveness?</h3>
                                                        <div class="card-v3__description">
                                                            <p>
                                                                Overall Equipment Effectiveness (OEE) can reduce costs &amp; increase return on assets by improving your operational efficiency &amp; asset utilization.
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="false" data-bg="/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/offers/1920x274/W004-offer-banner-jul-2020.jpg);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Introducing our latest Baystone Corporation Flex offering, Baystone Corporation Operations Control</h2>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Empowers teams with a consistent method of collaborating and operating from a cohesive and sustainable software framework, from edge to enterprise.</p>
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
                        <section id="success" class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Operational Excellence in Action</h2>
                                <div class="background-container__description rte-content">
                                    <p>Discover how our customers are innovating to solve complex challenges and building a better more sustainable future with our operations software.</p>
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
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-NewBelgiumBrewing-11-20.jpg.rendition/mobile-1x.png" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">New Belgium Brewing Co.</h3>
                                                                                    <div class="card-v3__description">
                                                                                        <p>
                                                                                            MES Performance software enables New Belgium Brewing Company to increase packaging production capacity, and decrease downtime by more than 50%.
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W09-Italpresse_664x498.jpg.rendition/mobile-1x.png" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Italpresse Gauss</h3>
                                                                                    <div class="card-v3__description">
                                                                                        <p>
                                                                                            Italpresse Gauss tapped new revenue streams by creating a custom HMI and remote maintenance solution based on Baystone Corporation’s Monitor and Control and AR/VR platforms.
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-Barcelona-El-Prat-08-20.jpg.rendition/mobile-1x.png" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">The Barcelona-El Prat International Airport</h3>
                                                                                    <div class="card-v3__description">
                                                                                        <p>
                                                                                            Barcelona Airport standardised on Baystone Corporation software, achieving an integrated, reliable, and cost-efficient control architecture for future growth.
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_HenkelSuccessStory_10-20.jpg.rendition/mobile-1x.png" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Henkel</h3>
                                                                                    <div class="card-v3__description">
                                                                                        <p>
                                                                                            Henkel Laundry &amp; Home Care builds a digital backbone using Baystone Corporation to meet its sustainability and efficiency goals.
                                                                                        </p>
                                                                                    </div>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li class="sq">
                                                                        <div>
                                                                            <div class="card-v3 clickable-card card-margin">
                                                                                <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_ADNOC_10-20.jpg.rendition/mobile-1x.png" />
                                                                                <div class="card-v3__body">
                                                                                    <h3 class="card-v3__heading">Abu Dhabi National Oil Company (ADNOC)</h3>
                                                                                    <div class="card-v3__description">
                                                                                        <p>
                                                                                            ADNOC, one of the world’s leading energy producers, harnessed Baystone Corporation Unified Operations Center technology to create its own Panorama Digital Command Centre. This fully integrated, real-time data visualization center enables $60M to $100M in savings by centralizing millions of data points across the entire ADNOC value chain.
                                                                                        </p>
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
