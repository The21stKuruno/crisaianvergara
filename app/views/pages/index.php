<?php require APPROOT . '/views/inc/header.php'; ?>
<!-- Main -->
<section class="main pages" style="background-image: url(<?php echo URLROOT; ?>/img/showcase.jpg);">
    <div class="showcase container">
      <h1>Freelance Web Designer & Developer based in Daejeon, South Korea. I design and code beautifully simple
        things,
        and I love what I do.</h1>
      <a class="smooth-scroll" id="work-me" href="">
        <p>Wanna Learn More!</p>
        <i class="fas fa-chevron-down"></i>
      </a>
    </div>
  </section>
  <section id="work-me-section" class="work pages container">
    <span class="line">
      <h3>Some Of My Latest Work</h3>
    </span>
    <div class="projects">
      <figure>
        <img src="http://placehold.it/250x250" />
        <h4>Trade-it</h4>
        <span>Php</span>
        <span>CSS Grid</span>
        <span>Flat Design</span>
        <span>Wordpress</span>
      </figure>
      <figure>
        <img src="http://placehold.it/250x250" />
        <h4>The Sentinel</h4>
        <span>Real Estate</span>
        <span>Graphic Design</span>
        <span>Responsive</span>
        <span>Wordpress</span>
        <span>Photography</span>
      </figure>
      <figure>
        <img src="http://placehold.it/250x250" />
        <h4>A-market</h4>
        <span>E-commerce</span>
        <span>Fashion</span>
        <span>Animation</span>
        <span>Colorful</span>
        <span>ReactJs</span>
      </figure>
    </div>
    <p>Want to see more examples?
      <a id="more-projects" href="portfolio.html">
        Click here.
      </a>
    </p>
  </section>
  <section id="about-me-section" class="about container">
    <span class="line">
      <h3>About Me</h3>
    </span>
    <div class="about-box">
      <div class="box-item box-one">
        <img src="<?php echo URLROOT; ?>/img/profile-pict.jpg" alt="">
      </div>
      <div class="box-item box-two">
        <h4>Cris Aian Vergara</h4>
        <h5>Web Designer | Web Developer</h5>
        <p class="one">I love building and designing web applications while drinking coffee or tea. Watching anime
          and
          reading
          manga is what I do when I'm not coding or programming. For now, I'm living in Daejeon, South Korea.</p>
        <h4 class="skills">Skills:</h4>
        <p class="two">Html(5) | Css(3) | Javascript(Jquery, ReactJs) | Php(Laravel) | Version Control(Git, Github) |
          Adobe Tools(Photoshop)</p>
        <h5 id="find">Find Out More?</h5>
        <ul>
          <li><a target="_blank" href="https://www.facebook.com/VXAianOfficial"><i class="fab fa-facebook-f"></i></a></li>
          <li><a target="_blank" href="https://twitter.com/The21stKuruno"><i class="fab fa-twitter"></i></a></li>
          <li><a target="_blank" href="https://www.instagram.com/aian.php/"><i class="fab fa-instagram"></i></a></li>
          <li><a target="_blank" href="https://www.youtube.com/channel/UCJpg6zdKLtyqMN3JYvXcWZQ?view_as=subscriber"><i
                class="fab fa-youtube"></i></a></li>
          <li><a target="_blank" href="https://github.com/The21stKuruno"><i class="fab fa-github"></i></a></li>
          <li><a target="_blank" href="https://www.linkedin.com/in/cris-aian-vergara-4bbb06154/"><i class="fab fa-linkedin-in"></i></a></li>
        </ul>
      </div>
    </div>
  </section>
  <section id="contact-me-section" class="contact container">
    <span class="line">
      <h3>Contact Me</h3>
    </span>
    <form action="" method="POST">
      <h4>Feel free to shoot me an email (<a href="mailto:The21stKuruno@yahoo.com">The21stKuruno@yahoo.com</a>),
        connect on social media (<a href="https://twitter.com/The21stKuruno" target="_blank">Twitter</a>),
        or fill out the
        form below:</h4>
      <div class="form-item two-column">
        <div>
          <label for="name">Full Name <sup>*</sup></label>
          <input type="text" id="name" required>
        </div>
        <div>
          <label for="email">Email Address <sup>*</sup></label>
          <input type="email" id="email" required>
        </div>
      </div>
      <div class="form-item two-column">
        <div>
          <label for="website">Website</label>
          <input type="url" id="website">
        </div>
        <div>
          <label for="number">Phone Number</label>
          <input type="text" id="number">
        </div>
      </div>
      <div class="form-item">
        <label for="message">Message <sup>*</sup></label>
        <textarea name="" id="message" cols="30" rows="10" required></textarea>
      </div>
      <div class="form-item">
        <button class="btn" type="submit">Submit Form</button>
      </div>
      <div class="form-item">
        <p class="required">* Required</p>
      </div>
    </form>
  </section>
  <script src="<?php echo URLROOT; ?>/js/main.js"></script>
<?php require APPROOT . '/views/inc/footer.php'; ?>