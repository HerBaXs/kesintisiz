<?php $this->load->view('admin/includes/head'); ?>
<?php $this->load->view('admin/includes/body'); ?>
<?php $directory = base_url('public/admin/inbox') ?>
        
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $directory ?>/assets/img/apple-icon.png">
        <link rel="icon" type="image/png" href="<?php echo $directory ?>/assets/img/favicon.png">
        <title>
            Material Dashboard 2 by Creative Tim
        </title>
        <!--     Fonts and icons     -->
        <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
        <!-- Nucleo Icons -->
        <link href="<?php echo $directory ?>/assets/css/nucleo-icons.css" rel="stylesheet" />
        <link href="<?php echo $directory ?>/assets/css/nucleo-svg.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
        <!-- Material Icons -->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
        <!-- CSS Files -->
        <link id="pagestyle" href="<?php echo $directory ?>/assets/css/material-dashboard.css?v=3.0.0" rel="stylesheet" />

        <main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg ">
            <!-- Navbar -->
            <nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" navbar-scroll="true">
            <div class="container-fluid py-1 px-3">
                <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent mb-0 pb-0 pt-1 px-0 me-sm-6 me-5">
                    <li class="breadcrumb-item text-sm"><a class="opacity-5 text-dark" href="javascript:;">Pages</a></li>
                    <li class="breadcrumb-item text-sm text-dark active" aria-current="page">Tables</li>
                </ol>
                <h6 class="font-weight-bolder mb-0">Tables</h6>
                </nav>
                
            </nav>
            <!-- End Navbar -->
            <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                <div class="card my-4">
                    <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Inbox</h6>
                    </div>
                    </div>
                    <div class="card-body px-0 pb-2">
                    <div class="table-responsive p-0">
                        <table class="table align-items-center mb-0">
                        <thead>
                            <tr>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">name and email</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">phone</th>
                            <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">services</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">message</th>
                            <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7"></th>
                            <th class="text-secondary opacity-7"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($select_all_inbox as $item){ ?>
                            <tr>
                            <td>
                                <div class="d-flex px-2 py-1">
                                <div>
                                    <img src="<?php echo $directory ?>/assets/img/149071.png" class="avatar avatar-sm me-3 border-radius-lg" alt="user1">
                                </div>
                                <div class="d-flex flex-column justify-content-center">
                                    <h6 class="mb-0 text-sm">
                                        <?php echo $item['f_name']; ?>
                                    </h6>
                                    <p class="text-xs text-secondary mb-0">
                                        <?php echo $item['f_email']; ?>
                                    </p>
                                </div>
                                </div>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">
                                    <?php echo $item['f_phone']; ?>
                                </p>
                            </td>
                            <td>
                                <p class="text-xs font-weight-bold mb-0">
                                    <?php echo $item['f_service']; ?>
                                </p>
                                <p class="text-xs text-secondary mb-0">
                                    <?php echo $item['f_type-product']; ?>
                                </p>
                            </td>
                            <td class="align-middle text-center text-sm">
                                <p class="text-xs font-weight-bold mb-0">
                                    <?php echo $item['f_message']; ?>
                                </p>
                            </td>
                            <td class="align-middle text-center">
                                <span class="text-secondary text-xs font-weight-bold"></span>
                            </td>
                            <td class="align-middle">
                                <a onclick="return confirm('Silmek istediğinize emin misiniz?')" href="<?php echo base_url('InboxDel/'.$item['f_id']); ?>">
                                    <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
                                        <i class="zmdi zmdi-delete"></i>
                                    </button>
                                </a>
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
        </main>
        
        <!--   Core JS Files   -->
        <script src="<?php echo $directory ?>/assets/js/core/popper.min.js"></script>
        <script src="<?php echo $directory ?>/assets/js/core/bootstrap.min.js"></script>
        <script src="<?php echo $directory ?>/assets/js/plugins/perfect-scrollbar.min.js"></script>
        <script src="<?php echo $directory ?>/assets/js/plugins/smooth-scrollbar.min.js"></script>
        <!-- <script>
            var win = navigator.platform.indexOf('Win') > -1;
            if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
            }
        </script> -->
        <!-- Github buttons -->
        <script async defer src="https://buttons.github.io/buttons.js"></script>
        <script src="<?php $directory ?>/assets/js/material-dashboard.min.js?v=3.0.0"></script>
    
    
    <?php $this->load->view('admin/includes/footer'); ?>
        </div>
    </div>
<?php $this->load->view('admin/includes/footerStyle'); ?>