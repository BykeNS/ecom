@extends('backend.master')
@section('page-title','Category')
@section('page-heading','New Category')
@section('content')
  <section class="content">
  	<div class="col xs 12">
  		<form action="{{route('category.post')}}" method="post">
  			{{csrf_field()}}
        <div class="form-group"> 
  			<label >Category Name</label>
  			<input type="text" class="form-control" name="category_name" placeholder="Enter Category Name">
  		  </div>

  		  <div class="form-group">
  		  	<select name="category_status" class="form-control">
  		  	<option>Status</option>
  		  	<option value="1">Published</option>
  		  	<option value="0">Un Published</option>
  		   </select>
	     </div>

	  <div class="form-group">
	  	<input type="submit" name="" value="Submit" class="btn btn-primary btn-block ">
	  </div>	
	</form>
  </div>
 </section>
@endsection