@extends('personal.layout.main')
@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Главная</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('personal.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Главная
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="container-fluid"> <!--begin::Row-->
        <div class="row"> <!--begin::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 1-->
                <div class="small-box text-bg-primary">
                    <div class="inner">
                        <h3>{{$posts->count()}}</h3>
                        <p>Понравившиеся посты</p>
                    </div> <svg class="nav-icon small-box-icon " fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314"/>
                    </svg>
                    <a href="{{route('personal.liked.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 1-->
            </div> <!--end::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                    <div class="inner">
                        <h3>{{$comments->count()}}</h3>
                        <p>Комментарии</p>
                    </div> <svg class="nav-icon small-box-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2h-2.5a1 1 0 0 0-.8.4l-1.9 2.533a1 1 0 0 1-1.6 0L5.3 12.4a1 1 0 0 0-.8-.4H2a2 2 0 0 1-2-2zm3.5 1a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1zm0 2.5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 0-1z"/>
                    </svg> <a href="{{route('personal.comment.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 2-->
            </div> <!--end::Col-->

        </div>
    </div> <!--end::Container-->
@endsection
