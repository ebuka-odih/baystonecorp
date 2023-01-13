@extends('admin.layouts.app') @section('content')
    <!-- content @s -->
    <div class="nk-content nk-content-fluid">
        <div class="container-xl wide-lg">
            <div class="nk-content-body">
                <div class="nk-block nk-block-lg">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h4 class="nk-block-title">Projects List</h4>
                        </div>
                        <a class="btn btn-primary mt-4" href="{{ route('admin.add') }}">New Contract</a>
                    </div>
                    <div class="card card-preview">

                        <div class="card-inner">
                            @if(session()->has('deleted'))
                                <div class="alert alert-danger">
                                    {{ session()->get('deleted') }}
                                </div>
                            @endif
                            <div id="DataTables_Table_1_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">

                                <div class="datatable-wrap my-3">
                                    <table class="datatable-init nk-tb-list nk-tb-ulist dataTable no-footer" data-auto-responsive="false" id="DataTables_Table_1" role="grid" aria-describedby="DataTables_Table_1_info">
                                        <thead>
                                        <tr class="nk-tb-item nk-tb-head" role="row">
                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Status: activate to sort column ascending"><span class="sub-text">Project Code</span></th>
                                            <th class="nk-tb-col sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="User: activate to sort column ascending"><span class="sub-text">User</span></th>
                                            <th class="nk-tb-col tb-col-mb sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Balance: activate to sort column ascending"><span class="sub-text">Amount</span></th>
                                            <th class="nk-tb-col tb-col-md sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Phone: activate to sort column ascending"><span class="sub-text">Phone</span></th>
                                            <th class="nk-tb-col tb-col-lg sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="Last Login: activate to sort column ascending"><span class="sub-text">Created</span></th>
                                            <th class="nk-tb-col nk-tb-col-tools text-right sorting" tabindex="0" aria-controls="DataTables_Table_1" rowspan="1" colspan="1" aria-label="
                                                        : activate to sort column ascending"> </th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @foreach($projects as $item)
                                        <tr class="nk-tb-item odd">
                                            <td class="nk-tb-col tb-col-md"> {{ $item->contract_num }}</td>
                                            <td class="nk-tb-col tb-col-md"> <img height="100" width="100" src="{{ asset('photo/'.$item->photo ) }}" alt=""></td>
                                            <td class="nk-tb-col">
                                                <div class="user-card">
{{--                                                    <div class="user-avatar bg-info d-none d-sm-flex">--}}

{{--                                                    </div>--}}
                                                    <div class="user-info"> <span class="tb-lead">{{ $item->name }} <span class="dot dot-success d-md-none ml-1"></span></span> <span>larson@example.com</span> </div>
                                                </div>
                                            </td>
                                            <td class="nk-tb-col tb-col-mb" data-order="32000.34"> <span class="tb-amount">@convert($item->amount) <span class="currency">USD</span></span>
                                            </td>
                                            <td class="nk-tb-col tb-col-md"> <span>{{ $item->phone }}</span> </td>
                                            <td class="nk-tb-col tb-col-lg"> <span>{{ date('D m.Y', strtotime($item->created_at)) }}</span> </td>
                                            <td class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-1">

                                                    <li>
                                                        <div class="drodown"> <a href="#" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
{{--                                                                    <li><a href="#"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>--}}
                                                                    <li><a href="{{ route('admin.project.view', $item->id) }}"><em class="icon ni ni-eye"></em><span>View Details</span></a></li>
                                                                    <li class="divider"></li>
                                                                    <li><a href="{{ route('admin.edit', $item->id) }}"><em class="icon ni ni-shield-star"></em><span>Edit</span></a></li>
                                                                    <li>
                                                                        <form method="POST" action="{!! route('admin.project.destroy', $item->id) !!}" accept-charset="UTF-8">
                                                                            <input name="_method" value="DELETE" type="hidden">
                                                                            {{ csrf_field() }}

                                                                            <div class="btn-group btn-group-xs pull-right" role="group">


                                                                                <button data-toggle="tooltip" data-placement="top" type="submit" class="btn  btn-sm btn-danger" onclick="return confirm(&quot;Delete Country?&quot;)">
                                                                                    <span class="fa flaticon-delete" aria-hidden="true"></span>Delete
                                                                                </button>

                                                                            </div>

                                                                        </form>
{{--                                                                        <a href="#"><em class="icon ni ni-na"></em><span>Delete</span></a>--}}
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- .card-preview -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection
