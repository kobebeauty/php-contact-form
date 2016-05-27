<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

function checkInputData($inputData) {
	// エラーメッセージを格納する配列
	$err_msg = array();

	// 各入力内容を取得
	$name = isset($inputData["name"]) ? $inputData["name"] : "";
	$email = isset($inputData["email"]) ? $inputData["email"] : "";
	$message = isset($inputData["message"]) ? $inputData["message"] : "";

	// お名前
	if (strlen($name) == 0) {
		$err_msg[] = "お名前を入力してください。";
	}
	// メールアドレス
	if (strlen($email) == 0) {
		$err_msg[] = "メールアドレスを入力してください。";
	} else {
		if (!preg_match("/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/", $email)) {
			$err_msg[] = "正しいメールアドレスを入力してください。";
		}
	}
	// お問い合わせ内容
	if (strlen($message) == 0) {
		$err_msg[] = "お問い合わせ内容を入力してください。";
	}

	return $err_msg;
}