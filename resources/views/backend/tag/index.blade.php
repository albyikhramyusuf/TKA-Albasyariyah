@extends('layouts.bakend.index')

@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-header card-header-primary">
            <h4 class="card-title mt-0"><b>Data Tag</b></h4>
        </div>
            <div class="card-body">
                <center>
                    <button type="button" title="Tambah Data" class="float-center btn btn-primary btn-rounded btn-outline" data-toggle="modal" data-target=".bd-example-modal-md">

                        <i class="material-icons"></i> Tambah Data
                    </button>
                </center>
                @include('backend.tag.create')
            <div class="table-responsive">
                <table class="table table-hover" id="tab">
                    <thead class="text-primary">
                        <tr>
                            <th class="text-success"><b>No</b></th>
                            <th class="text-success"><b>Nama Tag</b></th>
                            <th class="text-success"><b>Slug</b></th>
                            <th class="text-success"></th>
                            <th class="text-success"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no =1; @endphp
                        @foreach($tag as $data)
                        <tr>
                            <td style="color: white">{{ $no++ }}</td>
                            <td style="color: white">{{ $data->nama_tag }}</td>
                            <td style="color: white">{{ $data->slug }}</td>
                            <td style="text-align:center">
                                <button type="button" data-toggle="modal" data-target=".bd-example-modal-md-{{ $data->id }}" class = "btn btn-warning btn-fw btn-rounded btn-outline btn-sm"><i class="material-icons">edit</i> Edit Data</button>
                            </td>
                            <td>
                                <form action="{{ route('tag.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button class="btn btn-danger btn-fw btn-sm btn-rounded" type="submit" onclick="return confirm('Apa kamu yakin mau menghapusnya?')"><i class="material-icons">delete</i> Hapus Data</button>
                                </form>
                            </td>
                        </tr>
                        @include('backend.tag.edit')
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
