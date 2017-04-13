<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php  echo base_url();?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>个人资料</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

    <?php $this->load->view('include/head.php');?>

</head>

<body class="no-skin">

<?php $this->load->view('include/navbar.php');?>

<!-- /section:basics/navbar.layout -->
<div class="main-container" id="main-container">
    <script type="text/javascript">
        try{ace.settings.check('main-container' , 'fixed')}catch(e){}
    </script>

    <?php $this->load->view('include/sidebar.php');?>

    <!-- /section:basics/sidebar -->
    <div class="main-content">
        <div class="main-content-inner">
            <!-- #section:basics/content.breadcrumbs -->

            <div class="breadcrumbs" id="breadcrumbs">
                <script type="text/javascript">
                    try{ace.settings.check('breadcrumbs' , 'fixed')}catch(e){}
                </script>

                <ul class="breadcrumb">
                    <li>
                        <i class="ace-icon fa fa-home home-icon"></i>
                        <a href="<?php echo site_url('index') ?>">主页</a>
                    </li>

                    <li class="active">个人资料</li>
                </ul><!-- /.breadcrumb -->

                <!-- /section:basics/content.searchbox -->
            </div>


            <!-- /section:basics/content.breadcrumbs -->
            <div class="page-content">

                <?php $this->load->view('include/setting.php');?>
                <!-- /section:settings.box -->
                <div class="row">
                    <div class="col-xs-12">
                        <!-- PAGE CONTENT BEGINS -->

                        <div class="hr dotted"></div>

                        <div>
                            <div id="user-profile-1" class="user-profile row">
                                <div class="col-xs-12 col-sm-3 center">
                                    <div>
                                        <!-- #section:pages/profile.picture -->
                                        <span class="profile-picture">
													<img id="avatar" class="editable img-responsive" alt="Alex's Avatar" src="public/lib/ace/assets/avatars/profile-pic.jpg" />
												</span>

                                        <!-- /section:pages/profile.picture -->
                                        <div class="space-4"></div>

                                        <div class="width-80 label label-info label-xlg arrowed-in arrowed-in-right">
                                            <div class="inline position-relative">
                                                <a href="javascript:void(0);" class="user-title-label">
                                                    <i class="ace-icon fa fa-circle light-green"></i>
                                                    &nbsp;
                                                    <span class="white">Alex M. Doe</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <div class="col-xs-12 col-sm-9">

                                    <div class="space-12"></div>

                                    <!-- #section:pages/profile.info -->
                                    <div class="profile-user-info profile-user-info-striped">
                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Username </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="username">alexdoe</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Location </div>

                                            <div class="profile-info-value">
                                                <i class="fa fa-map-marker light-orange bigger-110"></i>
                                                <span class="editable" id="country">Netherlands</span>
                                                <span class="editable" id="city">Amsterdam</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Age </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="age">38</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Joined </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="signup">2010/06/20</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> Last Online </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="login">3 hours ago</span>
                                            </div>
                                        </div>

                                        <div class="profile-info-row">
                                            <div class="profile-info-name"> About Me </div>

                                            <div class="profile-info-value">
                                                <span class="editable" id="about">Editable as WYSIWYG</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- /section:pages/profile.info -->
                                    <div class="space-20"></div>

                                    <div class="hr hr2 hr-double"></div>

                                    <div class="space-6"></div>

                                    <div class="center">
                                        <a href="<?php echo site_url('user/changeprofile') ?>" class="btn btn-sm btn-primary btn-white btn-round">
                                            <i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
                                            <span class="bigger-110">修改个人信息</span>

                                            <i class="icon-on-right ace-icon fa fa-arrow-right"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PAGE CONTENT ENDS -->
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.page-content -->
        </div>
    </div><!-- /.main-content -->

    <?php $this->load->view('include/footer.php');?>

    <a href="#" id="btn-scroll-up" class="btn-scroll-up btn btn-sm btn-inverse">
        <i class="ace-icon fa fa-angle-double-up icon-only bigger-110"></i>
    </a>
</div><!-- /.main-container -->

<?php $this->load->view('include/foot.php');?>
</body>
</html>
