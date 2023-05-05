if (document.readyState === 'complete' || document.readyState === "interactive") {
  cInit();
} else {
  window.addEventListener('DOMContentLoaded', () => {
    cInit();
  });
}

function cInit() {
  //remove loading
  document.querySelector('#loader-wrapper').style.opacity = 0;
  setTimeout(() => {
    document.querySelector('#loader-wrapper').remove()
  }, 300);


  try {
    $('.select').select2();
  } catch (error) {

  }

  $(".sidebar-dropdown > a").click(function () {
    $(".sidebar-submenu").slideUp(200);
    if ($(this).parent().hasClass("active")) {
      $(".sidebar-dropdown").removeClass("active");
      $(this).parent().removeClass("active");
    } else {
      $(".sidebar-dropdown").removeClass("active");
      $(this).next(".sidebar-submenu").slideDown(200);
      $(this).parent().addClass("active");
    }
  });

  $("#menuToggle").click(function () {
    $(".page-wrapper").toggleClass("toggled");
    $('body').toggleClass('open');
  });


  $('.sidebar-menu').find('.active').each(function (index, e) {
    let parent = $(e).parents('.sidebar-submenu')
    if (parent.length !== 0) {
      parent.slideDown(200);
      parent.siblings('a').toggleClass('navActiveGroup')
      $(e).toggleClass('active')
      $(e).toggleClass('navActive')
    } else {
      $(e).toggleClass('active')
      $(e).toggleClass('navActive')
    }

    // $(e).toggleClass('active')
  })

  // =============CSS==============
  try {
    $('#cFilter').parent().addClass('custom_body_card')
    $(".select2-search-field").css("width", "auto");
    $(".select2-input").css("width", "auto");
  } catch (err) {
  }

}

function cFilter() {
  try {
    tab = $('#bootstrap-data-table').DataTable()

    $('#cFilter').find('select').each(function (i, e) {
      if ($(e).val() !== '') {
        tab.column(i).search("^" + $(e).val() + "$", true, false).draw()
      } else {
        tab.column(i).search($(e).val(), true, false).draw()
      }
    })
  } catch (er) {

  }
}