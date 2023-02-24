<section id="services">
  <div class="container text-center">
    <?php foreach($select_all_nav as $item){ ?>
    <h3 class="title text-center text-uppercase"><?php echo $item['services']; ?></h3>
    <?php } ?>
    <div class="row text-center">
      <?php foreach($select_all_services as $item){ ?>
      <div class="col-md-4 services">
        <?php if($item['file']){ ?>
          <img src="<?php echo base_url('uploads/admin/servicesfile/'.$item['file']); ?>" class="service-img"   alt="">
        <?php }else{ ?>
          <img src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>" style="width: 130px;">
        <?php } ?>
        <h4><?php echo $item['title']; ?></h4>
        <p><?php echo $item['span']; ?></p>
      </div>
      <?php } ?>
      <!-- <div class="col-md-4 services">
        <img src="<?php //echo base_url('public/assets/'); ?>svg/branding.svg" class="service-img"   alt="">
        <h4>Çevrimiçi Markalaşma</h4>
        <p>Çevrimiçi pazarlama için kullanılan yöntemler ve teknikler arasında e-posta, sosyal medya,
           görüntülü reklamcılık, arama motoru optimizasyonu, Google AdWords ve daha fazlası
           bulunur.
        </p></div> -->
      <!-- <div class="col-md-4 services">
        <img src="<?php echo base_url('public/assets/'); ?>svg/ads.svg" class="service-img"   alt="">
        <h4>Google Reklamları</h4>
        <p>Eğer bir dijital ajans Google Partners ortağı ise buradan şunu anlayabilirsiniz
            Bu sizler için dijital ajans seçerken referans olabilir.
            Bir de Google Partners olurken kademeler olduğunu da belirtelim.
        </p></div> -->
      <!-- <div class="col-md-4 services">
        <img src="<?php //echo base_url('public/assets/'); ?>svg/undraw_Savings_dwkw.svg" class="service-img"   alt="">
        <h4>Tıklama Başına Ödeme</h4>
        <p>Tıklama başına ödeme (TBÖ) yapılan Arama Ağı reklamlarında yalnızca reklamınız sonuç aldığında ödeme yaparsınız. Örneğin, kullanıcılar web sitenizi ziyaret etmek veya işletmenizi aramak için reklamınızı tıkladığında.
        </p></div> -->
      <!-- <div class="col-md-4 services">
        <img src="<?php //echo base_url('public/assets/'); ?>svg/social.svg" class="service-img"   alt="">
        <h4>Sosyal Medya</h4>
        <p>Instagram, Twitter, Facebook, LinkedIn, Tiktok ve daha birçok sosyal medya platformu hedef kitlenizin yoğun olarak bulunduğu kanalları oluşturuyor.
        </p></div> -->
      <!-- <div class="col-md-4 services">
      <img src="<?php //echo base_url('public/assets/'); ?>svg/undraw_wireframing_nxyi.svg" class="service-img"   alt="">
        <h4>SEO</h4>
        <p>Arama motoru optimizasyonu olarak da anılan SEO, önemini gün geçtikçe arttırıyor. Ürün ve hizmetiniz kadar web sitenizde bu ürünleri nasıl anlattığınız da önemli.
        </p></div> -->
    </div>
    <!-- <button type="button" class="btn btn-primary"  name="button">Find Out More</button> -->
  </div>
</section>
