@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Tambah Data staff')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>staff</a></li>
        <li class="active">Tambah staff</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Staff</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                    <h1>Tambah Data Staff</h1>
                    <hr/>

                    {!! Form::open(['url' => 'staff', 'class' => 'form-horizontal', 'files' => true]) !!}

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
            <div class="form-group {{ $errors->has('kodepos') ? 'has-error' : ''}}">
                {!! Form::label('kodepos', 'Kodepos', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('kodepos', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('kodepos', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('telp') ? 'has-error' : ''}}">
                {!! Form::label('telp', 'Telp', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('telp', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('telp', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('email') ? 'has-error' : ''}}">
                {!! Form::label('email', 'Email', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('email', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
                </div>
            </div>
            <div class="form-group {{ $errors->has('jabatan') ? 'has-error' : ''}}">
                {!! Form::label('jabatan', 'Jabatan', ['class' => 'col-md-4 control-label']) !!}
                <div class="col-md-6">
                    {!! Form::text('jabatan', null, ['class' => 'form-control']) !!}
                    {!! $errors->first('jabatan', '<p class="help-block">:message</p>') !!}
                </div>
            </div>


                    <div class="form-group">
                        <div class="col-sm-offset-3 col-sm-3">
                            {!! Form::submit('Create', ['class' => 'btn btn-primary form-control']) !!}
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
