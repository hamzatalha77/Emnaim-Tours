<?php
if($_POST){
    require('fpdf/fpdf.php');
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $tele = $_POST['tele'];
    $desbag = $_POST['desbag'];
    $depar = $_POST['depar'];
    $dest = $_POST['dest'];
    $nomdest = $_POST['nomdest'];
    $predest = $_POST['predest'];
    $teledest = $_POST['teledest'];
    $title = 'User Report';
    $pdf = new FPDF();
    $pdf -> AddPage();
    $pdf->SetTitle($title);
    $pdf->SetFont('Arial','B',15);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((210-$w)/2);
    $pdf->SetDrawColor(221,221,221,1);
    $pdf->SetFillColor(10,158,0,1);
    $pdf->SetTextColor(255,255,255,1);
    $pdf->SetLineWidth(1);
    $pdf->Cell($w, 9, $title, 1, 1, 'C', true);
    $pdf->Ln(10);
    $pdf->SetTextColor(0,0,0,1);
    $w = $pdf->GetStringWidth($title)+6;
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'nom:', 1, 0, 'C');
    $pdf->Cell($w, 10, $nom, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'prenom:', 1, 0, 'C');
    $pdf->Cell($w, 10, $prenom, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'tele:', 1, 0, 'C');
    $pdf->Cell($w, 10, $tele, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'desbag:', 1, 0, 'C');
    $pdf->Cell($w, 10, $desbag, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'depar:', 1, 0, 'C');
    $pdf->Cell($w, 10, $depar, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'dest:', 1, 0, 'C');
    $pdf->Cell($w, 10, $dest, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'nomdest:', 1, 0, 'C');
    $pdf->Cell($w, 10, $nomdest, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'predest:', 1, 0, 'C');
    $pdf->Cell($w, 10, $predest, 1, 1, 'C');
    $pdf->SetX((170-$w)/2);
    $pdf->Cell(40, 10, 'teledest:', 1, 0, 'C');
    $pdf->Cell($w, 10, $teledest, 1, 1, 'C');
    $pdf->Output();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>EmNaim Tours</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css" />
    <script src="https://unpkg.com/scrollreveal"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link rel="stylesheet" href="styles.css" />
    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <nav class="nav">
                <div class="menu-toggle">
                    <i class="fas fa-bars"></i>
                    <i class="fas fa-times"></i>
                </div>
                <a href="Enaime.php" class="logo"><img class="img-logo" src="photos/Groupe 60.png" alt="" />
                </a>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="Enaime.php" class="nav-link active">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#about" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Conatct</a>
                    </li>
                    <li class="nav-item">
                        <a href="#Serveces" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="#reserv" class="nav-link">Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a href="#location" class="nav-link">Location</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
    <section class="hero" id="hero" data-aos="fade-right">
        <div class="container">
            <h2 class="sub-headline"><span class="first-letter">W</span>elcome</h2>
            <h1 class="headline">Emnaim Tours</h1>
            <div class="headline-description">
                <div class="separator">
                    <div class="line line-left"></div>
                    <div class="asterisk">
                        <i class="fas fa-asterisk"></i>
                    </div>
                    <div class="line line-right"></div>
                </div>
                <div class="single-animation">
                    <h5>It' s a about simplifying your supply chain logistics</h5>

                </div>
            </div>
        </div>
    </section>
    <section id="about" class="discover-out-story" data-aos="fade-left">
        <div class="container">
            <div class="restaurant-info">
                <div class="restaurant-description padding-right animate-left">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">D</span>iscover
                        </h2>
                        <h1 class="headline headline-dark">About Us</h1>
                        <br>
                        <div class="asterisk">
                            <i class="fas fa-asterisk"></i>
                        </div>
                    </div>
                    <p>
                        EMNAIM tours travel agency, is one of the strongest companies
                        of it's kind, it provides many services for their clients <a href="#Serveces"
                            class="linka">(Services)</a> EMNAIM tours is located at
                        .<a href="#location" class="linka">(Location).</a>
                        Satisfied employees lead to satisfied customers.
                        We know the growth and success of our company
                        depends upon fulfilling our clients needs every day . That is
                        also our promise. Check <a href="#reserv" class="linka">Our Plans.</a>
                    </p>
                    <a href="#" class="btn body-btn">About Us</a>
                </div>
                <div class="restaurant-info-img animate-right">
                    <img src="photos/transport.jpg" alt="" />
                </div>
            </div>
        </div>
    </section>
    <section class="tasteful-recipes between" data-aos="fade-right">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top">
                    <h2 class="sub-headline">
                        <span class="first-letter">S</span>taff
                    </h2>
                </div>
                <div class="animate-bottom">
                    <h1 class="headline headline-dark">Our team</h1>
                </div>
            </div>
        </div>
    </section>
    <br><br><br><br><br><br>
    <section id="contact" class="discover-our-menu" data-aos="fade-left">
        <div class="container">
            <div class="restaurant-info">
                <div class="image-group padding-right animate-left">
                    <img class="image-group" src="photos/Groupe 70.jpg" alt="" />
                    <img class="image-group" src="photos/Groupe 71.jpg" alt="" />
                </div>
                <div class="restaurant-description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">C</span>ontact
                        </h2>
                        <h1 class="headline headline-dark">Our team</h1>
                        <br>
                        <div class="asterisk">
                            <i class="fas fa-asterisk"></i>
                        </div>
                    </div>
                    <p>
                        Our team is one of the kindest and cheerful ever, contact us on
                        Instagram in order to get more information <a href="#about" class="linka">about us.</a>
                    </p>

                </div>
            </div>
        </div>
    </section>

    <section class="perfect-blend between" data-aos="fade-right">
        <div class="container">
            <div class="global-headline">
                <div class="animate-top"></div>
                <div class="animate-bottom"></div>
            </div>
        </div>
    </section>
    <section class="card" data-aos="fade-left">
        <div id="Serveces" class="animate-top">
            <h2 class="sub-headline">
                <span class="first-letter">S</span>ervices
            </h2>
        </div>
        <div class="animate-bottom">
            <h1 class="headline headline-dark">
                Luggage transportation to the following contries
            </h1>
        </div>

        <img class="cont" src="photos/Plan de travail – 9.jpg" alt="" />
    </section>
    <section id="reserv" class="culinary-delight" data-aos="fade-left">
        <div class="container">
            <div class="restaurant-info">
                <div class="image-group">
                    <img class="animate-top" src="photos/3.jpg" alt="" />
                    <img class="animate-bottom" src="photos/4.jpg" alt="" />
                </div>
                <div class="restaurant-description animate-right">
                    <div class="global-headline">
                        <h2 class="sub-headline">
                            <span class="first-letter">T</span>ransport
                        </h2>
                        <h1 class="headline headline-dark">Your Luggage</h1>
                        <div class="asterisk">
                            <i class="fas fa-asterisk"></i>
                        </div>
                    </div>
                    <div>
                        <form action='' method="POST">
                            <label class="labels" for="fname">Nom</label>
                            <input type="text" id="fname" name="nom" placeholder="Votre Nom.." />
                            <label for="lname">Prénom </label>
                            <input name="prenom" type="text" id="lname" placeholder="Votre Prénom.." />
                            <label for="lname">Numéro de telephone</label>
                            <input type="number" id="lname" name="tele" placeholder="Votre Numéro de telephone.." />
                            <label for="lname">Description du bagage</label>
                            <input type="text" id="lname" name="desbag" placeholder="" />
                            <label for="lname">Départure</label>
                            <input type="text" id="lname" name="depar" placeholder="Votre de Départure" />
                            <label for="lname">Déstination</label>
                            <input type="text" id="lname" name="dest" placeholder="Votre Déstination.." />
                            <label for="lname">Nom du déstinataire</label>
                            <input type="text" id="lname" name="nomdest" placeholder="Votre Nom du déstinataire.." />
                            <label for="lname">Prénom du déstinataire</label>
                            <input type="text" id="lname" name="predest" placeholder="Votre Prénom du déstinataire.." />
                            <label for="lname">Numéro de telephone du déstinataire</label>
                            <input type="number" id="lname" name="teledest"
                                placeholder="Le Numéro de telephone du déstinataire.." />
                            <input type="submit" name="insert" class="btn body-btn" value="Make a reservation">
                        </form>
                    </div>
                </div>
                <div class="car">
                    <img class="animate-right" src=" photos/Groupe 65.png" alt="" />
                </div>
            </div>
        </div>
    </section>
    <footer id="location">
        <div class="container">
            <div class="back-to-top">
                <a href="#hero"><i class="fas fa-chevron-up"></i></a>
            </div>
            <div class="footer-content">
                <div class="footer-content-about animate-up">
                    <h4>Location</h4>

                    <div class="astersik">
                        <i class="fas fa-asterisk"></i>
                    </div>
                    <p>
                        Our agencies are located in such countries and cities a around the
                        world, such as France : Paris, Nancy Morocco : Casablanca,
                        Marrakech, Rabat, Kénitra.. Belgium : Gare de midi.. Our main
                        agency is located at Morocco Casablanca Sebata 81 Hay al Masoudia
                        Rue 45 N°7
                    </p>
                </div>
                <div class="footer-content-divider animate-bottom">
                    <div class="social-media">
                        <h4>Follow Along</h4>
                        <ul class="social-icons">
                            <li>
                                <a href="#"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="newletter-container">

                        <p class=" linkp">Copyright &copy; 2021 - All Rights Reserved - <a class="linkw"
                                href="#">emnaim.tours</a></p>
                        <p class="fl_right">Devlopped by <a class="linkw" href="https://www.os-templates.com/">Hamza
                                Talha</a>
                        </p>
                        <p class="fl_right">Designed by <a class="linkw" href="https://www.os-templates.com/">Imrane
                                Saber</a>
                        </p>
                    </div>

                </div>

            </div>
        </div>
    </footer>





    <script src="My Script/main.js"></script>
    <script src="My Script/Gsap.js"></script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.6.0/gsap.min.js"></script>
    <script type="text/javascript">
    $(window).on("scroll", function() {
        if ($(window).scrollTop()) {
            $("header").addClass("black");
        } else {
            $("header").removeClass("black");
        }
    });
    </script>
    <script>
    AOS.init({
        offset: 400,
        duration: 1000,
    });
    </script>
</body>
</html>