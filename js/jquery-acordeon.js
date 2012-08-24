$(function(){

	// Accordion
	$("#accordion").accordion({ header: "h5" });

	// Tabs
	$('#tabs').tabs();

	// Dialog
	$('#dialog').dialog({
		autoOpen: false,
		width: 600,
		buttons: {
			"Ok": function() {
				$(this).dialog("close");
			},
			"Cancel": function() {
				$(this).dialog("close");
			}
		}
	});

	// Dialog Link
	$('#dialog_link').click(function(){
		$('#dialog').dialog('open');
		return false;
	});

	// Datepicker
	$('#datepicker').datepicker({
		inline: true
	});

	// Slider
	$('#slider').slider({
		range: true,
		values: [17, 67]
	});

	// Progressbar
	$("#progressbar").progressbar({
		value: 20
	});

	//hover states on the static widgets
	$('#dialog_link, ul#icons li').hover(
		function() { $(this).addClass('ui-state-hover'); },
		function() { $(this).removeClass('ui-state-hover'); }
	);



	/********************************
	Efecto mostrar
	*********************************/

	// run the currently selected effect
	function runEffect() {
		// run the effect
		$( "#effect" ).show( "drop", 500, callback );
	};

	//callback function to bring a hidden box back
	function callback() {
		setTimeout(function() {
				$( "#effect:visible" ).removeAttr( "style" ).fadeOut();
			}, 100000 
		);
	};

	// set effect from select menu value
	$( ".effectdrop" ).click(function() {
		runEffect();
		return false;
	});

	$( "#effect" ).hide();

	/***********************************
	Efecto ocultar
	************************************/

	// run the currently selected effect
	function runEffect() {

		// run the effect
		$( "#effect" ).hide( "drop", 1000, callback );
	};

	// callback function to bring a hidden box back
	function callback() {
		setTimeout(function() {
			$( "#effect" ).removeAttr( "style" ).hide().fadeIn();
			}, 1000 
		);
	};

	// set effect from select menu value
	$( ".buttonclose" ).click(function() {
		runEffect();
		return false;
	});
	


});
