<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */


/**
* getHeader
* ヘッダー共通ファイルを呼び出す
*/
function getHeader () {
	require_once( __DIR__ . '/../parts/header.php');
}

/**
* getFooter
* フッター共通ファイルを呼び出す
*/
function getFooter () {
	require_once( __DIR__ . '/../parts/footer.php');
}

/**
* sendMailtoAdmin
* メール送信（管理者宛）
* @param $data     フォーム送信データ
*/
function sendMailtoAdmin ($data) {
	$result = false;

	// 文字コードをセット
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	// 送信先
	$to = ADMIN_MAIL;

	// 件名
	$subject = "ホームページから問い合わせがありました";

	// 本文作成
	$body  = "";
	$body .= "---------------------------------------------------------------------\n";
	$body .= "　ホームページから問い合わせがありました\n";
	$body .= "---------------------------------------------------------------------\n";
	$body .= "問い合わせ内容は以下のとおりです。\n";
	$body .= "受信から2営業日以内にお客様へ連絡してください。\n";
	$body .= "\n";
	$body .= "お名前：　" . $data["name"] . "\n";
	$body .= "メールアドレス：　" . $data["email"] . "\n";
	$body .= "\n";
	$body .= "お問い合わせ内容：\n";
	$body .= $data["message"] . "\n";
	$body .= "\n";
	$body .= "---------------------------------------------------------------------\n";
	$body .= "　このメールは問い合わせフォームから送信されました。\n";

	// 送信処理
	if (mb_send_mail($to, $subject, $body)) {
		$result = true; // 送信成功
	}

	return $result;
}

/**
* sendMailtoCustomer
* メール送信（ユーザー宛）
* @param $data     フォーム送信データ
*/
function sendMailtoCustomer ($data) {
	$result = false;

	// 文字コードをセット
	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	// 送信先
	$to = $data["email"];

	// 件名
	$subject = "お問い合わせを受け付けました";

	// 送信元
	$from = ADMIN_MAIL;

	// 本文作成
	$body  = "";
	$body .= $data["name"] . "　様\n";
	$body .= "\n";
	$body .= "この度はお問い合わせいただき誠にありがとうございます。\n";
	$body .= "\n";
	$body .= "以下のとおり、お問い合わせを受け付けいたしました。\n";
	$body .= "順次ご連絡させていただいておりますので、\n";
	$body .= "今しばらくお待ちくださいませ。\n";
	$body .= "\n";
	$body .= "1週間以上経っても弊社から連絡がない場合は、\n";
	$body .= "メールアドレスの入力に間違いがあったか、\n";
	$body .= "お問い合わせが正常に完了していなかった可能性がございます。\n";
	$body .= "お手数ですが、再度ご連絡いただけますようお願いいたします\n";
	$body .= "\n";
	$body .= "お名前：　" . $data["name"] . "\n";
	$body .= "メールアドレス：　" . $data["email"] . "\n";
	$body .= "";
	$body .= "お問い合わせ内容：\n";
	$body .= $data["message"] . "\n";
	$body .= "\n";
	$body .= "---------------------------------------------------------------------\n";
	$body .= "このメールはホームページからお問い合わせの受付けにより自動送信されております。\n";
	$body .= "お心当たりのない方は、恐れ入りますがその旨ご連絡いただけると幸いです。";

	// 送信処理
	if (mb_send_mail($to, $subject, $body, "From: ".$from, "-f".$from)) {
		$result = true; // 送信成功
	}

	return $result;
}

