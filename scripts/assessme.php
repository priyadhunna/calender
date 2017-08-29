
<?php
$assess = "<table id=\"myTable\">";
try {
    
    $db         = $m->helfis;
    $collection = $db->assessme;
    $fname      = getname(session_id());
    $document   = $collection->findOne(array(
        "FirstName" => $fname
    ));
    $assess .= "<tr>";
    
    if ($document["Gender"] == "male") {

        if ($document["weight"] < 60) {
            
            if ($document["bonemass"] >= 2.5) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " '  disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        if ($document["weight"] >= 60 && $document["weight"] <= 75) {
            
            if ($document["bonemass"] >= 2.9) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        if ($document["weight"] > 75) {
            
            if ($document["bonemass"] >= 3.2) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        
        
        if ($document["height"] < 160) {
            
            if ($document["muscle"] >= 38.5 && $document["muscle"] <= 46.5) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        
        if ($document["height"] >= 160 && $document["height"] <= 170) {
            
            if ($document["muscle"] >= 44.0 && $document["muscle"] <= 52.4) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        if ($document["height"] > 170) {
            
            if ($document["muscle"] >= 49.4 && $document["muscle"] <= 59.4) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        
        if ($document["bmi"] >= 18.5 && $document["bmi"] <= 24) {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bmigreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " ' disabled style=\"text-align:center\" ></center><big></big></td>";
            
        } else {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bmi orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " ' disabled style=\"text-align:center\" ></center> <big></big></td>";
            
        }
        
        
        
        
        if ($document["visceralfat"] >= 1 && $document["visceralfat"] <= 9) {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/visceralfatgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
            
        } else {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/visceralfat orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " ' disabled style=\"text-align:center\"></center> 

<big></big></td>";
            
        }
        
        
        $assess .= "</tr><tr>";
        
        if ($document["bmi"] >= 18.5 && $document["bmi"] <= 24) {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/weightgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' disabled style=\"text-align:center\" ></center><big></big></td>";
            
        } else {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/weight orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' disabled style=\"text-align:center\" ></center><big></big></td>";
            
        }
        
        
        
        if ($document["bodywater"] >= 55 && $document["bodywater"] <= 65) {
            
            $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodywatergreen.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            
        }
        
        else {
            $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodywater orange.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            
            
        }
        if ($document["age"] >= 40 && $document["age"] <= 59) {
            if ($document["bodyfat"] >= 12 && $document["bodyfat"] <= 17) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        
        if ($document["age"] >= 18 && $document["age"] <= 39) {
            if ($document["bodyfat"] >= 11 && $document["bodyfat"] <= 16) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        if ($document["age"] > 59) {
            if ($document["bodyfat"] >= 14 && $document["bodyfat"] <= 19) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        
        if ($document["age"] >= 18 && $document["age"] <= 29) {
            
            if ($document["bmr"] >= 24.0 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center><big><br></big><font size=\"500\"> </td>";
            } else {
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        if ($document["age"] >= 50 && $document["age"] <= 69) {
            
            if ($document["bmr"] >= 21.5 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        
        if ($document["age"] >= 30 && $document["age"] <= 49) {
            
            if ($document["bmr"] >= 22.3 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        if ($document["age"] >= 69) {
            
            if ($document["bmr"] >= 21.5 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        
        
        $assess .= "</tr></table>";
         echo $assess;
    }
    
    
    if ($document["Gender"] == "female") {
        if ($document["weight"] < 45) {
            
            if ($document["bonemass"] >= 1.8) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        if ($document["weight"] >= 45 && $document["weight"] <= 60) {
            
            if ($document["bonemass"] >= 2.2) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        if ($document["weight"] > 60) {
            
            if ($document["bonemass"] >= 2.5) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemassgreen.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bonemass orange.png\" height=\"45\" width=\"55\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["bonemass"] . " ' disabled style=\"text-align:center\"></center><big></big></td>";
                
            }
        }
        
        
        
        
        
        
        if ($document["height"] < 150) {
            
            if ($document["muscle"] >= 29.1 && $document["muscle"] <= 34.7) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        
        if ($document["height"] >= 150 && $document["height"] <= 160) {
            
            if ($document["muscle"] >= 32.9 && $document["muscle"] <= 37.5) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        if ($document["height"] > 160) {
            
            if ($document["muscle"] >= 36.5 && $document["muscle"] <= 42.5) {
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/musclegreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/muscle orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\"  value=' " . $document["muscle"] . " ' disabled style=\"text-align:center\"> </center><big></big></td>";
            }
        }
        
        
        
        
        
        
        
        
        if ($document["bmi"] >= 18.5 && $document["bmi"] <= 24) {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bmigreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " ' disabled style=\"text-align:center\" ></center><big></big></td>";
            
        } else {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/bmi orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmi"] . " ' disabled style=\"text-align:center\" ></center> 

<big></big></td>";
            
        }
        
        
        
        
        if ($document["visceralfat"] >= 1 && $document["visceralfat"] <= 9) {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/visceralfatgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " ' disabled style=\"text-align:center\"></center> 

<big></big></td>";
            
        } else {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/visceralfat orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["visceralfat"] . " ' disabled style=\"text-align:center\"></center> 

<big></big></td>";
            
        }
        
        
        $assess .= "</tr><tr>";
        
        if ($document["bmi"] >= 18.5 && $document["bmi"] <= 24) {
            
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/weightgreen.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' disabled style=\"text-align:center\" ></center><big></big></td>";
            
        } else {
            $assess .= "<td height=\"170\" width=\"200\"><center><img src=\"icons/weight orange.png\" height=\"50\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["weight"] . " ' disabled style=\"text-align:center\" ></center> 

<big></big></td>";
            
        }
        
        
        
        if ($document["bodywater"] >= 45 && $document["bodywater"] <= 60) {
            
            $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodywatergreen.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            
        }
        
        else {
            $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodywater orange.png\" height=\"50\" width=\"50\"></center><br>
  <center> <input type=\"text\" size=\"10\" value=' " . $document["bodywater"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            
            
        }
        if ($document["age"] >= 18 && $document["age"] <= 39) {
            if ($document["bodyfat"] >= 21 && $document["bodyfat"] <= 27) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        
        if ($document["age"] >= 40 && $document["age"] <= 59) {
            if ($document["bodyfat"] >= 22 && $document["bodyfat"] <= 28) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        if ($document["age"] > 59) {
            
            if ($document["bodyfat"] >= 23 && $document["bodyfat"] <= 29) {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat green.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
                
            } else {
                $assess .= "<td height=\"170\" width=\"200\" ><center><img src=\"icons/bodyfat orange.png\" height=\"50\" width=\"50\"></center><br><center> <input type=\"text\" size=\"10\" value=' " . $document["bodyfat"] . " ' disabled style=\"text-align:center\" ></center><big></big> </td>";
            }
        }
        
        if ($document["age"] >= 18 && $document["age"] <= 29) {
            
            if ($document["bmr"] >= 23.6 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        if ($document["age"] >= 50 && $document["age"] <= 69) {
            
            if ($document["bmr"] >= 20.7 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        
        if ($document["age"] >= 30 && $document["age"] <= 49) {
            
            if ($document["bmr"] >= 21.7 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        if ($document["age"] >= 69) {
            
            if ($document["bmr"] >= 20.7 * $document["weight"]) {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmrgreen.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
            } else {
                
                $assess .= "<td height=\"170\" width=\"200\"><center><img  src=\"icons/bmr orange.png\" height=\"70\" width=\"50\"></center><br><center><input type=\"text\" size=\"10\" value=' " . $document["bmr"] . " ' disabled style=\"text-align:center\"> </center>

<big><br></big><font size=\"500\"> </td>";
                
            }
        }
        
        
        $assess .= "</tr></table>";
       
         echo $assess;
    }
    
}
catch (MongoException $mongoException) {
    print $mongoException;
    
    exit;
}
?>