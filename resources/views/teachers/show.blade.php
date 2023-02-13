@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">View Information</div>

                    <div class="card-body">
                        <form action="" method="">
                            @csrf
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->name }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="employe_id" class="col-md-4 col-form-label text-md-end">Employe Id</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->employe_id }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="designation" class="col-md-4 col-form-label text-md-end">Designation</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->designation }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="dept" class="col-md-4 col-form-label text-md-end">Department</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->dept }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->email }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mobile" class="col-md-4 col-form-label text-md-end">Mobile No</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->mobile }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                                <div class="col-md-6">
                                    @if ($teacher->gender == 1)
                                        <span class="form-control">Male</span>
                                    @else
                                        <span class="form-control">Female</span>
                                    @endif
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="birth_date" class="col-md-4 col-form-label text-md-end">Date of Birth</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->birth_date }}
                                    </span>
                                </div>
                            </div>

                            {{-- <div class="row mb-3">
                                <label for="nid" class="col-md-4 col-form-label text-md-end">Photo</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->photo }}
                                    </span>
                                </div>
                            </div> --}}

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">Addresss</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $teacher->address }}
                                    </span>
                               </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-5">
                                    <a href="{{ route('teachers.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection