<?php
function op_delete($uid){
  global $db; 
  $sql="DELETE FROM `orders`
        WHERE `uid` = '{$uid}'
  ";
  $db->query($sql) or die($db->error() . $sql);
  return "會員資料刪除成功";
}


function op_list(){
  global $smarty,$db;
  
  $sql = "SELECT *
          FROM `orders`
  ";

  $result = $db->query($sql) ;
  $rows=[];//array();
  while($row = $result->fetch_assoc()){
    $row['uid'] = (int)$row['uid'];//整數
    $row['uid'] = htmlspecialchars($row['uid']);//字串
    $row['name'] = htmlspecialchars($row['name']);//字串
    $row['email'] = htmlspecialchars($row['email']);//字串
    $row['phone'] = htmlspecialchars($row['phone']);//字串
    $row['message'] = htmlspecialchars($row['message']);//字串
    $row['date'] = htmlspecialchars($row['date']);//字串  
    $row['time'] = htmlspecialchars($row['time']);//字串  
    $row['people'] = htmlspecialchars($row['people']);//字串      
    $rows[] = $row;
  }
  $smarty->assign("rows",$rows);  

}


  function op_form($uid=""){
    global $smarty,$db;
  
    if($uid){
      $sql="SELECT *
            FROM `orders`
            WHERE `uid` = '{$uid}'
      ";//die($sql);
      
      $result = $db->query($sql) ;
      $row = $result->fetch_assoc(); 
    }
    $row['uid'] = isset($row['uid']) ? $row['uid'] : "";
    $row['name'] = isset($row['name']) ? $row['name'] : "";
    $row['date'] = isset($row['date']) ? $row['date'] : "";
    $row['email'] = isset($row['email']) ? $row['email'] : "";
    $row['time'] = isset($row['time']) ? $row['time'] : "";
    $row['phone'] = isset($row['phone']) ? $row['phone'] : "";
    $row['people'] = isset($row['people']) ? $row['people'] : "";
    $row['message'] = isset($row['message']) ? $row['message'] : "";
  
    $smarty->assign("row",$row);
  }

  function op_update($uid=""){
    global $db; 
     
  $_POST['name'] = db_filter($_POST['name']);
  $_POST['date'] = db_filter($_POST['date']);
  $_POST['email'] = db_filter($_POST['email'],FILTER_SANITIZE_EMAIL);
  $_POST['time'] = db_filter($_POST['time'] );
  $_POST['phone'] = db_filter($_POST['phone']);
  $_POST['people'] = db_filter($_POST['people']);
  $_POST['message'] = db_filter($_POST['message']);

    $sql="UPDATE `orders` SET
          
          `name` = '{$_POST['name']}',
          `date` = '{$_POST['date']}',
          `email` = '{$_POST['email']}',
          `time` = '{$_POST['time']}',
          `phone` = '{$_POST['phone']}',
          `people` = '{$_POST['people']}',
          `message` = '{$_POST['message']}'

          WHERE `uid` = '{$uid}'
    ";//die($sql);
    $db->query($sql) or die($db->error() . $sql); ;
    return "會員資料更新成功";
  
  }
  