var OxOd847=["stringSearch","stringReplace","MatchWholeWord","MatchCase","document","checked","length","value","Nothing to search.\x0APlease enter some text in the field labeled Find what:","selection","body","type","Control","text","Finished Searching the document. Would you like to start again from the top?","","textedit"," : ","Please use replace funtion."];var editwin=Window_GetDialogArguments(window);var stringSearch=Window_GetElement(window,OxOd847[0],true);var stringReplace=Window_GetElement(window,OxOd847[1],true);var MatchWholeWord=Window_GetElement(window,OxOd847[2],true);var MatchCase=Window_GetElement(window,OxOd847[3],true);var editdoc=editwin[OxOd847[4]];function get_ie_matchtype(){var Ox20d=0;var Ox20e=0;var Ox20f=0;if(MatchCase[OxOd847[5]]){Ox20e=4;} ;if(MatchWholeWord[OxOd847[5]]){Ox20f=2;} ;Ox20d=Ox20e+Ox20f;return (Ox20d);} ;function checkInputString(){if(stringSearch[OxOd847[7]][OxOd847[6]]<1){alert(OxOd847[8]);return false;} else {return true;} ;} ;function IsMatchSearchValue(Ox1b){if(!Ox1b){return false;} ;if(stringSearch[OxOd847[7]]==Ox1b){return true;} ;if(MatchCase[OxOd847[5]]){return false;} ;return stringSearch[OxOd847[7]].toLowerCase()==Ox1b.toLowerCase();} ;var _ie_range=null;function IE_Restore(){editwin.focus();if(_ie_range!=null){_ie_range.select();} ;} ;function IE_Save(){editwin.focus();_ie_range=editdoc[OxOd847[9]].createRange();} ;function MoveToBodyStart(){if(Browser_UseIESelection()){range=document[OxOd847[10]].createTextRange();range.collapse(true);range.select();IE_Save();} else {editwin.getSelection().collapse(editdoc.body,0);} ;} ;function DoFind(){if(Browser_UseIESelection()){IE_Restore();var Ox20=editdoc[OxOd847[9]];if(Ox20[OxOd847[11]]==OxOd847[12]){MoveToBodyStart();} ;var Ox114=Ox20.createRange();Ox114.collapse(false);if(Ox114.findText(stringSearch.value,1000000000,get_ie_matchtype())){Ox114.select();IE_Save();return true;} ;} else {var Ox114=editwin.getSelection().getRangeAt(0);if(editwin.find(stringSearch.value,MatchCase.checked,false,false,MatchWholeWord.checked,false,false)){return true;} ;} ;} ;function DoReplace(){if(Browser_UseIESelection()){IE_Restore();var Ox20=editdoc[OxOd847[9]];if(Ox20[OxOd847[11]]!=OxOd847[12]){var Ox114=Ox20.createRange();if(IsMatchSearchValue(Ox114.text)){Ox114[OxOd847[13]]=stringReplace[OxOd847[7]];Ox114.collapse(false);IE_Save();return true;} ;} ;} else {var Ox20=editwin.getSelection();if(IsMatchSearchValue(Ox20.toString())){Ox20.deleteFromDocument();Ox20.getRangeAt(0).insertNode(editdoc.createTextNode(stringReplace.value));Ox20.getRangeAt(0).collapse(false);return true;} ;} ;return false;} ;function FindTxt(){if(!checkInputString()){return false;} ;while(true){if(DoFind()){return ;} ;if(!confirm(OxOd847[14])){return ;} ;MoveToBodyStart();} ;} ;function ReplaceTxt(){if(!checkInputString()){return ;} ;DoReplace();FindTxt();} ;function ReplaceAllTxt(){if(!checkInputString()){return ;} ;var Ox21b=0;var msg=OxOd847[15];MoveToBodyStart();if(Browser_UseIESelection()){var Ox20=editdoc[OxOd847[9]];if(Ox20[OxOd847[11]]==OxOd847[12]){MoveToBodyStart();} ;var Ox21c=Ox20.createRange();var Ox21b=0;var msg=OxOd847[15];Ox21c.expand(OxOd847[16]);Ox21c.collapse();Ox21c.select();while(Ox21c.findText(stringSearch.value,1000000000,get_ie_matchtype())){Ox21c.select();Ox21c[OxOd847[13]]=stringReplace[OxOd847[7]];Ox21b++;} ;if(Ox21b==0){msg=WordNotFound;} else {msg=WordReplaced+OxOd847[17]+Ox21b;} ;alert(msg);} else {if((stringReplace[OxOd847[7]]).indexOf(stringSearch.value)==-1){DoFind();while(DoReplace()){Ox21b++;DoFind();FindTxt();} ;if(Ox21b==0){msg=WordNotFound;} else {msg=WordReplaced+OxOd847[17]+Ox21b;} ;alert(msg);} else {FindTxt();alert(OxOd847[18]);} ;} ;} ;