   events:
                [" ;
                  
                foreach ($cursor as $key) {

                    $date = explode('.',$key["date"])[0];
                    $dollar .= "{
                      title:\" ". $key["name"] . "\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the HTML Meetup.</p><p>Nothing to see!</p>\",
                      start:moment().subtract('days'," . $date ."),
                      end:moment().subtract('days'," . $date ."),
                      
                   },";

                     
                   }

                   $dollar .= "
                   {
                      title:\"CSS Meetup\",
                      allday:\"false\",
                     description:\"<p>This is just a fake description for the CSS Meetup.</p><p>Nothing to see!</p>\",
                      start:moment(2017-07-12),
                      end:moment(12/7/2017),
                      
                   }

                ]