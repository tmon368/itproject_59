<div class="bar">

    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
            <a href="<?php echo site_url("Security_guard_dashboard") ?>">
                <li class="menu-icon mdi mdi-television">หน้าแรก</li>
            </a>
            <a href="#">
                <li>แจ้งเหตุกระทำความผิด</li>
            </a>

            <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>Menu1</li>
            </a>

            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="submenu">
                        <a class="nav-link" href="#">submenu1</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">submenu2</a>
                    </li>
                </ul>
            </div>

        </ul>
    </div>

    <div class="logobrand">
        <a class="" href="<?php echo site_url("Admin_dashboard") ?>">
            <img src="<?php echo base_url('re/images/logo_sys.png'); ?>" alt="logo" width="100" />
        </a>
    </div>

    <div class="user">
        <li class="nav-item dropdown d-none d-xl-inline-block">
            <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                <span class="profile-text">Hello, Richard V.Welsh !</span>
                <img class="img-xs rounded-circle" src="<?php echo base_url('re/images/man.png'); ?>" alt="Profile image">
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                <a class="dropdown-item p-0">
                    <div class="d-flex border-bottom">
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-bookmark-plus-outline mr-0 text-gray"></i>
                        </div>
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center border-left border-right">
                            <i class="mdi mdi-account-outline mr-0 text-gray"></i>
                        </div>
                        <div class="py-3 px-4 d-flex align-items-center justify-content-center">
                            <i class="mdi mdi-alarm-check mr-0 text-gray"></i>
                        </div>
                    </div>
                </a>
                <a class="dropdown-item mt-2">
                    Manage Accounts
                </a>
                <a class="dropdown-item">
                    Change Password
                </a>
                <a class="dropdown-item">
                    Check Inbox
                </a>
                <a class="dropdown-item">
                    ออกจากระบบ
                </a>
            </div>
        </li>
    </div>

</div>
<div class="container-fluid page-body-wrapper">

    <div class="main-panel">
        <div class="content-wrapper">