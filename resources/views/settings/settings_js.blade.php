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
            'timeslot_title'    : $('#timeslot_title').val(),
            'timeslot_position'  : $('#timeslot_position').val(),
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
                    if(key == 'timeslot_title'){
                        $('#timeslotAddErr').text(value);
                        $('#timeslot_title').addClass('is-invalid');
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
        $('#up_timeslot_title').val(res.title);
        $('#up_timeslot_position').val(res.display_order);
    });
}


/*--- Update Timeslot ---*/
$(document).ready(function(){
    $('#updateTimeslotBtn').click(function(e){

        e.preventDefault();     //prevent page reload
        
        let data = {
            'up_timeslot_id'        : $('#up_timeslot_id').val(),    // This id is must be required fo update data
            'timeslot_title'        : $('#up_timeslot_title').val(),
            'display_position'      : $('#up_timeslot_position').val(),
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
                    if(key == 'timeslot_title'){
                        $('#timeslotUpErr').text(value);
                        $('#up_timeslot_title').addClass('is-invalid');
                    }
                    if(key == 'display_position'){
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



</script>