@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Category List</h4>
        </div>
        <div class="iq-card-header-toolbar d-flex align-items-center">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
        </div>
    </div>
    <div class="iq-card-body">
        <div class="table-responsive">
            <table class="data-tables table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th width="5%">No</th>
                        <th width="20%">Song Category</th>
                        <th width="65%">Category Description</th>
                        <th class="text-center" width="10%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($category as $cate)
                        <tr>
                            <td>{{ $cate->id }}</td>
                            <td>{{ $cate->name }}</td>
                            <td>
                                <p class="mb-0">{{ $cate->description }}</p>
                            </td>
                            <td class="text-center">
                                <div class="flex align-items-center list-user-action">
                                    <a class="bg-primary" data-toggle="tooltip" data-placement="top" title=""
                                        data-original-title="Edit" href="{{ route('category.edit', $cate) }}"><i
                                            class="ri-pencil-line"></i></a>
                                    <form action="{{route('category.destroy',$cate)}}" method="post" class="d-inline">
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
            {{ $category->appends(request()->all())->links() }}
        </div>
    </div>
@stop
