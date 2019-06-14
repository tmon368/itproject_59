<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_data extends CI_Controller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model('import_data_model');
        $this->load->library('Classes/PHPExcel');
    }

	public function index()
	{
		//List ข้อมูลมาแสดงในหน้าจอ
		$this->load->view('template/template1');
		$this->load->view('template/template2');
		$this->load->view('template/template3');
		$this->load->view('basicdata/importdata/page_import_data');
		$this->load->view('template/template5');
		$this->load->view('template/template6');

	}

	public  function importplace()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitplace'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        $this->import_data_model->clearvalue();
	        
	        $tmpFile = $_FILES['_fileup']['tmp_name'];
	        $fileName = $_FILES['_fileup']['name'];  // เก็บชื่อไฟล์
	        $_fileup = $_FILES['_fileup'];
	        $info = pathinfo($fileName);
	        $allow_file = array("csv","xls","xlsx");
	        /*  print_r($info);         // ข้อมูลไฟล์
	         print_r($_fileup);*/
	        if($fileName!="" && in_array($info['extension'],$allow_file)){
	            // อ่านไฟล์จาก path temp ชั่วคราวที่เราอัพโหลด
	            $objPHPExcel = PHPExcel_IOFactory::load($tmpFile);
	            
	            
	            // ดึงข้อมูลของแต่ละเซลในตารางมาไว้ใช้งานในรูปแบบตัวแปร array
	            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
	            
	            // วนลูปแสดงข้อมูล
	            $data_arr=array();
	            foreach ($cell_collection as $cell) {
	                // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
	                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
	                // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
	                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
	                // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
	                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
	                
	                // เริ่มขึ้นตอนจัดเตรียมข้อมูล
	                // เริ่มเก็บข้อมูลบรรทัดที่ 2 เป็นต้นไป
	                $start_row = 2;
	                // กำหนดชื่อ column ที่ต้องการไปเรียกใช้งาน
	                $col_name = array(
	                    "A"=>"BUILDID",
	                    "B"=>"BUILDTHNAME"
	                    
	                );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	                 //print_r($data_arr);
	        }
	    }
	    ?>
 </pre>
  
 <br>
<pre>

<!--  <table class="table table-bordered"> -->
<?php
// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("BUILDID","BUILDTHNAME");
    if(is_array($data)){
        foreach($arr_field as $v){
            if(!isset($data[$v])){
                $data[$v]="";           
            }


        }
    }
    return $data;
}


// นำข้อมูลที่ดึงจาก excel หรือ csv ไฟล์ มาวนลูปแสดง
if(isset($data_arr) && count($data_arr)>0){
    foreach($data_arr as $row){
        $row = prepare_data($row);

?>
<!--
    <tr>
        <td><?=$row['BUILDID']?></td>
        <td><?=$row['BUILDTHNAME']?></td>

    </tr>
-->
<?php

$BUILDID = $row['BUILDID'];
$BUILDTHNAME = $row['BUILDTHNAME'];
$data = array(
'place_ID'		=>	$BUILDID,
'place_name'			=>	$BUILDTHNAME

);
$this->import_data_model->insertplace($data);
    }

}
$this->session->set_flashdata('message', '<br/>importข้อมูลสถานที่เรียบร้อย');

redirect(base_url() . 'index.php/import_data/index');

