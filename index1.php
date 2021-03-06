<!DOCTYPE html>
<html lang="ko">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>엔터트립</title>
	<!-- 구글 폰트 -->
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+KR:wght@100;300;400;500;700;900&display=swap"
		rel="stylesheet">
	<!-- 페비콘 가져오기 -->
	<link rel="icon" type="image/png" href="imgs/favicon.png">
	<!-- 아이콘 가져오기 -->
	<script src="https://kit.fontawesome.com/08acca0d45.js" crossorigin="anonymous"></script>
	<!-- 부트스트랩 CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- 헤더 CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- 제이쿼리 -->
	<script src="js/jquery-3.5.1.min.js"></script>
	<!-- 부트스트랩 JS -->
	<script src="js/bootstrap.min.js"></script>
	<!-- 메인 JS -->
	<script src="js/main.js"></script>
</head>

<body>
	<!-- 헤더 -->
	<header>
		<!-- 탑 컨테이너 -->
		<div class="container p-2">
			<div class="row justify-content-between align-items-center mx-auto">
				<!-- 검색창 -->
				<div class="col-md-4">
					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2 rounded-pill" type="text" placeholder="작품을 검색해보세요">
						<button class="btn btn-danger	my-2 my-sm-0 rounded-circle"><i class="fas fa-search"></i></button>
					</form>
				</div>
				<!-- 로고 -->
				<div class="logo d-flex justify-content-center align-items-center col-md-4">
					<a href="#"><img src="imgs/brand_logo.png" alt="엔터트립"></a>
				</div>
				<!-- 로그인 -->
				<div class="col-md-4 d-flex justify-content-end align-items-center">
					<div class="mr-2">
						<button type="button" class="btn btn-danger">로그인</button>
					</div>
					<div class="ml-2">
						<button type="button" class="btn btn-outline-danger">회원가입</button>
					</div>
				</div>
			</div>
		</div>	
		<!-- 네비게이션바 -->
		<nav class="navbar navbar-expand-lg mt-3">
			<div class="collapse navbar-collapse justify-content-center container">
				<ul class="navbar-nav text-center">
					<li class="nav-item mr-5 dropdown">
						<a class="nav-link dropdown-toggle px-0 py-0" href="#" data-toggle="dropdown">
							작품정보
						</a>
						<ul class="dropdown-menu country" aria-labelledby="navbarDropdownMenuLink">	
								<li><a class="dropdown-item" href="#"><img src="imgs/korea.png"> 한국</a></li>
								<li><a class="dropdown-item" href="#"><img src="imgs/japan.png"> 일본</a></li>
								<li><a class="dropdown-item" href="#"><img src="imgs/usa.png"> 미국</a></li>
								<li><a class="dropdown-item" href="#"><img src="imgs/china.png"> 중국</a></li>
								<li><a class="dropdown-item" href="#"><img src="imgs/world.png"> 기타</a></li>
						</ul>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link px-0 py-0" href="#">자유게시판</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link px-0 py-0" href="#">리뷰게시판</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link px-0 py-0" href="#">공지사항</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link px-0 py-0" href="#">고객센터</a>
					</li>
					<li class="nav-item mr-5">
						<a class="nav-link px-0 py-0" href="#">이용안내</a>
					</li>
				</ul>
			</div>
		</nav>
	</header>


	
	<!-- 배너 -->
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center  jt">
		<div class="col-md-12 mx-auto ">

				<!--Carousel Wrapper-->
<div id="carousel-example-2" class="carousel slide carousel-fade container" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src="imgs/제목을-입력해주세요.-1 (1).png"
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="imgs/머야머야.png"
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src="imgs/제목을-입력해주세요.-1 (1).png"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
    </div>
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
			<h1 class="display-5 font-weight-normal">화면에서만 보던 장소를 찾아 떠나는 여행</h1>
			<p class="lead font-weight-normal">엔터트립은 영화, 드라마, 예능, 애니메이션의 촬영장소를 찾아 볼 수 있는 곳입니다.</p>
		</div>
	</div>

	


	 <!-- 메인 -->
		<main>
			<div class="container">
				<!-- 공지사항 -->
				<div class="row">
					<div class="col-md-4">
						<div class="my-3 p-3 bg-white rounded shadow-sm">
							<h6 class="border-bottom border-gray pb-2 mb-0">공지사항</h6>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<small class="d-block text-right mt-3">
								<a href="#">더 보기</a>
							</small>
						</div>
					</div>

					<!-- 인기 게시글 -->
					<div class="col-md-4">
						<div class="my-3 p-3 bg-white rounded shadow-sm">
							<h6 class="border-bottom border-gray pb-2 mb-0">인기 게시글</h6>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<small class="d-block text-right mt-3">
								<a href="#">더 보기</a>
							</small>
						</div>
					</div>
				

				<!-- 인기 리뷰 -->
					<div class="col-md-4">
						<div class="my-3 p-3 bg-white rounded shadow-sm">
							<h6 class="border-bottom border-gray pb-2 mb-0">인기 리뷰</h6>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#007bff"></rect><text x="50%" y="50%" fill="#007bff"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#e83e8c"></rect><text x="50%" y="50%" fill="#e83e8c"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<div class="media text-muted pt-3">
								<svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
									preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
									<title>Placeholder</title>
									<rect width="100%" height="100%" fill="#6f42c1"></rect><text x="50%" y="50%" fill="#6f42c1"
										dy=".3em">32x32</text>
								</svg>
								<p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
									<strong class="d-block text-gray-dark">최종인 바보</strong>
									글 내용
								</p>
							</div>
							<small class="d-block text-right mt-3">
								<a href="#">더 보기</a>
							</small>
						</div>
					</div>
				</div>
			</div>

			<!--  -->


			<!-- 장르 -->
			<div class="container">
				<h2 class="text-center">다양한 장르</h2>
				<div class="row row-cols-1 row-cols-md-4">
					<div class="col mb-4">
						<div class="card h-100">
							<img src="imgs/movie.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">영화</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="imgs/각키쨩.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">드라마</h5>
								<p class="card-text">최종인</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="imgs/12.jpg" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">예능</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
					<div class="col mb-4">
						<div class="card h-100">
							<img src="imgs/너의이름은.jpg"" class="card-img-top" alt="...">
							<div class="card-body">
								<h5 class="card-title">애니메이션</h5>
								<p class="card-text">최종인 바보</p>
							</div>
						</div>
					</div>
				</div>
		</div>
		<!-- 장르 -->

		<!-- 장소 -->
		<section id="one">
			<div class="container wow fadeInUp animated" style="visibility: visible; animation-name: fadeInUp;">
				<h2 class="text-center">다양한 장소</h2>
				<div class="card-group">
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="imgs/겨울연가.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">촬영지</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="imgs/고로상.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">음식점</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
					<!-- card -->
					<div class="card">
						<img class="card-img-top img-fluid" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/331810/sample14.jpg"
							alt="Card image cap">
						<div class="card-block">
							<h4 class="card-title">놀거리</h4>
							<p class="card-text">최종인 바보</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- 분야 -->



		</main>



	<!-- 푸터 -->
<?php include "footer.html"?>
</body>

</html>