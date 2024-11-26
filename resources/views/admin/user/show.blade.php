@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6 d-flex align-items-center" >
                    <h3 class= "me-2 mb-0">{{$user->name}}</h3>
                    <a  href="{{route('admin.user.edit', $user->id)}}"><i
                                class="bi bi-pencil-fill text-success "></i></a>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item">{{$user->name}}</li>
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
                            <td>{{$user->id}}</td>

                        </tr>
                        <tr>
                            <td >Имя</td>
                            <td>{{$user->name}}</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div>
@endsection
