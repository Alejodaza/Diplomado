<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MAPA INTERACTIVO CALI CON AR</title>
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<ul class="menu-principal">
    <li class="camara-ar"><a href="camara.php"><i class="fa fa-camera" aria-hidden="true"></i></a></li>
    <li class="logo"><a href="index.php">Turista en Cali</a></li>
    <!--li class="about"><a href="#">Tours</a></li>
    <li class="products"><a href="#">Products</a></li>
    <li class="contact"><a href="#">Contact</a></li-->
    <li class="menu-herramientas"><a href="bars.php"><i class="fa fa-bars" aria-hidden="true"></i></a></li>
</ul>    

<div id="map"></div>
<div id="pano"></div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>    
    <script src="js/scripts.js"></script>
    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
    </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfW_fQZ1iD0W_gEQxfI1XkY1--5FkIUsk&callback=initMap"
    async defer></script>  
 <footer>
 <p>Desarrollado por Ingenieros Multimedia 2018 © Copyright</p>
 </footer>   
</body>
</html> 
