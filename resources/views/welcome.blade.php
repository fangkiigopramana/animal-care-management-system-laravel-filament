<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kihub - Personal Portfolio</title>
  <link rel="shortcut icon" href="./assets/images/logo.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>

<body>
  <main>
    <aside class="sidebar" data-sidebar>
      <div class="sidebar-info">
        <figure class="avatar-box">
          <img src="./assets/images/my-avatar.png" alt="Fangki Igo Pramana" width="80">
        </figure>
        <div class="info-content">
          <h1 class="name" style="font-size: 24px;" title="Fangki Igo Pramana">Fangki Igo Pramana</h1>
          <p class="title">Software developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Email</p>

              <a href="mailto:richard@example.com" class="contact-link" style="font-size: 12px;">fangkiigo13@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="calendar-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">github</p>

              <time datetime="1982-06-23" style="font-size: 12px;">fangkiigopramana</time>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title">Location</p>

              <address style="font-size: 12px;">Tegal, Central Java, Indonesia</address>
            </div>

          </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="instagram.com/fangki_ip" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>

    <div class="main-content">
      <nav class="navbar">
        <ul class="navbar-list">
          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>
        </ul>

      </nav>

      <!--- #ABOUT -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title">About me</h2>
        </header>

        <section class="about-text">
          <p>
            I am a fresh graduate from Diponegoro University with a degree in Computer Engineering, specializing in Fullstack Web Development, particularly with the Laravel framework.
            I have honed my skills in various programming languages and frameworks, delivering efficient solutions to complex problems. My hands-on experience in web development projects has given me a deep understanding of the entire development lifecycle. I am passionate about continuously learning and staying updated with the latest industry trends. Currently, I am seeking opportunities to contribute to innovative projects and further develop my skills.
          </p>
        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-dev.svg" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Web development</h4>

                <p class="service-item-text">
                  High-quality development of sites at the professional level.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/icon-design.svg
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title">Database Management</h4>

                <p class="service-item-text">
                  Database Design and Implementation
                </p>
              </div>

            </li>

          </ul>

        </section>



        <!--
          - testimonials modal
        -->

        <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Diponegoro University - Computer Engineering Bachelor's degree</h4>

              <span>2020 - 2024</span>

              <p class="timeline-text">
                Coding, Electric, Embeded, and Organization.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">SMA N 1 Kramat Tegal - Mathematic and Science</h4>

              <span>2017 - 2020</span>

              <p class="timeline-text">
                Ratione voluptatem sequi nesciunt, facere quisquams facere menda ossimus, omnis voluptas assumenda est
                omnis..
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web Developer Internship</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100;">Tegal Learning Center</h4>

              <span>June 2021 - July 2021</span>

              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Designing the website system requirements for the organization</li>
                  <li>2. Designing the user interface using Figma software</li>
                  <li>3. Implementing HTML, JS, and CSS code according to the user interface design</li>
                  <li>4. Developing and maintaining the website</li>
                </ol>
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Data Entry</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100;">LPPM Diponegoro University</h4>

              <span>August 2022 - September 2022</span>

              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Validate 1000++ lecturer journal data available in spreadsheet form</li>
                  <li>2. Synchronizing available journal data and data in the SINTA (Science and Technology Index) system</li>
                  <li>3. Inputting research data of lecturers and students into SINTA (Science and Technology Index) system</li>
                </ol>
              </p>

            </li>

            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Backend Web Developer</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100;">PT Kalimas Arubu Indonesia Semarang</h4>
              <span>December 2022 - February 2023</span>
              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Designing and developing backend systems for web using MySQL</li>
                  <li>2. Sorting through data for 100+ car types available</li>
                  <li>3. Performing checks and validation for each car's data</li>
                  <li>4. Implementing the relationship between model data and car types using Eloquent in Laravel</li>
                </ol>
              </p>
            </li>
            
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Practice Assistant of Software Engineering Practicum</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100;">Diponegoro University</h4>
              <span>February 2023 - June 2023</span>
              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Guiding students in preparing Software functional and non-functional Requirement Specification documents</li>
                  <li>2. Provide students with an understanding of modelling and requirements analysis using diagrams in software design</li>
                  <li>3. Assist students in understanding object-oriented design techniques using the Unified Modeling Language (UML) in software design</li>
                </ol>
              </p>
            </li>
            
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Practice Assistant of Database System Practicum</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100%;">Diponegoro University</h4>
              <span>September 2023 - December 2023</span>
              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Provide students with an understanding of MySQL and Oracle Database</li>
                  <li>2. Explain and apply the use of Oracle Database in Java EE Netbeans programme</li>
                </ol>
              </p>
            </li>
            
            <li class="timeline-item">
              <h4 class="h4 timeline-item-title">Fullstack Web Developer</h4>
              <h4 class="h5 timeline-item-title" style="font-weight: 100%;">PT ADS Digital Partner Surabaya</h4>
              <span>February 2024 - June 2024</span>
              <p class="timeline-text">
                <ol style="color: rgb(190, 189, 189);">
                  <li>1. Apply the Agile method in software development</li>
                  <li>2. Convert the page that has been created by the UI/UX designer into PHP program code using the Laravel framework</li>
                  <li>3. Integrating the database that has been created by the backend developer into the financing management website</li>
                  <li>4. Collaborating with other developers in developing the financing management website using GitLab</li>
                  <li>5. Optimising the performance and efficiency of the website program code using the Laravel Debugbar tool</li>
                  <li>6. Maintain and test the program code that has been created using PHPUnit and those available in Laravel</li>
                </ol>
              </p>
            </li>            

          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">
              <div class="title-wrapper">
                <h5 class="h5">Javascript,   PHP,   Laravel,    React,   Bootstrap,   Tailwind,    MySQL,   & Postman</h5>
              </div>
            </li>

          </ul>
          

        </section>

      </article>

      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>API</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web development</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>API</button>
              </li>

              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://kiar.vercel.app/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="https://img.inews.co.id/media/822/files/inews_new/2018/10/12/pixabay.jpg" alt="barcode-app" loading="lazy">
                </figure>

                <h3 class="project-title">Barcode App</h3>
                <p class="project-category" style="color: rgb(241, 186, 35);">React, Tailwind, React-QR, NPM</p>
                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="api">
              <a href="https://bookshelf-api-express.vercel.app/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="https://www.starbackdrops.com/cdn/shop/files/SBH0525-8-8.png" alt="bookshelf-api" loading="lazy">
                </figure>

                <h3 class="project-title">Bookshelf API</h3>
                <p class="project-category" style="color: rgb(241, 186, 35);">Node.JS, Express</p>
                <p class="project-category">API</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://news-portal-web.000webhostapp.com/" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="https://themewagon.com/wp-content/uploads/2020/09/aznews-1.jpg" alt="news-portal" loading="lazy">
                </figure>

                <h3 class="project-title">News Portal</h3>
                <p class="project-category" style="color: rgb(241, 186, 35);">Laravel, News API</p>
                <p class="project-category">Web Development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="https://furni-store.kihub.net" target="_blank">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="https://themewagon.com/wp-content/uploads/2023/08/furni.png" alt="furniture-store" loading="lazy">
                </figure>

                <h3 class="project-title">Furniture Store</h3>
                <p class="project-category" style="color: rgb(241, 186, 35);">Laravel, Furniture API</p>
                <p class="project-category">Web Development</p>

              </a>
            </li>

          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->

      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">

            <!-- <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li> -->

          </ul>

        </section>

      </article>





      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d199666.5651251294!2d-121.58334177520186!3d38.56165006739519!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x809ac672b28397f9%3A0x921f6aaa74197fdb!2sSacramento%2C%20CA%2C%20USA!5e0!3m2!1sen!2sbd!4v1647608789441!5m2!1sen!2sbd"
              width="400" height="300" loading="lazy"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane"></ion-icon>
              <span>Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>

</html>