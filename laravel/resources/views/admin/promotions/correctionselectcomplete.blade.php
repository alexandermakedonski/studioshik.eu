@extends('admin.admin')

@section('content')
<style type="text/css">
	.btn-primary {
	 
	  float: right;
	}
</style>
			<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Кригиране на промоция</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Кригиране на промоция
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
							<form class="form-horizontal" role="form" method="POST" action="/admin/promotions/promotion/select/correction/complete">
								<input type="hidden" name="_token" value="{{ csrf_token() }}">
								@foreach($promotions as $promotion)
									<div class="form-group">
										<label class="col-md-4 control-label">Име</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="name" value="{{ $promotion->name }}">
											<input type="hidden" class="form-control" name="id" value="{{ $promotion->id }}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Цeна</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="price" value="{{ $promotion->price }}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Процент</label>
										<div class="col-md-6">
											<input type="text" class="form-control" name="percent" value="{{ $promotion->percent }}">
										</div>
									</div>
									<div class="form-group">
										<label class="col-md-4 control-label">Текст</label>
										<div class="col-md-6">
											<textarea class="form-control" name="popuptext" rows="5">{{ $promotion->popuptext }}</textarea>
										</div>
									</div>
								@endforeach
								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary">
											Коригирай
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
		