@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create New Course</div>

                    <div class="card-body">
                        <form action="{{ route('courses.store')}}" method="POST">
                            @csrf
                            
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Course Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required placeholder="Enter course name..." autocomplete="name" autofocus/>
                                    
                                    @error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="code" class="col-md-4 col-form-label text-md-end">Course Code</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" value="{{ old('code') }}" required placeholder="Enter course code..." autocomplete="code" autofocus/>
                                    
                                    @error('code')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="details" class="col-md-4 col-form-label text-md-end">Course Details</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('details') is-invalid @enderror" name="details" value="{{ old('details') }}" required placeholder="Enter course details.." autocomplete="details" autofocus/>
                                    
                                    @error('details')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-5">
                                    <a href="{{ route('courses.index')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Create</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection