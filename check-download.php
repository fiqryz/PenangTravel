

<?php
	

   require_once "dbcon.php";

   $action = $_POST['cmd'];

   if($action == 'check'){

   		 getVoucher();

   }else if($action == 'update-check'){

       updateDownload();

   }

   function getVoucher(){

    
      global $conn;
      $rid = $_POST['rid'];
      $uid = $_POST['uid'];
    
      $sql = "SELECT * FROM voucher WHERE r_id='$rid'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){

          $data = mysqli_fetch_all($result); 
          $displayresult =array();

          foreach ($data as $key => $value) {

            $sql1 = "SELECT * FROM download where vid='".$value[0]."' AND uid = '$uid'";
            $result1 = mysqli_query($conn, $sql1);
            if(mysqli_num_rows($result1) > 0){
               $status = 1;
            }else{
               $status = 0;
            }

            $displayresult['vid']=$value[0];
            $displayresult['voucher_path']=$value[1];
            $displayresult['rid']=$value[2];
            $displayresult['status']= $status;


          }

          $returndata = $displayresult;
          echo json_encode(array(
            'data' => $returndata,
            'status' => true
         ));


      }
     
  }

  function updateDownload(){

      global $conn;
      $vid = $_POST['vid'];
      $uid = $_POST['uid'];

      $sql = "SELECT * FROM download where vid='$vid' AND uid = '$uid'";
      $result = mysqli_query($conn, $sql);
      if(mysqli_num_rows($result) > 0){


      }else{

          $sql = "INSERT INTO download (uid, vid) VALUES ('$uid', '$vid')";

          if (mysqli_query($conn, $sql)) {
                $msg = "Successfully download voucher pdf.";
                returnSuccess($msg);
          } else {
                $msg = "Failed to download voucher pdf.";
                returnErr($msg);
          }
         
      }

  }

  

  function returnSuccess($msg){


      echo json_encode(array(
        'msg' => $msg,
        'status' => 'true'
      ));

      exit();

  }


  function returnErr($msg){


      echo json_encode(array(
        'msg' => $msg,
        'status' => 'false'
      ));

      exit();

  }



  


?>