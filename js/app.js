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
            'strategies'
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
            'Forge'
		];
	
    var randomVerb = Math.floor((Math.random() * (verbs.length))),
        randomNoun = Math.floor((Math.random() * (nouns.length)));

    $('#verb').text(verbs[randomVerb]);
    $('#noun').text(nouns[randomNoun]);

    $('#verb').on('click', function(){
        // Get random
        randomVerb = Math.floor((Math.random() * (verbs.length)));
        if (randomVerb === jQuery.inArray(prevVerb, verbs)){ randomVerb = Math.floor((Math.random() * (verbs.length))); }

        // Set text and previous word
        $('#verb').text(verbs[randomVerb]);
        prevVerb = verbs[randomVerb];
    });
    $('#noun').on('click', function(){
        // Get random and check if its the same
        randomNoun = Math.floor((Math.random() * (nouns.length)));
        if (randomNoun === jQuery.inArray(prevNoun, nouns)){ randomNoun = Math.floor((Math.random() * (nouns.length))); }
        console.log(nouns[randomNoun]);

        // Set text and previous word
        $('#noun').text(nouns[randomNoun]);
        prevNoun = nouns[randomNoun];
    });
});