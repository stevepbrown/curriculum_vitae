/*
init.js

Enables all of the page functionality, with the exception of validation (see seperate js file)

 */

$(document).ready(

  function()

  {
    $("#specify-jobsite").hide();
    $("#specify-other").hide();
  

      $("[type=radio]").click
        (



        function(e)
         {
            e.preventDefault;



            switch($(this).attr('id')) {
                                    case 'radio-jobsite':
                                                          $("#specify-jobsite").fadeIn(500);
                                                          $("#specify-other").hide();

                                                          break;
                                    case 'radio-other':
                                                          $("#specify-other").fadeIn(500);
                                                          $("#specify-jobsite").hide();
                                                          break;
                                    default:
                                            $("#specify-jobsite").hide();
                                            $("#specify-other").hide();


                                } // end switch


              // clean-up data in hidden fields
              $(".enabledisable").each(function()
              {
                if ($("this:hidden"))
                   {
                    $(this).val("");
                  }
                });


          } //end inner function
        ); // end click method

  } // end outer function



); // end ready method
