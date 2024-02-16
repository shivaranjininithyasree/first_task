
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="afyndcontact.css"></a>
    <title>Document</title>
</head>

<body>
<?php
    include("header.php");
?>
<section id="contact">
		<h1 class="headings">CONTACT</h1>
    <form class="form" action="afyndcontact.php" method="post">
        Email<input type="email" name="email" class="input" placeholder="ENTER YOUR EMAIL">
			
			
        Subject<input type="text" name="subject" class="input" value=""  placeholder="ENTER YOUR SUBJECT"><br>
        Message<input type="text" name="message"  class="input" value=""  placeholder="ENTER YOUR MESSAGE"></br>
        <button type="submit"  name="send" id="send">SEND</button>
        </form>
</section>
<?php 
        include("footer.html");
    ?>
</body>
  

</html>

