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

		}

	</style>
	<div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Корекция на промоции</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<div class="row">
		<div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Корекция на промоции
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                @foreach ($promotions as $promotion)
						<div class="col-xs-6">{{ $promotion->name }}
							<a  class="btn btn-outline btn-primary btn-sm" href="/admin/promotions/promotion/select/{{$promotion->id}}">Коригирай</a>
						</div>
					@endforeach
	            </div>
	                     <!-- /.panel-body -->
	        </div>
	                 <!-- /.panel -->
	    </div>
	</div>
@endsection


