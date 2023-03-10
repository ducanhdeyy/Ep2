@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Edit Singer</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <x-alert/>
        <form class="form-validate" method="post" action="{{route('singer.update',$sing)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Singer Name:</label>
                <input type="text" name="name" class="form-control" value="{{$sing->name}}">
            </div>
            <div class="form-group">
                <label>Singer Date Of Birth:</label>
                <input type="date" name="dob" class="form-control" value="{{$sing->dob}}">
            </div>
            <div class="form-group">
                <label>Singer Profile:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <img src="{{url('uploads/img')}}/{{$sing->image_path}}" alt="" width="50">
            </div>
            <div class="form-group">
                <label>Singer Introduction:</label>
                <textarea class="form-control" name="introduction" rows="4">{{$sing->introduction}}</textarea>
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
