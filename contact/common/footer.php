<?php
/**
 * KobeBeauty PHP Contact Form
 * http://www.kobe-beauty.co.jp/
 *
 * Copyright (c) 2014 Kobe Beauty Co., Ltd.
 * Released under the MIT license
 */

/**
* getFooter
* フッター共通
* @param $param['root_url']      階層（パス）
*/
function getFooter ($param=array()) {

echo <<<HTML
	</div><!-- ./container -->

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="{$param['root_url']}assets/js/bootstrap.min.js"></script>
</body>
</html>
HTML;
}