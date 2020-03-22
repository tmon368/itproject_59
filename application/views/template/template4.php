<div class="logobrand">
    <a class="" href="<?php echo site_url("Admin_dashboard") ?>">
        <img src="<?php echo base_url('re/images/logo_sys.png'); ?>" alt="logo" width="120" />
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

            <a class="dropdown-item">
                คู่มือการใช้งาน
            </a>
            <a class="dropdown-item" id="logout">
                ออกจากระบบ

            </a>
        </div>
    </li>
</div>

</div>


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">

            <div class="modal-body">

                <div class="showmsg">
                    ต้องการออกจากระบบ ?
                </div>
                <div>
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal" style="width:100%;margin-bottom: 0.5rem;font-family: 'prompt',sans-serif;">ยกเลิก</button>
                    <button type="button" class="btn btn-inverse-danger btn-fw" id="logoutsession" style="width:100%;font-family: 'prompt',sans-serif;">ออกจากระบบ</button>
                </div>
            </div>

        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        selectstudentname();
    });



    $("#logout").click(function() {
        selectstudentname();
        $("#exampleModal").modal();
    });

    $('#logoutsession').click(function() {
        $(location).attr('href', '<?php echo base_url() ?>index.php/Loginuser/logout');
    });


    function selectstudentname() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Admin_dashboard/selectstudentname',
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#fullnamestudent').html(data[0].person_fname + ' ' + data[0].person_lname);
            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }
</script>



<div class="container-fluid page-body-wrapper">

    <div class="main-panel">
        <div class="content-wrapper">