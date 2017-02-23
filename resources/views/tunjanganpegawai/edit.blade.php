@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Data</div>

                <div class="panel-body">
                    <a href="{{url('/TunjanganPegawai')}}" class="btn btn-success btn-block">Kembali</a><br>
                    {!! Form::model($tunjanganpegawaiv,['method'=>'PATCH','route'=>['tunjanganpegawai.update',$tunjanganpegawaiv->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Tunjangan Id','Kode Tunjangan Id')!!}
                        {!! Form::text('kode_tunjangan_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Pegawai Id','Pegawai Id')!!}
                        {!! Form::text('pegawai_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('update',['class'=>'btn btn-success form-control'])!!}
                    </div>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
