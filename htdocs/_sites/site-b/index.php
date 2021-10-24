<?php

$getname = "Unregistered user";

if (isset($_GET))
{   
    echo 'Get was found <br> GET .... ';
    print_r(htmlentities(implode(' .... ', $_GET)));
    echo '<br>';

    if (isset($_GET['getname'])) {
        echo 'Indexed asset = ';
        $getname = htmlentities($_GET['getname']);
        echo $getname . ' ';
    }
    
    if (isset($_GET['getemail'])) {
        echo htmlentities($_GET['getemail']) . '<br>';
    }
}

echo '<br>';
echo '####';
echo '<br> <br>';

if (isset($_POST))
{
    echo 'Post was found <br> POST .... ';
    print_r(htmlentities(implode(' .... ', $_POST)));
    echo '<br>';

    if (isset($_POST['postname'])) {
        echo 'Indexed asset = ';
        echo htmlentities($_POST['postname'] . ' ');
    }
    
    if (isset($_POST['postemail'])) {
        echo 'Indexed asset = ';
        echo htmlentities($_POST['postemail']) . '<br>';
    }
}

echo '####';
echo '<br> <br>';

if (isset($_REQUEST))
{
    echo 'Request was found <br> REQUEST .... ';
    print_r(htmlentities(implode(' .... ', $_REQUEST)));
    echo '<br>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<section>
    <!-- Action assigns a pipe to submit to. A dedicated php page (api) can be used to handle most requests -->
    <br>
    <label>GET form</label>
    <form method="GET" action="index.php">
    <label>Name</label>
    <input type="text" name="getname">
    <label>Email</label>
    <input type="text" name="getemail">
    <input type="submit" value="submit">
    </form>

    <br>
    <label>POST form</label>
    <form method="POST" action="index.php">
    <label>Name</label>
    <input type="text" name="postname">
    <label>Email</label>
    <input type="text" name="postemail">
    <input type="submit" value="submit">
    </form>

    <br>
    <label>REQUEST form</label>
    <form method="REQUEST" action="index.php">
    <label>Name</label>
    <input type="text" name="requestname">
    <label>Email</label>
    <input type="text" name="requestemail">
    <input type="submit" value="submit">
    </form>

    <ul>
        <li>
            <a href="index.php?getname=Eric">Get Eric</a>
        </li>
        <li>
            <a href="index.php?getname=Leeroy">Get Leeroy</a>
        </li>
    </ul>

    <h1><?php echo "{$getname}'s profile";?></h1>

</section>

</body>
</html>