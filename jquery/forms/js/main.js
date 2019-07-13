
$(document).ready(function(){
 
    
     
    $("#formSubmit").submit(function(e){
        e.preventDefault();
        
        var that = $(this);
        
        $.ajax({
            url: that.attr('action'),
            type: that.attr('method'),
            dataType: 'json',
            data:that.serialize(),
            success: function(res){
                //console.log(res);
                if(res.success){
                    $('#message_info').html("Message sent successful");
                }
            }
        });
    });
    
});