<!DOCTYPE html>
<html>
<head>
    <title>Laravel Fullcalender Tutorial Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />

  </head>
<body>
<div class="modal" id="eventModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Event Details</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="eventForm">
                    <div class="form-group">
                        <label for="eventTitle">Event Title:</label>
                        <input type="text" class="form-control" id="eventTitle" name="eventTitle">
                    </div>
                    <div class="form-group">
                        <label for="eventStart">Event Start:</label>
                        <input type="text" class="form-control" id="eventStart" name="eventStart">
                    </div>
                    <div class="form-group">
                        <label for="eventEnd">Event End:</label>
                        <input type="text" class="form-control" id="eventEnd" name="eventEnd">
                    </div>
                    <button type="button" class="btn btn-primary" onclick="submitEvent()">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
    <div class="container">
        <div id='calendar'></div>
    </div>

    <script>
        $(document).ready(function() {

            var SITEURL = "{{ url('/') }}";
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            var calendar = $('#calendar').fullCalendar({
                editable: true,
                events: SITEURL + "/",
                displayEventTime: false,
                editable: true,
                eventRender: function(event, element, view) {
                    if (event.allDay === 'true') {
                        event.allDay = true;
                    } else {
                        event.allDay = false;
                    }
                }, 
                selectable: true,
                selectHelper: true,
                select: function(start, end, allDay) {
                  
                    var title = prompt('Event Title:');
                    var summary = prompt('Event summary:');
                    if (title) {
                        var start = $.fullCalendar.formatDate(start, "Y-MM-DD");
                        var end = $.fullCalendar.formatDate(end, "Y-MM-DD");
                        
                        $.ajax({
                            url: SITEURL + "/manage-event",
                            data: {
                                title: title,
                                start: start,
                                end: end,
                                type: 'add',
                                summary:summary
                            },
                            type: "POST",
                            success: function(data) {
                                displayMessage("Event Created Successfully");

                                calendar.fullCalendar('renderEvent', {
                                    id: data.id,
                                    title: title,
                                    start: start,
                                    end: end,
                                    allDay: allDay,
                                }, true);

                                calendar.fullCalendar('unselect');
                            }
                        });
                    }
                },
                eventDrop: function(event, delta) {
                    var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD");
                    var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD");

                    $.ajax({
                        url: SITEURL + '/manage-event', 
                        data: {
                            title: event.title, 
                            start: start, 
                            end: end, 
                            id: event.id,
                            type: 'update'
                        }, 
                        type: "POST", 
                        success: function(response) {
                            displayMessage("Event Updated Successfully");
                        }
                    });
                }, 
                eventClick: function(event) {
                    var deleteMsg = confirm("Do you really want to delete?");
                    if (deleteMsg) {
                        $.ajax({
                            type: "POST", 
                            url: SITEURL + '/manage-event', 
                            data: {
                                id: event.id, 
                                type: 'delete'
                            }, 
                            success: function(response) {
                                calendar.fullCalendar('removeEvents', event.id);
                                displayMessage("Event Deleted Successfully");
                            }
                        });
                    }
                }
            });
        });

        function displayMessage(message) {
            toastr.success(message, 'Event');
        }

    </script>

</body>
</html>