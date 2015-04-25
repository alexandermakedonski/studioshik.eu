@extends('admin.admin')

@section('content')
<div class="container-fluid">
	<div class="row" style="margin-top: 200px;">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Добавяне на новина</div>
				<div class="panel-body">
					<form method="POST" action="/admin/news/new/select/correction"  >
					    <label>Корекция услуги
						 	<select name="id" method="GET"class="form-control input-sm">
								@foreach ($news as $new)
									<option value="{{$new->id}}">{{ $new->title }}</option>
								@endforeach
							</select>
						</label>
						<input type="submit" class="btn btn-primary" name="correction" value="Коригиране">
						<input type="submit" class="btn btn-primary" name="delete" value="Изтриване">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection