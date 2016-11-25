(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		// DOM ready, take it away
                   var imgs = $('#maximage img');
    //imgs.sort(function() { return 0.5 - Math.random() });
    $('#maximage').html( imgs );
    
    $('#maximage').maximage({
        cycleOptions: {
            speed: 3000
        }
    });
    
    
            
            
            $( "#accordion" ).accordion();

		
	});
	
})(jQuery, this);
