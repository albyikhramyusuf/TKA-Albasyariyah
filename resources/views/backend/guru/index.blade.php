@extends('layouts.bakend.index')

@section('content')
<section class="page-content container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Data Guru</h5><br>
                <center>
                    <p></p>
                        <a href="{{ route('guru.create') }}"
                            class="la la-cloud-upload btn btn-info btn-rounded btn-floating btn-outline">&nbsp;Tambah Data
                        </a>
                </center>
                <div class="card-body">
                    <table id="bs4-table" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th>Foto</th>
                                <th>Nama Guru</th>
                                <th>Jabatan</th>
                                <th style="text-align: center;">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($guru as $data)
                            <tr>
                                <td><img src="{{asset('assets/img/guru/' .$data->foto)}}"
                                    style="width:50px; height:50px;"></td>
                                <td>{{$data->nama_guru}}</td>
                                <td>{{$data->jabatan}}</td>


								<td style="text-align: center;">
                                    <form action="{{route('guru.destroy', $data->id)}}" method="post">
                                        {{csrf_field()}}
									<a href="{{route('guru.edit', $data->id)}}"
										class="zmdi zmdi-edit btn btn-warning btn-rounded btn-floating btn-outline"> Edit
                                    </a>
                                    <a href="{{route('guru.show', $data->id)}}"
										class="zmdi zmdi-eye btn btn-success btn-rounded btn-floating btn-outline"> Show
									</a>
										<input type="hidden" name="_method" value="DELETE">
										<button type="submit" class="zmdi zmdi-delete btn-rounded btn-floating btn btn-dangerbtn btn-danger btn-outline"> Delete</button>
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
</section>
@endsection
