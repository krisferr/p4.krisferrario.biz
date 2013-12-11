$(function() {
    $( "#datepicker" ).datepicker();
  });

$('input[name=service]').click(function(){
    
    //Get the label element that comes immediately after this radio button
    var label = $(this).next();
    
    //From the label element extract the inner HTML
    var service = label.html();
    
    //Place info in the display
    
    if (service==morning)
    {
        $('#service-selection').html(Morning Prayer is a service of );
    }
    
    else if (service==evening)
    {
        //code
    }
    
    else if (service==compline)
    {
        //code
    }
    
    else
    {
        //Error message
    }
    
});

object.onclick=function(){SomeJavaScriptCode};