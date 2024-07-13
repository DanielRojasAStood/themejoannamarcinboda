<?php 
/* 
Template Name: Wedding
*/
get_header(); 

$slickGallery = [
  [
    "image" => "gallery-1.webp",
  ],
  [
    "image" => "gallery-2.webp",
  ],
  [
    "image" => "gallery-3.webp",
  ],
  [
    "image" => "gallery-4.webp",
  ],
  [
    "image" => "gallery-5.webp",
  ],
  [
    "image" => "gallery-6.webp",
  ],
  [
    "image" => "gallery-7.webp",
  ],
  [
    "image" => "gallery-8.webp",
  ],
  [
    "image" => "gallery-9.webp",
  ],
  [
    "image" => "gallery-10.webp",
  ],
  [
    "image" => "gallery-11.webp",
  ],
  [
    "image" => "gallery-12.webp",
  ]
];

$events = [
  [
    "image" => "Restaurants.png",
    "name" => "Restaurants",
    "link" => "/quindio/#restaurants"
  ],
  [
    "image" => "Bars.png",
    "name" => "Bars",
    "link" => "/quindio/#bars"
  ],
  [
    "image" => "Boutiques.png",
    "name" => "Boutiques",
    "link" => "/quindio/#boutiques"
  ],
  [
    "image" => "Pharmacy.png",
    "name" => "Pharmacy",
    "link" => "/quindio/#pharmacy"
  ]
]

?>

  <main class="section__main">
    <section class="sectionBanner">
      <div class="sectionBanner__bckg" style="background-image: url(<?php echo IMG_BASE . 'img-1.png' ?>)">
        <div class="sectionBanner__content">
          <div class="pb-50 logo-joanna-marcin">
            <img src="<?php echo IMG_BASE . 'img-2.svg'?>" alt="">
          </div>

          <p class="heading--42 pb-10 color--A07F2B">14.09.24</p>
          <p class="heading--24 pb-64 color--4A4A4A">Armenia, Quindío <br> Colombia</p>

          <div class="sectionBanner__box" id="wedding">
            <div class="box box--default">
              <p class="heading--112 color--A07F2B">Wedding</p>
              <span class="line line-center"></span>
              <p class="heading--24 color--A07F2B pb-24">CEREMONY</p>
              <p class="heading--28 color--4A4A4A pb-10">September 14th 2024</p>
              <p class="heading--24 color--4F3747 pb-24">2:00 P.M.</p>
              <p class="heading--24 color--4A4A4A pb-10">Parroquia Nuestra <br> Señora del Café</p>
              <p class="heading--20 color--4A4A4A pb-15">Armenia, Quindio, Colombia</p>

              <div class="pb-64">
                <a href="https://maps.app.goo.gl/qQr6JtAozQry5F2q9" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
              </div>

              <p class="heading--24 color--A07F2B pb-20">RECEPTION</p>
              <p class="heading--24 color--4A4A4A pb-10">Casa Hotel El Triángulo</p>
              <p class="heading--20 color--4A4A4A pb-15">Armenia, Quindio, Colombia</p>
              
              <p class="heading--24 color--4F3747 pb-15">3:30 P.M.</p>

              <div class="pb-40">
                <a href="https://maps.app.goo.gl/KJJ3ZkG6shUUb6n98" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
              </div>

              <div class="grid grid--2 line--vertical">
                <div>
                  <p class="heading--54 pb-20">Dress Code</p>
                  <button type="button" class="button button--primary button--center" data-open-modal="modal-1">
                    Formal
                    <?php 
                    get_template_part('template-parts/content', 'icono');
                    display_icon('eye'); 
                    ?> 
                  </button>
                </div>
                <div class="">
                  <p class="heading--54 pb-20">Wishing Well</p>
                  <a href="#" target="_blank" class="button button--primary button--center" style="border: 0">
                  It is optional
                   
                  </a>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sectionCountdown">
      <img class="img img-7" src="<?php echo IMG_BASE . 'img-7.png' ?>" alt="">
      <img class="img img-8" src="<?php echo IMG_BASE . 'img-8.png' ?>" alt="">
      <div class="sectionCountdown__bckg">
        <p class="heading--112 color--964F4C pb-30">Countdown!</p>
        <div id="countdown-timer" class="sectionCountdown__timer"></div>
      </div>

      <div class="sectionCountdownSlider">
        <div class="sectionCountdownSlider__container">
          <div class="slickGallery">
            <?php foreach ($slickGallery as $key => $item) { ?>
              <div class="padding">
                <div class="item">
                  <img src="<?php echo IMG_BASE . '/' . $item["image"] ?>" alt="">
                </div>
              </div>
            <?php } ?>
          </div>
        </div>
      </div>

      <div class="sectionEvents" id="events">
        <p class="heading--64 color--964F4C">EVENTS</p>
        <span class="line line-center"></span>

        <div class="flex flex--center flex--gap-68">
          <div class="box box--small box--0">
            <p class="heading--72 color--964F4C pb-5">Armenia</p>
            <p class="heading--20 color--4F3747 pb-20">EXPERIENCE</p>
            
            <span class="line line--center"></span>

            <p class="heading--24 color--4F3747 pb-15">September 12th 2024</p>
            <p class="heading--24 color--4F3747 pb-15">3:00 P.M.</p>
            <p class="heading--24 color--4F3747 pb-10">Salento, Quindío</p>
            <p class="heading--18 color--4F3747 pb-20">Transfer by Bus</p>

            <div class="pb-20">
              <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                Location 
                <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('location'); 
                ?> 
              </a>
            </div>

            <span class="line line--center" style="margin-bottom: 25px"></span>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <button type="button" class="button button--primary button--center" data-open-modal="modal-2">
              Casual
              <?php 
              get_template_part('template-parts/content', 'icono');
              display_icon('eye'); 
              ?> 
            </button>
          </div>
          <div class="box box--small box--0">
            <img class="img img-9" src="<?php echo IMG_BASE . 'img-9.png' ?>" alt="">
            <p class="heading--72 color--964F4C pb-5">Cocora Valley</p>
            <p class="heading--20 color--4F3747 pb-20">EXPERIENCE</p>
            
            <span class="line line--center"></span>

            <p class="heading--24 color--4F3747 pb-15">September 13th 2024</p>
            <p class="heading--18 color--4F3747 pb-10">From 10:30 A.M. to 4:00 P.M.</p>
            <p class="heading--24 color--4F3747 pb-5">Salento, Quindío</p>
            <p class="heading--18 color--4F3747 pb-20">Transfer by Bus</p>

            <div class="pb-20">
              <div class="grid grid--2 gap">
                <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
                <a href="https://colombia.travel/armenia/visita-valle-cocora" target="_blank" class="button button--primary button--center">
                  See Info 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('open'); 
                  ?> 
                </a>
              </div>
            </div>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <div class="pb-40">
              <button type="button" class="button button--primary button--center" data-open-modal="modal-3">
                Casual
                <?php 
                get_template_part('template-parts/content', 'icono');
                display_icon('eye'); 
                ?> 
              </button>
            </div>

            <p class="heading--20 color--4F3747 pb-15">WELCOME DINNER</p>
            <p class="heading--18 color--4F3747 pb-10">From 5:30 P.M. to 8:30 P.M.</p>
            <p class="heading--24 color--4F3747 pb-5">La Herencia Hotel</p>
            <p class="heading--18 color--4F3747 pb-20">Salento, Quindío</p>

            <div class="pb-20">
              <div class="grid grid--2 gap">
                <a href="https://maps.app.goo.gl/jvT7LFUVFa1hp5gp8" target="_blank" class="button button--primary button--center">
                  Location 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('location'); 
                  ?> 
                </a>
                <a href="https://maps.app.goo.gl/jTaJZDvnHj7ZXPQG8" target="_blank" class="button button--primary button--center">
                  See Info 
                  <?php 
                  get_template_part('template-parts/content', 'icono');
                  display_icon('open'); 
                  ?> 
                </a>
              </div>
            </div>

            <p class="heading--54 color--964F4C pb-20">Dress Code</p>
            <button typw="button" class="button button--primary button--center" data-open-modal="modal-4">
              Casual Elegant 
              <?php 
              get_template_part('template-parts/content', 'icono');
              display_icon('eye'); 
              ?> 
            </button>
          </div>
        </div>
      </div>
    </section>

    <section class="sectionRsvp" id="rsvp">
      <img src="<?php echo IMG_BASE . 'img-5.png'?>" alt="">
      <div class="sectionRsvp__bckg">
        <div class="sectionRsvp__text">
          <p class="heading--64 color--964F4C">R.S.V.P.</p>
          <span class="line line--default"></span>
          <p class="heading--24 color--964F4C font-bosque">Celebrate with us!</p>
          <p class="heading--24 color--964F4C font-bosque">Kindly respond by</p>
          <p class="heading--24 color--964F4C font-bosque pb-40">JULY 20th, 2024</p>

          <div class="sectionRsvp__form">
            <?php echo do_shortcode('[contact-form-7 id="7f3f16c" title="Contact form 1"]')?>
          </div>
        </div>
      </div>

      <p class="heading--24 color--FCF0E3 numeral">#Joanna&Marcin</p>
    </section>

    <section class="sectionQuindio">
      <div class="sectionQuindio__bckg">
        <div class="sectionQuindioCity">
        <div class="sectionQuindioCity__text">
          <p class="heading--72 color--964F4C font-romes">Armenia, Quindío</p>
          <span class="line line--center"></span>
          <div class="sectionQuindio__text">
            <p class="heading--18 font-bosque color--4F3747">
              Armenia, the smallest of Colombia's coffee-growing capitals, is surrounded by lush farmland and mountains. Although it is small, the traditions of the Coffee Cultural Landscape are strongly felt. The city, with a big-town atmosphere, has friendly inhabitants who enjoy chatting over coffee. Coffee is central to Armenia's identity, evidenced by the Yipao Parade, its most iconic event. Visitors can enjoy numerous attractions in and around the city, immersing themselves in the unique coffee culture.
            </p>
          </div>
          </div>

          <div class="sectionQuindio__events-bckg">
            <div class="sectionQuindio__events">
              <div class="slickEvents">
                <?php foreach ($events as $key => $event) { ?>
                  <div class="event">
                    <img src="<?php echo IMG_BASE . $event['image'];?>" alt="">
                    <p class="heading--46 color--9F3F58"><?php echo $event['name'];?></p>
                    <a href="<?php echo $event['link'];?>">VIEW</a>
                  </div>
                <?php } ?>
              </div>
            </div>
          </div>
        </div>
        <div>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15909.52154666405!2d-75.70839082900699!3d4.525307299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5ba4e538f77%3A0x47da17be0dcf255e!2sParroquia%20nuestra%20se%C3%B1ora%20del%20Carmen!5e0!3m2!1ses!2sco!4v1720741770756!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <p class="heading--24 color--FCF0E3 numeral">#Joanna&amp;Marcin</p>
      </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
