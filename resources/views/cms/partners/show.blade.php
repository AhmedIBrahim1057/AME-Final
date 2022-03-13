@extends('cms.layouts.app')

@section('head')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('cmsFiles/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('cmsFiles/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('cmsFiles/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('content')

@include('cms.layouts.navbar')
@include('cms.layouts.sidebar')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Show Partner</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item">
                            <a href="{{route('cms.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('cms.partners.index')}}">Partners</a>
                        </li>
                        <li class="breadcrumb-item active">Show Partner</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content px-3">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-outline card-info">
            <div class="card-body">
                <table id="example1" class="table table-bordered">
                    <thead>                  
                        <tr>
                            <th style="width: 30%">Label</th>
                            <th>Value</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td>
                                {{$partner->name}}
                            </td>
                        </tr>
                        <tr>
                            <td>URL</td>
                            <td>
                                <a href="{{$partner->url}}" target="_blank">{{$partner->url}}</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <td>
                                {!! $partner->description !!}
                            </td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                <img src="{{asset('uploads/Partners/'.$partner->image)}}" class="w-100" style="max-width: 500px" alt="">
                                {{-- {{$Partners->image}} --}}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
          </div>
          <!-- /.col-->
        </div>
    </section>
    <!-- /.content -->
    
</div>

@include('cms.layouts.footer')

@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('cmsFiles/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('cmsFiles/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });

</script>
@endsection