
    function myFunction() {

     var table = document.getElementById("mytable");
     var row = table.insertRow(5);
     var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);
     var cell5 = row.insertCell(4);
     cell1.innerHTML = "NEW CELL1";
     cell2.innerHTML = "NEW CELL2";
     cell3.innerHTML = "NEW CELL2";
     cell4.innerHTML = "NEW CELL2";
     cell5.innerHTML = "NEW CELL2";
     
     $('#machchar').text("kseufgskudgvkbsdf");
     $('#chiita').text("Helfis Waale!");
console.log("asd");
myfitFunction();
}  

     
    function mydietFunction() {

     var table = document.getElementById("myTaable");
     var row = table.insertRow(2);
     var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);
     
     cell1.innerHTML = "NEW CELL1";
     cell2.innerHTML = "NEW CELL2";
     cell3.innerHTML = "NEW CELL2";
     cell4.innerHTML = "NEW CELL2";
     
console.log("asd");
}  
function myfitFunction() {

     var table = document.getElementById("myTabla");
     var row = table.insertRow(1);
     var cell1 = row.insertCell(0);
     var cell2 = row.insertCell(1);
     var cell3 = row.insertCell(2);
     var cell4 = row.insertCell(3);
     
     cell1.innerHTML = "NEW CELL1";
     cell2.innerHTML = "NEW CELL2";
     cell3.innerHTML = "NEW CELL2";
     cell4.innerHTML = "NEW CELL2";


     var row2 = table.insertRow(4);
     var cell12 = row2.insertCell(0);
     var cell22 = row2.insertCell(1);
     var cell32 = row2.insertCell(2);
     var cell42 = row2.insertCell(3);
     
     cell12.innerHTML = "NEW CELL1";
     cell22.innerHTML = "NEW CELL2";
     cell32.innerHTML = "NEW CELL2";
     cell42.innerHTML = "NEW CELL2";
     
console.log("asd");
}   

function mynotify(){

     demo.initChartist();
     $.notify({
               icon: 'pe-7s-gift',
               message: "Sucess!- Your Details are successfully Updated."

            },{
                type: 'success',
                timer: 4000
            });

     
}
function myevent(){

     demo.initChartist();
     $.notify({
               icon: 'pe-7s-gift',
               message: "Sucess!- Event has been successfully Created."

            },{
                type: 'success',
                timer: 4000
            });

     
}

function readURL(event){
         var getImagePath = URL.createObjectURL(event.target.files[0]);
         $('#clok').css('background-image', 'url(' + getImagePath + ')');
         $('#getval').hide(); 
}
