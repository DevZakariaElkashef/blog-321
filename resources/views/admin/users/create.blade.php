@extends('admin.layout.app')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0">Starter Page</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item"><a href="#">Users</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <form action="{{ route('users.store') }}" method="post">
                  @csrf
                    <div class="form-group mb-3">
                        <label for="name">Name</label>
                        <input id="name" class="form-control" type="text" name="name" value="{{ old("name") }}">
                        @error('name')
                          <div class="text-danger">{{ $message }}</div>                          
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="email">Email</label>
                        <input id="email" class="form-control" type="email" name="email" value="{{ old('email') }}">
                        @error('email')
                          <div class="text-danger">{{ $message }}</div>                          
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="password">Password</label>
                        <input id="password" class="form-control" type="password" name="password">
                        @error('password')
                          <div class="text-danger">{{ $message }}</div>                          
                        @enderror
                    </div>

                    <div class="form-group mb-3">
                        <label for="confirm_password">Confirm Password</label>
                        <input id="confirm_password" class="form-control" type="password" name="password_confirmation">
                    </div>


                    <button class="btn btn-primary" type="submit">Save</button>

                </form>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection
