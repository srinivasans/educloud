var OxOe87a=[""," ","=\x22","\x22","src","^[a-z]*:[/][/][^/]*","Edit","\x3CIMG border=\x220\x22 align=\x22absmiddle\x22 src=\x22","\x22 src_cetemp=\x22","\x22\x3E","ImageTable","IMG","length","className","dialogButton","onmouseover","CuteEditor_ColorPicker_ButtonOver(this)","onclick","insert(this)"];var editor=Window_GetDialogArguments(window);function attr(name,Ox7){if(!Ox7||Ox7==OxOe87a[0]){return OxOe87a[0];} ;return OxOe87a[1]+name+OxOe87a[2]+Ox7+OxOe87a[3];} ;function insert(img){if(img){var src=img[OxOe87a[4]];src=src.replace( new RegExp(OxOe87a[5],OxOe87a[0]),OxOe87a[0]);var Ox236=OxOe87a[0];if(editor.GetActiveTab()==OxOe87a[6]){Ox236=OxOe87a[7]+src+OxOe87a[8]+src+OxOe87a[9];} else {Ox236=OxOe87a[7]+src+OxOe87a[9];} ;editor.PasteHTML(Ox236);Window_CloseDialog(window);} ;} ;function do_Close(){Window_CloseDialog(window);} ;var ImageTable=Window_GetElement(window,OxOe87a[10],true);var images=ImageTable.getElementsByTagName(OxOe87a[11]);var len=images[OxOe87a[12]];for(var i=0;i<len;i++){var img=images[i];img[OxOe87a[13]]=OxOe87a[14];img[OxOe87a[15]]= new Function(OxOe87a[16]);img[OxOe87a[17]]= new Function(OxOe87a[18]);} ;