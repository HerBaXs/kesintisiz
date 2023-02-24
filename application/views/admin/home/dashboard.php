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
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Home - Header Names</h3>
                                <!-- <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                            <i class="zmdi zmdi-plus"></i>add item</button>
                                    </div>
                                </div> -->
                                <div class="table-responsive table-responsive-data2">
                                    <table class="table table-data2">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>names</th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach($select_all_nav as $item){ ?>
                                            <tr class="tr-shadow">
                                                <td></td>
                                                <td>
                                                    <?php echo $item['home']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['services']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['about']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['testimonials'] ?>
                                                </td>
                                                <td>
                                                    <?php echo $item['communication']; ?>
                                                </td>
                                                <td>
                                                    <div class="table-data-feature">
                                                        <a class="p-r-5" href="<?php echo base_url('HomeView'); ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                <i class="zmdi zmdi-eye"></i>
                                                            </button>
                                                        </a>
                                                        <a class="p-r-5" href="<?php echo base_url('HomeEdit/'.$item['id']);?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                <i class="zmdi zmdi-edit"></i>
                                                            </button>
                                                        </a>
                                                        <!-- <a href="<?php //echo base_url('HomeDelete'); ?>">
                                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                <i class="zmdi zmdi-delete"></i>
                                                            </button>
                                                        </a>    -->
                                                    </div>
                                                </td>
                                                <td></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>   
                                <!-- END DATA TABLE -->
                            </div>
                            <div class="col-lg-12 banner">
                                <!-- TOP CAMPAIGN-->
                                <div class="top-campaign">
                                    <div class="table-data__tool-right" style="float: right;">
                                        <a href="<?php echo base_url('BannerAdd'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Create</button></a>
                                    </div>
                                    <h3 class="title-3 m-b-30">Banner</h3>
                                    <div class="table-responsive">
                                        <table class="table table-top-campaign">
                                            <tbody>
                                                <?php foreach($select_all_banner as $item){ ?>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['title']; ?>
                                                    </td>
                                                    <td>
                                                        <div class="table-data-feature">
                                                            <a class="p-r-5" href="<?php echo base_url('BannerView'); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="View">
                                                                    <i class="zmdi zmdi-eye"></i>
                                                                </button>
                                                            </a>
                                                            <a class="p-r-5" href="<?php echo base_url('BannerEdit/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
                                                                    <i class="zmdi zmdi-edit"></i>
                                                                </button>
                                                            </a>
                                                            <a onclick="return confirm('Silmek istediğinize emin misiniz?')" href="<?php echo base_url('BannerDel/'.$item['id']); ?>">
                                                                <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                                                    <i class="zmdi zmdi-delete"></i>
                                                                </button>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['span']; ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="text-left" style="color: gray;">
                                                        <?php echo $item['videourl']; ?>
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