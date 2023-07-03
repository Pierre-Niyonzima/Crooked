jQuery(document).ready(function ($) {
  var lastId,
    topMenu = $("#top-navigation"),
    topMenuHeight = topMenu.outerHeight(),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function () {
      var href = $(this).attr("href");
      if (href.indexOf("#") === 0) {
        var item = $($(this).attr("href"));
        if (item.length) {
          return item;
        }
      }
    });
  // Bind to scroll
  $(window).scroll(function () {
    //Display or hide scroll to top button
    if ($(this).scrollTop() > 100) {
      $(".scrollup").fadeIn();
    } else {
      $(".scrollup").fadeOut();
    }

    if ($(this).scrollTop() > 130) {
      $(".navbar").addClass("fixed-top animated fadeInDown");
      $(".navbar").removeClass("d-none");
    } else {
      $(".navbar").removeClass("fixed-top animated fadeInDown");
      $(".navbar").addClass("d-none");
    }

    // Get container scroll position
    var fromTop = $(this).scrollTop() + topMenuHeight + 10;

    // Get id of current scroll item
    var cur = scrollItems.map(function () {
      if ($(this).offset().top - 99 < fromTop) return this;
    });

    // Get the id of the current element
    cur = cur[cur.length - 1];
    var id = cur && cur.length ? cur[0].id : "";

    if (lastId !== id) {
      lastId = id;
      // Set/remove active class
      menuItems
        .parent()
        .removeClass("active")
        .end()
        .filter('[href="#' + id + '"]')
        .parent()
        .addClass("active");
    }
  });

  /*
    Function for scroliing to top
    ************************************/
  $(".scrollup").click(function () {
    $("html, body").animate(
      {
        scrollTop: 0,
      },
      600
    );
    return false;
  });
  $(window).on("load", function () {
    function filterPath(string) {
      return string
        .replace(/^\//, "")
        .replace(/(index|default).[a-zA-Z]{3,4}$/, "")
        .replace(/\/$/, "");
    }
    $('a[href^="#"]').each(function () {
      if (
        filterPath(location.pathname) == filterPath(this.pathname) &&
        location.hostname == this.hostname &&
        this.hash.replace(/#/, "")
      ) {
        var $targetId = $(this.hash),
          $targetAnchor = $("[name=" + this.hash.slice(1) + "]");
        var $target = $targetId.length
          ? $targetId
          : $targetAnchor.length
          ? $targetAnchor
          : false;

        if ($target) {
          $(this).click(function () {
            //Hack collapse top navigation after clicking
            topMenu.parent().attr("style", "height:auto").removeClass("in"); //Close navigation
            $(".navbar .btn-navbar").addClass("collapsed");

            var targetOffset = $target.offset().top - 99;
            $("html, body").animate(
              {
                scrollTop: targetOffset,
              },
              800
            );
            return false;
          });
        }
      }
    });
  });

  /*Sand mail
   **********************************************************************/
  $("#send-mail").click(function () {
    var name = $("input#name").val(); // get the value of the input field
    var error = false;
    if (name == "" || name == " ") {
      $("#err-name").show(500);
      $("#err-name").delay(4000);
      $("#err-name").animate(
        {
          height: "toggle",
        },
        500,
        function () {
          // Animation complete.
        }
      );
      error = true; // change the error state to true
    }

    var emailCompare = /^([a-z0-9_.-]+)@([da-z.-]+).([a-z.]{2,6})$/; // Syntax to compare against input
    var email = $("input#email").val().toLowerCase(); // get the value of the input field
    if (email == "" || email == " " || !emailCompare.test(email)) {
      $("#err-email").show(500);
      $("#err-email").delay(4000);
      $("#err-email").animate(
        {
          height: "toggle",
        },
        500,
        function () {
          // Animation complete.
        }
      );
      error = true; // change the error state to true
    }

    var comment = $("textarea#comment").val(); // get the value of the input field
    if (comment == "" || comment == " ") {
      $("#err-comment").show(500);
      $("#err-comment").delay(4000);
      $("#err-comment").animate(
        {
          height: "toggle",
        },
        500,
        function () {
          // Animation complete.
        }
      );
      error = true; // change the error state to true
    }

    if (error == false) {
      var dataString = $("#contact-form").serialize(); // Collect data from form
      $.ajax({
        type: "POST",
        url: $("#contact-form").attr("action"),
        data: dataString,
        dataType: "text",
        timeout: 6000,
        error: function (request, error) {
          $("#errorSend").show();
        },
        success: function () {
          $("#successSend").show();
          $("#name").val("");
          $("#email").val("");
          $("#comment").val("");
        },
      });
      return false;
    }

    return false; // stops user browser being directed to the php file
  });

  //Animate price columns
  jQuery(".card, .testimonial").on("inview", function (event, visible) {
    if (visible == true) {
      jQuery(this).addClass("animated fadeInDown");
    } else {
      jQuery(this).removeClass("animated fadeInDown");
    }
  });

  //Animate contact form
  jQuery(".contact-form2").on("inview", function (event, scroll) {
    if (scroll == true) {
      jQuery(".contact-form2").addClass("animated bounceIn");
    } else {
      jQuery(".contact-form2").removeClass("animated bounceIn");
    }
  });
  //Animate price columns

  // fonction pour fermer le menu déroulant quand cliqué
  if ($(window).width() < 992) {
    $("#hamburger-menu").on("click", toggleOnClass);

    function toggleOnClass(event) {
      var toggleElementId = "#" + $(this).data("toggle"),
        element = $(toggleElementId);

      element.toggleClass("on");
    }

    // close hamburger menu after click a
    $(".menu-close li a").on("click", function () {
      $("#hamburger-menu").click();
    });
  }

  // fetch API instagram

  const url =
    "https://graph.instagram.com/me/media?fields=id,caption,media_url,timestamp,media_type,permalink&access_token=IGQVJXdllSN0loUmt4YnhsN1psVzMzYmZAUYUpKSGJxNi1ieDRzcW12ZAEVNZA0FYLUxPX1l2bmtYRm9jaFhIUk1nVHA0dlBWSzNUYWk5R1BCUzZASYWFTalU5MEFlc2s4b1lVVExrUnZAqdTdJOVZATYkxWLQZDZD";

  fetch(url)
    .then((response) => response.json())
    .then(function (data) {
      array = data.data;
      instaPics(array);
      console.log(array);
    })
    .catch((error) => {
      console.error(error);
    });

  function instaPics(pics) {
    for (let i = 0; i < pics.length; i++) {
      console.log(pics[i]);

      if (pics[i].media_type == "VIDEO") {
        var onepics = document.createElement("video");
        onepics.setAttribute("src", pics[i].media_url);
        onepics.setAttribute("type", "video/webm");
        document.getElementById("insta").appendChild(onepics);
      } else {
        var onepics = document.createElement("img");
        onepics.setAttribute("src", pics[i].media_url);
        document.getElementById("insta").appendChild(onepics);
      }

      // var createArticle = document.createElement("article");
      // onepics.appendChild(createArticle);

      // var createH1 = document.createElement("h1");
      // createH1.className = "pics[i]Name";
      // createH1.textContent = pics[i].id;
      // document.getElementById("insta").appendChild(createH1);
    }
  }
});
