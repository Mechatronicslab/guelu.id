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
                    <button type="button" class="btn btn-danger btn-sm post">Tambah kategori</button>
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

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Kategori</strong>
                        </div>
                        <div class="card-body">
                            <table id="bootstrap-data-table" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Author</th>
                                    <th>Tanggal</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>Lorem Ipsum dolor sit amet</td>
                                    <td>Administrator</td>
                                    <td>29/07/2018</td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lorem Ipsum dolor sit amet</td>
                                    <td>Administrator</td>
                                    <td>29/07/2018</td>
                                    <td>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-eye"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-pencil"></i>
                                        </button>
                                        <button type="button" class="btn btn-link btn-sm"><i class="fa fa-trash"></i>
                                        </button>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection
