var OxO9137=["INPUT","TEXTAREA","DIV","SPAN","","contentWindow","innerHTML","body","document","length","type","text","id","isContentEditable","showModalDialog","?","?Modal=true","\x26Modal=true","dialogHeight:340px; dialogWidth:395px; edge:Raised; center:Yes; help:No; resizable:Yes; status:No; scroll:No","newWindow","height=300,width=400,scrollbars=no,resizable=no,toolbars=no,status=no,menubar=no,location=no","ElementIndex","dialogArguments","window","opener","value","SpellMode","start","suggest","end","SpellingForm","checkElements","innerText","StatusText","Spell Checking Text ...","CurrentText","WordIndex","Spell Check Complete","selectedIndex","ReplacementWord","form","options"];var showCompleteAlert=true;var tagGroup= new Array(OxO9137[0],OxO9137[1],OxO9137[2],OxO9137[3]);var checkElements= new Array();function getText(Oxe8){var Oxe9=document.getElementById(checkElements[Oxe8]);var Oxea=OxO9137[4];var Oxeb=document.getElementById(Oxe9.id);if(Oxeb[OxO9137[5]]){Oxea=Oxeb[OxO9137[5]][OxO9137[8]][OxO9137[7]][OxO9137[6]];} else {Oxea=Oxeb[OxO9137[8]][OxO9137[7]][OxO9137[6]];} ;return Oxea;} ;function setText(Oxe8,Oxed){var Oxe9=document.getElementById(checkElements[Oxe8]);var Oxeb=document.getElementById(Oxe9.id);if(Oxeb[OxO9137[5]]){Oxeb[OxO9137[5]][OxO9137[8]][OxO9137[7]][OxO9137[6]]=Oxed;} else {Oxeb[OxO9137[8]][OxO9137[7]][OxO9137[6]]=Oxed;} ;} ;function checkSpelling(){checkElements= new Array();for(var i=0;i<tagGroup[OxO9137[9]];i++){var Oxef=tagGroup[i];var Oxf0=document.getElementsByTagName(Oxef);for(var Oxf1=0;Oxf1<Oxf0[OxO9137[9]];Oxf1++){if((Oxef==OxO9137[0]&&Oxf0[Oxf1][OxO9137[10]]==OxO9137[11])||Oxef==OxO9137[1]){checkElements[checkElements[OxO9137[9]]]=Oxf0[Oxf1][OxO9137[12]];} else {if((Oxef==OxO9137[2]||Oxef==OxO9137[3])&&Oxf0[Oxf1][OxO9137[13]]){checkElements[checkElements[OxO9137[9]]]=Oxf0[Oxf1][OxO9137[12]];} ;} ;} ;} ;openSpellChecker();} ;function checkSpellingById(Oxaa,Oxf3){checkElements= new Array();checkElements[checkElements[OxO9137[9]]]=Oxaa;openSpellChecker(Oxf3);} ;function checkElementSpelling(Oxe9){checkElements= new Array();checkElements[checkElements[OxO9137[9]]]=Oxe9[OxO9137[12]];openSpellChecker();} ;function openSpellChecker(Oxf3){if(window[OxO9137[14]]){var Oxf6;if(Oxf3.indexOf(OxO9137[15])==-1){Oxf6=OxO9137[16];} else {Oxf6=OxO9137[17];} ;var Oxf7=window.showModalDialog(Oxf3+Oxf6,window,OxO9137[18]);} else {var Oxf8=window.open(Oxf3,OxO9137[19],OxO9137[20]);} ;} ;var iElementIndex=-1;var parentWindow;function initialize(){iElementIndex=parseInt(document.getElementById(OxO9137[21]).value);if(parent[OxO9137[23]][OxO9137[22]]){parentWindow=parent[OxO9137[23]][OxO9137[22]];} else {if(top[OxO9137[24]]){parentWindow=top[OxO9137[24]];} ;} ;var Oxfc=document.getElementById(OxO9137[26])[OxO9137[25]];switch(Oxfc){case OxO9137[27]:break ;;case OxO9137[28]:updateText();break ;;case OxO9137[29]:updateText();;default:if(loadText()){document.getElementById(OxO9137[30]).submit();} else {endCheck();} ;break ;;} ;} ;function loadText(){if(!parentWindow[OxO9137[8]]){return false;} ;for(++iElementIndex;iElementIndex<parentWindow[OxO9137[31]][OxO9137[9]];iElementIndex++){var Oxfe=parentWindow.getText(iElementIndex);if(Oxfe[OxO9137[9]]>0){updateSettings(Oxfe,0,iElementIndex,OxO9137[27]);document.getElementById(OxO9137[33])[OxO9137[32]]=OxO9137[34];return true;} ;} ;return false;} ;function updateSettings(Ox100,Ox101,Ox102,Ox103){document.getElementById(OxO9137[35])[OxO9137[25]]=Ox100;document.getElementById(OxO9137[36])[OxO9137[25]]=Ox101;document.getElementById(OxO9137[21])[OxO9137[25]]=Ox102;document.getElementById(OxO9137[26])[OxO9137[25]]=Ox103;} ;function updateText(){if(!parentWindow[OxO9137[8]]){return false;} ;var Oxfe=document.getElementById(OxO9137[35])[OxO9137[25]];parentWindow.setText(iElementIndex,Oxfe);} ;function endCheck(){if(showCompleteAlert){alert(OxO9137[37]);} ;closeWindow();} ;function closeWindow(){top.close();} ;function changeWord(Oxe9){var Ox108=Oxe9[OxO9137[38]];Oxe9[OxO9137[40]][OxO9137[39]][OxO9137[25]]=Oxe9[OxO9137[41]][Ox108][OxO9137[25]];} ;