<?php ?>
<!DOCTYPE html>
 <html>
    <head>
        <title>My Blog</title>
   

    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script src="http://cacpg.herokuapp.com/js/demos/snowfall.min.js"></script>
    <link rel="stylesheet" type="text/css" href="stylesheet.css" >
    
<script>
$(document).ready(function() {
    snowFall.snow($("section"), {
        minSize: 1,
        maxSize: 5,
        round: true,
        minSpeed: 1,
        maxSpeed: 2,
        flakeCount: 100
    });
});
</script>
</head>
<body>
<div id="box">
    Welcome To Fatma Zaman Blog Site.
</div>
 
<section>
<form action="../Controller/cblog.php" method="post">
 <label>Name</label>
 <input type="text" placeholder="Your Good Name" name="name" />

<br> 
 Title <input type="text" placeholder="Blog Title" name="title"/>
<br>
 
<textarea name="blog" rows="10" cols="50"placeholder="feel free and start writing here...">

</textarea>
<br>

<input type="submit">

 </form></section>
 <img src="blogging.jpg" width="500" height="590" align="right" hspace="12" vspace="12" />
 </body>
 </html>