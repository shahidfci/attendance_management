@extends('layouts.app')

@section('content')
    <style>
        .table {
        background: #ffffff;
        border-radius: 0.2rem;
        width: 100%;
        padding-bottom: 1rem;
        color: #212529;
        margin-bottom: 0;
        }

        .table th:first-child,
        .table td:first-child {
        position: sticky;
        left: 0;
        background-color: #f5f2f2;
        color: #373737;
        }

        .table td {
        white-space: nowrap;
        }

        .table thead {
            background-color: #f5f2f2;
        }
    </style>

    <div class="container">
        
        <!--- Create Button --->
        <div class="col-12 mb-2">
            <a class="btn btn-success" href="{{ route('students.create') }}"> Create New Students</a>
        </div>

        <!--- Information Table --->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Name</th>
                            <th scope="col">Roll No</th>
                            <th scope="col">Reg No</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Mobile No</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Date of Birth</th>
                            <th scope="col">NID No</th>
                            <th scope="col">Address</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Registered</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $key => $student)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->roll_no }}</td>
                            <td>{{ $student->reg_no }}</td>
                            <td>{{ $student->email }}</td>
                            <td>{{ $student->mobile }}</td>
                            <td>
                                @if ($student->gender == 1)
                                    <span>Male</span>
                                @else
                                    <span>Female</span>
                                @endif
                            </td>
                            <td>{{ $student->birth_date }}</td>
                            <td>{{ $student->nid }}</td>
                            <td>{{ $student->address }}</td>
                            <td>
                                @if($student->is_active ==1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary">Inactive</span>
                                @endif
                            </td>

                            
                            </td>
                            <td class="text-center">{{ date('F j, Y', strtotime($student->created_at)) }}</td>
                            <td class="text-center">
                                <form action="{{ route('students.destroy',$student->id )}}" method="POST" class="m-0">
                                    @csrf
                                    <a class="btn btn-primary btn-sm" href="{{ route('students.show',$student->id) }}">View</a>
                                    <a class="btn btn-success btn-sm" href="{{ route('students.edit',$student->id) }}">Edit</a>
        
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!--- Pagination --->
    <div class="mt-4">
                
    </div>

@endsection