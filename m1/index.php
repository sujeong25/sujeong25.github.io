<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./main.css">
   <link rel="stylesheet" type="text/css" href="XEIcon/xeicon.min.css">
   <script src="http://code.jquery.com/latest-jquery.js"></script>
    <title>중앙대학교</title>
    <style>
/*  */
    .con_box:after{content: ""; display:table; clear: both;}
    .slide_box:after{content: ""; display: table; clear: both;}
    .tap_box:after{content: ""; display: table; clear: both;}
    .con_box li a{text-align: center;}
    .con_box li a i{width: 100px; margin: 0 auto;}
    .con_box span{display: block; text-align: center; color: black; width: 100px; }
    .con_box li{width: 100px;}
    .fast_ico{font-size:58px; color: black;}
    .slide_box{position: relative; margin-top: 80px;}
    .slide_box img{width: 90vw; display: block; margin: 0 auto;}
/*   notice    */
    .tit{display: block; text-align:center; width: 120px; font-weight: bold; line-height: 50px; font-size: 24px; color:#003399; margin-top: 60px;}
    .slide_tit{position: absolute; font-size: 40px; text-align: center; font-weight: bold; text-shadow: 1px 1px 1px gray;}
    #ra1:checked~.notice{display: block;}
    #ra2:checked~.news{display: block;}
    .notice{width: auto; margin: 0 auto; position: relative; display: none;}
    .notice:after{content: ""; display: table; clear: both;}
    .notice li{width: auto; height: auto; float: left; margin-top: 60px; position: relative;}
    .notice img{display: block; height: auto; width: 100%;}
    .news{width: auto; height: auto; position: relative; display: none;}
    .news:after{content: ""; display: table; clear: both;}
    .news li{float: left; margin-bottom: 30px;}
    .news img{width:100%; height: auto; display: block;}
    .hd h2{text-align: center;}
    .ft{ width: 100%; background:#003399; position: relative; max-width: 100%; height:auto;}
/*    .ft_wrap{width: 100vw;height: 100px; background: black; }*/
    .ft p{text-align: center; color:white;line-height: 30px; font-size: 14px;}
    #ra1, #ra2{display: none;}
    .la_box{width:90vw; margin: 50px auto;position: relative; height: 80px;}
    .la2_box{width: 90vw; margin: 0 auto; text-align: centerl}
    .la_box label{display: block; float: left; width:45vw;height: 80px;font-size: 24px; line-height: 80px;text-align: center; color: white; background: #003399;}
    .la_box label:hover {color:#003399; background: white; font-weight: bold; transition: 0.4s;}
    .text{width: auto; margin: 10px auto;position: relative;}
    .text_tit{width: auto; margin: 0 auto; font-size: 20px; font-weight: bold; color:darkblue; margin-top: 20px;}
    .text2{width: auto; margin: 10px auto;position: relative;}
    .text_tit2{width: auto; margin: 0 auto; font-size: 20px; font-weight: bold; color:darkblue; margin-top: 20px;}
    .notice img, .news img{box-shadow: 4px 4px 4px 4px rgba(0,0,0,0.3); }
    /*    sche*/
    .sche{ width: 100%; margin: 0px auto; height: 30vh; text-align: center; padding-top: 5%; position: relative;}
    .sc_tit{font-size: 24px; font-weight: bold; text-align: center;margin-bottom: 30px; }
    .sche li{background-color:lightsteelblue;}
    .sche li a{color:midnightblue; line-height: 50px; font-size: 18px; font-weight: bold; }
    .sc_ico{font-size: 50px; color:darkblue;line-height: 60px;}
    .hid_box{position: absolute; bottom: 120px;width: 100%; height: auto; text-align: center; color: white; font-weight: bold; }
    .hid_box li{background:rgba(0,0,0,0.4);}
    .hid_box {margin-top: 15px;}
    .s1{position: relative;}

       
/*    .hid_box li{position: absolute; background: red; top: 0; left: 0;}*/
 
    
        
        
/*        mobile*/
     @media screen and (max-width:767px){
    .hd{height: 100px;}
    .con{width: 90%; margin: 0 auto;}
    .con_box{column-count:3;height: auto;}
    .con_box li{height: auto; }
    .notice{column-count: 1; }
    .news{column-count: 1;}
    .sche{column-count: 2; height: 400px;}
    .sche li{height: 120px; }
    .s2, .s4{margin-top: 20px;}
    .hid_box{column-count: 2; height:300px;}
    .hid_box li{height: 140px;}

    }
/*        태블릿*/
    @media screen and (min-width:960px) and (max-width:1024px){
        .con_box{display: none;}
    .hd{height: 150px;}
    .con{width: 90%; margin: 0 auto;}
    ul.con_box{column-count: 8; height: 50px;}
    .con_box li{float: left;}
    .news{column-count: 2; width: calc(100%-200px); margin: 0 auto;}
    .la2_box{width: 40vw; margin: 0 auto;}
    .sche{column-count: 4;}
    } 
/*        데스크탑*/
     @media screen and (min-width:960px){
    .hd{height: 130px;}
    .con{width: 90%; margin: 0 auto;}
/*    .section{width: 90%; margin: 0 auto;}*/
    .la_box label{display: block; float: left; width:45vw;height: 80px;}
    .con_box{column-count:8; margin: 50px auto; height: auto; width:70%; margin: 0 auto;}
/*    .con_box li{padding-left: 100px;}*/
    .con_box li{float: left;position: relative; padding-left: 120px;}
    .notice{column-count: 2; width: 80vw; margin: 0px auto;}
    .news{column-count: 3;}       
    .notice img{display: block; height: auto; width: 100%;}
    .news img{width: 80%; margin-left: 70px;}
    .text_tit{width: 100%; margin: 0 auto;font-size: 20px; font-weight: bold; color:darkblue; margin-top: 30px;}
    .text{width: 100%; margin: 10px auto;position: relative;}
    .text_tit2{width: 64%; margin: 20px auto;position: relative; font-size:19px;}
    .text2{width: 64%; margin: 10px auto;position: relative;}
    .sche{column-count: 4; width: 100%; margin: 0 auto;}
    .hid_box1{column-count:1; width:420px; height: 110px; bottom: 30px; left:0px; }
    .hid_box2{column-count: 1; width: 420px; height: 110px; left: 435px; bottom: 30px;}
    .hid
    

    
}
    </style>
    <script src="http://code.jquery.com/jquery-latest.js"></script>
    <script>
        $(document).ready(function(){
         $(".xi-bars").click(function(){
            $(".menu").slideToggle(500);
                     });
        $(".xi-profile-o").click(function(){
            $(".login").slideToggle(500);
        });
        $(".xi-close-circle-o").click(function(){
            $(".login").slideUp(500);
        });

                    });
    </script>
</head> 
<body>
   <div class="wrap">
    <header class="hd">
       <div class="logo"><a href=""><img src="./img/logo.png" alt=""></a></div>
        <nav class="gnb">    
            <div class="tap"><i class="xi-bars"></i></div>
            <div class="menu">
                <ul class="menu_box">
                    <li><a href="sub1.html">대학소개</a></li>
                    <li><a href="">입학</a></li>
                    <li><a href="">교육</a></li>
                    <li><a href="">연구산학</a></li>
                </ul>
            </div>
            <div class="login_tap"><i class="xi-profile-o"></i></div>
            <div class="login">
                <div id="form1">
                 <form action="" method="" name="frm1" id="frm01" autocomplete="on">
                 <fieldset class="field">
                  <i class="xi-close-circle-o"></i>
                <legend>로그인</legend>
                <label for="m_id">아이디</label> : 
                <input type="text" id="m_id" name="id" title="" size="30" maxlength="10" tabindex="1" placeholder="" autofocus required pattern="[a-zA-Z0-9]{4,10}"><br><br>
                <label for="m_pw">비밀번호</label> : 
                <input type="password" id="m_pw" name="pw" title="" autocomplete="off" required pattern="[a-zA-Z0-9]{10}"><br>
                  <div class="lc">
                 <input type="submit" value="로그인" class="">
                 <input type="reset" value="취소">
                 </div>
                </fieldset>
                </form>   
                </div>
                <?php
require_once '../preset.php';
include '../header.php';
?>
        로그인 페이지<br />
        <hr />

         <form name="login_form" method="post" action="./login_check.php" >
            아이디 : <input type="text" name="user_id" /><br />
            비밀번호 : <input type="password" name="user_pass" /><br />
            <input type="submit" value="로그인" />
        </form>    
<?php
    include '../footer.php';
?>

            </div>
        </nav>
    </header>
    <section class="con">
      <ul class="con_box">
          <li><a href=""><i class="fast_ico xi-alarm-clock"></i><span>시간표</span></a></li>
          <li><a href=""><i class="fast_ico xi-calendar-check"></i><span>학사일정</span></a></li>
          <li><a href=""><i class="fast_ico xi-map-o"></i><span>캠퍼스맵</span></a></li>
        <li><a href=""><i class="fast_ico xi-comment-o"></i></a><span>커뮤니티</span></li>
        <li><a href=""><i class="fast_ico xi-paper"></i></a><span>포털사이트</span></li>
        <li><a href=""><i class="fast_ico xi-book-o"></i></a><span>학사정보</span></li>
      </ul>
      
      <ul class="slide_box">
         <p class="slide_tit"></p>
          <li><a href=""><img src="./img/slide1.jpg" alt=""></a></li>
          <li><a href=""><img src="" alt=""></a></li>
          <li><a href=""><img src="" alt=""></a></li>
          <li><a href=""><img src="" alt=""></a></li>
      </ul>
       <input type="radio" name="ra" id="ra1" checked>
       <input type="radio" name="ra" id='ra2'>
       <div class="la_box">
       <ul class="la2_box">
       <label for="ra1"><i class="xi-group" class="la1"></i>학우소식</label>
       <label for="ra2" class="la2"><i class="xi-users-o"></i>학과소식</label>
       </ul>
       </div>
      <ul class="notice">     
          <li class="left"><a href=""><img src="./img/img1.jpg" alt=""></a>
            <p class="text_tit">산업디자인과 재학생들, </p>
            <p class="text">
           구청장 표창장 수상.   
          </p>
          </li>
          <li class="right"><a href=""><img src="./img/img2.jpg" alt=""></a>
            <p class="text_tit">나만의 색을 담는 래퍼,</p>
          <p class="text">
           조미혜(브라운아이드걸스 미료, 광고홍보학과99) 동문을 만나다.</p>
          </li>
      </ul>
    <p class="tit"></p>
    <ul class="news">
        <li><a href=""><img src="./img/img3.jpg" alt=""></a>
            <p class="text_tit2">전자전기공학부 연구팀,</p>
            <p class="text2">차세대 고성능 이미지 센서<br>핵심 기술 개발
          </p>
        </li>
        <li><a href=""><img src="./img/img4.jpg" alt=""></a>
         <p class="text_tit2">2019 KUSF 대학축구 U-리그<br>왕중왕전 우승
          </p>
        </li>
        <li><a href=""><img src="./img/img5.jpg" alt=""></a>
        <p class="text_tit2">산학협력단,
        <p class="text2">2019년 산학협력 EXPO에서 대상 수상 및 총 6개 분야 수상</p>

        </li>
    </ul>
    <p class="sc_tit">주요일정</p>
    <ul class="sche">
        <li class="s1"><a href="">동계계절학기</a><br><i class="sc_ico xi-school"></i></li>
       
        <li  class="s2"><a href="">2학기성적조회</a><br><i class="sc_ico xi-file-check-o"></i></li>

        <li class="s3"><a href="">2학기성적정정</a><br><i class="sc_ico xi-exchange"></i></li>
       
        <li  class="s4"><a href="">강의평가실시</a><br><i class="sc_ico xi-file-text-o"></i></li>
        
    </ul>
<!--
    <ul class="hid_box">
         <li class="hid_box1"><p class="">19.12.23(Mon) ~ <br>
        20.01.15(Wed)</p></li>
            <li class="hid_box2"><p class="">19.12.27(Fri) ~ <br>
         20.01.02(Thu)</p></li>
          <li class="hid_box3"><p class="">19.12.30(Mon) ~ <br>
        20.01.02(Thu)</p></li>
        <li class="hid_box4"><p>19.12.02(thu)~ <br>
        12.26(thu)</p></li>
    </ul>
-->
    </section>
    <footer class="ft">
        <div class="ft_wrap">
            <p>Copyright 2018 Chung-Ang University All Rights Reserved. Contact Us</p>
            <p>개인정보처리방침사이버감사실<br>(부당행위 신고센터)<br>이메일수집거부</p>
        </div>
    </footer>
    </div>
</body>
</html>