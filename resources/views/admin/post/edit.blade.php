@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактировать пост</h3>
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
{{--                обязательно при работе с изображениями применяем enctype--}}
                <form action="{{route('admin.post.update', $post->id)}}" method="POST" enctype="multipart/form-data" >
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="mb-3 col-4">
                            <input type="text" class="form-control" name="title" placeholder="Название поста"
                                   id="exampleInputEmail1" aria-describedby="emailHelp"
                                   value="{{$post->title}}"
                            >
                            @error('title')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea id="summernote" name="content">{{$post->content}}</textarea>
                            @error('content')
                            <div class="text-danger mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group mb-3 mt-3">
                            <label for="inputGroupFile02"><b>Добавить превью</b></label>
                            <div class="col-6">
                                <img src="{{asset('storage/' . $post->preview_image)}}" alt="preview_image" class="w-25 mb-3 mt-1">
                            </div>

                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile02" name="preview_image">

                            </div>
                        </div>
                        @error('preview_image')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <div class="form-group mb-3 mt-3">
                            <label for="inputGroupFile01"><b>Добавить главное изображение</b></label>
                            <div class="col-6">
{{--                                чтобы использовать этот метод вывода картинок надо сначала прописать php artisan storage:link--}}
{{--                                - создать ярлык для папки storage, далее закинуть папку с изображениями в app/public--}}
                                <img src="{{asset('storage/' . $post->main_image)}}" alt="main_image" class="w-25 mb-3 mt-1" >
                            </div>
                            <div class="input-group ">
                                <input type="file" class="form-control" id="inputGroupFile01" name="main_image">
                            </div>
                        </div>
                        @error('main_image')
                        <div class="text-danger mt-1">{{ $message }}</div>
                        @enderror
                        <div class="form-group">
                            <div class="col-md-6">
                                <label for="validationCustom04" class="form-label">Выберите категории</label>
                                <select class="form-select" id="validationCustom04" required="" name="category_id">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}"
                                            {{ $category->id == $post->category_id ? 'selected' : '' }}
                                        >{{$category->title}}</option>
                                    @endforeach
                                    {{--                                скриптом перебираем категории и закидываем в опшионы, далее сравнение, чтобы выбранная категория при ошибке не исчезала--}}
                                </select>
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
                                    <option  {{ is_array($post->tags->pluck('id')->toArray()) && in_array($tag->id, $post->tags->pluck('id')->toArray()) ? 'selected' : ''}} value="{{$tag->id}}">{{$tag->title}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary mt-3 mb-2 col-1.5" value="Обновить">
                    </div>
                </form>
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div>
@endsection
