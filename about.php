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
            <a href="about.php" id="current-page"> About </a>
            <a href="contact.php"> Contact </a>
        </nav>
        
        <br /><br />
        <!-- div with an id called content -->
        <div id="content">
            <!-- Create the table to hold experience data -->
            <table>
                <tr id="table-header">
                    <td><strong>Programming Language</strong></td>
                    <td><strong>Years Experience</strong></td>
                </tr>
                <tr class="table-row">
                    <td>Java</td>
                    <td>3</td>
                </tr>
                <tr class="table-row">
                    <td>C++</td>
                    <td>2</td>
                </tr>
                <tr class="table-row">
                    <td>PHP</td>
                    <td>1</td>
                </tr>
            </table>
            
            <br /><br />
            
            <ul>
                <li><span class="hobby">Basketball</span>: I have always played and watched basketball my entire life, and favorite professional team is the Golden State Warriors</li>
                <li><span class="hobby">Music</span>: I have always loved music, and my favorite genre changes with my mood</li>
                <li><span class="hobby">Video games</span>: I have always played games as long as I can remember, my current favorite is Apex Legends</li>
                <li><span class="hobby">Programming</span>: I have always has an itch when it comes to problem solving, and programming scratches that itch.</li>
            </ul>
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