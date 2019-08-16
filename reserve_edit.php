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
			<li class="step now">予約内容の編集</li>
			<li class="step">編集完了</li>
		</ul>
		<a href="./reserve_list.html" class="for_list">一覧へ戻る</a>
	</div>
	<form action="reserve_edit_post.php" method="POST">
		<label for="phone_no">電話番号</label>
		09012345678
		<br />
		<label for="client_name">お名前</label>
		やきにくたろう　様
		<br />
		<label for="reserve_date">予約日</label>
		<input type="text" class="w100" id="reserve_date" name="reserve_date" placeholder="YYYY-MM-DD" value="">
		<br />
		<label for="reserve_time">予約時刻</label>
		<select class="w100" id="reserve_time" name="reserve_time">
			<option value="">(選択)</option>
			<option value="17:00">17時00分</option>
			<option value="17:30">17時30分</option>
			<option value="18:00">18時00分</option>
			<option value="18:30">18時30分</option>
			<option value="19:00">19時00分</option>
			<option value="19:30">19時30分</option>
			<option value="20:00">20時00分</option>
			<option value="20:30">20時30分</option>
			<option value="21:00">21時00分</option>
			<option value="21:30">21時30分</option>
			<option value="22:00">22時00分</option>
			<option value="22:30">22時30分</option>
		</select>
		<br />
		<label for="quantity">人数</label>
		<input type="text" class="w30" id="quantity" name="quantity" placeholder="" value="">人
		<br />
		<label>席タイプ</label>
		<input type="radio" id="seat_type_0" name="seat_type" value="box"><label for="seat_type_0">ボックス席</label>
		<input type="radio" id="seat_type_1" name="seat_type" value="counter"><label for="seat_type_1">カウンター</label>
		<input type="radio" id="seat_type_2" name="seat_type" value="table"><label for="seat_type_2">テーブル席</label>
		<br />
		<label>喫煙</label>
		<input type="checkbox" id="seat_smoke_0" name="seat_smoke" value="0"><label for="seat_smoke_0">禁煙席</label>
		<input type="checkbox" id="seat_smoke_1" name="seat_smoke" value="1"><label for="seat_smoke_1">喫煙席</label>
		<br />
		<label>備考</label>
		<br />
		<textarea cols="50" rows="5" id="note" name="note"></textarea>
		<br />
		<br />
		<label>キャンセル</label>
		<input type="checkbox" id="cancel" name="cancel" value="1"><label for="seat_smoke_0">キャンセルする</label>
		<br />
		<textarea cols="50" rows="5" id="cancel_note" name="cancel_note"></textarea>
		<br />
		<input type="submit" id="btnSubmit" name="btnSubmit" value="変更する">
		<br />
	</form>
	<div id="footer" class="footer_wrapper">
		<p>copyright YJissen / Shumpei All Rights Reserved.</p>
	</div>
</div>
<!-- ./wrapper -->
<script>
</script>
</body>
</html>
