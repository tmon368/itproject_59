
	<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script> src="js/bootstrap.js"</script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="https://code.jquery.com/jquery-3.3.1.js">    </script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"> </script>
    
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/dataTables.buttons.min.js"> </script>
    <script src="https://cdn.datatables.net/buttons/1.5.6/js/buttons.print.min.js"> </script>
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">-->
   <!--<link rel="stylesheet" href="css/custom.css">-->
   <link ref="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
   <link ref="https://cdn.datatables.net/buttons/1.5.6/css/buttons.dataTables.min.css">
</head>
<body>
    <div class="container">
    <div class="test">
                    <center/> รายงานสถิตินักศึกษาที่กระทำความผิดแยกตามหมวดความผิด <br>
        เดือน พฤษภาคม 2562
    </div>
    
</td>
  </tr>
  </h1>
  <!--
  <div class="card-body">
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
        <table id="tblName"  class="table table-hover" class="table table-striped table-bordered" style="width:100%">

            <thead>
             <tr>
                <th colspan="9" style="background-color:LightGray;">สำนักวิชาสารสนเทศศาสตร์</th></h1>
                </tr>
                <tr>
                <th colspan="9" style="background-color:LightGray;">หมวด 6 ความผิดเกี่ยวกับการเสพสุราหรือของมึนเมา</th></h1>
                </tr>
                <tr>
                <th colspan="9"  style="background-color:LightGray;">601 : นำสุรา เครื่องดื่มที่มีแอลกอฮอล์ หรือของมึนเมา เข้ามาในพื้นที่มหาวิทยาลัย</th>
                </tr>
                
                <tr>
                    <th><center>ลำดับ</center></th>
                    <th><center>รหัสนักศึกษา</center></th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th><align=right>คะแนนที่เหลือ</align=right></th>
                    <th><center>คะแนนที่หัก</center></th>
                    <th><center>จำนวนครั้ง</center></th>
                    <th><center>สำนักวิชา</center></th>
                    <th><center>หอ</center></th>
                </tr>
            </thead>
         <tbody id="tdata">
         </tbody>
           
           <thead>
                   <div class="test">
                   <th colspan="9" style="text-align:right">รวม6รายการ</th></h1>
                   </div>
                       
          
               
                   
                
        </table>       
    </div>   
    </div> 
    </div> 
-->

<div class="card-body">
                <div class="bootstrap-data-table-panel">
                    <div class="table-responsive">
                        <table id="style_table" class="table table-hover display">
                            <thead>
                                <tr>
                                <th><center>ลำดับ</center></th>
                    <th><center>รหัสนักศึกษา</center></th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th><align=right>คะแนนที่เหลือ</align=right></th>
                    <th><center>คะแนนที่หัก</center></th>
                    <th><center>จำนวนครั้ง</center></th>
                    <th><center>สำนักวิชา</center></th>
                    <th><center>หอ</center></th>
                                </tr>
                            </thead>
                            <tbody id="showdata">
                                <tr>
                                    <td width="10px"></td>
                                    <td></td>
                                    <td width="10px">
      
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    


