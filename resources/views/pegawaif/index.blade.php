@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/Pegawai/create')}}" class="btn btn-success btn-block">Tambah Pegawai</a><br>
                    <table class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <td>No</td>
                                <td>NIP</td>
                                <td>User Id</td>
                                <td>Jabatan Id</td>
                                <td>Golongan Id</td>
                                <td>Photo</td>
                                <td colspan="2">Pilihan:</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $i=1;
                            @endphp
                            @foreach ($pegawaiv as $data)
                                <tr>
                                    <td>{{$i++}}</td>
                                    <td>{{ $data->nip }}</td>
                                    <td>{{ $data->user_id }}</td>
                                    <td>{{ $data->jabatan_id }}</td>
                                    <td>{{ $data->golongan_id }}</td>
                                    <td>{{ $data->photo }}</td>
                                    <td><a href="{{route('Pegawai.edit',$data->id)}}" class="btn btn-warning">Ubah</a></td>
                                    <td>
                                    {!! Form::open(['method' => 'DELETE', 'route'=>['Pegawai.destroy', $data->id]]) !!}
                                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                    {!! Form::close() !!}
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
@endsection
