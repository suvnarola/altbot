

$(document).ready(function () {





  $(window).on('load', function () {

    if ($('#status').val() == 'Success') {

      $('#modal').modal({

        backdrop: 'static'

      });

      $('.progress-bar').css('width', '100%');

      $('#myTab a[href="#schedulePanel"]').tab('show');

    }



  });



  $('.close').click(function () {

    $('.navbar-collapse').removeClass('show');

  });



  if ($(window).width() <= 540) {

    $('.footer-inner h5').click(function () {

      $(this).next('ul').slideToggle();

      $(this).toggleClass('panel-active');

    });

  }



  /*---------------------------popup-------------------------*/



  $('#modalToggle').click(function () {

    $('#modal').modal({

      backdrop: 'static'

    });

  });



  $('#infoContinue').click(function (e) {

    e.preventDefault();



    $('.progress-bar').css('width', '50%');

    //$('.progress-bar').html('Step 2 of 5');

    $('#myTab a[href="#ads"]').tab('show');

  });



  $('#adsContinue').click(function (e) {

    e.preventDefault();
    var account_number = $('.account-number').val();
    var broker = Cookies.get('broker');
    if (broker == "") {
      $('#dropdownMenuButton').addClass('ac-error');
      return false;
    }
    else if (account_number == "") {

      $('.account-number').addClass('ac-error');
      return false;
    }

    else {
      window.location.href = "https://www.click2sell.eu/buy?mvtradingtechnoloalt";
      $('#dropdownMenuButton').removeClass('ac-error');
      $('.account-number').removeClass('ac-error');
      
    }

    $('.progress-bar').css('width', '75%');

    //$('.progress-bar').html('Step 3 of 5');

    $('#myTab a[href="#placementPanel"]').tab('show');

    var investment = ($('#ex8').val());

    var monthly_return = ($('#ex9').val());

    var account_number = $('.account-number').val();

    var broker = Cookies.get('broker');

    var obj = {

      investment,

      monthly_return,

      account_number,

      broker

    };

    Cookies.set('data', obj);

  });



  $('#ads').click(function (e) {

    e.preventDefault();

    // $('.progress-bar').css('width', '100%');

    // var investment = ($('#ex8').val());

    // var monthly_return = ($('#ex9').val());

    // var risk = ($('#ex10').val());

    // var max_loss = ($('#ex11').val());

    // var account_number = $('.account-number').val();

    // var broker = Cookies.get('broker');

    // var obj = {

    //   investment,

    //   monthly_return,

    //   risk,

    //   max_loss,

    //   account_number,

    //   broker

    // };

    // Cookies.set('data', obj);

  });





  $('#get-bot').click(function (e) {

    e.preventDefault();

    var investment = ($('#ex8').val());

    var monthly_return = ($('#ex9').val());



    var obj = {

      investment,

      monthly_return,

    };



    Cookies.set('front_data', obj);

  });







  /*$('#scheduleContinue').click(function (e) {

    e.preventDefault();

    $('.progress-bar').css('width', '100%');

    //$('.progress-bar').html('Step 5 of 5');

    $('#myTab a[href="#reviewPanel"]').tab('show');

  });*/



  $('#activate').click(function (e) {

    e.preventDefault();

    var formData = {

      campaign_name: $('#campaignName').val(),

      start_date: $('#start-date').val(),

      end_date: $('#end-date').val(),

      days: {

        sunday: $('#sunday').prop('checked'),

        monday: $('#monday').prop('checked'),

        tuesday: $('#tuesday').prop('checked'),

        wednesday: $('#wednesday').prop('checked'),

        thurday: $('#thursday').prop('checked'),

        friday: $('#friday').prop('checked'),

        saturday: $('#saturday').prop('checked'),

      },

      start_time: $('#start-time').val(),

      end_time: $('#end-time').val()

    }

  })





  $(".paypal").click(function () {

    $("#paypal-form").submit();

  });



  $('.closefirstmodal').click(function () {

    $('#Warning').modal('show');

    $("#modal").css("background-color", "transparent");

  });



  $('.confirmclosed').click(function () {

    Cookies.set('broker', "");

    $('#Warning').modal('hide');

    $('#modal').modal('hide');

  });



  $('#scheduleContinue').click(function () {

    $('#Warning').modal('hide');

    $('#modal').modal('hide');

  });



  /*-------------------------------------slider--------------------------*/



  $('.feedback-img-slider').slick({

    arrows: false,

    dots: false,

    infinite: true,

    speed: 1000,

    lazyLoad: 'ondemand',

    slidesToShow: 3,

    slidesToScroll: 1,

    autoplay: true,

    autoplaySpeed: 1200,

    responsive: [

      {

        breakpoint: 1025,

        settings: {

          slidesToShow: 2,

          arrows: false

        }

      },

      {

        breakpoint: 541,

        settings: {

          slidesToShow: 1,

          arrows: false

        }

      }

    ]

  });



});





/*-------------------------------------progress bar--------------------------*/







