<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                <div class="row">
                            <div class="col-md-12">
                                <!-- DATA TABLE -->
                                <h3 class="title-5 m-b-35">Home - Header Names</h3>
                                <div class="table-data__tool">
                                    <div class="table-data__tool-left">
                                    </div>
                                    <div class="table-data__tool-right">
                                        <a href="<?php echo base_url('Dashboard'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Back</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">Banner</div>
                                            <div class="card-body card-block">
                                                <form action="<?php echo base_url('BannerEditAct/'.$banner_edit['id']); ?>" method="post">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Title</div>
                                                            <input type="text" id="username3" name="title" class="form-control" required value="<?php echo $banner_edit['title']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Span</div>
                                                            <input type="text" id="email3" name="span" class="form-control" required value="<?php echo $banner_edit['span']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <div class="input-group-addon">Video URL</div>
                                                            <input type="text" id="password3" name="videourl" class="form-control" required value="<?php echo $banner_edit['videourl']; ?>">
                                                        </div>
                                                    </div>
                                                    <div class="form-actions form-group" style="float: right;">
                                                        <button type="submit" class="btn btn-outline-success">Update</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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