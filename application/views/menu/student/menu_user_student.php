<div class="bar">

    <div id="menuToggle">
        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
            <a href="<?php echo site_url("Student_dashboard") ?>">
                <li class="menu-icon mdi mdi-television">หน้าแรก</li>
            </a>

            <a href="<?php echo site_url("Std_info") ?>">
                <li class="">ข้อมูลส่วนตัว</li>
            </a>

            <a href="<?php echo site_url("Notifyoffense") ?>">
                <li class="">แจ้งเหตุกระทำความผิด</li>
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
                        <a class="nav-link" href="<?php echo site_url("Volunteer_regis") ?>">ลงทะเบียนการบำเพ็ญประโยชน์</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("VolunteerAc") ?>">เสนอการบำเพ็ญประโยชน์</a>
                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Volunteer_history") ?>">ประวัติการบำเพ็ญประโยชน์</a>
                    </li>
                    
                </ul>
            </div>

            <!-- <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>ออกรายงาน</li>
            </a> -->

            

        </ul>
    </div>

   