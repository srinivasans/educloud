var OxOd1eb=["onload","contentWindow","idSource","innerHTML","body","document","","designMode","on","contentEditable","fontFamily","style","Tahoma","fontSize","11px","color","black","background","white","length","\x3C$1$3","\x26nbsp;","\x22","\x27","$1","\x26amp;","\x26lt;","\x26gt;","\x26#39;","\x26quot;"];var editor=Window_GetDialogArguments(window);function cancel(){Window_CloseDialog(window);} ;window[OxOd1eb[0]]=function (){var iframe=document.getElementById(OxOd1eb[2])[OxOd1eb[1]];iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[3]]=OxOd1eb[6];iframe[OxOd1eb[5]][OxOd1eb[7]]=OxOd1eb[8];iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[9]]=true;iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[11]][OxOd1eb[10]]=OxOd1eb[12];iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[11]][OxOd1eb[13]]=OxOd1eb[14];iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[11]][OxOd1eb[15]]=OxOd1eb[16];iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[11]][OxOd1eb[17]]=OxOd1eb[18];iframe.focus();} ;function insertContent(){var iframe=document.getElementById(OxOd1eb[2])[OxOd1eb[1]];var Ox18f=iframe[OxOd1eb[5]][OxOd1eb[4]][OxOd1eb[3]];if(Ox18f&&Ox18f[OxOd1eb[19]]>0){Ox18f=_CleanCode(Ox18f);if(Ox18f.match(/<*>/g)){Ox18f=String_HtmlEncode(Ox18f);} ;editor.PasteHTML(Ox18f);Window_CloseDialog(window);} ;} ;function _CleanCode(Ox236){Ox236=Ox236.replace(/<\\?\??xml[^>]>/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<([\w]+) class=([^ |>]*)([^>]*)/gi,OxOd1eb[20]);Ox236=Ox236.replace(/<(\w[^>]*) lang=([^ |>]*)([^>]*)/gi,OxOd1eb[20]);Ox236=Ox236.replace(/\s*mso-[^:]+:[^;"]+;?/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<o:p>\s*<\/o:p>/g,OxOd1eb[6]);Ox236=Ox236.replace(/<o:p>.*?<\/o:p>/g,OxOd1eb[21]);Ox236=Ox236.replace(/<\/?\w+:[^>]*>/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<\!--.*-->/g,OxOd1eb[6]);Ox236=Ox236.replace(/[\\]/gi,OxOd1eb[22]);Ox236=Ox236.replace(/[\\]/gi,OxOd1eb[23]);Ox236=Ox236.replace(/<\\?\?xml[^>]*>/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<(\w+)[^>]*\sstyle="[^"]*DISPLAY\s?:\s?none(.*?)<\/\1>/ig,OxOd1eb[6]);Ox236=Ox236.replace(/<span\s*[^>]*>\s*&nbsp;\s*<\/span>/gi,OxOd1eb[21]);Ox236=Ox236.replace(/<span\s*[^>]*><\/span>/gi,OxOd1eb[6]);Ox236=Ox236.replace(/\s*style="\s*"/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<([^\s>]+)[^>]*>\s*<\/\1>/g,OxOd1eb[6]);Ox236=Ox236.replace(/<([^\s>]+)[^>]*>\s*<\/\1>/g,OxOd1eb[6]);Ox236=Ox236.replace(/<([^\s>]+)[^>]*>\s*<\/\1>/g,OxOd1eb[6]);while(Ox236.match(/<span\s*>(.*?)<\/span>/gi)){Ox236=Ox236.replace(/<span\s*>(.*?)<\/span>/gi,OxOd1eb[24]);} ;while(Ox236.match(/<font\s*>(.*?)<\/font>/gi)){Ox236=Ox236.replace(/<font\s*>(.*?)<\/font>/gi,OxOd1eb[24]);} ;Ox236=Ox236.replace(/<a name="?OLE_LINK\d+"?>((.|[\r\n])*?)<\/a>/gi,OxOd1eb[24]);Ox236=Ox236.replace(/<a name="?_Hlt\d+"?>((.|[\r\n])*?)<\/a>/gi,OxOd1eb[24]);Ox236=Ox236.replace(/<a name="?_Toc\d+"?>((.|[\r\n])*?)<\/a>/gi,OxOd1eb[24]);Ox236=Ox236.replace(/<p([^>])*>(&nbsp;)*\s*<\/p>/gi,OxOd1eb[6]);Ox236=Ox236.replace(/<p([^>])*>(&nbsp;)<\/p>/gi,OxOd1eb[6]);return Ox236;} ;function String_HtmlEncode(Ox176){if(Ox176==null){return OxOd1eb[6];} ;Ox176=Ox176.replace(/&/g,OxOd1eb[25]);Ox176=Ox176.replace(/</g,OxOd1eb[26]);Ox176=Ox176.replace(/>/g,OxOd1eb[27]);Ox176=Ox176.replace(/'/g,OxOd1eb[28]);Ox176=Ox176.replace(/\x22/g,OxOd1eb[29]);return Ox176;} ;