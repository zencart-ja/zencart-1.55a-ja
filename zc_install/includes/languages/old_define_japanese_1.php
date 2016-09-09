<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2011 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: index.php 19537 2011-09-20 17:14:44Z drbyte $
 */
/**
 * defining language components for the page
 */



//zc_install\includes\languages\english\index.php
  define('TEXT_MAIN', 'Zen Cart&reg; v' . PROJECT_VERSION_MAJOR .'.'.PROJECT_VERSION_MINOR. 'のインストールプログラムを利用いただきありがとうございます。Zen Cart&trade; を適切にインストールするために必要な手順をご案内します。');
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; セットアップ　-　ようこそ');
  define('INSTALL', '続ける');



//zc_install\includes\languages\english\license.php
  define('TEXT_MAIN', 'Zen Cart&reg; v' . PROJECT_VERSION_MAJOR .'.'.PROJECT_VERSION_MINOR. 'のセットアッププログラムへようこそ。ライセンス規約をご確認ください。なおGPLライセンス規約は<a href="http://www.gnu.org/licenses/translations.ja.html" target="_blank">原文のみが正式なものとして認められています</a>ので、英語のまま表示いたします。');
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; セットアップ　-　ライセンス規約');
  define('INSTALL', '続ける');

  define('AGREE', '上記を確認したうえでこれに同意します。');
  define('DISAGREE', '上記を確認したうえでこれに同意しません。');



//zc_install\includes\languages\english\config_checkup.php
  define('TEXT_MAIN', '<h2>Please fix your configuration files</h2><p>Your configure.php files cannot be validated. This means that they most likely do not contain valid information.</p>');
  define('TEXT_EXPLANATION2', '<p>After collecting information from you, we tried to write the collected information to the configure.php files on your server. You are seeing this screen because that process was unsuccessful. Thus, you will likely have to set their contents manually.</p>');
  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; Setup - Configuration Checkup');
  define('TEXT_CONFIG_FILES', 'Configuration Settings - configure.php files');
  define('TEXT_CONFIG_INSTRUCTIONS', 'You may use your computer clipboard to copy-and-paste the appropriate content using the following boxes.  Click in the box, copy to your clipboard, open the appropriate configure.php file using your text editor, paste the clipboard contents into the file, save, upload. Repeat for the other file.<br /><br />When finished, click on the "Re-Check Files" button below to re-run the validation.');

  define('TEXT_CATALOG_CONFIGFILE', '/includes/configure.php');
  define('TEXT_ADMIN_CONFIGFILE', '/admin/includes/configure.php');

  define('CONTINUE_BUTTON', 'Ignore and Continue');
  define('RECHECK', 'Re-Check Files');



//zc_install\includes\languages\english\admin_setup.php
  define('TEXT_PAGE_HEADING', 'Zen Cart設定 - 管理者アカウント設定');
  define('SAVE_ADMIN_SETTINGS', '管理者設定を保存');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "管理者用のアカウントをここで作成します。管理者IDとパスワード、そしてパスワードを忘れてしまった際にパスワード再設定ページのURLを送信するメールアドレスを記入してください。内容を確認してから、<em>".SAVE_ADMIN_SETTINGS.'</em>をクリックしてください。');
  define('ADMIN_INFORMATION', '管理者情報');
  define('ADMIN_USERNAME', '管理者ID');
  define('ADMIN_USERNAME_INSTRUCTION', 'ユーザ名を記入してください。');
  define('ADMIN_PASS', '管理者パスワード');
  define('ADMIN_PASS_INSTRUCTION', 'パスワードを記入してください。<br />(英字と数字を組み合わせた7文字以上で)');
  define('ADMIN_PASS_CONFIRM', '管理者パスワード（確認）');
  define('ADMIN_PASS_CONFIRM_INSTRUCTION', '確認のためもう一度パスワードを入力してください。');
  define('ADMIN_EMAIL', '管理者のメールアドレス');
  define('ADMIN_EMAIL_INSTRUCTION', 'メールアドレスを記入してください。');
  define('UPGRADE_DETECTION','最新版の検出');
  define('UPGRADE_INSTRUCTION_TITLE','ログインのたびにZen Cartの最新バージョンをチェックする');
  define('UPGRADE_INSTRUCTION_TEXT','※当機能は現在利用できません。');



//zc_install\includes\languages\english\database_setup.php
  define('SAVE_DATABASE_SETTINGS', 'データベース設定を保存');//this comes before TEXT_MAIN
  define('TEXT_MAIN', "データベースの設定を行います。" . SAVE_DATABASE_SETTINGS . " をクリックすると、設定が保存され、データベースへの書き込みが実行されます。");
  define('TEXT_PAGE_HEADING', 'Zen Cart設定　-　データベース設定');
  define('DATABASE_INFORMATION', 'データベース設定');
  define('DATABASE_OPTIONAL_INFORMATION', 'データベース - オプション設定');
  define('DATABASE_OPTIONAL_INSTRUCTION', '特に変更する理由がなければ、そのままでも問題ありません。');
  define('DATABASE_TYPE', 'データベースタイプ');
  define('DATABASE_TYPE_INSTRUCTION', '使用するデータベースタイプを選択してください。');
  define('DATABASE_CHARSET', 'データベース文字セット/照合');
  define('DATABASE_CHARSET_INSTRUCTION', 'データベース照合を選んでください。');
  define('DATABASE_HOST', 'データベースホスト名');
  define('DATABASE_HOST_INSTRUCTION', '接続するホスト名を入力してください。(例）\'db1.myserver.com\', \'192.168.0.1\', \'localhost\'。');
  define('DATABASE_USERNAME', 'データベースユーザ名');
  define('DATABASE_USERNAME_INSTRUCTION', 'データベース接続に使用するユーザ名を入力してください。(例）\'root\'。');
  define('DATABASE_PASSWORD', 'データベースパスワード');
  define('DATABASE_PASSWORD_INSTRUCTION', 'データベース接続に使用するパスワードを入力してください。');
  define('DATABASE_NAME', 'データベース名');
  define('DATABASE_NAME_INSTRUCTION', 'データベース名を入力してください。(例）\'zencart\'。');
  define('DATABASE_PREFIX', 'テーブルプレフィクス');
  define('DATABASE_PREFIX_INSTRUCTION', 'テーブル名に付けるプレフィクスを入力してください。(例）\'zen_\'<br />プレフィクスを設定すると、ひとつのデータベースで複数のショップを運用したり、他のCMSと共存したりすることができます。');
  define('DATABASE_CREATE', 'データベース作成');
  define('DATABASE_CREATE_INSTRUCTION', 'データベースを新規作成しますか? ');
  define('DATABASE_CONNECTION', '持続的接続');
  define('DATABASE_CONNECTION_INSTRUCTION', '持続的接続(Persistent connection)を有効にしますか？<br>分からない場合は\「いいえ」を選択してください。');
  define('DATABASE_SESSION', 'データベースセッション');
  define('DATABASE_SESSION_INSTRUCTION', 'データベースでのセッション管理を許可しますか？<br>分からない場合は「はい」を選択してください。');
  define('CACHE_TYPE', 'SQLキャッシュの方法');
  define('CACHE_TYPE_INSTRUCTION', 'SQLキャッシュを使用するための方法を選択してください。');
  define('SQL_CACHE', 'セッション/SQLキャッシュディレクトリ');
  define('SQL_CACHE_INSTRUCTION', 'データベースセッションまたはファイルベースのSQLキャッシュを使用する場合は、ディレクトリ名を入力してください。');
  define('ONLY_UPDATE_CONFIG_FILES','設定ファイルのみ更新');


  define('REASON_TABLE_ALREADY_EXISTS','指定されたデータベーステーブル「%s」はすでに存在しているので、作成することができません。');
  define('REASON_TABLE_DOESNT_EXIST','指定されたデータベーステーブル「%s」が見つからないので、削除することができません。');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','設定キー「%s」はすでに存在しているので、挿入することができません。');
  define('REASON_COLUMN_ALREADY_EXISTS','コラム「%s」はすでに存在しているので、加えることができません。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','コラム「%s」が見つからないので、削除することができません。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','コラム「%s」が見つからないので、変更することができません。');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','設定キー「%s」はすでに存在しているので挿入することができません。');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','インデックス「%s」(テーブル「%s」)が見つからないので、削除することができません。');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','テーブル「%s」の主要キーが見つからないので、削除することができません。');
  define('REASON_INDEX_ALREADY_EXISTS','インデックス「%s」(テーブル「%s」)はすでに存在しているので、加えることができません。');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','テーブル「%s」の主要キーはすでに存在しているので、加えることができません。');
  define('REASON_NO_PRIVILEGES','ユーザ「%s@%s」は「%s」の権限を持っていません。');



