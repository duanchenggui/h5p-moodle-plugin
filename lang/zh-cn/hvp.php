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
$string['modulenameplural'] = '互动内容';
$string['pluginadministration'] = 'H5P';
$string['pluginname'] = 'H5P';
$string['intro'] = '介绍';
$string['h5pfile'] = 'H5P 档案';
$string['fullscreen'] = '全屏';
$string['fullscreen'] = '全屏';
$string['disablefullscreen'] = '禁用全屏';
$string['download'] = '下载';
$string['copyright'] = '使用的权利';
$string['embed'] = '嵌入';
$string['showadvanced'] = '显示高级';
$string['hideadvanced'] = '隐藏高级';
$string['resizescript'] = '如果您希望嵌入式内容的动态重设大小，请在您的网站上添加此语言程序:';
$string['size'] = '尺寸';
$string['close'] = '关闭';
$string['title'] = '标题';
$string['author'] = '作者';
$string['year'] = '年';
$string['source'] = '资源';
$string['license'] = '许可';
$string['thumbnail'] = '缩略图';
$string['nocopyright'] = '此内容没有可用的版权信息';
$string['downloadtitle'] = '将此内容下载为H5P文件.';
$string['copyrighttitle'] = '查看此内容的版权信息.';
$string['embedtitle'] = '查看此内容的嵌入代码';
$string['h5ptitle'] = '浏览H5P.org查阅更多很酷的内容';
$string['contentchanged'] = '自从您上次使用该内容以来，内容已经更改';
$string['startingover'] = "你将会重新开始.";
$string['confirmdialogheader'] = '确认操作';
$string['confirmdialogbody'] = '请确认您要继续。 这个操作是不可逆转的';
$string['cancellabel'] = '取消';
$string['confirmlabel'] = '确认';
$string['noh5ps'] = '本课程没有互动内容。';

$string['lookforupdates'] = '寻找H5P更新';
$string['updatelibraries'] = '更新所有库';
$string['removetmpfiles'] = '删除旧的H5P临时文件';
$string['removeoldlogentries'] = '删除旧有的H5P日记条目';

// Admin settings.
$string['displayoptionnevershow'] = '永不显示';
$string['displayoptionalwaysshow'] = '总是显示';
$string['displayoptionpermissions'] = '仅显示用户是否有权限才能汇出 H5P';
$string['displayoptionauthoron'] = '由作者控制，默认值是开';
$string['displayoptionauthoroff'] = '由作者控制，默认值是关闭';
$string['displayoptions'] = '显示选项';
$string['enableframe'] = '显示动作列和框架';
$string['enabledownload'] = '下载按钮';
$string['enableembed'] = '嵌入按钮';
$string['enablecopyright'] = '版权的按钮';
$string['enableabout'] = '关于 H5P 按钮';
$string['hubsettingsheader'] = '内容类型';
$string['enablehublabel'] = '使用 H5P 集线器';
$string['disablehubdescription'] = "强烈建议您启用此选项。 H5P 集线器提供了一个简单的界面来获取新的内容类型，并保持现有的内容类型是最新的。 在未来，它也将更容易分享和重用内容。 如果禁用此选项，则必须通过文件上传窗体安装和更新内容类型.";
$string['empty'] = '空的';
$string['reveal'] = '展示';
$string['hide'] = '隐藏';
$string['sitekey'] = '网站 锁匙';
$string['sitekeydescription'] = '网站锁匙是秘密地使用H5P 集线器唯一标识的站点';

$string['sendusagestatistics'] = '定期使用统计数据';
$string['sendusagestatistics_help'] = '使用自动报告统计数字, 以帮助开发人员更好地了解如何使用 H5P, 并确定潜在的改善空间。';
$string['enablesavecontentstate'] = '保存内容状态';
$string['enablesavecontentstate_help'] = '自动储存每个使用者的交互式内容的目前状态。这意味着使用者可以提取后离开该地方';
$string['contentstatefrequency'] = '保存内容状态频率';
$string['contentstatefrequency_help'] = '在几秒钟内，你如何希望使用者能够自动储存他们的进度。如果有许多 ajax 请求的问题就要增加此数项';
$string['enabledlrscontenttypes'] = '启用 LRS 内容类型';
$string['enabledlrscontenttypes_help'] = '可以使用依赖于学习记录存储的内容类型正常运行，例如问卷内容类型.';

// Admin menu.
$string['contenttypecacheheader'] = '内容类型缓存';
$string['settings'] = 'H5P 设定';
$string['libraries'] = 'H5P 库';

// Content type cache section
$string['ctcacheconnectionfailed'] = "无法与H5P 集线器进行通信。 请稍后再试。";
$string['ctcachenolibraries'] = '没有从H5P 集线器收到内容类型。 请稍后再试.';
$string['ctcachesuccess'] = '库缓存已成功更新!';
$string['ctcachelastupdatelabel'] = '最后更新';
$string['ctcachebuttonlabel'] = '更新内容类型缓存';
$string['ctcacheneverupdated'] = '永不';
$string['ctcachetaskname'] = '更新内容类型缓存';
$string['ctcachedescription'] = '确保内容类型缓存是最新的，将确保您可以查看，下载和使用最新的库。 这不同于自体更新库。';

// Upload libraries section.
$string['uploadlibraries'] = '上传库';
$string['options'] = '选项';
$string['onlyupdate'] = '只更新现有库';
$string['disablefileextensioncheck'] = '禁用文件扩展名检查';
$string['disablefileextensioncheckwarning'] = "警告！ 禁用文件扩展名检查可能具有安全隐患，因为它允许上传php文件。 这反过来能使攻击者在您的网站上可能执行成为恶意代码。 请确保您知道您正在上传的内容。";
$string['upload'] = 'Upload';

// Installed libraries section.
$string['installedlibraries'] = '已安装的库';
$string['invalidtoken'] = '无效的安全标志.';
$string['missingparameters'] = '缺少参数';
$string['nocontenttype'] = '没有指定内容类型.';
$string['invalidcontenttype'] = '所选内容类型无效.';
$string['installdenied'] = '您没有安装内容类型的权限。 联系您的网站的管理员.';
$string['downloadfailed'] = '请求下载库失败。';
$string['validationfailed'] = '请求的H5P无效';
$string['validatingh5pfailed'] = '验证h5p包失败。';

// H5P library list headers on admin page.
$string['librarylisttitle'] = '标题';
$string['librarylistrestricted'] = '受限';
$string['librarylistinstances'] = '实例';
$string['librarylistinstancedependencies'] = '依赖实例';
$string['librarylistlibrarydependencies'] = '依赖库';
$string['librarylistactions'] = '操作';

// H5P library page labels.
$string['addlibraries'] = '添加库';
$string['installedlibraries'] = '已安装库';
$string['notapplicable'] = '不适用';
$string['upgradelibrarycontent'] = '升级库内容';

// Upgrade H5P content page.
$string['upgrade'] = '升级 H5P';
$string['upgradeheading'] = '升级{$ a}内容';
$string['upgradenoavailableupgrades'] = '这个库没有可用的升级.';
$string['enablejavascript'] = '请启用JavaScript.';
$string['upgrademessage'] = '您即将升级{$ a}内容实例。 请选择升级版。';
$string['upgradeinprogress'] = '升级到％ver...';
$string['upgradeerror'] = '处理参数时发生错误:';
$string['upgradeerrordata'] = '无法加载库％lib的数据.';
$string['upgradeerrorscript'] = '无法加载％lib的升级语言程序.';
$string['upgradeerrorcontent'] = '无法升级内容％ID:';
$string['upgradeerrorparamsbroken'] = '参数被破坏.';
$string['upgradedone'] = '您已成功升级{$ a}内容实例.';
$string['upgradereturn'] = '返回';
$string['upgradenothingtodo'] = "没有内容实例升级。";
$string['upgradebuttonlabel'] = '升级';
$string['upgradeinvalidtoken'] = '错误：安全标志无效!';
$string['upgradelibrarymissing'] = '错误：您的库缺失!';

// Results / report page.
$string['user'] = '使用者';
$string['score'] = '得分了';
$string['maxscore'] = '最高分数';
$string['finished'] = '完成';
$string['loadingdata'] = '数据加载中。';
$string['ajaxfailed'] = '无法加载数据。';
$string['nodata'] = "没有符合您条件的数据。";
$string['currentpage'] = '页面 $当前的 $总数';
$string['nextpage'] = '下一页';
$string['previouspage'] = '上一页';
$string['search'] = '搜寻';
$string['empty'] = '没有可用结果';

// Editor
$string['javascriptloading'] = '等待JavaScript...';
$string['action'] = '行动';
$string['upload'] = '上传';
$string['create'] = '创建';
$string['editor'] = '编辑';

$string['invalidlibrary'] = '库无效';
$string['nosuchlibrary'] = '没有这样的库';
$string['noparameters'] = '无参数';
$string['invalidparameters'] = '无效参数';
$string['missingcontentuserdata'] = '错误：找不到内容用户数据';

$string['maximumgrade'] = '最高等级';
$string['maximumgradeerror'] = '请输入有效的正整数作为此活动的最大点数';

// Capabilities
$string['hvp:addinstance'] = '添加新的H5P活动';
$string['hvp:restrictlibraries'] = '限制H5P库';
$string['hvp:updatelibraries'] = '更新H5P库的版本';
$string['hvp:userestrictedlibraries'] = '使用受限制的H5P库';
$string['hvp:savecontentuserdata'] = '保存H5P内容的用户数据';
$string['hvp:saveresults'] = '保存H5P内容的结果';
$string['hvp:viewresults'] = '查看H5P内容的结果';
$string['hvp:getcachedassets'] = '获取缓存的H5P内容资产';
$string['hvp:getcontent'] = '获取/查看H5P文件的内容';
$string['hvp:getexport'] = '在课程中得到 H5P 的汇出文档';
$string['hvp:installrecommendedh5plibraries'] = '安装推荐的 H5P 库';

// Capabilities error messages
$string['nopermissiontoupgrade'] = '您没有权限升级库';
$string['nopermissiontorestrict'] = '您没有权限来限制库';
$string['nopermissiontosavecontentuserdata'] = '你没有保存内容的用户数据的权限';
$string['nopermissiontosaveresult'] = '您没有权限保存此内容的结果';
$string['nopermissiontoviewresult'] = '您没有权限查看此内容的结果';

// Editor translations
$string['noziparchive'] = '您的PHP版本不支持Zip数据库';
$string['noextension'] = '您上传的文件不是有效的HTML5包（它没有.h5p文件扩展名）';
$string['nounzip'] = '您上传的文件不是有效的HTML5软件包（我们无法解压缩）';
$string['noparse'] = '无法解析主h5p.json文件';
$string['nojson'] = '主要的h5p.json文件无效';
$string['invalidcontentfolder'] = '内容文件夹无效';
$string['nocontent'] = '无法找到或解析content.json文件';
$string['librarydirectoryerror'] = '库目录名称必须与机器名称或机器名称-主要版本.次要版本（来自library.json）匹配。 （目录：{$ a - >％目录名}，机器名称：{$ a - >％机器名称}，主要版本：{$ a - >％主要版本}，次要版本：{$ a - >％次要版本}）';
$string['missingcontentfolder'] = '缺少有效的内容活页夹';
$string['invalidmainjson'] = '缺少一个有效的主h5p.json文件';
$string['missinglibrary'] = '缺少所需库 {$a->@library}';
$string['missinguploadpermissions'] = "请注意，这些库可能存在于您上传的文件中，但您不能上传新的库。 联系站点管理员关于这一点.";
$string['invalidlibraryname'] = '库名称无效: {$a->%名称}';
$string['missinglibraryjson'] = '找不到库json格式的library.json文件 {$a->%名称}';
$string['invalidsemanticsjson'] = '无效的semantics.json文件已被包含在库{$ a - >％名称}';
$string['invalidlanguagefile'] = '语言文件无效 {$a->%文件} 在库 {$a->%库}';
$string['invalidlanguagefile2'] = '无效的语言文件{$ a - >％语言文件}已包含在库中 {$a->%名称}';
$string['missinglibraryfile'] = '库中缺少文件: "{$a->%名称}"';
$string['missingcoreversion'] = '该系统无法从包中安装<em> {$ a - >％组件 } </ em>组件，它需要较新版本的H5P插件。 此网站目前正在运行版本{$ a - >％现时的}，而所需版本为{$ a - >％必需}或更高版本。 您应该考虑升级，然后重试';
$string['invalidlibrarydataboolean'] = '{$ a - >％库}中的{$ a - >％属性}提供的数据无效。 布尔(数据类型)预期。';
$string['invalidlibrarydata'] = '提供的无效数据 {$a->%属性} in {$a->%库}';
$string['invalidlibraryproperty'] = '属性不能读 {$a->%属性} in {$a->%库}';
$string['missinglibraryproperty'] = '必需的属性 {$a->%属性} 遗失由 {$a->%库}';
$string['invalidlibraryoption'] = '非法选项{$a->%选项} in {$a->%库}';
$string['addedandupdatelibraries'] = '添加 {$a->%新} 新的H5P库和更新的{$ a - >％旧}旧';
$string['addednewlibraries'] = '添加了{$ a - >％新}新的H5P库。';
$string['updatedlibraries'] = '更新了{$ a - >％旧} H5P库';
$string['missingdependency'] = '缺少 从属物 {$a->@dep} 要求 {$a->@lib}.';
$string['invalidstring'] = '根据语义中的正则表达式，提供的字符串无效。 (值: \"{$a->%值}\", regexp: \"{$a->%regexp}\")';
$string['invalidfile'] = '文件 "{$a->%filename}" 不允许。 只允许具有以下扩展名的文件: {$a->%文件-允许}.';
$string['invalidmultiselectoption'] = '多选中无效的选定选项';
$string['invalidselectoption'] = '选择中无效的选定选项';
$string['invalidsemanticstype'] = 'H5P内部错误：未知内容类型 "{$a->@type}" 在语义上. 删除内容!';
$string['copyrightinfo'] = '版权信息';
$string['years'] = '年(s)';
$string['undisclosed'] = '未公开';
$string['attribution'] = '属性 4.0';
$string['attributionsa'] = '属性-共享 4.0';
$string['attributionnd'] = '属性-禁止演绎 4.0';
$string['attributionnc'] = '属性-非商业性4.0';
$string['attributionncsa'] = '属性-非商业性共享4.0';
$string['attributionncnd'] = '属性-非商业性-禁止演绎 4.0';
$string['gpl'] = '通用公共许可证v3';
$string['pd'] = '公共领域';
$string['pddl'] = '公共领域专用和许可证';
$string['pdm'] = '公共领域';
$string['copyrightstring'] = '版权';
$string['unabletocreatedir'] = '无法创建目录';
$string['unabletogetfieldtype'] = '无法获取字段类型';
$string['filetypenotallowed'] = '文件类型不允许';
$string['invalidfieldtype'] = '字段类型无效';
$string['invalidimageformat'] = '图像文件格式无效。使用jpg，png或gif.';
$string['filenotimage'] = '文件不是图像.';
$string['invalidaudioformat'] = '音频文件格式无效使用mp3或wav.';
$string['invalidvideoformat'] = '视频文件格式无效。使用mp4或webm.';
$string['couldnotsave'] = '无法储存文件';
$string['couldnotcopy'] = '无法复制档案';

