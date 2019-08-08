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
	public function pagestudent()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importstudent');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	public function pagepersonnel()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importpersonnel');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	public function pagestatus()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importstatus');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	public function pagevehicles()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importvehicles');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	public function pagedivisions()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importdivisions');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	public function pagecurriculum()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('template/template1');
	    $this->load->view('template/template2');
	    $this->load->view('template/template3');
	    $this->load->view('basicdata/importdata/importcurriculum');
	    $this->load->view('template/template5');
	    $this->load->view('template/template6');
	    
	}
	

	public  function importplace()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitplace'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                    "B"=>"BUILDTHNAME",
	                    "C"=> "description"
	                    
	                );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	                 //print_r($data_arr);
	        }
	    }

// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("BUILDID","BUILDTHNAME","description");
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
    $this->import_data_model->empty_tmp_place();
    foreach($data_arr as $row){
        $row = prepare_data($row);


$BUILDID = $row['BUILDID'];
$BUILDTHNAME = $row['BUILDTHNAME'];
$description = $row['description'];
$data = array(
'place_ID'		=>	$BUILDID,
'place_name'			=>	$BUILDTHNAME,
'description'			=>	$description
);
$this->import_data_model->inserttmp_place($data);

    }

}

redirect("import_data/submit_place");


	}
	
	
	
	
	public  function showAlltmpplace()
	{
	    $result = $this->import_data_model->selecttmpplace();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_place()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_place');
	}
	
	
	
	
	
	function import_temp_to_dbplace()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmpplace(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	       
	        $temp_a = $this->import_data_model->checkplace($row->place_ID);
	       
	        
	        if($row->place_ID != "" && $row->place_name != "" && $row->description != ""){
	        if ($temp_a == 1) {
	            
	            //อัพเดตข้อมูล
	            $data = array(
	            //'id' => $results->id,
	            'place_name' => $row->place_name,
	            'description' => $row->description
	            );
	            $this->import_data_model->update_dataplace($row->place_ID,$data);
	            $updt+=1;
	        } else{
	            //เพิ่มข้อมูล
	            $data_a =  array();
	            $data_a['place_ID'] = $row->place_ID;
	            $data_a['place_name'] = $row->place_name;
	            $data_a['description'] = $row->description;
	            $this->import_data_model->insert_to_place($data_a);
	            $inst+=1;

	        }
	        }else{
	            $dtnull+=1;
	            
	            
	        }
	        
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public  function importdivisions()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitdivisions'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                "A"=>"dept_ID",
	                "B"=>"dept_name"
        
        );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }

// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("dept_ID","dept_name");
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
    $this->import_data_model->empty_tmp_divisions();
    foreach($data_arr as $row){
        $row = prepare_data($row);


$dept_ID = $row['dept_ID'];
$dept_name = $row['dept_name'];
$data_divisions = array(
    'dept_ID'		=>	$dept_ID,
    'dept_name'			=>	$dept_name,
    'flag'        =>     '0'
);
$this->import_data_model->inserttmp_divisions($data_divisions);

    }

}

redirect("import_data/submit_divisions");


	}
	
	
	
	
	public  function showAlltmpdivisions()
	{
	    $result = $this->import_data_model->selecttmpdivisions();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_divisions()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_divisions');
	}
	
	
	
	
	
	function import_temp_to_dbdivisions()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmpdivisions(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	       
	        $temp_a = $this->import_data_model->checkdivisions($row->dept_ID);
	       
	        
	        if($row->dept_ID != "" && $row->dept_name != ""){
	        if ($temp_a == 1) {
	            
	            //อัพเดตข้อมูล
	            $data = array(
	            //'id' => $results->id,
	            'dept_ID' => $row->dept_ID,
	            'dept_name' => $row->dept_name,
	            'active_track'        =>   '0'
	            );
	            $this->import_data_model->update_datadivisions($row->dept_ID,$data);
	            $updt+=1;
	        } else{
	            //เพิ่มข้อมูล
	            $data_a =  array();
	            $data_a['dept_ID'] = $row->dept_ID;
	            $data_a['dept_name'] = $row->dept_name;
	            $data_a['active_track'] = '0' ;
	            $this->import_data_model->insert_to_divisions($data_a);
	            $inst+=1;

	        }
	        }else{
	            $dtnull+=1;
	            
	            
	        }
	        
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public  function importcurriculum()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitcurriculum'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                "A"=>"cur_ID",
	                "B"=>"cur_name",
	                "C"=> "dept_ID"
        
        );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }

// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("cur_ID","cur_name","dept_ID");
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
    $this->import_data_model->empty_tmp_curriculum();
    foreach($data_arr as $row){
        $row = prepare_data($row);


$cur_ID= $row['cur_ID'];
$cur_name = $row['cur_name'];
$dept_ID = $row['dept_ID'];
$data = array(
    'cur_ID'		=>	$cur_ID,
    'cur_name'			=>	$cur_name,
    'dept_ID'			=>	$dept_ID,
    'status'    =>	'0'
);
$this->import_data_model->inserttmp_curriculum($data);

    }

}

redirect("import_data/submit_curriculum");


	}
	
	public  function showAlltmpcurriculum()
	{
	    $result = $this->import_data_model->selecttmpcurriculum();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_curriculum()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_curriculum');
	}
	
	
	
	
	
	function import_temp_to_dbcurriculum()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmpcurriculum(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	       
	        $temp_a = $this->import_data_model->checkcurriculum($row->cur_ID);
	       
	        
	        if($row->cur_ID != "" && $row->cur_name != "" && $row->dept_ID != ""){
	        if ($temp_a == 1) {
	            
	            //อัพเดตข้อมูล
	            $data = array(
	            //'id' => $results->id,
	            'cur_name' => $row->cur_name,
	            'active_track' => '0',
	            'dept_ID' => $row->dept_ID
	            );
	            $this->import_data_model->update_datacurriculum($row->cur_ID,$data);
	            $updt+=1;
	        } else{
	            //เพิ่มข้อมูล
	            $data_a =  array();
	            $data_a['cur_ID'] = $row->cur_ID;
	            $data_a['cur_name'] = $row->cur_name;
	            $data_a['active_track'] = '0';
	            $data_a['dept_ID'] = $row->dept_ID;
	            $this->import_data_model->insert_to_curriculum($data_a);
	            $inst+=1;

	        }
	        }else{
	            $dtnull+=1;  
	            
	        }  
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	public  function importstatus()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitstatus'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                "A"=>"status_ID",
	                "B"=>"status_name"
    
    );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }
	 


// สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
function prepare_data($data){
    // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
    $arr_field = array("status_ID","status_name");
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
    $this->import_data_model->empty_tmp_status();
    foreach($data_arr as $row){
        $row = prepare_data($row);

        
        

$status_ID= $row['status_ID'];
$status_name = $row['status_name'];
$data = array(
    'status_ID'		=>	$status_ID,
    'status_name'			=>	$status_name
);
$this->import_data_model->inserttmp_status($data);

    }

}

