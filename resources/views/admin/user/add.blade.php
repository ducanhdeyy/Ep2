@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Add User</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <x-alert/>
        <form class="form-validate" method="post" action="{{route('user.store')}}" enctype="multipart/form-data">
            @csrf
            <div class=" row align-items-center">
                <div class="form-group col-sm-6">
                    <label for="fname">Name:</label>
                    <input type="text" class="form-control" name="name" id="fname" value="">
                </div>
                <div class="form-group col-sm-6">
                    <label for="lname">Email:</label>
                    <input type="email" class="form-control" name="email" id="lname" value="">
                </div>
                <div class="form-group col-sm-6">
                    <label for="lname">Password:</label>
                    <input type="password" class="form-control" name="password" id="lname" value="">
                </div>
                <div class="form-group col-sm-6">
                    <label>User Profile:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" name="file" id="image" accept=".jpg.jpeg.png">
                        <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                </div>

                <div class="form-group col-sm-6">
                    <label for="uname">Phone number:</label>
                    <input type="text" class="form-control" id="uname" name="phone_number" value="">
                </div>
                <!-- <div class="form-group col-sm-6">
                    <label for="uname">My wallet:</label>
                    <input type="text" class="form-control" id="uname" name="wallet" value="">
                </div> -->
                <div class="form-group col-sm-6">
                    <label for="uname">Wallet:</label>
                    <input type="text" class="form-control" id="uname" name="wallet" value="">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
            </div>
        </form>
    </div>
@stop
