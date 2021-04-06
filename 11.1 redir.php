<?php
    session_start();
    if ( isset($_POST['where']) ) {
        if ( $_POST['where'] == '1' ) {
            header("Location: http://unsri.ac.id");
            return;
        } else if ( $_POST['where'] == '2' ) {
            header("Location: http://ilkom.unsri.ac.id/");
            return;
        } else {
            header("Location: https://www.coursera.org/");
            return;
        }
    }
?>
<html>
<body style="font-family: sans-serif;">
<p>I am Router One...</p>
<form method="post">
   <p><label for="inp9">Where to go? (1-3)</label>
   <input type="text" name="where" id="inp9" size="5"></p>
   <input type="submit"/></form>
</body>
