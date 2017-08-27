
<?php require_once 'connection.php'; ?>
<?php require_once 'library.php'; ?>
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
                [";


                   { 

                     $document = $collection->findone(
                  

                     ['title'  => 'Free Pizza']);
                     
                      
                      var_dump($document);
                    }
                    
                  
            ?>
    //echo "Databse loginreg selected";
    