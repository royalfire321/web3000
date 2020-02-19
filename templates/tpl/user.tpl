<{if $op=="op_list"}>
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
            <{foreach $rows as $row}>
                <tr>
                    <td><{$row.uid}></td>
                    <td><{$row.name}></td>
                    <td><{$row.email}></td>
                    <td><{$row.phone}></td>
                    <td><{$row.message}></td>
                    <td><{$row.date}></td>
                    <td><{$row.time}></td>
                    <td><{$row.people}></td>
                    <td><a href="user.php?op=op_form&uid=<{$row.uid}>"><i class="far fa-edit"></i></a>
                    </td>
                </tr>
            <{foreachelse}>
                <tr>
                    <td colspan=7>目前沒有資料</td>
                </tr>
            <{/foreach}>

        </tbody>
    </table>
<{/if}>

<{if $op=="op_form"}>
    
    <div class="container">
        <h1 class="text-center">會員表單</h1>
        
        <form action="user.php" method="post" id="myForm" class="mb-2" enctype="multipart/form-data">
        
            <div class="row">         
                <!--帳號-->              
                <div class="col-sm-4">
                    <div class="form-group">
                    <label>編號<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="uid" id="uid" value="<{$row.uid}>" readonly>
                    </div>
                </div>         

                <!--姓名-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>姓名<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="name" id="name" value="<{$row.name}>">
                    </div>
                </div>         
                <!--電話-->              
                <div class="col-sm-6">
                    <div class="form-group">
                    <label>電話<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="phone" id="phone" value="<{$row.phone}>">
                    </div>
                </div>             
                <!--信箱-->              
                <div class="col-sm-12">
                    <div class="form-group">
                    <label>信箱<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="email" id="email" value="<{$row.email}>">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>時間<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="time" id="time" value="<{$row.time}>">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>日期<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="date" id="date" value="<{$row.date}>">
                    </div>
                </div> 

                 <div class="col-sm-12">
                    <div class="form-group">
                    <label>人數<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="people" id="people" value="<{$row.people}>">
                    </div>
                </div> 

                <div class="col-sm-12">
                    <div class="form-group">
                    <label>訊息<span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="message" id="meassage" value="<{$row.message}>">
                    </div>
                </div> 
            </div>

            <div class="text-center pb-20">
            <input type="hidden" name="op" value="op_update">
            <input type="hidden" name="uid" value="<{$row.uid}>">
            <button type="submit" class="btn btn-primary">送出</button>
            </div>
        
        </form>
        <!-- 表單驗證 -->
        
        
    </div>
<{/if}>