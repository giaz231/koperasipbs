<!DOCTYPE html>
<?php
session_start();
$halaman_active = 'datadebit';

?>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if IE 9]>         <html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 9]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title>Koperasi Pandu Bahtera B.S</title>

        <meta name="description" content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
        <meta name="author" content="pixelcave">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/iconsmall.png">
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
        <!-- untuk font baru -->
        <link rel="stylesheet" href="css/fonts/mtbold/font.css">
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
                            <a href="index.php" class="sidebar-brand">
                                <i class="gi gi-projector"></i><span class="sidebar-nav-mini-hide"><strong>KPBS</strong></span>
                            </a>
                            <!-- END Brand -->

                            <!-- User Info -->
                            
                            <!-- END User Info -->

                            <!-- Theme Colors -->
                            <!-- Change Color Theme functionality can be found in js/app.js - templateOptions() -->
                            <ul class="sidebar-section sidebar-themes clearfix sidebar-nav-mini-hide">
                                <!-- You can also add the default color theme
                                <li class="active">
                                    <a href="javascript:void(0)" class="themed-background-dark-default themed-border-default" data-theme="default" data-toggle="tooltip" title="Default Blue"></a>
                                </li>
                                -->
                                <img src="img/logopng.png" alt="A" width="125px" style="margin-left:24px" >
                            </ul>
                            <!-- END Theme Colors -->

                            <!-- Sidebar Navigation -->
                            <?php include 'menulist.php'; ?>
                            <!-- END Sidebar Navigation -->

                            <!-- Sidebar Notifications -->
                            <div class="sidebar-header sidebar-nav-mini-hide" style="margin-top:<?php if(empty($_SESSION['islogin'])){echo '240px';} else {echo '240px';}  ?>">
                                <span class="sidebar-header-options clearfix">
                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Refresh"></a>
                                </span>
                                <span class="sidebar-header-title"><strong><font color="#ffffff" size="3">Contact Us</font></strong></span>
                            </div>
                            <div class="sidebar-section sidebar-nav-mini-hide">
                                <div class="alert alert-alt">
                                   
                                    <i class="fa fa-envelope fa-fw"></i> Email: <br>koperasi.pandubs@gmail.com
                                </div>
                                <div class="alert alert-alt">
                                   
                                    <i class="fa fa-map-marker fa-fw"></i> Address: <br> Komplek Enggano Megah No.9Q Lt.1 Tanjung Priok Jakarta Utara
                                </div>
                                <div class="alert alert-alt">
                                   
                                    <i class="fa fa-phone fa-fw"></i> Telp: <br> +62811 310 031<br>+62813 7971 8989
                                </div>
                            </div>
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
                                <h1 style="color:#186AAA;font-family:garamond;">
                                    <i style="color:black;font-size:30px;">
                                        <?php
                                            echo date("d-M-Y"); 
                                        ?>
                                    </i>Koperasi Pandu Bahtera Sejahtera<br><small style="color:#C4212D;font-family:SCRIPTBL;"><strong> Hard Work, Smart, Sincere, and Useful</strong></small>
                                </h1>
                            </div>
                        </div>
                        <ul class="breadcrumb breadcrumb-top">
                            <li>Tables</li>
                            <li><a href="">KPBS DEBIT</a></li>
                        </ul>
                        <!-- END Datatables Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Koperasi Pandu Bahtera Sejahtera Debit Report</strong></h2>
                            </div>
                            <p></p>
                            <div class="table-responsive">
                                <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                    <thead>
                                        <tr>
                                            <th class="text-center">No</th>
                                            <th class="text-center">Nama Pegawai</th>
                                            <th>Tanggal Transaksi</th>
                                            <th>Uraian</th>
                                            <th>Debit</th>
                                            <th class="text-center">Admin</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="list-data-debit">
                                        <?php include 'datatablesdebit.php'; ?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <!-- END Datatables Content -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <?php include 'footer.php';?>
                    <!-- END Footer -->
                </div>
                <!-- END Main Container -->
            </div>
            <!-- END Page Container -->
        </div>
        <!-- END Page Wrapper -->

        <!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
        <a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>


        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/tablesDatatables.js"></script>
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>

            function growlsuccessdel() {
                $.bootstrapGrowl('<h4>Delete Success !</h4> <p>The data has been deleted successfully !</p>', {
                            type: 'success',
                            delay: 2800,
                            allow_dismiss: true
                        });
            }

            $(function(){

             $('#example-datatable tbody').on('click', 'button#btn-delete', function () {
                    var idtransdebit = $(this).data("idtransdebit");
                    var page = $(this).data("pages");
                    var nama_pegawai = $(this).data("nama_pegawai");
                    var table = $('#example-datatable').DataTable();
                    if (confirm('Apakah And Yakin Ingin Menghapus Transaksi Debit Atas Nama Pegawai ini '+nama_pegawai+' ?')) {
                        
                        $.ajax({
                            url:"control.php",
                            method:"POST",
                            data:{idtransdebit:idtransdebit,page:page},
                            success:function(data){
                                growlsuccessdel();
                            }
                        });
                        table.row($(this).parent().parent().parent()).remove().draw();
                    } else {
                        loadData();
                    }
                    
                    
               });
            });
        </script>                             
        
    </body>
</html>