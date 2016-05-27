<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

// ファイル読み込み
require_once( __DIR__ . '/pcf_lib/init.php');

global $param;

// ページタイトル
$param['title'] = 'お問い合わせ完了 | 無料ダウンロード';

// ヘッダー表示
getHeader();
?>

<h1 class="page-header">お問い合わせ完了</h1>

<div class="page-content">
	<p class="mb30">
		お問い合わせを送信しました。<br>
		改めて担当者からご連絡を差し上げます。今しばらくお待ちくださいませ。
	</p>
</div>

<?php
// フッター表示
getFooter();
