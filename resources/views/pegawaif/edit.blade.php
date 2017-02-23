@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/Pegawai')}}" class="btn btn-success btn-block">Kembali</a><br>
                    {!! Form::model($pegawaiv,['method'=>'PATCH','route'=>['pegawai.update',$pegawaiv->id]])!!}
                    <div class="form-group">
                        {!! Form::label('NIP','NIP')!!}
                        {!! Form::text('nip',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('User Id','User Id')!!}
                        {!! Form::text('user_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jabatan Id','Jabatan Id') !!}
                        {!! Form::text('jabatan_id','jabatan_id')!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Golongan Id','Golongan Id')!!}
                        {!! Form::text('golongan_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Photo','Photo')!!}
                        {!! Form::text('photo',null,['class'=>'form-control'])!!}
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
