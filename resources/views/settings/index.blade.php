@extends('layouts.app')

@section('content')

    <div class="pagetitle">
        <h1>Settings</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
                <li class="breadcrumb-item active">Settings / All</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        
        <!-- Table -->
        <div class="col-12">
            <div class="card recent-sales overflow-auto">

                <div class="card-body">
                    <div class="card-title">
                        <!--- Settings Tab Links --->
                        <ul class="nav nav-tabs" id="settingTab" role="tablist">
                            <li class="nav-item">
                            <a class="nav-link active" id="day-tab" data-toggle="tab" href="#day" role="tab" aria-controls="day" aria-selected="true">Days</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="timeslot-tab" data-toggle="tab" href="#timeslot" role="tab" aria-controls="timeslot" aria-selected="false">Timeslots</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="room-tab" data-toggle="tab" href="#room" role="tab" aria-controls="room" aria-selected="false">Rooms</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="semester-tab" data-toggle="tab" href="#semester" role="tab" aria-controls="semester" aria-selected="false">Semesters</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" id="session-tab" data-toggle="tab" href="#session" role="tab" aria-controls="session" aria-selected="false">Sessions</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="year-tab" data-toggle="tab" href="#year" role="tab" aria-controls="year" aria-selected="false">Years</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="designation-tab" data-toggle="tab" href="#designation" role="tab" aria-controls="designation" aria-selected="false">Designations</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="department-tab" data-toggle="tab" href="#department" role="tab" aria-controls="department" aria-selected="false">Departments</a>
                            </li>
                        </ul>
                    </div>

                    <!--- Settings Tab Contents --->
                    <div class="tab-content mt-2" id="myTabContent">
                        <!--- Day Tab Content --->
                        <div class="tab-pane fade show active" id="day" role="tabpanel" aria-labelledby="day-tab">
                            
                            <div class="pagetitle">
                                <button id="dayAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Day
                                </button>
                            </div>

                            <table class="table table-borderless datatable" id="dayTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Day Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($days as $day)
                                    <tr>
                                        <td>{{ $day->display_order }}</td>
                                        <td>{{ $day->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="dayEdit({{ $day->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="dayDelete({{ $day->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($day->is_active == 1)
                                                <button onclick="dayDisable({{ $day->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($day->is_active == 0)
                                                    <button onclick="dayEnable({{ $day->id }})" class="badge bg-danger border-0">Disable</button>
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

                        <!--- Timeslot Tab Content --->
                        <div class="tab-pane fade" id="timeslot" role="tabpanel" aria-labelledby="timeslot-tab">
                            
                            <div class="pagetitle">
                                <button id="timeslotAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Timeslot
                                </button>
                            </div>

                            <table id="timeslotTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Timeslot Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($timeslots as $timeslot)
                                    <tr>
                                        <td>{{ $timeslot->display_order }}</td>
                                        <td>{{ $timeslot->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="timeslotEdit({{ $timeslot->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="timeslotDelete({{ $timeslot->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($timeslot->is_active == 1)
                                                <button onclick="timeslotDisable({{ $timeslot->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($timeslot->is_active == 0)
                                                    <button onclick="timeslotEnable({{ $timeslot->id }})" class="badge bg-danger border-0">Disable</button>
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
                        
                        <!--- Room Tab Content --->
                        <div class="tab-pane fade" id="room" role="tabpanel" aria-labelledby="room-tab">
                            
                            <div class="pagetitle">
                                <button id="roomAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Room
                                </button>
                            </div>
                            
                            <table id="roomTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Room Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($rooms as $room)
                                    <tr>
                                        <td>{{ $room->display_order }}</td>
                                        <td>{{ $room->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="roomEdit({{ $room->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="roomDelete({{ $room->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($room->is_active == 1)
                                                <button onclick="roomDisable({{ $room->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($room->is_active == 0)
                                                    <button onclick="roomEnable({{ $room->id }})" class="badge bg-danger border-0">Disable</button>
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

                        <!--- Semester Tab Content --->
                        <div class="tab-pane fade" id="semester" role="tabpanel" aria-labelledby="semester-tab">
                            
                            <div class="pagetitle">
                                <button id="semesterAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Semester
                                </button>
                            </div>
                            
                            <table id="semesterTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Semester Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($semesters as $semester)
                                    <tr>
                                        <td>{{ $semester->display_order }}</td>
                                        <td>{{ $semester->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="semesterEdit({{ $semester->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="semesterDelete({{ $semester->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($semester->is_active == 1)
                                                <button onclick="semesterDisable({{ $semester->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($semester->is_active == 0)
                                                    <button onclick="semesterEnable({{ $semester->id }})" class="badge bg-danger border-0">Disable</button>
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

                        <!--- Session Tab Content --->
                        <div class="tab-pane fade" id="session" role="tabpanel" aria-labelledby="session-tab">
                            
                            <div class="pagetitle">
                                <button id="sessionAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Session
                                </button>
                            </div>
                            
                            <table id="sessionTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Settion Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sessions as $session)
                                    <tr>
                                        <td>{{ $session->display_order }}</td>
                                        <td>{{ $session->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="sessionEdit({{ $session->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="sessionDelete({{ $session->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($session->is_active == 1)
                                                <button onclick="sessionDisable({{ $session->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($session->is_active == 0)
                                                    <button onclick="sessionEnable({{ $session->id }})" class="badge bg-danger border-0">Disable</button>
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

                        <!--- Year Tab Content --->
                        <div class="tab-pane fade" id="year" role="tabpanel" aria-labelledby="year-tab">
                            
                            <div class="pagetitle">
                                <button id="yearAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Year
                                </button>
                            </div>
                            
                            <table id="yearTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Year Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($years as $year)
                                    <tr>
                                        <td>{{ $year->display_order }}</td>
                                        <td>{{ $year->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="yearEdit({{ $year->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="yearDelete({{ $year->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($year->is_active == 1)
                                                <button onclick="yearDisable({{ $year->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($year->is_active == 0)
                                                    <button onclick="yearEnable({{ $year->id }})" class="badge bg-danger border-0">Disable</button>
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
                        
                        <!--- Designation Tab Content --->
                        <div class="tab-pane fade" id="designation" role="tabpanel" aria-labelledby="designation-tab">
                            
                            <div class="pagetitle">
                                <button id="designationAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Designation
                                </button>
                            </div>
                            
                            <table id="designationTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Designation Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($designations as $designation)
                                    <tr>
                                        <td>{{ $designation->display_order }}</td>
                                        <td>{{ $designation->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="designationEdit({{ $designation->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="designationDelete({{ $designation->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($designation->is_active == 1)
                                                <button onclick="designationDisable({{ $designation->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($designation->is_active == 0)
                                                    <button onclick="designationEnable({{ $designation->id }})" class="badge bg-danger border-0">Disable</button>
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
                        
                        <!--- Department Tab Content --->
                        <div class="tab-pane fade" id="department" role="tabpanel" aria-labelledby="department-tab">
                            
                            <div class="pagetitle">
                                <button id="departmentAddBtn" class="btn btn-sm btn-primary">
                                    <i class="bi bi-calendar2-day"></i>&nbsp; Add Department
                                </button>
                            </div>
                            
                            <table id="departmentTable" class="table table-borderless datatable">
                                <thead>
                                    <tr>
                                        <th scope="col">Display Position</th>
                                        <th scope="col">Department Title</th>
                                        <th scope="col">Actions</th>
                                        <th scope="col">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($depts as $dept)
                                    <tr>
                                        <td>{{ $dept->display_order }}</td>
                                        <td>{{ $dept->title }}</td>
                                        <td>
                                            <table>
                                                <tr>
                                                    <td>
                                                        <button onclick="departmentEdit({{ $dept->id }})" type="button" class="btn btn-outline-success btn-sm px-1 py-0 border-0">
                                                            <i class="bi bi-pencil-square" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                    <td>
                                                        <button  onclick="departmentDelete({{ $dept->id }})" type="button" class="btn btn-sm btn-outline-danger px-1 py-0 border-0">
                                                            <i class="bi bi-trash" style="font-size: 18px"></i>
                                                        </button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </td>
                                        <td>
                                            @if($dept->is_active == 1)
                                                <button onclick="departmentDisable({{ $dept->id }})" class="badge bg-success border-0">Active</button>
                                            @else
                                                @if ($dept->is_active == 0)
                                                    <button onclick="departmentEnable({{ $dept->id }})" class="badge bg-danger border-0">Disable</button>
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

                    <!--- Tab Link Script --->
                    <script>
                        $('#settingTab a').on('click', function (e) {
                            e.preventDefault()
                            $(this).tab('show')
                        })
                    </script>
                </div>
            </div>
        </div>
    </div>

    @include('settings.settings_js')
    @include('settings.addSettingModal')
    @include('settings.editSettingModal')
    
@endsection