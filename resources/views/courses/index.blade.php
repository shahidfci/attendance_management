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
            <a class="btn btn-success" href="{{ route('courses.create') }}"> Create New Course</a>
        </div>

        <!--- Information Table --->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Course Name</th>
                            <th scope="col">Course Code</th>
                            <th scope="col">Course Details</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Registered</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($courses as $key => $course)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $course->name }}</td>
                            <td>{{ $course->code }}</td>
                            <td>{{ $course->details }}</td>
                            <td>
                                @if($course->is_active ==1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary">Inactive</span>
                                @endif
                            </td>

                            
                            </td>
                            <td class="text-center">{{ date('F j, Y', strtotime($course->created_at)) }}</td>
                            <td class="text-center">
                                <form action="{{ route('courses.destroy',$course->id)}}" method="POST" class="m-0">
                                    @csrf
                                    <a class="btn btn-primary btn-sm" href="">View</a>
                                    <a class="btn btn-success btn-sm" href="{{ route('courses.edit',$course->id) }}">Edit</a>
        
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