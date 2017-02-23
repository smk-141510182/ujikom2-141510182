@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Tambah Penggajian</div>

                <div class="panel-body">
                    <a href="{{url('/Penggajian')}}" class="btn btn-success btn-block">Kembali</a><br>

                    @if($errors->any())
                        <div>
                            @foreach($errors->all() as $err)
                                <li><span>{{ $err }}</span></li>
                            @endforeach
                        </div>
                    @endif
                    
                    {!! Form::open(['url'=>'Penggajian'])!!}
                    <div class="form-group">
                        {!! Form::label('Tunjangan Pegawai Id','Tunjangan Pegawai Id')!!}
                        {!! Form::text('tunjangan_pegawai_id',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Jam Lembur','Jumlah Jam Lembur')!!}
                        {!! Form::text('jumlah_jam_lembur',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Jumlah Uang Lembur','Jumlah Uang Lembur')!!}
                        {!! Form::text('jumlah_uang_lembur',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Gaji Pokok','Gaji Pokok')!!}
                        {!! Form::text('gaji_pokok',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Total Gaji','Total Gaji')!!}
                        {!! Form::text('total_gaji',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Tanggal Pengambilan','Tanggal Pengambilan')!!}
                        {!! Form::text('tanggal_pengambilan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Status Pengambilan','Status Pengambilan')!!}
                        {!! Form::text('status_pengambilan',null,['class'=>'form-control','required'])!!}
                    </div>
                    <div class="form-group">
                        {!! Form::label('Petugas Penerima','Petugas Penerima')!!}
                        {!! Form::text('petugas_penerima',null,['class'=>'form-control','required'])!!}
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