//zc_install\includes\languages\english\database_upgrade.php
  define('PAGE_HEADING', 'Zen Cart&trade; セットアップ　-　データベースアップグレード');
  define('UPDATE_DATABASE_NOW','データベースをアップデートする');//this comes before TEXT_MAIN
  define('TEXT_MAIN', '<em>注意: </em> このスクリプトは下にリストされたバージョンから、あなたのZen Cartデータベーススキーマをアップグレードするためだけに使用されるべきです。  ' .
                      '<span class="emphasis"><strong>アップグレードする前にあなたのデータベースのフルバックアップを行うことを強く推奨します!</strong></span>');
  define('TEXT_MAIN_2','<span class="emphasis">下の詳細を非常に注意深くチェックしてください。</span>この情報はあなたのconfigure.php設定から得られています。<br />' .
                      'もしそれらが正確であると確信できなければ、先に進まないでください。さもないと、あなたのデータベースを破損する危険があります。');

  define('DATABASE_INFORMATION', 'データベース情報');
  define('DATABASE_TYPE', 'データベースタイプ');
  define('DATABASE_HOST', 'データベースホスト');
  define('DATABASE_USERNAME', 'データベースユーザ名');
  define('DATABASE_PASSWORD', 'データベースパスワード');
  define('DATABASE_NAME', 'データベース名');
  define('DATABASE_PREFIX', 'データベーステーブルプレフィクス');
  define('DATABASE_PRIVILEGES', 'データベース権限');

  define('SNIFFER_PREDICTS','<em>Upgrade Sniffer</em> predicts: ');
  define('CHOOSE_UPGRADES','アップグレードステップを選択してください');
  define('TITLE_DATABASE_PREFIX_CHANGE','データベーステーブルプレフィクス変更');
  define('ERROR_PREFIX_CHANGE_NEEDED','<span class="errors">あなたのデータベースの中にZen Cartのテーブルを見つけることができませんでした。<br />恐らくあなたのデータベーステーブルのプレフィクスは不正確に指定されました。</span><br />もしプレフィクスを変えても問題が解決しないなら、phpMyAdminまたはあなたのウェブサーバのコントロールパネルを使ってconfigure.phpの設定と現行のデータベースを、手作業で比較する必要があるでしょう。');
  define('TEXT_DATABASE_PREFIX_CHANGE','もしデータベーステーブルのプレフィクスを変更したければ、下に新しいプレフィクスを入力してください。<span class="emphasis">注意: 重複チェックは行いませんので、既に使用されているプレフィクスではないことを確認してください。</span>既に存在するテーブルプレフィクスを使うとデータベースを壊すことになります。');
  define('TEXT_DATABASE_PREFIX_CHANGE_WARNING','<span class="errors"><strong>注意: もし、データベースの完全で信頼できる最近のバックアップがないのであれば、テーブルプレフィクスの変更を試すのは止めてください。もし処理中に何かうまくいかなかった場合、あなたのバックアップから復旧する必要があるでしょう。もし心配だったり確信が持てないのであれば、テーブル名の変更を試すことはやめてください。</strong></span>');
  define('DATABASE_OLD_PREFIX','古いテーブルプレフィクス');
  define('DATABASE_OLD_PREFIX_INSTRUCTION','古いテーブルプレフィクスを入力してください');
  define('ENTRY_NEW_PREFIX','新しいテーブルプレフィクス');
  define('DATABASE_NEW_PREFIX_INSTRUCTION','新しいテーブルプレフィクスを入力してください');
  define('ENTRY_ADMIN_ID','管理者のID (Zen Cartの管理者エリア)');
  define('ENTRY_ADMIN_PASSWORD','パスワード');
  define('ADMIN_PASSSWORD_INSTRUCTION','データベースの変更を行うには管理者のユーザーネームとパスワード（管理画面にアクセスできるアカウント）が必要になります。<em> (MySQLのパスワードではありません) </em>');
  define('TITLE_SECURITY','データベースのセキュリティ');

  define('UPDATE_DATABASE_WARNING_DO_NOT_INTERRUPT','<span class="emphasis">下をクリックした後、中断しないでください。アップグレードの間お待ちください。</span>');
  define('SKIP_UPDATES','アップグレードをスキップする');


  define('REASON_TABLE_ALREADY_EXISTS','既に存在するためテーブルを更新することができませんでした。');
  define('REASON_TABLE_DOESNT_EXIST','テーブルが存在しないためテーブルを削除することができませんでした。');
  define('REASON_TABLE_NOT_FOUND', 'Cannot ALTER or INSERT/REPLACE into table %s because it does not exist.');
  define('REASON_CONFIG_KEY_ALREADY_EXISTS','コンフィギュレーションキーが既に存在するため新規に挿入することができません。');
  define('REASON_COLUMN_ALREADY_EXISTS','カラムが既に存在するため新規に追加することができません。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_DROP','カラムが存在しないためカラムを削除することができませんでした。');
  define('REASON_COLUMN_DOESNT_EXIST_TO_CHANGE','カラムが存在しないためカラムを変更することができませんでした。');
  define('REASON_PRODUCT_TYPE_LAYOUT_KEY_ALREADY_EXISTS','プロダクトタイプレイアウトコンフィギュレーションキーが既に存在するため新規に挿入することができません。');
  define('REASON_INDEX_DOESNT_EXIST_TO_DROP','インデックスが存在しないためインデックスを削除することができませんでした。');
  define('REASON_PRIMARY_KEY_DOESNT_EXIST_TO_DROP','プライマリーキーが存在しないためプライマリーキーを削除することができませんでした。');
  define('REASON_INDEX_ALREADY_EXISTS','インデックスが既に存在するため新規に追加することができません。');
  define('REASON_PRIMARY_KEY_ALREADY_EXISTS','プライマリーキーが既に存在するためテーブルに新規にプライマリーキーを追加することができません。');
  define('REASON_NO_PRIVILEGES','このユーザーはデータベース編集権限がありません。');
  define('REASON_CONFIGURATION_GROUP_KEY_ALREADY_EXISTS','Cannot insert configuration_group_title "%s" because it already exists');
  define('REASON_CONFIGURATION_GROUP_ID_ALREADY_EXISTS','Cannot insert configuration_group_id "%s" because it already exists');



//zc_install\includes\languages\english\store_setup.php
  define('SAVE_STORE_SETTINGS', 'ショップ設定を保存');//this comes before TEXT_MAIN
  define('TEXT_MAIN', 'ショップの基本的な設定を行います。これらの設定は管理者用のツールにより後からいつでも変更可能です。適切な値を入力し<em>'.SAVE_STORE_SETTINGS.'</em> をクリックしてください。');
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; セットアップ - ショップ設定');
  define('STORE_INFORMATION', 'ショップ情報');
  define('STORE_NAME', 'ショップ名');
  define('STORE_NAME_INSTRUCTION', 'ショップ名を入力してください。');
  define('STORE_OWNER', 'ショップオーナーの名前');
  define('STORE_OWNER_INSTRUCTION', 'ショップオーナーの名前を入力してください。');
  define('STORE_OWNER_EMAIL', 'ショップオーナーのメールアドレス');
  define('STORE_OWNER_EMAIL_INSTRUCTION', 'ショップオーナーのメールアドレスを入力してください。');
  define('STORE_COUNTRY', '国');
  define('STORE_COUNTRY_INSTRUCTION', '国を選択してください。');
  define('STORE_ZONE', 'ゾーン');
  define('STORE_ZONE_INSTRUCTION', 'ゾーンを選択してください。');
  define('STORE_ADDRESS', 'ショップの住所');
  define('STORE_ADDRESS_INSTRUCTION', 'この住所は印刷可能なドキュメントで使用され、オンラインで表示されます。');
  define('STORE_DEFAULT_LANGUAGE', 'デフォルトの言語');
  define('STORE_DEFAULT_LANGUAGE_INSTRUCTION', 'デフォルトで使用したい言語を選択してください。');
  define('STORE_DEFAULT_CURRENCY', 'デフォルトの通貨');
  define('STORE_DEFAULT_CURRENCY_INSTRUCTION', 'デフォルトで使用したい通貨を選択してください。');
  define('DEMO_INFORMATION', 'デモ情報');
  define('DEMO_INSTALL', 'ショップのデモ');
  define('DEMO_INSTALL_INSTRUCTION', 'デモ用のカテゴリおよび商品データをインストールしますか？');



