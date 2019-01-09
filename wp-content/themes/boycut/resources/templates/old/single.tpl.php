<?php get_header(); ?>
<header class="header">
</header>
<div class="banner">
  <?php $banners = get_field("banner-slider", 11)?>
  <div class="banner-sliders" id="bannerSliders">
    <?php foreach ($banners as $banner) : ?>
      <div class="banner-slider">
        <div class="banner-imgWrapper">
          <div class="banner-img" style="background-image: url(<?php echo $banner['banner-img'] ?>)"></div>
        </div>
        <div class="banner-text">
          <img class="banner-logo" src="./images/logo.svg">
          <h2 class="banner-title"><?php echo $banner['banner-title-mobile'] ?></h2>
        <p class="banner-subtitle"><?php echo $banner['banner-title-desktop'] ?></p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
<div class="program-wrapper">
  <?php $programs = get_field("program-slider", 54)?>
  <div class="program-slider" id="programSlider">
    <?php foreach ($programs as $program) : ?>
      <div class="program">
        <div class="program-imgWrapper">
          <div class="program-img" style="background-image: url('<?php echo $program['program-img'] ?>')"></div>
        </div>
        <div class="program-text">
          <h2 class="program-title">ПРОГРАММА ОБУЧЕНИЯ</h2>
          <h3 class="program-subTitle">Курс</h3>
          <h3 class="program-mainTitle"><?php echo $program['program-title'] ?></h3>
          <p class="program-descr"><?php echo $program['program-description-main'] ?><span> <?php echo $program['program-description-hidden'] ?></span></p>
          <div class="program-pricing">
            <?php $values = $program['program-values']?>
            <?php foreach ($values as $value) : ?>
              <span class="program-value"><strong><span><?php echo $value['pre'] ?> </span><?php echo $value['value'] ?></strong><?php echo $value['measure'] ?></span>
            <?php endforeach; ?>
            <p class="is__extra"><?php echo $program['extra-text'] ?></p>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>
  
<div class="teacher-wrapper">
  <?php $teachers = get_field("teacher", 72)?>
  <div class="teacher-slider" id="teacherSlider">
    <?php foreach ($teachers as $teacher) : ?>
      <div class="teacher">
        <div class="teacher-imgWrapper">
          <div class="teacher-img" style="background-image: url(<?php echo $teacher['teacher-img'] ?>)"></div>
        </div>
        <div class="teacher-text">
          <h3 class="teacher-subTitle">Преподаватель</h3>
          <h3 class="teacher-mainTitle"><?php echo $teacher['teacher-name'] ?></h3>
          <p class="teacher-descr"><?php echo $teacher['teacher-description'] ?></p>
          <a href="<?php echo $teacher['teacher-link'] ?>" class="social-link">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27">
              <path id="Shape_1_copy" data-name="Shape 1 copy" class="social-icon" d="M833.5,3428.48a6.965,6.965,0,1,0,6.966,6.97A6.978,6.978,0,0,0,833.5,3428.48Zm0,11.43a4.465,4.465,0,1,1,4.462-4.46A4.486,4.486,0,0,1,833.5,3439.91Zm7.238-13.17a1.575,1.575,0,1,1-1.578,1.58A1.575,1.575,0,0,1,840.734,3426.74Zm4.081-2.5A7.753,7.753,0,0,0,839.1,3422h-11.21a7.457,7.457,0,0,0-7.891,7.89v11.16a7.824,7.824,0,0,0,2.286,5.82,7.924,7.924,0,0,0,5.659,2.13h11.1a8.043,8.043,0,0,0,5.714-2.13,7.788,7.788,0,0,0,2.231-5.77v-11.21A7.779,7.779,0,0,0,844.815,3424.24ZM844.6,3441.1a5.336,5.336,0,0,1-1.578,3.98,5.644,5.644,0,0,1-3.972,1.41h-11.1a5.644,5.644,0,0,1-3.972-1.41,5.471,5.471,0,0,1-1.469-4.03v-11.16a5.422,5.422,0,0,1,1.469-3.97,5.553,5.553,0,0,1,3.972-1.41h11.211a5.422,5.422,0,0,1,3.972,1.47,5.611,5.611,0,0,1,1.469,3.91v11.21h0Z"
                transform="translate(-820 -3422)" />
            </svg>
            <span><?php echo $teacher['teacher-link-text'] ?></span>
          </a>
          <div class="teacher-buttons">
            <button type="button" class="button is__enroll">Запись на обучение</button>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="popup" id="popupEnroll">
    <div class="popup-close" id="PopupCloseEnroll">
      <span class="popup-closeElem"></span>
    </div>
    <div class="form" id="formEnroll">
      <h3 class="popup-title">Запись на обучение</h3>
      <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
    </div>
  </div>
</div>
<div class="gallery">
  <?php $images = get_field("gallery", 76)?>
  <?php foreach ($images as $image) : ?>
    <a href="<?php echo $image['gallery-item'] ?>" class="gallery-item">
      <div class="gallery-wrapper">
        <img src="<?php echo $image['gallery-item'] ?>" alt="" class="gallery-img">
      </div>
    </a>
  <?php endforeach; ?>
  <div class="popup" id="popupCut">
    <div class="popup-close" id="PopupCloseCut">
      <span class="popup-closeElem"></span>
    </div>
    <div class="form" id="formCut">
      <h3 class="popup-title">Бесплатная стрижка</h3>
      <?php echo do_shortcode('[contact-form-7 id="95" title="Contact form 2"]'); ?>
    </div>
  </div>
  <div class="gallery-buttons">
    <button type="button" class="button is__cut">Бесплатная стрижка</button>
  </div>
</div>
<div class="brands">
  <div class="brand">
    <img src="./images/MaleGrooming.svg" alt="">
  </div>
  <div class="brand">
    <img src="./images/FredPerry.svg" alt="">
  </div>
  <div class="brand">
    <img src="./images/Wahlshop.svg" alt="">
  </div>
  <div class="brand">
  <img src="./images/Hitek.svg" alt="">
</div>
<?php get_footer(); ?>
