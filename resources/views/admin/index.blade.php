@extends('admin.layouts.master')

@section('title', 'Guelu.id')

@section('content')

    <div class="content pb-0">

        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-1">
                                <i class="pe-7f-chat"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $countForum }}</span></div>
                                    <div class="stat-heading">Forum</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-2">
                                <i class="pe-7f-album"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $countVlog }}</span></div>
                                    <div class="stat-heading">Video Blog</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-3">
                                <i class="pe-7f-drawer"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">{{ $countNews }}</span></div>
                                    <div class="stat-heading">Berita</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="stat-widget-five">
                            <div class="stat-icon dib flat-color-4">
                                <i class="pe-7f-users"></i>
                            </div>
                            <div class="stat-content">
                                <div class="text-left dib">
                                    <div class="stat-text"><span class="count">2986</span></div>
                                    <div class="stat-heading">Clients</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="orders">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Member Baru </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                              <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                  <thead>
                                    <tr>
                                        <th class="avatar">Avatar</th>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{URL::to('/')}}/images/avatar/1.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5469</td>
                                        <td><span class="name">Louis Stanley</span></td>
                                        <td><span class="product">New Member</span></td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{URL::to('/')}}/images/avatar/2.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5468</td>
                                        <td><span class="name">Gregory Dixon</span></td>
                                        <td><span class="product">New Member</span></td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{URL::to('/')}}/images/avatar/3.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5467</td>
                                        <td><span class="name">Catherine Dixon</span></td>
                                        <td><span class="product">New Member</span></td>
                                    </tr>
                                    <tr>
                                        <td class="avatar">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{URL::to('/')}}/images/avatar/4.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5466</td>
                                        <td><span class="name">Mary Silva</span></td>
                                        <td><span class="product">New Member</span></td>
                                    </tr>
                                    <tr class=" pb-0">
                                        <td class="avatar pb-0">
                                            <div class="round-img">
                                                <a href="#"><img class="rounded-circle" src="{{URL::to('/')}}/images/avatar/6.jpg" alt=""></a>
                                            </div>
                                        </td>
                                        <td> #5465</td>
                                        <td><span class="name">Johnny Stephens</span></td>
                                        <td><span class="product">New Member</span></td>
                                    </tr>
                                  </tbody>
                              </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title box-title">Forum Update</h4>
                        <div class="card-content">
                            <div class="todo-list">
                                <div class="tdl-holder">
                                    <div class="tdl-content">
                                        <ul>
                                            <li>
                                                <label>
                                                    <input type="checkbox"><i class="check-box"></i><span>Creating component page</span>
                                                    <a href='#' class="fa fa-times"></a>
                                                    <a href='#' class="fa fa-pencil"></a>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="check-box"></i><span>Follow back those who follow you</span>
                                                    <a href='#' class="fa fa-times"></a>
                                                    <a href='#' class="fa fa-pencil"></a>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="check-box"></i><span>Design One page theme</span>
                                                    <a href='#' class="fa fa-times"></a>
                                                    <a href='#' class="fa fa-pencil"></a>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>

                                            <li>
                                                <label>
                                                    <input type="checkbox" checked><i class="check-box"></i><span>Creating component page</span>
                                                    <a href='#' class="fa fa-times"></a>
                                                    <a href='#' class="fa fa-pencil"></a>
                                                    <a href='#' class="fa fa-check"></a>
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

@endsection
