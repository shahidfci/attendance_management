@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Teachers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Teachers / Edit Teacher</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">Edit Teacher</div>

            <div class="card-body pt-3">
                <form action="{{ route('teachers.update',$teacher->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="name" class="col-md-4 col-form-label text-md-end">Teacher Name</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $teacher->name }}" required placeholder="Enter teacher name..." autocomplete="name" autofocus/>
                            
                            @error('name')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="employe_id" class="col-md-4 col-form-label text-md-end">Employe Id</label>

                        <div class="col-md-6">
                            <input type="text" class="form-control @error('employe_id') is-invalid @enderror" name="employe_id" value="{{ $teacher->employe_id }}" required placeholder="Enter employe id..." autocomplete="employe_id" autofocus/>
                            
                            @error('employe_id')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                        <div class="col-md-6">
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $teacher->email }}" required placeholder="Enter teacher email..." autocomplete="email" autofocus/>
                            
                            @error('email')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="mobile" class="col-md-4 col-form-label text-md-end">Mobile No</label>

                        <div class="col-md-6">
                            <input type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{ $teacher->mobile }}" required placeholder="Enter mobile no..." autocomplete="mobile" autofocus/>
                            
                            @error('mobile')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="designation" class="col-md-4 col-form-label text-md-end">Designation</label>

                        <div class="col-md-6">
                            <select name="designation" class="form-control" required>
                                <option value="" selected>Designation</option>
                                @foreach ($designations as $designation)
                                    <option value="{{$designation->display_order}}">{{$designation->title}}</option>
                                @endforeach
                            </select>
                            @error('designation')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="dept" class="col-md-4 col-form-label text-md-end">Department</label>

                        <div class="col-md-6">
                            <select name="dept" class="form-control" required>
                                <option value="" selected>Department</option>
                                @foreach ($departments as $department)
                                    <option value="{{$department->display_order}}">{{$department->title}}</option>
                                @endforeach
                            </select>
                            @error('dept')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="birth_date" class="col-md-4 col-form-label text-md-end">Date of Birth</label>

                        <div class="col-md-6">
                            <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"  value="{{ $teacher->birth_date }}" required autocomplete="birth_date" autofocus/>
                            
                            @error('birth_date')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                        <div class="col-md-6">
                            <select name="gender" class="form-control" required>
                                <option value="" selected>Gender</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Others</option>
                            </select>
                            @error('gender')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="address" class="col-md-4 col-form-label text-md-end">Addresss</label>

                        <div class="col-md-6">
                            <textarea  class="form-control @error('address') is-invalid @enderror" name="address" required autocomplete="address" autofocus>
                                {{ $teacher->address }}
                            </textarea>
                            @error('address')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="image" class="col-md-4 col-form-label text-md-end">Photo</label>

                        <div class="col-md-6">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image" value="{{ $teacher->image }}" required autocomplete="image" autofocus disabled/>
                            
                            @error('image')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password" class="col-md-4 col-form-label text-md-end">New Password</label>

                        <div class="col-md-6">
                            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required placeholder="Enter password..." autocomplete="password" autofocus/>
                            @error('password')
                            <span class="text-danger">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Confirm New Password</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter password..." autofocus/>
                        </div>
                    </div>

                    <div class="row mb-0">
                        <div class="col-md-6 offset-5">
                            <a href="{{ route('teachers.index')}}" class="btn btn-danger btn-sm">Cancel</a>
                            <button type="submit" class="btn btn-primary btn-sm">Update</button></div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection