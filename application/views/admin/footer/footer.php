<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>

<style>
    .banner{
        padding-top: 50px;
    }
</style>

            <div class="main-content">
                    <div class="section__content section__content--p30">
                        <div class="row">
                            <div class="col-lg-12 banner">
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('Footer_Add'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">Footer - List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($select_desc as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['desc1th']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('Footer_Edit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmək istədiğinizə əmin misiniz?')" class="p-r-5" href="<?php echo base_url('Footer_Del/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete "></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['desc2th']; ?>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td style="float: left;">
                                                        <?php if($item['file']){?>
                                                            <img style="width: 50px; height: 50px; background: black;" src="<?php echo base_url('uploads/admin/footerfile/'.$item['file']); ?>">
                                                        <?php }else{ ?>
                                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>">              
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__content section__content--p30">
                        <div class="row">
                            <div class="col-lg-12 banner">
                                <div class="top-campaign">
                                    <h3 class="title-3 m-b-30">Footer Our Office - List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($out_off_edit as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;"> 
                                                        <?php echo $item['title']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('Out_Off_Edit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['location']; ?>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['phone']; ?>
                                                    </td>
                                                    <td></td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['email']; ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="section__content section__content--p30">
                        <div class="row">
                            <div class="col-lg-12 banner">
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('Smm_Add'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">Footer Social Media - List</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($smm_data as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;"> 
                                                        <?php echo $item['link']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('Smm_Edit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmək istədiğinizə əmin misiniz?')" class="p-r-5" href="<?php echo base_url('Smm_Del/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="float: left;">
                                                        <?php if($item['file']){?>
                                                            <img style="width: 50px; height: 50px; background: black;" src="<?php echo base_url('uploads/admin/footerfile/'.$item['file']); ?>">
                                                        <?php }else{ ?>
                                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>">              
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
            <?php $this->load->view('admin/includes/footer'); ?>
        </div>

    </div>
<?php $this->load->view('admin/includes/footerStyle'); ?>