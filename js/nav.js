    $(window).scroll(function scrolldown() {
      if ($(window).scrollTop() >400) {
        $('.nav-header').addClass('aan');
        $('.nav-container').addClass('actief');

      } else {

        $('.nav-container').removeClass('actief');
        $('.nav-header').removeClass('aan');

      }
    });

    $(window).scroll(function scrolldown() {
      if ($(window).scrollTop() > 50) {
            if ($('.nav-container').hasClass('main')) {

              } else {
                setTimeout(function() {
                  $('.st0').addClass('active');
                  $('.stripe').addClass('wit');
                  $('.menu-item').addClass('on');

                }, 70);
                  $('.nav-container').addClass('active').css({
                  "transform": "translateY(-200px)",

          });
        }



      } else {
            if ($('.nav-container').hasClass('main')) {

            } else {
              $('.nav-container').removeClass('active').css({
                "transform": "translateY(0px)",
              });
              setTimeout(function() {
                $('.st0').removeClass('active');
                $('.stripe').removeClass('wit');
                $('.menu-item').removeClass('on');

          }, 70);
        }

      }
    });

    $(window).scroll(function scrolldown2() {
      if ($(window).scrollTop() > 500) {
        $('.nav-container.active').css({
          "transform": "translateY(0px)",

        });

      } else {
        $('.nav-container.active').css({
          "transform": "translateY(-200px)",


        });
      }
    });

    $(document).ready(function() {
      $(".hamburger").click(function() {
        setTimeout(function() {
          $(".item").toggleClass("active");
          $(".nav").toggleClass("main");

        }, 500);
        $(".nav-container").toggleClass("main");
        $(".grote-container").toggleClass("aan");


      });
    });

    $(document).ready(function() {
      $(".hamburger").click(function() {
        $(".hamburger").toggleClass("active");


      });
    });

    $(document).ready(function() {
      $('.hamburger').click(function() {
        if ($('.item').hasClass('loading')) {
          $(".item").removeClass("loading");
          $(".item").addClass("loading2");
        } else {
          $(".item").toggleClass("loading");
          $(".item").removeClass("loading2");

        }
      });
    });

    $(document).ready(function() {
      $('.hamburger').click(function() {
        if ($('.nav-container').hasClass('actief')) {


        } else {
          $(".stripe").toggleClass("wit");

          $(".st0").toggleClass("active");

        }
      });
    });

    $(document).ready(function() {
      $('.hamburger').click(function() {
        if ($('.nav-container').hasClass('main')) {
          $(".nav-container").removeClass("active");


        } else {

        }
      });
    });

    $(document).ready(function() {
      $('.hamburger').click(function() {
        if ($('.nav-container').hasClass('bg')) {
          $(".nav-container").removeClass("bg");
          $(".nav-container").addClass("bg2");
        } else {
          $(".nav-container").toggleClass("bg");
          $(".nav-container").removeClass("bg2");

        }
      });
    });
