function readURL(event){
         var getImagePath = URL.createObjectURL(event.target.files[0]);
         $('#clok').css('background-image', 'url(' + getImagePath + ')');
         $('#getval').hide(); 
}
