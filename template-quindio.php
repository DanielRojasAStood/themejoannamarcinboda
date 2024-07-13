<?php 
/* 
Template Name: Quindio
*/
get_header(); 

$events = [
  [
    "id" => "restaurants",
    "title" => "RESTAURANTS",
    "image" => "place-1.png",
    "places" => [
      [
        "name" => "BIANCO",
        "address" => "Cra 16 # 21 - 45",
        "city" => "Armenia, Quindio",
        "phone" => "+57 317 6649868",
        "link" => "https://www.instagram.com/osteria_bianco/?hl=en",
      ],
      [
        "name" => "RANCHO EDEN",
        "address" => "Km 10 via Aeropuerto",
        "city" => "Armenia, Quindio",
        "phone" => "+57 315 5484830",
        "link" => "https://ranchoeden.com",
      ],
      [
        "name" => "CAFÉ QUINDIO",
        "address" => "La Tebaida-El Caimo",
        "city" => "MALL PARAISO",
        "phone" => "+57 310 8975776",
        "link" => "https://www.cafequindio.com.co",
      ],
      [
        "name" => "FRISBY",
        "address" => "La Tebaida-El Caimo",
        "city" => "MALL PARAISO",
        "phone" => "+57 314 7170107",
        "link" => "https://frisby.com.co",
      ],
      [
        "name" => "LAURELES <br> SUPER MARKET",
        "address" => "La Tebaida-El Caimo",
        "city" => "MALL PARAISO",
        "phone" => "(+57) 310 861 1150",
        "link" => "https://www.instagram.com/laureles.estucasa/",
      ],
      [
        "name" => "STAR <br> WINGS",
        "address" => "Av. Bolivar # 14 - 34",
        "city" => "Armenia, Quindio",
        "phone" => "(+57) 317 7257512",
        "link" => "https://www.instagram.com/starwingscolombia/",
      ],
      [
        "name" => "D’MARIA",
        "address" => "Cra. 11A # 12N - 06",
        "city" => "Armenia, Quindio",
        "phone" => "+57 311 8068144",
        "link" => "https://www.instagram.com/dmaria_col/",
      ],
      [
        "name" => "ZAKANI <br> COCINA",
        "address" => "Calle 14 # 12 - 24",
        "city" => "Armenia, Quindio",
        "phone" => "+57 321 5578982",
        "link" => "https://restaurantezakani.com",
      ],
      [
        "name" => "LAURELES <br> SUPER MARKET",
        "address" => "KM 10 Via Armenia-Pereira",
        "city" => "Autopista del Café",
        "phone" => "(+57) 314 8610502",
        "link" => "#",
      ]
    ]
  ],
  [
    "id" => "bars",
    "title" => "BARS & PU]BS",
    "image" => "place-2.png",
    "places" => [
      [
        "name" => "THE CITY <br> PUB",
        "address" => "Av. Centenario # 19 Norte - 60",
        "city" => "Armenia, Quindio",
        "phone" => "+57 300 2000704",
        "link" => "https://www.instagram.com/the_city_pub/",
      ],
      [
        "name" => "Portal del Quindio",
        "address" => "Cra. 14 # 19N - 46",
        "city" => "C.C. Portal del Quindio",
        "phone" => "+57 324 2672585",
        "link" => "https://www.instagram.com/mariajuanaalehouse/",
      ],
    ]
  ],
  [
    "id" => "boutiques",
    "title" => "BOUTIQUES & MALLS",
    "image" => "place-3.png",
    "places" => [
      [
        "name" => "C.C. MALL <br> PARAISO",
        "address" => "La Tebaida-El Caimo",
        "city" => "Armenia, Quindio",
        "phone" => "+57 300 5173567",
        "link" => "https://www.instagram.com/mallparaiso/",
      ],
      [
        "name" => "MARIAJUANA <br> BAR",
        "address" => "Cra. 14 # 19N - 46",
        "city" => "Armenia, Quindio",
        "phone" => "+57 311 7463725",
        "link" => "https://elportaldelquindio.com",
      ],
      [
        "name" => "PORTAL DEL QUINDIO",
        "address" => "Cra. 6 # 3 - 180",
        "city" => "Armenia, Quindio",
        "phone" => "+57 315 4123351",
        "link" => "https://www.tripadvisor.co/Attraction_Review-g319823-d15247140-Reviews-Centro_Comercial_Calima-Armenia_Quindio_Department.html",
      ],
    ]
  ],
  [
    "id" => "pharmacy",
    "title" => "PHARMACY-URGENT CARE",
    "image" => "place-4.png",
    "places" => [
      [
        "name" => "URGENT <br> CARE",
        "address" => "Clinica Central del Quindio",
        "city" => "Cra. 12 # 59 Armenia, Quindio",
        "phone" => "+57 (602) 3690768",
        "link" => "http://clinicacentral.co",
      ],
      [
        "name" => "PHARMACY <br> MALL PARAISO",
        "address" => "La Tebaida-El Caimo",
        "city" => "ProFamiliar Pharmacy",
        "phone" => "+57 300 5173567",
        "link" => "https://www.profamiliar.com",
      ],
    ]
  ]
]
?>

  <main class="section__main">

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

          <div class="sectionQuindio__places-bckg">
            <div class="sectionQuindio__places">
              <?php foreach ($events as $event) : ?>
                <div class="sectionQuindio__place">
                  <div class="sectionQuindio__img" style="background-image: url(<?php echo IMG_BASE . $event['image']; ?>)">
                    <h2><?php echo $event['title']; ?></h2>
                  </div>
                    <ul>
                        <?php foreach ($event['places'] as $place) : ?>
                            <li>
                                <h3 class="heading--20"><?php echo $place['name']; ?></h3>
                                <p><?php echo $place['address']; ?></p>
                                <p><?php echo $place['city']; ?></p>
                                <p class="number"><?php echo $place['phone']; ?></p>
                                <a href="<?php echo $place['link']; ?>" target="_blank">VIEW</a></p>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
              <?php endforeach; ?>
            </div>
          </div>
          </div>
        </div>
        <p class="heading--24 color--FCF0E3 numeral">#Joanna&amp;Marcin</p>
          <div>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15909.52154666405!2d-75.70839082900699!3d4.525307299999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e38f5ba4e538f77%3A0x47da17be0dcf255e!2sParroquia%20nuestra%20se%C3%B1ora%20del%20Carmen!5e0!3m2!1ses!2sco!4v1720741770756!5m2!1ses!2sco" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
      </div>
    </section>
  </main>

<?php 
get_footer(); 
?>
