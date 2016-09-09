<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Sun Oct 18 23:54:03 2015 -0400 Modified in v1.5.5 $
 * @author obitastar
 */

define('HEADING_TITLE', '顧客管理');

define('TABLE_HEADING_ID', 'ID#');
define('TABLE_HEADING_FIRSTNAME', '姓');
define('TABLE_HEADING_LASTNAME', '名');
define('TABLE_HEADING_ACCOUNT_CREATED', '登録日');
define('TABLE_HEADING_LOGIN', '最終ログイン日');
define('TABLE_HEADING_ACTION', '操作');
define('TABLE_HEADING_PRICING_GROUP', '割引顧客グループ');
define('TABLE_HEADING_AUTHORIZATION_APPROVAL', '顧客ステータス');
define('TABLE_HEADING_GV_AMOUNT', 'ギフト券');

define('TEXT_DATE_ACCOUNT_CREATED', '登録日:');
define('TEXT_DATE_ACCOUNT_LAST_MODIFIED', '更新日:');
define('TEXT_INFO_DATE_LAST_LOGON', '最終ログイン日:');
define('TEXT_INFO_NUMBER_OF_LOGONS', 'ログイン回数:');
define('TEXT_INFO_COUNTRY', '国名:');
define('TEXT_INFO_NUMBER_OF_REVIEWS', 'レビュー投稿数:');
define('TEXT_DELETE_INTRO', 'この顧客を本当に削除しますか?');
define('TEXT_DELETE_REVIEWS', 'レビューも削除(投稿数 %s)');
define('TEXT_INFO_HEADING_DELETE_CUSTOMER', '顧客を削除');
define('TYPE_BELOW', '以下に入力してください。');
define('PLEASE_SELECT', '選択してください。');
define('TEXT_INFO_NUMBER_OF_ORDERS', '注文数:');
define('TEXT_INFO_LAST_ORDER','最近の注文:');
define('TEXT_INFO_ORDERS_TOTAL', '合計:');
define('CUSTOMERS_REFERRAL', '顧客を紹介<br />割引券贈呈');
define('TEXT_INFO_GV_AMOUNT', 'ギフト券');

define('ENTRY_NONE', 'なし');

define('TABLE_HEADING_COMPANY','会社名');

define('TEXT_INFO_HEADING_RESET_CUSTOMER_PASSWORD', 'パスワードをリセット');
define('TEXT_PWDRESET_INTRO', 'この顧客のためのパスワードをリセットするために、新しいパスワードを入力し、下でそれを確認してください。新しいパスワードは顧客に課された正常なパスワード規則に対応しなければなりません。');
define('TEXT_CUST_NEW_PASSWORD', '新しいパスワード:');
define('TEXT_CUST_CONFIRM_PASSWORD', 'パスワードの再確認:');
define('ERROR_PWD_TOO_SHORT', 'エラー：パスワードはこの店のために設定されたキャラクター数より短いです。');
define('SUCCESS_PASSWORD_UPDATED', 'パスワードを更新しました。');

define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE', 'あなたのパスワードは店の管理者によって変更されています。あなたの新しいパスワードは以下の通りです：');
define('EMAIL_CUSTOMER_PWD_CHANGE_SUBJECT', 'アカウントパスワードリセット');
define('EMAIL_CUSTOMER_PWD_CHANGE_MESSAGE_FOR_ADMIN', 'あなたは顧客のためのパスワードをリセットしました：' . "\n" . '%s' . "\n\n" . '管理者 ID: %s');

define('CUSTOMERS_AUTHORIZATION', '顧客の承認状態');
define('CUSTOMERS_AUTHORIZATION_0', '承認');
define('CUSTOMERS_AUTHORIZATION_1', '未承認 - ブラウズするために認可する必要があります。');
define('CUSTOMERS_AUTHORIZATION_2', '未承認 - 価格のないブラウズかもしれません。');
define('CUSTOMERS_AUTHORIZATION_3', '未承認 - 価格とブラウズが一致していますが、購入はできないかもしれません。');
define('CUSTOMERS_AUTHORIZATION_4', '禁止 - ログインも買い物もできません。');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION1', '警告: あなたのお店はブラウズなしで承認セットアップされています。 顧客は未承認状態です - ブラウズなし');
define('ERROR_CUSTOMER_APPROVAL_CORRECTION2', '警告: あなたのお店はブラウズの価格設定なしで承認セットアップされています. 顧客は未承認状態です - ブラウズの価格設定なし');

define('EMAIL_CUSTOMER_STATUS_CHANGE_MESSAGE', 'あなたの顧客ステータスはアップデートされています。当方で買い物してくださってありがとうございます。私達はあなたとのビジネスを楽しみにしています。');
define('EMAIL_CUSTOMER_STATUS_CHANGE_SUBJECT', '顧客ステータスが更新されました');

define('ADDRESS_BOOK_TITLE', 'アドレス帳確認');
define('PRIMARY_ADDRESS', '(標準の配送先)');
define('TEXT_MAXIMUM_ENTRIES', '<span class="coming"><strong>注:</strong></span>アドレス帳は %s 件まで登録が可能です。');
define('TEXT_INFO_ADDRESS_BOOK_COUNT', '&nbsp;&nbsp;&nbsp;|&nbsp;1 of  ');
?>