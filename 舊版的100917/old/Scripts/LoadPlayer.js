// A Simple JavaScript to Load Player with the Workaround of MSIE
// Copyright 2009 Peter Pin-Guang Chen. All Rights Reserved.
// Version 1.1
var isIE  = (navigator.appVersion.indexOf("MSIE") != -1) ? true : false;
var isWin = (navigator.appVersion.toLowerCase().indexOf("win") != -1) ? true : false;

function LoadPlayer() {
	if (isIE && isWin) { 
			document.write('<embed type="application/x-mplayer2" src="http://140.138.5.224:9000/*YZU.m3u" width="70" height="31" autostart="true" loop="1" volume="100" />\n');
	} else {
			document.write('<object id="music" height="31" width="70" classid="clsid:6BF52A52-394A-11D3-B153-00C04F79FAA6" type="application/x-oleobject" codebase="http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,7,1112">\n');
			document.write('<param name="AutoStart" value="true" />\n');
			document.write('<param name="url" value="http://140.138.5.224:9000/*YZU.m3u" />\n');
			document.write('<param name="ShowStatusBar" value="false" />\n');
			document.write('<param name="ShowControls" value="true" />\n');
			document.write('<embed type="application/x-mplayer2" src="http://140.138.5.224:9000/*YZU.m3u" width="70" height="31" autostart="true" loop="1" volume="100" />\n');
			document.write('</object>\n');
	}
}
