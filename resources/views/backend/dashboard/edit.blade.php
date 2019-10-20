@extends('backend.master')
  @section('page-title','Dashboard')
  @section('page-heading','Edit Product')
  @section('content')

   <div class="row">
     
		{!! Form::model($products,['route' => ['admin.update', $products->id],'method' => 'PUT','files' =>'true']) !!}
		<div class="col-md-8">   
       <div class="well">
          <img src="{{ asset('/images/'.$products->image)}}" class="img-thumbnail" style="width: 85px; height: 85px;"><br>

          {{ Form::label('name','Name:')}}
          {{ Form::text('name',null,['class' =>'form-control']) }}<br>

          {{ Form::label('description','Description:')}}
          {{ Form::textarea('description',null,['class' =>'form-control']) }}<br>

          {{Form::label('price','Price:')}}
          {{ Form::number('price',null, ['class'=>'form-control']) }}<br>

          {{Form::label('image','Upload image:')}}
          {{ Form::file('image',null, ['class'=>'form-control']) }}<br>
          
        
          
          {{Form::submit('Edit Product',['class'=>'btn btn-primary '])}}
         
          {!! Form::close() !!}
          </div>
    </div>
    
 </div>
  @endsection