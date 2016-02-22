@charset "UTF-8";
/* CSS Document */

/**
* Custom CSS by PureVB.com
*/
.popupbody li > a,
.popupbody li > label {
	padding:8px 10px;
	line-height:18px;
}
.formsubmit label {
	color:#3a3a3a;
}
.posts, .postlist, #postlist  {
margin:0;
padding:0;
}

/* Misc Resets
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
img {
	border:0;
}
.verticalAlign {
	vertical-align:middle;
}
#fb_topbar {
float:right;
padding-top:5px;
padding-left:8px;
position: relative;
}
#fb_topbar_in {
float:right;
padding-top:3px;
padding-left:30px;
position: relative;
}
.topBarLinksWrap {
float:right;
}
.clearfix:after {
	content: ".";
	display: block;
	clear: both;
	visibility: hidden;
	line-height: 0;
	height: 0;
}
.clearfix {
	display: inline-block;
}
html[xmlns] .clearfix {
	display: block;
}
* html .clearfix {
	height: 1%;
}

/************************************************************************/
.forumdescription {
color:#8b8b8b;
}
.blockhead {
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
}
.tcatShowthread {
margin-bottom:10px;
}

*{ -moz-box-shadow: none !important; -webkit-box-shadow: none !important; }

#wgo .blocksubhead {
border-top:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored, .wgo_block .wgo_subblock,
.forumbit_nopost .forumbit_nopost .forumrow, .forumbit_post .forumrow {
	border-bottom: 1px solid #ededed;
}

#forums *, #wgo *, #forumbits * {
	-moz-border-radius: 0 !important;
	-webkit-border-radius: 0 !important;
}
#fb_headerbox {
	padding-right:5px;
}
.wgo_block {
	margin:0;
}
.navbar {
	-moz-border-radius-bottomleft: 0 !important;
	-moz-border-radius-bottomright: 0 !important;
	-webkit-border-bottom-left-radius: 0 !important;
	-webkit-border-bottom-right-radius: 0 !important;
}

