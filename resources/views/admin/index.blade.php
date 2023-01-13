@extends('admin.layouts.app')
@section('content')

<!-- content @s -->
<div class="nk-content nk-content-fluid">
    <div class="container-xl wide-lg">
<div class="nk-content-body">
    <div class="nk-block-head nk-block-head-sm">
        <div class="nk-block-between">
            <div class="nk-block-head-content">
                <h3 class="nk-block-title page-title">Contractor Dashboard</h3>
                <div class="nk-block-des text-soft">
                    <p>Welcome to DashLite Dashboard Template.</p>
                </div>
            </div><!-- .nk-block-head-content -->

        </div><!-- .nk-block-between -->
    </div><!-- .nk-block-head -->
    <div class="nk-block">
        <div class="row g-gs">
            <div class="col-lg-8">
                <div class="card card-bordered h-100">
                    <div class="card-inner">
                        <div class="card-title-group align-start mb-3">
                            <div class="card-title">
                                <h6 class="title">Orders Overview</h6>
                            </div>

                        </div><!-- .card-title-group -->
                        <div class="nk-order-ovwg">
                            <div class="row g-4 align-end">
                                <div class="col-xxl-8">
                                    <div class="nk-order-ovwg-ck">
                                        <canvas class="order-overview-chart" id="orderOverview"></canvas>
                                    </div>
                                </div><!-- .col -->
                                <div class="col-xxl-4">
                                    <div class="row g-4">
{{--                                        <div class="col-sm-6 col-xxl-12">--}}
{{--                                            <div class="nk-order-ovwg-data buy">--}}
{{--                                                <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>--}}
{{--                                                <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                        <div class="col-sm-6 col-xxl-12">--}}
{{--                                            <div class="nk-order-ovwg-data sell">--}}
{{--                                                <div class="amount">12,954.63 <small class="currenct currency-usd">USD</small></div>--}}
{{--                                                <div class="info">Last month <strong>39,485 <span class="currenct currency-usd">USD</span></strong></div>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                                </div><!-- .col -->
                            </div>
                        </div><!-- .nk-order-ovwg -->
                    </div><!-- .card-inner -->
                </div><!-- .card -->
            </div><!-- .col -->
        </div><!-- .row -->
    </div><!-- .nk-block -->
</div>
</div>
</div>
<!-- content @e -->

@endsection
