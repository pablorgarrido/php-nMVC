/*
function escapeTags( str ) {
  return String( str )
           .replace( /&/g, '&amp;' )
           .replace( /"/g, '&quot;' )
           .replace( /'/g, '&#39;' )
           .replace( /</g, '&lt;' )
           .replace( />/g, '&gt;' );
}
*/

window.onload = function() {

  var btn = document.getElementById('btnUploadSinglePDF'),
      progressBar = document.getElementById('progressBarT'),
      progressOuter = document.getElementById('progressOuterT'),
      msgBox = document.getElementById('msgBoxT');

  var uploader1 = new ss.SimpleUpload({
        button: btn,
        url: 'ajax/file_upload_pdf.php',
        name: 'uploadfilepdf',
        allowedExtensions: ['pdf'],
        multipart: true,
        hoverClass: 'hover',
        focusClass: 'focus',
        responseType: 'json',
        startXHR: function() {
            progressOuter.style.display = 'block'; // make progress bar visible
            this.setProgressBar( progressBar );
        },
        onSubmit: function() {
            msgBox.innerHTML = ''; // empty the message box
            btn.innerHTML = 'Caricamento...'; // change button text to "Uploading..."
          },
        onComplete: function( filename, response ) {
            btn.innerHTML = 'Carica file PDF';
            progressOuter.style.display = 'none'; // hide progress bar when upload is completed

            if ( !response ) {
                msgBox.innerHTML = 'Carica file PDF';
                return;
            }

            if ( response.success === true ) {
                msgBox.innerHTML = '<strong>' + escapeTags( filename ) + '</strong>' + ", <img src='../img/loader.gif' width='32' height='32' alt='Elaborazione...' />";
					//alert($('#datacodsede').html() + " " + $( "#selectcamp" ).val());
					$.ajax({
  						url: "ajax/ImportDatiSede.php",
  						data: { csede: $('#datacodsede').html(), file: escapeTags( filename ), idcamp: $( "#selectcamp" ).val() },
  						type: "GET",
  						context: document.body
						}).done(function(risposta) {
  							msgBox.innerHTML = "<img src='../img/loader.gif' width='32' height='32' alt='Elaborazione...' />";
  							
							$.ajax({
  							url: "ajax/LoadDatiSede.php",
  							data: { csede: $('#datacodsede').html(), idcamp: $( "#selectcamp" ).val() },
  							type: "GET",
  							context: document.body
							}).done(function(risp) {
  								//msgBox.innerHTML = "Ok "+risposta;
  								datatable.innerHTML = risp;
  								msgBox.innerHTML = "";
							});     							
  							
						});               
                

            } else {
                if ( response.msg )  {
                    msgBox.innerHTML = escapeTags( response.msg );

                } else {
                    msgBox.innerHTML = 'Errore in fase di caricamento.';
                }
            }
          },
        onError: function() {
            progressOuter.style.display = 'none';
            msgBox.innerHTML = 'Impossibile caricare il file';
          }
	});
	
};
