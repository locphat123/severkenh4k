<meta charset="utf-8"/> 
<head><script src="http://server-vietsubhd.rhcloud.com/js/jwplayer.js"></script>
<script type="text/javascript">jwplayer.key = "9U20qKjWNKSZClNXOwUJZGLzkw8oCm4JjNwKvg==";</script>
</head>
<body style="margin:0;padding:0;background-color:white;color:black;">
<div id="myElement"><div class="fixed-background"><img src="http://server-vietsubhd.rhcloud.com/loading.gif" height="100%" width="100%"></div></div>
<script type="text/javascript">
      var playerInstance = jwplayer("myElement");
      playerInstance.setup({
      sources: [{"file":"","label":"","type":"video/mp4"},{"file":"","label":"","type":"video/mp4"},{"file":"","label":"","type":"video/mp4","default":"true"}],
	image: "http://server-vietsubhd.rhcloud.com/preview.jpg",
      width: "100%",
	  height: "100%",
      autostart: false,
	tracks: [{file: "","default": true}],
	logo: {
			file: "http://server-vietsubhd.rhcloud.com/text.png",
			hide: "false",
			link: "http://kenh4k.com",
			linktarget: "_blank",
			position: "top-left",
		},

      });
	  playerInstance.addButton(
   "http://demo.tutorialspots.com/jwplayer/icon-download.png",
   "Tải Phim Này", 
   function() {  
    window.open(playerInstance.getPlaylistItem()["sources"][playerInstance.getCurrentQuality()].file+"?type=video/mp4&title=Kenh4k.com", "_blank").blur();
   //window.location.href = playerInstance.getPlaylistItem()["sources"][playerInstance.getCurrentQuality()].file;

 },
"download"
);
</script>