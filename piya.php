﻿<?php require_once '../scripts/connection.php'; ?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FullCalendar </title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.6.1/fullcalendar.min.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div class="container">
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
  
       
     



 

?>

</body>
</html>