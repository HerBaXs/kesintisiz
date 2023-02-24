<!-- <style media="screen">
    .Icon
    {
        padding-left: 5px;
    }
</style> -->

<section id="nav-bar">
  <nav class="navbar navbar-expand-lg navbar-light">
     <a class="navbar-brand">
       <img src="<?php echo base_url('public/assets/'); ?>images/webiz-logo.png" alt="Webiz_Logo">
     </a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
       <i class="fa fa-bars"></i>
     </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <?php foreach($select_all_nav as $item){ ?>
        <li class="nav-item">
          <a class="nav-link" href="#top"><?php echo $item['home']; ?><span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#services"><?php echo $item['services']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#about"><?php echo $item['about']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#testimonials"><?php echo $item['testimonials']; ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('Form'); ?>"><?php echo $item['communication']; ?></a>
        </li>
        <?php } ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#">Sign In
                <i class="fa fa-sign-in Icon" aria-hidden="true"></i>
            </a>
        </li> -->
      </ul>
    </div>
  </nav>
</section>
