<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/heroic-features.css" rel="stylesheet">
    <!-- 스타일 -->
    <link href="../assets/css/bootstrap-ko.css" rel="stylesheet">
    <style type="text/css">
      body {
        padding-top: 20px;
        padding-bottom: 60px;
      }

      /* 전체 내용을 감쌈 */
      .container {
        margin: 0 auto;
        max-width: 1000px;
      }
      /* .container>hr {
        margin: 60px 0;
      } */
      .muted img{
        align:right;
        weight:30px;
        height:30px;
        float:right;
        margin: 3px;
      }

      /* 핵심 마케팅 문구와 가입 버튼 */
      .jumbotron {
        margin: 80px 0;
        text-align: center;
      }
      .jumbotron h1 {
        font-size: 100px;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 24px;
        line-height: 1.25;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }

      /* 부수적인 마케팅 내용 */
      .marketing {
        margin: 60px 0;
      }
      .marketing p + h4 {
        margin-top: 28px;
      }


      /* 탐색막대 링크가 .navbar 공간을 모두 채우도록 변경 */
      .navbar .navbar-inner {
        padding: 0;
      }
      .navbar .nav {
        margin: 0;
        display: table;
        width: 100%;
      }
      .navbar .nav li {
        display: table-cell;
        width: 1%;
        float: none;
      }
      .navbar .nav li a {
        font-weight: bold;
        text-align: center;
        border-left: 1px solid rgba(255,255,255,.75);
        border-right: 1px solid rgba(0,0,0,.1);
      }
      .navbar .nav li:first-child a {
        border-left: 0;
        border-radius: 3px 0 0 3px;
      }
      .navbar .nav li:last-child a {
        border-right: 0;
        border-radius: 0 3px 3px 0;
      }
      footer{
        width:100%; height:18.8%; background-color: cornflowerblue; float:left;  
        padding:1.6%;
      }
      .f1{
        font-family:"Goudy Stout";
        font-size:25px;
        color:white;
        float:left;
        padding:10px;
      }
      .f2{
        font-family: "Stencil";
        padding:20px;
        float:left;
      }
      .f3{
        padding:10px;
        font-size:12px;
        font-family: 'Noto Sans KR', sans-serif;
      }
      .clear{
        clear:both;
      }
      .img{
        width:20px;
        height:20px;
        float:right;
        margin:40px;
      }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    
		<!-- <link href="bootstrap-4.5.3-dist/css/bootstrap.css" rel="stylesheet"> -->
		<link href="bootstrap-4.5.3-dist/css/basket.css" rel="stylesheet">
		<link href="bootstrap-4.5.3-dist/css/ord.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <header>
        <h3 class="muted">S Market
          <img src="clock.png"></img>
          <img src="img/shopping basket.png"></img>
          <a  href="login_form.php"><img src="img/login.png"></img></a>
        </h3>

      </header>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="#">S Market</a>
        <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="main.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Board</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="login_form.php">login</a>
          </li>
          <?php 
          $userId = $_SESSION['userid'];
          $userPwd = $_SESSION['userpwd'];
          if(!isset($userId)){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="login_form.php">Log In</a>
          </li>
          <?php } if($userId=='admin'){ ?>
          <li class="nav-item">
            <a class="nav-link" href="member_info.php">MemberInfo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="shop_list.php">ItemList</a>
          </li>
          <?php } ?>

        </ul>
        </div>
      </nav>
        <!-- <div class="navbar">
          <div class="navbar-inner">
            <div class="container"> -->
      <div class="btn-group btn-group-justified">
      <a href="#" class="btn btn-default">대문</a>
      <a href="#" class="btn btn-default">프로젝트</a>
      <a href="#" class="btn btn-default">서비스</a>
      <a href="#" class="btn btn-default">다운로드</a>
      <a href="#" class="btn btn-default">소개</a>
      <a href="#" class="btn btn-default">연락처</a>
      </div>
            <!-- </div>
          </div>
        </div> -->
      <!-- Jumbotron -->


      <!-- Jumbotron Header -->
    <header class="jumbotron my-4">
      <h1 class="display-3">나 혼자 잘 먹는다!</h1>
      <p class="lead">담는 순간 SNS 속 감성 혼밥 연출. 나만의 특별한 홈테이블, 감성을 담은 한 끼, 일상의 소소한 즐거움</p>
      <a class="btn btn-large btn-success" href="http://rpp.gmarket.co.kr/?exhib=41712">바로가기</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">
      <a href="http://item.gmarket.co.kr/Item?goodscode=1857891499&ver=637350477738038941">
      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="./img/cap.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">파타고니아 모자 4종</h4>
            <p class="card-text">유기농면, 메쉬 백 조절 식 스냅 클로저 아이코닉 로고 자수</p>
          </div>
          <div class="card-footer">
            <div class="btn btn-primary">29,900원</div>
          </div>
        </div>
        </a>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <a href="http://item.gmarket.co.kr/Item?goodscode=1782731869&ver=637350488972434744">
        <div class="card h-100">
          <img class="card-img-top" src="./img/clothes.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">가을 신상 원피스</h4>
            <p class="card-text">빌리지-스프라이트롱 원피스 COLOR-PINK, BLUE/FABLIC-폴리혼방</p>
          </div>
          <div class="card-footer">
            <div class="btn btn-primary">33,000원</div>
          </div>
        </div>
      </a>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
      <a href="http://item.gmarket.co.kr/Item?goodscode=1674062770&ver=637350496479391718">
        <div class="card h-100">
          <img class="card-img-top" src="./img/soymilk.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">뼈로가는칼슘두유 담백한맛</h4>
            <p class="card-text">뼈로 가는 칼슘 두유가 매일두유 뼈로가는 고칼슘으로 패키지가 순차적으로 변경됩니다. 더욱 새롭고 맛있어진 제품이니 안심하고 구매하세요.</p>
          </div>
          <div class="card-footer">
            <div class="btn btn-primary">24,300원</div>
          </div>
        </div>
    </a>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
      <a href="http://item.gmarket.co.kr/Item?goodscode=911450468&ver=637350496479391718">
        <div class="card h-100">
          <img class="card-img-top" src="./img/perfume.jpeg" alt="">
          <div class="card-body">
            <h4 class="card-title">코코도르 디퓨저</h4>
            <p class="card-text">[코코도르] 디퓨저 리필액 세트/방향제/인테리어 선물세트</p>
          </div>
          <div class="card-footer">
            <div class="btn btn-primary">29,900원</div>
          </div>
        </div>
    </a>
      </div>

    <!-- </div>
      <div class="jumbotron">
        <h1>마케팅 문구!</h1>
        <p class="lead">그리스의 천문학자. 알렉산드리아 도서관에서 일했으며, 세계에서 제일 먼저 지동설을 믿은 사람으로 전해지고 있다. 또한 기하학을 응용하여 태양이나 달의 크기를 처음으로 계산하였다.</p>
        <a class="btn btn-large btn-success" href="#">바로 시작하세요</a>
      </div> -->

      <hr>

      <!-- 열들이 있는 행 예제 -->
      <div class="row-fluid">
        <div class="span4">
          <h2>제목</h2>
          <p>보건복지가족부장관 또는 시·도지사는 이 법에 따른 권한의 일부를 대통령령으로 정하는 바에 따라 시·도지사 또는 시장·군수·구청장에게 위임할 수 있다. 필요시 보육시설 유형과 지역적 여건을 고려하여 그 기준을 다르게 정할 수 있다. </p>
          <p><a class="btn" href="#">자세히 보기 <span class="en-font-family">&raquo;</span></a></p>
        </div>
        <div class="span4">
          <h2>제목</h2>
          <p>보건복지가족부장관 또는 시·도지사는 이 법에 따른 권한의 일부를 대통령령으로 정하는 바에 따라 시·도지사 또는 시장·군수·구청장에게 위임할 수 있다. 필요시 보육시설 유형과 지역적 여건을 고려하여 그 기준을 다르게 정할 수 있다. </p>
          <p><a class="btn" href="#">자세히 보기 <span class="en-font-family">&raquo;</span></a></p>
       </div>
        <div class="span4">
          <h2>제목</h2>
          <p>공제회에 가입한 보육시설은 공제사업의 수행에 필요한 출자금 등을 공제회에 납부하여야 한다. 공제회의 회원자격, 임원에 관한 사항 및 출자금의 부담기준에 관한 사항은 정관으로 정한다. 의료기관의 장은 적절한 조치를 취하여야 한다.</p>
          <p><a class="btn" href="#">자세히 보기 <span class="en-font-family">&raquo;</span></a></p>
        </div>
      </div>

      <hr>
      <footer>
        <div class="f1">S MARKET</div>
        <a href="https://www.samsungsvc.co.kr/reserve/cenSearch.do?method=list" target="ABC"><div class="f2">Service center</div></a> &nbsp;
        <a href="https://account.samsung.com/membership/terms/termscontents"  target="ABC"><div class="f2">Terms of Use</div></a> &nbsp;
        <a href="https://www.samsung.com/sec/info/privacy_new/" target="ABC"><div class="f2">Privacy Policy</div></a> &nbsp;
        <br><br>
        <div class="clear"></div>
        <div class="f3"><span style="color:red">(주)수IT</span>&nbsp;&nbsp;Managing Director : KimSuHyeon  &nbsp;|&nbsp;  Representative email : s2019s26@e-mirim.hs.kr  &nbsp;|&nbsp;
          Company Registration Number : We do not have.  &nbsp;|&nbsp;  Service center : 010-2357-9607</div>
      </footer>

    </div> <!-- /container -->

    <!-- 자바스크립트
    ================================================== -->
    <!-- 페이지를 빨리 읽어들이도록 문서 마지막에 배치 -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
  </body>
</html>