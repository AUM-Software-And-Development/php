<!DOCTYPE html>
<html>
<head>
<link href="css/index.css" rel="stylesheet" runat="server"/>
<script src="scripts/html.js"></script>
    </head>

<title>
CRUD on localhost
    </title>

<body>

<h1 class='FreeH1'></h1>
<p class='FreeParagraph'></p>

<?php
echo '<h2>The server is running on ',$_SERVER['SERVER_NAME'],'</h2>';
    ?>

<script>
    </script>

<section class="postForm">
<form action="databases/localhostdb.php" method="POST">
<label>user name</label><br>
<input type="text" name="serverIndex_PostName" required> <br>
<!--field-->
<label>email</label><br>
<input type="text" name="serverIndex_PostEmail" required> <br>
<!--field-->
<label>phone number</label><br>
<input type="text" name="serverIndex_PostPhoneNumber" required> <br>
<button type="submit" name="serverIndex_PostSubmit">send</button>
    </form>
    </section>
    </body>

</html>