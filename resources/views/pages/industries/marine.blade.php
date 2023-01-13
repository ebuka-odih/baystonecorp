@extends('pages.layouts.app')
@section('content')

    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001-Marine-11-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001-Marine-11-20.jpg);">
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
                                                    <span itemprop="name">Marine</span>
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
                                                            <h1>Driving a Digital and Sustainable Marine Future</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Optimize your assets across the entire marine lifecycle, resulting in reduced downtime, lower operational expenditure and increased regulatory compliance</p>
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
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <p style="text-align: center;">Once siloed and lagging in technology adoption, today’s marine industry is undergoing a multi-faceted transformation. Increased regulation, aging assets, and high operational costs have led to challenging market conditions for remaining competitive at sea. Consolidation and reconfiguration across the value chain and adoption of digital technologies, including the digital twin, are enabling marine leaders to protect margins, automate manual processes, improve safety, accessibility, drive process and maintenance optimization, and improve operational efficiency. </p>
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
                                <h2 class="background-container__heading">Baystone Corporation Marine Industry Solutions</h2>
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
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-Marine01-07-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-Marine01-07-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-Marine01-07-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640757155541" name="accordionwithcard" checked />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640757155541">
                                                                    <h3>Digital Ship Development</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Use the latest 3D design technology to create accurate and complete digital ship master models as a basis for fabrication, construction, retrofitting, information management and a simplified handover </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="accordion-card-leaf">
                                                                <div class="accordion-card-leaf__image" data-type="image" data-src="/content/dam/aveva/images/cards/664x498/W007-Marine02-07-20.jpg">
                                                                    <img src="/content/dam/aveva/images/cards/664x498/W007-Marine02-07-20.jpg" alt="/content/dam/aveva/images/cards/664x498/W007-Marine02-07-20.jpg" />
                                                                </div>
                                                                <input type="radio" id="rd-1640757155552" name="accordionwithcard" />
                                                                <label class="accordion-card-leaf--heading" for="rd-1640757155552">
                                                                    <h3>Digital Shipyard &amp; Ship Operations</h3>
                                                                </label>
                                                                <div class="accordion-card-leaf--content">
                                                                    <div class="rte-content"><p>Optimize the operational phase of both asset and resources, supported by an empowered and connected workforce. </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="image-text-component__colunm-two">
                                                            <img class="lozad" data-src="/content/dam/aveva/images/cards/664x498/W007-Marine01-07-20.jpg" alt="Black Image" />
                                                        </div>
                                                    </div>
                                                </section>
                                            </div>
                                            <div class="smartbutton embed section">

                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="background-container section">
                                <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                                    <div class="background-container-wrapper container-md bg-container--center-content ">
                                        <h2 class="background-container__heading">See What We Have Done for Your Peers </h2>
                                    </div>
                                    <div class="column-control section">
                                        <div class="container">
                                            <div class="row align-items-center coltype-2">
                                                <div class="col col-12 col-sm-6">
                                                    <div class="card-images section">
                                                        <div class="card-v3 clickable-card card-margin">
                                                            <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009-oceana-shipyard-aug-2020.jpg.rendition/mobile-1x.png" />
                                                            <div class="card-v3__body">
                                                                <h3 class="card-v3__heading">Oceana Shipyard</h3>
                                                                <div class="card-v3__description">
                                                                    <p>
                                                                        Oceana Shipyard has reduced material waste and man-hours by implementing Baystone Corporation ERM to integrate disciplines across the company, including engineering, procurement, warehouse, and planning. It now has a strong track record for delivering projects on time or ahead of schedule.
                                                                    </p>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col col-12 col-sm-6">
                                                    <div class="card-images section">
                                                        <div class="card-v3 clickable-card card-margin">
                                                            <img class="card-v3__img" src="/content/dam/aveva/images/cards/664x498/W009_ChantierDavie_09-20.jpg.rendition/mobile-1x.png" />
                                                            <div class="card-v3__body">
                                                                <h3 class="card-v3__heading">Chantier Davie</h3>
                                                                <div class="card-v3__description">
                                                                    <p>
                                                                        To convert a 182.5-meter container ship into an auxiliary oil replenishment vessel in just 24 months, Chantier Davie needed a solution that would maximize efficiency across the design, planning, supply chain, and production processes. With Baystone Corporation, the company has increased the speed and accuracy with which it produces designs by enabling cross-location collaboration.
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
                            <div class="background-container section">
                                <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                                    <div class="background-container-wrapper container-md bg-container--center-content ">
                                        <h2 class="background-container__heading">Baystone Corporation Can Help with Your Pain Points</h2>
                                    </div>
                                    <div class="column-control section">
                                        <div class="container">
                                            <div class="row align-items-center coltype-1">
                                                <div class="col col-12">
                                                    <div class="tabs section">
                                                        <div class="cmp-tabs" data-cmp-is="tabs">
                                                            <ol role="tablist" class="cmp-tabs__tablist" aria-label="Baystone Corporation Can Help with Your Pain Points" aria-multiselectable="false">
                                                                <li role="tab" class="cmp-tabs__tab cmp-tabs__tab--active" tabindex="0" data-cmp-hook-tabs="tab">Master Ship Design &amp; Construction</li>
                                                                <li role="tab" class="cmp-tabs__tab" tabindex="-1" data-cmp-hook-tabs="tab">Optimize Operations</li>
                                                                <li role="tab" class="cmp-tabs__tab" tabindex="-1" data-cmp-hook-tabs="tab">Manage the Digital Ship</li>
                                                                <li role="tab" class="cmp-tabs__tab" tabindex="-1" data-cmp-hook-tabs="tab">Enable Your Workforce</li>
                                                            </ol>
                                                            <div role="tabpanel" tabindex="0" class="cmp-tabs__tabpanel cmp-tabs__tabpanel--active" data-cmp-hook-tabs="tabpanel"><div class="responsivegrid">
                                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                        <div class="text aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="cmp-text" style="width:100%;">
                                                                                <p>Master change between design disciplines and departments with our integrated engineering, design and production solutions. We at Baystone Corporation provide the only fully integrated solution on the market, encompassing the full project lifecycle across project planning, basic and detailed design, material and work order management, production, and assets’ operational lifetime.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-layout aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="two-two-wrapper">
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Engineering</h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Engineering enables multi-discipline teams of engineers to work effectively together to develop and maintain the detailed definition of all the key engineering items involved in plant or marine projects.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Enterprise Resource Management</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly Known As Baystone Corporation ERM</p>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation™ Enterprise Resource Management supports the entire capital project construction design and delivery process with best-in-class 3D model integration, reporting, and visualization to create insights and efficiencies throughout.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ E3D Design</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly Known As Baystone Corporation Everything 3D</p>
                                                                                    <p class="card-v2-t4__description">Access 3D designs from any global location with a tablet or mobile device to review and approve model updates, allowing for real-time responses to accelerate project delivery from anywhere in the world.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation Marine</h3>
                                                                                    <p class="card-v2-t4__description">Shipbuilders around the world trust Baystone Corporation to provide solutions for creating accurate and complete 3D digital ship master models as a basis for fabrication, construction, retrofitting, information management and simplified handover</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel"><div class="responsivegrid">
                                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                        <div class="text aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="cmp-text" style="width:100%;">
                                                                                <p>Operator’s requirements are becoming stricter as their focus on compliance and operational efficiency grows. Our integrated simulation suite and Extended Reality (XR) tools enable a collaborative approach between EPCs and their clients, ensuring that up-to-date designs are highly optimized for client’s operational needs.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-layout aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="two-two-wrapper">
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Engineering</h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Engineering enables multi-discipline teams of engineers to work effectively together to develop and maintain the detailed definition of all the key engineering items involved in plant or marine projects.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation Process Simulation – Engineer sustainable chemical and energy processes with an innovative, integrated platform</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly Known As SimCentral Simulation Platform</p>
                                                                                    <p class="card-v2-t4__description">Design sustainable processes, products, and plants at the speed the market demands. Baystone Corporation Process Simulation moves beyond linear, wasteful workflows to enable a circular, sustainable world.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Extended Reality</h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Extended reality (XR) is a new lens for industrial software. Change your interaction with the digital world to drive workforce efficiency, effectiveness.
                                                                                    </p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Engage</h3>
                                                                                    <p class="card-v2-t4__description">Designed for touch, Baystone Corporation Engage combines market-leading 3D visualization with a seamlessly connected view of project and asset information.</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel"><div class="responsivegrid">
                                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                        <div class="text aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="cmp-text" style="width:100%;">
                                                                                <p>Both the quantity and quality of data required to plan, design and build vessels is growing exponentially. With large volumes of data being increasingly stored as siloed repositories across teams and disciplines. Our solutions transform your data into a single source of truth, breaking down silos for shipbuilders and the companies that operate them. Utilizing our reality capture suite enables users to easily deliver a true-to&#x2;life, as-designed, as-built digital ship. </p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-layout aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="two-two-wrapper">
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Point Cloud Manager</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly known as Baystone Corporation LFM</p>
                                                                                    <p class="card-v2-t4__description">Capture the 3D baseline of your existing brownfield asset in a simple, accessible and secure workflow with Baystone Corporation Point Cloud Manager.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Engage</h3>
                                                                                    <p class="card-v2-t4__description">Designed for touch, Baystone Corporation Engage combines market-leading 3D visualization with a seamlessly connected view of project and asset information.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Asset Information Management</h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Asset Information Management a powerful Asset Information Management solution for engineering and operations. It brings together information from multiple sources and in multiple formats to enable users across your business to securely access, visualize, validate and collaborate on the Digital Twin data.</p>

                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div role="tabpanel" tabindex="0" class="cmp-tabs__tabpanel" data-cmp-hook-tabs="tabpanel"><div class="responsivegrid">
                                                                    <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                                                                        <div class="text aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="cmp-text" style="width:100%;">
                                                                                <p>Today’s modern workforce is expected to generate and utilize real-time, accurate data to make better decisions, improve work efficiencies, and remain upskilled for longer. Our suite of solutions keep the full breadth of the modern workforce, right from the drawing office through to the shop dry dock, connected with their centralized digital asset, the information lifeblood of the shipbuilding experience.</p>
                                                                            </div>
                                                                        </div>
                                                                        <div class="card-layout aem-GridColumn aem-GridColumn--default--12">
                                                                            <div class="two-two-wrapper">
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ E3D Design</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly Known As Baystone Corporation Everything 3D</p>
                                                                                    <p class="card-v2-t4__description">Access 3D designs from any global location with a tablet or mobile device to review and approve model updates, allowing for real-time responses to accelerate project delivery from anywhere in the world.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation Operational Safety Management </h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Operational Safety Management enables asset operators to eliminate, minimize, or mitigate operational risk while optimizing asset performance.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Engage</h3>
                                                                                    <p class="card-v2-t4__description">Designed for touch, Baystone Corporation Engage combines market-leading 3D visualization with a seamlessly connected view of project and asset information.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation™ Asset Information Management</h3>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Asset Information Management a powerful Asset Information Management solution for engineering and operations. It brings together information from multiple sources and in multiple formats to enable users across your business to securely access, visualize, validate and collaborate on the Digital Twin data.</p>

                                                                                </div>
                                                                                <div class="card-v2-t4 two-two-card clickable-card">
                                                                                    <h3 class="card-v2-t4__heading">Baystone Corporation Mobile Operator</h3>
                                                                                    <p class="card-v2-t4__subheading">Formerly Known As IntelTrac Mobile Operator Rounds</p>
                                                                                    <p class="card-v2-t4__description">Baystone Corporation Mobile Operator software combined with mobile devices improves operations efficiency, streamlines maintenance management, and increases regulatory compliance visibility.</p>

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
                                        </div>
                                    </div>
                                </section>
                            </div>
                            <div class="herobanner section">
                                <section class="hero-banner u-hero-height-small u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/generic/W004-macro-layer-05-10-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/generic/W004-macro-layer-05-10-20.jpg);">
                                    <div class="container-md hero-banner__wrapper">
                                        <div class="hero-banner-left-section">
                                            <div class="hero-banner-content">
                                                <div>
                                                    <section>
                                                        <div class="heading-horizontalline-container ">
                                                            <div class="heading-horizontalline-container__wrapper ">
                                                                <div class="heading">
                                                                    <h2>Integrate Engineering, Asset and Operational Data to Maximize Marine Performance
                                                                    </h2>
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
                        </section>
                    </div>
                    <div class="background-container aem-GridColumn aem-GridColumn--default--12">
                        <section class="background-container" style="background-color: #F2F5F7; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                                <h2 class="background-container__heading">Explore Products by Solution​</h2>
                            </div>
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
                                                        <h3 class="card-v2-t4__heading">Unified Project Execution</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation provides digital project execution and construction management capabilities integrated within the engineering solutions.​</p>

                                                    </div>
                                                    <div class="card-v2-t4 two-two-card clickable-card">
                                                        <h3 class="card-v2-t4__heading">Performance</h3>
                                                        <p class="card-v2-t4__description">Baystone Corporation offers the most comprehensive Asset Performance portfolio to help our customers exceed reliability, safety and performance goals. </p>

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


                                                        <a href="{{ route('contact') }}" class="secondary-white-btn  " >
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
