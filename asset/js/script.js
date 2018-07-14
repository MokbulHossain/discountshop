   (function($){
          $(document).ready(function(){
              $(".navscroll").hide();
              $(function(){
                  $(window).scroll(function(){
                      if($(this).scrollTop()>150){
                          $('.navscroll').fadeIn(1000);
                      }else{
                          $('.navscroll').fadeOut(1000);
                      }
                  });
              });
          });
      }(jQuery));






