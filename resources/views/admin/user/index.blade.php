@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">User List</h4>
        </div>
        <div class="iq-card-header-toolbar d-flex align-items-center">
            <a href="{{ route('user.create') }}" class="btn btn-primary">Add New User</a>
        </div>
    </div>
    <div class="iq-card-body">
        <x-alert/>
        <div class="table-responsive">
            <table class="data-tables table table-striped table-bordered" style="width:100%;white-space: nowrap;">
                <thead>
                    <tr>
                        <th style="width: 5%;">No</th>
                        <th style="width: 15%;">Name</th>
                        <th style="width: 10%;">Email</th>
                        <th style="width: 10%">Image</th>
                        <th style="width: 10%;">Phone number</th>
                        <th style="width: 10%;">Password</th>
                        <th style="width: 10%;" class="text-right">Wallet</th>
                        <th style="width: 10%;" class="text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($user as $users)
                        <tr>
                            <td>{{ $users->id }}</td>
                            <td>{{ $users->name }}</td>
                            <td>{{ $users->email }}</td>
                            <td><img src="{{url('uploads/img') .'/'. (Auth::user()->image?? 'user.png') }}" class="img-fluid avatar-50 rounded" alt="author-profile"></td>
                            <td>{{ $users->phone_number }}</td>
                            <td>{{$users->password}}</td>
                            <td class="text-right">{{ $users->wallet }}</td>
                            <td class="text-center stick">
                                <div class="flex align-items-center list-user-action">
                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('user.edit', $users) }}"><i
                                            class="ri-pencil-line"></i></a>
                                    <form action="{{route('user.destroy',$users)}}" method="post" class="d-inline">
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
            {{ $user->appends(request()->all())->links() }}
        </div>
    </div>
@stop
