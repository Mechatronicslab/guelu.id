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
                                <li class="active">Video Blog</li>
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
                            <strong>Video Blog</strong>
                        </div>
                        <div class="card-body card-block">
                            <form method="post">
                                <div class="form-group">
                                    <label class=" form-control-label">Judul</label>
                                    <div class="input-group">
                                        <input class="form-control" placeholder="Judul konten..." required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class=" form-control-label">URL Embed</label>
                                    <div class="input-group">
                                        <input class="form-control" placeholder="URL embed..." required>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-danger btn-sm post">Tambah postingan baru</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-xs-4 col-sm-4">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Keterangan</strong>
                        </div>
                        <div class="card-body">
                            <p>Video blog berisikan konten yang diangkat sesuai dengan topik bahasan.</p>
                            <p>Sertakan URL Embed video dan kategori untuk mempermudah penggunaan.</p>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Kategori</strong>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="checkbox1" class="form-check-label ">
                                                <input type="checkbox" id="checkbox1" name="checkbox1" value="option1" class="form-check-input">Kategori#1
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox2" class="form-check-label ">
                                                <input type="checkbox" id="checkbox2" name="checkbox2" value="option2" class="form-check-input">Kategori#2
                                            </label>
                                        </div>
                                        <div class="checkbox">
                                            <label for="checkbox3" class="form-check-label ">
                                                <input type="checkbox" id="checkbox3" name="checkbox3" value="option3" class="form-check-input">Kategori#3
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>


        </div><!-- .animated -->
    </div>

@endsection

<script src="{{URL::to('/')}}/js/tinymce/js/tinymce/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>