.announcements {
	margin-top:10px;
}
.highlight {
	background-image:none;
}
.forumbit_nopost.row1 .forumrow, .forumbit_post.row1 .forumrow {
	background: rgb(255, 255, 255) none   ;
	border:0  ;
	border-top:0;
}
.forumbit_nopost.row2 .forumbit_nopost .forumrow, .forumbit_post.row2 .forumrow {
	background: #f6f6f6;
	border-top:0;
	border:0  ;
}
.threadbit.row1 .nonsticky{
	background: #ffffff none   ;
}
.threadbit.row2 .nonsticky{
	background: #f6f6f6;
}
.threadbit .sticky .alt {

}
.threadbit.row1 .nonsticky .alt {
	background:#f9f9f9;
}
.threadbit.row2 .nonsticky .alt {
	background:#efefef;
}
.navlinksBox {
	text-align: center;
	color: #5d5d5d;
	font-size: 15px;
        font-weight:700;
        margin-top: 8px;
        margin-bottom: 0;
        width:100%;
        clear:both;
}
.bodyWrap {
	background:#fff;
	margin:0 2px;	
}
.body_wrapper {
	padding:10px 0;
	margin:0;
}
.above_body {
	padding:0;
	margin:0;
}
.threadbit .sticky, .threadbit .nonthread, .threadbit .nonsticky, .threadbit .deleted, .threadbit .discussionrow, .threadbit .ignored {
	border-top:0;
}
#sidebar_container > ul {
	width: 99%;
}
/* Page Wrapper
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#pageWrapper {}


/* Forumbit Box
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.forumbitBox {
	background:url(images/styles/Modern/style_green/forumbitDot.gif) repeat-x top left;
	margin-top: 8px;
}
.forumbitBoxLeft {
	background:url(images/styles/Modern/style_green/forumbitDot.gif) repeat-y top left;
}
.forumbitBoxRight {
	background:url(images/styles/Modern/style_green/forumbitDot.gif) repeat-y top right;
}
.forumbitWrap {
	background:url(images/styles/Modern/style_green/forumbitDot.gif) repeat-x bottom left;
}
.forumbitBoxTL {
	background:url(images/styles/Modern/style_green/forumbitBoxTL.gif) no-repeat top left;
}
.forumbitBoxTR {
	background:url(images/styles/Modern/style_green/forumbitBoxTR.gif) no-repeat top right;
}
.forumbitBoxBL {
	background:url(images/styles/Modern/style_green/forumbitBoxBL.gif) no-repeat bottom left;
}
.forumbitBoxBR {
	background:url(images/styles/Modern/style_green/forumbitBoxBR.gif) no-repeat bottom right;
	padding:8px;
}
.forumbitBox .tcat {
	margin-top:0;
}
.forumbitBoxShowthread {
	padding-bottom:0;
}

/* Top Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#topBar {
	height:39px;
	padding-top:7px;
	position:relative;
}
.topBox {
	background:url(images/styles/Modern/style_green/topBoxBG.gif) repeat-x top left;
	height:31px;
	line-height:31px;
	color:#ededed;
}
.topBoxLeft {
	background:url(images/styles/Modern/style_green/topBoxLeft_left.gif) no-repeat top left;
	height:31px;
}
.topBoxRight {
	background:url(images/styles/Modern/style_green/topBoxRight_left.gif) no-repeat top right;
	height:31px;

	padding:0 12px 0 35px;

}
.topBox span {
	float:left;
}
#topBar a:link, #topBar a:hover {
	color:#ededed;
}
#topBar a:hover {
	color:#fade58;
}
.topBoxLinks {
	float:right;
	position:relative;
}
.socialBox {
	float:right;

	padding:5px 0 0 8px;

}
.topRSS {
	position:relative;
	top:4px;
	margin-left:6px;
}
#clickRegister {
	position:absolute;
	top:19px;
	left:348px;
	z-index:1000;
}

/* Header
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.above_body {
	background:none;
}
.doc_header {
	background:url(images/styles/Modern/style_green/headerWrapBG.jpg) no-repeat top center;
	height:118px;
	position:relative;
	z-index:1;
}
#headerMain {
	background:url(images/styles/Modern/style_green/headerWrapBG.jpg) no-repeat top center;
	height:118px;
	position:relative;
	z-index:1;
}
.logo {
	float:left;
	height:118px;
	padding-right:19px;
}
.slogan {
	background:url(images/styles/Modern/style_green/sloganSplit.gif) no-repeat top left;
	float:left;
	font-size:14px;
	text-transform:uppercase;
	height:118px;
	line-height:118px;	
	color:#daeda8;
	padding-left:21px;
}
.bannerBoxHeader {
	position:absolute;
	top:5px;
	right:0;
	display:none;
}
#loginBox {
	width:299px;
	height:87px;
	position:absolute;
	top:31px;
	right:0;
	padding:0;
	font-size:12px;
	color:#eaf0f7;
}
#loginBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
#loginBox li {
	float:left;
}
.loginBox {
	float:left;
}
.loginBox ul {
	list-style:none;
	padding:0;
	margin:0;
}
.loginBar li {
	float:left;
}
.loginBoxInput {
	background: url(images/styles/Modern/style_green/loginBoxInput.png) no-repeat top left;
	width:110px;
	height:31px;
}
.loginInput {
	background:transparent;
	border:0;
	color: #a7a7a7;
	width:94px;
	height:31px;
	line-height:31px;
	margin:0;
	padding:0 8px;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}
.inputPad .loginBoxInput {

}
.inputPad {
	padding-right:6px;
}
.submitPad {
	padding:0;
}
.submitPad input {
}

.loginText {
	padding-bottom:0;
}
.memberBottom {
	
}
.memberLinks {
	padding-top:0;
	float:left;
}
.memberLinks a:link, .memberLinks a:visited {
	color:#eaf0f7;
}
.memberLinks a:hover {
	color:#9cc8e9;
}
.rememberMe {
	float:right;
	font-size:12px;
	color:#eaf0f7;
	padding-top:0;
}
.rememberMe input {
	vertical-align: baseline;
}
.cb_cookieuser_navbar{
	position: relative;
	top: 2px;
}

/* Content
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#contentMain {
	background:#fff;
}
.contentTL {
	background:url(images/styles/Modern/style_green/contentTL.gif) no-repeat top left;
}
.contentTR {
	background:url(images/styles/Modern/style_green/contentTR.gif) no-repeat top right;
}
.contentBL {
	background:url(images/styles/Modern/style_green/contentBL.gif) no-repeat bottom left;
}
.contentBR {
	background:url(images/styles/Modern/style_green/contentBR.gif) no-repeat bottom right;
}
.contentWrapper {
	padding:6px;
}

/* Footer Main
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerMain {
	background:url(images/styles/Modern/style_green/footerBG.jpg) no-repeat top center;
	color:#747474;
	padding:25px 0;
}
.copyright {
	text-align:center;
	line-height:16px;
	padding-bottom:20px;
}
.copyright a {
	font-weight:700;
}
.bannerBox {
	background:url(images/styles/Modern/style_green/bannerBoxBG.gif) no-repeat top left;
	width:468px;
	height:60px;
	padding:4px;
	margin:0 auto;
}

/* Footer Navigation
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#footerNav {
	background:url(images/styles/Modern/style_green/footerNavBG.gif) repeat-x top left;
	height:44px;
	font-size:15px;
	font-weight:700;
}
.footerNavLeft {
	background:url(images/styles/Modern/style_green/footerNavLeft.gif) no-repeat top left;
	height:44px;
}
.footerNavRight {
	background:url(images/styles/Modern/style_green/footerNavRight.gif) no-repeat top right;
	height:44px;
	padding:0 10px;
}
#footerNav ul {
	list-style:none;
	padding:0;
	margin:0;
float:left;
}
#footerNav li {
	float:left;
	padding:0 15px;
	line-height:44px;
}
#footerNav a:link, #footerNav a:visited {
	color:#fff;
}
#footerNav a:hover {
	color:#daeda8;
}
.skinSelect{
float:right;
padding-top:8px;
margin:0;
}
.footer {
margin:0;
padding:0;
}


/*************************************************/
/* TOP MEMBER BAR*/
#toplinks, .toplinks {
	text-align:left;
	line-height:20px;
	top:83px;
	right:15px;
	font-size:13px;
}
#toplinks .isuser {
	float:left;
}
#toplinks .welcomelink {
	font-weight:700;
}
.toplinks ul.isuser .notifications .popupbody {

	border: 1px solid #242424; /* makes it look consistent with the popup background */
}
.toplinks .notifications a.popupctrl {	
	padding-top: 3px;
	padding-bottom: 3px;
	padding-left: 4px;
	padding-right: 12px;

-webkit-border-radius: 5px;
-moz-border-radius: 5px;
border-radius: 5px;
}

.toplinks .notifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl:hover, .toplinks .nonotifications a.popupctrl.active, .toplinks ul.isuser li a:hover {
	-moz-border-radius: 5px !important;
	-webkit-border-radius: 5px !important;
}

.memberBox .welcomeUser {
	font-weight:700;
	font-size:11px;
	float:left;
}
.memberBox .toplinks {
	padding:2px 0 0 3px;
}
.memberBox .toplinks {
	padding:2px 0 0 3px;
}

/* Navbar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.navbar {
	background:url(images/styles/Modern/style_green/navBG.gif) repeat-x top left;
	position:relative;
	height:79px;
	font:   12px arial, helvetica, sans-serif;
	color:#fff;
	width:100%;
	padding:0;
	margin:0;
}
.navLeft {
	background:url(images/styles/Modern/style_green/navLeft.gif) no-repeat top left;
	height:79px;
}
.navRight {
	background:url(images/styles/Modern/style_green/navRight.gif) no-repeat top right;
	height:79px;
	padding-left:5px;
}
#navtabs ul.floatcontainer {
	margin-top:5px;
}
#navtabs li.selected ul.floatcontainer a:link, #navtabs li.selected ul.floatcontainer a:visited {
	line-height:27px;
	height:27px;
}
.navbar a { color:#fff; }
.navbar a:hover { color:#daeda8; }

.navtabs ul li:first-child {
	text-indent: 0;
	margin-left:15px;
}
.navtabs {
	background:none;
	padding-left:0;
}
.navtabs ul {
	position:absolute;
	top:42px;
	left:0px;
	width:100%;
/* This is to fix RTL menu issue under Opera */
        direction:ltr;
}
.navtabs li {
	background:url(images/styles/Modern/style_green/navSplit.gif) no-repeat top right;
	padding-right:23px;
	float:left;
}
.navtabs ul.floatcontainer li {
	background:none;
}

.navtabs ul li {
	border-right: 0;
	position: relative;
}
.navtabs li a {
	height:42px;
	line-height:42px;
}
.navtabs li a.navtab {
	display:block;
	min-width:60px;
	width:auto !important;
	width:60px;
	_min-width:75px;
	_width:auto !important;
	_width:75px;
	text-align:center;
	color:#fff;
	font-size:14px;
	text-decoration:none;
	line-height:42px;
	height:42px;
	padding:0 10px;
	font-weight:400;
	text-transform:uppercase;
	background:none;
}
.navtabs li a.navtab:hover {
	background:none;
	color:#daeda8;
}
.navtabs li.selected {
	color:#daeda8;
	height:42px;
}
.navtabs li.selected a.navtab {
	background:none;
	color:#daeda8;
	position:relative;
	top:-px;
	padding-top:px;
	z-index:10;
}
.navtabs ul.floatcontainer li a,
.navbar_advanced_search li a {
	text-decoration:none;
	font:   12px arial, helvetica, sans-serif;
	line-height:27px;
}
.navtabs ul.floatcontainer li {
	padding:0 5px;
}
.navtabs ul.floatcontainer li li {
	padding:0 2px;
}
.navtabs ul.floatcontainer li a {
	color:#1a1617;
	font-weight:400;
	padding:2px 5px;
}

.navbar_advanced_search li {
	height: 27px;
	display:block;
	clear:both;
}

.navbar_advanced_search li a {
	color:#fff;
}

.navbar_advanced_search li a:hover {
	color:#daeda8;
	text-decoration:none;
}

.navtabs ul.floatcontainer li a:hover {
	color:#5e8d04;
	text-decoration:none;
}

.navtabs ul.floatcontainer .popupbody li > a {
	padding:0pxpx 10px;
	text-indent: 0;
	color: ;
}

.navtabs ul.floatcontainer li a.popupctrl {
	-moz-border-radius:3px;
	-webkit-border-radius:3px;	
	border:solid px transparent;
	_border: none;
	background:transparent url(images/styles/Modern/misc/arrow.png) no-repeat right center;
	padding-right:15px;
        _background-image:url('images/styles/Modern/misc/arrow.gif');
	color:#1a1617;
}

.navtabs ul.floatcontainer li:hover a.popupctrl.active,
.navtabs ul.floatcontainer li a.popupctrl.active,
.navtabs ul.floatcontainer li a:hover.popupctrl {
	color:#fff;
}

/* Breadcrumb
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.breadcrumb {
	background: url(images/styles/Modern/style_green/bcBG.gif) repeat-x left top;
	color:#737373;
	height:38px;
	margin-bottom:10px;
}
.bcLeft {
	background: url(images/styles/Modern/style_green/bcLeft.gif) no-repeat left top;
	height:38px;
}
.bcRight {
	background: url(images/styles/Modern/style_green/bcRight.gif) no-repeat right top;
	height:18px;
	padding:10px 10px 10px 10px;
}
.breadcrumb .navbit > a, .breadcrumb .lastnavbit span {
	border:1px solid transparent;
}
.breadcrumb .navbit a:link, .breadcrumb .navbit a:visited {
	color:#737373;
}
.breadcrumb .navbit a:hover {
	background:#7ca621;
	color:#fff;
	border:1px solid transparent;
}

/*************************************************/
/* TCAT BAR */
.tcat {
	background:url(images/styles/Modern/style_green/tcatBG.gif) repeat-x top left;
	color: #fff;
	height:43px;
	clear:both;
	margin-top: 8px;
	float: left;
	border:0;
	padding:0;
	text-transform:uppercase;
	width: 100%;
}
.tcatLeft {
	background:url(images/styles/Modern/style_green/tcatLeft.gif) no-repeat top left;
	height:43px;
}
.tcatRight {
	background:url(images/styles/Modern/style_green/tcatRight.gif) no-repeat top right;
	height:43px;
}
.tcat2 {
	background:url(images/styles/Modern/style_green/tcat2BG.gif) repeat-x top left;
}
.tcat2 .tcatLeft {
	background:url(images/styles/Modern/style_green/tcat2Left.gif) no-repeat top left;
}
.tcat2 .tcatRight {
	background:url(images/styles/Modern/style_green/tcat2Right.gif) no-repeat top right;
}
.tcat .forumtitle {
	font-weight:700;

}
.tcat .tcatDesc {
	font-size:11px;
	font-weight:400;
}
.tcat h2 {
	padding-left:16px;
	font: bold 15px arial, helvetica, sans-serif;
	line-height:43px;
	float:left;
	font-weight:700;
}
.tcat a:link, .tcat a:visited {
	color:#fff;
}
.tcat a:hover {

}
.tcat .tcatCollapse {
	float:right;
	position:absolute;
	top:8px;
	right:8px;
}

/* tcat Thread List Controls - Forumdisplay */
.tcat_threadlist_controls {
	float:right;
	padding-right:8px;
}
.forumdisplaypopups, #forumdisplaypopups {
	clear:both;
}
.tcat_threadlist_controls h6 {

	padding:0;
	display:block;
	font-size:11px;
}
.forumdisplaypopups a.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a.popupctrl,
.postlist_popups h6 a.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a.popupctrl,
.postlist_popups h6 a.firstunread, .postlist_popups.popupgroup .popupmenu h6 a.firstunread {
	background:none;
	display:block;
	_display:43px;
	height:43px;
	line-height:43px;
	font-family:arial, helvetica, sans-serif;
	font-weight:700;
	font-size:12px;
	color:#fff;
	padding:0 7px;
	border: 0;
	float: left;
	clear: right;
}
.forumdisplaypopups a:hover.popupctrl, .forumdisplaypopups.popupgroup .popupmenu a:hover.popupctrl,
.postlist_popups h6 a:hover.popupctrl, .postlist_popups.popupgroup .popupmenu h6 a:hover.popupctrl,
.postlist_popups h6 a:hover.firstunread, .postlist_popups.popupgroup .popupmenu h6 a:hover.firstunread{
	border: 0;
	color:#fff;
	text-decoration:underline;
}
#postlist_popups a, .postlist_popups a {
	color: #fff;
	_border: none;
}

#postlist_popups a:hover, .postlist_popups a:hover {
	color: #fff;
	text-decoration:underline;
}
#postlist_popups .popupmenu:hover a.popupctrl, #postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active, .postlist_popups .popupmenu:hover a.popupctrl, .postlist_popups .popupmenu:hover .popupctrl a.popupctrl.active {
	border: 0;
}

#postlist_popups ul li {
	color: #3E3E3E;
}
#postlist_popups ul li a, .postlist_popups ul li a {
	color: #3E3E3E;
	_border: none;
}

#postlist_popups ul li a:hover, .postlist_popups ul li a:hover {
	color: #3E3E3E;
	text-decoration:underline;
}

#forumdisplaypopups ul a, .forumdisplaypopups ul a {
	color: #3e3e3e;
}
.tcat .toolsmenu {
	background:none;
	border:none;
	margin:0;
}
.toolsmenu div {
	border:0;
}
.tcat .toolsmenu ul {
	padding:0;
}
.tcat .toolsmenu .popupgroup a.popupctrl, .tcat .toolsmenu .popupgroup .popupmenu a.popupctrl, .tcat .toolsmenu .nopopupgroup li a {
	padding:0 7px;
	_display:43px;
	height:43px;
	line-height:43px;
}

/*************************************************/
/* THEAD BAR*/

.thead_bar .theadrow {
	background:#fff;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	line-height:24px;
	font-size:12px;
	border:1px solid transparent;
	border-bottom:1px solid #f2f2f2;
	color:#8b8b8b;
}
.thead_bar .padding {
	padding-left:12px;
}
.thead_bar .forumhead span.forumlastpost {
	width: 23%;
}
.thead_bar .theadrow .forumdata  {
	float: left;
}
.thead_bar {
	float: left;
	position:relative;
	width: 100%;
	display:block;
}
.thead_bar .forumhead .forumtitle {
	width: 76%;
}
.thead_bar .foruminfo {
	width: 53%;
	min-width: 30%;
	float: left;
	clear: right;
}
.thead_bar .foruminfo .forumdata {
	padding: 0;
	width: 100%;
	_width: 99%;
}
.thead_bar .forumstats, .thead_bar .forumstats_2 {
	display: block;
	float: left;
	clear: right;
	width: 16%;
	margin-right: 2%;
}
.thead_bar .foruminfo .forumdata .datacontainer {
	float: left;
	width: 86%;
	padding:0;
	padding-left: 58px;
}
.thead_bar .forumactionlinks {
	width: 5%;
	display:block;
	float:left;
	clear:right;
}

.thead_bar .forumactionlink {
/* values based on icon size */
	display:block;
	width:18px;

	overflow:hidden;
	float: right;
	clear: left;
	background:transparent none no-repeat;
	position: relative;

}
.thead_bar .forumstats li, .thead_bar .forumstats_2 li{
	font-size: 12pxpx;
	text-align: right;
	padding-right: 20px;
	display:block;
}
.thead_bar .forumlastpost {
	display:block;
	float: left;
	clear: right;
}
.thead_bar .theadrow .forumlastpost {
	width: 22%;
}
.forumbitBody {
	padding-right:2px;
	clear:both;
}

/*threadlisthead and posthead*/
.threadlist {
margin-top:0;
}
#threadlist .threadlisthead {
	background:#fff;
	display:block;
	width: 100%;
	float: left;
	position:relative;
	font-size:12px;
	border:1px solid transparent;
	border-bottom:1px solid #f2f2f2;
	color:#8b8b8b;
	font-weight:400;
	margin: 0;
	padding:4px 0;
}

#threadlist .threadlisthead a, #threadlist .threadlisthead a:hover {
	color: #b6b6b6;
}
.postbit .posthead, .postbitlegacy .posthead, .eventbit .eventhead {
	background:#f0f0f0;
	clear:both;
	display:block;
	float: left;
	width: 100%;
	color:#8b8b8b;
	margin: -1px -1px 0;
	font:   normal 12px arial, helvetica, sans-serif;
	padding: 4px 0;
	border:1px solid #e2e2e2;
	border-bottom:1px solid #e2e2e2;
	font-size:12px;
	font-weight:400;
}

