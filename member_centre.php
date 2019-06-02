<?php require __DIR__. '/__connect_db.php';
$page_name = 'login';
?>
<?php include __DIR__. '/__htmlhead.php'; ?>
<title>會員中心</title>
<meta name="format-detection" content="telephone=no">
<link rel="shortcut icon" type="image/ico" href="images/Logo_02.png" />
<style>
    <?php include __DIR__. '/__style_navfooterWithMember.php'; ?>
.member {
    clear: both;
    text-align: center;
    color: #333333;
    max-width: 784px;
    height: 100px;
    line-height: 100px;
}

.member-box {
    max-width: 340px;
    height:300px;
    margin: 80px auto;
    display: flex;
    justify-content: center;
    align-items: center;
}


span {
    color: red;
}


.con-member {
    max-width: 531px;
    margin: 0 auto 117px;
    background: #ffffff;
    border: 1px solid #ff931e;
}
.btn_enter{
    background: #ffffff;
    width: 120px;
    height: 30px;
    border-radius: 15px;
    color: #ff931e;
    border: 1px solid #ff931e;
    text-align: center;
    line-height: 30px;
    margin: 20px;
    transition: all 0.5s;
}
    .btn_enter a{
        text-decoration: none;
        color:#ff931e;
        padding: 4px 10px;
    }
    .btn_enter_2 a{
        padding:4px 40px;
    }

.btn_enter:hover,
.btn_back:hover {
    color: #FFFFFF;
    background: #ff931e;
    border: 1px solid #ff931e;
    transition: all 0.5s;
}
    .btn_enter:hover a{
        color:#fff;
        transition: all 0.5s;
    }

.btn-control {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    max-width: 300px;
}

    input:focus , button{
        outline:none
    }

    button{
        cursor: pointer;
    }


</style>

<?php include __DIR__. '/_navbarWithMember.php'; ?>
<div class="member_container">
        <div class="member">
            <h2>會員中心</h2>
        </div>




        <div class="con-member">
            <div class="member-box">
                    <div class="btn-control">
                        <div class="btn_enter"><a href="order-member.php">尚未結帳訂單</a></div>
                        <div class="btn_enter"><a href="edit_user.php">編輯會員資料</a></div>
                        <div class="btn_enter"><a href="history.php">歷史訂單查詢</a></div>
                        <div class="btn_enter btn_enter_2"><a href="login.php">登入</a></div>
                        <div class="btn_enter btn_enter_2"><a href="register.php">註冊</a></div>
                        <div class="btn_enter btn_enter_2"><a href="sess_destroy.php">登出</a></div>
                    </div>
            </div>
        </div>
</div>

<?php include __DIR__. '/_footer.php'; ?>

<script>
    var my_alert = $('#my-alert');

    var btn = $('form button');

    function checkForm(){
        var isPass = true;

        if(! document.form1.email.value){
            isPass = false;
            alert('email 沒填');
        }
        if(! document.form1.password.value){
            isPass = false;
            alert('密碼沒填');
        }

        if(isPass){
            btn.hide();
            my_alert.hide();

            $.post('login_api.php', $(document.form1).serialize(), function(data){
                console.log(data);
                my_alert.show();
                if(data.success){
                    my_alert.attr('class', 'alert alert-success');
                    my_alert.html("登入完成,請等待頁面跳轉");
                    setTimeout(function() {
                        location.href="./order-member.php";
                    },1500);
                } else {
                    my_alert.attr('class', 'alert alert-danger');
                    btn.show();
                    my_alert.html("帳號或密碼錯誤");
                }
            }, 'json');

        }

        return false;
    }


</script>
<?php include __DIR__. '/__htmlfoot.php'; ?>
