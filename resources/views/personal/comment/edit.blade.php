@extends('personal.layout.main')
@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Комментарии</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Комментарии
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row"> <!--begin::Col-->
            <form action="{{route('personal.comment.update', $comment->id)}}" method="POST"  class="w-50">
                @csrf
                @method('PATCH')
                <div class="form-group">
                    <div class="mb-3">
                        <textarea class="form-control" name="message" id="" cols="30" rows="2">{{$comment->message}}</textarea>
                        @error('message')
                        <div class="text-danger mt-1">Поле обязательно к заполнению</div>
                        @enderror
                        <input type="submit" class="btn btn-primary mt-3 mb-2 col-3" value="Обновить">
                    </div>
                </div>
            </form>
        </div>
    </div> <!--end::Container-->
@endsection
