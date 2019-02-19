
$(function(){
	hljs.initHighlightingOnLoad();
	
	$('#ex1-play').on('click', function(){
		sound1.stop().play();
	});
	$('#ex1-pause').on('click', function(){
		sound1.pause();
	});
	$('#ex1-stop').on('click', function(){
		sound1.stop();
	});
	$('#ex1-loop').on('click', function(){
		sound1.loop(true);
	});
	
	$('#ex2-play').on('click', function(){
		sound2.stop().play();
	});
	$('#ex2-pause').on('click', function(){
		sound2.pause();
	});
	$('#ex2-fadein').on('click', function(){
		sound2.pause().fadeIn(0.5, 2000);
	});
	$('#ex2-fadeout').on('click', function(){
		sound2.fadeOut(0, 2000);
	});
	
	$('#ex3-play1').on('click', function(){
		sound3.play('blast');
	});
	$('#ex3-play2').on('click', function(){
		sound3.play('laser');
	});
	$('#ex3-play3').on('click', function(){
		sound3.play('winner');
	});
});

var sound1 = new Howl({
  urls: ['/proj/howlerjs/sound.ogg', '/proj/howlerjs/sound.mp3']
});
var sound2 = new Howl({
  urls: ['/proj/howlerjs/sound.ogg', '/proj/howlerjs/sound.mp3'],
  loop: true,
  volume: 0.5,
  onend: function() {
    alert('Finished!');
  }
});
var sound3 = new Howl({
  urls: ['/proj/howlerjs/sounds.ogg', '/proj/howlerjs/sounds.mp3'],
  sprite: {
    blast: [0, 2000],
    laser: [3000, 700],
    winner: [5000, 9000]
  }
});
