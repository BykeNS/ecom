@extends('backend.master')
  @section('page-title','Dashboard')
  @section('page-heading','Add New Product')
  
  @section('content')
    <div class="row">
      <div class="col-md-8 ">

       <div class="well">
       {!! Form::open(['route' => 'admin.store','files' => 'true']) !!}

          {{Form::label('name','Name:')}}
          {{Form::text('name','',['class' =>'form-control'])}}

          {{Form::label('description','Description:')}}
          {{Form::textarea('description','',['class' =>'form-control'])}}

          {{Form::label('Price','Price:')}}
          {{Form::number('price','',['class' =>'form-control','maxlength' =>'100'])}}<br>

          {{Form::label('Category','Category:')}}
           <div class="form-group">
            <select name="category_id" class="form-control" >
            <option>Select category</option>
            @foreach($categories as $category)
                   <option value="{{$category->id}}">{{$category->category_name}}</option>
                   @endforeach
           </select>
         </div>       

          {{Form::label('image','Upload image:')}}
          {{ Form::file('image',null, ['class'=>'form-control']) }}<br>

          {{Form::submit('Add Product',['class' =>'btn btn-primary ','style'=>'margin-top: 20px;'])}}
	     {!! Form::close() !!}
       </div>
      </div>
       </div>
       <br><br><br>
  @endsection
 
    
 