#posts .posthead a:link, #posts .posthead a:visited {
	color:#b6b6b6;
}
#posts .posthead a:hover {
	color:#b6b6b6;
}
#posts .posthead .time, #posts .nodecontrols {
	color:#b6b6b6;
}
.wgo_subblock{
	position:relative;
}
.wgo_subblock .whatspace {
	padding-left:55px;
}
.wgo_subblock .whaticon {
	position:absolute;
	top:25%;
	left:10px;
}
#postlist .userinfo {
	padding-top:10px;
}
.username_container {
	padding:2px 0;
	text-align:center;
}
.username_container .username strong {
	font-size: 16pt;
	font-weight:400;
}
.usertitle, .rank {
	text-align:center;
}
.usercenter {
	padding-top:5px;
	text-align:center;
}

.postbit, .postbitlegacy, .eventbit {

}
.bbcode_container .bbcode_quote_container {
	background:none;
}

.forum_info_block, .forum_info_form {
	background:none;
}
.postfoot {
	border: 1px solid #e2e2e2;
	border-bottom:0;
	border-right:0;
}
.postfootWrap {
	border-right: 1px solid #e2e2e2;
}

#thread_info a.collapse {
	position: absolute;
	top: 9px;
}

/* Postbit Align Username and Avatar Center
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.postbitlegacy .userinfo .username_container, .postbitlegacy .userinfo .rank, .postbitlegacy .userinfo .usertitle {text-align:center;}
.postbitlegacy .userinfo .postuseravatar, .postbitlegacy .userinfo .postuseravatar img  {float:none; text-align:center;}
.postbitlegacy .userinfo .usertitle {display: block; float:none; text-align:center; clear: both;}
.postbitlegacy .userinfo .postbit_reputation,.postbitlegacy .userinfo .postbit_reputation img {float:none; text-align:center;}
.postbitlegacy dl.userinfo_extra, .postbitlegacy dl.user_rep {
	padding:0;
	margin:0;
}
.postbitlegacy dl.userinfo_extra {
	margin-top:5px;
}
.userinfo_extra dt, .user_rep dt  {
	padding:6px 3px 0 10px;
	margin:0;
	color: #5d8c03;
	font-weight:700;
}
.userinfo_extra dd, .user_rep dd {
	background: #fff;
	color: #242424;
	border: 1px solid #dedede;
	padding:3px 0 3px 0;
	margin:0;
	margin-top: 2px;
}


/* Bottom Bar
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.bottomBar{
	background:url(images/styles/Modern/style_green/bottomBarBG.gif) repeat-x top left;
	height:17px;
	font-size:0;
	clear:both;
}
.bottomBarLeft {
	background:url(images/styles/Modern/style_green/bottomBarLeft.gif) no-repeat top left;
	height:17px;
	font-size:0;
}
.bottomBarRight {
	background:url(images/styles/Modern/style_green/bottomBarRight.gif) no-repeat top right;
	height:17px;
	font-size:0;
}

/* Global Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.searchBox {
	position:absolute;
	top:6px;
	right:11px;
	height:36px;
	line-height:36px;
}

.searchBoxInput {
	background: url(images/styles/Modern/style_green/searchInput.gif) no-repeat top left;
	width:153px;
	height:31px;
	float:left;
}
.searchinput {
	border:0;
	background:transparent;
	color: #828282;
	padding:0 5px;
	width:143px; 
	height:31px;
	line-height:31px;
}
.searchButton {
	float:left;
	padding-left:6px;
}
.searchBox .searchBox_advanced_search {
	position:absolute;
	top:36px;
	right:0;
}
.searchBox .searchBox_advanced_search a:link, .searchBox .searchBox_advanced_search a:visited {
	color:#1a1617;
}

/* Forum Home
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
.forumrow .forumtitle a:link, .forumrow .forumtitle a:visited {
	color:#3a3a3a;
	font:   15px arial, helvetica, sans-serif;
}
.forumrow .forumtitle a:hover{
	color:#76a11b;
}
.forumrow .lastposttitle a:link, .forumrow .lastposttitle a:visited {
	color:#76a11b;
	font-weight:700;
}
.forumrow .lastposttitle a:hover{
	color:#3a3a3a;
}
#forums .lastpostby a.username {
	color:;
}
#forums .lastpostby a.username:hover {
	color:;
}
.forumdescription {
	color:;
	padding:4px 0;
}
.notices {
	background:none;
}
#notices .restore {
	background:#ffefb6 none   ;
	border:1px solid #ebd27b;
	color:#3c3a22;
	line-height:16px;
	padding:8px 10px 8px 10px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}
#notices .restore a {
	font-weight:700;
}

/* Advanced Search
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
#searchtypeswitcher {
	border-bottom:4px solid #323232;
}
#searchtypeswitcher li a {
	background-color:#555;
	color:#FFF;
}

#searchtypeswitcher li.selected a {
	background-color:#323232;
}

#searchtypeswitcher li a:hover {
	background-color:#323232;
}

/* vBulletin Groups
~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~*/
li.sgicon .maincol, #sidebar li.sgicon .maincol,#thumbnails li {
	background: #fff none   ;
}
#sidebar li.sgicon .maincol .textcontrol {
	color: #424242;
}
#content .grouplist .blockrow > li, #content .grouplist .blockrow > ol, #content .grouplist .blockrow > div {
	background: #f8f8f8 none   ;
	border: 1px solid #e2e2e2;
}
#pictures .blockbody .blockrow, #group_discussion_inlinemod_form .blockbody .blockrow {
	border: 1px solid #e2e2e2;
}
.toolsmenu {
	background: #f0f0f0 url(images/misc/blog/top-highlight.png) repeat-x left top;
	_background-image: none;
	border: 1px solid #e2e2e2;
}
.toolsmenu div {
	border-top:none;
	color: #424242;
}
.toolsmenu h1 a {
	color: #424242;
}
.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .nopopupgroup li a {
	color: #424242;
}

