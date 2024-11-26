@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Категории</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Категории
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
                <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                    <a class="btn btn-primary mb-2 col-9" href="{{route('admin.category.create')}}">Добавить
                        категорию</a>
                </div> <!--end::Col-->
            </div> <!-- /.row (main row) -->
            <div class="row"> <!--begin::Col-->
                <div class="col-11">
                    <table class="table table-hover">
                        <thead class="table-dark">
                        <tr>
                            <th scope="col" class="">ID</th>
                            <th scope="col" >Название</th>
                            <th scope="col"  class="text-center ">Открыть</th>
                            <th scope="col"  class="text-center ">Редактировать</th>
                            <th scope="col"  class="text-center ">Удалить</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{$category->id}}</td>
                                <td>{{$category->title}}</td>
                                <td class="text-center"><a href="{{route('admin.category.show', $category->id)}}"><i class="bi bi-eye-fill"></i></a></td>
                                <td class="text-center"><a href="{{route('admin.category.edit', $category->id)}}"><i class="bi bi-pencil-fill text-success"></i></a>
                                <td class="text-center align-center">
                                    <form action="{{ route('admin.category.destroy', $category->id)}}" method="POST" class=" ">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="border-0 bg-transparent">
                                        <i class="bi bi-trash-fill text-danger" ></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div>
@endsection