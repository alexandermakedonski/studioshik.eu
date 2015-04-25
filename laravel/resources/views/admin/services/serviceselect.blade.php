@extends('admin.admin')

@section('content')
	<style type="text/css">
		.col-xs-6{
			margin-top: 5px;
			font-size: 13px;
			cursor: default;
			border-bottom: 1px dashed #D2E7FA;
		}
		.show-grid [class^=col-]{
			border: 1px solid #D2E7FA;
		}
		.col-xs-6 a{
			position: relative;
			top:-3px;
			float:right;
			margin-right: 3px;

		}

	</style>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Корекция на услуги</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<div class="row">
		<div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Избери услуга
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	            @foreach($categories as $category)
	                @foreach ($services as $service)
	                	@if($category->id == $service->category_id)
							<div class="col-xs-6"><h4>{{$category->name}}</h4> {{ $service->name }}
								<a  class="btn btn-outline btn-primary btn-sm" href="/admin/services/service/select/delete/{{$service->id}}">Изтрий</a>
								<a  class="btn btn-outline btn-primary btn-sm" href="/admin/services/service/select/correction/{{$service->id}}">Коригирай</a>
							</div>
						@endif
					@endforeach
				@endforeach
	            </div>
	                     <!-- /.panel-body -->
	        </div>
	                 <!-- /.panel -->
	    </div>
	</div>
@endsection
