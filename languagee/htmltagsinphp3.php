<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <h1>Embed php in html</h1>

    <!--sample 1-->
    <?php echo "hello world" ?>

    <!--sample 2-->
    <?php
        /*to print from html one has to put the markup 
        language inside the php print( the whole sentence with element)
        */
        print "<p>sample 1: This text is printed from php</p>";
   ?>

    <?= "<hr>" ?>

    <p>  <!--or print the from inside th markup language-->
        <?php
        echo "ssample 2: this text is printed fromt the php";
        ?>
    </p>

    <!--sample 3--->

    <p <?='style="color: red";'?> >Sample 3: This is a red text</p>


</body>
</html>