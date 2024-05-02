<?php
    session_start();
    if(!isset($_SESSION['loggedin']) || isset($_SESSION['loggedin'])!=true){
        header("location:login.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Explore Expedition | plan to next</title>
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.min.css" rel="stylesheet">
  <script src="https://unpkg.com/scrollreveal@4.0.9/dist/scrollreveal.js"></script>
</head>

<body>

<input type="checkbox" id="bars">
  <nav class="nav-bar" id="navbar">
    <div class="content">
      <div class="site-logo">
        <a href="#" class="logo-link">Explore Expedition</a>
      </div>

      <ul class="navigation">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#about">About us</a></li>
        <li class="link"><a href="#next">Next</a></li>
        <li class="link"><a href="#blog">Blog</a></li>
        <li class="link"><a href="#gallery">Gallery</a></li>
        <li class="link"><a href="#contact">Contact</a></li>
        <li class="link"><a href="logout.php">Logout</a></li>

      </ul>

      <label for='bars' class="icon-bars"><i class="ri-bar-chart-2-fill"></i></label>
    </div>
  </nav>

  <header class="home" id="home">
    <div class="content">
      <h1>One <strong>step</strong> at <strong>a time to </strong> your next Adventure </h1>
      <h4>Explore the colourful world like a BANJARA</h4>
      <button class="btn-explore">Scroll to Know More <i class="ri-arrow-right-line"></i> </button>
    </div>
  </header>


  <section class="about" id="about">
    <div class="content">
      <div class="items">

        <div class="image">
          <img src="assets\EEwhite.png" alt="" srcset="">
        </div>
        <div class="item">
          <div class="item-content">
            <h2 class="about-title">
              About Us
            </h2>
            <div class="about-desc">
              <p>
                At Explore Expedition, Our diverse range of hiking and adventure events caters to every skill level and interest. Whether you're a seasoned trekker or a beginner, while ensuring their safety and comfort throughout the journey. Our knowledgeable and experienced guides are not only experts in navigating trails, but also in creating a welcoming and inclusive environment for all participants. We take pride in being a female-friendly company, ensuring that women feel empowered, supported, and inspired to embark on their own outdoor adventures. Safety is our utmost priority. We meticulously plan each expedition, thoroughly assessing the trails, weather conditions, and potential risks to guarantee a secure and worry-free experience.
              </p>
            </div>
          </div>

          <div class="item-data">
            <div class="col">
              <h1>121</h1>
              <span>Completed Trips</span>
            </div>
            <div class="col">
              <h1>20</h1>
              <span>Tour Guides</span>
            </div>
            <div class="col">
              <h1>70+</h1>
              <span>Destinations</span>
            </div>

          </div>

          <button class="btn-explore">Explore More <i class="ri-arrow-right-line"></i> </button>

        </div>

      </div>

    </div>
  </section>


  <section class="next" id="next">
    <div class="heading">
      <h1 class="title">Discover the most attractive destinations</h1>
      <p class="subtitle">See the world with passion</p>
    </div>
    <div class="content">
      <div class="items">

        <div class="card">
          <div class="image">
            <img src="./assets/discover/discover-1.jpg" alt="" srcset="">
          </div>
          <div class="content-card">
            <h4>Spiti Valley</h4>
            <p>
              Embark on the ultimate adventure through rugged landscapes and ancient monasteries with our Spiti Valley expedition. 
            </p>
            
            <a href="blog1.html" class="btn-read">Read More</a>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="./assets/journals/blog-2.jpg" alt="" srcset="">
          </div>
          <div class="content-card">
            <h4>Rajasthan</h4>
            <p>
              Experience Rajasthan's Rich Heritage with Our Expertly Crafted Tours
            </p>
            <a href="blog2.html" class="btn-read">Read More</a>
          </div>
        </div>

        <div class="card">
          <div class="image">
            <img src="./assets/discover/discover-3.jpg" alt="" srcset="">
          </div>
          <div class="content-card">
            <h4>Kedarnath</h4>
            <p>
              Embark on a spiritual journey to Kedarnath Dham with us and discover the serene beauty of the Himalayas.
            </p>
            <a href="blog3.html" class="btn-read">Read More</a>

          </div>
        </div>


      </div>
    </div>
  </section>


  <section class="blog" id="blog">
    <div class="heading">
      <h1 class="title">Latest on our blog</h1>
      <p class="subtitle">That helps you to travel better than others</p>
    </div>
    <div class="content">
      <div class="items">
        <div class="card">
          <a href="latest.html">
            <img src="./assets/journals/blog-1.jpg" alt="Five Things You need to know about Travelling.">
            <div class="content-card">
              <p>
                Five Things You need to know about Travelling.
              </p>
            </div>
          </a>
        </div>
      
    
        <div class="card">
          <a href="latest.html">
          <img src="./assets/journals/blog-2.jpg" alt=" Five Things You need to know about Trekking." srcset="">
        
          <div class="content-card">
            <p>
              Five Things You need to know about Trekking.
            </p>
          </div>
          </a>
        </div>
        <div class="card">
          <a href="latest.html">
          <img src="./assets/journals/blog-3.jpg" alt="Five Things You need to know about Camping." srcset="">
          <div class="content-card">
            <p>
              Five Things You need to know about Camping.
            </p>
          </div>
        </a>
        </div>
      </div>

    </div>
  </section>


  <div class="site-banner">
    <div class="content">
      <div class="row">
        <p>Explore <small>&</small> Travel</p>
      </div>
    </div>

  </div>

  <section class="gallery" id="gallery">
    <div class="heading">
      <h1 class="title">Our Album </h1>
      <p class="subtitle">We have the best Photographers for your personal pictures!</p>
    </div>
    <div class="items">

      <div class="card">
        <img src="./assets/album/album-1.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="./assets/album/album-2.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="./assets/album/album-3.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="./assets/album/album-4.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="./assets/album/album-5.jpg" alt="" srcset="">
      </div>
      <div class="card">
        <img src="./assets/album/album-6.jpg" alt="" srcset="">
      </div>

    </div>

  </section>


  <section class="contact" id="contact">

    <div class="content">
      <div class="items">

        <div class="item">
          <div class="heading">
            <h1 class="title">Contact Us</h1>
            <div class="subtitle">We are able to reply within 24 hours. Even available on weekends </div>
          </div>
          <div class="row">
            <div class="card">
              <div class="line">
                <span><i class="ri-phone-line"></i></span>
                <h4>Call us</h4>
              </div>

              <p>+91 79772 37574</p>
            </div>
            <div class="card">
              <div class="line">
                <span><i class="ri-mail-line"></i></span>
                <h4>Mail us</h4>
              </div>
              <p>exploreeexpedition@gamil.com</p>
            </div>
          </div>
        </div>

        <div class="item">
          <form action="" method="post">
            <input type="mail" class="input" placeholder="Your Email">
            <input type="text" class="input" placeholder="Your Phone">
            <textarea rows="6" class="input" placeholder="Your Message"></textarea>
            <button class="btn-contact">Send a message! </button>
          </form>
        </div>


      </div>
    </div>
  </section>

  <footer class="footer">

    <div class="content">
      <h4>Explore Expedition</h4>
      <div class="social">
        <span>
          <a href="#f"><i class="ri-facebook-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-instagram-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-twitter-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-linkedin-fill"></i></a>
        </span>
        <span>
          <a href="#f"><i class="ri-youtube-fill"></i></a>
        </span>
      </div>
      <p>
        <i class="ri-double-quotes-l"></i>

        One step at a time emphasizes the importance of breaking down big tasks into smaller, manageable steps, staying present, and building confidence with each accomplishment, individuals can overcome challenges.
        <i class="ri-double-quotes-r"></i>

      </p>
      <p>"Travel far, travel wide, travel with an open heart and a curious mind."</p>
      <ul class="navigation">
        <li class="link"><a href="#home">Home</a></li>
        <li class="link"><a href="#about">About us</a></li>
        <li class="link"><a href="#next">Next</a></li>
        <li class="link"><a href="#blog">Blog</a></li>
        <li class="link"><a href="#gallery">Gallery</a></li>
        <li class="link"><a href="#contact">Contact</a></li>

      </ul>
    </div>
    <div class="rights">
      Copyrights &#169 <a href="http://" target="_blank" rel="noopener noreferrer">Explore Expedition</a>. all rights reserved
    </div>
  </footer>
  <script src="main.js"></script>

</body>

</html>