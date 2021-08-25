@extends('layouts.admin_layout')

@section('title', 'Edit category')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit category</h1>
                </div><!-- /.col -->
            </div><!-- /.row -->
            @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h4><i class="icon fa fa-check"></i>{{ session('success') }}</h4>
                </div>
            @endif
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rov">
                        <div class="col-lg-12">
                            <div class="card card-primary">
                                <!-- form start -->
                                <form action="{{ route('category.update', $category->id) }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputName1">Name</label>
                                            <input type="text" name="name" value="{{ $category->name }}" class="form-control" id="exampleInputName" placeholder="Enter name" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Alias</label>
                                            <input type="text" name="alias" value="{{ $category->alias }}" class="form-control" id="exampleInputName" placeholder="Enter alias" required>
                                        </div>

                                        <div class="form-group">
                                            <label for="feature_image">Feature Image</label>
                                            <img src="/{{ $category->image }}" alt="" class="img-uploaded mb-3" style="display: block; width: 300px">
                                            <input type="text" name="image" value="{{ $category->image }}" class="form-control" id="feature_image" name="feature_image" value="" readonly>
                                            <a href="" class="btn btn-primary popup_selector mt-2" data-inputid="feature_image">Select Image</a>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection



