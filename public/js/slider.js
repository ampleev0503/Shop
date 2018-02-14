$(document).ready(function () {
    var $slides = $('.single_slider .slide');
    var $btnLeft = $('#btnLeft');
    var $btnRight = $('#btnRight');

    var ACTIVE = 'active_slide';
    var ACTIVE_DOT = '.active_slide';

    var SLIDE_TIME = 1000;

    $slides.not(ACTIVE_DOT).hide();

    $btnLeft.on('click', function () {
        if ($slides.filter(ACTIVE_DOT).prev().hasClass('slide')) {
            $slides.filter(ACTIVE_DOT)
                .removeClass(ACTIVE)
                .slideUp(SLIDE_TIME)
                .prev()
                .addClass(ACTIVE)
                .slideDown(SLIDE_TIME);
        } else {
            // Удаляем класс "active" и скрываем
            $slides.filter(ACTIVE_DOT).removeClass(ACTIVE).slideUp(SLIDE_TIME);
            // Устанавливаем касс "active" на последний слайд и показываем его
            $slides.last().addClass(ACTIVE).slideDown(SLIDE_TIME);
        }
    });

    $btnRight.on('click', function () {
        if ($slides.filter(ACTIVE_DOT).next().hasClass('slide')) {
            $slides.filter(ACTIVE_DOT)
                .removeClass(ACTIVE)
                .slideUp(SLIDE_TIME)
                .next()
                .addClass(ACTIVE)
                .slideDown(SLIDE_TIME);
        } else {
            // Удаляем класс "active" и скрываем
            $slides.filter(ACTIVE_DOT).removeClass(ACTIVE).slideUp(SLIDE_TIME);
            // Устанавливаем касс "active" на первый слайд и показываем его
            $slides.first().addClass(ACTIVE).slideDown(SLIDE_TIME);
        }
    });
});
