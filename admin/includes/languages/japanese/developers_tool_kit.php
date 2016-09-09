<?php
/**
 * @package admin
 * @copyright Copyright 2003-2016 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: Author: DrByte  Mon Oct 19 01:39:59 2015 -0400 Modified in v1.5.5 $
 * @author obitastar
 */
  define('HEADING_TITLE', '開発者用ツール');
  define('TABLE_CONFIGURATION_TABLE', 'CONSTANT定義を検索');

  define('SUCCESS_PRODUCT_UPDATE_PRODUCTS_PRICE_SORTER', '<strong>成功</strong>: 属性のソート順を更新しました');

  define('ERROR_CONFIGURATION_KEY_NOT_FOUND', '<strong>エラー:</strong> 一致する設定キー(Configuration Keys)が見つかりません...');
  define('ERROR_CONFIGURATION_KEY_NOT_ENTERED', '<strong>エラー:</strong> 検索のための設定キーかテキストが入力されていません ... 検索を中止しました');

  define('TEXT_INFO_PRODUCTS_PRICE_SORTER_UPDATE', '<strong>全商品の価格ソートを更新</strong><br />表示価格でのソートを可能にするには: ');

  define('TEXT_CONFIGURATION_CONSTANT', '<strong>CONSTANT・言語定義ファイルを検索</strong>');
  define('TEXT_CONFIGURATION_KEY', 'キーまたは名前:');
  define('TEXT_INFO_CONFIGURATION_UPDATE', '<strong>注意:</strong> CONSTANTSは大文字です。<br />ドロップダウンで選択されていれば、データベーステーブル内に何も見つからない場合、ランゲージファイル、機能(functions)、クラス(classes)その他の検索が行われます。');

  define('TABLE_TITLE_KEY', '<strong>キー:</strong>');
  define('TABLE_TITLE_TITLE', '<strong>タイトル:</strong>');
  define('TABLE_TITLE_DESCRIPTION', '<strong>説明:</strong>');
  define('TABLE_TITLE_GROUP', '<strong>グループ:</strong>');
  define('TABLE_TITLE_VALUE', '<strong>値:</strong>');

  define('TEXT_LOOKUP_NONE', '- 未記入 -');
  define('TEXT_INFO_SEARCHING', '検索中 ');
  define('TEXT_INFO_FILES_FOR', ' ファイル ... 検索フィルタ&nbsp;: ');
  define('TEXT_INFO_MATCHES_FOUND', '一致する行がヒット: ');
  define('TEXT_INFO_FILENAME', 'FILENAME: ');

  define('TEXT_LANGUAGE_LOOKUPS', 'ランゲージファイルの検索:');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_LANGUAGE', '全ランゲージファイル ' . strtoupper($_SESSION['language']) . ' - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG', 'メインの全ランゲージファイル - ショップページ(Catalog) (' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_CATALOG_TEMPLATE', '現在選択中の全ランゲージファイル - ' . DIR_WS_CATALOG . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN', 'メインの全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . 'english.php /espanol.php etc.)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ADMIN_LANGUAGE', '現在選択中の全ランゲージファイル - 管理者ページ(Admin) (' . DIR_WS_ADMIN . DIR_WS_LANGUAGES . $_SESSION['language'] . '/*.php)');
  define('TEXT_LANGUAGE_LOOKUP_CURRENT_ALL', '現在選択中の全ランゲージファイル - ショップページ(Catalog)/管理者ページ(Admin)');

  define('TEXT_FUNCTION_CONSTANT', '<strong>機能ファイル(Function files)内で機能(Functions)類を検索 </strong>');
  define('TEXT_FUNCTION_LOOKUPS', '機能ファイルを検索:');
  define('TEXT_FUNCTION_LOOKUP_CURRENT', '全ての機能ファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_CATALOG', '全ての機能ファイル - ショップページ(Catalog)');
  define('TEXT_FUNCTION_LOOKUP_CURRENT_ADMIN', '全ての機能ファイル - 管理者ページ(Admin)');

  define('TEXT_CLASS_CONSTANT', '<strong>クラスファイル(Classes files)内でクラス(Classes)類を検索</strong>');
  define('TEXT_CLASS_LOOKUPS', 'クラスファイルを検索:');
  define('TEXT_CLASS_LOOKUP_CURRENT', '全てのクラスファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_CLASS_LOOKUP_CURRENT_CATALOG', '全てのクラスファイル - ショップページ(Catalog)');
  define('TEXT_CLASS_LOOKUP_CURRENT_ADMIN', '全てのクラスファイル - 管理者ページ(Admin)');

  define('TEXT_TEMPLATE_CONSTANT', '<strong>テンプレート(Template)類を検索</strong>');
  define('TEXT_TEMPLATE_LOOKUPS', 'テンプレートファイルを検索:');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT', '全てのテンプレートファイル - /templates sideboxes /pages etc.');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_TEMPLATES', '全てのテンプレートファイル - /templates');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_SIDEBOXES', '全てのテンプレートファイル - /sideboxes');
  define('TEXT_TEMPLATE_LOOKUP_CURRENT_PAGES', '全てのテンプレートファイル - /pages');

  define('TEXT_ALL_FILES_CONSTANT', '<strong>全ファイル内を検索</strong>');
  define('TEXT_ALL_FILES_LOOKUPS', '全ファイル内を検索:');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT', '全ファイル - ショップページ(Catalog)/管理者ページ(Admin)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_CATALOG', '全ファイル - ショップページ(Catalog)');
  define('TEXT_ALL_FILES_LOOKUP_CURRENT_ADMIN', '全ファイル - 管理者ページ(Admin)');

  define('TEXT_INFO_NO_EDIT_AVAILABLE','編集不可');
  define('TEXT_INFO_CONFIGURATION_HIDDEN', ' or, HIDDEN');

  define('TEXT_SEARCH_ALL_FILES', 'Search ALL files for: ');
  define('TEXT_SEARCH_DATABASE_TABLES', 'Search database configuration tables for: ');

  define('TEXT_ALL_FILESTYPE_LOOKUPS', 'ファイルタイプ');
  define('TEXT_ALL_FILES_LOOKUP_PHP', '.php のみ');
  define('TEXT_ALL_FILES_LOOKUP_PHPCSS', '.php と .css');
  define('TEXT_ALL_FILES_LOOKUP_CSS', '.css のみ');
  define('TEXT_ALL_FILES_LOOKUP_HTMLTXT', '.html と .txt');
  define('TEXT_ALL_FILES_LOOKUP_JS', '.js のみ');
  define('TEXT_ALL_FILES_LOOKUP_ALL_TYPES', 'Everything');

  define('TEXT_CASE_SENSITIVE', '大文字と小文字を区別をする');
  define('TEXT_CONTEXT_LINES', 'Context lines: ');
  define('TEXT_SEARCH_LOOKUP_PLACEHOLDER', 'Enter search phrase or pattern');
  define('TEXT_SEARCH_KEY_PLACEHOLDER', 'Enter key name or phrase to search for');
  define('TEXT_SEARCH_PHRASE_PLACEHOLDER', 'Enter search phrase');
  define('TEXT_BUTTON_SEARCH', 'Search');
  define('TEXT_BUTTON_SEARCH_ALT', 'Execute Search');
  define('TEXT_BUTTON_REGEX_SEARCH', 'Grep');
  define('TEXT_BUTTON_REGEX_SEARCH_ALT', 'Search using Regex pattern');
  define('TEXT_ERROR_REGEX_FAIL', 'ALERT: An error occurred during search. If you were doing a regex/grep search, please inspect your regex pattern for syntax errors.');

  //Search Configuration Keys
  define('SEARCH_CFG_KEYS_HEADING_TITLE','<strong>Search in Configuration Settings/Keys</strong>');
  define('SEARCH_CFG_KEYS_SEARCH_BOX_TEXT', '<strong>Phrase to search:</strong> (This will search configuration setting names and descriptions, and also configuration_keys if exact match)');
  define('SEARCH_CFG_KEYS_TABLE_SECTION', 'Section');
  define('SEARCH_CFG_KEYS_TABLE_GROUP','Group');
  define('SEARCH_CFG_KEYS_TABLE_TITLE', 'Title');
  define('SEARCH_CFG_KEYS_TABLE_DESCRIPTION','Description');
  define('SEARCH_CFG_KEYS_TABLE_VALUE','Value');
  define('SEARCH_CFG_KEYS_TABLE_KEY_NAME', 'Key Name');
  define('SEARCH_CFG_KEYS_TABLE_EDIT','Edit');
  define('SEARCH_CFG_KEYS_NOT_FOUND_KEYS', 'No configuration key(s) found.');
  define('SEARCH_CFG_KEYS_FOUND_KEYS', 'configuration key(s) found.');
  define('SEARCH_CFG_KEYS_FORM_PLACEHOLDER', 'Enter words to find in configuration settings');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_GROUP', 'Search');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_SEARCH_SORTED_BY_KEY', 'Search (sorted by key)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_VIEW_ALL', 'View All (Every setting)');
  define('SEARCH_CFG_KEYS_FORM_BUTTON_RESET', 'Reset');
  define('TEXT_RESET_BUTTON_ALT', 'Clear all search fields, to start over.');
?>