@extends('admin.layouts.template')

@section('admin.stylesheet')
   
@stop('admin.stylesheet')

@section('admin.content')

				<section role="main" class="content-body">

					<header class="page-header">
						<h2>{{$header}}</h2>

						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="dashboard.html">
										<i class="fa fa-home"></i>
									</a>
								</li>

								<li><span>{{$header}}</span></li>
							</ol>

							<a class="sidebar-right-toggle" data-open="sidebar-right" ><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>


					<!-- start: page -->




							<div class="row">
							<div class="col-md-2 col-lg-2">


                
							</div>







              <div class="col-md-8 col-lg-8">

							<div class="tabs">
								
								<div class="tab-content">

									<div id="edit" class="tab-pane active">

                    @if (count($errors) > 0)
                    <br>
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

										<form id="newsForm" class="form-horizontal" action="{{$url}}" method="post" enctype="multipart/form-data">
                      {{ method_field($method) }}
											{{ csrf_field() }}

											<h4 class="mb-xlg">ใส่ข้อมูลคอร์ส</h4>

											<fieldset>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Username*</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="name" value="{{ old('name') }}" id="profileFirstName">
														<input type="hidden" class="form-control" name="user_id" value="student" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">ประเภทคอร์ส*</label>
													<div class="col-md-8">
														<select name="position" class="form-control mb-md" required>

								                      <option value="">-- เลือกประเภทคอร์ส --</option>
								                      @foreach($course as $courses)
													  <option value="teacher">{{$courses->type_name}}</option>
													  @endforeach
								                    </select>
																					</div>
																				</div>
                

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="exampleInputEmail1">รูป Avatar*</label>
                          <div class="col-md-8">
                          <div class="fileupload fileupload-new" data-provides="fileupload">
        														<div class="input-append">
        															<div class="uneditable-input">
        																<i class="fa fa-file fileupload-exists"></i>
        																<span class="fileupload-preview"></span>
        															</div>
        															<span class="btn btn-default btn-file">
        																<span class="fileupload-exists">Change</span>
        																<span class="fileupload-new">Select file</span>
        																<input type="file" name="image">
        															</span>
        															<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
        														</div>
        													</div>
                                  </div>
                        </div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">เพิ่มไฟล์ประกอบการเรียน</label>
													<div class="col-md-8">
														<div id="photo_album_files" class="dropzone"></div>
													</div>
												</div>

											</fieldset>


											




											<div class="panel-footer">
												<div class="row">
													<div class="col-md-9 col-md-offset-3">
														<button type="submit" class="btn btn-primary">Submit</button>
														<button type="reset" class="btn btn-default">Reset</button>
													</div>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
						</div>











						</div>

</section>
@stop


@section('scripts')

<script>
        Dropzone.autoDiscover = false;

        var dz_params = {
            url: "{{url('/file/post')}}" ,
            paramName: 'files',
            maxFilesize: 5,
            maxFiles: 1,
            addRemoveLinks: true,
            dictRemoveFile: 'ลบรูป',
            acceptedFiles: 'image/*',
            maxfilesexceeded: function(f) {
                this.removeFile(f);
            },
            success: function(r) {
                console.log(r);
            }
        };

     
        var photoAlbumFiles = new Dropzone("#photo_album_files", Object.assign({},dz_params, { maxFiles: 8 } ));
        var $form = $('#newsForm');
      
        $.map(photoAlbumFiles.getAcceptedFiles(), function(photo, i) {
                    $form.append('<input name="photo[]" type="hidden" value="' + getFilename(photo) + '"/>');
                });
             
        

        function getFilename(f) {

            if( !f ) {
                return "";
            } else {
                var data = f.xhr.responseText;
                return JSON.parse(data).filename;
            }

        }

    </script>

@stop('admin.scripts')