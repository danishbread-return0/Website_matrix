<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
 
</head>
<body>
        <?php include "navbar.php"; ?>
    <br><br><br><br><br><br>
    <section class="container-s">
        <div class="slider-wrapper">
            <div class="slider">
                <img id="slide1" src="images/WebTemplate().png">
                <img id="slide1" src="images/WebTemplate1.png">
                <img id="slide3" src="images/WebTemplate2.png">
                <img id="slide4" src="images/WebTemplate3.png">
            </div>
                <div class="slider-nav">
                    <a data-slide="0"></a>
                    <a data-slide="1"></a>
                    <a data-slide="2"></a>
                    <a data-slide="3"></a>
                </div>
        </div>

    </section>
    <script src="mainslide.js"></script>

    <br><br><br><br><br><br><br><br><br><br>
    
    <div class="Service ">
        <div class="title-service">
            <h1 class="fadeUp timeline-item">Services <span>Provided</span></h1>
        </div>
        <p class="fadeUp timeline-item">We provide certified trainers and industry-leading consultants dedicated to improving workplace safety and ensuring Department of Occuaptional Safety and Health (DOSH) compliance.
            Our qualified team conducts a wide range of specialized assessments, including mobile audiometric testing, noise and chemical risk assessments, local exhaust ventilation checks, ergonomic evaluations, and the control of industrial major accident hazards, helping organizations create safer and healthier work environments.</p>
    </div>

    <?php include "service-main.php"; ?>
    
    <br><br>

    <?php include "training-main.php"; ?>
    <?php include "footer.php"; ?>

    </body>
</html>