@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Singer List</h4>
        </div>
        <div class="iq-card-header-toolbar d-flex align-items-center">
            <a href="{{ route('singer.create') }}" class="btn btn-primary">Add New Singer</a>
        </div>
    </div>
    <div class="iq-card-body">
        <div class="table-responsive">
            <x-alert/>
            <table class="data-tables table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 5%;">Profile</th>
                        <th style="width: 15%;">Singer Name</th>
                        <th style="width: 15%;" class="text-center">Date Of Birth</th>
                        <th style="width: 50%;">Singer Description</th>
                        <th style="width: 10%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($singer as $sing)
                        <tr>
                            <td>{{ $sing->id }}</td>
                            <td>
                                <img src="{{ url('uploads/img') }}/{{ $sing->image_path }}"
                                    class="img-fluid avatar-50 rounded" alt="author-profile">
                            </td>
                            <td>{{ $sing->name }}</td>
                            <td class="text-center">{{ $sing->dob }}</td>
                            <td>
                                <p class="mb-0">{{ $sing->introduction }}</p>
                            </td>
                            <td class="text-center">
                                <div class="flex align-items-center list-user-action">
                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('singer.edit', $sing) }}"><i
                                            class="ri-pencil-line"></i></a>
                                    <form action="{{route('singer.destroy',$sing)}}" method="post" class="d-inline">
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
            {{ $singer->appends(request()->all())->links() }}
        </div>
    </div>
@stop
