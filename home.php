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
	<!-- Header -->
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "Ngocngo123";
		$dbname = "lotus";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}
		
		$sql = "SELECT * from question where parent_id = 0";
		$result = $conn->query($sql);

		$parent = [];
		$child = [];
		while($row = $result->fetch_assoc()) {
			$parent[] = $row;
		}
		
	?>
	<main>
		<div class="wrapper">
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

								<a href="home.php" class="link-logo-top link-logo-top-r">
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

			<div class="box-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="main-top mobile">
								<div class="l-main-top">
									<h3 class="txt-h3-top">Xin chào,</h3>
									<h5 class="txt-h5-top">Chúng tôi giúp được gì cho bạn?</h5>
									<div class="r-main-top">
										<div class="box-search-top">
											<form id="help_search_form" method="GET" action="">
												<input type="text" name="query" class="input-search" id="autocomplete-ajax" placeholder="Hãy hỏi bất cứ vấn đề gì bạn thắc mắc..." autocomplete="off">
												<input type="hidden" id="h_searchprocess" value="">
												<button class="btn-search btn-submit-help" type="submit">Tìm kiếm</button>
											</form>
										</div>
										<img src="images/img-top.png" class="img-top">
									</div>
									<span class="lbl-kw-pop">Tìm kiếm phổ biến</span>
									<div class="list-kw-pop">
										<a href="post.php?id=38" class="link-kw-pop">Đăng bài trên web lotus thế nào ?</a>
										<a href="post.php?id=42" class="link-kw-pop">Xây dựng Album ảnh như thế nào?</a>
										<a href="post.php?id=47" class="link-kw-pop">Sử dụng Playlist như thế nào?</a>
										<a href="post.php?id=52" class="link-kw-pop">Cách cấu hình kiểm duyệt</a>
										<a href="post.php?id=70" class="link-kw-pop">Cách đăng bài và quản lý tin bài đối với Tài khoản...</a>
									</div>
								</div>
							</div>
							<div class="main-top pc">
								<div class="l-main-top">
									<h3 class="txt-h3-top">Xin chào,</h3>
									<h5 class="txt-h5-top">Chúng tôi giúp được gì cho bạn?</h5>
									<span class="lbl-kw-pop">Tìm kiếm phổ biến</span>
									<div class="list-kw-pop">
										<a href="post.php?id=38" class="link-kw-pop">Đăng bài trên web lotus thế nào ?</a>
										<a href="post.php?id=42" class="link-kw-pop">Xây dựng Album ảnh như thế nào?</a>
										<a href="post.php?id=47" class="link-kw-pop">Sử dụng Playlist như thế nào?</a>
										<a href="post.php?id=52" class="link-kw-pop">Cách cấu hình kiểm duyệt</a>
										<a href="post.php?id=70" class="link-kw-pop">Cách đăng bài và quản lý tin bài đối với Tài khoản...</a>
									</div>
								</div>
								<div class="r-main-top">
									<div class="box-search-top">
										<form id="help_search_form" method="GET" action="">
											<input type="text" name="query" class="input-search" id="autocomplete-ajax" placeholder="Hãy hỏi bất cứ vấn đề gì bạn thắc mắc..." autocomplete="off">
											<input type="hidden" id="h_searchprocess" value="">
											<button class="btn-search btn-submit-help" type="submit">Tìm kiếm</button>
										</form>
									</div>
									<img src="images/img-top.png" class="img-top">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="box-helps">
				<div class="container">
					<div class="row">
						<div class="col-sm-6 col-lg-3">
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[0]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[0]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[1]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[1]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[2]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[2]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[3]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[3]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[4]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[4]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[5]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[5]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[6]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[6]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[7]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[7]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[8]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[8]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-3">
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[9]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[9]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[10]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[10]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
							</div>
							<div class="box-list-qs">
								<div class="cat-list-qs"><?php echo $parent[11]["name"]; ?></div>
								<div class="list-qs">
								<?php
									$sql2 = "SELECT * from question WHERE parent_id = ".$parent[11]["id"];
									$result2 = $conn->query($sql2);
									while($row = $result2->fetch_assoc()) {
								?>
									<a href="post.php?id=<?php echo $row["id"] ?>" class="link-qs"><?php echo $row["name"]?></a>

								<?php
									}
								?>
								</div>
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
