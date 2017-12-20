<!DOCTYPE html>
<html lang="en">

<!-- BEGIN HEAD -->
<head>
    <meta charset="UTF-8">
    <title></title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link rel="stylesheet" type="text/css" href="public/css/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/fonts/open-sans/styles.css">
    <link rel="stylesheet" type="text/css" href="public/css/tether/css/tether.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/jscrollpane/jquery.jscrollpane.css">
    <link rel="stylesheet" type="text/css" href="public/css/flag-icon-css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="public/css/styles/common.min.css">
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" type="text/css" href="public/css/styles/themes/primary.min.css">
    <!-- END THEME STYLES -->

<link rel="stylesheet" type="text/css" href="public/css/styles/apps/mail.min.css"> <!-- Customization -->
</head>
<!-- END HEAD -->

<body class="ks-navbar-fixed ks-sidebar-empty ks-sidebar-fixed ks-theme-primary ks-page-loading">



    <!-- BEGIN HEADER -->
<nav class="navbar ks-navbar">
    <!-- BEGIN HEADER INNER -->
    <!-- BEGIN LOGO -->
    <div href="index.html" class="navbar-brand">
        <!-- BEGIN RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-sidebar-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <a href="#" class="ks-sidebar-mobile-toggle"><i class="fa fa-bars" aria-hidden="true"></i></a>
        <!-- END RESPONSIVE SIDEBAR TOGGLER -->
        <a href="#" class="ks-logo">Request IT</a>

    </div>
    <!-- END LOGO -->

    <!-- BEGIN MENUS -->
    <div class="ks-wrapper">
        <nav class="nav navbar-nav">
            <!-- BEGIN NAVBAR MENU -->
            <div class="ks-navbar-menu">
                <form class="ks-search-form">
                    <a class="ks-search-open" href="#">
                        <span class="fa fa-search"></span>
                    </a>
                    <div class="ks-wrapper">
                        <div class="input-icon icon-right icon icon-lg icon-color-primary">
                            <input id="input-group-icon-text" type="text" class="form-control" placeholder="Search...">
                            <span class="icon-addon">
                                <span class="fa fa-search ks-icon"></span>
                            </span>
                        </div>
                        <a class="ks-search-close" href="#">
                            <span class="fa fa-close"></span>
                        </a>
                    </div>
                </form>
                <a class="nav-item nav-link" href="#">Dashboard</a>
                <div class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu ks-info" aria-labelledby="Preview">
                        <a class="dropdown-item ks-active" href="#">Dropdown Link 1</a>
                        <a class="dropdown-item" href="#">Dropdown Link 2</a>
                        <a class="dropdown-item" href="#">Dropdown Link 3</a>
                        <div class="dropdown-item dropdown">
                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                Dropdown
                            </a>
                            <div class="dropdown-menu" aria-labelledby="Preview">
                                <a class="dropdown-item" href="#">Dropdown Link 1</a>
                                <a class="dropdown-item" href="#">Dropdown Link 2</a>
                                <a class="dropdown-item" href="#">Dropdown Link 3</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END NAVBAR MENU -->

            <!-- BEGIN NAVBAR ACTIONS -->
            <div class="ks-navbar-actions">
                <!-- BEGIN NAVBAR MESSAGES -->
                <div class="nav-item dropdown ks-messages">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-envelope ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">3</span>
                        </span>
                        <span class="ks-text">Messages</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <section class="ks-tabs-actions">
                            <a href="#"><i class="fa fa-plus ks-icon"></i></a>
                            <a href="#"><i class="fa fa-search ks-icon"></i></a>
                        </section>
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#ks-navbar-messages-inbox" role="tab">Inbox</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-sent" role="tab">Sent</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#ks-navbar-messages-archive" role="tab">Archive</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-messages-tab active" id="ks-navbar-messages-inbox" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-message">
                                        <div class="ks-avatar ks-online">   
                                            <img src="public/image/avatar.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter</div>
                                            <div class="ks-text">In golf, Danny Willett (pictured) wins the M...</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    
                                </div>
                                <div class="ks-view-all">
                                    <a href="#">View all</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-sent" role="tabpanel">
                                There are no messages.
                            </div>
                            <div class="tab-pane ks-empty" id="ks-navbar-messages-archive" role="tabpanel">
                                There are no messages.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR MESSAGES -->

                <!-- BEGIN NAVBAR NOTIFICATIONS -->
                <div class="nav-item dropdown ks-notifications">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="fa fa-bell ks-icon" aria-hidden="true">
                            <span class="badge badge-pill badge-info">7</span>
                        </span>
                        <span class="ks-text">Notifications</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <ul class="nav nav-tabs ks-nav-tabs ks-info" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" href="#" data-toggle="tab" data-target="#navbar-notifications-all" role="tab">All</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-activity" role="tab">Activity</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#" data-toggle="tab" data-target="#navbar-notifications-comments" role="tab">Comments</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane ks-notifications-tab active" id="navbar-notifications-all" role="tabpanel">
                                <div class="ks-wrapper ks-scrollable">
                                    <a href="#" class="ks-notification">
                                        <div class="ks-avatar">
                                            <img src="public/image/avatar.jpg" width="36" height="36">
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">Emily Carter <span class="ks-description">has uploaded 1 file</span></div>
                                            <div class="ks-text"><span class="fa fa-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-default">
                                                <span class="fa fa-briefcase ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">New project created</div>
                                            <div class="ks-text">Dashboard UI</div>
                                            <div class="ks-datetime">1 minute ago</div>
                                        </div>
                                    </a>
                                    <a href="#" class="ks-notification">
                                        <div class="ks-action">
                                            <span class="ks-error">
                                                <span class="fa fa-times-circle ks-icon"></span>
                                            </span>
                                        </div>
                                        <div class="ks-info">
                                            <div class="ks-user-name">File upload error</div>
                                            <div class="ks-text"><span class="fa fa-file-text-o ks-icon"></span> logo vector doc</div>
                                            <div class="ks-datetime">10 minutes ago</div>
                                        </div>
                                    </a>
                                </div>

                                <div class="ks-view-all">
                                    <a href="#">Show more</a>
                                </div>
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-activity" role="tabpanel">
                                There are no activities.
                            </div>
                            <div class="tab-pane ks-empty" id="navbar-notifications-comments" role="tabpanel">
                                There are no comments.
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END NAVBAR NOTIFICATIONS -->

                <!-- BEGIN NAVBAR USER -->
                <div class="nav-item dropdown ks-user">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <span class="ks-avatar">
                            <img src="public/image/avatar.jpg" width="36" height="36">
                        </span>
                        <span class="ks-info">
                            <span class="ks-name">Robert Dean</span>
                            <span class="ks-description">Premium User</span>
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="Preview">
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-user-circle-o ks-icon"></span>
                            <span>Profile</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-wrench ks-icon" aria-hidden="true"></span>
                            <span>Settings</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-question-circle ks-icon" aria-hidden="true"></span>
                            <span>Help</span>
                        </a>
                        <a class="dropdown-item" href="#">
                            <span class="fa fa-sign-out ks-icon" aria-hidden="true"></span>
                            <span>Logout</span>
                        </a>
                    </div>
                </div>
                <!-- END NAVBAR USER -->
            </div>
            <!-- END NAVBAR ACTIONS -->
        </nav>

        <!-- BEGIN NAVBAR ACTIONS TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-actions-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="fa fa-ellipsis-h ks-icon ks-open"></span>
                <span class="fa fa-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR ACTIONS TOGGLER -->

        <!-- BEGIN NAVBAR MENU TOGGLER -->
        <nav class="nav navbar-nav ks-navbar-menu-toggle">
            <a class="nav-item nav-link" href="#">
                <span class="fa fa-th ks-icon ks-open"></span>
                <span class="fa fa-close ks-icon ks-close"></span>
            </a>
        </nav>
        <!-- END NAVBAR MENU TOGGLER -->
    </div>
    <!-- END MENUS -->
    <!-- END HEADER INNER -->
