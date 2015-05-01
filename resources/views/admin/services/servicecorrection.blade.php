@extends('admin.admin')

@section('content')
	<style type="text/css">
		.btn-primary {
		 
		  float: right;
		}
	</style>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Коригиране на услуга</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Коригиране на услуга
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
					 @foreach ($service as $serv)
				     
					<form class="form-horizontal" role="form" method="POST" action="/admin/services/service/select/correction/complete">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Категория</label>
							<div class="col-md-6">
								<select name="category_id" method="POST" style="width:100px;"class="form-control input-sm">
									@foreach ($categories as $category)
										@if($category->id == $serv->category_id)
											<option value="{{$category->id}}" selected>{{ $category->name }}</option>
										@else 
											<option value="{{$category->id}}">{{ $category->name }}</option>
										@endif
									@endforeach
								</select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Име</label>
							<div class="col-md-6">
									<input type="text" class="form-control" name="name" value="{{ $serv->name }}">
									<input type="hidden" class="form-control" name="id" value="{{ $serv->id }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Цена</label>
							<div class="col-md-6">
									<input type="text" class="form-control" name="price" value="{{ $serv->price }}">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Време</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="time" value="{{ $serv->time }}">
							</div>
						</div>
						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">
									Коригирай
								</button>
							</div>
						</div>
					</form>
				@endforeach
				</div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>

            </div>
            <!-- /.row -->
@endsection

