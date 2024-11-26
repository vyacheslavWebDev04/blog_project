@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Добавление пользователя</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="{{route('admin.main.index')}}">Главная</a></li>
                        <li class="breadcrumb-item"><a href="{{route('admin.user.index')}}">Пользователи</a></li>
                        <li class="breadcrumb-item">Добавление пользователя </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content">
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <form action="{{route('admin.user.store')}}" method="POST" class="col-5">
                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="text" class="form-control" name="name" placeholder="Имя пользователя"
                                    aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <input type="email" class="form-control" name="email" placeholder="Email"
                                    aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
{{--                    <div class="form-group">--}}
{{--                        <div class="mb-3">--}}
{{--                            <input type="text" class="form-control" name="password" placeholder="Пароль"--}}
{{--                                    aria-describedby="emailHelp">--}}
{{--                            @error('password')--}}
{{--                            <div class="text-danger mt-1">{{$message}}</div>--}}
{{--                            @enderror--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Выберите роль</label>
                            <select class="form-select" id="validationCustom04" required="" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{ $id == old('role') ? 'selected' : '' }}
                                    >{{$role}}</option>
                                @endforeach
                                {{--                                скриптом перебираем категории и закидываем в опшионы, далее сравнение, чтобы выбранная категория при ошибке не исчезала--}}
                            </select>
                            @error('role')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                    </div>
                    <input type="submit" class="btn btn-primary mt-3 mb-2 col-3" value="Добавить">
                </form>
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div>
@endsection
