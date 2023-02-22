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
						<select id="timeslot_title" class="form-control @error('timeslot_title') is-invalid @enderror">
                            <option value="" selected>Timeslot</option>
                            <option value="09:00AM-09:30AM">09:00AM-09:30AM</option>
                            <option value="09:30AM-10:00AM">09:30AM-10:00AM</option>
                            <option value="10:00AM-10:30AM">10:00AM-10:30AM</option>
                            <option value="10:30AM-11:00AM">10:30AM-11:00AM</option>
                            <option value="11:00AM-11:30AM">11:00AM-11:30AM</option>
                            <option value="11:30AM-12:00PM">11:30AM-12:00PM</option>
                            <option value="04:00PM-05:00PM">04:00PM-05:00PM</option>
                        </select>
                        <span class="text-danger">
                            <strong id="timeslotAddErr"></strong>
                        </span>

                    </div>
					<div class="form-group">
						<label class="col-form-label">Display Position:</label>
						<select id="timeslot_position" class="form-control @error('timeslot_position') is-invalid @enderror">
                            <option value="" selected>Display Position</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="6">7</option>
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