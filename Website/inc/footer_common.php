<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script> 
	<script src="js/jquery.nicescroll.js"></script>	
	
	<script>		
	    $(document).ready(
	    	function() { 

	    		//INICIALIZAR NICESCROLL
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999" , cursorcolor:"#f18324" , cursorborder:"0px" , cursorborderradius:"0px"});
	    		$(".miniPaquetes").niceScroll({cursorwidth:"9px" , zindex:"9999"});
	    		
	    		//iniciando collapsible
	    		$('.collapsible').collapsible({
			    	accordion : false // A setting that changes the collapsible behavior to expandable instead of the default accordion style
			    });
			   
	    	}
        	    	
	    );

	</script>