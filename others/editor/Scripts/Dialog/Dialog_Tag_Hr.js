var OxOc66c=["inp_width","eenheid","alignment","hrcolor","hrcolorpreview","shade","sel_size","width","style","value","px","%","size","align","color","backgroundColor","noShade","noshade","","onclick"];var inp_width=Window_GetElement(window,OxOc66c[0],true);var eenheid=Window_GetElement(window,OxOc66c[1],true);var alignment=Window_GetElement(window,OxOc66c[2],true);var hrcolor=Window_GetElement(window,OxOc66c[3],true);var hrcolorpreview=Window_GetElement(window,OxOc66c[4],true);var shade=Window_GetElement(window,OxOc66c[5],true);var sel_size=Window_GetElement(window,OxOc66c[6],true);UpdateState=function UpdateState_Hr(){} ;SyncToView=function SyncToView_Hr(){if(element[OxOc66c[8]][OxOc66c[7]]){if(element[OxOc66c[8]][OxOc66c[7]].search(/%/)<0){eenheid[OxOc66c[9]]=OxOc66c[10];inp_width[OxOc66c[9]]=element[OxOc66c[8]][OxOc66c[7]].split(OxOc66c[10])[0];} else {eenheid[OxOc66c[9]]=OxOc66c[11];inp_width[OxOc66c[9]]=element[OxOc66c[8]][OxOc66c[7]].split(OxOc66c[11])[0];} ;} ;sel_size[OxOc66c[9]]=element[OxOc66c[12]];alignment[OxOc66c[9]]=element[OxOc66c[13]];hrcolor[OxOc66c[9]]=element[OxOc66c[14]];if(element[OxOc66c[14]]){hrcolor[OxOc66c[8]][OxOc66c[15]]=element[OxOc66c[14]];} ;if(element[OxOc66c[16]]){shade[OxOc66c[9]]=OxOc66c[17];} else {shade[OxOc66c[9]]=OxOc66c[18];} ;} ;SyncTo=function SyncTo_Hr(element){if(sel_size[OxOc66c[9]]){element[OxOc66c[12]]=sel_size[OxOc66c[9]];} ;if(hrcolor[OxOc66c[9]]){element[OxOc66c[14]]=hrcolor[OxOc66c[9]];} ;if(alignment[OxOc66c[9]]){element[OxOc66c[13]]=alignment[OxOc66c[9]];} ;if(shade[OxOc66c[9]]==OxOc66c[17]){element[OxOc66c[16]]=true;} else {element[OxOc66c[16]]=false;} ;if(inp_width[OxOc66c[9]]){element[OxOc66c[8]][OxOc66c[7]]=inp_width[OxOc66c[9]]+eenheid[OxOc66c[9]];} ;} ;hrcolor[OxOc66c[19]]=hrcolorpreview[OxOc66c[19]]=function hrcolor_onclick(){SelectColor(hrcolor,hrcolorpreview);} ;