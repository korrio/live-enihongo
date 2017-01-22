@extends('admin.layouts.template')
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
							<div class="col-md-4 col-lg-3">


                <section class="panel">
								<div class="panel-body">
									<div class="thumb-info mb-md">
                    @if($objs->provider == 'email' && $objs->avatar != "NULL")
										<img src="{{url('assets/images/avatar/'.$objs->avatar)}}" class="rounded img-responsive" alt="{{$objs->name}}">
										@elseif ($objs->provider == 'facebook')
										<img src="http://{{$objs->avatar}}" class="rounded img-responsive" alt="{{$objs->name}}">
                    @else
                    <img src="{{url('assets/images/avatar/blank_avatar_240x240.gif')}}" class="rounded img-responsive" alt="{{$objs->name}}">
                    @endif
										<div class="thumb-info-title" style="background: rgba(36, 27, 28, 0.0);">

											<span class="thumb-info-type">{{ $objs->position }}</span>
										</div>
									</div>

									<div class="widget-toggle-expand mb-md">
										<div class="widget-header">
											<h6>Profile Completion</h6>
											<div class="widget-toggle">+</div>
										</div>
										<div class="widget-content-collapsed">
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="{{$score}}" aria-valuemin="0" aria-valuemax="100" style="width: {{$score}}%;">
													{{$score}}%
												</div>
											</div>
										</div>
                    <style>
                    ul.simple-todo-list li {
                        position: relative;
                        padding: 0px;
                    }
                    </style>
										<div class="widget-content-expanded">
											<ul class="simple-todo-list">
												<li><i class="fa fa-user"></i> {{ $objs->first_name }} {{ $objs->last_name }}</li>
                        <li><i class="fa fa-envelope-o "></i> {{ $objs->email }} </li>
												<li><i class="fa fa-phone"></i> {{ $objs->phone }} </li>
                        <li><i class="fa fa-gavel "></i> {{ $objs->position }} </li>

											</ul>
										</div>
									</div>





								</div>
							</section>

							</div>







              <div class="col-md-8 col-lg-8">

							<div class="tabs">
								<ul class="nav nav-tabs tabs-primary">

									<li class="active">
										<a href="#edit" data-toggle="tab">Edit</a>
									</li>
								</ul>
								<div class="tab-content">

									<div id="edit" class="tab-pane active">

										<form class="form-horizontal" action="{{$url}}" method="post" enctype="multipart/form-data">
                      {{ method_field($method) }}
											{{ csrf_field() }}

											<h4 class="mb-xlg">Personal Information</h4>
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
											<fieldset>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">Username</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="name" value="{{ $objs->name }}" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileFirstName">First Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="first_name" value="{{ $objs->first_name }}" id="profileFirstName">
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileLastName">Last Name</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="last_name" value="{{ $objs->last_name }}" id="profileLastName">
													</div>
												</div>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Email</label>
													<div class="col-md-8">
														<input type="text" class="form-control" name="email" value="{{ $objs->email }}" id="profileCompany" readonly>
													</div>
												</div>
												<div class="form-group">
													<label class="col-md-3 control-label" for="profileCompany">Phone</label>
													<div class="col-md-8">
														<input type="number" class="form-control" name="phone" value="{{ $objs->phone }}" id="profileCompany" >
													</div>
												</div>
                        <div class="form-group">
													<label class="col-md-3 control-label" for="profileAddress">Position</label>
													<div class="col-md-8">
														<select name="position" class="form-control mb-md" required>

                      <option value="{{ $objs->position }}">{{ $objs->position }}</option>
											<option value="teacher">Teacher</option>
											<option value="teacher">Student</option>
                    	<option value="admin">Admin</option>
                    </select>
													</div>
												</div>

                        <div class="form-group">
                          <label class="col-md-3 control-label" for="exampleInputEmail1">รูป Avatar</label>
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
													<label class="col-md-3 control-label" for="profileAddress">Address</label>
													<div class="col-md-8">
														<textarea class="form-control" rows="2" name="address" id="profileBio">{{ $objs->address }}</textarea>
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

@if ($message = Session::get('success'))
<script type="text/javascript">
var stack_bar_top = {"dir1": "down", "dir2": "right", "push": "top", "spacing1": 0, "spacing2": 0};
var notice = new PNotify({
      title: 'ยินดีด้วยค่ะ',
      text: 'ทำการแก้ไข เสร็จเรียบร้อยแล้ว ',
      type: 'success',
      addclass: 'stack-bar-top',
      stack: stack_bar_top,
      width: "100%"
    });
</script>
@endif

@stop('scripts')
