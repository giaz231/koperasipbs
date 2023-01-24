<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>ProUI - Responsive Bootstrap Admin Template</title>
        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.png">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.min.css">

        <!-- Related styles of various icon packs and plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (enables responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>
    <body>
        <!-- Page Wrapper -->
        <!-- In the PHP version you can set the following options from inc/config file -->
        <!--
            Available classes:

            'page-loading'      enables page preloader
        -->
        <div id="page-wrapper">
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background">
                <h1 class="push-top-bottom text-light text-center"><strong>Pro</strong>UI</h1>
                <div class="inner">
                    <h3 class="text-light visible-lt-ie9 visible-lt-ie10"><strong>Loading..</strong></h3>
                    <div class="preloader-spinner hidden-lt-ie9 hidden-lt-ie10"></div>
                </div>
            </div>
            <!-- END Preloader -->

            <!-- Page Container -->
            <!-- In the PHP version you can set the following options from inc/config file -->
            <!--
                Available #page-container classes:

                '' (None)                                       for a full main and alternative sidebar hidden by default (> 991px)

                'sidebar-visible-lg'                            for a full main sidebar visible by default (> 991px)
                'sidebar-partial'                               for a partial main sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-partial sidebar-visible-lg'            for a partial main sidebar which opens on mouse hover, visible by default (> 991px)
                'sidebar-mini sidebar-visible-lg-mini'          for a mini main sidebar with a flyout menu, enabled by default (> 991px + Best with static layout)
                'sidebar-mini sidebar-visible-lg'               for a mini main sidebar with a flyout menu, disabled by default (> 991px + Best with static layout)

                'sidebar-alt-visible-lg'                        for a full alternative sidebar visible by default (> 991px)
                'sidebar-alt-partial'                           for a partial alternative sidebar which opens on mouse hover, hidden by default (> 991px)
                'sidebar-alt-partial sidebar-alt-visible-lg'    for a partial alternative sidebar which opens on mouse hover, visible by default (> 991px)

                'sidebar-partial sidebar-alt-partial'           for both sidebars partial which open on mouse hover, hidden by default (> 991px)

                'sidebar-no-animations'                         add this as extra for disabling sidebar animations on large screens (> 991px) - Better performance with heavy pages!

                'style-alt'                                     for an alternative main style (without it: the default style)
                'footer-fixed'                                  for a fixed footer (without it: a static footer)

                'disable-menu-autoscroll'                       add this to disable the main menu auto scrolling when opening a submenu

                'header-fixed-top'                              has to be added only if the class 'navbar-fixed-top' was added on header.navbar
                'header-fixed-bottom'                           has to be added only if the class 'navbar-fixed-bottom' was added on header.navbar

                'enable-cookies'                                enables cookies for remembering active color theme when changed from the sidebar links
            -->
            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">
                <!-- Alternative Sidebar -->
                
                <!-- END Alternative Sidebar -->

                <!-- Main Sidebar -->
                <div id="sidebar">
                    <!-- Wrapper for scrolling functionality -->
                    <div id="sidebar-scroll">
                        <!-- Sidebar Content -->
                        <div class="sidebar-content">
                            <!-- Brand -->
                            <a href="home.php" class="sidebar-brand">
                                <i class="gi gi-projector"></i><span class="sidebar-nav-mini-hide"><strong>SIJAI</strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            <div class="sidebar-section sidebar-user clearfix sidebar-nav-mini-hide">
                                <div class="sidebar-user-avatar">
                                    <a href="page_ready_user_profile.html">
                                        <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar">
                                    </a>
                                </div>
                                <div class="sidebar-user-name">John Doe</div>
                                <div class="sidebar-user-links">
                                    <a href="page_ready_user_profile.html" data-toggle="tooltip" data-placement="bottom" title="Profile"><i class="gi gi-user"></i></a>
                                    <a href="page_ready_inbox.html" data-toggle="tooltip" data-placement="bottom" title="Messages"><i class="gi gi-envelope"></i></a>
                                    <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                    <a href="javascript:void(0)" class="enable-tooltip" data-placement="bottom" title="Settings" onclick="$('#modal-user-settings').modal('show');"><i class="gi gi-cogwheel"></i></a>
                                    <a href="login.html" data-toggle="tooltip" data-placement="bottom" title="Logout"><i class="gi gi-exit"></i></a>
                                </div>
                            </div>
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                            <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                                <!-- You can also add the default color theme
                                <li class="active">
                                    <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                                </li>
                                -->
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-night themed-border-night" data-theme="css/themes/night.css" data-toggle="tooltip" title="Night"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-amethyst themed-border-amethyst" data-theme="css/themes/amethyst.css" data-toggle="tooltip" title="Amethyst"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-modern themed-border-modern" data-theme="css/themes/modern.css" data-toggle="tooltip" title="Modern"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-autumn themed-border-autumn" data-theme="css/themes/autumn.css" data-toggle="tooltip" title="Autumn"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-flatie themed-border-flatie" data-theme="css/themes/flatie.css" data-toggle="tooltip" title="Flatie"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-spring themed-border-spring" data-theme="css/themes/spring.css" data-toggle="tooltip" title="Spring"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-fancy themed-border-fancy" data-theme="css/themes/fancy.css" data-toggle="tooltip" title="Fancy"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-fire themed-border-fire" data-theme="css/themes/fire.css" data-toggle="tooltip" title="Fire"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-coral themed-border-coral" data-theme="css/themes/coral.css" data-toggle="tooltip" title="Coral"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-lake themed-border-lake" data-theme="css/themes/lake.css" data-toggle="tooltip" title="Lake"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-forest themed-border-forest" data-theme="css/themes/forest.css" data-toggle="tooltip" title="Forest"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-waterlily themed-border-waterlily" data-theme="css/themes/waterlily.css" data-toggle="tooltip" title="Waterlily"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-emerald themed-border-emerald" data-theme="css/themes/emerald.css" data-toggle="tooltip" title="Emerald"></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="themed-background-dark-blackberry themed-border-blackberry" data-theme="css/themes/blackberry.css" data-toggle="tooltip" title="Blackberry"></a>
                                </li>
                            </ul>
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <ul class="sidebar-nav">
                                <a href="home.php" ><i class="gi gi-home sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Home</span></a>
                                <a href="#" class=" active"><i class="gi gi-list sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Daftar Bajai Rusak</span></a>                                
                                <a href="list_transaksi_harian.php" ><i class="gi gi-transfer sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Transaksi Harian</span></a>                                
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-truck sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Unit Bajai</span></a>
                                    <ul>
                                        <li>
                                            <a href="list_bajai.php">Daftar Unit Bajai</a>
                                        </li>
                                        <li>
                                            <a href="form_tambah_bajai.php">Form Tambah Unit Bajai</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                <li>
                                    <a href="#" class="sidebar-nav-menu"><i class="fa fa-angle-left sidebar-nav-indicator sidebar-nav-mini-hide"></i><i class="gi gi-user sidebar-nav-icon"></i><span class="sidebar-nav-mini-hide">Supir</span></a>
                                    <ul>
                                        <li>
                                            <a href="list_supir.php">Daftar Supir</a>
                                        </li>
                                        <li>
                                            <a href="form_tambah_supir.php">Form Tambah Supir</a>
                                        </li>
                                        
                                    </ul>
                                </li>
                                
                                
                                
                            </ul>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            
                            <!-- END Sidebar Notifications -->
                        </div>
                        <!-- END Sidebar Content -->
                    </div>
                    <!-- END Wrapper for scrolling functionality -->
                </div>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- Datatables Header -->
                        <div class="content-header">
                            <div class="header-section">
                                <h1>
                                    <i class="fa fa-table"></i>Datatables<br><small>HTML tables can become fully dynamic with cool features!</small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">                            
                            <a href="javascript:void(0)" style="padding:10px" data-toggle="tooltip" title="View" class="btn btn-xs btn-success" id="btn-tambah"><i class="fa fa-pencil"></i><strong> Tambah Data Kerusakan Bajai</strong></a>                            
                        </ul>
                        <!-- END Datatables Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Datatables</strong> integration</h2>
                            </div>
                            <p><a href="https://datatables.net/" target="_blank">DataTables</a> is a plug-in for the Jquery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, which will add advanced interaction controls to any HTML table. It is integrated with template's design and it offers many features such as on-the-fly filtering and variable length pagination.</p>

                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">ID Bajai</th>                                            
                                            <th class="text-center">Nomor Plat</th>
                                            <th class="text-center">Tanggal Masuk Perbaikan</th>
                                            <th class="text-center">Kilometer</th>
                                            <th class="text-center">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'control/model.php';                                        
                                        include 'control/koneksi.php';
                                        $data = getDataKerusakan();
                                        $a = 1;
                                            foreach ($data as $key) {
                                                
                                                
                                        ?>
                                        <tr>
                                            <td class="text-center"><?php echo $a; ?></td>
                                            <td class="text-center"><?php echo $key['bajai_master_idbajai_master']; ?></td>
                                            <td class="text-center"><strong><?php echo $key['no_plat']; ?></strong></td>                                            
                                            <td class="text-center"><?php echo $key['tgl_kerusakan']; ?></td>
                                            <td class="text-center"><?php echo $key['kilometer']; ?></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <form action="control/control.php" method="post" class=""> 
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="View" class="btn btn-xs btn-default" id="btn-view" data-idkeyrusakan="<?php echo $key['idkerusakan']; ?>" data-detailkerusakan="<?php echo $key['detail_kerusakan']; ?>" data-noplat="<?php echo $key['no_plat']; ?>" ><i class="fa fa-eye"></i></a>                                                        
                                                        <a href="javascript:void(0)" data-toggle="tooltip" title="Tambah Data Kerusakan" class="btn btn-xs btn-default" id="btn-tambahkerusakan" data-idkerusakan="<?php echo $key['idkerusakan']; ?>"><i class="fa fa-plus"></i></a>
                                                        <input type="hidden" name="idbajai" value="<?php echo $key['bajai_master_idbajai_master']; ?>">
                                                        <input type="hidden" name="page" value="hapuskerusakan">                                                         
                                                        <button type="submit" data-toggle="tooltip" class="btn btn-xs btn-success" title="Ubah Status Bajai"  onclick="return confirm('Apakah Data Bajai Dengan Nomor Plat <?php echo $key['no_plat']; ?> Sudah Selesai Di Perbaiki ??')"><i class="fa fa-check"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php
                                                
                                            $a++;
                                            }
                                        ?>
                                        
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="http://goo.gl/vNS3I" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="http://goo.gl/TDOSuC" target="_blank">ProUI 3.3</a>
                        </div>
                    </footer>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-view" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="control/control.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                            <fieldset>
                                <legend>Data Bajai</legend>                               
                                <input type="hidden" name="idkerusakan" id="idkeyrusakan">                            
                                <input type="hidden" name="page" value="detailin">                            
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-password">Nomor Plat Bajai</label>
                                    <div class="col-md-8">
                                        <input type="text" id="noplat" name="user-settings-password" class="form-control" placeholder="Please choose a complex one.." readonly="readonly">
                                    </div>
                                </div>                                                                
                                <div class="form-group">
                                            <label class="col-md-4 control-label" for="example-textarea-input">Detail Kerusakan</label>
                                            <div class="col-md-8">
                                                <p class="form-control-static" id="detailkerusakan"></p>
                                            </div>
                                </div>
                                
                            </fieldset>
                            
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>                                    
                                    <button type="submit" class="btn btn-sm btn-primary"><strong>Lebih Detail Lagi</strong></button>                                   
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-tambahkerusakan" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="control/control.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">
                         <input type="hidden" name="page" value="tambahdatatransaksikerusakan"> 
                         <input type="hidden" name="idkerusakan" id="idkerusakan" value=""> 
                            <fieldset>
                                <legend>Detail Barang Perbaikan Bajai</legend>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-text-input">Nama Barang</label>
                                    <div class="col-md-9">
                                        <input type="text" id="" name="nama_barang" class="form-control" placeholder="Text" >
                                    </div>
                                </div>                                                              
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="val_number">Harga Barang Satuan</label>
                                    <div class="col-md-9">
                                        <input type="text" id="val_number" name="harga_barang" class="form-control" placeholder="Numbers" maxlength="7">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="example-chosen">Jumlah Barang</label>
                                        <div class="col-md-9">
                                            <select id="example-chosen" name="jumlah_barang" class="select-chosen" data-placeholder="Jumlah Barang...." style="width: 250px;">
                                                <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>                                                        
                                                <option value="4">4</option>                                                        
                                                <option value="5">5</option>                                                        
                                                <option value="6">6</option>                                                        
                                                <option value="7">7</option>                                                        
                                                <option value="8">8</option>                                                        
                                                <option value="9">9</option>                                                        
                                                <option value="10">10</option>                                                        
                                            </select>
                                        </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">                                    
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->
        <div id="modal-tambah" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form action="control/control.php" method="post" enctype="multipart/form-data" class="form-horizontal form-bordered">                                                
                            <input type="hidden" name="page" value="tambahdatakerusakan"> 
                            <fieldset>
                                <legend>Data Bajai</legend>
                                <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-chosen">Pilih Bajai</label>
                                                <div class="col-md-9">
                                                    <select id="example-chosen" name="idbajai" class="select-chosen" data-placeholder="Pilih Bajai...." style="width: 250px;">
                                                            <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                        <?php
                                                        $bajai = getDataPlatBajai();
                                                        foreach ($bajai as $value) {                                                 
                                                        ?>
                                                            <option value="<?php echo $value['idbajai_master']; ?>"><?php echo $value['no_plat']; ?></option>                                                        
                                                        <?php
                                                        }    
                                                        ?>
                                                    </select>
                                                </div>
                                </div>                        
                            </fieldset>    
                            <fieldset>
                                <legend>Detail Perbaikan Bajai</legend>
                                <div class="form-group">
                                            <label class="col-md-3 control-label" for="example-textarea-input">Detail Kerusakan</label>
                                            <div class="col-md-9">
                                                <textarea id="example-textarea-input" name="detail_kerusakan" rows="9" class="form-control" placeholder="Content.."></textarea>
                                            </div>
                                </div>
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">                                                                      
                                    <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-sm btn-primary" onclick="return confirm('Apakah Anda Sudah Yakin Dengan Data Tersebut ?? ??')">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>
        $(function(){
            $('a#btn-view').click(function(e){              
                $('input#idkeyrusakan').val($(this).data('idkeyrusakan'));
                $('input#noplat').val($(this).data('noplat'));
                $('p#detailkerusakan').text($(this).data('detailkerusakan'));
                $('#modal-view').modal('show');
            });

            $('a#btn-tambahkerusakan').click(function(e){  
                $('input#idkerusakan').val($(this).data('idkerusakan'));                              
                $('#modal-tambahkerusakan').modal('show');
            });     
            $('a#btn-tambah').click(function(e){                                
                $('#modal-tambah').modal('show');
            });         
        });
        </script>        
    </body>
</html>