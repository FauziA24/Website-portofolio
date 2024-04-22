<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/9dc97e7feb.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/app.css">
    <title>MyPorto</title>

</head>
<body>
    <!-- Header -->
    <header id="header" class="d-flex flex-column justify-content-center">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="#home">Home<i class="fa-solid fa-house" style="color: #ffffff;"></i></a>
                        <a class="nav-link active" aria-current="page" href="#about">About<i class="fa-solid fa-user-tie"></i></a>
                        <a class="nav-link" href="#skill">Skill<i class='bx bx-file'></i></a>
                        <a class="nav-link active" aria-current="page" href="#contact">Contact<i class="bi bi-envelope"></i></a>
                    </div>
                 </div>
            </div>
        </nav>
    </header>
    <div id="menu" class="bi bi-list"></div>
    <section id="name" class="d-flex flex-column justify-content-center">
        <div class="container" data-aos="zoom-in" data-aos-delay="100">
            <div class = "col-lg-4">
                <img src = "FOTO.png" class="img-fluid" alt="">
            </div>
            <h1>M Fauzi<span>Aziz</span></h1>
            <p>I'm <span  class="typed" data-typed-items="Designer, Developer, Freelancer, Photographer"></span>Fullstack Developer</p>
            <div class="social_media">
                <a href = "https://www.instagram.com/fauzi_aziz24/"><i class='bx bxl-instagram'></i></a>
                <a href = "https://github.com/FauziA24"><i class='bx bxl-github'></i></a>
                <a href = "https://www.linkedin.com/in/fauzi-aziz-257691268/"><i class='bx bxl-linkedin'></i></a>
            </div>
        </div>
    </section>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>About</h2>
          <p><i>My name is Mohammad Fauzi Aziz, i'm Student from Bina Nusantara University in Malang, East Java, Indonesia. I have acquired the skills neccessary to build great and premium websites.</i></p>
        </div>
        <div class="row">
          <div class="col-lg-4">
            <img src="Profile.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content">
            <h2>Web Designer</h2>
            <p><i>Berikut adalah biodata saya.</i></p>
            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>24 Augustus 2004</span></li>
              <!-- <li><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.example.com</span></li> -->
                  <li><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>+62 821 231 85 2011</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Malang, Indonesia</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>mohammad.aziz001@binus.ac.id</span></li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul>
                  <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>19</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>-</span></li>
                  <li><i class="bi bi-chevron-right"></i> <strong>Passed out Year:</strong> <span>-</span></li>
                  <!-- <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li> -->
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="skills section-bg" id="skills">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Skills</h2>
          <p><i>Berikut adalah skill saya.</i></p>
        </div>

        <div class="row skills-content">
          <div class="col-lg-6 ">
            <div class="progress">
              <span>HTML</span>
              <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%</div>
            </div>
            <div class="progress">
              <span>CSS</span>
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>

            <div class="progress">
              <span>Bootstrap</span>
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>
            <div class="progress">
              <span>JavaScript</span>
              <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">70%</div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="progress">
              <span>Html</span>
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>

            <div class="progress">
              <span>Css</span>
              <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%</div>
            </div>

            <div class="progress">
              <span>C</span>
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">80%</div>
            </div>

            <div class="progress">
              <span>SQL</span>
              <div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
          </div>
        </div>
      </div>
    </section>
<!--
    <section class="resume" id="resume">
      <div class="container">
        <div class="section-title">
          <h2>Resume</h2>
          <p><i>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</i></p>
        </div>
        <div class="row skills-content">
          <div class="col-lg-6">
            <h3 class="resume-title">Summary</h3>
              <div class="resume-item pb-0">
                <h4>AAKASH SIVA</h4>
                <p>To attain a job that will enable my Technical and Professional skills this enhances a position in the working field.</p>
                <ul>
                  <li>Able to work any softwares - paced environment.</li>
                  <li>Create and innovate in designing applications.</li>
                  <li>Actively listening to others and detect challenges and difficulties are facing, or problems within projects. The more quickly able to spot these issues,I can find a solution or create a plan to address them.</li>
                </ul>
              </div>
            <h3 class="resume-title">Education</h3>
              <div class="resume-item">
                <h4>BACHELOR OF COMPUTER APPLICATION</h4>
                <h5><strong>2019 - 2022</strong></h5>
                <p>Best Arts And Science Collage,Sirkali.</p>
                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>

              </div>
              <div class="resume-item">
                <h4>BACHELOR OF COMPUTER APPLICATION</h4>
                <h5><strong>2019 - 2022</strong></h5>
                <p>Best Arts And Science Collage,Sirkali.</p>
                <p>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</p>

              </div>



          </div>
          <div class="col-lg-6">
            <h3 class="resume-title">Course </h3>
            <div class="resume-item pb-0">

              <h4>PYTHON &amp; WEB DEVELOPMENT</h4>
              <h5><strong>SLA Institute,chennai.</strong></h5>
              <ul>
              <li>The course I taken in Institute in<b> Python and Web designing</b>. It will help to enhance my skills, Course duration on 4 months. </li>
              <li>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</li>
              <li>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>PARTICIPATED ON CODEATHON</h4>
              <ul>
                <li>Am paticipated codeathon event in SLA</li>
                <li>The event is enhance our skills in real time projects. My project name is TRAFFIC ANALYZER it will predict the trafic condiction. and it's use full in maps to find the easy and trafic less roads.</li>
                <li>Qui deserunt veniam. Et sed aliquam labore tempore sed quisquam iusto autem sit. Ea vero voluptatum qui ut dignissimos deleniti nerada porti sand markend</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