.toolsmenu .popupgroup a.popupctrl, .toolsmenu .popupgroup .popupmenu a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover a.popupctrl, .toolsmenu .popupgroup .popupmenu:hover .popupctrl a.popupctrl.active {
	color: #424242;
}
dl.blogbit, tr.blogbit,
dl.blogcatbit, tr.blogcatbit {
	background: #fff none   ;
}

/*------------------------------------------------------------------------------
| #> AdSense Rectangle inside 2nd post. By AdsenseExperts.com
+-----------------------------------------------------------------------------*/
.float_spacer_left { float:right; width: 1px; height: 50px; }
.AdInline_left { clear:right; float:left; }
.AdLR336_left { margin-bottom:20px; margin-left:0px; margin-right:15px; width:336px; text-align:center; }
.AdLR336_left .AdDottedLine, .AdDottedLine { float:none; margin:0; padding:0; width:100%; }
.AdInline_left .AdLR336_left h5 { width:330px; font-size:10px !important; font-weight:normal; text-align:right; line-height:normal; margin:0; padding:0; font-family:verdana,arial,helvetica,geneva,sans-serif; z-index:10;}
.AdCommercial { overflow:hidden; background-color:#FAFAFA; }
.AdCommercialInner { margin-bottom:10px; margin-top:-10px; }
.AdDottedLineTop { background-image:url(images/bg_maincontainer_line.gif); background-repeat:repeat-x; margin-bottom:10px; padding-bottom:10px; font-size:1px; height:1px !important; line-height:1px; width:100%; }
.AdDottedLineBottom { background-image:url(images/bg_maincontainer_line.gif); background-repeat:repeat-x; margin:0px; padding:0; font-size:1px; height:1px !important; line-height:1px; width:100%; }
.AdCenter { align:center; margin:0; padding:0;}
.bbcode_container div.bbcode_quote { clear:both; }