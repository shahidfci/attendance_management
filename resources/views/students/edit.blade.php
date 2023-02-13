@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Student Information</div>

                    <div class="card-body">
                        <form action="{{ route('students.update',$student->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $student->name }}" required placeholder="Enter student name..." autocomplete="name" autofocus/>
                                    
                                    @error('name')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="roll_no" class="col-md-4 col-form-label text-md-end">Roll No</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('roll_no') is-invalid @enderror" name="roll_no" value="{{ $student->roll_no }}" required placeholder="Enter stedent roll no..." autocomplete="roll_no" autofocus/>
                                    
                                    @error('roll_no')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="reg_no" class="col-md-4 col-form-label text-md-end">Registration No</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('reg_no') is-invalid @enderror" name="reg_no" value="{{ $student->reg_no }}" required placeholder="Enter student reg. no.." autocomplete="reg_no" autofocus/>
                                    
                                    @error('reg_no')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"  value="{{ $student->email }}" required placeholder="Enter student email..." autocomplete="email" autofocus/>
                                    
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
                                    <input type="mobile" class="form-control @error('mobile') is-invalid @enderror" name="mobile"  value="{{ $student->mobile }}" required placeholder="Enter mobile no..." autocomplete="mobile" autofocus/>
                                    
                                    @error('mobile')
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
                                        <option value="3">Other</option>
                                    </select>
                                    @error('gender')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-end">Date of Birth</label>

                                <div class="col-md-6">
                                    <input type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"  value="{{ $student->birth_date }}" autocomplete="birth_date" autofocus required/>
                                    
                                    @error('birth_date')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nid" class="col-md-4 col-form-label text-md-end">NID No</label>

                                <div class="col-md-6">
                                    <input type="text" class="form-control @error('nid') is-invalid @enderror" name="nid"  value="{{ $student->nid }}" required placeholder="Enter student nid no..." autocomplete="nid" autofocus/>
                                    
                                    @error('nid')
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
                                        {{ $student->address }}
                                    </textarea>
                                    @error('address')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">New Password</label>

                                <div class="col-md-6">
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" value="{{ old('password') }}" required placeholder="Enter new password..." autocomplete="password" autofocus/>
                                    @error('password')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm New Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Re-enter new password..." autofocus/>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-5">
                                    <a href="{{ route('students.index')}}" class="btn btn-danger">Cancel</a>
                                    <button type="submit" class="btn btn-primary">Update</button></div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection