<!DOCTYPE html>
<?php
session_start();
$halaman_active = 'datakaryawan';
include 'session.php';
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

         <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery-1.11.3.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/tablesDatatables.js"></script>
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
        <div id="page-wrapper" >
            <!-- Preloader -->
            <!-- Preloader functionality (initialized in js/app.js) - pageLoading() -->
            <!-- Used only if page preloader is enabled from inc/config (PHP version) or the class 'page-loading' is added in #page-wrapper element (HTML version) -->
            <div class="preloader themed-background"> 
                <h1 class="push-top-bottom text-light text-center" ><strong>Koperasi Pandu Bahtera B.S</strong></h1>
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
                            <div class="sidebar-header sidebar-nav-mini-hide" style="margin-top:<?php if(empty($_SESSION['islogin'])){echo '410px';} else {echo '450px';}  ?>">
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
                                   
                                    <i class="fa fa-phone fa-fw"></i> Telp: <br> +62811 310 031 <br>
                                    +62813 7971 8989
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
                        <!-- untuk font baru -->
                        
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
                            <li><a href="">KPBS</a></li>
                        </ul>
                        <!-- END Datatables Header -->

                        <!-- Datatables Content -->
                        <div class="block full">
                            <div class="block-title">
                                <h2><strong>Koperasi Pandu Bahtera Sejahtera Monthly Report</strong></h2>
                            </div>
                            <p></p>
                            <?php if($_SESSION['role'] == "admin"){ ?>
                            <ul class="breadcrumb breadcrumb-top">                            
                                <button type="button" style="padding:10px" title="Refresh" class="btn btn-xs btn-success" id="btn-refresh"><i class="fa fa-refresh"></i><strong> Refresh Data Laporan Pembayaran Iuran Pokok</strong></button>                            
                                <span class="help-block">*Tombol ini untuk merefresh data Laporan Pembayaran Iuran Pokok jika sudah berganti tahun </span>
                            </ul>
                            <?php } ?> 
                            <div class="table-responsive" id="tablemain">
                            <table id="example-datatable" class="table table-vcenter table-condensed table-bordered">
                                <thead>
                                <tr>
                                    <td width="24" rowspan="2">No</td>
                                    <td width="86" rowspan="2">Nama Pegawai</td>
                                    <td colspan="12" align="center">Laporan Pembayaran Iuran Pokok</td>
                                    <td width="160" rowspan="2" align="center">Iuran Pokok</td>
                                    <td width="160" rowspan="2" align="center">Investasi</td>
                                    <td width="160" rowspan="2" align="center">Form Investasi</td>
                                    <td width="160" rowspan="2" align="center">Action</td>
                                </tr>
                                <tr>
                                    <td width="32">Jan</td>
                                    <td width="32">Feb</td>
                                    <td width="32">Mar</td>
                                    <td width="32">Apr</td>
                                    <td width="32">Mei</td>
                                    <td width="32">Jun</td>
                                    <td width="32">Jul</td>
                                    <td width="32">Aug</td>
                                    <td width="32">Sept</td>
                                    <td width="32">Oct</td>
                                    <td width="32">Nov</td>
                                    <td width="32">Dec</td>
                                </tr>
                                </thead>
                                <tbody id="list-data">    
                                    <?php include('datatables.php'); ?>
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
        <!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
        <div id="modal-edit" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Edit Data Pegawai</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form  id="update_form" method="post" class="form-horizontal form-bordered">
                        <input type="hidden" id="idpegawai" name="idpegawai" value="">
                        <input type="hidden" name="page" value="editdatapegawai">                        
                            <fieldset>
                                <legend>Data Pegawai</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Nama Pegawai</label>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" >
                                    </div>
                                </div>                         
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Laporan Pembayaran Iuran Pokok</label>
                                    <div class="col-md-8">
                                    <select id="bulan" name="bulan" class="select-chosen" data-placeholder="Pilih Bulan.." style="width: 250px;">
                                        <option value=""></option>
                                        <option value="tidakmilih">Tidak Memilih</option>
                                        <option value="january">January</option>
                                        <option value="febuary">Febuary</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="jully">Jully</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="october">October</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                    <span class="help-block">*Pilih Bulan Yang Akan Di Update !!</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="example-text-input">Iuran Wajib</label>
                                        <div class="col-md-8">
                                            <input type="text" id="iuran_wajib" name="iuran_wajib" class="form-control" placeholder="Please choose a complex one.." >
                                            <span class="help-block">*Data Yang Akan Di Update Sudah Benar !!</span>
                                        </div>
                                </div>

                                
                                
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" id="close" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="insert" value="Insert" class="btn btn-sm btn-primary">Save Changes</button>
                                    <i id="ajaxloadingbar" class="fa fa-spinner fa-4x fa-spin" style="display:none;">
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
        <div id="modal-refresh" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <!-- Modal Header -->
                    <div class="modal-header text-center">
                        <h2 class="modal-title"><i class="fa fa-pencil"></i> Edit Data Pegawai</h2>
                    </div>
                    <!-- END Modal Header -->

                    <!-- Modal Body -->
                    <div class="modal-body">
                        <form  id="update_form" method="post" class="form-horizontal form-bordered">
                        <input type="hidden" id="idpegawai" name="idpegawai" value="">
                        <input type="hidden" name="page" value="editdatapegawai">                        
                            <fieldset>
                                <legend>Data Pegawai</legend>
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Nama Pegawai</label>
                                    <div class="col-md-8">
                                        <input type="text" id="nama_pegawai" name="nama_pegawai" class="form-control" >
                                    </div>
                                </div>                         
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="user-settings-email">Laporan Pembayaran Iuran Pokok</label>
                                    <div class="col-md-8">
                                    <select id="bulan" name="bulan" class="select-chosen" data-placeholder="Pilih Bulan.." style="width: 250px;">
                                        <option value=""></option>
                                        <option value="tidakmilih">Tidak Memilih</option>
                                        <option value="january">January</option>
                                        <option value="febuary">Febuary</option>
                                        <option value="maret">Maret</option>
                                        <option value="april">April</option>
                                        <option value="mei">Mei</option>
                                        <option value="juni">Juni</option>
                                        <option value="jully">Jully</option>
                                        <option value="agustus">Agustus</option>
                                        <option value="september">September</option>
                                        <option value="october">October</option>
                                        <option value="november">November</option>
                                        <option value="desember">Desember</option>
                                    </select>
                                    <span class="help-block">*Pilih Bulan Yang Akan Di Update !!</span>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <label class="col-md-4 control-label" for="example-text-input">Iuran Wajib</label>
                                        <div class="col-md-8">
                                            <input type="text" id="iuran_wajib" name="iuran_wajib" class="form-control" placeholder="Please choose a complex one.." >
                                            <span class="help-block">*Data Yang Akan Di Update Sudah Benar !!</span>
                                        </div>
                                </div>

                                
                                
                            </fieldset>
                            <div class="form-group form-actions">
                                <div class="col-xs-12 text-right">
                                    <button type="button" id="close" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                                    <button type="submit" id="insert" value="Insert" class="btn btn-sm btn-primary">Save Changes</button>
                                    <i id="ajaxloadingbar" class="fa fa-spinner fa-4x fa-spin" style="display:none;">
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- END Modal Body -->
                </div>
            </div>
        </div>
        <!-- END User Settings --> 
                           
        
                                
        <script>$(function(){ TablesDatatables.init(); });</script>
        <script>
            function loadData(){
                $.ajax({
                url:'datatables.php',//ini akan ke controller dulu baru ke view list
                type:'get',
                dataType:'html',
                success:function(data){
                    $("#list-data").html(data);
                }
		    });
            }

            function convertIdr(bilangan){
                   
                var	number_string = bilangan.toString(),
                    sisa 	= number_string.length % 3,
                    rupiah 	= number_string.substr(0, sisa),
                    ribuan 	= number_string.substr(sisa).match(/\d{3}/g);
                        
                if (ribuan) {
                    separator = sisa ? ',' : '';
                    rupiah += separator + ribuan.join(',');
                }

                return rupiah;

            }

            function growlsuccess() {
                $.bootstrapGrowl('<h4>Update Success !</h4> <p>The data has been updated successfully !</p>', {
                            type: 'success',
                            delay: 2800,
                            allow_dismiss: true
                        });
            }

            function growlsuccesscustom(header,body) {
                $.bootstrapGrowl('<h4>'+header+'</h4> <p>'+body+'</p>', {
                            type: 'success',
                            delay: 2800,
                            allow_dismiss: true
                        });
            }

            function growlerrorcustom(header,body) {
                $.bootstrapGrowl('<h4>'+header+'</h4> <p>'+body+'</p>', {
                            type: 'danger',
                            delay: 2800,
                            allow_dismiss: true
                        });
            }

            function growlsuccessdel() {
                $.bootstrapGrowl('<h4>Delete Success !</h4> <p>The data has been deleted successfully !</p>', {
                            type: 'success',
                            delay: 2800,
                            allow_dismiss: true
                        });
            }


            $(function(){
                //variable for update
                var nama_pegawaiupdt = '';
                var iuran_wajibupdt = '';
                var bulan = '';



                $('button#btn-refresh').on('click', function(event){
                    var page = 'refreshall';
                    
                    if (confirm('Apakah And Yakin Ingin Merefresh Seluruh Data Laporan Pembayaran Iuran Pokok  ?')) {
                        $('#page-wrapper').addClass('page-loading');
                        setTimeout(function (){
                                $('#page-wrapper').removeClass('page-loading');
                                window.location.replace("index.php");
                        }, 2000);
                        $(this).blur();
                        $.ajax({  
                             url:"control.php",  
                             method:"POST",  
                             data:{page:page}, 
                             dataType:'html',   
                             success:function(data){ 
                               
                             }  
                        });
                        
                        
                    } else {
                        
                    }   

                    
                    
                    
                });
     
                $('#example-datatable tbody').on('click', 'button#btn-edit', function () {
                    
                    $('input#idpegawai').val($(this).data('idpegawai'));
                    $('input#nama_pegawai').val($(this).data('nama_pegawai'));
                    $('input#iuran_wajib').val($(this).data('iuran_wajib'));
                    $(this).parent().parent().parent().addClass('selectedupdate');
                    $('#modal-edit').modal('show');
                } );

                //ini untuk save perubahan pegawai
                $('#update_form').on("submit",function(event){
                    nama_pegawaiupdt = $('input#nama_pegawai').val();
                    iuran_wajibupdt = $('input#iuran_wajib').val();
                    iuran_wajibupdt = parseInt(iuran_wajibupdt);
                    bulan = $('select#bulan').find(':selected').val();
                    event.preventDefault();
                    if(confirm('apakah anda yakin data yang di update sudah benar ??')){
                        $("#ajaxloadingbar").show();
                        $.ajax({  
                            url:"control.php",  
                            method:"POST",  
                            data:$('#update_form').serialize(), 
                            dataType:'html',   
                            success:function(data){   
                                $('#modal-edit').modal('hide');
                                $("#ajaxloadingbar").hide();
                                growlsuccess(); 
                            }  
                        });
                        $('#list-data').find('tr.selectedupdate').find('td#nama_pegawai').text(nama_pegawaiupdt);
                        $('#list-data').find('tr.selectedupdate').find('td#iuranwjb').text("Rp. "+convertIdr(iuran_wajibupdt));
                        $('#list-data').find('tr.selectedupdate').find('button#btn-edit').data('nama_pegawai' , nama_pegawaiupdt);
                        $('#list-data').find('tr.selectedupdate').find('button#btn-edit').data('iuran_wajib' , iuran_wajibupdt);
                        switch(bulan) {
                            case 'january':
                                $('#list-data').find('tr.selectedupdate').find("input#jan").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#jan").prop("disabled" , false);
                                break;
                            case 'febuary':
                                $('#list-data').find('tr.selectedupdate').find("input#feb").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#feb").prop("disabled" , false);
                                break;
                            case 'maret':
                                $('#list-data').find('tr.selectedupdate').find("input#mar").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#mar").prop("disabled" , false); 
                                break;
                            case 'april':
                                $('#list-data').find('tr.selectedupdate').find("input#apr").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#apr").prop("disabled" , false);
                                break;
                            case 'mei':
                                $('#list-data').find('tr.selectedupdate').find("input#may").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#may").prop("disabled" , false);
                                break;
                            case 'juni':
                                $('#list-data').find('tr.selectedupdate').find("input#jun").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#jun").prop("disabled" , false);
                                break;
                            case 'jully':
                                $('#list-data').find('tr.selectedupdate').find("input#jul").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#jul").prop("disabled" , false);
                                break;
                            case 'agustus':
                                $('#list-data').find('tr.selectedupdate').find("input#aug").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#aug").prop("disabled" , false);
                                break;
                            case 'september':
                                $('#list-data').find('tr.selectedupdate').find("input#sep").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#sep").prop("disabled" , false);
                                break;
                            case 'october':
                                $('#list-data').find('tr.selectedupdate').find("input#oct").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#oct").prop("disabled" , false);
                                break;
                            case 'november':
                                $('#list-data').find('tr.selectedupdate').find("input#nov").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#nov").prop("disabled" , false);
                                break;
                            case 'desember':
                                $('#list-data').find('tr.selectedupdate').find("input#des").prop("checked" , false);
                                $('#list-data').find('tr.selectedupdate').find("input#des").prop("disabled" , false);
                                break;
                            default:
                                // code block
                                break;
                        }
                        $('#list-data').find('tr.selectedupdate').removeClass('selectedupdate')
                    }
                     
                    

                });

                // $('select').change(function(){
                //     alert($(this).find(':selected').data('id'));
                // });

                // ini untuk delete
                $('#example-datatable tbody').on('click', 'button#btn-delete', function () {
                    var idpegawai = $(this).data("idpegawaidel");
                    var page = $(this).data("pages");
                    var nama_pegawai = $(this).data("nama_pegawaidel");
                    var table = $('#example-datatable').DataTable();
                    if (confirm('Apakah And Yakin Ingin Menghapus Pegawai ini '+nama_pegawai+' ?')) {
                        
                        $.ajax({
                            url:"control.php",
                            method:"POST",
                            data:{idpegawai:idpegawai,page:page},
                            success:function(data){
                                growlsuccessdel();        
                            }
                        });
                        table.row($(this).parent().parent().parent()).remove().draw();
                    } else {
                        
                    }   
                });

                $('#example-datatable tbody').on('click','tr button#btn-submit',function(){
                    var jan = $(this).parent().parent().parent().find("input#jan").prop("checked");
                    var feb = $(this).parent().parent().parent().find("input#feb").prop("checked");
                    var mar = $(this).parent().parent().parent().find("input#mar").prop("checked");
                    var apr = $(this).parent().parent().parent().find("input#apr").prop("checked");
                    var may = $(this).parent().parent().parent().find("input#may").prop("checked");
                    var jun = $(this).parent().parent().parent().find("input#jun").prop("checked");
                    var jul = $(this).parent().parent().parent().find("input#jul").prop("checked");
                    var aug = $(this).parent().parent().parent().find("input#aug").prop("checked");
                    var sep = $(this).parent().parent().parent().find("input#sep").prop("checked");
                    var oct = $(this).parent().parent().parent().find("input#oct").prop("checked");
                    var nov = $(this).parent().parent().parent().find("input#nov").prop("checked");
                    var des = $(this).parent().parent().parent().find("input#des").prop("checked");
                    var nama_pegawai = $(this).parent().parent().parent().find('td#nama_pegawai').text();
                    var investasi = $(this).parent().parent().parent().find('input#investasi').val();
                    if (investasi != "") {
                        var investasiparse = parseInt(investasi);    
                    }else{
                        var investasiparse = parseInt(0);
                    }

                    var idpegawai = $(this).parent().find('input#idpegawai').val();
                    var nowinvestasi = $(this).parent().find('input#nowinvestasi').val();
                    var nowinvestasi = parseInt(nowinvestasi);
                    var page = $(this).parent().find('input#page').val();
                    var totalinvest = nowinvestasi + investasiparse;

                    if(investasi == ""){
                        investasi = 0;
                    }

                    //alert('jan : '+jan+' feb : '+feb+' des '+des+' investasi: '+investasi+' idpegawai: '+idpegawai+' page: '+page+ ' nama pegawai : '+nama_pegawai);
                    
                    if (confirm('Apakah Yakin Data Yang Di Inputkan Untuk Pegawai '+nama_pegawai+' Sudah Benar ??')) {
                        
                        $.ajax({
                            url:"control.php",
                            method:"POST",
                            data:{
                                jan:jan,
                                feb:feb,
                                mar:mar,
                                apr:apr,
                                may:may,
                                jun:jun,
                                jul:jul,
                                aug:aug,
                                sep:sep,
                                oct:oct,
                                nov:nov,
                                des:des,
                                investasi:investasi,
                                idpegawai:idpegawai,
                                page:page
                                },
                            dataType:'json', 
                            success:function(data){
                                growlsuccesscustom('Save Data Success !','The data has been saved successfully !');
                               
                            }
                        });

                        if (jan == true) {
                            $(this).parent().parent().parent().find("input#jan").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#jan").attr("disabled" , true);
                        } 
                        
                        if(feb == true){
                            $(this).parent().parent().parent().find("input#feb").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#feb").prop("disabled" , true);
                        } 
                        
                        if(mar == true){
                            $(this).parent().parent().parent().find("input#mar").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#mar").prop("disabled" , true);
                        } 
                        
                        if(apr == true){
                            $(this).parent().parent().parent().find("input#apr").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#apr").prop("disabled" , true);
                        } 
                        
                        if(may == true){
                            $(this).parent().parent().parent().find("input#may").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#may").prop("disabled" , true);
                        } 
                        
                        if(jun == true){
                            $(this).parent().parent().parent().find("input#jun").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#jun").prop("disabled" , true);
                        } 
                        
                        if(jul == true){
                            $(this).parent().parent().parent().find("input#jul").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#jul").prop("disabled" , true);
                        } 
                        
                        if(aug == true){
                            $(this).parent().parent().parent().find("input#aug").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#aug").prop("disabled" , true);
                        } 
                        
                        if(sep == true){
                            $(this).parent().parent().parent().find("input#sep").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#sep").prop("disabled" , true);
                        } 
                        
                        if(oct == true){
                            $(this).parent().parent().parent().find("input#oct").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#oct").prop("disabled" , true);
                        } 
                        
                        if(nov == true){
                            $(this).parent().parent().parent().find("input#nov").prop("checked" , true);
                            $(this).parent().parent().parent().find("input#nov").prop("disabled" , true);
                        } 
                        
                        if(des == true){
                            $(this).parent().parent().parent().find("input#des").prop("checked", true);
                            $(this).parent().parent().parent().find("input#des").prop("disabled", true);
                           
                        }
                        $(this).parent().parent().parent().find('input#investasi').val("");
                        $(this).parent().parent().parent().find("td#inves").text("Rp. "+convertIdr(totalinvest));


                    } else {
                        
                    }
                });

            });
        </script>

        
    </body>
</html>

