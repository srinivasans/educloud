var OxO46d1=["head","script","language","javascript","type","text/javascript","src","id","undefined","Microsoft.XMLHTTP","readyState","onreadystatechange","","document","length","element \x27","\x27 not found","returnValue","preventDefault","cancelBubble","stopPropagation","onchange","oninitialized","command","commandui","commandvalue","oncommand","string","_fireEventFunction","event","parentNode","_IsCuteEditor","True","readOnly","_IsRichDropDown","null","value","selectedIndex","nodeName","TR","cells","display","style","nextSibling","innerHTML","\x3Cimg src=\x22","/images/t-minus.gif\x22\x3E","onclick","CuteEditor_CollapseTreeDropDownItem(this,\x22","\x22)","none","/images/t-plus.gif\x22\x3E","CuteEditor_ExpandTreeDropDownItem(this,\x22","//TODO: event not found? throw error ?","all","UNSELECTABLE","on","tabIndex","-1","contentWindow","contentDocument","parentWindow","frames","frameElement","//TODO:frame contentWindow not found?","caller","arguments","parent","top","opener","srcElement","target","//TODO: srcElement not found? throw error ?","fromElement","relatedTarget","toElement","keyCode","clientX","clientY","offsetX","offsetY","button","ctrlKey","altKey","shiftKey","CuteEditor_GetEditor(this).ExecImageCommand(this.getAttribute(\x27Command\x27),this.getAttribute(\x27CommandUI\x27),this.getAttribute(\x27CommandArgument\x27),this)","CuteEditor_GetEditor(this).PostBack(this.getAttribute(\x27Command\x27))","this.onmouseout();CuteEditor_GetEditor(this).DropMenu(this.getAttribute(\x27Group\x27),this)","ResourceDir","Theme","/Themes/","/Images/all.png","/Images/blank2020.gif","IMG","alt","title","Command","Group","ThemeIndex","width","20px","height","backgroundImage","url(",")","backgroundPosition","0 -","px","className","separator","CuteEditorButton","onmouseover","CuteEditor_ButtonCommandOver(this)","onmouseout","CuteEditor_ButtonCommandOut(this)","onmousedown","CuteEditor_ButtonCommandDown(this)","onmouseup","CuteEditor_ButtonCommandUp(this)","oncontextmenu","ondragstart","PostBack","ondblclick","_ToolBarID","_CodeViewToolBarID","_FrameID"," CuteEditorFrame"," CuteEditorToolbar","buttonInitialized","isover","CuteEditorButtonOver","CuteEditorButtonDown","CuteEditorDown","border","solid 1px #0A246A","backgroundColor","#b6bdd2","padding","1px","solid 1px #f5f5f4","inset 1px","IsCommandDisabled","CuteEditorButtonDisabled","IsCommandActive","CuteEditorButtonActive","(","href","location",",DanaInfo=",",","+","scriptProperties","GetScriptProperty","/Scripts/IE_Implementation/CuteEditorImplementation.js?i=1","CuteEditorImplementation","function","GET","\x26getModified=1","loadScript","status","Failed to load impl time!","cursor","body","InitializeCode","block","contentEditable","no-drop","/Scripts/resource.php","?type=license\x26_ver=","Failed to load editor license data.","responseText","0","1","2","3","4","5","6","7","8","9","A","B","C","D","E","F","0000000000000840",";","/",":","//",".","www","?type=serverip\x26_ver=","Failed to load editor license info!","You are using an incorrect license file.","Invalid lcparts count:","Invalid product version.","Invalid license type.","(0) license expired!","(0) only localhost!","(1) host not match!","(2) ip not match!","(3) host not match!","(4) license expired!","License Error : "];function include(Ox17e,Ox17f){var Ox180=document.getElementsByTagName(OxO46d1[0]).item(0);var Ox181=document.getElementById(Ox17e);if(Ox181){Ox180.removeChild(Ox181);} ;var Ox182=document.createElement(OxO46d1[1]);Ox182.setAttribute(OxO46d1[2],OxO46d1[3]);Ox182.setAttribute(OxO46d1[4],OxO46d1[5]);Ox182.setAttribute(OxO46d1[6],Ox17f);Ox182.setAttribute(OxO46d1[7],Ox17e);Ox180.appendChild(Ox182);} ;function CreateXMLHttpRequest(){try{if( typeof (XMLHttpRequest)!=OxO46d1[8]){return  new XMLHttpRequest();} ;if( typeof (ActiveXObject)!=OxO46d1[8]){return  new ActiveXObject(OxO46d1[9]);} ;} catch(x){return null;} ;} ;function LoadXMLAsync(Ox94d,Ox17f,Ox125,Ox94e){var Ox7ac=CreateXMLHttpRequest();function Ox94f(){if(Ox7ac[OxO46d1[10]]!=4){return ;} ;Ox7ac[OxO46d1[11]]= new Function();var Ox187=Ox7ac;Ox7ac=null;Ox125(Ox187);} ;Ox7ac[OxO46d1[11]]=Ox94f;Ox7ac.open(Ox94d,Ox17f,true);Ox7ac.send(Ox94e||OxO46d1[12]);} ;function Window_GetElement(Ox90,Oxaa,Ox130){var Ox131=Ox90[OxO46d1[13]].getElementById(Oxaa);if(Ox131){return Ox131;} ;var Ox1f=Ox90[OxO46d1[13]].getElementsByName(Oxaa);if(Ox1f[OxO46d1[14]]>0){return Ox1f.item(0);} ;if(Ox130){throw ( new Error(OxO46d1[15]+Oxaa+OxO46d1[16]));} ;return null;} ;function Event_PreventDefault(Ox137){Ox137=Event_GetEvent(Ox137);Ox137[OxO46d1[17]]=false;if(Ox137[OxO46d1[18]]){Ox137.preventDefault();} ;} ;function Event_CancelBubble(Ox137){Ox137=Event_GetEvent(Ox137);Ox137[OxO46d1[19]]=true;if(Ox137[OxO46d1[20]]){Ox137.stopPropagation();} ;return false;} ;function Event_CancelEvent(Ox137){Ox137=Event_GetEvent(Ox137);Event_PreventDefault(Ox137);return Event_CancelBubble(Ox137);} ;function CuteEditor_AddMainMenuItems(Ox54a){} ;function CuteEditor_AddDropMenuItems(Ox54a,Ox551){} ;function CuteEditor_AddTagMenuItems(Ox54a,Ox553){} ;function CuteEditor_AddVerbMenuItems(Ox54a,Ox553){} ;function CuteEditor_OnInitialized(editor){} ;function CuteEditor_OnCommand(editor,Ox557,Ox558,Ox7){} ;function CuteEditor_OnChange(editor){} ;function CuteEditor_FilterCode(editor,Ox15d){return Ox15d;} ;function CuteEditor_FilterHTML(editor,Ox176){return Ox176;} ;function CuteEditor_FireChange(editor){window.CuteEditor_OnChange(editor);CuteEditor_FireEvent(editor,OxO46d1[21],null);} ;function CuteEditor_FireInitialized(editor){window.CuteEditor_OnInitialized(editor);CuteEditor_FireEvent(editor,OxO46d1[22],null);} ;function CuteEditor_FireCommand(editor,Ox557,Ox558,Ox7){var Ox27=window.CuteEditor_OnCommand(editor,Ox557,Ox558,Ox7);if(Ox27==true){return true;} ;var Ox55f={};Ox55f[OxO46d1[23]]=Ox557;Ox55f[OxO46d1[24]]=Ox558;Ox55f[OxO46d1[25]]=Ox7;Ox55f[OxO46d1[17]]=true;CuteEditor_FireEvent(editor,OxO46d1[26],Ox55f);if(Ox55f[OxO46d1[17]]==false){return true;} ;} ;function CuteEditor_FireEvent(editor,Ox561,Ox562){if(Ox562==null){Ox562={};} ;var Ox563=editor.getAttribute(Ox561);if(Ox563){if( typeof (Ox563)==OxO46d1[27]){editor[OxO46d1[28]]= new Function(OxO46d1[29],Ox563);} else {editor[OxO46d1[28]]=Ox563;} ;editor._fireEventFunction(Ox562);} ;} ;function CuteEditor_GetEditor(element){for(var Ox3a=element;Ox3a!=null;Ox3a=Ox3a[OxO46d1[30]]){if(Ox3a.getAttribute(OxO46d1[31])==OxO46d1[32]){return Ox3a;} ;} ;return null;} ;function CuteEditor_DropDownCommand(element,Ox951){var editor=CuteEditor_GetEditor(element);if(editor[OxO46d1[33]]){return ;} ;if(element.getAttribute(OxO46d1[34])==OxO46d1[32]){var Ox2b=element.GetValue();if(Ox2b==OxO46d1[35]){Ox2b=OxO46d1[12];} ;var Oxed=element.GetText();if(Oxed==OxO46d1[35]){Oxed=OxO46d1[12];} ;element.SetSelectedIndex(0);editor.ExecCommand(Ox951,false,Ox2b,Oxed);} else {if(!editor[OxO46d1[33]]&&element[OxO46d1[36]]){var Ox2b=element[OxO46d1[36]];if(Ox2b==OxO46d1[35]){Ox2b=OxO46d1[12];} ;element[OxO46d1[37]]=0;editor.ExecCommand(Ox951,false,Ox2b,Oxed);} else {element[OxO46d1[37]]=0;} ;} ;editor.FocusDocument();} ;function CuteEditor_ExpandTreeDropDownItem(src,Ox637){var Oxcf=null;while(src!=null){if(src[OxO46d1[38]]==OxO46d1[39]){Oxcf=src;break ;} ;src=src[OxO46d1[30]];} ;var Oxd0=Oxcf[OxO46d1[40]].item(0);Oxcf[OxO46d1[43]][OxO46d1[42]][OxO46d1[41]]=OxO46d1[12];Oxd0[OxO46d1[44]]=OxO46d1[45]+Ox637+OxO46d1[46];Oxcf[OxO46d1[47]]= new Function(OxO46d1[48]+Ox637+OxO46d1[49]);} ;function CuteEditor_CollapseTreeDropDownItem(src,Ox637){var Oxcf=null;while(src!=null){if(src[OxO46d1[38]]==OxO46d1[39]){Oxcf=src;break ;} ;src=src[OxO46d1[30]];} ;var Oxd0=Oxcf[OxO46d1[40]].item(0);Oxcf[OxO46d1[43]][OxO46d1[42]][OxO46d1[41]]=OxO46d1[50];Oxd0[OxO46d1[44]]=OxO46d1[45]+Ox637+OxO46d1[51];Oxcf[OxO46d1[47]]= new Function(OxO46d1[52]+Ox637+OxO46d1[49]);} ;function Event_GetEvent(Ox137){Ox137=Event_FindEvent(Ox137);if(Ox137==null){Debug_Todo(OxO46d1[53]);} ;return Ox137;} ;function Element_GetAllElements(p){var arr=[];for(var i=0;i<p[OxO46d1[54]][OxO46d1[14]];i++){arr.push(p[OxO46d1[54]].item(i));} ;return arr;} ;function Element_SetUnselectable(element){element.setAttribute(OxO46d1[55],OxO46d1[56]);element.setAttribute(OxO46d1[57],OxO46d1[58]);var arr=Element_GetAllElements(element);var len=arr[OxO46d1[14]];if(!len){return ;} ;for(var i=0;i<len;i++){arr[i].setAttribute(OxO46d1[55],OxO46d1[56]);arr[i].setAttribute(OxO46d1[57],OxO46d1[58]);} ;} ;function Frame_GetContentWindow(Ox245){if(Ox245[OxO46d1[59]]){return Ox245[OxO46d1[59]];} ;if(Ox245[OxO46d1[60]]){if(Ox245[OxO46d1[60]][OxO46d1[61]]){return Ox245[OxO46d1[60]][OxO46d1[61]];} ;} ;var Ox90;if(Ox245[OxO46d1[7]]){Ox90=window[OxO46d1[62]][Ox245[OxO46d1[7]]];if(Ox90){return Ox90;} ;} ;var len=window[OxO46d1[62]][OxO46d1[14]];for(var i=0;i<len;i++){Ox90=window[OxO46d1[62]][i];if(Ox90[OxO46d1[63]]==Ox245){return Ox90;} ;if(Ox90[OxO46d1[13]]==Ox245[OxO46d1[60]]){return Ox90;} ;} ;Debug_Todo(OxO46d1[64]);} ;function Array_IndexOf(arr,Ox139){for(var i=0;i<arr[OxO46d1[14]];i++){if(arr[i]==Ox139){return i;} ;} ;return -1;} ;function Array_Contains(arr,Ox139){return Array_IndexOf(arr,Ox139)!=-1;} ;function clearArray(Ox13c){for(var i=0;i<Ox13c[OxO46d1[14]];i++){Ox13c[i]=null;} ;} ;function Event_FindEvent(Ox137){if(Ox137&&Ox137[OxO46d1[18]]){return Ox137;} ;if(window[OxO46d1[29]]){return window[OxO46d1[29]];} ;return Event_FindEvent_FindEventFromWindows();} ;function Event_FindEvent_FindEventFromCallers(){var Ox75=Event_GetEvent[OxO46d1[65]];for(var i=0;i<100;i++){if(!Ox75){break ;} ;var Ox137=Ox75[OxO46d1[66]][0];if(Ox137&&Ox137[OxO46d1[18]]){return Ox137;} ;Ox75=Ox75[OxO46d1[65]];} ;} ;function Event_FindEvent_FindEventFromWindows(){var arr=[];return Ox140(window);function Ox140(Ox90){if(Ox90==null){return null;} ;if(Ox90[OxO46d1[29]]){return Ox90[OxO46d1[29]];} ;if(Array_Contains(arr,Ox90)){return null;} ;arr.push(Ox90);var Ox141=[];if(Ox90[OxO46d1[67]]!=Ox90){Ox141.push(Ox90.parent);} ;if(Ox90[OxO46d1[68]]!=Ox90[OxO46d1[67]]){Ox141.push(Ox90.top);} ;if(Ox90[OxO46d1[69]]){Ox141.push(Ox90.opener);} ;for(var i=0;i<Ox90[OxO46d1[62]][OxO46d1[14]];i++){Ox141.push(Ox90[OxO46d1[62]][i]);} ;for(var i=0;i<Ox141[OxO46d1[14]];i++){try{var Ox137=Ox140(Ox141[i]);if(Ox137){return Ox137;} ;} catch(x){} ;} ;return null;} ;} ;function Event_GetSrcElement(Ox137){Ox137=Event_GetEvent(Ox137);if(Ox137[OxO46d1[70]]){return Ox137[OxO46d1[70]];} ;if(Ox137[OxO46d1[71]]){return Ox137[OxO46d1[71]];} ;Debug_Todo(OxO46d1[72]);return null;} ;function Event_GetFromElement(Ox137){Ox137=Event_GetEvent(Ox137);if(Ox137[OxO46d1[73]]){return Ox137[OxO46d1[73]];} ;if(Ox137[OxO46d1[74]]){return Ox137[OxO46d1[74]];} ;return null;} ;function Event_GetToElement(Ox137){Ox137=Event_GetEvent(Ox137);if(Ox137[OxO46d1[75]]){return Ox137[OxO46d1[75]];} ;if(Ox137[OxO46d1[74]]){return Ox137[OxO46d1[74]];} ;return null;} ;function Event_GetKeyCode(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[76]];} ;function Event_GetClientX(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[77]];} ;function Event_GetClientY(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[78]];} ;function Event_GetOffsetX(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[79]];} ;function Event_GetOffsetY(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[80]];} ;function Event_IsLeftButton(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[81]]==1;} ;function Event_IsCtrlKey(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[82]];} ;function Event_IsAltKey(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[83]];} ;function Event_IsShiftKey(Ox137){Ox137=Event_GetEvent(Ox137);return Ox137[OxO46d1[84]];} ;function CuteEditor_BasicInitialize(editor){var Ox600= new Function(OxO46d1[85]);var Oxa43= new Function(OxO46d1[86]);var Ox955= new Function(OxO46d1[87]);var Ox956=editor.GetScriptProperty(OxO46d1[88]);var Ox957=editor.GetScriptProperty(OxO46d1[89]);var Ox958=Ox956+OxO46d1[90]+Ox957+OxO46d1[91];var Ox959=Ox956+OxO46d1[92];var images=editor.getElementsByTagName(OxO46d1[93]);var len=images[OxO46d1[14]];for(var i=0;i<len;i++){var img=images[i];if(img.getAttribute(OxO46d1[94])&&!img.getAttribute(OxO46d1[95])){img.setAttribute(OxO46d1[95],img.getAttribute(OxO46d1[94]));} ;var Ox1e=img.getAttribute(OxO46d1[96]);var Ox551=img.getAttribute(OxO46d1[97]);if(!(Ox1e||Ox551)){continue ;} ;var Ox95a=img.getAttribute(OxO46d1[98]);if(parseInt(Ox95a)>=0){img[OxO46d1[42]][OxO46d1[99]]=OxO46d1[100];img[OxO46d1[42]][OxO46d1[101]]=OxO46d1[100];img[OxO46d1[6]]=Ox959;img[OxO46d1[42]][OxO46d1[102]]=OxO46d1[103]+Ox958+OxO46d1[104];img[OxO46d1[42]][OxO46d1[105]]=OxO46d1[106]+(Ox95a*20)+OxO46d1[107];img[OxO46d1[42]][OxO46d1[41]]=OxO46d1[12];} ;if(img[OxO46d1[108]]!=OxO46d1[109]){img[OxO46d1[108]]=OxO46d1[110];img[OxO46d1[111]]= new Function(OxO46d1[112]);img[OxO46d1[113]]= new Function(OxO46d1[114]);img[OxO46d1[115]]= new Function(OxO46d1[116]);img[OxO46d1[117]]= new Function(OxO46d1[118]);} ;if(!img[OxO46d1[119]]){img[OxO46d1[119]]=Event_CancelEvent;} ;if(!img[OxO46d1[120]]){img[OxO46d1[120]]=Event_CancelEvent;} ;if(Ox1e){var Ox75=img.getAttribute(OxO46d1[121])==OxO46d1[32]?Oxa43:Ox600;if(img[OxO46d1[47]]==null){img[OxO46d1[47]]=Ox75;} ;if(img[OxO46d1[122]]==null){img[OxO46d1[122]]=Ox75;} ;} else {if(Ox551){if(img[OxO46d1[47]]==null){img[OxO46d1[47]]=Ox955;} ;} ;} ;} ;var Ox66c=Window_GetElement(window,editor.GetScriptProperty(OxO46d1[123]),true);var Ox66d=Window_GetElement(window,editor.GetScriptProperty(OxO46d1[124]),true);var Ox669=Window_GetElement(window,editor.GetScriptProperty(OxO46d1[125]),true);Ox669[OxO46d1[108]]+=OxO46d1[126];Ox66c[OxO46d1[108]]+=OxO46d1[127];Ox66d[OxO46d1[108]]+=OxO46d1[127];Element_SetUnselectable(Ox66c);Element_SetUnselectable(Ox66d);} ;function CuteEditor_ButtonOver(element){if(!element[OxO46d1[128]]){element[OxO46d1[119]]=Event_CancelEvent;element[OxO46d1[113]]=CuteEditor_ButtonOut;element[OxO46d1[115]]=CuteEditor_ButtonDown;element[OxO46d1[117]]=CuteEditor_ButtonUp;Element_SetUnselectable(element);element[OxO46d1[128]]=true;} ;element[OxO46d1[129]]=true;element[OxO46d1[108]]=OxO46d1[130];} ;function CuteEditor_ButtonOut(){var element=this;element[OxO46d1[108]]=OxO46d1[110];element[OxO46d1[129]]=false;} ;function CuteEditor_ButtonDown(){if(!Event_IsLeftButton()){return ;} ;var element=this;element[OxO46d1[108]]=OxO46d1[131];} ;function CuteEditor_ButtonUp(){if(!Event_IsLeftButton()){return ;} ;var element=this;if(element[OxO46d1[129]]){element[OxO46d1[108]]=OxO46d1[130];} else {element[OxO46d1[108]]=OxO46d1[132];} ;} ;function CuteEditor_ColorPicker_ButtonOver(element){if(!element[OxO46d1[128]]){element[OxO46d1[119]]=Event_CancelEvent;element[OxO46d1[113]]=CuteEditor_ColorPicker_ButtonOut;element[OxO46d1[115]]=CuteEditor_ColorPicker_ButtonDown;Element_SetUnselectable(element);element[OxO46d1[128]]=true;} ;element[OxO46d1[129]]=true;element[OxO46d1[42]][OxO46d1[133]]=OxO46d1[134];element[OxO46d1[42]][OxO46d1[135]]=OxO46d1[136];element[OxO46d1[42]][OxO46d1[137]]=OxO46d1[138];} ;function CuteEditor_ColorPicker_ButtonOut(){var element=this;element[OxO46d1[129]]=false;element[OxO46d1[42]][OxO46d1[133]]=OxO46d1[139];element[OxO46d1[42]][OxO46d1[135]]=OxO46d1[12];element[OxO46d1[42]][OxO46d1[137]]=OxO46d1[138];} ;function CuteEditor_ColorPicker_ButtonDown(){var element=this;element[OxO46d1[42]][OxO46d1[133]]=OxO46d1[140];element[OxO46d1[42]][OxO46d1[135]]=OxO46d1[12];element[OxO46d1[42]][OxO46d1[137]]=OxO46d1[138];} ;function CuteEditor_ButtonCommandOver(element){element[OxO46d1[129]]=true;if(element[OxO46d1[141]]){element[OxO46d1[108]]=OxO46d1[142];} else {element[OxO46d1[108]]=OxO46d1[130];} ;} ;function CuteEditor_ButtonCommandOut(element){element[OxO46d1[129]]=false;if(element[OxO46d1[143]]){element[OxO46d1[108]]=OxO46d1[144];} else {if(element[OxO46d1[141]]){element[OxO46d1[108]]=OxO46d1[142];} else {element[OxO46d1[108]]=OxO46d1[110];} ;} ;} ;function CuteEditor_ButtonCommandDown(element){if(!Event_IsLeftButton()){return ;} ;element[OxO46d1[108]]=OxO46d1[131];} ;function CuteEditor_ButtonCommandUp(element){if(!Event_IsLeftButton()){return ;} ;if(element[OxO46d1[141]]){element[OxO46d1[108]]=OxO46d1[142];return ;} ;if(element[OxO46d1[129]]){element[OxO46d1[108]]=OxO46d1[130];} else {if(element[OxO46d1[143]]){element[OxO46d1[108]]=OxO46d1[144];} else {element[OxO46d1[108]]=OxO46d1[110];} ;} ;} ;var CuteEditorGlobalFunctions=[CuteEditor_GetEditor,CuteEditor_ButtonOver,CuteEditor_ButtonOut,CuteEditor_ButtonDown,CuteEditor_ButtonUp,CuteEditor_ColorPicker_ButtonOver,CuteEditor_ColorPicker_ButtonOut,CuteEditor_ColorPicker_ButtonDown,CuteEditor_ButtonCommandOver,CuteEditor_ButtonCommandOut,CuteEditor_ButtonCommandDown,CuteEditor_ButtonCommandUp,CuteEditor_DropDownCommand,CuteEditor_ExpandTreeDropDownItem,CuteEditor_CollapseTreeDropDownItem,CuteEditor_OnInitialized,CuteEditor_OnCommand,CuteEditor_OnChange,CuteEditor_AddVerbMenuItems,CuteEditor_AddTagMenuItems,CuteEditor_AddMainMenuItems,CuteEditor_AddDropMenuItems,CuteEditor_FilterCode,CuteEditor_FilterHTML];function SetupCuteEditorGlobalFunctions(){for(var i=0;i<CuteEditorGlobalFunctions[OxO46d1[14]];i++){var Ox75=CuteEditorGlobalFunctions[i];var name=Ox75+OxO46d1[12];name=name.substr(8,name.indexOf(OxO46d1[145])-8).replace(/\s/g,OxO46d1[12]);if(!window[name]){window[name]=Ox75;} ;} ;} ;SetupCuteEditorGlobalFunctions();var __danainfo=null;var danaurl=window[OxO46d1[147]][OxO46d1[146]];var danapos=danaurl.indexOf(OxO46d1[148]);if(danapos!=-1){var pluspos1=danaurl.indexOf(OxO46d1[149],danapos+10);var pluspos2=danaurl.indexOf(OxO46d1[150],danapos+10);if(pluspos1!=-1&&pluspos1<pluspos2){pluspos2=pluspos1;} ;__danainfo=danaurl.substring(danapos,pluspos2)+OxO46d1[150];} ;function CuteEditor_GetScriptProperty(name){var Ox2b=this[OxO46d1[151]][name];if(Ox2b&&__danainfo){if(name==OxO46d1[88]){return Ox2b+__danainfo;} ;var Ox73b=this[OxO46d1[151]][OxO46d1[88]];if(Ox2b.substr(0,Ox73b.length)==Ox73b){return Ox73b+__danainfo+Ox2b.substring(Ox73b.length);} ;} ;return Ox2b;} ;function CuteEditor_SetScriptProperty(name,Ox2b){if(Ox2b==null){this[OxO46d1[151]][name]=null;} else {this[OxO46d1[151]][name]=String(Ox2b);} ;} ;function CuteEditorInitialize(Ox967,Ox968){var editor=Window_GetElement(window,Ox967,true);editor[OxO46d1[151]]=Ox968;editor[OxO46d1[152]]=CuteEditor_GetScriptProperty;var Ox669=Window_GetElement(window,editor.GetScriptProperty(OxO46d1[125]),true);var editwin=Frame_GetContentWindow(Ox669);var editdoc=editwin[OxO46d1[13]];var Ox969=false;var Ox96a;var Ox96b=false;var Ox96c=editor.GetScriptProperty(OxO46d1[88])+OxO46d1[153];function Ox96d(){if( typeof (window[OxO46d1[154]])==OxO46d1[155]){return ;} ;try{LoadXMLAsync(OxO46d1[156],Ox96c+OxO46d1[157],Ox96e);} catch(x){include(OxO46d1[158],Ox96c);var Oxa44=setInterval(function (){if(window[OxO46d1[154]]){clearInterval(Oxa44);if(Ox969){Ox970();} ;} ;} ,100);} ;} ;function Ox96e(Ox187){if(Ox187[OxO46d1[159]]!=200){alert(OxO46d1[160]);return ;} ;CuteEditorInstallScriptCode(Ox187.responseText,OxO46d1[154]);if(Ox969){Ox970();} ;} ;function Ox970(){if(Ox96b){return ;} ;Ox96b=true;window.CuteEditorImplementation(editor);try{editor[OxO46d1[42]][OxO46d1[161]]=OxO46d1[12];} catch(x){} ;try{editdoc[OxO46d1[162]][OxO46d1[42]][OxO46d1[161]]=OxO46d1[12];} catch(x){} ;var Ox971=editor.GetScriptProperty(OxO46d1[163]);if(Ox971){editor.Eval(Ox971);} ;} ;function Ox972(){if(!window[OxO46d1[13]][OxO46d1[162]].contains(editor)){return ;} ;try{Ox669=Window_GetElement(window,editor.GetScriptProperty(OxO46d1[125]),true);editwin=Frame_GetContentWindow(Ox669);editdoc=editwin[OxO46d1[13]];x=editdoc[OxO46d1[162]];} catch(x){setTimeout(Ox972,100);return ;} ;if(!editdoc[OxO46d1[162]]){setTimeout(Ox972,100);return ;} ;if(!Ox969){Ox669[OxO46d1[42]][OxO46d1[41]]=OxO46d1[164];editdoc[OxO46d1[162]][OxO46d1[165]]=true;Ox969=true;setTimeout(Ox972,100);return ;} ;if( typeof (window[OxO46d1[154]])==OxO46d1[155]){Ox970();} else {try{editdoc[OxO46d1[162]][OxO46d1[42]][OxO46d1[161]]=OxO46d1[166];} catch(x){} ;} ;} ;function Ox975(Ox976){function Ox977(Ox1c8,Ox978,Ox979,Ox103,Ox97a,Ox97b){var Ox97c= new Array(0x1010400,0,0x10000,0x1010404,0x1010004,0x10404,0x4,0x10000,0x400,0x1010400,0x1010404,0x400,0x1000404,0x1010004,0x1000000,0x4,0x404,0x1000400,0x1000400,0x10400,0x10400,0x1010000,0x1010000,0x1000404,0x10004,0x1000004,0x1000004,0x10004,0,0x404,0x10404,0x1000000,0x10000,0x1010404,0x4,0x1010000,0x1010400,0x1000000,0x1000000,0x400,0x1010004,0x10000,0x10400,0x1000004,0x400,0x4,0x1000404,0x10404,0x1010404,0x10004,0x1010000,0x1000404,0x1000004,0x404,0x10404,0x1010400,0x404,0x1000400,0x1000400,0,0x10004,0x10400,0,0x1010004);var Ox97d= new Array(-0x7fef7fe0,-0x7fff8000,0x8000,0x108020,0x100000,0x20,-0x7fefffe0,-0x7fff7fe0,-0x7fffffe0,-0x7fef7fe0,-0x7fef8000,-0x80000000,-0x7fff8000,0x100000,0x20,-0x7fefffe0,0x108000,0x100020,-0x7fff7fe0,0,-0x80000000,0x8000,0x108020,-0x7ff00000,0x100020,-0x7fffffe0,0,0x108000,0x8020,-0x7fef8000,-0x7ff00000,0x8020,0,0x108020,-0x7fefffe0,0x100000,-0x7fff7fe0,-0x7ff00000,-0x7fef8000,0x8000,-0x7ff00000,-0x7fff8000,0x20,-0x7fef7fe0,0x108020,0x20,0x8000,-0x80000000,0x8020,-0x7fef8000,0x100000,-0x7fffffe0,0x100020,-0x7fff7fe0,-0x7fffffe0,0x100020,0x108000,0,-0x7fff8000,0x8020,-0x80000000,-0x7fefffe0,-0x7fef7fe0,0x108000);var Ox97e= new Array(0x208,0x8020200,0,0x8020008,0x8000200,0,0x20208,0x8000200,0x20008,0x8000008,0x8000008,0x20000,0x8020208,0x20008,0x8020000,0x208,0x8000000,0x8,0x8020200,0x200,0x20200,0x8020000,0x8020008,0x20208,0x8000208,0x20200,0x20000,0x8000208,0x8,0x8020208,0x200,0x8000000,0x8020200,0x8000000,0x20008,0x208,0x20000,0x8020200,0x8000200,0,0x200,0x20008,0x8020208,0x8000200,0x8000008,0x200,0,0x8020008,0x8000208,0x20000,0x8000000,0x8020208,0x8,0x20208,0x20200,0x8000008,0x8020000,0x8000208,0x208,0x8020000,0x20208,0x8,0x8020008,0x20200);var Ox97f= new Array(0x802001,0x2081,0x2081,0x80,0x802080,0x800081,0x800001,0x2001,0,0x802000,0x802000,0x802081,0x81,0,0x800080,0x800001,0x1,0x2000,0x800000,0x802001,0x80,0x800000,0x2001,0x2080,0x800081,0x1,0x2080,0x800080,0x2000,0x802080,0x802081,0x81,0x800080,0x800001,0x802000,0x802081,0x81,0,0,0x802000,0x2080,0x800080,0x800081,0x1,0x802001,0x2081,0x2081,0x80,0x802081,0x81,0x1,0x2000,0x800001,0x2001,0x802080,0x800081,0x2001,0x2080,0x800000,0x802001,0x80,0x800000,0x2000,0x802080);var Ox980= new Array(0x100,0x2080100,0x2080000,0x42000100,0x80000,0x100,0x40000000,0x2080000,0x40080100,0x80000,0x2000100,0x40080100,0x42000100,0x42080000,0x80100,0x40000000,0x2000000,0x40080000,0x40080000,0,0x40000100,0x42080100,0x42080100,0x2000100,0x42080000,0x40000100,0,0x42000000,0x2080100,0x2000000,0x42000000,0x80100,0x80000,0x42000100,0x100,0x2000000,0x40000000,0x2080000,0x42000100,0x40080100,0x2000100,0x40000000,0x42080000,0x2080100,0x40080100,0x100,0x2000000,0x42080000,0x42080100,0x80100,0x42000000,0x42080100,0x2080000,0,0x40080000,0x42000000,0x80100,0x2000100,0x40000100,0x80000,0,0x40080000,0x2080100,0x40000100);var Ox981= new Array(0x20000010,0x20400000,0x4000,0x20404010,0x20400000,0x10,0x20404010,0x400000,0x20004000,0x404010,0x400000,0x20000010,0x400010,0x20004000,0x20000000,0x4010,0,0x400010,0x20004010,0x4000,0x404000,0x20004010,0x10,0x20400010,0x20400010,0,0x404010,0x20404000,0x4010,0x404000,0x20404000,0x20000000,0x20004000,0x10,0x20400010,0x404000,0x20404010,0x400000,0x4010,0x20000010,0x400000,0x20004000,0x20000000,0x4010,0x20000010,0x20404010,0x404000,0x20400000,0x404010,0x20404000,0,0x20400010,0x10,0x4000,0x20400000,0x404010,0x4000,0x400010,0x20004010,0,0x20404000,0x20000000,0x400010,0x20004010);var Ox982= new Array(0x200000,0x4200002,0x4000802,0,0x800,0x4000802,0x200802,0x4200800,0x4200802,0x200000,0,0x4000002,0x2,0x4000000,0x4200002,0x802,0x4000800,0x200802,0x200002,0x4000800,0x4000002,0x4200000,0x4200800,0x200002,0x4200000,0x800,0x802,0x4200802,0x200800,0x2,0x4000000,0x200800,0x4000000,0x200800,0x200000,0x4000802,0x4000802,0x4200002,0x4200002,0x2,0x200002,0x4000000,0x4000800,0x200000,0x4200800,0x802,0x200802,0x4200800,0x802,0x4000002,0x4200802,0x4200000,0x200800,0,0x2,0x4200802,0,0x200802,0x4200000,0x800,0x4000002,0x4000800,0x800,0x200002);var Ox983= new Array(0x10001040,0x1000,0x40000,0x10041040,0x10000000,0x10001040,0x40,0x10000000,0x40040,0x10040000,0x10041040,0x41000,0x10041000,0x41040,0x1000,0x40,0x10040000,0x10000040,0x10001000,0x1040,0x41000,0x40040,0x10040040,0x10041000,0x1040,0,0,0x10040040,0x10000040,0x10001000,0x41040,0x40000,0x41040,0x40000,0x10041000,0x1000,0x40,0x10040040,0x1000,0x41040,0x10001000,0x40,0x10000040,0x10040000,0x10040040,0x10000000,0x40000,0x10001040,0,0x10041040,0x40040,0x10000040,0x10040000,0x10001000,0x10001040,0,0x10041040,0x41000,0x41000,0x1040,0x1040,0x40040,0x10000000,0x10041000);var Ox1cb=Ox992(Ox1c8);var m=0,i,Ox5a,Oxf6,Ox984,Ox985,Ox986,Ox5b6,Ox987,Ox988;var Ox989,Ox98a,Ox98b,Ox98c;var Ox98d,Ox98e;var len=Ox978[OxO46d1[14]];var Ox98f=0;var Ox990=Ox1cb[OxO46d1[14]]==32?3:9;if(Ox990==3){Ox988=Ox979? new Array(0,32,2): new Array(30,-2,-2);} else {Ox988=Ox979? new Array(0,32,2,62,30,-2,64,96,2): new Array(94,62,-2,32,64,2,30,-2,-2);} ;var Oxf7=OxO46d1[12];var Ox991=OxO46d1[12];if(Ox103==1){Ox989=(Ox97a.charCodeAt(m++)<<24)|(Ox97a.charCodeAt(m++)<<16)|(Ox97a.charCodeAt(m++)<<8)|Ox97a.charCodeAt(m++);Ox98b=(Ox97a.charCodeAt(m++)<<24)|(Ox97a.charCodeAt(m++)<<16)|(Ox97a.charCodeAt(m++)<<8)|Ox97a.charCodeAt(m++);m=0;} ;while(m<len){Ox5b6=(Ox978.charCodeAt(m++)<<24)|(Ox978.charCodeAt(m++)<<16)|(Ox978.charCodeAt(m++)<<8)|Ox978.charCodeAt(m++);Ox987=(Ox978.charCodeAt(m++)<<24)|(Ox978.charCodeAt(m++)<<16)|(Ox978.charCodeAt(m++)<<8)|Ox978.charCodeAt(m++);if(Ox103==1){if(Ox979){Ox5b6^=Ox989;Ox987^=Ox98b;} else {Ox98a=Ox989;Ox98c=Ox98b;Ox989=Ox5b6;Ox98b=Ox987;} ;} ;Oxf6=((Ox5b6>>>4)^Ox987)&0x0f0f0f0f;Ox987^=Oxf6;Ox5b6^=(Oxf6<<4);Oxf6=((Ox5b6>>>16)^Ox987)&0x0000ffff;Ox987^=Oxf6;Ox5b6^=(Oxf6<<16);Oxf6=((Ox987>>>2)^Ox5b6)&0x33333333;Ox5b6^=Oxf6;Ox987^=(Oxf6<<2);Oxf6=((Ox987>>>8)^Ox5b6)&0x00ff00ff;Ox5b6^=Oxf6;Ox987^=(Oxf6<<8);Oxf6=((Ox5b6>>>1)^Ox987)&0x55555555;Ox987^=Oxf6;Ox5b6^=(Oxf6<<1);Ox5b6=((Ox5b6<<1)|(Ox5b6>>>31));Ox987=((Ox987<<1)|(Ox987>>>31));for(Ox5a=0;Ox5a<Ox990;Ox5a+=3){Ox98d=Ox988[Ox5a+1];Ox98e=Ox988[Ox5a+2];for(i=Ox988[Ox5a];i!=Ox98d;i+=Ox98e){Ox985=Ox987^Ox1cb[i];Ox986=((Ox987>>>4)|(Ox987<<28))^Ox1cb[i+1];Oxf6=Ox5b6;Ox5b6=Ox987;Ox987=Oxf6^(Ox97d[(Ox985>>>24)&0x3f]|Ox97f[(Ox985>>>16)&0x3f]|Ox981[(Ox985>>>8)&0x3f]|Ox983[Ox985&0x3f]|Ox97c[(Ox986>>>24)&0x3f]|Ox97e[(Ox986>>>16)&0x3f]|Ox980[(Ox986>>>8)&0x3f]|Ox982[Ox986&0x3f]);} ;Oxf6=Ox5b6;Ox5b6=Ox987;Ox987=Oxf6;} ;Ox5b6=((Ox5b6>>>1)|(Ox5b6<<31));Ox987=((Ox987>>>1)|(Ox987<<31));Oxf6=((Ox5b6>>>1)^Ox987)&0x55555555;Ox987^=Oxf6;Ox5b6^=(Oxf6<<1);Oxf6=((Ox987>>>8)^Ox5b6)&0x00ff00ff;Ox5b6^=Oxf6;Ox987^=(Oxf6<<8);Oxf6=((Ox987>>>2)^Ox5b6)&0x33333333;Ox5b6^=Oxf6;Ox987^=(Oxf6<<2);Oxf6=((Ox5b6>>>16)^Ox987)&0x0000ffff;Ox987^=Oxf6;Ox5b6^=(Oxf6<<16);Oxf6=((Ox5b6>>>4)^Ox987)&0x0f0f0f0f;Ox987^=Oxf6;Ox5b6^=(Oxf6<<4);if(Ox103==1){if(Ox979){Ox989=Ox5b6;Ox98b=Ox987;} else {Ox5b6^=Ox98a;Ox987^=Ox98c;} ;} ;Ox991+=String.fromCharCode((Ox5b6>>>24),((Ox5b6>>>16)&0xff),((Ox5b6>>>8)&0xff),(Ox5b6&0xff),(Ox987>>>24),((Ox987>>>16)&0xff),((Ox987>>>8)&0xff),(Ox987&0xff));Ox98f+=8;if(Ox98f==512){Oxf7+=Ox991;Ox991=OxO46d1[12];Ox98f=0;} ;} ;return Oxf7+Ox991;} ;function Ox992(Ox1c8){var Ox993= new Array(0,0x4,0x20000000,0x20000004,0x10000,0x10004,0x20010000,0x20010004,0x200,0x204,0x20000200,0x20000204,0x10200,0x10204,0x20010200,0x20010204);var Ox994= new Array(0,0x1,0x100000,0x100001,0x4000000,0x4000001,0x4100000,0x4100001,0x100,0x101,0x100100,0x100101,0x4000100,0x4000101,0x4100100,0x4100101);var Ox995= new Array(0,0x8,0x800,0x808,0x1000000,0x1000008,0x1000800,0x1000808,0,0x8,0x800,0x808,0x1000000,0x1000008,0x1000800,0x1000808);var Ox996= new Array(0,0x200000,0x8000000,0x8200000,0x2000,0x202000,0x8002000,0x8202000,0x20000,0x220000,0x8020000,0x8220000,0x22000,0x222000,0x8022000,0x8222000);var Ox997= new Array(0,0x40000,0x10,0x40010,0,0x40000,0x10,0x40010,0x1000,0x41000,0x1010,0x41010,0x1000,0x41000,0x1010,0x41010);var Ox998= new Array(0,0x400,0x20,0x420,0,0x400,0x20,0x420,0x2000000,0x2000400,0x2000020,0x2000420,0x2000000,0x2000400,0x2000020,0x2000420);var Ox999= new Array(0,0x10000000,0x80000,0x10080000,0x2,0x10000002,0x80002,0x10080002,0,0x10000000,0x80000,0x10080000,0x2,0x10000002,0x80002,0x10080002);var Ox99a= new Array(0,0x10000,0x800,0x10800,0x20000000,0x20010000,0x20000800,0x20010800,0x20000,0x30000,0x20800,0x30800,0x20020000,0x20030000,0x20020800,0x20030800);var Ox99b= new Array(0,0x40000,0,0x40000,0x2,0x40002,0x2,0x40002,0x2000000,0x2040000,0x2000000,0x2040000,0x2000002,0x2040002,0x2000002,0x2040002);var Ox99c= new Array(0,0x10000000,0x8,0x10000008,0,0x10000000,0x8,0x10000008,0x400,0x10000400,0x408,0x10000408,0x400,0x10000400,0x408,0x10000408);var Ox99d= new Array(0,0x20,0,0x20,0x100000,0x100020,0x100000,0x100020,0x2000,0x2020,0x2000,0x2020,0x102000,0x102020,0x102000,0x102020);var Ox99e= new Array(0,0x1000000,0x200,0x1000200,0x200000,0x1200000,0x200200,0x1200200,0x4000000,0x5000000,0x4000200,0x5000200,0x4200000,0x5200000,0x4200200,0x5200200);var Ox99f= new Array(0,0x1000,0x8000000,0x8001000,0x80000,0x81000,0x8080000,0x8081000,0x10,0x1010,0x8000010,0x8001010,0x80010,0x81010,0x8080010,0x8081010);var Ox9a0= new Array(0,0x4,0x100,0x104,0,0x4,0x100,0x104,0x1,0x5,0x101,0x105,0x1,0x5,0x101,0x105);var Ox990=Ox1c8[OxO46d1[14]]>8?3:1;var Ox1cb= new Array(32*Ox990);var Ox9a1= new Array(0,0,1,1,1,1,1,1,0,1,1,1,1,1,1,0);var Ox9a2,Ox9a3,m=0,Ox8d=0,Oxf6;var Ox5b6,Ox987;for(var Ox5a=0;Ox5a<Ox990;Ox5a++){Ox5b6=(Ox1c8.charCodeAt(m++)<<24)|(Ox1c8.charCodeAt(m++)<<16)|(Ox1c8.charCodeAt(m++)<<8)|Ox1c8.charCodeAt(m++);Ox987=(Ox1c8.charCodeAt(m++)<<24)|(Ox1c8.charCodeAt(m++)<<16)|(Ox1c8.charCodeAt(m++)<<8)|Ox1c8.charCodeAt(m++);Oxf6=((Ox5b6>>>4)^Ox987)&0x0f0f0f0f;Ox987^=Oxf6;Ox5b6^=(Oxf6<<4);Oxf6=((Ox987>>>-16)^Ox5b6)&0x0000ffff;Ox5b6^=Oxf6;Ox987^=(Oxf6<<-16);Oxf6=((Ox5b6>>>2)^Ox987)&0x33333333;Ox987^=Oxf6;Ox5b6^=(Oxf6<<2);Oxf6=((Ox987>>>-16)^Ox5b6)&0x0000ffff;Ox5b6^=Oxf6;Ox987^=(Oxf6<<-16);Oxf6=((Ox5b6>>>1)^Ox987)&0x55555555;Ox987^=Oxf6;Ox5b6^=(Oxf6<<1);Oxf6=((Ox987>>>8)^Ox5b6)&0x00ff00ff;Ox5b6^=Oxf6;Ox987^=(Oxf6<<8);Oxf6=((Ox5b6>>>1)^Ox987)&0x55555555;Ox987^=Oxf6;Ox5b6^=(Oxf6<<1);Oxf6=(Ox5b6<<8)|((Ox987>>>20)&0x000000f0);Ox5b6=(Ox987<<24)|((Ox987<<8)&0xff0000)|((Ox987>>>8)&0xff00)|((Ox987>>>24)&0xf0);Ox987=Oxf6;for(i=0;i<Ox9a1[OxO46d1[14]];i++){if(Ox9a1[i]){Ox5b6=(Ox5b6<<2)|(Ox5b6>>>26);Ox987=(Ox987<<2)|(Ox987>>>26);} else {Ox5b6=(Ox5b6<<1)|(Ox5b6>>>27);Ox987=(Ox987<<1)|(Ox987>>>27);} ;Ox5b6&=-0xf;Ox987&=-0xf;Ox9a2=Ox993[Ox5b6>>>28]|Ox994[(Ox5b6>>>24)&0xf]|Ox995[(Ox5b6>>>20)&0xf]|Ox996[(Ox5b6>>>16)&0xf]|Ox997[(Ox5b6>>>12)&0xf]|Ox998[(Ox5b6>>>8)&0xf]|Ox999[(Ox5b6>>>4)&0xf];Ox9a3=Ox99a[Ox987>>>28]|Ox99b[(Ox987>>>24)&0xf]|Ox99c[(Ox987>>>20)&0xf]|Ox99d[(Ox987>>>16)&0xf]|Ox99e[(Ox987>>>12)&0xf]|Ox99f[(Ox987>>>8)&0xf]|Ox9a0[(Ox987>>>4)&0xf];Oxf6=((Ox9a3>>>16)^Ox9a2)&0x0000ffff;Ox1cb[Ox8d++]=Ox9a2^Oxf6;Ox1cb[Ox8d++]=Ox9a3^(Oxf6<<16);} ;} ;return Ox1cb;} ;var Ox978=[];for(var i=0;i<Ox976[OxO46d1[14]];i++){Ox978.push(String.fromCharCode(Ox976[i]));} ;Ox978=Ox978.join(OxO46d1[12]);var Ox9a4=[0x46,0x35,0x32,0x42,0x31,0x38,0x36,0x46];var Ox1c8=[];for(var i=0;i<Ox9a4[OxO46d1[14]];i++){Ox1c8.push(String.fromCharCode(Ox9a4[i]));} ;Ox1c8=Ox1c8.join(OxO46d1[12]);var Ox97a=Ox1c8;return Ox977(Ox1c8,Ox978,0,1,Ox97a);} ;var Ox9a5;var Ox9a6;var Ox9a7;var Ox9a8;function Ox9a9(Ox9aa){var Ox187=CreateXMLHttpRequest();var Ox9ab=Ox9ba;if(!Ox9a5){Ox187.open(OxO46d1[156],editor.GetScriptProperty(OxO46d1[88])+OxO46d1[167]+OxO46d1[168]+ new Date().getTime(),false);Ox187.send(OxO46d1[12]);if(Ox187[OxO46d1[159]]!=200){return Ox9ab(1000,OxO46d1[169]);} ;Ox9a5=Ox187[OxO46d1[170]].toUpperCase();} ;if(!Ox9a6){Ox9a6={};var Ox9ac=[OxO46d1[171],OxO46d1[172],OxO46d1[173],OxO46d1[174],OxO46d1[175],OxO46d1[176],OxO46d1[177],OxO46d1[178],OxO46d1[179],OxO46d1[180],OxO46d1[181],OxO46d1[182],OxO46d1[183],OxO46d1[184],OxO46d1[185],OxO46d1[186]];for(var i=0;i<Ox9ac[OxO46d1[14]];i++){Ox9a6[Ox9ac[i]]=i;} ;} ;try{if(!Ox9a7){if(Ox9a5.substring(0,16)!=OxO46d1[187]){return Ox9ab(1001);} ;var Ox9ad=[];for(var i=0;i<Ox9a5[OxO46d1[14]];i+=2){Ox9ad.push(Ox9a6[Ox9a5.charAt(i)]*16+Ox9a6[Ox9a5.charAt(i+1)]);} ;Ox9ad.splice(0,8);Ox9ad.splice(0,123);var Ox9ae=Ox9ad[0]+Ox9ad[1]*256;Ox9ad.splice(0,4);var Ox9af=Ox9ad.slice(0,Ox9ae);var Ox9b0=Ox975(Ox9af);Ox9b0=Ox9b0.replace(/^\xEF\xBB\xBF/,OxO46d1[12]).replace(/[\x00-\x08]*$/,OxO46d1[12]);Ox9a7=Ox9b0.split(OxO46d1[188]);} ;if(Ox9a7[OxO46d1[14]]!=10){return Ox9ab(1002,Ox9a7.length);} ;var Ox9b1=Ox9a7[9].split(OxO46d1[189]);var Ox9b2= new Date(parseFloat(Ox9b1[2]),parseFloat(Ox9b1[1])-1,parseFloat(Ox9b1[0]));var Ox9b3=Ox9b2.getTime();if((Ox9a7[5]<<2)!=1200685124){return Ox9ab(1003,Ox9a7[5]);} ;var Ox9b4=window[OxO46d1[147]][OxO46d1[146]].split(OxO46d1[191])[1].split(OxO46d1[189])[0].split(OxO46d1[190])[0].toLowerCase();var Ox9b5=false;if(Ox9b4==String.fromCharCode(108,111,99,97,108,104,111,115,116)){Ox9b5=true;} ;if(Ox9b4==String.fromCharCode(49,50,55,46,48,46,48,46,49)){Ox9b5=true;} ;function Ox9b6(Ox9b7){var Oxe=Ox9b7.split(OxO46d1[192]);if(Oxe[0]==OxO46d1[193]){Oxe.splice(0,1);} ;return Oxe.join(OxO46d1[192]);} ;Ox9b4=Ox9b6(Ox9b4);var Ox9b8=Ox9a7[7].toLowerCase();var Ox9b9=Ox9a7[8];switch(parseInt(Ox9a7[6])){case 0:if(Ox9b3< new Date().getTime()){return Ox9ab(20000,Ox9b2);} ;if(Ox9b5){break ;} ;return Ox9ab(20001,Ox9b4);;case 1:if(Ox9b5){break ;} ;if(Ox9b8!=Ox9b4&&Ox9b8.indexOf(Ox9b4)==-1){return Ox9ab(20010,Ox9b4);} ;break ;;case 2:if(Ox9b5){break ;} ;if(!Ox9a8){Ox187.open(OxO46d1[156],editor.GetScriptProperty(OxO46d1[88])+OxO46d1[167]+OxO46d1[194]+ new Date().getTime(),false);Ox187.send(OxO46d1[12]);if(Ox187[OxO46d1[159]]!=200){return Ox9ab(1000,OxO46d1[195]);} ;Ox9a8=Ox187[OxO46d1[170]];} ;if(Ox9b9!=Ox9a8&&Ox9b9.indexOf(Ox9a8)==-1){return Ox9ab(20020,Ox9a8);} ;break ;;case 3:if(Ox9b5){break ;} ;if(Ox9b8.indexOf(Ox9b4)==-1){return Ox9ab(20030,Ox9b4);} ;break ;;case 4:if(Ox9b3< new Date().getTime()){return Ox9ab(20040,Ox9b2);} ;break ;;case 5:break ;;default:return Ox9ab(1004,parseInt(Ox9a7[6]));;} ;} catch(x){return Ox9ab(1000,x.message);} ;return Ox9aa();} ;function Ox9ba(Ox9bb,Ox615){var msg=OxO46d1[12];switch(Ox9bb){case 1000:msg=Ox615;break ;;case 1001:msg=OxO46d1[196];break ;;case 1002:msg=OxO46d1[197]+Ox615;break ;;case 1003:msg=OxO46d1[198];break ;;case 1004:msg=OxO46d1[199];break ;;case 20000:msg=OxO46d1[200];break ;;case 20001:msg=OxO46d1[201]+Ox615;break ;;case 20010:msg=OxO46d1[202]+Ox615;break ;;case 20020:msg=OxO46d1[203]+Ox615;break ;;case 20030:msg=OxO46d1[204]+Ox615;break ;;case 20040:msg=OxO46d1[205];break ;;} ;try{return alert(OxO46d1[206]+msg);} catch(x){} ;} ;CuteEditor_BasicInitialize(editor);Ox96d();Ox9a9(Ox972);} ;function CuteEditorInstallScriptCode(Ox8b7,Ox8b8){eval(Ox8b7);window[Ox8b8]=eval(Ox8b8);} ;