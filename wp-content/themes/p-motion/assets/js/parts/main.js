(function(w,doc) {
if (!w.__utlWdgt ) {
    w.__utlWdgt = true;
    var d = doc, s = d.createElement('script'), g = 'getElementsByTagName';
    s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
    s.src = ('https:' == w.location.protocol ? 'https' : 'http')  + '://w.uptolike.com/widgets/v1/uptolike.js';
    var h=d[g]('body')[0];
    h.appendChild(s);
}})(window,document);

transformicons.add('.tcon')

// global

jQuery(document).ready(function($) {
    
    // all
    
    $('.tcon').click(function () {
        $('.main-header-menu').toggleClass('hide');
    });
    
    // front page
    
    $('.home-slider ul').bxSlider({
        onSliderLoad: function(){
			$('.last-news-bg video').trigger('play');
		},
		onSlideAfter: function(){
			$('.last-news-bg video').trigger('play');
		},
        auto: true
    });
    
    var figure = $('.team-member').hover( hoverVideo, hideVideo );

    function hoverVideo(e) {  
        $('video', this).get(0).play(); 
    }

    function hideVideo(e) {
        $('video', this).get(0).pause(); 
    }
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 200) {
            $('#header').addClass('run');
        } else {
            $('#header').removeClass('run');
        }
    });
    
    // services 
    
    // single site
    
     setTimeout(function(){
        wow = new WOW(
            {
                boxClass:     'wow',      // default
                animateClass: 'animated', // default
                offset:       200,        // default 
                mobile:       true,       // default
                live:         true        // default
            }
        )
        wow.init();
    }, 2000);
    
    $('.single-site-content p, .single-site-content img').addClass('wow fadeInUp');
    
    $('.single-site-content img').closest('a').attr('data-lightbox', 'roadtrip');  
    
    //services page 
    
    $(window).scroll(function() {
        if ($(this).scrollTop() > 100) {
            $('.service-title, .section-first').addClass('run');
        } else {
            $('.service-title, .section-first').removeClass('run');
        }
    });

    $('.service-page-nav a').click(function (e) {
        e.preventDefault();
        var a = $("[data-anchor='" + $(this).attr("href").replace("#", "") + "']");
        $("html, body").animate({
            scrollTop: (a.offset().top - 200) + 'px'
        });
    });
    $('.section-desc-more').click(function() {
        $(this).hide();
        $(this).next('.service-work-desc-more').show();
    });
    
    // portfolio 
    
    $(function(){
        $('#portfolio').mixItUp();
    });
    
});