@extends('layout')
@section('main')
<div class="card-body">
    <form method="POST" action="{{ route("subscription.subscribe") }}">
        @csrf        
  
        <x-text-field name="name" label="Name" />

        <x-text-field name="surname" label="Surname" />
        
        <x-text-field name="email" label="Email">
            <x-slot name="icon">
                <span class="input-group-text text-success">@</span>
            </x-slot>
        </x-text-field>     

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection