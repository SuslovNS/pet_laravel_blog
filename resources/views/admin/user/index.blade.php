@extends('admin.layouts.main')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Пользователи</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-1 mb-3" >
                    <a href="{{route('admin.user.create')}}" class="btn btn-block btn-primary">Добавить</a>
                </div>
                <div class= "col-12">

                </div>
                <div class="card">
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-hover text-nowrap">
                            <thead>

                            <tr>
                                <th>ID</th>
                                <th>Имя</th>
                                <th colspan="3">Действия</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->id}}</td>
                                <td>{{$user->name}}</td>
                                <td><a href="{{route('admin.user.show', $user->id)}}"><i class="fas fa-solid fa-eye"></i></a></td>
                                <td><a href="{{route('admin.user.edit', $user->id)}}"><i class="fas fa-pencil-alt"></i></a>
                                </td>
                                <td>
                                <form action="{{route('admin.user.delete', $user->id)}}"
                                method="POST">
                                    @csrf
                                    @method('Delete')
                                    <button type="submit" class="border-0 bg-transparent">

                                <i class="fas fa-solid fa-trash text-danger" role="button"></i>
                                    </button>
                                </form>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>

                <!-- ./col -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
