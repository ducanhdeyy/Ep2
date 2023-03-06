@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Add Category</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <x-alert/>
        <form class="form-validate" method="post" action="{{route('category.store')}}">
            @csrf
            <div class="form-group">
                <label>Category Name:</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Category Description:</label>
                <textarea class="form-control" name="description" rows="4"></textarea>
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
