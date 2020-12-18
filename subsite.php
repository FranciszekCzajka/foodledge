<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <meta name="description" content="Simple school project">
    <meta name="keywords" content="search, wyszukiwarka, school project">
    <meta name="author" content="Franciszek Czajka">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>PRODŻEKTAJL</title>

    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/add.css">
    <link rel="stylesheet" type="text/css" href="css/subsites.css">
    <link rel="stylesheet" type="text/css" href="css/dark.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Montserrat&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  </head>
  <body>

    <nav class="navbar">
      <div class="div-menu-button">
        <div class="btn-menu" id="sidebarCollapse" name="menu">
          <i class="fas fa-align-left"></i>
        </div>
        <div class="subject"><label id="search-text">WYSZUKIWARKA</label></div>
      </div>
      <div class="search-engine-v2">
        <input type="text" class="search-query dark query-2" name="text-query" placeholder="Wpisz wyszukiwany obiekt">
        <ul class="search-list-2"></ul>
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
                <a id="language" href="#homeSubmenu" class="headings" data-toggle="collapse" aria-expanded="false">Język <i class="fas fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li id="poland" class="submenu-elements"><img src="images/poland.png" class="flag-icon" alt="icon"> Polski</li>
                    <li id="usa" class="submenu-elements"><img src="images/us.png" class="flag-icon" alt="icon"> Angielski</li>
                </ul>
            </li>
            <li>
                <a id="themes" href="#pageSubmenu" class="headings" data-toggle="collapse" aria-expanded="false">Tryb <i class="fas fa-angle-down"></i></a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li id="light" class="submenu-elements"><img src="images/sun.png" class="photo-icon" alt="icon"> Jasny</li>
                    <li id="dark" class="submenu-elements"><img src="images/moon.png" class="photo-icon" alt="icon"> Ciemny</li>
                </ul>
            </li>
        </ul>
        <div class="bottom-border"></div>
        <ul class="back-to-main">
            <a href="index.php"><li class="submenu-elements main-site">Strona główna</li></a>
        </ul>
        <div class="bottom-border"></div>
        <div class="search-engine-v3">
          <input type="text" class="search-query query-3" name="text-query" placeholder="Wpisz wyszukiwany obiekt">
          <ul class="search-list-3"></ul>
        </div>
    </nav>

    <div class="wrapper">

      <div class="div-menu-button">
        <button type="submit" class="btn-menu" id="sidebarCollapse" name="menu">
          <i class="fas fa-align-left"></i>
        </button>
      </div>

      <div class="site-name">
      </div>

      <div class="site-row-1">
        <div class="site-photo-1">
          <div class="left-photo">
          </div>
          <div class="left-name">
          </div>
        </div>
        <div class="site-text-1">
        </div>
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

    $.urlParam = function(name){
        var results = new RegExp('[\?&]' + name + '=([^&#]*)').exec(window.location.href);
        if (results==null) {
           return null;
        }
        return decodeURI(results[1]) || 0;
    }

    var id = $.urlParam('id');

    if(Cookies.get('lang') == 0){
      $(".site-text-1").load("scripts/des-pl.php?id=" + id);
      $(".left-photo").load("scripts/photo-pl.php?id=" + id);
      $(".site-name").load("scripts/name-pl.php?id=" + id);
      $(".left-name").load("scripts/left-name-pl.php?id=" + id);
    }

    if(Cookies.get('lang') == 1){
      $(".site-text-1").load("scripts/des-eng.php?id=" + id);
      $(".left-photo").load("scripts/photo-eng.php?id=" + id);
      $(".site-name").load("scripts/name-eng.php?id=" + id);
      $(".left-name").load("scripts/left-name-eng.php?id=" + id);
    }

    </script>

    <script src="scripts/search-engine-2.js"></script>
    <script src="scripts/search-engine-3.js"></script>

    <script type="text/javascript">

      Cookies.get('lang');
      Cookies.get('style');

      if(Cookies.get('style') == 1){

        $('link[href="css/dark.css"]').attr('href','css/light.css');

       }

     if(Cookies.get('lang') == 1){
       $("#poland").html("<img src='images/poland.png' class='flag-icon' alt='icon'> Polish");
       $("#usa").html("<img src='images/us.png' class='flag-icon' alt='icon'> English");
       $("#language").html("Language <i class='fas fa-angle-down'></i>");
       $("#themes").html("Theme <i class='fas fa-angle-down'></i>");
       $("#search-text").html("SEARCH ENGINE");
       $("#search-input input, .query-2").attr('placeholder', 'Enter object to search');
       $(".btn-search").html('SEARCH');
       $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Light');
       $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Dark");
       $(".main-site").html("Main site");
       $(".cookies").html('This website uses cookies. If you continue to use website, it means that you agree to the use of such cookies.');
     }

    </script>

    <script type="text/javascript">

      Cookies.get('cookie');

      $(".closebtn").click(function(){
        Cookies.set('cookie','1');
        $(".callout").css("display","none");
        $(".site-text-1").css("marginBottom","0px");
      });

      if(Cookies.get('cookie') == 1){
        $(".callout").css("display","none");
        $(".site-text-1").css("marginBottom","0px");
      }

    </script>

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
         $("#search-text").html("WYSZUKIWARKA");
         $("#search-input input, .query-2").attr('placeholder', 'Wpisz wyszukiwany obiekt');
         $(".btn-search").html('WYSZUKAJ');
         $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Jasny');
         $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Ciemny");
         $(".main-site").html("Strona główna");
         $(".cookies").html('Strona wykorzystuje pliki cookies. Korzystając z niej, zgadzasz się na użycie plików cookies.');

          $(".site-text-1").load("scripts/des-pl.php?id=" + id);
          $(".left-photo").load("scripts/photo-pl.php?id=" + id);
          $(".site-name").load("scripts/name-pl.php?id=" + id);
          $(".left-name").load("scripts/left-name-pl.php?id=" + id);

           });

          $("#usa").click(function(){
            Cookies.set('lang','1');

            $(".search-query").click();

            $("#poland").html("<img src='images/poland.png' class='flag-icon' alt='icon'> Polish");
            $("#usa").html("<img src='images/us.png' class='flag-icon' alt='icon'> English");
            $("#language").html("Language <i class='fas fa-angle-down'></i>");
            $("#themes").html("Theme <i class='fas fa-angle-down'></i>");
            $("#search-text").html("SEARCH ENGINE");
            $("#search-input input, .query-2").attr('placeholder', 'Enter object to search');
            $(".btn-search").html('SEARCH');
            $("#light").html('<img src="images/sun.png" class="photo-icon" alt="icon"> Light');
            $("#dark").html("<img src='images/moon.png' class='photo-icon' alt='icon'> Dark");
            $(".main-site").html("Main site");
            $(".cookies").html('This website uses cookies. If you continue to use website, it means that you agree to the use of such cookies.');

            $(".site-text-1").load("scripts/des-eng.php?id=" + id);
            $(".left-photo").load("scripts/photo-eng.php?id=" + id);
            $(".site-name").load("scripts/name-eng.php?id=" + id);
            $(".left-name").load("scripts/left-name-eng.php?id=" + id);

              });

   });

    </script>

    <script>
    $("#light").click(function(){

      Cookies.set('style','1');
      $(".query-2").focus().click();
      $('link[href="css/dark.css"]').attr('href','css/light.css');
      $(".search-elements").removeClass("dark").removeClass("dark-hover").removeClass("light-border").addClass("light").addClass("light-hover").addClass("dark-border");


    });

    $("#dark").click(function(){

      Cookies.set('style','0');
      $(".query-2").focus().click();
      $('link[href="css/light.css"]').attr('href','css/dark.css');
      $(".search-elements").removeClass("light").removeClass("light-hover").removeClass("dark-border").addClass("dark").addClass("dark-hover").addClass("light-border");


    });
    </script>

    <script>
      var height = $(".callout").height();
      if($('.callout').css('display') != 'none') {
        $('.site-text-1').css('margin-bottom', height);
      }
    </script>

  </body>
</html>
