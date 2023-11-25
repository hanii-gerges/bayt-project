
@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $user->name }}'s Profile</div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img src="{{ asset('images/undraw_profile.svg') }}" alt="User Image" class="img-fluid">
                            </div>
                            <div class="col-md-8">
                                <p><strong>{{ __('Name') }}:</strong> {{ $user->name }}</p>
                                <p><strong>{{ __('Email') }}:</strong> {{ $user->email }}</p>
                                <p><strong>{{ __('Age') }}:</strong> {{ $user->age }}</p>
                                <p><strong>{{ __('Location Residence') }}:</strong> {{ $user->location }}</p>
                                <p><strong>{{ __('Role') }}:</strong> {{ $user->roles->first()->name }}</p> <!-- Added role field -->
                            </div>
                        </div>
                        @role('admin')
                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary">Edit</a>
                                    <form action="{{ route('users.destroy', $user->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </div>
                            </div>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
