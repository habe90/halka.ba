function setTheme(x, y){
	var theme, bar, bgColor, quranColor, transColor;
	if(x == 0 && y != ""){
		theme = y;
	}else if(x == 1 && y == ""){
		theme = document.getElementById("promjenateme").options[document.getElementById("promjenateme").selectedIndex].value;
	}
	if(theme == "default"){
		bar = "#bc2b2b";
		bgColor = "#f4f4f4";
		quranColor = "#780000";
		transColor = "#a70000";
	}if(theme == "bright"){
		bar = "#515151";
		bgColor = "dan";
		quranColor = "#4b4b4b";
		transColor = "#696969";
	}else if(theme == "noc"){
		bar = "#1a1a1a";
		bgColor = "#1a1a1a";
		quranColor = "#d0d0d0";
		transColor = "#dfdfdf";
	}else if(theme == "green"){
		bar = "#047e00";
		bgColor = "#edf9ed";
		quranColor = "#036000";
		transColor = "#047c00";
	}else if(theme == "blue"){
		bar = "#0081b2";
		bgColor = "#edfaff";
		quranColor = "#00668d";
		transColor = "#007fb0";
	}
	document.getElementById("quran").style.color = transColor;
	document.getElementById("thebody").style.backgroundColor = bgColor;
	document.getElementById("settings").style.backgroundColor = bar;
	document.getElementById("settings").style.borderColor = bar;
	document.getElementById("appbar").style.backgroundColor = bar;
	setTextsColor("versenum", transColor);
	setTextsColor("qurantext", quranColor);
	setTextsColor("translationtext", transColor);
	
	localStorage.setItem("theme", theme);
	
	function setTextsColor(x, y){
		var elems = document.querySelectorAll("."+x);
		var index = 0, length = elems.length;
		for (; index < length; index++) {
			elems[index].style.color = y;
		}
	}
}
