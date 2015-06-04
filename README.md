php-contact-form
================

PHPによるお問い合わせフォームです。  
フロントエンドにBootstrap、Font Awesomeを使用しています。  
画面遷移なしの入力チェック、自動返信メール機能があります。  
商用フリー、カスタマイズ自由です。  

A contact form made that uses PHP, Bootstrap, Font Awesome.  
Features PHP Input Validation without page transtion, Automatic reply mail function.  
Commercial free, Customization freedom.

---

## Demo
[Demo][demo]で動作をご確認ください。  
You can check the operation in [Demo][demo].

## Directory Structure
```
contact
├── assets
│   ├── css
│   │   ├── cmn_layout.css
│   │   ├── cmn_reset.css
│   │   ├── cmn_style.css
│   │   ├── contact_style.css
│   │   └── import.css
│   ├── fonts
│   └── js
├── common
│   ├── footer.php
│   ├── header.php
│   ├── init.php
│   ├── utility.php
│   └── validate.php
├── confirm.php
├── done.php
├── error.php
└── index.php
```
※Bootstrap、Font Awesameに関するファイルは省略しています。  
※It does not describe the Bootstrap and Font Awesome related files

## Usage
- [contact/common/init.php](https://github.com/kobebeauty/php-contact-form/blob/master/contact/common/init.php)で管理者のメールアドレスを設定します。（13〜15行目）  
Please change the "Administrator E-mail Address" of the 13-15 line part of [contact/common/init.php](https://github.com/kobebeauty/php-contact-form/blob/master/contact/common/init.php).
```
// *** 「your_address@example.com」を必ず変更してください！！！
// 自動返信メールの管理者メールアドレス
define("ADMIN_MAIL", "your_address@example.com");
```

- 自動送信されるメールの内容を変更したい場合は[contact/common/utility.php](https://github.com/kobebeauty/php-contact-form/blob/master/contact/common/utility.php)を編集してください。  
If you want to change the content of the mail is transmitted automatically, please edit [contact/common/utility.php](https://github.com/kobebeauty/php-contact-form/blob/master/contact/common/utility.php)

## Install
管理者のメールアドレスを設定して、サーバーにアップすれば動作します。  
After you set up an e-mail address of the administrator, you can work if you uploaded to the server.

## Licence
Copyright &copy; 2014 Kobe Beauty Co., Ltd.  
Distributed under the [MIT Licence][mit].

## Author
[kb](https://github.com/kobebeauty)  
[コウベビューティー株式会社(Kobe Beauty Co., Ltd.)][kobebeauty]  

[DEMO]:http://kobe-beauty.co.jp/php-contact-form/demo/
[MIT]:http://www.opensource.org/licenses/mit-license.php
[KOBEBEAUTY]:http://www.kobe-beauty.co.jp/
