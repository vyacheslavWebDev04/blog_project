@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center" >
                    <h3 class= "me-2 mb-0">{{$tag->title}}</h3>
                    <a  href="{{route('admin.tag.edit', $tag->id)}}"><i
                                class="bi bi-pencil-fill text-success "></i></a> <form action="{{ route('admin.tag.destroy', $tag->id)}}" method="POST" class=" ">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="border-0 bg-transparent">
                            <i class="bi bi-trash-fill text-danger" ></i>
                        </button>
                    </form>

                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Dashboard
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!-- Start col -->

            </div> <!-- /.row (main row) -->
            <div class="row"> <!--begin::Col-->
                <div class="col-6">
                    <table class="table table-hover">
                        <tbody>
                        <tr>
                            <td >ID</td>
                            <td>{{$tag->id}}</td>

                        </tr>
                        <tr>
                            <td >Название</td>
                            <td>{{$tag->title}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div>
@endsection
