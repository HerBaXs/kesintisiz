
<section class="banner">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <?php foreach($select_all_banner as $item){ ?>
        <p class="promo-title"><?php echo $item['title']; ?></p>
        <p class="join-title"><?php echo $item['span']; ?></p>
        <a href="<?php echo $item['videourl']; ?>" class="link-play" target="_blank">
          <img src="<?php echo base_url('public/assets/'); ?>svg/play.svg" alt="" class="play-btn">Öğreticileri izleyin
        </a>
        <?php } ?>
      </div>
        <div class="col-md-6">
          <img src="<?php echo base_url('public/assets/'); ?>svg/undraw_email_campaign_qa8y.svg" alt="" class="img-fluid">
        </div>
    </div>
  </div>
    <!--- Background wave Hero ---->
    <img src="<?php echo base_url('public/assets/'); ?>images/ground@-min.png" class="bottom-img" alt="">
</section>
                        