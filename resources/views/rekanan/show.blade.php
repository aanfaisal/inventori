@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data rekanan')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Rekanan</a></li>
        <li class="active">Lihat Rekanan</li>
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

                <h1>Rekanan {{ $rekanan->rekanan_id }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th><th> Kode </th><th> Nama </th><th> Alamat </th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $rekanan->rekanan_id }}</td> %%formBodyHtml%%
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
@endsection
