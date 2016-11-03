@extends('layouts.master')

@section('content')

<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        @yield('contentheader_title', 'Lihat Data supplaier')
        <small>@yield('contentheader_description')</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Supplaier</a></li>
        <li class="active">Lihat Supplaier</li>
    </ol>
</section>
<section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Supplaier</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
        <hr/>

                <h1>Supplaier {{ $supplaier->supp_id }}</h1>
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No. </th> <th><th> Kode </th><th> Nama </th><th> Alamat </th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $supplaier->supp_id }}</td> %%formBodyHtml%%
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
