
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
		  border: 7px dashed #999;
		  text-align: center;
		  color: #999;
		  font-size: 20px;
		  width: 95%;
		  height: 300px;
		  line-height: 300px;
		  cursor: pointer;
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
		label p{
			text-align: center;
		}

		</style>

<br>
<div id="container">
    <a style="display:none" id="pickfiles" href="javascript:;">[Select files]</a> 
    <a style="display:none" id="uploadfiles" href="javascript:;">[Upload files]</a>
</div>
<div id="drop-target" style="position: relative; z-index: 0;">Поставете снимки</div>
<br />
<div id="filelist"></div>
<pre id="console" style="display:none"></pre>
		@foreach ($categories as $category)
			<div id="{{$category->id}}" class="col-lg-12">
                <h1 class="page-header">{{$category->name}}</h1>
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
	    <script type="text/javascript" src="/assets/admin/js/jquery-1.11.2.js"></script>
	    <script type="text/javascript" src="/assets/js/plupload.full.min.js"></script>
		<script type="text/javascript">
			$(function() {
			   $.ajaxSetup({
			       headers: {
			           'X-CSRF-Token': $('meta[name="_token"]').attr('content')
			       }
			   });

			   $('.photoCheck').on('switchChange.bootstrapSwitch', function(event, state) {
			    	if($(this).is(':checked')){
		               $.post("/admin/gallery", { id : $(this).val(),show:0 }, function(data) {
						});
		               }else{
		               	$.post("/admin/gallery", { id : $(this).val(),show:1 }, function() {
						});
		            }
				});
			});

		</script>
		<script type="text/javascript">
			var uploader = new plupload.Uploader({
		        // General settings
		        runtimes : 'html5',
				browse_button : 'drop-target', // you can pass in id...
				drop_element: "drop-target",
		        url : '/admin/test/add',
		        chunk_size : '50kb',

		 
		        // Resize images on client-side if we can
		        resize : {  quality : 70, crop: true },
		        
		        filters : {
		            max_file_size : '10mb',

					// Specify what files to browse for
		            mime_types: [
		                {title : "Image files", extensions : "jpg,gif,png"}
		            ]
		        },						
				// Sort files
				sortable: true,

				// Enable ability to drag'n'drop files onto the widget (currently only HTML5 supports that)
				dragdrop: true,
		 
				flash_swf_url : '/assets/js/Moxie.swf',
				silverlight_xap_url : '/assets/js/Moxie.xap',
				headers: {
					            'X-CSRF-Token': $('meta[name="_token"]').attr('content')
					        },
		         
		        // PreInit events, bound before the internal events
		        preinit : {
		            Init: function(up, info) {
		                log('[Init]', 'Info:', info, 'Features:', up.features);
		            },
		 
		            UploadFile: function(up, file) {
		                log('[UploadFile]', file);
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
						log('[PostInit]');
						
						document.getElementById('uploadfiles').onclick = function() {
							uploader.start();
							return false;
						};
					},

					Browse: function(up) {
		                // Called when file picker is clicked
		                log('[Browse]');
		            },

		            Refresh: function(up) {
		                // Called when the position or dimensions of the picker change
		                log('[Refresh]');
		            },
		 
		            StateChanged: function(up) {
		                // Called when the state of the queue is changed
		                log('[StateChanged]', up.state == plupload.STARTED ? "STARTED" : "STOPPED");
		            },
		 
		            QueueChanged: function(up) {
		                // Called when queue is changed by adding or removing files
		                log('[QueueChanged]');
		            },

					OptionChanged: function(up, name, value, oldValue) {
						// Called when one of the configuration options is changed
						log('[OptionChanged]', 'Option Name: ', name, 'Value: ', value, 'Old Value: ', oldValue);
					},

					BeforeUpload: function(up, file) {
						// Called right before the upload for a given file starts, can be used to cancel it if required
						log('[BeforeUpload]', 'File: ', file);
					},
		 
		            UploadProgress: function(up, file) {
		                // Called while file is being uploaded

		                log('[UploadProgress]', 'File:', file, "Total:", up.total);
						document.getElementById(file.id).getElementsByTagName('b')[0].innerHTML = '<div class="progress"><div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: ' + file.percent + '%;">' + file.percent + "%</div></div>";
		            },

					FileFiltered: function(up, file) {
						// Called when file successfully files all the filters
		                log('[FileFiltered]', 'File:', file);
					},
		 
		            FilesAdded: function(up, files) {
						up.start();
		                // Called when files are added to queue
		                log('[FilesAdded]');
						 plupload.each(files, function(file) {
								document.getElementById('filelist').innerHTML += '<div id="' + file.id + '">' + file.name + ' (' + plupload.formatSize(file.size) + ') <b></b></div>';
							});
		                plupload.each(files, function(file) {
		                    log('  File:', file);
		                });
		            },
		 
		            FilesRemoved: function(up, files) {
		                // Called when files are removed from queue
		                log('[FilesRemoved]');
		 
		                plupload.each(files, function(file) {
		                    log('  File:', file);
		                });
		            },
		 
		            FileUploaded: function(up, file, info) {
		                // Called when file has finished uploading
		                log('[FileUploaded] File:', file, "Info:", info);
						$( "#1" ).append( "<label><div class='gallery'><img class='nonselected' src='/laravel/public/assets/images/gallery/"+file.name+"'/></div><input  class='photoCheckNext' checked=''  id='switch-size' data-size='mini' value='{{ $image->id }}' type='checkbox'/></label>" );
						$('.photoCheckNext').wrap('<div class="make-switch" />').bootstrapSwitch();
		            },
		 
		            ChunkUploaded: function(up, file, info) {
		                // Called when file chunk has finished uploading
		                log('[ChunkUploaded] File:', file, "Info:", info);
		            },

					UploadComplete: function(up, files) {
						// Called when all files are either uploaded or failed
		                log('[UploadComplete]');
					},

					Destroy: function(up) {
						// Called when uploader is destroyed
		                log('[Destroy] ');
					},
		 
		            Error: function(up, args) {
		                // Called when error occurs
		                log('[Error] ', args);
		            }
		        }
		    });
	 
	 
		    function log() {
		        var str = "";
		 
		        plupload.each(arguments, function(arg) {
		            var row = "";
		 
		            if (typeof(arg) != "string") {
		                plupload.each(arg, function(value, key) {
		                    // Convert items in File objects to human readable form
		                    if (arg instanceof plupload.File) {
		                        // Convert status to human readable
		                        switch (value) {
		                            case plupload.QUEUED:
		                                value = 'QUEUED';
		                                break;
		 
		                            case plupload.UPLOADING:
		                                value = 'UPLOADING';
		                                break;
		 
		                            case plupload.FAILED:
		                                value = 'FAILED';
		                                break;
		 
		                            case plupload.DONE:
		                                value = 'DONE';
		                                break;
		                        }
		                    }
		 
		                    if (typeof(value) != "function") {
		                        row += (row ? ', ' : '') + key + '=' + value;
		                    }
		                });
		 
		                str += row + " ";
		            } else {
		                str += arg + " ";
		            }
		        });
		 
		        var log = document.getElementById('console');
		        log.innerHTML += str + "\n";
		    }

			uploader.init();

	</script>
@endsection