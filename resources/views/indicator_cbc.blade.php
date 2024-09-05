@extends('layouts.app')

@section('content')
    <x-back-image isComplete="0" />
    @livewire('indicators-cbc')
@endsection

@push('scripts')
@endpush
