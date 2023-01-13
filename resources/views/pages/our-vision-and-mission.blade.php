@extends('pages.layouts.app')
@section('content')

    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001-Vision-Mission-02-21-Opt2.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001-Vision-Mission-02-21-Opt2.jpg);">
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
                                                    <a href="{{ route('about') }}" class="cmp-breadcrumb__item-link" itemprop="item">
                                                        <span itemprop="name">About Us</span>
                                                    </a>
                                                    <meta itemprop="position" content="2" />
                                                </li>
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Vision, Mission, Values</span>
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
                                                            <h1>Vision and Mission</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Baystone Corporation creates industrial software that inspires people to shape a sustainable future</p>
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
                        <section class="background-container" style="background-color: #FFFFFF; padding-top: 40px; padding-bottom: 40px;" role="contentinfo" aria-label="Background Container">
                            <div class="background-container-wrapper container-md bg-container--center-content ">
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;margin:auto">
                                                    <p style="text-align: center;">We work with our customers and harness the power of our ecosystem to deliver solutions and expertise to optimize engineering, operations and performance.<br />
                                                    </p>
                                                    <p style="text-align: center;">From water and energy to food and infrastructure, our solutions transform opportunity into business value.<br />
                                                        <br />
                                                        We use <b>collaborative innovation to empower people and industries to thrive.</b></p>
                                                </div>
                                            </div>
                                            <div class="separator section">
                                                <hr class="horizontal-space horizontal-space--32px" />
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
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h2>The values that drive us</h2>
                                                    <p>Values are enduring. But it is appropriate to take stock at key milestones in your journey. That is exactly what we did after the strategic acquisition of OSIsoft in 2021. Nearly 1000 Baystone Corporation employees helped shape and articulate the values of our new, expanded company.</p>
                                                    <p>These values provide the code that sets us apart, makes us who we are and guides everything we do.</p>
                                                    <p> </p>
                                                </div>
                                            </div>
                                            <div class="image section">
                                                <div class="container-center">
                                                    <div data-cmp-is="image" data-cmp-src="/en/about/our-vision-and-mission/_jcr_content/root/main_container/main-container/responsivegrid/background_container_1028119617/backgroundCon/column_control/1colpar1/image/.coreimg{.width}.png/1639556337572/aveva-web-graphics-vision-mission-values-group-w001.png" data-asset="/content/dam/aveva/images/banners/top/aveva_web-graphics_vision-mission-values_group_W001.png" data-asset-id="d922e647-b8e6-402b-8d51-6bcae3f86d39" data-title="aveva team mission and vision" class="cmp-image text-center" style="width:100%" itemscope itemtype="http://schema.org/ImageObject">
                                                        <img src="https://www.aveva.com/en/about/our-vision-and-mission/_jcr_content/root/main_container/main-container/responsivegrid/background_container_1028119617/backgroundCon/column_control/1colpar1/image/.coreimg.png/1639556337572/aveva-web-graphics-vision-mission-values-group-w001.png" class="cmp-image__image image-component-imagestyle" itemprop="contentUrl" data-cmp-hook-image="image" alt="aveva team mission and vision" />
                                                        <div class="modal fade image-popup-modal" id="img-6317831501276550" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                            <div class="form-dialog">
                                                                <div class="modal-dialog" role="document">
                                                                    <div class="modal-content">
                                                                        <div class="modal-body">
                                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                                <span aria-hidden="true">&times;</span>
                                                                            </button>
                                                                            <img src="/en/about/our-vision-and-mission/_jcr_content/root/main_container/main-container/responsivegrid/background_container_1028119617/backgroundCon/column_control/1colpar1/image/.coreimg.png/1639556337572/aveva-web-graphics-vision-mission-values-group-w001.png" class="cmp-image__image image-component-imagestyle" itemprop="contentUrl" data-cmp-hook-image="image" alt="aveva team mission and vision" />
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
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-1">
                                        <div class="col col-12">
                                            <div class="separator section">
                                                <hr class="horizontal-space" />
                                            </div>
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h3> <b>We believe in...</b></h3>
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
                                            <div class="interactive-content section">
                                                <div style="height: 300px; background: #3E1054;">
                                                    <div style="padding: 10px;"><h3 style="color: #fff; text-align: center;">Impact</h3></div>
                                                    <div style="display: flex;" ”><img style="width: 92px; margin: auto;" src="/content/dam/aveva/images/cards/icons/W012-evp-values-impact-reverse-12821.svg" alt="Baystone Corporation icon"></div>
                                                    <div style="margin-top: 25px;"><p style="color: #fff; text-align: center;">We make a positive, sustainable difference in the world</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="interactive-content section">
                                                <div style="height: 300px; background: #3E1054;">
                                                    <div style="padding: 10px;"><h3 style="color: #fff; text-align: center;">Aspiration</h3></div>
                                                    <div style="display: flex;" ”><img style="width: 92px; margin: auto;" src="/content/dam/aveva/images/cards/icons/W012-values-aspiration-reverse.svg" alt="Baystone Corporation icon"></div>
                                                    <div style="margin-top: 25px;"><p style="color: #fff; text-align: center;">We aim high and surpass the expected</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="interactive-content section">
                                                <div style="height: 300px; background: #3E1054;">
                                                    <div style="padding: 10px;"><h3 style="color: #fff; text-align: center;">Curiosity</h3></div>
                                                    <div style="display: flex;" ”><img style="width: 92px; margin: auto;" src="/content/dam/aveva/images/cards/icons/aveva_web-graphics_vision-mission-values_curiousity-icon_02.png" alt="Baystone Corporation icon"></div>
                                                    <div style="margin-top: 25px; margin-left: 10px; margin-right: 10px;"><p style="color: #fff; text-align: center;">We ask questions, and experiment to find powerful, meaningful solutions</p></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="interactive-content section">
                                                <div style="height: 300px; background: #3E1054;">
                                                    <div style="padding: 10px;"><h3 style="color: #fff; text-align: center;">Trust</h3></div>
                                                    <div style="display: flex;" ”><img style="width: 92px; margin: auto;" src="/content/dam/aveva/images/cards/icons/W012-evp-values-trust-reverse-12821.svg" alt="Baystone Corporation icon"></div>
                                                    <div style="margin-top: 25px; margin-left: 10px; margin-right: 10px;"><p style="color: #fff; text-align: center;">We put people first and build relationships based on inclusion and respect</p></div>
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
                                            <div class="separator section">
                                                <hr class="horizontal-space" />
                                            </div>
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <h3><b> We do this by...</b></h3>
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
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <div style="background-color: rgb(255,255,255);height: 350.0px;"><div style="padding: 15.0px;"><ul>
                                                                <li>Making a difference locally and globally<br />
                                                                </li>
                                                                <li>Doing business fairly and transparently</li>
                                                                <li>Choosing the sustainable option</li>
                                                                <li>Selecting business partners thoughtfully</li>
                                                                <li>Leading by example</li>
                                                                <li>Measuring what matters</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <div style="background-color: rgb(255,255,255);height: 350.0px;"><div style="padding: 15.0px;"><ul>
                                                                <li>Putting customers at the center<br />
                                                                </li>
                                                                <li>Balancing short and long-term outcomes</li>
                                                                <li>Connecting individual actions to larger goals</li>
                                                                <li>Creating superb products and services</li>
                                                                <li>Taking ownership and delivering</li>
                                                                <li>Simplifying things</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <div style="background-color: rgb(255,255,255);height: 350.0px;"><div style="padding: 15.0px;"><ul>
                                                                <li>Asking why<br />
                                                                </li>
                                                                <li>Considering diverse perspectives</li>
                                                                <li>Trying new things</li>
                                                                <li>Questioning the usual</li>
                                                                <li>Making room for creativity and learning</li>
                                                                <li>Having fun as we experiment</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-6 col-md-3">
                                            <div class="text section">
                                                <div class="cmp-text" style="width:100%;">
                                                    <div style="background-color: rgb(255,255,255);height: 350.0px;"><div style="padding: 15.0px;"><ul>
                                                                <li>Seeking first to understand<br />
                                                                </li>
                                                                <li>Keeping promises</li>
                                                                <li>Bridging barriers</li>
                                                                <li>Inviting honest feedback</li>
                                                                <li>Assuming positive intentions</li>
                                                                <li>Expressing appreciation</li>
                                                            </ul>
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
                                                            <h2>Industrial software that inspires people to shape a sustainable future

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
                </div>
            </div>
        </div>
    </main></div>
@endsection
