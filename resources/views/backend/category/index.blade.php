@extends('backend.master')
@section('page-title','Category')
@section('page-heading','Manage Categories')
@section('content')
<section class="content">
	<div class="col-xs-12">
		<table class="table table-hover">
			
			<thead>
				<tr>
					<th>ID</th>
					<th>Category Name</th>
					<th>Category Status</th>
					<th style="width: 20px;">Edit</th>
					<th style="width: 20px;">Delete</th>
				</tr>
			</thead>
			<tbody>
				@foreach($categories as $category)
				<tr>
					<td>{{$category->id}}</td>
					<td>{{$category->category_name}}</td>
					<td>{{$category->category_status == 1 ? "Publish" : "Unpublished"}}</td>
					<td style="width: 20px;">			
						<a href="{{route('category.edit', $category->id)}}" class="btn btn-primary btn-md"><span class="glyphicon glyphicon-pencil"></span></a>	
					</td>
					<td style="width: 20px;">	
						<a href="{{route('category.delete', $category->id)}}" class="btn btn-danger btn-md" onclick="return confirm('Are you sure you want to delete {{$category->category_name}}?');"><span class="glyphicon glyphicon-trash"></span></a>		
					</td>
				
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</section>
@endsection