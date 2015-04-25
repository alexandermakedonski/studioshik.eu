@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-top: 200px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Добавяне на новина</div>
				<div class="panel-body">
					<!-- print errors -->
				      @foreach($errors->all() as $error)
				      <p>{{$error}}</p>
				      @endforeach
				  

					<form class="form-horizontal" role="form" method="POST" action="/admin/news/addnew" enctype="multipart/form-data">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<div class="form-group">
                            <label class="col-md-4 control-label">Картина</label>
                            <div class="col-md-6">
                                <input type="file" name="image" accept="image/*">
                            </div>
                        </div>
						<div class="form-group">
							<label class="col-md-4 control-label">Заглавие</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="title">
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-4 control-label">Текст</label>
							<div class="col-md-6">
								<textarea class="form-control" name="text" rows="5"></textarea>
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
			</div>
		</div>
	</div>
</div>
@endsection