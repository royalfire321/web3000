<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-20 12:15:05
  from 'D:\xampp\htdocs\web3000\templates\tpl\user.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e4e6a390016d7_84655623',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56a8a403289875de48a6b9e44d70b2b7980dd6d7' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web3000\\templates\\tpl\\user.tpl',
      1 => 1582197299,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e4e6a390016d7_84655623 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['op']->value == "op_list") {?>
    <table class="table table-striped table-bordered table-hover table-sm">
        <thead>
        <tr>
            <th scope="col">編號</th>
            <th scope="col">姓名</th>
            <th scope="col">EMAIL</th>
            <th scope="col">電話</th>
            <th scope="col">訊息</th>
            <th scope="col">日期</th>
            <th scope="col">時間</th>
            <th scope="col">人數</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
                <tr>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['message'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['people'];?>
</td>
                    <td><a href="user.php?op=op_form&uid=<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
"><i class="far fa-edit"></i></a>
                    <a href="javascript:void(0)" onclick="op_delete(<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
);"><i class="far fa-trash-alt"></i></a>
                    </td>
                </tr>
            <?php
}
} else {
?>
                <tr>
                    <td colspan=7>目前沒有資料</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.css">
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['xoAppUrl']->value;?>
class/sweetalert2/sweetalert2.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>
        function op_delete(uid){
            Swal.fire({
                title: '你確定嗎？',
                text: "您將無法還原！",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: '是的，刪除它！',
                cancelButtonText: '取消'
                }).then((result) => {
                if (result.value) {
                    document.location.href="user.php?op=op_delete&uid="+uid;
                }
            })
        }
    <?php echo '</script'; ?>
>
<?php }?>

<?php if ($_smarty_tpl->tpl_vars['op']->value == "op_form") {?>
    
    <div class="container">
        <h1 class="text-center">會員表單</h1>
        
        <form action="user.php" method="post" id="myForm" class="mb-2" enctype="multipart/form-data">
        
            <div class="row">         
                <!--帳號-->              
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>編號<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="uid" id="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
" readonly>
                    </div>
                </div>         

                <!--姓名-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>姓名<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['name'];?>
">
                    </div>
                </div>         
                <!--電話-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>電話<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['phone'];?>
">
                    </div>
                </div>             
                <!--信箱-->              
                <div class="col-sm-12">
                    <div class="form-group">
                    <label>信箱<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['email'];?>
">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>時間<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="time" id="time" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['time'];?>
">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>日期<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="date" id="date" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['date'];?>
">
                    </div>
                </div> 

                 <div class="col-sm-12">
                    <div class="form-group">
                    <label>人數<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="people" id="people" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['people'];?>
">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>訊息<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="message" id="meassage" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['message'];?>
">
                    </div>
                </div> 
            </div>

            <div class="text-center pb-20">
            <input type="hidden" name="op" value="op_update">
            <input type="hidden" name="uid" value="<?php echo $_smarty_tpl->tpl_vars['row']->value['uid'];?>
">
            <button type="submit" class="btn btn-primary">送出</button>
            </div>
        
        </form>
        <!-- 表單驗證 -->
        
        
    </div>
<?php }
}
}
