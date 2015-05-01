@extends('admin.admin')

@section('content')
<style type="text/css">
		.btn-primary {
		 
		  float: right;
		}
	</style>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Корекция акаунт</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Корекция акаунт
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">

	                         <form class="form-horizontal" role="form" method="POST" action="/admin/account/correction/complete">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">

							<div class="form-group">
								<label class="col-md-4 control-label">Име</label>
								<div class="col-md-6">
								@foreach($user as $user)
									<input type="text" class="form-control" name="name" value="{{$user->name}}">
									<input type="hidden" class="form-control" name="id" value="{{$user->id}}">
								@endforeach
								</div>
							</div>
							<div class="form-group">
								<label class="col-md-4 control-label">Парола</label>
								<div class="col-md-6">
									<input type="password" class="form-control" name="password">
								</div>
							</div>
							<div class="form-group">
								<div class="col-md-6 col-md-offset-4">
									<button type="submit" class="btn btn-primary">
										Корекция
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