var config = {
  '.chosen-select'           : {},
  '.chosen-select-deselect'  : { allow_single_deselect: true },
  '.chosen-select-no-single' : { disable_search_threshold: 10 },
  '.chosen-select-no-results': { no_results_text: 'Oops, nothing found!' },
  '.chosen-select-rtl'       : { rtl: true },
  '.chosen-select-width'     : { width: '95%' }
}
for (var selector in config) {
  $(selector).chosen(config[selector]);
}

$(".bouton").mouseenter(function(){		
		var beep= new Audio();
		beep.src="../src/son/survole.mp3";
		beep.play();
		
	});

	$(".bouton").click(function(){		
		var beep= new Audio();
		beep.src="../src/son/clic.mp3";
		beep.play();
		
	});
	$(".bouton1").mouseenter(function(){		
		var beep= new Audio();
		beep.src="../src/son/survole.mp3";
		beep.play();
		
	});

	$(".bouton1").click(function(){		
		var beep= new Audio();
		beep.src="../src/son/clic.mp3";
		beep.play();
		
	});