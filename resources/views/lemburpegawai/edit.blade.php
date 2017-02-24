@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Tunjangan</div>

                <div class="panel-body">
                {!! Form::model($tunjanganv,['method'=>'PATCH','route'=>['Tunjangan.update',$tunjanganv->id]])!!}
                    
                    <label>Nama Lembur</label>
                    <select name="kode_lembur_id" class="form-control" required>
                        
                        @foreach($kode_lemburv as $data)
                        <option value="{{$data->id}}">{{$data->kode_lembur}}</option>
                        @endforeach
                    </select><br>

                    <div class="form-group">
                            <label for="pegawai_id" class="form-group">Nama Pegawai</label>
                            <div class="form-group">
                                <select name="pegawai_id" class="form-control">
                                    <option value="{{ $lemburpegawaiv->pegawaim->User->name }}">Nama Pegawai -- {{ $lemburpegawaiv->pegawaim->User->name }}</option>
                                    @foreach($pegawaiv as $data)
                                    <option value="{{$data->id}}">{{$data->User->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    <div class="form-group">
                        {!! Form::label('Besaran Uang','Besaran Uang')!!}
                        {!! Form::text('besaran_uang',null,['class'=>'form-control','required'])!!}
                    </div>
                    <button type="submit" class="btn btn-success">
                                    Update
                                </button>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
