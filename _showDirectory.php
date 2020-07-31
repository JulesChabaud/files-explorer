<?php

  foreach ($arrayUrl as $value) {
    if(isset($_SESSION['checked']) && $_SESSION['checked'] == "checked"){
      echo "<div class='logo-dir2'>
              <form method='POST' action='logic.php'>
               <button type='submit' name='directory' value='$value'><img src='assets/images/directory.png' alt=''></button>
              </form>
               <p>$value</p>
             </div>";
      elementFunction($value);
    } else if (isset($_SESSION['checked']) && $_SESSION['checked'] == "unchecked" || !isset($_SESSION['checked']) ){
       if ($value == strstr($value, '.')) {
         echo"";
       } else {
         if(substr($value, -4) == ".txt"){
             echo "<div class='logo-dir2'>
                     <a href='?open=$value'><img src='assets/images/refont/logo-fichier.png' alt='' width='48rem'></a>
                     <p>$value</p>";
          } else {
           echo "<div class='logo-dir2'>
                  <form method='POST' action='logic.php'>
                    <button type='submit' name='directory' value='$value'><img src='assets/images/refont/directory-3.png' alt='' width='80rem'></button>
                  </form>
                   <p>$value</p>";


       }

       echo "<div class='container-rename'>
         <div class='container-innerRename'>

         <span>+</span>

         <form method='POST' action='logic.php'>
                 <input type='text' name='rename[]'>
                 <input type='hidden' name='rename[]' value='$value'>
                 <input type='submit' name='rename[]' value='Renommer'>
                 <input type='submit' name='rename[]' value='Renommer'>
                 <input type='submit' name='rename[]' value='Renommer'>
                 <input type='submit' name='rename[]' value='Renommer'>
               </form>
              </div>

         </div>
       </div>"
        ;
       }

   }
}
