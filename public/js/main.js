(function ($) {
  $(window).load(function () {

    $('body').on('click', '.menu-toggle', function () {
      $('.sidebar').toggle(300);
      $('.bottom-block').toggle(300);
    });

    //Подключение selectbox
    var $select = $('select');
    if ($select)
      $select.styler({
        selectSearch: true
      });
  });
})(jQuery);
