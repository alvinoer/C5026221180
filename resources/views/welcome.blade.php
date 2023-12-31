<html lang="en">
  <head>
    <title>Yale School of Art</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src={{asset('Function.js')}}></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500;1,600&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&display=swap" rel="stylesheet">
    <link rel="stylesheet" href={{ asset('style.css') }}>
    <link rel="icon" href="logo.png">
  </head>

  <body>
    <!--Navbar-->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#Home">
        <img src="logo.png" class="logo">
        <span class="logotext">
          Yale School of Art
        </span>
      </a>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link" href="#Home">Home <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link" href="#AboutUs">About the School</a>
          <a class="nav-item nav-link" href="#Publication">Publication</a>
          <a class="nav-item nav-link" href="#News">News</a>
          <a class="nav-item nav-link" href="#ContactUs">Contact Us</a>
        </div>
      </div>
    </nav>

    <!--Section Home-->
    <div id="Home">
      <div class="container-fluid p-0">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="gedung1.png" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="gedung2.png" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="gedung3.png" alt="Third slide">
            </div>
          </div>
        </div>
        <div class="text">
          <h1>Welcome to Yale School of Art</h1>
          <p>One of The Best Fine Arts School</p>
          <a href="#AboutUs">
            <button type="button" class="btn btn-primary mb-3 tombolbiru">Learn More</button>
          </a>
        </div>
      </div>
    </div>

    <!--Section About Us-->
    <div id="AboutUs" class="container-fluid">
      <div class="row py-5">
        <div class="col-2 py-5">
          <img src="logo.png" class="w-100">
        </div>
        <div class="col-3 pt-4 pl-5 aboutme">
          Yale <br>School <br>of Art
        </div>
        <div class="col descaboutme ">
          The Yale School of Art is a graduate school that confers MFAs in Graphic Design, Painting/Printmaking, Photography, and Sculpture; and offers undergraduate-level art courses to Yale College students.
          <br>
          The mission of the Yale School of Art is to provide students with intellectually informed, hands-on instruction in the practice of an array of visual arts media within the context of a liberal arts university. As a part of the first institution of higher learning to successfully integrate a studio-based education into such a broad pedagogical framework, the Yale School of Art has a long and distinguished history of training artists of the highest caliber.
        </div>
      </div>
    </div>

    <!--Section Publication-->
    <div id="Publication" class="container mt-5">
      <h1 class="text-center">
        Print Publications
      </h1>
      <h2 class="temapublikasi">
        ALL-SCHOOL MFA BOOK SERIES (2018-PRESENT)
      </h2>
      <div class="row listpublikasi">
        <div class="col">
          <a href="https://www.mintoimages.com/body-of-work-yale-school-of-art-2020" target="_blank">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi1.jpg" alt="Body of Work: Yale School of Art MFA 2020" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Body of Work: Yale School of Art MFA 2020</h2>
                <p class="isipublikasi">Published 2021

                  <br><br>Body of Work showcases the collected work of the graduating MFA class of 2020, and marks the fourth installment of Yale School of Art's all-school MFA book series. Featuring an afterword by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, and written contributions from Steven Rodriguez and Nicholas Weltyk, both Graphic Design '20; Carly Sheehan, Painting/Printmaking '20; Angela Chen, Photography '20; and David Roy, Sculpture '20.

                  <br><br>Edited by Willis Kingery, Graphic Design '19; Designed by Bryant Wells, Graphic Design '20; cover illustrations by Timothy Brawner, Painting/Printmaking '20.

                  <br><br>304 pages, ISBN: 978-1-948891-07-3</p>
              </div>
            </div>
          </div>
        </a>
        </div>

        <div class="col">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi2.jpg" alt="Body of Work: Yale School of Art MFA 2019" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Body of Work: Yale School of Art MFA 2019</h2>
                <p class="isipublikasi">Published 2020

                  <br><br>Featuring a foreword by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, and written contributions from Emma Gregoline, Graphic Design '19; Emile Mausner, Painting/Printmaking '19; Genesis Báez, Photography '19; and Alfredo Diaz, Sculpture '19; Body of Work showcases the collected work of the graduating MFA class of 2019, and marks the third installment of Yale School of Art's all-school MFA book series.

                  <br><br>Edited by Willis Kingery, Graphic Design '19; Edi Dai, Painting/Printmaking '19; and David Knowles, Graphic Design '19.

                  <br><br>Designed by David Knowles, Graphic Design '19; and Willis Kingery, Graphic Design '19.

                  <br><br>256 pages, ISBN: 978-1-948891-02-8</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi3.jpg" alt="Yale School of Art MFA 2018" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Yale School of Art MFA 2018</h2>
                <p class="isipublikasi">Published 2019

                  <br><br>Featuring a foreword by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, and written contributions from Bryce Wilner, Graphic Design '18; Ernest A. Bryant III, Painting/Printmaking '18; and Ian Page, Sculpture '18; this publication showcases the collected work of the graduating MFA class of 2018, and marks the second installment of Yale School of Art's all-school MFA book series.

                  <br><br>Edited by Ayham Ghraowi, Graphic Design '17;
                  <br>Designed by Hrefna Sigurðardóttir, Graphic Design '18; Cover image: Dan Swindel, Photography '18, Untitled (2019).

                  <br><br>256 pages, ISBN: 978-1-948891-00-4
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="temapublikasi">
        YALE SCHOOL OF ART COMMENCEMENT
      </div>

      <div class="row listpublikasi">
        <div class="col">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi4.jpg" alt="Now Dig This by Greg Tate" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Now Dig This by <span class="font-weight-bolder">Greg Tate</span></h2>
                <p class="isipublikasi">Published 2021

                  <br><br>Now Dig This marks the continuation of Yale School of Art Commencement—a series that publishes the speeches by speakers invited by the Dean on the occasion of the commencement of students receiving their MFA degrees from graphic design, painting/printmaking, photography, and sculpture.

                  <br><br>Our guest speaker in May 2021 was Greg Tate.

                  <br><br>The class of 2021 representative student speaker was Amina Ross, Sculpture '21, featuring a preamble by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma.

                  <br><br>Edited by Willis Kingery, Graphic Design '19. Designed by Bianca Ibarlucea, Graphic Design '21.

                  <br><br>74 pages, ISBN: 978-1-948891-09-7</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi5.jpg" alt="Art Dwells in the Present by Gregg Bordowitz" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Art Dwells in the Present by <span class="font-weight-bolder">Gregg Bordowitz</span></h2>
                <p class="isipublikasi">Published 2020

                  <br><br>Featuring a preamble by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, Art Dwells in The Present marks the continuation of Yale School of Art Commencement—a series that publishes the speeches by speakers invited by the Dean on the occasion of the commencement of students receiving their MFA degrees from graphic design, painting/printmaking, photography, and sculpture.

                  <br><br>Our guest speaker in May 2020 was Gregg Bordowitz.

                  <br><br>Fragmental editing by Angie Keefer, BA '99, and Willis Kingery, Graphic Design '19. Designed by Jinu Hong, Graphic Design '20, and Tuan Quoc Pham, Graphic Design '20.

                  <br>30 pages, ISBN: 978-1-948891-06-6</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="flip-card">
            <div class="flip-card-inner">
              <div class="flip-card-front">
                <img src="publikasi6.jpg" alt="Sermon of the Nonresponse by Fred Moten" class="fotopublikasi">
              </div>
              <div class="flip-card-back">
                <h2 class="judulpublikasi">Sermon of the Nonresponse by <span class="font-weight-bolder">Fred Moten</span></h2>
                <p class="isipublikasi">Published 2018

                  <br><br>Featuring a preamble by Stavros Niarchos Foundation Dean and Professor of Art Marta Kuzma, Sermon of the Nonresponse marked the inauguration of Yale School of Art Commencement—a series that publishes the speeches by speakers invited by the Dean on the occasion of the commencement of students receiving their MFA degrees from graphic design, painting/printmaking, photography, and sculpture.

                  <br><br>Our guest speaker in May 2018 was Fred Moten.
                  <br><br>Edited by Ayham Ghraowi, Graphic Design '17.
                  <br>Designed by Bryce Wilner, Graphic Design '18.

                  <br><br>30 pages, ISBN: 978-1-948891-04-2
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!--Section News-->
    <div id="News" class="container-fluid pt-4 pb-5">
      <div class="text-center">
        <h1>News</h1>
        <p>Click to Read</p>
      </div>
      <a href="https://www.art.yale.edu/news/inaugural-climate-engagement-mural-by-victoria-martinez-complete" target="_blank">
        <div class="card mb-3">
          <img class="card-img-top" src="news1.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">INAUGURAL CLIMATE ENGAGEMENT MURAL COMPLETE!</h5>
            <p class="card-text"><small class="text-muted">Posted on SEPTEMBER 28, 2023</small></p>
          </div>
        </div>
      </a>

      <a href="https://www.art.yale.edu/news/2023-2024-postgraduate-fellows" target="_blank">
        <div class="card mb-3">
          <img class="card-img-top" src="news2.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">WELCOME TO OUR 2023-2024 POSTGRADUATE FELLOWS</h5>
            <p class="card-text"><small class="text-muted">Posted on SEPTEMBER 27, 2023</small></p>
          </div>
        </div>
      </a>

      <a href="https://yaleart.org/June2023NFNH" target="_blank">
        <div class="card mb-3">
          <img class="card-img-top" src="news3.jpg" alt="Card image cap">
          <div class="card-body">
            <h5 class="card-title">NEWS FROM NEW HAVEN: JUNE 2023</h5>
            <p class="card-text"><small class="text-muted">Posted on JUNE 30, 2023</small></p>
          </div>
        </div>
      </a>
    </div>

    <!--Section Contact Us-->
    <div id="ContactUs" class="container-fluid py-5">
      <div class="text-center">
        <h1>Let's Join Our Community</h1>
        <p>Fill This Form</p>
      </div>
      <div class="pt-4">
        <form name="contactUs" action="https://google.com" onsubmit="return validateForm()" method="post">
          <div class="form-group row">
            <div class="col-3"></div>
            <div class="col-6 mb-2">
              <label for="name">Name : </label>
              <input type="text" id="name" name="name" class="form-control" placeholder="Input Your Name Here">
              <span id="errorName" class="errors"></span>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>
            <div class="col-6 mb-2">
              <label for="email">Email : </label>
              <input type="text" id="email" name="email" class="form-control" placeholder="Input Your Email Here">
              <span id="errorEmail" class="errors"></span>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>
            <div class="col-6 mb-2">
              <label for="message">Message :</label>
              <textarea class="form-control" id="message" rows="3" placeholder="Input Your Message Here"></textarea>
            </div>
            <div class="col-3"></div>

            <div class="col-3"></div>

            <div class="mt-2 ml-3">
            <button class="btn btn-primary" type="submit" value="Submit">Join Us!</button>
          </div>
        </form>
      </div>
    </div>

    <!--Section Link HTML-->
    <div id="linkHTML" class="w-100 pb-3 linkhtml">
      <div class="text-center">
        <h1>My Previous HTML</h1>
        <p>Click to View</p>

        <nav class="tugas">
            |<a href="{{ url('/tugas-1') }}"> Tugas 1  </a>
            |<a href="{{ url('/tugas-2') }}"> Tugas 2  </a>
            |<a href="{{ url('/tugas-3') }}"> Tugas 3  </a>
            |<a href="{{ url('/tugas-4') }}"> Tugas 4  </a>
            |<a href="{{ url('/tugas-5') }}"> Tugas 5  </a>
            |<a href="{{ url('/tugas-6') }}"> Tugas 6  </a>|
        </nav>
      </div>
    </div>


  </body>

</html>
