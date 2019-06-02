<?php require __DIR__. '/__connect_db.php';
$page_name = 'register';




?>

<?php include __DIR__. '/__htmlhead.php'; ?>
<title>會員註冊</title>
<link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<meta name="format-detection" content="telephone=no">
<style>
<?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
.member {
    clear: both;
    text-align: center;
    color: #333333;
    text-align: center;
    max-width: 784px;
    height: 100px;
    line-height: 100px;
}

.member-box {
    max-width: 340px;
    height: 310px;
    margin: 40px auto;
}

span {
    color: red;
}

.iput1 {
    margin-top: 5px;
    float: right;
    height: 25px;
    width: 200px;
}

.input-box {
    line-height: 37px;
    height: 37px;
    margin: 15px 10px;
}

.con-member {
    max-width: 784px;
    margin: 0 auto;
    background: #ffffff;
    border: 1px solid #ff931e;
}
.btn_enter,
.btn_back {
    background: #ffffff;
    width: 97px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 12px 10px 0 15px;
    transition: all 0.5s;
}

.btn_enter:hover,
.btn_back:hover {
    color: #FFFFFF;
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
}

.btn-control {
    display: flex;
    justify-content: center;
    max-width: 684px;
    height: 40px;
}

/*#my-alert{*/
    /*display:none;*/
/*}*/

input:focus , button{
    outline:none
}

.alert{
    margin-top: 10px;
    width: 100%;
    height: auto;
    text-align: center;
}
    button{
        cursor: pointer;
    }
    .alert-danger{
        color:red;
    }
    .alert-success{
        color:#348631;
    }
</style>

<?php include __DIR__. '/_navbarWithMember.php'; ?>

<div class="member_container">
        <div class="member">
        <h2>會員註冊</h2>
        </div>

<!--        <div id="my-alert" class="alert alert-success" role="alert"></div>-->


        <div class="con-member">
           <div class="member-box">
               <form name="form1"  method="post" onsubmit="return checkForm()">

                   <div class="form-group input-box">
                       <label for="name"><span class="hint">*</span>姓名</label>
                       <input type="text" class="form-control iput1" id="name" name="name"
                              maxlength="4" placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="ic"><span class="hint">*</span>身分證字號</label>
                       <input type="text" class="form-control iput1" id="ic" name="ic" maxlength="10" placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="email"><span class="hint">*</span>帳號(信箱)</label>
                       <input type="text" class="form-control iput1" id="email" name="email" placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="password"><span class="hint">*</span>密碼</label>
                       <input type="password" class="form-control iput1" id="password" name="password" placeholder="">

                   </div>

                   <div class="form-group input-box">
                       <label for="phone"><span class="hint">*</span>手機</label>
                       <input type="text" class="form-control iput1" id="phone" name="phone" placeholder="">

                   </div>


                   <div class="btn-control">
                       <button type="submit" class="btn_enter">確認</button>
                   </div>
                   <div id="my-alert" class="alert alert-success" role="alert"></div>

               </form>
           </div>
        </div>
</div>
<?php include __DIR__. '/_footer.php'; ?>


<script>
    var my_alert = $('#my-alert');

    var btn = $('form button');

    function checkForm(){
        var isPass = true;

        if(! document.form1.name.value){
            isPass = false;
            alert('姓名沒填');
        }
        if(! document.form1.ic.value){
            isPass = false;
            alert('身分證字號沒填');
        }
        if(! document.form1.email.value){
            isPass = false;
            alert('信箱沒填');
        }
        if(! document.form1.password.value){
            isPass = false;
            alert('密碼沒填');
        }
        if(! document.form1.phone.value) {
            isPass = false;
            alert('手機沒填');
        }
        if(isPass) {
            btn.hide();
            my_alert.hide();

            $.post('register_api.php', $(document.form1).serialize(), function(data){
                console.log(data);
                my_alert.show();
                if(data.success){
                    my_alert.attr('class', 'alert alert-success');
                    my_alert.html("註冊完成,請稍後登入");
                    setTimeout(function() {
                        location.href="./login.php";
                    },1500);
                } else {
                    my_alert.attr('class', 'alert alert-danger');
                    btn.show();
                    my_alert.html(data.error);
                }
            }, 'json');
        }

        return false;
    }


</script>


<?php include __DIR__. '/__htmlfoot.php'; ?>
