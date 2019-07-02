@extends('layouts.app')

@section('content')
	@if ($errors->any())
		@foreach ($errors->all() as $error)

			<div class="alert alert-dismissible alert-danger">
			  <button type="button" class="close" data-dismiss="alert">×</button>
			  <strong></strong> {{$error}}

			</div>
		@endforeach

	@endif

	<div class="container">
		<div class="panel panel-default">

				<div class="panel-heading">
					<h3 class="panel-title">Add New student</h3>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="{{ route('update',$student->id) }}" method="POST">

				{{ csrf_field() }}

						  <fieldset>

							<div class="form-group">
						      <label for="firstname" class="col-md-2 control-label">First Name</label>

						      <div class="col-md-10">
						        <input type="text" class="form-control" name ="firstname" value="{{$student->first_name}}" placeholder="Your first Name">
						      </div>
						    </div>

							<div class="form-group">
						      <label for="lastname" class="col-md-2 control-label">Last Name</label>

						      <div class="col-md-10">
						        <input type="text" class="form-control" name ="lastname" value="{{$student->last_name}}" placeholder="Your last Name">
						      </div>
						    </div>
						    <div class="form-group">
						      <label for="inputEmail" class="col-md-2 control-label">Email</label>

						      <div class="col-md-10">
						        <input type="email" class="form-control" name ="email" value="{{$student->email}}" placeholder="Email">
						      </div>
						    </div>

						    <div class="form-group">
						      <label for="phone" class="col-md-2 control-label">Phone</label>

						      <div class="col-md-10">
						        <input type="phone" class="form-control" name ="phone" value="{{$student->phone}}" placeholder="Phone number">
						      </div>
						    </div>

						    <div class="form-group">
						      <div class="col-md-10 col-md-offset-2">
						        <button type="button" class="btn btn-default">Cancel</button>
						        <button type="submit" class="btn btn-primary">Submit</button>
						      </div>
						    </div>
						  </fieldset>
			  		</form>

				</div>

			</div>

	</div>
@endsection