<script> 
$(document).ready(function(){
	 $('#tblName').DataTable();
	showAll();

    $('#style_table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'print'
        ]
    } );
    function showAll1() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Report_test/showAll',
            async: false,
            dataType: 'json',
            success: function(data) {
                var point=100;
                var html = '';
                var n=1;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +

                    	'<td> <center>' + n + ' </center></td>' +
                        '<td> <center>' + data[i].S_ID + '</center></td>' +
                        '<td> ' + data[i].std_fname +'</td>' +
                        '<td> ' + data[i].std_lname + '</td>' +
                        '<td  align="right">' + data[i].behavior_score + '</right></td>' +
                        '<td align="right">' + data[i].point + '</right></td>' +
                        '<td align="right">' + data[i].num_off + '</td>' +
                        '<td> <left>' + data[i].cur_name + '</left></td>' +
                        '<td> <left>' + data[i].dname + '</left></td>' +
                        
                        
                       
                        '</tr>';
                    n+=1;
                }
                $('#tdata').empty();
                $('#tdata').html(html);
                
                //$('#dataall').html(num-1);
            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }

    function showAll2() {
        $.ajax({
            type: 'ajax',
            url: '<?php echo base_url() ?>index.php/Report_test/showAll2',
            async: false,
            dataType: 'json',
            success: function(data) {
                var point=100;
                var html = '';
                var n=1;
                for (i = 0; i < data.length; i++) {
                    html += '<tr>' +
                    '<td> <center>' + n + ' </center></td>' +
                    '<td> <center>' + data[i].S_ID + '</center></td>' +
                    '<td> ' + data[i].std_fname +'</td>' +
                    '<td> ' + data[i].std_lname + '</td>' +
                    '<td  align="right">' + data[i].behavior_score + '</right></td>' +
                    '<td align="right">' + data[i].point + '</right></td>' +
                    '<td align="right">' + data[i].num_off + '</td>' +
                    '<td> <left>' + data[i].cur_name + '</left></td>' +
                    '<td> <left>' + data[i].dname + '</left></td>' +
                        
                       
                        '</tr>';
                    n+=1;
                }
                $('#tdata2').empty();
                $('#tdata2').html(html);
              //  $('#dataall').html(num-1);
            },
            error: function() {
                alert('ไม่มีข้อมูล');
            }
        });
    }  


function showAll3() {
    $.ajax({
        type: 'ajax',
        url: '<?php echo base_url() ?>index.php/Report_test/showAll3',
        async: false,
        dataType: 'json',
        success: function(data) {
            var point=100;
            var html = '';
            var n=1;
            for (i = 0; i < data.length; i++) {
                html += '<tr>' +

                '<td> <center>' + n + ' </center></td>' +
                '<td> <center>' + data[i].S_ID + '</center></td>' +
                '<td> <left>' + data[i].std_fname +'</left></td>' +
                '<td> <left>' + data[i].std_lname + '</left></td>' +
                '<td> <right>' + data[i].behavior_score + '</right></td>' +
                '<td> <right>' + data[i].point + '</right></td>' +
                '<td>' + data[i].num_off + '</td>' +
                '<td> <left>' + data[i].cur_name + '</left></td>' +
                '<td> <left>' + data[i].dname + '</left></td>' +
                    
                   
                    '</tr>';
                n+=1;
            }
            $('#tdata3').empty();
            $('#tdata3').html(html);
            $('#dataall').html(num-1);
        },
        error: function() {
            alert('ไม่มีข้อมูล');
        }
    });
}  








function showAll() {
                $.ajax({
                    type: 'ajax',
                    url: '<?php echo base_url() ?>index.php/Report_test/showAll',
                    async: false,
                    dataType: 'json',
                    success: function(data) {
                        var point=100;
                var html = '';
                var n=1;
                for (i = 0; i < data.length; i++) {
                            html += '<tr>' +

                            '<td> <center>' + n + ' </center></td>' +
                        '<td> <center>' + data[i].S_ID + '</center></td>' +
                        '<td> ' + data[i].std_fname +'</td>' +
                        '<td> ' + data[i].std_lname + '</td>' +
                        '<td  align="right">' + data[i].behavior_score + '</right></td>' +
                        '<td align="right">' + data[i].point + '</right></td>' +
                        '<td align="right">' + data[i].num_off + '</td>' +
                        '<td> <left>' + data[i].cur_name + '</left></td>' +
                        '<td> <left>' + data[i].dname + '</left></td>' +
                                '</tr>';
                                n+=1;
                        }
                        $('#showdata').html(html);
                    },
                    error: function() {
                        alert('ไม่มีข้อมูล');
                    }
                });
            }













});




   
</script>
</html>
 
</body>

