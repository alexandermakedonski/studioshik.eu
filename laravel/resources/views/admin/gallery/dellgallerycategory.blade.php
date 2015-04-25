@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-top: 200px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Изтриване на категория</div>
				<div class="panel-body">
					<form method="POST" action="/admin/gallery/dellcategory">
					    <label>Категории
						 	<select name="id" method="POST"class="form-control input-sm">
								@foreach ($categories as $category)
										<option value="{{$category->id}}">{{ $category->name }}</option>
								@endforeach
							</select>
						</label>
							<input type="submit" class="btn btn-primary" name="delete" value="Изтриване">
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection