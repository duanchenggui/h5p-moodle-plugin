<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

$string['modulename'] = 'Interactive Content';
$string['modulename_help'] = 'The H5P activity module enables you to create interactive content such as Interactive Videos, Question Sets, Drag and Drop Questions, Multi-Choice Questions, Presentations and much more.

In addition to being an authoring tool for rich content, H5P enables you to import and export H5P files for effective reuse and sharing of content.

User interactions and scores are tracked using xAPI and are available through the Moodle Gradebook.

You add interactive H5P content by creating content using the built-in authoring tool or uploading H5P files found on other H5P enabled sites.';
$string['modulename_link'] = 'https://h5p.org/moodle-more-help';
$string['modulenameplural'] = '互動內容';
$string['pluginadministration'] = 'H5P';
$string['pluginname'] = 'H5P';
$string['intro'] = '介紹';
$string['h5pfile'] = 'H5P 檔案';
$string['fullscreen'] = '全屏幕';
$string['fullscreen'] = '全屏幕';
$string['disablefullscreen'] = '禁用全屏幕';
$string['download'] = '下載';
$string['copyright'] = '使用的權利';
$string['embed'] = '嵌入';
$string['showadvanced'] = '顯示高級';
$string['hideadvanced'] = '隱藏高級';
$string['resizescript'] = '如果您希望嵌入式內容的動態調整大小，請在您的網站上添加此語言程式:';
$string['size'] = '尺寸';
$string['close'] = '關閉';
$string['title'] = '標題';
$string['author'] = '作者';
$string['year'] = '年';
$string['source'] = '資源';
$string['license'] = '許可';
$string['thumbnail'] = '縮略圖';
$string['nocopyright'] = '此內容沒有可用的版權信息';
$string['downloadtitle'] = '將此內容下載為H5P文件.';
$string['copyrighttitle'] = '查看此內容的版權信息.';
$string['embedtitle'] = '查看此內容的嵌入代碼';
$string['h5ptitle'] = '瀏覽H5P.org查閱更多很酷的內容';
$string['contentchanged'] = '自從您上次使用該內容以來，內容已經更改';
$string['startingover'] = "你將會重新開始.";
$string['confirmdialogheader'] = '確認操作';
$string['confirmdialogbody'] = '請確認您要繼續。 這個操作是不可逆轉的';
$string['cancellabel'] = '取消';
$string['confirmlabel'] = '確認';
$string['noh5ps'] = '本課程沒有互動內容。';

$string['lookforupdates'] = '尋找H5P更新';
$string['updatelibraries'] = '更新所有函式庫';
$string['removetmpfiles'] = '刪除舊的H5P臨時文件';
$string['removeoldlogentries'] = '刪除舊有的H5P日誌項目';

// Admin settings.
$string['displayoptionnevershow'] = '永不顯示';
$string['displayoptionalwaysshow'] = '總是顯示';
$string['displayoptionpermissions'] = '僅顯示使用者是否有許可權才能匯出 H5P';
$string['displayoptionauthoron'] = '由作者控制，預設值是開';
$string['displayoptionauthoroff'] = '由作者控制，預設值是關閉';
$string['displayoptions'] = '顯示選項';
$string['enableframe'] = '顯示動作列和框架';
$string['enabledownload'] = '下載按鈕';
$string['enableembed'] = '嵌入按鈕';
$string['enablecopyright'] = '版權的按鈕';
$string['enableabout'] = '關於 H5P 按鈕';
$string['hubsettingsheader'] = '內容類型';
$string['enablehublabel'] = '使用 H5P 集線器';
$string['disablehubdescription'] = "強烈建議您啟用此選項。 H5P 集線器提供了一個簡單的界面來獲取新的內容類型，並保持現有的內容類型是最新的。 在未來，它也將更容易分享和重用內容。 如果禁用此選項，則必須通過文件上傳表單安裝和更新內容類型.";
$string['empty'] = '空的';
$string['reveal'] = '展示';
$string['hide'] = '隱藏';
$string['sitekey'] = '網站 鎖匙';
$string['sitekeydescription'] = '網站鎖匙是秘密地使用H5P 集線器唯一標識的站點';

$string['sendusagestatistics'] = '定期使用統計資料';
$string['sendusagestatistics_help'] = '使用自動報告統計數字, 以幫助開發人員更好地瞭解如何使用 H5P, 並確定潛在的改善空間。';
$string['enablesavecontentstate'] = '保存內容狀態';
$string['enablesavecontentstate_help'] = '自動儲存每個使用者的互動式內容的目前狀態。這意味著使用者可以提取後離開該地方';
$string['contentstatefrequency'] = '保存內容狀態頻率';
$string['contentstatefrequency_help'] = '在幾秒鐘內，你如何希望使用者能夠自動儲存他們的進度。如果有許多 ajax 請求的問題就要增加此數項';
$string['enabledlrscontenttypes'] = '啟用 LRS 內容類型';
$string['enabledlrscontenttypes_help'] = '可以使用依賴於學習記錄存儲的內容類型正常運行，例如問卷內容類型.';

// Admin menu.
$string['contenttypecacheheader'] = '內容類型緩存';
$string['settings'] = 'H5P 設定';
$string['libraries'] = 'H5P 函式庫';

// Content type cache section
$string['ctcacheconnectionfailed'] = "無法與H5P 集線器進行通信。 請稍後再試。";
$string['ctcachenolibraries'] = '沒有從H5P 集線器收到內容類型。 請稍後再試.';
$string['ctcachesuccess'] = '函式庫緩存已成功更新!';
$string['ctcachelastupdatelabel'] = '最後更新';
$string['ctcachebuttonlabel'] = '更新內容類型緩存';
$string['ctcacheneverupdated'] = '永不';
$string['ctcachetaskname'] = '更新內容類型緩存';
$string['ctcachedescription'] = '確保內容類型緩存是最新的，將確保您可以查看，下載和使用最新的函式庫。 這不同於自體更新函式庫。';

// Upload libraries section.
$string['uploadlibraries'] = '上傳函式庫';
$string['options'] = '選項';
$string['onlyupdate'] = '只更新現有函式庫';
$string['disablefileextensioncheck'] = '禁用文件擴展名檢查';
$string['disablefileextensioncheckwarning'] = "警告！ 禁用文件擴展名檢查可能具有安全隱患，因為它允許上傳php文件。 這反過來能使攻擊者在您的網站上可能執行成為惡意代碼。 請確保您知道您正在上傳的內容。";
$string['upload'] = 'Upload';

// Installed libraries section.
$string['installedlibraries'] = '已安裝的函式庫';
$string['invalidtoken'] = '無效的安全標誌.';
$string['missingparameters'] = '缺少參數';
$string['nocontenttype'] = '沒有指定內容類型.';
$string['invalidcontenttype'] = '所選內容類型無效.';
$string['installdenied'] = '您沒有安裝內容類型的權限。 聯繫您的網站的管理員.';
$string['downloadfailed'] = '請求下載函式庫失敗。';
$string['validationfailed'] = '請求的H5P無效';
$string['validatingh5pfailed'] = '驗證h5p包失敗。';

// H5P library list headers on admin page.
$string['librarylisttitle'] = '標題';
$string['librarylistrestricted'] = '受限';
$string['librarylistinstances'] = '實例';
$string['librarylistinstancedependencies'] = '依賴實例';
$string['librarylistlibrarydependencies'] = '依賴函式庫';
$string['librarylistactions'] = '操作';

// H5P library page labels.
$string['addlibraries'] = '添加函式庫';
$string['installedlibraries'] = '已安裝函式庫';
$string['notapplicable'] = '不適用';
$string['upgradelibrarycontent'] = '升級函式庫內容';

// Upgrade H5P content page.
$string['upgrade'] = '升級 H5P';
$string['upgradeheading'] = '升級{$ a}內容';
$string['upgradenoavailableupgrades'] = '這個函式庫沒有可用的升級.';
$string['enablejavascript'] = '請啟用JavaScript.';
$string['upgrademessage'] = '您即將升級{$ a}內容實例。 請選擇升級版。';
$string['upgradeinprogress'] = '升級到％ver...';
$string['upgradeerror'] = '處理參數時發生錯誤:';
$string['upgradeerrordata'] = '無法加載函式庫％lib的數據.';
$string['upgradeerrorscript'] = '無法加載％lib的升級語言程式.';
$string['upgradeerrorcontent'] = '無法升級內容％ID:';
$string['upgradeerrorparamsbroken'] = '參數被破壞.';
$string['upgradedone'] = '您已成功升級{$ a}內容實例.';
$string['upgradereturn'] = '返回';
$string['upgradenothingtodo'] = "沒有內容實例升級。";
$string['upgradebuttonlabel'] = '升級';
$string['upgradeinvalidtoken'] = '錯誤：安全標誌無效!';
$string['upgradelibrarymissing'] = '錯誤：您的函式庫缺失!';

// Results / report page.
$string['user'] = '使用者';
$string['score'] = '得分了';
$string['maxscore'] = '最高分數';
$string['finished'] = '完成';
$string['loadingdata'] = '數據加載中。';
$string['ajaxfailed'] = '無法加載數據。';
$string['nodata'] = "沒有符合您條件的數據。";
$string['currentpage'] = '頁面 $當前的 $總數';
$string['nextpage'] = '下一頁';
$string['previouspage'] = '上一頁';
$string['search'] = '搜尋';
$string['empty'] = '沒有可用結果';

// Editor
$string['javascriptloading'] = '等待JavaScript...';
$string['action'] = '行動';
$string['upload'] = '上傳';
$string['create'] = '創建';
$string['editor'] = '編輯';

$string['invalidlibrary'] = '函式庫無效';
$string['nosuchlibrary'] = '沒有這樣的函式庫';
$string['noparameters'] = '無參數';
$string['invalidparameters'] = '無效參數';
$string['missingcontentuserdata'] = '錯誤：找不到內容用戶數據';

$string['maximumgrade'] = '最高等級';
$string['maximumgradeerror'] = '請輸入有效的正整數作為此活動的最大點數';

// Capabilities
$string['hvp:addinstance'] = '添加新的H5P活動';
$string['hvp:restrictlibraries'] = '限制H5P函式庫';
$string['hvp:updatelibraries'] = '更新H5P函式庫的版本';
$string['hvp:userestrictedlibraries'] = '使用受限制的H5P函式庫';
$string['hvp:savecontentuserdata'] = '保存H5P內容的用戶數據';
$string['hvp:saveresults'] = '保存H5P內容的結果';
$string['hvp:viewresults'] = '查看H5P內容的結果';
$string['hvp:getcachedassets'] = '獲取緩存的H5P內容資產';
$string['hvp:getcontent'] = '獲取/查看H5P文件的內容';
$string['hvp:getexport'] = '在課程中得到 H5P 的匯出文檔';
$string['hvp:installrecommendedh5plibraries'] = '安裝推薦的 H5P 函式庫';

// Capabilities error messages
$string['nopermissiontoupgrade'] = '您沒有許可權升級函式庫';
$string['nopermissiontorestrict'] = '您沒有許可權來限制函式庫';
$string['nopermissiontosavecontentuserdata'] = '你沒有保存內容的使用者資料的許可權';
$string['nopermissiontosaveresult'] = '您沒有權限保存此內容的結果';
$string['nopermissiontoviewresult'] = '您沒有權限查看此內容的結果';

// Editor translations
$string['noziparchive'] = '您的PHP版本不支持Zip資料庫';
$string['noextension'] = '您上傳的文件不是有效的HTML5包（它沒有.h5p文件擴展名）';
$string['nounzip'] = '您上傳的文件不是有效的HTML5軟件包（我們無法解壓縮）';
$string['noparse'] = '無法解析主h5p.json文件';
$string['nojson'] = '主要的h5p.json文件無效';
$string['invalidcontentfolder'] = '內容資料夾無效';
$string['nocontent'] = '無法找到或解析content.json文件';
$string['librarydirectoryerror'] = '函式庫目錄名稱必須與機器名稱或機器名稱-主要版本.次要版本（來自library.json）匹配。 （目錄：{$ a - >％目錄名}，機器名稱：{$ a - >％機器名稱}，主要版本：{$ a - >％主要版本}，次要版本：{$ a - >％次要版本}）';
$string['missingcontentfolder'] = '缺少有效的內容文件夾';
$string['invalidmainjson'] = '缺少一個有效的主h5p.json文件';
$string['missinglibrary'] = '缺少所需函式庫 {$a->@library}';
$string['missinguploadpermissions'] = "請注意，這些庫可能存在於您上傳的文件中，但您不能上傳新的庫。 聯繫站點管理員關於這一點.";
$string['invalidlibraryname'] = '函式庫名稱無效: {$a->%名稱}';
$string['missinglibraryjson'] = '找不到庫json格式的library.json文件 {$a->%名稱}';
$string['invalidsemanticsjson'] = '無效的semantics.json文件已被包含在函式庫{$ a - >％名稱}';
$string['invalidlanguagefile'] = '語言文件無效 {$a->%文件} 在函式庫 {$a->%函式庫}';
$string['invalidlanguagefile2'] = '無效的語言文件{$ a - >％語言文件}已包含在庫中 {$a->%名稱}';
$string['missinglibraryfile'] = '函式庫中缺少文件: "{$a->%名稱}"';
$string['missingcoreversion'] = '該系統無法從包中安裝<em> {$ a - >％組件 } </ em>組件，它需要較新版本的H5P插件。 此網站目前正在運行版本{$ a - >％現時的}，而所需版本為{$ a - >％必需}或更高版本。 您應該考慮升級，然後重試';
$string['invalidlibrarydataboolean'] = '{$ a - >％函式庫}中的{$ a - >％屬性}提供的數據無效。 布爾(數據類型)預期。';
$string['invalidlibrarydata'] = '提供的無效數據 {$a->%屬性} in {$a->%函式庫}';
$string['invalidlibraryproperty'] = '屬性不能讀 {$a->%屬性} in {$a->%函式庫}';
$string['missinglibraryproperty'] = '必需的屬性 {$a->%屬性} 遺失由 {$a->%函式庫}';
$string['invalidlibraryoption'] = '非法選項{$a->%選項} in {$a->%函式庫}';
$string['addedandupdatelibraries'] = '添加 {$a->%新} 新的H5P函式庫和更新的{$ a - >％舊}舊';
$string['addednewlibraries'] = '添加了{$ a - >％新}新的H5P函式庫。';
$string['updatedlibraries'] = '更新了{$ a - >％舊} H5P函式庫';
$string['missingdependency'] = '缺少 從屬物 {$a->@dep} 要求 {$a->@lib}.';
$string['invalidstring'] = '根據語義中的正則表達式，提供的字符串無效。 (值: \"{$a->%值}\", regexp: \"{$a->%regexp}\")';
$string['invalidfile'] = '文件 "{$a->%filename}" 不允許。 只允許具有以下擴展名的文件: {$a->%文件-允許}.';
$string['invalidmultiselectoption'] = '多選中無效的選定選項';
$string['invalidselectoption'] = '選擇中無效的選定選項';
$string['invalidsemanticstype'] = 'H5P內部錯誤：未知內容類型 "{$a->@type}" 在語義上. 刪除內容!';
$string['copyrightinfo'] = '版權信息';
$string['years'] = '年(s)';
$string['undisclosed'] = '未公開';
$string['attribution'] = '屬性 4.0';
$string['attributionsa'] = '屬性-共享 4.0';
$string['attributionnd'] = '屬性-禁止改作 4.0';
$string['attributionnc'] = '屬性-非商業性4.0';
$string['attributionncsa'] = '屬性-非商業性共享4.0';
$string['attributionncnd'] = '屬性-非商業性-禁止改作 4.0';
$string['gpl'] = '通用公共許可證v3';
$string['pd'] = '公共區域';
$string['pddl'] = '公共領域專用和許可證';
$string['pdm'] = '公共域名';
$string['copyrightstring'] = '版權';
$string['unabletocreatedir'] = '無法創建目錄';
$string['unabletogetfieldtype'] = '無法獲取字段類型';
$string['filetypenotallowed'] = '文件類型不允許';
$string['invalidfieldtype'] = '字段類型無效';
$string['invalidimageformat'] = '圖像文件格式無效。使用jpg，png或gif.';
$string['filenotimage'] = '文件不是圖像.';
$string['invalidaudioformat'] = '音頻文件格式無效使用mp3或wav.';
$string['invalidvideoformat'] = '視頻文件格式無效。使用mp4或webm.';
$string['couldnotsave'] = '無法儲存文件';
$string['couldnotcopy'] = '無法複製檔案';

