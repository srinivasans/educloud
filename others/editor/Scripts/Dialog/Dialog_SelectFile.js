var OxO958d=["top","dialogArguments","opener","_dialog_arguments","document","onload","value","","uploader1","browse_Frame","contentWindow","btn_CreateDir","btn_zoom_in","btn_zoom_out","btn_Actualsize","divpreview","TargetUrl","Button1","Button2","editor","window","\x3Cbr\x3E",".",".jpeg",".jpg",".gif",".png","\x3CIMG src=\x27","\x27 width=\x27150\x27\x3E",".bmp","\x26nbsp;\x3Cembed src=\x22","\x22 quality=\x22high\x22 width=\x22150\x22 height=\x22150\x22 type=\x22application/x-shockwave-flash\x22 pluginspage=\x22http://www.macromedia.com/go/getflashplayer\x22\x3E\x3C/embed\x3E\x0A","\x26nbsp;",".swf",".avi",".mpg",".mp3",".mpeg","\x26nbsp;\x3Cembed name=\x22MediaPlayer1\x22 src=\x22","\x22 autostart=-1 showcontrols=-1  type=\x22application/x-mplayer2\x22 width=\x22150\x22 height=\x22150\x22 pluginspage=\x22http://www.microsoft.com/Windows/MediaPlayer\x22 \x3E\x3C/embed\x3E\x0A",".wav","URL: ","innerHTML","inp","zoom","style","display","none","wrapupPrompt","iepromptfield","body","div","id","IEPromptBox","promptBlackout","border","1px solid #b0bec7","backgroundColor","#f0f0f0","position","absolute","width","330px","zIndex","100","\x3Cdiv style=\x22width: 100%; padding-top:3px;background-color: #DCE7EB; font-family: verdana; font-size: 10pt; font-weight: bold; height: 22px; text-align:center; background:url(../Images/formbg2.gif) repeat-x left top;\x22\x3E","\x3C/div\x3E","\x3Cdiv style=\x22padding: 10px\x22\x3E","\x3CBR\x3E\x3CBR\x3E","\x3Cform action=\x22\x22 onsubmit=\x22return wrapupPrompt()\x22\x3E","\x3Cinput id=\x22iepromptfield\x22 name=\x22iepromptdata\x22 type=text size=46 value=\x22","\x22\x3E","\x3Cbr\x3E\x3Cbr\x3E\x3Ccenter\x3E","\x3Cinput type=\x22submit\x22 value=\x22\x26nbsp;\x26nbsp;\x26nbsp;","\x26nbsp;\x26nbsp;\x26nbsp;\x22\x3E","\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;\x26nbsp;","\x3Cinput type=\x22button\x22 onclick=\x22wrapupPrompt(true)\x22 value=\x22\x26nbsp;","\x26nbsp;\x22\x3E","\x3C/form\x3E\x3C/div\x3E","100px","left","offsetWidth","px","block","onmouseover","CuteEditor_ColorPicker_ButtonOver(this)"];function Window_FindDialogArguments(Ox90){var Ox12c=Ox90[OxO958d[0]];if(Ox12c[OxO958d[1]]){return Ox12c[OxO958d[1]];} ;var Ox12d=Ox12c[OxO958d[2]];if(Ox12d==null){return Ox12c[OxO958d[4]][OxO958d[3]];} ;var Ox349=Ox12d[OxO958d[4]][OxO958d[3]];if(Ox349==null){return Window_FindDialogArguments(Ox12d);} ;return Ox349;} ;function reset_hiddens(){} ;Event_Attach(window,OxO958d[5],reset_hiddens);function RequireFileBrowseScript(){} ;function reset_hiddens(){if(TargetUrl[OxO958d[6]]!=OxO958d[7]&&TargetUrl[OxO958d[6]]!=null){do_preview();} ;} ;RequireFileBrowseScript();var uploader1=Window_GetElement(window,OxO958d[8],true);var browse_Frame=Window_GetElement(window,OxO958d[9],true);browse_Frame=browse_Frame[OxO958d[10]];var btn_CreateDir=Window_GetElement(window,OxO958d[11],true);var btn_zoom_in=Window_GetElement(window,OxO958d[12],true);var btn_zoom_out=Window_GetElement(window,OxO958d[13],true);var btn_Actualsize=Window_GetElement(window,OxO958d[14],true);var divpreview=Window_GetElement(window,OxO958d[15],true);var TargetUrl=Window_GetElement(window,OxO958d[16],true);var Button1=Window_GetElement(window,OxO958d[17],true);var Button2=Window_GetElement(window,OxO958d[18],true);var arg=Window_FindDialogArguments(window);var editor=arg[OxO958d[19]];var editwin=arg[OxO958d[20]];var editdoc=arg[OxO958d[4]];do_preview();function do_preview(Ox176){var Ox1b;Ox1b=OxO958d[7];if(Ox176!=OxO958d[7]&&Ox176!=null){Ox1b=Ox176;} ;Ox1b=Ox1b+OxO958d[21];var Ox17f=TargetUrl[OxO958d[6]];if(Ox17f==OxO958d[7]){return ;} ;var Ox29d=Ox17f.substring(Ox17f.lastIndexOf(OxO958d[22])).toLowerCase();switch(Ox29d){case OxO958d[23]:;case OxO958d[24]:;case OxO958d[25]:;case OxO958d[26]:;case OxO958d[29]:Ox1b=Ox1b+OxO958d[27]+Ox17f+OxO958d[28];break ;;case OxO958d[33]:var Ox29e=OxO958d[30]+Ox17f+OxO958d[31];Ox1b=Ox1b+Ox29e+OxO958d[32];break ;;case OxO958d[34]:;case OxO958d[35]:;case OxO958d[36]:;case OxO958d[37]:;case OxO958d[40]:var Ox29f=OxO958d[38]+Ox17f+OxO958d[39];Ox1b=Ox1b+Ox29f+OxO958d[32];break ;;default:Ox1b=Ox1b+OxO958d[41]+TargetUrl[OxO958d[6]];break ;;} ;divpreview[OxO958d[42]]=Ox1b;} ;function do_insert(){var Ox34b=arg[OxO958d[43]];if(Ox34b){try{Ox34b[OxO958d[6]]=TargetUrl[OxO958d[6]];} catch(x){} ;} ;Window_SetDialogReturnValue(window,TargetUrl.value);Window_CloseDialog(window);} ;function do_Close(){Window_SetDialogReturnValue(window,null);Window_CloseDialog(window);} ;function Zoom_In(){if(divpreview[OxO958d[45]][OxO958d[44]]!=0){divpreview[OxO958d[45]][OxO958d[44]]*=1.2;} else {divpreview[OxO958d[45]][OxO958d[44]]=1.2;} ;} ;function Zoom_Out(){if(divpreview[OxO958d[45]][OxO958d[44]]!=0){divpreview[OxO958d[45]][OxO958d[44]]*=0.8;} else {divpreview[OxO958d[45]][OxO958d[44]]=0.8;} ;} ;function Actualsize(){divpreview[OxO958d[45]][OxO958d[44]]=1;do_preview();} ;function ResetFields(){TargetUrl[OxO958d[6]]=OxO958d[7];} ;if(!Browser_IsWinIE()){btn_zoom_in[OxO958d[45]][OxO958d[46]]=btn_zoom_out[OxO958d[45]][OxO958d[46]]=btn_Actualsize[OxO958d[45]][OxO958d[46]]=OxO958d[47];} ;if(!Browser_IsWinIE()){btn_zoom_in[OxO958d[45]][OxO958d[46]]=btn_zoom_out[OxO958d[45]][OxO958d[46]]=btn_Actualsize[OxO958d[45]][OxO958d[46]]=OxO958d[47];} else {} ;if(Browser_IsIE7()){var _dialogPromptID=null;function IEprompt(Ox10d,Ox10e,Ox10f){that=this;this[OxO958d[48]]=function (Ox110){val=document.getElementById(OxO958d[49])[OxO958d[6]];_dialogPromptID[OxO958d[45]][OxO958d[46]]=OxO958d[47];document.getElementById(OxO958d[49])[OxO958d[6]]=OxO958d[7];if(Ox110){val=OxO958d[7];} ;Ox10d(val);return false;} ;if(Ox10f==undefined){Ox10f=OxO958d[7];} ;if(_dialogPromptID==null){var Ox111=document.getElementsByTagName(OxO958d[50])[0];tnode=document.createElement(OxO958d[51]);tnode[OxO958d[52]]=OxO958d[53];Ox111.appendChild(tnode);_dialogPromptID=document.getElementById(OxO958d[53]);tnode=document.createElement(OxO958d[51]);tnode[OxO958d[52]]=OxO958d[54];Ox111.appendChild(tnode);_dialogPromptID[OxO958d[45]][OxO958d[55]]=OxO958d[56];_dialogPromptID[OxO958d[45]][OxO958d[57]]=OxO958d[58];_dialogPromptID[OxO958d[45]][OxO958d[59]]=OxO958d[60];_dialogPromptID[OxO958d[45]][OxO958d[61]]=OxO958d[62];_dialogPromptID[OxO958d[45]][OxO958d[63]]=OxO958d[64];} ;var Ox112=OxO958d[65]+InputRequired+OxO958d[66];Ox112+=OxO958d[67]+Ox10e+OxO958d[68];Ox112+=OxO958d[69];Ox112+=OxO958d[70]+Ox10f+OxO958d[71];Ox112+=OxO958d[72];Ox112+=OxO958d[73]+OK+OxO958d[74];Ox112+=OxO958d[75];Ox112+=OxO958d[76]+Cancel+OxO958d[77];Ox112+=OxO958d[78];_dialogPromptID[OxO958d[42]]=Ox112;_dialogPromptID[OxO958d[45]][OxO958d[0]]=OxO958d[79];_dialogPromptID[OxO958d[45]][OxO958d[80]]=parseInt((document[OxO958d[50]][OxO958d[81]]-315)/2)+OxO958d[82];_dialogPromptID[OxO958d[45]][OxO958d[46]]=OxO958d[83];var Ox113=document.getElementById(OxO958d[49]);try{var Ox114=Ox113.createTextRange();Ox114.collapse(false);Ox114.select();} catch(x){Ox113.focus();} ;} ;} ;if(btn_CreateDir){btn_CreateDir[OxO958d[84]]= new Function(OxO958d[85]);} ;if(btn_zoom_in){btn_zoom_in[OxO958d[84]]= new Function(OxO958d[85]);} ;if(btn_zoom_out){btn_zoom_out[OxO958d[84]]= new Function(OxO958d[85]);} ;if(btn_Actualsize){btn_Actualsize[OxO958d[84]]= new Function(OxO958d[85]);} ;