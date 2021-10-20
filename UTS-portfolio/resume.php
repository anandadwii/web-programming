<?php
include_once 'koneksi.php';
$query = "SELECT * FROM resume_exp,resume_edu";
$run = mysqli_query($conn, $query);
$user_data = mysqli_fetch_array($run);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Portfolio - Ananda dwi</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: iPortfolio - v3.6.0
  * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <?php include_once "header.php"; ?>




    <main id="main">




        <!-- ======= Resume Section ======= -->
        <section id="resume" class="resume">
            <div class="container">

                <div class="section-title">
                    <h2>Resume</h2>
                </div>

                <div class="row">
                    <div class="col-lg-6" data-aos="fade-up">
                        <h3 class="resume-title">Education</h3>
                        <?php

                        while ($user_data = mysqli_fetch_array($run)) {



                        ?>

                            <div class="resume-item">
                                <h4><?= $user_data['title_edu'] ?></h4>
                                <h5><?= $user_data['year_edu'] ?></h5>
                                <p><em><?= $user_data['institute'] ?></em></p>
                            </div>
                        <?php
                        }



                        ?>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <h3 class="resume-title">Professional Experience</h3>
                        <?php
                        $queryExp = "SELECT * FROM resume_exp";
                        $runExp = mysqli_query($conn, $queryExp);

                        while ($dataExp = mysqli_fetch_assoc($runExp)) {

                        ?>
                            <div class="resume-item">
                                <h4><?= $dataExp['title_exp'] ?></h4>
                                <h5><?= $dataExp['year_exp'] ?></h5>
                                <p><em><?= $dataExp['location_exp'] ?></em></p>
                                <p><?= $dataExp['desc_exp'] ?></p>
                            </div>
                        <?php
                        }



                        ?>



                    </div>
                </div>

            </div>
        </section><!-- End Resume Section -->
        <!-- ======= Skills Section ======= -->
        <section id="skills" class="skills section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Skills</h2>
                </div>

                <div class="row skills-content">

                    <div class="col-lg-8" data-aos="fade-up">

                        <?php
                        $querySkill = "SELECT * FROM skill";
                        $runSkill = mysqli_query($conn, $querySkill);

                        while ($skillData = mysqli_fetch_assoc($runSkill)) {

                        ?>

                            <div class="progress">
                                <span class="skill"><?= $skillData['name_skill'] ?> <i class="val"><?= $skillData['percentage'] ?> %</i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $skillData['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>


                        <?php
                        }
                        ?>






                    </div>
                    <div class="section-title">
                        <h2>Languages</h2>
                    </div>


                    <div class="col-lg-8" data-aos="fade-up" data-aos-delay="100">
                        <?php
                        $queryLang = "SELECT * FROM language";
                        $runLang = mysqli_query($conn, $queryLang);

                        while ($langData = mysqli_fetch_assoc($runLang)) {

                        ?>

                            <div class="progress">
                                <span class="skill"><?= $langData['lang'] ?><i class="val"><?= $langData['proficiency'] ?></i></span>
                                <div class="progress-bar-wrap">
                                    <div class="progress-bar" role="progressbar" aria-valuenow="<?= $langData['percentage'] ?>" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>

                </div>

            </div>
        </section><!-- End Skills Section -->




    </main><!-- End #main -->
    <?php include_once "footer.php"; ?>


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/purecounter/purecounter.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/typed.js/typed.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>