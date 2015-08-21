var OxO8888=["onload","onclick","btnCancel","btnOK","onkeyup","txtHSB_Hue","onkeypress","txtHSB_Saturation","txtHSB_Brightness","txtRGB_Red","txtRGB_Green","txtRGB_Blue","txtHex","btnWebSafeColor","rdoHSB_Hue","rdoHSB_Saturation","rdoHSB_Brightness","pnlGradient_Top","onmousemove","onmousedown","onmouseup","pnlVertical_Top","pnlWebSafeColor","pnlWebSafeColorBorder","pnlOldColor","lblHSB_Hue","lblHSB_Saturation","lblHSB_Brightness","length","\x5C{","\x5C}","BadNumber","A number between {0} and {1} is required. Closest value inserted.","Title","Color Picker","SelectAColor","Select a color:","OKButton","OK","CancelButton","Cancel","AboutButton","About","Recent","WebSafeWarning","Warning: not a web safe color","WebSafeClick","Click to select web safe color","HsbHue","H:","HsbHueTooltip","Hue","HsbHueUnit","%","HsbSaturation","S:","HsbSaturationTooltip","Saturation","HsbSaturationUnit","HsbBrightness","B:","HsbBrightnessTooltip","Brightness","HsbBrightnessUnit","RgbRed","R:","RgbRedTooltip","Red","RgbGreen","G:","RgbGreenTooltip","Green","RgbBlue","RgbBlueTooltip","Blue","Hex","#","RecentTooltip","Recent:","\x0D\x0ALewies Color Pickerversion 1.1\x0D\x0A\x0D\x0AThis form was created by Lewis Moten in May of 2004.\x0D\x0AIt simulates the color picker in a popular graphics application.\x0D\x0AIt gives users a visual way to choose colors from a large and dynamic palette.\x0D\x0A\x0D\x0AVisit the authors web page?\x0D\x0Awww.lewismoten.com\x0D\x0A","lblSelectColorMessage","lblRecent","lblRGB_Red","lblRGB_Green","lblRGB_Blue","lblHex","lblUnitHSB_Hue","lblUnitHSB_Saturation","lblUnitHSB_Brightness","pnlHSB_Hue","pnlHSB_Saturation","pnlHSB_Brightness","pnlRGB_Red","pnlRGB_Green","pnlRGB_Blue","frmColorPicker","Color","","FFFFFF","value","checked","ColorMode","ColorType","RecentColors","pnlRecent","border","style","0px","http://www.lewismoten.com","_blank","backgroundColor","target","rgb","(",")",",","display","none","title","innerHTML","backgroundPosition","px ","px","pnlGradientHsbHue_Hue","pnlGradientHsbHue_Black","pnlGradientHsbHue_White","pnlVerticalHsbHue_Background","pnlVerticalHsbSaturation_Hue","pnlVerticalHsbSaturation_White","pnlVerticalHsbBrightness_Hue","pnlVerticalHsbBrightness_Black","pnlVerticalRgb_Start","pnlVerticalRgb_End","pnlGradientRgb_Base","pnlGradientRgb_Invert","pnlGradientRgb_Overlay1","pnlGradientRgb_Overlay2","src","imgGradient","../Images/cpns_ColorSpace1.png","../Images/cpns_ColorSpace2.png","../Images/cpns_Vertical1.png","#000000","../Images/cpns_Vertical2.png","#ffffff","01234567879","which","abcdef","01234567879ABCDEF","opener","pnlGradientPosition","pnlNewColor","0123456789ABCDEFabcdef","000000","0","id","top","pnlVerticalPosition","backgroundImage","url(../Images/cpns_GradientPositionDark.gif)","url(../Images/cpns_GradientPositionLight.gif)","cancelBubble","pageX","pageY","className","GradientNormal","GradientFullScreen","_isverdown","=","; path=/;"," expires=",";","cookie","search","location","\x26","00336699CCFF","0x","do_select","frm","__cphex"];var POSITIONADJUSTX=22;var POSITIONADJUSTY=52;var POSITIONADJUSTZ=48;var ColorMode=1;var GradientPositionDark= new Boolean(false);var frm= new Object();var msg= new Object();var _xmlDocs= new Array();var _xmlIndex=-1;var _xml=null;LoadLanguage();window[OxO8888[0]]=window_load;function initialize(){frm[OxO8888[2]][OxO8888[1]]=btnCancel_Click;frm[OxO8888[3]][OxO8888[1]]=btnOK_Click;frm[OxO8888[5]][OxO8888[4]]=Hsb_Changed;frm[OxO8888[5]][OxO8888[6]]=validateNumber;frm[OxO8888[7]][OxO8888[4]]=Hsb_Changed;frm[OxO8888[7]][OxO8888[6]]=validateNumber;frm[OxO8888[8]][OxO8888[4]]=Hsb_Changed;frm[OxO8888[8]][OxO8888[6]]=validateNumber;frm[OxO8888[9]][OxO8888[4]]=Rgb_Changed;frm[OxO8888[9]][OxO8888[6]]=validateNumber;frm[OxO8888[10]][OxO8888[4]]=Rgb_Changed;frm[OxO8888[10]][OxO8888[6]]=validateNumber;frm[OxO8888[11]][OxO8888[4]]=Rgb_Changed;frm[OxO8888[11]][OxO8888[6]]=validateNumber;frm[OxO8888[12]][OxO8888[4]]=Hex_Changed;frm[OxO8888[12]][OxO8888[6]]=validateHex;frm[OxO8888[13]][OxO8888[1]]=btnWebSafeColor_Click;frm[OxO8888[14]][OxO8888[1]]=rdoHsb_Hue_Click;frm[OxO8888[15]][OxO8888[1]]=rdoHsb_Saturation_Click;frm[OxO8888[16]][OxO8888[1]]=rdoHsb_Brightness_Click;document.getElementById(OxO8888[17])[OxO8888[1]]=pnlGradient_Top_Click;document.getElementById(OxO8888[17])[OxO8888[18]]=pnlGradient_Top_MouseMove;document.getElementById(OxO8888[17])[OxO8888[19]]=pnlGradient_Top_MouseDown;document.getElementById(OxO8888[17])[OxO8888[20]]=pnlGradient_Top_MouseUp;document.getElementById(OxO8888[21])[OxO8888[1]]=pnlVertical_Top_Click;document.getElementById(OxO8888[21])[OxO8888[18]]=pnlVertical_Top_MouseMove;document.getElementById(OxO8888[21])[OxO8888[19]]=pnlVertical_Top_MouseDown;document.getElementById(OxO8888[21])[OxO8888[20]]=pnlVertical_Top_MouseUp;document.getElementById(OxO8888[22])[OxO8888[1]]=btnWebSafeColor_Click;document.getElementById(OxO8888[23])[OxO8888[1]]=btnWebSafeColor_Click;document.getElementById(OxO8888[24])[OxO8888[1]]=pnlOldClick_Click;document.getElementById(OxO8888[25])[OxO8888[1]]=rdoHsb_Hue_Click;document.getElementById(OxO8888[26])[OxO8888[1]]=rdoHsb_Saturation_Click;document.getElementById(OxO8888[27])[OxO8888[1]]=rdoHsb_Brightness_Click;frm[OxO8888[5]].focus();window.focus();} ;function formatString(Ox1ab){Ox1ab= new String(Ox1ab);for(var i=1;i<arguments[OxO8888[28]];i++){Ox1ab=Ox1ab.replace( new RegExp(OxO8888[29]+(i-1)+OxO8888[30]),arguments[i]);} ;return Ox1ab;} ;function AddValue(Ox1ad,Ox7){Ox7= new String(Ox7).toLowerCase();for(var i=0;i<Ox1ad[OxO8888[28]];i++){if(Ox1ad[i]==Ox7){return ;} ;} ;Ox1ad[Ox1ad[OxO8888[28]]]=Ox7;} ;function SniffLanguage(Ox3d){} ;function LoadNextLanguage(){} ;function LoadLanguage(){msg[OxO8888[31]]=OxO8888[32];msg[OxO8888[33]]=OxO8888[34];msg[OxO8888[35]]=OxO8888[36];msg[OxO8888[37]]=OxO8888[38];msg[OxO8888[39]]=OxO8888[40];msg[OxO8888[41]]=OxO8888[42];msg[OxO8888[43]]=OxO8888[43];msg[OxO8888[44]]=OxO8888[45];msg[OxO8888[46]]=OxO8888[47];msg[OxO8888[48]]=OxO8888[49];msg[OxO8888[50]]=OxO8888[51];msg[OxO8888[52]]=OxO8888[53];msg[OxO8888[54]]=OxO8888[55];msg[OxO8888[56]]=OxO8888[57];msg[OxO8888[58]]=OxO8888[53];msg[OxO8888[59]]=OxO8888[60];msg[OxO8888[61]]=OxO8888[62];msg[OxO8888[63]]=OxO8888[53];msg[OxO8888[64]]=OxO8888[65];msg[OxO8888[66]]=OxO8888[67];msg[OxO8888[68]]=OxO8888[69];msg[OxO8888[70]]=OxO8888[71];msg[OxO8888[72]]=OxO8888[60];msg[OxO8888[73]]=OxO8888[74];msg[OxO8888[75]]=OxO8888[76];msg[OxO8888[77]]=OxO8888[78];msg[OxO8888[42]]=OxO8888[79];} ;function AssignLanguage(){} ;function localize(){SetHTML(document.getElementById(OxO8888[80]),msg.SelectAColor,document.getElementById(OxO8888[81]),msg.Recent,document.getElementById(OxO8888[25]),msg.HsbHue,document.getElementById(OxO8888[26]),msg.HsbSaturation,document.getElementById(OxO8888[27]),msg.HsbBrightness,document.getElementById(OxO8888[82]),msg.RgbRed,document.getElementById(OxO8888[83]),msg.RgbGreen,document.getElementById(OxO8888[84]),msg.RgbBlue,document.getElementById(OxO8888[85]),msg.Hex,document.getElementById(OxO8888[86]),msg.HsbHueUnit,document.getElementById(OxO8888[87]),msg.HsbSaturationUnit,document.getElementById(OxO8888[88]),msg.HsbBrightnessUnit);SetValue(frm.btnCancel,msg.CancelButton,frm.btnOK,msg.OKButton,frm.btnAbout,msg.AboutButton);SetTitle(frm.btnWebSafeColor,msg.WebSafeWarning,document.getElementById(OxO8888[22]),msg.WebSafeClick,document.getElementById(OxO8888[89]),msg.HsbHueTooltip,document.getElementById(OxO8888[90]),msg.HsbSaturationTooltip,document.getElementById(OxO8888[91]),msg.HsbBrightnessTooltip,document.getElementById(OxO8888[92]),msg.RgbRedTooltip,document.getElementById(OxO8888[93]),msg.RgbGreenTooltip,document.getElementById(OxO8888[94]),msg.RgbBlueTooltip);} ;function window_load(Ox3a){frm=document.getElementById(OxO8888[95]);localize();initialize();var Ox1c=GetQuery(OxO8888[96]).toUpperCase();if(Ox1c==OxO8888[97]){Ox1c=OxO8888[98];} ;if(Ox1c[OxO8888[28]]==7){Ox1c=Ox1c.substr(1,6);} ;frm[OxO8888[12]][OxO8888[99]]=Ox1c;Hex_Changed(Ox3a);Ox1c=Form_Get_Hex();SetBg(document.getElementById(OxO8888[24]),Ox1c);frm[OxO8888[102]][ new Number(GetCookie(OxO8888[101])||0)][OxO8888[100]]=true;ColorMode_Changed(Ox3a);var Ox1a0=GetCookie(OxO8888[103])||OxO8888[97];var Ox1b2=msg[OxO8888[77]];for(var i=1;i<33;i++){if(Ox1a0[OxO8888[28]]/6>=i){Ox1c=Ox1a0.substr((i-1)*6,6);var Ox1b3=HexToRgb(Ox1c);var title=formatString(msg.RecentTooltip,Ox1c,Ox1b3[0],Ox1b3[1],Ox1b3[2]);SetBg(document.getElementById(OxO8888[104]+i),Ox1c);SetTitle(document.getElementById(OxO8888[104]+i),title);document.getElementById(OxO8888[104]+i)[OxO8888[1]]=pnlRecent_Click;} else {document.getElementById(OxO8888[104]+i)[OxO8888[106]][OxO8888[105]]=OxO8888[107];} ;} ;} ;function btnAbout_Click(){if(confirm(msg.About)){window.open(OxO8888[108],OxO8888[109]);} ;} ;function pnlRecent_Click(Ox3a){var Ox16=Ox3a[OxO8888[111]][OxO8888[106]][OxO8888[110]];if(Ox16.indexOf(OxO8888[112])!=-1){var Ox1b3= new Array();Ox16=Ox16.substr(Ox16.indexOf(OxO8888[113])+1);Ox16=Ox16.substr(0,Ox16.indexOf(OxO8888[114]));Ox1b3[0]= new Number(Ox16.substr(0,Ox16.indexOf(OxO8888[115])));Ox16=Ox16.substr(Ox16.indexOf(OxO8888[115])+1);Ox1b3[1]= new Number(Ox16.substr(0,Ox16.indexOf(OxO8888[115])));Ox1b3[2]= new Number(Ox16.substr(Ox16.indexOf(OxO8888[115])+1));Ox16=RgbToHex(Ox1b3);} else {Ox16=Ox16.substr(1,6).toUpperCase();} ;frm[OxO8888[12]][OxO8888[99]]=Ox16;Hex_Changed(Ox3a);} ;function pnlOldClick_Click(Ox3a){frm[OxO8888[12]][OxO8888[99]]=document.getElementById(OxO8888[24])[OxO8888[106]][OxO8888[110]].substr(1,6).toUpperCase();Hex_Changed(Ox3a);} ;function rdoHsb_Hue_Click(Ox3a){frm[OxO8888[14]][OxO8888[100]]=true;ColorMode_Changed(Ox3a);} ;function rdoHsb_Saturation_Click(Ox3a){frm[OxO8888[15]][OxO8888[100]]=true;ColorMode_Changed(Ox3a);} ;function rdoHsb_Brightness_Click(Ox3a){frm[OxO8888[16]][OxO8888[100]]=true;ColorMode_Changed(Ox3a);} ;function Hide(){for(var i=0;i<arguments[OxO8888[28]];i++){if(arguments[i]){arguments[i][OxO8888[106]][OxO8888[116]]=OxO8888[117];} ;} ;} ;function Show(){for(var i=0;i<arguments[OxO8888[28]];i++){if(arguments[i]){arguments[i][OxO8888[106]][OxO8888[116]]=OxO8888[97];} ;} ;} ;function SetValue(){for(var i=0;i<arguments[OxO8888[28]];i+=2){arguments[i][OxO8888[99]]=arguments[i+1];} ;} ;function SetTitle(){for(var i=0;i<arguments[OxO8888[28]];i+=2){arguments[i][OxO8888[118]]=arguments[i+1];} ;} ;function SetHTML(){for(var i=0;i<arguments[OxO8888[28]];i+=2){arguments[i][OxO8888[119]]=arguments[i+1];} ;} ;function SetBg(){for(var i=0;i<arguments[OxO8888[28]];i+=2){if(arguments[i]){arguments[i][OxO8888[106]][OxO8888[110]]=OxO8888[76]+arguments[i+1];} ;} ;} ;function SetBgPosition(){for(var i=0;i<arguments[OxO8888[28]];i+=3){arguments[i][OxO8888[106]][OxO8888[120]]=arguments[i+1]+OxO8888[121]+arguments[i+2]+OxO8888[122];} ;} ;function ColorMode_Changed(Ox3a){for(var i=0;i<3;i++){if(frm[OxO8888[102]][i][OxO8888[100]]){ColorMode=i;} ;} ;SetCookie(OxO8888[101],ColorMode,60*60*24*365);Hide(document.getElementById(OxO8888[123]),document.getElementById(OxO8888[124]),document.getElementById(OxO8888[125]),document.getElementById(OxO8888[126]),document.getElementById(OxO8888[127]),document.getElementById(OxO8888[128]),document.getElementById(OxO8888[129]),document.getElementById(OxO8888[130]),document.getElementById(OxO8888[131]),document.getElementById(OxO8888[132]),document.getElementById(OxO8888[133]),document.getElementById(OxO8888[134]),document.getElementById(OxO8888[135]),document.getElementById(OxO8888[136]));switch(ColorMode){case 0:document.getElementById(OxO8888[138])[OxO8888[137]]=OxO8888[139];Show(document.getElementById(OxO8888[123]),document.getElementById(OxO8888[124]),document.getElementById(OxO8888[125]),document.getElementById(OxO8888[126]));Hsb_Changed(Ox3a);break ;;case 1:document.getElementById(OxO8888[138])[OxO8888[137]]=OxO8888[140];document.getElementById(OxO8888[127])[OxO8888[137]]=OxO8888[141];Show(document.getElementById(OxO8888[123]),document.getElementById(OxO8888[127]));document.getElementById(OxO8888[123])[OxO8888[106]][OxO8888[110]]=OxO8888[142];Hsb_Changed(Ox3a);break ;;case 2:document.getElementById(OxO8888[138])[OxO8888[137]]=OxO8888[140];document.getElementById(OxO8888[127])[OxO8888[137]]=OxO8888[143];Show(document.getElementById(OxO8888[123]),document.getElementById(OxO8888[127]));document.getElementById(OxO8888[123])[OxO8888[106]][OxO8888[110]]=OxO8888[144];Hsb_Changed(Ox3a);break ;;default:break ;;} ;} ;function btnWebSafeColor_Click(Ox3a){var Ox1b3=HexToRgb(frm[OxO8888[12]].value);Ox1b3=RgbToWebSafeRgb(Ox1b3);frm[OxO8888[12]][OxO8888[99]]=RgbToHex(Ox1b3);Hex_Changed(Ox3a);} ;function checkWebSafe(){var Ox1b3=Form_Get_Rgb();if(RgbIsWebSafe(Ox1b3)){Hide(frm.btnWebSafeColor,document.getElementById(OxO8888[22]),document.getElementById(OxO8888[23]));} else {Ox1b3=RgbToWebSafeRgb(Ox1b3);SetBg(document.getElementById(OxO8888[22]),RgbToHex(Ox1b3));Show(frm.btnWebSafeColor,document.getElementById(OxO8888[22]),document.getElementById(OxO8888[23]));} ;} ;function validateNumber(Ox3a){var Ox1c8=String.fromCharCode(Ox3a.which);if(IgnoreKey(Ox3a)){return ;} ;if(OxO8888[145].indexOf(Ox1c8)!=-1){return ;} ;Ox3a[OxO8888[146]]=0;} ;function validateHex(Ox3a){if(IgnoreKey(Ox3a)){return ;} ;var Ox1c8=String.fromCharCode(Ox3a.which);if(OxO8888[147].indexOf(Ox1c8)!=-1){return ;} ;if(OxO8888[148].indexOf(Ox1c8)!=-1){return ;} ;} ;function IgnoreKey(Ox3a){var Ox1c8=String.fromCharCode(Ox3a.which);var Ox1cb= new Array(0,8,9,13,27);if(Ox1c8==null){return true;} ;for(var i=0;i<5;i++){if(Ox3a[OxO8888[146]]==Ox1cb[i]){return true;} ;} ;return false;} ;function btnCancel_Click(){if(window[OxO8888[149]]){window[OxO8888[149]].focus();} ;top.close();} ;function btnOK_Click(){var Ox1c= new String(frm[OxO8888[12]].value);if(window[OxO8888[149]]){try{window[OxO8888[149]].ColorPicker_Picked(Ox1c);} catch(e){} ;window[OxO8888[149]].focus();} ;recent=GetCookie(OxO8888[103])||OxO8888[97];for(var i=0;i<recent[OxO8888[28]];i+=6){if(recent.substr(i,6)==Ox1c){recent=recent.substr(0,i)+recent.substr(i+6);i-=6;} ;} ;if(recent[OxO8888[28]]>31*6){recent=recent.substr(0,31*6);} ;recent=frm[OxO8888[12]][OxO8888[99]]+recent;SetCookie(OxO8888[103],recent,60*60*24*365);top.close();} ;function SetGradientPosition(Ox3a,Oxf1,Oxbf){Oxf1=Oxf1-POSITIONADJUSTX+5;Oxbf=Oxbf-POSITIONADJUSTY+5;Oxf1-=7;Oxbf-=27;Oxf1=Oxf1<0?0:Oxf1>255?255:Oxf1;Oxbf=Oxbf<0?0:Oxbf>255?255:Oxbf;SetBgPosition(document.getElementById(OxO8888[150]),Oxf1-5,Oxbf-5);switch(ColorMode){case 0:var Ox1cf= new Array(0,0,0);Ox1cf[1]=Oxf1/255;Ox1cf[2]=1-(Oxbf/255);frm[OxO8888[7]][OxO8888[99]]=Math.round(Ox1cf[1]*100);frm[OxO8888[8]][OxO8888[99]]=Math.round(Ox1cf[2]*100);Hsb_Changed(Ox3a);break ;;case 1:var Ox1cf= new Array(0,0,0);Ox1cf[0]=Oxf1/255;Ox1cf[2]=1-(Oxbf/255);frm[OxO8888[5]][OxO8888[99]]=Ox1cf[0]==1?0:Math.round(Ox1cf[0]*360);frm[OxO8888[8]][OxO8888[99]]=Math.round(Ox1cf[2]*100);Hsb_Changed(Ox3a);break ;;case 2:var Ox1cf= new Array(0,0,0);Ox1cf[0]=Oxf1/255;Ox1cf[1]=1-(Oxbf/255);frm[OxO8888[5]][OxO8888[99]]=Ox1cf[0]==1?0:Math.round(Ox1cf[0]*360);frm[OxO8888[7]][OxO8888[99]]=Math.round(Ox1cf[1]*100);Hsb_Changed(Ox3a);break ;;} ;} ;function Hex_Changed(Ox3a){var Ox1c=Form_Get_Hex();var Ox1b3=HexToRgb(Ox1c);var Ox1cf=RgbToHsb(Ox1b3);Form_Set_Rgb(Ox1b3);Form_Set_Hsb(Ox1cf);SetBg(document.getElementById(OxO8888[151]),Ox1c);SetupCursors(Ox3a);SetupGradients();checkWebSafe();} ;function Rgb_Changed(Ox3a){var Ox1b3=Form_Get_Rgb();var Ox1cf=RgbToHsb(Ox1b3);var Ox1c=RgbToHex(Ox1b3);Form_Set_Hsb(Ox1cf);Form_Set_Hex(Ox1c);SetBg(document.getElementById(OxO8888[151]),Ox1c);SetupCursors(Ox3a);SetupGradients();checkWebSafe();} ;function Hsb_Changed(Ox3a){var Ox1cf=Form_Get_Hsb();var Ox1b3=HsbToRgb(Ox1cf);var Ox1c=RgbToHex(Ox1b3);Form_Set_Rgb(Ox1b3);Form_Set_Hex(Ox1c);SetBg(document.getElementById(OxO8888[151]),Ox1c);SetupCursors(Ox3a);SetupGradients();checkWebSafe();} ;function Form_Set_Hex(Ox1c){frm[OxO8888[12]][OxO8888[99]]=Ox1c;} ;function Form_Get_Hex(){var Ox1c= new String(frm[OxO8888[12]].value);for(var i=0;i<Ox1c[OxO8888[28]];i++){if(OxO8888[152].indexOf(Ox1c.substr(i,1))==-1){Ox1c=OxO8888[153];frm[OxO8888[12]][OxO8888[99]]=Ox1c;alert(formatString(msg.BadNumber,OxO8888[153],OxO8888[98]));break ;} ;} ;while(Ox1c[OxO8888[28]]<6){Ox1c=OxO8888[154]+Ox1c;} ;return Ox1c;} ;function Form_Get_Hsb(){var Ox1cf= new Array(0,0,0);Ox1cf[0]= new Number(frm[OxO8888[5]].value)/360;Ox1cf[1]= new Number(frm[OxO8888[7]].value)/100;Ox1cf[2]= new Number(frm[OxO8888[8]].value)/100;if(Ox1cf[0]>1||isNaN(Ox1cf[0])){Ox1cf[0]=1;frm[OxO8888[5]][OxO8888[99]]=360;alert(formatString(msg.BadNumber,0,360));} ;if(Ox1cf[1]>1||isNaN(Ox1cf[1])){Ox1cf[1]=1;frm[OxO8888[7]][OxO8888[99]]=100;alert(formatString(msg.BadNumber,0,100));} ;if(Ox1cf[2]>1||isNaN(Ox1cf[2])){Ox1cf[2]=1;frm[OxO8888[8]][OxO8888[99]]=100;alert(formatString(msg.BadNumber,0,100));} ;return Ox1cf;} ;function Form_Set_Hsb(Ox1cf){SetValue(frm.txtHSB_Hue,Math.round(Ox1cf[0]*360),frm.txtHSB_Saturation,Math.round(Ox1cf[1]*100),frm.txtHSB_Brightness,Math.round(Ox1cf[2]*100));} ;function Form_Get_Rgb(){var Ox1b3= new Array(0,0,0);Ox1b3[0]= new Number(frm[OxO8888[9]].value);Ox1b3[1]= new Number(frm[OxO8888[10]].value);Ox1b3[2]= new Number(frm[OxO8888[11]].value);if(Ox1b3[0]>255||isNaN(Ox1b3[0])||Ox1b3[0]!=Math.round(Ox1b3[0])){Ox1b3[0]=255;frm[OxO8888[9]][OxO8888[99]]=255;alert(formatString(msg.BadNumber,0,255));} ;if(Ox1b3[1]>255||isNaN(Ox1b3[1])||Ox1b3[1]!=Math.round(Ox1b3[1])){Ox1b3[1]=255;frm[OxO8888[10]][OxO8888[99]]=255;alert(formatString(msg.BadNumber,0,255));} ;if(Ox1b3[2]>255||isNaN(Ox1b3[2])||Ox1b3[2]!=Math.round(Ox1b3[2])){Ox1b3[2]=255;frm[OxO8888[11]][OxO8888[99]]=255;alert(formatString(msg.BadNumber,0,255));} ;return Ox1b3;} ;function Form_Set_Rgb(Ox1b3){frm[OxO8888[9]][OxO8888[99]]=Ox1b3[0];frm[OxO8888[10]][OxO8888[99]]=Ox1b3[1];frm[OxO8888[11]][OxO8888[99]]=Ox1b3[2];} ;function SetupCursors(Ox3a){var Ox1cf=Form_Get_Hsb();var Ox1b3=Form_Get_Rgb();if(RgbToYuv(Ox1b3)[0]>=0.5){SetGradientPositionDark();} else {SetGradientPositionLight();} ;if(Ox3a[OxO8888[111]]!=null){if(Ox3a[OxO8888[111]][OxO8888[155]]==OxO8888[17]){return ;} ;if(Ox3a[OxO8888[111]][OxO8888[155]]==OxO8888[21]){return ;} ;} ;var Oxf1;var Oxbf;var Ox1da;if(ColorMode>=0&&ColorMode<=2){for(var i=0;i<3;i++){Ox1cf[i]*=255;} ;} ;switch(ColorMode){case 0:Oxf1=Ox1cf[1];Oxbf=Ox1cf[2];Ox1da=Ox1cf[0]==0?1:Ox1cf[0];break ;;case 1:Oxf1=Ox1cf[0]==0?1:Ox1cf[0];Oxbf=Ox1cf[2];Ox1da=Ox1cf[1];break ;;case 2:Oxf1=Ox1cf[0]==0?1:Ox1cf[0];Oxbf=Ox1cf[1];Ox1da=Ox1cf[2];break ;;} ;Oxbf=255-Oxbf;Ox1da=255-Ox1da;SetBgPosition(document.getElementById(OxO8888[150]),Oxf1-5,Oxbf-5);document.getElementById(OxO8888[157])[OxO8888[106]][OxO8888[156]]=(Ox1da+27)+OxO8888[122];} ;function SetupGradients(){var Ox1cf=Form_Get_Hsb();var Ox1b3=Form_Get_Rgb();switch(ColorMode){case 0:SetBg(document.getElementById(OxO8888[123]),RgbToHex(HueToRgb(Ox1cf[0])));break ;;case 1:SetBg(document.getElementById(OxO8888[127]),RgbToHex(HsbToRgb( new Array(Ox1cf[0],1,Ox1cf[2]))));break ;;case 2:SetBg(document.getElementById(OxO8888[127]),RgbToHex(HsbToRgb( new Array(Ox1cf[0],Ox1cf[1],1))));break ;;default:;} ;} ;function SetGradientPositionDark(){if(GradientPositionDark){return ;} ;GradientPositionDark=true;document.getElementById(OxO8888[150])[OxO8888[106]][OxO8888[158]]=OxO8888[159];} ;function SetGradientPositionLight(){if(!GradientPositionDark){return ;} ;GradientPositionDark=false;document.getElementById(OxO8888[150])[OxO8888[106]][OxO8888[158]]=OxO8888[160];} ;function pnlGradient_Top_Click(Ox3a){Ox3a[OxO8888[161]]=true;SetGradientPosition(Ox3a,Ox3a[OxO8888[162]]-5,Ox3a[OxO8888[163]]-5);document.getElementById(OxO8888[17])[OxO8888[164]]=OxO8888[165];_down=false;} ;var _down=false;function pnlGradient_Top_MouseMove(Ox3a){Ox3a[OxO8888[161]]=true;if(!_down){return ;} ;SetGradientPosition(Ox3a,Ox3a[OxO8888[162]]-5,Ox3a[OxO8888[163]]-5);} ;function pnlGradient_Top_MouseDown(Ox3a){Ox3a[OxO8888[161]]=true;_down=true;SetGradientPosition(Ox3a,Ox3a[OxO8888[162]]-5,Ox3a[OxO8888[163]]-5);document.getElementById(OxO8888[17])[OxO8888[164]]=OxO8888[166];} ;function pnlGradient_Top_MouseUp(Ox3a){_down=false;Ox3a[OxO8888[161]]=true;SetGradientPosition(Ox3a,Ox3a[OxO8888[162]]-5,Ox3a[OxO8888[163]]-5);document.getElementById(OxO8888[17])[OxO8888[164]]=OxO8888[165];} ;function Document_MouseUp(){e[OxO8888[161]]=true;document.getElementById(OxO8888[17])[OxO8888[164]]=OxO8888[165];} ;function SetVerticalPosition(Ox3a,Ox1da){var Ox1da=Ox1da-POSITIONADJUSTZ;if(Ox1da<27){Ox1da=27;} ;if(Ox1da>282){Ox1da=282;} ;document.getElementById(OxO8888[157])[OxO8888[106]][OxO8888[156]]=Ox1da+OxO8888[122];Ox1da=1-((Ox1da-27)/255);switch(ColorMode){case 0:if(Ox1da==1){Ox1da=0;} ;frm[OxO8888[5]][OxO8888[99]]=Math.round(Ox1da*360);Hsb_Changed(Ox3a);break ;;case 1:frm[OxO8888[7]][OxO8888[99]]=Math.round(Ox1da*100);Hsb_Changed(Ox3a);break ;;case 2:frm[OxO8888[8]][OxO8888[99]]=Math.round(Ox1da*100);Hsb_Changed(Ox3a);break ;;} ;} ;function pnlVertical_Top_Click(Ox3a){SetVerticalPosition(Ox3a,Ox3a[OxO8888[163]]-5);Ox3a[OxO8888[161]]=true;} ;function pnlVertical_Top_MouseMove(Ox3a){if(!window[OxO8888[167]]){return ;} ;if(Ox3a[OxO8888[146]]!=1){return ;} ;SetVerticalPosition(Ox3a,Ox3a[OxO8888[163]]-5);Ox3a[OxO8888[161]]=true;} ;function pnlVertical_Top_MouseDown(Ox3a){window[OxO8888[167]]=true;SetVerticalPosition(Ox3a,Ox3a[OxO8888[163]]-5);Ox3a[OxO8888[161]]=true;} ;function pnlVertical_Top_MouseUp(Ox3a){window[OxO8888[167]]=false;SetVerticalPosition(Ox3a,Ox3a[OxO8888[163]]-5);Ox3a[OxO8888[161]]=true;} ;function SetCookie(name,Ox7,Ox8){var Ox9=name+OxO8888[168]+escape(Ox7)+OxO8888[169];if(Ox8){var Oxa= new Date();Oxa.setSeconds(Oxa.getSeconds()+Ox8);Ox9+=OxO8888[170]+Oxa.toUTCString()+OxO8888[171];} ;document[OxO8888[172]]=Ox9;} ;function GetCookie(name){var Oxc=document[OxO8888[172]].split(OxO8888[171]);for(var i=0;i<Oxc[OxO8888[28]];i++){var Oxe=Oxc[i].split(OxO8888[168]);if(name==Oxe[0].replace(/\s/g,OxO8888[97])){return unescape(Oxe[1]);} ;} ;} ;function GetCookieDictionary(){var Ox10={};var Oxc=document[OxO8888[172]].split(OxO8888[171]);for(var i=0;i<Oxc[OxO8888[28]];i++){var Oxe=Oxc[i].split(OxO8888[168]);Ox10[Oxe[0].replace(/\s/g,OxO8888[97])]=unescape(Oxe[1]);} ;return Ox10;} ;function GetQuery(name){var i=0;while(window[OxO8888[174]][OxO8888[173]].indexOf(name+OxO8888[168],i)!=-1){var Ox7=window[OxO8888[174]][OxO8888[173]].substr(window[OxO8888[174]][OxO8888[173]].indexOf(name+OxO8888[168],i));Ox7=Ox7.substr(name[OxO8888[28]]+1);if(Ox7.indexOf(OxO8888[175])!=-1){if(Ox7.indexOf(OxO8888[175])==0){Ox7=OxO8888[97];} else {Ox7=Ox7.substr(0,Ox7.indexOf(OxO8888[175]));} ;} ;return unescape(Ox7);} ;return OxO8888[97];} ;function RgbIsWebSafe(Ox1b3){var Ox1c=RgbToHex(Ox1b3);for(var i=0;i<3;i++){if(OxO8888[176].indexOf(Ox1c.substr(i*2,2))==-1){return false;} ;} ;return true;} ;function RgbToWebSafeRgb(Ox1b3){var Ox1ea= new Array(Ox1b3[0],Ox1b3[1],Ox1b3[2]);if(RgbIsWebSafe(Ox1b3)){return Ox1ea;} ;var Ox1eb= new Array(0x00,0x33,0x66,0x99,0xCC,0xFF);for(var i=0;i<3;i++){for(var Ox5a=1;Ox5a<6;Ox5a++){if(Ox1ea[i]>Ox1eb[Ox5a-1]&&Ox1ea[i]<Ox1eb[Ox5a]){if(Ox1ea[i]-Ox1eb[Ox5a-1]>Ox1eb[Ox5a]-Ox1ea[i]){Ox1ea[i]=Ox1eb[Ox5a];} else {Ox1ea[i]=Ox1eb[Ox5a-1];} ;break ;} ;} ;} ;return Ox1ea;} ;function RgbToYuv(Ox1b3){var Ox1ed= new Array();Ox1ed[0]=(Ox1b3[0]*0.299+Ox1b3[1]*0.587+Ox1b3[2]*0.114)/255;Ox1ed[1]=(Ox1b3[0]*-0.169+Ox1b3[1]*-0.332+Ox1b3[2]*0.500+128)/255;Ox1ed[2]=(Ox1b3[0]*0.500+Ox1b3[1]*-0.419+Ox1b3[2]*-0.0813+128)/255;return Ox1ed;} ;function RgbToHsb(Ox1b3){var Ox1ef= new Array(Ox1b3[0],Ox1b3[1],Ox1b3[2]);var Ox1f0= new Number(1);var Ox1f1= new Number(0);var Ox1f2= new Number(1);var Ox1cf= new Array(0,0,0);var Ox1f3= new Array();for(var i=0;i<3;i++){Ox1ef[i]=Ox1b3[i]/255;if(Ox1ef[i]<Ox1f0){Ox1f0=Ox1ef[i];} ;if(Ox1ef[i]>Ox1f1){Ox1f1=Ox1ef[i];} ;} ;Ox1f2=Ox1f1-Ox1f0;Ox1cf[2]=Ox1f1;if(Ox1f2==0){return Ox1cf;} ;Ox1cf[1]=Ox1f2/Ox1f1;for(var i=0;i<3;i++){Ox1f3[i]=(((Ox1f1-Ox1ef[i])/6)+(Ox1f2/2))/Ox1f2;} ;if(Ox1ef[0]==Ox1f1){Ox1cf[0]=Ox1f3[2]-Ox1f3[1];} else {if(Ox1ef[1]==Ox1f1){Ox1cf[0]=(1/3)+Ox1f3[0]-Ox1f3[2];} else {if(Ox1ef[2]==Ox1f1){Ox1cf[0]=(2/3)+Ox1f3[1]-Ox1f3[0];} ;} ;} ;if(Ox1cf[0]<0){Ox1cf[0]+=1;} else {if(Ox1cf[0]>1){Ox1cf[0]-=1;} ;} ;return Ox1cf;} ;function HsbToRgb(Ox1cf){var Ox1b3=HueToRgb(Ox1cf[0]);var Ox49=Ox1cf[2]*255;for(var i=0;i<3;i++){Ox1b3[i]=Ox1b3[i]*Ox1cf[2];Ox1b3[i]=((Ox1b3[i]-Ox49)*Ox1cf[1])+Ox49;Ox1b3[i]=Math.round(Ox1b3[i]);} ;return Ox1b3;} ;function RgbToHex(Ox1b3){var Ox1c= new String();for(var i=0;i<3;i++){Ox1b3[2-i]=Math.round(Ox1b3[2-i]);Ox1c=Ox1b3[2-i].toString(16)+Ox1c;if(Ox1c[OxO8888[28]]%2==1){Ox1c=OxO8888[154]+Ox1c;} ;} ;return Ox1c.toUpperCase();} ;function HexToRgb(Ox1c){var Ox1b3= new Array();for(var i=0;i<3;i++){Ox1b3[i]= new Number(OxO8888[177]+Ox1c.substr(i*2,2));} ;return Ox1b3;} ;function HueToRgb(Ox1f8){var Ox1f9=Ox1f8*360;var Ox1b3= new Array(0,0,0);var Ox1fa=(Ox1f9%60)/60;if(Ox1f9<60){Ox1b3[0]=255;Ox1b3[1]=Ox1fa*255;} else {if(Ox1f9<120){Ox1b3[1]=255;Ox1b3[0]=(1-Ox1fa)*255;} else {if(Ox1f9<180){Ox1b3[1]=255;Ox1b3[2]=Ox1fa*255;} else {if(Ox1f9<240){Ox1b3[2]=255;Ox1b3[1]=(1-Ox1fa)*255;} else {if(Ox1f9<300){Ox1b3[2]=255;Ox1b3[0]=Ox1fa*255;} else {if(Ox1f9<360){Ox1b3[0]=255;Ox1b3[2]=(1-Ox1fa)*255;} ;} ;} ;} ;} ;} ;return Ox1b3;} ;function CheckHexSelect(){if(window[OxO8888[178]]&&window[OxO8888[179]]&&frm[OxO8888[12]]){var Ox16=OxO8888[76]+frm[OxO8888[12]][OxO8888[99]];if(Ox16[OxO8888[28]]==7){if(window[OxO8888[180]]!=Ox16){window[OxO8888[180]]=Ox16;window.do_select(Ox16);} ;} ;} ;} ;setInterval(CheckHexSelect,10);