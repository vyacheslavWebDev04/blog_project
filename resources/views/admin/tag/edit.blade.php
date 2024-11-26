@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактирование тэга</h3>
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
            <div class="row"> <!--begin::Col-->
                <form action="{{route('admin.tag.update', $tag->id)}}" method="POST"  class="col-5">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="mb-3">
                            <input  value="{{$tag->title}}" class="form-control" name="title" placeholder="Название категории" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('title')
                            <div class="text-danger mt-1">Поле обязательно к заполнению</div>
                            @enderror
                            <input type="submit" class="btn btn-primary mt-3 mb-2 col-3" value="Обновить">
                        </div>
                    </div>
                </form>
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div>
@endsection
