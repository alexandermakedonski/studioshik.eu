@extends('admin.admin')

@section('content')
<div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Панел промоции</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
	<div class="row">
		<div class="col-lg-12">
	        <div class="panel panel-default">
	            <div class="panel-heading">
	                Панел промоции
	            </div>
	            <!-- /.panel-heading -->
	            <div class="panel-body">
	               <form  method="POST" action="/admin/promotions/edit"  >
			   			@foreach ($promotions as $promotion)
			   				@if($promotion->show == 0)
			   					<label>
							        <input  class="promoCheck" checked=""  id="switch-size" data-size="mini" value="{{ $promotion->id }}" type="checkbox"/> {{$promotion->name}}
					    		</label><br>
			   				@else
				   				<label>
				   					 <input class="promoCheck"  id="switch-size" data-size="mini" value="{{ $promotion->id }}" type="checkbox"/> {{$promotion->name}}
				    			</label><br>
			   				@endif     
			    		@endforeach
					</form>
	            </div>
	                     <!-- /.panel-body -->
	        </div>
	                 <!-- /.panel -->
	    </div>
	</div>
<script src="/assets/admin/js/jquery-1.11.2.js"></script>
<script type="text/javascript">
	$(function() {
		$(".promoCheck").bootstrapSwitch();
	    $.ajaxSetup({
	        headers: {
	            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
	        }
	    });

	    $('.promoCheck').on('switchChange.bootstrapSwitch', function(event, state) {
		    if($(this).is(':checked')){
                	$.post("/admin/promotions/edit", { id : $(this).val(),show:0 }, function(data) {
					});
                }else{
                	$.post("/admin/promotions/edit", { id : $(this).val(),show:1 }, function() {
					});
                }
			});

	});


</script>
@endsection

