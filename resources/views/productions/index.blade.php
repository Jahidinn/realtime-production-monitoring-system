@extends('layouts.main')

@push('styles')
@livewireStyles
@endpush

@push('scripts')
@livewireScripts
@endpush

@section('container')
    <div class="container mt-4">
        <div class="card p-0">
            <div class="card-header">Production Data</div>
            <div class="card-body">
                    <div class="row">
                    <div class="col-md-6">
                        @livewire('production-input')
                    </div>
        
                    <div class="col-md-6">
                        @livewire('production-table')
                    </div>
                </div>  
            </div>
            </div>


    </div>
@endsection
