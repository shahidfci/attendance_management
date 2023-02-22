@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Students</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Students / List</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        
        <!-- Table -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="filter">
                    <a class="btn btn-sm btn-primary" href="{{ route('students.create') }}"><i class="bi bi-person-plus-fill"></i>&nbsp;Add New</a>
                    
                    <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                        <li class="dropdown-header text-start">
                            <h6>Filter</h6>
                        </li>

                        <li><a class="dropdown-item" href="#">Today</a></li>
                        <li><a class="dropdown-item" href="#">This Month</a></li>
                        <li><a class="dropdown-item" href="#">This Year</a></li>
                    </ul>
                </div>

                <div class="card-body">
                    <h5 class="card-title">Recent Students <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Roll</th>
                                <th scope="col">Reg</th>
                                <th scope="col">Email</th>
                                {{-- <th scope="col">Mobile</th>
                                <th scope="col">Gender</th>
                                <th scope="col">DoB</th>
                                <th scope="col">NID</th>
                                <th scope="col">Address</th> --}}
                                <th scope="col">Actions</th>
                                {{-- <th scope="col">Registered</th> --}}
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $key => $student)
                            <tr>
                                <th scope="row"><a href="#">{{ $key+1 }}</a></th>
                                <td>{{ $student->name }}</td>
                                <td>{{ $student->roll_no }}</td>
                                <td>{{ $student->reg_no }}</td>
                                <td>{{ substr($student->email,0,18) }}</td>
                                {{-- <td>{{ $student->mobile }}</td>
                                <td>
                                    @if($student->gender == 1)
                                        <span>Male</span>
                                    @else
                                        @if ($student->gender == 2)
                                            <span>Female</span>
                                        @else
                                            <span>Others</span>
                                        @endif
                                    @endif
                                </td>
                                <td>{{ date('F j, Y', strtotime($student->birth_date)) }}</td>
                                <td>{{ $student->nid }}</td>
                                <td>{{ $student->address }}</td>
                                <td>{{ date('F j, Y', strtotime($student->created_at)) }}</td> --}}
                                <td>
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-sm btn-outline-primary px-1 py-0 border-0" href="{{ route('students.show',$student->id) }}"><i class="bi bi-eye" style="font-size: 18px"></i></a></td>
                                            <td><a class="btn btn-sm btn-outline-success px-1 py-0 border-0" href="{{ route('students.edit',$student->id) }}"><i class="bi bi-pencil-square" style="font-size: 18px"></i></a></td>
                                            <td>
                                                <form action="{{ route('students.destroy',$student->id )}}" method="POST" class="m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger px-1 py-0 border-0"><i class="bi bi-trash" style="font-size: 18px"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <td>
                                    @if($student->is_active == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        @if ($student->is_active == 0)
                                            <span class="badge bg-danger">Disable</span>
                                        @else
                                            <span class="badge bg-warning">Pending</span>
                                        @endif
                                    @endif
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection