<html>
    <head> 
        <title><?php echo $_GET['id'];?></title>
    </head>
    <body>
        <h1><?php echo $c->getTitre(); ?></h1>
        <p><?php echo $c->getDescription(); ?></p>
        
    </body>
</html>
