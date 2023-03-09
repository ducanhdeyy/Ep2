@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Song List</h4>
        </div>
        <div class="iq-card-header-toolbar d-flex align-items-center">
            <a href="{{ route('song.create') }}" class="btn btn-primary">Add New Song</a>
        </div>
    </div>
    <div class="iq-card-body">
        <div class="table-responsive">
            <x-alert/>
            <table class="data-tables table table-striped table-bordered" style="width:100%;white-space: nowrap;">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th class="text-center" style="width: 10%;">Song Image</th>
                        <th style="width: 15%;">Song Name</th>
                        <th style="width: 10%;">Singer</th>
                        <th style="width: 10%;">Album</th>
                        <th style="width: 10%;">Category</th>
                        <th class="text-right" style="width: 5%;">Price</th>
                        <th class="text-center" style="width: 5%;">Audio</th>
                        <th style="width: 50%;">Introduction</th>
                        <th style="width: 10%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($song as $value)
                        <tr>
                            <td>{{ $value->id }}</td>
                            <td class="text-center">
                                <img src="{{ url('uploads/img') }}/{{ $value->image_path }}"
                                    class="img-fluid avatar-50 rounded" alt="author-profile">
                            </td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->Singer->name }}</td>
                            <td>{{ $value->Albums->name }}</td>
                            <td>{{ $value->Category->name }}</td>
                            <td class="text-right">{{ $value->price }}</td>
                            <td class="text-center">
                                <audio controls>
                                    <source src="{{ url('uploads/audio') }}/{{ $value->music_path }}">
                                </audio>
                            </td>
                            <td>
                                <p class="mb-0">{{ $value->introduction }}</p>
                            </td>
                            <td class="text-center stick">
                                <div class="flex align-items-center list-user-action">
                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('song.edit', $value) }}"><i
                                            class="ri-pencil-line"></i></a>
                                    <form action="{{route('song.destroy',$value)}}" method="post" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                            data-original-title="Delete" href=""><i
                                                class="ri-delete-bin-line"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $song->appends(request()->all())->links() }}
        </div>
    </div>
@stop