//zc_install\includes\languages\english\system_setup.php
  define('SAVE_SYSTEM_SETTINGS', '設定を保存'); //this comes before TEXT_MAIN
  define('TEXT_MAIN', 'システム環境を設定します。確認の上、「設定を保存」をクリックしてください。<br />※各々の値において、<b>末尾にスラッシュ「/」をつけない</b>ようにしてください。');
  define('TEXT_PAGE_HEADING', 'Zen Cartの設定　- システム設定');
  define('SERVER_SETTINGS', 'サーバ設定');
  define('PHYSICAL_PATH', '設置ディレクトリ');
  define('PHYSICAL_PATH_INSTRUCTION', '設置ディレクトリの物理パス');
  define('VIRTUAL_HTTP_PATH', 'サイトのURL');
  define('VIRTUAL_HTTP_PATH_INSTRUCTION', '');
  define('VIRTUAL_HTTPS_PATH', 'サイトのURL(SSL/不要なら空白)');
  define('VIRTUAL_HTTPS_PATH_INSTRUCTION', '');
  define('VIRTUAL_HTTPS_SERVER', 'SSLサーバのホスト名(不要なら空白)');
  define('VIRTUAL_HTTPS_SERVER_INSTRUCTION', 'Zen Cartディレクトリ用仮想HTTPSサーバ');
  define('TEXT_SSL_INTRO', '<strong>Do you already have an SSL Certificate? If so, enter the details below.</strong> If this is your first install, the supplied values are *only best-guesses*. Please verify the information with your hosting company if you are unsure of the correct details.');
  define('TEXT_SSL_WARNING', 'If your SSL certificate is already working, choose your SSL settings below. <br /><strong>DO NOT enable SSL here if you do not already have SSL enabled on your hosting account.</strong> If you enable SSL but the SSL address you provide does not work, you will not be able to access your admin site nor log in to your store. You can activate SSL later by editing settings in your configure.php file.');
  define('SSL_OPTIONS', 'SSL Details');
  define('ENABLE_SSL', 'ショップでSSLを有効にする');
  define('ENABLE_SSL_INSTRUCTION', 'SSLの動作を確認していない場合は「いいえ」にしておいてください。<br />');
  define('ENABLE_SSL_ADMIN', '管理画面でSSLを有効にする');
  define('ENABLE_SSL_ADMIN_INSTRUCTION', 'SSLの動作を確認していない場合は「いいえ」にしておいてください。<br />');
  define('REDISCOVER', 'Redetect defaults for this host');



//zc_install\includes\languages\english\time_out.php
  define('TEXT_PAGE_HEADING', 'Zen Cart&reg; Setup - Time Out');
  define('TEXT_MAIN','<h2>Problem Detected</h2><h3>Sorry, a problem has been detected.</h3>
<p>This installer needs to be able to start a PHP session in order to complete installation.</p>
<p><strong>Possible causes of this page being displayed include:</strong>
<ul>
<li><h3>Perhaps a timeout has occurred</h3>If you left the installation unattended more than 20 minutes, then the information you entered on previous screens is no longer available.  In this case, you will need to begin the installation process again. <br />
<br />
Please do not leave the installation process unattended for long lengths of time. Installation should only take 5 minutes under normal circumstances.<br /><br /></li>
<li><h3>The server has no place to write its session files.</h3>If you have not already made the "cache" folder writable, please do so now so the installer can continue. Details on making the files writable can be found in the <a href="../docs/index.html" target="_blank">Installation Instructions</a> or in the <a href="http://tutorials.zen-cart.com/index.php?article=9" target="_blank">online FAQs</a>.<br /><br /></li>
<li><h3>PHP sessions might not be functional on your server</h3>In order to use Zen Cart&reg;, you will need to be able to use the "session" capabilities of PHP. It could be that your server configuration is not currently allowing PHP sessions to start and interact properly.  Also, if you have session cookies disabled in your browser, you will not be able to use PHP session support. Please turn off cookie-blocking tools in your browser and firewall as a precaution. <br /><br />You may need to talk to your webserver administrator for assistance in ensuring that PHP sessions can be configured and used on your site.<br /><br /></li>
</ul>
</p>');
  define('START_INSTALL', 'Start Installation');

