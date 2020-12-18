$(".query-3").click(function() {
        $('.sidebar input[type="text"]').on("keyup input click mouseenter focus", function(){
            var inputVal = $(this).val();
            var resultDropdown = $(this).siblings(".search-list-3");
                if(Cookies.get('style') == 0){
                  if(Cookies.get('lang') == 0){
                    if(inputVal.length){
                      $.get("scripts/script-dark-pl.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data);
                      });
                    }
                    else {
                      resultDropdown.empty();
                    }
                  }
                  else {
                    if(inputVal.length){
                      $.get("scripts/script-dark-eng.php", {term: inputVal}).done(function(data){
                        resultDropdown.html(data);
                      });
                  }
                else {
                  resultDropdown.empty();
                  }
                }
              }
              else {
              if(Cookies.get('lang') == 0){
                if(inputVal.length){
                  $.get("scripts/script-light-pl.php", {term: inputVal}).done(function(data){
                    resultDropdown.html(data);
                    });
                  }
                  else {
                    resultDropdown.empty();
                  }
                }
                else {
                  if(inputVal.length){
                    $.get("scripts/script-light-eng.php", {term: inputVal}).done(function(data){
                      resultDropdown.html(data);
                    });
                  }
                  else {
                    resultDropdown.empty();
                  }
                }
              }
              });
            });
