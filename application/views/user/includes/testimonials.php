<section id="testimonials">
  <div class="container">
    <?php foreach($select_all_nav as $item){ ?>
    <h3 class="title text-center text-uppercase"><?php echo $item['testimonials']; ?></h3>
    <?php } ?>
    <div class="row offset-1">
      <div class="col-md-5 testimonials">
        <p class="feedback">"Sonuç olarak bir dijital ajans seçerken iş ortaklığı yapacaksınız.
                            Ürününüzü, hizmetinizi veya markanızı tanıtacak olan da seçtiğiniz dijital ajans olacak.
                            Öyleyse dijital ajans seçiminde başlıca dikkat etmeniz gerekenlere şöyle bir bakalım."
        </p>
        <img src="<?php echo base_url('public/assets/'); ?>images/testimonials/testimonial-1.jpg"  alt="">
        <p class="user-details"><b>James</b><br>CEO Administrator</p>
      </div>
      <div class="col-md-5 testimonials">
        <p class="feedback">" Cironuzu ve harcamalarınızı bilecek,
             belki markanızın en özel durumlarını paylaşacaksınız.
             O yüzden son derece güvenilir ve profesyonel bir ajansla çalışmanız gerekmekte.
             Bizimle çalışarak işlerinizi kolaylaşdıra bilirsiniz."
        </p>
        <img src="<?php echo base_url('public/assets/'); ?>images/testimonials/testimonial-3.jpg"  alt="">

        <p class="user-details"><b>William</b><br>Artspace'in kurucu ortağı</p>
      </div>
    </div>
  </div>
</section>
