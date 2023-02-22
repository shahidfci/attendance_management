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
						<select id="up_timeslot_title" class="form-control">
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