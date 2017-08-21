$(document).ready(function(){

    //Calling functions
      cat();
      product();

    //Declared Funtions
      function cat(){
        $.ajax({
          url: "php/action.php",
          method:"POST",
          data : {category:1},
          success: function(data){
              $("#get_cat").html(data);
          }
        })
      }

      function product(){
        $.ajax({
          url: "php/action.php",
          method:"POST",
          data : {getProduct:1},
          success: function(data){
              $("#get_product").html(data);
          }
        })
      }
      $("body").delegate(".category", "click",function(event){
          event.preventDefault();
          var cid = $(this).attr('cid');
          $.ajax({
            url: "php/action.php",
            method:"POST",
            data : {get_Selected_Cat:1, cat_id:cid},
            success: function(data){
                $("#get_product").html(data);
                if(cid == 3){
                  product();
                }
            }
          })
      })
      $("#search_btn").click(function(){
        var keyword = $("#search").val();

        if(keyword != ""){
          alert(keyword);
          $.ajax({
            url: "php/action.php",
            method:"POST",
            data : {search:1, keyword:keyword},
            success: function(data){
                $("#get_product").html(data);
                alert(keyword);
            }
          })
        }
      })

      $("#signup_button").click(function(event){
        event.preventDefault();
        $.ajax({
          url: "php/register.php",
          method:"POST",
          data : $("form").serialize(),
          success: function(data){
              $("#signup_msg").html(data)
          }
        })
      })

      $("#login").click(function(event){
        event.preventDefault();
        var email = $("#email").val();
        var pass = $("#password").val();
        $.ajax({
          url:"php/login.php",
          method: "POST",
          data : {userLogin:1, userEmail:email, userPassword:pass},
          success : function(data){
            if(data == "Brighton"){
              $("#login_msg").html(data);

              winodw.location.href = "profile.php";
            }
          }
        })
      })

})
