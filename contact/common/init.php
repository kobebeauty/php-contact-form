<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

// セッションスタート
session_start();

// *** 「your_address@example.com」を必ず変更してください！！！
// 自動返信メールの管理者メールアドレス
define("ADMIN_MAIL", "your_address@example.com");

// HTMlエスケープ（HTMLの特殊な意味を持つ文字列をただの文字列として置き換える）
function htmlspchar($str) {
	return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

// 共通ファイル読み込み
require_once('utility.php');