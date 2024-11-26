@extends('personal.layout.main')
@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Понравившиеся посты</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Понравившиеся посты
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row"> <!--begin::Col-->
            <div class="col-11">
                <table class="table table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th scope="col" class="">ID</th>
                        <th scope="col" >Название</th>
                        <th scope="col"  class="text-center ">Просмотреть</th>
                        <th scope="col"  class="text-center ">Удалить</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->id}}</td>
                            <td>{{$post->title}}</td>
                            <td class="text-center"><a href="{{route('post.show', $post->id)}}"><i class="bi bi-eye-fill"></i></a></td>
                            <td class="text-center align-center">
                                <form action="{{ route('personal.liked.delete', $post->id)}}" method="POST" class=" ">
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
@endsection
