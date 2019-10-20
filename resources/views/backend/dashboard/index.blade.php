  @extends('backend.master')
  @section('page-title','Dashboard')
  @section('page-heading','All Products') 
  @section('content')
   
   <div class="row">
 @if($products->count() > 0 )

      
 <a class="btn btn-primary" style="float: right;" href="{{ route('admin.create') }}">Add New Product</a>
  
 
     
        <div class="col-md-12">
       @foreach ($products as $product)
        
        <div class="table-responsive" ">
            
              <table id="mytable" class="table table-bordred table-striped">
                    
                   <thead>
                   <tr>
                   <th >ID</th>
                   <th>Product Image</th>
                   <th>Product Name</th>
                   <th>Description</th>
                   <th>Price</th>
                   <th>Category</th>
                   <th >Edit</th>
                   <th >Delete</th>

                   </tr>
                   </thead>


    <tbody>
   
  
    <tr>
      
          
    <td><b>{{$product->id}}</b></td>    
    <td><img src="{{ asset('/images/'.$product->image)}} " style="width: 65px; height: 65px;">
        </td>
    <td>{{$product->name}}</td>
    <td>{{$product->description}}
    </td>
    <td><b>{{$product->price}}$</b></td>
    <td>{{$product->category->category_name}}</td>
    <td ><a href="{{ route('admin.edit',$product->id) }}"><button class="btn btn-primary btn-md"><span class="glyphicon glyphicon-pencil"></span></button></a></td>
    <td><a href="{{route('admin.delete',$product->id)}}" data-confirm="Are you sure to delete this item?"><button onclick="return confirm('Are you sure you want to delete {{$product->name}}?');" class="btn btn-danger btn-md" ><span class="glyphicon glyphicon-trash"></span></button></a></td>
    </tr>


    </tbody>
        
</table>
@endforeach
@else
<h3>No products available</h3>
@endif
<p > {{$products->links()}}</p>  

                
            </div>
            
        </div>
    </div>



     
   
  @endsection        
