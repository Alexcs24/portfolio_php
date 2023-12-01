<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Cybersecurity student portfolio at SkillFactory: showcasing projects, skills, and achievements in network and system protection.">
    <meta name="author" content="Aleksei">
    <title>Aleksei for SkillFactory</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Custom main styles -->
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <!-- Page navigation -->
    <?php
    include 'knowledge.inc.php';
    include 'nav.inc.php' ?>
    <!-- End of page navibation -->
    s
    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">hello,I'm</h6>
                <h6 class="title">Aleksei</h6>
                <p>Cybersecurity / Penetration Tester</p>
            </div>
            <div class="img-holder">
                <img src="assets/imgs/main.png" alt="">
            </div>
        </div>

        <!-- Header-widget -->
        <div class="widget">
            <div class="widget-item">
                <h2>
                    <?php echo $yearsOfExperience; ?> Years
                </h2>
                <p>Experience</p>
            </div>
            <div class="widget-item">
                <h2>
                    <?php echo $hackathonsAttended; ?>
                </h2>
                <p>Hackathons</p>
            </div>
            <div class="widget-item">
                <h2>
                    <?php echo $bugBountiesCompleted; ?>
                </h2>
                <p>Bug Bounties</p>
            </div>
        </div>
    </header>
    <!-- End of Page Header -->

    <!-- About section -->
    <section id="about" class="section mt-3">
        <div class="container mt-5">
            <div class="row text-center text-md-left">
                <div class="pl-md-4 col-md-12">
                    <div class="pl-md-4 col-md-12">
                        <p class="subtitle">Мои ключевые навыки</p>
                        <p>
                            <?php echo implode(', ', $skills); ?>
                        </p>
                    </div>

                </div>
            </div>
    </section>

    <!-- Page Footer -->
    <?php include 'footer.inc.php' ?>
    <!-- End of page footer -->

    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- steller js -->
    <script src="assets/js/custom.js"></script>

</body>

</html>