</nav>
<!-- END HEADER -->

<!-- BEGIN NAVBAR HORIZONTAL -->
<div class="ks-navbar-horizontal ks-info">
 
</div>
<!-- END NAVBAR HORIZONTAL -->




<div class="ks-container">

    <div class="ks-column ks-page">
        <div class="ks-header">
            <section class="ks-title">
                <button class="btn btn-primary">
                    <span class="fa fa-plus ks-icon"></span>
                    <span class="ks-text">Add Request</span>
                </button>
                <button class="btn btn-primary-outline ks-light ks-mail-navigation-block-toggle" data-block-toggle=".ks-mail > .ks-navigation">Menu</button>
            </section>
        </div>
        <div class="ks-content">
            <div class="ks-body ks-mail">

                <!-- Menu -->
                <div class="ks-navigation ks-browse ks-scrollable" data-auto-height>
                    <div class="ks-wrapper">
                        <div class="ks-separator">
                            Công việc tôi yêu cầu
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul class="ks-menu">
                            <li>
                                <a href="#" class="ks-menu-item ks-active">
                                    <span class="ks-text">All</span>
                                    <span class="ks-badge badge badge-pill badge-pink">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="ks-badge badge badge-pill badge-default-outline">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Resolved</span>
                                    <span class="ks-badge badge badge-pill badge-pink">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                </a>
                            </li>
                        </ul>

                        <div class="ks-separator">
                            Công việc liên quan
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul class="ks-menu">
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">All</span>
                                    <span class="badge ks-circle badge-danger"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="badge ks-circle badge-info"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Resolved</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="ks-separator">
                            Việc tôi đươc giao
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul class="ks-menu">
                            <li>
                                <a href="#" class="ks-menu-item ks-active">
                                    <span class="ks-text">All</span>
                                    <span class="ks-badge badge badge-pill badge-pink">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="ks-badge badge badge-pill badge-default-outline">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">FeedBack</span>
                                    <span class="ks-badge badge badge-pill badge-pink">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>

                <!-- End menu -->

                <div class="ks-emails ks-compact">
                    <div class="ks-header">
                        <div class="ks-search">
                            <div class="input-icon icon-right icon icon-lg">
                                <h3>Add Request</h3>
                            </div>
                        </div>
                                                     
                    </div>
                    <div class="ks-body ks-scrollable" data-auto-height>
                        


                        <div class="row">
                        <div class="col-lg-12 ks-panels-column-section">
                            <div class="card">
                                <div class="card-block">
                                    <form>
                                        <div class="form-group row">
                                            <label for="default-input" class="col-sm-2 form-control-label">Name of work</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="default-input" placeholder="Default input">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Priority level</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option>Select 1</option>
                                                        <option>Select 2</option>
                                                    </select>
                                                </div>
                                                <label for="default-input" class="col-sm-1 form-control-label">Deadline</label>
                                                <div class="input-group date col-sm-4" id="datetimepicker">
                                                    <input type="text" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                                    </span>
                                                </div>                                       
                                        </div>
                                        <div class="form-group row">
                                                <label for="default-input" class="col-sm-2 form-control-label">Team</label>
                                                <div class="col-sm-4">
                                                    <select class="form-control">
                                                        <option>Select 1</option>
                                                        <option>Select 2</option>
                                                    </select>
                                                </div>
                                                <label for="default-input" class="col-sm-1 form-control-label">Involve</label>
                                                <div class="col-sm-4">
                                                    <input type="text" class="form-control" id="default-input">
                                                </div>                                         
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">Content</label>
                                            <div class="col-sm-9">
                                                <textarea id="content" class="form-control" placeholder="Textare"></textarea>
                                            </div>
                                        </div>                                        
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label">File Input</label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary ks-btn-file">
                                                    <span class="fa fa-cloud-upload ks-icon"></span>
                                                    <span class="ks-text">Choose file</span>
                                                    <input type="file">
                                                </button>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="default-input-rounded" class="col-sm-2 form-control-label"></label>
                                            <div class="col-sm-9">
                                                <button class="btn btn-primary ks-rounded">Submit</button>
                                                <button class="btn btn-danger ks-rounded">Cancel</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                  </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- BEGIN PAGE LEVEL PLUGINS -->
<script src="public/js/jquery/jquery.min.js"></script>
<script src="public/js/responsejs/response.min.js"></script>
<script src="public/js/loading-overlay/loadingoverlay.min.js"></script>
<script src="public/js/tether/tether.min.js"></script>
<script src="public/js/bootstrap/bootstrap.min.js"></script>
<script src="public/js/jscrollpane/jquery.jscrollpane.min.js"></script>
<script src="public/js/jscrollpane/jquery.mousewheel.js"></script>
<script src="public/js/flexibility/flexibility.js"></script>
<script src="public/js/ckeditor/ckeditor.js"></script>
<script src="public/js/bootstrap/bootstrap.min.js"></script>
<script src="public/js/bootstrap/bootstrap-datetimepicker.js"></script>

<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="public/js/scripts/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->
<script>
    CKEDITOR.replace('content');
</script>
<script type="text/javascript">
            $(document).ready(function () {
                $("#datetimepicker").datetimepicker();
            });
        </script>

<div class="ks-mobile-overlay"></div>


</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>