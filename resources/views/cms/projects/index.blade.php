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
                    <h1 class="m-0">Projects</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item">CMS</li>
                        <li class="breadcrumb-item">
                            <a href="{{route('cms.dashboard')}}">Dashboard</a>
                        </li>
                        <li class="breadcrumb-item active">Projects</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    {{-- start content  --}}
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card card-outline card-info">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">All Projects</h3>
                            <a href="{{route('cms.projects.create')}}" class="btn btn-primary float-right"> Add Project <i class="fas fa-plus-circle ml-2"></i> </a>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Title</th>
                                        {{-- <th>Description</th> --}}
                                        <th>Date</th>
                                        <th>Main Image</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($projects as $item)
                                        <tr>
                                            <td>{{$item->title}}</td>
                                            {{-- <td>{{$item->description}}</td> --}}
                                            <td>{{$item->date}}</td>
                                            <td>
                                                <img src="{{asset('uploads/projects/'.$item->image)}}" style="max-width: 100px" alt="">
                                            </td>
                                            <td>
                                                <div class="icons d-flex">
                                                    <a href="{{route('cms.projects.show', $item->id)}}">
                                                        <div class="view text-info mx-2 cursor-pointer">
                                                            <i class="fas fa-eye"></i>
                                                        </div>
                                                    </a>
                                                    <a href="{{route('cms.projects.edit', $item->id)}}">
                                                        <div class="edit text-primary mx-2 cursor-pointer">
                                                            <i class="fas fa-edit"></i>
                                                        </div>
                                                    </a>
                                                    <form action="{{route('cms.projects.destroy', $item->id)}}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="delete-btn text-danger mx-2 cursor-pointer"><i class="fas fa-trash"></i></button>
                                                    </form>
                                                    
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- end content  --}}

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
