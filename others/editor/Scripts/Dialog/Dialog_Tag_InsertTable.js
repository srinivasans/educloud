var OxO99b8=["rowSpan","removeNode","parentNode","firstChild","colSpan","nodeName","TABLE","Map","rowIndex","rows","length","cells","cellIndex","innerHTML","cell","\x26nbsp;","Can\x27t Get The Position ?","RowCount","ColCount","Unknown Error , pos ",":"," already have cell","Unknown Error , Unable to find bestpos","tbody","uniqueID","richDropDown","list_Templates","subcolumns","addcolumns","subcolspan","addcolspan","btn_row_dialog","btn_cell_dialog","inp_cell_width","inp_cell_height","btn_cell_editcell","tabledesign","subrows","addrows","subrowspan","addrowspan","display","style","none","disabled","value","width","height","ValidNumber","","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd height=\x2224\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable\x3E\x3Ctr\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3Ctd\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable border=\x220\x22 cellpadding=\x220\x22 cellspacing=\x220\x22\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x222\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22 rowspan=\x222\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22 rowspan=\x222\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","\x3Ctable border=\x220\x22 cellpadding=\x220\x22 cellspacing=\x220\x22\x3E\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x223\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3Ctd valign=\x22top\x22\x3E\x3C/td\x3E\x3C/tr\x3E","\x3Ctr\x3E\x3Ctd valign=\x22top\x22 colspan=\x223\x22\x3E\x3C/td\x3E\x3C/tr\x3E\x3C/table\x3E","DIV","onclick","bgColor","#d4d0c8","onmouseover","onmouseout","ondblclick","contains","ToggleBorder","backgroundColor","highlight","cssText","runtimeStyle","background-color:gray","onload","body","document","csstext","font:normal 11px Tahoma;background-color:windowtext;","isOpen"];function Table_GetCellFromMap(Ox3e6,Ox3e7,Ox3e8){var Ox3e9=Ox3e6[Ox3e7];if(Ox3e9){return Ox3e9[Ox3e8];} ;} ;function Table_CanSubRowSpan(Ox3eb){return Ox3eb[OxO99b8[0]]>1;} ;function Element_RemoveNode(element,Ox3ed){if(element[OxO99b8[1]]){element.removeNode(Ox3ed);return ;} ;var p=element[OxO99b8[2]];if(!p){return ;} ;if(Ox3ed){p.removeChild(element);return ;} ;while(true){var Ox134=element[OxO99b8[3]];if(!Ox134){break ;} ;p.insertBefore(Ox134,element);} ;p.removeChild(element);} ;function Table_CanSubColSpan(Ox3eb){return Ox3eb[OxO99b8[4]]>1;} ;function Table_GetTable(Ox3a){for(;Ox3a!=null;Ox3a=Ox3a[OxO99b8[2]]){if(Ox3a[OxO99b8[5]]==OxO99b8[6]){return Ox3a;} ;} ;return null;} ;function Table_SubRowSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox34=Table_GetCellPositionFromMap(Ox3e6,Ox3eb);var Ox3f2=Ox3f1[OxO99b8[9]].item(Ox3eb[OxO99b8[2]][OxO99b8[8]]+Ox3eb[OxO99b8[0]]-1);var Ox3f3=0;for(var i=0;i<Ox3f2[OxO99b8[11]][OxO99b8[10]];i++){var Ox3f4=Ox3f2[OxO99b8[11]].item(i);var Ox3f5=Table_GetCellPositionFromMap(Ox3e6,Ox3f4);if(Ox3f5[OxO99b8[12]]<Ox34[OxO99b8[12]]){Ox3f3=i+1;} ;} ;for(var i=0;i<Ox3eb[OxO99b8[4]];i++){var Ox134=Ox3f2.insertCell(Ox3f3);if(Browser_IsOpera()){Ox134[OxO99b8[13]]=OxO99b8[14];} else {if(Browser_IsGecko()||Browser_IsSafari()){Ox134[OxO99b8[13]]=OxO99b8[15];} ;} ;} ;Ox3eb[OxO99b8[0]]--;} ;function Table_GetCellPositionFromMap(Ox3e6,Ox3eb){for(var Oxbf=0;Oxbf<Ox3e6[OxO99b8[10]];Oxbf++){var Ox3e9=Ox3e6[Oxbf];for(var Oxf1=0;Oxf1<Ox3e9[OxO99b8[10]];Oxf1++){if(Ox3e9[Oxf1]==Ox3eb){return {rowIndex:Oxbf,cellIndex:Oxf1};} ;} ;} ;throw ( new Error(-1,OxO99b8[16]));} ;function Table_GetCellMap(Ox3f1){return Table_CalculateTableInfo(Ox3f1)[OxO99b8[7]];} ;function Table_GetRowCount(Ox3a){return Table_CalculateTableInfo(Ox3a)[OxO99b8[17]];} ;function Table_GetColCount(Ox3a){return Table_CalculateTableInfo(Ox3a)[OxO99b8[18]];} ;function Table_CalculateTableInfo(Ox3a){var Ox3f1=Table_GetTable(Ox3a);var Ox3fb=Ox3f1[OxO99b8[9]];for(var Oxae=Ox3fb[OxO99b8[10]]-1;Oxae>=0;Oxae--){var Ox3fc=Ox3fb.item(Oxae);if(Ox3fc[OxO99b8[11]][OxO99b8[10]]==0){Element_RemoveNode(Ox3fc,true);continue ;} ;} ;var Ox3fd=Ox3fb[OxO99b8[10]];var Ox3fe=0;var Ox3ff= new Array(Ox3fb.length);for(var Ox400=0;Ox400<Ox3fd;Ox400++){Ox3ff[Ox400]=[];} ;function Ox401(Oxae,Ox134,Ox3eb){while(Oxae>=Ox3fd){Ox3ff[Ox3fd]=[];Ox3fd++;} ;var Ox402=Ox3ff[Oxae];if(Ox134>=Ox3fe){Ox3fe=Ox134+1;} ;if(Ox402[Ox134]!=null){throw ( new Error(-1,OxO99b8[19]+Oxae+OxO99b8[20]+Ox134+OxO99b8[21]));} ;Ox402[Ox134]=Ox3eb;} ;function Ox403(Oxae,Ox134){var Ox402=Ox3ff[Oxae];if(Ox402){return Ox402[Ox134];} ;} ;for(var Ox400=0;Ox400<Ox3fb[OxO99b8[10]];Ox400++){var Ox3fc=Ox3fb.item(Ox400);var Ox404=Ox3fc[OxO99b8[11]];for(var Ox405=0;Ox405<Ox404[OxO99b8[10]];Ox405++){var Ox3eb=Ox404.item(Ox405);var Ox406=Ox3eb[OxO99b8[0]];var Ox407=Ox3eb[OxO99b8[4]];var Ox402=Ox3ff[Ox400];var Ox408=-1;for(var Ox409=0;Ox409<Ox3fe+Ox407+1;Ox409++){if(Ox406==1&&Ox407==1){if(Ox402[Ox409]==null){Ox408=Ox409;break ;} ;} else {var Ox40a=true;for(var Ox40b=0;Ox40b<Ox406;Ox40b++){for(var Ox40c=0;Ox40c<Ox407;Ox40c++){if(Ox403(Ox400+Ox40b,Ox409+Ox40c)!=null){Ox40a=false;break ;} ;} ;} ;if(Ox40a){Ox408=Ox409;break ;} ;} ;} ;if(Ox408==-1){throw ( new Error(-1,OxO99b8[22]));} ;if(Ox406==1&&Ox407==1){Ox401(Ox400,Ox408,Ox3eb);} else {for(var Ox40b=0;Ox40b<Ox406;Ox40b++){for(var Ox40c=0;Ox40c<Ox407;Ox40c++){Ox401(Ox400+Ox40b,Ox408+Ox40c,Ox3eb);} ;} ;} ;} ;} ;var Ox27={};Ox27[OxO99b8[17]]=Ox3fd;Ox27[OxO99b8[18]]=Ox3fe;Ox27[OxO99b8[7]]=Ox3ff;for(var Oxae=0;Oxae<Ox3fd;Oxae++){var Ox402=Ox3ff[Oxae];for(var Ox134=0;Ox134<Ox3fe;Ox134++){} ;} ;return Ox27;} ;function Table_SubColSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);Ox3eb[OxO99b8[2]].insertCell(Ox3eb[OxO99b8[12]]+1)[OxO99b8[0]]=Ox3eb[OxO99b8[0]];Ox3eb[OxO99b8[4]]--;} ;function Table_CanAddRowSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox34=Table_GetCellPositionFromMap(Ox3e6,Ox3eb);var Ox40f=0;for(var Ox134=0;Ox134<Ox3eb[OxO99b8[4]];Ox134++){var Ox410=Table_GetCellFromMap(Ox3e6,Ox34[OxO99b8[8]]+Ox3eb[OxO99b8[0]],Ox34[OxO99b8[12]]+Ox134);if(Ox410==null){return false;} ;if(Ox40f!=0&&Ox40f!=Ox410[OxO99b8[0]]){return false;} ;Ox40f=Ox410[OxO99b8[0]];var Ox411=Table_GetCellPositionFromMap(Ox3e6,Ox410);if(Ox411[OxO99b8[12]]<Ox34[OxO99b8[12]]){return false;} ;if(Ox411[OxO99b8[12]]+Ox410[OxO99b8[4]]>Ox34[OxO99b8[12]]+Ox3eb[OxO99b8[4]]){return false;} ;} ;return true;} ;function Table_AddRow(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox3fe=Ox118[OxO99b8[18]];var Ox3fd=Ox118[OxO99b8[17]];var Ox3fc;if(!Browser_IsSafari()){Ox3fc=Ox3f1.insertRow(-1);} else {var Ox111=document.createElement(OxO99b8[23]);Ox3f1.appendChild(Ox111);Ox3fc=Ox111.insertRow(-1);} ;for(var i=0;i<Ox3fe;i++){var Ox134=Ox3fc.insertCell(-1);if(Browser_IsOpera()){Ox134[OxO99b8[13]]=OxO99b8[14];} else {if(Browser_IsGecko()||Browser_IsSafari()){Ox134[OxO99b8[13]]=OxO99b8[15];} ;} ;} ;} ;function Table_AddCol(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);for(var Oxae=0;Oxae<Ox3f1[OxO99b8[9]][OxO99b8[10]];Oxae++){var Ox3fc=Ox3f1[OxO99b8[9]].item(Oxae);var Ox134=Ox3fc.insertCell(-1);if(Browser_IsOpera()){Ox134[OxO99b8[13]]=OxO99b8[14];} else {if(Browser_IsGecko()||Browser_IsSafari()){Ox134[OxO99b8[13]]=OxO99b8[15];} ;} ;} ;} ;function Table_CleanUpTableInfo(Ox3f1,Ox118){var Ox3fb=Ox3f1[OxO99b8[9]];for(var Oxae=Ox3fb[OxO99b8[10]]-1;Oxae>=0;Oxae--){var Ox3fc=Ox3fb.item(Oxae);if(Ox3fc[OxO99b8[11]][OxO99b8[10]]==0){Element_RemoveNode(Ox3fc,true);continue ;} ;} ;var Ox3e6=Ox118[OxO99b8[7]];var Ox3fe=Ox118[OxO99b8[18]];var Ox3fd=Ox118[OxO99b8[17]];for(var Ox400=1;Ox400<Ox3fd;Ox400++){var Ox415=true;for(var Ox405=0;Ox405<Ox3fe;Ox405++){if(Table_GetCellFromMap(Ox3e6,Ox400-1,Ox405)!=Table_GetCellFromMap(Ox3e6,Ox400,Ox405)){Ox415=false;break ;} ;} ;if(Ox415){for(var Ox405=0;Ox405<Ox3fe;Ox405++){var Ox3eb=Table_GetCellFromMap(Ox3e6,Ox400,Ox405);if(Ox3eb){if(Ox3eb[OxO99b8[0]]>1){Ox3eb[OxO99b8[0]]=Ox3eb[OxO99b8[0]]-1;} ;Ox405+=Ox3eb[OxO99b8[4]]-1;} ;} ;} ;} ;for(var Ox405=1;Ox405<Ox3fe;Ox405++){var Ox415=true;for(var Ox400=0;Ox400<Ox3fd;Ox400++){if(Table_GetCellFromMap(Ox3e6,Ox400,Ox405-1)!=Table_GetCellFromMap(Ox3e6,Ox400,Ox405)){Ox415=false;break ;} ;} ;if(Ox415){for(var Ox400=0;Ox400<Ox3fd;Ox400++){var Ox3eb=Table_GetCellFromMap(Ox3e6,Ox400,Ox405);if(Ox3eb){if(Ox3eb[OxO99b8[4]]>1){Ox3eb[OxO99b8[4]]=Ox3eb[OxO99b8[4]]-1;} ;Ox400+=Ox3eb[OxO99b8[0]]-1;} ;} ;} ;} ;} ;function Table_SubRow(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox3fe=Ox118[OxO99b8[18]];var Ox3fd=Ox118[OxO99b8[17]];if(Ox3fd==0){return ;} ;var Ox417={};var Ox400=Ox3fd-1;for(var Ox405=0;Ox405<Ox3fe;Ox405++){var Ox3eb=Table_GetCellFromMap(Ox3e6,Ox400,Ox405);if(Ox3eb){if(Ox417[Ox3eb[OxO99b8[24]]]){continue ;} ;Ox417[Ox3eb[OxO99b8[24]]]=true;if(Ox3eb[OxO99b8[0]]==1){Element_RemoveNode(Ox3eb,true);} else {Ox3eb[OxO99b8[0]]=Ox3eb[OxO99b8[0]]-1;} ;} ;} ;Ox118[OxO99b8[17]]--;Table_CleanUpTableInfo(Ox3f1,Ox118);} ;function Table_CanAddColSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox34=Table_GetCellPositionFromMap(Ox3e6,Ox3eb);var Ox419=0;for(var Oxae=0;Oxae<Ox3eb[OxO99b8[0]];Oxae++){var Ox410=Table_GetCellFromMap(Ox3e6,Ox34[OxO99b8[8]]+Oxae,Ox34[OxO99b8[12]]+Ox3eb[OxO99b8[4]]);if(Ox410==null){return false;} ;if(Ox419!=0&&Ox419!=Ox410[OxO99b8[4]]){return false;} ;Ox419=Ox410[OxO99b8[4]];var Ox411=Table_GetCellPositionFromMap(Ox3e6,Ox410);if(Ox411[OxO99b8[8]]<Ox34[OxO99b8[8]]){return false;} ;if(Ox411[OxO99b8[8]]+Ox410[OxO99b8[0]]>Ox34[OxO99b8[8]]+Ox3eb[OxO99b8[0]]){return false;} ;} ;return true;} ;function Table_AddRowSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox34=Table_GetCellPositionFromMap(Ox3e6,Ox3eb);var Ox40f=0;for(var Ox134=0;Ox134<Ox3eb[OxO99b8[4]];Ox134++){var Ox410=Table_GetCellFromMap(Ox3e6,Ox34[OxO99b8[8]]+Ox3eb[OxO99b8[0]],Ox34[OxO99b8[12]]+Ox134);if(Ox40f==0){Ox40f=Ox410[OxO99b8[0]];} ;Element_RemoveNode(Ox410,true);} ;Ox3eb[OxO99b8[0]]=Ox3eb[OxO99b8[0]]+Ox40f;for(var Ox400=0;Ox400<Ox3eb[OxO99b8[0]];Ox400++){for(var Ox405=0;Ox405<Ox3eb[OxO99b8[4]];Ox405++){Ox118[OxO99b8[7]][Ox34[OxO99b8[8]]+Ox400][Ox34[OxO99b8[12]]+Ox405]=Ox3eb;} ;} ;Table_CleanUpTableInfo(Ox3f1,Ox118);} ;function Table_AddColSpan(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox34=Table_GetCellPositionFromMap(Ox3e6,Ox3eb);var Ox419=0;for(var Oxae=0;Oxae<Ox3eb[OxO99b8[0]];Oxae++){var Ox410=Table_GetCellFromMap(Ox3e6,Ox34[OxO99b8[8]]+Oxae,Ox34[OxO99b8[12]]+Ox3eb[OxO99b8[4]]);if(Ox419==0){Ox419=Ox410[OxO99b8[4]];} ;Element_RemoveNode(Ox410,true);} ;Ox3eb[OxO99b8[4]]+=Ox419;for(var Ox400=0;Ox400<Ox3eb[OxO99b8[0]];Ox400++){for(var Ox405=0;Ox405<Ox3eb[OxO99b8[4]];Ox405++){Ox118[OxO99b8[7]][Ox34[OxO99b8[8]]+Ox400][Ox34[OxO99b8[12]]+Ox405]=Ox3eb;} ;} ;Table_CleanUpTableInfo(Ox3f1,Ox118);} ;function Table_SubCol(Ox3eb){var Ox3f1=Table_GetTable(Ox3eb);var Ox118=Table_CalculateTableInfo(Ox3f1);var Ox3e6=Ox118[OxO99b8[7]];var Ox3fe=Ox118[OxO99b8[18]];var Ox3fd=Ox118[OxO99b8[17]];if(Ox3fd==0){return ;} ;var Ox417={};var Ox405=Ox3fe-1;for(var Ox400=0;Ox400<Ox3fd;Ox400++){var Ox3eb=Table_GetCellFromMap(Ox3e6,Ox400,Ox405);if(Ox417[Ox3eb[OxO99b8[24]]]){continue ;} ;Ox417[Ox3eb[OxO99b8[24]]]=true;if(Ox3eb[OxO99b8[4]]==1){Element_RemoveNode(Ox3eb,true);} else {Ox3eb[OxO99b8[4]]=Ox3eb[OxO99b8[4]]-1;} ;} ;Ox118[OxO99b8[18]]--;Table_CleanUpTableInfo(Ox3f1,Ox118);} ;var richDropDown=Window_GetElement(window,OxO99b8[25],true);var list_Templates=Window_GetElement(window,OxO99b8[26],true);var subcolumns=Window_GetElement(window,OxO99b8[27],true);var addcolumns=Window_GetElement(window,OxO99b8[28],true);var subcolspan=Window_GetElement(window,OxO99b8[29],true);var addcolspan=Window_GetElement(window,OxO99b8[30],true);var btn_row_dialog=Window_GetElement(window,OxO99b8[31],true);var btn_cell_dialog=Window_GetElement(window,OxO99b8[32],true);var inp_cell_width=Window_GetElement(window,OxO99b8[33],true);var inp_cell_height=Window_GetElement(window,OxO99b8[34],true);var btn_cell_editcell=Window_GetElement(window,OxO99b8[35],true);var tabledesign=Window_GetElement(window,OxO99b8[36],true);var subrows=Window_GetElement(window,OxO99b8[37],true);var addrows=Window_GetElement(window,OxO99b8[38],true);var subrowspan=Window_GetElement(window,OxO99b8[39],true);var addrowspan=Window_GetElement(window,OxO99b8[40],true);btn_cell_editcell[OxO99b8[42]][OxO99b8[41]]=OxO99b8[43];UpdateState=function UpdateState_InsertTable(){btn_cell_editcell[OxO99b8[44]]=btn_row_dialog[OxO99b8[44]]=btn_cell_dialog[OxO99b8[44]]=GetElementCell()==null;} ;SyncToView=function SyncToView_InsertTable(){var Ox42f=GetElementCell();if(Ox42f){inp_cell_width[OxO99b8[45]]=Ox42f[OxO99b8[46]];inp_cell_height[OxO99b8[45]]=Ox42f[OxO99b8[47]];} ;} ;SyncTo=function SyncTo_InsertTable(element){var Ox42f=GetElementCell();if(Ox42f){try{Ox42f[OxO99b8[46]]=inp_cell_width[OxO99b8[45]];Ox42f[OxO99b8[47]]=inp_cell_height[OxO99b8[45]];} catch(er){alert(CE_GetStr(OxO99b8[48]));} ;} ;} ;function selectTemplate(Oxaa){var Ox432=OxO99b8[49];switch(Oxaa){case 1:Ox432=OxO99b8[50];break ;;case 2:Ox432=OxO99b8[51];break ;;case 3:Ox432=OxO99b8[52];break ;;case 4:Ox432=OxO99b8[53];Ox432=Ox432+OxO99b8[54];Ox432=Ox432+OxO99b8[55];break ;;case 5:Ox432=OxO99b8[53];Ox432=Ox432+OxO99b8[56];break ;;case 6:Ox432=OxO99b8[57];Ox432=Ox432+OxO99b8[58];Ox432=Ox432+OxO99b8[59];break ;;default:break ;;} ;try{var Ox2c=document.createElement(OxO99b8[60]);Ox2c[OxO99b8[13]]=Ox432;var Ox3f1=Ox2c.children(0);ApplyTable(Ox3f1,element);ApplyTable(Ox3f1,tabledesign);HandleTableChanged();hidePopup();} catch(x){} ;} ;subcolumns[OxO99b8[61]]=function subcolumns_onclick(){Table_SubCol(GetElementCell());Table_SubCol(currentcell);HandleTableChanged();} ;addcolumns[OxO99b8[61]]=function addcolumns_onclick(){Table_AddCol(GetElementCell());Table_AddCol(currentcell);HandleTableChanged();} ;subrows[OxO99b8[61]]=function subrows_onclick(){Table_SubRow(GetElementCell());Table_SubRow(currentcell);HandleTableChanged();} ;addrows[OxO99b8[61]]=function addrows_onclick(){Table_AddRow(currentcell);Table_AddRow(GetElementCell());HandleTableChanged();} ;subcolspan[OxO99b8[61]]=function subcolspan_onclick(){Table_SubColSpan(GetElementCell());Table_SubColSpan(currentcell);HandleTableChanged();} ;addcolspan[OxO99b8[61]]=function addcolspan_onclick(){Table_AddColSpan(GetElementCell());Table_AddColSpan(currentcell);HandleTableChanged();} ;subrowspan[OxO99b8[61]]=function subrowspan_onclick(){Table_SubRowSpan(GetElementCell());Table_SubRowSpan(currentcell);HandleTableChanged();} ;addrowspan[OxO99b8[61]]=function addrowspan_onclick(){Table_AddRowSpan(GetElementCell());Table_AddRowSpan(currentcell);HandleTableChanged();} ;function InitDesignTableCells(){for(var Oxae=0;Oxae<tabledesign[OxO99b8[9]][OxO99b8[10]];Oxae++){var Ox3fc=tabledesign[OxO99b8[9]][Oxae];for(var Ox134=0;Ox134<Ox3fc[OxO99b8[11]][OxO99b8[10]];Ox134++){var Ox3eb=Ox3fc[OxO99b8[11]][Ox134];Ox3eb.removeAttribute(OxO99b8[46]);Ox3eb.removeAttribute(OxO99b8[47]);Ox3eb[OxO99b8[46]]=OxO99b8[49];Ox3eb[OxO99b8[47]]=OxO99b8[49];Ox3eb[OxO99b8[62]]=OxO99b8[63];Ox3eb[OxO99b8[64]]=cell_mouseover;Ox3eb[OxO99b8[65]]=cell_mouseout;Ox3eb[OxO99b8[61]]=cell_click;Ox3eb[OxO99b8[66]]=cell_dblclick;} ;} ;} ;function Element_Contains(element,Ox68){if(!Browser_IsOpera()){if(element[OxO99b8[67]]){return element.contains(Ox68);} ;} ;for(;Ox68!=null;Ox68=Ox68[OxO99b8[2]]){if(element==Ox68){return true;} ;} ;return false;} ;function HandleTableChanged(){if(!Element_Contains(tabledesign,currentcell)){SetCurrentCell(tabledesign.rows(0).cells(0));} ;InitDesignTableCells();UpdateButtonStates();editor.ExecCommand(OxO99b8[68]);editor.ExecCommand(OxO99b8[68]);} ;function cell_mouseover(){var Ox3eb=this;Ox3eb[OxO99b8[42]][OxO99b8[69]]=OxO99b8[70];} ;function cell_mouseout(){var Ox3eb=this;Ox3eb[OxO99b8[42]][OxO99b8[69]]=OxO99b8[63];} ;function cell_click(){var Ox3eb=this;SetCurrentCell(Ox3eb);} ;function cell_dblclick(){var Ox3eb=this;SetCurrentCell(Ox3eb);} ;btn_cell_editcell[OxO99b8[61]]=function btn_cell_editcell_onclick(){var Ox3eb=GetElementCell();var Ox176=editor.EditInWindow(Ox3eb.innerHTML,window);if(Ox176!=null&&Ox176!==false){Ox3eb[OxO99b8[13]]=Ox176;} ;} ;btn_cell_dialog[OxO99b8[61]]=function btn_cell_dialog_onclick(){editor.SetNextDialogWindow(window);editor.ShowTagDialogWithNoCancellable(GetElementCell());} ;btn_row_dialog[OxO99b8[61]]=function btn_row_dialog_onclick(){editor.SetNextDialogWindow(window);editor.ShowTagDialogWithNoCancellable(GetElementCell().parentNode);} ;btn_row_dialog[OxO99b8[42]][OxO99b8[41]]=btn_cell_dialog[OxO99b8[42]][OxO99b8[41]]=OxO99b8[43];var currentcell=null;function GetElementCell(){if(currentcell==null){return null;} ;return element[OxO99b8[9]][currentcell[OxO99b8[2]][OxO99b8[8]]][OxO99b8[11]][currentcell[OxO99b8[12]]];} ;function SetCurrentCell(Ox3eb){if(currentcell!=null){if(Browser_IsWinIE()){currentcell[OxO99b8[72]][OxO99b8[71]]=OxO99b8[49];} else {currentcell[OxO99b8[42]][OxO99b8[71]]=OxO99b8[49];} ;} ;currentcell=Ox3eb;if(Browser_IsWinIE()){currentcell[OxO99b8[72]][OxO99b8[71]]=OxO99b8[73];} else {currentcell[OxO99b8[42]][OxO99b8[71]]=OxO99b8[73];} ;UpdateButtonStates();SyncToViewInternal();} ;function UpdateButtonStates(){subcolspan[OxO99b8[44]]=!Table_CanSubColSpan(currentcell);addcolspan[OxO99b8[44]]=!Table_CanAddColSpan(currentcell);subrowspan[OxO99b8[44]]=!Table_CanSubRowSpan(currentcell);addrowspan[OxO99b8[44]]=!Table_CanAddRowSpan(currentcell);subrows[OxO99b8[44]]=Table_GetRowCount(currentcell)<2;subcolumns[OxO99b8[44]]=Table_GetColCount(currentcell)<2;} ;function ApplyTable(src,Ox449){if(Browser_IsSafari()){Ox449[OxO99b8[42]][OxO99b8[47]]=OxO99b8[49];} ;for(var Oxae=Ox449[OxO99b8[9]][OxO99b8[10]]-1;Oxae>=0;Oxae--){Ox449[OxO99b8[9]][Oxae].removeNode(true);} ;for(var Oxae=0;Oxae<src[OxO99b8[9]][OxO99b8[10]];Oxae++){var Ox44a=src[OxO99b8[9]][Oxae];var Ox44b;if(!Browser_IsSafari()){Ox44b=Ox449.insertRow(-1);} else {var Ox111=document.createElement(OxO99b8[23]);Ox449.appendChild(Ox111);Ox44b=Ox111.insertRow(-1);} ;Ox44b[OxO99b8[42]][OxO99b8[71]]=Ox44a[OxO99b8[42]][OxO99b8[71]];for(var Ox134=0;Ox134<Ox44a[OxO99b8[11]][OxO99b8[10]];Ox134++){var Ox44c=Ox44a[OxO99b8[11]][Ox134];var Ox44d=Ox44b.insertCell(-1);Ox44d[OxO99b8[0]]=Ox44c[OxO99b8[0]];Ox44d[OxO99b8[4]]=Ox44c[OxO99b8[4]];Ox44d[OxO99b8[42]][OxO99b8[71]]=Ox44c[OxO99b8[42]][OxO99b8[71]];if(Browser_IsOpera()){Ox44d[OxO99b8[13]]=OxO99b8[14];} else {if(Browser_IsGecko()||Browser_IsSafari()){Ox44d[OxO99b8[13]]=OxO99b8[15];} ;} ;} ;} ;} ;window[OxO99b8[74]]=function window_onload(){ApplyTable(element,tabledesign);InitDesignTableCells();SetCurrentCell(tabledesign[OxO99b8[9]][0][OxO99b8[11]][0]);} ;function updateList(){} ;var oPopup;if(Browser_IsWinIE()){oPopup=window.createPopup();} else {richDropDown[OxO99b8[42]][OxO99b8[41]]=OxO99b8[43];} ;function selectTemplates(){if(Browser_IsWinIE()){oPopup[OxO99b8[76]][OxO99b8[75]][OxO99b8[13]]=list_Templates[OxO99b8[13]];oPopup[OxO99b8[76]][OxO99b8[75]][OxO99b8[42]][OxO99b8[77]]=OxO99b8[78];oPopup.show(0,32,380,220,richDropDown);} ;} ;function hidePopup(){if(Browser_IsWinIE()){if(oPopup){if(oPopup[OxO99b8[79]]){oPopup.hide();} ;} ;} ;} ;