<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">About - Section View</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo base_url('About'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Back</button></a>
                                    </div>
                                </div>
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th>img</th>
                                                <th>names</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($select_all_img as $item){ ?>
                                            <tr>
                                                <td style="float: left;">
                                                    <?php if($item['file']){ ?>
                                                            <img style="width: 150px; height: 150px;" src="<?php echo base_url('uploads/admin/aboutfile/'.$item['file']); ?>">
                                                    <?php }else{ ?>
                                                        <img style="object-fit: cover; width: 40px; height: 40px;" src="<?php echo base_url('public/admin/assets/images/image.jpg'); ?>">
                                                    <?php } ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['file']; ?>    
                                                </td>
                                                <td></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END DATA TABLE -->
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