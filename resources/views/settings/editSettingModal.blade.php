<!-- Day Edit Modal -->
<div class="modal fade" id="editDayModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Day Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="settingForm">
                    @csrf
					<input type="hidden" id="up_id"/>
                    <div class="form-group">
						<label class="col-form-label">Day Title:</label>
						<select id="up_day_title" class="form-control">
                            <option value="" selected>Day</option>
                            <option value="Saturday">Saturday</option>
                            <option value="Sunday">Sunday</option>
                            <option value="Monday">Monday</option>
                            <option value="Tuesday">Tuesday</option>
                            <option value="Wednessday">Wednessday</option>
                            <option value="Thursday">Thursday</option>
                            <option value="Friday">Friday</option>
                        </select>
                        <span class="text-danger">
                            <strong id="dayUpErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_display_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <span class="text-danger">
                            <strong id="dayOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateDayBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Day Edit Modal-->



<!-- Timeslot Edit Modal -->
<div class="modal fade" id="editTimeslotModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Timeslot</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="settingForm">
                    @csrf
                    <input type="hidden" name="" id="up_timeslot_id"/>
					<div class="form-group">
						<label class="col-form-label">Timeslot Title:</label>
						<table class="form-control">
                            <tr>
                                <td><label class="form-label">Start</label></td>
                                <td class="px-3"><input type="time" class="form-control" id="up_start_time" /></td>
                                <td><label class="form-label">End</label></td>
                                <td class="px-3"><input type="time" class="form-control" id="up_end_time" /></td>
                            </tr>
                        </table>
                        <span class="text-danger">
                            <strong id="timeslotUpErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_timeslot_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                        <span class="text-danger">
                            <strong id="timeslotUpOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateTimeslotBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Timeslot Edit Modal-->



<!-- Room Edit Modal -->
<div class="modal fade" id="editRoomModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Room</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="roomEditForm">
                    @csrf
                    <input type="hidden" name="" id="up_room_id"/>
					<div class="form-group">
						<label class="col-form-label">Room Number:</label>
						<input id="up_room_number" class="form-control"/>

                        <span class="text-danger">
                            <strong id="roomUpErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<input id="up_room_position" class="form-control">

                        <span class="text-danger">
                            <strong id="roomUpOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateRoomBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Room Edit Modal-->


<!-- Semester Edit Modal -->
<div class="modal fade" id="editSemesterModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Semester Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="semesterEditForm">
                    @csrf
					<input type="hidden" id="up_semester_id"/>
                    <div class="form-group">
						<label class="col-form-label">Semester Title:</label>
						<select id="up_semester_title" class="form-control">
                            <option value="" selected>Semester</option>
                            <option value="1st">1st</option>
                            <option value="2nd">2nd</option>
                            <option value="3rd">3rd</option>
                            <option value="4th">4th</option>
                            <option value="5th">5th</option>
                            <option value="6th">6th</option>
                            <option value="7th">7th</option>
                            <option value="8th">8th</option>
                        </select>
                        <span class="text-danger">
                            <strong id="semesterUpErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_semester_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                        <span class="text-danger">
                            <strong id="semesterOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateSemesterBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Semester Edit Modal-->



<!-- Session Edit Modal -->
<div class="modal fade" id="editSessionModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Session Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="sessionEditForm">
                    @csrf
					<input type="hidden" id="up_session_id"/>
                    <div class="form-group">
						<label class="col-form-label">Session Title:</label>
						<table>
                            <tr>
                                <td><label for="datepicker" class="form-label">Start</label></td>
                                <td class="p-2"><input type="text" class="form-control" name="datepicker" id="up_datepicker1" /></td>
                                <td><label for="datepicker" class="form-label">End</label></td>
                                <td class="p-2"><input type="text" class="form-control" name="datepicker" id="up_datepicker2" /></td>
                            </tr>
                        </table>
                        <span class="text-danger">
                            <strong id="sessionUpErr"></strong>
                        </span>
                        <script>
                            $("#up_datepicker1").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                            $("#up_datepicker2").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_session_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <span class="text-danger">
                            <strong id="sessionOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateSessionBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Session Edit Modal-->



<!-- Year Edit Modal -->
<div class="modal fade" id="editYearModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Year Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="yearEditForm">
                    @csrf
					<input type="hidden" id="up_year_id"/>
                    <div class="form-group">
						<label class="col-form-label">Year Title:</label>
						<input type="text" class="form-control" name="datepicker" id="up_datepicker" />

                        <span class="text-danger">
                            <strong id="yearUpErr"></strong>
                        </span>
                        <script>
                            $("#up_datepicker").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_year_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                        </select>
                        <span class="text-danger">
                            <strong id="yearOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateYearBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Year Edit Modal-->


<!-- Designation Edit Modal -->
<div class="modal fade" id="editDesignationModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Designation Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="designationEditForm">
                    @csrf
					<input type="hidden" id="up_designation_id"/>
                    <div class="form-group">
						<label class="col-form-label">Designation Title:</label>
						<input type="text" class="form-control" id="up_designation_title" placeholder="Enter designation..."/>
                        
                        <span class="text-danger">
                            <strong id="designationUpErr"></strong>
                        </span>
                        <script>
                            $("#up_datepicker").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_designation_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="4">8</option>
                            <option value="5">9</option>
                            <option value="6">10</option>
                            <option value="7">11</option>
                            <option value="4">12</option>
                            <option value="5">13</option>
                            <option value="6">14</option>
                            <option value="7">15</option>
                        </select>
                        <span class="text-danger">
                            <strong id="designationOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateDesignationBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Designation Edit Modal-->


<!-- Department Edit Modal -->
<div class="modal fade" id="editDepartmentModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Department Update</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post" id="departmentEditForm">
                    @csrf
					<input type="hidden" id="up_department_id"/>
                    <div class="form-group">
						<label class="col-form-label">Department Title:</label>
						<input type="text" class="form-control" id="up_department_title" placeholder="Enter department..."/>
                        
                        <span class="text-danger">
                            <strong id="departmentUpErr"></strong>
                        </span>
                        <script>
                            $("#up_datepicker").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="up_department_position" class="form-control">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select>
                        <span class="text-danger">
                            <strong id="departmentOrderUpErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="updateDepartmentBtn">Update</button>
            </div>
        </div>
    </div>
</div>
<!-- End Department Edit Modal-->