@extends('front-end.master')
@section('body')


            <div class="container">
                <div class="row">
                    <div class ="col-md-12 well">
                        <br/>
                        <h3 class="text-center"> Dear {{Session ::get ('customerName')}},Please give us your shipping info to complete your valuable order.</h3>
                    </div>
                </div>
                        <div class="row">
                    <div class ="col-md-8 col-md-offset-2">
                        <br/>
                        <h1 class="text-center">Shipping Info</h1>
                        <br/>
                        {{Form :: open (['route'=>'new-shipping','method'=>'POST'])}}
                        <div class="form-group">
                            <input type="text" name="full_name" class="form-control" placeholder="First Name">
                        </div>

                        <div class="form-group">
                            <input type="Email" name="email_address"class="form-control"  placeholder="example@gmail.com">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone_number"class="form-control"  placeholder="Phone Number">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="address" placeholder="Address"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" class="form-control btn btn-info"  value="Save Shipping Info">
                        </div>
                        </br>
                        {{Form :: close()}}
                    </div>






                </div>
            </div>


@endsection
