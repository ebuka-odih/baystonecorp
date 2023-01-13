@extends('admin.layouts.app') @section('content')
    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block">
                    <div class="invoice">
                        <div class="invoice-action">
                            <a class="btn btn-icon btn-lg btn-white btn-dim btn-outline-primary" href="html/invoice-print.html" target="_blank"><em class="icon ni ni-printer-fill"></em></a>
                        </div><!-- .invoice-actions -->
                        <div class="invoice-wrap">
                            <div class="invoice-brand text-center">
                                <h3 class="text text-primary">Premaxcorp</h3>
{{--                                <img src="./images/logo-dark.png" srcset="./images/logo-dark2x.png 2x" alt="">--}}
                            </div>
                            <div class="invoice-head">
                                <div class="invoice-contact">
                                    <span class="overline-title">Invoice For</span>
                                    <div class="invoice-contact-info">
                                        <h4 class="title">{{ $project->name }}</h4>
                                        <img style="border-radius: 50%" height="200" width="200" src="{{ asset('photo/'.$project->photo ) }}" alt="">

                                    </div>
                                </div>
                                <div class="invoice-desc">
                                    <h3 class="title">Invoice</h3>
                                    <ul class="list-plain">
                                        <li class="invoice-id"><span>Invoice ID</span>:<span>{{ $project->contract_num }}</span></li>
                                    </ul>
                                </div>
                            </div><!-- .invoice-head -->
                            <div class="invoice-bills">
                                <div class="table-responsive">
                                    <table style="width:100%" class="table table-striped">
                                        <tr>
                                            <th>Created Date:</th>
                                            <td>{{ date('D m.Y', strtotime($project->created_at)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Contractor Name:</th>
                                            <td>{{ $project->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Company Name:</th>
                                            <td>{{ $project->company_name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone:</th>
                                            <td>{{ $project->phone }}</td>
                                        </tr>

                                        <tr>
                                            <th>Address:</th>
                                            <td>{{ $project->address }}</td>
                                        </tr>
                                        <tr>
                                            <td colspan="2"><span></span></td>
                                        </tr>
                                        <tr>
                                            <th>Contract Description:</th>
                                            <td>{{ $project->project_desc }}</td>
                                        </tr>
                                        <tr>
                                            <th>Contractor Website:</th>
                                            <td><a href="{{ $project->website }}">{{ $project->website }}</a></td>
                                        </tr>
                                        <tr>
                                            <th>Contract Location:</th>
                                            <td>{{ $project->contract_location }}</td>
                                        </tr>
                                        <tr>
                                            <th>Amount:</th>
                                            <td>${{ $project->amount }}</td>
                                        </tr>
                                        <tr>
                                            <th>Date Awarded:</th>
                                            <td>{{ date('D m, Y', strtotime($project->date_awarded)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Start Date:</th>
                                            <td>{{ date('D m, Y', strtotime($project->start_date)) }}</td>
                                        </tr>
                                        <tr>
                                            <th>Project Certificate</th>
                                            <td><img  src="{{ asset('certificate/'.$project->certificate ) }}" alt=""></td>
                                        </tr>
                                    </table>

                                </div>
                            </div><!-- .invoice-bills -->
                        </div><!-- .invoice-wrap -->
                    </div><!-- .invoice -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
