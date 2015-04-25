
@extends('admin.admin')

@section('content')
<style>
	.nonselected{
		width: 140px;
		height: 150px;
		border: 1px solid #337AB7;
		border-radius: 10px;
		overflow: hidden;
		float: left;
		margin: 10px;
		position: relative;
	}
	.category{
		width: 100%;
		border-bottom: 1px solid;
	}
	.bootstrap-switch{
		top: -32px;
  		left: 10px;
	}
	#drop-target {
		margin-top: 25px;
		left: 12px;
		border: 5px dashed #999;
		text-align: center;
		color: #999;
		font-size: 20px;
		height: 200px;
		line-height: 200px;
		cursor: pointer;
		width: 1450px;
		max-width: 1450px;
	}
	.progress {
		height: 10px;
		width: 100px;
		margin-left: 5px;
		margin-bottom: 0px;
		overflow: hidden;
		background-color: #f5f5f5;
		border-radius: 4px;
		-webkit-box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
		box-shadow: inset 0 1px 2px rgba(0,0,0,.1);
		display: inline-block;
	}
	.progress-bar {
		float: left;
		width: 0;
		height: 100%;
		font-size: 11px;
		line-height: 10px;
		color: #fff;
		text-align: center;
		background-color: #337ab7;
		-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
		box-shadow: inset 0 -1px 0 rgba(0,0,0,.15);
		-webkit-transition: width .6s ease;
		-o-transition: width .6s ease;
		transition: width .6s ease;
	}
	.filelist{
		margin-left: 25px;
  		margin-top: 25px;
	}
	@media (max-width: 1680px) {

	    #drop-target{
	      width: 1120px;
	    }
	}
	@media (max-width: 1525px) {

	    #drop-target{
	      width: 955px;
	    }
	}
	@media (max-width: 1365px) {

	    #drop-target{
	      width: 790px;
	    }
	}
	@media (max-width: 1200px) {

	    #drop-target{
	      width: 630px;
	    }
	}
	@media (max-width: 1035px) {

	    #drop-target{
	      width: 465px;
	    }
	}
	@media (max-width: 870px) {

	    #drop-target{
	      width: 300px;
	    }
	}
	#dropelement{
		width: 100%;
		height: 100%;
	}
</style>
</script>
<pre id="console" style="display:none"></pre>
		@foreach ($categories as $category)
			<div id="{{$category->id}}" class="col-lg-12">
                <h1 class="page-header">{{$category->name}}</h1>
                <div id="drop-target"><div id="dropelement{{$category->id}}">Поставете файл!</div></div>
				<div id="filelist{{$category->id}}"></div>
				<script type="text/javascript" src="/assets/admin/js/jquery-1.11.2.js"></script>
				<script type="text/javascript">
							$(function() {
								function ajaxCallBack(n,data,file){
									$( "#{{$category->id}}" ).append( "<label><div class='gallery'><img class='nonselected' src='/laravel/public/assets/images/gallery/"+n+"/"+file.name+"'/></div><input  class='photoCheck' checked=''  id='switch-size' data-size='mini' value='"+data+"' type='checkbox'/></label>");
									$(".photoCheck").bootstrapSwitch();
								}
								var uploader = new plupload.Uploader({
							        // General settings
							        runtimes : 'html5',
									browse_button : 'dropelement{{$category->id}}',
									drop_element: "dropelement{{$category->id}}",
							        url : '/admin/gallery/saveimage',
							        chunk_size : '50kb',
							        resize : {  quality : 70, crop: true },
							        filters : {
							            max_file_size : '10mb',
										// Specify what files to browse for
							            mime_types: [
							                {title : "Image files", extensions : "jpg,gif,png,jpeg"}
							            ]
							        },						
									// Sort files
									sortable: true,
									// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
									dragdrop: true,
									flash_swf_url : '/assets/js/Moxie.swf',
									silverlight_xap_url : '/assets/js/Moxie.xap',
									headers: {'X-CSRF-Token': $('meta[name="_token"]').attr('content')},
							        // PreInit events, bound before the internal events
							        preinit : {
							            Init: function(up, info) {
							            },
							 
							            UploadFile: function(up, file) {
											var d =  new Date();
					   						var n = d.getFullYear()+'-'+(d.getMonth()+1)+'-'+d.getDate()+'-'+d.getHours()+'-'+d.getMinutes()+'-'+d.getSeconds();
							                file.name = n+'__'+file.name;
							                // You can override settings before the file is uploaded
							                // up.setOption('url', 'upload.php?id=' + file.id);
							                // up.setOption('multipart_params', {param1 : 'value1', param2 : 'value2'});
							            }
							        },
							 
							        // Post init events, bound after the internal events
							        init : {
										PostInit: function() {
											// Called after initialization is finished and internal event handlers bound
											
											/*document.getElementById('uploadfiles').onclick = function() {
												uploader.start();
												return false;
											};*/
										},
							
							            UploadProgress: function(up, file) {
							                // Called while file is being uploaded

											document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: ' + file.percent + '%;">' + file.percent + "%</div></div>";
							            },
							 
							            FilesAdded: function(up, files) {
											up.start();
							                // Called when files are added to queue
											 plupload.each(files, function(file) {
													document.getElementById('filelist{{$category->id}}').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
												});
							                plupload.each(files, function(file) {
							                });
							            },
							 
							            FileUploaded: function(up, file, info) {
							                // Called when file has finished uploading
											var d =  new Date();
					   						var n = d.getFullYear()+'-'+("0" + (d.getMonth() + 1)).slice(-2);
					   						$.post("/admin/gallery/image", { name : file.name,category:"{{$category->id}}" }, function(data) {
					   							ajaxCallBack(n,data,file);
					   						});
							            },

							        }
							    });
								uploader.init();
							});
				</script>
		   		@foreach ($images as $image)
		   			@if($image->category == $category->id)
					  	<label>
						 	<div class="gallery">
						  	    <img class="nonselected" src="/laravel/public/assets/images/gallery/{{ $image->photo }}"/>
					   		</div>
					   		@if($image->show == 0)
							    <input  class="photoCheck" checked=""  id="switch-size" data-size="mini" value="{{ $image->id }}" type="checkbox"/>
			   				@else
				   				<input class="photoCheck"  id="switch-size" data-size="mini" value="{{ $image->id }}" type="checkbox"/>
			   				@endif
				    	</label>
			    	@endif
		    	@endforeach
		    </div>
	    @endforeach
	    <script type="text/javascript" src="/assets/js/plupload.full.min.js"></script>
		<script type="text/javascript">
			$(function() {
			   $(".photoCheck").bootstrapSwitch();
			   $.ajaxSetup({
			       headers: {
			           'X-CSRF-Token': $('meta[name="_token"]').attr('content')
			       }
			   });

			  $(document).on('switchChange.bootstrapSwitch', '.photoCheck', function (e) {
					if($(this).is(':checked')){
		               $.post("/admin/gallery/showindex", { id : $(this).val(),show:0 }, function(data) {
						});
		               }else{
		               	$.post("/admin/gallery/showindex", { id : $(this).val(),show:1 }, function() {
						});
		            }
				});
			});
		</script>
@endsection