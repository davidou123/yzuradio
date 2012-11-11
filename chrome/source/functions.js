var player = chrome.extension.getBackgroundPage();
function stopPlay() {
				chrome.browserAction.setIcon({path:"stop.png"});
				chrome.browserAction.setBadgeText({text:""});
				player.document.getElementById("player").innerHTML ="";
				localStorage["playing"] = '';
}

function play(text){
				chrome.browserAction.setIcon({path:"play.png"});
				setIconText(text);
				localStorage["playing"] = localStorage[text];
				
				setPlay();
}

function setIconText(text){
				chrome.browserAction.setBadgeBackgroundColor({color:[255, 255, 255, 20]});
				chrome.browserAction.setBadgeText({text:text});
}

function setVolume(text){
				localStorage["playVolume"] = text;
				setPlay();
}
function initialize(){
	if (localStorage["PlayAtTheBeginning"] == undefined){
		localStorage["PlayAtTheBeginning"] = false;
	}
	
	if (localStorage["PlayAtTheBeginning"] == false){
			localStorage["channelTitle"] = "¤¸´¼¤§­µRadio";
	}
}
initialize();