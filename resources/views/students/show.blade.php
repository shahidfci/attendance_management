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
                                        {{ $student->name }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="roll_no" class="col-md-4 col-form-label text-md-end">Roll No</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->roll_no }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="reg_no" class="col-md-4 col-form-label text-md-end">Registration No</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->reg_no }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email Address</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->email }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="mobile" class="col-md-4 col-form-label text-md-end">Mobile No</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->mobile }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="gender" class="col-md-4 col-form-label text-md-end">Gender</label>

                                <div class="col-md-6">
                                    @if ($student->gender == 1)
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
                                        {{ $student->birth_date }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="nid" class="col-md-4 col-form-label text-md-end">NID No</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->nid }}
                                    </span>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-md-4 col-form-label text-md-end">Addresss</label>

                                <div class="col-md-6">
                                    <span  class="form-control">
                                        {{ $student->address }}
                                    </span>
                               </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-5">
                                    <a href="{{ route('students.index')}}" class="btn btn-danger">Cancel</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection