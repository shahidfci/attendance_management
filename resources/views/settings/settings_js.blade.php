<script>

/******BEFORE AJAX-JQUERY CDN DEFINE IN HEAD TAG*******/

/*--- Ajax Setup ---*/
$( document ).ready(function() {
    $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
    });
});


/***************************************************************
************************ DAY SETTING CRUD **********************
****************************************************************/

/*--- Add Day Setup ---*/
$(document).ready(function(){

    $('#dayAddBtn').click(function(){
        $('#dayAddModal').modal('show');
    });


    $('#saveDayBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'day_title'         : $('#day_title').val(),
            'display_position'  : $('#display_position').val(),
        };

        $.ajax({
            url: '/settings/day/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#dayAddModal').modal('hide');
                    $('#settingForm')[0].reset();
                    $('#dayTable').load(location.href+' #dayTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'day_title'){
                        $('#dayAddErr').text(value);
                        $('#day_title').addClass('is-invalid');
                    }
                    if(key == 'display_position'){
                        $('#dayAddOrderErr').text(value);
                        $('#display_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Day Id For Edit Modal ---*/
function dayEdit(id){
    $.get('/settings/day/'+id+'/edit', function(res){
        $('#editDayModal').modal('show');
        $('#up_id').val(res.id);
        $('#up_day_title').val(res.title);
        $('#up_display_position').val(res.display_order);
    });
}


/*--- Day Update ---*/
$(document).ready(function(){
    $('#updateDayBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_id'             : $('#up_id').val(),    // This id is must be required fo update data
            'day_title'         : $('#up_day_title').val(),
            'display_position'  : $('#up_display_position').val(),
        };
        $.ajax({
            url: '/settings/day/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editDayModal').modal('hide');
                $('#dayTable').load(location.href+' #dayTable');
                $('#settingForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){ 
                    if(key == 'day_title'){
                        $('#dayUpErr').text(value);
                        $('#up_day_title').addClass('is-invalid');
                    }
                    if(key == 'display_position'){
                        $('#dayOrderUpErr').text(value);
                        $('#up_display_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Day by ID ---*/
function dayDelete(id){
    $.post('/settings/day/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#dayTable').load(location.href+' #dayTable');
        }
    });   
}

/*--- Day Enable by ID ---*/
function dayEnable(id){
    $.post('/settings/day/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#dayTable').load(location.href+' #dayTable');
        }
    });   
}

/*--- Day Disable by ID ---*/
function dayDisable(id){
    $.post('/settings/day/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#dayTable').load(location.href+' #dayTable');
        }
    });   
}


/***************************************************************
********************* TIMESLOT SETTING CRUD ********************
****************************************************************/

/*--- Add Timeslot Setup ---*/
$(document).ready(function(){

    $('#timeslotAddBtn').click(function(){
        $('#timeslotAddModal').modal('show');
    });


    $('#saveTimeslotBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'start_time'        : $('#start_time').val(),   /*it is only for required validation*/
            'end_time'          : $('#end_time').val(), /*it is only for required validation*/
            'timeslot_title'    : $('#start_time').val()+'-'+$('#end_time').val(),
            'timeslot_position' : $('#timeslot_position').val(),
        };

        $.ajax({
            url: '/settings/timeslot/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#timeslotAddModal').modal('hide');
                    $('#timeslotAddForm')[0].reset();
                    $('#timeslotTable').load(location.href+' #timeslotTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'start_time'){
                        $('#timeslotAddErr').text(value);
                        $('#start_time').addClass('is-invalid');
                    }
                    if(key == 'end_time'){
                        $('#timeslotAddErr').text(value);
                        $('#end_time').addClass('is-invalid');
                    }
                    if(key == 'timeslot_title'){
                        $('#timeslotAddErr').text(value);
                        $('#start_time').addClass('is-invalid');
                        $('#end_time').addClass('is-invalid');
                    }
                    if(key == 'timeslot_position'){
                        $('#timeslotAddOrderErr').text(value);
                        $('#timeslot_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Timeslot Id For Edit Modal ---*/
function timeslotEdit(id){
    $.get('/settings/timeslot/'+id+'/edit', function(res){
        $('#editTimeslotModal').modal('show');
        $('#up_timeslot_id').val(res.id);
        let timeslot = res.title;
        $('#up_start_time').val(timeslot.slice(0,5));
        $('#up_end_time').val(timeslot.slice(6));
        $('#up_timeslot_position').val(res.display_order);
    });
}


/*--- Update Timeslot ---*/
$(document).ready(function(){
    $('#updateTimeslotBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_timeslot_id'        : $('#up_timeslot_id').val(),    // This id is must be required fo update data
            'start_time'            : $('#up_start_time').val(),    /*it is only for required validation*/
            'end_time'              : $('#up_end_time').val(),      /*it is only for required validation*/
            'timeslot_title'        : $('#up_start_time').val()+'-'+$('#up_end_time').val(),
            'timeslot_position'      : $('#up_timeslot_position').val(),
        };
        $.ajax({
            url: '/settings/timeslot/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editTimeslotModal').modal('hide');
                $('#timeslotTable').load(location.href+' #timeslotTable');
                $('#settingForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'start_time'){
                        $('#timeslotUpErr').text(value);
                        $('#up_start_time').addClass('is-invalid');
                    }
                    if(key == 'end_time'){
                        $('#timeslotUpErr').text(value);
                        $('#up_end_time').addClass('is-invalid');
                    }
                    if(key == 'timeslot_title'){
                        $('#timeslotUpErr').text(value);
                        $('#up_start_time').addClass('is-invalid');
                        $('#up_end_time').addClass('is-invalid');
                    }
                    if(key == 'timeslot_position'){
                        $('#timeslotUpOrderErr').text(value);
                        $('#up_timeslot_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete timeslot by ID ---*/
function timeslotDelete(id){
    $.post('/settings/timeslot/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#timeslotTable').load(location.href+' #timeslotTable');
        }
    });   
}

/*--- Timeslot Enable by ID ---*/
function timeslotEnable(id){
    $.post('/settings/timeslot/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#timeslotTable').load(location.href+' #timeslotTable');
        }
    });   
}

/*--- Timeslot Disable by ID ---*/
function timeslotDisable(id){
    $.post('/settings/timeslot/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#timeslotTable').load(location.href+' #timeslotTable');
        }
    });   
}



/***************************************************************
********************* ROOM SETTING CRUD ********************
****************************************************************/

/*--- Add Room Setup ---*/
$(document).ready(function(){

    $('#roomAddBtn').click(function(){
        $('#roomAddModal').modal('show');
    });


    $('#saveRoomBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'room_number'       : $('#room_number').val(),
            'room_position'     : $('#room_position').val(),
        };

        $.ajax({
            url: '/settings/room/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#roomAddModal').modal('hide');
                    $('#roomAddForm')[0].reset();
                    $('#roomTable').load(location.href+' #roomTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'room_number'){
                        $('#roomAddErr').text(value);
                        $('#room_number').addClass('is-invalid');
                    }
                    if(key == 'room_position'){
                        $('#roomAddOrderErr').text(value);
                        $('#room_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Room Id For Edit Modal ---*/
function roomEdit(id){
    $.get('/settings/room/'+id+'/edit', function(res){
        $('#editRoomModal').modal('show');
        $('#up_room_id').val(res.id);
        $('#up_room_number').val(res.title);
        $('#up_room_position').val(res.display_order);
    });
}


/*--- Update Room ---*/
$(document).ready(function(){
    $('#updateRoomBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_room_id'         : $('#up_room_id').val(),    // This id is must be required fo update data
            'room_number'        : $('#up_room_number').val(),
            'room_position'      : $('#up_room_position').val(),
        };
        $.ajax({
            url: '/settings/room/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editRoomModal').modal('hide');
                $('#roomTable').load(location.href+' #roomTable');
                $('#roomEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'room_number'){
                        $('#roomUpErr').text(value);
                        $('#up_room_number').addClass('is-invalid');
                    }
                    if(key == 'room_position'){
                        $('#roomUpOrderErr').text(value);
                        $('#up_room_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Room by ID ---*/
function roomDelete(id){
    $.post('/settings/room/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#roomTable').load(location.href+' #roomTable');
        }
    });   
}

/*--- Room Enable by ID ---*/
function roomEnable(id){
    $.post('/settings/room/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#roomTable').load(location.href+' #roomTable');
        }
    });   
}

/*--- Room Disable by ID ---*/
function roomDisable(id){
    $.post('/settings/room/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#roomTable').load(location.href+' #roomTable');
        }
    });   
}


/***************************************************************
************************ SEMESTER SETTING CRUD **********************
****************************************************************/

/*--- Add Semester Setup ---*/
$(document).ready(function(){

    $('#semesterAddBtn').click(function(){
        $('#semesterAddModal').modal('show');
    });


    $('#saveSemesterBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'semester_title'        : $('#semester_title').val(),
            'semester_position'      : $('#semester_position').val(),
        };

        $.ajax({
            url: '/settings/semester/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#semesterAddModal').modal('hide');
                    $('#semesterAddForm')[0].reset();
                    $('#semesterTable').load(location.href+' #semesterTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'semester_title'){
                        $('#semesterAddErr').text(value);
                        $('#semester_title').addClass('is-invalid');
                    }
                    if(key == 'semester_position'){
                        $('#semesterAddOrderErr').text(value);
                        $('#semester_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Semester Id For Edit Modal ---*/
function semesterEdit(id){
    $.get('/settings/semester/'+id+'/edit', function(res){
        $('#editSemesterModal').modal('show');
        $('#up_semester_id').val(res.id);
        $('#up_semester_title').val(res.title);
        $('#up_semester_position').val(res.display_order);
    });
}


/*--- Update Semester ---*/
$(document).ready(function(){
    $('#updateSemesterBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_semester_id'        : $('#up_semester_id').val(),    // This id is must be required fo update data
            'semester_title'        : $('#up_semester_title').val(),
            'semester_position'     : $('#up_semester_position').val(),
        };
        $.ajax({
            url: '/settings/semester/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editSemesterModal').modal('hide');
                $('#semesterTable').load(location.href+' #semesterTable');
                $('#semesterEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'semester_title'){
                        $('#semesterUpErr').text(value);
                        $('#up_semester_title').addClass('is-invalid');
                    }
                    if(key == 'semester_position'){
                        $('#semesterOrderUpErr').text(value);
                        $('#up_semester_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Semester by ID ---*/
function semesterDelete(id){
    $.post('/settings/semester/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#semesterTable').load(location.href+' #semesterTable');
        }
    });   
}

/*--- Semester Enable by ID ---*/
function semesterEnable(id){
    $.post('/settings/semester/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#semesterTable').load(location.href+' #semesterTable');
        }
    });   
}

/*--- Semester Disable by ID ---*/
function semesterDisable(id){
    $.post('/settings/semester/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#semesterTable').load(location.href+' #semesterTable');
        }
    });   
}



/***************************************************************
************************ SESSION SETTING CRUD **********************
****************************************************************/

/*--- Add Session Setup ---*/
$(document).ready(function(){

    $('#sessionAddBtn').click(function(){
        $('#sessionAddModal').modal('show');
    });


    $('#saveSessionBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'session_start'         : $('#datepicker1').val(),/*it is optional for required validation*/
            'session_end'           : $('#datepicker2').val(),/*it is optional for required validation*/
            'session_title'           : $('#datepicker1').val()+'-'+$('#datepicker2').val(),
            'session_position'      : $('#session_position').val(),
        };

        $.ajax({
            url: '/settings/session/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#sessionAddModal').modal('hide');
                    $('#sessionAddForm')[0].reset();
                    $('#sessionTable').load(location.href+' #sessionTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'session_start'){
                        $('#sessionAddErr').text(value);
                        $('#datepicker1').addClass('is-invalid');
                    }
                    if(key == 'session_end'){
                        $('#sessionAddErr').text(value);
                        $('#datepicker2').addClass('is-invalid');
                    }
                    if(key == 'session_title'){
                        $('#sessionAddErr').text(value);
                        $('#datepicker1').addClass('is-invalid');
                        $('#datepicker2').addClass('is-invalid');
                    }
                    if(key == 'session_position'){
                        $('#sessionAddOrderErr').text(value);
                        $('#session_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Session Id For Edit Modal ---*/
function sessionEdit(id){
    $.get('/settings/session/'+id+'/edit', function(res){
        $('#editSessionModal').modal('show');
        $('#up_session_id').val(res.id);
        let session = res.title;
        $('#up_datepicker1').val(session.slice(0,4));
        $('#up_datepicker2').val(session.slice(5,9));
        $('#up_session_position').val(res.display_order);
    });
}


/*--- Update Session ---*/
$(document).ready(function(){
    $('#updateSessionBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_session_id'         : $('#up_session_id').val(),
            'session_start'         : $('#up_datepicker1').val(),   /*it is optional for required validation*/
            'session_end'           : $('#up_datepicker2').val(),   /*it is optional for required validation*/
            'session_title'         : $('#up_datepicker1').val()+'-'+$('#up_datepicker2').val(),
            'session_position'      : $('#up_session_position').val(),
        };
        $.ajax({
            url: '/settings/session/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editSessionModal').modal('hide');
                $('#sessionTable').load(location.href+' #sessionTable');
                $('#sessionEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'session_start'){
                        $('#sessionUpErr').text(value);
                        $('#up_datepicker1').addClass('is-invalid');
                    }
                    if(key == 'session_end'){
                        $('#sessionUpErr').text(value);
                        $('#up_datepicker2').addClass('is-invalid');
                    }
                    if(key == 'session_title'){
                        $('#sessionUpErr').text(value);
                        $('#up_datepicker1').addClass('is-invalid');
                        $('#up_datepicker2').addClass('is-invalid');
                    }
                    if(key == 'session_position'){
                        $('#sessionOrderUpErr').text(value);
                        $('#up_session_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Session by ID ---*/
function sessionDelete(id){
    $.post('/settings/session/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#sessionTable').load(location.href+' #sessionTable');
        }
    });   
}

/*--- Session Enable by ID ---*/
function sessionEnable(id){
    $.post('/settings/session/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#sessionTable').load(location.href+' #sessionTable');
        }
    });   
}

/*--- Session Disable by ID ---*/
function sessionDisable(id){
$.post('/settings/session/'+id+'/disable', function(res){
    if(res.status == 200){
        $('#sessionTable').load(location.href+' #sessionTable');
    }
});   
}


/***************************************************************
********************* YEAR SETTING CRUD ********************
****************************************************************/

/*--- Add Year Setup ---*/
$(document).ready(function(){

    $('#yearAddBtn').click(function(){
        $('#yearAddModal').modal('show');
    });


    $('#saveYearBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'year_title'       : $('#datepicker').val(),
            'year_position'     : $('#year_position').val(),
        };

        $.ajax({
            url: '/settings/year/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#yearAddModal').modal('hide');
                    $('#yearAddForm')[0].reset();
                    $('#yearTable').load(location.href+' #yearTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'year_title'){
                        $('#yearAddErr').text(value);
                        $('#year_title').addClass('is-invalid');
                    }
                    if(key == 'year_position'){
                        $('#yearAddOrderErr').text(value);
                        $('#year_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Year Id For Edit Modal ---*/
function yearEdit(id){
    $.get('/settings/year/'+id+'/edit', function(res){
        $('#editYearModal').modal('show');
        $('#up_year_id').val(res.id);
        $('#up_datepicker').val(res.title);
        $('#up_year_position').val(res.display_order);
    });
}


/*--- Update Year ---*/
$(document).ready(function(){
    $('#updateYearBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_year_id'         : $('#up_year_id').val(),    // This id is must be required fo update data
            'year_title'         : $('#up_datepicker').val(),
            'year_position'      : $('#up_year_position').val(),
        };
        $.ajax({
            url: '/settings/year/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editYearModal').modal('hide');
                $('#yearTable').load(location.href+' #yearTable');
                $('#yearEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'year_title'){
                        $('#yearUpErr').text(value);
                        $('#up_datepicker').addClass('is-invalid');
                    }
                    if(key == 'year_position'){
                        $('#yearOrderUpErr').text(value);
                        $('#up_year_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Year by ID ---*/
function yearDelete(id){
    $.post('/settings/year/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#yearTable').load(location.href+' #yearTable');
        }
    });   
}

/*--- Year Enable by ID ---*/
function yearEnable(id){
    $.post('/settings/year/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#yearTable').load(location.href+' #yearTable');
        }
    });   
}

/*--- Year Disable by ID ---*/
function yearDisable(id){
    $.post('/settings/year/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#yearTable').load(location.href+' #yearTable');
        }
    });   
}


/***************************************************************
****************** DESIGNATION SETTING CRUD ********************
****************************************************************/

/*--- Add Designation Setup ---*/
$(document).ready(function(){

    $('#designationAddBtn').click(function(){
        $('#designationAddModal').modal('show');
    });


    $('#saveDesignationBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'designation_title'       : $('#designation_title').val(),
            'designation_position'     : $('#designation_position').val(),
        };

        $.ajax({
            url: '/settings/designation/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#designationAddModal').modal('hide');
                    $('#designationAddForm')[0].reset();
                    $('#designationTable').load(location.href+' #designationTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'designation_title'){
                        $('#designationAddErr').text(value);
                        $('#designation_title').addClass('is-invalid');
                    }
                    if(key == 'designation_position'){
                        $('#designationAddOrderErr').text(value);
                        $('#designation_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Designation Id For Edit Modal ---*/
function designationEdit(id){
    $.get('/settings/designation/'+id+'/edit', function(res){
        $('#editDesignationModal').modal('show');
        $('#up_designation_id').val(res.id);
        $('#up_designation_title').val(res.title);
        $('#up_designation_position').val(res.display_order);
    });
}


/*--- Update Designation ---*/
$(document).ready(function(){
    $('#updateDesignationBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_designation_id'         : $('#up_designation_id').val(),    // This id is must be required fo update data
            'designation_title'         : $('#up_designation_title').val(),
            'designation_position'      : $('#up_designation_position').val(),
        };
        $.ajax({
            url: '/settings/designation/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editDesignationModal').modal('hide');
                $('#designationTable').load(location.href+' #designationTable');
                $('#designationEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'designation_title'){
                        $('#designationUpErr').text(value);
                        $('#up_designation_title').addClass('is-invalid');
                    }
                    if(key == 'designation_position'){
                        $('#designationOrderUpErr').text(value);
                        $('#up_designation_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Designation by ID ---*/
function designationDelete(id){
    $.post('/settings/designation/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#designationTable').load(location.href+' #designationTable');
        }
    });   
}

/*--- Designation Enable by ID ---*/
function designationEnable(id){
    $.post('/settings/designation/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#designationTable').load(location.href+' #designationTable');
        }
    });   
}

/*--- Designation Disable by ID ---*/
function designationDisable(id){
    $.post('/settings/designation/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#designationTable').load(location.href+' #designationTable');
        }
    });   
}



/***************************************************************
********************* DEPARTMENT SETTING CRUD ******************
****************************************************************/

/*--- Add Department Setup ---*/
$(document).ready(function(){

    $('#departmentAddBtn').click(function(){
        $('#departmentAddModal').modal('show');
    });


    $('#saveDepartmentBtn').click(function(e){
        e.preventDefault();     //prevent page reload
        
        let data = {
            'department_title'       : $('#department_title').val(),
            'department_position'     : $('#department_position').val(),
        };

        $.ajax({
            url: '/settings/department/add',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(response){
                if(response.status == 200){
                    $('#departmentAddModal').modal('hide');
                    $('#departmentAddForm')[0].reset();
                    $('#departmentTable').load(location.href+' #departmentTable');
                }
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'department_title'){
                        $('#departmentAddErr').text(value);
                        $('#department_title').addClass('is-invalid');
                    }
                    if(key == 'department_position'){
                        $('#departmentAddOrderErr').text(value);
                        $('#department_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Get Department Id For Edit Modal ---*/
function departmentEdit(id){
    $.get('/settings/department/'+id+'/edit', function(res){
        $('#editDepartmentModal').modal('show');
        $('#up_department_id').val(res.id);
        $('#up_department_title').val(res.title);
        $('#up_department_position').val(res.display_order);
    });
}


/*--- Update Department ---*/
$(document).ready(function(){
    $('#updateDepartmentBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_department_id'         : $('#up_department_id').val(),    // This id is must be required fo update data
            'department_title'         : $('#up_department_title').val(),
            'department_position'      : $('#up_department_position').val(),
        };
        $.ajax({
            url: '/settings/department/update',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(res){
                $('#editDepartmentModal').modal('hide');
                $('#departmentTable').load(location.href+' #departmentTable');
                $('#departmentEditForm')[0].reset();
            },
            error: function(error){
                let err = error.responseJSON;
                $.each(err.errors, function(key, value){
                    if(key == 'department_title'){
                        $('#departmentUpErr').text(value);
                        $('#up_department_title').addClass('is-invalid');
                    }
                    if(key == 'department_position'){
                        $('#departmentOrderUpErr').text(value);
                        $('#up_department_position').addClass('is-invalid');
                    }
                });
            } 
        });
    });
});


/*--- Delete Department by ID ---*/
function departmentDelete(id){
    $.post('/settings/department/'+id+'/delete', function(res){
        if(res.status == 200){
            $('#departmentTable').load(location.href+' #departmentTable');
        }
    });   
}

/*--- Department Enable by ID ---*/
function departmentEnable(id){
    $.post('/settings/department/'+id+'/enable', function(res){
        if(res.status == 200){
            $('#departmentTable').load(location.href+' #departmentTable');
        }
    });   
}

/*--- Department Disable by ID ---*/
function departmentDisable(id){
    $.post('/settings/department/'+id+'/disable', function(res){
        if(res.status == 200){
            $('#departmentTable').load(location.href+' #departmentTable');
        }
    });   
}




</script>