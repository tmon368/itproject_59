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
            <a href="<?php echo site_url("Notifyoffense_security") ?>">
                <li>แจ้งเหตุกระทำความผิด</li>
            </a>

            <a class="" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
                <li>Menu1</li>
            </a>

            <div class="collapse" id="ui-basic">
                <ul class="nav flex-column sub-menu">
                    <li class="submenu">
                        <a class="nav-link" href="<?php echo site_url("Notifyoffense_security") ?>">เสนอบำเพ็ญประโยชน์
</a>                    </li>
                    <li class="submenu">
                        <a class="nav-link" href="#">submenu2</a>
                    </li>
                </ul>
            </div>

        </ul>
    </div>

   