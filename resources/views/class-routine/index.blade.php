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
            <a class="btn btn-success" href="{{ route('class-routine.create') }}"> Create New Class Routine</a>
        </div>

        <!--- Information Table --->
        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-hover border">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Program</th>
                            <th scope="col">Day</th>
                            <th scope="col">Course</th>
                            <th scope="col">Semester</th>
                            <th scope="col">Year</th>
                            <th scope="col">Teacher</th>
                            <th scope="col">Class Time</th>
                            <th scope="col">Session</th>
                            <th scope="col">Status</th>
                            <th scope="col" class="text-center">Registered</th>
                            <th scope="col" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($class_routines as $key => $class_routine)
                        <tr>
                            <th>{{ $key+1 }}</th>
                            <td>{{ $class_routine->program_id }}</td>
                            <td>{{ $class_routine->day_id }}</td>
                            <td>{{ $class_routine->course_id }}</td>
                            <td>{{ $class_routine->semester_id }}</td>
                            <td>{{ $class_routine->year_id }}</td>
                            <td>{{ $class_routine->teacher_id }}</td>
                            <td>{{ $class_routine->time_slot_id }}</td>
                            <td>{{ $class_routine->aca_session }}</td>
                            <td>
                                @if($class_routine->is_active ==1)
                                    <span class="badge rounded-pill bg-success">Active</span>
                                @else
                                    <span class="badge rounded-pill bg-secondary">Inactive</span>
                                @endif
                            </td>

                            
                            </td>
                            <td class="text-center">{{ date('F j, Y', strtotime($class_routine->created_at)) }}</td>
                            <td class="text-center">
                                <form action="" method="POST" class="m-0">
                                    @csrf
                                    <a class="btn btn-primary btn-sm" href="">View</a>
                                    <a class="btn btn-success btn-sm" href="">Edit</a>
        
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