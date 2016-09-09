#
# * Country/Zones Zen Cart SQL Load for MySQL databases
# * @package Installer
# * @access private
# * @copyright Copyright 2003-2011 Zen Cart Development Team
# * @copyright Portions Copyright 2003 osCommerce
# * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
# * @version $Id: mysql_utf8_japanese_localize.sql 19514 2012-04-20 13:32:00Z kimono $
#
# NOTE: UTF8 files need to be saved with encoding format set to UTF8-without-BOM.
#

#一般設定
UPDATE configuration SET configuration_value=1 WHERE configuration_key='ENTRY_FIRST_NAME_MIN_LENGTH';
UPDATE configuration SET configuration_value=1 WHERE configuration_key='ENTRY_LAST_NAME_MIN_LENGTH';
UPDATE configuration SET configuration_value=1 WHERE configuration_key='ENTRY_STREET_ADDRESS_MIN_LENGTH';
UPDATE configuration SET configuration_value = 'false' WHERE configuration_key = 'ACCOUNT_SUBURB';
UPDATE configuration SET configuration_value = 'true' WHERE configuration_key = 'DISPLAY_PRICE_WITH_TAX';
UPDATE configuration SET configuration_value = '107' WHERE configuration_key = 'SHOW_CREATE_ACCOUNT_DEFAULT_COUNTRY';

INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('お問い合わせ時の個人情報確認画面表示', 'DISPLAY_CONTACT_US_PRIVACY_CONDITIONS', 'true', 'お問い合わせする画面で個人情報の確認画面を表示します。<div style="color: red;">2005年4月1日に施行された「個人情報保護法」では、個人情報保護方針を開示することが求められています。</div>', '11', '3', 'zen_cfg_select_option(array(\'true\', \'false\'), ', now());

#マスターテーブル
#住所フォーマット追加
INSERT INTO address_format VALUES (8, '$firstname $lastname 様$cr$postcode$cr$state$city$cr$streets$cr$country$cr$telephone$cr$fax','$statename $city');

#通貨設定
UPDATE currencies SET value='0.012267' WHERE code='USD';
UPDATE currencies SET value='0.009331' WHERE code='EUR';
UPDATE currencies SET value='0.007638' WHERE code='GBP';
UPDATE currencies SET value='0.012202' WHERE code='CAD';
UPDATE currencies SET value='0.011877' WHERE code='AUD';
INSERT INTO currencies VALUES (6,'Japanese Yen','JPY','','円','.',',','0','1.000000', now());


#言語設定
INSERT INTO languages VALUES (2,'Japanese','ja','icon.gif','japanese',0);

#国設定
#住所フォーマットを変更
UPDATE countries SET address_format_id=8 WHERE countries_id=107;

#地域設定
# Japan
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'北海道','北海道');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'青森県','青森県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'岩手県','岩手県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'宮城県','宮城県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'秋田県','秋田県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'山形県','山形県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'福島県','福島県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'茨城県','茨城県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'栃木県','栃木県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'群馬県','群馬県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'埼玉県','埼玉県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'千葉県','千葉県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'東京都','東京都');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'神奈川県','神奈川県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'新潟県','新潟県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'富山県','富山県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'石川県','石川県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'福井県','福井県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'山梨県','山梨県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'長野県','長野県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'岐阜県','岐阜県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'静岡県','静岡県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'愛知県','愛知県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'三重県','三重県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'滋賀県','滋賀県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'京都府','京都府');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'大阪府','大阪府');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'兵庫県','兵庫県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'奈良県','奈良県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'和歌山県','和歌山県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'鳥取県','鳥取県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'島根県','島根県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'岡山県','岡山県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'広島県','広島県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'山口県','山口県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'徳島県','徳島県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'香川県','香川県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'愛媛県','愛媛県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'高知県','高知県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'福岡県','福岡県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'佐賀県','佐賀県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'長崎県','長崎県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'熊本県','熊本県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'大分県','大分県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'宮崎県','宮崎県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'鹿児島県','鹿児島県');
INSERT INTO zones (zone_country_id, zone_code, zone_name) VALUES (107,'沖縄県','沖縄県');

