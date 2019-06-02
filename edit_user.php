<?php require __DIR__. '/__connect_db.php';
$page_name = 'edit_user';

if(!isset($_SESSION['user'])){
    header("Location: ./login.php");
    exit;
}


?>

<?php include __DIR__. '/__htmlhead.php'; ?>
<title>編輯會員資料</title>
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

a{
    text-decoration: none;
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
.cont_btn_enter_box {
    margin: 0 auto;
    width: 200px;
    height: auto;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
}
.cont_btn_enter{
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
.cont_btn_enter a{
    color:#ff931e;
    padding: 4px 10px;
}
.cont_btn_enter:hover{
    background-color: #ff931e;
    transition: all .5s;
}
.cont_btn_enter:hover a{
    color:#fff;
    transition: all .5s;
}
.btn_h2{
    text-align: center;
    width: 100%;
    height: 100px;
    line-height:100px;
}




.bg{
    display:none;
    position:fixed;
    width:100%;
    height:100%;
    background-color:rgba(0,0,0,.8);
    z-index:9999;
    top:0;
    left:0;
}
.content{
    display:none;
    width:450px;
    height:350px;
    position:fixed;
    border:2px solid #ff931e;
    top:50%;
    margin-top:-150px;
    background:#fff;
    z-index:99999;
    left:50%;
    margin-left:-250px;
}

</style>

<?php include __DIR__. '/_navbarWithMember.php'; ?>

<div class="member_container">
        <div class="member">
        <h2>編輯會員資料</h2>
        </div>

<!--        <div id="my-alert" class="alert alert-success" role="alert"></div>-->


        <div class="con-member">
           <div class="member-box">
               <form name="form1"  method="post" onsubmit="return checkForm()">

                   <div class="form-group input-box">
                       <label for="name"><span class="hint">*</span>姓名</label>
                       <input type="text" class="form-control iput1" id="name" name="name"
                              value="<?= $_SESSION['user']['name'] ?>"
                              maxlength="4" placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="ic"><span class="hint">*</span>身分證字號</label>
                       <input type="text" class="form-control iput1" id="ic" name="ic"
                              value="<?= $_SESSION['user']['ic'] ?>"
                              maxlength="10" placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="email"><span class="hint">*</span>帳號(信箱)</label>
                       <input type="text" class="form-control iput1" id="email" name="email"
                              value="<?= $_SESSION['user']['email'] ?>"
                              placeholder="">

                   </div>
                   <div class="form-group input-box">
                       <label for="password"><span class="hint">*</span>密碼</label>
                       <input type="password" class="form-control iput1" id="password" name="password" placeholder="">

                   </div>

                   <div class="form-group input-box">
                       <label for="phone"><span class="hint">*</span>手機</label>
                       <input type="text" class="form-control iput1" id="phone" name="phone"
                              value="<?= $_SESSION['user']['phone'] ?>"
                              placeholder="">

                   </div>


                   <div class="btn-control">
                       <button type="submit" class="btn_enter">送出</button>
                   </div>
                   <div id="my-alert" class="alert alert-success" role="alert"></div>

               </form>
           </div>
        </div>
</div>
<div class="bg"></div>
<div class="content">
    <h2 class="btn_h2">會員中心</h2>
    <div class="cont_btn_enter_box">
        <div class="cont_btn_enter"><a href="order-member.php">尚未結帳訂單</a></div>
        <div class="cont_btn_enter"><a href="edit_user.php">編輯會員資料</a></div>
        <div class="cont_btn_enter"><a href="history.php">歷史訂單查詢</div></a>
    </div>
</div>
<?php include __DIR__. '/_footer.php'; ?>


<script>
    var my_alert = $('#my-alert');

    var btn = $('form button');

    function checkForm(){
        var isPass = true;

        if(! document.form1.password.value){
            isPass = false;
            alert('密碼沒填');
        }

        if(isPass){
            btn.hide();
            my_alert.hide();

            $.post('edit_user_api.php', $(document.form1).serialize(), function(data){
                console.log(data);
                my_alert.show();
                if(data.success){
                    my_alert.attr('class', 'alert alert-success');
                    my_alert.html("編輯完成");
                    setTimeout(function() {
                        location.href="./edit_user.php";
                    },1000);

                    $('#name').text(data.post.name);

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
<script>
    $(function(){
        $('.booking_lightbox').click(function(){
            $('.bg').fadeIn(200);
            $('.content').fadeIn(600);
        });
        $('.bg').click(function(){
            $('.bg').fadeOut(800);
            $('.content').fadeOut(800);
        });
    });
</script>


<?php include __DIR__. '/__htmlfoot.php'; ?>
