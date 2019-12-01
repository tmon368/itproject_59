Hii  headofstudent_affairs(หัวหน้าฝ่ายกิจการนักศึกษา)  ครับผม
<script>
$(document).ready(function() {
	//var data='';
	getDashboard();

	function getDashboard() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/headofstudent_affairs_dashboard/getDashboard',
            async: false,
            dataType: 'json',
            success: function(data) {
                console.log(data)
             
            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }
});
    </script>