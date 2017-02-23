@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Lembur Pegawai</div>

                <div class="panel-body">
                    <a href="{{url('/LemburPegawai')}}" class="btn btn-success btn-block">Kembali</a><br>

                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <li><span>{{ $err }}</span></li>
                            @endforeach
                        </div>
                    @endif
                    
                    {!! Form::open(['url'=>'KategoriLembur'])!!}
                    <div class="form-group">
                        {!! Form::label('Kode Lembur Id','Kode Lembur Id')!!}
                        {!! Form::text('kode_lembur_id',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Pegawai Id','Pegawai Id')!!}
                        {!! Form::text('pegawai_id',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Jam','Jumlah Jam')!!}
                        {!! Form::text('jumlah_jam',null,['class'=>'form-control','required'])!!}
                    </div>
                    <button type="submit" class="btn btn-success">
                                    Save
                                </button>
                    {!! Form::close()!!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
