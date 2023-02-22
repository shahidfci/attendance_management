@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Class Routines</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Class Routines / List</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        
        <!-- Table -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="filter">
                    <a class="btn btn-sm btn-primary" href="{{ route('class-routines.create') }}"><i class="bi bi-calendar2-day"></i>&nbsp;Add New</a>
                    
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
                    <h5 class="card-title">Recent Class Routines <span>| Today</span></h5>

                    <table class="table table-borderless datatable">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Day</th>
                                <th scope="col">Class_Time</th>
                                <th scope="col">Course_Name</th>
                                <th scope="col">Course_Teacher</th>
                                {{-- <th scope="col">Program</th>
                                <th scope="col">Semester</th>
                                <th scope="col">Year</th>
                                <th scope="col">Session</th>
                                <th scope="col">Registered</th> --}}
                                <th scope="col">Status</th>
                                <th scope="col">Actions</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($class_routines as $key => $class_routine)
                            <tr>
                                <th scope="row"><a href="#">{{ $key+1 }}</a></th>
                                <td>{{ $class_routine->settingDay->title }}</td>
                                <td>{{ $class_routine->settingTimeslot->title }}</td>
                                <td>{{ $class_routine->courseTbl->name }}</td>
                                <td>{{ $class_routine->teacherTbl->name }}</td>
                                {{-- <td>{{ $class_routine->settingDept->title }}</td>
                                <td>{{ $class_routine->settingSem->title }}</td>
                                <td>{{ $class_routine->settingYear->title }}</td>
                                <td>{{ $class_routine->settingSession->title }}</td>
                                <td>{{ date('F j, Y', strtotime($class_routine->created_at)) }}</td> --}}
                                <td>
                                    @if($class_routine->is_active == 1)
                                        <span class="badge bg-success">Active</span>
                                    @else
                                        @if ($class_routine->is_active == 0)
                                            <span class="badge bg-danger">Disable</span>
                                        @else
                                            <span class="badge bg-warning">Pending</span>
                                        @endif
                                    @endif
                                </td>
                                <td>
                                    <table>
                                        <tr>
                                            <td><a class="btn btn-sm btn-outline-primary px-1 py-0 border-0" href="#"><i class="bi bi-eye" style="font-size: 18px"></i></a></td>
                                            <td><a class="btn btn-sm btn-outline-success px-1 py-0 border-0" href="#"><i class="bi bi-pencil-square" style="font-size: 18px"></i></a></td>
                                            <td>
                                                <form action="#" method="POST" class="m-0">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-sm btn-outline-danger px-1 py-0 border-0"><i class="bi bi-trash" style="font-size: 18px"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    </table>
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