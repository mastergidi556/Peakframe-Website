  $(function(){
        $("#submit").click(function(){
            
         if($("#firstname").val() == "")
         {
             
             $("#firstname").closest("div").addClass("has-error");
             topFunction()
             return false;
         }
         else if($("#lastname").val() == "")
         {
             $("#lastname").closest("div").addClass("has-error");
             topFunction();
              $("span#lastnamehelp").html("Required");
             return false;
         }
         else if($("#phoneno").val() == "")
         {
             $("#phoneno").closest("div").addClass("has-error");
             topFunction();
             $("span#phonenohelp").html("Required");
             return false;
         }
          else if($("#email").val() == "")
         {
             $("#email").closest("div").addClass("has-error");
             topFunction();
             $("span#emailhelp").html("Required");
             return false;
         }
          else if($("#address").val() == "")
         {
             $("#address").closest("div").addClass("has-error");
             topHalfFunction();
             $("span#addresshelp").html("Required");
             return false;
         }
         else if($("#country").val() == "")
         {
             $("#country").closest("div").addClass("has-error");
             topHalf2Function();
             $("span#countryhelp").html("Required");
             return false;
         }
         else if($("#about").val() == "")
         {
             $("#about").closest("div").addClass("has-error");
             topHalf2Function();
             $("span#abouthelp").html("Required");
             return false;
         }
         else
         {
             submitForm();
         }
        
    });
   });
   
   $("#firstname").keyup(function(){
        $("#firstname").closest("div").removeClass("has-error");
         $("span#firstnamehelp").html("");
    });
    
    $("#lastname").keyup(function(){
        $("#lastname").closest("div").removeClass("has-error");
         $("span#lastnamehelp").html("");
    });
    $("#phoneno").keyup(function(){
        $("#phoneno").closest("div").removeClass("has-error");
        $("span#phonenohelp").html("");
    });
    $("#email").keyup(function(){
        $("#email").closest("div").removeClass("has-error");
        $("span#emailhelp").html("");
    });
     $("#address").keyup(function(){
        $("#address").closest("div").removeClass("has-error");
        $("span#addresshelp").html("");
    });
    $("#country").click(function(){
        $("#country").closest("div").removeClass("has-error");
        $("span#countryhelp").html("");
    });
     $("#about").keyup(function(){
        $("#about").closest("div").removeClass("has-error");
        $("span#abouthelp").html("");
    });
    
    function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
    }
    function topHalfFunction() {
    document.body.scrollTop = 50;
    document.documentElement.scrollTop = 50;
    }
    function topHalf2Function() {
    document.body.scrollTop = 250;
    document.documentElement.scrollTop = 250;
    }
    
    function submitForm()
    {
       document.getElementById("trainingform").method = "POST";
       document.getElementById("trainingform").action = "applyforinternship_server_validate.php";
       document.getElementById("trainingform").submit();
       
    }
    
    $(function(){
      $("#phoneno").keydown(function (e) {
        // Allow: backspace, delete, tab, escape, enter and .
        if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 110, 190]) !== -1 ||
             // Allow: Ctrl+A, Command+A
            (e.keyCode === 65 && (e.ctrlKey === true || e.metaKey === true)) || 
             // Allow: home, end, left, right, down, up
            (e.keyCode >= 35 && e.keyCode <= 40)) {
                 // let it happen, don't do anything
                 return;
        }
        // Ensure that it is a number and stop the keypress
        if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
            e.preventDefault();
        }
    });
  });