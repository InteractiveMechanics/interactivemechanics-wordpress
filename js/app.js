$(function(){
    
    $(window).on('scroll', function() {
        pos = $(this).scrollTop();
        if (pos > 75) {    
            $('#fixed-nav').addClass('active');
        } else {
            $('.toggle-nav').removeClass('active');
            $('#fixed-nav').removeClass('active');
            $('#nav-overlay').fadeOut();
        }
    });

    $('#nav-overlay').hide();
    $('.toggle-nav').on('click', function(){
        $(this).toggleClass('active');
        $('#nav-overlay').fadeToggle();
    });

    var prevNoun = 'experiences', 
        prevVerb = 'Craft',
        nouns = [
			'experiences',
			'apps',
			'websites',
			'exhibits',
			'interfaces',
            'products',
            'mobile apps',
            'strategies',
            'partnerships',
            'communities'
		],
		verbs = [
			'Craft',
			'Build',
			'Program',
			'Design',
            'Sketch',
			'Brainstorm',
            'Develop',
            'Formulate',
            'Forge',
            'Share'
		];
	
    var randomVerb = getRandomWord(verbs, prevVerb),
        randomNoun = getRandomWord(nouns, prevNoun);;

    $('#verb').text(randomVerb);
    $('#noun').text(randomNoun);

    function getRandomWord(type, prev) {
        randomWord = Math.floor((Math.random() * (type.length)));
        if (randomWord === jQuery.inArray(prev, type)){ randomWord = Math.floor((Math.random() * (type.length))); }

        return type[randomWord];
    }
    function changeNoun() {
        var random = getRandomWord(nouns, prevNoun);

        $('#noun').text(random);
        prevNoun = random;
    }
    function changeVerb() {
        var random = getRandomWord(verbs, prevVerb);

        $('#verb').text(random);
        prevVerb = random;
    }
    function setTimer(bool) {
        var timer = Math.floor(Math.random() * 4000) + 5000;

        if (bool){
            setTimeout(function(){ 
                $('#verb').addClass('hovered');
                setTimeout(function(){ changeVerb(); $('#verb').removeClass('hovered'); setTimer(false); }, 500);
            }, timer);
        } else {
            setTimeout(function(){ 
                $('#noun').addClass('hovered');
                setTimeout(function(){ changeNoun(); $('#noun').removeClass('hovered'); setTimer(true); }, 500);
            }, timer);
        }
    }

    $('#verb').on('click', changeVerb);
    $('#noun').on('click', changeNoun);

    setTimer(false);
});