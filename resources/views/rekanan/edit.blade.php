@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Edit Data rekanan')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>rekanan</a></li>
        <li class="active">Edit rekanan</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Rekanan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Edit Rekanan {{ $rekanan->rekanan_id }}</h1>
                <hr/>

                {!! Form::model($rekanan, [
                    'method' => 'PATCH',
                    'url' => ['rekanan', $rekanan->rekanan_id],
                    'class' => 'form-horizontal',
                    'files' => true
                ]) !!}

                            <div class="form-group {{ $errors->has('kode') ? 'has-error' : ''}}">
                {!! Form::label('kode', 'Kode', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('kode', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('kode', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('nama') ? 'has-error' : ''}}">
                {!! Form::label('nama', 'Nama', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('nama', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('nama', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('alamat') ? 'has-error' : ''}}">
                {!! Form::label('alamat', 'Alamat', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('alamat', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('alamat', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
                {!! Form::label('telp', 'Telp', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('npwp') ? 'has-error' : ''}}">
                {!! Form::label('npwp', 'Npwp', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('npwp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('npwp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-3">
                        {!! Form::submit('Update', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                </div>
                {!! Form::close() !!}

                @if ($errors->any())
                    <ul class="alert alert-danger">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