?>    
<?php 

	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public  function importusertype()
	{

	    
	    if(isset($_POST['btn_submitusertype'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	    
	        
	        $tmpFile = $_FILES['_fileup']['tmp_name'];
	        $fileName = $_FILES['_fileup']['name'];  // เก็บชื่อไฟล์
	        $_fileup = $_FILES['_fileup'];
	        $info = pathinfo($fileName);
	        $allow_file = array("csv","xls","xlsx");
	        /*  print_r($info);         // ข้อมูลไฟล์
	         print_r($_fileup);*/
	        if($fileName!="" && in_array($info['extension'],$allow_file)){
	            // อ่านไฟล์จาก path temp ชั่วคราวที่เราอัพโหลด
	            $objPHPExcel = PHPExcel_IOFactory::load($tmpFile);
	            
	            
	            // ดึงข้อมูลของแต่ละเซลในตารางมาไว้ใช้งานในรูปแบบตัวแปร array
	            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
	            
	            // วนลูปแสดงข้อมูล
	            $data_arr=array();
	            foreach ($cell_collection as $cell) {
	                // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
	                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
	                // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
	                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
	                // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
	                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
	                
	                // เริ่มขึ้นตอนจัดเตรียมข้อมูล
	                // เริ่มเก็บข้อมูลบรรทัดที่ 2 เป็นต้นไป
	                $start_row = 2;
	                // กำหนดชื่อ column ที่ต้องการไปเรียกใช้งาน
	                $col_name = array(
	                "A"=>"รหัสประเภทผู้ใช้",
	                "B"=>"ประเภทผู้ใช้งาน"
	        
	        );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }
	    ?>
 </pre>
  
 <br>
<pre>

<!--  <table class="table table-bordered"> -->
<?php
// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("รหัสประเภทผู้ใช้","ประเภทผู้ใช้งาน");
    if(is_array($data)){
        foreach($arr_field as $v){
            if(!isset($data[$v])){
                $data[$v]="";           
            }

        }
    }
    return $data;
}

// นำข้อมูลที่ดึงจาก excel หรือ csv ไฟล์ มาวนลูปแสดง
if(isset($data_arr) && count($data_arr)>0){
    foreach($data_arr as $row){
        $row = prepare_data($row);

?>
<!--  
    <tr>
        <td><?=$row['รหัสประเภทผู้ใช้']?></td>
        <td><?=$row['ประเภทผู้ใช้งาน']?></td>

    </tr>
-->
<?php

$BUILDID = $row['รหัสประเภทผู้ใช้' ];
$BUILDTHNAME = $row['ประเภทผู้ใช้งาน'];
$data = array(
'usertype_ID'		=>	$BUILDID,
'usertype_name'			=>	$BUILDTHNAME,
    'active_track'			=>	0

);

$this->import_data_model->insertusertype($data);

    }


}
$this->session->set_flashdata('message', '<br/>importข้อมูลกลุ่มผู้ใช้เรียบร้อย');

redirect(base_url() . 'index.php/import_data/index');

?>    
<?php 

	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public  function importdormtype()
	{
   
	    if(isset($_POST['btn_submitdormtype'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        
	        $tmpFile = $_FILES['_fileup']['tmp_name'];
	        $fileName = $_FILES['_fileup']['name'];  // เก็บชื่อไฟล์
	        $_fileup = $_FILES['_fileup'];
	        $info = pathinfo($fileName);
	        $allow_file = array("csv","xls","xlsx");
	        /*  print_r($info);         // ข้อมูลไฟล์
	         print_r($_fileup);*/
	        if($fileName!="" && in_array($info['extension'],$allow_file)){
	            // อ่านไฟล์จาก path temp ชั่วคราวที่เราอัพโหลด
	            $objPHPExcel = PHPExcel_IOFactory::load($tmpFile);
	            
	            
	            // ดึงข้อมูลของแต่ละเซลในตารางมาไว้ใช้งานในรูปแบบตัวแปร array
	            $cell_collection = $objPHPExcel->getActiveSheet()->getCellCollection();
	            
	            // วนลูปแสดงข้อมูล
	            $data_arr=array();
	            foreach ($cell_collection as $cell) {
	                // ค่าสำหรับดูว่าเป็นคอลัมน์ไหน เช่น A B C ....
	                $column = $objPHPExcel->getActiveSheet()->getCell($cell)->getColumn();
	                // คำสำหรับดูว่าเป็นแถวที่เท่าไหร่ เช่น 1 2 3 .....
	                $row = $objPHPExcel->getActiveSheet()->getCell($cell)->getRow();
	                // ค่าของข้อมูลในเซลล์นั้นๆ เช่น A1 B1 C1 ....
	                $data_value = $objPHPExcel->getActiveSheet()->getCell($cell)->getValue();
	                
	                // เริ่มขึ้นตอนจัดเตรียมข้อมูล
	                // เริ่มเก็บข้อมูลบรรทัดที่ 2 เป็นต้นไป
	                $start_row = 2;
	                // กำหนดชื่อ column ที่ต้องการไปเรียกใช้งาน
	                $col_name = array(
	                "A"=>"รหัสประเภทหอพัก",
	                "B"=>"ชื่อประเภทหอพัก"
     
     );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }
	    ?>
 </pre>
  
 <br>
<pre>

<!--  <table class="table table-bordered"> -->
<?php
// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("รหัสประเภทหอพัก","ชื่อประเภทหอพัก");
    if(is_array($data)){
        foreach($arr_field as $v){
            if(!isset($data[$v])){
                $data[$v]="";           
            }

        }
    }
    return $data;
}

// นำข้อมูลที่ดึงจาก excel หรือ csv ไฟล์ มาวนลูปแสดง
if(isset($data_arr) && count($data_arr)>0){
    foreach($data_arr as $row){
        $row = prepare_data($row);


?>
<!--  
    <tr>
        <td><?=$row['รหัสประเภทหอพัก']?></td>
        <td><?=$row['ชื่อประเภทหอพัก']?></td>

    </tr>
-->
<?php

$BUILDID = $row['รหัสประเภทหอพัก' ];
$BUILDTHNAME = $row['ชื่อประเภทหอพัก'];
$data = array(
'dormtype_ID'		=>	$BUILDID,
'type_name'			=>	$BUILDTHNAME

);

$this->import_data_model->insertdormtype($data);

    }

}
$this->session->set_flashdata('message', '<br/>importข้อมูลประเภทหอพักเรียบร้อย');

redirect(base_url() . 'index.php/import_data/index');

?>    
<?php 

	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
    
	public function new()
	{
	    //แสดงหน้าจอ form สำหรับบันทึกข้อมูลใหม่
	}

	public function addnew()
	{
	    //รับข้อมูลจาก form  insert ลง DB
	}

	public function edit()
	{
	    //แสดงหน้าจอ form สำแก้ไขข้อมูลใหม่
	}

	public function update()
	{
	    //รับข้อมูลจาก form  update ลง DB
	}
}
