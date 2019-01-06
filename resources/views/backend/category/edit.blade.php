@extends('backend.master')
@section('page-title','Category')
@section('page-heading','Edit Category')
@section('content')
<section class="content">
  	<div class="col xs 12">
  		<form action="{{route('category.update', $category->id)}}" method="post">
  			{{csrf_field()}}
           <div class="form-group"> 
  			<label >Category Name</label>
  			<input type="text" class="form-control" name="category_name" value="{{$category->category_name}}">
  		  </div>

  		  <div class="form-group">
  		  	<select name="category_status" class="form-control" value="{{$category->category_status}}"  >
  		  	<option  >Status</option>
  		  	<option value="1">Published</option>
  		  	<option value="0">Un Published</option>
  		   </select>
	     </div>

	  <div class="form-group">
	  	<input type="submit" name="" value="Update Category" class="btn btn-primary  ">
	  </div>	
	</form>
  </div>
 </section>
@endsection