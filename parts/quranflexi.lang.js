function localize(){
	var userlang = localStorage.getItem("lang");
	switch(userlang){
		case("en") :
			translate("lang_settings", "Settings");
			translate("lang_navigation", "Navigation");
			translate("lang_surah", "Surah");
			translate("lang_surah2", "Select surah...");
			translate("lang_language", "Language");
			translate("lang_artextsize", "Arabic text size");
			translate("lang_transtextsize", "Translation text size");
			translate("lang_theme", "Theme");
			translate("lang_language2", "Select language...");
			translate("lang_artextsize2", "Select text size...");
			translate("lang_transtextsize2", "Select text size...");
			translate("lang_theme2", "Select theme...");
			translate("lang_qurantranslation", "Quran translation");
			translate("lang_quicklinks", "Quick links");
			break;
		case("id") :
			translate("lang_settings", "Pengaturan");
			translate("lang_navigation", "Navigasi");
			translate("lang_surah", "Surah");
			translate("lang_surah2", "Pilih surah...");
			translate("lang_language", "Bahasa");
			translate("lang_artextsize", "Ukuran teks Arab");
			translate("lang_transtextsize", "Ukuran teks terjemahan");
			translate("lang_theme", "Tampilan");
			translate("lang_language2", "Pilih bahasa...");
			translate("lang_artextsize2", "Pilih ukuran teks...");
			translate("lang_transtextsize2", "Pilih ukuran teks...");
			translate("lang_theme2", "Pilih tampilan...");
			translate("lang_qurantranslation", "Terjemahan");
			translate("lang_quicklinks", "Link");
			break;
		case("ja") :
			translate("lang_settings", "設定");
			translate("lang_navigation", "ナビゲーション");
			translate("lang_surah", "章");
			translate("lang_surah2", "章を選択...");
			translate("lang_language", "言語");
			translate("lang_artextsize", "アラビア語のテキストサイズ");
			translate("lang_transtextsize", "翻訳テキストサイズ");
			translate("lang_theme", "テーマ");
			translate("lang_language2", "言語を選択する...");
			translate("lang_artextsize2", "テキストサイズを選択...");
			translate("lang_transtextsize2", "テキストサイズを選択...");
			translate("lang_theme2", "テーマを選択...");
			translate("lang_qurantranslation", "翻訳");
			translate("lang_quicklinks", "リンク");
			break;
		case("fr") :
			translate("lang_settings", "Paramètres");
			translate("lang_navigation", "La Navigation");
			translate("lang_surah", "Chapitres");
			translate("lang_surah2", "Sélectionnez le chapitre...");
			translate("lang_language", "La Langue");
			translate("lang_artextsize", "Taille du texte Arabe");
			translate("lang_transtextsize", "Taille du texte de traduction");
			translate("lang_theme", "Thème");
			translate("lang_language2", "Choisir la langue...");
			translate("lang_artextsize2", "Sélectionnez la taille de la police...");
			translate("lang_transtextsize2", "Sélectionnez la taille de la police...");
			translate("lang_theme2", "sélectionne un thème...");
			translate("lang_qurantranslation", "Traduction de quran");
			translate("lang_quicklinks", "Des liens");
			break;
		default :
			translate("lang_settings", "Settings");
			translate("lang_navigation", "Navigation");
			translate("lang_surah", "Surah");
			translate("lang_surah2", "Select surah...");
			translate("lang_language", "Language");
			translate("lang_artextsize", "Arabic text size");
			translate("lang_transtextsize", "Translation text size");
			translate("lang_theme", "Theme");
			translate("lang_language2", "Select language...");
			translate("lang_artextsize2", "Select text size...");
			translate("lang_transtextsize2", "Select text size...");
			translate("lang_theme2", "Select theme...");
			translate("lang_qurantranslation", "Quran translation");
			translate("lang_quicklinks", "Quick links");
			break;
	}
}

function localizeHomePage(){
	var userlang = localStorage.getItem("lang");
	switch(userlang){
		case("en") :
			translate("lang_search", "Search");
			translate("lang_searchin", "Search in...");
			translate("lang_quran", "Quran");
			translate("lang_translation", "Translation");
			translate("lang_diacriticsnote", "*Don't forget to include the diacritics if you want to search for Arabic word.");
			break;
		case("id") :
			translate("lang_search", "Cari");
			translate("lang_searchin", "Cari di...");
			translate("lang_quran", "Quran");
			translate("lang_translation", "Terjemahan");
			translate("lang_diacriticsnote", "*Sertakan harokat lengkap jika mencari kata berbahasa Arab.");
			break;
		case("ja") :
			translate("lang_search", "サーチ");
			translate("lang_searchin", "検索で...");
			translate("lang_quran", "コーラン");
			translate("lang_translation", "翻訳");
			translate("lang_diacriticsnote", "*アラビア語を検索する場合は発音区別記号を忘れないでください。");
			break;
		case("fr") :
			translate("lang_search", "Chercher");
			translate("lang_searchin", "Rechercher dans...");
			translate("lang_quran", "Coran");
			translate("lang_translation", "Traduction");
			translate("lang_diacriticsnote", "*N'oubliez pas d'inclure les diacritiques si vous voulez rechercher un mot Arabe.");
			break;
		default :
			translate("lang_search", "Search");
			translate("lang_searchin", "Search in...");
			translate("lang_quran", "Quran");
			translate("lang_translation", "Translation");
			translate("lang_diacriticsnote", "*Don't forget to include the diacritics if you want to search for Arabic word.");
			break;
	}
}

function localizeSearchPage(){
	var userlang = localStorage.getItem("lang");
	switch(userlang){
		case("en") :
			translate("lang_searchresult", "Search result:");
			break;
		case("id") :
			translate("lang_searchresult", "Hasil pencarian:");
			break;
		case("ja") :
			translate("lang_searchresult", "検索結果：");
			break;
		case("fr") :
			translate("lang_searchresult", "Résultats de la recherche:");
			break;
		default :
			translate("lang_searchresult", "Search result:");
			break;
	}
}

function setLang(){
	var selectedLang = document.getElementById("languageOptions").options[document.getElementById("languageOptions").selectedIndex].value;
	localStorage.setItem("lang", selectedLang);
	window.location.href = "https://ciihuy.com/qurankarim/index.php?lang="+selectedLang;
}

function setLang2(x){
	localStorage.setItem("lang", x);
}

function translate(element, translated){
	document.getElementById(element).innerHTML = translated;
}