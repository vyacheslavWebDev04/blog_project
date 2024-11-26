@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Добавление поста</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.post.index')}}">Посты</a></li>
                        <li class="breadcrumb-item">Добавление поста</li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <form action="{{route('admin.post.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3 col-4">
                            <input type="text" class="form-control" name="title" placeholder="Название поста"
                                   id="exampleInputEmail1" aria-describedby="emailHelp"
                                   value="{{old('title')}}"
                            >
                            @error('title')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{old('content')}}</textarea>
                            @error('content')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="inputGroupFile02"><b>Добавить превью</b></label>
                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile02" name="preview_image">
                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                        <div class="form-group mb-3 mt-3">
                            <label for="inputGroupFile01"><b>Добавить главное изображение</b></label>
                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile01" name="main_image">
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger mt-1">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Выберите категории</label>
                                <select class="form-select" id="validationCustom04" required="" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{ $category->id == old('category_id') ? 'selected' : '' }}
                                        >{{$category->title}}</option>
                                    @endforeach
                                    {{--                                скриптом перебираем категории и закидываем в опшионы, далее сравнение, чтобы выбранная категория при ошибке не исчезала--}}
                                </select>
                                @error('category_id')
                                <div class="text-danger mt-1">{{$message}}</div>
                                @enderror
                                <div class="invalid-feedback">
                                    Please select a valid state.
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3 ">
                            <div>
                                <label for="selector2">Выберите теги</label>
                            </div>
                            <select class="select col-6 text-success"  name="tag_ids[]" id="selector2" multiple="multiple"
                                    data-placeholder="Выберите теги">
                                @foreach($tags as $tag)
                                    <option  {{ is_array(old('tag_ids')) && in_array($tag->id, old('tag_ids')) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                            @error('tag_ids')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="submit" class="btn btn-primary mt-3 mb-2 col-1.5" value="Добавить">
                    </div>
                </form>
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div>
@endsection
