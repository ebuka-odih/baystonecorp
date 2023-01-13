@extends('pages.layouts.app')
@section('content')
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">


    <div class="main-container aem-GridColumn aem-GridColumn--default--12">
    <main id="main-content">
        <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
            <div class="responsivegrid aem-GridColumn aem-GridColumn--default--12">
                <div class="aem-Grid aem-Grid--12 aem-Grid--default--12 ">
                    <div class="herobanner aem-GridColumn aem-GridColumn--default--12">
                        <section class="hero-banner u-hero-height-medium u-banner-light" data-gradient="true" data-bg="https://www.aveva.com/content/dam/aveva/images/banners/top/W001_ContactUs_11-20.jpg" abstyle="background-image: linear-gradient(110deg, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.4) 40%,rgba(0, 0, 0, 0) 60%),url(/content/dam/aveva/images/banners/top/W001_ContactUs_11-20.jpg);">
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
                                                <li class="cmp-breadcrumb__last-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                                    <span itemprop="name">Contact Baystone Corporation</span>
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
                                                            <h1>Contact Baystone Corporation</h1>
                                                        </div>
                                                        <span class="hr"></span>
                                                        <div class="description rte-content">
                                                            <p>Contact us anytime for more information about our products, services, solutions, technical support, and training</p>
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
                                <h2 class="background-container__heading">Happy to Help</h2>
                                <div class="background-container__description rte-content">
                                    <p>Connect with us for information about our products, solutions, services, technical support, and training.</p>
                                </div>
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-21">
                                        <div class="col col-12 col-md-7">
                                            <div class="card-icons section">
                                                <div class="card-v2-t5 clickable-card card-margin">
                                            <div class="card-v2-t5__body">
                                                <div class="card-v2-t5__description">
                                            <form action="{{ route('contact_store') }}" method="POST">
                                                @if(session()->has('success'))
                                                    <div class="alert alert-success">
                                                        {{ session()->get('success') }}
                                                    </div>
                                                @endif
                                                @csrf


                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="">First Name</label>
                                                        <input type="text" name="first_name" class="form-control form-control-lg" id="" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="inputPassword4">Last Name</label>
                                                        <input type="text" name="last_name" class="form-control form-control-lg" id="inputPassword4" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-6">
                                                        <label for="inputEmail4">Email</label>
                                                        <input type="email" name="email" class="form-control form-control-lg" id="inputEmail4" placeholder="">
                                                    </div>
                                                    <div class="form-group col-md-6">
                                                        <label for="">Company Name</label>
                                                        <input type="text" name="company_name" class="form-control form-control-lg" id="" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="form-row">
                                                    <div class="form-group col-md-12">
                                                        <label for="">Phone Number</label>
                                                        <input type="text" name="phone" class="form-control form-control-lg" id="" placeholder="">
                                                    </div>
                                                </div>
                                                    <div class="form-row">
                                                        <div class="form-group col-md-12">
                                                            <label for="inputEmail4">Message</label>
                                                            <textarea name="message" class="form-control" id="" cols="10" rows="3"></textarea>
                                                            {{--                                                        <input type="text" name="first_name" class="form-control form-control-lg" id="inputEmail4" placeholder="">--}}
                                                        </div>
                                                    </div>


                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                                        <label class="form-check-label" for="gridCheck">
                                                            Yes. Please keep me updated with the latest information on Baystone Corporation, events and solutions, and industry related materials. I understand I can unsubscribe at any time by clicking the unsubscribe link at the bottom of all emails from Baystone Corporation.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" id="gridCheck" required>
                                                        <label class="form-check-label" for="gridCheck">
                                                            I acknowledge that I have read the Baystone Corporation Privacy Policy and confirm to the processing of my personal data in as detailed in the same.*
                                                        </label>
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                                            </form>
                                                </div>
                                            </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="col col-12 col-md-5">

                                            <div class="card-icons section">
                                                <div class="card-v2-t5 clickable-card card-margin">
                                                    <img class="lozad" data-src="https://www.aveva.com/content/dam/aveva/images/cards/icons/64x64/W012-contactus02-07-20.png" />
                                                    <div class="card-v2-t5__body">
                                                        <h3 class="card-v2-t5__heading">Customer Support</h3>
                                                        <div class="card-v2-t5__description">
                                                            <p>Contact our Customer Support group if you have a question or issue regarding the installation or use of our products.</p>
                                                            <br>
                                                           <h4> Baystone USA </h4>
                                                            <p>1301 K St NW, Washington, DC 20005, United States</p>
                                                            <p>information@premaxcorp.com</p>
                                                            <hr>



                                                           <h4> Baystone Canada</h4>

                                                           <p> 343 Preston Street 11th Floor, Ottawa, ON K1S 1N4, Canada</p>

                                                            <p>information@premaxcorp.com</p>
                                                            <hr>



                                                            <h4>Baystone United Kingdom</h4>

                                                            <p>119 Jermyn Street SW1Y 6HH, London</p>

                                                            <p>information@premaxcorp.com</p>
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
                            </div>
                            <div class="column-control section">
                                <div class="container">
                                    <div class="row align-items-center coltype-2">
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-icons section">
                                                <div class="card-v2-t5 clickable-card card-margin">
                                                    <img class="lozad" data-src="https://www.aveva.com/content/dam/aveva/images/cards/icons/64x64/W012-contactus05-07-20.png" />
                                                    <div class="card-v2-t5__body">
                                                        <h3 class="card-v2-t5__heading">Training Support</h3>
                                                        <div class="card-v2-t5__description">
                                                            <p>Contact our Training team for information on our online and classroom training, or to locate the nearest Baystone Corporation learning centre.</p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col col-12 col-sm-6">
                                            <div class="card-icons section">
                                                <div class="card-v2-t5 clickable-card card-margin">
                                                    <img class="lozad" data-src="/content/dam/aveva/images/cards/icons/64x64/W012-contactus04-07-20.png" />
                                                    <div class="card-v2-t5__body">
                                                        <h3 class="card-v2-t5__heading">Careers</h3>
                                                        <div class="card-v2-t5__description">
                                                            <p>Join Baystone Corporation&#39;s award winning team. Become part of a global leading engineering, design and information management software company, providing technology to the process, plant and marine industries.</p>
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

                        </section>
                    </div>
                </div>
            </div>
        </div>
    </main></div>

@endsection
