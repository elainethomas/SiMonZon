//Click Button Pop up Box

document.getElementById("youWantThis").innerHTML = allTehAds();
function allTehAds() {
	var a;
	if (confirm("Ready to Reclaim the Senate?") === true) {
		a = "All Paws In!  Let's Focus Our Thalaron on Earth!";
	} else {
		a = "Noo!! Why You Cancel?";
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


