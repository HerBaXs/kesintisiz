<section id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-box">
          <?php foreach($select_footer as $item){ ?>
          <!-- <img src="<?php //echo base_url('public/assets/'); ?>images/webiz-logo.png" alt=""> -->
          <?php if($item['file']){ ?>
            <img src="<?php echo base_url('uploads/admin/footerfile/'.$item['file']); ?>" alt="">
          <?php }else{ ?>
            <img src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>" style="width: 130px;">
          <?php } ?>
          <p>
            <?php echo $item['desc1th']; ?>
          </p>
          <p>
            <?php echo $item['desc2th']; ?>
          </p>
          <?php } ?>
        </div>
        <div class="col-md-4 footer-box">
          <?php foreach($select_out_off as $item){ ?>
            <p id="contact"><b><?php echo $item['title']; ?></b></p>
            <p><i class="fa fa-map-marker"></i><?php echo $item['location']; ?></p>
            <p><i class="fa fa-phone"></i><?php echo $item['phone']; ?></p>
            <p><i class="fa fa-envelope-o"></i><?php echo $item['email']; ?></p>
          <?php } ?>
        </div>

        <div class="col-md-4 footer-box">
            <p><b>SUBSCRIBE NEWSLETTER</b></p>
            <input type="email"class="form-control" placeholder="Your Email">
            <button type="button"class="btn btn-primary" name="button">Subscribe</button>

            <div id="social">
                <p>Find Us On Social Media</p>
                   <div class="social-icons">
                    <?php foreach($select_smm as $item){ ?>
                      <a href="<?php echo $item['link']; ?>" class="svg-icons" target="_blank">
                      <?php if($item['file']){ ?>
                        <img src="<?php echo base_url('uploads/admin/footerfile/'.$item['file']); ?>" alt="">
                      <?php }else{ ?>
                        <img src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>" style="width: 23px;">
                      <?php } ?>
                      </a>
                      <?php } ?>
                   </div>
            </div>
        </div>
        <div class="col-md-6 ">
          <p class="copyright">Copyright © 2019. All rights reserved | Designed by <a href="#">Gurbanff</a></p>
        </div>
        <div class="col-md-6 text-right">
        <p class="copyright">
          <a href="#">Privacy Policy</a>
          <a href="#">Cookie Policy</a>
          <a href="#">Terms & Conditions</a>
        </p>
        </div>
      </div>
      <br>
    </div>
</section>
