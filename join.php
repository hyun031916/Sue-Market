<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>회원가입</title>
        <!--BootStrap-->
        <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
       <!-- 합쳐지고 최소화된 최신 CSS -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

       <!-- 부가적인 테마 -->
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

       <!-- 합쳐지고 최소화된 최신 자바스크립트 -->
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </head>
    <body>
        <article class="container">
            <div class="page-header">
                <div class="col-md-6 col-md-offset-3">
                <h3>회원가입 Form</h3>
                </div>
            </div>
            <div class="col-sm-6 col-md-offset-3">
                <form role="form" method="POST" action="join_action.php">
                    <div class="form-group">
                        <label for="inputName">아이디</label>
                        <input type="text" class="form-control" name="userId" id="inputName" placeholder="이름을 입력해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">비밀번호</label>
                        <input type="password" class="form-control" name="userPwd" id="inputPassword" placeholder="비밀번호를 입력해주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputPasswordCheck">비밀번호 확인</label>
                        <input type="password" class="form-control" name="userPwd2" id="inputPasswordCheck" placeholder="비밀번호 확인을 위해 다시한번 입력 해 주세요">
                    </div>
                    <div class="form-group">
                        <label for="InputEmail">이메일 주소</label>
                        <input type="email" class="form-control" name="email" id="InputEmail" placeholder="이메일 주소를 입력해주세요">
                    </div>
                    <div class="form-group">
                        <label for="inputMobile">전화 번호</label>
                        <input type="tel" class="form-control" name="tel" id="inputMobile" placeholder="휴대폰번호를 입력해 주세요">
                    </div>
                    <div class="form-group"></div>
                        <label for="city">지역</label>
                        <select name="city">
                            <option value="서울시">서울시</option>
                            <option value="경기도">경기도</option>
                            <option value="부산광역시">부산광역시</option>
                            <option value="대구광역시">대구광역시</option>
                            <option value="인천광역시">인천광역시</option>
                            <option value="광주광역시">광주광역시</option>
                            <option value="대전광역시">대전광역시</option>
                            <option value="울산광역시">울산광역시</option>
                            <option value="세종광역시">세종광역시</option>
                            <option value="강원도">강원도</option>
                            <option value="경상도">경상도</option>
                            <option value="전라도">전라도</option>
                            <option value="충청도">충청도</option>
                            <option value="제주도">제주도</option>
                        </select>
                    </div>

                    <div class="form-group">
                    <label>약관 동의</label>
                    <div data-toggle="buttons">
                    <label class="btn btn-primary active">
                    <span class="fa fa-check"></span>
                    <input id="agree" type="checkbox" autocomplete="off" checked>
                    </label>
                    <a href="#">이용약관</a>에 동의합니다.
                    </div>
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" id="join-submit" class="btn btn-primary">
                            회원가입<i class="fa fa-check spaceLeft"></i>
                        </button>
                        <button type="submit" class="btn btn-warning">
                            가입취소<i class="fa fa-times spaceLeft"></i>
                        </button>
                    </div>
                </form>
            </div>

        </article>
    </body>
</html>