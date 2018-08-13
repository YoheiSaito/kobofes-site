<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //データを各変数に格納

		//代表者
        $name = $_POST["name"];
        $furi = $_POST["furi"];
		$age = $_POST["age"];
        $email = $_POST["email"];
        $tel = $_POST["tel"];
        $pos = $_POST["pos"];
        $address  = $_POST["address"];
		//副代表者
		$subname = $_POST["subname"];
        $subfuri = $_POST["subfuri"];
		$subage = $_POST["subage"];
        $subemail = $_POST["subemail"];
        $subtel = $_POST["subtel"];
		//出店内容
		$shopname = $_POST["shopname"];
		$category = $_POST["category"];
		$contents = $_POST["contents"];
    }

    // 送信ボタンが押されたら
    if (isset($_POST["submit"])) {

		$mail_to = 'kobofes2016.sekiya@gmail.com';
		mb_language("ja");
        mb_internal_encoding("UTF-8");

        // 件名を変数subjectに格納
        $subject = "［自動送信］光芒祭HPよりお問い合わせ内容の確認";

        // メール本文を変数bodyに格納
        $body = <<< EOM
お問い合わせ内容

=============================================
＊代表者＊

【 氏名 】 
{$name}

【 ふりがな 】 
{$furi}

【 年齢 】 
{$age}

【 メール 】 
{$email}

【 電話番号 】 
{$tel}

【 郵便番号 】 
{$pos}

【 住所 】 
{$address}


＊副代表者＊

【 氏名 】 
{$subname}

【 ふりがな 】 
{$subfuri}

【 年齢 】 
{$subage}

【 メール 】 
{$subemail}

【 電話番号 】 
{$subtel}


＊出店項目＊

【 出店名 】 
{$shopname}

【 カテゴリ 】 
{$category}

【 出店内容 】 
{$contents}


=============================================

EOM;


        // メール送信を行う
       $success = mb_send_mail($mail_to,$subject,$body);


if($success){
    echo('送信が完了しました');
	    // サンクスページに画面遷移させる
        header("Location: syutten_thankspage.php");
        exit;
}else{
    echo('送信に失敗しました。再度お試し頂き、送信できない場合は直接ご連絡頂ければ幸いです。');
}
    }
?>
<html lang="ja">
<head>
<meta charset="UTF-8">
<title>お問い合わせフォーム</title>
<link rel="stylesheet" href="style_toi.css">
</head>
<body>
<div><h2>お問い合わせ</h2></div>
<main>
<div>
    <form action="syutten_confirm.php" method="post">
            <input type="hidden" name="name" value="<?php echo $name; ?>">
            <input type="hidden" name="furi" value="<?php echo $furi; ?>">
			<input type="hidden" name="age" value="<?php echo $age; ?>">
            <input type="hidden" name="email" value="<?php echo $email; ?>">
            <input type="hidden" name="tel" value="<?php echo $tel; ?>">
			<input type="hidden" name="pos" value="<?php echo $pos; ?>">
			<input type="hidden" name="address" value="<?php echo $address; ?>">

			<input type="hidden" name="subname" value="<?php echo $subname; ?>">
            <input type="hidden" name="subfuri" value="<?php echo $subfuri; ?>">
			<input type="hidden" name="subage" value="<?php echo $subage; ?>">
            <input type="hidden" name="subemail" value="<?php echo $subemail; ?>">
            <input type="hidden" name="subtel" value="<?php echo $subtel; ?>">

            <input type="hidden" name="shopname" value="<?php echo $shopname; ?>">
			<input type="hidden" name="category" value="<?php echo $category; ?>">
            <input type="hidden" name="contents" value="<?php echo $contents; ?>">
            <h1 class="contact-title">お問い合わせ 内容確認</h1>
            <p>お問い合わせ内容はこちらで宜しいでしょうか？<br>よろしければ「送信する」ボタンを押して下さい。</p>
            <div class="sec01">
			<h3>代表者</h3>
                <div>
                    <label>お名前</label>
                    <p><?php echo $name; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $furi; ?></p>
                </div>
				<div>
                    <label>年齢</label>
                    <p><?php echo $age; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $email; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $tel; ?></p>
                </div>
				<div>
                    <label>住所</label>
                    <p><?php echo $address; ?></p>
                </div>
			</div>
			<div class="sec01">
				<h3>副代表者</h3>
				<div>
                    <label>お名前</label>
                    <p><?php echo $subname; ?></p>
                </div>
                <div>
                    <label>ふりがな</label>
                    <p><?php echo $subfuri; ?></p>
                </div>
				<div>
                    <label>年齢</label>
                    <p><?php echo $subage; ?></p>
                </div>
                <div>
                    <label>メールアドレス</label>
                    <p><?php echo $subemail; ?></p>
                </div>
                <div>
                    <label>電話番号</label>
                    <p><?php echo $subtel; ?></p>
                </div>
			</div>
			<div class="sec01">
				<h3>出店内容</h3>
				<div>
                    <label>出店名</label>
                    <p><?php echo $shopname; ?></p>
                </div>
				<div>
                    <label>出店カテゴリ</label>
                    <p><?php echo $category; ?></p>
                </div>
				<div>
                    <label>出店の具体的内容</label>
                    <p><?php echo $contents; ?></p>
                </div>

            </div>
        <input type="button" id="backbutton" value="内容を修正する" onclick="history.back(-1)">
        <button type="submit" name="submit">送信する</button>
    </form>
</div>
</main>
</body>
</html>