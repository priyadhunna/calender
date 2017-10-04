function readURL(event){
         var getImagePath = URL.createObjectURL(event.target.files[0]);
         $('#clok').css('background-image', 'url(' + getImagePath + ')');
         $('#getval').hide(); 
}


function weekly() {
	$('#months').hide();
	$('#weeks').show();

}

function monthly() {
	$('#months').show();
	$('#weeks').hide();

}