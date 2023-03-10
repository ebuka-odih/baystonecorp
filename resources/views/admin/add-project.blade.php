@extends('admin.layouts.app')
@section('content')

    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="title nk-block-title text-center">Add Project</h4>
                        </div>
                    </div>
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <form action="{{ route('admin.project.store') }}" method="POST" enctype="multipart/form-data">
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
                                <div class=" g-4">
                                    <div class="col-lg-4">
                                        <div class="form">
                                            <label class="form-label" for="full-name-1">Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="name" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Company Name</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="company_name" class="form-control" id="email-address-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label" for="pay-amount-1">Address</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="address" class="form-control" id="pay-amount-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Phone Number</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="phone" class="form-control" id="phone-no-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Project Description</label>
                                            <div class="form-control-wrap">
                                                <textarea name="project_desc" id="" cols="60" rows="5"></textarea>
                                                {{--                                                <input type="date" name="project_desc" class="form-control" id="phone-no-1">--}}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Contractor Website</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="website" class="form-control" id="phone-no-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Contract Location</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="contract_location" class="form-control" id="phone-no-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Amount</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="amount" class="form-control" id="email-address-1">
                                                <small>Don't add the dollar($) while adding amount</small>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="phone-no-1">Awarded Date</label>
                                            <div class="form-control-wrap">
                                                <input type="date" name="date_awarded" class="form-control" id="phone-no-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="pay-amount-1">Start Date</label>
                                            <div class="form-control-wrap">
                                                <input type="date" name="start_date" class="form-control" id="pay-amount-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="pay-amount-1">Duration</label>
                                            <div class="form-control-wrap">
                                                <input type="text" name="duration" class="form-control" id="pay-amount-1">
                                            </div>
                                        </div>
                                    </div>

{{--                                    <div class="col-lg-4">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="form-label" for="phone-no-1">Email Address</label>--}}
{{--                                            <div class="form-control-wrap">--}}
{{--                                                <input type="email" name="email" class="form-control" id="phone-no-1">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}


                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label class="form-label" for="pay-amount-1">Contractor Photo</label>
                                            <div class="form-control-wrap">
                                                <input type="file" name="photo" class="form-control-file" id="pay-amount-1">
                                            </div>
                                        </div>
                                    </div>




{{--                                    <div class="col-lg-6">--}}
{{--                                        <div class="form-group">--}}
{{--                                            <label class="form-label" for="pay-amount-1">Project Certificate</label>--}}
{{--                                            <div class="form-control-wrap">--}}
{{--                                                <input type="file" name="certificate" class="form-control-file" id="pay-amount-1">--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}



                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->

@endsection
