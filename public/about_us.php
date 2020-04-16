<?php
  $page = "about page";
  include("../private/config/function.php");
  include("../private/required/public/header.php");
?>

<div class="body__banner">
  <div class="wrap__banner">
    <div class="banner__img">
      <img src="<?=base_url();?>img/banner/bg4.jpg" alt="">
    </div>
    <!-- end banner image -->
  </div>
  <!-- end wrap banner -->
</div>
<!-- end wrap banner -->

<div class="body__container">
  <div class="page__about">
    <main>
      <section class="section__about wrap__content margin-bottom-big">
          <header class="section__heading margin-bottom-medium">
            <h4 class="heading-primary--sub">welcome to <strong>eqna</strong></h4>
            <h2 class="heading-primary--main">Lorem ipsum dolor sit amet consectetur adipisicing.</h2>
          </header>

          <div class="section__body row">
            <div class="col-2-of-4">
              <p class="margin-bottom-small">
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. luta repudiandae qui, rerum laudantium ullam, culpa quo. Libero fugiat non eos odio consectetur, dignissimos esse quisquam.
              </p>
              <p>
                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Totam possimus mollitia ipsa fugit! Dolores eligendi, et inventore error soluta repudiandae qui, rerum laudantium ullam, culpa quo. Libero fugiat non eos odio consectetur, dignissimos esse quisquam.
              </p>
            </div>
            <div class="col-2-of-4">
            <figure>
              <img width="100%" src="img/about/1.png" alt="photo">
            </figure>
            </div>
          </div>
      </section>
      <!-- end section about -->

      <section class="section__testimonial">
        <header class="section__header align-center">
            testimonial
        </header>
        <div class="section__body">
          <ul>
            <li>1</li>
            <li>2</li>
            <li>3</li>
          </ul>
        </div>
        
      </section>
    </main>
  </div>
  <!-- end page about -->
</div>
<!-- end body container -->

<?php
  include("../private/required/public/footer.php");
?>