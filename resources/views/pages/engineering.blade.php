@extends('pages.layouts.app')
@section('content')

<div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001-Engineering-Campaign-06-21.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001-Engineering-Campaign-06-21.jpg);">
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
                                                    <span itemprop="name">Engineering</span>
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
                                                            <h1>Engineering</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>In a market that is no longer afraid of change, building the sustainable, digital and connected plants of the future requires innovation, flexibility and collaboration. Explore how complete data integration between tools and streamlining processes can enable you to engineer the plant of the future.</p>
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
                                <h1 class="background-container__heading">Accelerate Capital Project Delivery and Digital Twin Creation</h1>
                                <div class="background-container__description rte-content">
                                    <p>Empower your teams and cut the time, cost, and risk of capital project engineering. Our solutions cover integrated process design, simulation, engineering, procurement, construction, and handover processes. Ensure your capital expenditure counts for more, projects are delivered on time, and plants can start up faster and safer.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">100s</span></p>
                                                    <p style="text-align: center;"> millions saved on project capital</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">15%</span></p>
                                                    <p style="text-align: center;">saved on total installed costs</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">30%</span></p>
                                                    <p style="text-align: center;">improved efficiency on 3D design</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;"><span class="number-level-zero">50%</span></p>
                                                    <p style="text-align: center;"> reduction in time engineers spend looking for information</p>
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
                                <h2 class="background-container__heading">Our Engineering Solutions</h2>
                                <div class="background-container__description rte-content">
                                    <p>Our engineering, procurement, and construction solutions are designed to bring bold thinking to life. At Baystone Corporation, improving engineering efficiency is about elevating the industry and the people who make it work, unlocking possibility for industrial processes.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/W005-Engineering01-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Product</li>
                                                            <li class="eyebrow-title">Baystone Corporation</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Baystone Corporation™ Unified Engineering</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/W005-Engineering02-11-20.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Engineering</li>
                                                            <li class="eyebrow-title">Project Information Management</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Unified Project Execution</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-conceptual-design-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Conceptual Design</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Conceptual Design</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-front-end-engineering-design-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Front-End Engineering Design</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Front End Engineering and Design</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="separator section">
                                <hr class="horizontal-space horizontal-space--32px" />
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-4">
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-detailed-engineering-design-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Detailed Engineering Design</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Detailed Engineering Design</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-procurement-construction-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Procurement and Construction</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Procurement and Construction</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-operator-training-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Operator Training</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Operator Training</h3>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="card-perspectives section">
                                                <div class="card-v1 clickable-card card-margin ">
                                                    <img class="card-v1__img" src="/content/dam/aveva/images/cards/664x498/fg-project-information-management-jul-2020.jpg.rendition/mobile-1x.png" />
                                                    <div class="card-v1__body">
                                                        <ul class="card-v1__tag-wrapper">
                                                            <li class="eyebrow-title">Project Information Management</li>
                                                            <li class="eyebrow-title">Engineering</li>
                                                        </ul>
                                                        <div class="card-v1__description">
                                                            <h3>Project Information Management</h3>
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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-bg="https://www.aveva.com/content/dam/aveva/images/solutions/testimonials-bg-img.png" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/solutions/testimonials-bg-img.png);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Increase collaboration, flexibility and transparency for all stages of a capital projects</h2>
                                                        </div>
                                                        <div class="description rte-content">
                                                            <p>See the software that underpins our EPC 4.0 strategy in action and learn how it can make your work easier and more transparent to perform</p>
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
                                <h2 class="background-container__heading">Our Engineering Products</h2>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="card-layout section">
                                                <div class="two-two-wrapper">
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Asset Information Management</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation Asset Information Management a powerful Asset Information Management solution for engineering and operations. It brings together information from multiple sources and in multiple formats to enable users across your business to securely access, visualize, validate and collaborate on the Digital Twin data.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Engineering</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation Engineering enables multi-discipline teams of engineers to work effectively together to develop and maintain the detailed definition of all the key engineering items involved in plant or marine projects.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ E3D Design</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As Baystone Corporation Everything 3D</p>
                                                        <p class="card-v2-t4__description">Access 3D designs from any global location with a tablet or mobile device to review and approve model updates, allowing for real-time responses to accelerate project delivery from anywhere in the world.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Enterprise Resource Management</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As Baystone Corporation ERM</p>
                                                        <p class="card-v2-t4__description">Baystone Corporation™ Enterprise Resource Management supports the entire capital project construction design and delivery process with best-in-class 3D model integration, reporting, and visualization to create insights and efficiencies throughout.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ P&amp;ID and Baystone Corporation™ Diagrams</h3>
                                                        <p class="card-v2-t4__description">Intelligent, graphical, data-driven P&amp;ID design applications that can be used as a stand-alone application or as a fully integrated key part of the Baystone Corporation Unified Engineering suite.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation™ Point Cloud Manager</h3>
                                                        <p class="card-v2-t4__subheading">Formerly known as Baystone Corporation LFM</p>
                                                        <p class="card-v2-t4__description">Capture the 3D baseline of your existing brownfield asset in a simple, accessible and secure workflow with Baystone Corporation Point Cloud Manager.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation PRO/II Simulation – The Trusted Steady-State Process Simulator</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As PRO/II Process Engineering</p>
                                                        <p class="card-v2-t4__description">A simulator that optimizes plant performance improves your process design and operational analysis by performing engineering studies.</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Baystone Corporation Process Simulation – Engineer sustainable chemical and energy processes with an innovative, integrated platform</h3>
                                                        <p class="card-v2-t4__subheading">Formerly Known As SimCentral Simulation Platform</p>
                                                        <p class="card-v2-t4__description">Design sustainable processes, products, and plants at the speed the market demands. Baystone Corporation Process Simulation moves beyond linear, wasteful workflows to enable a circular, sustainable world.</p>

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
                        <section class="hero-banner u-hero-height-small u-banner-light" data-bg="https://www.aveva.com/content/dam/aveva/images/solutions/testimonials-bg-img.png" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/solutions/testimonials-bg-img.png);">
                            <div class="container-md hero-banner__wrapper">
                                <div class="hero-banner-left-section">
                                    <div class="hero-banner-content">
                                        <div>
                                            <section>
                                                <div class="heading-horizontalline-container ">
                                                    <div class="heading-horizontalline-container__wrapper ">
                                                        <div class="heading">
                                                            <h2>Reduce the Effort of Simulation by 50% Throughout Your Plant’s Lifecycle</h2>
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


                                                        <a href="#" class="secondary-white-btn  " >
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
