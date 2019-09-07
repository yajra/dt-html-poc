@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">All Users</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>

    <hr>

    <div class="card">
        <div class="card-header">
            <a href="{{route('users.inactive.index')}}">Inactive Users</a>
        </div>
        <div class="card-body">
            {{ $inactive->table() }}
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
    {{ $inactive->scripts() }}
@endpush
