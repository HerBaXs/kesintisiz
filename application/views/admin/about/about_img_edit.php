<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>


                <style>
                    .iconDevil
                    {
                        display: inline-block;
                        font-size: 40px;
                        width: 10px;
                        text-align: left;
                    }
                    @import url("https://fonts.googleapis.com/css?family=Mukta:700");
                    * {
                    box-sizing: border-box;
                    }
                    *::before, *::after {
                    box-sizing: border-box;
                    }

                    body {
                    font-family: "Mukta", sans-serif;
                    font-size: 1rem;
                    line-height: 1.5;
                    margin: 0;
                    min-height: 100vh;
                    background: #f3f8fa;
                    }

                    button {
                    position: relative;
                    display: inline-block;
                    cursor: pointer;
                    outline: none;
                    border: 0;
                    vertical-align: middle;
                    text-decoration: none;
                    background: transparent;
                    padding: 0;
                    font-size: inherit;
                    font-family: inherit;
                    }
                    button.learn-more {
                    width: 12rem;
                    height: auto;
                    float: right;
                    }
                    button.learn-more .circle {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: relative;
                    display: block;
                    margin: 0;
                    width: 3rem;
                    height: 3rem;
                    background: #27ae60;
                    border-radius: 1.625rem;
                    }
                    button.learn-more .circle .icon {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    bottom: 0;
                    margin: auto;
                    background: #fff;
                    }
                    button.learn-more .circle .icon.arrow {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    left: 0.625rem;
                    width: 1.125rem;
                    height: 0.125rem;
                    background: none;
                    }
                    button.learn-more .circle .icon.arrow::before {
                    position: absolute;
                    content: "";
                    top: -0.25rem;
                    right: 0.0625rem;
                    width: 0.645rem;
                    height: 0.625rem;
                    border-top: 0.150rem solid #fff;
                    border-right: 0.150rem solid #fff;
                    transform: rotate(45deg);
                    }
                    button.learn-more .button-text {
                    transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
                    position: absolute;
                    top: 0;
                    left: 0;
                    right: 0;
                    bottom: 0;
                    padding: 0.75rem 0;
                    margin: 0 0 0 1.85rem;
                    color: #282936;
                    font-weight: 700;
                    line-height: 1.6;
                    text-align: center;
                    text-transform: uppercase;
                    }
                    button:hover .circle {
                    width: 100%;
                    }
                    button:hover .circle .icon.arrow {
                    background: #fff;
                    transform: translate(1rem, 0);
                    }
                    button:hover .button-text {
                    color: #fff;
                    }

                    /* @supports (display: grid) {
                    body {
                        display: grid;
                        grid-template-columns: repeat(4, 1fr);
                        grid-gap: 0.625rem;
                        grid-template-areas: ". main main ." ". main main .";
                    }

                    #container {
                        grid-area: main;
                        align-self: center;
                        justify-self: center;
                    }
                    }*/

                </style>

            <!-- MAIN CONTENT-->
                        <div class="main-content">
                            <div class="section__content section__content--p30">
                                <div class="row">
                                        <div class="col-md-12">
                                        <h3 class="title-5 m-b-35">About - Section Update</h3>
                                        <div class="table-data__tool">
                                            <div class="table-data__tool-left">
                                            </div>
                                            <div class="table-data__tool-right">
                                                <a href="<?php echo base_url('About'); ?>"><button class="au-btn au-btn-icon au-btn--green au-btn--small">Back</button></a>
                                            </div>
                                        </div>
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-header">Update List</div>
                                            <div class="card-body card-block">
                                                <form action="<?php echo base_url('AboutImgEditAct/'.$select_all_img['id']); ?>" method="post" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <div class="input-group">
                                                            <label for="click">
                                                                <i class="fa fa-folder iconDevil"></i>
                                                                <input id="click" name="user_file" type="file" class="form-control file-upload-info" hidden>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php if($select_all_img['file']){ ?>
                                                        <img style="object-fit: cover; width: 150px; height: 150px;" src="<?php echo base_url('uploads/admin/aboutfile/'.$select_all_img['file']); ?>">
                                                    <?php }else{ ?>
                                                        <img style="object-fit: cover; width: 150px; height: 150px;" src="<?php echo base_url('public/admin/assets/imagesjpg');?>" alt="Not Found">
                                                    <?php } ?>
                                                    <button class="learn-more">
                                                        <span class="circle" aria-hidden="true">
                                                        <span class="icon arrow"></span>
                                                        </span>
                                                        <span class="button-text">Update</span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
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