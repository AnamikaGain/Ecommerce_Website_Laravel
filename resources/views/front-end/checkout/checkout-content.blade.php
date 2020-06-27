@extends('front-end.master')
@section('body')

    <!--banner-->
    <div class="banner1">
        <div class="container">
            <h3><a href="index.html">Home</a> / <span>Checkout</span></h3>
        </div>
    </div>
    <!--banner-->
   <div class="content">
       <div class="single-wl3">
          <div class="container">
              <div class="row">

                  <div class ="col-md-5 well">
                <h3>Register if you are not Registered before !</h3>
                 <br/>
              {{Form :: open (['route'=>'customer-sign-up','method'=>'POST'])}}
              <div class="form-group">
              <input type="text" name="first_name" class="form-control" placeholder="First Name">
              </div>
                      <div class="form-group">
                          <input type="text" name="last_name" class="form-control" placeholder="Last Name">
                      </div>

                      <div class="form-group">
                  <input type="Email" name="email_address"class="form-control"  placeholder="example@gmail.com">
              </div>
              <div class="form-group">
                  <input type="password" name="password"class="form-control"  placeholder="Password">
              </div>
              <div class="form-group">
                  <input type="text" name="phone_number"class="form-control"  placeholder="Phone Number">
              </div>
              <div class="form-group">
                  <textarea class="form-control" name="address" placeholder="Address"></textarea>
              </div>
              <div class="form-group">
                  <input type="submit" name="btn" class="form-control btn btn-info"  value="Register">
              </div>

              {{Form :: close()}}
          </div>



           <div class ="col-md-5 well" style="margin-left:20px;">
           <h3>Already Registerd?Login Here!</h3>
           <br/>
           {{Form :: open ()}}
           <div class="form-group">
               <input type="Email" name="email_address"class="form-control"  placeholder="example@gmail.com">
           </div>
           <div class="form-group">
               <input type="password" name="password"class="form-control"  placeholder="Password">
           </div>
           <div class="form-group">
               <input type="submit" name="btn" class="form-control btn btn-info"  value="Login">
           </div>
           {{Form :: close()}}

          </div>


   </div>
          </div>
      </div>

   </div>

@endsection
