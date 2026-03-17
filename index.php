<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muraya - Web Developer based in Kenya</title>

    <!-- 
    - favicon
  -->
    <link rel="shortcut icon" href="./favicon.svg" type="image/svg+xml">

    <!-- 
    - custom css link
  -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- 
    - google font link
  -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish&family=Poppins:wght@400;500;600;700;800&display=swap"
        rel="stylesheet">

    <!-- 
    - preload images
  -->
    <link rel="preload" as="image" href="./assets/images/hero-banner.jpg">

</head>

<body>
    <?php
      session_start();

      $success = false;
      $errorMessage = '';

      if (isset($_SESSION['success'])) {
          $success = true;
          unset($_SESSION['success']);
      }

      if (isset($_SESSION['error'])) {
          $errorMessage = htmlspecialchars($_SESSION['error']);
          unset($_SESSION['error']);
      }
    ?>

    <!-- 
    - #HEADER
  -->

    <header class="header" data-header>
        <div class="container">

            <a href="#" class="logo">Muraya</a>

            <nav class="navbar" data-navbar>
                <ul class="navbar-list">

                    <li>
                        <a href="#home" class="navbar-link" data-nav-link>Home</a>
                    </li>

                    <li>
                        <a href="#portfolio" class="navbar-link" data-nav-link>Portfolio</a>
                    </li>

                    <li>
                        <a href="#skills" class="navbar-link" data-nav-link>Skills</a>
                    </li>

                    <li>
                        <a href="#timeline" class="navbar-link" data-nav-link>Timeline</a>
                    </li>

                    <!-- <li>
            <a href="#price" class="navbar-link" data-nav-link>Price</a>
          </li>

          <li>
            <a href="#news" class="navbar-link" data-nav-link>News</a>
          </li> -->

                    <li>
                        <a href="#contact" class="navbar-link" data-nav-link>Contact</a>
                    </li>

                </ul>
            </nav>

            <button class="nav-toggle-btn" aria-label="toggle menu" data-nav-toggler>
                <span class="line line-1"></span>
                <span class="line line-2"></span>
                <span class="line line-3"></span>
            </button>

        </div>
    </header>


    <main>
        <article>

            <!-- 
        - #HERO
      -->

            <section class="section hero" id="home" aria-label="hero">
                <div class="container">

                    <figure class="hero-banner img-holder has-before" style="--width: 640; --height: 840;">
                        <img src="./assets/images/profile.png" width="640" height="840" alt="Bernard Smith"
                            class="img-cover">
                    </figure>

                    <div class="hero-content">

                        <p class="section-subtitle">Susan Wangare Muraya</p>

                        <h1 class="h1 hero-title">Web Developer based in Kenya </h1>

                        <ul class="hero-list">

                            <li>
                                <a href="#" class="list-link">
                                    <span class="span">Web Development</span>

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>
                                </a>
                            </li>

                        </ul>

                        <ul class="exp-list">

                            <li class="list-item">
                                <strong class="strong">4+</strong>

                                <span class="span">
                                    Years of<br>
                                    Experience
                                </span>
                            </li>

                            <!-- <li class="list-item">
                <strong class="strong">3K+</strong>

                <span class="span">
                  Happy<br>
                  Customers
                </span>
              </li> -->

                        </ul>

                        <a href="#portfolio" class="slide-down-btn" aria-label="scroll down">
                            <ion-icon name="arrow-down" aria-hidden="true"></ion-icon>
                        </a>

                    </div>

                </div>
            </section>


            <!-- 
        - #PORTFOLIO
      -->

            <section class="section portfolio" id="portfolio" aria-label="portfolio">
                <div class="container">

                    <p class="section-subtitle">Portfolio</p>

                    <h2 class="h2 section-title">Selected Works</h2>

                    <ul class="has-scrollbar">

                        <li class="scrollbar-item">
                            <div class="card">

                                <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                                    <img src="./assets/images/eastgoldtours-2.jpg" width="200" height="675"
                                        loading="lazy" alt="East Gold Tours" class="img-fill">
                                </figure>

                                <a href="https://eastgoldtours.com/" target="_blank" class="card-content">

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                                    <h3 class="h3 card-title">East Gold Tours</h3>

                                    <p class="card-text">Travel Agency</p>

                                </a>

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="card">

                                <!-- <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                                    <img src="./assets/images/portfolio-5.jpg" width="600" height="675" loading="lazy"
                                        alt="Viva Mercury" class="img-cover">
                                </figure>

                                <a href="#" class="card-content">

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                                    <h3 class="h3 card-title">Viva Mercury</h3>

                                    <p class="card-text">Image</p>

                                </a> -->

                            </div>
                        </li>

                        <li class="scrollbar-item">
                            <div class="card">

                                <!-- <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                                    <img src="./assets/images/portfolio-6.jpg" width="600" height="675" loading="lazy"
                                        alt="Santa Onera" class="img-cover">
                                </figure>

                                <a href="#" class="card-content">

                                    <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                                    <h3 class="h3 card-title">Santa Onera</h3>

                                    <p class="card-text">Image</p>

                                </a> -->

                            </div>
                        </li>

                    </ul>

                </div>
            </section>


            <!-- 
        - #SKILLS
      -->

            <section class="section skills has-before" id="skills" aria-label="skills"
                style="background-image: url('./assets/images/skills-bg.png')">
                <div class="container">

                    <div class="skills-content">

                        <p class="section-subtitle">Skills</p>

                        <h2 class="h2 section-title">Programming Skills</h2>

                        <p class="section-text">
                            Poet’s daughter turned code queen: Ada Lovelace wrote the first algorithm for a mechanical
                            computer, showing brains beat brawn (and poetry) every time!
                        </p>

                        <ul class="skills-list">

                            <li class="skills-item">
                                <div class="wrapper">
                                    <h3 class="skill-title">HTML & CSS</h3>

                                    <data class="skill-value" value="95%">95%</data>
                                </div>

                                <div class="progress-box">
                                    <div class="progress" style="width: 95%"></div>
                                </div>
                            </li>

                            <li class="skills-item">
                                <div class="wrapper">
                                    <h3 class="skill-title">JavaScript</h3>

                                    <data class="skill-value" value="80%">80%</data>
                                </div>

                                <div class="progress-box">
                                    <div class="progress" style="width: 80%"></div>
                                </div>
                            </li>

                            <li class="skills-item">
                                <div class="wrapper">
                                    <h3 class="skill-title">PHP</h3>

                                    <data class="skill-value" value="90%">90%</data>
                                </div>

                                <div class="progress-box">
                                    <div class="progress" style="width: 90%"></div>
                                </div>
                            </li>

                        </ul>

                    </div>

                    <div class="skills-banner has-before"></div>

                </div>
            </section>


            <!-- 
        - #TIMELINE
      -->

            <section class="section timeline" id="timeline" aria-label="timeline">
                <div class="container">

                    <p class="section-subtitle">Timeline</p>

                    <h2 class="h2 section-title">Working Period</h2>

                    <ul class="timeline-list">

                        <li class="timeline-item">

                            <h3 class="item-period">July, 2024 - Present</h3>

                            <p class="item-title">Software Developer</p>

                            <p class="item-address">Codebreeze Limited</p>

                        </li>

                        <li class="timeline-item">

                            <h3 class="item-period">December, 2023 - July, 2025</h3>

                            <p class="item-title">Frontend Developer</p>

                            <p class="item-address">Nathan Digital</p>

                        </li>

                        <li class="timeline-item">

                            <h3 class="item-period">October, 2021 - December, 2023</h3>

                            <p class="item-title">Web Developer</p>

                            <p class="item-address">Kinetic Technology Limited</p>

                        </li>

                        <!-- <li class="timeline-item">

                            <h3 class="item-period">June, 2021 - September, 2021</h3>

                            <p class="item-title">IT Support</p>

                            <p class="item-address">Office of the Director of Public Prosecution</p>

                        </li>

                        <li class="timeline-item">

                            <h3 class="item-period">February, 2021 - May, 2021</h3>

                            <p class="item-title">IT Support</p>

                            <p class="item-address">State Department of interior and citizen services, Directorate of
                                immigration services</p>

                        </li> -->

                        <li class="timeline-item">

                            <h3 class="item-period">August, 2019 - September, 2019</h3>

                            <p class="item-title">Software Developer</p>

                            <p class="item-address">INDRA Limited</p>

                        </li>

                    </ul>

                </div>
            </section>


            <!-- 
        - #PRICING
      -->

            <!-- <section class="section pricing" id="price" aria-label="price">
        <div class="container">

          <div class="pricing-content">

            <p class="section-subtitle">Pricing</p>

            <h2 class="h2 section-title">Service Prices</h2>

            <p class="section-text">
              For more than 20 years our experts have been accomplishing enough with modern Web Development, new
              generation web and
              app programming language.
            </p>

          </div>

          <ul class="pricing-list">

            <li>
              <div class="pricing-card">
                <ion-icon name="logo-wordpress" aria-hidden="true"></ion-icon>

                <h3 class="card-title">WordPress Development</h3>

                <data class="card-price" value="500">$500</data>
              </div>
            </li>

            <li>
              <div class="pricing-card">
                <ion-icon name="logo-html5" aria-hidden="true"></ion-icon>

                <h3 class="card-title">HTML Development</h3>

                <data class="card-price" value="400">$400</data>
              </div>
            </li>

            <li>
              <div class="pricing-card">
                <ion-icon name="reader" aria-hidden="true"></ion-icon>

                <h3 class="card-title">Content Writing</h3>

                <data class="card-price" value="300">$300</data>
              </div>
            </li>

            <li>
              <div class="pricing-card">
                <ion-icon name="qr-code" aria-hidden="true"></ion-icon>

                <h3 class="card-title">Brand Identity</h3>

                <data class="card-price" value="200">$200</data>
              </div>
            </li>

            <li>
              <div class="pricing-card">
                <ion-icon name="image" aria-hidden="true"></ion-icon>

                <h3 class="card-title">PSD Design</h3>

                <data class="card-price" value="100">$100</data>
              </div>
            </li>

          </ul>

        </div>
      </section> -->



            <!-- 
        - #NEWS
      -->

            <!-- <section class="section news" id="news" aria-label="news">
        <div class="container">

          <p class="section-subtitle">News</p>

          <h2 class="h2 section-title">Latest News</h2>

          <ul class="has-scrollbar">

            <li class="scrollbar-item">
              <div class="card news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                  <img src="./assets/images/blog-1.jpg" width="600" height="675" loading="lazy"
                    alt="VS Code Gets New JavaScript Debugger" class="img-cover">
                </figure>

                <a href="#" class="card-content">

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                  <time class="card-text" datetime="2022-09-02">September 02, 2022</time>

                  <h3 class="h3 card-title">VS Code Gets New JavaScript Debugger</h3>

                </a>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="card news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                  <img src="./assets/images/blog-2.jpg" width="600" height="675" loading="lazy"
                    alt="Javalin Framework for Kotlin and Java Updated" class="img-cover">
                </figure>

                <a href="#" class="card-content">

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                  <time class="card-text" datetime="2022-08-17">August 17, 2022</time>

                  <h3 class="h3 card-title">Javalin Framework for Kotlin and Java Updated</h3>

                </a>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="card news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                  <img src="./assets/images/blog-3.jpg" width="600" height="675" loading="lazy"
                    alt="JavaScript Dominated Open Source in 2022" class="img-cover">
                </figure>

                <a href="#" class="card-content">

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                  <time class="card-text" datetime="2022-07-05">July 05, 2022</time>

                  <h3 class="h3 card-title">JavaScript Dominated Open Source in 2022</h3>

                </a>

              </div>
            </li>

            <li class="scrollbar-item">
              <div class="card news-card">

                <figure class="card-banner img-holder" style="--width: 600; --height: 675;">
                  <img src="./assets/images/blog-4.jpg" width="600" height="675" loading="lazy"
                    alt="Perfecto Tests Progressive Web Apps" class="img-cover">
                </figure>

                <a href="#" class="card-content">

                  <ion-icon name="arrow-forward-outline" aria-hidden="true"></ion-icon>

                  <time class="card-text" datetime="2022-04-22">April 22, 2022</time>

                  <h3 class="h3 card-title">Perfecto Tests Progressive Web Apps</h3>

                </a>

              </div>
            </li>

          </ul>

        </div>
      </section> -->


            <!-- 
        - #CONTACT
      -->

            <section class="section contact" id="contact" aria-label="contact">
                <div class="container">

                    <div class="contact-content">

                        <p class="section-subtitle">Contact</p>

                        <h2 class="h2 section-title">Get In Touch</h2>

                        <p class="section-text">
                            Hey there! Slide into my inbox by filling out the form below, or give me a ring between 9:00
                            a.m. and 8:00 p.m. EAT, Monday through Friday — I promise I don’t bite!
                        </p>

                        <ul class="contact-list">

                            <!-- <li class="contact-item">
                              <ion-icon name="location-outline" aria-hidden="true"></ion-icon>

                              <address class="contact-link">
                                27 City Walls Rd, Clydebank, UK
                              </address>
                            </li> -->

                            <li class="contact-item">
                                <ion-icon name="call-outline" aria-hidden="true"></ion-icon>

                                <a href="tel:+07742691291" class="contact-link">+254741996366</a>
                            </li>

                            <li class="contact-item">
                                <ion-icon name="mail-outline" aria-hidden="true"></ion-icon>

                                <a href="mailto:smith@gmail.com" class="contact-link">susanmuraya89@gmail.com</a>
                            </li>

                            <!-- <li class="contact-item">
                              <ion-icon name="globe-outline" aria-hidden="true"></ion-icon>

                              <a href="www.domain.com" class="contact-link">www.domain.com</a>
                            </li> -->

                        </ul>

                    </div>


                    <form action="./PHP/contact.php" method="POST" class="contact-form">
                        <?php if ($success): ?>
                        <div class="success_message">Ding ding! Your message is chilling in our inbox like a VIP.
                        </div>
                        <?php elseif ($errorMessage): ?>
                        <div class="error"><?php echo htmlspecialchars($errorMessage); ?></div>
                        <?php endif; ?>
                        <input type="text" name="name" aria-label="name" placeholder="Name" required
                            class="input-field">

                        <input type="email" name="email" aria-label="email" placeholder="Email" required
                            class="input-field">

                        <input type="text" name="subject" aria-label="subject" placeholder="Subject"
                            class="input-field">

                        <textarea name="message" aria-label="message" placeholder="Message" required
                            class="input-field"></textarea>

                        <button type="submit" class="submit-btn">
                            <span class="span">Submit</span>

                            <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                        </button>

                    </form>

                </div>
            </section>

        </article>
    </main>





    <!-- 
    - #FOOTER
  -->

    <footer class="footer">
        <div class="container">

            <p class="copyright">
                &copy; 2025. All rights reserved by <a href="#" class="copyright-link">muraya.</a>
            </p>

            <ul class="social-list">

                <li>
                    <a href="https://github.com/muraya89" target="_blank" class="social-link">
                        <ion-icon name="logo-github"></ion-icon>
                    </a>
                </li>

                <li>
                    <a href="https://www.linkedin.com/in/susan-muraya/" target="_blank" class="social-link">
                        <ion-icon name="logo-linkedin"></ion-icon>
                    </a>
                </li>

                <!-- <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-twitter"></ion-icon>
          </a>
        </li> -->

                <!-- <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-instagram"></ion-icon>
          </a>
        </li> -->

                <!-- <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-dribbble"></ion-icon>
          </a>
        </li> -->

                <!-- <li>
          <a href="#" class="social-link">
            <ion-icon name="logo-tiktok"></ion-icon>
          </a>
        </li> -->

            </ul>

        </div>
    </footer>





    <!-- 
    - custom js link
  -->
    <script src="./assets/js/script.js" defer></script>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>