var OxOdc5f=["inp_class","inp_width","inp_height","sel_align","sel_textalign","sel_float","inp_forecolor","img_forecolor","inp_backcolor","img_backcolor","inp_tooltip","value","className","width","style","height","align","styleFloat","cssFloat","textAlign","title","backgroundColor","color","","class","onclick"];var inp_class=Window_GetElement(window,OxOdc5f[0],true);var inp_width=Window_GetElement(window,OxOdc5f[1],true);var inp_height=Window_GetElement(window,OxOdc5f[2],true);var sel_align=Window_GetElement(window,OxOdc5f[3],true);var sel_textalign=Window_GetElement(window,OxOdc5f[4],true);var sel_float=Window_GetElement(window,OxOdc5f[5],true);var inp_forecolor=Window_GetElement(window,OxOdc5f[6],true);var img_forecolor=Window_GetElement(window,OxOdc5f[7],true);var inp_backcolor=Window_GetElement(window,OxOdc5f[8],true);var img_backcolor=Window_GetElement(window,OxOdc5f[9],true);var inp_tooltip=Window_GetElement(window,OxOdc5f[10],true);UpdateState=function UpdateState_Common(){} ;SyncToView=function SyncToView_Common(){inp_class[OxOdc5f[11]]=element[OxOdc5f[12]];inp_width[OxOdc5f[11]]=element[OxOdc5f[14]][OxOdc5f[13]];inp_height[OxOdc5f[11]]=element[OxOdc5f[14]][OxOdc5f[15]];sel_align[OxOdc5f[11]]=element[OxOdc5f[16]];if(Browser_IsWinIE()){sel_float[OxOdc5f[11]]=element[OxOdc5f[14]][OxOdc5f[17]];} else {sel_float[OxOdc5f[11]]=element[OxOdc5f[14]][OxOdc5f[18]];} ;sel_textalign[OxOdc5f[11]]=element[OxOdc5f[14]][OxOdc5f[19]];inp_tooltip[OxOdc5f[11]]=element[OxOdc5f[20]];inp_forecolor[OxOdc5f[11]]=revertColor(element[OxOdc5f[14]].color);inp_forecolor[OxOdc5f[14]][OxOdc5f[21]]=inp_forecolor[OxOdc5f[11]];img_forecolor[OxOdc5f[14]][OxOdc5f[21]]=inp_forecolor[OxOdc5f[11]];inp_backcolor[OxOdc5f[11]]=revertColor(element[OxOdc5f[14]].backgroundColor);inp_backcolor[OxOdc5f[14]][OxOdc5f[21]]=inp_backcolor[OxOdc5f[11]];img_backcolor[OxOdc5f[14]][OxOdc5f[21]]=inp_backcolor[OxOdc5f[11]];} ;SyncTo=function SyncTo_Common(element){element[OxOdc5f[12]]=inp_class[OxOdc5f[11]];try{element[OxOdc5f[14]][OxOdc5f[13]]=inp_width[OxOdc5f[11]];element[OxOdc5f[14]][OxOdc5f[15]]=inp_height[OxOdc5f[11]];} catch(x){} ;element[OxOdc5f[16]]=sel_align[OxOdc5f[11]];if(Browser_IsWinIE()){element[OxOdc5f[14]][OxOdc5f[17]]=sel_float[OxOdc5f[11]];} else {element[OxOdc5f[14]][OxOdc5f[18]]=sel_float[OxOdc5f[11]];} ;element[OxOdc5f[14]][OxOdc5f[19]]=sel_textalign[OxOdc5f[11]];element[OxOdc5f[20]]=inp_tooltip[OxOdc5f[11]];element[OxOdc5f[14]][OxOdc5f[22]]=inp_forecolor[OxOdc5f[11]];element[OxOdc5f[14]][OxOdc5f[21]]=inp_backcolor[OxOdc5f[11]];if(element[OxOdc5f[12]]==OxOdc5f[23]){element.removeAttribute(OxOdc5f[12]);} ;if(element[OxOdc5f[12]]==OxOdc5f[23]){element.removeAttribute(OxOdc5f[24]);} ;if(element[OxOdc5f[20]]==OxOdc5f[23]){element.removeAttribute(OxOdc5f[20]);} ;if(element[OxOdc5f[16]]==OxOdc5f[23]){element.removeAttribute(OxOdc5f[16]);} ;} ;img_forecolor[OxOdc5f[25]]=inp_forecolor[OxOdc5f[25]]=function inp_forecolor_onclick(){SelectColor(inp_forecolor,img_forecolor);} ;img_backcolor[OxOdc5f[25]]=inp_backcolor[OxOdc5f[25]]=function inp_backcolor_onclick(){SelectColor(inp_backcolor,img_backcolor);} ;