// Welcome messages
$string['welcomeheader'] = '歡迎來到H5P的世界!';
$string['welcomegettingstarted'] = '要開始使用H5P和Moodle，看看我們的 <a {$a->維誠_教程}>教程</a> 並查看 <a {$a->例子_內容}>內容例子</a> 在H5P.org的意見';
$string['welcomecommunity'] = '我們希望您能享受H5P，並通過我們的工作不斷增長我們的社區 <a {$a->論壇}>論壇</a> 和聊天室 <a {$a->gitter}>H5P在Gitter即時通訊聊天室系統</a>';
$string['welcomecontactus'] = '如果您有任何反饋意見，請不要猶豫 <a {$a}>聯繫我們</a>. 我們非常重視反饋意見，致力於讓H5P每天更好!';
$string['missingmbstring'] = 'mbstring編碼模組 PHP擴展名未加載。 H5P需要這樣功能才能正常工作';
$string['wrongversion'] = '函式庫的版本 {$a->%machineName} 用於此內容無效。 內容包含 {$a->%內容函式庫}, 但應該是 {$a->%語義函式庫}.';
$string['invalidlibrary'] = '內容中使用的H5P函式庫{$ a - >％函式庫}無效';

// Setup errors
$string['oldphpversion'] = '您的PHP版本已過時。 H5P要求版本5.2正常工作。 推薦5.6或更高版本。';
$string['maxuploadsizetoosmall'] = '您的PHP最大 上傳大小相當小。 使用您當前的設置，您可能不會上傳大於 {$a->%number} MB. 這可能是試圖上傳H5P，圖像和視頻時的問題。 請考慮將其增加到5MB以上。';
$string['maxpostsizetoosmall'] = '您的PHP最大郵政大小相當小. 使用您當前的設置，您可能不會上傳大於 {$a->%數字} MB. 這可能是試圖上傳H5P，圖像和視頻時的問題。 請考慮將其增加到5MB以上';
$string['sslnotenabled'] = '您的服務器未啟用SSL。 應啟用SSL以確保與H5P集線器的安全連接.';
$string['hubcommunicationdisabled'] = 'H5P 集線器通信已被禁用，因為一個或多個H5P要求失敗。';
$string['reviseserversetupandretry'] = '修改服務器設置後，您可以在H5P設置中重新啟用H5P集線器通信。';
$string['disablehubconfirmationmsg'] = '您還想要啟用集線器嗎？';
$string['nowriteaccess'] = '檢測到服務器進入的問題。 請確保您的服務器可以寫入您的數據文件夾。';
$string['uploadsizelargerthanpostsize'] = '您的PHP最大上傳大小大於您的最大郵政大小。 這在一些安裝中會引起問題.';
$string['sitecouldnotberegistered'] = '網站無法在集線器上註冊。 請聯繫您的網站管理員。';
$string['hubisdisableduploadlibraries'] = 'H5P集線器已被禁用，直到此問題得以解決。 您仍然可以通過“H5P函式庫”頁面上傳函式庫。';
$string['successfullyregisteredwithhub'] = '您的網站已成功註冊到H5P 集線器。';
$string['sitekeyregistered'] = '您已獲得一個唯一的鑰匙，用於在接收新更新時識別集線器。 關鍵在“H5P設置”頁面可以查看。';

// Ajax messages
$string['hubisdisabled'] = '集線器已禁用。 您可以在H5P設置中重新啟用它.';
$string['invalidh5ppost'] = '無法發布H5P';
$string['filenotfoundonserver'] = '服務器上找不到文件。 檢查文件上傳設置。';
$string['failedtodownloadh5p'] = 'H5P下載請求失敗';
$string['postmessagerequired'] = '需要發送消息才能進入終結點';
