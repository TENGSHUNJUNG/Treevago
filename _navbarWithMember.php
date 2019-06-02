<div class="nav">
    <div class="main_menu">
        <a href="treevago_index.php"><div class="logo"></div></a>
        <div class="menu_01">
            <ul class="clearfix">
                <li><a  href="treevago_room.php">房型介紹</a>
                    <ul class="sub_nav sub_transition">
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=1">BONBIBI</a></li>
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=2">BURL</a></li>
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=3">NEST</a></li>
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=4">TRILLIUN</a></li>
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=5">TEMPO</a></li>
                        <li><a class="sub_transition" href="/treevago/treevago_roomdetail.php?sid=6">CEDAR</a></li>
                    </ul>
                </li>
                <li><a class="transition" href="treevago_class_info.php">親子課程</a>
                    <ul class="sub_nav sub_transition">
                        <li><a class="sub_transition" href="treevago_class_info.php#sec1">捏捏塗鴉課</a></li>
                        <li><a class="sub_transition" href="treevago_class_info.php#sec2">小孩陶土課</a></li>
                        <li><a class="sub_transition" href="treevago_class_info.php#sec3">藝術美感培養</a></li>
                        <li><a class="sub_transition" href="treevago_class_info.php#sec4">親子藝術遊戲</a></li>
                    </ul>
                </li>
                <li><a class="transition" href="treevago_parkGuide.php">園區總覽</a>
                    <ul class="sub_nav sub_transition">
                        <li><a class="sub_transition" href="treevago_AfternoonTea.php">森林下午茶</a></li>
                        <li><a class="sub_transition" href="treevago_restaurant_info.php">異國饗食</a></li>
                        <li><a class="sub_transition" href="treevago_spa.php">精油SPA</a></li>
                        <li><a class="sub_transition" href="treevago_Traffic.php">交通資訊</a></li>
                    </ul>
                </li>
                <li><a href="treevago_activity.php">限時活動</a>
                    <?php if(isset($_SESSION['user'])): ?>
                <li class="booking booking_lightbox" ><a>歡迎,<?= $_SESSION['user']['name'] ?></a></li>
                <li class="booking2"><a href="sess_destroy.php" >登出</a></li>
                    <?php else: ?>
                </li>
                <li class="booking <?= $page_name=='login' ? 'active' : '' ?>"><a href="login.php" >登入</a></li>
                <li class="booking2 <?= $page_name=='register' ? 'active' : '' ?>"><a href="register.php" >註冊</a></li>
            </ul>
                    <?php endif; ?>
        </div><!--menu_01-->
        <div class="bar_box transition">
            <div class="bar bar1 transition"></div>
            <div class="bar bar2 transition"></div>
            <div class="bar bar3 transition"></div>
            <ul class="menu_page transition">
                <li class="menu_page_li"><a href="treevago_room.php">房型介紹</a></li>
                <li class="menu_page_li"><a href="treevago_class_info.php">親子課程</a></li>
                <li class="menu_page_li"><a href="treevago_park_rwd.php">園區總覽</a></li>
                <li class="menu_page_li"><a href="treevago_activity.php">限時活動</a></li>
                <li class="menu_page_li"><a href="member_centre.php">會員中心</a></li>
            </ul>
        </div>
    </div>
</div><!--navbar-->