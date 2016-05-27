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

// *** 「/myphp/github-php-contact-form/contact/」を環境に合わせて必ず変更してください！！！
// http://(またはhttps://)からホストまでを取得
$site_url = (empty($_SERVER['HTTPS']) ? 'http://' : 'https://') . $_SERVER['HTTP_HOST'] . '/';
define('HOME_URL', $site_url . '/myphp/github-php-contact-form/contact/');

// *** 「your_address@example.com」を必ず変更してください！！！
// 自動返信メールの管理者メールアドレス
define('ADMIN_MAIL', 'your_address@example.com');

// HTMlエスケープ
function h($str) {
	return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}

// 共通ファイル読み込み
require_once( __DIR__ . '/utility.php');