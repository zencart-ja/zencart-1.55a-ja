<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |   
// | http://www.zen-cart.com/index.php                                    |   
// |                                                                      |   
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
//  $Id: configuration.php 1105 2005-04-04 22:05:35Z birdbrain $
//

define('TABLE_HEADING_CONFIGURATION_TITLE', 'タイトル');
define('TABLE_HEADING_CONFIGURATION_VALUE', '設定値');
define('TABLE_HEADING_ACTION', '操作');

define('TEXT_INFO_EDIT_INTRO', '必要な変更を行ってください。');
define('TEXT_INFO_DATE_ADDED', '登録日:');
define('TEXT_INFO_LAST_MODIFIED', '更新日:');


define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_SELECT', '商品オプション - セレクトボックス型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_SELECT', 'セレクトボックス型の商品オプションの数値は?');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_TEXT', '商品オプション - テキスト型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_TEXT', 'テキスト型の商品オプションの数値は?');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_RADIO', '商品オプション - ラジオボタン型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_RADIO', 'ラジオボタン型の商品オプションの数値は?');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_CHECKBOX', '商品オプション - チェックボックス型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_CHECKBOX', 'チェックボックス型の商品オプションの数値は?');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_FILE', '商品オプション - ファイル型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_FILE', 'ファイル型の商品オプションの数値は?');
define('CFGTITLE_PRODUCTS_OPTIONS_VALUES_TEXT_ID', 'ID for text and file products options values');
define('CFGDESC_PRODUCTS_OPTIONS_VALUES_TEXT_ID', 'テキスト型・ファイル型属性のproducts_options_values_idで使われる数値は?');
define('CFGTITLE_UPLOAD_PREFIX', 'アップロードオプションの接頭辞(Prefix)');
define('CFGDESC_UPLOAD_PREFIX', 'アップロードオプションを他のオプションと区別するために使う接頭辞(Prefix)は?');
define('CFGTITLE_TEXT_PREFIX', 'テキストの接頭辞(Prefix)');
define('CFGDESC_TEXT_PREFIX', 'テキストオプションを他のオプションと区別するために使う接頭辞(Prefix)は?');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_READONLY', '商品オプション - READ ONLY型');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_READONLY', 'READ ONLY型の商品オプションの数値は?');
define('CFGTITLE_MODULE_PAYMENT_INSTALLED', 'インストール済みの支払いモジュール');
define('CFGDESC_MODULE_PAYMENT_INSTALLED', 'インストールされている支払いモジュールのファイル名のリスト( セミコロン(;)区切り )です。この情報は自動的に更新されますので編集の必要はありません。');
define('CFGTITLE_MODULE_ORDER_TOTAL_INSTALLED', 'インストール済み注文合計モジュール');
define('CFGDESC_MODULE_ORDER_TOTAL_INSTALLED', 'インストールされている注文合計モジュールのファイル名のリスト(セミコロン(;)区切り)です。
<br><br>
【注意】この情報は自動的に更新されますので編集の必要はありません。');
define('CFGTITLE_MODULE_SHIPPING_INSTALLED', 'インストール済み配送モジュール');
define('CFGDESC_MODULE_SHIPPING_INSTALLED', 'インストールされている配送モジュールのファイル名のリスト(セミコロン(;)区切り)です。この情報は自動的に更新されますので編集の必要はありません。');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_STATUS', 'Enable Free Shipping');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_STATUS', 'Do you want to offer Free shipping?');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST', 'Pickup Locations');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_LOCATIONS_LIST', 'Enter a list of locations, separated by semicolons (;).<br>Optionally you may specify a fee/surcharge for each location by adding a comma and an amount. If no amount is specified, then the generic Shipping Cost amount from the next setting will be applied.<br><br>Examples:<br>121 Main Street;20 Church Street<br>Sunnyside,4.00;Lee Park,5.00;High Street,0.00<br>Dallas;Tulsa,5.00;Phoenix,0.00<br>For multilanguage use, see the define-statement in the language file for this module.');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_HANDLING', 'Handling Fee');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_HANDLING', 'Handling fee for this shipping method.');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_TAX_CLASS', 'Tax Class');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_TAX_CLASS', 'Use the following tax class on the shipping fee.');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_ZONE', 'Shipping Zone');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_ZONE', 'If a zone is selected, only enable this shipping method for that zone.');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_SORT_ORDER', 'Sort Order');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_SORT_ORDER', 'Sort order of display.');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_STATUS', 'Enable Store Pickup Shipping');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_STATUS', 'Do you want to offer In Store rate shipping?');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_COST', 'Shipping Cost');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_COST', 'The shipping cost for all orders using this shipping method.');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS', 'Tax Class');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_CLASS', 'Use the following tax class on the shipping fee.');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS', 'Tax Basis');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_TAX_BASIS', 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_ZONE', 'Shipping Zone');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_ZONE', 'If a zone is selected, only enable this shipping method for that zone.');
define('CFGTITLE_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER', 'Sort Order');
define('CFGDESC_MODULE_SHIPPING_STOREPICKUP_SORT_ORDER', 'Sort order of display.');
define('CFGTITLE_MODULE_SHIPPING_ITEM_STATUS', 'Enable Item Shipping');
define('CFGDESC_MODULE_SHIPPING_ITEM_STATUS', 'Do you want to offer per item rate shipping?');
define('CFGTITLE_MODULE_SHIPPING_ITEM_COST', 'Shipping Cost');
define('CFGDESC_MODULE_SHIPPING_ITEM_COST', 'The shipping cost will be multiplied by the number of items in an order that uses this shipping method.');
define('CFGTITLE_MODULE_SHIPPING_ITEM_HANDLING', 'Handling Fee');
define('CFGDESC_MODULE_SHIPPING_ITEM_HANDLING', 'Handling fee for this shipping method.');
define('CFGTITLE_MODULE_SHIPPING_ITEM_TAX_CLASS', 'Tax Class');
define('CFGDESC_MODULE_SHIPPING_ITEM_TAX_CLASS', 'Use the following tax class on the shipping fee.');
define('CFGTITLE_MODULE_SHIPPING_ITEM_TAX_BASIS', 'Tax Basis');
define('CFGDESC_MODULE_SHIPPING_ITEM_TAX_BASIS', 'On what basis is Shipping Tax calculated. Options are<br>Shipping - Based on customers Shipping Address<br>Billing Based on customers Billing address<br>Store - Based on Store address if Billing/Shipping Zone equals Store zone');
define('CFGTITLE_MODULE_SHIPPING_ITEM_ZONE', 'Shipping Zone');
define('CFGDESC_MODULE_SHIPPING_ITEM_ZONE', 'If a zone is selected, only enable this shipping method for that zone.');
define('CFGTITLE_MODULE_SHIPPING_ITEM_SORT_ORDER', 'Sort Order');
define('CFGDESC_MODULE_SHIPPING_ITEM_SORT_ORDER', 'Sort order of display.');
define('CFGTITLE_MODULE_PAYMENT_FREECHARGER_SORT_ORDER', 'Sort order of display.');
define('CFGDESC_MODULE_PAYMENT_FREECHARGER_SORT_ORDER', 'Sort order of display. Lowest is displayed first.');
define('CFGTITLE_MODULE_PAYMENT_FREECHARGER_ORDER_STATUS_ID', 'Set Order Status');
define('CFGDESC_MODULE_PAYMENT_FREECHARGER_ORDER_STATUS_ID', 'Set the status of orders made with this payment module to this value');
define('CFGTITLE_MODULE_PAYMENT_MONEYORDER_SORT_ORDER', 'Sort order of display.');
define('CFGDESC_MODULE_PAYMENT_MONEYORDER_SORT_ORDER', 'Sort order of display. Lowest is displayed first.');
define('CFGTITLE_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID', 'Set Order Status');
define('CFGDESC_MODULE_PAYMENT_MONEYORDER_ORDER_STATUS_ID', 'Set the status of orders made with this payment module to this value');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_TAX_CLASS', 'Tax Class');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_TAX_CLASS', 'Use the following tax class when treating Group Discount as Credit Note.');
define('CFGTITLE_MODULE_SHIPPING_FLAT_STATUS', '定額料金');
define('CFGDESC_MODULE_SHIPPING_FLAT_STATUS', '定額料金による配送を提供するかどうかを設定します。');
define('CFGTITLE_MODULE_SHIPPING_FLAT_COST', '配送料金');
define('CFGDESC_MODULE_SHIPPING_FLAT_COST', 'すべての注文に対して適用される配送料金を設定します。');
define('CFGTITLE_MODULE_SHIPPING_FLAT_TAX_CLASS', '税種別');
define('CFGDESC_MODULE_SHIPPING_FLAT_TAX_CLASS', '定額料金に適用される税種別を選択します。');
define('CFGTITLE_MODULE_SHIPPING_FLAT_TAX_BASIS', '税率の計算ベース');
define('CFGDESC_MODULE_SHIPPING_FLAT_TAX_BASIS', '配送料にかかる税金オプションの設定します。<br><br>
・Shipping - 顧客の送付先住所に基づく<br>
・Billing - 顧客の請求先住所に基づく<br>
・Store - ショップの所在住所に基づく(送付先/請求先がショップ所在地と同じ地域の場合に有効)');
define('CFGTITLE_MODULE_SHIPPING_FLAT_ZONE', '配送地域');
define('CFGDESC_MODULE_SHIPPING_FLAT_ZONE', '配送地域を選択すると選択された地域のみで利用可能になります。');
define('CFGTITLE_MODULE_SHIPPING_FLAT_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_SHIPPING_FLAT_SORT_ORDER', '表示の整列順を設定できます。数字が小さいほど上位に表示されます。');
define('CFGTITLE_DEFAULT_CURRENCY', 'デフォルトの通貨');
define('CFGDESC_DEFAULT_CURRENCY', 'デフォルトの通貨を設定します。');
define('CFGTITLE_DEFAULT_LANGUAGE', 'デフォルトの言語');
define('CFGDESC_DEFAULT_LANGUAGE', 'デフォルトの言語を設定します。');
define('CFGTITLE_DEFAULT_ORDERS_STATUS_ID', '新規注文のデフォルトステータス');
define('CFGDESC_DEFAULT_ORDERS_STATUS_ID', '新規の注文を受け付けたときのデフォルトステータスを設定します。');
define('CFGTITLE_ADMIN_CONFIGURATION_KEY_ON', '管理画面で設定キー(configuration_key)を表示');
define('CFGDESC_ADMIN_CONFIGURATION_KEY_ON', '管理画面で設定キー(configuration_key)を表示しますか?<br>
表示したい場合は1に設定してください。');
define('CFGTITLE_DEFAULT_ZERO_BALANCE_ORDERS_STATUS_ID', '差引残高0の場合の注文ステータス');
define('CFGDESC_DEFAULT_ZERO_BALANCE_ORDERS_STATUS_ID', '注文の差引残高が0の場合に適用される注文ステータスを設定します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_TAX_CLASS', '税種別');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_TAX_CLASS', 'ギフト券に適用される税種別を設定します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID', 'Set Order Status');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_ORDER_STATUS_ID', 'Set the status of orders made where GV covers full payment');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS', '税種別');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_TAX_CLASS', 'クーポン券に適用される税種別を設定します。');
define('CFGTITLE_ADMIN_DEMO', '管理者デモ -オン/オフ');
define('CFGDESC_ADMIN_DEMO', '管理者デモを有効にするかどうかを設定します。<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_STORE_NAME', 'ショップ名');
define('CFGDESC_STORE_NAME', 'ショップ名を設定します。');
define('CFGTITLE_ENTRY_FIRST_NAME_MIN_LENGTH', '姓の最小文字数');
define('CFGDESC_ENTRY_FIRST_NAME_MIN_LENGTH', '姓の文字数の最小値を設定します。');
define('CFGTITLE_ENTRY_NICK_MIN_LENGTH', 'ニックネームの最小文字数');
define('CFGDESC_ENTRY_NICK_MIN_LENGTH', 'ニックネームの文字数の最小値を設定します。');
define('CFGTITLE_MAX_ADDRESS_BOOK_ENTRIES', 'アドレス帳の最大登録数');
define('CFGDESC_MAX_ADDRESS_BOOK_ENTRIES', '顧客が登録できるアドレス帳の登録数の最大値を設定します。');
define('CFGTITLE_SMALL_IMAGE_WIDTH', '商品画像(小)の横幅');
define('CFGDESC_SMALL_IMAGE_WIDTH', '小さな画像の横幅(ピクセル)を設定します。');
define('CFGTITLE_ACCOUNT_GENDER', '(メール用)敬称表示(Mr. or Ms)');
define('CFGDESC_ACCOUNT_GENDER', '顧客のアカウント作成の際、メール用の敬称(Mr. or Ms) を表示するかどうかを設定します。');
define('CFGTITLE_MODULE_PAYMENT_FREECHARGER_STATUS', 'Enable Free Charge Module');
define('CFGDESC_MODULE_PAYMENT_FREECHARGER_STATUS', 'Do you want to accept Free Charge payments?');
define('CFGTITLE_MODULE_PAYMENT_MONEYORDER_STATUS', 'Enable Check/Money Order Module');
define('CFGDESC_MODULE_PAYMENT_MONEYORDER_STATUS', 'Do you want to accept Check/Money Order payments?');
define('CFGTITLE_MODULE_PAYMENT_MONEYORDER_PAYTO', 'Make Payable to:');
define('CFGDESC_MODULE_PAYMENT_MONEYORDER_PAYTO', 'Who should payments be made payable to?');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_STATUS', 'This module is installed');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_STATUS', '');
define('CFGTITLE_SHIPPING_ORIGIN_COUNTRY', '出荷国名');
define('CFGDESC_SHIPPING_ORIGIN_COUNTRY', '配送料の計算に利用するための国名を選択します。');
define('CFGTITLE_PRODUCT_LIST_IMAGE', '商品イメージの表示');
define('CFGDESC_PRODUCT_LIST_IMAGE', '商品一覧中の商品画像の表示・非表示/ソート順を設定します。<br><br>
・数値が小さいほど先に表示<br>
・0 = 非表示');
define('CFGTITLE_STOCK_CHECK', '在庫水準のチェック');
define('CFGDESC_STOCK_CHECK', '十分な在庫があるかチェックするかどうかを設定します。');
define('CFGTITLE_STORE_PAGE_PARSE_TIME', 'ページのパースに要した時間をログに記録するかどうかを設定します。');
define('CFGDESC_STORE_PAGE_PARSE_TIME', 'ページのパースに要した時間をログに記録するかどうかを設定します。');
define('CFGTITLE_EMAIL_TRANSPORT', 'メール送信 - 接続方法');
define('CFGDESC_EMAIL_TRANSPORT', 'メール送信にsendmailへのローカル接続を使用するかTCP/IP経由のSMTP接続を使用するかを設定します。サーバのOSがWindowsやMacOSの場合はSMTPに設定してください。<br><br>SMTPAUTHは、サーバーがメール送信の際にSMTP authorizationを求める場合にのみ使ってください。その場合、管理画面でSMTPAUTH設定を行う必要があります。<br><br>"Sendmail -f"は、-fパラメータが必要なサーバ向けの設定で、スプーフィングを防ぐために用いられることが多いセキュリティ上の設定です。メールサーバーのホスト側で使用可能な設定になっていない場合、エラーになることがあります。');
define('CFGTITLE_SEND_EMAILS', 'メールを送信');
define('CFGDESC_SEND_EMAILS', 'E-Mailを外部に送信するかどうかを設定します。');
define('CFGTITLE_DOWNLOAD_ENABLED', 'ダウンロードを有効にする');
define('CFGDESC_DOWNLOAD_ENABLED', '商品のダウンロード機能を設定します。');
define('CFGTITLE_GZIP_LEVEL', 'GZip圧縮を使用する');
define('CFGDESC_GZIP_LEVEL', 'HTTP通信にGZip圧縮を使用してページを転送しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_SESSION_WRITE_DIRECTORY', 'セッション情報保存ディレクトリ');
define('CFGDESC_SESSION_WRITE_DIRECTORY', 'セッション管理がファイルベースの場合に保存するディレクトリを設定します。');
define('CFGTITLE_SECURITY_CODE_LENGTH', 'ギフト/クーポン券コードの長さ');
define('CFGDESC_SECURITY_CODE_LENGTH', 'ギフト/クーポン券コードの長さを設定します。<br><br>
注意：コードが長いほど安全です。');
define('CFGTITLE_CC_ENABLED_VISA', 'クレジットカード利用の可否 - VISA');
define('CFGDESC_CC_ENABLED_VISA', 'VISAを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_STATUS', 'ギフト券の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS', '低額商品取扱い手数料の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_SHIPPING_STATUS', '送料の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_SHIPPING_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_SUBTOTAL_STATUS', '小計の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_SUBTOTAL_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_TAX_STATUS', '税金の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_TAX_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_TOTAL_STATUS', '合計の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_TOTAL_STATUS', '');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_STATUS', 'クーポン券の表示');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_STATUS', '');
define('CFGTITLE_BOX_WIDTH_LEFT', '左側サイドボックスの横幅');
define('CFGDESC_BOX_WIDTH_LEFT', '左側に表示されるサイドボックスの横幅を設定します。pxを含めて入力できます。
<br><br>
・デフォルト = 150px');
define('CFGTITLE_DOWN_FOR_MAINTENANCE', '<strong>「メンテナンス中」 オン/オフ</strong>');
define('CFGDESC_DOWN_FOR_MAINTENANCE', '「メンテナンス中」の表示について設定します。<br>
<br>
・true=on
・false=off');
define('CFGTITLE_DISPLAY_CONDITIONS_ON_CHECKOUT', 'チェックアウト時に「ご利用規約」確認画面を表示');
define('CFGDESC_DISPLAY_CONDITIONS_ON_CHECKOUT', 'チェックアウトの際に「ご利用規約」の画面を表示しますか?');
define('CFGTITLE_PRODUCT_NEW_LIST_IMAGE', '商品画像を表示');
define('CFGDESC_PRODUCT_NEW_LIST_IMAGE', '商品画像を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_IMAGE', '商品画像の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_IMAGE', '商品画像を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>
');
define('CFGTITLE_PRODUCT_ALL_LIST_IMAGE', '商品画像の表示');
define('CFGDESC_PRODUCT_ALL_LIST_IMAGE', '商品画像を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_STORE_OWNER', 'ショップオーナー名');
define('CFGDESC_STORE_OWNER', 'ショップオーナー名(または運営管理者名)を設定します。');
define('CFGTITLE_ENTRY_LAST_NAME_MIN_LENGTH', '名の最小文字数');
define('CFGDESC_ENTRY_LAST_NAME_MIN_LENGTH', '名の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS', '管理画面 - 1ページに表示する検索結果の最大数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS', '管理画面の1ページに表示する検索結果の数の最大値を設定します。');
define('CFGTITLE_SMALL_IMAGE_HEIGHT', '商品画像(小)の高さ');
define('CFGDESC_SMALL_IMAGE_HEIGHT', '小さな画像の高さ(ピクセル)を設定します。');
define('CFGTITLE_ACCOUNT_DOB', '生年月日');
define('CFGDESC_ACCOUNT_DOB', '顧客のアカウント作成の際、「生年月日」の欄を表示するかどうかを設定します。<br>注意: 不要な場合はfalseに、必要な場合はtrueを指定してください。');
define('CFGTITLE_MODULE_PAYMENT_FREECHARGER_ZONE', 'Payment Zone');
define('CFGDESC_MODULE_PAYMENT_FREECHARGER_ZONE', 'If a zone is selected, only enable this payment method for that zone.');
define('CFGTITLE_MODULE_PAYMENT_MONEYORDER_ZONE', 'Payment Zone');
define('CFGDESC_MODULE_PAYMENT_MONEYORDER_ZONE', 'If a zone is selected, only enable this payment method for that zone.');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_SORT_ORDER', 'Sort Order');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_SORT_ORDER', 'Sort order of display.');
define('CFGTITLE_SHIPPING_ORIGIN_ZIP', 'ショップの郵便番号');
define('CFGDESC_SHIPPING_ORIGIN_ZIP', 'ショップの郵便番号を入力します。');
define('CFGTITLE_PRODUCT_LIST_MANUFACTURER', '商品メーカーの表示');
define('CFGDESC_PRODUCT_LIST_MANUFACTURER', '商品のメーカー名を表示するかどうかを設定します。<br><br>
・数値が小さいほど先に表示<br>
・0 = 非表示');
define('CFGTITLE_STOCK_LIMITED', '在庫数からマイナス');
define('CFGDESC_STOCK_LIMITED', '受注時点で各在庫数から注文数をマイナスしますか?');
define('CFGTITLE_STORE_PAGE_PARSE_TIME_LOG', 'ページのパースログを保存するディレクトリとファイル名を設定します。');
define('CFGDESC_STORE_PAGE_PARSE_TIME_LOG', 'ページのパースログを保存するディレクトリとファイル名を設定します。');
define('CFGTITLE_EMAIL_LINEFEED', 'メールの改行コード');
define('CFGDESC_EMAIL_LINEFEED', 'メールヘッダを区切るのに使用する改行コードを指定します。');
define('CFGTITLE_DOWNLOAD_BY_REDIRECT', 'リダイレクトでダウンロード画面へ');
define('CFGDESC_DOWNLOAD_BY_REDIRECT', 'ダウンロードの際にブラウザによるリダイレクト(転送)を可能にするかどうかを設定します。<br>
UNIX系でないサーバではオフにしてください。
<br>注意：この設定をオンにしたら、/pub ディレクトリのパーミッションを777にしてください。');
define('CFGTITLE_DOWNLOAD_IN_CHUNKS', 'ストリーミングによるダウンロード');
define('CFGDESC_DOWNLOAD_IN_CHUNKS', '「リダイレクトでダウンロード」がオフで、かつPHP memory_limit設定が8MB以下の場合、この設定をオンにしてください。ストリーミングで、より小さな単位でのファイル転送を行うためです。<br><br>「リダイレクトでダウンロード」がオンの場合、効果はありません。');
define('CFGTITLE_SESSION_USE_FQDN', 'クッキーに保存するドメイン名の設定');
define('CFGDESC_SESSION_USE_FQDN', 'クッキーに保存するドメイン名について設定します。<br><br>

・True = ドメインネーム全体をクッキーに保存(例：www.mydomain.com)<br>
・False = ドメインネームの一部を保存(例：mydomain.com)。<br>
よくわからない場合はこの設定はTrueにしておいてください。');
define('CFGTITLE_SESSION_FORCE_COOKIE_USE', 'クッキー利用を必須にする');
define('CFGDESC_SESSION_FORCE_COOKIE_USE', 'セッションに必ずクッキーを利用します。True指定するとブラウザのクッキーがオフになっている場合はセッションを開始しません。セキュリティ上の理由から余程の理由のない限りはTrue指定のままとすることを強く推奨します。');
define('CFGTITLE_CC_ENABLED_MC', 'クレジットカード利用の可否 - MasterCard');
define('CFGDESC_CC_ENABLED_MC', 'MasterCardを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_SORT_ORDER', '表示の整列順を設定します。<br>数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_SORT_ORDER', '表示の整列順を設定します。数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_SHIPPING_SORT_ORDER', '表示の整列順を設定します。<br>
数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_SUBTOTAL_SORT_ORDER', '表示の整列順を設定します。<br>
数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_TAX_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_TAX_SORT_ORDER', '表示の整列順を設定できます. 数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_TOTAL_SORT_ORDER', '表示の整列順を設定できます。<br>
数字が小さいほど上位に表示されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER', '表示の整列順');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_SORT_ORDER', '表示の整列順を設定します。');
define('CFGTITLE_BOX_WIDTH_RIGHT', '右側サイドボックスの横幅');
define('CFGDESC_BOX_WIDTH_RIGHT', '右側に表示されるサイドボックスの横幅を設定します。pxを含めて入力できます。<br><br>
・Default = 150px');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_FILENAME', '「メンテナンス中」- 表示するファイル');
define('CFGDESC_DOWN_FOR_MAINTENANCE_FILENAME', 'メンテナンス中に表示するファイルのファイル名を設定します。デフォルトは"down_for_maintenance"です。<br><br>
【注意】拡張子は付けないでください。');
define('CFGTITLE_DISPLAY_PRIVACY_CONDITIONS', 'アカウント作成時に個人情報保護方針確認画面を表示');
define('CFGDESC_DISPLAY_PRIVACY_CONDITIONS', 'アカウント作成の際、個人情報保護方針への同意画面を表示しますか?<br><div style="color: red;">注意：「個人情報保護法」では、個人情報保護方針を開示することが求められています。</div>');
define('CFGTITLE_PRODUCT_NEW_LIST_QUANTITY', '商品の数量を表示');
define('CFGDESC_PRODUCT_NEW_LIST_QUANTITY', '商品数量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_QUANTITY', '商品数量の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_QUANTITY', '商品数量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>
');
define('CFGTITLE_PRODUCT_ALL_LIST_QUANTITY', '商品数量の表示');
define('CFGDESC_PRODUCT_ALL_LIST_QUANTITY', '商品数量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_STORE_TELEPHONE_CUSTSERVICE', 'サポート電話窓口');
define('CFGDESC_STORE_TELEPHONE_CUSTSERVICE', 'サポート電話窓口の電話番号を入力してください。この番号は支払いモジュールによってはサポート電話窓口として決済会社に情報が送られる場合があります。例）paypalなど');
define('CFGTITLE_ENTRY_DOB_MIN_LENGTH', '生年月日の最小文字数');
define('CFGDESC_ENTRY_DOB_MIN_LENGTH', '生年月日の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_PAGE_LINKS', 'ページ・リンク数の最大表示数');
define('CFGDESC_MAX_DISPLAY_PAGE_LINKS', '商品リストや購入履歴の一覧表示でページの下などに表示されるページ数・リンク数の最大値を設定します。');
define('CFGTITLE_MAX_DISPLAY_PAGE_LINKS_MOBILE', 'Prev/Next Navigation Page Links (Mobile)');
define('CFGDESC_MAX_DISPLAY_PAGE_LINKS_MOBILE', 'Number of numbered pagination links to display on Mobile devices (assuming your template supports mobile-specific settings)');
define('CFGTITLE_HEADING_IMAGE_WIDTH', 'ヘッダ画像の横幅 - 管理画面');
define('CFGDESC_HEADING_IMAGE_WIDTH', '管理画面でのヘッダ画像の横幅を設定します。');
define('CFGTITLE_ACCOUNT_COMPANY', '会社名');
define('CFGDESC_ACCOUNT_COMPANY', '顧客のアカウント作成の際、「会社名」を表示するかどうかを設定します。');
define('CFGTITLE_SHIPPING_MAX_WEIGHT', '一回の配送で配送可能な最大重量(kg)');
define('CFGDESC_SHIPPING_MAX_WEIGHT', '一回の配送で可能な重量(kg)の最大値を設定します。例えば10kgに設定した状態でカートに30kgの商品があった場合、10kg × 3回の配送という形で処理されます。');
define('CFGTITLE_PRODUCT_LIST_MODEL', '商品型番の表示');
define('CFGDESC_PRODUCT_LIST_MODEL', '商品一覧中の商品型番の表示・非表示/ソート順を設定します。数値が小さいほど先に表示されます。(0 = 非表示)');
define('CFGTITLE_STOCK_ALLOW_CHECKOUT', 'チェックアウトを許可');
define('CFGDESC_STOCK_ALLOW_CHECKOUT', '在庫が不足している場合にチェックアウトを許可しますか?');
define('CFGTITLE_STORE_PARSE_DATE_TIME_FORMAT', 'ログに記録する日付形式を設定します。');
define('CFGDESC_STORE_PARSE_DATE_TIME_FORMAT', 'ログに記録する日付形式を設定します。');
define('CFGTITLE_EMAIL_USE_HTML', 'メール送信にMIME HTMLを使用');
define('CFGDESC_EMAIL_USE_HTML', 'メールをHTML形式で送信するかどうかを設定します。');
define('CFGTITLE_DOWNLOAD_MAX_DAYS', 'ダウンロードの有効期限(日数)');
define('CFGDESC_DOWNLOAD_MAX_DAYS', 'ダウンロードリンクの有効期間の日数を設定します。<br><br>
・0 = 無期限');
define('CFGTITLE_SESSION_CHECK_SSL_SESSION_ID', 'SSLセッションIDチェック');
define('CFGDESC_SESSION_CHECK_SSL_SESSION_ID', '全てのHTTPSリクエストでSSLセッションIDをチェックしますか?');
define('CFGTITLE_CC_ENABLED_AMEX', 'クレジットカード利用の可否 - AmericanExpress');
define('CFGDESC_CC_ENABLED_AMEX', 'AmericanExpressを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_QUEUE', '購入を承認待ちに');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_QUEUE', 'ギフト券購入を承認待ちリストに追加しますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE', '低額商品取扱い手数料の設定');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_LOW_ORDER_FEE', '低額商品取扱い手数料設定を有効にしますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING', '送料無料設定');
define('CFGDESC_MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING', '送料無料設定を有効にしますか?');
define('CFGTITLE_BREAD_CRUMBS_SEPARATOR', 'パン屑リストの区切り文字');
define('CFGDESC_BREAD_CRUMBS_SEPARATOR', 'パン屑リストの区切り文字を設定します。<br><br>
【注意】空白を含む場合は&amp;nbsp;を使用することができます。<br>
・デフォルト = &amp;nbsp;::&amp;nbsp;');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_HEADER_OFF', '「メンテナンス中」- ヘッダを隠す');
define('CFGDESC_DOWN_FOR_MAINTENANCE_HEADER_OFF', '「メンテナンス中」表示モードの際、ヘッダを隠しますか?<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_PRODUCT_NEW_BUY_NOW', '「今すぐ買う」ボタンの表示');
define('CFGDESC_PRODUCT_NEW_BUY_NOW', '「今すぐ買う」ボタンを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_BUY_NOW', '「今すぐ買う」ボタンの表示');
define('CFGDESC_PRODUCT_FEATURED_BUY_NOW', '「今すぐ買う」ボタンを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_BUY_NOW', '「今すぐ買う」ボタンの表示');
define('CFGDESC_PRODUCT_ALL_BUY_NOW', '「今すぐ買う」ボタンを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_DISPLAY_CONTACT_US_PRIVACY_CONDITIONS', 'お問い合わせ時の個人情報確認画面表示');
define('CFGDESC_DISPLAY_CONTACT_US_PRIVACY_CONDITIONS', 'お問い合わせする画面で個人情報の確認画面を表示します。<div style="color: red;">2005年4月1日に施行された「個人情報保護法」では、個人情報保護方針を開示することが求められています。</div>');
define('CFGTITLE_ENTRY_EMAIL_ADDRESS_MIN_LENGTH', 'メールアドレスの最小文字数');
define('CFGDESC_ENTRY_EMAIL_ADDRESS_MIN_LENGTH', 'メールアドレスの文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_SPECIAL_PRODUCTS', '特価商品の最大表示数');
define('CFGDESC_MAX_DISPLAY_SPECIAL_PRODUCTS', '特価商品として表示する商品数の最大値を設定します。');
define('CFGTITLE_HEADING_IMAGE_HEIGHT', 'ヘッダ画像の高さ - 管理画面');
define('CFGDESC_HEADING_IMAGE_HEIGHT', '管理画面でのヘッダ画像の高さを設定します。');
define('CFGTITLE_ACCOUNT_SUBURB', '住所2');
define('CFGDESC_ACCOUNT_SUBURB', '顧客のアカウント作成の際、「住所2」を表示するかどうかを設定します。');
define('CFGTITLE_SHIPPING_BOX_WEIGHT', '小・中パッケージの風袋 - 比率・重量');
define('CFGDESC_SHIPPING_BOX_WEIGHT', '典型的な小・中パッケージの風袋(ふうたい：大きさと重量)を設定します。<br>
例：10% + 1kg 10:1<br>
10% + 0kg 10:0<br>
0% + 5kg 0:5<br>
0% + 0kg 0:0');
define('CFGTITLE_PRODUCT_LIST_NAME', '商品名');
define('CFGDESC_PRODUCT_LIST_NAME', '商品一覧中の商品名の表示・非表示/ソート順を設定します。<br><br>
・数値が小さいほど先に表示<br>
・0 = 非表示');
define('CFGTITLE_STOCK_MARK_PRODUCT_OUT_OF_STOCK', '在庫切れ商品のサイン');
define('CFGDESC_STOCK_MARK_PRODUCT_OUT_OF_STOCK', '注文時点で商品が在庫切れの場合に顧客へ表示するサインを設定します。');
define('CFGTITLE_DISPLAY_PAGE_PARSE_TIME', '各ページの下にパース時間を表示するかどうかを設定します。<br>「ページのパース時間を記録」を true にしておく必要はありません。');
define('CFGDESC_DISPLAY_PAGE_PARSE_TIME', '各ページの下にパース時間を表示するかどうかを設定します。<br>「ページのパース時間を記録」を true にしておく必要はありません。');
define('CFGTITLE_DOWNLOAD_MAX_COUNT', 'ダウンロード可能回数(商品ごと)');
define('CFGDESC_DOWNLOAD_MAX_COUNT', 'ダウンロードできる回数の最大値を設定します。<br><br>
・0 = ダウンロード不可');
define('CFGTITLE_SESSION_CHECK_USER_AGENT', 'User Agentチェック');
define('CFGDESC_SESSION_CHECK_USER_AGENT', '全てのリクエスト時にUser Agentのチェックを行いますか?');
define('CFGTITLE_CC_ENABLED_DINERS_CLUB', 'クレジットカード利用の可否 - Diners Club');
define('CFGDESC_CC_ENABLED_DINERS_CLUB', 'Diners Clubを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER', '低額商品取扱い手数料を課金する注文金額');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_ORDER_UNDER', 'この注文金額未満の場合、手数料を課金します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER', '送料無料にする購入金額設定');
define('CFGDESC_MODULE_ORDER_TOTAL_SHIPPING_FREE_SHIPPING_OVER', '設定金額以上のご購入の場合は送料を無料にします。');
define('CFGTITLE_DEFINE_BREADCRUMB_STATUS', 'パン屑リストの設定');
define('CFGDESC_DEFINE_BREADCRUMB_STATUS', 'パン屑リストのリンクを有効にしますか?<br>0= OFF<br>1= ON<br>2= TOPページのみ解除');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_COLUMN_LEFT_OFF', '「メンテナンス中」- 左カラムを隠す');
define('CFGDESC_DOWN_FOR_MAINTENANCE_COLUMN_LEFT_OFF', '「メンテナンス中」表示モードの際、左カラムを隠しますか?<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_PRODUCT_NEW_LIST_NAME', '商品名の表示');
define('CFGDESC_PRODUCT_NEW_LIST_NAME', '商品名を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_NAME', '商品名の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_NAME', '商品名を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_NAME', '商品名の表示');
define('CFGDESC_PRODUCT_ALL_LIST_NAME', '商品名を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_ENTRY_STREET_ADDRESS_MIN_LENGTH', '住所の最小文字数');
define('CFGDESC_ENTRY_STREET_ADDRESS_MIN_LENGTH', '番地・マンション・アパート名の最小文字数を設定します。');
define('CFGTITLE_MAX_DISPLAY_NEW_PRODUCTS', '今月の新着商品の最大表示数');
define('CFGDESC_MAX_DISPLAY_NEW_PRODUCTS', '今月の新着商品数の最大値を設定します。');
define('CFGTITLE_SUBCATEGORY_IMAGE_WIDTH', 'サブカテゴリ画像の横幅');
define('CFGDESC_SUBCATEGORY_IMAGE_WIDTH', 'サブカテゴリ画像の横幅をピクセル数で設定します。');
define('CFGTITLE_ACCOUNT_STATE', '都道府県名');
define('CFGDESC_ACCOUNT_STATE', '顧客のアカウント作成の際、「都道府県名」を表示するかどうかを設定します。');
define('CFGTITLE_ACCOUNT_STATE_DRAW_INITIAL_DROPDOWN', '都道府県名 - ドロップダウンで表示');
define('CFGDESC_ACCOUNT_STATE_DRAW_INITIAL_DROPDOWN', '「都道府県名」は常にドロップダウン形式で表示しますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_INC_SHIPPING', 'Include Shipping');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_INC_SHIPPING', 'Include Shipping value in amount before discount calculation?');
define('CFGTITLE_SHIPPING_BOX_PADDING', '大型パッケージの風袋 - 大きさ・重量');
define('CFGDESC_SHIPPING_BOX_PADDING', '大きなパッケージの風袋風袋(ふうたい：大きさと重量)を設定します。<br>
例：10% + 1kg 10:1<br>
10% + 0kg 10:0<br>
0% + 5kg 0:5<br>
0% + 0kg 0:0');
define('CFGTITLE_PRODUCT_LIST_PRICE', '商品価格・「カートに入れる」を表示');
define('CFGDESC_PRODUCT_LIST_PRICE', '商品価格・「カートに入れる」ボタンを表示するかどうかを設定します。<br>
<br>
・数値が小さいほど先に表示<br>
・0 = 非表示');
define('CFGTITLE_STOCK_REORDER_LEVEL', '在庫の再注文水準');
define('CFGDESC_STOCK_REORDER_LEVEL', '在庫の再注文が必要になる商品数を設定します。');
define('CFGTITLE_STORE_DB_TRANSACTIONS', 'ログにデータベースクエリーを記録しておくかどうか設定します。(PHP4の場合のみ)');
define('CFGDESC_STORE_DB_TRANSACTIONS', 'ログにデータベースクエリーを記録しておくかどうか設定します。(PHP4の場合のみ)');
define('CFGTITLE_SESSION_CHECK_IP_ADDRESS', 'IPアドレスチェック');
define('CFGDESC_SESSION_CHECK_IP_ADDRESS', '全てのリクエスト時にIPアドレスをチェックしますか?');
define('CFGTITLE_CC_ENABLED_DISCOVER', 'クレジットカード利用の可否 - Discover Card');
define('CFGDESC_CC_ENABLED_DISCOVER', 'Discover Cardを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_SHIPPING', '送料を含める');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_INC_SHIPPING', '合計計算に送料を含めますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_FEE', '取扱い手数料の設定');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_FEE', '手数料を設定します。<br><br>
率(%)で計算する場合には「10%」などと記入し、固定の場合には「500」(500円)などと記入します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_SHIPPING_DESTINATION', '送料無料にする地域の設定');
define('CFGDESC_MODULE_ORDER_TOTAL_SHIPPING_DESTINATION', '設定した地域に対して送料無料を適用します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING', '送料を含める');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_SHIPPING', '送料を計算に含めるかどうかを設定します。');
define('CFGTITLE_BEST_SELLERS_FILLER', 'ベストセラー - 桁数合わせ文字');
define('CFGDESC_BEST_SELLERS_FILLER', '桁数を合わせるために挿入する文字を設定します。<br>デフォルト = &amp;nbsp;(空白)');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_COLUMN_RIGHT_OFF', '「メンテナンス中」- 右カラムを隠す');
define('CFGDESC_DOWN_FOR_MAINTENANCE_COLUMN_RIGHT_OFF', '「メンテナンス中」表示モードの際、右カラムを隠しますか?<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_PRODUCT_NEW_LIST_MODEL', '商品型番の表示');
define('CFGDESC_PRODUCT_NEW_LIST_MODEL', '商品型番を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_MODEL', '商品型番の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_MODEL', '商品型番を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_MODEL', '商品型番の表示');
define('CFGDESC_PRODUCT_ALL_LIST_MODEL', '商品型番を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_STORE_COUNTRY', '国');
define('CFGDESC_STORE_COUNTRY', '店舗が存在する国名を入力してください。<strong>注意：変更したら店舗のゾーンの更新を忘れずに行ってください。</strong>');
define('CFGTITLE_ENTRY_COMPANY_MIN_LENGTH', '会社名の最小文字数');
define('CFGDESC_ENTRY_COMPANY_MIN_LENGTH', '会社名の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_UPCOMING_PRODUCTS', '入荷予定商品の最大表示数');
define('CFGDESC_MAX_DISPLAY_UPCOMING_PRODUCTS', '入荷予定商品として表示する商品数の最大値を設定します。');
define('CFGTITLE_SUBCATEGORY_IMAGE_HEIGHT', 'サブカテゴリ画像の高さ');
define('CFGDESC_SUBCATEGORY_IMAGE_HEIGHT', 'サブカテゴリ画像の高さをピクセル数で設定します。');
define('CFGTITLE_SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY', 'アカウントのデフォルト国別IDの作成');
define('CFGDESC_SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY', 'アカウントのデフォルト国別IDを設定します。<br>デフォルトはJapanです。');
define('CFGTITLE_MODULE_SHIPPING_FREESHIPPER_COST', 'Free Shipping Cost');
define('CFGDESC_MODULE_SHIPPING_FREESHIPPER_COST', 'What is the Shipping cost?');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_INC_TAX', 'Include Tax');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_INC_TAX', 'Include Tax value in amount before discount calculation?');
define('CFGTITLE_PRODUCT_LIST_QUANTITY', '商品数量の表示');
define('CFGDESC_PRODUCT_LIST_QUANTITY', '商品一覧中の商品数量の表示・非表示/ソート順を設定します。<br><br>
・数値が小さいほど先に表示<br>
・0 = 非表示');
define('CFGTITLE_ENTRY_EMAIL_ADDRESS_CHECK', 'メールアドレスをDNSで確認');
define('CFGDESC_ENTRY_EMAIL_ADDRESS_CHECK', 'メールアドレスをDNSサーバに問い合わせ確認するかどうかを設定します。');
define('CFGTITLE_EMAIL_ARCHIVE', 'メール保存の設定');
define('CFGDESC_EMAIL_ARCHIVE', '送信済みのメールを保存しておく場合はtrueを設定してください。');
define('CFGTITLE_SESSION_BLOCK_SPIDERS', 'ロボット(スパイダー)のセッションを防止');
define('CFGDESC_SESSION_BLOCK_SPIDERS', '既知のロボット(スパイダー)がセッションを開始することを防止しますか?');
define('CFGTITLE_CC_ENABLED_JCB', 'クレジットカード利用の可否 - JCB');
define('CFGDESC_CC_ENABLED_JCB', 'JCBを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_INC_TAX', '税金を含める');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_INC_TAX', '計算時に税金を含めるかどうかを設定します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION', '低額商品取扱い手数料を適用する地域');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_DESTINATION', '設定した地域に対して低額商品取扱い手数料が適用されます。');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_INC_TAX', '税金を含める - オン/オフ');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_INC_TAX', '代金計算に税金を含めるかどうかを設定します。');
define('CFGTITLE_BEST_SELLERS_TRUNCATE', 'ベストセラー - 表示文字数');
define('CFGDESC_BEST_SELLERS_TRUNCATE', 'ベストセラーのサイドボックスで表示する商品名の長さを設定します。<br>デフォルト = 35');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_FOOTER_OFF', '「メンテナンス中」- フッタを隠す');
define('CFGDESC_DOWN_FOR_MAINTENANCE_FOOTER_OFF', '「メンテナンス中」表示モードの際、フッタを隠しますか?<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_PRODUCT_NEW_LIST_MANUFACTURER', '商品メーカーの表示');
define('CFGDESC_PRODUCT_NEW_LIST_MANUFACTURER', '商品メーカーを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_MANUFACTURER', '商品メーカーの表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_MANUFACTURER', '商品メーカーを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_MANUFACTURER', '商品メーカーの表示');
define('CFGDESC_PRODUCT_ALL_LIST_MANUFACTURER', '商品メーカーを表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_STORE_ZONE', '地域');
define('CFGDESC_STORE_ZONE', 'ショップの所在地域(県名)を設定します。');
define('CFGTITLE_STORE_NAME_ADDRESS', 'ショップの住所と電話番号');
define('CFGDESC_STORE_NAME_ADDRESS', 'ショップ名、国名、住所、電話番号を設定します。');
define('CFGTITLE_ENTRY_POSTCODE_MIN_LENGTH', '郵便番号の最小文字数');
define('CFGDESC_ENTRY_POSTCODE_MIN_LENGTH', '郵便番号の文字数の最小値を設定します。');
define('CFGTITLE_MAX_MANUFACTURERS_LIST', 'メーカーリスト - スクロールボックスのサイズ/スタイル');
define('CFGDESC_MAX_MANUFACTURERS_LIST', 'スクロールボックスに表示されるメーカー数は ?<br>1か0に設定するとドロップダウンリストになります。');
define('CFGTITLE_PRODUCTS_MANUFACTURERS_STATUS', 'メーカーリスト - 商品の存在を確認');
define('CFGDESC_PRODUCTS_MANUFACTURERS_STATUS', '各メーカーについて、1点以上の商品があり、かつ閲覧可能であるかどうかを確認しますか?<br><br>注意：この機能がONの場合、商品数やメーカーの数が多いと表示が遅くなります。<br>0= off 1= on');
define('CFGTITLE_MAX_MUSIC_GENRES_LIST', '音楽ジャンルリスト - スクロールボックスのサイズ/スタイル');
define('CFGDESC_MAX_MUSIC_GENRES_LIST', 'スクロールボックスに表示される音楽ジャンルリストの数を設定します。1か0に設定すると、ドロップダウンリストになります。
');
define('CFGTITLE_MAX_RECORD_COMPANY_LIST', 'レコード会社リスト - スクロールボックスのサイズ/スタイル');
define('CFGDESC_MAX_RECORD_COMPANY_LIST', 'スクロールボックスに表示されるレコード会社リストの数です。1か0に設定すると、ドロップダウンリストになります。
');
define('CFGTITLE_CONFIG_CALCULATE_IMAGE_SIZE', '画像サイズを計算');
define('CFGDESC_CONFIG_CALCULATE_IMAGE_SIZE', '画像サイズを自動的に計算するかどうかを設定します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_GROUP_PRICING_CALC_TAX', 'Re-calculate Tax');
define('CFGDESC_MODULE_ORDER_TOTAL_GROUP_PRICING_CALC_TAX', 'Re-Calculate Tax');
define('CFGTITLE_PRODUCT_LIST_WEIGHT', '商品重量の表示');
define('CFGDESC_PRODUCT_LIST_WEIGHT', '商品一覧中の商品重量の表示・非表示/ソート順を設定します。数値が小さいほど先に表示されます。(0 = 非表示)');
define('CFGTITLE_EMAIL_FRIENDLY_ERRORS', 'メール送信エラーの表示');
define('CFGDESC_EMAIL_FRIENDLY_ERRORS', 'メール送信が失敗した際、人目でわかるエラーを表示しますか? 運営中のショップではtrueに設定することを勧めます。falseに設定するとPHPのエラーメッセージを表示されるので、トラブル解決のヒントになります。');
define('CFGTITLE_SESSION_RECREATE', 'セッション再発行');
define('CFGDESC_SESSION_RECREATE', 'ユーザーがログオンまたはアカウントを作成した場合にセッションを再発行しますか?<br>(PHP4.1以上が必要)');
define('CFGTITLE_CC_ENABLED_AUSTRALIAN_BANKCARD', 'クレジットカード利用の可否 - AUSTRALIAN BANKCARD');
define('CFGDESC_CC_ENABLED_AUSTRALIAN_BANKCARD', 'AUSTRALIAN BANKCARDを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_CALC_TAX', '税金を再計算');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_CALC_TAX', '税金を再計算しますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS', '税種別');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_TAX_CLASS', '低額商品取扱い手数料金額に適用される税種別を設定します。');
define('CFGTITLE_MODULE_ORDER_TOTAL_COUPON_CALC_TAX', '税金を再計算');
define('CFGDESC_MODULE_ORDER_TOTAL_COUPON_CALC_TAX', '税金を再計算しますか?');
define('CFGTITLE_BEST_SELLERS_TRUNCATE_MORE', 'ベストセラー - 表示文字数を超えた場合に「...」を表示');
define('CFGDESC_BEST_SELLERS_TRUNCATE_MORE', '商品名が途中で切れた場合に「...」を表示します。<br>デフォルト = true');
define('CFGTITLE_DOWN_FOR_MAINTENANCE_PRICES_OFF', '「メンテナンス中」- 価格を表示しない');
define('CFGDESC_DOWN_FOR_MAINTENANCE_PRICES_OFF', '「メンテナンス中」表示モードの際、商品価格を隠しますか?<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_PRODUCT_NEW_LIST_PRICE', '商品価格の表示');
define('CFGDESC_PRODUCT_NEW_LIST_PRICE', '商品価格を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_PRICE', '商品価格の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_PRICE', '商品価格を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_PRICE', '商品価格の表示');
define('CFGDESC_PRODUCT_ALL_LIST_PRICE', '商品価格を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_EXPECTED_PRODUCTS_SORT', '入荷予定商品のソート順');
define('CFGDESC_EXPECTED_PRODUCTS_SORT', '入荷予定商品のソート順を設定します。<br><br>
・asc(昇順)<br>
・desc(降順)');
define('CFGTITLE_ENTRY_CITY_MIN_LENGTH', '市区町村の最小文字数');
define('CFGDESC_ENTRY_CITY_MIN_LENGTH', '市区町村の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_RECORD_COMPANY_NAME_LEN', 'レコード会社名表示の長さ');
define('CFGDESC_MAX_DISPLAY_RECORD_COMPANY_NAME_LEN', 'レコード会社名ボックスで表示される名前の長さを設定します。設定より長い名前は省略表示されます。
');
define('CFGTITLE_MAX_DISPLAY_MUSIC_GENRES_NAME_LEN', '音楽ジャンル名の文字数の長さ');
define('CFGDESC_MAX_DISPLAY_MUSIC_GENRES_NAME_LEN', '音楽ジャンルボックスで表示される名前の長さを設定します。設定より長い名前は省略表示されます。
');
define('CFGTITLE_MAX_DISPLAY_MANUFACTURER_NAME_LEN', 'メーカー名の長さ');
define('CFGDESC_MAX_DISPLAY_MANUFACTURER_NAME_LEN', 'メーカーリストで表示されるメーカー名の文字数の最大値を設定します。');
define('CFGTITLE_IMAGE_REQUIRED', '画像を必須とする');
define('CFGDESC_IMAGE_REQUIRED', '画像がないことを表示します。(カタログの作成時に有効)');
define('CFGTITLE_PRODUCTS_LIST_PRICE_WIDTH', '商品価格・「カートに入れる」カラムの幅');
define('CFGDESC_PRODUCTS_LIST_PRICE_WIDTH', '商品価格・「カートに入れる」ボタンを表示するカラムの幅(ピクセル数)を設定します。<br>
・Default= 125');
define('CFGTITLE_CC_ENABLED_SOLO', 'クレジットカード利用の可否 - SOLO');
define('CFGDESC_CC_ENABLED_SOLO', 'SOLOを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MODULE_ORDER_TOTAL_GV_CREDIT_TAX', '税金を付加する');
define('CFGDESC_MODULE_ORDER_TOTAL_GV_CREDIT_TAX', 'ギフト券を計算する際に税金を付加しますか?');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_VIRTUAL', '低額商品取扱い手数料はヴァーチャル商品には非適用');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_VIRTUAL', 'カート内がヴァーチャル商品だけの際に、低額商品取扱い手数料を徴収するかどうかを設定します。');
define('CFGTITLE_SHOW_CATEGORIES_BOX_SPECIALS', 'カテゴリボックス - 特価商品のリンク表示');
define('CFGDESC_SHOW_CATEGORIES_BOX_SPECIALS', 'カテゴリボックスに特価商品のリンクを表示します。');
define('CFGTITLE_EXCLUDE_ADMIN_IP_FOR_MAINTENANCE', '「メンテナンス中」- 設定したIPアドレスを除く');
define('CFGDESC_EXCLUDE_ADMIN_IP_FOR_MAINTENANCE', 'ショップ管理者用などに、「メンテナンス中」表示モードの際でもアクセス可能なIPアドレスを設定しますか?<br><br>
複数のIPアドレスを指定するにはカンマ(,)で区切ります。また、あなたのアクセス元のIPアドレスがわからない場合は、ショップのフッタに表示されるIPアドレスをチェックしてください。');
define('CFGTITLE_PRODUCT_NEW_LIST_WEIGHT', '商品重量の表示');
define('CFGDESC_PRODUCT_NEW_LIST_WEIGHT', '商品の重量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_WEIGHT', '商品重量の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_WEIGHT', '商品重量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_WEIGHT', '商品重量の表示');
define('CFGDESC_PRODUCT_ALL_LIST_WEIGHT', '商品重量を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_EXPECTED_PRODUCTS_FIELD', '入荷予定商品のソート順に用いるフィールド');
define('CFGDESC_EXPECTED_PRODUCTS_FIELD', '入荷予定商品のソート順に使用するフィールドを設定します。<br>・products_name:品名<br>・date_expected:予定日');
define('CFGTITLE_ENTRY_STATE_MIN_LENGTH', '都道府県名の最小文字数');
define('CFGDESC_ENTRY_STATE_MIN_LENGTH', '都道府県の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_NEW_REVIEWS', '新しいレビューの表示数最大値');
define('CFGDESC_MAX_DISPLAY_NEW_REVIEWS', '新しいレビューとして表示される数の最大値を設定します。');
define('CFGTITLE_IMAGE_SHOPPING_CART_STATUS', 'ショッピングカートの中身 - 商品画像の表示オン・オフ');
define('CFGDESC_IMAGE_SHOPPING_CART_STATUS', 'ショッピングカートの中身に入っている商品の画像を表示するかどうかを設定します。<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_PRODUCT_LIST_FILTER', 'カテゴリ/メーカーの絞り込みの表示');
define('CFGDESC_PRODUCT_LIST_FILTER', 'カテゴリ一覧ページで [絞り込み] を表示するかどうかを設定します。<br>
・0=非表示<br>
・1=表示');
define('CFGTITLE_CC_ENABLED_DEBIT', 'Credit Card Enable Status - Debit');
define('CFGDESC_CC_ENABLED_DEBIT', 'Accept Debit Cards 0= off 1= on<br>NOTE: This is not deeply integrated at this time, and this setting may be redundant if your payment modules do not yet specifically have code to honour this switch.');
define('CFGTITLE_MODULE_ORDER_TOTAL_LOWORDERFEE_GV', '低額商品取扱い手数料はギフト券には非適用');
define('CFGDESC_MODULE_ORDER_TOTAL_LOWORDERFEE_GV', 'カート内がギフト券などだけのときに低額商品取扱い手数料を徴収するかどうかを設定します。');
define('CFGTITLE_SHOW_CATEGORIES_BOX_PRODUCTS_NEW', 'カテゴリボックス - 新着商品のリンク表示');
define('CFGDESC_SHOW_CATEGORIES_BOX_PRODUCTS_NEW', 'カテゴリボックスに新着商品へのリンクを表示します。');
define('CFGTITLE_WARN_BEFORE_DOWN_FOR_MAINTENANCE', '「メンテナンス予告(NOTICE PUBLIC)」-  オン/オフ');
define('CFGDESC_WARN_BEFORE_DOWN_FOR_MAINTENANCE', 'ショップの「メンテナンス中」表示を出す前に告知を出しますか?<br><br>
・true=on<br>
・false=off<br>
注意：「メンテナンス中」表示が有効になると、この設定は自動的にfalseに書き換えられます。');
define('CFGTITLE_PRODUCT_NEW_LIST_DATE_ADDED', '商品登録日の表示');
define('CFGDESC_PRODUCT_NEW_LIST_DATE_ADDED', '商品登録日を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_FEATURED_LIST_DATE_ADDED', '商品登録日の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_DATE_ADDED', '商品登録日を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_PRODUCT_ALL_LIST_DATE_ADDED', '商品登録日の表示');
define('CFGDESC_PRODUCT_ALL_LIST_DATE_ADDED', '商品登録日を表示しますか?<br>
<br>
・0= off<br>
・1桁目：左か右か<br>
・2・3桁目：(他の表示項目との)ソート順<br>
・4桁目：表示後の改行(br)数<br>');
define('CFGTITLE_USE_DEFAULT_LANGUAGE_CURRENCY', '表示言語と通貨の連動');
define('CFGDESC_USE_DEFAULT_LANGUAGE_CURRENCY', '表示言語と通貨の変更を連動させるかどうか設定します。<br><br>true(連動)<br>false(非連動)');
define('CFGTITLE_ENTRY_TELEPHONE_MIN_LENGTH', '電話番号の最小文字数');
define('CFGDESC_ENTRY_TELEPHONE_MIN_LENGTH', '電話番号の文字数の最小値を設定します。');
define('CFGTITLE_MAX_RANDOM_SELECT_REVIEWS', 'レビューのランダム表示数');
define('CFGDESC_MAX_RANDOM_SELECT_REVIEWS', 'ランダムに表示するレビュー数の最大値を設定します。<br><br>注意：この設定値をXとすると、ランダム表示の対象になるのは、もっとも古いアクティブなレビューから数えてX番目に登録されたアクティブなレビューまでになります。');
define('CFGTITLE_IMAGE_SHOPPING_CART_WIDTH', 'ショッピングカートの中身の画像の横幅');
define('CFGDESC_IMAGE_SHOPPING_CART_WIDTH', 'デフォルト = 50');
define('CFGTITLE_ACCOUNT_FAX_NUMBER', 'Fax番号');
define('CFGDESC_ACCOUNT_FAX_NUMBER', '顧客のアカウント作成の際、「Fax番号」を表示するかどうかを設定します。');
define('CFGTITLE_PREV_NEXT_BAR_LOCATION', '[前ページ] [次ページ] の表示位置');
define('CFGDESC_PREV_NEXT_BAR_LOCATION', '[前ページ] [次ページ] の表示位置を設定します。<br><br>
・1 = 上<br>
・2 = 下<br>
・3 = 両方');
define('CFGTITLE_SHOW_PRODUCTS_SOLD_OUT', '在庫切れ商品のステータス変更');
define('CFGDESC_SHOW_PRODUCTS_SOLD_OUT', '商品の在庫がない場合のステータス表示を設定します。<br><br>0= 商品ステータスをOFFに<br>1= 商品ステータスはONのまま');
define('CFGTITLE_STORE_OWNER_EMAIL_ADDRESS', 'メールアドレス (ショップに表示する問い合わせ先)');
define('CFGDESC_STORE_OWNER_EMAIL_ADDRESS', 'ショップオーナーのメールアドレスとしてサイト上で表示されるアドレスを設定します。');
define('CFGTITLE_DOWNLOADS_ORDERS_STATUS_UPDATED_VALUE', 'ダウンロード設定 - 注文状況による更新');
define('CFGDESC_DOWNLOADS_ORDERS_STATUS_UPDATED_VALUE', 'orders_statusによるダウンロードの有効期限・可能回数のリセットについて設定します。<br>デフォルト = 4');
define('CFGTITLE_SESSION_IP_TO_HOST_ADDRESS', 'IPアドレス変換の設定');
define('CFGDESC_SESSION_IP_TO_HOST_ADDRESS', 'IPアドレスをホストアドレスに変換しますか?<br><br>注意：サーバによっては、この設定でメール送信のスタート・終了が遅くなることがあります。');
define('CFGTITLE_CC_ENABLED_MAESTRO', 'クレジットカード利用の可否 - Maestro');
define('CFGDESC_CC_ENABLED_MAESTRO', 'Maestroを有効にしますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_SHOW_SHOPPING_CART_BOX_STATUS', 'ショッピングカートボックスの表示');
define('CFGDESC_SHOW_SHOPPING_CART_BOX_STATUS', 'ショッピングカートの表示を設定します。<br>
<br>
・0= 常に表示<br>
・1= 商品が入っているときだけ表示<br>
・2= 商品が入っているときに表示するが、ショッピングカートページでは表示しない');
define('CFGTITLE_PERIOD_BEFORE_DOWN_FOR_MAINTENANCE', '「メンテナンス予告」- メッセージに表示する日時');
define('CFGDESC_PERIOD_BEFORE_DOWN_FOR_MAINTENANCE', 'ヘッダに表示するメンテナンス予告メッセージの開始日と時間を設定します。');
define('CFGTITLE_PRODUCT_NEW_LIST_DESCRIPTION', '商品説明の表示');
define('CFGDESC_PRODUCT_NEW_LIST_DESCRIPTION', '商品説明(最初の150文字)を表示しますか?<br>
<br>
・0= off<br>
・150= on');
define('CFGTITLE_PRODUCT_FEATURED_LIST_DESCRIPTION', '商品説明の表示');
define('CFGDESC_PRODUCT_FEATURED_LIST_DESCRIPTION', '商品説明(最初の150文字)を表示しますか?<br>
<br>
・0= off<br>
・1= on');
define('CFGTITLE_PRODUCT_ALL_LIST_DESCRIPTION', '商品説明の表示');
define('CFGDESC_PRODUCT_ALL_LIST_DESCRIPTION', '商品説明(最初の150文字)を表示しますか?<br>
<br>
・0= off<br>
・1= on');
define('CFGTITLE_EZPAGES_STATUS_HEADER', 'EZページの表示 - ページヘッダ');
define('CFGDESC_EZPAGES_STATUS_HEADER', 'EZページのコンテンツをページヘッダに表示するかどうかをグローバル(サイト全体)に設定します。<br>0 = Off<br>1 = On<br>2= サイトメンテナンスの際に管理者のIPアドレスでアクセスした場合のみ表示<br>注意：ワーニングは公開されず管理者にだけ表示されます。');
define('CFGTITLE_LANGUAGE_DEFAULT_SELECTOR', '表示言語の選択');
define('CFGDESC_LANGUAGE_DEFAULT_SELECTOR', 'ショップのデフォルトの表示言語はショップの初期設定またはユーザーのブラウザ設定のどちらに基づくかを設定します。<br><br>デフォルト：ショップの初期設定');
define('CFGTITLE_ENTRY_PASSWORD_MIN_LENGTH', 'パスワードの最小文字数');
define('CFGDESC_ENTRY_PASSWORD_MIN_LENGTH', 'パスワードの文字数の最小値を設定します。');
define('CFGTITLE_MAX_RANDOM_SELECT_NEW', '新着商品のランダム表示数');
define('CFGDESC_MAX_RANDOM_SELECT_NEW', 'ランダムに表示する新着商品数の最大値を設定します。<br><br>注意：この設定値をXとすると、ランダム表示の対象になるのは、もっとも古いアクティブな新着商品から数えてX番目に登録されたアクティブな新着商品までになります。');
define('CFGTITLE_IMAGE_SHOPPING_CART_HEIGHT', 'ショッピングカートの中身の画像の高さ');
define('CFGDESC_IMAGE_SHOPPING_CART_HEIGHT', 'デフォルト = 40');
define('CFGTITLE_SHOW_PRODUCTS_SOLD_OUT_IMAGE', '在庫切れ商品に「売り切れ」画像表示');
define('CFGDESC_SHOW_PRODUCTS_SOLD_OUT_IMAGE', '在庫がなくなった商品の場合に「カートへ入れる」ボタンの代わりに「売り切れ」画像を表示しますか?<br><br>
・0= 表示しない<br>
・1= 表示する');
define('CFGTITLE_EMAIL_FROM', 'メールアドレス (顧客への送信元)');
define('CFGDESC_EMAIL_FROM', '顧客に送信されるメールのデフォルトの送信元として表示されるアドレスを設定します。<br>
管理画面でメールを作成をする都度、書き換えることもできます。');
define('CFGTITLE_EMAIL_SEND_MUST_BE_STORE', '送信メールの送信元アドレスの実在性');
define('CFGDESC_EMAIL_SEND_MUST_BE_STORE', 'お使いのメールサーバでは、送信するメールの送信元(From)アドレスがWebサーバ上に実在することが必須ですか?<br><br>spam送信を防止するなどのためにこのように設定されていることがあります。Yesに設定すると、送信元アドレスとメール内のFromアドレスが一致していることが求められます。');
define('CFGTITLE_SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS', 'カテゴリボックス - おすすめ商品へのリンクを表示');
define('CFGDESC_SHOW_CATEGORIES_BOX_FEATURED_PRODUCTS', 'カテゴリボックスにおすすめ商品へのリンクを表示しますか?');
define('CFGTITLE_DISPLAY_MAINTENANCE_TIME', '「メンテナンス中」- メンテナンスを開始した日時(when webmaster has enabled maintenance)を表示');
define('CFGDESC_DISPLAY_MAINTENANCE_TIME', 'ショップ管理者がいつ「メンテナンス中」表示をオンにしたか表示しますか?<br><br>
・true=on<br>
・false=off');
define('CFGTITLE_PRODUCT_NEW_LIST_SORT_DEFAULT', '商品の表示 - デフォルトのソート順');
define('CFGDESC_PRODUCT_NEW_LIST_SORT_DEFAULT', '新着商品リストの表示のデフォルトのソート順は? デフォルト値は6です。<br><br>
・1= 商品名<br>
・2= 商品名(降順)<br>
・3= 価格が安いものから商品名<br>
・4= 価格が高いものから商品名<br>
・5= 型番<br>
・6= 商品登録日(降順)<br>
・7= 商品登録日<br>
・8= 商品順(Product Sort)
');
define('CFGTITLE_PRODUCT_FEATURED_LIST_SORT_DEFAULT', '商品表示 - デフォルトのソート順');
define('CFGDESC_PRODUCT_FEATURED_LIST_SORT_DEFAULT', 'おすすめ商品リストの表示のデフォルトのソート順は? デフォルト値は1です。<br>
<br>
・1= 商品名<br>
・2= 商品名(降順)<br>
・3= 価格が安いものから、商品名<br>
・4= 価格が高いものから、商品名<br>
・5= 型番<br>
・6= 商品登録日(降順)<br>
・7= 商品登録日<br>
・8= 商品順(Product Sort)');
define('CFGTITLE_PRODUCT_ALL_LIST_SORT_DEFAULT', '商品表示 - デフォルトのソート順');
define('CFGDESC_PRODUCT_ALL_LIST_SORT_DEFAULT', '全商品リストの表示のデフォルトのソート順は? デフォルト値は1です。<br>
<br>
・1= 商品名<br>
・2= 商品名(降順)<br>
・3= 価格が安いものから、商品名<br>
・4= 価格が高いものから、商品名<br>
・5= 型番<br>
・6= 商品登録日(降順)<br>
・7= 商品登録日<br>
・8= 商品順(Product Sort)');
define('CFGTITLE_EZPAGES_STATUS_FOOTER', 'EZページの表示 - ページフッタ');
define('CFGDESC_EZPAGES_STATUS_FOOTER', 'EZページのコンテンツをページフッタに表示するかどうかをグローバル(サイト全体)に設定します。<br>0 = Off<br>1 = On<br>2= サイトメンテナンスの際に管理者のIPアドレスでアクセスした場合のみ表示<br>注意：ワーニングは公開されず管理者にだけ表示されます。');
define('CFGTITLE_SEARCH_ENGINE_FRIENDLY_URLS', 'サーチエンジンフレンドリーなURL表記(開発中)');
define('CFGDESC_SEARCH_ENGINE_FRIENDLY_URLS', 'サーチエンジンに拾われやすい、静的HTMLのようなURL表記を行うかどうかを設定します。<br><br>注意：Googleでは動的URLのクロールが強化されたため、あまり意味はないようです。');
define('CFGTITLE_CC_OWNER_MIN_LENGTH', 'クレジットカード名義の最小文字数');
define('CFGDESC_CC_OWNER_MIN_LENGTH', 'クレジットカード所有者名の文字数の最小値を設定します。');
define('CFGTITLE_MAX_RANDOM_SELECT_SPECIALS', '特価商品のランダム表示数');
define('CFGDESC_MAX_RANDOM_SELECT_SPECIALS', 'ランダムに表示する特価商品数の最大値を設定します。<br><br>注意：この設定値をXとすると、ランダム表示の対象になるのは、もっとも古いアクティブな特価商品から数えてX番目に登録されたアクティブな特価商品までになります。');
define('CFGTITLE_ADMIN_EXTRA_EMAIL_FORMAT', '管理者が送信するメールフォーマット');
define('CFGDESC_ADMIN_EXTRA_EMAIL_FORMAT', '管理者が送付するメールフォーマットを設定します。<br><br>
・TEXT =テキスト形式<br>
・HTML =HTML形式');
define('CFGTITLE_SEND_EXTRA_ORDER_EMAILS_TO', '注文確認メール(コピー)送信先');
define('CFGDESC_SEND_EXTRA_ORDER_EMAILS_TO', '顧客に送信される注文確認メールのコピーを送付するメールアドレスを設定します。<br>記入例: 名前1 &lt;email@address1&gt;, 名前2 &lt;email@address2&gt;');
define('CFGTITLE_DOWNLOADS_CONTROLLER_ORDERS_STATUS', 'ダウンロード可能となる注文ステータスのID - デフォルト &gt;= 2');
define('CFGDESC_DOWNLOADS_CONTROLLER_ORDERS_STATUS', 'ダウンロード可能となる注文ステータスのID - デフォルト &gt;= 2<br><br>注文ステータスのIDがこの値より高い注文はダウンロード可能になります。購入完了時の注文ステータスは支払いモジュールに毎に設定されます。');
define('CFGTITLE_SHOW_CATEGORIES_BOX_PRODUCTS_ALL', 'カテゴリボックス - 全商品リストへのリンクを表示');
define('CFGDESC_SHOW_CATEGORIES_BOX_PRODUCTS_ALL', 'カテゴリボックスに全商品リストへのリンクを表示しますか?');
define('CFGTITLE_DISPLAY_MAINTENANCE_PERIOD', '「メンテナンス中」- メンテナンス期間を表示');
define('CFGDESC_DISPLAY_MAINTENANCE_PERIOD', 'メンテナンスの期間を表示しますか?<br><br>
・true=on<br>
・false=off');
define('CFGTITLE_PRODUCT_NEW_LIST_GROUP_ID', '新着商品 - デフォルトのグループID');
define('CFGDESC_PRODUCT_NEW_LIST_GROUP_ID', '新着商品リストの設定グループID(configuration_group_id)は何ですか?<br>
<br>
注意：全商品リストのグループIDがデフォルトの21から変更されたときだけ設定してください。');
define('CFGTITLE_PRODUCT_FEATURED_LIST_GROUP_ID', 'おすすめ商品 - デフォルトのグループID');
define('CFGDESC_PRODUCT_FEATURED_LIST_GROUP_ID', 'おすすめ商品リストの設定グループID(configuration_group_id)は何ですか?<br>
<br>
注意：おすすめ商品リストのグループIDがデフォルトの22から変更されたときだけ設定してください。
');
define('CFGTITLE_PRODUCT_ALL_LIST_GROUP_ID', '全商品リスト - デフォルトのグループID');
define('CFGDESC_PRODUCT_ALL_LIST_GROUP_ID', '全商品リストの設定グループID(configuration_group_id)は?<br>
<br>
注意：全商品リストのグループIDがデフォルトの23から変更されたときだけ設定してください。
');
define('CFGTITLE_EZPAGES_STATUS_SIDEBOX', 'EZページの表示 - サイドボックス');
define('CFGDESC_EZPAGES_STATUS_SIDEBOX', 'EZページのコンテンツをサイドボックスに表示するかどうかをグローバル(サイト全体)に設定します。<br>0 = Off<br>1 = On<br>2= サイトメンテナンスの際に管理者のIPアドレスでアクセスした場合のみ表示<br>注意：ワーニングは公開されず管理者にだけ表示されます。');
define('CFGTITLE_CC_NUMBER_MIN_LENGTH', 'クレジットカード番号の最小文字数');
define('CFGDESC_CC_NUMBER_MIN_LENGTH', 'クレジットカード番号の文字数の最小値を設定します。');
define('CFGTITLE_CC_CVV_MIN_LENGTH', 'クレジットカードCVV番号の最小文字数');
define('CFGDESC_CC_CVV_MIN_LENGTH', 'クレジットカードCVV番号の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_CATEGORIES_PER_ROW', '一行に表示するカテゴリ数');
define('CFGDESC_MAX_DISPLAY_CATEGORIES_PER_ROW', '一行に表示するカテゴリ数を設定します。');
define('CFGTITLE_CATEGORY_ICON_IMAGE_WIDTH', '商品情報 - カテゴリアイコン画像の横幅');
define('CFGDESC_CATEGORY_ICON_IMAGE_WIDTH', '商品情報ページでのカテゴリアイコンの横幅(ピクセル数)は?');
define('CFGTITLE_SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_STATUS', 'アカウント作成完了メール(コピー)の送信');
define('CFGDESC_SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO_STATUS', 'アカウント作成完了メールのコピーを指定のメールアドレスに送信しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_DOWNLOADS_CONTROLLER_ORDERS_STATUS_END', 'ダウンロード終了となる注文ステータスのID');
define('CFGDESC_DOWNLOADS_CONTROLLER_ORDERS_STATUS_END', 'ダウンロード終了となる注文ステータスのID - デフォルト &gt;= 4<br><br>注文ステータスがこの値より高い注文はダウンロードが終了となります。');
define('CFGTITLE_TEXT_MAINTENANCE_PERIOD_TIME', 'メンテナンス期間');
define('CFGDESC_TEXT_MAINTENANCE_PERIOD_TIME', 'メンテナンス期間を設定します。<br>
書式：(hh:mm)<br>h = 時間　m = 分');
define('CFGTITLE_DISPLAY_CART', '商品の追加後にカートを表示');
define('CFGDESC_DISPLAY_CART', '商品をカートに追加した直後にカートの内容を表示するか、または元ページにすぐ戻るかを設定します。<br><br>
・true (表示)<br>
・false (非表示)');
define('CFGTITLE_REVIEW_TEXT_MIN_LENGTH', 'レビューの文章の最小文字数');
define('CFGDESC_REVIEW_TEXT_MIN_LENGTH', 'レビューの文章の文字数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_NEW', '新着商品一覧表示数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_NEW', '新着商品ページ１ページに表示する商品数の最大値を設定します。');
define('CFGTITLE_CATEGORY_ICON_IMAGE_HEIGHT', '商品情報 - カテゴリアイコン画像の高さ');
define('CFGDESC_CATEGORY_ICON_IMAGE_HEIGHT', '商品情報ページでのカテゴリアイコンの高さ(ピクセル数)は?');
define('CFGTITLE_SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO', 'アカウント作成完了メール(コピー)の送信先');
define('CFGDESC_SEND_EXTRA_CREATE_ACCOUNT_EMAILS_TO', 'アカウント作成完了メールのコピーを送信するメールアドレスを設定します。<br><br>
記入例： 名前1 &lt;email@address1&gt;, 名前2 &lt;email@address2&gt;');
define('CFGTITLE_MIN_DISPLAY_BESTSELLERS', 'ベストセラーの最小表示件数');
define('CFGDESC_MIN_DISPLAY_BESTSELLERS', 'ベストセラーとして表示する商品の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_BESTSELLERS', 'ベストセラーの最大表示件数');
define('CFGDESC_MAX_DISPLAY_BESTSELLERS', 'ベストセラーページ１ページに表示するベストセラー商品数の最大値を設定します。');
define('CFGTITLE_SUBCATEGORY_IMAGE_TOP_WIDTH', 'トップカテゴリアイコン画像の横幅');
define('CFGDESC_SUBCATEGORY_IMAGE_TOP_WIDTH', 'カテゴリに下位カテゴリページを含む場合、表示するカテゴリアイコンの横幅(ピクセル数)は?');
define('CFGTITLE_SHIPPING_BOX_WEIGHT_DISPLAY', '個数と重量の表示');
define('CFGDESC_SHIPPING_BOX_WEIGHT_DISPLAY', '配送する荷物の個数と重量を表示するかどうかを設定します。<br><br>
・0= off<br>
・1= 個数のみ表示<br>
・2= 重量のみ表示<br>
・3= 両方表示');
define('CFGTITLE_ORDER_WEIGHT_ZERO_STATUS', '注文の重量が0なら送料無料に');
define('CFGDESC_ORDER_WEIGHT_ZERO_STATUS', '注文の重量が0の場合、送料無料にしますか?
<br>
・0= いいえ<br>
・1= はい<br>
注意：「送料無料」表記をしたい場合には送料無料モジュールを使うことをお勧めします。このオプションは実際に送料無料のときに表示されるだけです。');
define('CFGTITLE_PRODUCT_LISTING_DEFAULT_SORT_ORDER', '商品リストのデフォルトソート順');
define('CFGDESC_PRODUCT_LISTING_DEFAULT_SORT_ORDER', '商品リストのデフォルトのソート順を設定します。
<br>
注意：商品でソートする場合は空欄に。
Sort the Product Listing in the order you wish for the default display to start in to get the sort order setting. Example: 2a');
define('CFGTITLE_QUANTITY_DECIMALS', '商品数量に指定できる小数点の桁数');
define('CFGDESC_QUANTITY_DECIMALS', '商品の数量に小数点の利用を許可する桁数を設定します。<br><br>
・0= off');
define('CFGTITLE_COLUMN_LEFT_STATUS', '左側カラムの表示');
define('CFGDESC_COLUMN_LEFT_STATUS', '左側カラムを表示しますか? (ページをオーバーライドするものがない場合)<br><br>
・0= 常に非表示<br>
1= オーバーライドがなければ表示');
define('CFGTITLE_MIN_DISPLAY_ALSO_PURCHASED', '「こんな商品も購入しています」の最小表示数');
define('CFGDESC_MIN_DISPLAY_ALSO_PURCHASED', '「この商品を購入した人はこんな商品も購入しています」で表示する商品数の最小値を設定します。');
define('CFGTITLE_MAX_DISPLAY_ALSO_PURCHASED', '「こんな商品も買っています」の最大表示件数');
define('CFGDESC_MAX_DISPLAY_ALSO_PURCHASED', '「こんな商品も買っています」欄に表示する商品数の最大値を設定します。');
define('CFGTITLE_SUBCATEGORY_IMAGE_TOP_HEIGHT', 'トップカテゴリアイコン画像の高さ');
define('CFGDESC_SUBCATEGORY_IMAGE_TOP_HEIGHT', 'カテゴリに下位カテゴリページを含む場合、表示するカテゴリアイコンの高さ(ピクセル数)は?');
define('CFGTITLE_COLUMN_RIGHT_STATUS', '右側カラムの表示');
define('CFGDESC_COLUMN_RIGHT_STATUS', '右側カラムを表示しますか? (ページをオーバーライドするものがない場合)<br><br>
・0= 常に非表示<br>
・1= オーバーライドがなければ表示');
define('CFGTITLE_ADVANCED_SEARCH_DEFAULT_OPERATOR', 'デフォルトの検索演算子');
define('CFGDESC_ADVANCED_SEARCH_DEFAULT_OPERATOR', 'デフォルトの検索演算子を設定します。');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX', '顧客の注文履歴ボックスの最大表示数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_IN_ORDER_HISTORY_BOX', '顧客の注文履歴ボックスに表示する商品数の最大値を設定します。');
define('CFGTITLE_SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_STATUS', 'ギフト券送付メール(コピー)の送信');
define('CFGDESC_SEND_EXTRA_GV_CUSTOMER_EMAILS_TO_STATUS', '顧客が送付するギフト券送付メールのコピーを送信しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_MAX_DISPLAY_ORDER_HISTORY', '注文履歴ページの最大表示件数');
define('CFGDESC_MAX_DISPLAY_ORDER_HISTORY', '顧客の注文履歴ページ１ページに表示する商品数の最大値を設定します。');
define('CFGTITLE_SEND_EXTRA_GV_CUSTOMER_EMAILS_TO', 'ギフト券送付メール(コピー)の送信先');
define('CFGDESC_SEND_EXTRA_GV_CUSTOMER_EMAILS_TO', '顧客が送付するギフト券送付メールのコピーを送信するメールアドレスを設定します。<br><br>記入例： 名前1 &lt;email@address1&gt;, 名前2&lt;email@address2&gt;');
define('CFGTITLE_SHOW_COUNTS', 'カテゴリ内の商品数を表示');
define('CFGDESC_SHOW_COUNTS', 'カテゴリ内の商品数を下位カテゴリも含めてカウント表示するかどうかを設定します。<br><br>
・true (する)<br>
・false (しない)');
define('CFGTITLE_SHOW_COUNTS_ADMIN', 'カテゴリ内の商品数を表示 - 管理画面');
define('CFGDESC_SHOW_COUNTS_ADMIN', 'カテゴリ内の商品数を下位カテゴリも含めてカウント表示しますか?<br><br>
・true (する)<br>
・false (しない)');
define('CFGTITLE_SHOW_CATEGORY_PRODUCTS_LINKED_STATUS', 'Show linked status for categories');
define('CFGDESC_SHOW_CATEGORY_PRODUCTS_LINKED_STATUS', 'Show Category products linked status?');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_CUSTOMER', '顧客管理ページで表示する顧客数の最大値');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_CUSTOMER', '');
define('CFGTITLE_SEND_EXTRA_GV_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者からのギフト券送付メール(コピー)の送信');
define('CFGDESC_SEND_EXTRA_GV_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者からのギフト券送付メールのコピーを送信しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_TAX_DECIMAL_PLACES', '税額の小数点位置');
define('CFGDESC_TAX_DECIMAL_PLACES', '税額の小数点以下の桁数を設定します。');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_ORDERS', '注文管理ページで表示する注文数の最大値');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_ORDERS', '');
define('CFGTITLE_MEDIUM_IMAGE_WIDTH', '商品情報 - 画像の横幅');
define('CFGDESC_MEDIUM_IMAGE_WIDTH', '商品画像の横幅を設定します。');
define('CFGTITLE_SHOW_SHIPPING_ESTIMATOR_BUTTON', '送料概算表示の表示・非表示');
define('CFGDESC_SHOW_SHIPPING_ESTIMATOR_BUTTON', '送料概算ボタンの表示するかどうかを設定します。<br>
・0= Off<br>
・1= ショッピングカート上にボタンとして表示<br>
・2= ショッピングカートページにリストとして表示');
define('CFGTITLE_PRODUCT_LIST_PRICE_BUY_NOW', '「カートに入れる」ボタンの表示');
define('CFGDESC_PRODUCT_LIST_PRICE_BUY_NOW', '「カートに入れる」ボタンを表示するかどうかを設定します。<br><br>
・0= いいえ<br>
・1= はい<br>
・2= はい、商品の個数欄と共に表示します。 <br><strong>注意:</strong> 数量欄の表示をいいえにしていたり、オプションを設定している際は表示されません。');
define('CFGTITLE_SHOW_SHOPPING_CART_DELETE', 'ショッピングカート - 「削除」チェックボックス/ボタン');
define('CFGDESC_SHOW_SHOPPING_CART_DELETE', '「削除」チェックボックス/ボタンの表示について設定します。<br><br>1= ボタンのみ<br>2= チェックボックスのみ<br>3= ボタン/チェックボックス両方');
define('CFGTITLE_SEND_EXTRA_GV_ADMIN_EMAILS_TO', 'ショップ運営者からのギフト券送付メール(コピー)の送信先');
define('CFGDESC_SEND_EXTRA_GV_ADMIN_EMAILS_TO', 'ショップ運営者からのギフト券送付メールのコピーを送信するメールアドレスを設定します。<br><br>
記入例：名前1 &lt;email@address1&gt;, 名前2 &lt;email@address2&gt;');
define('CFGTITLE_SHOW_PREVIOUS_NEXT_STATUS', '[前へ] [次へ] - ボタンと画像のステータス');
define('CFGDESC_SHOW_PREVIOUS_NEXT_STATUS', 'ボタンと画像のステータスを設定します。<br><br>
・0= Off<br>
・1= On');
define('CFGTITLE_PRODUCT_INFO_CATEGORIES', '[前へ] [次へ] - カテゴリ名と画像の配置');
define('CFGDESC_PRODUCT_INFO_CATEGORIES', '[前へ] [次へ] のカテゴリの画像と名称の配置は?<br><br>
・0= off<br>
・1= 左に配置<br>
・2= 中央に配置<br>
・3= 右に配置');
define('CFGTITLE_PRODUCT_INFO_CATEGORIES_IMAGE_STATUS', '[前へ] [次へ] - カテゴリ名と画像の状態');
define('CFGDESC_PRODUCT_INFO_CATEGORIES_IMAGE_STATUS', '[前へ] [次へ] のカテゴリの画像と名称の状態は?<br><br>
・0= カテゴリ名と画像を常に表示<br>
・1= カテゴリ名のみ表示<br>
・2= カテゴリ名と画像は空でない表示場合<br>
・3= 右に配置');
define('CFGTITLE_COLUMN_WIDTH_LEFT', '左側カラムの横幅');
define('CFGDESC_COLUMN_WIDTH_LEFT', '左側カラムの横幅を設定します。pxを含めて指定可能。<br><br>
デフォルト = 150px');
define('CFGTITLE_EZPAGES_SEPARATOR_HEADER', 'EZページ のヘッダ - リンクのセパレータ(区切り記号)');
define('CFGDESC_EZPAGES_SEPARATOR_HEADER', 'EＺページのヘッダのリンク表示のセパレータ(区切り文字)は?<br>デフォルト = &amp;nbsp;::&amp;nbsp;');
define('CFGTITLE_DISPLAY_PRICE_WITH_TAX', '価格を税込みで表示');
define('CFGDESC_DISPLAY_PRICE_WITH_TAX', '価格を税込みで表示するかどうかを設定します。<br><br>
・true = 価格を税込みで表示<br>
・false = 税額をまとめて表示');
define('CFGTITLE_DISPLAY_PRICE_WITH_TAX_ADMIN', '価格を税込みで表示 - 管理画面');
define('CFGDESC_DISPLAY_PRICE_WITH_TAX_ADMIN', '管理画面で価格を税込みで表示するかどうかを設定します。<br><br>
・true = 価格を税込みで表示<br>
・false = 最後に税額を表示');
define('CFGTITLE_STORE_PRODUCT_TAX_BASIS', '商品にかかる税額の算定基準');
define('CFGDESC_STORE_PRODUCT_TAX_BASIS', '商品にかかる税額を算出する際の基準を設定します。<br><br>
・Shipping …顧客(商品送付先)の住所<br>
・Billing …顧客の請求先の住所<br>
・Store …ショップの所在地による(送付先・請求先ともショップの所在地域である場合に有効)
');
define('CFGTITLE_STORE_SHIPPING_TAX_BASIS', '送料にかかる税額の算定基準');
define('CFGDESC_STORE_SHIPPING_TAX_BASIS', '送料にかかる税金を算出する際の基準を設定します。<br><br>
・Shipping …顧客(商品送付先)の住所<br>
・Billing …顧客の請求先の住所<br>
・Store …ショップの所在地による(送付先・請求先ともショップの所在地域である場合に有効)<br>
注意：この設定は配送モジュールによってオーバーライド(上書き設定)が可能です。');
define('CFGTITLE_STORE_TAX_DISPLAY_STATUS', '税金の表示');
define('CFGDESC_STORE_TAX_DISPLAY_STATUS', '合計額が0円でも税金を表示しますか?<br>0= Off<br>1= On');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_REPORTS', 'レポートページで表示する商品数の最大値');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_REPORTS', '');
define('CFGTITLE_MEDIUM_IMAGE_HEIGHT', '商品情報 - 画像の高さ');
define('CFGDESC_MEDIUM_IMAGE_HEIGHT', '商品画像の高さを設定します。');
define('CFGTITLE_SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者からのクーポン券送付メール(コピー)の送信');
define('CFGDESC_SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者からのクーポン券送付メールのコピーを送信しますか?<br>0= off 1= on');
define('CFGTITLE_PRODUCT_INFO_PREVIOUS_NEXT', '[前へ] [次へ] - ナビゲーションバーの位置');
define('CFGDESC_PRODUCT_INFO_PREVIOUS_NEXT', '[前へ] [次へ] ナビゲーションバーの位置を設定します。<br><br>
・0= off<br>
・1= ページ上部<br>
・2= ページ下部<br>
・3= ページ上部・下部');
define('CFGTITLE_SHOW_PREVIOUS_NEXT_IMAGES', '[前へ] [次へ] - ボタンと画像の表示設定');
define('CFGDESC_SHOW_PREVIOUS_NEXT_IMAGES', '[前へ] [次へ] のボタンと画像の表示を設定します。<br><br>
・0= ボタンのみ<br>
・1= ボタン・商品画像<br>
・2= 商品画像のみ');
define('CFGTITLE_COLUMN_WIDTH_RIGHT', '右側カラムの横幅');
define('CFGDESC_COLUMN_WIDTH_RIGHT', '右側カラムの横幅を設定します。pxを含めて指定可能。<br><br>
デフォルト = 150px');
define('CFGTITLE_EZPAGES_SEPARATOR_FOOTER', 'EZページ のフッタ - リンクのセパレータ(区切り記号)');
define('CFGDESC_EZPAGES_SEPARATOR_FOOTER', 'EＺページのフッタのリンク表示のセパレータ(区切り文字)は?<br>デフォルト = &amp;nbsp;::&amp;nbsp;');
define('CFGTITLE_SHOW_SPLIT_TAX_CHECKOUT', '税金の分割表示');
define('CFGDESC_SHOW_SPLIT_TAX_CHECKOUT', '税金が複数の種類があった場合、チェックアウトの際、別々に表示するかどうかを設定します。<br><br>
・true = 税金を別々に表示<br>
・false = 税金をまとめて表示');
define('CFGTITLE_MAX_DISPLAY_RESULTS_CATEGORIES', 'カテゴリ/商品ページで表示するリスト数');
define('CFGDESC_MAX_DISPLAY_RESULTS_CATEGORIES', '１ページに表示する商品数の最大値を設定します。');
define('CFGTITLE_IMAGE_SUFFIX_MEDIUM', '商品情報 - 画像(中)のファイル接尾辞(Suffix)');
define('CFGDESC_IMAGE_SUFFIX_MEDIUM', '商品画像のファイル接尾辞を設定します。<br><br>・デフォルト = _MED');
define('CFGTITLE_SHOW_SHOPPING_CART_UPDATE', 'ショッピングカート -「カートの中身を更新」ボタンの位置');
define('CFGDESC_SHOW_SHOPPING_CART_UPDATE', '「カートの中身を更新」ボタンの位置を設定します。<br><br>1=「注文数」欄の横<br>2= 商品リストの下<br>3=「注文数」欄の横と商品リストの下<br><br>注意：この設定は3つの"tpl_shopping_cart_default"ファイルが呼ばれる部分を設定します。');
define('CFGTITLE_SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO', 'ショップ運営者からのクーポン券送付メール(コピー)の送信先');
define('CFGDESC_SEND_EXTRA_DISCOUNT_COUPON_ADMIN_EMAILS_TO', 'ショップ運営者からのクーポン券送付メールのコピーを送信するメールアドレスを設定します。<br><br>
記入例： 名前1 &lt;email@address1&gt;, 名前2 &lt;email@address2&gt;');
define('CFGTITLE_PRODUCT_INFO_PREVIOUS_NEXT_SORT', '[前へ] [次へ] - ソート順');
define('CFGDESC_PRODUCT_INFO_PREVIOUS_NEXT_SORT', '商品のソート順を設定します。
<br><br>
・0= 商品ID<br>
・1= 商品名<br>
・2= 型番<br>
・3= 価格、商品名<br>
・4= 価格、型番<br>
・5= 商品名, 型番<br>
・6= ソート順');
define('CFGTITLE_PREVIOUS_NEXT_IMAGE_WIDTH', '[前へ] [次へ] - 画像の横幅');
define('CFGDESC_PREVIOUS_NEXT_IMAGE_WIDTH', '[前へ] [次へ] 画像の横幅の横幅は?');
define('CFGTITLE_IMAGE_SUFFIX_LARGE', '商品情報 - 画像(大)のファイル接尾辞(Suffix)');
define('CFGDESC_IMAGE_SUFFIX_LARGE', '商品画像のファイル接尾辞を設定します。<br><br>
・デフォルト = _LRG');
define('CFGTITLE_SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者の注文ステータスメール(コピー)の送信');
define('CFGDESC_SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO_STATUS', 'ショップ運営者の注文ステータスメールのコピーを送信しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_PREVIOUS_NEXT_IMAGE_HEIGHT', '[前へ] [次へ] - 画像の高さ');
define('CFGDESC_PREVIOUS_NEXT_IMAGE_HEIGHT', '[前へ] [次へ] 画像の横幅の高さは?');
define('CFGTITLE_MAX_ROW_LISTS_OPTIONS', '商品オプション - オプション名とオプション値の表示');
define('CFGDESC_MAX_ROW_LISTS_OPTIONS', '商品オプションページで表示するオプション名/オプション値の最大値を設定します。');
define('CFGTITLE_SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO', 'ショップ運営者の注文ステータスメール(コピー)の送信先');
define('CFGDESC_SEND_EXTRA_ORDERS_STATUS_ADMIN_EMAILS_TO', 'ショップ運営者の注文ステータスメールのコピーを送信するメールアドレスを設定します。<br><br>
記入例： 名前1 &lt;email@address1&gt;, 名前2 &lt;email@address2&gt;');
define('CFGTITLE_SHOW_CATEGORIES_SEPARATOR_LINK', 'カテゴリ名・リンク間の区切り');
define('CFGDESC_SHOW_CATEGORIES_SEPARATOR_LINK', 'カテゴリ名とリンク（「おすすめ商品」など）の間にセパレータ(区切り)を表示しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_STORE_STATUS', 'ショップのステータス');
define('CFGDESC_STORE_STATUS', 'ショップの状態を設定します。<br><br>
・0＝通常のショップ<br>
・1＝価格表示なしのデモショップ<br>
・2＝価格表示付きのデモショップ
');
define('CFGTITLE_MAX_ROW_LISTS_ATTRIBUTES_CONTROLLER', '商品オプション - オプション管理画面');
define('CFGDESC_MAX_ROW_LISTS_ATTRIBUTES_CONTROLLER', 'オプション管理画面で表示するオプション数の最大値を設定します。');
define('CFGTITLE_ORDER_COMMENTS_INVOICE', '納品書への注文のコメント表示');
define('CFGDESC_ORDER_COMMENTS_INVOICE', '納品書に注文のコメント欄を表示しますか?
<br>
・0= いいえ<br>
・1= 一つ目のコメントのみ表示<br>
・2= 全てのコメントを表示');
define('CFGTITLE_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の有無・表示位置');
define('CFGDESC_PRODUCT_LISTING_MULTIPLE_ADD_TO_CART', '複数商品をカートに入れる数量欄の表示するかどうかと、表示位置を設定します。<br>0= off<br>1= 上部<br>2= 下部<br>3= 両方');
define('CFGTITLE_SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO_STATUS', '掲載待ちレビューについてメール送信');
define('CFGDESC_SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO_STATUS', '掲載待ちのレビューについてメールを送信しますか?<br>0= off 1= on');
define('CFGTITLE_ATTRIBUTES_ENABLED_PRICE_FACTOR', 'Price Factor属性を可能にする');
define('CFGDESC_ATTRIBUTES_ENABLED_PRICE_FACTOR', 'Price Factor属性を可能にするかどうかを設定します。');
define('CFGTITLE_CATEGORIES_SEPARATOR', 'カテゴリの区切り - カテゴリ名・商品数');
define('CFGDESC_CATEGORIES_SEPARATOR', 'カテゴリ名と(カテゴリ内の)商品数の間のセパレータ(区切り)は何にしますか?<br><br>
デフォルト = -&amp;gt;');
define('CFGTITLE_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の有無・表示位置');
define('CFGDESC_PRODUCT_NEW_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の表示の有無と表示位置について設定します。<br>0= off<br>1= 上部<br>2= 下部<br>3= 両方');
define('CFGTITLE_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の有無・表示位置');
define('CFGDESC_PRODUCT_FEATURED_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の表示の有無と表示位置について設定します。<br>0= off<br>1= 上部<br>2= 下部<br>3= 両方');
define('CFGTITLE_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の有無・表示位置');
define('CFGDESC_PRODUCT_ALL_LISTING_MULTIPLE_ADD_TO_CART', '複数商品の数量欄の表示の有無と表示位置について設定します。<br>0= off<br>1= 上部<br>2= 下部<br>3= 両方');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER', '商品属性- ダウンロード管理ページの表示');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_DOWNLOADS_MANAGER', 'ダウンロード管理画面で、ダウンロード商品の属性の最大表示数を設定します。');
define('CFGTITLE_ORDER_COMMENTS_PACKING_SLIP', '配送表への注文のコメント表示');
define('CFGDESC_ORDER_COMMENTS_PACKING_SLIP', '配送表に注文のコメント欄を表示しますか?
<br>
・0= いいえ<br>
・1= 一つ目のコメントのみ表示<br>
・2= 全てのコメントを表示');
define('CFGTITLE_SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO', '掲載待ちレビューについてのメール送信先');
define('CFGDESC_SEND_EXTRA_REVIEW_NOTIFICATION_EMAILS_TO', '掲載待ちのレビューについてのメールを送信するアドレスを設定します。<br>フォーマット：Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;');
define('CFGTITLE_ATTRIBUTES_ENABLED_QTY_PRICES', 'Qty Price Discount属性のオン/オフ');
define('CFGDESC_ATTRIBUTES_ENABLED_QTY_PRICES', '「大量購入による値引き」属性のオン/オフを設定します。');
define('CFGTITLE_CATEGORIES_SEPARATOR_SUBS', 'カテゴリの区切り - カテゴリ名とサブカテゴリ名の間');
define('CFGDESC_CATEGORIES_SEPARATOR_SUBS', 'カテゴリ名・サブカテゴリ名の間のセパレータ(区切り)は何にしますか?<br>
<br>
デフォルト = |_&amp;nbsp;');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN', 'おすすめ商品 - 管理画面でのページあたり表示最大数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_FEATURED_ADMIN', '管理画面において、ページあたりのおすすめ商品を最大表示件数を設定します。');
define('CFGTITLE_CATEGORIES_COUNT_PREFIX', 'カテゴリ内商品数の接頭辞(Prefix)');
define('CFGDESC_CATEGORIES_COUNT_PREFIX', 'カテゴリ内の商品数表示の接頭辞(Prefix)は?
<br><br>
・デフォルト= (');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_FEATURED', 'おすすめ商品 - トップページでの最大表示数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_FEATURED', 'トップページでおすすめ商品を最大何点表示するかを設定します。');
define('CFGTITLE_ATTRIBUTES_ENABLED_IMAGES', 'イメージ属性のオン/オフ');
define('CFGDESC_ATTRIBUTES_ENABLED_IMAGES', 'イメージ属性のオン/オフを設定します。');
define('CFGTITLE_CATEGORIES_COUNT_SUFFIX', 'カテゴリ内商品数の接尾辞(Suffix)');
define('CFGDESC_CATEGORIES_COUNT_SUFFIX', 'カテゴリ内の商品数表示の接尾辞(Suffix)は?
<br><br>
・デフォルト= )');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_FEATURED_PRODUCTS', 'おすすめ商品 - 商品リストでの最大表示数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_FEATURED_PRODUCTS', '商品リストでおすすめ商品をページあたり最大何点表示するかを設定します。');
define('CFGTITLE_CATEGORIES_SUBCATEGORIES_INDENT', 'カテゴリ・サブカテゴリのインデント');
define('CFGDESC_CATEGORIES_SUBCATEGORIES_INDENT', 'サブカテゴリをインデント(字下げ)表示する際の文字・記号は?<br><br>
・デフォルト = &nbsp;&nbsp;');
define('CFGTITLE_PADSS_ADMIN_SESSION_TIMEOUT_ENFORCED', 'PA-DSS Admin Session Timeout Enforced?');
define('CFGDESC_PADSS_ADMIN_SESSION_TIMEOUT_ENFORCED', 'PA-DSS Compliance requires that any Admin login sessions expire after 15 minutes of inactivity. <strong>Disabling this makes your site NON-COMPLIANT with PA-DSS rules, thus invalidating any certification.</strong>');
define('CFGTITLE_PADSS_PWD_EXPIRY_ENFORCED', 'PA-DSS Strong Password Rules Enforced?');
define('CFGDESC_PADSS_PWD_EXPIRY_ENFORCED', 'PA-DSS Compliance requires that admin passwords must be changed after 90 days and cannot re-use the last 4 passwords. <strong>Disabling this makes your site NON-COMPLIANT with PA-DSS rules, thus invalidating any certification.</strong>');
define('CFGTITLE_PADSS_AJAX_CHECKOUT', 'PA-DSS Ajax Checkout?');
define('CFGDESC_PADSS_AJAX_CHECKOUT', 'PA-DSS Compliance requires that for some inbuilt payment methods, that we use ajax to draw the checkout confirmation screen. While this will only happen if one of those payment methods is actually present, some people may want the traditional checkout flow <strong>Disabling this makes your site NON-COMPLIANT with PA-DSS rules, thus invalidating any certification.</strong>');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_LISTING', '商品リスト - ページあたり最大表示数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_LISTING', 'トップページの商品リスト表示での最大表示数を設定します。');
define('CFGTITLE_MAX_RANDOM_SELECT_FEATURED_PRODUCTS', 'おすすめ商品のランダム表示ボックス - 最大表示数');
define('CFGDESC_MAX_RANDOM_SELECT_FEATURED_PRODUCTS', 'おすすめ商品のランダム表示ボックスにおいて、最大何点表示するかを設定します。');
define('CFGTITLE_IMAGES_AUTO_ADDED', '商品情報 - １行に表示する追加画像数');
define('CFGDESC_IMAGES_AUTO_ADDED', '商品情報で１行に表示する追加画像数を設定します。<br><br>
・デフォルト = 3');
define('CFGTITLE_PRODUCT_LIST_DESCRIPTION', '商品説明の表示');
define('CFGDESC_PRODUCT_LIST_DESCRIPTION', '商品説明を表示するかどうかを設定します。<br><br>0= OFF<br>150= 推奨する長さ。または自由に表示する商品説明の最大文字数を設定してください。');
define('CFGTITLE_SHOW_SHOPPING_CART_EMPTY_NEW_PRODUCTS', 'ショッピングカートが空の場合の新着商品の表示');
define('CFGDESC_SHOW_SHOPPING_CART_EMPTY_NEW_PRODUCTS', 'ショッピングカートが空の場合の新着商品の表示を設定します。<br><br>
・0= off');
define('CFGTITLE_CATEGORIES_COUNT_ZERO', '商品登録0のカテゴリ - 表示・非表示');
define('CFGDESC_CATEGORIES_COUNT_ZERO', '商品数が0のカテゴリを表示しますか?<br>
<br>
・0 = off<br>
・1 = on');
define('CFGTITLE_SHOW_NEW_PRODUCTS_UPCOMING_MASKED', '入荷予定商品の新着表示');
define('CFGDESC_SHOW_NEW_PRODUCTS_UPCOMING_MASKED', '入荷予定商品を新着、サイドボックスに表示しますか?<br>0= off<br>1= on');
define('CFGTITLE_EZPAGES_SHOW_PREV_NEXT_BUTTONS', 'EZページ - [次へ][前へ]ボタン');
define('CFGDESC_EZPAGES_SHOW_PREV_NEXT_BUTTONS', 'EZページのコンテンツ内[前へ][続ける][次へ]ボタンを表示しますか?<br>0=OFF (ボタンなし)<br>1=「続ける」を表示<br>2=「前へ」「続ける」「次へ」を表示<br><br>デフォルト：2');
define('CFGTITLE_MAX_DISPLAY_SPECIAL_PRODUCTS_INDEX', '特価商品 - トップページでの最大表示点数');
define('CFGDESC_MAX_DISPLAY_SPECIAL_PRODUCTS_INDEX', 'トップページで、特価商品を最大何点表示するかを設定します。');
define('CFGTITLE_SHOW_SHOPPING_CART_EMPTY_FEATURED_PRODUCTS', 'ショッピングカートが空の場合のおすすめ商品の表示');
define('CFGDESC_SHOW_SHOPPING_CART_EMPTY_FEATURED_PRODUCTS', 'ショッピングカートが空の場合のおすすめ商品の表示を設定します。。<br><br>
・0= off');
define('CFGTITLE_CATEGORIES_SPLIT_DISPLAY', 'カテゴリボックスのスプリット(分割)表示');
define('CFGDESC_CATEGORIES_SPLIT_DISPLAY', '商品タイプによってカテゴリボックスをスプリット(分割)表示するかどうかを設定します。');
define('CFGTITLE_SHOW_TOTALS_IN_CART', 'ショッピングカート - 合計を表示');
define('CFGDESC_SHOW_TOTALS_IN_CART', '合計額をショッピングカートの上に表示しますか?<br>・0= off<br>・1= on: 商品の数量、重量合計<br>・2= on: 商品の数量、重量合計(0のときには非表示)<br>・3= on: 商品の数量合計');
define('CFGTITLE_SHOW_SHOPPING_CART_EMPTY_SPECIALS_PRODUCTS', 'ショッピングカートが空の場合の特価商品の表示');
define('CFGDESC_SHOW_SHOPPING_CART_EMPTY_SPECIALS_PRODUCTS', 'ショッピングカートが空の場合の特価商品の表示を設定します。<br><br>
・0= off');
define('CFGTITLE_SHOW_SHOPPING_CART_EMPTY_UPCOMING', 'ショッピングカートが空の場合の入荷予定商品の表示');
define('CFGDESC_SHOW_SHOPPING_CART_EMPTY_UPCOMING', 'ショッピングカートが空の場合の入荷予定商品の表示を設定します。<br><br>
・0= off');
define('CFGTITLE_SHOW_SHOPPING_CART_COMBINED', 'ログイン時のショッピングカートへの動作');
define('CFGDESC_SHOW_SHOPPING_CART_COMBINED', 'ログインする前にカートに商品を入れたままにしていた際、次回のログイン時のショッピングカートの動作を設定します。<br><br>0= 動作しない<br>1= 動作し、通知を行わずに直接ショッピングカートへ<br>3= 動作し、通知を行うだけでショッピングカートへはいかない');
define('CFGTITLE_ATTRIBUTES_ENABLED_TEXT_PRICES', '(言葉・文字による)テキストによる価格設定のオン/オフ');
define('CFGDESC_ATTRIBUTES_ENABLED_TEXT_PRICES', 'テキストによる価格設定の属性のオン/オフを設定します。');
define('CFGTITLE_PRODUCTS_OPTIONS_SORT_ORDER', '商品情報 - 商品オプションのソート順');
define('CFGDESC_PRODUCTS_OPTIONS_SORT_ORDER', '商品情報におけるオプション名のソート順を設定します。<br>
<br>
・0= ソート順、オプション名<br>
・1= オプション名');
define('CFGTITLE_EZPAGES_SHOW_TABLE_CONTENTS', 'EZページ - 目次の表示');
define('CFGDESC_EZPAGES_SHOW_TABLE_CONTENTS', 'EZページの目次を表示しますか?<br>0= OFF<br>1= ON');
define('CFGTITLE_TEXT_SPACES_FREE', 'テキストによる価格設定 - 空欄の場合は無料');
define('CFGDESC_TEXT_SPACES_FREE', 'テキストによる価格設定の場合、空欄のままなら無料にするかどうかを設定します。<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_PRODUCTS_OPTIONS_SORT_BY_PRICE', '商品情報 - 商品オプション値のソート順');
define('CFGDESC_PRODUCTS_OPTIONS_SORT_BY_PRICE', '商品説明での商品オプション値のソート順を設定します。<br>
<br>
・0= ソート順、価格<br>
・1= ソート順、オプション値の名称');
define('CFGTITLE_PRODUCTS_OPTIONS_TYPE_READONLY_IGNORED', 'Read Only属性の商品 -「カートに入れる」ボタンの表示');
define('CFGDESC_PRODUCTS_OPTIONS_TYPE_READONLY_IGNORED', 'READONLY属性だけが設定された商品に「カートに入れる」ボタンを表示しますか?<br>0= OFF<br>1= ON');
define('CFGTITLE_SESSION_TIMEOUT_ADMIN', '管理画面のタイムアウト設定(秒数)');
define('CFGDESC_SESSION_TIMEOUT_ADMIN', '管理画面を操作しなかった場合にタイムアウトと見なす秒数を設定します。デフォルトは900秒(15分)です。PCI DSS準拠のため15分より長い時間に設定することはできません。');
define('CFGTITLE_SHOW_NEW_PRODUCTS_LIMIT', '新着商品 - 表示期限');
define('CFGDESC_SHOW_NEW_PRODUCTS_LIMIT', '新着商品の表示期限を設定します。<br>
<br>
・0=全て・降順<br>
・1=当月登録分のみ<br>
・30=登録から30日間<br>
・60=登録から60日間(ほか90、120の設定が可能)');
define('CFGTITLE_IMAGE_PRODUCT_LISTING_WIDTH', '商品リスト - 画像の横幅');
define('CFGDESC_IMAGE_PRODUCT_LISTING_WIDTH', 'デフォルト = 100');
define('CFGTITLE_PRODUCT_LIST_SORT_ORDER_ASCENDING', '商品リストの昇順を表示する記号');
define('CFGDESC_PRODUCT_LIST_SORT_ORDER_ASCENDING', '商品リストの昇順を示す記号は?<br>デフォルト = +');
define('CFGTITLE_CONTACT_US_LIST', '「お問い合わせ」メールのドロップダウン設定');
define('CFGDESC_CONTACT_US_LIST', '「お問い合わせ」ページで、メールアドレスのリストを設定し、ドロップダウンリストとして表示できます。<br>
フォーマット：Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;');
define('CFGTITLE_SHOW_CUSTOMER_GREETING', '顧客への挨拶 - トップページに表示');
define('CFGDESC_SHOW_CUSTOMER_GREETING', '顧客への歓迎メッセージを常にトップページに表示しますか?<br>0= off<br>1= on');
define('CFGTITLE_EZPAGES_DISABLE_HEADER_DISPLAY_LIST', 'EZ-ページ - ヘッダで表示しないページ');
define('CFGDESC_EZPAGES_DISABLE_HEADER_DISPLAY_LIST', 'EZページのうち通常のページヘッダに表示しないページは?<br>表示しないページのページIDをカンマ(,)区切りで記述してください。ページIDは管理画面の[追加設定・ツール]のEZページ設定画面で確認できます。<br>例：1,5,2<br>ない場合は空欄のまま');
define('CFGTITLE_IMAGE_PRODUCT_LISTING_HEIGHT', '商品リスト - 画像の高さ');
define('CFGDESC_IMAGE_PRODUCT_LISTING_HEIGHT', 'デフォルト = 80');
define('CFGTITLE_PRODUCT_LIST_SORT_ORDER_DESCENDING', '商品リストの降順を表示する記号');
define('CFGDESC_PRODUCT_LIST_SORT_ORDER_DESCENDING', '商品リストの降順を示す記号は?<br>デフォルト = -');
define('CFGTITLE_PRODUCT_IMAGES_ATTRIBUTES_NAMES', '商品の属性画像の下に表示するオプション値');
define('CFGDESC_PRODUCT_IMAGES_ATTRIBUTES_NAMES', '商品の属性画像の下にオプション名を表示しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_EZPAGES_DISABLE_FOOTER_DISPLAY_LIST', 'EZ-ページ - フッタで表示しないページ');
define('CFGDESC_EZPAGES_DISABLE_FOOTER_DISPLAY_LIST', 'EZページのうち通常のページフッタに表示しないページは?<br>表示しないページのページIDをカンマ(,)区切りで記述してください。ページIDは管理画面の[追加設定・ツール]のEZページ設定画面で確認できます。<br>例：3,7<br>ない場合は空欄のまま');
define('CFGTITLE_GLOBAL_SET_TIME_LIMIT', '管理画面のプログラム処理の上限時間設定(秒)
');
define('CFGDESC_GLOBAL_SET_TIME_LIMIT', '管理画面においてなんらかの操作を行った場合の、プログラム処理の強制終了時間を設定します。デフォルトは60秒＝1分。この設定は、プログラム処理時間に問題がある場合などにだけ変更してください。
');
define('CFGTITLE_IMAGE_PRODUCT_NEW_LISTING_WIDTH', '新商品リスト - 画像の横幅');
define('CFGDESC_IMAGE_PRODUCT_NEW_LISTING_WIDTH', 'デフォルト = 100');
define('CFGTITLE_EZPAGES_DISABLE_LEFTCOLUMN_DISPLAY_LIST', 'EZ-ページ - 左カラムで表示しないページ');
define('CFGDESC_EZPAGES_DISABLE_LEFTCOLUMN_DISPLAY_LIST', 'EZページのうち通常の左カラムに表示しないページは?<br>表示しないページのページIDをカンマ(,)区切りで記述してください。ページIDは管理画面の[追加設定・ツール]のEZページ設定画面で確認できます。<br>例：6,17<br>ない場合は空欄のまま');
define('CFGTITLE_IMAGE_PRODUCT_NEW_LISTING_HEIGHT', '新商品リスト - 画像の高さ');
define('CFGDESC_IMAGE_PRODUCT_NEW_LISTING_HEIGHT', 'デフォルト = 80');
define('CFGTITLE_EZPAGES_DISABLE_RIGHTCOLUMN_DISPLAY_LIST', 'EZ-ページ - 右カラムで表示しないページ');
define('CFGDESC_EZPAGES_DISABLE_RIGHTCOLUMN_DISPLAY_LIST', 'EZページのうち通常の右カラムに表示しないページは?<br>表示しないページのページIDをカンマ(,)区切りで記述してください。ページIDは管理画面の[追加設定・ツール]のEZページ設定画面で確認できます。<br>例：5,23,47<br>ない場合は空欄のまま');
define('CFGTITLE_SHOW_VERSION_UPDATE_IN_HEADER', 'Zen Cart新バージョンの自動チェック(ヘッダで告知するか否か)');
define('CFGDESC_SHOW_VERSION_UPDATE_IN_HEADER', 'Zen Cartの新バージョンがリリースされた場合、ヘッダに情報を表示しますか?<br><br>
注意：この設定をオンにすると、管理者ページの表示が遅くなる場合があります。インターネットに繋がっていないテスト環境などではfalseにしてください。
');
define('CFGTITLE_IMAGE_PRODUCT_NEW_WIDTH', '新商品 - 画像の横幅');
define('CFGDESC_IMAGE_PRODUCT_NEW_WIDTH', 'デフォルト = 100');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_ALL', '商品一覧ページ - ページあたり表示点数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_ALL', '商品一覧において、ページあたりの最大表示点数を設定します。');
define('CFGTITLE_IMAGE_PRODUCT_NEW_HEIGHT', '新商品 - 画像の高さ');
define('CFGDESC_IMAGE_PRODUCT_NEW_HEIGHT', 'デフォルト = 80');
define('CFGTITLE_ACCOUNT_NEWSLETTER_STATUS', 'メールマガジンのチェックボックスの表示');
define('CFGDESC_ACCOUNT_NEWSLETTER_STATUS', 'メールマガジンのチェックボックスの表示設定をします。<br>0= 表示オフ<br>1= ボックス表示・チェックなし状態<br>2= ボックス表示・チェックあり状態<br>【注意】デフォルトで「チェックあり」の状態にしておくと、各国のスパム規制法規に抵触する恐れがあります。');
define('CFGTITLE_SHOW_SALE_DISCOUNT_STATUS', '商品情報 - セール割引表示');
define('CFGDESC_SHOW_SALE_DISCOUNT_STATUS', 'セール割引分を表示しますか?<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_SHOW_CATEGORIES_ALWAYS', 'カテゴリ - トップページに表示');
define('CFGDESC_SHOW_CATEGORIES_ALWAYS', 'カテゴリを常にトップページに表示しますか?<br>
・0= off<br>
・1= on<br>
・Default category can be set to Top Level or a Specific Top Level');
define('CFGTITLE_DISPLAY_SERVER_UPTIME', 'サーバの稼動時間(アップタイム)');
define('CFGDESC_DISPLAY_SERVER_UPTIME', 'サーバの稼働時間を表示するかどうかを設定します。この情報はいくつかのサーバでエラーログとして残ることがあります。<br><br>true＝表示<br><br>false＝非表示');
define('CFGTITLE_IMAGE_FEATURED_PRODUCTS_LISTING_WIDTH', 'おすすめ商品 -画像の幅');
define('CFGDESC_IMAGE_FEATURED_PRODUCTS_LISTING_WIDTH', 'デフォルト = 100');
define('CFGTITLE_ACCOUNT_EMAIL_PREFERENCE', 'デフォルトのメール形式の設定');
define('CFGDESC_ACCOUNT_EMAIL_PREFERENCE', '顧客のデフォルトのメール形式を設定します。<br>0= テキスト形式<br>1= HTML形式');
define('CFGTITLE_SHOW_SALE_DISCOUNT', '商品情報 - セール割引の表示方法(割引額・パーセント)');
define('CFGDESC_SHOW_SALE_DISCOUNT', 'セール割引の表示方法を設定します。<br><br>
・1= 割引率(%) でのoff<br>
・2= 割引金額 でのoff');
define('CFGTITLE_CATEGORIES_START_MAIN', 'カテゴリ - トップページ での開閉');
define('CFGDESC_CATEGORIES_START_MAIN', 'トップページにおけるカテゴリの開閉状態を設定します。<br>
・0= トップレベル(親)カテゴリのみ<br>
・特定のカテゴリを開くにはカテゴリIDで指定。サブカテゴリも指定可能。<br>
【例】3_10 (カテゴリID:3、サブカテゴリID:10)');
define('CFGTITLE_IMAGE_FEATURED_PRODUCTS_LISTING_HEIGHT', 'おすすめ商品 - 画像の高さ');
define('CFGDESC_IMAGE_FEATURED_PRODUCTS_LISTING_HEIGHT', 'デフォルト = 80');
define('CFGTITLE_SHOW_SALE_DISCOUNT_DECIMALS', '商品情報 - 割引率表示の小数点');
define('CFGDESC_SHOW_SALE_DISCOUNT_DECIMALS', '割引率表示のパーセントの小数点位置を設定します。<br><br>
・デフォルト= 0');
define('CFGTITLE_SHOW_CATEGORIES_SUBCATEGORIES_ALWAYS', 'カテゴリ - サブカテゴリを常に開いておく');
define('CFGDESC_SHOW_CATEGORIES_SUBCATEGORIES_ALWAYS', 'カテゴリとサブカテゴリは常に表示しますか?<br>0= OFF 親カテゴリのみ<br>1= ON カテゴリ・サブカテゴリは選択されたら常に表示');
define('CFGTITLE_MISSING_PAGE_CHECK', 'リンク切れページのチェック');
define('CFGDESC_MISSING_PAGE_CHECK', 'Zen Cartがリンク切れページを検知した際に自動的にトップページに転送しますか?<br><br>
・On = オン<br>
・Off = オフ<br>
・Page Not Found = ページが見つかりません画面へ遷移する<br>
<br>
注意：デバックの際などにはこの機能をオフにするとよいでしょう。');
define('CFGTITLE_IMAGE_PRODUCT_ALL_LISTING_WIDTH', '全商品一覧 - 画像の幅');
define('CFGDESC_IMAGE_PRODUCT_ALL_LISTING_WIDTH', 'デフォルト = 100');
define('CFGTITLE_IMAGE_PRODUCT_ALL_LISTING_HEIGHT', '全商品一覧 - 画像の高さ');
define('CFGDESC_IMAGE_PRODUCT_ALL_LISTING_HEIGHT', 'デフォルト = 80');
define('CFGTITLE_CURL_PROXY_REQUIRED', 'cURL Proxy Status');
define('CFGDESC_CURL_PROXY_REQUIRED', 'Does your host require that you use a proxy for cURL communication?');
define('CFGTITLE_MAX_LANGUAGE_FLAGS_COLUMNS', '言語サイドボックス -　フラッグ最大表示数');
define('CFGDESC_MAX_LANGUAGE_FLAGS_COLUMNS', '言語サイドボックスにおいて、列あたりのフラッグの最大表示点数を設定します。');
define('CFGTITLE_CUSTOMERS_PRODUCTS_NOTIFICATION_STATUS', '顧客への商品の通知 - ステータス');
define('CFGDESC_CUSTOMERS_PRODUCTS_NOTIFICATION_STATUS', '顧客がチェックアウト後に、商品の通知(product notifications)について尋ねるかどうかを設定します。<br><br>
・0= 尋ねない<br>
・1= 尋ねる(サイト全体に対して設定されていない場合)<br>
【注意】サイドボックスはこの設定とは別にオフにする必要があります。');
define('CFGTITLE_PRODUCT_LIST_ALPHA_SORTER', '商品リストの英語名でのソートボタン');
define('CFGDESC_PRODUCT_LIST_ALPHA_SORTER', '商品リストに英語名でのソートボタンを表示しますか?
<br>
・true (する)<br>
・false (しない)');
define('CFGTITLE_CONTACT_US_STORE_NAME_ADDRESS', '「お問い合わせ」にショップ名と住所を表記');
define('CFGDESC_CONTACT_US_STORE_NAME_ADDRESS', '「お問い合わせ」画面にショップ名と住所を表記するかどうかを設定します。<br><br>
・0= off<br>
・1= on');
define('CFGTITLE_SHOW_ACCEPTED_CREDIT_CARDS', '利用可能なクレジットカード - 支払いページに表示');
define('CFGDESC_SHOW_ACCEPTED_CREDIT_CARDS', '利用可能なクレジットカードを支払いページに表示しますか?<br><br>
・0= off<br>
・1= テキストを表示<br>
・2= 画像を表示<br>
【注意】クレジットカードの画像とテキストは、データベースとランゲージファイル内で定義されている必要があります。');
define('CFGTITLE_OTHER_IMAGE_PRICE_IS_FREE_ON', '商品情報- 無料商品の画像・テキストのステータス');
define('CFGDESC_OTHER_IMAGE_PRICE_IS_FREE_ON', '商品情報での無料商品の画像・イメージの表示を設定します。<br>
<br>
・0= Text<br>
・1= Image');
define('CFGTITLE_CURL_PROXY_SERVER_DETAILS', 'cURL Proxy Address');
define('CFGDESC_CURL_PROXY_SERVER_DETAILS', 'If you have a hosting service that requires use of a proxy to talk to external sites via cURL, enter their proxy address here.<br>format: address:port<br>ie: 127.0.0.1:3128');
define('CFGTITLE_PRODUCTS_PRICE_IS_CALL_IMAGE_ON', '商品情報 - お問い合わせ商品表示設定');
define('CFGDESC_PRODUCTS_PRICE_IS_CALL_IMAGE_ON', 'お問い合わせ商品であることを表示する画像またはテキストについて設定します。<br><br>
・0= テキスト<br>
・1= 画像');
define('CFGTITLE_PRODUCT_LIST_CATEGORIES_IMAGE_STATUS', '商品リストのサブカテゴリ画像');
define('CFGDESC_PRODUCT_LIST_CATEGORIES_IMAGE_STATUS', '商品リストのサブカテゴリで画像を表示しますか?
<br>
・true (する)<br>
・false (しない)');
define('CFGTITLE_PRODUCT_LIST_CATEGORIES_IMAGE_STATUS_TOP', '商品リストのトップカテゴリ画像');
define('CFGDESC_PRODUCT_LIST_CATEGORIES_IMAGE_STATUS_TOP', '商品リストのトップカテゴリで画像を表示しますか?
<br>
・true (する)<br>
・false (しない)');
define('CFGTITLE_CURRENCY_UPLIFT_RATIO', '通貨換算比率');
define('CFGDESC_CURRENCY_UPLIFT_RATIO', '為替レートの更新を行う際、あなたのショップにて換算する比率を加えますか?<br>為替レートは、為替レートサーバーから情報を得てきます。その為替レートにいくらの比率を上乗せするか決めます。<br><br><strong>デフォルト: 1.05</strong><br>これは、あなたのショップにて為替レートに1.05％上乗せするということになります。');
define('CFGTITLE_CURRENCY_SERVER_PRIMARY', 'Currency Exchange Rate: Primary Source');
define('CFGDESC_CURRENCY_SERVER_PRIMARY', 'Where to request external currency updates from (Primary source)<br><br>Additional sources can be installed via plugins.');
define('CFGTITLE_CURRENCY_SERVER_BACKUP', 'Currency Exchange Rate: Secondary Source');
define('CFGDESC_CURRENCY_SERVER_BACKUP', 'Where to request external currency updates from (Secondary source)<br><br>Additional sources can be installed via plugins.');
define('CFGTITLE_CUSTOMERS_APPROVAL', '商品・価格の閲覧制限');
define('CFGDESC_CUSTOMERS_APPROVAL', '顧客がショップ内で商品や価格を閲覧するのを制限するかどうかを設定します。<br>0= 要ログインなどの制限なし<br>1= ブラウスにはログインが必須<br>2= ログインなしでブラウズ可能だが価格は非表示<br>3= 商品閲覧のみ<br><br>【注意】オプション「2」は、サーチエンジンのロボットに収集されたくない場合や、ログイン済みの顧客にのみ価格を開示したい場合に有効です。');
define('CFGTITLE_PRODUCTS_QTY_BOX_STATUS', '商品の数量欄 - 新しく商品を追加する際に');
define('CFGDESC_PRODUCTS_QTY_BOX_STATUS', '新しく商品を登録する際、商品の数量欄のデフォルト設定をどうしますか?<br><br>
・0= off<br>
・1= on<br>
注意：onにすると数量欄を表示し、「カートに加える」もonになります。(This will show a Qty Box when ON and default the Add to Cart to 1)');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET1', 'バナー表示グループ - ヘッダポジション1');
define('CFGDESC_SHOW_BANNERS_GROUP_SET1', 'どのバナーグループをヘッダポジション1に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET2', 'バナー表示グループ - ヘッダポジション2');
define('CFGDESC_SHOW_BANNERS_GROUP_SET2', 'どのバナーグループをヘッダポジション2に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET3', 'バナー表示グループ - ヘッダポジション3');
define('CFGDESC_SHOW_BANNERS_GROUP_SET3', 'どのバナーグループをヘッダポジション3に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_MAX_FILE_UPLOAD_SIZE', 'ファイルのアップロードサイズ - 上限');
define('CFGDESC_MAX_FILE_UPLOAD_SIZE', 'ファイルアップロードの際の上限サイズを設定します。デフォルトは2MB(2,048,000バイト)です。');
define('CFGTITLE_PRODUCTS_IMAGE_NO_IMAGE_STATUS', '商品画像 - 画像がない場合のNo Image画像');
define('CFGDESC_PRODUCTS_IMAGE_NO_IMAGE_STATUS', '「No Image」画像を自動的に表示するかどうかを設定します。<br><br>
・0= off<br>
・1= On<br>');
define('CFGTITLE_PRODUCT_LIST_CATEGORY_ROW_STATUS', 'トップカテゴリ内サブカテゴリのリンク表示');
define('CFGDESC_PRODUCT_LIST_CATEGORY_ROW_STATUS', 'トップカテゴリページでサブカテゴリのリンクを表示するかどうか設定します。<br>
・0=非表示<br>
・1=表示');
define('CFGTITLE_SEND_LOWSTOCK_EMAIL', '在庫わずかになったらメール送信');
define('CFGDESC_SEND_LOWSTOCK_EMAIL', '商品の在庫が水準を下回った際にメールを送信するかどうかを設定します。<br>
・0= off<br>
・1= on');
define('CFGTITLE_DEFINE_MAIN_PAGE_STATUS', 'トップページの定義領域 - ステータス');
define('CFGDESC_DEFINE_MAIN_PAGE_STATUS', '編集された領域の表示を行いますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_UPLOAD_FILENAME_EXTENSIONS', 'アップロードファイルに許可するファイルタイプ');
define('CFGDESC_UPLOAD_FILENAME_EXTENSIONS', 'ユーザーがアップロードするファイルに対して許可するファイルタイプの拡張子を設定します。複数の場合はカンマ(,)で区切り、コロン(.)は含めないでください。<br><br>設定例: "jpg,jpeg,gif,png,eps,cdr,ai,pdf,tif,tiff,bmp,zip"');
define('CFGTITLE_PRODUCTS_IMAGE_NO_IMAGE', '商品画像 - No Image画像の指定');
define('CFGDESC_PRODUCTS_IMAGE_NO_IMAGE', '商品画像がない場合に表示するNo Image画像を設定します。<br><br>Default = no_picture.gif');
define('CFGTITLE_SEND_EXTRA_LOW_STOCK_EMAILS_TO', '在庫わずかになった際のメール送信先');
define('CFGDESC_SEND_EXTRA_LOW_STOCK_EMAILS_TO', '商品の在庫が水準を下回った際にメールを送信するアドレスを設定します。複数設定することができます。<br>
フォーマット：Name 1 &lt;email@address1&gt;, Name 2 &lt;email@address2&gt;');
define('CFGTITLE_DEFINE_CONTACT_US_STATUS', '「お問い合わせ」ページの表示 - ステータス');
define('CFGDESC_DEFINE_CONTACT_US_STATUS', '編集された「お問い合わせ」テキストを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_REVIEWS_APPROVAL', '商品レビュー - 承認の要否');
define('CFGDESC_REVIEWS_APPROVAL', '商品レビューの表示には承認が必要にしますか?<br><br>
・0= off<br>
・1= on<br>
注意：レビューが非表示設定になっている場合は無視されます。');
define('CFGTITLE_DEFINE_PRIVACY_STATUS', '「個人情報保護方針」表示 - ステータス');
define('CFGDESC_DEFINE_PRIVACY_STATUS', '編集された「個人情報保護方針」を表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_DEFINE_SHIPPINGINFO_STATUS', '「配送・送料について」 ページ - ステータス');
define('CFGDESC_DEFINE_SHIPPINGINFO_STATUS', '編集された「配送・送料について」テキストを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_DEFINE_CONDITIONS_STATUS', '「ご利用規約」ページ - ステータス');
define('CFGDESC_DEFINE_CONDITIONS_STATUS', '編集された「ご利用規約」ページを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_MAX_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING', '管理画面の注文リストで表示する注文詳細の最大件数');
define('CFGDESC_MAX_DISPLAY_RESULTS_ORDERS_DETAILS_LISTING', '管理画面の注文リストでの注文詳細の最大表示件数は?<br>0 = 無制限');
define('CFGTITLE_CUSTOMERS_APPROVAL_AUTHORIZATION', '顧客の購入オーソライズ');
define('CFGDESC_CUSTOMERS_APPROVAL_AUTHORIZATION', 'ショップでの購入に際して、顧客はショップ側に審査・許可される必要があるかどうかを設定します。<br>0= 不要<br>1= 商品の閲覧にも許可が必要<br>2= 商品の閲覧は自由だが価格の閲覧は許可された顧客のみ<br>3= 商品の閲覧、価格の閲覧は自由だが購入は許可された顧客のみ<br>【注意】オプション「2」「3」はサーチエンジンのロボット除けに用いることもできます。');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET4', 'バナー表示グループ - フッタポジション1');
define('CFGDESC_SHOW_BANNERS_GROUP_SET4', 'どのバナーグループをフッタポジション1に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_PRODUCT_INFO_MAIN_NEW_PRODUCTS', '新着商品をトップページに表示する');
define('CFGDESC_SHOW_PRODUCT_INFO_MAIN_NEW_PRODUCTS', '新着商品をトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_DEFINE_CHECKOUT_SUCCESS_STATUS', '「ご注文が完了しました」ページ - ステータス');
define('CFGDESC_DEFINE_CHECKOUT_SUCCESS_STATUS', '編集された「ご注文が完了しました」テキストを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_PAYPAL_IPN', '管理画面のリストで表示するPayPal IPNの最大件数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_PAYPAL_IPN', '管理画面のリストでのPayPal IPNの表示件数は?<br>デフォルトは20です。');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_FILENAME', '顧客のオーソライズ(閲覧制限) - ファイル名');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_FILENAME', '顧客のオーソライズ(閲覧制限)に使うファイル名を設定します。拡張子なしで表記してください。<br>デフォルトは
"customers_authorization"');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET5', 'バナー表示グループ - フッタポジション2');
define('CFGDESC_SHOW_BANNERS_GROUP_SET5', 'どのバナーグループをフッタポジション2に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS', 'おすすめ商品をトップページに表示する');
define('CFGDESC_SHOW_PRODUCT_INFO_MAIN_FEATURED_PRODUCTS', 'おすすめ商品をトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_DEFINE_DISCOUNT_COUPON_STATUS', '「クーポン券」ページ - ステータス');
define('CFGDESC_DEFINE_DISCOUNT_COUPON_STATUS', '編集された「クーポン券」テキストを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_HEADER_OFF', '顧客のオーソライズ(閲覧制限) - ヘッダを隠す');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_HEADER_OFF', '顧客のオーソライズ(閲覧制限) でヘッダを表示するかどうかを設定します。<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET6', 'バナー表示グループ - フッタポジション3');
define('CFGDESC_SHOW_BANNERS_GROUP_SET6', 'どのバナーグループをフッタポジション3に使用しますか? 使わない場合は未記入にします。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_PRODUCT_INFO_MAIN_SPECIALS_PRODUCTS', '特価商品をトップページに表示する');
define('CFGDESC_SHOW_PRODUCT_INFO_MAIN_SPECIALS_PRODUCTS', '特価商品をトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_DEFINE_SITE_MAP_STATUS', '「サイトマップ」ページ - ステータス');
define('CFGDESC_DEFINE_SITE_MAP_STATUS', '編集された「クーポン券」テキストを表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_DEFINE_PAGE_NOT_FOUND_STATUS', '「ページが見つかりません」ページ - ステータス');
define('CFGDESC_DEFINE_PAGE_NOT_FOUND_STATUS', '編集された「ページが見つかりません」テキストを表示しますか?<br>0= 非表示<br>1= 表示');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF', '顧客のオーソライズ(閲覧制限) - 左カラムを隠す');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_COLUMN_LEFT_OFF', '顧客のオーソライズ(閲覧制限) で、左カラムを表示するかどうかを設定します。<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_SHOW_PRODUCT_INFO_MAIN_UPCOMING', '入荷予定商品をトップページに表示する');
define('CFGDESC_SHOW_PRODUCT_INFO_MAIN_UPCOMING', '入荷予定商品をトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF', '顧客のオーソライズ(閲覧制限) - 右カラムを隠す');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_COLUMN_RIGHT_OFF', '顧客のオーソライズ(閲覧制限)で、右カラムを表示するかどうかを設定します。<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_META_TAG_INCLUDE_MODEL', 'METAタグ - TITLEタグへの商品型番表示');
define('CFGDESC_META_TAG_INCLUDE_MODEL', 'TITLEタグに商品型番を表示しますか?<br>
<br>
・0= off<br>
・1= on');
define('CFGTITLE_MAX_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS', 'マルチカテゴリマネージャで商品を表示するカラムの最大数');
define('CFGDESC_MAX_DISPLAY_PRODUCTS_TO_CATEGORIES_COLUMNS', 'マルチカテゴリマネージャ(Multiple Categories Manager)で商品を表示するカラムの最大数は?<br>3 = デフォルト');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_FOOTER_OFF', '顧客のオーソライズ(閲覧制限) - フッタを隠す');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_FOOTER_OFF', '顧客のオーソライズ(閲覧制限) で、フッタを表示するかどうかを設定します。<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_SHOW_NEWSLETTER_UNSUBSCRIBE_LINK', '「メールマガジンの購読解除」リンクの表示');
define('CFGDESC_SHOW_NEWSLETTER_UNSUBSCRIBE_LINK', '「メールマガジンの購読解除」リンクをインフォメーションサイドボックスに表示しますか?');
define('CFGTITLE_META_TAG_INCLUDE_PRICE', 'METAタグ - TITLEタグへの商品価格表示');
define('CFGDESC_META_TAG_INCLUDE_PRICE', 'TITLEタグに商品価格を表示しますか?<br>
<br>
・0= off<br>
・1= on');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET7', 'バナー表示グループ - サイドボックス内バナーボックス');
define('CFGDESC_SHOW_BANNERS_GROUP_SET7', 'どのバナーグループをサイドボックス内バナーボックス2に使用しますか? 使わない場合は未記入にします。<br>
デフォルトのグループはSideBox-Bannersです。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_PRODUCT_INFO_CATEGORY_NEW_PRODUCTS', '新着商品をトップページに表示する - カテゴリ・サブカテゴリ共に
');
define('CFGDESC_SHOW_PRODUCT_INFO_CATEGORY_NEW_PRODUCTS', '新着商品を(トップレベル)カテゴリ・サブカテゴリ共にトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_EZPAGE', 'EZページの表示の最大件数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_EZPAGE', 'EZページの表示の最大件数は?<br>20 = デフォルト');
define('CFGTITLE_CUSTOMERS_AUTHORIZATION_PRICES_OFF', '顧客のオーソライズ(閲覧制限) - 価格の非表示');
define('CFGDESC_CUSTOMERS_AUTHORIZATION_PRICES_OFF', '顧客のオーソライズで、価格を表示するかどうかを設定します。<br><br>
・true=hide<br>
・false=show');
define('CFGTITLE_MAX_META_TAG_DESCRIPTION_LENGTH', 'METAタグ - Meta Descriptionの長さ');
define('CFGDESC_MAX_META_TAG_DESCRIPTION_LENGTH', 'Meta Descriptionの最大の長さを設定してください。<br>デフォルトの最大値(ワード数)：50');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET8', 'バナー表示グループ - サイドボックス内バナーボックス2');
define('CFGDESC_SHOW_BANNERS_GROUP_SET8', 'どのバナーグループをサイドボックス内バナーボックス2に使用しますか? 使わない場合は未記入にします。<br>
デフォルトのグループはSideBox-Bannersです。<br>
<br>
バナー表示グループは1つ(1バナーグループ)または複数(マルチバナーグループ)にすることもできます。マルチバナーグループを表示するためにはグループ名をコロン(<strong>:</strong>)で区切って入力します。<br>
例：Wide-Banners:SideBox-Banners');
define('CFGTITLE_SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS', 'おすすめ商品をトップページに表示する - カテゴリ・サブカテゴリ共に');
define('CFGDESC_SHOW_PRODUCT_INFO_CATEGORY_FEATURED_PRODUCTS', 'おすすめ商品を(トップレベル)カテゴリ・サブカテゴリ共にトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_SHOW_PRODUCT_INFO_COLUMNS_ALSO_PURCHASED_PRODUCTS', '「こんな商品も購入しています」 - 横列あたりの表示点数');
define('CFGDESC_SHOW_PRODUCT_INFO_COLUMNS_ALSO_PURCHASED_PRODUCTS', '「こんな商品も買っています」の横列(Row)あたりの表示点数を設定します。<br>0= off またはソート順を設定');
define('CFGTITLE_SHOW_BANNERS_GROUP_SET_ALL', 'バナー表示グループ - サイドボックス内バナーボックス全て');
define('CFGDESC_SHOW_BANNERS_GROUP_SET_ALL', 'サイドボックス内バナーボックス全て(Banner All sidebox)で表示するバナー表示グループは、1つです。デフォルトのグループはBannersAllです。どのバナーグループをサイドボックスのbanner_box_allに表示しますか?<br>表示しない場合は空欄にしてください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_CATEGORY_SPECIALS_PRODUCTS', '特価商品をトップページに表示する - カテゴリ・サブカテゴリ共に');
define('CFGDESC_SHOW_PRODUCT_INFO_CATEGORY_SPECIALS_PRODUCTS', '特価商品を(トップレベル)カテゴリ・サブカテゴリ共にトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_SHOW_PRODUCT_INFO_CATEGORY_UPCOMING', '入荷予定商品をトップページに表示する - カテゴリ・サブカテゴリ共に');
define('CFGDESC_SHOW_PRODUCT_INFO_CATEGORY_UPCOMING', '入荷予定商品を(トップレベル)カテゴリ・サブカテゴリ共にトップページに表示 しますか?
<br>
0= off<br>
または表示順を数値(1～4)で設定してください。
');
define('CFGTITLE_PROPORTIONAL_IMAGES_STATUS', '商品画像 - 商品・カテゴリでプロポーショナルな画像を使う');
define('CFGDESC_PROPORTIONAL_IMAGES_STATUS', '商品情報・カテゴリでプロポーショナルな画像を使いますか?<br><br>注意：プロポーショナル画像には高さ・横幅とも"0"(ピクセル)を指定しないでください。<br>0= off 1= on');
define('CFGTITLE_NEW_SIGNUP_DISCOUNT_COUPON', 'ウェルカムクーポン券');
define('CFGDESC_NEW_SIGNUP_DISCOUNT_COUPON', '会員登録時にその会員にウェルカムクーポン券として自動発行するクーポン券を選択してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_MISSING_NEW_PRODUCTS', '新着商品をトップページに表示する - エラーとリンク切れ商品ページ');
define('CFGDESC_SHOW_PRODUCT_INFO_MISSING_NEW_PRODUCTS', '新着予定商品をトップページに表示 しますか?
(エラーとリンク切れ商品ページ・/* 訳注・意味不明 */)<br>
0= off<br>
または順番を数値(1～4)で設定してください。');
define('CFGTITLE_NEW_SIGNUP_GIFT_VOUCHER_AMOUNT', '新しいギフト券の登録額');
define('CFGDESC_NEW_SIGNUP_GIFT_VOUCHER_AMOUNT', '新しいギフト券の登録額を設定します。<br><br>
・空白 = なし<br>
・1000 = 1000円');
define('CFGTITLE_SHOW_PRODUCT_INFO_MISSING_FEATURED_PRODUCTS', 'おすすめ商品をトップページに表示する - エラーとリンク切れ商品ページ');
define('CFGDESC_SHOW_PRODUCT_INFO_MISSING_FEATURED_PRODUCTS', 'おすすめ商品をトップページに表示 しますか?
(エラーとリンク切れ商品ページ・/* 訳注・意味不明 */)<br>
0= off<br>
または順番を数値(1～4)で設定してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_MISSING_SPECIALS_PRODUCTS', '特価商品をトップページに表示する - エラーとリンク切れ商品ページ');
define('CFGDESC_SHOW_PRODUCT_INFO_MISSING_SPECIALS_PRODUCTS', '特価商品をトップページに表示 しますか?
(エラーとリンク切れ商品ページ・/* 訳注・意味不明 */)<br>
0= off<br>
または順番を数値(1～4)で設定してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_MISSING_UPCOMING', '入荷予定商品をトップページに表示する - エラーとリンク切れ商品ページ');
define('CFGDESC_SHOW_PRODUCT_INFO_MISSING_UPCOMING', '入荷予定商品をトップページに表示 しますか?
(エラーとリンク切れ商品ページ・/* 訳注・意味不明 */)<br>
0= off<br>
または順番を数値(1～4)で設定してください。');
define('CFGTITLE_CUSTOMERS_REFERRAL_STATUS', '顧客の紹介(Customers Referral)ステータス');
define('CFGDESC_CUSTOMERS_REFERRAL_STATUS', '顧客の紹介コードについて設定します。<br>0= Off<br>1= 1st Discount Coupon Code used最初のディスカウントクーポンを使用済み<br>2= アカウント作成の際、顧客自身が追加・編集可能<br><br>注意：顧客の紹介コードがセットされると、管理画面からだけ変更することができます。');
define('CFGTITLE_SHOW_FOOTER_IP', 'フッタ - IPアドレスの表示・非表示');
define('CFGDESC_SHOW_FOOTER_IP', '顧客のIPアドレスをフッタに表示しますか?<br>
<br>
・0= off<br>
・1= on<br>');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS', 'クーポン券のページあたり最大表示件数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS', 'クーポン券の1ページあたりの表示件数を設定します。');
define('CFGTITLE_MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS_REPORTS', 'クーポン券レポートのページあたり最大表示件数');
define('CFGDESC_MAX_DISPLAY_SEARCH_RESULTS_DISCOUNT_COUPONS_REPORTS', 'クーポン券のレポートページでの表示件数を設定します。');
define('CFGTITLE_DEFINE_PAGE_2_STATUS', '自由編集ページ(Define Page) 2');
define('CFGDESC_DEFINE_PAGE_2_STATUS', '自由編集ページ2を表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_DEFINE_PAGE_3_STATUS', '自由編集ページ(Define Page) 3');
define('CFGDESC_DEFINE_PAGE_3_STATUS', '自由編集ページ3 を表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_DEFINE_PAGE_4_STATUS', '自由編集ページ(Define Page) 4');
define('CFGDESC_DEFINE_PAGE_4_STATUS', '自由編集ページ(Define Page) 4を表示しますか?<br>0= リンク:表示　　編集領域:非表示<br>1= リンク:表示　　編集領域:表示<br>2= リンク:非表示　編集領域:表示<br>3= リンク:非表示　編集領域:非表示');
define('CFGTITLE_SHOW_PRODUCT_INFO_LISTING_BELOW_NEW_PRODUCTS', '新着商品を表示する - 商品リストの下部に');
define('CFGDESC_SHOW_PRODUCT_INFO_LISTING_BELOW_NEW_PRODUCTS', '商品リストの下に新着商品を表示しますか?
<br>0= off <br>
または配置順を数値(1～4)で設定してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_LISTING_BELOW_FEATURED_PRODUCTS', 'おすすめ商品を表示する - 商品リストの下部に');
define('CFGDESC_SHOW_PRODUCT_INFO_LISTING_BELOW_FEATURED_PRODUCTS', '商品リストの下におすすめ商品を表示しますか?
<br>0= off <br>
または配置順を数値(1～4)で設定してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_LISTING_BELOW_SPECIALS_PRODUCTS', '特価商品を表示する - 商品リストの下部に');
define('CFGDESC_SHOW_PRODUCT_INFO_LISTING_BELOW_SPECIALS_PRODUCTS', '商品リストの下に特価商品を表示しますか?
<br>0= off <br>
または配置順を数値(1～4)で設定してください。');
define('CFGTITLE_SHOW_PRODUCT_INFO_LISTING_BELOW_UPCOMING', '入荷予定商品を表示する - 商品リストの下部に');
define('CFGDESC_SHOW_PRODUCT_INFO_LISTING_BELOW_UPCOMING', '商品リストの下に入荷予定商品を表示しますか?
<br>0= off <br>
または配置順を数値(1～4)で設定してください。');
define('CFGTITLE_AUDIENCE_SELECT_DISPLAY_COUNTS', 'オンラインユーザー数の表示設定');
define('CFGDESC_AUDIENCE_SELECT_DISPLAY_COUNTS', 'オンラインのユーザ(audiences/recipients)を表示する際、recipientsを含めますか?<br><br>
【注意】この設定をtrueにすると、沢山の顧客がいる場合などに表示が遅くなる場合があります。');
define('CFGTITLE_DISCOUNT_QTY_ADD', '数量割引 - 追加割引レベル数');
define('CFGDESC_DISCOUNT_QTY_ADD', '数量割引の割引レベルの追加数を指定します。一つの割引レベルに一つの割引設定を行うことができます。');
define('CFGTITLE_DISCOUNT_QUANTITY_PRICES_COLUMN', '数量割引 - 一行あたりの表示数');
define('CFGDESC_DISCOUNT_QUANTITY_PRICES_COLUMN', '商品情報ページで表示する数量割引設定の一行あたり表示数を指定します。割引設定数（割引レベル数）が一行あたりの表示数を超えた場合は、複数行で表示されます。');
define('CFGTITLE_SHOW_PRODUCT_INFO_COLUMNS_NEW_PRODUCTS', '新着商品 - 横列あたりの表示点数');
define('CFGDESC_SHOW_PRODUCT_INFO_COLUMNS_NEW_PRODUCTS', '新着商品の列(Row)あたりの配置点数を設定します。');
define('CFGTITLE_SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS', 'おすすめ商品 - 横列あたりの表示点数');
define('CFGDESC_SHOW_PRODUCT_INFO_COLUMNS_FEATURED_PRODUCTS', 'おすすめ商品の列(Row)あたりの配置点数を設定します。');
define('CFGTITLE_SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS', '特価商品 - 横列あたりの表示点数');
define('CFGDESC_SHOW_PRODUCT_INFO_COLUMNS_SPECIALS_PRODUCTS', '特価商品の列(Row)あたりの配置点数を設定します。');
define('CFGTITLE_SSLPWSTATUSCHECK', 'login mode https');
define('CFGDESC_SSLPWSTATUSCHECK', 'System setting. Do not edit.');
define('CFGTITLE_CATEGORIES_PRODUCTS_SORT_ORDER', 'カテゴリ/商品のソート順');
define('CFGDESC_CATEGORIES_PRODUCTS_SORT_ORDER', 'カテゴリ/商品のソート順を設定します。<br>0= カテゴリ/商品 ソート順/名前<br>1= カテゴリ/商品 名前<br>2= 商品モデル<br>3= 商品数量+, 商品名<br>4= 商品数量-, 商品名<br>5= 商品価格+, 商品名<br>6= 商品価格+, 商品名');
define('CFGTITLE_SHOW_PRODUCT_INFO_ALL_PRODUCTS', 'トップレベル(親)カテゴリの商品リスト表示 - フィルタ表示・全商品表示');
define('CFGDESC_SHOW_PRODUCT_INFO_ALL_PRODUCTS', '現在のメインカテゴリに商品リストが適用された際、商品をフィルタ表示しますか? それとも全カテゴリから商品を表示しますか?<br>
・0= Filter
・Off 1=Filter On');
define('CFGTITLE_FURIKANA_NECESSARY_COUNTRIES', 'ふりがなが必要な国');
define('CFGDESC_FURIKANA_NECESSARY_COUNTRIES', 'ふりがなが必要な国名をカンマで区切って入力してください');
define('CFGTITLE_EMAIL_SMTPAUTH_MAILBOX', 'SMTP認証 - メールアカウント');
define('CFGDESC_EMAIL_SMTPAUTH_MAILBOX', 'あなたのホスティングサービスが提供しているメールアカウント(例：me@mydomain.com)を入力してください。これはSMTP認証に必要な情報です。<br>メールにSMTP認証を使っている場合にのみ必要です。');
define('CFGTITLE_EMAIL_SMTPAUTH_PASSWORD', 'SMTP認証 - パスワード');
define('CFGDESC_EMAIL_SMTPAUTH_PASSWORD', 'SMTPメールボックスのパスワードを入力してください。<br>メールにSMTP認証を使っている場合にのみ必要です。');
define('CFGTITLE_EMAIL_SMTPAUTH_MAIL_SERVER', 'SMTP認証 - DNS名');
define('CFGDESC_EMAIL_SMTPAUTH_MAIL_SERVER', 'SMTPメールサーバのDNS名を入力してください。<br>例：mail.mydomain.com or 55.66.77.88<br>メールにSMTP認証を使っている場合にのみ必要です。');
define('CFGTITLE_EMAIL_SMTPAUTH_MAIL_SERVER_PORT', 'SMTP認証 - IPポート番号');
define('CFGDESC_EMAIL_SMTPAUTH_MAIL_SERVER_PORT', 'SMTPメールサーバが運用されているIPポート番号を入力してください。<br>メールにSMTP認証を使っている場合にのみ必要です。');
define('CFGTITLE_HTML_EDITOR_PREFERENCE', 'HTMLエディタ');
define('CFGDESC_HTML_EDITOR_PREFERENCE', 'メールマガジンや商品説明などで用いるHTML/リッチテキスト用のソフトウェアを設定します。');
define('CFGTITLE_OPTION_NAMES_VALUES_GLOBAL_STATUS', 'オプション名/オプション値の追加・コピー・削除');
define('CFGDESC_OPTION_NAMES_VALUES_GLOBAL_STATUS', 'オプション名/オプション値の追加・コピー・削除の機能についてのグローバルな設定を行います。<br>0= 機能を隠す<br>1= 機能を表示する');
define('CFGTITLE_CATEGORIES_TABS_STATUS', 'カテゴリ - タブメニュー');
define('CFGDESC_CATEGORIES_TABS_STATUS', 'カテゴリ - タブをオンにするとショップ画面のヘッダ部分にカテゴリが表示されます。さまざまな応用ができるでしょう。<br>0= カテゴリのタブを隠す<br>1= カテゴリのタブを表示');
define('CFGTITLE_SHOW_ACCOUNT_LINKS_ON_SITE_MAP', 'サイトマップ - Myページの表示');
define('CFGDESC_SHOW_ACCOUNT_LINKS_ON_SITE_MAP', 'Myページのリンクをサイトマップに表示しますか?<br>注意：サーチエンジンのクローラーがこのページをインデックスしようとしてログインページに誘導されてしまう可能性があり、お勧めしません。<br><br>デフォルト：false (表示しない)');
define('CFGTITLE_SKIP_SINGLE_PRODUCT_CATEGORIES', '1商品だけのカテゴリの表示をスキップ');
define('CFGDESC_SKIP_SINGLE_PRODUCT_CATEGORIES', '商品が1つだけのカテゴリの表示をスキップしますか?<br>このオプションがTrueの場合、ユーザーが商品が1つだけのカテゴリをクリックすると、Zen Cartは直接商品ページを表示するようになります。<br>デフォルト：True');
define('CFGTITLE_CURRENCIES_TRANSLATIONS', 'テキストメールでの貨幣の変換');
define('CFGDESC_CURRENCIES_TRANSLATIONS', 'テキスト形式のメールに、どんな貨幣の変換が必要ですか?<br>Default = &amp;pound;,￡:&amp;euro;,EUR');
define('CFGTITLE_USE_SPLIT_LOGIN_MODE', 'ログインページの分割利用');
define('CFGDESC_USE_SPLIT_LOGIN_MODE', 'ログインページを分割しますか?<br>ログインページは二つのモードで表示することができます。ログイン、登録一括のページ、分割されたページです。分割した場合は、ユーザー登録が別になり、ユーザー登録ボタンを押して登録ページに行きます。一括の場合は、ログインと同じページ内に登録画面が表示されます。<br>デフォルト：False');
define('CFGTITLE_IMAGE_USE_CSS_BUTTONS', 'CSSボタン');
define('CFGDESC_IMAGE_USE_CSS_BUTTONS', 'CSS画像(gif/jpg)の代わりにボタンを表示しますか?<br>ONにした場合、ボタンのスタイルはスタイルシートで定義してください。');
define('CFGTITLE_SESSION_USE_ROOT_COOKIE_PATH', 'クッキーパスのrootパス利用');
define('CFGDESC_SESSION_USE_ROOT_COOKIE_PATH', '通常のZen Cartでは、クッキーパスとして、ショップが存在するディレクトリを使用します。これは問題を引き起こす場合があります。この設定は、ショップディレクトリではなく、サーバーの根本にクッキーパスを設定していることになります。あなたのサーバーがセッションに関する問題があったとした場合は、それが利用されることがあります。<strong>通常の設定 = False</strong><br /><br /><strong>この設定を変更する場合は、あなたのサイトがセッションに関する問題があることを意味するかもしれません。もし、問題があるならばブラウザクッキーを利用しないようにするべきです。</strong>');
define('CFGTITLE_SESSION_ADD_PERIOD_PREFIX', 'クッキードメインへの接頭語追加');
define('CFGDESC_SESSION_ADD_PERIOD_PREFIX','通常Zen Cartでは、クッキードメインに接頭語として（例えば.www.mydomain.com）を加えます。ただし、これはサーバーによっては問題を引き起こす場合があります。セッションに問題がある場合は、加えないようにした方がいいでしょう。<strong>通常の設定 = True</strong>');


?>