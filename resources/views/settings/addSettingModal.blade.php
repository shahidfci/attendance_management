<!-- Day Add Modal -->
<div class="modal fade" id="dayAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Day Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="settingForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Day Title:</label>
						<select id="day_title" name="day_title" class="form-control">
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
                            <strong id="dayAddErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="display_position" name="display_position" class="form-control">
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
                            <strong id="dayAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveDayBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Day Add Modal-->



<!--  Add Timeslot Modal -->
<div class="modal fade" id="timeslotAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Timeslot Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="timeslotAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Timeslot Title:</label>
						<table class="form-control">
                            <tr>
                                <td><label class="form-label">Start</label></td>
                                <td class="px-3"><input type="time" class="form-control" id="start_time" /></td>
                                <td><label class="form-label">End</label></td>
                                <td class="px-3"><input type="time" class="form-control" id="end_time" /></td>
                            </tr>
                        </table>
                          
                        <span class="text-danger">
                            <strong id="timeslotAddErr"></strong>
                        </span>
                    </div>
                    
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="timeslot_position" class="form-control">
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
                            <strong id="timeslotAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveTimeslotBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Add Timeslot Modal-->



<!--  Add Room Modal -->
<div class="modal fade" id="roomAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Room Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="roomAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Room Number:</label>
						<input type="text" id="room_number" class="form-control"/>
                        
                        <span class="text-danger">
                            <strong id="roomAddErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<input type="text" id="room_position" class="form-control"/>
                        
                        <span class="text-danger">
                            <strong id="roomAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveRoomBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Add Room Modal-->


<!-- Semester Add Modal -->
<div class="modal fade" id="semesterAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Semester Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="semesterAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Semester Title:</label>
						<select id="semester_title" class="form-control">
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
                            <strong id="semesterAddErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="semester_position" class="form-control">
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
                            <strong id="semesterAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveSemesterBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Semester Add Modal-->


<!-- Session Add Modal -->
<div class="modal fade" id="sessionAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Session Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="sessionAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Session Title:</label>
                        <table>
                            <tr>
                                <td><label for="datepicker" class="form-label">Start</label></td>
                                <td class="p-2"><input type="text" class="form-control" name="datepicker" id="datepicker1" /></td>
                                <td><label for="datepicker" class="form-label">End</label></td>
                                <td class="p-2"><input type="text" class="form-control" name="datepicker" id="datepicker2" /></td>
                            </tr>
                        </table>
                        <span class="text-danger">
                            <strong id="sessionAddErr"></strong>
                        </span>
                        <script>
                            $("#datepicker1").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                            $("#datepicker2").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="session_position" class="form-control">
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
                            <strong id="sessionAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveSessionBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Session Add Modal-->



<!-- Year Add Modal -->
<div class="modal fade" id="yearAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Year Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="yearAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Year Title:</label>
                        <input type="text" class="form-control" name="datepicker" id="datepicker" />
                        
                        <span class="text-danger">
                            <strong id="yearAddErr"></strong>
                        </span>
                        <script>
                            $("#datepicker").datepicker({
                                format: "yyyy",
                                viewMode: "years", 
                                minViewMode: "years",
                                autoclose:true //to close picker once year is selected
                            });
                        </script>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="year_position" class="form-control">
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
                            <strong id="yearAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveYearBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Year Add Modal-->


<!-- Designation Add Modal -->
<div class="modal fade" id="designationAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Designation Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="designationAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Designation Title:</label>
                        <input type="text" class="form-control" id="designation_title" placeholder="Enter designation..."/>
                        
                        <span class="text-danger">
                            <strong id="designationAddErr"></strong>
                        </span>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
                        <select id="designation_position" class="form-control">
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
                            <strong id="designationAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveDesignationBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Designation Add Modal-->



<!-- Department Add Modal -->
<div class="modal fade" id="departmentAddModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Department Setup</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <!---Input form --->
				<form action="" method="post" id="departmentAddForm">
                    @csrf
					<div class="form-group">
						<label class="col-form-label">Department Title:</label>
                        <input type="text" class="form-control" id="department_title" placeholder="Enter department..."/>
                        
                        <span class="text-danger">
                            <strong id="departmentAddErr"></strong>
                        </span>
                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
                        <select id="department_position" class="form-control">
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
                            <strong id="departmentAddOrderErr"></strong>
                        </span>
                    </div>
				</form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary btn-sm" id="saveDepartmentBtn">Save</button>
            </div>
        </div>
    </div>
</div>
<!-- End Department Add Modal-->