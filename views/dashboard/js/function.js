$(document).ready(function(){


//$('#actUpload').click(function() {
	
//$.get("ajax/caller.php", { nome: "Mario", cognome: "Rossi" }, function(risposta) {
//  $("#risultato").html(risposta);
//});


//});

$( "[name*='ftdir']" ).change(function() {
  $('#ftotdir').val(parseFloat( parseInt($('#ftdir0').val())+parseInt($('#ftdir1').val())+parseInt($('#ftdir2').val())+parseInt($('#ftdir3').val())+parseInt($('#ftdir4').val())+parseInt($('#ftdir5').val())+parseInt($('#ftdir6').val())) );
});

$( "[name*='fmis']" ).change(function() {
  $('#ftotmis').val(parseInt($('#fmis0').val())+parseInt($('#fmis1').val())+parseInt($('#fmis2').val())+parseInt($('#fmis3').val())+parseInt($('#fmis4').val())+parseInt($('#fmis5').val())+parseInt($('#fmis6').val()) );
});

$( "[name*='fret']" ).change(function() {
	var f=($('#fret0').val()).replace(',','.');
	$('#fret0').val(f);
	var f=($('#fret1').val()).replace(',','.');
	$('#fret1').val(f);
	var f=($('#fret2').val()).replace(',','.');
	$('#fret2').val(f);	
	var f=($('#fret3').val()).replace(',','.');
	$('#fret3').val(f);
	var f=($('#fret4').val()).replace(',','.');
	$('#fret4').val(f);
	var f=($('#fret5').val()).replace(',','.');
	$('#fret5').val(f);
	var f=($('#fret6').val()).replace(',','.');
	$('#fret6').val(f);					

	
  $('#ftotretr').val(parseFloat( parseFloat( $('#fret0').val()) + parseFloat($('#fret1').val()) + parseFloat($('#fret2').val()) + parseFloat($('#fret3').val()) + parseFloat($('#fret4').val()) + parseFloat($('#fret5').val()) + parseFloat($('#fret6').val()) ).toFixed(2) );
  
});


}); 