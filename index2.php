<html>
    <head>
        <title>Otra</title>
    </head>
    <body>
        <div id="header">
            <ul>
                <li><a href="index2.php">Inicio</a></li>
            </ul>
            <h1>Bienvenido <?php echo $_POST['firstname'];?></h1>
        </div>
        <div id="firstname">
            <p><?php echo $POST['firstname'];?></p>
        </div>
        <div id="lastname">
            <p><?php echo $POST['lastname'];?></p>
        </div>
    </body>
</html>