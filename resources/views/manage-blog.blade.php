@extends('master')
@section('title')
    Manage Student Page
@endsection


@section('body')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header text-center bg-info text-white">All Student</div>
                        <div class="card-body">
                            <table class="table table-bordered table-hover">
                                <thead>
                                <tr>
                                    <th>SL NO</th>
                                    <th>Blog ID</th>
                                    <th>Blog Title</th>
                                    <th>Blog Author</th>
                                    <th>Blog Description</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($manages as $manage)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$manage->id}}</td>
                                        <td>{{$manage->title}}</td>
                                        <td>{{$manage->author}}</td>
                                        <td>{{$manage->description}}</td>
                                        <td>
                                            <a href="{{route('edit-blog', ['id' => $manage->id])}}" class="btn btn-success btn-sm">
                                                <i class="fa fa-edit"></i>
                                            </a>
                                            <a href="" class="btn btn-danger btn-sm">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

