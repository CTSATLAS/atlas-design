$(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
    event.preventDefault();
    $(this).ekkoLightbox({
      onShow: function() {
          if (Cookies.get('doNotDisplayVideoByDefault') !== undefined) {
            $('#do-not-show-video').prop('checked', true);
          }
      }
    });
});

$(document).on('click', '#close-video', function(event) {
  event.preventDefault();

  if ($('#do-not-show-video').prop('checked') === true) {
    Cookies.set('doNotDisplayVideoByDefault', true, { expires: 365 });
  } else if ($('#do-not-show-video').prop('checked') === false && Cookies.get('doNotDisplayVideoByDefault') === 'true') {
    Cookies.remove('doNotDisplayVideoByDefault');
  }

  $('.ekko-lightbox').modal('hide');
});

$(document).ready(function() {
  if (Cookies.get('doNotDisplayVideoByDefault') === undefined) {
    $('.watch-welcome-video a').trigger('click');
  }
});