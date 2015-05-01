@extends('admin.admin')

@section('content')
    <style type="text/css">
        .btn-primary {

            float: right;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Добаване на категория</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Добаване на категория
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <!-- print errors -->
                    @foreach($errors->all() as $error)
                        <p>{{$error}}</p>
                    @endforeach
                    <form class="form-horizontal" role="form" method="POST" action="/admin/gallery/addcategory">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">Име</label>

                            <div class="col-md-6">
                                <input type="text" class="form-control" name="name" value="">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Добавяне
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- .panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
    <!-- /.row -->

@endsection
