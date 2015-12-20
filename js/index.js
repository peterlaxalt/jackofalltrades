var feed = new Instafeed({
  clientId: 'f07696f517a5483487b6cba255689b14',
  limit: 20,
  sortBy: 'most-liked',
  after: function () {
    var images = $("#instafeed").find('a');
    $.each(images, function(index, image) {
      var delay = (index * 75) + 'ms';
      $(image).css('-webkit-animation-delay', delay);
      $(image).css('-moz-animation-delay', delay);
      $(image).css('-ms-animation-delay', delay);
      $(image).css('-o-animation-delay', delay);
      $(image).css('animation-delay', delay);
      $(image).addClass('animated flipInX');
    });
  },
  template: '<a href="{{link}}" target="_blank"><img src="{{image}}" /><div class="likes">&hearts; {{likes}}</div></a>'
});
feed.run();
