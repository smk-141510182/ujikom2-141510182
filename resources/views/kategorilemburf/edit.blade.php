@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Kategori Lembur</div>

                <div class="panel-body">
                    <a href="{{url('/KategoriLembur')}}" class="btn btn-success btn-block">Kembali</a><br>
                    {!! Form::model($kategorilemburv,['method'=>'PATCH','route'=>['Kategori Lembur.update',$kategorilemburv->id]])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Lembur','Kode Lembur')!!}
                        {!! Form::text('kode_lembur',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jabatan Id','Jabatan Id')!!}
                        {!! Form::text('jabatan_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Golongan Id','Golongan Id')!!}
                        {!! Form::text('golongan_id',null,['class'=>'form-control'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control'])!!}
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
