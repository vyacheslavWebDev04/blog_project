@extends('admin.layout.main')
@section('content')

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Главная</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
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
                        <h3>{{$dataCounts['usersCount']}}</h3>
                        <p>Пользователи</p>
                    </div> <svg class="small-box-icon bi bi-people-fill" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6m-5.784 6A2.24 2.24 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.3 6.3 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5"/>
                    </svg>
                    <a href="{{route('admin.user.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 1-->
            </div> <!--end::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 2-->
                <div class="small-box text-bg-success">
                    <div class="inner">
                        <h3>{{$dataCounts['postsCount']}}</h3>
                        <p>Посты</p>
                    </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177z"/>
                    </svg> <a href="{{route('admin.post.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 2-->
            </div> <!--end::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 3-->
                <div class="small-box text-bg-warning">
                    <div class="inner">
                        <h3>{{$dataCounts['categoriesCount']}}</h3>
                        <p>Категории</p>
                    </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="m14.12 10.163 1.715.858c.22.11.22.424 0 .534L8.267 15.34a.6.6 0 0 1-.534 0L.165 11.555a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0l5.317-2.66zM7.733.063a.6.6 0 0 1 .534 0l7.568 3.784a.3.3 0 0 1 0 .535L8.267 8.165a.6.6 0 0 1-.534 0L.165 4.382a.299.299 0 0 1 0-.535z"/>
                        <path d="m14.12 6.576 1.715.858c.22.11.22.424 0 .534l-7.568 3.784a.6.6 0 0 1-.534 0L.165 7.968a.299.299 0 0 1 0-.534l1.716-.858 5.317 2.659c.505.252 1.1.252 1.604 0z"/>
                    </svg> <a href="{{route('admin.category.index')}}" class="small-box-footer link-dark link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 3-->
            </div> <!--end::Col-->
            <div class="col-lg-3 col-6"> <!--begin::Small Box Widget 4-->
                <div class="small-box text-bg-danger">
                    <div class="inner">
                        <h3>{{$dataCounts['tagsCount']}}</h3>
                        <p>Тэги</p>
                    </div> <svg class="small-box-icon" fill="currentColor" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                        <path d="M2 2a1 1 0 0 1 1-1h4.586a1 1 0 0 1 .707.293l7 7a1 1 0 0 1 0 1.414l-4.586 4.586a1 1 0 0 1-1.414 0l-7-7A1 1 0 0 1 2 6.586zm3.5 4a1.5 1.5 0 1 0 0-3 1.5 1.5 0 0 0 0 3"/>
                        <path d="M1.293 7.793A1 1 0 0 1 1 7.086V2a1 1 0 0 0-1 1v4.586a1 1 0 0 0 .293.707l7 7a1 1 0 0 0 1.414 0l.043-.043z"/>
                    </svg> <a href="{{route('admin.tag.index')}}" class="small-box-footer link-light link-underline-opacity-0 link-underline-opacity-50-hover">
                        Подробнее<i class="bi bi-arrow-up-right-circle-fill ms-1"></i> </a>
                </div> <!--end::Small Box Widget 4-->
            </div> <!--end::Col-->
        </div>
    </div> <!--end::Container-->
@endsection
