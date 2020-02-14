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

            <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>การจัดการข้อมูลพื้นฐาน</li>
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
                        <a class="nav-link" href="<?php echo site_url("student") ?>">นักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("personnel") ?>">บุคลากร</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Offensecate") ?>">หมวดความผิด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Offense") ?>">ฐานความผิด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Dormtype") ?>">ประเภทหอพัก</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Dormitory") ?>">หอพัก</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ประเภทยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("vehicles") ?>">ยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("holiday1/edit") ?>">วันหยุด</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("") ?>">สถานที่</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("curriculum") ?>">หลักสูตร</a>
                    </li>
                </ul>
            </div>

            <a class="" data-toggle="collapse" href="#ui-basic2" aria-expanded="false" aria-controls="ui-basic">
                <li>การนำเข้าข้อมูล</li>
            </a>

            <div class="collapse" id="ui-basic2">
                <ul class="nav flex-column sub-menu">
                    <li class="submenu">
                        <a class="nav-link" href="#">นักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">สถานะนักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">บุคลากร</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หน่วยงาน</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หลักสูตร</a>
                    </li>

                </ul>
            </div>

            <a class="" data-toggle="collapse" href="#ui-basic3" aria-expanded="false" aria-controls="ui-basic">
                <li>อัพเดตสถานะการนำเข้าข้อมูล</li>
            </a>
            <div class="collapse" id="ui-basic3">
                <ul class="nav flex-column sub-menu">
                    <li class="submenu">
                        <a class="nav-link" href="#">นักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">สถานะนักศึกษา</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">บุคลากร</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">ยานพาหนะ</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หน่วยงาน</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">หลักสูตร</a>
                    </li>

                </ul>
            </div>


            <a href="<?php echo site_url("Notifyoffense") ?>">
                <li class="menu-icon mdi">การแจ้งเหตุกระทำความผิด</li>
            </a>



        </ul>
    </div>