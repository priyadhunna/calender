<?php require_once '../loginphp/connection.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | Calendar</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- fullCalendar 2.2.5-->
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.min.css">
  <link rel="stylesheet" href="../plugins/fullcalendar/fullcalendar.print.css" media="print">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Calendar
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Calendar</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
            <div class="col-xs-12">
                
               
                <br />
                <div id="bootstrapModalFullCalendar"></div>
            </div>
        </div>
    </div>

    <div id="fullCalModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span> <span class="sr-only">close</span></button>
                    <h4 id="modalTitle" class="modal-title"></h4>
                </div>
                <div id="modalBody" class="modal-body"></div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <a class="btn btn-primary" id="eventUrl" target="_blank">Event Page</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.2/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

   
       <?php
        try{
         $db = $m->helfis;
         $collection = $db->calendar;
         $cursor = $collection->find();

    

       echo
          "<script>
        $(document).ready(function() {
            $('#bootstrapModalFullCalendar').fullCalendar({
                header: {
                    left: '',
                    center: 'prev title next',
                    right: ''
                },
                eventClick:  function(event, jsEvent, view) {
                    $('#modalTitle').html(event.title);
                    $('#modalBody').html(event.description);
                    $('#eventUrl').attr('href',event.url);
                    $('#fullCalModal').modal();
                    return false;
                },
                events:
                [
                   {
                      title:\"Free Pizza\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Free Pizza.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',14),
                      end:moment().subtract('days',14),
                      
                   },
                   {
                      title:\"DNUG Meeting\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the DNUG Meeting.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',10),
                      end:moment().subtract('days',10),
                      
                   },
                   {
                      title:\"Staff Meeting\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Staff Meeting.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',6),
                      end:moment().subtract('days',6),
                     
                   },
                   {
                      title:\"Poker Night\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Poker Night.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',2),
                      end:moment().subtract('days',2),
                 },
                   {
                      title:\"NES Gamers\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the NES Gamers.</p><p>Nothing to see!</p>\",
                      start:moment(),
                      end:moment(),
                                       },
                   {
                      title:\"XBox Tourney\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the XBox Tourney.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',3),
                      end:moment().add('days',3),
                     
                   },
                   {
                      title:\"Pool Party\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Pool Party.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',5),
                      end:moment().add('days',5),
                      
                   },
                   {
                      title:\"Staff Meeting\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Staff Meeting.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',9),
                      end:moment().add('days',9),
                      
                   },
                   {
                      title:\"Poker Night\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Poker Night.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',11),
                      end:moment().add('days',11),
                      
                   },
                   {
                      title:\"Hackathon\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Hackathon.</p><p>Nothing to see!</p>\",
                       start:moment().add('days',15),
                      end:moment().add('days',15),
                                        },
                   {
                      title:\"Beta Testing\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Beta Testing.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',22),
                      end:moment().add('days',22),
                      
                   },
                   {
                      title:\"Perl Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Perl Meetup.</p><p>Nothing to see... though no one would show up any way.</p>\",
                      start:moment().subtract('days',20),
                      end:moment().subtract('days',20),
                      
                   },
                   {
                      title:\"Node.js Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Node.js Meetup.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',25),
                      end:moment().add('days',25),
                                      },
 
                   {
                      title:\"Javascript Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the Javascript Meetup.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',27),
                      end:moment().subtract('days',27),
                      
                   },
                   {
                      title:\"HTML Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the HTML Meetup.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days',22),
                      end:moment().subtract('days',22),
                      
                   },
                   {
                      title:\"CSS Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the CSS Meetup.</p><p>Nothing to see!</p>\",
                      start:moment().add('days',27),
                      end:moment().add('days',27),
                      
                   }
                ]
            });
        });
 </script>";
  }
    catch(MongoException $mongoException){
        print $mongoException;
        exit;
    }
?>
<script src="../plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="../bootstrap/js/bootstrap.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Slimscroll -->
<script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/app.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../dist/js/demo.js"></script>
<!-- fullCalendar 2.2.5 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="../plugins/fullcalendar/fullcalendar.min.js"></script>
<!-- Page specific script -->
</body>
</html>


