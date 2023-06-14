<!DOCTYPE html>
<html>
<head>
    <title>Selftaught</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="vendors/css/grid.css">
    
    <link rel="stylesheet" type="text/css" href="resources/css/styles.css" />
    <link rel="stylesheet" href="resources/css/queries.css">
</head>

<body>
    <header id="home">
        <?php 
            include('header.php');
        ?>
        <!-- <div class="clearfix"></div> -->
        <div class="row">
            <div class="heading-main-box">
                <h1>
                    We will study <br> English together.<br>
                    So join with us.
                </h1>
                <a href="about.php" class="btn">Tell me more</a>
                <a href="product.php" class="btn">Join us</a>
            </div>
        </div>
    </header>
    <?php
        include('resources/php/about.php');
        include('resources/php/product.php');
        include('resources/php/testimonial.php');
        include('resources/php/sponsor.php');
        include('form.php');
        include('footer.php');
    ?>

    <script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>
    <script src="vendors/js/jquery.waypoints.min.js"></script>
    <script src="resources/js/scripts.js"></script>
</body>

</html>