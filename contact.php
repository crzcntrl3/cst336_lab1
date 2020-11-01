<!DOCTYPE html>
<html>
<!--

First Website
and comment
in html
(comments can span multiple lines)

-->

<!-- This is the head -->
<!-- All styles and javascript go inside the head -->
    <head>
        <title> Lab 1: Personal Page </title>
        <meta charset="utf-8">
        <link href="css/styles.css" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    </head>
<!-- closing head -->

    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>
        <header>
            <h1> Jordan Cruz </h1>
        </header>
        <hr/>
        <nav>
            <a href="index.php"> Home </a>
            <a href="about.php"> About </a>
            <a href="contact.php" id="current-page"> Contact </a>
        </nav>
        
        <br /><br />
        <!-- div with an id called content -->
        <div id="content">
            <!-- embed google form into contact page -->
            <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSf_4PdNTdO7f49SYMqAj0mL7VfRL5_Aot1YkuwDBbdl5CuiEA/viewform?embedded=true" width="760" height="500" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe>
        </div>
        
        <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer>
            <hr>
            CST336 Internet Programming. 2020&copy; Cruz <br />
            <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
            It is used for academic purposes only.
            
            <figure>
                <img src="img/CSUMB Logo White.png" alt="CSUMB Logo" class="footer-logo" />
            </figure>
        </footer>
        <!-- closing footer -->
        
    </body>
    <!-- closing body -->

</html>