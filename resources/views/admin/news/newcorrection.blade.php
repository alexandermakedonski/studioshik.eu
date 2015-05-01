@extends('admin.admin')

@section('content')
    <style type="text/css">
        .btn-primary {

            float: right;
        }
    </style>
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Добавяне на новина</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Добавяне на новина
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="/admin/news/new/select/correction/complete" enctype="multipart/form-data">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        @foreach($news as $new)
                            <div class="form-group">
                                <label class="col-md-4 control-label">Картина</label>

                                <div class="col-md-6">
                                    <input type="file" name="image" accept="image/*">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Залгавие</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control" name="title" value="{{ $new->title }}">
                                    <input type="hidden" class="form-control" name="id" value="{{ $new->id }}">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label">Текст</label>

                                <div class="col-md-6">
                                    <textarea class="form-control" name="text" rows="15">{{ $new->text }}</textarea>
                                </div>
                            </div>
                        @endforeach
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Коригирай
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
