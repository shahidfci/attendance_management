@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Class Routines</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Class Routines / Create</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="card">
            <div class="card-header">Create New Class Routine</div>

            <div class="card-body pt-3">
                <form action="{{ route('class-routines.store') }}" method="POST">
                    @csrf
                    <table class="table">
                        <tr>
                            <th class="text-align">Program Name</th>
                            <td>
                                <select name="program" class="form-control @error('program') is-invalid @enderror" required>
                                    <option value="" selected>Program</option>
                                    @foreach ($depts as $dept)
                                        <option value="{{$dept->display_order}}">{{$dept->title}}</option>
                                    @endforeach
                                </select>

                                @error('program')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>

                            <th class="text-align">Semester</th>
                            <td>
                                <select name="semester"class="form-control @error('semester') is-invalid @enderror" required>
                                    <option value="" selected>Semester</option>
                                    @foreach ($semesters as $semester)
                                        <option value="{{$semester->display_order}}">{{$semester->title}}</option>
                                    @endforeach
                                </select>
                                
                                @error('semester')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>

                            <th>Day</th>
                            <td>
                                <select name="day"class="form-control @error('day') is-invalid @enderror" required>
                                    <option value="" selected>Day</option>
                                    @foreach ($days as $day)
                                        <option value="{{$day->display_order}}">{{$day->title}}</option>
                                    @endforeach
                                </select>

                                @error('day')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>

                            <th class="text-align">Year</th>
                            <td>
                                <select name="year"class="form-control @error('year') is-invalid @enderror" required>
                                    <option value="" selected>Year</option>
                                    @foreach ($years as $year)
                                        <option value="{{$year->display_order}}">{{$year->title}}</option>
                                    @endforeach
                                </select>

                                @error('year')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>

                            <th class="text-align">Session</th>
                            <td>
                                <select name="session"class="form-control @error('session') is-invalid @enderror" required>
                                    <option value="" selected>Session</option>
                                    @foreach ($sessions as $session)
                                        <option value="{{$session->display_order}}">{{$session->title}}</option>
                                    @endforeach
                                </select>

                                @error('session')
                                <span class="text-danger">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </td>

                            
                        </tr>
                    </table>

                    <table class="table">
                        <thead>
                            <tr>
                                <th>
                                    <label for="timeslot" class="">Time Slot</label>
                                </th>
                                <th>
                                    <label for="course" class="">Course Name</label>
                                </th>
                                <th>
                                    <label for="teacher" class="">Teacher</label>
                                </th>
                                <th class="text-center">
                                    <label for="action" class="">Actions</label>
                                </th>
                            </tr>
                        </thead>
                        <tbody id="rowBody">
                            <tr>
                                <td>
                                    <select name="timeslot"class="form-control @error('timeslot') is-invalid @enderror" required>
                                        <option value="" selected>Time Slot</option>
                                        @foreach ($timeslots as $timeslot)
                                            <option value="{{$timeslot->display_order}}">{{$timeslot->title}}</option>
                                        @endforeach
                                    </select>

                                    @error('timeslot')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>

                                <td>
                                    <select name="course"class="form-control @error('course') is-invalid @enderror" required>
                                        <option value="" selected>Course</option>
                                        @foreach ($courses as $course)
                                            <option value="{{ $course->id}}">{{ $course->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('course')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>

                                <td>
                                    <select name="teacher"class="form-control @error('teacher') is-invalid @enderror" required>
                                        <option value="" selected>Teacher</option>
                                        @foreach ($teachers as $teacher)
                                            <option value="{{ $teacher->id}}">{{ $teacher->name}}</option>
                                        @endforeach
                                    </select>

                                    @error('teacher')
                                    <span class="text-danger">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </td>

                                <td class="text-center">
                                    <button type="button" id="newRowBtn" class="btn btn-primary btn-sm">+</button>
                                </td>
                            </tr>
                        </tbody>
                        <table>
                            <tr>
                                <td><button class="btn btn-success btn-sm">Save</button></td>
                            </tr>
                        </table>
                    </table>
                </form>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function(){
        $('#newRowBtn').click(function(){

        var tr  =   '<tr>'+
                        '<td>'+
                            '<select name="timeslot[]" class="form-control @error("timeslot") is-invalid @enderror" required>'+
                                '<option value="" selected>Time Slot</option>'+
                                '@foreach ($timeslots as $timeslot)'+
                                    '<option value="{{$timeslot->display_order}}">{{$timeslot->title}}</option>'+
                                '@endforeach'+
                            '</select>'+

                            '@error("timeslot")'+
                            '<span class="text-danger">'+
                                '<strong>{{ $message }}</strong>'+
                            '</span>'+
                            '@enderror'+
                        '</td>'+

                        '<td>'+
                            '<select name="course[]"class="form-control @error("course") is-invalid @enderror" required>'+
                                '<option value="" selected>Course</option>'+
                                '@foreach ($courses as $course)'+
                                    '<option value="{{ $course->id}}">{{ $course->name}}</option>'+
                                '@endforeach'+
                            '</select>'+

                            '@error("course")'+
                            '<span class="text-danger">'+
                                '<strong>{{ $message }}</strong>'+
                            '</span>'+
                            '@enderror'+
                        '</td>'+

                        '<td>'+
                            '<select name="teacher" class="form-control @error("teacher") is-invalid @enderror" required>'+
                                '<option value="" selected>Teacher</option>'+
                                '@foreach ($teachers as $teacher)'+
                                    '<option value="{{ $teacher->id}}">{{ $teacher->name}}</option>'+
                                '@endforeach'+
                            '</select>'+

                            '@error("teacher")'+
                            '<span class="text-danger">'+
                                '<strong>{{ $message }}</strong>'+
                            '</span>'+
                           ' @enderror'+
                        '</td>'+

                        '<td class="text-center">'+
                            '<a href="javascript:void(0)" class="btn btn-sm btn-danger" id="removeRowBtn">-</a>'+
                        '</td>'+
                    '</tr>';

            $('#rowBody').append(tr);
        });
    });

    $(document).ready(function(){
        $('#removeRowBtn').click(function(){
            $(this).parent().parent().remove();
        });
    });
</script>

@endsection