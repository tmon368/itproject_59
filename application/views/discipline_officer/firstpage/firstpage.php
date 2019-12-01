Discipline_officer ครับผม
<script>
$(document).ready(function() {
	//var data='';
	selectgetDashboard();

	function selectgetDashboard() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Discipline_officer_dashboard/getDashboard',
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