redirect("import_data/submit_status");


	}
	
	
	
	
	public  function showAlltmpstatus()
	{
	    $result = $this->import_data_model->selecttmpstatus();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_status()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_status');
	}
	
	
	
	
	
	function import_temp_to_dbstatus()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmpstatus(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	       
	        $temp_a = $this->import_data_model->checkstatus($row->status_ID);
	       
	        
	        if($row->status_ID != "" && $row->status_name != ""){
	        if ($temp_a == 1) {
	            
	            //อัพเดตข้อมูล
	            $data = array(
	            //'id' => $results->id,
	            'cur_name' => $row->cur_name,
	            'status_name' => $row->status_name
	            );
	            $this->import_data_model->update_datastatus($row->status_ID,$data);
	            $updt+=1;
	        } else{
	            //เพิ่มข้อมูล
	            $data_a =  array();
	            $data_a['status_ID'] = $row->status_ID;
	            $data_a['status_name'] = $row->status_name;
	            $this->import_data_model->insert_to_status($data_a);
	            $inst+=1;

	        }
	        }else{
	            $dtnull+=1;
	            
	            
	        }
	        
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	
	
	
	
	
	
	
	
	
	

	
	
	public  function importvehicles()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitvehicles'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                    "A"=>"regist_num",
	                    "B"=>"province",
	                    "C"=> "brand",
	                    "D"=> "color",
	                    "E"=> "type",
	                    "F"=> "regist_date",
	                    "G"=> "expired_date",
	                    "H"=> "std_ID",
	                    
	                );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }
	    
	    // สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
	    function prepare_data($data){
	        // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
	        $arr_field = array("regist_num","province","brand","color","type","regist_date","expired_date","std_ID");
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
	        $this->import_data_model->empty_tmp_vehicles();
	        foreach($data_arr as $row){
	            $row = prepare_data($row);
	            
	            
	            $regist_num = $row['regist_num'];
	            $province = $row['province'];
	            $brand = $row['brand'];
	            $color = $row['color'];
	            $type = $row['type'];
	            $regist_date = $row['regist_date'];
	            $expired_date = $row['expired_date'];
	            $std_ID = $row['std_ID'];
	            $data = array(
	                'regist_num'			=>	$regist_num,
	                'province'			=>	$province,
	                'brand'			=>	$brand,
	                'color'			=>	$color,
	                'type'			=>	$type,
	                'regist_date'			=>	"2019-08-08",
	                'expired_date'			=>	"2020-08-08",
	                'std_ID'			=>	$std_ID
	            );
	            $this->import_data_model->inserttmp_vehicles($data);
	            
	        }
	        
	    }
	    
	    redirect("import_data/submit_vehicles");
	    
	    
	}
	
	
	
	
	public  function showAlltmpvehicles()
	{
	    $result = $this->import_data_model->selecttmpvehicles();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_vehicles()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_vehicles');
	}
	
	
	
	
	
	function import_temp_to_dbvehicles()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmpvehicles(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	        
	        $temp_a = $this->import_data_model->checkvehicles($row->std_ID);
	        
	        
	        if($row->regist_num != "" && $row->province != "" && $row->brand != "" && $row->color != "" && $row->type != "" && $row->regist_date != "" && $row->expired_date != "" && $row->std_ID != ""){
	            if ($temp_a == 1) {
	                
	                //อัพเดตข้อมูล
	                $data = array(
	                    //'id' => $results->id,
	                    'regist_num' => $row->regist_num,
	                    'province' => $row->province,
	                    'brand' => $row->brand,
	                    'color' => $row->color,
	                    'type' => $row->type,
	                    'regist_date' => $row->regist_date,
	                    'expired_date' => $row->expired_date,
	                    'S_ID' => $row->std_ID,
	                );
	                $this->import_data_model->update_datavehicles($row->std_ID,$data);
	                $updt+=1;
	            } else{
	                //เพิ่มข้อมูล
	                $data_a =  array();
	                $data_a['regist_num'] = $row->regist_num;
	                $data_a['province'] = $row->province;
	                $data_a['brand'] = $row->brand;
	                $data_a['color'] = $row->color;
	                $data_a['type'] = $row->type;
	                $data_a['regist_date'] = $row->regist_date;
	                $data_a['expired_date'] = $row->expired_date;
	                $data_a['S_ID'] = $row->std_ID;
	                $this->import_data_model->insert_to_vehicles($data_a);
	                $inst+=1;
	                
	            }
	        }else{
	            $dtnull+=1;
	            
	            
	        }
	        
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

	



	public  function importpersonnel()
	{
	    
	    
	    
	    if(isset($_POST['btn_submitpersonnel'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        
	        //$this->import_data_model->clearvalue();
	        
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
	                "A"=>"person_ID",
	                "B"=>"person_fname",
	                "C"=> "person_lname",
	                "D"=> "position",
	                "E"=> "role",
	                "F"=> "email",
	                "G"=> "phone1",
	                "H"=> "phone2",
	                "I"=> "dept_ID",
	                "J"=> "cur_ID",
	                "K"=> "usertype_ID",
	                "L"=> "username",
					"M"=> "password",
					"N"=> "active_track"
	                    
	                    );
	                if($row >= $start_row){
	                    $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
	                }
	            }
	            //print_r($data_arr);
	        }
	    }
	    
	    // สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
	    function prepare_data($data){
	        // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
	        $arr_field = array("person_ID","person_fname","person_lname","position","role","email","phone1","phone2","dept_ID","cur_ID","usertype_ID","username","password");
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
            $this->import_data_model->empty_tmp_personnel();
            foreach($data_arr as $row){
                $row = prepare_data($row);
                

                
                $data_personnel =  array();
				$data_personnel['person_ID'] = $row['person_ID'];
				$data_personnel['person_fname'] = $row['person_fname'];
				$data_personnel['person_lname'] = $row['person_lname'];
				$data_personnel['position'] = $row['position'];
				$data_personnel['role'] = $row['role'];
				$data_personnel['email'] = $row['email'];
				$data_personnel['phone1'] = $row['phone1'];
				$data_personnel['phone2'] = $row['phone2'];
				$data_personnel['dept_ID'] = $row['dept_ID'];
				$data_personnel['cur_ID'] = $row['cur_ID'];
				$data_personnel['usertype_ID'] = $row['usertype_ID'];
				$data_personnel['username'] = $row['username'];
				$data_personnel['password'] = $row['password'];
				$data_personnel['active_track'] = $row['active_track'];


                
                $this->import_data_model->inserttmp_personnel($data_personnel);
                
            }
            
        }
        
        redirect("import_data/submit_personnel");
       
    }
	
	
	
	public  function showAlltmppersonnel()
	{
	    $result = $this->import_data_model->selecttmppersonnel();
	    //print_r ($result);
	    echo json_encode($result);
	    
	    
	}
	
	public function submit_personnel()
	{
	    //List ข้อมูลมาแสดงในหน้าจอ
	    $this->load->view('basicdata/importdata/submit_personnel');
	}
	
	
	
	
	
	function import_temp_to_dbpersonnel()
	{
	    $inst=0;
	    $updt=0;
	    $dtnull=0;
	    echo "Function import_temp_to_db</br>";
	    
	    $result = $this->import_data_model->selecttmppersonnel(); //ตาราง temp
	    
	    foreach ($result as $row) { //loop ตาราง temp
	        //select by id
	        
	       
	        $temp_a = $this->import_data_model->checkpersonnel($row->person_ID);
	       
	        
			if($row->person_ID != "" && $row->person_fname != ""&& $row->person_fname != ""&& $row->person_lname != ""&& $row->position != ""
			&& $row->role != ""&& $row->email != ""&& $row->phone1 != ""&& $row->phone2 != ""&& $row->dept_ID != ""&& $row->cur_ID != ""
			&& $row->usertype_ID != ""&& $row->password != ""){
	        if ($temp_a == 1) {
	            
	        
	            //เพิ่มข้อมูล
				$data_a =  array();
				$data_personnel['person_ID'] = $row['person_ID'];
				$data_personnel['person_fname'] = $row['person_fname'];
				$data_personnel['person_lname'] = $row['person_lname'];
				$data_personnel['position'] = $row['position'];
				$data_personnel['role'] = $row['role'];
				$data_personnel['email'] = $row['email'];
				$data_personnel['phone1'] = $row['phone1'];
				$data_personnel['phone2'] = $row['phone2'];
				$data_personnel['dept_ID'] = $row['dept_ID'];
				$data_personnel['cur_ID'] = $row['cur_ID'];
				$data_personnel['usertype_ID'] = $row['usertype_ID'];
				$data_personnel['username'] = $row['username'];
				$data_personnel['password'] = $row['password'];
				$data_personnel['active_track'] = $row['active_track']; 
	            $this->import_data_model->insert_to_personnel($data_a);
	            $inst+=1;

	        }
	        }else{
	            $dtnull+=1;
	            
	            
	        }
	        
	        
	    }
	    
	    //redirect("Csv_import");
	}
	
	
	



















	public  function importstudent()
    {
        
        
        
        if(isset($_POST['btn_submitstudent'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
        
            
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
                        "A"=>"S_ID",
                        "B"=>"std_fname",
                        "C"=> "std_lname",
                        "D"=> "email",
                        "E"=> "phone",
                        "F"=> "image ",
                        "G"=> "behavior_score",
                        "H"=> "cur_ID",
                        "I"=> "dorm_ID",
                        "J"=> "person_ID",
                        "K"=> "status_ID",
                        "L"=> "usertype_ID",
                        "M"=> "username",
                        "N"=> "password",
                        "O"=> "flag"
                    );
                    
                    
                    
                    if($row >= $start_row){
                        $data_arr[$row-$start_row][$col_name[$column]] = $data_value;
                    }
                }
                //print_r($data_arr);
            }
        }
        
        // สร้างฟังก์ชั่นสำหรับจัดการกับข้อมุลที่เป็นค่าว่าง หรือไม่มีข้อมูลน้้น
        function prepare_data($data){
            // กำหนดชื่อ filed ให้ตรงกับ $col_name ด้านบน
            $arr_field = array("S_ID","std_fname","std_lname","email","phone","image","behavior_score","cur_ID","person_ID","status_ID","usertype_ID","username","password","flag");
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
            $this->import_data_model->empty_tmp_student();
            foreach($data_arr as $row){
                $row = prepare_data($row);
                

                
                $data_student =  array();
                $data_student['S_ID'] = $row['S_ID'];
                $data_student['std_fname'] = $row['std_fname'];
                $data_student['std_lname'] = $row['std_lname'];
                $data_student['email'] = $row['email'];
                $data_student['phone'] = $row['phone'];
                $data_student['image'] = $row['image'];
                $data_student['behavior_score'] = $row['behavior_score'];
                $data_student['cur_ID'] = $row['cur_ID'];
                $data_student['person_ID'] = $row['person_ID'];
                $data_student['status_ID'] = $row['status_ID'];
                $data_student['usertype_ID'] = $row['usertype_ID'];
                $data_student['username'] = $row['username'];
                $data_student['password'] = $row['password'];
                $data_student['flag'] = $row['flag'];
                
                
          
                
                $this->import_data_model->inserttmp_student($data_student);
                
            }
            
        }
        
        redirect("import_data/submit_student");
       
    }

    public  function showAlltmpstudent()
    {
        $result = $this->import_data_model->selecttmpstudent();
        //print_r ($result);
        echo json_encode($result);
        
        
    }
    
    public function submit_student()
    {
        //List ข้อมูลมาแสดงในหน้าจอ
        $this->load->view('basicdata/importdata/submit_student');
    }
    
    
    
    
    
    function import_temp_to_dbstudent()
    {
        $inst=0;
        $updt=0;
        $dtnull=0;
        echo "Function import_temp_to_db</br>";
        
        $result = $this->import_data_model->selecttmpstudent(); //ตาราง temp
        
        foreach ($result as $row) { //loop ตาราง temp
            //select by id
            
            
            $temp_a = $this->import_data_model->checkstudent($row->S_ID);
            
        
            
            //if($row->S_ID != "" && $row->std_fname != "" && $row->std_lname != "" && $row->email != "" && $row->phone != ""
                               // && $row->image != "" && $row->behavior_score != "" && $row->cur_ID != "" && $row->person_ID != ""
                               // && $row->status_ID != "" && $row->usertype_ID != "" && $row->username != "" && $row->password != ""){
                if ($temp_a == 1) {
                    
                    $data_u =  array();
                    $data_u['std_fname'] = $row->std_fname;
                    $data_u['std_lname'] = $row->std_lname;
                    $data_u['email'] = $row->email;
                    $data_u['phone'] = $row->phone;
                    $data_u['image'] = $row->image;
                    $data_u['behavior_score'] = $row->behavior_score;
                    $data_u['cur_ID'] = $row->cur_ID;
                    $data_u['dorm_ID'] = $row-> dorm_ID;
                    $data_u['person_ID'] = $row-> person_ID;
                    $data_u['status_ID'] = $row->status_ID;
                    $data_u['usertype_ID'] = $row->usertype_ID;
                    $data_u['username'] = $row->username;
                    $data_u['password'] = $row->password;
                    $data_u['flag'] = $row->flag;
                    $this->import_data_model->update_datastudent($row->S_ID,$data_u);
                    $updt+=1; 
                } else{
                    //เพิ่มข้อมูล
                    $data_a =  array();
                    $data_a['S_ID'] = $row->S_ID;
                    $data_a['std_fname'] = $row->std_fname;
                    $data_a['std_lname'] = $row->std_lname;
                    $data_a['email'] = $row->email;
                    $data_a['phone'] = $row->phone;
                    $data_a['image'] = $row->image;
                    $data_a['behavior_score'] = $row->behavior_score;
                    $data_a['cur_ID'] = $row->cur_ID;
                    $data_a['dorm_ID'] = $row-> dorm_ID;
                    $data_a['person_ID'] = $row-> person_ID;
                    $data_a['status_ID'] = $row->status_ID;
                    $data_a['usertype_ID'] = $row->usertype_ID;
                    $data_a['username'] = $row->username;
                    $data_a['password'] = $row->password;
                    $data_a['flag'] = $row->flag;
   
                    
                    
                    $this->import_data_model->insert_to_student($data_a);
                    $inst+=1;
                    
                }
           // }else{
           //     $dtnull+=1;
                
                
          //  }
            
            
        }
        
        //redirect("Csv_import");
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
