<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

// ファイル読み込み
require_once('common/init.php');

// ページタイトル
$param['title'] = 'お問い合わせ完了 | 無料ダウンロード';
// パス
$param['root_url'] = '';

// ヘッダー表示
showHeader($param);
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
showFooter($param);