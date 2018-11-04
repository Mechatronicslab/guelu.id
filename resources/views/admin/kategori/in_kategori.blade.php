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
              <li class="active">Kategori</li>
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
      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header">
            <strong>Kategori</strong>
          </div>

          <div class="card-body card-block">
            <form method="post" enctype="multipart/form-data" action="{{ route('admin.InsertKategori') }}">
              {{ csrf_field() }}
              <div class="form-group">
                <label class=" form-control-label">Judul</label>
                <div class="input-group">
                  <input type="text" name="title" class="form-control" placeholder="Judul kategori..." required>
                </div>
                <small class="form-text text-muted">ex. Berita, Olahraga, Budaya.</small>
              </div>

              <div class="form-group">
                <label class=" form-control-label">Slug</label>
                <div class="input-group">
                  <input type="text" name="slug" class="form-control" placeholder="Slug..." required>
                </div>
                <small class="form-text text-muted">ex. Berita, Olahraga, Budaya.</small>
              </div>

              <div class="form-group">
                <label class=" form-control-label">Deskripsi</label>
                <div class="input-group">
                  <textarea name="desc" placeholder="Teks disini..." class="form-control"></textarea>
                </div>
              </div>

              <button type="submit" class="btn btn-danger btn-sm post">Tambah kategori baru</button>

            </form>
          </div>
        </div>
      </div>

      <div class="col-xs-6 col-sm-6">
        <div class="card">
          <div class="card-header">
            <strong class="card-title">Keterangan</strong>
          </div>

          <div class="card-body">
            <p>Kategori yang dimasukan akan bersifat sama untuk setiap postingan, baik forum, vidoe blog atau berita.</p>
            <p>Silahkan isikan nama kategori sesuai ketentuan yang berlaku, isikan juga deskripsi dari masing masing kategori untuk mempermudah penggunaan.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
