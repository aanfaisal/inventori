@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Produk')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>produk</a></li>
        <li class="active">Here</li>
    </ol>
</section>

<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Produk</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Produk <a href="{{ url('produk/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Produk</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th> Kode </th><th> Nama </th><th> Merk </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($produk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode }}</td><td>{{ $item->nama }}</td><td>{{ $item->merk }}</td>
                                <td>
                                    <a href="{{ url('produk/' . $item->produk_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['produk', $item->produk_id],
                                        'style' => 'display:inline'
                                    ]) !!}

                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Produk" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Produk',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $produk->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
