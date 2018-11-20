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
                                    <div class="stat-text"><span class="count">{{ $countUser }}</span></div>
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
                                        <th>No</th>
                                        <th>Nama Lengkap</th>
                                        <th>Email</th>
                                        <th>Pesan</th>
                                        <th>Tanggal</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($message as $messager)
                                    <tr>
                                        <td>{{ $messager->id }}</td>
                                        <td>{{ $messager->fullname }}</td>
                                        <td><span class="name">{{ $messager->email }}</span></td>
                                        <td><span class="product">{{ $messager->message }}</span></td>
                                        <td>{{ $messager->created_at->formatLocalized('%a, %b %d %y') }}</td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="box-title">Konfirmasi cerita baru </h4>
                        </div>
                        <div class="card-body--">
                            <div class="table-stats order-table ov-h">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>title</th>
                                        <th>author</th>
                                        <th>Tanggal</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($ceritas as $cerita)
                                    <?php if ($cerita->status == 1 ): ?>
                                      <tr>
                                          <td>{{ $cerita->id }}</td>
                                          <td>{{ $cerita->title }}</td>
                                          <td><span class="name">{{ $cerita->user->first_name }}</span></td>
                                          <td><span class="product">{{ $cerita->created_at->formatLocalized('%a, %b %d %y') }}</span></td>
                                          <td>
                                            <form class="slime-icon" action="{{ route('admin.UpdateForum', $cerita) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('patch') }}
                                                <button type="submit" class="btn btn-link btn-sm"><i class="fa fa-check"></i></button>
                                            </form>
                                            <form class="slime-icon" action="{{ route('admin.DeleteForum', $cerita) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-link btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                          </td>
                                      </tr>
                                    <?php else: ?>
                                      <tr hidden>
                                          <td>{{ $cerita->id }}</td>
                                          <td>{{ $cerita->title }}</td>
                                          <td><span class="name">{{ $cerita->user->first_name }}</span></td>
                                          <td><span class="product">{{ $cerita->created_at->formatLocalized('%a, %b %d %y') }}</span></td>
                                          <td>
                                            <form class="slime-icon" action="#" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-link btn-sm"><i class="fa fa-check"></i></button>
                                            </form>
                                            <form class="slime-icon" action="{{ route('admin.DeleteForum', $cerita) }}" method="post">
                                                {{ csrf_field() }}
                                                {{ method_field('delete') }}
                                                <button type="submit" class="btn btn-link btn-sm"><i class="fa fa-trash"></i></button>
                                            </form>
                                          </td>
                                      </tr>
                                    <?php endif; ?>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
