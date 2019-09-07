@extends('layout')

@section('content')
    <div class="card">
        <div class="card-header">Inactive Users</div>
        <div class="card-body">
            {{ $dataTable->table() }}
        </div>
    </div>
@endsection

@push('scripts')
    {{ $dataTable->scripts() }}
@endpush
