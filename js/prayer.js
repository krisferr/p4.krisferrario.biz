//A counter to count how many people have been praying
$('.praying').click(function(){
   
    $('#counter').html(function(i, val) { return +val+1 });
});

//A function to change the background color to let people know if your request has been answered
$('.answered').click(function(){
    
    $('#request').css('background-color', '#59cd69');
    
});

//A function to change the background color to let people know if your request is urgent
$('.urgent').click(function(){
    
    $('#request').css('background-color', '#cd6959');
    
});