<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="responsive.css">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<title>Lotus</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "xudienloan";
		$password = "ngocngo123";
		$dbname = "lotus";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * from question where parent_id = 0";
		$result = $conn->query($sql);

			
	?>
	<main>
		<div class="wrapper">
			<!-- Header -->
			<div class="box-head">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="row-head">
								<a href="home.php" class="link-logo-top link-logo-top-l">
									<img src="images/logo.png" class="logo-lotus">
								</a>
								<nav class="navbar navbar-expand-lg navbar-light ">
									<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
										<span class="navbar-toggler-icon"></span>
									</button>

									<div class="collapse navbar-collapse navbar-collapse-mn" id="navbarNavDropdown">
										<ul class="navbar-nav">
											<li class="nav-item">
												<a class="nav-link " href="/portal/creators.html">Nhà sáng tạo
												nội dung</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/portal/chinh-luan.html">Nguồn chính luận</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/portal/community.html">Nhóm cộng đồng</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/portal/developer.html">Developers</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/tuyen-dung.html">Tuyển dụng</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/portal/quy-dinh-cung-cap-va-su-dung.html">Quy định</a>
											</li>
											<li class="nav-item">
												<a class="nav-link " href="/portal/dieu-khoan-token.html">Điều khoản Token</a>
											</li>
											<li class="nav-item">
												<a class="nav-link link-last-mobile" href="https://lotus.vn/w/">Lotus Web</a>
											</li>
										</ul>
									</div>
								</nav>

								<a href="/portal" class="link-logo-top link-logo-top-r">
									<img src="images/logo.png" class="logo-lotus">
								</a>
								<nav class="navbar navbar-expand-lg navbar-light " style="float: right;margin-right: 0px;width: auto;position: relative;">
									<div class="collapse navbar-collapse" id="navbarNavDropdown">
										<ul class="navbar-nav">
											<li class="nav-item">
												<a style="border: none !important;padding-right: 9px;padding-left: 0;" class="nav-link link-last" href="https://lotus.vn/w/"><img src="images/lotus-web.png" style="width: 19px;margin-right: 5px;opacity: 0.5;margin-top: -4px;">Lotus Web</a>
											</li>
										</ul>
									</div>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>	

			<div class="box-detail-help">
				<div class="container">
					<div class="row">
						<div class="col-sm-4 col-md-3">
							<div class="main-detail-left">
								<?php
									while($row = $result->fetch_assoc()) {
									 $sql2 = "SELECT * from question WHERE parent_id = ".$row["id"];
						    		$result2 = $conn->query($sql2);
								?>	
								<div class="list-cat-help <?php if($row['id'] == $_GET['parent_id']) echo 'list-cat-help-ac' ?>">
									<a class="title-cat-help collapsed" data-toggle="collapse" href="#lst-qs<?php echo $row["id"] ?> "><span>
										<?php echo $row["name"]?>
									</span></a>
									<div class="list-link-qs-dt collapse <?php if($row['id'] == $_GET['parent_id']) echo 'show' ?>" id="lst-qs<?php echo $row["id"] ?>">
										<?php
											while($row2 = $result2->fetch_assoc()) {
										?>
										<a href="?id=<?php echo $row2["id"].'&parent_id='.$row2['parent_id'] ?>" class="link-qs-dt <?php if($row2['id'] == $_GET['id']) echo 'active' ?> "><?php echo $row2["name"] ?></a>
										<?php
											}
										?>
									</div>
								</div>
								<?php
									}
								?>
							</div>
						</div>
						<div class="col-sm-8 col-md-9">
							<div class="main-detail-right">
								<?php
									$sql3 = "SELECT * FROM answer WHERE question_id = ".$_GET["id"];
						    		$result3 = $conn->query($sql3);
						    		while($row3 = $result3->fetch_assoc()) {
								?>
								<div class="title-help-detail"><?php echo $row3["name"]; ?></div>
								<div class="desc-help-detail">
									<?php
										echo $row3["content"];
									?>
								</div>	
								<?php

									}
								?>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="box-footer">
				<div class="container ">
					<div class="row row-footer">
						<div class="col-12 col-md-7  col-lg-8  ft-mobile">
							<a href="#">
								<img src="images/logo-footer.png" class="logo-lotus-ft">
							</a>
							<span class="sum-ft-lotus ">Lotus là mạng xã hội do người Việt phát triển, lấy nội dung và trải nghiệm người dùng làm trọng tâm.
							</span>
						</div>

						<div class="col-md-7  col-lg-8  pc">
							<a href="#">
								<img src="images/logo-footer.png" class="logo-lotus-ft">
							</a>
							<div class="sum-ft-lotus pc">Lotus là mạng xã hội do người Việt phát triển, <br class="d-none d-lg-block">lấy nội dung và trải nghiệm người dùng làm trọng tâm.
								<div class="menu_link">
									<a href="/portal/help.html">Hướng dẫn sử dụng</a>
									<a style="margin-left: 20px" href="/portal/chinh-sach-bao-mat.html">Chính sách bảo mật</a>
								</div>
							</div>
						</div>

						<div class="col-12 col-md-5 col-lg-4   row-pw ft-mobile">
							<div class="col-logo">
								<div class="pw-bizfly-prdt-vcc">
									<div class="pw-bizfly">
										<span>Marketing<br>Portal by</span>
										<img src="images/logo-bizfly.png">
									</div>
									<div class="prdt-of-vcc">Một sản phẩm của VCCorp</div>
								</div>
								<div class="pw-bizfly-prdt-vcc1">
									<div class="pw-bizfly pw-bizflyvc">
										<p>Phát triển bởi</p>
										<img src="images/logo-vcc.png" class="log-vcc">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

						<div class="col-md-5 col-lg-4   row-pw  pc ">
							<div class="col-logo">
								<div class="pw-bizfly-prdt-vcc">
									<div class="pw-bizfly">
										<span>Marketing<br>Portal by</span>
										<img src="images/logo-bizfly.png">
									</div>
									<div class="prdt-of-vcc">Một sản phẩm của VCCorp</div>
								</div>
								<div class="pw-bizfly-prdt-vcc1">
									<div class="pw-bizfly pw-bizflyvc">
										<p>Phát triển bởi</p>
										<img src="images/logo-vcc.png" class="log-vcc">
									</div>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
			<a href="javascript:void(0)" id="backtop" class="back-top" style="display: block;">TOP</a>
		</div>
	</main>
</body>
<!-- Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script>	
	var lastScrollTop = 0;
	$(document).ready(function () {
		$(window).scroll(function () {
			var st = $(this).scrollTop();
			if (st > lastScrollTop || st < 60) {
            //down
            $('#backtop').hide();
        } else {
            //up
            $('#backtop').show();
        }
        lastScrollTop = st;
    });
		$('#backtop').click(function () {
			$('html, body').animate({scrollTop: 0}, 'slow');
			return false;
		});
	});
</script>
</html>
