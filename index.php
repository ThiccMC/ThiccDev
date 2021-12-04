<?php 
	$cookie_name = "snow";
	$snow = false;
    if(isset($_GET['snow'])) {
        $snow_query = $_GET['snow'];
        if ($snow_query == 1) {
            setcookie($cookie_name, "1", time() + (86400 * 30), "/");
            $snow = true;
        } else if ($snow_query == 0) {
            setcookie($cookie_name, "0", time() + (86400 * 30), "/");
            $snow = false;
        }
    } else {
        if(!isset($_COOKIE[$cookie_name])) {
            setcookie($cookie_name, "1", time() + (86400 * 30), "/");
            $snow = true;
        } else {
            if ($_COOKIE[$cookie_name] == "1") {
                $snow = true;
            } else {
                $snow = false;
            }
        }
    }
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Thicc SMP | Homepage</title>
    <meta name="description" content="Welcome to Thicc SMP Homepage.">
    <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="assets/img/susgrassblox%20(3).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/susgrassblox%20(2).png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/img/susgrassblox%20(2).png">
    <link rel="icon" type="image/png" sizes="180x180" href="assets/img/susgrassblox%20(3).png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/susgrassblox%20(4).png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/img/susgrassblox%20(4).png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Andada&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cookie&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora&amp;display=swap">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/Article-Clean.css">
    <link rel="stylesheet" href="assets/css/Footer-Basic.css">
    <link rel="stylesheet" href="assets/css/Footer-Clean.css">
    <link rel="stylesheet" href="assets/css/Highlight-Blue.css">
    <link rel="stylesheet" href="assets/css/Highlight-Clean.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/Navigation-Clean.css">
    <link rel="stylesheet" href="assets/css/vanilla-zoom.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top navigation-clean">
        <div class="container"><a class="navbar-brand" href="#" style="color: #093d25;">Thicc SMP</a><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#about" style="color: #093d25;">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#faq" style="color: #093d25;">FAQ</a></li>
                    <li class="nav-item"><a class="nav-link" href="#donate" style="color: #093d25;">Donate</a></li>
                    <li class="nav-item dropdown"><a class="dropdown-toggle nav-link" aria-expanded="false" data-bs-toggle="dropdown" style="color: #093d25;" href="#">Links</a>
                        <div class="dropdown-menu"><a class="dropdown-item" href="https://thiccwiki.qtpc.tech" style="color: #093d25;" target="_blank">Wiki</a><a class="dropdown-item" href="./discord" style="color: #093d25;" target="_blank">Discord</a><a class="dropdown-item" href="./facebook" style="color: #093d25;" target="_blank">Facebook</a><a class="dropdown-item" href="./rgb" style="color: #093d25;">ThiccRGB</a></div>
                    </li>
                    <li class="nav-item"><?php if ($snow) { echo "<a class='nav-link' href='?snow=0' style='color: #093d25;'>"; } else { echo "<a class='nav-link' href='?snow=1' style='color: #093d25;'>"; }?><i class="fa fa-snowflake-o" style="color: rgb(105,208,202);"></i></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <main class="page landing-page">
        <section data-bss-parallax-bg="true" class="clean-block clean-hero" style="color: rgba(255,255,255,0);background: radial-gradient(black, rgba(41,41,41,0.6274509803921569) 0%), url(&quot;assets/img/spawn.png&quot;) center / auto no-repeat;min-height: 900px;min-width: 400px;filter: blur(0px) grayscale(0%);">
            <div class="text" style="max-width: 1000px;min-width: 320px;">
                <h2 style="font-family: Andada, serif;font-weight: bold;font-size: 69px;margin-bottom: 7px;text-shadow: 3px 3px var(--bs-gray-700);border-bottom-width: 0px;border-bottom-style: solid;">Thicc SMP</h2>
                <p style="text-shadow: 1px 1px var(--bs-gray-700);font-size: 20px;">🎄&nbsp;We wish you a merry christmas! ❄️<br></p>
                <p style="text-shadow: 4px 4px 5px var(--bs-gray-700);"><strong>A cross-platform Minecraft Survival Server, made possible by QuanTrieuPCYT.</strong><br>Currently on <strong>1.17.x</strong>,&nbsp;<strong>Bedrock latest version</strong><br><strong>IP:&nbsp;</strong>thiccsmp.qtpc.tech<strong>&nbsp;(Java | Bedrock)</strong><br></p>
                <p style="text-shadow: 4px 4px 5px var(--bs-gray-700);">Come and visit us at:</p><a class="btn btn-outline-light btn-lg" role="button" href="./discord" style="margin-right: 30px;"><i class="fab fa-discord"></i>Discord</a><a class="btn btn-outline-light btn-lg" role="button" href="./facebook"><i class="fab fa-facebook"></i>Facebook</a>
            </div>
        </section>
        <section id="about" class="highlight-clean" style="min-width: 400px;padding-bottom: 0px;padding-top: 70px;">
            <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-once="true" style="min-width: 400px;padding-bottom: 20px;">
                <div class="intro" style="min-width: 350px;max-width: 900px;">
                    <hr>
                    <h2 class="text-center" style="font-family: Andada, serif;color: #093d25;"><strong>About us</strong><br></h2>
                    <p class="text-center" style="width: 100%;color: #093d25;padding-bottom: 10px;"><strong>Thicc SMP</strong>&nbsp;is a survival Minecraft server for everyone, made by QuanTrieuPCYT.<br>At first, it was a small SMP for friends until we aim for a higher purpose:&nbsp;<strong>A safe, fun SMP for everyone.</strong><br></p>
                    <hr>
                </div>
            </div>
            <section data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="highlight-clean" style="padding-bottom: 10px;background: var(--bs-red);color: var(--bs-white);">
                <div class="container" style="min-width: 400px;max-width: 900px;">
                    <div class="row">
                        <div class="col-md-6 order-first">
                            <picture><img class="img-fluid" src="assets/img/survival_and_building.png"></picture>
                        </div>
                        <div class="col-md-6" style="padding-top: 30px;padding-bottom: 30px;">
                            <h1 style="text-align: center;padding-top: 20px;font-family: Andada, serif;">Survival and Building</h1>
                            <p style="text-align: center;color: var(--bs-white);">At Thicc SMP, you can fully utilize your imagination skills to construct massive building projects.<br></p>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="intro" style="min-width: 400px;max-width: 900px;"></div>
                </div>
            </section>
            <section data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="highlight-clean" style="padding-bottom: 10px;">
                <div class="container" style="min-width: 400px;max-width: 900px;">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 30px;padding-bottom: 30px;">
                            <h1 style="text-align: center;padding-top: 20px;font-family: Andada, serif;color: #093d25;">Active community</h1>
                            <p style="text-align: center;color: #093d25;">We have a Discord server with over 2,000 members hanging out everyday.</p>
                        </div>
                        <div class="col-md-6">
                            <picture><img class="img-fluid" src="assets/img/pic.png"></picture>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="intro" style="min-width: 400px;max-width: 900px;"></div>
                </div>
                <section data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="highlight-clean" style="padding-bottom: 10px;background: var(--bs-red);">
                    <div class="container" style="min-width: 400px;max-width: 900px;">
                        <div class="row">
                            <div class="col-md-6 order-first">
                                <picture><img class="img-fluid" src="assets/img/multiple_platforms.png"></picture>
                            </div>
                            <div class="col-md-6" style="padding-top: 30px;padding-bottom: 30px;">
                                <h1 style="text-align: center;padding-top: 20px;font-family: Andada, serif;color: var(--bs-white);">Multiple platforms</h1>
                                <p style="text-align: center;color: var(--bs-white);">Thicc SMP supports Minecraft Java with Minecraft Bedrock so you can invite your friends to join.</p>
                            </div>
                        </div>
                    </div>
                    <div class="container">
                        <div class="intro" style="min-width: 400px;max-width: 900px;"></div>
                    </div>
                </section>
            </section>
            <section data-aos="fade-up" data-aos-duration="500" data-aos-once="true" class="highlight-clean" style="padding-bottom: 10px;">
                <div class="container" style="min-width: 400px;max-width: 900px;">
                    <div class="row">
                        <div class="col-md-6" style="padding-top: 30px;padding-bottom: 30px;">
                            <h1 style="text-align: center;padding-top: 20px;font-family: Andada, serif;color: #093d25;">Meet Alynaa~</h1>
                            <p style="text-align: center;color: #093d25;">Meet Thicc SMP official mascot.<br><br>Maybe she will be your new waifu?&nbsp;( ͡° ͜ʖ ͡°)</p>
                        </div>
                        <div class="col-md-6">
                            <picture><img class="img-fluid" src="assets/img/xd.png"></picture>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="intro" style="min-width: 400px;max-width: 900px;"></div>
                </div>
            </section>
        </section>
        <section data-aos="fade-up" data-aos-duration="500" data-aos-once="true" id="faq" class="article-clean" style="height: auto;margin-bottom: 30px;width: 100%;padding-top: 10px;padding-bottom: 10px;background: var(--bs-red);min-width: 400px;">
            <div class="intro" style="min-width: 350px;max-width: 900px;padding-top: 50px;">
                <hr style="background: var(--bs-white);border-color: var(--bs-white);">
            </div>
            <div class="col-lg-10 col-xl-8 offset-lg-1 offset-xl-2" style="min-width: 400px;height: auto;margin: auto;padding-bottom: 30px;">
                <div class="intro">
                    <h1 class="text-center" style="color: var(--bs-white);font-family: Andada, serif;font-size: 40px;font-weight: bold;margin: auto;max-width: 1000px;min-width: 400px;padding-top: 10px;">FAQ</h1>
                </div>
                <div class="text">
                    <p class="text-center" style="color: var(--bs-white);font-size: 18px;font-family: Montserrat, sans-serif;margin: auto;max-width: 1000px;min-width: 400px;margin-top: 20px;">Some frequently asked questions from players.<br>Have a question? Tell us on our Discord server.<br></p>
                    <figure class="figure d-block"></figure>
                </div>
                <div class="accordion" role="tablist" id="accordion-1" style="margin: auto;min-width: 400px;max-width: 1000px;">
                    <div class="accordion-item text-start" style="margin-top: 15px;margin-bottom: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-1" aria-expanded="false" aria-controls="accordion-1 .item-1" style="font-size: 18px;color: #093d25;border-bottom-color: rgb(5,34,21);background: #ffffff;"><br><strong>What's the specs of the server? Also operating system?</strong></button></h2>
                        <div class="accordion-collapse collapse item-1" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);"><strong>Sony VAIO SVT14126CVS</strong><br><strong>CPU:</strong>&nbsp;Intel® Core™ i5-3337U (we tried our best to optimize the server for this little boy)<br><strong>RAM:&nbsp;</strong>2x 4GB DDR3 1600MHz SODIMM<br><strong>SSD:&nbsp;</strong>Lexar NQ100 240GB<br><strong>GPU:&nbsp;</strong>Intel HD Graphics 4000<br><strong>OS:&nbsp;</strong>Debian Bullseye<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item text-start" style="margin-bottom: 15px;margin-top: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-2" aria-expanded="false" aria-controls="accordion-1 .item-2" style="color: #093d25;font-size: 18px;background: #ffffff;"><strong>What Minecraft server software does Thicc SMP use?</strong></button></h2>
                        <div class="accordion-collapse collapse item-2" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);">The server is powered by&nbsp;<a href="https://github.com/ThiccMC/AlynaaMC" style="color: var(--bs-red);font-weight: bold;" target="_blank">AlynaaMC</a>&nbsp;- a custom, private, high-performance fork of &nbsp;<a href="https://gitlab.com/Titaniumtown/JettPack" style="color: var(--bs-red);font-weight: bold;" target="_blank">JettPack</a>, specially designed for the SMP for the best in-class performance.<br>For Bedrock support, we use&nbsp;<a href="https://geysermc.org" style="color: var(--bs-red);font-weight: bold;" target="_blank">Geyser</a><strong>&nbsp;-&nbsp;</strong>a Bedrock packet translator running alongside with the Java server software.<br><br>Also if you ask about our server plugins, we can't answer you guys because of security concerns.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item text-start" style="margin-top: 15px;margin-bottom: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-3" aria-expanded="false" aria-controls="accordion-1 .item-3" style="font-size: 18px;color: #093d25;background: #ffffff;"><strong>Is Thicc SMP a cracked Minecraft server?</strong></button></h2>
                        <div class="accordion-collapse collapse item-3" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);">Yes. We know some of you guys can't afford Minecraft so our server use our own Discord authentication system to verify players.&nbsp;<a href="./discord" style="color: var(--bs-red);font-weight: bold;">You need a Discord account to join our server.</a><br></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item text-start" style="margin-bottom: 15px;margin-top: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-4" aria-expanded="false" aria-controls="accordion-1 .item-4" style="font-size: 18px;color: #093d25;background: #ffffff;"><strong>Can we use hacks?</strong></button></h2>
                        <div class="accordion-collapse collapse item-4" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);"><strong>Hacking and exploiting stuff are STRICTLY PROHIBITED and will result in a ban.</strong><br>Also our server has built-in anti-xray so good luck xraying.<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item text-start" style="margin-top: 15px;margin-bottom: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-5" aria-expanded="false" aria-controls="accordion-1 .item-5" style="font-size: 18px;color: #093d25;background: #ffffff;"><strong>Can I use Minecraft Bedrock to join the server?</strong></button></h2>
                        <div class="accordion-collapse collapse item-5" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);">Yes! Since this server is a cross-platform SMP, you can join the server with your Bedrock client! Use the Bedrock IP with port 19132 to connect and you're in!<br></p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item text-start" style="margin-bottom: 15px;margin-top: 15px;border-top-style: none;border-right-style: none;border-bottom-width: 5px;border-bottom-color: #1fa065;border-left-style: none;">
                        <h2 class="accordion-header" role="tab"><button class="accordion-button collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-1 .item-6" aria-expanded="false" aria-controls="accordion-1 .item-6" style="font-size: 18px;color: #093d25;background: #ffffff;"><strong>Does the world last forever?</strong></button></h2>
                        <div class="accordion-collapse collapse item-6" role="tabpanel" data-bs-parent="#accordion-1">
                            <div class="accordion-body">
                                <p class="mb-0" style="font-size: 17px;color: rgb(5,34,21);">Due to the 240GB SSD, we had to reset every new Minecraft update. After resetting the old world files will be available to download from our server as an archive for 1 week.<br></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="donate" class="highlight-clean" style="padding-top: 30px;padding-bottom: 30px;">
            <div class="container" data-aos="fade-up" data-aos-duration="500" data-aos-once="true" style="min-width: 400px;">
                <div class="intro" style="min-width: 350px;max-width: 900px;">
                    <hr>
                    <h2 class="text-center" style="font-family: Andada, serif;color: #093d25;"><strong>Buy us coffee! ☕</strong><br></h2>
                    <p class="text-start" style="width: 100%;color: #093d25;padding-bottom: 10px;">Although&nbsp;<strong>Thicc SMP&nbsp;</strong>is a free-to-play SMP, our server still has some expenses to compensate in order to host and maintain. It will be better if everyone contribute by donating!<br><br>By donating, you contribute to the server maintenance and development process!<br>As a thank you for your contribution, you will receive an exclusive&nbsp;<strong>Discord role</strong>&nbsp;and&nbsp;<strong>In-game rank</strong>&nbsp;for&nbsp;<strong>Donator</strong>.<br></p>
                    <p class="text-center" style="width: 100%;color: #093d25;padding-bottom: 10px;font-size: 20px;">You keep&nbsp;<strong>Thicc SMP&nbsp;</strong>running!&nbsp;❤️<br><br><a class="btn btn-outline-danger btn-lg text-start border rounded-pill" role="button" href="./discord" style="margin-right: 30px;color: #0e5b37;" target="_blank">❤️Let's go!❤️&nbsp;</a></p>
                    <hr>
                </div>
            </div>
        </section>
        <footer class="footer-basic" style="background: #093d25;padding-top: 20px;min-width: 400px;">
            <p class="copyright" style="font-size: 14px;color: rgb(255,255,255);">© Copyright 2021 ThiccMC - All Rights Reserved!<br>Maintained and designed with&nbsp;❤️ by&nbsp;<a href="https://thelt.ml" style="color: var(--bs-red);" target="_blank">LT</a>.<br><br>❄️ Happy Holiday theme 🎄</p>
        </footer>
    </main>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/vanilla-zoom.js"></script>
    <script src="assets/js/theme.js"></script>
    <?php
    if ($snow) {
        echo "<script src='assets/js/jquery.flurry.js'></script>";
        echo "<script>";
        echo "    $('body').flurry({";
        echo "        character: '❄❅❆',";
        echo "        color: ['white','silver'],";
        echo "        frequency: 100,";
        echo "        speed: 20000,";
        echo "        height: 4200,";
        echo "        small: 12,";
        echo "        large: 32,";
        echo "        wind: 40,";
        echo "        windVariance: 20,";
        echo "        rotation: 90,";
        echo "        rotationVariance: 180,";
        echo "        startOpacity: 1,";
        echo "        endOpacity: 0,";
        echo "        opacityEasing:'cubic-bezier(1,.3,.6,.74)',";
        echo "        blur: true,";
        echo "        overflow:'hidden',";
        echo "        zIndex: 9999";
        echo "    }); ";
        echo "</script>";
    }
    ?>
</body>

</html>