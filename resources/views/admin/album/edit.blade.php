@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Edit Album</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <form class="form-validate" method="post" action="{{route('album.update',$alb)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label>Album Name:</label>
                <input type="text" name="name" class="form-control" value="{{$alb->name}}">
            </div>
            <div class="form-group">
                <label for="singer">Album Singer</label>
                <select class="form-control" id="singer" name="singer_id">
                    @foreach ($singer as $singer)
                    <option value="{{$singer->id}}">{{$singer->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Album Profile:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="file" id="image">
                    <label class="custom-file-label" for="image">Choose file</label>
                </div>
            </div>
            <div class="form-group">
                <img src="{{url('uploads/img')}}/{{$alb->image_path}}" width="100" height="100" alt="">
            </div>
            <div class="form-group">
                <label>Album Description:</label>
                <textarea class="form-control" name="description" rows="4">{{$alb->description}}</textarea>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <a href="index.php?controller=album" class="text-white btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop
