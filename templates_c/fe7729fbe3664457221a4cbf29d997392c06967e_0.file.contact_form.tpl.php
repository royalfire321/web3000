<?php
/* Smarty version 3.1.34-dev-7, created on 2020-02-16 04:08:55
  from 'D:\xampp\htdocs\web2020\templates\tpl\contact_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5e48b247a853a2_51027291',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fe7729fbe3664457221a4cbf29d997392c06967e' => 
    array (
      0 => 'D:\\xampp\\htdocs\\web2020\\templates\\tpl\\contact_form.tpl',
      1 => 1581822531,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e48b247a853a2_51027291 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="container mt-5">
<h1 class="text-center">聯絡我們</h1>

<!-- 表單返回頁，記得在表單加「 target='returnWin' 」 -->
<iframe name="returnWin" style="display: none;" onload="this.onload=function(){window.location='index.php?op=ok'}"></iframe>
    <form target="returnWin"  class="form-signin" action="https://docs.google.com/forms/d/e/1FAIpQLSfrm3BMa3tDQ9F2om9LIjPVYFSoQYzbIs_eZTVQ1ufhoZjZMw/formResponse" method="post">
        <div class="form-group">
            <label>姓名<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="entry.867626444" id="867626444" value="" >
        </div>
        <div class="form-group">
            <label>信箱<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="entry.1754152143" id="1754152143" value="" >
        </div>
        <div class="form-group">
            <label>電話<span class="text-danger">*</span class="text-danger"></label>
            <input type="text" class="form-control" name="entry.1550421662" id="1550421662" value="" >
        </div>
        <div class="form-group">
            <label>聯絡事項<span class="text-danger">*</span class="text-danger"></label>
            <textarea class="form-control" rows=8 name="entry.474645198" id="474645198" value="" ></textarea>
        </div>
        <div>
            <div class="text-center pb-10">
                <button type="submit" class="btn btn-primary">送出</button>
              </div>
        </div>
    </form>    
<?php }
}
