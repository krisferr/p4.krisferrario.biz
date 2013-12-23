/*-------------------------------------------------------------------------------------------------
Date Selection on Home Page
-------------------------------------------------------------------------------------------------*/
//Drop down Date Selector Menu
$(function() {
    $( "#datepicker" ).datepicker();
  });

//Function to prepopulate today's date
function calculate_date() {
  currentTime = new Date();
  month       = currentTime.getMonth() + 1; //returns values 0-11 so +1 is required
  day         = currentTime.getDate();
  year        = currentTime.getFullYear();
  calcdate    = month + "/" + day + "/" + year;
  return calcdate;
}

function prepopulate_date() {
  document.getElementById("datepicker").setAttribute('value', calculate_date());
}

window.onload = prepopulate_date;

function passing_date(){
     window.location.href = "c_services.php?date=" + document.getElementById("datepicker").setAttribute('value', calculate_date());
}

var count = 0;
$('.praying').click(function(){
    count +=1;
    $('#request').append('count' );
    $('#request').click();
    $('#request').css('background-color', '#cd6959');
    
});

$('.answered').click(function(){
    
    $('#request').css('background-color', '#59cd69');
    
});