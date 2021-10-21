/* global monogatari */

// Define the messages used in the game.
monogatari.action ('message').messages ({
	'Help': {
		title: 'Help',
		subtitle: 'Some useful Links',
		body: `
			<p><a href='https://developers.monogatari.io/documentation/'>Documentation</a> - Everything you need to know.</p>
			<p><a href='https://monogatari.io/demo/'>Demo</a> - A simple Demo.</p>
		`
	}
});

// Define the notifications used in the game
monogatari.action ('notification').notifications ({
	'Welcome': {
		title: 'Welcome',
		body: 'This is the Monogatari VN Engine',
		icon: ''
	}
});

// Define the Particles JS Configurations used in the game
monogatari.action ('particles').particles ({

});

// Define the canvas objects used in the game
monogatari.action ('canvas').objects ({

});

// Credits of the people involved in the creation of this awesome game
monogatari.configuration ('credits', {

});


// Define the images that will be available on your game's image gallery
monogatari.assets ('gallery', {

});

// Define the music used in the game.
monogatari.assets ('music', {
	'menubgm' : 'PerituneMaterial_Sakuya2.mp3'
});

// Define the voice files used in the game.
monogatari.assets ('voices', {

});

// Define the sounds used in the game.
monogatari.assets ('sounds', {
	'click' : 'button-3.mp3',
	'hover' : 'button-16.mp3'
});

// Define the videos used in the game.
monogatari.assets ('videos', {
	'menubg' : 'neon-back-alley-in-japan-desktop-wallpaperwaifu.com.mp4'
});

// Define the images used in the game.
monogatari.assets ('images', {
	'gamelogo' : 'yoshiwara_logo.png'
});

// Define the backgrounds for each scene.
monogatari.assets ('scenes', {
	'nothing' : 'black.jpg',
	'citybg' : 'e1db3fee0fa919c4c455ce7a39d819fe.jpg',
	'alleybg' : 'f657583aed9c0db0596f02dbfdded84a.jpg'
});


// Define the Characters
monogatari.characters ({
	'nar': {
		name: 'Narrator',
		color: '#5bcaff'
	},
	'rikka': {
		name: 'Rikka',
		color: '#5bcaff',
		sprites: {
			normal: 'neutral.png',
			happy: 'happy.png',
			angry: 'angry.png',
			suspicious: 'sus.png',
			blank: 'blank.png',
			disgusted: 'disgusted.png',
			mad: 'mad.png'
		}
	},
	'mc': {
		name: '{{player.name}}',
		color: '#5bcaff'
	}
});

monogatari.script ({
	// The game starts here.
	'Start': [
		'show scene nothing #f7f6f6 with fadeIn',
		'show notification Welcome',
		'Before we start, could you please tell me your name?',
		{
			'Input': {
				'Text': 'What is your name?',
				'Validation': function (input) {
					return input.trim ().length > 0;
				},
				'Save': function (input) {
					this.storage ({
						player: {
							name: input
						}
					});
					return true;
				},
				'Revert': function () {
					this.storage ({
						player: {
							name: ''
						}
					});
				},
				'Warning': 'You must enter a name!'
			}
		},
		'Hi {{player.name}}, your new life is about to begin!',
		'show scene citybg #f7f6f6 with fadeIn',
		'mc What a tiring day of work and to top it of it’s also raining, could this day get any worse?',
		'mc Well whatever, I’ll totally enjoy a steaming hot bath when I get home.',
		'While walking home, you hear someone from an alley',
		'show scene alleybg #f7f6f6 with fadeIn',
		'show character rikka blank at center with fadeIn',
		'rikka Yeah yeah, I will get it done soon.',
		'Hearing some suspicious talk, you decided to eavesdrop on the person only to realize the person was a she',
		'mc *shock* (What’s a young lady like her doing in an alley?)',
		'rikka Ah, what a pain. Though I do need to finish my work.',
		'Realizing she is about the leave, you decided to quickly leave the scene yourself',
		'*CLANG*',
		'show character rikka mad at center',
		'rikka Who’s there!',
		'mc (Shit! I’m dead meat!)',
		'show character rikka angry at center',
		'As you realized you fucked up, you ran away as fast as you can only to know that she caught up and pulled you back and started asking you',
		'show character rikka mad at center',
		'rikka Who are you? And what were you doing just now? Were you eavesdropping on me?',
		{
			'Choice': {
				'Dialog': 'mc (Fuck me, what should I say?)',
				'a': {
					'Text': 'Um no, I was just passing by',
					'Do': 'jump a'
				},
				'b': {
					'Text': 'Why wouldn’t I?',
					'Do': 'jump b'
				}
			}
		}
	],

	'a': [
		'show character rikka disgusted at center',
		'rikka Has anyone told you that your lying sucks ass?',
		'mc I’ll take that as a compliment.',
		'show character rikka mad at center',
		'rikka HAH!!! ARE YOU AN IDIOT?!!',
		'mc Ehe.',
		'show character rikka normal at center',
		'rikka So you were eavesdropping on me huh.',
		'mc You figured that much, congrats!',
		'show character rikka suspicious at center',
		'rikka *sigh* You really are an idiot.',
		'rikka Well whatever, dealing with an idiot won’t do me any good.',
		'Out of relieve you stay calm until she leaves, but you look at her and she seems to be tired',
		'show character rikka blank at center',
		'rikka *stomach rumbles*',
		'mc So you were hungry huh?',
		'show character rikka angry at center',
		'rikka ...',
		'show character rikka mad at center',
		'rikka SO YOU WERE PRETENDING TO BE AN IDIOT HUH?!',
		'mc !!!!!',
		'show character rikka angry at center',
		'After knowing that you were eavesdropping, she tried to land a punch on your face but then…',
		'show character rikka blank at center',
		'rikka *stomach rumbles*',
		'She falls on her knees and eventually faints',
		'show character rikka blank at center fadeOut',
		'Helplessly on the ground at an alleyway deep in the night, you decided to carry her back to your apartment',
		'show scene nothing #f7f6f6 with fadeIn',
		'To be Continued...'
	],

	'b': [
		'show character rikka suspicious at center',
		'rikka I knew it…',
		'show character rikka angry at center',
		'After knowing that you were eavesdropping, she tried to land a punch on your face but then…',
		'show character rikka blank at center',
		'rikka *stomach rumbles*',
		'She falls on her knees and eventually faints',
		'show character rikka blank at center fadeOut',
		'Helplessly on the ground at an alleyway deep in the night, you decided to carry her back to your apartment',
		'show scene nothing #f7f6f6 with fadeIn',
		'To be Continued...'
	]
});