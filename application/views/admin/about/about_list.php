<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>

<style>
    .banner{
        padding-top: 50px;
    }
</style>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="row">
                <div class="col-lg-12 banner">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('AboutTitleAdd'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">About - List Title</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($select_title as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['title']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('AboutTitleView'); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </button>
                                                            </a>
                                                            <a class="p-r-5" href="<?php echo base_url('AboutTitleEdit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmek istediğinize emin misiniz?')" href="<?php echo base_url('AboutTitleDel/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <!-- <td style="float: left;">
                                                        <?php //if($item['file']){ ?>
                                                            <img style="width: 150px; height: 150px;" src="<?php //echo base_url('uploads/admin/aboutfile/'.$item['file']); ?>">
                                                        <?php //}else{ ?>
                                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php //echo base_url('public/admin/assets/images/image.jpg'); ?>">              
                                                        <?php //} ?>
                                                    </td> -->
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                            <div class="col-lg-12 banner">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('AboutAdd'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">About - List Span</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($select_all_about as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['span']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('AboutView'); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </button>
                                                            </a>
                                                            <a class="p-r-5" href="<?php echo base_url('AboutEdit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmek istediğinize emin misiniz?')" href="<?php echo base_url('AboutDel/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <!-- <td style="float: left;">
                                                        <?php //if($item['file']){ ?>
                                                            <img style="width: 150px; height: 150px;" src="<?php //echo base_url('uploads/admin/aboutfile/'.$item['file']); ?>">
                                                        <?php //}else{ ?>
                                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php //echo base_url('public/admin/assets/images/image.jpg'); ?>">              
                                                        <?php //} ?>
                                                    </td> -->
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                            <div class="col-lg-12 banner">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('AboutImg'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">About - List Img</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($select_img as $item){ ?>
                                                <tr>
                                                    <td style="float: left;">
                                                    <?php if($item['file']){ ?>
                                                            <img style="width: 150px; height: 150px;" src="<?php echo base_url('uploads/admin/aboutfile/'.$item['file']); ?>">
                                                        <?php }else{ ?>
                                                            <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>">              
                                                        <?php } ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('AboutImgView'); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </button>
                                                            </a>
                                                            <a class="p-r-5" href="<?php echo base_url('AboutImgEdit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmek istediğinize emin misiniz?')" href="<?php echo base_url('AboutImgDel/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <!--  END TOP CAMPAIGN-->
                            </div>
                        </div>
                </div>
            </div>
            <?php $this->load->view('admin/includes/footer'); ?>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>
<?php $this->load->view('admin/includes/footerStyle'); ?>