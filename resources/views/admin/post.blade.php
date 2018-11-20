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

                <div class="col-xs-8 col-sm-8">
                    <div class="card">
                        <div class="card-header">
                            <strong>Post</strong>
                        </div>
                        <form method="post" action="{{ route('admin.InsertPost') }}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="card-body card-block">
                                <div class="form-group">
                                    <label class=" form-control-label">Thumbnails</label>
                                    <div class="input-group">
                                        <input name="thumbnails" type="file" placeholder="Judul konten...">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Judul</label>
                                    <div class="input-group">
                                        <input type="text" name="title" class="form-control" placeholder="Judul konten..." required>
                                    </div>
                                </div>

                                <div class="form-group" hidden>
                                    <div class="input-group">
                                        @foreach ($administrator_list as $administrator_)
                                            <input type="text" name="author" value="{{ $administrator_->id }}" class="form-control" required>
                                        @endforeach
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class=" form-control-label">Konten</label>
                                    <div class="input-group">
                                        <textarea class="form-control" name="content" id="content"></textarea>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6">

                                        <div class="form-group">
                                            <label class=" form-control-label">Jenis Konten</label>
                                            <div class="input-group">
                                                <select data-placeholder="Pilihan konten..." name="type" class="standardSelect" tabindex="1">
                                                    <option value="" label="default"></option>
                                                    <option name="type" value="1">Berita</option>                                                    
                                                    <option name="type" value="3">Video Blog</option>
                                                    <option name="type" value="4">Slideshow</option>
                                                    <option name="type" value="5">Calon Legislatif</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xs-6 col-sm-6">
                                        <div class="form-group">
                                            <label class=" form-control-label">Kategori</label>
                                            <div class="input-group">
                                                <div class="form-check">
                                                    @foreach ($kategori_list as $kategori_)
                                                        <div class="checkbox">
                                                            <label for="categories_id" class="form-check-label ">
                                                                <input type="checkbox" id="categories_id" name="categories_id" value="{{ $kategori_->id }}" class="form-check-input">{{ $kategori_->title }}
                                                            </label>
                                                        </div>
                                                    @endforeach
                                                    <div class="line"></div>
                                                    <div class="checkbox">
                                                        <label for="checkbox4" class="form-check-label ">
                                                            <a href="{{ route('admin.kategori.in_kategori') }}" name="checkbox4" class="btn btn-link btn-sm plus"><i class="fa fa-plus"></i> Tambah kategori baru</a>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary btn-sm">
                                    <i class="fa fa-paper-plane"></i> Tambah Postingan Baru
                                </button>
                                <button type="reset" class="btn btn-danger btn-sm">
                                    <i class="fa fa-ban"></i> Reset
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Keterangan</strong>
                        </div>
                        <div class="card-body">
                            <p>Berita berisikan konten yang diangkat sesuai dengan topik bahasan.</p>
                            <p>Sertakan kategori untuk mempermudah penggunaan.</p>
                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>
@section('js-editor')
    <script>
        CKEDITOR.replace('content', {
            extraPlugins: 'codesnippet',
            codeSnippet_theme: 'arta',
            filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
            filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
            filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
            filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
        });
    </script>
@endsection
@endsection
