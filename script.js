//Click Button Pop up Box
function allTehAds() {
	var a;
	if (confirm("All Paws In?") === true) {
		a = "To Earth We Go!";
	} else {
		a = "Why you cancel?";
	}
	document.getElementById("youWantThis").innerHTML = a;
}


//onchange HTML show phrases
function sentiments() {
	var x = document.getElementById("selektor").value;
	document.getElementById("youNeedThis").innerHTML = "SiMonZon says: " + x;
}



/**
 * This is just my scratch pad :>
 *
 * "Si'mon-zon guarantees you will be safe in your litterbox, no more sneak attacks from the Ambassadors of Sirius.";
 *
 *
 **/