// Welcome messages
$string['welcomeheader'] = '欢迎来到H5P的世界!';
$string['welcomegettingstarted'] = '要开始使用H5P和Moodle，看看我们的 <a {$a->维诚_教程}>教程</a> 并查看 <a {$a->例子_内容}>内容例子</a> 在H5P.org的意见';
$string['welcomecommunity'] = '我们希望您能享受H5P，并通过我们的工作不断增长我们的小区 <a {$a->论坛}>论坛</a> 和聊天室 <a {$a->gitter}>H5P在Gitter实时通讯聊天室系统</a>';
$string['welcomecontactus'] = '如果您有任何反馈意见，请不要犹豫 <a {$a}>联系我们</a>. 我们非常重视反馈意见，致力于让H5P每天更好!';
$string['missingmbstring'] = 'mbstring编码模块 PHP扩展名未加载。 H5P需要这样功能才能正常工作';
$string['wrongversion'] = '库的版本 {$a->%machineName} 用于此内容无效。 内容包含 {$a->%内容库}, 但应该是 {$a->%语义库}.';
$string['invalidlibrary'] = '内容中使用的H5P库{$ a - >％库}无效';

// Setup errors
$string['oldphpversion'] = '您的PHP版本已过时。 H5P要求版本5.2正常工作。 推荐5.6或更高版本。';
$string['maxuploadsizetoosmall'] = '您的PHP最大 上传大小相当小。 使用您当前的设置，您可能不会上传大于 {$a->%number} MB. 这可能是试图上传H5P，图像和视频时的问题。 请考虑将其增加到5MB以上。';
$string['maxpostsizetoosmall'] = '您的PHP最大邮政大小相当小. 使用您当前的设置，您可能不会上传大于 {$a->%数字} MB. 这可能是试图上传H5P，图像和视频时的问题。 请考虑将其增加到5MB以上';
$string['sslnotenabled'] = '您的服务器未启用SSL。 应启用SSL以确保与H5P集线器的安全连接.';
$string['hubcommunicationdisabled'] = 'H5P 集线器通信已被禁用，因为一个或多个H5P要求失败。';
$string['reviseserversetupandretry'] = '修改服务器设置后，您可以在H5P设置中重新启用H5P集线器通信。';
$string['disablehubconfirmationmsg'] = '您还想要启用集线器吗？';
$string['nowriteaccess'] = '检测到服务器进入的问题。 请确保您的服务器可以写入您的数据活页夹。';
$string['uploadsizelargerthanpostsize'] = '您的PHP最大上传大小大于您的最大文件大小。 这在一些安装中会引起问题.';
$string['sitecouldnotberegistered'] = '网站无法在集线器上注册。 请联系您的网站管理员。';
$string['hubisdisableduploadlibraries'] = 'H5P集线器已被禁用，直到此问题得以解决。 您仍然可以通过“H5P库”页面上传库。';
$string['successfullyregisteredwithhub'] = '您的网站已成功注册到H5P 集线器。';
$string['sitekeyregistered'] = '您已获得一个唯一的钥匙，用于在接收新更新时识别集线器。 关键在“H5P设置”页面可以查看。';

// Ajax messages
$string['hubisdisabled'] = '集线器已禁用。 您可以在H5P设置中重新启用它.';
$string['invalidh5ppost'] = '无法发布H5P';
$string['filenotfoundonserver'] = '服务器上找不到文件。 检查文件上传设置。';
$string['failedtodownloadh5p'] = 'H5P下载请求失败';
$string['postmessagerequired'] = '需要发送消息才能进入终结点';
