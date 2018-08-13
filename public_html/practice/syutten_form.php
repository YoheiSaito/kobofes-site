<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>出店お問い合わせ</title>
<link rel="stylesheet" href="style_toi.css">
<script type="text/javascript" src="contact.js"></script>
</head>
<body>
<div><h2>出店お問い合わせ</h2></div>
<main>
	<form action="syutten_confirm.php" method="post" name="form" onsubmit="return validate()">
		<h1 class="contact-title">【出店フォーム】内容入力</h1>
		<p>お問い合わせ内容をご入力の上、「確認画面へ」ボタンをクリックしてください。</p>
		<p>※<span>＜必須＞</span>と記載のある欄に不備がある場合、先に進めませんのでご注意ください※</p>
		
		<div class="sec01">
		<h3>代表者</h3>
            <div>
				<label>氏名<span>＜必須＞</span></label>
				<input type="text" name="name" placeholder="例）信州太郎" value="">
			</div>
			<div>
				<label>ふりがな<span>＜必須＞</span></label>
				<input type="text" name="furi" placeholder="例）しんしゅうたろう" value="">
			</div>
			<div>
				<label>年齢</label>
				<input type="text" name="age" placeholder="例）21" value="">
			</div>
			<div>
				<label>メールアドレス<span>＜必須＞</span></label>
				<input type="text" name="email" placeholder="例）shinshu-u01@gmail.com" value="">
			</div>
			<div>
				<label>電話番号<span>＜必須＞</span></label>
				<input type="text" name="tel" placeholder="例）09012345678" value="">
			</div>
			<div>
				<label>郵便番号</label>
				<input type="text" name="pos" placeholder="例）3800928" value="">
			</div>
			<div>
				<label>住所</label>
				<input type="text" name="address" placeholder="例）長野県長野市若里4丁目17-1" value="">
			</div>
		</div>
		
		<div class="sec01">
		<h3>副代表者</h3>
            <div>
				<label>氏名</label>
				<input type="text" name="subname" placeholder="例）信州花子" value="">
			</div>
			<div>
				<label>ふりがな</label>
				<input type="text" name="subfuri" placeholder="例）しんしゅうはなこ" value="">
			</div>
			<div>
				<label>年齢</label>
				<input type="text" name="subage" placeholder="例）21" value="">
			</div>
			<div>
				<label>メールアドレス</label>
				<input type="text" name="subemail" placeholder="例）shinshu-u02@gmail.com" value="">
			</div>
			<div>
				<label>電話番号</label>
				<input type="text" name="subtel" placeholder="例）09012345678" value="">
			</div>
		</div>
		
		<div class="sec01">
		<h3>出店内容</h3>
			<div>
				<label>出店名</label>
				<input type="text" name="shopname" placeholder="例）信州やきそば" value="">
			</div>
			<h4>参加予定者</h4>
			<div id="nameleft">
				<label>氏名/年齢・</label>
				<input type="text" name="subname02" placeholder="例）信州次郎" value="">
				<input type="text" name="subage02" placeholder="例）20" value="">
				<label>・</label>
				<input type="text" name="subname03" placeholder="" value="">
				<input type="text" name="subage03" placeholder="" value="">
				<label>・</label>
				<input type="text" name="subname04" placeholder="" value="">
				<input type="text" name="subage04" placeholder="" value="">
				<label>・</label>
				<input type="text" name="subname05" placeholder="" value="">
				<input type="text" name="subage05" placeholder="" value="">
				<label>・</label>
				<input type="text" name="subname06" placeholder="" value="">
				<input type="text" name="subage06" placeholder="" value="">
			</div>
			<div>
				<label>出店カテゴリ</label>
				<select name="category">
					<option value="">出店カテゴリを選択してください</option>
					<option value="飲食系">飲食系</option>
					<option value="遊戯など">遊戯など</option>
				</select>
			</div>
			<div>
				<label>出店の具体的内容</label>
				<div>
				<textarea name="contents" rows="5" placeholder="例）焼き鳥，たこ焼き"></textarea>
				</div>
			</div>
		</div>
		<button type="submit"　name="cpage">確認画面へ</button>
	</form>
</main>
<footer>
		<p>「確認画面へ」を押しても進まない場合は、記入漏れがないか確認してください。</p>
		<p>不備のある箇所は赤字で表示されます。</p>
</footer>
</body>
</html>