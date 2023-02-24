<section id="about">
  <div class="container">
    <?php foreach($select_all_nav as $item){ ?>
    <h3 class="title text-center text-uppercase"><?php echo $item['about']; ?></h3>
    <?php } ?>
    <div class="row">
      <div class="col-md-6 about">
        <?php foreach($select_all_title as $item){ ?>
        <p class="about-title"><?php echo $item['title']; ?></p>
        <?php } ?>
        <ul>
          <?php foreach($select_all_span as $item){ ?>
          <li><?php echo $item['span']; ?></li>
          <?php } ?>
        </ul>
      </div>
        <div class="col-md-6">
          <?php foreach($select_all_img as $item){ ?>
            <?php if($item['file']){ ?>
              <img src="<?php echo base_url('uploads/admin/aboutfile/'.$item['file']); ?>" class="img-fluid" alt="about_img_err">
            <?php }else{ ?>
              <img src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>" style="width: 130px;">
            <?php } ?>
          <?php } ?>
        </div>
    </div>
  </div>
</section>
