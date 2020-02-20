<?php
/* 引入檔頭，每支程都會引入 */
require_once 'head.php';
if($_SESSION['user']['kind'] !== 1)redirect_header("index.php", '您沒有權限', 3000);

/* 過濾變數，設定預設值 */
$op = system_CleanVars($_REQUEST, 'op', 'op_list', 'string');
$uid = system_CleanVars($_REQUEST, 'uid', '', 'int');
// echo $op;die();
 
/* 程式流程 */
switch ($op){

  case "op_update" :
    $msg = op_update($uid);
    redirect_header("user.php", $msg, 3000);
    exit;

  case "op_delete" :
    $msg = op_delete($uid);
    redirect_header("user.php", $msg, 3000);
    exit;
  
  case "op_form" :
    $msg = op_form($uid);
    break;
    
  default:
    $op = "op_list";
    op_list();
    break;  
}
/*---- 將變數送至樣版----*/
$smarty->assign("WEB", $WEB);
$smarty->assign("op", $op);
 
/*---- 程式結尾-----*/
$smarty->display('admin.tpl');
 







