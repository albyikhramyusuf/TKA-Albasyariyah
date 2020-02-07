@extends('layouts.bakend.index')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Data Guru</div>
                <div class="card-body">
                    <form action="{{ route('guru.store') }}" method="post" enctype="multipart/form-data">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="">Foto</label>
                            <input type="file" class="form-control" name="foto">
                        </div>
                        <div class="form-group">
                            <label for="">Nama Guru</label>
                            <input class="form-control" type="text" name="nama_guru">
                        </div>
                        <div class="form-group">
                            <label for="">jabatan</label>
                            <input class="form-control" type="text" name="jabatan">
                        </div>
                            <div class="form-group">
                            <button type="submit" class="btn btn-outline-info">
                            Simpan Data
                            </button>
                            </div>
                            <div class="form-group">
                            <a href="{{ url('admin/guru') }}" class="btn btn-outline-info">Kembali</a>
    </div>
        </form>
            </div>
                </div>
                    </div>
                        </div>
                            </div>
                                @endsection
