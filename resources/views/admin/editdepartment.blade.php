@extends('admin.layout')
@section('content')
	<div class="row">
		<div class="col-md-6">
		<form action="/admin/update" method="post">
			{{csrf_field() }}
			<input type="hidden" name="id" value="{{$editdept->id}}">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Add Department</label>
		    <input type="text" class="form-control col-md-8"  id="department" name="departmentname" value="{{$editdept->departmentname}}" placeholder="Enter Department">
		  </div>
		  <button type="submit" class="btn btn-primary">Update</button>
		</form>
		</div>
</div>
@endsection
@extends('admin.footer')
