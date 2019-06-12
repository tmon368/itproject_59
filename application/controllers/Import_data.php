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
		$this->load->view('template/page_import_data');
		$this->load->view('template/template5');
		$this->load->view('template/template6');

	}

	public  function importplace()
	{
	    echo "Hi";
	    
	    
	    if(isset($_POST['btn_submit'])  && isset($_FILES['_fileup']['name']) && $_FILES['_fileup']['name']!=""){
	        echo "hii excel";
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
	                 print_r($data_arr);
	        }
	    }
	    ?>
 </pre>
  
 <br>
<pre>
<table class="table table-bordered">
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


/*include("connectDB.php");

//INSERT INTO `testexcel`(`cus_id`, `cus_name`, `order_id`, `pro_id`, `pro_name`) VALUES (["cus_id"],["cus_name"],["order_id"],["pro_id"],["pro_name"]);


if(isset($data_arr) && count($data_arr)>0){
    foreach($data_arr as $row){
        $row = prepare_data($row);
$sql = "INSERT INTO `testexcel`(`cus_id`, `cus_name`, `order_id`, `pro_id`, `pro_name`) VALUES ("<?php '$row['cus_id']?>'",['cus_name'],['order_id'],['pro_id'],['pro_name'])";
 $result = mysqli_query($conn, $sql)or die(mysql_error());
        $conn->close();

    }
}
*/
   

 
// นำข้อมูลที่ดึงจาก excel หรือ csv ไฟล์ มาวนลูปแสดง
if(isset($data_arr) && count($data_arr)>0){
    foreach($data_arr as $row){
        $row = prepare_data($row);


        //ปริ้นค่าเป็นคอลัมทั้งหมดที่เก็บไว้ในarray
       /* $cus_id = $row['cus_id'];
        $cus_name = $row['cus_name'];
        $order_id = $row['order_id'];
        $pro_id   = $row['pro_id'];
        $pro_name = $row['pro_name'];
        echo "$cus_id";
         echo "$cus_name";
          echo "$order_id";
           echo "$pro_id";
            echo "$pro_name";
*/

?>
    <tr>
        <td><?=$row['BUILDID']?></td>
        <td><?=$row['BUILDTHNAME']?></td>

    </tr>

<?php

$BUILDID = $row['BUILDID'];
$BUILDTHNAME = $row['BUILDTHNAME'];
/*$query1 = $this->import_data_model->selectplace();
foreach ($query1 as $value){
if($value->place_ID != $BUILDID && $value->place_name != $BUILDTHNAME){
*/
$data = array(
    'place_ID'		=>	$BUILDID,
    'place_name'			=>	$BUILDTHNAME
   
);

$this->import_data_model->insertplace($data);
}
/*
if ($value->place_ID == $BUILDID && $value->place_name != $BUILDTHNAME){
    $dataupdate = array(
        'place_name'			=>	$BUILDTHNAME
        
    );
    $this->import_data_model->updateplace($BUILDID,$dataupdate);
    
}







}
    }*/


}
?>    
<?php 
	    
	    
	    
	    
	    
	    
	    
	    
	    
	    
	  
	    
	    
	    
	    
	    /*
	    if(isset($_FILES["file"]["name"]))
	    {
	        $path = $_FILES["file"]["tmp_name"];
	        $object = PHPExcel_IOFactory::load($path);
	        foreach($object->getWorksheetIterator() as $worksheet)
	        {
	            $highestRow = $worksheet->getHighestRow();
	            $highestColumn = $worksheet->getHighestColumn();
	            for($row=2; $row<=$highestRow; $row++)
	            {
	                $place_ID = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	                $place_name = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
	             
	                $data[] = array(
	                    'place_ID'		=>	$place_ID,
	                    'place_name'			=>	$place_name

	                );
	            }
	        }
	        $this->import_data_model->insertplace($data);
	        echo 'Data Imported successfully';
	    }*/
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
