@extends('layouts.app')
{{-- <style>
    .text-align{
        text-align: right;
    }
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script> --}}
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Create New Class Routine</div>

                    <div class="card-body">
                        <form action="{{ route('class-routine.store') }}" method="POST">
                            @csrf
                            <table class="table">
                                <tr>
                                    <th class="text-align">Program Name</th>
                                    <td>
                                        <select name="program" class="form-control @error('program') is-invalid @enderror" required>
                                            <option value="" selected>Program</option>
                                            <option value="CSE">CSE</option>
                                            <option value="2">EEE</option>
                                            <option value="3">ETE</option>
                                            <option value="4">ENGLISH</option>
                                            <option value="5">HUMANITIES</option>
                                            <option value="6">ARTS</option>
                                            <option value="7">BBA</option>
                                            <option value="8">BBS</option>
                                            <option value="9">MBA</option>
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
                                            <option value="1">First</option>
                                            <option value="2">Second</option>
                                            <option value="3">Third</option>
                                            <option value="4">Fourth</option>
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
                                            <option value="1">Saturday</option>
                                            <option value="2">Sunday</option>
                                            <option value="3">Monday</option>
                                            <option value="4">Tuesday</option>
                                            <option value="5">Wednesday</option>
                                            <option value="6">Thursday</option>
                                            <option value="7">Friday</option>
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
                                            <option value="1">2015</option>
                                            <option value="2">2016</option>
                                            <option value="3">2017</option>
                                            <option value="4">2018</option>
                                            <option value="5">2019</option>
                                            <option value="6">2020</option>
                                            <option value="7">2021</option>
                                            <option value="8">2022</option>
                                            <option value="9">2023</option>
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
                                            <option value="" selected>Year</option>
                                            <option value="1">2015</option>
                                            <option value="2">2016</option>
                                            <option value="3">2017</option>
                                            <option value="4">2018</option>
                                            <option value="5">2019</option>
                                            <option value="6">2020</option>
                                            <option value="7">2021</option>
                                            <option value="8">2022</option>
                                            <option value="9">2023</option>
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
                                <tbody id="increase">
                                    <tr>
                                        <td>
                                            <select name="timeslot"class="form-control @error('timeslot') is-invalid @enderror" required>
                                                <option value="" selected>Time Slot</option>
                                                <option value="1">08:00AM-10:00AM</option>
                                                <option value="2">10:00AM-12:00PM</option>
                                                <option value="3">12:00PM-02:00PM</option>
                                                <option value="4">02:00AM-04:00PM</option>
                                                <option value="5">04:00PM-06:00PM</option>
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
                                                <option value="1">Bangla</option>
                                                <option value="2">English</option>
                                                <option value="3">Mathmetics</option>
                                                <option value="4">Religious</option>
                                                <option value="5">Social Science</option>
                                                <option value="6">History</option>
                                                <option value="7">Computer Science</option>
                                                <option value="8">General Science</option>
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
                                                <option value="1">Ariful Islam</option>
                                                <option value="2">Samsul Hoque</option>
                                                <option value="3">Borhan Uddin</option>
                                                <option value="4">Nazim Uddin</option>
                                                <option value="5">Tajul Islam</option>
                                                <option value="6">Osman Haydar</option>
                                                <option value="7">Faruk Alam</option>
                                                <option value="8">Yeasmin Jahan</option>
                                            </select>

                                            @error('teacher')
                                            <span class="text-danger">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </td>

                                        <td class="text-center">
                                            <button type="button" id="add_row" class="btn btn-primary">New</button>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td colspan="4" class="text-center">
                                            <button type="submit" class="btn btn-primary">Save</button>
                                        </td>
                                    </tr>



                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

{{-- <script>

        $(document).ready(function(){
            $("#add_row").click(function(){
                            
                $('#increase').append(
                                `<tr>
                                    <td>
                                        <select name="timeslot"class="form-control">
                                            <option value="" selected>Time Slot</option>
                                            <option value="">08:00AM-10:00AM</option>
                                            <option value="">10:00AM-12:00PM</option>
                                            <option value="">12:00PM-02:00PM</option>
                                            <option value="">02:00AM-04:00PM</option>
                                            <option value="">04:00PM-06:00PM</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="course"class="form-control">
                                            <option value="" selected>Course</option>
                                            <option value="">Bangla</option>
                                            <option value="">English</option>
                                            <option value="">Mathmetics</option>
                                            <option value="">Religious</option>
                                            <option value="">Social Science</option>
                                            <option value="">History</option>
                                            <option value="">Computer Science</option>
                                            <option value="">General Science</option>
                                        </select>
                                    </td>

                                    <td>
                                        <select name="teacher"class="form-control">
                                            <option value="" selected>Teacher</option>
                                            <option value="">Ariful Islam</option>
                                            <option value="">Samsul Hoque</option>
                                            <option value="">Borhan Uddin</option>
                                            <option value="">Nazim Uddin</option>
                                            <option value="">Tajul Islam</option>
                                            <option value="">Osman Haydar</option>
                                            <option value="">Faruk Alam</option>
                                            <option value="">Yeasmin Jahan</option>
                                        </select>
                                    </td>

                                    <td class="text-center">
                                        <button type="button" id="remove_row" class="btn btn-danger">Remove</button>
                                    </td>
                                </tr>`
                );
            });

            $("#remove_row").click(function(){
                $(this).parent().parent().remove();
            });
        });
</script> --}}