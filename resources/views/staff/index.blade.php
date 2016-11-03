@extends('layouts.master')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Data Staff')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>staff</a></li>
        <li class="active">Here</li>
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

                <h1>Staff <a href="{{ url('staff/create') }}" class="btn btn-primary pull-right btn-sm">Tambah Data Staff</a></h1>
                <div class="table">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th><th> Kode </th><th> Nama </th><th> Alamat </th><th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                       @foreach($staff as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->kode }}</td><td>{{ $item->nama }}</td><td>{{ $item->alamat }}</td>
                                <td>
                                    <a href="{{ url('staff/' . $item->staff_id . '/edit') }}">
                                        <button type="submit" class="btn btn-primary btn-xs">Update</button>
                                    </a> /
                                    {!! Form::open([
                                        'method'=>'DELETE',
                                        'url' => ['staff', $item->staff_id],
                                        'style' => 'display:inline'
                                    ]) !!}

                                    {!! Form::button('<span class="glyphicon glyphicon-trash" aria-hidden="true" title="Delete Staff" />', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Staff',
                                    'onclick'=>'return confirm("Confirm delete?")'
                                    )) !!}
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <center><div class="pagination"> {!! $staff->render() !!} </div></center>
                </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
