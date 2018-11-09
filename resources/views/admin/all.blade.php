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
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($post_list as $post_)
                                <tr>
                                    <td>{{ str_limit ($post_->title, 20, ' ...') }}</td>
                                    <td>{{ $post_->administrator->first_name }}</td>
                                    <td>{{ $post_->categories->title }}</td>
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
                                    <td>{{ $post_->created_at->formatLocalized('%b %d %y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.EditPost', $post_) }}" type="submit" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i></a>
                                        <form class="slime-icon" action="{{ route('admin.DeletePost', $post_) }}" method="post">
                                          {{ csrf_field() }}
                                          {{ method_field('delete') }}
                                            <button type="submit" class="btn btn-link btn-sm"><i class="fa fa-trash"></i></button>
                                        </form>
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
