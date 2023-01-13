
@extends('pages.layouts.app')
@section('content')


    <div class="maincontentWrapper float-100" id="maincontentWrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="fullwidth-banner">
                    <div class="region region-content-top">
                        <section class="views-element-container block block-views block-views-blockbanner-header-block-1 clearfix" id="block-views-block-banner-header-block-1" data-block-plugin-id="views_block:banner_header-block_1">



                            <div class="form-group"><div class="view view-banner-header view-id-banner_header view-display-id-block_1 js-view-dom-id-e40ee64240cf3e2811e0e71e2e6516138a2ce1625e62b602800b00fa382f6bcf">



                                    <div class="view-content">
                                        <div><div class="views-field views-field-field-banner-reference"><div class="field-content">



                                                    <div id="bannercontent-1608" class="brick--banner_content">



                                                        <div class="banner-content--image" style="background-image:url(img/project.jpeg); background-position: center">
                                                            <div class="container-fluid">
                                                                <div class="banner-vertical-content">
                                                                    <span></span>
                                                                    <h1 class="header-title">  Project </h1>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>

                                                </div></div></div>

                                    </div>

                                </div>
                            </div>

                        </section>


                    </div>

                </div>
            </div>

            <div class="row ">

                <section class="col-sm-12">
                    <div class="region region-content">
                        <div data-drupal-messages-fallback class="hidden"></div>
                        <article data-history-node-id="926" role="article" about="/about-us" class="bricky full clearfix">



                            <div class="content">
                                <h3>Enter your contract code to track project</h3>

                                <form action="{{ route('track_contract') }}" class="navbar-search" id="searchresultform" method="POST">
                                    @csrf
                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif

                                    <div class="search-box">
                                        <input type="text" name="contract_num" id="solrstrap-searchbox" class="search-query span8" placeholder="Enter Project Code…" onfocus="this.value = this.value;" autocomplete="off">
                                        <input type="submit" value="Track" id="submitButton">
                                        <label class="error" for="solrstrap-searchbox" id="searchresultformError"></label>
                                    </div>
                                </form>

                            </div>

                        </article>


                    </div>

                </section>
            </div>
        </div>
    </div>


@endsection
