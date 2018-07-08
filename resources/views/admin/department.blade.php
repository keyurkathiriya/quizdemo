@extends('admin.layout')
@section('content')
	<div class="row">
		<div class="col-md-6">
		<form action="/admin/adddepartment" method="post">
			{{csrf_field() }}
		  <div class="form-group">
		    <label for="exampleInputEmail1">Add Department</label>
		    <input type="text" class="form-control col-md-8"  id="department" name="departmentname" placeholder="Enter Department">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>
		<div class="col-md-6">
		<form>
			<div class="form-group">
		    <label for="exampleInputEmail1">Department</label>
			<select class="form-control">
				<option value="">Select Department</option>
				<option>1</option>
			</select>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputEmail1">Department</label>
		    <input type="email" class="form-control" id="department" name="department" placeholder="Enter Department">
		  </div>
		  <button type="submit" class="btn btn-primary">Submit</button>
		</form>
		</div>	
</div>
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<thead>
				<tr>
					<th>Sr No.</th>
					<th>Department Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@if(!empty($deptdata))
				<?php $i = 1; ?>
					@foreach($deptdata as $dept)
						<tr>
							<td><?php echo $i; ?></td>
							<td>{{ $dept->departmentname }}</td>
							<td><a href="/admin/edit/{{$dept->id}}" class="btn btn-info">Edit</a></td>
							<td><form action="/admin/deletedepartment/">
								{{csrf_field()}}
								<input type="hidden" name="id" value="{{$dept->id}}">
								<button class="btn btn-danger">Delete</button>
							</form></td>
						</tr>
						<?php $i++; ?>
					@endforeach
				@endif
			</tbody>
		</table>
	</div>
	<div class="col-md-6">
	</div>
</div>
@endsection
@extends('admin.footer')
