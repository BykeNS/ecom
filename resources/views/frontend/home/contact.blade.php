@extends('frontend.master')
@section('content')
<section id="contact">
  <div class="container">
    <div class="col-md-5"><br>
      <h1 ><strong>Contact Us</strong></h1>
    </div><br><br>
    
  
    
    <div class="row"><br>
      <div class="col-md-7">
        <iframe width="600" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/search?q=dunavska%2011&key=AIzaSyA64UXZ2UBOMqufgysr_4I1eSRAZunlDxY" allowfullscreen></iframe>
      </div>

      <div class="col-md-5">
            
       

        <form action="/contact/store" method="POST">
            {{ csrf_field() }}  
         <input type="hidden" name="_token" value="{{ csrf_token() }}" >
          <div class="form-group">
            <input type="text" class="form-control" name="name" value="" placeholder="Name" >
          </div>
          <div class="form-group">
            <input type="email" class="form-control" name="email" value="" placeholder="E-mail" >
          </div>
          <div class="form-group">
            <textarea class="form-control" name="message" rows="10" placeholder="Message" ></textarea>
          </div>
          <button class="btn btn-default" type="submit" name="button">
              <i class="fa fa-paper-plane-o" aria-hidden="true"></i> Submit
          </button>
        </form>
      </div>
    </div>
  </div>
</section>

@endsection