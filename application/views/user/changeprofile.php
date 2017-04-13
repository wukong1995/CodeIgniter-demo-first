<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php  echo base_url();?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta charset="utf-8" />
    <title>修改资料</title>

    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <?php $this->load->view('include/head.php');?>
    <link rel="stylesheet" href="public/lib/ace/assets/css/datepicker.css" />

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
                    <li>
                        <a href="<?php echo site_url('user/profile') ?>">个人资料</a>
                    </li>

                    <li class="active">修改资料</li>
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
                        <div id="user-profile-3" class="user-profile row">
                            <div class="col-sm-12">

                                <form class="form-horizontal">
                                    <div class="widget-box">
                                        <div class="widget-header widget-header-blue widget-header-flat">
                                            <h4 class="widget-title lighter">修改资料</h4>
                                        </div>

                                        <div class="widget-body">
                                            <div class="widget-main">
                                                <!-- #section:plugins/fuelux.wizard -->
                                                <div id="fuelux-wizard-container">
                                                    <div id="edit-basic" class="">
                                                        <h4 class="header blue bolder smaller">General</h4>

                                                        <div class="row">
                                                            <div class="col-xs-12 col-sm-4">
                                                                <label class="ace-file-input ace-file-multiple"><input type="file"><span class="ace-file-container" data-title="Change avatar"><span class="ace-file-name" data-title="No File ..."><i class=" ace-icon ace-icon fa fa-picture-o"></i></span></span><a class="remove" href="#"><i class=" ace-icon fa fa-times"></i></a></label>
                                                            </div>

                                                            <div class="vspace-12-sm"></div>

                                                            <div class="col-xs-12 col-sm-8">
                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-username">Username</label>

                                                                    <div class="col-sm-8">
                                                                        <input class="col-xs-12 col-sm-10" type="text" id="form-field-username" placeholder="Username" value="alexdoe">
                                                                    </div>
                                                                </div>

                                                                <div class="space-4"></div>

                                                                <div class="form-group">
                                                                    <label class="col-sm-4 control-label no-padding-right" for="form-field-first">Name</label>

                                                                    <div class="col-sm-8">
                                                                        <input class="input-small" type="text" id="form-field-first" placeholder="First Name" value="Alex">
                                                                        <input class="input-small" type="text" id="form-field-last" placeholder="Last Name" value="Doe">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <hr>
                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-date">Birth Date</label>

                                                            <div class="col-sm-9">
                                                                <div class="input-medium">
                                                                    <div class="input-group">
                                                                        <input class="input-medium date-picker" id="form-field-date" type="text" data-date-format="yyyy-mm-dd" placeholder="yyyy-mm-dd">
                                                                        <span class="input-group-addon">
																				<i class="ace-icon fa fa-calendar"></i>
																			</span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="space-4"></div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right">Gender</label>

                                                            <div class="col-sm-9">
                                                                <label class="inline">
                                                                    <input name="form-field-radio" type="radio" class="ace">
                                                                    <span class="lbl middle"> Male</span>
                                                                </label>

                                                                &nbsp; &nbsp; &nbsp;
                                                                <label class="inline">
                                                                    <input name="form-field-radio" type="radio" class="ace">
                                                                    <span class="lbl middle"> Female</span>
                                                                </label>
                                                            </div>
                                                        </div>

                                                        <div class="space-4"></div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Comment</label>

                                                            <div class="col-sm-9">
                                                                <textarea id="form-field-comment"></textarea>
                                                            </div>
                                                        </div>

                                                        <div class="space"></div>
                                                        <h4 class="header blue bolder smaller">Contact</h4>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

                                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="email" id="form-field-email" value="alexdoe@gmail.com">
																		<i class="ace-icon fa fa-envelope"></i>
																	</span>
                                                            </div>
                                                        </div>

                                                        <div class="space-4"></div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

                                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input type="url" id="form-field-website" value="http://www.alexdoe.com/">
																		<i class="ace-icon fa fa-globe"></i>
																	</span>
                                                            </div>
                                                        </div>

                                                        <div class="space-4"></div>

                                                        <div class="form-group">
                                                            <label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

                                                            <div class="col-sm-9">
																	<span class="input-icon input-icon-right">
																		<input class="input-medium input-mask-phone" type="text" id="form-field-phone">
																		<i class="ace-icon fa fa-phone fa-flip-horizontal"></i>
																	</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div><!-- /.widget-main -->
                                        </div><!-- /.widget-body -->
                                    </div>

                                    <div class="clearfix form-actions">
                                        <div class="col-md-offset-3 col-md-9">
                                            <button class="btn btn-info" type="button">
                                                <i class="ace-icon fa fa-check bigger-110"></i>
                                                Save
                                            </button>

                                            &nbsp; &nbsp;
                                            <button class="btn" type="reset">
                                                <i class="ace-icon fa fa-undo bigger-110"></i>
                                                Reset
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.span -->
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
<script src="public/lib/ace/assets/js/date-time/bootstrap-datepicker.js"></script>
<script type="text/javascript">
    $(function () {
        $('.date-picker').datepicker();
    });
</script>
</body>
</html>
