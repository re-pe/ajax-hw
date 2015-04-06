//Assign function to onready event  
$(document).ready(function(){
    // Assign function to onclick event on button #getdata
    $("#getdata").click(function(){
        $.post("php/return-data.php",
        {
          firstname: $("#firstname").val(),
          lastname : $("#lastname" ).val()
        },
        function(data){
            $("#output").val(data);
        });
    });
});
