<br>
@if ($errors->any())     
          @foreach ($errors->all() as $error)

			<div class="alert alert-danger" >

			        {{ $error }}
            </div>
  @endforeach    
  @endif

@if (session('success'))

<div class="alert alert-success" style="text-align: center;">
	{{session('success')}}
</div>
@endif 

@if (session('danger'))

   	<div class="alert alert-danger" style="text-align: center;" >
   		{{session('danger')}}
   	</div>
@endif   