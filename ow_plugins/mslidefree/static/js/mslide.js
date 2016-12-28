$(document).ready(function() {
  
  var items = [];
  var previousItem;
  var displayedItem;
  var nextItem;
  var fwd_bckwd = 'fwd';
  
  
  
  function CreateElements() {
    items = $('#ms-carousel-container').children('div');
  }
  
  function SetupCarousel() {
    $(items[0]).addClass('previous-item');
    $(items[0]).appendTo('#ms-carousel-container');
    previousItem = 0;
    
    $(items[1]).addClass('displayed-item');
    $(items[1]).appendTo('#ms-carousel-container');
    displayedItem = 1;
    
    $(items[2]).addClass('next-item');
    $(items[2]).appendTo('#ms-carousel-container');
    nextItem = 2;
    
    for(var x = (nextItem + 1); x < items.length; x++) {
      $(items[x]).addClass('inline-next');
      $(items[x]).appendTo('#ms-carousel-container');
    }
  }
  
  function Next() {
    if(nextItem < items.length) {
      $('.previous-item').addClass('inline-previous');
    $('.previous-item').removeClass('previous-item');
    previousItem += 1;
    
    $('.displayed-item').addClass('previous-item');
    $('.displayed-item').removeClass('displayed-item');
    displayedItem += 1;
    
    $('.next-item').addClass('displayed-item');
    $('.next-item').removeClass('next-item');
    nextItem += 1;
    
    $(items[nextItem]).addClass('next-item');
    $(items[nextItem]).removeClass('inline-next');
    } else {
      fwd_bckwd = 'bkwrd';
    }
  }
  
  function Previous() {
    if(previousItem >= 0) {
      $('.next-item').addClass('inline-next');
    $('.next-item').removeClass('next-item');
    nextItem -= 1;
    
    $('.displayed-item').addClass('next-item');
    $('.displayed-item').removeClass('displayed-item');
    displayedItem -= 1;
    
    $('.previous-item').addClass('displayed-item');
    $('.previous-item').removeClass('previous-item');
    previousItem -= 1;

                          $(items[previousItem]).addClass('previous-item');
      //remove class inline-previous
    $('.previous-item').removeClass('inline-previous');
    } else {
      fwd_bckwd = 'fwd';
    }
  }
 
  
  CreateElements();
  SetupCarousel();
  
  $('#ms-next').on('click', Next);
  
  var interval = setInterval(function() {
    if(fwd_bckwd === 'fwd') {
      Next();
    } else {
      Previous();
    }
  }, 3500);
  
  $('#ms-prev').on('click', Previous);
});