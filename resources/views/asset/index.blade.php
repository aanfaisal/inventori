@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Asset')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>asset</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Asset</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Asset <a href="{{ url('asset/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Asset</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th> Kode </th><th> Nama </th><th> Jumlah </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($asset as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode }}</td><td>{{ $item->nama }}</td><td>{{ $item->jumlah }}</td>
                                <td>
                                    <a href="{{ url('asset/' . $item->asset_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['asset', $item->asset_id],
                                        'style' => 'display:inline'
                                    ]) !!}

                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Asset" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Asset',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $asset->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
