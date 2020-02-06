@extends('layouts.bakend.index')
@section('css')
<link rel="stylesheet" href="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/css/dataTables.bootstrap4.css')}}">
@endsection

@section('js')
<script src="{{ asset('assets/backend/assets/vendor/datatables.net/js/jquery.dataTables.js')}}"></script>
<script src="{{ asset('assets/backend/assets/vendor/datatables.net-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{ asset('assets/backend/assets/js/components/datatables-init.js')}}"></script>
@endsection

@section('content')
<div class="container tag" id="indexTag">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Tag Artikel
                    <button class="float-right btn btn-primary btn-rounded btn-outline" data-toggle="modal" data-target="#modalTambahTag"><i class="zmdi zmdi-collection-plus zmdi-hc-fw"></i></button>
                </div>

                <div class="card-body">
                    <br>
                    <div class="table-responsive">
                        <table id="datatable-tag" class="table">
                            <thead>
                                <tr>
                                    <th>Nama Tag</th>
                                    <th>Slug</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
