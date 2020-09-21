<?php
/**
* Template Name: Main
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<nav class="main main-nav">
    <div class="logo-container">
        <a href="http://oneredpixel.ca/"><div class="red-pixel"><img src="http://kris-site.local/wp-content/uploads/2020/08/logobanner-1.png" alt="One Red Pixel Logo" class="logo"></div></a>
    </div>
    <a href="#contact" class="icon"><i class="far fa-envelope fa-3x"></i></a>
</nav>
<header class="main-header">
    <video class="head-video" playsinline autoplay muted loop>
        <source src="http://34.74.82.96/wp-content/uploads/2020/08/SpaceRun.mp4" type="video/mp4">
    </video>
    <div class="content">
        <h1>EVERY GREAT IDEA STARTS WITH One <span class="red-hover">Pixel</span></h1>
    </div>
</header>
<section id="creative-section" class="wow fadeIn">
    <h2>Always Stay Creative</h2>
    <article>
        <div class="left wow slideInLeft">
            <p>Every creative journey starts with an idea. At One Red Pixel we believe that every creative journey starts with one pixel<span class="red">red.</span>
                That’s because we believe in a creative process that’s easy to start, delivers results and feels personal.
                <br>
                Our promise to you is that:
                <ul class="info">
                    <li>We will communicate and be hands on in the creative process from start to finish</li>
                    <li>We will work with you one-on-one to make thoughtful and professional design decisions</li>
                    <li>As a small, dedicated team we will get your project finished on time and on budget - no middlemen.</li>
                </ul>
            </p>
        </div>
        <div class="right wow slideInRight">
            <div class="work-img"><div class="overlay"></div></div>
        </div>
    </article>        
</section>
<section id="canvas" class="canvas-container">
    <canvas></canvas>
</section>


<section id="demo-reo">
    <h2>Demo</h2>
    <?php echo do_shortcode("[origincode_videogallery id='1']"); ?>
</section>

<section id="instagram" class="animated fadeIn bg-black">
    <h2>Follow Us on Instagram</h2>   
    <?php echo do_shortcode('[instagram-feed]'); ?>
</section>

<section id="client-project" class="wow fadeIn">
    <h2>Trusted Clients</h2>
    <?php echo do_shortcode('[URIS id=36]'); ?>
</section>


<main  class="bg-black"> 
  <section id="about">
      <h2>About</h2>
      <div class="about-section">
          <div class=" wow fadeInLeft">
              <div class="info-image"></div>
              <div class="red-background"></div>
          </div>   
          <p class="wow fadeInRight"><strong>Kris Schuman</strong> is just your friendly, neighbourhood Motion Graphics Artist and Filmmaker. Graduating with honours from Ai Vancouver with a focus on visual story telling and editing. There in Vancouver, and now based in Toronto, he has been honing his skills like a samurai, with great determination, passion and focus. In his downtime, when not working on a video, he's most likely to be found cooking in the kitchen, watching old episodes of Batman, or having a drink with friends. He is constantly striving to evolve his craft; challenging himself and in turn developing and strengthening his skills. Kris is a strong believer that there is always opportunity to grow, and that all dogs go to heaven. He enjoys and takes pride working with all his clients, big or small and from all walks of life. His skills and expertise are sought out by those searching for him to bring to life their visions. Whether it be personal projects or large video productions for major corporations such as, KPMG, TD BANK, and Trillium Health Partners, his genuine, passionate and creative personality is his guarantee.</p>
      </div>
  </section>
</main>
<section class="contact" id="contact">
    <h2>Contact Us</h2>
    <?php echo do_shortcode('[contact-form-7 id="34" title="Contact form 1"]'); ?>
</section>