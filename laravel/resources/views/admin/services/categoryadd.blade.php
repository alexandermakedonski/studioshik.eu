@extends('admin.admin')

@section('content')
<style type="text/css">
	.dropdown-menu li label{
		width: 100%;
		cursor: pointer;
		margin-left: 20px;
	}
	.dropdown-menu li:hover{
		background-color: #ddd;
	}
	input[type=radio]{
		display: none;
	}
	.input-group-btn {
	  position: relative;
	  font-size: 0;
	  white-space: nowrap;
	  top: 0px;
	  left: 1px;
	  /* height: 486px; */
	  /* width: 28px; */
	}
	.input-group-btn:first-child>.btn, .input-group-btn:first-child>.btn-group {
	  height: 34px;
	}
	.submit{
		float: right;
		display: inline-block;
		left: 68px;
		top: -34px;
		position: relative;
		height: 34px;
		width: 70px;
		border-top-left-radius:0;
		border-top-right-radius:4px;
		border-bottom-right-radius:4px;
		border-bottom-left-radius:0;
	}
	.form-control {
		border-radius: 0px;
	}
	.row {
	  width: 80%;
	}
</style>
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Добавяне на категория</h1>
    </div>              <!-- /.col-lg-12 -->
</div>

<div class="row">
  <div class="col-lg-6">
	    <div class="input-group">
	      <div class="input-group-btn">
	        <button type="button" class="btn btn-outline btn-default dropdown-toggle text-change" data-toggle="dropdown" >Категория<span class="caret"></span></button>
	        <ul class="dropdown-menu">
	          @foreach ($grandcategories as $grandcategory)
			  	<li><label><input type="radio" value="{{$grandcategory->id}}">{{ $grandcategory->name }}</label></li>
			  @endforeach
		      <!-- Other items -->
		    </ul>
	      </div><!-- /btn-group -->
	      <input type="text" class="form-control">
	    </div><!-- /input-group -->
	    <button type="button" class="btn btn-outline btn-default submit">Запиши</button>
  </div><!-- /.col-lg-6 -->
</div><!-- /.row -->
<div class="errors"></div>
<script type="text/javascript" src="/assets/admin/js/jquery-1.11.2.js"></script>
<script type="text/javascript">
	$(function() {
	var category = -1;
		$.ajaxSetup({
			headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')}
		});

	  	$(document).on('change', 'input[type=radio]', function (e) {
			category = $(this).attr('value');
			$('.text-change').text($(this).parent().text());
		});

	   $(".submit").on("click",function() {
	   		if(!($('.text-change').text()=='Категория' && category== -1))
	   		{
            	$.post("/admin/services/categoryadd", { parent_id : category,name:$('input[type=text]').val() }, function() {
				});
				$('input[type=text]').val("");
        	}else {
        		$( ".errors" ).html( "<label>Изберете категория!</br>Въведете име!</label>");
        	}
    	});
	});
</script>
@endsection