$(document).ready(function(){
    alert('works');
    $('.modal').modal();    
    $('select').material_select();
    $('.button-collapse').sideNav();
 $('.tooltipped').tooltip({delay: 50});
    $('.collapsible').collapsible();
     $('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
    $('.timepicker').pickatime({
    default: 'now', // Set default time: 'now', '1:30AM', '16:30'
    fromnow: 0,       // set default time to * milliseconds from now (using with default = 'now')
    twelvehour: false, // Use AM/PM or 24-hour format
    donetext: 'OK', // text for done-button
    cleartext: 'Clear', // text for clear-button
    canceltext: 'Cancel', // Text for cancel-button
    autoclose: false, // automatic close timepicker
    ampmclickable: true, // make AM PM clickable
    aftershow: function(){} //Function for after opening timepicker
  });
    $('#artgroup').change(function(){
        
    var sel = $('#artgroup').val();
    var sors = '../content/images/' + sel + '/logo.jpg';    
	$('#changing-img').attr('src', sors);
        
});
    
    // Event Image changer 
    $('#artgroup').change(function(){
        
    var sel = $('#artgroup').val();
    var sors = '../content/images/' + sel + '/logo.jpg';    
	$('#changing-img').attr('src', sors);
        
});
    //register create Username
       var fn = '';
    var ln = '';
   
  
    
    $('#lastName').change(function(ln){
          fn = $('#firstName').val();
    ln = $('#lastName').val();
            var un = fn + "." + ln;
 $("#username").val(un);
        
});
    
    //populate subgroup
    $('#lastName').change(function(ln){
          fn = $('#firstName').val();
    ln = $('#lastName').val();
            var un = fn + "." + ln;
 $("#username").val(un);
        
});
    
   
    alert('all-good');  
    
    
});

 // Renders Event Image Upload
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#event-img')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
