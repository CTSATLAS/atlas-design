$(function() {
  $(document).on('click', '.nav-link', function (event) {
    event.stopPropagation();

    var $target = $(event.target);

    if ($target.attr('href') !== undefined) {
      window.location = $target.attr('href');
    }
  });
});