$('.comments-blocks').slick({
	arrows: true,
	dots: true,
	slidesToShow: 1,
	slidesToScroll: 1
});
$(document).ready(function() {
    var descBtn = $('.courseinfo-info-nav-item-desc');
    var programmBtn = $('.courseinfo-info-nav-item-programm');
    var desc = $('#desc');
    var programm = $('#programm');
    var desclink = $('.courseinfo-info-nav-item-desc p')
    var programmlink = $('.courseinfo-info-nav-item-programm p')
    var menuBtn = $('.top-nav_btn');
    var menu = $('.top-nav_menu');
	menuBtn.on('click', function(event) {
        event.preventDefault();
        menu.toggleClass('top-nav_menu__active');
    });
    programmlink.on('click', function(event) {
        event.preventDefault();
        programmBtn.css("border-bottom", "2px solid #0b98cd");
        programmlink.css("color", "#0b98cd");
        descBtn.css("border", "none");
        desclink.css("color", "black");
        desc.css("display", "none");
        programm.css("display", "block")
    });
    desclink.on('click', function(event) {
        event.preventDefault();
        descBtn.css("border-bottom", "2px solid #0b98cd");
        desclink.css("color", "#0b98cd");
        programmBtn.css("border", "none");
        programmlink.css("color", "black");
        programm.css("display", "none");
        desc.css("display", "block")
    });
});



    
