	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/materialize.min.js"></script>

    <!-- complementos -->
    <script src="js/complementos.js"></script>

    <!--NICE SCROLL-->
	<script src="js/jquery.nicescroll.js"></script>
	<script>
		//INICIALIZAR NICESCROLL
	    $(document).ready(
	    	function() { 
	    		$("html").niceScroll({cursorwidth:"12px" , zindex:"9999"});
	    	}
	    );

	    //INICIALIZAR MODALES
	    $(document).ready(function(){
		    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
		    $('.modal-trigger').leanModal();
		 });


	</script>

	<!--TOOLTIP-->
	<script>
		$(document).ready(function(){
			$(function () {
  				$('[data-toggle="tooltip"]').tooltip()
			})
		})

		//inicializar datepicker
		$('.datepicker').pickadate({
		    selectMonths: true, // Creates a dropdown to control month
		    selectYears: 15 // Creates a dropdown of 15 years to control year
		  });

		//iniciar selectores
		$(document).ready(function() {
		    $('select').material_select();
		});	
	</script>


	<script>
          function archivo(evt) {
              var files = evt.target.files; // FileList object
         
              // Obtenemos la imagen del campo "file".
              for (var i = 0, f; f = files[i]; i++) {
                //Solo admitimos imágenes.
                if (!f.type.match('image.*')) {
                    continue;
                }
         
                var reader = new FileReader();
         
                reader.onload = (function(theFile) {
                    return function(e) {
                     document.getElementById("preview").innerHTML = ['<img class="thumb" src="',e.target.result,'" title="', escape(theFile.name), '" width="128"/>'].join('');
                    };
                })(f);
         
                reader.readAsDataURL(f);
              }
          }
         
          document.getElementById('imagen').addEventListener('change', archivo, false);
  </script>