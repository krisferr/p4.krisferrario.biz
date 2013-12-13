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
  calcdate    = year + "-" + month + "-" + day;
  return calcdate;
}

function prepopulate_date() {
  document.getElementById("datepicker").setAttribute('value', calculate_date());
}

window.onload = prepopulate_date;

function passing_date(){
     window.location.href = "c_base.php?date=" + document.getElementById("datepicker").setAttribute('value', calculate_date());
}