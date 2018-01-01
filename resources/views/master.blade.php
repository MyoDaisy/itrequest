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
    <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/css/bootstrap-datetimepicker.min.css'>
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
                        <a  class="dropdown-item" href="#">
                            <span class="fa fa-sign-out ks-icon" aria-hidden="true"></span>
                            <span><a href="{{ route('getLogout') }}">Logout</a></span>
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
    @if(isset($success))
        <center><h5 style="color: red">{{$sucess}}</h5></center>
    @endif

</div>
<!-- END NAVBAR HORIZONTAL -->




<div class="ks-container">

    <div class="ks-column ks-page">
        <div class="ks-header">
            <section class="ks-title">
                <a href="{{ route('addTicket') }}">
                    <button class="btn btn-primary">
                        <span class="fa fa-plus ks-icon"></span>
                        <span class="ks-text">Add Request</span>
                    </button>
                </a>
                <button class="btn btn-primary-outline ks-light ks-mail-navigation-block-toggle" data-block-toggle=".ks-mail > .ks-navigation">Menu</button>
            </section>
        </div>
        <div class="ks-content">
            <div class="ks-body ks-mail">

                <!-- Menu -->
                <div class="ks-navigation ks-browse ks-scrollable" data-auto-height>
                    <div class="ks-wrapper">
                        <div class="ks-separator" data-toggle="collapse" data-target="#my-request">
                            <b style="color: red">Công việc tôi yêu cầu</b>
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul id="my-request" class="ks-menu collapse">
                            <li>
                                <a href="{{ route('myAllRequest') }}" class="ks-menu-item ks-active">
                                    <span class="ks-text">All</span>
                                    <span class="ks-badge badge badge-pill badge-pink">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('myNewRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="ks-badge badge badge-pill badge-default-outline">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('myInprogressRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('myResolvedRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Resolved</span>
                                    <span class="ks-badge badge badge-pill badge-pink">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('myOutOfDateRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                </a>
                            </li>
                        </ul>

                        <div class="ks-separator" data-toggle="collapse" data-target="#ralate-work">
                            <b style="color: red">Công việc liên quan</b>
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul id="ralate-work" class="ks-menu collapse">
                            <li>
                                <a href="{{ route('relateAllRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">All</span>
                                    <span class="badge ks-circle badge-danger"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('relateNewRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="badge ks-circle badge-info"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('relateInprogressRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('relateResolvedRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Resolved</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('relateOutOfDateRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                    <span class="badge ks-circle badge-warning"></span>
                                </a>
                            </li>
                        </ul>

                        <div class="ks-separator"  data-toggle="collapse" data-target="#assign-work">
                            <b style="color: red">Việc tôi được giao</b>
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul id="assign-work" class="ks-menu collapse">
                            <li>
                                <a href="{{ route('assignedAllRequest') }}" class="ks-menu-item ks-active">
                                    <span class="ks-text">All</span>
                                    <span class="ks-badge badge badge-pill badge-pink">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('assignedNewRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="ks-badge badge badge-pill badge-default-outline">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('assignedInprogressRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('assignedAllRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">FeedBack</span>
                                    <span class="ks-badge badge badge-pill badge-pink">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('assignedOutOfDateRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                </a>
                            </li>
                        </ul>

                        <div class="ks-separator"  data-toggle="collapse" data-target="#team-work">
                            <b style="color: red">Công việc của team</b>
                            <a href="#" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>
                        <ul id="team-work" class="ks-menu collapse">
                            <li>
                                <a href="{{ route('teamAllRequest') }}" class="ks-menu-item ks-active">
                                    <span class="ks-text">All</span>
                                    <span class="ks-badge badge badge-pill badge-pink">15</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teamNewRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">New</span>
                                    <span class="ks-badge badge badge-pill badge-default-outline">2</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teamInprogressRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Inprogress</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teamAllRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">FeedBack</span>
                                    <span class="ks-badge badge badge-pill badge-pink">1</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teamOutOfDateRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Out Of Date</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('teamClosedRequest') }}" class="ks-menu-item">
                                    <span class="ks-text">Closed</span>
                                </a>
                            </li>

                        </ul>

                        <div class="ks-separator">
                            <b style="color: red">Nhân viên</b>
                            <a href="{{route('employee')}}" class="ks-add">
                            <span class="ks-control">
                                <span class="ks-icon">+</span>
                            </span>
                            </a>
                        </div>

                    </div>
                </div>

                <!-- End menu -->

                <div class="ks-emails ks-compact">
                    @section('content')
                    @show
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
<script src='http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/3.1.3/js/bootstrap-datetimepicker.min.js'></script>
<!-- END PAGE LEVEL PLUGINS -->

<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="public/js/scripts/common.min.js"></script>
<!-- END THEME LAYOUT SCRIPTS -->

<script>
    CKEDITOR.replace('content');
</script>
<script type="text/javascript">
     $(function () {
   var bindDatePicker = function() {
        $(".date").datetimepicker({
        format:'YYYY-MM-DD',
            icons: {
                time: "fa fa-clock-o",
                date: "fa fa-calendar",
                up: "fa fa-arrow-up",
                down: "fa fa-arrow-down"
            }
        }).find('input:first').on("blur",function () {
            // check if the date is correct. We can accept dd-mm-yyyy and yyyy-mm-dd.
            // update the format if it's yyyy-mm-dd
            var date = parseDate($(this).val());

            if (! isValidDate(date)) {
                //create date based on momentjs (we have that)
                date = moment().format('YYYY-MM-DD');
            }

            $(this).val(date);
        });
    }
   
   var isValidDate = function(value, format) {
        format = format || false;
        // lets parse the date to the best of our knowledge
        if (format) {
            value = parseDate(value);
        }

        var timestamp = Date.parse(value);

        return isNaN(timestamp) == false;
   }
   
   var parseDate = function(value) {
        var m = value.match(/^(\d{1,2})(\/|-)?(\d{1,2})(\/|-)?(\d{4})$/);
        if (m)
            value = m[5] + '-' + ("00" + m[3]).slice(-2) + '-' + ("00" + m[1]).slice(-2);

        return value;
   }
   
   bindDatePicker();
 });
</script>

<div class="ks-mobile-overlay"></div>


</div>
<!-- END SETTINGS BLOCK -->
</body>
</html>