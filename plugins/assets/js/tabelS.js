$(document).ready(function() {
    $('#example').DataTable( {
        "scrollY": 400,
        "scrollX": true,
        
        "ordering": false,
		"info": false,
		"language": {					
		    "lengthMenu":"Show_MENU_"							
		}	
    } );
} );