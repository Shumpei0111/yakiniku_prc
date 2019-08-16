<?php 
date_default_timezone_set("Asia/Tokyo");
$w = date("w");
$week_name = array("日", "月", "火", "水", "木", "金", "土");
?>

<!doctype html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>予約管理フォーム | やきにく実践塾_課題</title>
	<link rel="icon" href="/favicon.ico">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<meta name="description" content="焼き肉食べよう">
	<link href="https://fonts.googleapis.com/css?family=Noto+Sans+JP:400,700&display=swap" rel="stylesheet">
	<link rel="apple-touch-icon" type="image/png" href="./apple-touch-icon-180x180.png">
	<link rel="icon" type="image/png" href="./icon-192x192.png">
	<link rel="icon" type="image/png" href="./favicon.ico">
  <link rel="stylesheet" href="./css/reset.css">	
	<link rel="stylesheet" href="./css/style.css">
	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div id="app" class="wrapper">
  <div id="header" class="logo-lg header_wrapper">
		<h1 class="header_item">
			<a href="./index.html"><img class="main_img" src="./img/yakinikubanner.jpg" alt="焼き肉実践塾"></a>
		</h1>
		<div class="title">
				<p class="logo-lg">予約管理システム</p>
		</div>
  </div>
  <div class="navi_items">
    <p class="date">本日は <?php echo date("Y/m/d") . "($week_name[$w])" . date("G") . ":" . date("i") ; ?></p>
		<ul id="progress" class="steps">
			<li class="step now">予約内容の入力</li>
			<li class="step">予約完了</li>
		</ul>
		<a href="./reserve_list.html" class="for_list">一覧へ戻る</a>
	</div>
	<form action="reserve_post.php" method="POST">
		<table border="1">
			<tr>
				<td>
					予約番号
				</td>
				<td>
					お名前
				</td>
				<td>
					電話番号
				</td>
				<td>
					予約日
				</td>
				<td>
					予約時刻
				</td>
				<td>
					人数
				</td>
				<td>
					状態
				</td>
			</tr>
			<tr>
				<td>
					<a href="reserve_edit.html">A-00000</a>
				</td>
				<td>
					やきにくたろう
				</td>
				<td>
					08012345678
				</td>
				<td>
					2019-08-21
				</td>
				<td>
					17:00
				</td>
				<td>
					<div class="float_right">
					2
					</div>
				</td>
				<td>
					来店待ち
				</td>
			</tr>
			<tr>
				<td>
					<a href="reserve_edit.html">A-00000</a>
				</td>
				<td>
					やきにく女子会
				</td>
				<td>
					08012349876
				</td>
				<td>
					2019-08-22
				</td>
				<td>
					19:00
				</td>
				<td>
					<div class="float_right">
					2
					</div>
				</td>
				<td>
					来店待ち
				</td>
			</tr>
		</table>
	</form>
	<div id="footer" class="footer_wrapper">
		<p>copyright YJissen / Shumpei All Rights Reserved.</p>
	</div>
</div>
<script>
</script>
</body>
</html>
