( function($){

    $(document).ready(function($){ 
        
        $('#show-web').click(function() {  
            if($('#web_details').is(':visible')) { 
                $('#web_details').hide('slow'); 
            }
            else {
                $('#mgt_details').hide('slow'); 
                $('#analytics_details').hide('slow'); 
                $('#web_details').show('slow'); 
            }
        });

        $('#show-mgt').click(function() {  
            if($('#mgt_details').is(':visible')) { 
                $('#mgt_details').hide('slow'); 
            }
            else {
                $('#web_details').hide('slow');
                $('#analytics_details').hide('slow'); 
                $('#mgt_details').show('slow'); 
            }
        });  

        $('#show-analytics').click(function() {  
            if($('#analytics_details').is(':visible')) { 
                $('#analytics_details').hide('slow'); 
            }
            else {
                $('#web_details').hide('slow');
                $('#mgt_details').hide('slow'); 
                $('#analytics_details').show('slow'); 
                
            }
        });                 

    });

})(jQuery);

