@extends('admin.layout.main')
@section('content')
    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Редактирование пользователя</h3>
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
                <form action="{{route('admin.user.update', $user->id)}}" method="POST"  class="col-5">
                    @csrf
                    @method('PATCH')
                    <div class="form-group">
                        <div class="mb-3">
                            <input  value="{{$user->name}}" class="form-control" name="name" placeholder="Имя пользователя" id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <input value="{{$user->email}}" type="email" class="form-control" name="email" placeholder="Email"
                                   aria-describedby="emailHelp">
                            @error('email')
                            <div class="text-danger mt-1">{{$message}}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-md-6">
                            <label for="validationCustom04" class="form-label">Выберите роль</label>
                            <select class="form-select" id="validationCustom04" required="" name="role">
                                @foreach($roles as $id => $role)
                                    <option value="{{$id}}"
                                        {{ $id == $user->role ? 'selected' : '' }}
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
                    <input type="submit" class="btn btn-primary mt-3 mb-2 col-3" value="Обновить">
                </form>
            </div> <!--end::Row--> <!--begin::Row-->
            <div class="row"> <!-- Start col -->
            </div> <!-- /.row (main row) -->
        </div> <!--end::Container-->
    </div>
@endsection
