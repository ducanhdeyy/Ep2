@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Add Song</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <x-alert/>
        <form class="form-validate" method="post" action="{{ route('song.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label>Song Name:</label>
                <input type="text" name="name" class="form-control" value="">
            </div>
            <div class="form-group">
                <label for="singer">Singer:</label>
                <select class="form-control" id="singer" name="singer_id">
                    @foreach ($singer as $singer)
                        <option value="{{ $singer->id }}">{{ $singer->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="singer">Album:</label>
                <select class="form-control" id="singer" name="albums_id">
                    @foreach ($albums as $albums)
                        <option value="{{ $albums->id }}">{{ $albums->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="singer">Category</label>
                <select class="form-control" id="singer" name="category_id">
                    @foreach ($categories as $categories)
                        <option value="{{ $categories->id }}">{{ $categories->name }}</option>
                    @endforeach

                </select>
            </div>
            <div class="form-group">
                <label>Song Price:</label>
                <input type="number" name="price" class="form-control" value="">
            </div>
            <div class="form-group">
                <label>Song Image:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="image_file" id="image" accept=".jpg,jpeg,png,gif">
                    <label class="custom-file-label text-secondary" for="image">Choose image file</label>
                </div>
            </div>
            {{-- <div class="form-group">
                    <img src="../assets/uploads/imgs/" width="100" height="100" alt="">
                </div> --}}
            <div class="form-group">
                <label>Song Audio:</label>
                <div class="custom-file">
                    <input type="file" class="custom-file-input" name="audio_file" id="audio" accept=".mp3,wav,ogg">
                    <label class="custom-file-label text-secondary" for="audio">Choose music file</label>
                </div>
            </div>
            <div class="form-group">
                <label>Song Introduction:</label>
                <textarea class="form-control" name="introduction" rows="4"></textarea>
            </div>
            <div class="form-group d-flex justify-content-between">
                <div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </div>
                <a href="index.php?controller=song" class="text-white btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
@stop
