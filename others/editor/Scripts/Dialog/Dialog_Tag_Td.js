var OxO636e=["inp_width","inp_height","sel_align","sel_valign","inp_bgColor","inp_borderColor","inp_borderColorLight","inp_borderColorDark","inp_class","inp_id","inp_tooltip","sel_noWrap","sel_CellScope","value","bgColor","backgroundColor","style","","id","borderColor","borderColorLight","borderColorDark","className","width","height","align","vAlign","title","noWrap","scope","ValidNumber","ValidID","class","valign","onclick"];var inp_width=Window_GetElement(window,OxO636e[0],true);var inp_height=Window_GetElement(window,OxO636e[1],true);var sel_align=Window_GetElement(window,OxO636e[2],true);var sel_valign=Window_GetElement(window,OxO636e[3],true);var inp_bgColor=Window_GetElement(window,OxO636e[4],true);var inp_borderColor=Window_GetElement(window,OxO636e[5],true);var inp_borderColorLight=Window_GetElement(window,OxO636e[6],true);var inp_borderColorDark=Window_GetElement(window,OxO636e[7],true);var inp_class=Window_GetElement(window,OxO636e[8],true);var inp_id=Window_GetElement(window,OxO636e[9],true);var inp_tooltip=Window_GetElement(window,OxO636e[10],true);var sel_noWrap=Window_GetElement(window,OxO636e[11],true);var sel_CellScope=Window_GetElement(window,OxO636e[12],true);SyncToView=function SyncToView_Td(){inp_bgColor[OxO636e[13]]=element.getAttribute(OxO636e[14])||element[OxO636e[16]][OxO636e[15]]||OxO636e[17];inp_id[OxO636e[13]]=element.getAttribute(OxO636e[18])||OxO636e[17];inp_bgColor[OxO636e[16]][OxO636e[15]]=inp_bgColor[OxO636e[13]];inp_borderColor[OxO636e[13]]=element.getAttribute(OxO636e[19])||OxO636e[17];inp_borderColor[OxO636e[16]][OxO636e[15]]=inp_borderColor[OxO636e[13]];inp_borderColorLight[OxO636e[13]]=element.getAttribute(OxO636e[20])||OxO636e[17];inp_borderColorLight[OxO636e[16]][OxO636e[15]]=inp_borderColorLight[OxO636e[13]];inp_borderColorDark[OxO636e[13]]=element.getAttribute(OxO636e[21])||OxO636e[17];inp_borderColorDark[OxO636e[16]][OxO636e[15]]=inp_borderColorDark[OxO636e[13]];inp_class[OxO636e[13]]=element[OxO636e[22]];inp_width[OxO636e[13]]=element.getAttribute(OxO636e[23])||element[OxO636e[16]][OxO636e[23]]||OxO636e[17];inp_height[OxO636e[13]]=element.getAttribute(OxO636e[24])||element[OxO636e[16]][OxO636e[24]]||OxO636e[17];sel_align[OxO636e[13]]=element.getAttribute(OxO636e[25])||OxO636e[17];sel_valign[OxO636e[13]]=element.getAttribute(OxO636e[26])||OxO636e[17];inp_tooltip[OxO636e[13]]=element.getAttribute(OxO636e[27])||OxO636e[17];sel_noWrap[OxO636e[13]]=element.getAttribute(OxO636e[28])||OxO636e[17];sel_CellScope[OxO636e[13]]=element.getAttribute(OxO636e[29])||OxO636e[17];} ;SyncTo=function SyncTo_Td(element){if(inp_bgColor[OxO636e[13]]){if(element[OxO636e[16]][OxO636e[15]]){element[OxO636e[16]][OxO636e[15]]=inp_bgColor[OxO636e[13]];} else {element[OxO636e[14]]=inp_bgColor[OxO636e[13]];} ;} else {element.removeAttribute(OxO636e[14]);} ;element[OxO636e[19]]=inp_borderColor[OxO636e[13]];element[OxO636e[20]]=inp_borderColorLight[OxO636e[13]];element[OxO636e[21]]=inp_borderColorDark[OxO636e[13]];element[OxO636e[22]]=inp_class[OxO636e[13]];if(element[OxO636e[16]][OxO636e[23]]||element[OxO636e[16]][OxO636e[24]]){try{element[OxO636e[16]][OxO636e[23]]=inp_width[OxO636e[13]];element[OxO636e[16]][OxO636e[24]]=inp_height[OxO636e[13]];} catch(er){alert(CE_GetStr(OxO636e[30]));} ;} else {try{element[OxO636e[23]]=inp_width[OxO636e[13]];element[OxO636e[24]]=inp_height[OxO636e[13]];} catch(er){alert(CE_GetStr(OxO636e[30]));} ;} ;var Ox275=/[^a-z\d]/i;if(Ox275.test(inp_id.value)){alert(CE_GetStr(OxO636e[31]));return ;} ;element[OxO636e[25]]=sel_align[OxO636e[13]];element[OxO636e[18]]=inp_id[OxO636e[13]];element[OxO636e[26]]=sel_valign[OxO636e[13]];element[OxO636e[28]]=sel_noWrap[OxO636e[13]];element[OxO636e[27]]=inp_tooltip[OxO636e[13]];element[OxO636e[29]]=sel_CellScope[OxO636e[13]];if(element[OxO636e[18]]==OxO636e[17]){element.removeAttribute(OxO636e[18]);} ;if(element[OxO636e[29]]==OxO636e[17]){element.removeAttribute(OxO636e[29]);} ;if(element[OxO636e[28]]==OxO636e[17]){element.removeAttribute(OxO636e[28]);} ;if(element[OxO636e[14]]==OxO636e[17]){element.removeAttribute(OxO636e[14]);} ;if(element[OxO636e[19]]==OxO636e[17]){element.removeAttribute(OxO636e[19]);} ;if(element[OxO636e[20]]==OxO636e[17]){element.removeAttribute(OxO636e[20]);} ;if(element[OxO636e[7]]==OxO636e[17]){element.removeAttribute(OxO636e[7]);} ;if(element[OxO636e[22]]==OxO636e[17]){element.removeAttribute(OxO636e[22]);} ;if(element[OxO636e[22]]==OxO636e[17]){element.removeAttribute(OxO636e[32]);} ;if(element[OxO636e[25]]==OxO636e[17]){element.removeAttribute(OxO636e[25]);} ;if(element[OxO636e[26]]==OxO636e[17]){element.removeAttribute(OxO636e[33]);} ;if(element[OxO636e[27]]==OxO636e[17]){element.removeAttribute(OxO636e[27]);} ;if(element[OxO636e[23]]==OxO636e[17]){element.removeAttribute(OxO636e[23]);} ;if(element[OxO636e[24]]==OxO636e[17]){element.removeAttribute(OxO636e[24]);} ;} ;inp_borderColor[OxO636e[34]]=function inp_borderColor_onclick(){SelectColor(inp_borderColor);} ;inp_bgColor[OxO636e[34]]=function inp_bgColor_onclick(){SelectColor(inp_bgColor);} ;inp_borderColorLight[OxO636e[34]]=function inp_borderColorLight_onclick(){SelectColor(inp_borderColorLight);} ;inp_borderColorDark[OxO636e[34]]=function inp_borderColorDark_onclick(){SelectColor(inp_borderColorDark);} ;