@extends('admin.layout.main')
@section('content')
    <div class="iq-card-header d-flex justify-content-between">
        <div class="iq-header-title">
            <h4 class="card-title">Transaction List</h4>
        </div>
    </div>
    <div class="iq-card-body">
        <div class="table-responsive">
            <table class="data-tables table table-striped table-bordered" style="width:100%;white-space: nowrap;">
                @forelse ($transactions as $trans)
                    <li>{{ $trans->name }}</li>
                @empty
                    <img src="{{asset('uploads/img/empty.png')}}" alt="" style="width: 100%;height: 100%">
                @endforelse
            </table>
        </div>
    </div>
@stop
