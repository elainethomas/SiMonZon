//Click Button Pop up Box
/**
 function allTehAds() {
  var a;
  if (confirm("All Paws In?") === true) {
    a = function moarAds() {
      var b;
      if (confirm("Fur Reals?") === true) {
        b = "All Paws In!";
      } else {
        b = "NooOoooo!!";
      }
      document.getElementById("quiereThis").innerHTML = a;
    };
  } else {
    a = "Why you cancel?";
  }
  document.getElementById("youWantThis").innerHTML = a;
}

 **/

//Click Button Pop up Box

document.getElementById("youWantThis").innerHTML = allTehAds();
function allTehAds() {
	var a;
	if (confirm("All Paws In?") === true) {
		a = function moarAds() {counter +=1;};
		moarAds();
		return counter;
	}
}

/**
 var b;
 if (confirm("Fur Reals?") === true) {
        b = "All Paws In!";
      } else {
        b = "NooOoooo!!";
      }
 document.getElementById("quiereThis").innerHTML = a;
 };
 } else {
    a = "Why you cancel?";
  }

 }
 **/


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