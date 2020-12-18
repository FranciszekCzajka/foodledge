<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="description" content="Simple school project">
    <meta name="keywords" content="search, wyszukiwarka, school project">
    <meta name="author" content="Franciszek Czajka">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>SEARCHBAR</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  </head>
  <body>

    <nav class="navbar">
      <div class="div-menu-button">
        <button type="submit" class="btn-menu" id="sidebarCollapse" name="menu">
          <i class="fas fa-align-left"></i>
        </button>
        <div class="subject"><label id="search-text">WYSZUKIWARKA</label></div>
      </div>
    </nav>

    <nav class="sidebar">
        <div class="dismiss">
            <i class="fas fa-arrow-left"></i>
        </div>

        <div class="sidebar-header">
            <h3>MENU</h3>
        </div>

        <ul class="list-unstyled components">
            <li>
                <a id="language" href="#languages" class="headings" data-toggle="collapse" aria-expanded="false">Język <i class="fas fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="languages">
                    <li id="poland" class="submenu-elements"><img src="images/poland.png" class="flag-icon" alt="icon"> Polski</li>
                    <li id="usa" class="submenu-elements"><img src="images/us.png" class="flag-icon" alt="icon"> Angielski</li>
                </ul>
            </li>
            <li>
                <a id="themes" href="#theme" class="headings" data-toggle="collapse" aria-expanded="false">Tryb <i class="fas fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="theme">
                    <li id="light" class="submenu-elements"><img src="images/sun.png" class="photo-icon" alt="icon"> Jasny</li>
                    <li id="dark" class="submenu-elements"><img src="images/moon.png" class="photo-icon" alt="icon"> Ciemny</li>
                </ul>
            </li>
        </ul>
        <div class="bottom-border"></div>
    </nav>

    <div id="content" class="wrapper">
      <div class="search-engine">
        <input type="text" class="search-query dark query" name="text-query" placeholder="Wpisz wyszukiwany obiekt">
        <ul class="search-list"></ul>
      </div>

      <div class="callout">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">×</span>
        <div class="callout-container">
          <p class="cookies">Strona wykorzystuje pliki cookies. Korzystając z niej, zgadzasz się na użycie plików cookies.</p>
        </div>
      </div>

    </div>

    <div class="overlay"></div>

    <script src="scripts/jquery.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/js-cookie@beta/dist/js.cookie.min.js"></script>

    <script type="text/javascript">

      Cookies.get('lang');
      Cookies.get('style');

      if(Cookies.get('style') != 0 && Cookies.get('style') != 1) {
        Cookies.set('style','0');
      }

      if(Cookies.get('lang') != 0 && Cookies.get('lang') != 1) {
        Cookies.set('lang','0');
      }

      if(Cookies.get('style') == 1){

        $('link[href="css/dark.css"]').attr('href','css/light.css');

       }

     if(Cookies.get('lang') == 1){
       $("#poland").html("<img src='images/poland.png' class='flag-icon' alt='icon'> Polish");
       $("#usa").html("<img src='images/us.png' class='flag-icon' alt='icon'> English");
       $("#language").html("Language <i class='fas fa-angle-down'></i>");
       $("#themes").html("Theme <i class='fas fa-angle-down'></i>");
       $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Light');
       $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Dark");
       $("#search-text").html("SEARCH ENGINE");
       $(".search-query").attr("placeholder", "Enter object to search");
       $(".cookies").html('This website uses cookies. If you continue to use our services, we will assume that you agree to the use of such cookies.');
     }

    </script>

    <script type="text/javascript">

      Cookies.get('cookie');

      $(".closebtn").click(function(){
        Cookies.set('cookie','1');
        $(".callout").css("display","none");
      });

      if(Cookies.get('cookie') == 1){
        $(".callout").css("display","none");
      }

    </script>

    <script src="scripts/search-engine.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $(".sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('.dismiss, .overlay').on('click', function () {
                $('.sidebar').removeClass('active');
                $('.overlay').removeClass('active');
                setTimeout(function() {
                  $('.query-3').val('').focus();
                  $('.collapse').removeClass('show');
                }, 350);
            });

            $('#sidebarCollapse').on('click', function () {
                $('.sidebar').addClass('active');
                $('.overlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script>

     $(document).ready(function(){

       $("#poland").click(function(){
         Cookies.set('lang','0');

         $(".search-query").click();

         $("#poland").html("<img src='images/poland.png' class='flag-icon' alt='icon'> Polski");
         $("#usa").html("<img src='images/us.png' class='flag-icon' alt='icon'> Angielski");
         $("#language").html("Język <i class='fas fa-angle-down'></i>");
         $("#themes").html("Tryb <i class='fas fa-angle-down'></i>");
         $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Jasny');
         $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Ciemny");
         $("#search-text").html("WYSZUKIWARKA");
         $(".search-query").attr("placeholder", "Wpisz wyszukiwany obiekt");
         $(".cookies").html('Strona wykorzystuje pliki cookies. Korzystając z niej, zgadzasz się na użycie plików cookies.');

           });

          $("#usa").click(function(){
            Cookies.set('lang','1');

            $(".search-query").click();

            $("#poland").html("<img src='images/poland.png' class='flag-icon' alt='icon'> Polish");
            $("#usa").html("<img src='images/us.png' class='flag-icon' alt='icon'> English");
            $("#language").html("Language <i class='fas fa-angle-down'></i>");
            $("#themes").html("Theme <i class='fas fa-angle-down'></i>");
            $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Light');
            $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Dark");
            $("#search-text").html("SEARCH ENGINE");
            $(".search-query").attr("placeholder", "Enter object to search");
            $(".cookies").html('This website uses cookies. If you continue to use website, it means that you agree to the use of such cookies.');

            });
         });

    </script>

    <script>
    $("#light").click(function(){

      Cookies.set('style','1');
      $('link[href="css/dark.css"]').attr('href','css/light.css');
      $(".query").removeClass("dark").addClass("light");
      $(".search-elements").removeClass("dark").removeClass("dark-hover").removeClass("light-border").addClass("light").addClass("light-hover").addClass("dark-border");


    });

    $("#dark").click(function(){

      Cookies.set('style','0');
      $('link[href="css/light.css"]').attr('href','css/dark.css');
      $(".query").removeClass("light").addClass("dark");
      $(".search-elements").removeClass("light").removeClass("light-hover").removeClass("dark-border").addClass("dark").addClass("dark-hover").addClass("light-border");

    });
    </script>

  </body>
</html>
