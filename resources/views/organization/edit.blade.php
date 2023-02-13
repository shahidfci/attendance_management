@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Organization</div>

                    <div class="card-body">
                        <form action="{{ route('organization.update',$organization->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Organization Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $organization->name }}"  placeholder="Enter organization name..." autocomplete="name" autofocus/>
                                    
                                    @error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Organization Email</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $organization->email }}"  placeholder="Enter organization email..." autocomplete="email" autofocus/>
                                    
                                    @error('email')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">Contact No</label>

                                <div class="col-md-6">
                                    <input type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone"  value="{{ $organization->phone }}"  placeholder="Enter contact no..." autocomplete="phone" autofocus/>
                                    
                                    @error('phone')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">Addresss</label>

                                <div class="col-md-6">
                                    <textarea  class="form-control @error('address') is-invalid @enderror" name="address" autocomplete="address" autofocus>
                                        {{ $organization->address }}
                                    </textarea>
                                    @error('address')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="logo" class="col-md-4 col-form-label text-md-end">Organization Logo</label>

                                <div class="col-md-6">
                                    <input type="file" class="form-control @error('logo') is-invalid @enderror" name="logo" value="{{ $organization->logo }}" autocomplete="logo" autofocus disabled/>
                                    
                                    @error('logo')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-5">
                                    <a href="{{ route('organization.index')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection