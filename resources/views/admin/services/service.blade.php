@extends('admin.admin')

@section('content')
	<style type="text/css">
		.btn-primary {
		 
		  float: right;
		}
	</style>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Добавяне на услуга</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Добавяне на услуга
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
					<!-- print errors -->
				      @foreach($errors->all() as $error)
				      <p>{{$error}}</p>
				      @endforeach
					<form class="form-horizontal" role="form" method="POST" action="/admin/services/service/addservice">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Категория</label>
							<div class="col-md-6">
								<select name="category_id" method="POST" style="width:100px;"class="form-control input-sm">
									@foreach ($categories as $category)
										<option value="{{$category->id}}">{{ $category->name }}</option>
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Име</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Цена</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="price" >
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Време</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="time" >
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Добави
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

