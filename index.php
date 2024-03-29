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
	<ul id="forms" class="form_wrapper">
    <form action="reserve_post.php" method="POST">
			<div class="form search">
				<div class="search_cst">
					<p>顧客リストから探す</p>
				</div>
			</div>
			<div class="form">
				<label class="f_title mst" for="phone_no">電話番号</label>
				<input required v-model="v_phone_no" type="tel" pattern="[\d]*" title="半角・ハイフンなしの数字を入力してください" class="w100 wide_input" id="phone_no" name="phone_no" placeholder="012033334444（半角・ハイフンなし）" value="" minlength="11" maxlength="11">
			</div>
			<div class="form">
				<label class="f_title mst" for="client_name">お名前（ひながな・カナ）</label>
				<input required v-model="v_client_name" type="text" class="w100 wide_input" id="client_name" name="client_name" placeholder="ひらがなかカタカナで入力" value="" pattern="[ァ-ヶー　ぁ-ゞ]*" title="全角ひらがな・カタカナで入力してください">
			</div>
			<div class="form">
				<label class="f_title mst" for="reserve_date">予約日</label>
				<input required v-model="v_reserve_date" type="date" class="w100" id="reserve_date" name="reserve_date" placeholder="YYYY-MM-DD" value="">
			</div>
			<div class="form">
				<label class="f_title mst" for="reserve_time">予約時刻</label>
				<select required v-model="v_reserve_time" class="w100" id="reserve_time" name="reserve_time">
					<option value="none" selected="selected"> --▼選択してください-- </option>
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
			</div>
			<div class="form">
				<label class="f_title mst" for="quantity">人数</label>
				<div class="included">
					<ul>
						<li class="c_members">
							<span>大人</span>
							<input v-model.number="v_quantity_adult" type="number" class="w30" id="quantity_adult" name="quantity" placeholder="人数" value="" min="1"><span>名</span>
							<!-- <p class="alc_att">（運転される方がいるか確認してください）</p> -->
						</li>
						<li class="c_members">
							<span>子供</span>
							<input v-model.number="v_quantity_child" type="number" class="w30" id="quantity_child" name="quantity" placeholder="人数" value="" min="0"><span>名</span>
						</li>
						<li class="c_members">
							<span>合計</span>
							<span>{{ v_quantity_res }}</span><span>人</span>
						</li>
					</ul>
				</div>
			</div>
			<div class="form choice">
				<label class="f_title mst">席タイプ</label>
				<div class="included">
					<input required type="radio" v-model="v_seat_type" id="seat_type_0" name="seat_type" value="ボックス席"><label for="seat_type_0">ボックス席</label>
				</div>
				<div class="included">
					<input required type="radio" v-model="v_seat_type" id="seat_type_1" name="seat_type" value="カウンター"><label for="seat_type_1">カウンター</label>
				</div>
				<div class="included">
					<input required type="radio" v-model="v_seat_type" id="seat_type_2" name="seat_type" value="テーブル席"><label for="seat_type_2">テーブル席</label>
				</div>
			</div>
			<div class="form choice">
				<label class="f_title mst">喫煙</label>
				<div class="included">
					<input required type="radio" v-model="v_seat_smoke" id="seat_smoke_0" name="seat_smoke" value="禁煙席"><label for="seat_smoke_0">禁煙席</label>
				</div>
				<div class="included">
					<input required type="radio" v-model="v_seat_smoke" id="seat_smoke_1" name="seat_smoke" value="喫煙席"><label for="seat_smoke_1">喫煙席</label>
				</div>
			</div>
			<div class="form">
				<label for="others" class="f_title any">備考</label>
				<textarea v-model="v_others" name="others" id="others_notice" cols="50" rows="6" placeholder="備考欄" class="form_other">{{ v_others }}</textarea>
			</div>
		<div class="arrow"></div>
		<p class="switch_btn" @click="inputResShow = !inputResShow">{{ resBtnField }}</p>
		<transition name="fade">
			<ul id="res" class="form_res" v-if="inputResShow">
				<div class="staff_attention">
					<p class="att_ttl">予約内容確認</p>
					<p class="att_txt">内容を確認し、復唱してください</p>
				</div>
				<ul class="chk_items">
					<li class="item_ttl">電話番号</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_phone_no }}</li>
					</ul>
					<li class="item_ttl">お名前</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_client_name }}</li>
					</ul>
					<li class="item_ttl">予約日（年月日）</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_reserve_date }}</li>
					</ul>
					<li class="item_ttl">予約時刻</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_reserve_time }}</li>
					</ul>
					<!-- <li class="item_ttl">人数</li> -->
					<ul class="member_lists">
						<li>大人</li>
						<ul class="add_item">
							<li class="add_form_res">{{ v_quantity_adult }}名</li>
						</ul>
						<li>子供</li>
						<ul class="add_item">
							<li class="add_form_res">{{ v_quantity_child }}名</li>
						</ul>
					</ul>
					<li class="item_ttl">合計人数</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_quantity_adult + v_quantity_child }}名</li>
					</ul>
					<li class="item_ttl">席タイプ</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_seat_type }}</li>
					</ul>
					<li class="item_ttl">喫煙</li>
					<ul class="add_item">
						<li class="add_form_res">{{ v_seat_smoke }}</li>
					</ul>
					<li class="item_ttl">備考</li>
					<ul class="add_item">
							<li class="add_form_res">{{ v_others }}</li>
					</ul>
				</ul>
				<ul class="choose_staff" >
					<label class="rsv_staff_names" for="reserve_staff">受付スタッフ</label>
					<li class="included staff_radio_btn">
						<input required type="radio" id="staff_000" name="reserve_staff" class="chk_staff" value="店長"><label for="staff_000">店長</label>
					</li>
					<li class="included staff_radio_btn">
						<input required type="radio" id="staff_001" name="reserve_staff" class="chk_staff" value="Shumpei"><label for="staff_001">Shumpei</label>
					</li>
					<li class="included staff_radio_btn">
						<input required type="radio" id="staff_002" name="reserve_staff" class="chk_staff" value="女将"><label for="staff_002">塾長</label>
					</li>
					<li class="included staff_radio_btn">
						<input required type="radio" id="staff_003" name="reserve_staff" class="chk_staff" value="大将"><label for="staff_003">大将</label>
					</li>
					<li class="included staff_radio_btn">
							<input required type="radio" id="staff_004" name="reserve_staff" class="chk_staff" value="アルバイト"><label for="staff_004">アルバイト</label>
					</li>
				</ul>
			</ul>
		</transition>
		<div class="submit_form">
			<input type="submit" id="btnSubmit" class="sub_btn" name="btnSubmit" value="予約する">
			<a href="/" class="cancel">予約キャンセル</a>
		</div>
	</form>
	</div>
	<div id="footer" class="footer_wrapper">
		<p>copyright YJissen / Shumpei All Rights Reserved.</p>
	</div>
</div>
<script type="text/javascript" src="./js/script.js"></script>
</body>
</html>
