@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-top: 200px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Добавяне на категория</div>
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
			</div>
		</div>
	</div>
</div>
@endsection