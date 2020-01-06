<div class="bar">

    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
            <a href="<?php echo site_url("Admin_dashboard") ?>">
                <li class="menu-icon mdi mdi-television">หน้าแรก</li>
            </a>

            <a href="<?php echo site_url("#") ?>">
                <li class="">ข้อมูลส่วนตัว</li>
            </a>

            <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>แจ้งเหตุกระทำความผิด</li>
            </a>

            <a href="<?php echo site_url("#") ?>">
                <li class="">รายงานตัวผู้กระทำความผิด</li>
            </a>

            <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>การบำเพ็ญประโยชน์</li>
            </a>



            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("status") ?>">สถานะนักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Usertype") ?>">ประเภทผู้ใช้งาน</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">นักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">บุคลากร</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หมวดความผิด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ฐานความผิด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ประเภทหอพัก</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หอพัก</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ประเภทยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">วันหยุด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">สถานที่</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หลักสูตร</a>
                    </li>
                </ul>
            </div>

            

            

        </ul>
    </div>

   