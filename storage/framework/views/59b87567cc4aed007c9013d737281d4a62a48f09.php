<!DOCTYPE html>
<html>
<head>
  <title>Laravel Fullcalender Add/Update/Delete Event Example Tutorial - Tutsmake.com</title>
  <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
</head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
 
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
 
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" />
 
<script src="https://cdn.jsdelivr.net/npm/moment@2.27.0/moment.min.js"></script>
 
<script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
<body>
 
  <div class="container">
      <div class="response"></div>
      <div id='calendar'></div>  
  </div>
  <script>
    $(document).ready(function () {
        var calendar = $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,basicWeek,basicDay'
            },
            navLinks: true,
            editable: true,
            events: "getevent",           
            displayEventTime: false,
            eventRender: function (event, element, view) {
                if (event.allDay === 'true') {
                    event.allDay = true;
                } else {
                    event.allDay = false;
                }
            },
        selectable: true,
        selectHelper: true,
        select: function (start, end, allDay) {
            var title = prompt('Event Title:');
            if (title) {
                var start = moment(start, 'DD.MM.YYYY').format('YYYY-MM-DD'); 
                var end = moment(end, 'DD.MM.YYYY').format('YYYY-MM-DD'); 
                $.ajax({ 
                    url: "<?php echo e(URL::to('createevent')); ?>",
                    data: 'title=' + title + '&start=' + start + '&end=' + end +'&_token=' +"<?php echo e(csrf_token()); ?>",
                    type: "post",
                    success: function (data) {
                        alert("Added Successfully");
                        $('#calendar').fullCalendar('refetchEvents');
                    }
                });
            }
        },
        eventClick: function (event) {
            var deleteMsg = confirm("Do you really want to delete?");
            if (deleteMsg) { 
               $.ajax({
                    type: "POST",
                    url: "<?php echo e(URL::to('deleteevent')); ?>",
                    data: "&id=" + event.id+'&_token=' +"<?php echo e(csrf_token()); ?>",
                    success: function (response) {
                        if(parseInt(response) > 0) {
                            $('#calendar').fullCalendar('removeEvents', event.id);
                            alert("Deleted Successfully");
                        }
                    }
                });
            }
        }
        });
    });
</script>

 
 
</body>
</html>
<?php /**PATH C:\xampp\htdocs\f\resources\views/fullcalendar.blade.php ENDPATH**/ ?>