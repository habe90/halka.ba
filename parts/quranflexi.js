var navClicked = false;
function togglenav(){
	if(!navClicked){
		document.getElementById("settings").style.display = "block";
		navClicked = true;
		return;
	}else{
		document.getElementById("settings").style.display = "none";
		navClicked = false;
		return;
	}
}

if(localStorage.getItem("lang") === null){
	localStorage.setItem("lang", "en");
}
var lang = localStorage.getItem("lang");

function navigateGo(){
	var surahToGo = document.getElementById("surahOptions").options[document.getElementById("surahOptions").selectedIndex].value;
	if(surahToGo != "") window.location.href = "http://185.50.56.145/hadis/sura_detaljno.php?lang=" + lang + "&surah=" + surahToGo;
}

function setFontSize(x, y){	
	var mySelect, myClass;
	if(x == 1){
		mySelect = "qts";
		myClass = ".qurantext";
	}else{
		mySelect = "tts";
		myClass = ".translationtext";
	}
	var newFontSize;
	if(y == 0) newFontSize = document.getElementById(mySelect).options[document.getElementById(mySelect).selectedIndex].value;
	else newFontSize = y;
	var elems = document.querySelectorAll(myClass);
	var index = 0, length = elems.length;
    for (; index < length; index++) {
        elems[index].style.fontSize = newFontSize + "px";
    }
	localStorage.setItem(mySelect, newFontSize);
}

function setTheme(x, y){
	var theme, bar, bgColor, quranColor, transColor;
	if(x == 0 && y != ""){
		theme = y;
	}else if(x == 1 && y == ""){
		theme = document.getElementById("themeOptions").options[document.getElementById("themeOptions").selectedIndex].value;
	}
	if(theme == "default"){
		bar = "#bc2b2b";
		bgColor = "#f4f4f4";
		quranColor = "#780000";
		transColor = "#a70000";
	}if(theme == "bright"){
		bar = "#515151";
		bgColor = "white";
		quranColor = "#4b4b4b";
		transColor = "#696969";
	}else if(theme == "dark"){
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

function applyStyle(){
	if(localStorage.getItem("qts") === null) localStorage.setItem("qts","30");
	if(localStorage.getItem("tts") === null) localStorage.setItem("tts","16");
	if(localStorage.getItem("theme") === null) localStorage.setItem("theme","default");
	var qts = localStorage.getItem("qts");
	var tts = localStorage.getItem("tts");
	var theme = localStorage.getItem("theme");
	setFontSize(1, parseInt(qts));
	setFontSize(2, parseInt(tts));
	setTheme(0, theme);	
	document.getElementById("preloading").style.display = "none";
	document.getElementById("thecontent").style.display = "block";
}

function scrollToTop() {
    document.body.scrollTop = 0; // For Chrome, Safari and Opera 
    document.documentElement.scrollTop = 0; // For IE and Firefox
}

function getnavigatedverse(){
	var x = document.getElementById("versenavigator").value;
	x = parseInt(x);
	if(x != "") scrollToVerse(x);
}

function scrollToVerse(x){
	document.getElementById('versenum'+x).scrollIntoView();
	window.scrollBy(0, -100);
}

function showDonateBtn(x){
	if(x == 1){
		document.write("<p align='center'><a href='http://185.50.56.145/hadis/sura_detaljno.php?donate'><img src='donate.png' width='114px' /></a></p>");
	}
}

function goToSurahList(){
	window.location = "http://185.50.56.145/hadis/sura_detaljno.php?lang=" + lang;
}