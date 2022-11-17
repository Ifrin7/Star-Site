function HideText() {
	var x = new Boolean(document.getElementById('text').hidden);
	if(x == true) {
          document.getElementById('text').hidden = false;
	}
	else if(x == false) {
	  document.getElementById('text').hidden = true;
	}

}
