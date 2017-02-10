// Popup for the JS quiz
$('#popup-quiz').click(function(){
  var myWindow = window.open("quiz/main.html", "quiz", "width=400,height=600");
});

// Popup for Mandala
$('#popup-mandala').click(function(){
  var myWindow = window.open("https://strayblues.github.io/mandala/", "mandala", "width=900,height=600");
});

// Smooth scrollin' effect
function scrollReveal() {
  /* Check the location of each desired element */
  $('.fade-in-block').each(function(i) {

      var bottom_of_object = $(this).offset().top + $(this).outerHeight() / 4;
      var bottom_of_window = $(window).scrollTop() + $(window).height();

      /* If the object is completely visible in the window, fade it in */
      if( bottom_of_window > bottom_of_object ){

          $(this).animate({'opacity':'1'},1000);

      }

  });

}

$(document).ready(function() {
    // When page is loaded...
    scrollReveal();
    // Every time the window is scrolled...
    $(window).scroll(scrollReveal);

});