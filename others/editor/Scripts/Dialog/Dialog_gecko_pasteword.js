var OxO249b=["onload","contentWindow","idSource","innerHTML","body","document","","designMode","on","contentEditable","fontFamily","style","Tahoma","fontSize","11px","color","black","background","white","length","\x22","\x3C$1$3"," ","\x26nbsp;","$1","\x3Ch$1\x3E","\x3C$1\x3E$2\x3C/$1\x3E","\x27"];var editor=Window_GetDialogArguments(window);function cancel(){Window_CloseDialog(window);} ;window[OxO249b[0]]=function (){var iframe=document.getElementById(OxO249b[2])[OxO249b[1]];iframe[OxO249b[5]][OxO249b[4]][OxO249b[3]]=OxO249b[6];iframe[OxO249b[5]][OxO249b[7]]=OxO249b[8];iframe[OxO249b[5]][OxO249b[4]][OxO249b[9]]=true;iframe[OxO249b[5]][OxO249b[4]][OxO249b[11]][OxO249b[10]]=OxO249b[12];iframe[OxO249b[5]][OxO249b[4]][OxO249b[11]][OxO249b[13]]=OxO249b[14];iframe[OxO249b[5]][OxO249b[4]][OxO249b[11]][OxO249b[15]]=OxO249b[16];iframe[OxO249b[5]][OxO249b[4]][OxO249b[11]][OxO249b[17]]=OxO249b[18];iframe.focus();} ;function insertContent(){var iframe=document.getElementById(OxO249b[2])[OxO249b[1]];var Ox18f=iframe[OxO249b[5]][OxO249b[4]][OxO249b[3]];if(Ox18f&&Ox18f[OxO249b[19]]>0){editor.PasteHTML(_RemoveWord(Ox18f));Window_CloseDialog(window);} ;} ;function _RemoveWord(Ox236){Ox236=Ox236.replace(/<[\/]?(base|meta|link|style|font|st1|shape|path|lock|imagedata|stroke|formulas|xml|del|ins|[ovwxp]:\w+)[^>]*?>/gi,OxO249b[6]);Ox236=Ox236.replace(/\s*mso-[^:]+:[^;"]+;?/gi,OxO249b[6]);Ox236=Ox236.replace(/<!--[\s\S]*?-->/gi,OxO249b[6]);Ox236=Ox236.replace(/\s*MARGIN: 0cm 0cm 0pt\s*;/gi,OxO249b[6]);Ox236=Ox236.replace(/\s*MARGIN: 0cm 0cm 0pt\s*"/gi,OxO249b[20]);Ox236=Ox236.replace(/\s*TEXT-INDENT: 0cm\s*;/gi,OxO249b[6]);Ox236=Ox236.replace(/\s*TEXT-INDENT: 0cm\s*"/gi,OxO249b[20]);Ox236=Ox236.replace(/\s*TEXT-ALIGN: [^\s;]+;?"/gi,OxO249b[20]);Ox236=Ox236.replace(/\s*PAGE-BREAK-BEFORE: [^\s;]+;?"/gi,OxO249b[20]);Ox236=Ox236.replace(/\s*FONT-VARIANT: [^\s;]+;?"/gi,OxO249b[20]);Ox236=Ox236.replace(/\s*tab-stops:[^;"]*;?/gi,OxO249b[6]);Ox236=Ox236.replace(/\s*tab-stops:[^"]*/gi,OxO249b[6]);Ox236=Ox236.replace(/<(\w[^>]*) class=([^ |>]*)([^>]*)/gi,OxO249b[21]);Ox236=Ox236.replace(/\s*style="\s*"/gi,OxO249b[6]);Ox236=Ox236.replace(/<SPAN\s*[^>]*>\s* \s*<\/SPAN>/gi,OxO249b[22]);Ox236=Ox236.replace(/<(\w+)[^>]*\sstyle="[^"]*DISPLAY\s?:\s?none(.*?)<\/\1>/ig,OxO249b[6]);Ox236=Ox236.replace(/<span\s*[^>]*>\s*&nbsp;\s*<\/span>/gi,OxO249b[23]);Ox236=Ox236.replace(/<SPAN\s*[^>]*><\/SPAN>/gi,OxO249b[6]);Ox236=Ox236.replace(/<(\w[^>]*) lang=([^ |>]*)([^>]*)/gi,OxO249b[21]);Ox236=Ox236.replace(/<SPAN\s*>(.*?)<\/SPAN>/gi,OxO249b[24]);Ox236=Ox236.replace(/<\/?\w+:[^>]*>/gi,OxO249b[6]);Ox236=Ox236.replace(/<\!--.*?-->/g,OxO249b[6]);Ox236=Ox236.replace(/<H\d>\s*<\/H\d>/gi,OxO249b[6]);Ox236=Ox236.replace(/<(\w[^>]*) language=([^ |>]*)([^>]*)/gi,OxO249b[21]);Ox236=Ox236.replace(/<(\w[^>]*) onmouseover="([^\"]*)"([^>]*)/gi,OxO249b[21]);Ox236=Ox236.replace(/<(\w[^>]*) onmouseout="([^\"]*)"([^>]*)/gi,OxO249b[21]);Ox236=Ox236.replace(/<H(\d)([^>]*)>/gi,OxO249b[25]);Ox236=Ox236.replace(/<(H\d)><FONT[^>]*>(.*?)<\/FONT><\/\1>/gi,OxO249b[26]);Ox236=Ox236.replace(/<(H\d)><EM>(.*?)<\/EM><\/\1>/gi,OxO249b[26]);Ox236=Ox236.replace(/<a name="?OLE_LINK\d+"?>((.|[\r\n])*?)<\/a>/gi,OxO249b[24]);Ox236=Ox236.replace(/<a name="?_Hlt\d+"?>((.|[\r\n])*?)<\/a>/gi,OxO249b[24]);Ox236=Ox236.replace(/<a name="?_Toc\d+"?>((.|[\r\n])*?)<\/a>/gi,OxO249b[24]);Ox236=Ox236.replace(/[\\]/gi,OxO249b[20]);Ox236=Ox236.replace(/[\\]/gi,OxO249b[27]);return Ox236;} ;