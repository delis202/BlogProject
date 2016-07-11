 <?php session_start(); ?>
<html>
    <head>
        
    </head>
    <body>
<?php
if(isset($_SESSION['admin']) && $_SESSION['admin'] == true ) {
?>
 
        <div class="adminpanel">
        <div>
            <h1>
                Please enter Information!
            </h1>
        </div>
        <div>
            <form action="datebase.php" method="POST">
                <label class="input-label" for="title">title</label>
                <div class="input-fields"><input id="Title" type="text" name="title" /> </div>
                <label class="input-label" for="text">text</label>
                <div class="input-fields"> <textarea name="text"></textarea> </div>
                <input class="submit" type="submit" name="submit" value="Submit" />
            </form>
        </div>
        </div>
   
<?php
}
 else {
 ?>
        
<?php
 }
?>
    </body>
</html>
