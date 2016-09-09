<?php
/**
 * @package admin
 * @copyright Copyright 2003-2014 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: admin_activity.php drbyte Modified in v1.5.4 $
 * @author obitastar
 */

define('HEADING_TITLE', '管理者活動ログマネージャー');
define('HEADING_SUB1', 'ログの表示/エクスポート');
define('HEADING_SUB2', 'ログの履歴削除');
define('TEXT_ACTIVITY_EXPORT_FORMAT', 'エクスポートファイルフォーマット:');
define('TEXT_ACTIVITY_EXPORT_FILENAME', 'エクスポートファイル名:');
define('TEXT_ACTIVITY_EXPORT_SAVETOFILE','サーバーにファイルを保存しますか? (サーバーに保存をしない場合は、そのままブラウザ毎のファイル保存へと進みます。)');
define('TEXT_ACTIVITY_EXPORT_DEST','保存先: ');
define('TEXT_PROCESSED', ' 処理されました。');
define('SUCCESS_EXPORT_ADMIN_ACTIVITY_LOG', 'エクスポートが完了しました。 ');
define('FAILURE_EXPORT_ADMIN_ACTIVITY_LOG', '警告: エクスポートに失敗しました。保存先のファイルへの書き込むことができません。');

define('TEXT_INSTRUCTIONS','<u>説明</u><br />ここでは、管理者活動ログを、CSVファイルでインポートすることができます。<br />サイトへの不正アクセスや、不正に使用された場合などに、調査を行うため、ログデータを保存しておく必要があります。<br />これはPCIコンプライアンスの必要条件です。<br /><ol><li>エクスポートファイルフォーマットから、表示かエクスポートかを選択します。<li>エクスポートファイル名を入力します。<li>goをクリックします。(表示の場合は、ログが表示されます。)<li>ブラウザからの指示に従い、ファイルの表示や保存を選択して下さい。</ol>');


define('TEXT_INFO_ADMIN_ACTIVITY_LOG', '<strong>管理者の活動ログをデータベースから削除します。<br />警告: この更新を行う前バックアップを必ず取ってください!</strong><br />管理者のアクティビティログは管理者の活動履歴を記録したものです。<br />ログは非常に多くなっていく為、速やかにきれいにしていく必要があります。<br />警告は60日で50,000件ほど溜まります<br /><span class="alert">注：PCI コンプライアンスのために、12ヵ月分の管理活動ログ履歴を保持することを要求されます。<br />ログデータを一掃する前に、上の『エクスポートCSV』から、管理活動ログ履歴を保存を行って下さい。</span>');
define('TEXT_ADMIN_LOG_PLEASE_CONFIRM_ERASE', '<strong><span class="alert">警告!: あなたは、データベースから重要な電算機処理監査記録を削除しようとしています。</span></strong><br />リセットに進む前に、データベースなどにログ履歴のバックアップ保存をしているか、まず確認しなければなりません。<br />ログデータを保存することに関しての法的責任を理解したうえで、ログの削除に進んでください。<br /><br />責任を理解したうえで、リセットボタンをクリックしログの削除を行います:<br />');
define('SUCCESS_CLEAN_ADMIN_ACTIVITY_LOG', '<strong>完了</strong> 管理者活動ログの削除が完了しました。');
define('TEXT_NO_RECORDS_FOUND', 'No Records Found using the filter you selected.');

define('TEXT_EXPORTFORMAT0', 'Export as HTML (ideal for on-screen viewing)');
define('TEXT_EXPORTFORMAT1', 'Export to CSV (ideal for importing to spreadsheets)');
define('TEXT_EXPORTFORMAT2', 'Export to TXT');
define('TEXT_EXPORTFORMAT3', 'Export to XML');

define('TEXT_ACTIVITY_EXPORT_FILTER', 'Which log data do you want to see?');
define('TEXT_EXPORTFILTER0', 'All logged data, regardless of severity level.');
define('TEXT_EXPORTFILTER1', 'INFO - General logged information');
define('TEXT_EXPORTFILTER2', 'NOTICE - Notable info, which should be reviewed periodically');
define('TEXT_EXPORTFILTER3', 'WARNING - Activity which should be reviewed daily');
define('TEXT_EXPORTFILTER4', 'Both NOTICE and WARNING (common combination for review).');

define('TEXT_INTERPRETING_LOG_DATA', '<p><strong>Interpretation of the log data</strong><ul>
<li><strong>Severity</strong> - The standards for logging generally describe severities as follows:<ul>
<li><strong>INFO</strong> refers to general activity. This may or may not contain remarkable details.</li>
<li><strong>NOTICE</strong> refers to activity which indicates higher privilege was used, and may include things like creating new admin users or adding new payment modules. It also highlights when any data submitted on the web page includes potentially risky content such as script tags or embedded iframes, where malicious content is being added to your products/categories/pages by unhappy employees or an intruder on your site. These should be reviewed regularly for any anomalies such as unauthorized activity.</li>
<li><strong>WARNING</strong> is assigned to CRITICAL things such as removal of payment modules or deletion of admin users. These are activities which might suggest pending trouble if not caught quickly. These should be reviewed very frequently; recommended daily.</li>
</ul>
<li><strong>admin_user</strong> - This will show the admin user ID number followed by their admin username. If not logged in, it will show 0.</li>
<li><strong>page_accessed</strong> - This will indicate the name of the page visited, thus giving hints to the kind of activity taking place.</li>
<li><strong>parameters</strong> - This is the rest of the URI of the page visited, and gives further indication of the kind of activity being attempted by the visitor.</li>
<li><strong>flagged</strong> - If this is set to 1, that indicates that you should inspect the content recorded in the "postdata" field for unauthorized entry of script or iframe or other potentially dangerous content. An explanation of suspicious content will be listed in the "attention" field.</li>
<li><strong>attention</strong> - This will contain suggestions related to the kind of suspicious activity which should be reviewed in the "postdata" field if flagged. </li>
<li><strong>logmessage</strong> - This contains any messages recorded by the system about the activity taking place, such as installation of a certain module.</li>
<li><strong>postdata</strong> - This contains the raw POST data (with some sensitive information scrubbed) for easy review in case malicious activity is suspected.</li>
</ul></p>');
