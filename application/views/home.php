<html>
    <head>
        <script>
            var value = "<?php echo $name; ?> ";
        </script>
        <script src ="http://localhost/codeigniter/static/test.js" />



    </head>
    <body>
        <script>
         //var value = "<?php echo $name ?>";
         //document.write(value);
         /*function passvalues(id)
          {
          var node = document.getElementById(id);
          node= node.childNodes[1];
          var newtext=node.nodeValue ;
          document.write(newtext);
          }*/
         function setCookie(cname, cvalue, exdays) {
             var d = new Date();
             d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
             var expires = "expires=" + d.toGMTString();
             document.cookie = cname + "=" + cvalue + "; " + expires;
         }

         function getCookie(cname) {
             var name = cname + "=";
             var ca = document.cookie.split(';');
             for (var i = 0; i < ca.length; i++) {
                 var c = ca[i].trim();
                 if (c.indexOf(name) == 0)
                     return c.substring(name.length, c.length);
             }
             return "";
         }

         function checkCookie() {
             var user = getCookie("username");
             if (user != "") {
                 alert("Welcome again " + user);
             } else {
                 user = prompt("Please enter your name:", "");
                 if (user != "" && user != null) {
                     setCookie("username", user, 30);
                 }
             }
         }

        </script>
       
        <h2><font color = blue> Welcome To quizbook</font></h2>
        <?php echo "$name "; ?>
        <br>
        <div id="abcd" onload="passvalues('abcd')">
            <h3>Your Profile</h3><br>
            Gender : <? echo " $gender " ?> <br>
            Fb :     <? echo " $fb " ?><br>
            Codechef:<? echo " $codechef "?> <br>
            <br/><br/>
        </div>
        <?php echo "$quiz_message"; ?>
        <h6><a href=<?php echo base_url("/control/logout"); ?>> Logout </a></h6>
    </body>
</html>   

