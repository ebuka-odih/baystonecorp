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
                            <form action="{{ route('admin.change.password') }}" method="POST" enctype="multipart/form-data">
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
                                @if(session()->has('success'))
                                    <div class="alert alert-success">
                                        {{ session()->get('success') }}
                                    </div>
                                @endif
                                <div class=" g-4">
                                    <div class="col-lg-12">
                                        <div class="form">
                                            <label class="form-label" for="full-name-1">Current Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" name="current_password" class="form-control" id="full-name-1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">New Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" name="new_password" class="form-control" id="email-address-1">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="form-label" for="email-address-1">Confirm New Password</label>
                                            <div class="form-control-wrap">
                                                <input type="password" name="new_confirm_password" class="form-control" id="email-address-1">
                                            </div>
                                        </div>
                                    </div>


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
