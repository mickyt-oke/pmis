<?php include 'layouts/session.php'; ?>
<?php include 'layouts/head-main.php'; ?>

<head>

    <title>Outgoing Call - HRMS admin template</title>

    <?php include 'layouts/title-meta.php'; ?>

    <?php include 'layouts/head-css.php'; ?>

</head>
<body>
  <div class="main-wrapper">
<?php include 'layouts/topbar.php'; ?>
<?php include 'layouts/chat_sidebar.php'; ?>
<?php include 'layouts/two-col-sidebar.php'; ?>

  
<!-- Page Wrapper -->
            <div class="page-wrapper">
            
                <!-- Outgoing Call -->
                <div class="call-box outgoing-box">
                    <div class="call-wrapper">
                        <div class="call-inner">
                            <div class="call-user">
                                <img alt="" src="assets/img/profiles/avatar-02.jpg" class="call-avatar">
                                <h4>John Doe</h4>
                                <span>Connecting...</span>
                            </div>                          
                            <div class="call-items">
                                <a href="javascript:void(0);" class="btn call-item"><i class="material-icons">mic</i></a>
                                <a href="javascript:void(0);" class="btn call-item"><i class="material-icons">videocam</i></a>
                                <a href="apps-chat" class="btn call-item call-end"><i class="material-icons vcend">call_end</i></a>
                                <a href="javascript:void(0);" class="btn call-item"><i class="material-icons">person_add</i></a>
                                <a href="javascript:void(0);" class="btn call-item"><i class="material-icons">volume_up</i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Outgoing Call -->
                
            </div>
            <!-- /Page Wrapper -->


</div>
<!-- end main wrapper-->

<?php include 'layouts/customizer.php'; ?>
<!-- JAVASCRIPT -->
<?php include 'layouts/vendor-scripts.php'; ?>



</body>

</html>