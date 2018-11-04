@extends('admin.layouts.master')

@section('title', 'Guelu.id')

@section('content')

    <div class="breadcrumbs">
        <div class="breadcrumbs-inner">
            <div class="row m-0">
                <div class="col-sm-4">
                    <div class="page-header float-left">
                        <div class="page-title">
                            <h1>POST</h1>
                        </div>
                    </div>
                    <a href="{{ route('admin.post') }}" class="btn btn-danger btn-sm post">Tambah post</a>
                </div>
                <div class="col-sm-8">
                    <div class="page-header float-right">
                        <div class="page-title">
                            <ol class="breadcrumb text-right">
                                <li><a href="#">Mainmenu</a></li>
                                <li><a href="#">Post</a></li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="animated fadeIn">
            <div class="row">

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Berita</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Author</th>
                                    <th>Kategori</th>
                                    <th>Jenis</th>
                                    <th><i class="fa fa-comments btn-link"></i></th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($post_list as $post_)
                                <tr>
                                    <td>{{ $post_->title }}</td>
                                    <td>{{ $post_->author }}</td>
                                    <td>{{ $post_->categories_id }}</td>
                                    <td>
                                        <?php if ($post_->type == 1): ?>
                                            Berita
                                        <?php elseif ($post_->type == 2): ?>
                                            Forum
                                        <?php elseif ($post_->type == 3): ?>
                                            Video Blog
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <i class="fa fa-comment btn-link"></i>
                                        <span class="count">0</span>
                                    </td>
                                    <td>{{ $post_->created_at->toDayDateTimeString() }}</td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i></button>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-trash"></i></button>
                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
