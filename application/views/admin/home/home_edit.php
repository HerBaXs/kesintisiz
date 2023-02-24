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
                                <div class="col-lg-6">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Section Header</strong>
                                    </div>
                                    <form action="<?php echo base_url('HomeEditAct/'.$edit_home['id']); ?>" method="post">
                                        <div class="card-body card-block">
                                            <div class="has-success form-group">
                                                <label for="inputSuccess2i" class=" form-control-label"></label>
                                                <input type="text" id="inputSuccess2i" name="home" class="form-control-success form-control" required value="<?php echo $edit_home['home']; ?>">
                                            </div>
                                            <div class="has-warning form-group">
                                                <label for="inputWarning2i" class=" form-control-label"></label>
                                                <input type="text" id="inputWarning2i" name="services" class="form-control-warning form-control" required value="<?php echo $edit_home['services']; ?>">
                                            </div>
                                            <div class="has-danger has-feedback form-group">
                                                <label for="inputError2i" class=" form-control-label"></label>
                                                <input type="text" id="inputError2i" name="about" class="form-control-danger form-control" required value="<?php echo $edit_home['about']; ?>">
                                            </div>
                                            <div class="has-danger has-feedback form-group">
                                                <label for="inputError2i" class=" form-control-label"></label>
                                                <input type="text" id="inputError2i" name="testimonials" class="form-control-danger form-control" required value="<?php echo $edit_home['testimonials']; ?>">
                                            </div>
                                            <div class="has-danger has-feedback form-group">
                                                <label for="inputError2i" class=" form-control-label"></label>
                                                <input type="text" id="inputError2i" name="communication" class="form-control-danger form-control" required value="<?php echo $edit_home['communication']; ?>">
                                            </div>
                                            <button type="submit" class="btn btn-success">Edit</button>
                                        </div>
                                    </form>
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