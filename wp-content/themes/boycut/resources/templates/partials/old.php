  <div class="textBlock">
    <div class="textBlock-wrapper  is__alt is__reverse">
      <div class="textBlock-content is__alt with__smallPadding">
        <h2 class="textBlock-title">ФРАНЧАЙЗИНГ В России</h2>
        <div class="features-wrapper">
          <ul class="features">
            <li class="feature">
              <img class="feature-icon" src="images/money.svg" alt="">
              <h4 class="feature-title"><?php echo get_field("feature_name_1", 135) ?></h4>
              <p class="feature-price"><?php echo get_field("feature_1", 135) ?></p>
            </li>
            <li class="feature">
              <img class="feature-icon is__little" src="images/crown.svg" alt="">
              <h4 class="feature-title"><?php echo get_field("feature_name_2", 135) ?></h4>
              <p class="feature-price"><?php echo get_field("feature_2", 135) ?></p>
            </li>
            <li class="feature">
              <img class="feature-icon" src="images/money.svg" alt="">
              <h4 class="feature-title"><?php echo get_field("feature_name_3", 135) ?></h4>
              <p class="feature-price"><?php echo get_field("feature_3", 135) ?></p>
            </li>
            <li class="feature">
              <img class="feature-icon" src="images/time.svg" alt="">
              <h4 class="feature-title"><?php echo get_field("feature_name_4", 135) ?></h4>
              <p class="feature-price"><?php echo get_field("feature_4", 135) ?></p>
            </li>
          </ul>
        </div>
        <div class="button-wrapper">
          <a class="button" href="<?php echo get_field("file", 135) ?>" target="_blank">
            <span class="button-text"><?php echo get_field("link_value_file", 135) ?></span>
          </a>
        </div>
      </div>
      <div class="textBlock-img" style="background-image: url('<?php echo get_field("image", 135) ?>')"></div>
    </div>
  </div>
  <div class="mapBlock is__Russia">
    <script>
      let adressArrowRussia = [];
    </script>
    <?php $mapAdresses = get_field("mapAdresses", 108)?>
    <?php foreach ($mapAdresses as $mapAdress) : ?>
      <script>
        adressElem = {};
        adressElem.title = "<?php echo $mapAdress['title'] ?>";
        adressCoords = "<?php echo $mapAdress['coordinates'] ?>";
        adressElem.coords = adressCoords.split(', ');
        adressArrowRussia.push(adressElem);
      </script>
    <?php endforeach; ?>
    <div class="mapPopups">
      <?php foreach ($mapAdresses as $mapAdress) : ?>
        <div class="mapPopup is__russia">
          <div class="mapPopup-close popup-close is__russia">
            <span class="popup-closeElem"></span>
          </div>
          <div class="mapPopup-image" style="background-image: url('<?php echo get_field("image", 108)?>')"></div>
          <div class="mapPopup-textBlock">
            <h4 class="mapPopup-title"><?php echo $mapAdress['title'] ?></h4>
            <ul class="mapPopup-list">
              <?php $contacts = get_field("contacts", url_to_postid($mapAdress['link']))?>
              <?php foreach ($contacts as $contact) : ?>
                <li class="mapPopup-listItem">
                  <span class="mapPopup-text"><?php echo $contact['adress']?></span>
                </li>
              <?php endforeach; ?>
            </ul>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
    <h2 class="textBlock-title">BOY CUT В РОССИИ</h2>
    <div class="map-russia" id="mapRussia"></div>
    <div class="open">
      <div class="holder">
        <h2 class="open-title">ОТКРОЙ BOY CUT В СВОЕМ ГОРОДЕ</h2>
        <div class="form">
          <?php echo do_shortcode('[contact-form-7 id="200" title="Открыть BOY CUT в России"]'); ?>
        </div>
      </div>
    </div>
  </div>