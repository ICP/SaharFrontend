if (navigator.userAgent.toLowerCase().indexOf('chrome') > -1)
    var t = setTimeout("resize()", 200);
else
    resize();

function resize() {
    var innerWidth = window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;
    var innerHeight = window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;
    var targetWidth = 355;
    var targetHeight = 305;
    window.resizeBy(targetWidth - innerWidth, targetHeight - innerHeight);
}

$(function () {

    if ($('#mediaplayer').length) {
	var cond = (typeof (_DEFINE.rtmpLink) !== 'undefined') ? true : false;
	if (cond) {
	    if (_DEFINE.rtmpLink.match(/&file=(.*)$/)) {
		var playerFile = _DEFINE.rtmpLink.match(/&file=(.*)$/)[1];
		var playerStream = _DEFINE.rtmpLink.match(/^(.*)&file/)[1];

	    } else {
		var playerFile = _DEFINE.rtmpLink.match(/(mp3:.*)$/)[1];
		var playerStream = _DEFINE.rtmpLink.match(/^(.*)mp3:/)[1];
	    }
	} else {
	    var playerFile = _DEFINE.fileLink;
	    var playerStream = '';

	}


	var playerProvider = (cond) ? 'rtmp' : '';
	var playerModes = (cond) ? [{'type': 'html5'}, {'type': 'flash', src: 'http://ws.irib.ir/player/mediaplayer/player.swf'}] : [{'type': 'flash', src: 'http://ws.irib.ir/player/mediaplayer/player.swf'}];

	jwplayer('mediaplayer').setup({
	    file: playerFile,
	    provider: playerProvider,
	    streamer: playerStream,
	    height: '50',
	    width: '100%',
	    bufferlength: 50,
	    repeat: 'none',
	    stretching: 'uniform',
	    smoothing: 'false',
	    modes: playerModes,
	    autostart: 'false', // should be true
	    backcolor: '#49535c',
	    screencolor: '#49535c',
	    controlbar: 'bottom',
	    skin: 'http://ws.irib.ir/player/mediaplayer/skins/kleur/kleur.xml',
	    allowscriptaccess: 'always'
	});

	player = $('#mediaplayer');

	$('#playlist').delegate('a', 'click', function (event) {
	    var time = $(this).attr('data-time');
	    if (typeof (time) !== 'undefined') {
		event.preventDefault();
		jwplayer().seek(time);
	    }
	});
    }

});