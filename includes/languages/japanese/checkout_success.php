<?php
/**
 * @package languageDefines
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Mar 23 13:48:06 2015 -0400 Modified in v1.5.5 $
 * @author obitastar
 */

define('NAVBAR_TITLE_1', 'レジへ進む');
define('NAVBAR_TITLE_2', '手続完了');

define('HEADING_TITLE', 'ご注文の手続きが完了しました。');

define('TEXT_SUCCESS', '');
define('TEXT_NOTIFY_PRODUCTS', '下記商品についてお知らせメールを希望する');
define('TEXT_SEE_ORDERS', '<a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') . '">マイページ</a>からお客様のご注文履歴をご覧いただけます。');
define('TEXT_CONTACT_STORE_OWNER', 'ご質問などございましたら<a href="' . zen_href_link(FILENAME_CONTACT_US) . '">お問い合わせページ</a>からどうぞ。');
define('TEXT_THANKS_FOR_SHOPPING', 'ご注文ありがとうございました');

define('TABLE_HEADING_COMMENTS', '');

define('FOOTER_DOWNLOAD', '\'%s\'こちらから、後で商品をダウンロードすることもできます。');

define('TEXT_YOUR_ORDER_NUMBER', '<strong>ご注文番号:</strong> ');

define('TEXT_CHECKOUT_LOGOFF_GUEST', '注：あなたの注文を完了するために仮勘定が作成されました。あなたは、ログオフをクリックしてこの口座を解約してさしつかえありません。ログオフをクリックし、あなたの受け取りと購入の情報がこのコンピュータを使う次の人に見えないと保証します。あなたは買い物を続けることも自由です！ページのトップでリンクを使って、いつでもログオフしてさしつかえありません。');
define('TEXT_CHECKOUT_LOGOFF_CUSTOMER', 'この度は当店にてご購入いただき、誠にありがとうございます。<br />お客様の履歴や購入情報が、同じパソコンをお使いの方に見られることの無いように、ログオフのリンクをクリックして下さい。');


define('HEADING_ORDER_NUMBER', '注文番号 #%s');
define('HEADING_ORDER_DATE', '注文日付:');
define('HEADING_ORDER_TOTAL', '注文合計:');

define('HEADING_DELIVERY_ADDRESS', '配送先住所');
define('HEADING_SHIPPING_METHOD', '輸送方法');

define('HEADING_PRODUCTS', '商品');
define('HEADING_TAX', '税金');
define('HEADING_TOTAL', '合計');
define('HEADING_QUANTITY', 'Qty.');

define('HEADING_BILLING_ADDRESS', '請求先住所');
define('HEADING_PAYMENT_METHOD', '支払い方法');

define('HEADING_ORDER_HISTORY', 'ステータス履歴 &amp; Comments');
define('TEXT_NO_COMMENTS_AVAILABLE', 'No comments available.');
define('TABLE_HEADING_STATUS_DATE', '日付');
define('TABLE_HEADING_STATUS_ORDER_STATUS', '注文ステータス');
define('TABLE_HEADING_STATUS_COMMENTS', 'コメント');
define('QUANTITY_SUFFIX', '&nbsp;ea.  ');
define('ORDER_HEADING_DIVIDER', '&nbsp;-&nbsp;');
define('TEXT_OPTION_DIVIDER', '&nbsp;-&nbsp;');
