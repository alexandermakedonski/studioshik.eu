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
            <h1 class="page-header">Изтриване на категория</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
	<div class="row">
		<div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Изтриване на категория
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	                @foreach ($categories as $category)
						<div class="col-xs-6">{{ $category->name }}
							<a  class="btn btn-outline btn-primary btn-sm" href="/admin/services/categorydelete/{{$category->id}}">Изтрий</a>
						</div>
					@endforeach
	            </div>
	                     <!-- /.panel-body -->
	        </div>
	                 <!-- /.panel -->
	    </div>
	</div>
@endsection

