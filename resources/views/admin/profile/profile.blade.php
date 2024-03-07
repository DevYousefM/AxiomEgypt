@extends('admin.layouts.main')
@section('title')
    حساب الادمن
@endsection
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">تعديل بيانات الحساب</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="content">
        <div class="container-fluid">
            @if (session('success-info'))
                <div class="alert alert-success">
                    {{ session('success-info') }}
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header pb-0">
                    <h3 class="card-title col-12 p-0">تعديل بيانات الحساب</h3>
                </div>
                <form role="form" method="post" action="{{ route('dashboard.profile.update') }}">
                    @csrf
                    @method('patch')

                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">ألاسم</label>
                            <input type="text" name="name" class="form-control" value="{{ auth()->user()->name }}"
                                id="exampleInputEmail1" placeholder="ألاسم">
                            @error('name')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">البريد الالكتروني</label>
                            <input type="email" name="email" class="form-control" value="{{ auth()->user()->email }}"
                                id="exampleInputEmail1" placeholder="البريد الالكتروني">
                            @error('email')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>
            @if (session('success-password'))
                <div class="alert alert-success">
                    {{ session('success-password') }}
                </div>
            @endif
            <div class="card card-primary">
                <div class="card-header pb-0">
                    <h3 class="card-title col-12 p-0">تعديل كلمة المرور</h3>
                </div>
                <form role="form" method="post" action="{{ route('dashboard.profile.updatePassword') }}">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="current_password">كلمة المرور الحالية</label>
                            <input type="password" name="current_password" class="form-control" id="current_password"
                                placeholder="كلمة المرور الحالية">
                            @error('current_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_password">كلمة المرور الجديدة</label>
                            <input type="password" name="new_password" class="form-control" id="new_password"
                                placeholder="كلمة المرور الجديدة">
                            @error('new_password')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="new_password_confirmation">تأكيد كلمة المرور الجديدة</label>
                            <input type="password" name="new_password_confirmation" class="form-control"
                                id="new_password_confirmation" placeholder="تأكيد كلمة المرور الجديدة">
                            @error('new_password_confirmation')
                                <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary">حفظ</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
@endsection