-->
    <!----------------------------------projects----------------------------------->
<!--
    <section class="project" id="project">
      <div class="container">
        <div class="section-title">
          <h2>project</h2>
        </div>
        <div class="project-container">
          <div class="project-box">
            <img src="assets/python.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>Python</h4>
              <p>Traffic Analyzer</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

          <div class="project-box">
            <img src="assets/web.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>Web project</h4>
              <p>port folio</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

          <div class="project-box">
            <img src="assets/web2.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>JavaScript</h4>
              <p>Weather app</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

          <div class="project-box">
            <img src="assets/python2.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>Tkinter</h4>
              <p>Chat gpt</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

          <div class="project-box">
            <img src="assets/web3.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>Webproject</h4>
              <p>Unic website</p>
              <p>pet zone</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

          <div class="project-box">
            <img src="assets/python3.jpg" class="img-fluid">
            <div class="project-layers">
              <h4>Django</h4>
              <p>Shoping cart</p>
              <p>pursuing</p>
              <a href="#"><i class='bx bx-plus'></i></a>
            </div>
          </div>

        </div>
      </div>
    </section>
-->
    <!-----------------------------------content----------------------------------->
    <section class="contact" id="contact">
      <div class="container">
        <div class="section-title">
          <h2>Contact</h2>
        </div>
        <div class="row mt-1">
          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class='bx bx-map'></i>
                <h4>Location:</h4>
                <p>Indonesia</p>
              </div>
              <div class="Email">
                <i class='bx bxl-gmail'></i>
                <h4>Email:</h4>
                <p>mohammad.aziz001@binus.ac.id</p>

              </div>
              <div class="call">
                <i class='bx bx-mobile-alt'></i>
                <h4>Call:</h4>
                <p>+62 821 231 308 2011</p>
              </div>

            </div>
          </div>
          <div class="col-lg-8 mt-5 mt-lg-0">
            <form action="" method="post" class="php-email-form">
              <div class="row">
                <div class="col-6 form-group">
                  <input class="form-control" id="nam" name="name" type="text" required placeholder="your name">
                </div>
                <div class="col-6 form-group mt-md-0">
                  <input class="form-control" id="Email" name="Email" type="email" required placeholder="email">
                </div>
              </div>
              <div class="form-group mt-3">
                <input class="form-control" id="subject" name="subject" type="text" required placeholder="subject">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" id="message" name="message" type="text" required placeholder="message"></textarea>
              </div>

              <div class="my-3">
                <div class="Loading">Loading</div>
                <div class="error-message"></div>
                <div class="send-message">Your message is sucessfully.</div>
              </div>
              <div class="text-center">
                <button type="submit"> Send Message</button>
              </div>
            </form>


          </div>

        </div>
      </div>
    </section>
    <!----------------------------------------footer-------------------------------------------->

    <footer class="foot" id="footer">
      <div class="container ">
        <div class="section-title">
          <h3>M Fauzi Aziz</h3>
          <p><i>Thank you.</i></p>
        </div>

        <div class="social_media">
          <a><i class="bi bi-envelope-at"></i></a>
          <a><i class='bx bxl-twitter'></i></a>
          <a><i class='bx bxl-skype'></i></a>
          <a><i class='bx bxl-github'></i></a>
          <a><i class='bx bxl-linkedin'></i></a>
        </div>

        <div  class="copyright">
          <p>© Copyright <strong><span>portfolio.</span></strong> All Rights Reserved</p>
          <p>Designed by <span>Aakash</span></p>
        </div>

      </div>
    </footer>


    <!-- link js file-->
    <script src="port.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js"></script>
  <script>
    $(document).ready(function(){
      $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('header').toggleClass('toggle');
      });

      $(window).on('scroll load',function(){
        $('#menu').removeClass('fa-times');
        $('header').removeClass('toggle');
      });
    });
  </script>
</body>
</html>
