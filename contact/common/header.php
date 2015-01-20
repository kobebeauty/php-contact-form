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
* ヘッダー共通
* @param $param['title']      ページタイトル
* @param $param['root_url']      階層（パス）
*/
function getHeader ($param=array()) {

echo <<<HTML
<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<title>{$param['title']}</title>

	<meta name="description" content="">
	<meta name="keywords" content="php,お問い合わせフォーム">

	<!-- Style -->
	<link href="{$param['root_url']}assets/css/import.css" rel="stylesheet">

	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>

	<div class="container">
HTML;
}