# 税金・税率設定
UPDATE tax_rates SET tax_rate = '8.0',tax_description = '消費税：8%' WHERE tax_rates_id = '1';
UPDATE geo_zones SET geo_zone_name = '日本',geo_zone_description = '日本（消費税）' WHERE geo_zone_id = '1';
UPDATE zones_to_geo_zones SET zone_country_id = '107',zone_id = NULL WHERE association_id = '1';
UPDATE tax_class SET tax_class_title = '消費税',tax_class_description = '消費税（日本）' WHERE tax_class_id = '1';

#注文ステータス
INSERT INTO orders_status VALUES ('1', '2', '処理待ち');
INSERT INTO orders_status VALUES ('2', '2', '処理中');
INSERT INTO orders_status VALUES ('3', '2', '配送済み');
INSERT INTO orders_status VALUES ('4', '2', '更新');


# 住所に電話番号を追加、個人情報側からは電話番号削除
ALTER TABLE address_book ADD COLUMN entry_telephone varchar(32) NOT NULL;
ALTER TABLE address_book ADD COLUMN entry_fax varchar(32);
ALTER TABLE orders ADD COLUMN delivery_telephone varchar(32);
ALTER TABLE orders ADD COLUMN delivery_fax varchar(32);
ALTER TABLE orders ADD COLUMN billing_telephone varchar(32);
ALTER TABLE orders ADD COLUMN billing_fax varchar(32);
ALTER TABLE orders ADD COLUMN customers_fax varchar(32);
ALTER TABLE customers CHANGE customers_telephone customers_telephone VARCHAR(32);
ALTER TABLE orders CHANGE customers_telephone customers_telephone VARCHAR(32);

# カナを追加する
ALTER TABLE address_book ADD entry_firstname_kana     varchar(32) NOT NULL default '';
ALTER TABLE address_book ADD entry_lastname_kana      varchar(32) NOT NULL default '';
ALTER TABLE customers    ADD customers_firstname_kana varchar(32) NOT NULL default '';
ALTER TABLE customers    ADD customers_lastname_kana  varchar(32) NOT NULL default '';
ALTER TABLE orders       ADD customers_name_kana      varchar(64) NOT NULL default '';
ALTER TABLE orders       ADD delivery_name_kana       varchar(64) NOT NULL default '';
ALTER TABLE orders       ADD billing_name_kana        varchar(64) NOT NULL default '';
INSERT INTO configuration (configuration_title, configuration_key, configuration_value, configuration_description, configuration_group_id, sort_order, set_function, date_added) VALUES ('ふりがなが必要な国', 'FURIKANA_NECESSARY_COUNTRIES', 'Japanese', 'ふりがなが必要な国名をカンマで区切って入力してください', '5', '100', '', now());

# メール送信先を翻訳する
UPDATE query_builder SET query_name='全顧客' WHERE query_id=1;
UPDATE query_builder SET query_name='メールマガジン希望者' WHERE query_id=2;
UPDATE query_builder SET query_name='休眠顧客（過去三ヶ月間、配信希望者のみ）' WHERE query_id=3;
UPDATE query_builder SET query_name='稼動顧客（過去三ヶ月間、配信希望者のみ）' WHERE query_id=4;
UPDATE query_builder SET query_name='稼動顧客（過去三ヶ月間）' WHERE query_id=5;
UPDATE query_builder SET query_name='管理者' WHERE query_id=6;
UPDATE query_builder SET query_name='購入を終えていない顧客' WHERE query_id=7;

# product_type_layoutの翻訳

