 <?php
 
 header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
 header("Cache-Control: post-check=0, pre-check=0", false);
 header("Pragma: no-cache");

 
 if($_GET["listType"] == "paidList")
 {
  $paid_list = array();
  $paid_list[] = "Test Item";
  $paid_list[] = "Test Item 2";
  echo json_encode($paid_list);
  return;
 }  

 
 if($_GET["listType"] == "freeList")
 {
  $free_list = array();
  $free_list[] = "Test Item";
  $free_list[] = "Test Item 2";
  $free_list[] = "Test Item 3";
  $free_list[] = "Test Item 4";
  echo json_encode($free_list);
  return;
 }
 
  
 if($_GET["listType"] == "grossList")
 {
 $gross_list = array();
 $gross_list[] = "Test Item";
 $gross_list[] = "Test Item 2";
 $gross_list[] = "Test Item 3";
 $gross_list[] = "Test Item 4";
 $gross_list[] = "Test Item 5";
 echo json_encode($gross_list);
 return; 
 } 
 ?>