UPDATE product_type_layout SET configuration_title='型番表示', configuration_description='商品情報で型番を表示する 0= off 1= on' WHERE configuration_title='Show Model Number' AND configuration_description='Display Model Number on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='重量表示', configuration_description='商品情報で型番を表示する 0= off 1= on' WHERE  configuration_title='Show Weight' AND configuration_description='Display Weight on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='オプション重量表示', configuration_description='商品情報でオプションの重量を表示する。 0= off 1= on' WHERE  configuration_title='Show Attribute Weight' AND configuration_description='Display Attribute Weight on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='メーカー表示', configuration_description='商品情報でメーカーを表示する 0= off 1= on' WHERE  configuration_title='Show Manufacture' AND configuration_description='Display Manufacture Name on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='カート内の数量表示', configuration_description='商品情報でカート内の数量を表示する。 0= off 1= on' WHERE  configuration_title='Show Quantity in Shopping Cart' AND configuration_description='Display Quantity in Current Shopping Cart on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='在庫数表示', configuration_description='商品情報で在庫数を表示する。 0= off 1= on' WHERE  configuration_title='Show Quantity in Stock' AND configuration_description='Display Quantity in Stock on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='レビュー数表示', configuration_description='商品情報でレビュー数を表示する 0= off 1= on' WHERE  configuration_title='Show Product Reviews Count' AND configuration_description='Display Product Reviews Count on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='レビューボタン表示', configuration_description='商品情報でレビューボタンを表示する 0= off 1= on' WHERE  configuration_title='Show Product Reviews Button' AND configuration_description='Display Product Reviews Button on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='購入可能になった日付の表示', configuration_description='商品情報で商品が購入可能になった日付を表示する。 0= off 1= on' WHERE  configuration_title='Show Date Available' AND configuration_description='Display Date Available on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='登録日表示', configuration_description='商品情報で商品が登録された日付を表示します。 0= off 1= on' WHERE  configuration_title='Show Date Added' AND configuration_description='Display Date Added on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='商品URL表示', configuration_description='商品情報で商品のURLを表示する 0= off 1= on' WHERE  configuration_title='Show Product URL' AND configuration_description='Display URL on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='[前へ][次へ]ナビゲーションボタン表示', configuration_description='商品情報で[前へ][次へ]ナビゲーションボタンを表示する。<br />0= off<br />1= ページ上部<br />2= ページ下部<br />3= ページ上部、下部' WHERE  configuration_title='Previous Next - Navigation Bar Position' AND configuration_description='Location of Previous/Next Navigation Bar<br />0= off<br />1= Top of Page<br />2= Bottom of Page<br />3= Both Top and Bottom of Page';
UPDATE product_type_layout SET configuration_title='[前へ][次へ]ナビゲーションの並び順', configuration_description='[前へ][次へ]ナビゲーションの並び順を設定する。<br />0= 商品ID<br />1= 商品名<br />2= 型番<br />3= 価格、商品名<br />4= 価格, 型番l<br />5= 商品名、型番' WHERE  configuration_title='Previous Next - Sort Order' AND configuration_description='Products Display Order by<br />0= Product ID<br />1= Product Name<br />2= Model<br />3= Price, Product Name<br />4= Price, Model<br />5= Product Name, Model';
UPDATE product_type_layout SET configuration_title='[前へ][次へ]ナビゲーション - カテゴリ表示', configuration_description='[前へ][次へ]ボタンの上に表示するカテゴリ名/画像の表示位置<br />0= off<br />1= 左寄せ<br />2= 中央寄せ<br />3= 右寄せ' WHERE  configuration_title='Previous Next - Navigation Includes Category' AND configuration_description='Product\'s Category Image and Name Alignment Above Previous/Next Navigation Bar<br />0= off<br />1= Align Left<br />2= Align Center<br />3= Align Right';
UPDATE product_type_layout SET configuration_title='「友達に知らせる」ボタン表示', configuration_description='商品情報で「友達に知らせる」ボタンを表示する。<br /><br />Note: この設定をoffにしてもサイドボックスの「友達に知らせる」は消えません。また、サイドボックスの「友達に知らせる」をoffにしてもこのボタン表示の設定に影響はありません。<br />0= off 1= on' WHERE  configuration_title='Show Product Tell a Friend button' AND configuration_description='Display the Tell a Friend button on Product Info<br /><br />Note: Turning this setting off does not affect the Tell a Friend box in the columns and turning off the Tell a Friend box does not affect the button<br />0= off 1= on';
UPDATE product_type_layout SET configuration_title='不明商品ページアクセス時に新商品のページを表示する', configuration_description='不明な商品ページにアクセスがあった場合に新商品ページを表示する 0= off 1= on' WHERE  configuration_title='Show New Products on Missing Products Page' AND configuration_description='Show New Products on Missing Product 0= off 1= on';
UPDATE product_type_layout SET configuration_title='不明商品ページアクセス時に入荷予定商品のページを表示する', configuration_description='不明な商品ページにアクセスがあった場合に入荷予定商品のページを表示する 0= off 1= on' WHERE  configuration_title='Show Upcoming Products on Missing Products Page' AND configuration_description='Show Upcoming Products on Missing Product 0= off 1= on';
UPDATE product_type_layout SET configuration_title='商品情報 - 商品オプションの整列順', configuration_description='商品オプションの整列順に使用する値を設定します。<br>0= 整列順番号、オプション名<br>1= オプション名のみ' WHERE  configuration_title='' AND configuration_description='0';
UPDATE product_type_layout SET configuration_title='商品情報 - 属性整列順', configuration_description='商品オプションの属性の整列順に使用する値を設定します。<br>0= 整列順番号, 価格<br>1= 整列順番号、オプションの値' WHERE  configuration_title='' AND configuration_description='1';
UPDATE product_type_layout SET configuration_title='1行に表示する商品オプション画像数', configuration_description='商品情報 - 一行に表示する商品オプションの画像数を設定します。<br />デフォルト = 5' WHERE  configuration_title='Product Info - Number of Attribute Images per Row' AND configuration_description='Product Info - Enter the number of attribute images to display per row<br />Default = 5';
UPDATE product_type_layout SET configuration_title='商品オプション画像の下に表示するオプションの値', configuration_description='商品オプション画像の下にオプションの値を表示します。<br />0= off 1= on' WHERE  configuration_title='Product Info - Show Option Values Name Below Attributes Image' AND configuration_description='Product Info - Show the name of the Option Value beneath the Attribute Image?<br />0= off 1= on';
UPDATE product_type_layout SET configuration_title='商品情報 - フォーム要素(ラジオボタンまたはチェックボックス)', configuration_description='0= 画像の下にオプション名<br />1= フォーム要素、画像、オプション名<br />2= フォーム要素、画像、下にオプション名<br />3= 画像、フォーム要素、下にオプション名<br />4=画像、オプション名、下にフォーム要素<br />5= 画像、オプション名、上にフォーム要素' WHERE  configuration_title='Product Info - Show Option Values and Attributes Images for Radio Buttons and Checkboxes' AND configuration_description='0= Images Below Option Names<br />1= Element, Image and Option Value<br />2= Element, Image and Option Name Below<br />3= Option Name Below Element and Image<br />4= Element Below Image and Option Name<br />5= Element Above Image and Option Name';
UPDATE product_type_layout SET configuration_title='商品情報 - セール割引表示', configuration_description='セール割引分を表示します。<br />0= off 1= on' WHERE  configuration_title='Product Info - Show Sales Discount Savings Status' AND configuration_description='Product Info - Show the amount of discount savings?<br />0= off 1= on';
UPDATE product_type_layout SET configuration_title='商品情報 - セール割引の表示方法(割引額 , パーセント)', configuration_description='セール割引の表示方法を設定します。:<br />1= 割引率(%) off 2= 割引金額 off' WHERE  configuration_title='Product Info - Show Sales Discount Savings Dollars or Percentage' AND configuration_description='Product Info - Show the amount of discount savings display as:<br />1= % off 2= $amount off';
UPDATE product_type_layout SET configuration_title='商品情報 - 割引率表示の小数点', configuration_description='割引率表示のパーセントの小数点位置を設定します。<br />デフォルト= 0' WHERE  configuration_title='Product Info - Show Sales Discount Savings Percentage Decimals' AND configuration_description='Product Info - Show discount savings display as a Percentage with how many decimals?:<br />Default= 0';
UPDATE product_type_layout SET configuration_title= '商品情報 - 無料商品表示設定', configuration_description='無料商品であることを画像またはテキストで表示します。<br />0= テキスト<br />1= 画像' WHERE  configuration_title='Product Info - Price is Free Image or Text Status' AND configuration_description='Product Info - Show the Price is Free Image or Text on Displayed Price<br />0= Text<br />1= Image';
UPDATE product_type_layout SET configuration_title='商品情報 - お問合せ商品表示設定', configuration_description='お問合せ商品であることを画像またはテキストで表示します。<br />0= テキスト<br />1= 画像' WHERE  configuration_title='Product Info - Price is Call for Price Image or Text Status' AND configuration_description='Product Info - Show the Price is Call for Price Image or Text on Displayed Price<br />0= Text<br />1= Image';
UPDATE product_type_layout SET configuration_title='新商品登録時の在庫表示', configuration_description='新商品登録画面でデフォルトの在庫の表示/非表示ステータスを設定します。<br /><br />0= off<br />1= on<br />NOTE: ONにした場合在庫ボックスを表示するようになり、「カートにいれる」ボックスに1が表示されるようになります。' WHERE  configuration_title='Product Quantity Box Status' AND configuration_description='What should the Default Quantity Box Status be on New Products?<br /><br />0= off<br />1= on<br />NOTE: This will show a Qty Box when ON and default the Add to Cart to 1';
UPDATE product_type_layout SET configuration_title='送料無料のデフォルトステータス - 新商品追加時', configuration_description='新商品を追加する時の、送料無料のデフォルトステータスをONにしますか？' WHERE configuration_title='Product Free Shipping Default Status - Normal Shipping Rules - When adding new products?' AND configuration_description='What should the Default Free Shipping status be when adding new products?';
UPDATE product_type_layout SET configuration_title='送料無料の画像ステータス - カタログ', configuration_description='カタログ中の送料無料の画像/テキストを表示しますか？' WHERE configuration_title='Product Free Shipping Image Status - Catalog' AND configuration_description='Show the Free Shipping image/text in the catalog?';
UPDATE product_type_layout SET configuration_title='税種別のデフォルト - 新商品追加時', configuration_description='新商品を追加する時の、税種別のデフォルトIDを入力してください。' WHERE configuration_title='Product Price Tax Class Default - When adding new products?' AND configuration_description='What should the Product Price Tax Class Default ID be when adding new products?';
UPDATE product_type_layout SET configuration_title='ヴァーチャル商品のデフォルトステータス - 新商品追加時', configuration_description='新商品を追加する時の、ヴァーチャル商品のデフォルトステータスをONにしますか？' WHERE configuration_title='Product Virtual Default Status - Skip Shipping Address - When adding new products?' AND configuration_description='Default Virtual Product status to be ON when adding new products?';
UPDATE product_type_layout SET configuration_title='アーティストの表示', configuration_description='商品ページに、アーティスト名を表示しますか？0= off 1= on' WHERE configuration_title='Show Artist' AND configuration_description='Display Artists Name on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='メーカーの表示', configuration_description='商品ページに、メーカー名を表示しますか？0= off 1= on' WHERE configuration_title='Show Manufacturer' AND configuration_description='Display Manufacturer Name on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='音楽ジャンルの表示', configuration_description='商品ページに、音楽ジャンルを表示しますか？0= off 1= on' WHERE configuration_title='Show Music Genre' AND configuration_description='Display Music Genre on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='レコード会社の表示', configuration_description='商品ページに、レコード会社を表示しますか？0= off 1= on' WHERE configuration_title='Show Record Company' AND configuration_description='Display Recoprd Company on Product Info 0= off 1= on';
UPDATE product_type_layout SET configuration_title='ベース価格の表示', configuration_description='商品ページに、ベース価格を表示しますか？0= off 1= on' WHERE configuration_title='Show Starting At text on Price' AND configuration_description='Display Starting At text on products with attributes Product Info 0= off 1= on';

ALTER TABLE coupon_gv_customer CHANGE amount amount decimal(20,4) NOT NULL default '0.0000';
ALTER TABLE coupon_gv_queue CHANGE amount amount decimal(20,4) NOT NULL default '0.0000';
UPDATE configuration SET configuration_value='On' where configuration_key='MISSING_PAGE_CHECK';
UPDATE configuration SET configuration_value='107' where configuration_key='SHIPPING_ORIGIN_COUNTRY';

# オプションタイプtextの利用可能設定

INSERT INTO products_options_values (products_options_values_id, language_id, products_options_values_name) VALUES (0, 2, 'TEXT');
