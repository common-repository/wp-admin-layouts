<?php header("Content-type: text/css"); ?>
<?php include( '../../../../wp-load.php' );?>
<?php $settings							=	get_option( "wp_admin_layouts_settings" );?>
<?php $background						=	$settings['template_bgcolor'];?>
<?php $hbackground						=	$settings['template_hbgcolor'];?>
<?php $color							=	$settings['template_ftcolor'];?>
<?php $hcolor							=	$settings['template_fthcolor'];?>

@font-face {
	font-family: 'dashicons';
	src: url(data:application/x-font-woff;charset=utf-8;base64,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) format('woff'),
		url(/wp-content/plugins/mp6/css/../fonts/dashicons.ttf) format('truetype'),
		url(/wp-content/plugins/mp6/css/../fonts/dashicons.svg#dashicons) format('svg');
	font-weight: normal;
	font-style: normal;
}/* Last merged revision: 23951 */

#wpadminbar * {
	height: auto;
	width: auto;
	margin: 0;
	padding: 0;
	position: static;
	text-transform: none;
	letter-spacing: normal;
	line-height: 30px;
	font: normal 13px/32px "Open Sans", sans-serif;
	color: #eee;
	text-shadow: #444 0px -1px 0px;
	-webkit-box-sizing: content-box;
	-moz-box-sizing:    content-box;
	box-sizing:         content-box;
	-webkit-transition: none;
	-moz-transition:    none;
	-o-transition:      none;
	transition:         none;
}

#wpadminbar ul li:before,
#wpadminbar ul li:after {
	content: normal;
}

#wpadminbar a,
#wpadminbar a:hover,
#wpadminbar a img,
#wpadminbar a img:hover {
	outline: none;
	text-decoration: none;
	background: none;
}

#wpadminbar a:focus,
#wpadminbar a:active,
#wpadminbar input[type="text"],
#wpadminbar input[type="password"],
#wpadminbar input[type="number"],
#wpadminbar input[type="search"],
#wpadminbar input[type="email"],
#wpadminbar input[type="url"],
#wpadminbar select,
#wpadminbar textarea,
#wpadminbar div {
	outline: none;
}

#wpadminbar {
	direction: ltr;
	color: #ccc;
	font: normal 13px/32px "Open Sans", sans-serif;
	height: 32px;
	position: fixed;
	top: 0;
	left: 0;
	width: 100%;
	min-width: 600px; /* match the min-width of the body in wp-admin.css */
	z-index: 99999;
	background: <?php echo $hbackground;?>;
	-webkit-font-smoothing: subpixel-antialiased;
}

#wpadminbar .ab-sub-wrapper,
#wpadminbar ul,
#wpadminbar ul li {
	background: none;
	clear: none;
	list-style: none;
	margin: 0;
	padding: 0;
	position: relative;
	text-indent: 0;
	z-index: 99999;
}

#wpadminbar .quicklinks ul {
	text-align: left;
}

#wpadminbar li {
	float: left;
}

#wpadminbar .ab-empty-item {
	outline: none;
}

#wpadminbar .quicklinks .ab-top-secondary > li {
	float: right;
}

#wpadminbar .quicklinks a,
#wpadminbar .quicklinks .ab-empty-item,
#wpadminbar .shortlink-input {
	height: 32px;
	display: block;
	padding: 0 10px;
	margin: 0;
}

#wpadminbar .menupop .ab-sub-wrapper,
#wpadminbar .shortlink-input {
	margin: 0;
	padding: 0;
	-webkit-box-shadow: 2px 2px 4px rgba(0,0,0,0.2);
	box-shadow: 2px 2px 4px rgba(0,0,0,0.2);
	background: #333;
	display: none;
	position: absolute;
	float: none;
}

#wpadminbar.ie7 .menupop .ab-sub-wrapper,
#wpadminbar.ie7 .shortlink-input {
	top: 32px;
	left: 0;
}

#wpadminbar .ab-top-secondary .menupop .ab-sub-wrapper {
	right: 0;
	left: auto;
}

#wpadminbar .ab-submenu {
	padding: 6px 0;
}

#wpadminbar .selected .shortlink-input {
	display: block;
}

#wpadminbar .quicklinks .menupop ul li {
	float: none;
}

#wpadminbar .quicklinks .menupop ul li a strong {
	font-weight: bold;
}

#wpadminbar .quicklinks .menupop ul li .ab-item,
#wpadminbar .quicklinks .menupop ul li a strong,
#wpadminbar .quicklinks .menupop.hover ul li .ab-item,
#wpadminbar.nojs .quicklinks .menupop:hover ul li .ab-item,
#wpadminbar .shortlink-input {
	line-height: 26px;
	height: 26px;
	text-shadow: none;
	white-space: nowrap;
	min-width: 140px;
}

#wpadminbar .shortlink-input {
	width: 200px;
}

#wpadminbar.nojs li:hover > .ab-sub-wrapper,
#wpadminbar li.hover > .ab-sub-wrapper {
	display: block;
}

#wpadminbar .menupop li:hover > .ab-sub-wrapper,
#wpadminbar .menupop li.hover > .ab-sub-wrapper {
	margin-left: 100%;
	margin-top: -33px;
}

#wpadminbar .ab-top-secondary .menupop li:hover > .ab-sub-wrapper,
#wpadminbar .ab-top-secondary .menupop li.hover > .ab-sub-wrapper {
	margin-left: 0;
	left: inherit;
	right: 100%;
}

#wpadminbar .ab-top-menu > li:hover > .ab-item,
#wpadminbar .ab-top-menu > li.hover > .ab-item,
#wpadminbar .ab-top-menu > li > .ab-item:focus,
#wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus {
	color: #fff;
}

#wpadminbar.nojs .ab-top-menu > li.menupop:hover > .ab-item,
#wpadminbar .ab-top-menu > li.menupop.hover > .ab-item {
	background: #333;
	color: #2ea2cc;
	text-shadow: none;
}

#wpadminbar .ab-icon {
	position: relative;
	float: left;
	font: normal 20px/1 'dashicons' !important;
	speak: none;
	padding: 0;
	-webkit-font-smoothing: antialiased;
	text-shadow: none !important;
	background-image: none !important;
	color: #999;
	margin-right: 6px;
}

#wpadminbar li:hover .ab-icon,
#wpadminbar li:hover > .ab-item:before {
	color: <?php echo $hcolor;?>;
}

#wpadminbar .ab-icon:before {
	position: relative;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#wpadminbar .ab-label {
	display: inline-block;
	height: 32px;
}

#wpadminbar .hover .ab-label,
#wpadminbar.nojq .ab-item:focus .ab-label {
	color: #fafafa;
}

#wpadminbar .menupop.hover .ab-label {
	color: #2ea2cc;
	text-shadow: none;
}

#wpadminbar .ab-submenu .ab-item {
	color: #eee;
	text-shadow: none;
}

#wpadminbar .quicklinks .menupop ul li a,
#wpadminbar .quicklinks .menupop ul li a strong,
#wpadminbar .quicklinks .menupop.hover ul li a,
#wpadminbar.nojs .quicklinks .menupop:hover ul li a {
	color: #eee;
}

#wpadminbar .quicklinks .menupop ul li a:hover,
#wpadminbar .quicklinks .menupop ul li a:hover strong,
#wpadminbar .quicklinks .menupop.hover ul li a:hover,
#wpadminbar.nojs .quicklinks .menupop:hover ul li a:hover {
	color: #2ea2cc;
}

#wpadminbar .menupop .menupop > .ab-item:before,
#wpadminbar .ab-top-secondary .menupop .menupop > .ab-item:before {
	position: absolute;
	font: normal 17px/1 'dashicons';
	speak: none;
	-webkit-font-smoothing: antialiased;
}

#wpadminbar .menupop .menupop > .ab-item {
	display: block;
	padding-right: 2em;
}

#wpadminbar .menupop .menupop > .ab-item:before {
	top: 5px;
	right: 4px;
	content: '\f139';
}

#wpadminbar .ab-top-secondary .menupop .menupop > .ab-item {
	padding-left: 2em;
	padding-right: 1em;
}

#wpadminbar .ab-top-secondary .menupop .menupop > .ab-item:before {
	top: 5px;
	left: 3px;
	content: '\f141';
}

#wpadminbar .quicklinks .menupop ul.ab-sub-secondary {
	display: block;
	position: relative;
	right: auto;
	margin: 0;
	background: <?php echo $background;?>;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#wpadminbar .quicklinks .menupop .ab-sub-secondary > li:hover > a,
#wpadminbar .quicklinks .menupop .ab-sub-secondary > li.hover > a,
#wpadminbar .quicklinks .menupop .ab-sub-secondary > li .ab-item:focus a {
	color: #2ea2cc;
}

#wpadminbar .quicklinks a span#ab-updates {
	background: #eee;
	color: #333;
	text-shadow: none;
	display: inline;
	padding: 2px 5px;
	font-size: 10px;
	font-weight: bold;
	-webkit-border-radius: 10px;
	border-radius: 10px;
}

#wpadminbar .quicklinks a:hover span#ab-updates  {
	background: #fff;
	color: #000;
}

#wpadminbar .ab-top-secondary {
	float: right;
}

#wpadminbar ul li:last-child,
#wpadminbar ul li:last-child .ab-item {
	-webkit-box-shadow: none;
	box-shadow: none;
}

/**
 * My Account
 */
#wp-admin-bar-my-account > ul {
	min-width: 198px;
}

#wp-admin-bar-my-account.with-avatar > ul {
	min-width: 270px;
}

#wpadminbar #wp-admin-bar-user-actions > li {
	margin-left: 16px;
	margin-right: 16px;
}

#wpadminbar #wp-admin-bar-user-actions.ab-submenu {
	padding: 6px 0 12px;
}

#wpadminbar #wp-admin-bar-my-account.with-avatar #wp-admin-bar-user-actions > li {
	margin-left: 88px;
}

#wpadminbar #wp-admin-bar-user-info {
	margin-top: 6px;
	margin-bottom: 15px;
	height: auto;
	background: none;
}

#wp-admin-bar-user-info .avatar {
	position: absolute;
	left: -72px;
	top: 4px;
	width: 64px;
	height: 64px;
}

#wpadminbar #wp-admin-bar-user-info a {
	background: none;
	height: auto;
}

#wpadminbar #wp-admin-bar-user-info span {
	background: none;
	padding: 0;
	height: 18px;
}

#wpadminbar #wp-admin-bar-user-info .display-name,
#wpadminbar #wp-admin-bar-user-info .username {
	text-shadow: none;
	display: block;
}

#wpadminbar #wp-admin-bar-user-info .display-name {
	color: #999;
}

#wpadminbar #wp-admin-bar-user-info .username {
	color: #999;
	font-size: 11px;
}

#wpadminbar .quicklinks li#wp-admin-bar-my-account.with-avatar > a img {
	width: 16px;
	height: 16px;
	padding: 0;
	border: 1px solid #888;
	background: #eee;
	line-height: 24px;
	vertical-align: middle;
	margin: -4px 0 0 6px;
	float: none;
	display: inline;
}

/**
 * WP Logo
 */
#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon {
	width: 20px;
	height: 20px;
	margin-right: 0;
	padding: 2px 0 5px;
}

#wpadminbar #wp-admin-bar-wp-logo > .ab-item .ab-icon:before {
	content: '\f120';
}

/*
 * My Sites
 */
#wpadminbar .quicklinks li .blavatar {
	float: left;
	font: normal 16px/1 'dashicons' !important;
	speak: none;
	-webkit-font-smoothing: antialiased;
	color: #eee;
}

#wpadminbar .quicklinks li a:hover .blavatar {
	color: #2ea2cc;
}

#wpadminbar .quicklinks li .blavatar:before {
	content: '\f120';
	height: 16px;
	width: 16px;
	display: inline-block;
	margin: 5px 7px 0 -1px;
}

/**
 * "Site Title"
 */
#wpadminbar #wp-admin-bar-appearance {
	margin-top: -12px;
}

/**
 * Comments
 */
#wpadminbar #wp-admin-bar-comments .ab-icon {
	margin-right: 0;
}

#wpadminbar #wp-admin-bar-comments .ab-icon:before {
	content: '\f101';
	top: 3px;
}

#wpadminbar #wp-admin-bar-comments .count-0 {
	display: none;
}

/**
 * New Content
 */
#wpadminbar #wp-admin-bar-new-content .ab-icon:before {
	content: '\f132';
	top: 4px;
}

/**
 * Updates
 */
#wpadminbar #wp-admin-bar-updates .ab-icon:before {
	content: '\f113';
	top: 2px;
}

/**
 * Search
 */
#wpadminbar #wp-admin-bar-search .ab-item {
	padding: 0;
	background: transparent;
}

#wpadminbar #adminbarsearch {
	height: 32px;
	padding: 0 2px;
}

#wpadminbar #adminbarsearch .adminbar-input {
	position: relative;
	font: 13px/24px "Open Sans", sans-serif;
	height: 24px;
	width: 24px;
	padding: 0 3px 0 23px;
	margin: 0;
	color: #ccc;
	text-shadow: #444 0px -1px 0px;
	background-color: rgba( 255, 255, 255, 0 );
	border: none;
	outline: none;
	cursor: pointer;

	background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAoCAYAAACM/rhtAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA2hpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcE1NOk9yaWdpbmFsRG9jdW1lbnRJRD0ieG1wLmRpZDowMTgwMTE3NDA3MjA2ODExODIyQUUyQzMxQjg3M0JBOCIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDpDMDA5M0I4NEUxNTAxMUUyQjg3RDlEM0M4NjY5RjcwRSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDpDMDA5M0I4M0UxNTAxMUUyQjg3RDlEM0M4NjY5RjcwRSIgeG1wOkNyZWF0b3JUb29sPSJBZG9iZSBQaG90b3Nob3AgQ1M2IChNYWNpbnRvc2gpIj4gPHhtcE1NOkRlcml2ZWRGcm9tIHN0UmVmOmluc3RhbmNlSUQ9InhtcC5paWQ6MDU4MDExNzQwNzIwNjgxMTgyMkFFMkMzMUI4NzNCQTgiIHN0UmVmOmRvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MDExNzQwNzIwNjgxMTgyMkFFMkMzMUI4NzNCQTgiLz4gPC9yZGY6RGVzY3JpcHRpb24+IDwvcmRmOlJERj4gPC94OnhtcG1ldGE+IDw/eHBhY2tldCBlbmQ9InIiPz7Kq4Y8AAACE0lEQVR42uyY3W3CMBDHA+p7swHpBA0TNN0ANkheeKWZAJgAeOWljJANSCcgTNCwgTsBPUtHZZ0cf9UhUYulU0C2Tz/Ovrt/GFwul6DPYxj0fNwB/zzgg8um3W4XwyMBe8RnCfaFz8rG12w28wcIYCk8FmARmUqEzzXYCmx/swhixN7BYoPlEa6dg2W2EbW+gwh3MIQTh+s+8wgKcCGZYmAFHucZbISRm5C1Ie5/dY2k7ojfJXD8buVwuRn+CHEuB1uDpQSS+xl7BcSEoMfDwTYKfwzv3QlBxeNOXRJHdQfn5HuhgRPHBq+Ayp87IEQvkkXP0ncuSZrIVwQpXAnRqy1911i4VX6dAZ8poGOVKDV+/49YCB39h20Bfih6rc2g+06+AGnVjyGzEwe4+Ld3edgggZikjq0B0ubI1rSOYiH3dge3khJhAhk2KJ+t1ySBKJaSKPJ2dVAcd4LiIJW0wFbEQobVP6YyCiBroRgnuC5SRPUINrUFHWrkOFNIpQjBlgKgTsgeUZH7q4MC5CbwM5YNGtO9UHNIsBxB94psZDg/1WQsj/inSW8euP71ISTKCxZgRurcNWECjX58uopfr4ACqGp6gUeqGhUAjrsSCyuDrOVdatGlmskMOshbUwO4BWCFkLruM+lSDxYGmT3qWrAWmvfjcx8UdYXvxxm2yZ+3QMjkfStlpi+S/w54B2xrfAswAJemoTnH7DqaAAAAAElFTkSuQmCC);
	background-repeat: no-repeat;
	background-position: 1px center;
	background-size: 20px 20px;

	-webkit-box-shadow: none;
	box-shadow: none;

	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;

	-webkit-transition-duration: 400ms;
	-webkit-transition-property: width, background;
	-webkit-transition-timing-function: ease;
	-moz-transition-duration: 400ms;
	-moz-transition-property: width, background;
	-moz-transition-timing-function: ease;
	-o-transition-duration: 400ms;
	-o-transition-property: width, background;
	-o-transition-timing-function: ease;
}

#wpadminbar.ie7 #adminbarsearch .adminbar-input {
	margin-top: 1px;
	width: 120px;
}

#wpadminbar #adminbarsearch .adminbar-input:focus {
	color: #555;
	text-shadow: 0 1px 0 #fff;
	width: 200px;
	background-color: rgba( 255, 255, 255, 0.9 );
	cursor: text;
}

#wpadminbar.ie8 #adminbarsearch .adminbar-input {
	background-color: #464646;
}

#wpadminbar.ie8 #adminbarsearch .adminbar-input:focus {
	background-color: #fff;
}

/* Two rules to ensure browser recognition */
#wpadminbar #adminbarsearch .adminbar-input::-webkit-input-placeholder {
	color: #ddd;
}

#wpadminbar #adminbarsearch .adminbar-input:-moz-placeholder {
	color: #ddd;
}

#wpadminbar #adminbarsearch .adminbar-button {
	display: none;
}

/**
 * Customize support classes
 */
.no-customize-support .hide-if-no-customize,
.customize-support .hide-if-customize,
.no-customize-support.wp-core-ui .hide-if-no-customize,
.no-customize-support .wp-core-ui .hide-if-no-customize,
.customize-support.wp-core-ui .hide-if-customize,
.customize-support .wp-core-ui .hide-if-customize {
	display: none;
}

/* Skip link */
#wpadminbar .screen-reader-text,
#wpadminbar .screen-reader-text span {
	position: absolute;
	left: -1000em;
	top: -1000em;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

#wpadminbar .screen-reader-shortcut {
	position: absolute;
	top: -1000em;
}

#wpadminbar .screen-reader-shortcut:focus {
	left: 6px;
	top: 7px;
	height: auto;
	width: auto;
	display: block;
	font-size: 14px;
	font-weight: bold;
	padding: 15px 23px 14px;
	background: #f1f1f1;
	color: #fff;
	text-shadow: none;
	border-radius: 3px;
	z-index: 100000;
	line-height: normal;
	-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	text-decoration: none;
}

/**
 * IE 6-targeted rules
 */
* html #wpadminbar {
	overflow: hidden;
	position: absolute;
}

* html #wpadminbar .quicklinks ul li a {
	float: left;
}

* html #wpadminbar .menupop a span {
	background-image: none;
}
/**
 * Follow buttons
 */

a.wpcom-follow-rest, 
a.wpcom-following-rest {
	margin-left: -2px;
}
a.wpcom-follow-rest:before, 
a.wpcom-following-rest:before {
	font: 16px/1 "Noticons";
	-webkit-font-smoothing: antialiased;
	content: '\f801';
	color: #7bc8e4;
	position: relative;
	top: 3px;
	display: inline-block;
}
a.wpcom-following-rest:before {
	content: '\f803';
}
a.wpcom-following-rest:hover:before {
	content: '\f802';
}
/*
	Hover Bubbles
*/

#wpadminbar div.wpcom-bubble,
div.wpcom-bubble {
	width: 210px;
	background: #fff;
	background: rgba(255,255,255,0.99);
	border: none;
	position: absolute;
	top: 32px;
	padding: 10px 16px;
	z-index: 10000;
	cursor: default;
	opacity: 0;
	display: none;

	-webkit-box-shadow: 0 0 2px rgba(0, 0, 0, 0.15), 0 3px 8px rgba(0, 0, 0, 0.1);
	-moz-box-shadow: 0 0 2px rgba(0, 0, 0, 0.15), 0 3px 8px rgba(0, 0, 0, 0.1);
	box-shadow: 0 0 2px rgba(0, 0, 0, 0.15), 0 3px 8px rgba(0, 0, 0, 0.1);
}

#wpadminbar div.wpcom-bubble:after,
#wpadminbar div.wpcom-bubble:before,
div.wpcom-bubble:after,
div.wpcom-bubble:before {
	border: solid transparent;
	content: ' ';
	height: 0;
	left: 50%;
	margin-left: -6px;
	position: absolute;
	width: 0;
}

#wpadminbar div.wpcom-bubble.bubble-left:after,
#wpadminbar div.wpcom-bubble.bubble-left:before,
div.wpcom-bubble.bubble-left:after,
div.wpcom-bubble.bubble-left:before {
	left: 14px;
}

#wpadminbar div.wpcom-bubble.bubble-right:after,
#wpadminbar div.wpcom-bubble.bubble-right:before,
div.wpcom-bubble.bubble-right:after,
div.wpcom-bubble.bubble-right:before {
	left: auto;
	right: 3px;
}

#wpadminbar div.wpcom-bubble:after,
div.wpcom-bubble:after {
	border-width: 6px;
	border-bottom-color: #fff;
	top: -12px;
}

#wpadminbar div.wpcom-bubble:before,
div.wpcom-bubble:before {
	border-width: 8px;
	border-bottom-color: #eee;
	border-bottom-color: rgba(0, 0, 0, 0.05);
	top: -16px;
	margin-left: -8px;
}

#wpadminbar div.wpcom-bubble.fadein,
div.wpcom-bubble.fadein {
	display: block;
	opacity: 1;
	-webkit-animation-fill-mode: forwards;
	-webkit-backface-visibility: none;
	-webkit-animation-name: reset, fadein;
	-webkit-animation-duration: .25s;
	-webkit-animation-timing-function: ease-in;
}
	@-webkit-keyframes fadein {
		0% {
		    opacity: 0;
		}
		100% {
		    opacity: 1;
		}
	}

#wpadminbar div.wpcom-bubble div.bubble-txt,
div.wpcom-bubble div.bubble-txt {
	line-height: 1.5;
	font-size: 13px;
	color: #555;
	text-shadow: none;
}

#wpadminbar div.wpcom-bubble div a,
#wpadminbar div.wpcom-bubble div span,
div.wpcom-bubble div a,
div.wpcom-bubble div span {
	display: inline;
	padding: 0;
	margin: 0;
	color: #1e8cbe;
	text-shadow: none;
	line-height: 100%;
}

#wpadminbar div.wpcom-bubble div a:hover {
	color: #f1831e;
}

/* ----------------------------------------------------------------------------------------------------------------*/
/* ---------->>> thickbox specific link and font settings <<<------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/
#TB_window {
	font: 12px sans-serif;
	color: #333333;
}

#TB_secondLine {
	font: 10px sans-serif;
	color:#666666;
}

#TB_window a:link {color: #666666;}
#TB_window a:visited {color: #666666;}
#TB_window a:hover {color: #000;}
#TB_window a:active {color: #666666;}
#TB_window a:focus{color: #666666;}

/* ----------------------------------------------------------------------------------------------------------------*/
/* ---------->>> thickbox settings <<<-----------------------------------------------------------------------------*/
/* ----------------------------------------------------------------------------------------------------------------*/
#TB_overlay {
	position: fixed;
	z-index:100;
	top: 0px;
	left: 0px;
	height:100%;
	width:100%;
}

.TB_overlayMacFFBGHack {}
.TB_overlayBG {
	background-color:#000;
	-ms-filter:"progid:DXImageTransform.Microsoft.Alpha(Opacity=75)";
	filter:alpha(opacity=75);
	-moz-opacity: 0.75;
	opacity: 0.75;
}

* html #TB_overlay { /* ie6 hack */
     position: absolute;
     height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');
}

#TB_window {
	position: fixed;
	background: #ffffff;
	z-index: 102;
	color:#000000;
	visibility: hidden;
	text-align:left;
	top:50%;
	left:50%;
	border: 1px solid #555;
	-moz-box-shadow: rgba(0,0,0,1) 0 4px 30px;
	-webkit-box-shadow: rgba(0,0,0,1) 0 4px 30px;
	-khtml-box-shadow: rgba(0,0,0,1) 0 4px 30px;
	box-shadow: rgba(0,0,0,1) 0 4px 30px;
}

* html #TB_window { /* ie6 hack */
position: absolute;
margin-top: expression(0 - parseInt(this.offsetHeight / 2) + (TBWindowMargin = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop) + 'px');
}

#TB_window img#TB_Image {
	display:block;
	margin: 15px 0 0 15px;
	border-right: 1px solid #ccc;
	border-bottom: 1px solid #ccc;
	border-top: 1px solid #666;
	border-left: 1px solid #666;
}

#TB_caption{
	height:25px;
	padding:7px 30px 10px 25px;
	float:left;
}

#TB_closeWindow{
	height:25px;
	padding:11px 25px 10px 0;
	float:right;
}

#TB_closeAjaxWindow{
	padding:6px 10px 0;
	text-align:right;
	float:right;
}

#TB_ajaxWindowTitle{
	float:left;
	padding:6px 10px 0;
}

#TB_title{
	background-color:#e8e8e8;
	height:27px;
}

#TB_ajaxContent{
	clear:both;
	padding:2px 15px 15px 15px;
	overflow:auto;
	text-align:left;
	line-height:1.4em;
}

#TB_ajaxContent.TB_modal{
	padding:15px;
}

#TB_ajaxContent p{
	padding:5px 0px 5px 0px;
}

#TB_load{
	position: fixed;
	display:none;
	z-index:103;
	top: 50%;
	left: 50%;
	background-color: #E8E8E8;
	border: 1px solid #555;
	margin: -45px 0pt 0pt -125px;
	padding: 40px 15px 15px;
}

* html #TB_load { /* ie6 hack */
position: absolute;
margin-top: expression(0 - parseInt(this.offsetHeight / 2) + (TBWindowMargin = document.documentElement && document.documentElement.scrollTop || document.body.scrollTop) + 'px');
}

#TB_HideSelect{
	z-index:99;
	position:fixed;
	top: 0;
	left: 0;
	background-color:#fff;
	border:none;
	filter:alpha(opacity=0);
	-moz-opacity: 0;
	opacity: 0;
	height:100%;
	width:100%;
}

* html #TB_HideSelect { /* ie6 hack */
     position: absolute;
     height: expression(document.body.scrollHeight > document.body.offsetHeight ? document.body.scrollHeight : document.body.offsetHeight + 'px');
}

#TB_iframeContent{
	clear:both;
	border:none;
	margin-bottom:-1px;
	_margin-bottom:1px;
}

.tb-close-icon {
	height: 15px;
	width: 15px;
}

@media print,
  (-o-min-device-pixel-ratio: 5/4),
  (-webkit-min-device-pixel-ratio: 1.25),
  (min-resolution: 120dpi) {
	.tb-close-icon {
		background-size: 15px;
	}
}/**
 * JS for Pressing Matters
 */


#dashboard_your_stuff .inside ul li, li.moderationqueue {
	border-bottom: 1px solid #dfdfdf;
	border-top: 1px solid #fff;
	padding: 10px;
	margin: 0px -10px;
	background-repeat: no-repeat;
	background-position: top right;
}
#dashboard_your_stuff li {
	overflow: hidden;
	/*padding-left: 34px !important;
	padding-right: 34px !important; */
}
#dashboard_your_stuff li.moderationqueue {
	padding-left: 34px !important;
	/*padding-right: 10px !important; */
}
#dashboard_your_stuff .inside li.date {
	margin: 0 0 10px 0 !important;
	border: 0 !important;
	padding: 0 !important;
}
#dashboard_your_stuff .inside ul>li:nth-child(2) {
	-moz-box-shadow: 0px -1px 0px #dfdfdf;
	-webkit-box-shadow: 0px -1px 0px #dfdfdf;
	box-shadow: 0px -1px 0px #dfdfdf;
}
#dashboard_your_stuff .inside {
	margin-bottom: 0 !important;
	margin-top: 0 !important;
}
#dashboard_your_stuff .inside ul>li:last-child {
	border-bottom: 0 !important;
}

li.awaiting_mod.multi {
	display: none;
}

span.asmod, span.asmodi, span.ascmt, span.aspst {
	display: block;
	width: 24px;
	height: 16px;
	margin-left: -24px;
	float: left;
	/* float: right; */
	background-repeat: no-repeat;
	background-position: left top;
}
li.multi span.asmodi {
	background: none !important;
}

/*li.awaiting_mod, li.moderationqueue {
	background-color: #fefeee;
}
li.awaiting_mod.alt {
	background-color: #fbfbeb;
}*/
li.moderationqueue em {
	font-style: normal;
	display: block;
	float: left;
	padding-left: 15px;
	cursor: pointer;
	-moz-user-select: none;
	-khtml-user-select: none;
	user-select: none;
}
li.moderationqueue.expanded em {
}
li.moderationqueue {
	/* pin */
	/* background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABMAAAATCAYAAAByUDbMAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Q0E1MkUzMzY5QTVBMTFFMDk0NUJCMTg0NzZENkU4QzgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Q0E1MkUzMzc5QTVBMTFFMDk0NUJCMTg0NzZENkU4QzgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDQTUyRTMzNDlBNUExMUUwOTQ1QkIxODQ3NkQ2RThDOCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDQTUyRTMzNTlBNUExMUUwOTQ1QkIxODQ3NkQ2RThDOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PtmBUZoAAACbSURBVHjaYvz//z8DtQATAxXBqGGjhtHDMBZsglOnTt0PZTYC8YHs7GzyXAY0yBhIOUDxfihNumFQg2ajqaknyZtAQxqAVCoQS1EjAlZjkTsPxCZA7EiqYVeBuBtNDuTSs+S4DBTI/UBcCMTPoPgsqd5kFhUVBQX6Mah3VgDxTiD+AUoSIAXEJgtYBJyBhs1ZJC9fJcUQGAAIMAB1RSRKTWOicQAAAABJRU5ErkJggg=='); */
}
span.asmod, span.asmodi {
	/* moderation icon */
	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6Qzg1NjE4NDE5QTU4MTFFMDk0NUJCMTg0NzZENkU4QzgiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6Qzg1NjE4NDI5QTU4MTFFMDk0NUJCMTg0NzZENkU4QzgiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpDODU2MTgzRjlBNTgxMUUwOTQ1QkIxODQ3NkQ2RThDOCIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDpDODU2MTg0MDlBNTgxMUUwOTQ1QkIxODQ3NkQ2RThDOCIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pu3i220AAACZSURBVHjaYvz//z8DJYAFxjh8cM//S1duossfAOIVQHwTykYB2dnZCAOQNDsiqUkAYl0gjgDi/cia9XTUQRQjExZXHUDCIHAHiBuhBsMxzEIWErx7AJsgEwOFYOANwBYGDpQasB8t4L4A8QVcBmMzgBHNNaAIr0c3AJoOCIYByAUzoXHPiIyB6YBxmEQj3AApSTEwJhUABBgAFzIkCrb9j4wAAAAASUVORK5CYII=');
}
span.ascmt {
	/* comment icon */
/*	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTE5RDVEREI5OUFFMTFFMEJGNkREN0VCMzg2NjNEQjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTE5RDVEREM5OUFFMTFFMEJGNkREN0VCMzg2NjNEQjkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMTlENUREOTk5QUUxMUUwQkY2REQ3RUIzODY2M0RCOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxMTlENUREQTk5QUUxMUUwQkY2REQ3RUIzODY2M0RCOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Ph5bceoAAAB9SURBVHjaYvz//z8DJYCJgULAAmNMnTq1Hkg1EKmvITs7uxHEYAR5AUkzI5EG/IcZAnNBw5RvqowkuJwxh+s2yJBGisNgGBgAD0RooJAUC3AXQOO0ASqBDddDDf+PHIXI6YBYG1HSCtAQREokFO9QQygKRKzhwzjguREgwAAKXjNo75VzygAAAABJRU5ErkJggg==');*/
}
span.aspst {
	/* post icon */
/*	background-image: url('data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyJpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MTE5RDVEREY5OUFFMTFFMEJGNkREN0VCMzg2NjNEQjkiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MTE5RDVERTA5OUFFMTFFMEJGNkREN0VCMzg2NjNEQjkiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDoxMTlENURERDk5QUUxMUUwQkY2REQ3RUIzODY2M0RCOSIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDoxMTlENURERTk5QUUxMUUwQkY2REQ3RUIzODY2M0RCOSIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/Pu9ExzYAAAB0SURBVHjaYvz//z8DJYCJgULAgsyZOnUqVudkZ2czkuICRhiGacRlMClecMRlCBMOJ4MxEjiAyxBiXQDSuB+bdwgaAA2HRiSMOxawAaCNIKoBSaieaBdANROfDrAFJiFDKU6J1E3KsCgjxu/wZDvguREgwAAtuijgvc4I9AAAAABJRU5ErkJggg==');*/
}
/*------------------------------------------------------------------------------

Last merged revision: 24790

Hello, this is the main WordPress admin CSS file.
All the important stuff is in here.


TABLE OF CONTENTS:
------------------
 1.0 - Text Elements
 2.0 - Forms
 3.0 - Actions
 4.0 - Notifications
 5.0 - TinyMCE
 6.0 - Admin Header
	6.1 - Screen Options Tabs
	6.2 - Help Menu
 7.0 - Main Navigation
 8.0 - Layout Blocks
 9.0 - Dashboard
10.0 - List Posts
	10.1 - Inline Editing
11.0 - Write/Edit Post Screen
	11.1 - Custom Fields
	11.2 - Post Revisions
	11.3 - Featured Images
	11.4 - Post Format Selection
12.0 - Categories
13.0 - Tags
14.0 - Media Screen
	14.1 - Media Library
	14.2 - Image Editor
15.0 - Comments Screen
16.0 - Themes
	16.1 - Custom Header
	16.2 - Custom Background
	16.3 - Tabbed Admin Screen Interface
17.0 - Plugins
18.0 - Users
19.0 - Tools
20.0 - Settings
21.0 - Admin Footer
22.0 - About Pages
23.0 - Full Overlay w/ Sidebar
24.0 - Customize Loader
25.0 - Misc

------------------------------------------------------------------------*/

/* 2 column liquid layout */
#wpwrap {
	height: auto;
	min-height: 100%;
	width: 100%;
	position: relative;
}

#wpcontent {
	height: 100%;
}

#wpcontent,
#wpfooter {
	margin-left: 170px;
}

.folded #wpcontent,
.folded #wpfooter {
	margin-left: 56px;
}

#wpbody-content {
	padding-bottom: 65px;
	float: left;
	width: 100%;
}

#adminmenuback,
#adminmenuwrap,
#adminmenu,
#adminmenu .wp-submenu {
	width: 150px;
}

#adminmenuback {
	position: absolute;
	top: 0;
	bottom: 0;
	z-index: -1;
}

#adminmenu {
	clear: left;
	margin: 12px 0 0;
	padding: 0;
	list-style: none;
}

.folded #adminmenuback,
.folded #adminmenuwrap,
.folded #adminmenu,
.folded #adminmenu li.menu-top {
	width: 36px;
}

/* inner 2 column liquid layout */

.inner-sidebar {
	float: right;
	clear: right;
	display: none;
	width: 281px;
	position: relative;
}

.columns-2 .inner-sidebar {
	margin-right: auto;
	width: 286px;
	display: block;
}

.inner-sidebar #side-sortables,
.columns-2 .inner-sidebar #side-sortables {
	min-height: 300px;
	width: 280px;
	padding: 0;
}

.has-right-sidebar .inner-sidebar {
	display: block;
}

.has-right-sidebar #post-body {
	float: left;
	clear: left;
	width: 100%;
	margin-right: -2000px;
}

.has-right-sidebar #post-body-content {
	margin-right: 300px;
	float: none;
	width: auto;
}

/* 2 columns main area */

#col-container,
#col-left,
#col-right {
	overflow: hidden;
	padding: 0;
	margin: 0;
}

#col-left {
	width: 35%;
}

#col-right {
	float: right;
	clear: right;
	width: 65%;
}

.col-wrap {
	padding: 0 7px;
}

/* utility classes */
.alignleft {
	float: left;
}

.alignright {
	float: right;
}

.textleft {
	text-align: left;
}

.textright {
	text-align: right;
}

.clear {
	clear: both;
}

/* Hide visually but not from screen readers */
.screen-reader-text,
.screen-reader-text span,
.ui-helper-hidden-accessible {
	position: absolute;
	left: -1000em;
	top: -1000em;
	height: 1px;
	width: 1px;
	overflow: hidden;
}

.screen-reader-shortcut {
	position: absolute;
	top: -1000em;
}

.screen-reader-shortcut:focus {
	left: 6px;
	top: -21px;
	height: auto;
	width: auto;
	display: block;
	font-size: 14px;
	font-weight: 600;
	padding: 15px 23px 14px;
	background: #f1f1f1;
	color: #21759b;
	border-radius: 3px;
	z-index: 100000;
	line-height: normal;
	-webkit-box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	box-shadow: 0 0 2px 2px rgba(0,0,0,.6);
	text-decoration: none;
}

.hidden,
.js .closed .inside,
.js .hide-if-js,
.no-js .hide-if-no-js,
.js.wp-core-ui .hide-if-js,
.js .wp-core-ui .hide-if-js,
.no-js.wp-core-ui .hide-if-no-js,
.no-js .wp-core-ui .hide-if-no-js {
	display: none;
}

/* include margin and padding in the width calculation of input and textarea */
input[type="text"],
input[type="password"],
input[type="number"],
input[type="search"],
input[type="email"],
input[type="url"],
textarea {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box; /* ie8 only */
	box-sizing: border-box;
	-webkit-border-radius: 0;
	border-radius: 0;
}

input[type="checkbox"],
input[type="radio"] {
	border-width: 1px;
	border-style: solid;
	clear: none;
	cursor: pointer;
	display: inline-block;
	line-height: 0;
	height: 16px;
	margin: -4px 4px 0 0;
	outline: 0;
	padding: 0 !important;
	text-align: center;
	vertical-align: middle;
	width: 16px;
	-webkit-appearance: none;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

td > input[type="checkbox"],
.wp-admin p input[type=checkbox],
.wp-admin p input[type=radio] {
	margin-top: 0;
}

.wp-admin p label input[type=checkbox] {
	margin-top: -4px;
}

.wp-admin p label input[type=radio] {
	margin-top: -2px;
}

input[type="checkbox"] {
	border-radius: 0;
}

input[type=radio] {
	border-radius: 50%;
	margin-right: 4px;
	line-height: 10px;
}

input[type=checkbox]:checked:before {
	content: '\f147';
	display: inline-block;
	float: left;
	font: normal 21px/1 'dashicons';
	speak: none;
	vertical-align: middle;
	margin: -3px 0 0 -4px;
	-webkit-font-smoothing: antialiased;
}

input[type=radio]:checked:before {
	content: '\2022';
	text-indent: -9999px;
	border-radius: 50px;
	display: inline-block;
	float: left;
	font-size: 24px;
	vertical-align: middle;
	width: 6px;
	height: 6px;
	margin: 4px;
	line-height: 16px;
}

@-moz-document url-prefix() {
	input[type=checkbox],
	input[type=radio],
	.form-table input.tog {
		margin-bottom: -1px;
	}
}

/* Selects */

#wpbody select {
	line-height: 24px;
	height: 24px;
}

/* Search */
input[type="search"] {
	-webkit-appearance: textfield;
}

input[type="search"]::-webkit-search-decoration {
	display: none;
}

/* general */
html,
body {
	height: 100%;
	margin: 0;
	padding: 0;
}

body {
	font-family: "Open Sans", sans-serif;
	font-size: 13px;
	line-height: 1.4em;
	min-width: 600px;
}

body.iframe {
	min-width: 0;
	padding-top: 1px;
}

body.login {
	background: #fbfbfb;
	min-width: 0;
}

iframe,
img {
	border: 0;
}

td,
textarea,
input,
select,
button {
	font-family: inherit;
	font-size: inherit;
	font-weight: inherit;
}

td,
textarea {
	line-height: inherit;
}

textarea {
	overflow: auto;
}

textarea,
input,
select {
	font-size: 14px;
	padding: 2px 3px 2px 6px;
	line-height: 15px;
}

a,
input[type="text"],
input[type="password"],
input[type="number"],
input[type="search"],
input[type="email"],
input[type="url"],
select,
textarea,
div {
	outline: 0;
}

.wp-admin input[type="file"] {
	border: none;
	background: none;
	padding: 8px 0 0;
}

a:focus,
a:active {
	outline: thin dotted;
}

#adminmenu a:focus,
#adminmenu a:active,
.screen-reader-text:focus {
	outline: none;
}

blockquote,
q {
	quotes: none;
}

blockquote:before,
blockquote:after,
q:before,
q:after {
	content: '';
	content: none;
}

p,
.wp_attachment_details label[for="content"] {
	font-size: 14px;
	line-height: 1.5;
	margin: 1em 0;
}

blockquote {
	margin: 1em;
}

label {
	cursor: pointer;
}

li,
dd {
	margin-bottom: 6px;
}

input,
select {
	margin: 1px;
	padding: 3px;
}

h1,
h2,
h3,
h4,
h5,
h6 {
	display: block;
	font-weight: 600;
}

h1 {
	font-size: 2em;
	margin: .67em 0;
}

h2 {
	font-size: 1.5em;
	margin: .83em 0;
}

h3 {
	font-size: 1.3em;
	margin: 1em 0;
}

h4 {
	font-size: 1em;
	margin: 1.33em 0;
}

h5 {
	font-size: 0.83em;
	margin: 1.67em 0;
}

h6 {
	font-size: 0.67em;
	margin: 2.33em 0;
}

ul,
ol {
	padding: 0;
}

ul {
	list-style: none;
}

ol {
	list-style-type: decimal;
	margin-left: 2em;
}

ul.ul-disc {
	list-style: disc outside;
}

ul.ul-square {
	list-style: square outside;
}

ol.ol-decimal {
	list-style: decimal outside;
}

ul.ul-disc,
ul.ul-square,
ol.ol-decimal {
	margin-left: 1.8em;
}

ul.ul-disc > li,
ul.ul-square > li,
ol.ol-decimal > li {
	margin: 0 0 0.5em;
}

.code,
code {
	font-family: Consolas, Monaco, monospace;
}

input.code {
	padding-bottom: 3px;
	padding-top: 6px;
}

kbd,
code {
	padding: 1px 3px;
	margin: 0 1px;
	font-size: 13px;
}

.subsubsub {
	list-style: none;
	margin: 8px 0 0;
	padding: 0;
	font-size: 13px;
	float: left;
}

.subsubsub a {
	line-height: 2;
	padding: .2em;
	text-decoration: none;
}

.subsubsub a .count,
.subsubsub a.current .count {
	color: #999;
	font-weight: normal;
}

.subsubsub a.current {
	font-weight: 600;
	border: none;
}

.subsubsub li {
	display: inline-block;
	margin: 0;
	padding: 0;
	white-space: nowrap;
}

textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select,
.tablenav-pages span.current,
#titlediv #title,
#postcustomstuff table,
#postcustomstuff input,
#postcustomstuff textarea,
.imgedit-menu div,
.plugin-update-tr .update-message,
#poststuff .inside .the-tagcloud,
#menu-management .menu-edit,
.nav-menus-php .list-container,
.menu-item-handle,
.link-to-original,
.nav-menus-php .major-publishing-actions .form-invalid,
#TB_window,
.tbtitle,
.highlight,
.editwidget .widget-inside {
	border-width: 1px;
	border-style: solid;
}

/* .widefat - main style for tables */
.widefat {
	border-spacing: 0;
	width: 100%;
	clear: both;
	margin: 0;
}

.widefat * {
	word-wrap: break-word;
}

.widefat a {
	text-decoration: none;
}

.widefat td,
.widefat th {
	padding: 8px 10px;
}
.widefat tfoot th {
	border-bottom: none;
}

.widefat .no-items td {
	border-bottom-width: 0;
}

.widefat td {
	vertical-align: top;
}

.widefat td,
.widefat td p,
.widefat td ol,
.widefat td ul {
	font-size: 13px;
	line-height: 1.5em;
}

.widefat th {
	text-align: left;
	line-height: 1.3em;
	font-size: 14px;
}

.widefat th input {
	margin: 0 0 0 8px;
	padding: 0;
	vertical-align: text-top;
}

.widefat .check-column {
	width: 2.2em;
	padding: 6px 0 25px;
	vertical-align: top;
}

.widefat th input[type=checkbox] {
	margin-top: -1px;
}

.widefat tbody th.check-column {
	padding: 9px 0 22px;
}

.widefat.media .check-column {
	padding-top: 8px;
}

.widefat thead th.check-column,
.widefat tbody th.check-column,
.widefat tfoot th.check-column {
	padding: 11px 0 0 3px;
}

.widefat thead th.check-column {
	padding-top: 10px;
}

#update-plugins-table tbody th.check-column,
.plugins tbody th.check-column,
.plugins tbody,
.plugins .inactive.update th.check-column {
	padding: 8px 0 0 2px;
}

.plugins tbody th.check-column input[type=checkbox] {
	margin-top: 4px;
}

#update-plugins-table tbody td p {
	margin-top: 0;
}

#update-plugins-table tbody td p strong {
	font-size: 14px;
}

.plugins thead th.check-column,
.plugins tfoot th.check-column,
.plugins .inactive th.check-column,
#update-plugins-table thead th.check-column,
#update-plugins-table tfoot th.check-column {
	padding-left: 6px;
}

#update-plugins-table thead th.check-column,
#update-plugins-table tfoot th.check-column {
	padding-top: 11px;
}

.update-php div.updated,
.update-php div.error {
	margin-left: 0;
}

.no-js .widefat thead .check-column input,
.no-js .widefat tfoot .check-column input {
	display: none;
}

.widefat .num,
.column-comments,
.column-links,
.column-posts {
	text-align: center;
}

.widefat th#comments {
	vertical-align: middle;
}

.wrap {
	margin: 10px 20px 0 2px;
}

div.updated,
div.error {
	padding: 0 0.6em;
	margin: 5px 15px 2px;
}

div.updated p,
div.error p {
	margin: 0.5em 0;
	padding: 2px;
}

.wrap div.updated,
.wrap div.error,
.media-upload-form div.error {
	margin: 5px 0 15px;
}

div.updated,
.login .message,
.press-this #message {
	border: none;
	padding: 1px 12px;
}

div.error,
.login #login_error {
	border: none;
}

div.error {
	padding: 1px 12px;
}

.wrap h2,
.subtitle {
	font-weight: normal;
	margin: 0;
}

.wrap h2 {
	font-size: 23px;
	font-weight: 400;
	padding: 9px 15px 4px 0;
	line-height: 29px;
}

.subtitle {
	font-size: 14px;
	padding-left: 25px;
}

.wrap .add-new-h2,
.wrap .add-new-h2:active,
#add-new-comment a {
	font-family: "Open Sans", sans-serif;
	border: none;
	border-radius: 2px;
	text-shadow: none;
	font-weight: 600;
	font-size: 13px;
	margin-left: 4px;
	padding: 4px 8px;
	position: relative;
	text-decoration: none;
	top: -3px;
}

.wrap h2.long-header {
	padding-right: 0;
}

html,
.wp-dialog {
	background-color: #fff;
}

textarea,
input[type="text"],
input[type="password"],
input[type="file"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
select {
	background-color: #fff;
	color: #333;
}

select {
	color: #000;
}

select[disabled] {
	color: #7f7f7f;
}

select:focus {
	border-color: #aaa;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="file"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
select:focus {
	-webkit-box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
	box-shadow: 1px 1px 2px rgba(0,0,0,0.1);
}

input[readonly] {
	background-color: #eee;
}

:-moz-placeholder,
.wp-core-ui :-moz-placeholder {
   color: #a9a9a9;
}

/*------------------------------------------------------------------------------
  1.0 - Text Styles
------------------------------------------------------------------------------*/

div.sidebar-name h3,
#menu-management .nav-tab,
#dashboard_plugins h5,
a.rsswidget,
#dashboard_right_now td.b,
#dashboard-widgets h4,
.tool-box .title,
#poststuff h3,
.metabox-holder h3,
.pressthis a,
#your-profile legend,
.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title,
.tablenav .displaying-num,
.widefat th,
.quicktags,
.search {
	font-family: "Open Sans", sans-serif;
}

.widget .widget-top,
.postbox h3,
.stuffbox h3,
.control-section .accordion-section-title,
h3.dashboard-widget-title,
h3.dashboard-widget-title span,
h3.dashboard-widget-title small,
.sidebar-name,
#nav-menu-header,
#nav-menu-footer,
.menu-item-handle,
.checkbox,
.side-info,
#your-profile #rich_editing,
.widefat thead th,
.widefat tfoot th {
	line-height: 1.4em;
}

h2 .nav-tab,
.wrap h2,
.subtitle,
.login form .input {
	font-family: "Open Sans", sans-serif;
}

.quicktags,
.search {
	font-size: 12px;
}

.icon32 {
	display: none;
}

.icon16 {
	height: 18px;
	width: 18px;
	padding: 6px 6px;
	margin: -6px 0 0 -8px;
	float: left;
}

/* New Menu icons */

.icon16:before {
	font: normal 20px/1 'dashicons' !important;
	speak: none;
	padding: 6px 0;
	height: 34px;
	width: 20px;
	display: inline-block;
	-webkit-font-smoothing: antialiased;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.icon16.icon-dashboard:before,
#adminmenu .menu-icon-dashboard div.wp-menu-image:before {
	content: '\f102';
	margin-top: -1px;
}

.icon16.icon-post:before,
#adminmenu .menu-icon-post div.wp-menu-image:before {
	content: '\f109';
}

.icon16.icon-media:before,
#adminmenu .menu-icon-media div.wp-menu-image:before {
	content: '\f104';
}

.icon16.icon-links:before,
#adminmenu .menu-icon-links div.wp-menu-image:before {
	content: '\f103';
}

.icon16.icon-page:before,
#adminmenu .menu-icon-page div.wp-menu-image:before {
	content: '\f105';
}

.icon16.icon-comments:before,
#adminmenu .menu-icon-comments div.wp-menu-image:before {
	content: '\f101';
	margin-top: 1px;
}

.icon16.icon-appearance:before,
#adminmenu .menu-icon-appearance div.wp-menu-image:before {
	content: '\f100';
}

.icon16.icon-plugins:before,
#adminmenu .menu-icon-plugins div.wp-menu-image:before {
	content: '\f106';
}

.icon16.icon-users:before,
#adminmenu .menu-icon-users div.wp-menu-image:before {
	content: '\f110';
}

.icon16.icon-tools:before,
#adminmenu .menu-icon-tools div.wp-menu-image:before {
	content: '\f107';
}

.icon16.icon-settings:before,
#adminmenu .menu-icon-settings div.wp-menu-image:before {
	content: '\f108';
}

.icon16.icon-site:before,
#adminmenu .menu-icon-site div.wp-menu-image:before {
	content: '\f112'
}

.icon16.icon-generic:before,
#adminmenu .menu-icon-generic div.wp-menu-image:before {
	content: '\f111';
}

.key-labels label {
	line-height: 24px;
}

strong, b {
	font-weight: 600;
}

.pre {
	/* https://developer.mozilla.org/en-US/docs/CSS/white-space */
	white-space: pre-wrap; /* css-3 */
	word-wrap: break-word; /* IE 5.5 - 7 */
}

.howto {
	font-style: italic;
	display: block;
	font-family: "Open Sans", sans-serif;
}

p.install-help {
	margin: 8px 0;
	font-style: italic;
}

.no-break {
	white-space: nowrap;
}

/*------------------------------------------------------------------------------
  2.0 - Forms
------------------------------------------------------------------------------*/


.wp-admin select {
	padding: 2px;
	height: 2em;
}

.wp-admin select[multiple] {
	height: auto;
}

.submit {
	padding: 1.5em 0;
	margin: 5px 0;
	-webkit-border-bottom-left-radius: 3px;
	-webkit-border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
}

form p.submit a.cancel:hover {
	text-decoration: none;
}

p.submit {
	text-align: left;
	max-width: 100%;
	border-top-width: 1px;
	border-top-style: solid;
	margin-top: 20px;
	padding-top: 10px;
}

.textright p.submit {
	border: none;
	text-align: right;
}

table.form-table + p.submit,
table.form-table + input + p.submit,
table.form-table + input + input + p.submit {
	border-top: none;
	padding-top: 0;
}

table.widefat span.delete a:hover,
table.widefat span.trash a:hover,
table.widefat span.spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover,
#dashboard_recent_comments .spam a:hover,
.plugins a.delete:hover,
#all-plugins-table .plugins a.delete:hover,
#search-plugins-table .plugins a.delete:hover,
.submitbox .submitdelete:hover,
#media-items a.delete:hover,
#media-items a.delete-permanently:hover,
#nav-menu-footer .menu-delete:hover {
	text-decoration: none;
	border: none;
}

#minor-publishing-actions input,
#major-publishing-actions input,
#minor-publishing-actions .preview {
	text-align: center;
}

textarea.all-options,
input.all-options {
	width: 250px;
}

input.large-text,
textarea.large-text {
	width: 99%;
}

input.regular-text,
#adduser .form-field input {
	width: 25em;
}

input.small-text {
	width: 50px;
	padding: 1px 6px;
}

input[type="number"].small-text {
	width: 60px;
}

#doaction,
#doaction2,
#post-query-submit {
	margin: 1px 8px 0 0;
}

.tablenav #changeit,
.tablenav #delete_all,
.tablenav #clear-recent-list {
	margin-top: 1px;
}

.tablenav .actions select {
	float: left;
	margin-right: 6px;
	max-width: 200px;
}

.ie8 .tablenav .actions select {
	width: 155px;
}

.ie8 .tablenav .actions select#cat {
	width: 200px;
}

#timezone_string option {
	margin-left: 1em;
}

label,
#your-profile label + a {
	vertical-align: middle;
}

fieldset label,
#your-profile label + a {
	vertical-align: baseline;
}

#misc-publishing-actions label {
	vertical-align: baseline;
}

#misc-publishing-actions label[for="post_status"]:before {
	content: '\f173';
	display: inline-block;
	font: normal 20px/1 'dashicons';
	speak: none;
	left: -1px;
	padding: 0 6px 0 0;
	position: relative;
	top: 0;
	text-decoration: none !important;
	vertical-align: top;

	-webkit-font-smoothing: antialiased;
}

#pass-strength-result {
	border-style: solid;
	border-width: 1px;
	float: left;
	margin: 13px 5px 5px 1px;
	padding: 3px 5px;
	text-align: center;
	width: 200px;
	display: none;
}
.indicator-hint {
	padding-top: 8px;
}

p.search-box {
	float: right;
	margin: 0;
}

.search-box input[name="s"],
#search-plugins input[name="s"],
.tagsdiv .newtag {
	float: left;
	height: 24px;
	margin: 0 4px 0 0;
}

input[type="text"].ui-autocomplete-loading {
	visibility: visible;
}

ul#add-to-blog-users {
	margin: 0 0 0 14px;
}

.ui-autocomplete-input.open {
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.ui-autocomplete {
	padding: 0;
	margin: 0;
	list-style: none;
	position: absolute;
	z-index: 10000;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
	border-width: 1px;
	border-style: solid;
}

.ui-autocomplete li {
	margin-bottom: 0;
	white-space: nowrap;
	text-align: left;
}

.ui-autocomplete li a {
	display: block;
	height: 100%;
	padding: 4px 10px;
}

.ui-autocomplete li a.ui-state-focus {
	cursor: pointer;
}

/*------------------------------------------------------------------------------
  3.0 - Actions
------------------------------------------------------------------------------*/

#major-publishing-actions {
	padding: 10px 10px 8px;
	clear: both;
	border-top: 1px solid #f5f5f5;
	margin-top: -2px;
}

#delete-action {
	line-height: 25px;
	vertical-align: middle;
	text-align: left;
	float: left;
}

#publishing-action {
	text-align: right;
	float: right;
	line-height: 23px;
}

#publishing-action .spinner {
	float: left;
}

#misc-publishing-actions {
	padding: 6px 0 0;
}

.misc-pub-section {
	padding: 6px 10px 8px;
	border-width: 1px 0;
	border-style: solid;
}

.misc-pub-section:first-child {
	border-top-width: 0;
}

.misc-pub-section-last {
	border-bottom-width: 0;
}

#minor-publishing-actions {
	padding: 10px 10px 2px 8px;
	text-align: right;
}

#minor-publishing {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	-webkit-box-shadow: 0 1px 0 #fff;
	box-shadow: 0 1px 0 #fff;
}

#save-post {
	float: left;
}

.preview {
	float: right;
}

#sticky-span {
	margin-left: 18px;
}

.side-info {
	margin: 0;
	padding: 4px;
	font-size: 11px;
}

.side-info h5 {
	padding-bottom: 7px;
	font-size: 14px;
	margin: 12px 2px 5px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.side-info ul {
	margin: 0;
	padding-left: 18px;
	list-style: square;
}

.approve,
.unapproved .unapprove {
	display: none;
}

.unapproved .approve,
.spam .approve,
.trash .approve {
	display: inline;
}

td.action-links,
th.action-links {
	text-align: right;
}


/*------------------------------------------------------------------------------
  4.0 - Notifications
------------------------------------------------------------------------------*/

#update-nag,
.update-nag {
	display: inline-block;
	line-height: 19px;
	padding: 11px 15px;
	font-size: 14px;
	text-align: left;
	margin: 25px 20px 0 2px;
}

.plugins .plugin-update {
	padding: 0;
}

.plugin-update .update-message {
	margin: 0 10px 8px 31px;
	font-weight: 600;
}

ul#dismissed-updates {
	display: none;
}

form.upgrade {
	margin-top: 8px;
}

form.upgrade .hint {
	font-style: italic;
	font-size: 85%;
	margin: -0.5em 0 2em 0;
}

.update-php .spinner {
	float: none;
	margin: -4px 0;
}

#ajax-loading,
.ajax-loading,
.ajax-feedback,
.imgedit-wait-spin,
.list-ajax-loading { /* deprecated */
	visibility: hidden;
}

#ajax-response.alignleft {
	margin-left: 2em;
}

/*------------------------------------------------------------------------------
  5.0 - TinyMCE
------------------------------------------------------------------------------*/

/* nothing? */

/*------------------------------------------------------------------------------
  6.0 - Admin Header
------------------------------------------------------------------------------*/
#adminmenu a,
#sidemenu a,
#taglist a,
#catlist a {
	text-decoration: none;
}

/*------------------------------------------------------------------------------
  6.1 - Screen Options Tabs
------------------------------------------------------------------------------*/

#screen-options-wrap,
#contextual-help-wrap {
	margin: 0;
	padding: 8px 20px 12px;
	position: relative;
}

#contextual-help-wrap {
	overflow: auto;
	margin-left: 0 !important;
}

#screen-meta .screen-reader-text {
	visibility: hidden;
}

#screen-meta-links {
	margin: 0 20px 0 0;
}

#screen-meta-links a:focus {
	-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,0.4);
	box-shadow: 1px 1px 1px rgba(0,0,0,0.4);
	outline: none;
}

/* screen options and help tabs revert */
#screen-meta {
	display: none;
	font-size: 14px;
	margin: 0 20px -2px 0px;
	position: relative;
}

#screen-options-link-wrap,
#contextual-help-link-wrap {
	float: right;
	height: 23px;
	padding: 3px 6px;
	margin: 0 0 0 6px;
	font-family: "Open Sans", sans-serif;
}

#screen-meta-links .screen-meta-toggle {
	position: relative;
	top: 0;
}

#screen-meta-links a.show-settings {
	display: block;
	font-size: 14px;
	height: 22px;
	line-height: 22px;
	padding: 1px 0 0 10px;
	text-decoration: none;
	z-index: 1;
}

#screen-meta-links a:after {
	right: 0;
	content: '\f140';
	font: normal 20px/1 'dashicons';
	speak: none;
	display: inline-block;
	padding: 0 5px 0 0;
	bottom: 2px;
	position: relative;
	vertical-align: bottom;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

#screen-meta-links a.screen-meta-active:after {
	content: '\f142';
}

#screen-meta-links a.show-settings:hover {
	text-decoration: none;
}
/* end screen options and help tabs */

.toggle-arrow {
	background-repeat: no-repeat;
	background-position: top left;
	background-color: transparent;
	height: 22px;
	line-height: 22px;
	display: block;
}

.toggle-arrow-active {
	background-position: bottom left;
}

#screen-options-wrap h5,
#contextual-help-wrap h5 {
	margin: 8px 0;
	font-size: 13px;
}

.metabox-prefs label {
	display: inline-block;
	padding-right: 15px;
	white-space: nowrap;
	line-height: 30px;
}

.metabox-prefs label input[type=checkbox] {
	margin-top: -4px;
	margin-right: 6px;
}

.metabox-prefs label input {
	margin: 0 5px 0 2px;
}

.metabox-prefs .columns-prefs label input {
	margin: 0 2px;
}

.metabox-prefs label a {
	display: none;
}

/*------------------------------------------------------------------------------
  6.2 - Help Menu
------------------------------------------------------------------------------*/

#contextual-help-wrap {
	padding: 0;
}

#contextual-help-columns {
	position: relative;
}

#contextual-help-back {
	position: absolute;
	top: 0;
	bottom: 0;
	left: 150px;
	right: 170px;
	border-width: 0 1px;
	border-style: solid;
}

#contextual-help-wrap.no-sidebar #contextual-help-back {
	right: 0;

	border-right-width: 0;
	-webkit-border-bottom-right-radius: 2px;
	border-bottom-right-radius: 2px;
}

.contextual-help-tabs {
	float: left;
	width: 150px;
	margin: 0;
}

.contextual-help-tabs ul {
	margin: 1em 0;
}

.contextual-help-tabs li {
	margin-bottom: 0;
	list-style-type: none;
	border-style: solid;
	border-width: 1px 0;
	border-color: transparent;
}

.contextual-help-tabs a {
	display: block;
	padding: 5px 5px 5px 12px;
	line-height: 18px;
	text-decoration: none;
}

.contextual-help-tabs .active {
	padding: 0;
	margin: 0 -1px 0 0;
	border-width: 0 0 0 2px;
	border-style: solid;
}

.contextual-help-tabs .active a {
	border-style: solid;
	border-width: 1px 0 1px 0;
}

.contextual-help-tabs-wrap {
	padding: 0 20px;
	overflow: auto;
}

.help-tab-content {
	display: none;
	margin: 0 22px 12px 0;
	line-height: 1.6em;
}

.help-tab-content.active {
	display: block;
}

.help-tab-content ul li {
	list-style-type: disc;
	margin-left: 18px;
}

.contextual-help-sidebar {
	width: 150px;
	float: right;
	padding: 0 8px 0 12px;
	overflow: auto;
}


/*------------------------------------------------------------------------------
  7.0 - Main Navigation (Left Menu)
------------------------------------------------------------------------------*/

#adminmenuwrap {
	position: relative;
	float: left;
}

#adminmenushadow {
	position: absolute;
	top: 0;
	right: 0;
	bottom: 0;
	width: 6px;
	z-index: 20;
}

/* side admin menu */
#adminmenu * {
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

#adminmenu li {
	margin: 0;
	padding: 0;
	cursor: pointer;
}

#adminmenu a {
	display: block;
	line-height: 18px;
	padding: 2px 5px;
}

#adminmenu li.menu-top {
	border: none;
	min-height: 34px;
	position: relative;
}

#adminmenu .wp-submenu {
	list-style: none;
	position: absolute;
	top: -1000em;
	left: 150px;
	overflow: visible;
	word-wrap: break-word;
}

#adminmenu .wp-submenu,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	margin-top: 1px;
	margin-right: -1px;
	padding: 7px 0 8px;
	z-index: 9999;
}

.js #adminmenu .sub-open,
.js #adminmenu .opensub .wp-submenu,
#adminmenu a.menu-top:focus + .wp-submenu,
.no-js li.wp-has-submenu:hover .wp-submenu {
	top: -1px;
}

#adminmenu .wp-has-current-submenu .wp-submenu,
.no-js li.wp-has-current-submenu:hover .wp-submenu,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu {
	position: relative;
	z-index: 3;
	top: auto;
	left: auto;
	right: auto;
	bottom: auto;
	border: 0 none;
	margin-top: 0;

	-webkit-box-shadow: none;
	box-shadow: none;
}

.folded #adminmenu .wp-submenu.sub-open,
.folded #adminmenu .opensub .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
.folded #adminmenu .wp-has-current-submenu.opensub .wp-submenu,
.folded #adminmenu a.menu-top:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu a.menu-top:focus + .wp-submenu,
.no-js.folded #adminmenu .wp-has-submenu:hover .wp-submenu  {
	top: -1px;
	left: 36px;
	margin-top: 2px;
}

.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	position: absolute;
	top: -1000em;
}

#adminmenu .wp-not-current-submenu .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	min-width: 150px;
	width: auto;
}

#adminmenu .wp-submenu a {
	font-size: 13px;
	line-height: 1.2;
	margin: 0;
	padding: 6px 0;
}

#adminmenu .wp-not-current-submenu li > a,
.folded #adminmenu .wp-has-current-submenu li > a {
	padding-right: 16px;
	padding-left: 14px;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#adminmenu .wp-has-current-submenu ul > li > a,
.folded #adminmenu li.menu-top .wp-submenu > li > a {
	padding: 6px 12px;
}

#adminmenu a.menu-top,
#adminmenu .wp-submenu-head {
	font-size: 14px;
	font-weight: 400;
	line-height: 18px;
	padding: 0;
}

#adminmenu .wp-submenu-head,
.folded #adminmenu .wp-menu-name {
	display: none;
}

.folded #adminmenu .wp-submenu-head {
	display: block;
}

#adminmenu .wp-submenu li {
	padding: 0;
	margin: 0;
	overflow: hidden;
}

#adminmenu .wp-menu-image img {
	padding: 7px 0 0 7px;
	opacity: 0.6;
	filter: alpha(opacity=60);
}

#adminmenu div.wp-menu-name {
	padding: 7px 12px 7px 0;
}

#adminmenu div.wp-menu-image {
	float: left;
	margin: 0;
	width: 34px;
	height: 30px;
	text-align: center;
}

#adminmenu div.wp-menu-image:before {
	font: normal 20px/1 'dashicons' !important;
	speak: none;
	color: #999;
	padding: 6px 0;
	height: 34px;
	width: 20px;
	display: inline-block;
	-webkit-font-smoothing: antialiased;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.folded #adminmenu div.wp-menu-image {
	height: 30px;
	width: 34px;
	position: absolute;
	z-index: 25;
}

.folded #adminmenu a.menu-top {
	height: 34px;
}

/* A new arrow */

.wp-menu-arrow {
	display: none !important;
}

ul#adminmenu a.wp-has-current-submenu {
	position: relative;
}

ul#adminmenu a.wp-has-current-submenu:after,
ul#adminmenu > li.current > a.current:after {
	right: 0;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-width: 8px;
	top: 50%;
	margin-top: -8px;
}

.folded ul#adminmenu li:hover a.wp-has-current-submenu:after {
	display: none;
}

.folded ul#adminmenu a.wp-has-current-submenu:after,
.folded ul#adminmenu > li a.current:after {
	border-width: 4px;
	margin-top: -4px;
}

/* flyout menu arrow */
#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	right: 0;
	border: solid transparent;
	content: " ";
	height: 0;
	width: 0;
	position: absolute;
	pointer-events: none;
	border-width: 8px;
	top: 10px;
	z-index: 10000;
}

.folded ul#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-width: 4px;
	margin-top: -4px;
	top: 18px;
}

/* ensure that wp-submenu's box shadow doesn't appear on top of the focused menu item's background. */
#adminmenu li.menu-top:hover,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top:focus {
	position: relative;
	text-shadow:none !important;
}

.folded #adminmenu li.menu-top:hover,
.folded #adminmenu li.opensub > a.menu-top,
.folded #adminmenu li > a.menu-top:focus {
	z-index: 10000;
}

#adminmenu li.menu-top:hover .wp-menu-image img,
#adminmenu li.wp-has-current-submenu .wp-menu-image img {
	opacity: 1;
	filter: alpha(opacity=100);
}

#adminmenu li.wp-menu-separator {
	height: 3px;
	padding: 0;
	margin: 0 0 6px 0;
	border-width: 1px 0;
	border-style: solid;
	cursor: inherit;
}

#adminmenu div.separator {
	height: 1px;
	padding: 0;
	border-width: 1px 0 0 0;
	border-style: solid;
}

#adminmenu .wp-submenu .wp-submenu-head {
	font-weight: 400;
	font-size: 14px;
	padding: 8px 4px 8px 11px;
	margin: -8px 0px 4px;
}

#adminmenu li.current,
.folded #adminmenu li.wp-menu-open {
	border: 0 none;
}

.folded #adminmenu li.wp-has-current-submenu {
	margin-bottom: 1px;
}

.folded #adminmenu .wp-has-current-submenu.menu-top-last {
	margin-bottom: 0;
}

#adminmenu .awaiting-mod,
#adminmenu span.update-plugins,
#sidemenu li a span.update-plugins {
	position: absolute;
	font-family: "Open Sans", sans-serif;
	font-size: 9px;
	line-height: 17px;
	font-weight: 600;
	margin-top: 1px;
	margin-left: 7px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	z-index: 26;
}

#adminmenu li .awaiting-mod span,
#adminmenu li span.update-plugins span,
#sidemenu li a span.update-plugins span {
	display: block;
	padding: 0 6px;
}

#adminmenu li span.count-0,
#sidemenu li a .count-0 {
	display: none;
}

#adminmenu #collapse-menu {
	font-size: 13px;
	line-height: 34px;
	margin-top: 10px;
}

.folded #collapse-menu span {
	display: none;
}

#collapse-button,
#collapse-button div {
	width: 15px;
	height: 15px;
}

#collapse-button {
	float: left;
	height: 15px;
	margin: 10px 8px 10px 11px;
	width: 15px;

	-webkit-border-radius: 10px;
	border-radius: 10px;
}

#wpwrap #collapse-button div {
	padding: 0;
}

#collapse-button div:after {
	content: '\f148';
	display: block;
	line-height: 15px;
	left: -3px;
	top: -3px;
	font: normal 20px/1 'dashicons' !important;
	speak: none;
	margin: 0 auto;
	padding: 0 !important;
	position: relative;
	text-align: center;
	width: 20px;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;

	-webkit-font-smoothing: antialiased;
}

.folded #collapse-button div:after {
	-ms-transform: rotate(180deg);
	-webkit-transform: rotate(180deg);
	transform: rotate(180deg);
}


/* Auto-folding of the admin menu */
@media only screen and (max-width: 900px) {
	.auto-fold #wpcontent,
	.auto-fold #wpfooter {
		margin-left: 56px;
	}

	.auto-fold #adminmenuback,
	.auto-fold #adminmenuwrap,
	.auto-fold #adminmenu,
	.auto-fold #adminmenu li.menu-top {
		width: 36px;
	}

	.auto-fold #adminmenu .wp-submenu.sub-open,
	.auto-fold #adminmenu .opensub .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
	.auto-fold #adminmenu .wp-has-current-submenu.opensub .wp-submenu,
	.auto-fold #adminmenu a.menu-top:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu a.menu-top:focus + .wp-submenu  {
		top: -1px;
		left: 36px;
		margin-top: 2px;
	}

	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
		position: absolute;
		top: -1000em;
		margin-top: 1px;
		margin-right: -1px;
		padding: 7px 0 8px;
		z-index: 9999;
	}

	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
		min-width: 150px;
		width: auto;
	}

	.auto-fold #adminmenu .wp-has-current-submenu li > a {
		padding-right: 16px;
		padding-left: 14px;
	}


	.auto-fold #adminmenu li.menu-top .wp-submenu > li > a {
		padding-left: 12px;
	}

	.auto-fold #adminmenu .wp-menu-name {
		display: none;
	}

	.auto-fold #adminmenu .wp-submenu-head {
		display: block;
	}

	.auto-fold #adminmenu div.wp-menu-image {
		height: 30px;
		width: 34px;
		position: absolute;
		z-index: 25;
	}


	.auto-fold #adminmenu a.menu-top {
		height: 34px;
	}

	.auto-fold #adminmenu li.wp-menu-open {
		border: 0 none;
	}

	.auto-fold #adminmenu li.wp-has-current-submenu {
		margin-bottom: 1px;
	}

	.auto-fold #adminmenu .wp-has-current-submenu.menu-top-last {
		margin-bottom: 0;
	}

	.auto-fold ul#adminmenu li:hover a.wp-has-current-submenu:after {
		display: none;
	}

	.auto-fold ul#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
		border-width: 4px;
		margin-top: -4px;
		top: 16px;
	}

	.auto-fold ul#adminmenu a.wp-has-current-submenu:after,
	.auto-fold ul#adminmenu > li a.current:after {
		border-width: 4px;
		margin-top: -4px;
	}

	.auto-fold #adminmenu li.menu-top:hover,
	.auto-fold #adminmenu li.opensub > a.menu-top,
	.auto-fold #adminmenu li > a.menu-top:focus {
		z-index: 10000;
	}

	.auto-fold #collapse-menu span {
		display: none;
	}

	.auto-fold #collapse-button div {
		background: none;
	}

	.auto-fold #collapse-button div:after {
		-ms-transform: rotate(180deg);
		-webkit-transform: rotate(180deg);
		transform: rotate(180deg);
	}
}

/* List table styles */
.post-com-count-wrapper {
	min-width: 22px;
	font-family: "Open Sans", sans-serif;
}

.post-com-count {
	background: none !important;	/* @todo: this !important is only necessary due to "jetpack-retina.css" otherwise overriding */	height: 1.3em;
	line-height: 1.1em;
	display: block;
	text-decoration: none;
	padding: 0 0 6px;
	cursor: pointer;
	background-position: center -80px;
	background-repeat: no-repeat;
}

.post-com-count:after {		/* draw bubble connector using CSS! */
	content: "";
	display: block;
	width: 0;
	height: 0;
	margin-left: 8px;
	border-top: 5px solid #bbbbbb;
	border-right: 5px solid transparent;
}

.post-com-count span {
	font-size: 11px;
	font-weight: 600;
	height: 1.4em;
	line-height: 1.4em;
	min-width: 0.7em;
	padding: 0 6px;
	display: inline-block;
	-webkit-border-radius: 5px;
	border-radius: 5px;
}

strong .post-com-count {
	background-position: center -55px;
}

.post-com-count:hover {
	background-position: center -3px;
}

.column-response .post-com-count {
	float: left;
	margin-right: 5px;
	text-align: center;
}

.response-links {
	float: left;
}

#the-comment-list .attachment-80x60 {
	padding: 4px 8px;
}

th .comment-grey-bubble {
	height: 16px;
	width: 16px;
}

th .comment-grey-bubble:before {
	content: '\f101';
	font: normal 20px/.5 'dashicons';
	speak: none;
	display: inline-block;
	padding: 0;
	top: 4px;
	left: -4px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

/*------------------------------------------------------------------------------
  8.0 - Layout Blocks
------------------------------------------------------------------------------*/

html.wp-toolbar {
	padding-top: 32px;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
}

.narrow {
	width: 70%;
	margin-bottom: 40px;
}

.narrow p {
	line-height: 150%;
}

.widefat th,
.widefat td {
	overflow: hidden;
}

.widefat th {
	font-weight: normal;
}

.widefat td p {
	margin: 2px 0 0.8em;
}

.widefat .column-comment p {
	margin: 0.6em 0;
}

/* Screens with postboxes */
.postbox-container {
	float: left;
}

#dashboard-widgets.columns-1 .postbox-container {
	width: 100%;
}

#dashboard-widgets.columns-2 .postbox-container {
	width: 49.5%;
}

#dashboard-widgets.columns-2 #postbox-container-2,
#dashboard-widgets.columns-2 #postbox-container-3,
#dashboard-widgets.columns-2 #postbox-container-4 {
	float: right;
	width: 50.5%;
}

#dashboard-widgets.columns-3 .postbox-container {
	width: 33.5%;
}

#dashboard-widgets.columns-3 #postbox-container-1 {
	width: 33%;
}

#dashboard-widgets.columns-3 #postbox-container-3,
#dashboard-widgets.columns-3 #postbox-container-4 {
	float: right;
}

#dashboard-widgets.columns-4 .postbox-container {
	width: 25%;
}

.postbox-container .meta-box-sortables {
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.metabox-holder .postbox-container .empty-container {
	border: 3px dashed #CCCCCC;
	height: 250px;
}

.metabox-holder.columns-1 .postbox-container .empty-container,
.columns-2 #postbox-container-3 .empty-container,
.columns-2 #postbox-container-4 .empty-container,
.columns-3 #postbox-container-4 .empty-container {
	border: 0 none;
	height: 0;
	min-height: 0;
}

#poststuff {
	padding-top: 10px;
	min-width: 763px;
}

#poststuff #post-body {
	padding: 0;
}

#post-body-content {
	width: 100%;
	min-width: 463px;
	float: left;
}

#poststuff .postbox-container {
	width: 100%;
}

#poststuff #post-body.columns-2 {
	margin-right: 300px;
}

#post-body.columns-2 #postbox-container-1 {
	float: right;
	margin-right: -300px;
	width: 280px;
}

#post-body.columns-2 #side-sortables {
	min-height: 250px;
}

/* one column on the dash */
@media only screen and (max-width: 799px) {
	#wpbody-content #dashboard-widgets .postbox-container {
		width: 100%;
	}

	#wpbody-content .metabox-holder .postbox-container .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}
}

/* two columns on the dash, but keep the setting if one is selected */
@media only screen and (min-width: 800px) and (max-width: 1200px) {
	#wpbody-content #dashboard-widgets .postbox-container {
		width: 49.5%;
	}

	#wpbody-content #dashboard-widgets #postbox-container-2,
	#wpbody-content #dashboard-widgets #postbox-container-3,
	#wpbody-content #dashboard-widgets #postbox-container-4 {
		float: right;
		width: 50.5%;
	}

	#dashboard-widgets #postbox-container-3 .empty-container,
	#dashboard-widgets #postbox-container-4 .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	#wpbody #wpbody-content #dashboard-widgets.columns-1 .postbox-container {
		width: 100%;
	}

	#wpbody #wpbody-content .metabox-holder.columns-1 .postbox-container .empty-container {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	/* show the radio buttons for column prefs only for one or two columns */
	.index-php .screen-layout,
	.index-php .columns-prefs {
		display: block;
	}

	.columns-prefs .columns-prefs-3,
	.columns-prefs .columns-prefs-4 {
		display: none;
	}
}

/* one column on the post write/edit screen */
@media only screen and (max-width: 850px) {
	#poststuff {
		min-width: 0;
	}

	#wpbody-content #poststuff #post-body {
		margin: 0;
	}

	#wpbody-content #post-body.columns-2 #postbox-container-1 {
		margin-right: 0;
		width: 100%;
	}

	#poststuff #postbox-container-1 .empty-container,
	#poststuff #postbox-container-1 #side-sortables:empty {
		border: 0 none;
		height: 0;
		min-height: 0;
	}

	#poststuff #post-body.columns-2 #side-sortables {
		min-height: 0;
	}

	/* hide the radio buttons for column prefs */
	.screen-layout,
	.columns-prefs {
		display: none;
	}
}

.js .postbox .hndle {
	cursor: move;
}

.postbox.closed .hndle {
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

.hndle a {
	font-size: 11px;
	font-weight: normal;
}

.postbox .handlediv {
	float: right;
	width: 27px;
	height: 30px;
}

.js .postbox .handlediv {
	cursor: pointer;
}

.sortable-placeholder {
	border-width: 1px;
	border-style: dashed;
	margin-bottom: 20px;
}

.widget,
.postbox,
.stuffbox {
	margin-bottom: 20px;
	padding: 0;
	line-height: 1;
}

.widget .widget-top,
.postbox h3,
.stuffbox h3 {
	margin-top: 1px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.js .widget .widget-top,
.js .postbox h3 {
	cursor: move;
}

.postbox .inside,
.stuffbox .inside {
	font-size: 14px;
	line-height: 1.4em;
	padding: 0 12px 12px;
}

.postbox .inside {
	margin: 12px 0;
	position: relative;
}

.postbox .inside > p:last-child,
.rss-widget ul li:last-child {
	margin-bottom: 1px !important;
}

.postbox.closed h3 {
	border: none;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.postbox table.form-table {
	margin-bottom: 0;
}

.temp-border {
	border: 1px dotted #ccc;
}

.columns-prefs label {
	padding: 0 5px;
}


/*------------------------------------------------------------------------------
  9.0 - Dashboard
------------------------------------------------------------------------------*/

#dashboard-widgets-wrap {
	margin: 0 -8px;
}

#wpbody-content .metabox-holder {
	padding-top: 10px;
}

#dashboard-widgets .meta-box-sortables {
	margin: 0 8px;
}

#dashboard_recent_comments div.undo {
	margin: 0 -12px;
	padding: 6px 12px;
	font-size: 11px;
}

#dashboard_recent_comments div.undo .avatar {
	float: left;
}

#dashboard_recent_comments div.undo div {
	min-height: 20px;
}

#the-comment-list td.comment p.comment-author {
	margin-top: 0;
	margin-left: 0;
}

#the-comment-list p.comment-author img {
	float: left;
	margin-right: 8px;
}

#the-comment-list p.comment-author strong a {
	border: none;
}

#the-comment-list td {
	vertical-align: top;
}

#the-comment-list td.comment {
	word-wrap: break-word;
}

/* Welcome Panel */
.welcome-panel {
	position: relative;
	overflow: auto;
	margin: 16px 0;
	padding: 23px 10px 12px;
	font-size: 13px;
	line-height: 2.1em;
}

.welcome-panel h3 {
	margin: 0;
	font-family: "Open Sans", sans-serif;
	font-size: 21px;
	font-weight: normal;
	line-height: 1.2;
}

.welcome-panel h4 {
	margin: 1.33em 0 0;
	font-size: 16px;
}

.welcome-panel li {
	font-size: 14px;
}

.welcome-panel .about-description {
	font-size: 16px;
	margin: 0;
}

.welcome-panel .welcome-panel-close {
	position: absolute;
	top: 5px;
	right: 10px;
	padding: 8px 3px;
	font-size: 13px;
	text-decoration: none;
	line-height: 1;
}

#welcome-panel.welcome-panel .welcome-panel-close::before,
.tagchecklist span a:before,
#bulk-titles div a:before,
.wp-pointer-buttons a.close:before {
	content: '\f153';
	display: block !important;
	font: normal 16px/1 'dashicons';
	speak: none;
	height: 20px;
	margin: 2px 0;
	text-align: center;
	width: 20px;
	-webkit-font-smoothing: antialiased !important;
}

#welcome-panel.welcome-panel .welcome-panel-close::before {
	position: absolute;
	left: -18px;
	margin-top: -2px;

	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.wp-core-ui .welcome-panel .button.button-hero {
    margin: 15px 0 3px;
}

.welcome-panel-content {
	margin-left: 13px;
	max-width: 1500px;
}

.welcome-panel .welcome-panel-column-container {
	clear: both;
	overflow: hidden;
	position: relative;
}

.welcome-panel .welcome-panel-column {
	width: 32%;
	min-width: 200px;
	float: left;
}

.ie8 .welcome-panel .welcome-panel-column {
	min-width: 230px;
}

.welcome-panel .welcome-panel-column:first-child {
	width: 36%;
}

.welcome-panel-column p.hide-if-no-customize {
	margin-top: 10px;
}

.welcome-panel-column p {
	margin-top: 7px;
}

.welcome-panel .welcome-icon {
	display: block;
	padding: 0 0 8px;
	background: transparent !important;
}

.welcome-panel .welcome-icon:before {
	font: normal 20px/1 'dashicons';
	speak: none;
	display: inline-block;
	padding: 0 10px 0 0;
	top: -1px;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
	vertical-align: top;
}

.welcome-panel .welcome-write-blog:before,
.welcome-panel .welcome-edit-page:before {
	content:'\f119';
	top: -3px;
}

.welcome-panel .welcome-add-page:before {
	content:'\f132';
}

.welcome-panel .welcome-view-site:before {
	content:'\f115';
	top: -2px;
}

.welcome-panel .welcome-widgets-menus:before {
	content:'\f116';
	top: -2px;
}

.welcome-panel .welcome-comments:before {
	content:'\f117';
	top: -1px;
}

.welcome-panel .welcome-learn-more:before {
	content:'\f118';
	top: -1px;
}

.welcome-panel .welcome-widgets-menus {
	line-height: 16px;
}

.welcome-panel .welcome-panel-column ul {
	margin: 0.8em 1em 1em 0;
}

.welcome-panel .welcome-panel-column li {
    line-height: 16px;
    list-style-type: none;
}

@media screen and (max-width: 870px) {
	.welcome-panel .welcome-panel-column,
	.welcome-panel .welcome-panel-column:first-child {
		display: block;
		float: none;
		width: 100%;
	}

	.welcome-panel .welcome-panel-column li {
		display: inline-block;
		margin-right: 13px;
	}

	.welcome-panel .welcome-panel-column ul {
		margin: 0.4em 0 0;
	}

	.welcome-panel .welcome-icon {
		padding-left: 25px;
	}
}

/*------------------------------------------------------------------------------
  10.0 - List Posts (/Pages/etc)
------------------------------------------------------------------------------*/

table.fixed {
	table-layout: fixed;
}

.fixed .column-rating,
.fixed .column-visible {
	width: 8%;
}

.fixed .column-posts,
.fixed .column-date,
.fixed .column-parent,
.fixed .column-links,
.fixed .column-author,
.fixed .column-format {
	width: 10%;
}

.fixed .column-response,
.fixed .column-categories,
.fixed .column-tags,
.fixed .column-rel,
.fixed .column-role {
	width: 15%;
}

.fixed .column-slug {
	width: 25%;
}

.fixed .column-locations {
	width: 35%;
}

.fixed .column-comments {
	width: 4em;
	padding: 8px 0;
	text-align: left;
}

.fixed .column-comments .vers {
	padding-left: 3px;
}

.fixed .column-comments a {
	float: left;
}

.fixed .column-icon {
	width: 80px;
}

#comments-form .fixed .column-author {
	width: 20%;
}

#commentsdiv.postbox .inside {
	margin: 0;
	padding: 0;
}

#commentsdiv .inside .row-actions {
	line-height:18px;
}

#commentsdiv .inside .column-author {
	width: 25%;
}

#commentsdiv .column-comment p {
	margin: 0.6em 0;
	padding: 0;
}

#commentsdiv #replyrow td {
	padding: 0;
}

#commentsdiv p {
	padding: 8px 10px;
	margin: 0;
}

#commentsdiv #add-new-comment {
	border-width: 0 0 1px;
	border-style: none none solid;
	margin-top: 6px;
}

#commentsdiv .comments-box {
	border: 0 none;
}

#commentsdiv .comments-box thead th {
	background: transparent;
	padding: 0 7px 4px;
	font-style: italic;
}

#commentsdiv .comments-box tr:last-child td {
	border-bottom: 0 none;
}

#commentsdiv .spinner {
	padding-left: 5px;
}

.sorting-indicator {
	display: none;
	width: 10px;
	height: 4px;
	margin-top: 8px;
	margin-left: 7px;
}

.sorting-indicator:before {
	background: none;
	content: '\f142';
	font: normal 20px/1 'dashicons';
	speak: none;
	display: inline-block;
	padding: 0;
	top: -4px;
	left: -8px;
	color: #444;
	line-height: 10px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.column-comments .sorting-indicator:before {
	top: 0;
	left: -10px;
}

th.sorted.asc .sorting-indicator:before,
th.desc:hover span.sorting-indicator:before {
	content: '\f142';
}

th.sorted.desc .sorting-indicator:before,
th.asc:hover span.sorting-indicator:before {
	content: '\f140';
}

tr.wp-locked .locked-indicator {
	margin: -2px 0 0 6px;
	height: 20px;
	width: 16px;
}

tr.wp-locked .check-column label,
tr.wp-locked .check-column input[type="checkbox"],
tr.wp-locked .row-actions .inline,
tr.wp-locked .row-actions .trash {
	display: none;
}

tr .locked-info {
	height: 0;
	opacity: 0;
}

tr.wp-locked .locked-info {
	height: 22px;
	opacity: 1;
}

tr.locked-info, tr.wp-locked .locked-info {
	-webkit-transition: height 1s, opacity 500ms;
	-moz-transition:    height 1s, opacity 500ms;
	-ms-transition:     height 1s, opacity 500ms;
	-o-transition:      height 1s, opacity 500ms;
	transition:         height 1s, opacity 500ms;
}

.fixed .column-comments .sorting-indicator {
	margin-top: 3px;
}

#menu-locations-wrap .widefat {
	width: 60%;
}

.widefat th.sortable,
.widefat th.sorted {
	padding: 0;
}

th.sortable a,
th.sorted a {
	display: block;
	overflow: hidden;
	padding: 7px 7px 8px;
}

.fixed .column-comments.sortable a,
.fixed .column-comments.sorted a {
	padding: 8px 0;
}

th.sortable a span,
th.sorted a span {
	float: left;
	cursor: pointer;
}

th.sorted.asc .sorting-indicator,
th.desc:hover span.sorting-indicator {
	display: block;
	background-position: 0 0;
}

th.sorted.desc .sorting-indicator,
th.asc:hover span.sorting-indicator {
	display: block;
	background-position: -7px 0;
}

/* Bulk Actions */
.tablenav-pages a {
	font-weight: 600;
	margin-right: 1px;
	padding: 0 2px;
}
.tablenav-pages .current-page {
	padding-top: 0;
	text-align: center;
}
.tablenav-pages .next-page {
	margin-left: 2px;
}

.tablenav a.button-secondary {
	display: block;
	margin: 3px 8px 0 0;
}

.tablenav {
	clear: both;
	height: 30px;
	margin: 6px 0 4px;
	vertical-align: middle;
}

.tablenav.themes {
	max-width: 98%;
}

.tablenav .tablenav-pages {
	float: right;
	display: block;
	cursor: default;
	height: 30px;
	line-height: 30px;
	font-size: 12px;
}

.tablenav .no-pages,
.tablenav .one-page .pagination-links {
	display: none;
}

.tablenav .tablenav-pages a,
.tablenav-pages span.current  {
	text-decoration: none;
	padding: 3px 6px;
}

.tablenav .tablenav-pages a {
	padding: 0 10px 3px;
	font-size: 16px;
	font-weight: normal;
}

.tablenav .tablenav-pages a.disabled:hover ,
.tablenav .tablenav-pages a.disabled:active {
	cursor: default;
}

.tablenav .displaying-num {
	margin-right: 2px;
	font-size: 12px;
	font-style: italic;
}

.tablenav .actions {
	overflow: hidden;
	padding: 2px 8px 0 0;
}

.tablenav .delete {
	margin-right: 20px;
}

.view-switch {
	float: right;
	margin: 5px 16px 0 8px;
}

.view-switch img {
	display: none;
}

.view-switch a {
	text-decoration: none;
}

.view-switch>a {
	display: inline-block;
	width: 18px;
	height: 18px;
}

.view-switch>a:before {
	content: '\f163';
	display: inline-block;
	float: left;
	font: normal 20px/1 'dashicons';
	speak: none;
	vertical-align: middle;
	margin-left: 0;
	-webkit-font-smoothing: antialiased;
}

.view-switch>a+a:before {
	margin-left: 5px;
	content: '\f164';
}

.filter {
	float: left;
	margin: -5px 0 0 10px;
}

.filter .subsubsub {
	margin-left: -10px;
	margin-top: 13px;
}
.screen-per-page {
	width: 4em;
}

#posts-filter fieldset {
	float: left;
	margin: 0 1.5ex 1em 0;
	padding: 0;
}

#posts-filter fieldset legend {
	padding: 0 0 .2em 1px;
}

/*------------------------------------------------------------------------------
  10.1 - Inline Editing
------------------------------------------------------------------------------*/

/*
.quick-edit* is for Quick Edit
.bulk-edit* is for Bulk Edit
.inline-edit* is for everything
*/

/*	Layout */

#wpbody-content .inline-edit-row fieldset {
	font-size: 12px;
	float: left;
	margin: 0;
	padding: 0;
	width: 100%;
}

tr.inline-edit-row td,
#wpbody-content .inline-edit-row fieldset .inline-edit-col {
	padding: 0 0.5em;
}

#wpbody-content .quick-edit-row-page fieldset.inline-edit-col-right .inline-edit-col {
	border-width: 0 0 0 1px;
	border-style: none none none solid;
}

#wpbody-content .quick-edit-row-post .inline-edit-col-left {
	width: 40%;
}

#wpbody-content .quick-edit-row-post .inline-edit-col-right {
	width: 39%;
}

#wpbody-content .inline-edit-row-post .inline-edit-col-center {
	width: 20%;
}

#wpbody-content .quick-edit-row-page .inline-edit-col-left {
	width: 50%;
}

#wpbody-content .quick-edit-row-page .inline-edit-col-right,
#wpbody-content .bulk-edit-row-post .inline-edit-col-right {
	width: 49%;
}

#wpbody-content .bulk-edit-row .inline-edit-col-left {
	width: 30%;
}

#wpbody-content .bulk-edit-row-page .inline-edit-col-right {
	width: 69%;
}

#wpbody-content .bulk-edit-row .inline-edit-col-bottom {
	float: right;
	width: 69%;
}

#wpbody-content .inline-edit-row-page .inline-edit-col-right {
	margin-top: 27px;
}

.inline-edit-row fieldset .inline-edit-group {
	clear: both;
}

.inline-edit-row fieldset .inline-edit-group:after {
	content: ".";
	display: block;
	height: 0;
	clear: both;
	visibility: hidden;
}

.inline-edit-row p.submit {
	clear: both;
	padding: 0.5em;
	margin: 0.5em 0 0;
}

.inline-edit-row span.error {
	line-height: 22px;
	margin: 0 15px;
	padding: 3px 5px;
}

/*	Positioning */
.inline-edit-row h4 {
	margin: .2em 0;
	padding: 0;
	line-height: 23px;
}
.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title {
	margin: 0;
	padding: 0;
	line-height: 27px;
}

.inline-edit-row fieldset label,
.inline-edit-row fieldset span.inline-edit-categories-label {
	display: block;
	margin: .2em 0;
}

.inline-edit-row fieldset label.inline-edit-tags {
	margin-top: 0;
}

.inline-edit-row fieldset label.inline-edit-tags span.title {
	margin: .2em 0;
	width: auto;
}

.inline-edit-row fieldset label span.title {
	display: block;
	float: left;
	width: 5em;
}

.inline-edit-row fieldset label span.input-text-wrap {
	display: block;
	margin-left: 5em;
}

.quick-edit-row-post fieldset.inline-edit-col-right label span.title {
	width: auto;
	padding-right: 0.5em;
}

.inline-edit-row .input-text-wrap input[type=text] {
	width: 100%;
}

.inline-edit-row fieldset label input[type=checkbox] {
	vertical-align: text-bottom;
}

.inline-edit-row fieldset label textarea {
	width: 100%;
	height: 4em;
}

#wpbody-content .bulk-edit-row fieldset .inline-edit-group label {
	max-width: 50%;
}

#wpbody-content .quick-edit-row fieldset .inline-edit-group label.alignleft:first-child {
	margin-right: 0.5em
}

.inline-edit-col-right .input-text-wrap input.inline-edit-menu-order-input {
	width: 6em;
}

.inline-edit-save .spinner {
	padding: 4px 10px 0;
	vertical-align: top;
	float: right;
}

/*	Styling */
.inline-edit-row h4 {
	text-transform: uppercase;
}

.inline-edit-row fieldset span.title,
.inline-edit-row fieldset span.checkbox-title {
	font-style: italic;
	line-height: 1.8em;
}

/*	Specific Elements */
.inline-edit-row fieldset input[type="text"],
.inline-edit-row fieldset textarea {
	border-style: solid;
	border-width: 1px;
}

.inline-edit-row fieldset .inline-edit-date {
	float: left;
}

.inline-edit-row fieldset input[name=jj],
.inline-edit-row fieldset input[name=hh],
.inline-edit-row fieldset input[name=mn] {
	font-size: 12px;
	width: 2.1em;
}

.inline-edit-row fieldset input[name=aa] {
	font-size: 12px;
	width: 3.5em;
}

.inline-edit-row fieldset label input.inline-edit-password-input {
	width: 8em;
}

ul.cat-checklist {
	height: 12em;
	border-style: solid;
	border-width: 1px;
	overflow-y: scroll;
	padding: 0 5px;
	margin: 0;
}

#bulk-titles {
	display: block;
	height: 12em;
	border-style: solid;
	border-width: 1px;
	overflow-y: scroll;
	padding: 0 5px;
	margin: 0 0 5px;
}

.inline-edit-row fieldset ul.cat-checklist li,
.inline-edit-row fieldset ul.cat-checklist input {
	margin: 0;
}

.inline-edit-row fieldset ul.cat-checklist label,
.inline-edit-row #bulk-titles div {
	font-family: "Open Sans", sans-serif;
	font-style: normal;
	font-size: 11px;
}

.inline-edit-row fieldset label input.inline-edit-menu-order-input {
	width: 3em;
}

.inline-edit-row fieldset label input.inline-edit-slug-input {
	width: 75%;
}

.quick-edit-row-post fieldset label.inline-edit-status {
	float: left;
}

#bulk-titles {
	line-height: 140%;
}
#bulk-titles div {
	margin: 0.2em 0.3em;
}

#bulk-titles div a {
	cursor: pointer;
	display: block;
	float: left;
	height: 18px;
	margin: 0 3px 0 -2px;
	overflow: hidden;
	position: relative;
	width: 20px;
}

#bulk-titles div a:before {
	position: relative;
	top: -3px;
}


/*------------------------------------------------------------------------------
  11.0 - Write/Edit Post Screen
------------------------------------------------------------------------------*/

#show-comments {
	overflow: hidden;
}

#save-action .spinner,
#show-comments a,
#show-comments .spinner {
	float: left;
}

#lost-connection-notice .spinner {
	display: block;
	float: left;
	margin: 0 5px 0 0;
}

.rtl #lost-connection-notice .spinner {
	float: right;
	margin: 0 0 0 5px;
}

#titlediv {
	position: relative;
	margin-bottom: 10px;
}

#titlediv label {
	cursor: text;
}

#titlediv div.inside {
	margin: 0;
}

#poststuff #titlewrap {
	border: 0;
	padding: 0;
}

#titlediv #title {
	padding: 3px 8px;
	font-size: 1.7em;
	line-height: 100%;
	height: 1.7em;
	width: 100%;
	outline: none;
	margin: 1px 0;
}

#titlediv #title-prompt-text,
#wp-fullscreen-title-prompt-text {
	color: #bbb;
	position: absolute;
	font-size: 1.7em;
	padding: 11px 10px;
}

#wp-fullscreen-save .fs-saved {
	color: #999;
	float: right;
	margin-top: 4px;
}

#wp-fullscreen-title-prompt-text {
	padding: 11px;
}

#poststuff .inside-submitbox,
#side-sortables .inside-submitbox {
	margin: 0 3px;
	font-size: 11px;
}

input#link_description,
input#link_url {
	width: 98%;
}

#pending {
	background: 0 none;
	border: 0 none;
	padding: 0;
	font-size: 11px;
	margin-top: -1px;
}

#edit-slug-box {
	line-height: 24px;
	min-height: 25px; /* Yes, line-height + 1 */
	margin-top: 5px;
	padding: 0 10px;
}

#edit-slug-box .cancel {
	margin-right: 10px;
	font-size: 11px;
}

#editable-post-name-full {
	display: none;
}

#editable-post-name input {
	width: 16em;
}

.postarea h3 label {
	float: left;
}

.submitbox .submit {
	text-align: left;
	padding: 12px 10px 10px;
	font-size: 11px;
}

.submitbox .submitdelete {
	text-decoration: none;
	padding: 1px 2px;
}

.submitbox .submitdelete,
.submitbox .submit a:hover {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.submitbox .submit input {
	margin-bottom: 8px;
	margin-right: 4px;
	padding: 6px;
}

.inside-submitbox #post_status {
	margin: 2px 0 2px -2px;
}

#post-status-select {
	line-height: 2.5em;
	margin-top: 3px;
}

/* Post Screen */
#post-body #normal-sortables {
	min-height: 50px;
}

.postbox {
	position: relative;
	min-width: 255px;
}

#trackback_url {
	width: 99%;
}

#normal-sortables .postbox .submit {
	background: transparent none;
	border: 0 none;
	float: right;
	padding: 0 12px;
	margin:0;
}

.category-add input[type="text"],
.category-add select {
	width: 100%;
	max-width: 260px;
}

.press-this #side-sortables .category-tabs li,
ul.category-tabs li,
#side-sortables .add-menu-item-tabs li,
.wp-tab-bar li {
	display: inline;
	line-height: 1.35em;
}

.no-js .category-tabs li.hide-if-no-js {
 	display: none;
}

.category-tabs a,
#side-sortables .add-menu-item-tabs a,
.wp-tab-bar a {
	text-decoration: none;
}

.category-tabs {
	margin: 8px 0 5px;
}

#category-adder h4 {
	margin: 10px 0;
}

#side-sortables .add-menu-item-tabs,
.wp-tab-bar {
	margin-bottom: 3px;
}

#normal-sortables .postbox #replyrow .submit {
	float: none;
	margin: 0;
	padding: 0 7px 5px;
}

#side-sortables .submitbox .submit input,
#side-sortables .submitbox .submit .preview,
#side-sortables .submitbox .submit a.preview:hover {
	border: 0 none;
}

#side-sortables .inside-submitbox .insidebox,
.stuffbox .insidebox {
	margin: 11px 0;
}

ul.category-tabs,
ul.add-menu-item-tabs,
ul.wp-tab-bar {
	margin-top: 12px;
}

ul.category-tabs li {
	border-style: solid;
	border-width: 1px;
	position: relative;
}

ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	border-style: solid solid none;
	border-width: 1px 1px 0;
}

ul.add-menu-item-tabs li.tabs {
	padding-bottom: 3px;
}

#post-body .add-menu-item-tabs li.tabs {
	border-style: solid none solid solid;
	border-width: 1px 0 1px 1px;
	margin-right: -1px;
}

ul.category-tabs li,
ul.add-menu-item-tabs li,
ul.wp-tab-bar li {
	padding: 3px 5px 5px;
}

/* positioning etc. */
form#tags-filter {
	position: relative;
}

/* Edit posts */
td.post-title strong,
td.plugin-title strong {
	display: block;
	margin-bottom: .2em;
	font-size: 14px;
}

td.post-title p,
td.plugin-title p {
	margin: 6px 0;
}

/* Global classes */
.wp-hidden-children .wp-hidden-child,
.ui-tabs-hide {
	display: none;
}

.commentlist .avatar {
	vertical-align: text-top;
}

#post-body .tagsdiv #newtag {
	margin-right: 5px;
	width: 16em;
}

#side-sortables input#post_password {
	width: 94%
}

#side-sortables .tagsdiv #newtag {
	width: 68%;
}

#post-status-info {
	width: 100%;
}

#post-status-info td {
	font-size: 12px;
}

.autosave-info {
	padding: 2px 15px;
	text-align: right;
}

#editorcontent #post-status-info {
	border: none;
}

#content-resize-handle,
#post-body .wp_themeSkin .mceStatusbar a.mceResize {
	width: 12px;
	cursor: se-resize;
}

#post-body .wp_themeSkin .mceStatusbar a.mceResize {
	display: block;
	margin: 0 1px;
	position: relative;
	top: -2px;
}

#post-body .postarea .wp_themeSkin .mceStatusbar a.mceResize {
	top: 20px;
}

#content-resize-handle {
	position: absolute;
	right: 2px;
	height: 19px;
}

.press-this #content-resize-handle {
	bottom: 2px;
}

.tmce-active #content-resize-handle {
	display: none;
}

#wp-word-count {
	display: block;
	padding: 2px 10px;
}

#timestampdiv select {
	height: 20px;
	line-height: 14px;
	padding: 0;
	vertical-align: top;
}

#aa, #jj, #hh, #mn {
	padding: 1px;
	font-size: 12px;
}

#jj, #hh, #mn {
	width: 2em;
}

#aa {
	width: 3.4em;
}

.curtime #timestamp {
	padding: 2px 0 1px 0;
	display: inline !important;
	height: auto !important;
}

#post-body #visibility:before,
.curtime #timestamp:before {
	font: normal 20px/1 'dashicons';
	speak: none;
	display: inline-block;
	padding: 0 2px 0 0;
	top: 0;
	left: -1px;
	position: relative;
	vertical-align: top;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

#post-body #visibility:before {
	content: '\f177';
}

.curtime #timestamp:before {
	content: '\f145';
}

#timestampdiv {
	padding-top: 5px;
	line-height: 23px;
}

#timestampdiv p {
	margin: 8px 0 6px;
}

#timestampdiv input {
	border-width: 1px;
	border-style: solid;
}

.notification-dialog {
	position: fixed;
	top: 30%;
	left: 50%;
	width: 450px;
	margin-left: -225px;
	background: #fff;
	line-height: 1.5;
	z-index: 1000005;
}

.notification-dialog-background {
	position: fixed;
	top: 0;
	left: 0;
	right: 0;
	bottom: 0;
	background: #000;
	opacity: 0.5;
	filter: alpha(opacity=50);
	z-index: 1000000;
}

#post-lock-dialog .post-locked-message,
#post-lock-dialog .post-taken-over {
	margin: 25px;
}

#post-lock-dialog .post-locked-message a.button {
	margin-right: 10px;
}

#post-lock-dialog .post-locked-avatar {
	float: left;
	margin: 0 20px 20px 0;
}

#post-lock-dialog .wp-tab-first {
	outline: 0;
}

#post-lock-dialog .locked-saving img {
	float: left;
	margin-right: 3px;
}

#post-lock-dialog.saving .locked-saving,
#post-lock-dialog.saved .locked-saved {
	display: inline;
}

/*------------------------------------------------------------------------------
  11.1 - Custom Fields
------------------------------------------------------------------------------*/

#postcustomstuff thead th {
	padding: 5px 8px 8px;
}

#postcustom #postcustomstuff .submit {
	border: 0 none;
	float: none;
	padding: 0 8px 8px;
}

#side-sortables #postcustom #postcustomstuff .submit {
	margin: 0;
	padding: 0;
}

#side-sortables #postcustom #postcustomstuff #the-list textarea {
	height: 85px;
}

#side-sortables #postcustom #postcustomstuff td.left input,
#side-sortables #postcustom #postcustomstuff td.left select,
#side-sortables #postcustomstuff #newmetaleft a {
	margin: 3px 3px 0;
}

#postcustomstuff table {
	margin: 0;
	width: 100%;
	border-width: 1px;
	border-style: solid;
	border-spacing: 0;
}

#postcustomstuff tr {
	vertical-align: top;
}

#postcustomstuff table input,
#postcustomstuff table select,
#postcustomstuff table textarea {
	width: 96%;
	margin: 8px;
}

#side-sortables #postcustomstuff table input,
#side-sortables #postcustomstuff table select,
#side-sortables #postcustomstuff table textarea {
	margin: 3px;
}

#postcustomstuff th.left,
#postcustomstuff td.left {
	width: 38%;
}

#postcustomstuff .submit input {
	margin: 0;
	width: auto;
}

#postcustomstuff #newmetaleft a {
	display: inline-block;
	margin: 0 8px 8px;
	text-decoration: none;
}

.no-js #postcustomstuff #enternew {
	display: none;
}

#post-body-content .compat-attachment-fields {
	margin-bottom: 20px;
}

.compat-attachment-fields th {
	padding-top: 5px;
	padding-right: 10px;
}

/*------------------------------------------------------------------------------
  11.2 - Post Revisions
------------------------------------------------------------------------------*/
.revisions-control-frame,
.revisions-diff-frame {
	position: relative;
}

.revisions-controls {
	padding-top: 40px;
	height: 100px;
	z-index: 1;
}

.revisions-controls input[type="checkbox"] {
	position: relative;
	top: -1px;
	vertical-align: text-bottom;
}

.revisions.pinned .revisions-controls {
	position: fixed;
	top: 0;
	height: 82px;
}

.revisions-tickmarks {
	position: relative;
	margin: 0 auto;
	height: 0.7em;
	top: 7px;
	max-width: 70%;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.revisions-tickmarks > div {
	position: absolute;
	height: 100%;
	border-style: solid;
	border-width: 0 1px 0 0;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.revisions-tickmarks > div:first-child {
	border-width: 0;
}

.comparing-two-revisions .revisions-controls {
	height: 140px;
}

.comparing-two-revisions.pinned .revisions-controls {
	height: 124px;
}

.revisions .diff-error {
	position: absolute;
	text-align: center;
	margin: 0 auto;
	width: 100%;
	display: none;
}

.revisions.diff-error .diff-error {
	display: block;
}

.revisions .loading-indicator {
	position: fixed;
	vertical-align: middle;
	opacity: 0;
	width: 100%;
	top: 50%;
	margin-left: -90px;
	-webkit-transition: opacity 0.5s;
	-moz-transition:opacity 0.5s;
	-ms-transition: opacity 0.5s;
	-o-transition:  opacity 0.5s;
	transition: opacity 0.5s;
	filter: alpha(opacity=0); /* ie8 and earlier */
}

body.folded .revisions .loading-indicator {
	margin-left: -32px;
}

.revisions .loading-indicator span.spinner {
	display: block;
	margin: 0 auto;
	float: none;
}

.revisions.loading .loading-indicator {
	opacity: 1;
	filter: alpha(opacity=100); /* ie8 and earlier */
}

.revisions .diff {
	-webkit-transition: opacity 0.5s;
	-moz-transition:opacity 0.5s;
	-ms-transition: opacity 0.5s;
	-o-transition:  opacity 0.5s;
	transition: opacity 0.5s;
}

.revisions.loading .diff {
	opacity: 0.5;
	filter: alpha(opacity=50); /* ie8 and earlier */
}

.revisions.diff-error .diff {
	visibility: hidden;
}

.revisions-meta {
	margin-top: 20px;
}

.revision-toggle-compare-mode {
	position: absolute;
	top: 0;
	right: 0;
}

.comparing-two-revisions .revisions-previous,
.comparing-two-revisions .revisions-next,
.revisions-meta .diff-meta-to strong {
	display: none;
}

.revisions-controls .author-card .date {
	color: #777;
}

.revisions-controls .author-card.autosave {
	color: #d54e21;
}

.revisions-controls .author-card .author-name {
	font-weight: bold;
}

.comparing-two-revisions .diff-meta-to strong {
	display: block;
}

.revisions.pinned .revisions-buttons {
	padding: 0 11px;
}

.revisions-previous,
.revisions-next {
	position: relative;
	z-index: 1;
}

.revisions-previous {
	float: left;
}

.revisions-next {
	float: right;
}

.revisions-controls .wp-slider {
	max-width: 70%;
	margin: 0 auto;
	top: -3px;
}

.revisions-diff {
	padding: 15px;
}

.revisions-diff h3:first-child {
	margin-top: 0;
}

/* Revision meta box */
.post-revisions li img,
#revisions-meta-restored img {
	vertical-align: middle;
}

table.diff tbody tr td:nth-child(2) {
	width: 4%;
}

table.diff {
	width: 100%;
	white-space: pre-wrap;
}

table.diff col.content {
	width: auto;
}

table.diff col.content.diffsplit {
	width: 48%;
}

table.diff col.diffsplit.middle {
	width: auto;
}

table.diff col.ltype {
	width: 30px;
}

table.diff tr {
	background-color: transparent;
}

table.diff td,
table.diff th {
	font-family: Consolas, Monaco, monospace;
	font-size: 14px;
	line-heighit: 1.618;
	padding: .5em;
}

table.diff td h1,
table.diff td h2,
table.diff td h3,
table.diff td h4,
table.diff td h5,
table.diff td h6 {
	margin: 0;
}

table.diff .diff-deletedline del,
table.diff .diff-addedline ins {
	text-decoration: none;
}

.diff-meta {
	-webkit-border-radius: 3px;
	border-radius: 3px;
	padding: 5px;
	clear: both;
	min-height: 32px;
}

.diff-title strong {
	line-height: 32px;
	min-width: 60px;
	text-align: right;
	float: left;
	margin-right: 5px;
}

.revisions-controls .author-card .author-info {
	font-size: 12px;
	line-height: 16px;
}

.revisions-controls .author-card .avatar,
.revisions-controls .author-card .author-info {
	float: left;
	margin-left: 6px;
	margin-right: 6px;
}

.revisions-controls .author-card .byline {
	display: block;
	font-size: 12px;
}

.revisions-controls .author-card .avatar {
	vertical-align: middle;
}

.diff-meta input.restore-revision {
	float: right;
	margin-left: 6px;
	margin-right: 6px;
	margin-top: 4px;
}

.diff-meta-from {
	display: none;
}

.comparing-two-revisions .diff-meta-from {
	display: block;
}

.revisions-tooltip {
	position: absolute;
	bottom: 105px;
	margin-right: 0;
	margin-left: -69px;
	z-index: 0;
	max-width: 350px;
	min-width: 130px;
	padding: 8px 4px;
	display: none;
	opacity: 0;
}

.revisions-tooltip.flipped {
	margin-left: 0;
	margin-right: -70px;
}

.revisions.pinned .revisions-tooltip {
	display: none !important;
}

.comparing-two-revisions .revisions-tooltip {
	bottom: 145px;
}

.revisions-tooltip-arrow {
	width: 70px;
	height: 15px;
	overflow: hidden;
	position: absolute;
	left: 0;
	margin-left: 35px;
	bottom: -15px;
}

.revisions-tooltip.flipped .revisions-tooltip-arrow {
	margin-left: 0;
	margin-right: 35px;
	left: auto;
	right: 0;
}

.revisions-tooltip-arrow > span {
	content: "";
	position: absolute;
	left: 20px;
	top: -20px;
	width: 25px;
	height: 25px;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	tranform: rotate(45deg);
}

.revisions-tooltip.flipped .revisions-tooltip-arrow > span {
	left: auto;
	right: 20px;
}

.ie8 .revisions-tooltip-arrow > span {
	left: 15px;
	top: -25px;
	-ms-filter: "progid:DXImageTransform.Microsoft.Matrix(SizingMethod='auto expand', M11=0.7071067811865476, M12=-0.7071067811865475, M21=0.7071067811865475, M22=0.7071067811865476)";
}

.ie8 .revisions-tooltip.flipped .revisions-tooltip-arrow > span {
	right: 25px;
}

.revisions-tooltip,
.revisions-tooltip-arrow > span {
	border-width: 1px;
	border-style: solid;
}




.revisions-tooltip {
	display: none;
}

.arrow {
	width: 70px;
	height: 16px;
	overflow: hidden;
	position: absolute;
	left: 0;
	margin-left: -35px;
	bottom: 90px;
	z-index: 10000;
}

.arrow::after {
	z-index: 9999;
}

.arrow.top {
	top: -16px;
	bottom: auto;
}

.arrow.left {
	left: 20%;
}

.arrow:after {
	content: "";
	position: absolute;
	left: 20px;
	top: -20px;
	width: 25px;
	height: 25px;
	-webkit-transform: rotate(45deg);
	-moz-transform: rotate(45deg);
	-ms-transform: rotate(45deg);
	-o-transform: rotate(45deg);
	tranform: rotate(45deg);
}

.revisions-tooltip,
.revisions-tooltip-arrow:after {
	border-width: 1px;
	border-style: solid;
}

div.revisions-controls > .wp-slider > .ui-slider-handle {
	margin-left: -10px;
}

 /* jQuery UI Slider */
.wp-slider.ui-slider {
	position: relative;
	border-width: 1px;
	border-style: solid;
	text-align: left;
	cursor: pointer;
}

.wp-slider .ui-slider-handle {
	border-radius: 50%;
	height: 20px;
	margin-top: -2px;
	outline: none;
	position: absolute;
	width: 20px;
	z-index: 2;
}

.wp-slider .ui-slider-handle:before {
	background: none;
	position: absolute;
	margin-top: 1px;
	margin-left: 1px;
	top: 0;
	left: 0;
	content: "\f229";
	font: normal 18px/1 'dashicons';
	speak: none;
	-webkit-font-smoothing:antialiased;
}

.wp-slider .ui-slider-handle.from-handle:before,
.wp-slider .ui-slider-handle.to-handle:before {
	font-size: 20px !important;
	height: 8px;
	width: 7px;
	margin-left: 0;
}

.wp-slider .ui-slider-handle.from-handle:before {
	content: '\f139';
}

.wp-slider .ui-slider-handle.to-handle:before {
	content: '\f141';

}

.wp-slider .ui-slider-range {
	position: absolute;
	font-size: .7em;
	display: block;
	border: 0;
	background-color: transparent;
	background-image: none;
}

.wp-slider.ui-slider-horizontal {
	height: .7em;
}

.wp-slider.ui-slider-horizontal .ui-slider-handle {
	top: -.25em;
	margin-left: -.6em;
}

.wp-slider.ui-slider-horizontal .ui-slider-range {
	top: 0;
	height: 100%;
}

.wp-slider.ui-slider-horizontal .ui-slider-range-min {
	left: 0;
}

.wp-slider.ui-slider-horizontal .ui-slider-range-max {
	right: 0;
}


/*------------------------------------------------------------------------------
  11.3 - Featured Images
------------------------------------------------------------------------------*/

#select-featured-image {
	padding: 4px 0;
	overflow: hidden;
}

#select-featured-image img {
	max-width: 100%;
	height: auto;
	margin-bottom: 10px;
}

#select-featured-image a {
	float: left;
	clear: both;
}

#select-featured-image .remove {
	display: none;
	margin-top: 10px;
}

.js #select-featured-image.has-featured-image .remove {
	display: inline-block;
}

.no-js #select-featured-image .choose {
	display: none;
}

/*------------------------------------------------------------------------------
  11.4 - Post formats
------------------------------------------------------------------------------*/

.post-state-format {
	overflow: hidden;
	display: inline-block;
	vertical-align: middle;
	height: 20px;
	width: 20px;
	margin-right: 5px;
	margin-top: -4px;
}

.post-state-format:before {
	display: block;
	height: 20px;
	width: 20px;
	font: normal 20px/1 'dashicons' !important;
	speak: none;
	-webkit-font-smoothing: antialiased;
}

#post-formats-select {
	line-height: 2em;
}

#post-formats-select .post-format-icon:before {
	top: 5px;
}

input.post-format {
	margin-top: 1px;
}

label.post-format-icon {
	margin-left: 0px;
	padding: 2px 0 2px 0px;
}

.post-format-icon:before {
	position: relative;
	display: inline-block;
	margin-right: 7px;
	font: normal 18px/1 'dashicons';
	speak: none;
	-webkit-font-smoothing: antialiased;
}

.post-state-format.post-format-standard:before,
.post-format-icon.post-format-standard:before,
a.post-state-format.format-standard:before {
	content: '\f109';
}

.post-state-format.post-format-image:before,
.post-format-icon.post-format-image:before,
a.post-state-format.format-image:before {
	content: '\f128';
}

.post-state-format.post-format-gallery:before,
.post-format-icon.post-format-gallery:before,
a.post-state-format.format-gallery:before {
	content: '\f161';
}

.post-state-format.post-format-audio:before,
.post-format-icon.post-format-audio:before,
a.post-state-format.format-audio:before {
	content: '\f127';
}

.post-state-format.post-format-video:before,
.post-format-icon.post-format-video:before,
a.post-state-format.format-video:before {
	content: '\f126';
}

.post-state-format.post-format-chat:before,
.post-format-icon.post-format-chat:before,
a.post-state-format.format-chat:before {
	content: '\f125';
}

.post-state-format.post-format-status:before,
.post-format-icon.post-format-status:before,
a.post-state-format.format-status:before {
	content: '\f130';
}

.post-state-format.post-format-aside:before,
.post-format-icon.post-format-aside:before,
a.post-state-format.format-aside:before {
	content: '\f123';
}

.post-state-format.post-format-quote:before,
.post-format-icon.post-format-quote:before,
a.post-state-format.format-quote:before {
	content: '\f122';
}

.post-state-format.post-format-link:before,
.post-format-icon.post-format-link:before,
a.post-state-format.format-link:before {
	content: '\f103';
}

/*------------------------------------------------------------------------------
  12.0 - Categories
------------------------------------------------------------------------------*/

.category-adder {
	margin-left: 120px;
	padding: 4px 0;
}

.category-adder h4 {
	margin: 0 0 8px;
}

#side-sortables .category-adder {
	margin: 0;
}

#post-body ul.add-menu-item-tabs {
	float: left;
	width: 120px;
	text-align: right;
	/* Negative margin for the sake of those without JS: all tabs display */
	margin: 0 -120px 0 5px;
	padding: 0;
}

ul.add-menu-item-tabs li {
	padding: 3px 5px 3px 8px;
}

#post-body ul.add-menu-item-tabs li.tabs {
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

.wp-tab-panel,
.categorydiv div.tabs-panel,
.customlinkdiv div.tabs-panel,
.posttypediv div.tabs-panel,
.taxonomydiv div.tabs-panel {
	min-height: 42px;
	max-height: 200px;
	overflow: auto;
	padding: 0 0.9em;
	border-style: solid;
	border-width: 1px;
}

div.tabs-panel-active {
	display:block;
}

div.tabs-panel-inactive {
	display:none;
}

#front-page-warning,
#front-static-pages ul,
ul.export-filters,
.inline-editor ul.cat-checklist ul,
.categorydiv ul.categorychecklist ul,
.customlinkdiv ul.categorychecklist ul,
.posttypediv ul.categorychecklist ul,
.taxonomydiv ul.categorychecklist ul {
	margin-left: 18px;
}

ul.categorychecklist li {
	margin: 0;
	padding: 0;
	line-height: 22px;
	word-wrap: break-word;
}

.categorydiv .tabs-panel,
.customlinkdiv .tabs-panel,
.posttypediv .tabs-panel,
.taxonomydiv .tabs-panel {
	border-width: 3px;
	border-style: solid;
}

.form-wrap p,
.form-wrap label {
	font-size: 11px;
}

.form-wrap label {
	display: block;
	padding: 2px;
	font-size: 12px;
}

.form-field input,
.form-field textarea {
	border-style: solid;
	border-width: 1px;
	width: 95%;
}

p.description,
.form-wrap p {
	margin: 2px 0 5px;
}

p.help,
p.description,
span.description,
.form-wrap p {
	font-size: 13px;
	font-style: italic;
	font-family: "Open Sans", sans-serif;
}

.form-wrap .form-field {
	margin: 0 0 10px;
	padding: 8px 0;
}

.form-wrap .form-field #parent {
	max-width: 100%;
}

.col-wrap h3 {
	margin: 12px 0;
	font-size: 1.1em;
}

.col-wrap p.submit {
	margin-top: -10px;
}


/*------------------------------------------------------------------------------
  13.0 - Tags
------------------------------------------------------------------------------*/

#poststuff .taghint {
	color: #aaa;
	margin: 15px 0 -24px 12px;
}

#poststuff .tagsdiv .howto {
	margin: 0 0 6px 8px;
}

.ajaxtag .newtag {
	position: relative;
}

.tagsdiv .newtag {
	width: 180px;
}

.tagsdiv .the-tags {
	display: block;
	height: 60px;
	margin: 0 auto;
	overflow: auto;
	width: 260px;
}

#post-body-content .tagsdiv .the-tags {
	margin: 0 5px;
}

p.popular-tags {
	border: none;
	line-height: 2em;
	max-width: 1000px;
	padding: 8px 12px 12px;
	text-align: justify;
}

p.popular-tags a {
	padding: 0 3px;
}

.tagcloud {
	width: 97%;
	margin: 0 0 40px;
	text-align: justify;
}

.tagcloud h3 {
	margin: 2px 0 12px;
}

.ac_results {
	padding: 0;
	margin: 0;
	list-style: none;
	position: absolute;
	z-index: 10000;
	display: none;
	border-width: 1px;
	border-style: solid;
}

.ac_results li {
	padding: 2px 5px;
	white-space: nowrap;
	text-align: left;
}

.ac_over {
	cursor: pointer;
}

.ac_match {
	text-decoration: underline;
}

/* links tables */
table.links-table {
	width: 100%;
}

.links-table th {
	font-weight: normal;
	text-align: left;
	vertical-align: top;
	min-width: 80px;
	width: 20%;
	word-wrap: break-word;
}

.links-table th,
.links-table td {
	padding: 5px 0;
}

.links-table td label {
	margin-right: 8px;
}

.links-table td input[type="text"],
.links-table td textarea {
	width: 100%;
}

.links-table #link_rel {
	max-width: 280px;
}

/*------------------------------------------------------------------------------
  14.0 - Media Screen
------------------------------------------------------------------------------*/

.media-item .describe {
	border-collapse: collapse;
	width: 100%;
	border-top-style: solid;
	border-top-width: 1px;
	clear: both;
	cursor: default;
}

.media-item.media-blank .describe {
	border: 0;
}

.media-item .describe th {
	vertical-align: top;
	text-align: left;
	padding: 5px 10px 10px;
	width: 140px;
}

.media-item .describe .align th {
	padding-top: 0;
}

.media-item .media-item-info tr {
	background-color: transparent;
}

.media-item .describe td {
	padding: 0 8px 8px 0;
	vertical-align: top;
}

.media-item thead.media-item-info td {
	padding: 4px 10px 0;
}

.media-item .media-item-info .A1B1 {
	padding: 0 0 0 10px;
}

.media-item td.savesend {
	padding-bottom: 15px;
}

.media-item .thumbnail {
	max-height: 128px;
	max-width: 128px;
}

#wpbody-content #async-upload-wrap a {
	display: none;
}

.media-upload-form {
	margin-top: 20px;
}

.media-upload-form td label {
	margin-right: 6px;
	margin-left: 2px;
}

.media-upload-form .align .field label {
	display: inline;
	padding: 0 0 0 23px;
	margin: 0 1em 0 3px;
	font-weight: 600;
}

.media-upload-form tr.image-size label {
	margin: 0 0 0 5px;
	font-weight: 600;
}

.media-upload-form th.label label {
	font-weight: 600;
	margin: 0.5em;
	font-size: 13px;
}

.media-upload-form th.label label span {
	padding: 0 5px;
}

abbr.required {
	border: medium none;
	text-decoration: none;
}

.media-item .describe input[type="text"],
.media-item .describe textarea {
	width: 460px;
}

.media-item .describe p.help {
	margin: 0;
	padding: 0 0 0 5px;
}

.media-item .edit-attachment,
.describe-toggle-on,
.describe-toggle-off {
	display: block;
	line-height: 36px;
	float: right;
	margin-right: 15px;
}

.media-item .describe-toggle-off,
.media-item.open .describe-toggle-on {
	display: none;
}

.media-item.open .describe-toggle-off {
	display: block;
}

#media-items .media-item {
	border-style: solid;
	border-width: 1px;
	min-height: 36px;
	position: relative;
	margin-top: -1px;
	width: 100%;
}

#media-items {
	width: 623px;
}

.media-new-php #media-items {
	margin: 1em 0;
}

#media-items:empty {
	border: 0 none;
}

.media-item .filename {
	line-height: 36px;
	overflow: hidden;
	padding: 0 10px;
}

.media-item .error-div {
	padding-left: 10px;
}

.media-item .pinkynail {
	float: left;
	margin: 2px 2px 0;
	max-width: 40px;
	max-height: 32px;
}

.media-item .startopen,
.media-item .startclosed {
	display: none;
}

.media-item .original {
	position: relative;
	height: 34px;
}

.media-item .progress {
	float: right;
	height: 22px;
	margin: 6px 10px 0 0;
	width: 200px;
	line-height: 2em;
	padding: 0;
	overflow: hidden;
	margin-bottom: 2px;
	border: 1px solid #d1d1d1;
	background: #f7f7f7;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#fff), to(#f7f7f7));
	background-image: -webkit-linear-gradient(bottom, #fff, #f7f7f7);
	background-image:    -moz-linear-gradient(bottom, #fff, #f7f7f7);
	background-image:      -o-linear-gradient(bottom, #fff, #f7f7f7);
	background-image: linear-gradient(to top, #fff, #f7f7f7);
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: inset 0 0 3px rgba(0,0,0,0.1);
	box-shadow: inset 0 0 3px rgba(0,0,0,0.1);
}

.media-item .bar {
	z-index: 9;
	width: 0;
	height: 100%;
	margin-top: -24px;
	background-color: #8cc1e9;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#72a7cf), to(#8cc1e9));
	background-image: -webkit-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image:    -moz-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image:      -o-linear-gradient(bottom, #72a7cf, #8cc1e9);
	background-image: linear-gradient(to top, #72a7cf, #8cc1e9);
	-webkit-border-radius: 3px;
	border-radius: 3px;
	-webkit-box-shadow: 0 0 3px rgba(0,0,0,0.3);
	box-shadow: 0 0 3px rgba(0,0,0,0.3);
}

.media-item .progress .percent {
	z-index: 10;
	position: relative;
	width: 200px;
	padding: 0 8px;
	color: rgba(0,0,0,0.6);
}

.upload-php .fixed .column-parent {
	width: 15%;
}

.js .html-uploader #plupload-upload-ui {
	display: none;
}

.js .html-uploader #html-upload-ui {
	display: block;
}

.media-upload-form .media-item.error {
	margin: 0;
	padding: 0;
}

.media-upload-form .media-item.error p,
.media-item .error-div {
	line-height: 16px;
	margin: 5px 10px;
	padding: 0;
}

.media-item .error-div a.dismiss {
	display: block;
	float: right;
	margin: 5px 4px 0 15px;
}

/*------------------------------------------------------------------------------
  14.1 - Media Library
------------------------------------------------------------------------------*/

.find-box {
	width: 600px;
	height: 300px;
	overflow: hidden;
	padding: 33px 0 51px;
	position: absolute;
	z-index: 1000;
}

.find-box-head {
	cursor: move;
	font-weight: 600;
	height: 2em;
	line-height: 2em;
	padding: 1px 12px;
	position: absolute;
	top: 5px;
	width: 100%;
}

.find-box-inside {
	overflow: auto;
	padding: 6px;
	height: 100%;
}

.find-box-search {
	overflow: hidden;
	padding: 9px;
	position: relative;
}

.find-box-search .spinner {
	float: none;
	left: 125px;
	position: absolute;
	top: 9px;
}

#find-posts-input {
	float: left;
	width: 140px;
	height: 24px;
}

#find-posts-search {
	float: left;
	margin: 1px 4px 0 3px;
}

#find-posts-response {
	margin: 8px 0;
	padding: 0 1px 6px;
}

#find-posts-response table {
	width: 100%;
}

#find-posts-response .found-radio {
	padding: 3px 0 0 8px;
	width: 15px;
}

.find-box-buttons {
	padding: 8px;
	overflow: hidden;
}

.find-box #resize-se {
	position: absolute;
	right: 1px;
	bottom: 1px;
}

.ui-find-overlay {
	position: absolute;
	top: 0;
	left: 0;
	background-color: #000;
	opacity: 0.6;
	filter: alpha(opacity=60);
}

ul#dismissed-updates {
	display: none;
}

form.upgrade {
	margin-top: 8px;
}

form.upgrade .hint {
	font-style: italic;
	font-size: 85%;
	margin: -0.5em 0 2em 0;
}

#poststuff .inside .the-tagcloud {
	margin: 5px 0 10px;
	padding: 8px;
	border-width: 1px;
	border-style: solid;
	line-height: 1.8em;
	word-spacing: 3px;
	-webkit-border-radius: 6px;
	border-radius: 6px;
}

.drag-drop #drag-drop-area {
	border: 4px dashed #DDDDDD;
	height: 200px;
}

.drag-drop .drag-drop-inside {
	margin: 70px auto 0;
	width: 250px;
}

.drag-drop-inside p {
	color: #aaa;
	font-size: 14px;
	margin: 5px 0;
	display: none;
}

.drag-drop .drag-drop-inside p {
	text-align: center;
}

.drag-drop-inside p.drag-drop-info {
	font-size: 20px;
}

.drag-drop .drag-drop-inside p,
.drag-drop-inside p.drag-drop-buttons {
	display: block;
}

/*
#drag-drop-area:-moz-drag-over {
	border-color: #83b4d8;
}
borger color while dragging a file over the uploader drop area */
.drag-drop.drag-over #drag-drop-area {
	border-color: #83b4d8;
}

#plupload-upload-ui {
	position: relative;
}


/*------------------------------------------------------------------------------
  14.2 - Image Editor
------------------------------------------------------------------------------*/

.describe .image-editor {
	vertical-align: top;
}

.imgedit-wrap {
	position: relative;
}

.imgedit-settings p {
	margin: 8px 0;
}

.post-php .imgedit-wrap table {
	width: 100%;
}

.describe .imgedit-wrap table td,
.wp_attachment_holder .imgedit-wrap table td {
	vertical-align: top;
	padding-top: 0;
}

.describe .imgedit-wrap table td.imgedit-settings {
	padding: 0 5px;
}

.wp_attachment_holder .imgedit-wrap table td.imgedit-settings {
	width: 250px;
}

td.imgedit-settings input {
	margin-top: 0;
	vertical-align: middle;
}

.imgedit-wait {
	position: absolute;
	top: 0;
	opacity: 0.7;
	filter: alpha(opacity=70);
	width: 100%;
	height: 500px;
	display: none;
}

.spinner {
	display: none;
	float: right;
	opacity: 0.7;
	filter: alpha(opacity=70);
	width: 20px;
	height: 20px;
	margin: 2px 5px 0;
}

.no-float {
	float: none;
}

.media-disabled,
.imgedit-settings .disabled  {
	color: grey;
}

.wp_attachment_image,
.A1B1 {
	overflow: hidden;
}

.wp_attachment_image .button,
.A1B1 .button {
	float: left;
}

.no-js .wp_attachment_image .button {
	display: none;
}

.wp_attachment_image .spinner,
.A1B1 .spinner {
	float: left;
	padding: 0 0 4px 0;
	vertical-align: bottom;
}

.imgedit-menu {
	margin: 0 0 12px;
	min-width: 300px;
}

.imgedit-menu div {
	float: left;
	width: 32px;
	background: none;
	margin: 0 8px 0 0;
	height: 32px;
	-webkit-font-smoothing: antialiased;
	text-align: center;
	line-height: 28px;
}

.imgedit-menu div:before {
	font: normal 20px/1 'dashicons';
	speak: none;
	vertical-align: middle;
}

.imgedit-crop:before {
	content:'\f165';
}

.imgedit-rleft:before {
	content:'\f166';
}

.imgedit-rright:before {
	content:'\f167';
}

.imgedit-flipv:before {
	content:'\f168';
}

.imgedit-fliph:before {
	content:'\f169';
}

.imgedit-undo:before {
	content:'\f171';
}

.imgedit-redo:before {
	content:'\f172';
}

.imgedit-crop-wrap {
	position: relative;
}

.imgedit-crop {
	margin: 0 8px 0 0;
}

.imgedit-rleft {
	margin: 0 3px;
}

.imgedit-rright {
	margin: 0 8px 0 3px;
}

.imgedit-flipv {
	margin: 0 3px;
}

.imgedit-fliph {
	margin: 0 8px 0 3px;
}

.imgedit-undo {
	margin: 0 3px;
}

.imgedit-redo {
	margin: 0 8px 0 3px;
}

.imgedit-applyto img {
	margin: 0 8px 0 0;
}

.imgedit-group-top {
	margin: 5px 0;
}

.imgedit-applyto .imgedit-label {
	padding: 2px 0 0;
	display: block;
}

.imgedit-help {
	display: none;
	font-style: italic;
	margin-bottom: 8px;
}

a.imgedit-help-toggle {
	text-decoration: none;
}

.form-table td.imgedit-response {
	padding: 0;
}

.imgedit-submit {
	margin: 8px 0;
}

.imgedit-submit-btn {
	margin-left: 20px;
}

.imgedit-wrap .nowrap {
	white-space: nowrap;
}

span.imgedit-scale-warn {
	color: red;
	font-size: 20px;
	font-style: normal;
	visibility: hidden;
	vertical-align: middle;
}

.imgedit-group {
	border-width: 1px;
	border-style: solid;
	-webkit-border-radius: 3px;
	border-radius: 3px;
	margin-bottom: 8px;
	padding: 2px 10px;
}

/*------------------------------------------------------------------------------
  15.0 - Comments Screen
------------------------------------------------------------------------------*/

.form-table {
	border-collapse: collapse;
	font-size: 14px;
	margin-top: 0.5em;
	width: 100%;
	margin-bottom: -8px;
	clear: both;
}

.form-table td {
	padding: 18px 10px;
	font-size: 14px;
	line-height: 1.3;
	margin-bottom: 9px;
	vertical-align: middle;
}

.form-table th,
.form-wrap label {
	font-weight: normal;
	text-shadow: none;
	font-size: 14px;
	vertical-align: baseline;
}

.form-table th {
	vertical-align: top;
	text-align: left;
	padding: 20px 10px 20px 0;
	width: 200px;
	line-height: 1.3;
	font-weight: 600;
}

.form-table th.th-full {
	width: auto;
}

.form-table div.color-option {
	display: block;
	clear: both;
	margin-top: 12px;
}

.form-table input.tog {
	margin-top: 2px;
	margin-right: 2px;
	float: left;
}

.form-table td p {
	margin-top: 4px;
	margin-bottom: 0;
}

.form-table td fieldset label {
	margin: 0.25em 0 0.5em !important;
	display: inline-block;
}

.form-table td fieldset label,
.form-table td fieldset p,
.form-table td fieldset li {
	line-height: 1.4em;
}

.form-table input.tog,
.form-table input[type=radio] {
	margin-top: -4px;
	margin-right: 4px;
	float: none;
}

.form-table table.color-palette {
	vertical-align: bottom;
	float: left;
	margin: -12px 3px 11px;
}

.form-table .color-palette td {
	border-width: 1px 1px 0;
	border-style: solid solid none;
	height: 10px;
	line-height: 20px;
	width: 10px;
}

.commentlist li {
	padding: 1em 1em .2em;
	margin: 0;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.commentlist li li {
	border-bottom: 0;
	padding: 0;
}

.commentlist p {
	padding: 0;
	margin: 0 0 .8em;
}

/* reply to comments */
#replyrow input {
	border-width: 1px;
	border-style: solid;
}

#replyrow td {
	padding: 2px;
}



#replysubmit {
	margin: 0;
	padding: 0 5px 3px;
	text-align: center;
}

#replysubmit .spinner {
	padding: 2px 0 0;
	vertical-align: top;
	float: right;
}

#replysubmit .button {
	margin-right: 5px;
}

#replysubmit .error {
	color: red;
	line-height: 21px;
	text-align: center;
}

#replyrow h5 {
	margin: .2em 0 0;
	padding: 0 5px;
	line-height: 1.4em;
	font-size: 1em;
}

#edithead .inside {
	float: left;
	padding: 3px 0 2px 5px;
	margin: 0;
	text-align: center;
}

#edithead .inside input {
	width: 180px;
}

#edithead label {
	padding: 2px 0;
}

#replycontainer {
	padding: 5px;
}

#replycontent {
	height: 120px;
	-webkit-box-shadow: none;
	box-shadow: none;
}

.comment-php .wp-editor-area {
	height: 200px;
}

.comment-ays {
	margin-bottom: 0;
	border-bottom-style: solid;
	border-bottom-width: 1px;
}

.comment-ays .alt {
	background-color: transparent;
}

.trash-undo-inside,
.spam-undo-inside {
	margin: 1px 8px 1px 0;
	line-height: 16px;
}

.spam-undo-inside .avatar,
.trash-undo-inside .avatar {
	height: 20px;
	width: 20px;
	margin-right: 8px;
	vertical-align: middle;
}

.stuffbox .editcomment {
	clear: none;
}

#comment-status-radio p {
	margin: 3px 0 5px;
}

#comment-status-radio input {
	margin: 2px 3px 5px 0;
	vertical-align: middle;
}

#comment-status-radio label {
	padding: 5px 0;
}

.commentlist .avatar {
	vertical-align: text-top;
}


/*------------------------------------------------------------------------------
  16.0 - Themes
------------------------------------------------------------------------------*/

.theme-install-php .tablenav {
	height: auto;
}

.theme-install-php .spinner {
	margin-top: 9px;
}

h3.available-themes {
	margin: 0.3em 0 1em;
	float: left;
}

.available-theme {
	display: inline-block;
	margin-right: 10px;
	overflow: hidden;
	padding: 20px 20px 20px 0;
	vertical-align: top;
	width: 300px;
}

.available-theme .screenshot {
	width: 300px;
	height: 225px;
	display: block;
	border-width: 1px;
	border-style: solid;
	margin-bottom: 10px;
	overflow: hidden;
}

.available-theme img {
	width: 300px;
}

.available-theme h3 {
	margin: 15px 0 0;
}

.available-theme .theme-author {
	line-height: 18px;
}

.available-theme .action-links {
	margin-top: 10px;
	overflow: hidden;
}

.available-theme a.screenshot:focus {
	border-color: #777;
}

#current-theme .theme-info li,
.theme-options li,
.available-theme .action-links li {
	float: left;
	padding-right: 10px;
	margin-right: 10px;
	border-right: 1px solid #dfdfdf;
}

.available-theme .action-links li {
	padding-right: 8px;
	margin-right: 8px;
}

.ie8 .available-theme .action-links li {
	padding-right: 7px;
	margin-right: 7px;
}

#current-theme .theme-info li:last-child,
.theme-options li:last-child,
.available-theme .action-links li:last-child {
	padding-right: 0;
	margin-right: 0;
	border-right: 0;
}

.available-theme .action-links .delete-theme {
	float: right;
	margin-left: 8px;
	margin-right: 0;
}

.available-theme .action-links .delete-theme a {
	color: red;
	padding: 2px;
}

.available-theme .action-links .delete-theme a:hover {
	background: red;
	color: #fff;
	text-decoration: none;
}

.available-theme .action-links p {
	float: left;
}

#current-theme {
	margin: 20px 0 10px;
	padding: 0 0 20px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	overflow: hidden;
}

#current-theme.has-screenshot {
	padding-left: 330px;
}

#current-theme h3 {
	margin: 0;
	font-size: 12px;
	font-weight: normal;
	color: #999;
}

#current-theme h4 {
	margin: 3px 0 16px;
	font-size: 20px;
}

#current-theme h4 span {
	margin-left: 20px;
	font-size: 12px;
	font-weight: normal;
}

#current-theme a {
	border-bottom: none;
}

#current-theme .theme-info {
	margin: 1em 0;
	overflow: hidden;
}

#current-theme .theme-description {
	margin-top: 5px;
	max-width: 600px;
	line-height: 1.6em;
}

#current-theme img {
	float: left;
	width: 300px;
	margin-left: -330px;

	border-width: 1px;
	border-style: solid;
}

.theme-options {
	overflow: hidden;
	font-size: 14px;
	padding-bottom: 10px;
}

.theme-options .load-customize {
	margin-right: 30px;
	float: left;
}

.theme-options span {
	float: left;
	margin-right: 10px;
	text-transform: uppercase;
	font-size: 11px;
	line-height: 22px;
	color: #999;
}

.theme-options ul {
	float: left;
	margin: 0;
}

/* Allow for three-up on 1024px wide screens, e.g. tablets */
@media only screen and (max-width: 1200px) {
	.available-theme,
	.available-theme .screenshot,
	#current-theme img {
		width: 240px;
	}

	.available-theme .screenshot {
		height: 180px;
	}

	.available-theme img {
		width: 100%;
	}

	#current-theme.has-screenshot {
		padding-left: 270px;
	}

	#current-theme img {
		margin-left: -270px;
	}
}

#post-body ul.add-menu-item-tabs li.tabs a,
#TB_window #TB_title a.tb-theme-preview-link,
#TB_window #TB_title a.tb-theme-preview-link:visited {
	font-weight: 600;
	text-decoration: none;
}

#TB_window #TB_title {
	background-color: <?php echo $background;?>;
	color: #cfcfcf;
}

#broken-themes {
	text-align: left;
	width: 50%;
	border-spacing: 3px;
	padding: 3px;
}

.theme-install-php h4 {
	margin: 2.5em 0 8px;
}


/*------------------------------------------------------------------------------
  16.1 - Custom Header Screen
------------------------------------------------------------------------------*/

.appearance_page_custom-header #headimg {
	border: 1px solid #DFDFDF;
	overflow: hidden;
	width: 100%;
}

.appearance_page_custom-header #upload-form p label {
	font-size: 12px;
}

.appearance_page_custom-header .available-headers .default-header {
	float: left;
	margin: 0 20px 20px 0;
}

.appearance_page_custom-header .random-header {
	clear: both;
	margin: 0 20px 20px 0;
	vertical-align: middle;
}

.appearance_page_custom-header .available-headers label input,
.appearance_page_custom-header .random-header label input {
	margin-right: 10px;
}

.appearance_page_custom-header .available-headers label img {
	vertical-align: middle;
}


/*------------------------------------------------------------------------------
  16.2 - Custom Background Screen
------------------------------------------------------------------------------*/

div#custom-background-image {
	min-height: 100px;
	border: 1px solid #dfdfdf;
}

div#custom-background-image img {
	max-width: 400px;
	max-height: 300px;
}


/*------------------------------------------------------------------------------
  16.3 - Tabbed Admin Screen Interface (Experimental)
------------------------------------------------------------------------------*/

.nav-tab {
	border-style: solid;
	border-width: 1px 1px 0;
	font-size: 12px;
	line-height: 16px;
	display: inline-block;
	padding: 4px 14px 6px;
	text-decoration: none;
	margin: -4px 4px -1px 0;
}

.nav-tab-active {
	border-width: 1px;
}

.nav-tab-active,
.nav-tab-active:hover {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	border-bottom-width: 1px;
	border-bottom-style: solid;
	padding-bottom: 0;
}

h2 .nav-tab {
	padding: 4px 10px 6px;
	font-weight: 200;
	font-size: 20px;
	line-height: 24px;

}


/*------------------------------------------------------------------------------
  17.0 - Plugins
------------------------------------------------------------------------------*/

#dashboard_right_now .versions .b,
#post-status-display,
#post-visibility-display,
#adminmenu .wp-submenu li.current,
#adminmenu .wp-submenu li.current a,
#adminmenu .wp-submenu li.current a:hover,
.media-item .percent,
.plugins .name,
#pass-strength-result.strong,
#pass-strength-result.short,
#ed_reply_toolbar #ed_reply_strong,
.item-controls .item-order a,
.feature-filter .feature-name {
	font-weight: 600;
}

.plugins p {
	margin: 0 4px;
	padding: 0;
}

.plugins .desc p {
	margin: 0 0 8px;
}

.plugins td.desc {
	line-height: 1.5em;
}

.plugins .desc ul,
.plugins .desc ol {
	margin: 0 0 0 2em;
}

.plugins .desc ul {
	list-style-type: disc;
}

.plugins .row-actions-visible {
	font-size: 13px;
	padding: 0;
}

.plugins .inactive td,
.plugins .inactive th,
.plugins .active td,
.plugins .active th {
	padding: 10px 9px;
}

.plugins .update th,
.plugins .update td {
	border-bottom: 0;
}
.plugin-update-tr td {
	border-top: 0;
}

#wpbody-content .plugins .plugin-title,
#wpbody-content .plugins .theme-title {
	padding-right: 12px;
	white-space:nowrap;
}

.plugins .inactive .plugin-title strong {
	font-weight: 400;
}

.plugins .second,
.plugins .row-actions-visible {
	padding: 0 0 5px;
}

.plugins .update .second,
.plugins .update .row-actions-visible {
	padding-bottom: 0;
}

.plugins-php .widefat tfoot th,
.plugins-php .widefat tfoot td {
	border-top-style: solid;
	border-top-width: 1px;
}

.plugin-update-tr .update-message {
	border: none;
	font-size: 13px;
	font-weight: normal;
	margin: 6px 12px 12px;
	padding: 6px 12px;
}

.plugin-update-tr .update-message:before {
	content: '\f113';
	display: inline-block;
	font: normal 20px/1 'dashicons';
	speak: none;
	margin: 0 8px 0 -2px;
	-webkit-font-smoothing: antialiased;
	vertical-align: top;
}

.plugin-install-php h4 {
	margin: 2.5em 0 8px;
}


/*------------------------------------------------------------------------------
  18.0 - Users
------------------------------------------------------------------------------*/

#profile-page .form-table textarea {
	width: 500px;
	margin-bottom: 6px;
}

#profile-page .form-table #rich_editing {
	margin-right: 5px
}

#your-profile legend {
	font-size: 22px;
}

#display_name {
	width: 15em;
}

#createuser .form-field input {
	width: 25em;
}

/*------------------------------------------------------------------------------
  19.0 - Tools
------------------------------------------------------------------------------*/

body.press-this {
	color: #333;
	margin: 0;
	padding: 0;
	min-width: 708px;
	min-height: 400px;
}

.pressthis {
	margin: 20px 0;
}

.pressthis a,
.pressthis a:hover,
.pressthis a:focus,
.pressthis a:active {
	display: inline-block;
	position: relative;
	cursor: move;
	color: #333;
	background: #e6e6e6;
	-webkit-border-radius: 5px;
	border-radius: 5px;
	border: 1px solid #b4b4b4;
	font-style: normal;
	line-height: 16px;
	font-size: 14px;
	text-decoration: none;
}

.pressthis a:active {
	outline: none;
}

.pressthis a:hover:after {
	-webkit-transform: skew(20deg) rotate(9deg);
	-moz-transform: skew(20deg) rotate(9deg);
	transform: skew(20deg) rotate(9deg);
	-webkit-box-shadow: 0 10px 8px rgba(0, 0, 0, 0.7);
	box-shadow: 0 10px 8px rgba(0, 0, 0, 0.7);
}

.pressthis a span {
	display: inline-block;
	margin: 0px 0 0;
	padding: 0px 12px 8px 9px;
}

.pressthis a span:before {
	font: normal 20px/1 'dashicons';
	content:'\f157';
	position: relative;

	display: inline-block;
	top: 4px;
	margin-right: 4px;
}

.pressthis a:after {
	content: '';
	width: 70%;
	height: 55%;
	z-index: -1;
	position: absolute;
	right: 10px;
	bottom: 9px;
	background: transparent;

	-webkit-transform: skew(20deg) rotate(6deg);
	-moz-transform: skew(20deg) rotate(6deg);
	transform: skew(20deg) rotate(6deg);
	-webkit-box-shadow: 0 10px 8px rgba(0, 0, 0, 0.6);
	box-shadow: 0 10px 8px rgba(0, 0, 0, 0.6);
}

/*------------------------------------------------------------------------------
  20.0 - Settings
------------------------------------------------------------------------------*/

#utc-time, #local-time {
	padding-left: 25px;
	font-style: italic;
	font-family: "Open Sans", sans-serif;
}

.defaultavatarpicker .avatar {
	margin: 2px 0;
	vertical-align: middle;
}

.options-general-php .spinner {
	float: none;
	margin: -3px 3px;
}

/*------------------------------------------------------------------------------
  21.0 - Admin Footer
------------------------------------------------------------------------------*/

#wpfooter {
	position: absolute;
	bottom: 0;
	left: 0;
	right: 0;
	padding: 10px 0;
	margin-right: 20px;
	border-top-width: 1px;
	border-top-style: solid;
}

#wpfooter p {
	font-size: 13px;
	margin: 0;
	line-height: 20px;
}

#footer-thankyou {
	font-style: italic;
}

#wpfooter a {
	text-decoration: none;
}

#wpfooter a:hover {
	text-decoration: underline;
}

/*------------------------------------------------------------------------------
  22.0 - About Pages
------------------------------------------------------------------------------*/

.about-wrap {
	position: relative;
	margin: 30px 4% 0 1.5%;
	max-width: 1050px; /* readability */

	font-size: 15px;
}

.about-wrap div.updated,
.about-wrap div.error {
	display: none !important;
}

/* Typography */

.about-wrap p {
	line-height: 1.6em;
}

.about-wrap h1 {
	margin: 0.2em 200px 0 0;
	line-height: 1.2em;
	font-size: 3em;
	font-weight: 300;
}

.about-text,
.about-description,
.about-wrap li.wp-person a.web {
	font-family: "Open Sans", sans-serif;
	font-weight: normal;
	line-height: 1.6em;
	font-size: 20px;
}

.about-description {
	margin-top: 1.4em;
}

.about-text {
	font-size: 24px;
	font-weight: 300;
	margin: 1em 200px 1.4em 0;
	min-height: 60px;
}

.about-wrap h3 {
	font-size: 24px;
	margin-bottom: 1em;
	padding-top: 20px;
}

.about-wrap .feature-section {
	padding-bottom: 20px;
}

.about-wrap .feature-section h4 {
	margin-bottom: 0.6em;
}

.about-wrap .feature-section p {
	margin-top: 0.6em;
}

.about-wrap code {
	font-size: 14px;
}

/* Point Releases */

.about-wrap .point-releases {
	margin-top: 5px;
}

.about-wrap .changelog.point-releases h3 {
	padding-top: 35px;
	border-top-width: 1px;
	border-top-style: solid;
}

.about-wrap .changelog.point-releases h3:first-child {
	padding-top: 7px;
	border: 0;
}

/* WordPress Version Badge */

.wp-badge {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzJweCIgaGVpZ2h0PSIzMi4wMDJweCIgdmlld0JveD0iLTMxOS41IDU2OC40OTkgMzIgMzIuMDAyIiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IC0zMTkuNSA1NjguNDk5IDMyIDMyLjAwMiIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdHlsZTB7ZmlsbDoJI0ZGRkZGRjt9PC9zdHlsZT48Zz48Zz48cGF0aCBkPSJNLTMxNy4yMjYgNTg0LjQ5OWMwIDUuNCAzLjIgMTAuMSA3LjcgMTIuMzUzbC02LjU0Ny0xNy45MzggQy0zMTYuNzk5IDU4MC42Mi0zMTcuMjI2IDU4Mi41MDktMzE3LjIyNiA1ODQuNDk5eiIgY2xhc3M9InN0eWxlMCIvPjxwYXRoIGQ9Ik0tMjk0LjIzNCA1ODMuODA3YzAtMS42OTctMC42MDktMi44NzEtMS4xMzItMy43ODVjLTAuNjk1LTEuMTMyLTEuMzQ4LTIuMDg5LTEuMzQ4LTMuMjIgYzAtMS4yNjIgMC45NTYtMi40MzYgMi4zMDUtMi40MzZjMC4wNjEgMCAwLjEgMCAwLjIgMC4wMTFjLTIuNDQyLTIuMjM3LTUuNjk1LTMuNjA0LTkuMjY5LTMuNjA0IGMtNC43OTYgMC05LjAxNCAyLjQ2LTExLjQ2OCA2LjE4N2MwLjMyMiAwIDAuNiAwIDAuOSAwLjAxN2MxLjQzNiAwIDMuNjU4LTAuMTc1IDMuNjU4LTAuMTc1IGMwLjczOS0wLjA0MyAwLjggMSAwLjEgMS4xMzFjMCAwLTAuNzQ0IDAuMDg3LTEuNTcgMC4xMzFsNC45OTcgMTQuODY2bDMuMDA1LTkuMDA3bC0yLjEzOS01Ljg1OSBjLTAuNzM5LTAuMDQ0LTEuNDM5LTAuMTMxLTEuNDM5LTAuMTMxYy0wLjc0LTAuMDQzLTAuNjUzLTEuMTc0IDAuMDg3LTEuMTMxYzAgMCAyLjMgMC4yIDMuNiAwLjIgYzEuNDM1IDAgMy42NTgtMC4xNzUgMy42NTgtMC4xNzVjMC43MzktMC4wNDMgMC44IDEgMC4xIDEuMTMxYzAgMC0wLjc0NCAwLjA4Ny0xLjU3IDAuMTMxbDQuOTYgMTQuNzUzbDEuMzY5LTQuNTc0IEMtMjk0LjY4NyA1ODYuMzQ0LTI5NC4yMzQgNTg0Ljk4MS0yOTQuMjM0IDU4My44MDd6IiBjbGFzcz0ic3R5bGUwIi8+PHBhdGggZD0iTS0zMDMuMjU5IDU4NS42OTlsLTQuMTE5IDExLjk2N2MxLjIzIDAuNCAyLjUgMC42IDMuOSAwLjU1OWMxLjU5OSAwIDMuMTMxLTAuMjc1IDQuNTU4LTAuNzc3IGMtMC4wMzYtMC4wNjEtMC4wNy0wLjEyMy0wLjA5OS0wLjE4OUwtMzAzLjI1OSA1ODUuNjk5eiIgY2xhc3M9InN0eWxlMCIvPjxwYXRoIGQ9Ik0tMjkxLjQ1NiA1NzcuOTE0YzAuMDU5IDAuNCAwLjEgMC45IDAuMSAxLjQxMWMwIDEuMzkzLTAuMjYxIDIuOTU4LTEuMDQ0IDQuOTE2bC00LjE5MiAxMi4xIGM0LjA4LTIuMzc5IDYuODI0LTYuNzk5IDYuODI0LTExLjg2MkMtMjg5Ljc3NSA1ODIuMTEyLTI5MC4zODUgNTc5Ljg2OS0yOTEuNDU2IDU3Ny45MTR6IiBjbGFzcz0ic3R5bGUwIi8+PHBhdGggZD0iTS0zMDMuNSA1NjguNDk5Yy04LjgyMiAwLTE2IDcuMTc4LTE2IDE2YzAgOC44IDcuMiAxNiAxNiAxNS45OTlzMTYtNy4xNzggMTYtMTUuOTk5IEMtMjg3LjUgNTc1LjY3Ny0yOTQuNjc4IDU2OC40OTktMzAzLjUgNTY4LjQ5OXogTS0zMDMuNSA1OTkuNzY2Yy04LjQxOCAwLTE1LjI2Ny02Ljg1LTE1LjI2Ny0xNS4yNjcgYzAtOC40MTggNi44NDktMTUuMjY2IDE1LjI2Ny0xNS4yNjZjOC40MTcgMCAxNS4zIDYuOCAxNS4zIDE1LjI2NkMtMjg4LjIzNCA1OTIuOTE2LTI5NS4wODMgNTk5Ljc2Ni0zMDMuNSA1OTkuNzY2eiIgY2xhc3M9InN0eWxlMCIvPjwvZz48L2c+PC9zdmc+);
	background-position: center 30px;
	background-repeat: no-repeat;
	background-size: 110px 110px;
	font-size: 14px;
	text-align: center;
	font-weight: 600;
	margin: 5px 0 0;
	padding-top: 155px;
	height: 45px;
	display: inline-block;
	width: 165px;
	text-rendering: optimizeLegibility;
}

.about-wrap .wp-badge {
	position: absolute;
	top: 0;
	right: 0;
}

/* Tabs */

h2.nav-tab-wrapper {
	margin-left: 0;
	margin-bottom: 20px;
}

.about-wrap h2.nav-tab-wrapper {
	padding-left: 6px;
	padding-bottom: 1px !important;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.about-wrap h2 .nav-tab {
	font-size: 20px;
	margin: 0 10px -2px 0;
	padding: 5px 10px;
	vertical-align: top;
}

.about-wrap h2 .nav-tab-active {
	font-weight: 600;
}

/* Changelog / Update screen */

.about-wrap .feature-section img {
	border-width: 1px;
	border-style: solid;
	margin: 0 1.94% 10px 0;
}

.about-wrap .feature-section.three-col img {
	margin: 0.5em 0 0.5em 5px;
	max-width: 100%;
	float: none;
}

.ie8 .about-wrap .feature-section.three-col img {
	margin-left: 0;
}

.about-wrap .feature-section.images-stagger-right img {
	float: right;
	margin: 0 5px 12px 2em;
}

.about-wrap .feature-section.images-stagger-left img {
	float: left;
	margin: 0 2em 12px 5px;
}

.about-wrap .feature-section img.image-100 {
	margin: 0 0 2em 0;
	width: 100%;
}

.about-wrap .feature-section img.image-66 {
	width: 65%;
}

.about-wrap .feature-section img.image-50 {
	max-width: 50%;
}

.about-wrap .feature-section img.image-30 {
	max-width: 31.2381%;
}

.ie8 .about-wrap .feature-section img {
	border-width: 1px;
	border-style: solid;
}

.about-wrap .images-stagger-right img.image-30:nth-child(2) {
	margin-left: 1em;
}

.about-wrap .feature-section.col {
	margin-bottom: 0;
}

.about-wrap .feature-section.col h4 {
	margin:  0 0 0.6em 0;
}

.about-wrap .feature-section.col .last-feature {
	margin-right: 0;
}

.about-wrap .feature-section.two-col div {
	width: 47%;
	margin-right: 4.999999999%;
	float: left;
}

.about-wrap .feature-section.three-col div {
	width: 30%;
	margin-right: 4.999999999%;
	float: left;
}

.about-wrap .three-col-images {
	text-align: center;
}

.about-wrap .three-col-images img {
	margin: 0 0 10px;
}

.about-wrap .three-col-images .last-feature {
	float: right;
}

.about-wrap .three-col-images .first-feature {
	float: left;
}

.about-wrap .changelog .feature-section {
	overflow: hidden;
	padding-bottom: 0;
}

.about-wrap .changelog li {
	list-style-type: disc;
	margin-left: 3em;
}

@media only screen and (max-width: 900px) {
	.about-wrap .feature-section.images-stagger-left img,
	.about-wrap .feature-section.images-stagger-right img {
		clear: both;
	}
}

@media only screen and (max-width: 768px) {
	.about-wrap .feature-section img.image-66 {
		float: none;
		width: 98%;
		max-width: 98%;
	}

	.about-wrap .feature-section.images-stagger-right img.image-66 {
		margin-left: 3px;
	}

	.about-wrap .feature-section.images-stagger-left img.image-66 {
		margin-right: 3px;
	}
}

/* Return to Dashboard Home link */

.about-wrap .return-to-dashboard {
	margin: 30px 0 0 -5px;
	font-size: 14px;
	font-weight: 600;
}

.about-wrap .return-to-dashboard a {
	text-decoration: none;
	padding: 0 5px;
}

/* Credits */

.about-wrap h4.wp-people-group {
	margin-top: 2.6em;
	font-size: 16px;
}

.about-wrap ul.wp-people-group {
	overflow: hidden;
	padding: 5px;
	margin: 0 -15px 0 -5px;
}

.about-wrap ul.compact {
	margin-bottom: 0
}

.about-wrap li.wp-person {
	float: left;
	margin-right: 10px;
}

.about-wrap li.wp-person img.gravatar {
	float: left;

	margin: 0 10px 10px 0;
	padding: 2px;
	width: 60px;
	height: 60px;
}

.about-wrap ul.compact li.wp-person img.gravatar {
	width: 30px;
	height: 30px;
}

.about-wrap li.wp-person {
	height: 70px;
	width: 280px;
	padding-bottom: 15px;
}

.about-wrap ul.compact li.wp-person {
	height: auto;
	width: 180px;
	padding-bottom: 0;
	margin-bottom: 0;
}

.about-wrap #wp-people-group-validators + p.wp-credits-list {
	margin-top: 0;
}

.about-wrap li.wp-person a.web {
	display: block;
	margin: 6px 0 2px;
	font-size: 16px;
	text-decoration: none;
}

.about-wrap p.wp-credits-list a {
	white-space: nowrap;
}

/* Freedoms */

.freedoms-php .about-wrap ol {
	margin: 40px 60px;
}

.freedoms-php .about-wrap ol li {
	list-style-type: decimal;
	font-weight: 600;
}

.freedoms-php .about-wrap ol p {
	font-weight: normal;
	margin: 0.6em 0;
}

/*------------------------------------------------------------------------------
  23.0 - Full Overlay w/ Sidebar
------------------------------------------------------------------------------*/

body.full-overlay-active {
	overflow: hidden;
}

.wp-full-overlay {
	background: #fff;
	z-index: 500000;
	position: fixed;
	overflow: visible;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
	min-width: 0;
}

.wp-full-overlay-sidebar {
	-webkit-box-sizing: border-box;
	-moz-box-sizing:    border-box;
	box-sizing:         border-box;

	position: fixed;
	width: 300px;
	height: 100%;
	top: 0;
	bottom: 0;
	left: 0;
	padding: 0;
	margin: 0;
	z-index: 10;
	overflow: auto;
	background: #f5f5f5;
	border-right: 1px solid rgba( 0, 0, 0, 0.2 );
}

.wp-full-overlay.collapsed .wp-full-overlay-sidebar {
	overflow: visible;
}

.wp-full-overlay.collapsed,
.wp-full-overlay.expanded .wp-full-overlay-sidebar {
	margin-left: 0 !important;
}

.wp-full-overlay.expanded {
	margin-left: 300px;
}

.wp-full-overlay.collapsed .wp-full-overlay-sidebar {
	margin-left: -300px;
}

.wp-full-overlay-sidebar:after {
	content: '';
	display: block;
	position: absolute;
	top: 0;
	bottom: 0;
	right: 0;
	width: 3px;
	z-index: 1000;
}

.wp-full-overlay-main {
	position: absolute;
	left: 0;
	right: 0;
	top: 0;
	bottom: 0;
	height: 100%;
}

.wp-full-overlay-sidebar .wp-full-overlay-header {
	position: absolute;
	left: 0;
	right: 0;
	height: 45px;
	padding: 0 20px;
	line-height: 45px;
	z-index: 10;
	margin: 0;
}

.wp-full-overlay-sidebar .wp-full-overlay-header {
	border-top: 0;
	box-shadow: inset 0 -1px 0 0px #dfdfdf;
}

.wp-full-overlay-sidebar .wp-full-overlay-footer {
	bottom: 0;
	border-bottom: 0;
	border-top: 1px solid #dfdfdf;
	box-shadow: inset 0 1px 0 0px #fff;
}

.wp-full-overlay-sidebar .wp-full-overlay-sidebar-content {
	position: absolute;
	top: 45px;
	bottom: 45px;
	left: 0;
	right: 0;
	overflow: auto;
}

/* Close Link */
.wp-full-overlay .close-full-overlay {
	text-decoration: none;
}

/* Collapse Button */
.wp-full-overlay a.collapse-sidebar {
	position: absolute;
	bottom: 12px;
	left: 0;
	z-index: 50;
	display: block;
	width: 19px;
	height: 19px;
	margin-left: 15px;
	padding: 0;
	border-radius: 50%;
	text-decoration: none;
}

.wp-full-overlay.collapsed .collapse-sidebar {
	position: absolute;
	left: 100%;
}

.wp-full-overlay .collapse-sidebar-arrow {
	position: absolute;
	margin-top: 2px;
	margin-left: 2px;
	display: block;
	width: 15px;
	height: 15px;
}

.wp-full-overlay.collapsed .collapse-sidebar-arrow {
	background-position: -1px -109px;
}

.wp-full-overlay .collapse-sidebar-label {
	position: absolute;
	left: 100%;
	color: #808080;
	line-height: 20px;
	margin-left: 10px;
}

.wp-full-overlay.collapsed .collapse-sidebar-label {
	display: none;
}

.wp-full-overlay .collapse-sidebar:hover .collapse-sidebar-label {
	color: #666;
}

/* Animations */
.wp-full-overlay,
.wp-full-overlay-sidebar,
.wp-full-overlay .collapse-sidebar,
.wp-full-overlay-main {
	-webkit-transition-property: left, right, top, bottom, width, margin;
	-moz-transition-property:    left, right, top, bottom, width, margin;
	-ms-transition-property:     left, right, top, bottom, width, margin;
	-o-transition-property:      left, right, top, bottom, width, margin;
	transition-property:         left, right, top, bottom, width, margin;

	-webkit-transition-duration: 0.2s;
	-moz-transition-duration:    0.2s;
	-ms-transition-duration:     0.2s;
	-o-transition-duration:      0.2s;
	transition-duration:         0.2s;
}


/*------------------------------------------------------------------------------
  24.0 - Customize Loader
------------------------------------------------------------------------------*/

.no-customize-support .hide-if-no-customize,
.customize-support .hide-if-customize,
.no-customize-support.wp-core-ui .hide-if-no-customize,
.no-customize-support .wp-core-ui .hide-if-no-customize,
.customize-support.wp-core-ui .hide-if-customize,
.customize-support .wp-core-ui .hide-if-customize {
	display: none;
}

#customize-container {
	display: none;
	background: #fff;
	z-index: 500000;
	position: fixed;
	overflow: visible;
	top: 0;
	bottom: 0;
	left: 0;
	right: 0;
	height: 100%;
}

.customize-active #customize-container {
	display: block;
}

.customize-loading #customize-container iframe {
	opacity: 0;
}

.customize-loading #customize-container {
}

#customize-container iframe,
#theme-installer iframe {
	height: 100%;
	width: 100%;
	z-index: 20;

	-webkit-transition: opacity 0.3s;
	-moz-transition:    opacity 0.3s;
	-ms-transition:     opacity 0.3s;
	-o-transition:      opacity 0.3s;
	transition:         opacity 0.3s;
}

#customize-container .collapse-sidebar {
	bottom: 16px;
}

#customize-controls {
	margin-top: 0;
}

#theme-installer {
	display: none;
}

#theme-installer.single-theme {
	display: block;
}

.install-theme-info {
	display: none;
	padding: 10px 20px 20px;
}

.single-theme .install-theme-info {
	padding-top: 15px;
}

#theme-installer .install-theme-info {
	display: block;
}

.install-theme-info .theme-install {
	float: right;
	margin-top: 18px;
}

.install-theme-info .theme-name {
	font-size: 16px;
	line-height: 24px;
	margin-bottom: 0;
}

.install-theme-info .theme-screenshot {
	margin-top: 15px;
	width: 258px;
	border: 1px solid #ccc;
}

.install-theme-info .theme-details {
	overflow: hidden;
}

.theme-details .theme-version {
	margin: 15px 0;
	float: left;
}

.theme-details .star-holder {
	margin: 14px 0;
	float: right;
}

.theme-details .theme-description {
	float: left;
	color: #777;
	line-height: 20px;
}

/*------------------------------------------------------------------------------
  25.0 - Misc
------------------------------------------------------------------------------*/

#excerpt,
.attachmentlinks {
	margin: 0;
	height: 4em;
	width: 98%;
}

#template div {
	margin-right: 190px;
}

p.pagenav {
	margin: 0;
	display: inline;
}

.pagenav span {
	font-weight: 600;
	margin: 0 6px;
}

.row-title {
	font-size: 14px !important;
	font-weight: 600;
}

.column-author img, .column-username img {
	float: left;
	margin-right: 10px;
	margin-top: 1px;
}

.row-actions {
	font-size: 13px;
	visibility: hidden;
	padding: 2px 0 0;
}

.mobile .row-actions {
	visibility: visible;
}

tr:hover .row-actions,
div.comment-item:hover .row-actions {
	visibility: visible;
}

.row-actions-visible {
	padding: 2px 0 0;
}

.form-table .pre {
	padding: 8px;
	margin: 0;
}

table.form-table td .updated {
	font-size: 13px;
}

.tagchecklist {
	margin-left: 14px;
	font-size: 12px;
	overflow: auto;
}
.tagchecklist br {
	display: none;
}
.tagchecklist strong {
	margin-left: -8px;
	position: absolute;
}
.tagchecklist span {
	margin-right: 25px;
	display: block;
	float: left;
	font-size: 13px;
	line-height: 1.8em;
	white-space: nowrap;
	cursor: default;
}

.tagchecklist span a {
	cursor: pointer;
	display: block;
	float: left;
	height: 20px;
	margin: 1px 0 0 -17px;
	overflow: hidden;
	position: absolute;
	text-indent: 0;
	width: 20px;
}

#poststuff h2 {
	margin-top: 20px;
	font-size: 1.5em;
	margin-bottom: 15px;
	padding: 0 0 3px;
	clear: left;
}

#poststuff h3,
.metabox-holder h3 {
	font-size: 15px;
	font-weight: normal;
	padding: 7px 12px;
	margin: 0;
	line-height: 1.4;
}

#poststuff .inside {
	margin: 6px 0 8px;
}

#poststuff .inside #parent_id,
#poststuff .inside #page_template {
	max-width: 100%;
}

.inline-edit-row #post_parent,
.inline-edit-row select[name="page_template"] {
	max-width: 80%;
}

.ie8 #poststuff .inside #parent_id,
.ie8 #poststuff .inside #page_template,
.ie8 .inline-edit-row #post_parent,
.ie8 .inline-edit-row select[name="page_template"] {
	width: 250px;
}

#post-visibility-select {
	line-height: 1.5em;
	margin-top: 3px;
}

#poststuff #submitdiv .inside {
	margin: 0;
	padding: 0;
}

.edit-form-section {
	margin-bottom: 20px;
}

#templateside ul li a {
	text-decoration: none;
}

.tool-box .title {
	margin: 8px 0;
	font-size: 18px;
	font-weight: normal;
	line-height: 24px;
}

#sidemenu {
	margin: -30px 15px 0 315px;
	list-style: none;
	position: relative;
	float: right;
	padding-left: 10px;
	font-size: 12px;
}

#sidemenu a {
	padding: 0 7px;
	display: block;
	float: left;
	line-height: 28px;
	border-top-width: 1px;
	border-top-style: solid;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

#sidemenu li {
	display: inline;
	line-height: 200%;
	list-style: none;
	text-align: center;
	white-space: nowrap;
	margin: 0;
	padding: 0;
}

#sidemenu a.current {
	font-weight: normal;
	padding-left: 6px;
	padding-right: 6px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-top-right-radius: 3px;
	border-top-left-radius: 3px;
	border-top-right-radius: 3px;
	border-width: 1px;
	border-style: solid;
}

#sidemenu li a .count-0 {
	display: none;
}

.plugin-install #description,
.plugin-install-network #description {
	width: 60%;
}

table .vers,
table .column-visible,
table .column-rating {
	text-align: left;
}

.error-message {
	color: red;
	font-weight: 600;
}

/* Scrollbar fix for bulk upgrade iframe */
body.iframe {
	height: 98%;
}


/* - Only used once or twice in all of WP - deprecate for global style
------------------------------------------------------------------------------*/
td.media-icon {
	text-align: center;
	width: 80px;
	padding-top: 8px;
	padding-bottom: 8px;
}

td.media-icon img {
	max-width: 80px;
	max-height: 60px;
}

#howto {
	font-size: 11px;
	margin: 0 5px;
	display: block;
}

.importers td {
	padding-right: 14px;
}

.importers {
	font-size: 16px;
	width: auto;
}

#namediv table {
	width: 100%;
}

#namediv td.first {
	width: 10px;
	white-space: nowrap;
}

#namediv input {
	width: 98%;
}

#namediv p {
	margin: 10px 0;
}

#submitdiv h3 {
	margin-bottom: 0 !important;
}

/* - Used - but could/should be deprecated with a CSS reset
------------------------------------------------------------------------------*/
.zerosize {
	height: 0;
	width: 0;
	margin: 0;
	border: 0;
	padding: 0;
	overflow: hidden;
	position: absolute;
}

br.clear {
	height: 2px;
	line-height: 2px;
}

.checkbox {
	border: none;
	margin: 0;
	padding: 0;
}

fieldset {
	border: 0;
	padding: 0;
	margin: 0;
}

.post-categories {
	display: inline;
	margin: 0;
	padding: 0;
}

.post-categories li {
	display: inline;
}


/*-----------------------------------------------------------------------------
 MERGED
-------------------------------------------------------------------------------*/

/* dashboard */
.edit-box {
	display: none;
}

h3:hover .edit-box {
	display: inline;
}

#dashboard-widgets form .input-text-wrap input {
	width: 100%;
}

#dashboard-widgets form .textarea-wrap textarea {
	width: 100%;
}

#dashboard-widgets .postbox form .submit {
	float: none;
	margin: .5em 0 0;
	padding: 0;
	border: none;
}

#dashboard-widgets-wrap #dashboard-widgets .postbox form .submit #publish {
	min-width: 0;
}

#dashboard-widgets a {
	text-decoration: none;
}

#dashboard-widgets h3 a {
	text-decoration: underline;
}

#dashboard-widgets h3 .postbox-title-action {
	position: absolute;
	right: 10px;
	padding: 0;
	top: 5px;
}

.js #dashboard-widgets h3 .postbox-title-action {
	right: 33px;
}

#dashboard-widgets h4 {
	font-weight: 600;
	font-size: 14px;
	margin: 0 0 .2em;
	padding: 0;
}

#dashboard_plugins h5 {
	font-size: 14px;
}

/* Right Now */
#dashboard_right_now p.sub,
#dashboard_right_now .table, #dashboard_right_now .versions {
	margin: -12px;
}

#dashboard_right_now .inside {
	font-size: 13px;
	padding-top: 20px;
}

#dashboard_right_now p.sub {
	padding: 5px 0 15px;
	font-size: 11px;
	font-weight: 600;
	left: 14px;
	letter-spacing: 1px;
	position: absolute;
	text-transform: uppercase;
	top: -17px;
}

#dashboard_right_now .table {
	margin: 0;
	padding: 0;
	position: relative;
}

#dashboard_right_now .table_content {
	float: left;
	width: 48%;
}

#dashboard_right_now .table_discussion {
	float: right;
	width: 45%;
}

#dashboard_right_now table td {
	padding: 3px 0;
	white-space: nowrap;
}

#dashboard_right_now table tr.first td {
	border-top: none;
}

#dashboard_right_now td.b {
	padding-right: 6px;
	text-align: right;
	font-size: 14px;
	width: 1%;
}

#dashboard_right_now td.b a {
	font-size: 18px;
}

#dashboard_right_now td.b a:hover {
	color: #d54e21;
}

#dashboard_right_now .t {
	padding-right: 12px;
}

#dashboard_right_now .t,
#dashboard_right_now .b {
	font-size: 14px;
	padding-top: 4px;
}

#dashboard_right_now .t a {
	white-space: nowrap;
}

#dashboard_right_now .spam {
	color: red;
}

#dashboard_right_now .waiting {
	color: #e66f00;
}

#dashboard_right_now .approved {
	color: green;
}

#dashboard_right_now .versions {
	padding: 6px 10px 12px;
	clear: both;
}

#dashboard_right_now a.button {
	float: right;
	clear: right;
	position: relative;
	top: -5px;
}

/* Recent Comments */
#dashboard_recent_comments h3 {
	margin-bottom: 0;
}

#dashboard_recent_comments .inside {
	margin-top: 0;
}

#dashboard_recent_comments .comment-meta .approve {
	font-style: italic;
	font-family: "Open Sans", sans-serif;
	font-size: 10px;
}

#dashboard_recent_comments .subsubsub {
	float: none;
	white-space: normal;
}

#the-comment-list {
	position: relative;
}

#the-comment-list .comment-item {
	padding: 1em 12px;
	border-top: 1px solid;
}

#the-comment-list .pingback {
	padding-left: 12px !important;
}

#the-comment-list .comment-item,
#the-comment-list #replyrow {
	margin: 0 -12px;
}

#the-comment-list .comment-item:first-child {
	border-top: none;
}

#the-comment-list .comment-item .avatar {
	float: left;
	margin: 0 10px 5px 0;
}

#the-comment-list .comment-item h4 {
	line-height: 1.5em;
	margin-top: 0;
	color: #777;
}

#the-comment-list .comment-item h4 cite {
	font-style: normal;
	font-weight: normal;
}

#the-comment-list .comment-item blockquote,
#the-comment-list .comment-item blockquote p {
	margin: 0;
	padding: 0;
	display: inline;
}

#dashboard_recent_comments #the-comment-list .trackback blockquote,
#dashboard_recent_comments #the-comment-list .pingback blockquote {
	display: block;
}

#the-comment-list .comment-item p.row-actions {
	margin: 3px 0 0;
	padding: 0;
	font-size: 13px;
}

/* QuickPress */
#header-logo {
	display: none;
}

#site-heading:before {
	top: 3px;
	position: relative;
	display: inline-block;
	font: normal 18px/1 'dashicons';
	speak: none;
	color: #727272;
	content: '\f120';
	-webkit-font-smoothing: antialiased;
}
.no-js #dashboard_quick_press {
	display: none;
}

#dashboard_quick_press .easy-blogging {
	padding: 0 8px;
	text-align: left;
}

#dashboard_quick_press .input-text-wrap {
	position: relative;
}

#dashboard_quick_press .prompt {
	color: #bbb;
	position: absolute;
}

#dashboard_quick_press div.updated  {
	padding: 0 5px;
}

#title-wrap label,
#tags-input-wrap label {
	cursor: text;
}

#title-wrap #title {
	padding: 2px 6px;
	font-size: 1.3em;
	line-height: 100%;
	outline: none;
}

#tags-input-wrap #tags-input {
	outline: none;
	padding: 3px 6px;
}

#title-wrap #title-prompt-text {
	font-size: 1.3em;
	padding: 5px 8px;
}

#tags-input-wrap #tags-input-prompt-text {
	font-size: 1em;
	padding: 5px 8px;
}

#dashboard_quick_press .input-text-wrap,
#dashboard_quick_press .textarea-wrap {
	margin: 0 0 0.7 0;
}

#dashboard_quick_press .wp-media-buttons {
	margin: 0 0 .2em 1px;
	padding: 0;
}

#dashboard_quick_press .wp-media-buttons a {
	color: #777;
}

#dashboard-widgets #dashboard_quick_press form p.submit input {
	float: left;
}

#dashboard-widgets #dashboard_quick_press form p.submit #save-post {
	margin: 0 0.7em 0 1px;
}

#dashboard-widgets #dashboard_quick_press form p.submit #publish {
	float: right;
}

#dashboard-widgets #dashboard_quick_press form p.submit .spinner {
	vertical-align: middle;
	margin: 4px 6px 0 0;
}

/* Recent Drafts */
#dashboard_recent_drafts ul,
#dashboard_recent_drafts p {
	margin: 0;
	padding: 0;
	word-wrap: break-word;
}

#dashboard_recent_drafts ul {
	list-style: none;
}

#dashboard_recent_drafts ul li {
	margin-bottom: 1em;
}

#dashboard_recent_drafts h4 {
	line-height: 1.7em;
	word-wrap: break-word;
}

#dashboard_recent_drafts h4 abbr {
	font-weight: normal;
	font-family: "Open Sans", sans-serif;
	font-size: 12px;
	color: #999;
	margin-left: 3px;
}

/* Feeds */
.rss-widget ul {
	margin: 0;
	padding: 0;
	list-style: none;
}

a.rsswidget {
	font-size: 14px;
	font-weight: 600;
	line-height: 1.7em;
}

.rss-widget ul li {
	line-height: 1.5em;
	margin-bottom: 12px;
}

.rss-widget span.rss-date {
	color: #999;
	font-size: 13px;
	margin-left: 3px;
}

.rss-widget cite {
	display: block;
	text-align: right;
	margin: 0 0 1em;
	padding: 0;
}

.rss-widget cite:before {
	content: '\2014';
}

/* Plugins */
#dashboard_plugins h4 {
	line-height: 1.7em;
}

#dashboard_plugins h5 {
	font-weight: normal;
	font-size: 13px;
	margin: 0;
	display: inline;
	line-height: 1.4em;
}

#dashboard_plugins h5 a {
	line-height: 1.4em;
}

#dashboard_plugins .inside span {
	font-size: 12px;
	padding-left: 5px;
}

#dashboard_plugins p {
	margin: 0.3em 0 1.4em;
	line-height: 1.4em;
}

.dashboard-comment-wrap {
	overflow: hidden;
	word-wrap: break-word;
}


/* Browser Nag */
#dashboard_browser_nag a.update-browser-link {
	font-size: 1.2em;
	font-weight: 600;
}

#dashboard_browser_nag a {
	text-decoration: underline;
}

#dashboard_browser_nag p.browser-update-nag.has-browser-icon {
	padding-right: 125px;
}

#dashboard_browser_nag .browser-icon {
	margin-top: -35px;
}

#dashboard_browser_nag.postbox.browser-insecure {
	background-color: #ac1b1b;
	border-color: #ac1b1b;
}

#dashboard_browser_nag.postbox {
	background-color: #e29808;
	background-image: none;
	border-color: #edc048;
	color: #fff;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#dashboard_browser_nag.postbox.browser-insecure h3 {
	border-bottom-color: #cd5a5a;
	color: #fff;
}

#dashboard_browser_nag.postbox h3 {
	border-bottom-color: #f6e2ac;
	background: transparent none;
	color: #fff;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#dashboard_browser_nag a {
	color: #fff;
}

/* Make the browser nags easier to read with Open Sans */

#dashboard_browser_nag h3.hndle {
	border: none;
	font-weight: 600;
	font-size: 20px;
	padding-top: 10px;
}

.postbox#dashboard_browser_nag p a.dismiss {
	font-size: 14px;
}

.postbox#dashboard_browser_nag p,
.postbox#dashboard_browser_nag a,
.postbox#dashboard_browser_nag p.browser-update-nag {
	font-size: 16px;
}


/* login */

#loginform p.submit,
.login-action-lostpassword p.submit {
	border: none;
	margin: -10px 0 20px; /* May want to revisit this */
}

.login * {
	margin: 0;
	padding: 0;

}

.login form {
	margin-top: 20px;
	margin-left: 0;
	padding: 26px 24px 46px;
	font-weight: normal;
}

.login form .forgetmenot {
	font-weight: normal;
	float: left;
	margin-bottom: 0;
}

.login .button-primary {
	float: right;
}

#login form p {
	margin-bottom: 0;
}

#login form p.submit {
	padding: 0;
}

.login label {
	color: #777;
	font-size: 14px;
}

.login form .forgetmenot label {
	font-size: 12px;
	line-height: 19px;
}

.login h1 {
	text-align: center;
}

.login h1 a {
	background-image: url(data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHhtbG5zOnhsaW5rPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5L3hsaW5rIiB2ZXJzaW9uPSIxLjEiIGlkPSJMYXllcl8xIiB4PSIwcHgiIHk9IjBweCIgd2lkdGg9IjY0cHgiIGhlaWdodD0iNjRweCIgdmlld0JveD0iMCAwIDY0IDY0IiBlbmFibGUtYmFja2dyb3VuZD0ibmV3IDAgMCA2NCA2NCIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PHN0eWxlPi5zdHlsZTB7ZmlsbDoJIzAwNzRBMjt9PC9zdHlsZT48Zz48Zz48cGF0aCBkPSJNNC41NDggMzEuOTk5YzAgMTAuOSA2LjMgMjAuMyAxNS41IDI0LjcwNkw2LjkyNSAyMC44MjdDNS40MDIgMjQuMiA0LjUgMjggNC41IDMxLjk5OXogTTUwLjUzMSAzMC42MTRjMC0zLjM5NC0xLjIxOS01Ljc0Mi0yLjI2NC03LjU3Yy0xLjM5MS0yLjI2My0yLjY5NS00LjE3Ny0yLjY5NS02LjQzOWMwLTIuNTIzIDEuOTEyLTQuODcyIDQuNjA5LTQuODcyIGMwLjEyMSAwIDAuMiAwIDAuNCAwLjAyMkM0NS42NTMgNy4zIDM5LjEgNC41IDMyIDQuNTQ4Yy05LjU5MSAwLTE4LjAyNyA0LjkyMS0yMi45MzYgMTIuNCBjMC42NDUgMCAxLjMgMCAxLjggMC4wMzNjMi44NzEgMCA3LjMxNi0wLjM0OSA3LjMxNi0wLjM0OWMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjMgYzAgMC0xLjQ4NyAwLjE3NC0zLjE0MiAwLjI2MWw5Ljk5NyAyOS43MzVsNi4wMDgtMTguMDE3bC00LjI3Ni0xMS43MThjLTEuNDc5LTAuMDg3LTIuODc5LTAuMjYxLTIuODc5LTAuMjYxIGMtMS40OC0wLjA4Ny0xLjMwNi0yLjM0OSAwLjE3NC0yLjI2MmMwIDAgNC41IDAuMyA3LjIgMC4zNDljMi44NyAwIDcuMzE3LTAuMzQ5IDcuMzE3LTAuMzQ5IGMxLjQ3OS0wLjA4NiAxLjcgMi4xIDAuMiAyLjI2MmMwIDAtMS40ODkgMC4xNzQtMy4xNDIgMC4yNjFsOS45MiAyOS41MDhsMi43MzktOS4xNDggQzQ5LjYyOCAzNS43IDUwLjUgMzMgNTAuNSAzMC42MTR6IE0zMi40ODEgMzQuNGwtOC4yMzcgMjMuOTM0YzIuNDYgMC43IDUuMSAxLjEgNy44IDEuMSBjMy4xOTcgMCA2LjI2Mi0wLjU1MiA5LjExNi0xLjU1NmMtMC4wNzItMC4xMTgtMC4xNDEtMC4yNDMtMC4xOTYtMC4zNzlMMzIuNDgxIDM0LjR6IE01Ni4wODggMTguOCBjMC4xMTkgMC45IDAuMiAxLjggMC4yIDIuODIzYzAgMi43ODUtMC41MjEgNS45MTYtMi4wODggOS44MzJsLTguMzg1IDI0LjI0MmM4LjE2MS00Ljc1OCAxMy42NS0xMy42IDEzLjY1LTIzLjcyOCBDNTkuNDUxIDI3LjIgNTguMiAyMi43IDU2LjEgMTguODN6IE0zMiAwYy0xNy42NDUgMC0zMiAxNC4zNTUtMzIgMzJDMCA0OS42IDE0LjQgNjQgMzIgNjRzMzItMTQuMzU1IDMyLTMyLjAwMSBDNjQgMTQuNCA0OS42IDAgMzIgMHogTTMyIDYyLjUzM2MtMTYuODM1IDAtMzAuNTMzLTEzLjY5OC0zMC41MzMtMzAuNTM0QzEuNDY3IDE1LjIgMTUuMiAxLjUgMzIgMS41IHMzMC41MzQgMTMuNyAzMC41IDMwLjUzMkM2Mi41MzMgNDguOCA0OC44IDYyLjUgMzIgNjIuNTMzeiIgY2xhc3M9InN0eWxlMCIvPjwvZz48L2c+PC9zdmc+);
	background-size: 80px 80px;
	background-position: center top;
	background-repeat: no-repeat;
	color: #999;
	height: 80px;
	font-size: 20px;
	font-weight: normal;
	line-height: 1.3em;
	margin: 0 auto 25px;
	padding: 0;
	text-decoration: none;
	width: 80px;
	text-indent: -9999px;
	outline: none;
	overflow: hidden;
	display: block;
}

#login {
	width: 320px;
	padding: 114px 0 0;
	margin: auto;
}

#login_error,
.login .message {
	margin-left: 0;
	padding: 12px;
}

.login #nav,
.login #backtoblog {
	font-size: 13px;
	padding: 0 24px 0;
}

.login #nav {
	margin: 24px 0 0 0;
}

#backtoblog {
	margin: 16px 0 0 0;
}

.login form .input,
.login input[type="text"] {
	color: #555;
	font-weight: 200;
	font-size: 24px;
	line-height: 1;
	width: 100%;
	padding: 3px;
	margin-top: 2px;
	margin-right: 6px;
	margin-bottom: 16px;
	border: 1px solid #e5e5e5;
	background: #fbfbfb;
	outline: none;
	-webkit-box-shadow: inset 1px 1px 2px rgba(200, 200, 200, 0.2);
	box-shadow: inset 1px 1px 2px rgba(200, 200, 200, 0.2);
}

.login #pass-strength-result {
	width: 250px;
	font-weight: 600;
	border-style: solid;
	border-width: 1px;
	margin: 12px 0 6px;
	padding: 6px 5px;
	text-align: center;
}

.mobile #login {
	padding: 20px 0;
}

.mobile #login form,
.mobile #login .message,
.mobile #login_error {
	margin-left: 0;
}

.mobile #login #nav,
.mobile #login #backtoblog {
	margin-left: 8px;
}

.mobile #login h1 a {
	width: auto;
}

body.interim-login {
	height: auto;
}

.interim-login #login {
	padding: 0;
	margin: 5px auto 20px;
}

.interim-login.login h1 a {
	width: auto;
}

.interim-login #login_error,
.interim-login.login .message {
	margin: 0 0 16px;
}

.interim-login.login form {
	margin: 0;
}

/* ms */
/* Dashboard: MS Specific Data */
#dashboard_right_now p.musub {
	margin: 20px -2px 0;
	padding: 15px 5px 10px;
	border-top: 1px solid #ececec;
	position: static;
}

.rtl #dashboard_right_now p.musub {
	padding-left: 0;
	padding-right: 16px;
}

#dashboard_right_now td.b a.musublink {
	font-size: 16px;
}

#dashboard_right_now div.musubtable {
	border-top: none;
}

#dashboard_right_now div.musubtable .t,
#dashboard_right_now div.musubtable .b {
	vertical-align: top;
	padding: 0;
	white-space: normal;
}

#dashboard_right_now div.musubtable .b {
	padding-right: 3px;
}

/* Background Color for Site Status */
.wp-list-table .site-deleted {
	background: #ff8573;
}
.wp-list-table .site-spammed {
	background: #faafaa;
}
.wp-list-table .site-archived {
	background: #ffebe8;
}
.wp-list-table .site-mature {
	background: #fecac2;
}

/* nav-menu */

.no-js #message {
	display: block;
}

#nav-menu-meta ul.outer-border {
	-webkit-border-radius: 3px;
	border-radius: 3px;
}

.accordion-section ul.category-tabs,
.accordion-section ul.add-menu-item-tabs,
.accordion-section ul.wp-tab-bar {
	margin: 0;
}

.accordion-section .categorychecklist {
	margin: 13px 0;
}

#nav-menu-meta .accordion-section-content {
	padding: 18px 13px;
}

#nav-menu-meta .button-controls {
	margin-bottom: 0;
}

#nav-menus-frame {
	margin-left: 300px;
	margin-top: 23px;
}

#nav-menus-frame .accordion-section-content .inside {
	font-size: 14px;
}

#wpbody-content #menu-settings-column {
	display:inline;
	width:281px;
	margin-left: -300px;
	clear: both;
	float: left;
	padding-top: 0;
}

#menu-settings-column .inside {
	clear: both;
	margin: 10px 0 0;
}

.metabox-holder-disabled .postbox,
.metabox-holder-disabled .accordion-section-content  {
	opacity: 0.5;
	filter: alpha(opacity=50);
}

.metabox-holder-disabled .button-controls .select-all {
	display: none;
}

#wpbody {
	position: relative;
}

.blank-slate .menu-name {
	height: 2em;
}

.blank-slate .menu-settings {
	border: none;
	margin-top: 0;
	padding-top: 0;
	overflow: hidden;
}

.is-submenu {
	font-style: italic;
	font-weight: normal;
	margin-left: 4px;
}

.manage-menus {
	margin-top: 23px;
	padding: 10px;
	overflow: hidden;
}

.manage-menus select {
	float: left;
	margin-right: 6px;
}

.manage-menus .selected-menu {
	float: left;
	margin: 5px 6px 0 0;
}

.manage-menus .submit-btn {
	float: left;
	margin-top: 1px;
}

.menu-edit p {
	margin: .3em 0 .6em;
}

.menu-edit #post-body-content h3 {
	margin: 0 0 10px;
}

#post-body #post-body-content h3 {
	margin-top: 1em;
}

.menu-settings {
	border-top-width: 1px;
	border-top-style: solid;
	margin-top: 2em;
	overflow: hidden;
}

.menu-settings dl {
	margin: 0 0 10px;
	overflow: hidden;
	position: relative;
}

.menu-settings dd {
	float: left;
	margin: 0;
	width: 60%;
	padding-left: 170px;
}

.menu-settings dt {
	clear: both;
	left: 0;
	padding: 3px 0 0;
	position: absolute;
}

.menu-edit .checkbox-input {
	margin-top: 4px;
}

.theme-location-set {
	font-size: 11px;
}

/* Menu Container */
#menu-management-liquid {
	float: left;
	min-width: 100%;
	margin-top: 3px;
}

#menu-management {
	position: relative;
	margin-right: 20px;
	margin-top: -3px;
	width: 100%;
}

#menu-management .menu-edit {
	margin-bottom: 20px;
}

.nav-menus-php #post-body {
	padding: 0 10px 10px;
	border-width: 1px 0;
	border-style: solid;
}

#nav-menu-header,
#nav-menu-footer {
	padding: 0 10px;
}

#nav-menu-header {
	border-bottom: 1px solid;
	margin-bottom: 0;
}

#nav-menu-header .menu-name-label {
	margin-top: 2px;
}

#nav-menu-footer {
	border-top: 1px solid;
}

.nav-menus-php #post-body div.updated,
.nav-menus-php #post-body div.error {
	margin: 0;
}

.nav-menus-php #post-body-content {
	position: relative;
	float: none;
}

#menu-management .menu-add-new abbr {
	font-weight:600;
}

#select-nav-menu-container {
	text-align: right;
	padding: 0 10px 3px 10px;
	margin-bottom: 5px;
}

#select-nav-menu {
	width: 100px;
	display: inline;
}

#menu-name-label {
	margin-top: -2px;
}

.widefat td.menu-location-menus {
	padding-bottom: 5px;
}

.menu-location-menus select {
	float: left;
}

#locations-nav-menu-wrapper {
	padding: 5px 0;
}

.locations-nav-menu-select select {
	float: left;
	width: 160px;
	margin-right: 5px;
}

.locations-row-links {
	float: left;
	margin: 6px 0 0 6px;
}

.locations-edit-menu-link,
.locations-add-menu-link {
	margin: 0 3px;
}

.locations-edit-menu-link {
	padding-right: 3px;
	border-right: 1px solid #ccc;
}

#wpbody .open-label {
	display: block;
	float:left;
}

#wpbody .open-label span {
	padding-right: 10px;
}

.js .input-with-default-title {
	font-style: italic;
}

#menu-management .inside {
	padding: 0 10px;
}

/* Add Menu Item Boxes */
.postbox .howto input,
.accordion-container .howto input {
	width: 180px;
	float: right;
}

.accordion-container .outer-border {
	margin: 0;
}

.customlinkdiv .howto input {
	width: 180px;
}

.customlinkdiv p {
	margin-top: 0
}

#nav-menu-theme-locations .howto select {
	width: 100%;
}

#nav-menu-theme-locations .button-controls {
	text-align: right;
}

.add-menu-item-view-all {
	height: 400px;
}

/* Button Primary Actions */
#menu-container .submit {
	margin: 0 0 10px;
	padding: 0;
}

.nav-menus-php .add-new-menu-action {
	float: left;
	margin: 6px 0 0 6px;
	line-height: 15px;
}

.nav-menus-php .meta-sep,
.nav-menus-php .submitdelete,
.nav-menus-php .submitcancel {
	display: block;
	float: left;
	margin: 4px 0;
	line-height: 15px;
}

.meta-sep {
	padding: 0 2px;
}

#cancel-save {
	text-decoration: underline;
	font-size: 12px;
	margin-left: 20px;
	margin-top: 5px;
}

.button.right, .button-secondary.right, .button-primary.right {
	float: right;
}

/* Button Secondary Actions */
.list-controls {
	float: left;
	margin-top: 5px;
}

.add-to-menu {
	float: right;
}

.postbox .spinner {
	display: none;
	vertical-align: middle;
}

.button-controls {
	clear:both;
	margin: 10px 0;
}

.show-all,
.hide-all {
	cursor: pointer;
}

.hide-all {
	display: none;
}

/* Create Menu */
#menu-name {
	width: 270px;
}

#manage-menu .inside {
	padding: 0px 0px;
}

/* Custom Links */
#available-links dt {
	display: block;
}

#add-custom-link .howto {
	font-size: 12px;
}

#add-custom-link label span {
	display: block;
	float: left;
	margin-top: 5px;
	padding-right: 5px;
}

.menu-item-textbox {
	width: 180px;
}

.nav-menus-php .howto span {
	margin-top: 6px;
	display: block;
	float: left;
}

/* Menu item types */
.quick-search {
	width: 190px;
}

.nav-menus-php .list-wrap {
	display: none;
	clear: both;
	margin-bottom: 10px;
}

.nav-menus-php .list-container {
	max-height: 200px;
	overflow-y: auto;
	padding: 10px 10px 5px;
}

.nav-menus-php .postbox p.submit {
	margin-bottom: 0;
}

/* Listings */
.nav-menus-php .list li {
	display: none;
	margin: 0;
	margin-bottom: 5px;
}

.nav-menus-php .list li .menu-item-title {
	cursor: pointer;
	display: block;
}

.nav-menus-php .list li .menu-item-title input {
	margin-right: 3px;
	margin-top: -3px;
}

.menu-item-title input[type=checkbox] {
	display: inline-block;
	margin-top: -4px;
}


/* Nav Menu */
#menu-container .inside {
	padding-bottom: 10px;
}

.menu {
	padding-top:1em;
}

#menu-to-edit {
	margin: 0;
	padding: 0.1em 0;
}

.menu ul {
	width: 100%;
}

.menu li {
	margin-bottom: 0;
	position:relative;
}

.menu-item-bar {
	clear:both;
	line-height:1.5em;
	position:relative;
	margin: 9px 0 0;
}

.menu-item-bar .menu-item-handle {
	border: 1px solid #dfdfdf;
	height: auto;
	line-height: 35px;
	margin-left: -1px;
	padding-left: 10px;
	padding-right: 2px;
	overflow: hidden;
	padding-left: 10px;
	position: relative;
	width: 400px;
	word-wrap: break-word;
}

#menu-to-edit .menu-item-invalid .menu-item-handle {
	background: #f6c9cc;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#f6c9cc), to(#fdf8ff));
	background-image: -webkit-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image:    -moz-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image:      -o-linear-gradient(bottom, #f6c9cc, #fdf8ff);
	background-image: linear-gradient(to top, #f6c9cc, #fdf8ff);
}

.menu-item-edit-active .menu-item-handle {
	-webkit-border-bottom-right-radius: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.no-js .menu-item-edit-active .item-edit {
	display: none;
}

.js .menu-item-handle {
	cursor: move;
}

.menu li.deleting .menu-item-handle {
	background-image: none;
}

.menu-item-handle .item-title {
	font-size: 12px;
	font-weight: 600;
	padding: 7px 0;
	line-height: 20px;
	display:block;
	margin-right:13em;
}

/* Sortables */
li.menu-item.ui-sortable-helper dl {
	margin-top: 0;
}

li.menu-item.ui-sortable-helper .menu-item-transport dl {
	margin-top: 13px;
}

.menu .sortable-placeholder {
	height: 35px;
	width: 410px;
	margin-top: 13px;
}

/* WARNING: The factor of 30px is hardcoded into the nav-menus javascript. */
.menu-item-depth-0 { margin-left: 0px; }
.menu-item-depth-1 { margin-left: 30px; }
.menu-item-depth-2 { margin-left: 60px; }
.menu-item-depth-3 { margin-left: 90px; }
.menu-item-depth-4 { margin-left: 120px; }
.menu-item-depth-5 { margin-left: 150px; }
.menu-item-depth-6 { margin-left: 180px; }
.menu-item-depth-7 { margin-left: 210px; }
.menu-item-depth-8 { margin-left: 240px; }
.menu-item-depth-9 { margin-left: 270px; }
.menu-item-depth-10 { margin-left: 300px; }
.menu-item-depth-11 { margin-left: 330px; }

.menu-item-depth-0 .menu-item-transport { margin-left: 0px; }
.menu-item-depth-1 .menu-item-transport { margin-left: -30px; }
.menu-item-depth-2 .menu-item-transport { margin-left: -60px; }
.menu-item-depth-3 .menu-item-transport { margin-left: -90px; }
.menu-item-depth-4 .menu-item-transport { margin-left: -120px; }
.menu-item-depth-5 .menu-item-transport { margin-left: -150px; }
.menu-item-depth-6 .menu-item-transport { margin-left: -180px; }
.menu-item-depth-7 .menu-item-transport { margin-left: -210px; }
.menu-item-depth-8 .menu-item-transport { margin-left: -240px; }
.menu-item-depth-9 .menu-item-transport { margin-left: -270px; }
.menu-item-depth-10 .menu-item-transport { margin-left: -300px; }
.menu-item-depth-11 .menu-item-transport { margin-left: -330px; }

body.menu-max-depth-0 { min-width: 950px !important; }
body.menu-max-depth-1 { min-width: 980px !important; }
body.menu-max-depth-2 { min-width: 1010px !important; }
body.menu-max-depth-3 { min-width: 1040px !important; }
body.menu-max-depth-4 { min-width: 1070px !important; }
body.menu-max-depth-5 { min-width: 1100px !important; }
body.menu-max-depth-6 { min-width: 1130px !important; }
body.menu-max-depth-7 { min-width: 1160px !important; }
body.menu-max-depth-8 { min-width: 1190px !important; }
body.menu-max-depth-9 { min-width: 1220px !important; }
body.menu-max-depth-10 { min-width: 1250px !important; }
body.menu-max-depth-11 { min-width: 1280px !important; }

/* Menu item controls */
.item-type {
	font-size: 12px;
	padding: 7px 10px;
	line-height: 22px;
	display: block;
}

.item-controls {
	font-size: 12px;
	position: absolute;
	right: 20px;
	top: -1px;
}

.item-controls a {
	text-decoration: none;
}

.item-controls a:hover {
	cursor: pointer;
}

.item-controls .item-order {
	padding-right: 10px;
}

.nav-menus-php .item-edit {
	display: block;
	height: 36px;
	margin-right: 0 !important;
	position: absolute;
	right: -20px;
	text-indent:-999em;
	top: -22px;
	width: 40px;
}

/* Menu editing */
.menu-instructions-inactive {
	display: none;
}

.menu-item-settings {
	display: block;
	width: 400px;
	padding: 10px 0 10px 10px;
}

.menu-item-settings .field-move a {
	display: none;
	margin: 0 2px;
}

.menu-item-edit-active .menu-item-settings {
	display: block;
}

.menu-item-edit-inactive .menu-item-settings {
	display: none;
}

.add-menu-item-pagelinks {
	margin: .5em auto;
	text-align: center;
}

.link-to-original {
	display: block;
	margin: 0 0 10px;
	padding: 3px 5px 5px;
	font-size: 12px;
	font-style: italic;
}

.link-to-original a {
	padding-left: 4px;
	font-style: normal;
}

.hidden-field {
	display: none;
}

.menu-item-settings .description-thin,
.menu-item-settings .description-wide {
	margin-right: 10px;
	float: left;
}

.description-thin {
	width: 190px;
	height: 40px;
}

.description-wide {
	width: 390px;
}

.menu-item-actions {
	padding-top: 15px;
}

#cancel-save {
	cursor: pointer;
}

/* Major/minor publishing actions (classes) */
.nav-menus-php .major-publishing-actions {
	clear: both;
	padding: 3px 0 5px;
}

.nav-menus-php .major-publishing-actions .publishing-action {
	text-align: right;
	float: right;
	line-height: 23px;
	margin: 4px 0 1px;
}

.nav-menus-php .blank-slate .menu-settings {
	display: none;
}

.nav-menus-php .delete-action {
	float: left;
	margin-top: 2px;
}

.nav-menus-php .submitbox .submitcancel {
	border-bottom: 1px solid;
	padding: 1px 2px;
	text-decoration: none;
}

.nav-menus-php .major-publishing-actions .form-invalid {
	padding-left: 4px;
	margin-left: -4px;
	border: 0 none;
}

/* Clearfix */
#menu-item-name-wrap:after,
#menu-item-url-wrap:after,
#menu-name-label:after,
#menu-settings-column .inside:after,
#nav-menus-frame:after,
.nav-menus-php #post-body-content:after,
.nav-menus-php .button-controls:after,
.nav-menus-php .major-publishing-actions:after,
.nav-menus-php .menu-item-settings:after {
	clear: both;
	content: ".";
	display: block;
	height: 0;
	visibility: hidden;
}

#nav-menus-frame,
.button-controls,
#menu-item-url-wrap,
#menu-item-name-wrap {
	display: block;
}

/* Star ratings */
div.star-holder {
	position: relative;
	height: 17px;
	width: 100px;
}

div.star-holder .star-rating {
	height: 17px;
	float: left;
}

div.action-links {
	font-weight: normal;
	margin: 6px 0 0;
}

/* Header on thickbox */
#plugin-information-header {
	margin: 0;
	padding: 0 5px;
	font-weight: 600;
	position: relative;
	border-bottom-width: 1px;
	border-bottom-style: solid;
	height: 2.5em;
}
#plugin-information ul#sidemenu {
	font-weight: normal;
	margin: 0 5px;
	position: absolute;
	left: 0;
	bottom: -1px;
}

/* Install sidemenu */
#plugin-information {
	height: auto;
}

#plugin-information p.action-button {
	width: 100%;
	padding-bottom: 0;
	margin-bottom: 0;
	margin-top: 10px;
	-webkit-border-top-left-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-top-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

#plugin-information .action-button a {
	text-align: center;
	font-weight: 600;
	text-decoration: none;
	display: block;
	line-height: 2em;
}

#plugin-information h2 {
	clear: none !important;
	margin-right: 200px;
}

#plugin-information .fyi {
	margin: 0 10px 50px;
	width: 210px;
}

#plugin-information .fyi h2 {
	font-size: 0.9em;
	margin-bottom: 0;
	margin-right: 0;
}

#plugin-information .fyi h2.mainheader {
	padding: 5px;
	-webkit-border-top-left-radius: 3px;
	border-top-left-radius: 3px;
}

#plugin-information .fyi ul {
	padding: 10px 5px 10px 7px;
	margin: 0;
	list-style: none;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-left-radius: 3px;
}

#plugin-information .fyi li {
	margin-right: 0;
}

#plugin-information #section-holder {
	padding: 10px;
}

#plugin-information .section ul,
#plugin-information .section ol {
	margin-left: 16px;
	list-style-type: square;
	list-style-image: none;
}

#plugin-information #section-screenshots ol {
	list-style: none;
	margin: 0;
}

#plugin-information #section-screenshots li img {
	vertical-align: text-top;
	max-width: 100%;
	width: auto;
	height: auto;
}

#plugin-information #section-screenshots li p {
	font-style: italic;
	padding-left: 20px;
	padding-bottom: 2em;
}

#plugin-information #section-screenshots ol,
#plugin-information .updated,
#plugin-information pre {
	margin-right: 215px;
}

#plugin-information pre {
	padding: 7px;
	overflow: auto;
	border-width: 1px;
	border-style: solid;
}

.plugin-version-author-uri {
	font-size: 13px;
}

img {
	border: none;
}

/* Header */
#wphead {
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.press-this #wphead {
	height: 32px;
	margin-left: 0;
	margin-right: 0;
	margin-bottom: 5px;
}

.press-this #header-logo {
	float: left;
	margin: 7px 7px 0;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.press-this #wphead h1 {
	font-weight: normal;
	font-size: 16px;
	line-height: 32px;
	margin: 0;
	float: left;
}

.press-this #wphead h1 a {
	text-decoration: none;
}

.press-this #wphead h1 a:hover {
	text-decoration: underline;
}

.press-this #message {
	margin: 10px 0;
}

.press-this .posting {
	margin-right: 252px;
}

.press-this-sidebar {
	float: right;
	width: 240px;
	padding-top: 10px;
}

.press-this #title {
	margin-left: 0;
	margin-right: 0;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-ms-box-sizing: border-box;
	box-sizing: border-box;
}

.press-this .tagchecklist {
	margin-top: 8px;
}

.press-this #titlediv {
	margin: 0;
}

.press-this .wp-media-buttons {
	cursor: default;
	padding: 8px 8px 0;
}

.press-this .howto {
	margin-top: 2px;
	margin-bottom: 3px;
	font-size: 12px;
	font-style: italic;
	display: block;
}

/* Editor/Main Column */
.press-this #poststuff {
	margin: 0 10px 10px;
	padding: 0;
}

.press-this #photo-add-url-div input[type="text"] {
	width: 220px;
}

#poststuff #editor-toolbar {
	height: 30px;
}

div.zerosize {
	border: 0 none;
	height: 0;
	margin: 0;
	overflow: hidden;
	padding: 0;
	width: 0;
}

.posting {
	margin-right: 212px;
	position: relative;
}

.press-this .inner-sidebar {
	width: 200px;
}

.press-this .inner-sidebar .sleeve {
	padding-top: 5px;
}

.press-this #submitdiv p {
	margin: 0;
	padding: 6px;
}

.press-this #submitdiv #publishing-actions {
	border-bottom: 1px solid #dfdfdf;
}

.press-this #publish {
	float: right;
}

.press-this #poststuff h2,
.press-this #poststuff h3 {
	font-size: 14px;
	line-height: 1;
}

.press-this #tagsdiv-post_tag h3,
.press-this #categorydiv h3 {
	cursor: pointer;
}

.press-this #submitdiv h3 {
	cursor: default;
}

h3.tb {
	font-weight: 600;
	font-size: 12px;
	margin-left: 5px;
}

#TB_window {
	border: 1px solid #333;
}

.press-this .postbox,
.press-this .stuffbox {
	margin-bottom: 10px;
	min-width: 0;
}

.js .meta-box-sortables .postbox:hover .handlediv {
	margin-right: 0 !important;
}

.js .sidebar-name:hover .sidebar-name-arrow:before,
.js .meta-box-sortables .postbox:hover .handlediv:before {
	right: 12px;
	content: '\f142';
	font: normal 20px/1 'dashicons';
	speak: none;
	display: inline-block;
	padding: 8px 10px;
	color: #888;
	top: 0;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.js .widgets-holder-wrap.closed:hover .sidebar-name-arrow:before,
.js .meta-box-sortables .postbox.closed:hover .handlediv:before {
	content: '\f140';
}

.press-this #submitdiv:hover .handlediv {
	background: none;
}

.tbtitle {
	font-size: 1.7em;
	outline: none;
	padding: 3px 4px;
	border-color: #dfdfdf;
}

.press-this .actions {
	float: right;
	margin: -19px 0 0;
}

.press-this #extra-fields .actions {
	margin: -32px -7px 0 0;
}

.press-this .actions li {
	float: left;
	list-style: none;
	margin-right: 10px;
}

#extra-fields .button {
	margin-right: 5px;
}

/* Photo Styles */
#photo_saving {
	margin: 0 8px 8px;
	vertical-align: middle;
}

#img_container_container {
	overflow: auto;
}

#extra-fields {
	margin-top: 10px;
	position: relative;
}

#extra-fields h2 {
	margin: 12px;
}

#waiting {
	margin-top: 10px;
	overflow: hidden;
}

#waiting span {
	float: right;
	margin: 0 0 0 5px;
}

#waiting .spinner {
	display: block;
}

#extra-fields .postbox {
	margin-bottom: 5px;
}

#extra-fields .titlewrap {
	padding: 0;
	overflow: auto;
	height: 100px;
}

#img_container a {
	display: block;
	float: left;
	overflow: hidden;
}

#img_container img,
#img_container a {
	width: 68px;
	height: 68px;
}

#img_container img {
	border: none;
	background-color: #f4f4f4;
	cursor: pointer;
}

#img_container a,
#img_container a:link,
#img_container a:visited {
	border: 1px solid #ccc;
	display: block;
	position: relative;
}

#img_container a:hover,
#img_container a:active {
	border-color: #000;
	z-index: 1000;
	border-width: 2px;
	margin: -1px;
}

/* Video */
#embed-code {
	width: 100%;
	height: 98px;
}

/* Categories */
.press-this .categorydiv div.tabs-panel {
	height: 100px;
}

/* Tags */
.press-this .tagsdiv .newtag {
	width: 120px;
}

.press-this #content {
	margin: 5px 0;
	padding: 0 5px;
	border: 0 none;
	height: 345px;
	font-family: Consolas, Monaco, monospace;
	font-size: 13px;
	line-height: 19px;
	background: transparent;
}

/* Submit */
.press-this #publishing-actions .spinner {
	display: inline;
	vertical-align: middle;
}

#TB_ajaxContent #options {
	position: absolute;
	top: 20px;
	right: 25px;
	padding: 5px;
}

#TB_ajaxContent h3 {
	margin-bottom: .25em;
}

.error a {
	text-decoration: underline;
}

.updated a {
	text-decoration: none;
	padding-bottom: 2px;
}

/* tag hints */
.taghint {
	color: #aaa;
	margin: -17px 0 0 7px;
	visibility: hidden;
}

input.newtag ~ div.taghint {
	visibility: visible;
}

input.newtag:focus ~ div.taghint {
	visibility: hidden;
}

/* TinyMCE */
#mce_fullscreen_container {
	background: #fff;
}

#photo-add-url-div input[type="text"] {
	width: 300px;
}

/* theme-editor */
.alignleft h3 {
	margin: 0;
}

h3 span {
	font-weight: normal;
}

#template textarea {
	font-family: Consolas, Monaco, monospace;
	font-size: 13px;
	width: 97%;
	background: #f9f9f9;
	outline: none;
}

#template p {
	width: 97%;
}

#templateside {
	float: right;
	width: 190px;
	word-wrap: break-word;
}

#templateside h3,
#postcustomstuff p.submit {
	margin: 0;
}

#templateside h4 {
	margin: 1em 0 0;
}

#templateside ol,
#templateside ul {
	margin: .5em;
	padding: 0;
}

#templateside li {
	margin: 4px 0;
}

#templateside ul li a span.highlight {
	display:block;
}

.nonessential {
	font-size: 11px;
	font-style: italic;
	padding-left: 12px;
}

.highlight {
	padding: 3px 3px 3px 12px;
	margin-left: -12px;
	font-weight: 600;
	border: 0 none;
}

#documentation {
	margin-top: 10px;
}
#documentation label {
	line-height: 22px;
	vertical-align: top;
	font-weight: 600;
}

.fileedit-sub {
	padding: 10px 0 8px;
	line-height: 180%;
}

#filter-box {
	clear: both;
}

.feature-filter {
	padding: 8px 12px 0;
}

.feature-filter .feature-group {
	float: left;
	margin: 5px 10px 10px;
}

.feature-filter .feature-group li {
	display: inline-block;
	vertical-align: top;
	list-style-type: none;
	padding-right: 25px;
	width: 150px;
}

.feature-container {
	width: 100%;
	overflow: auto;
	margin-bottom: 10px;
}

/* widgets */

/* 2 column liquid layout */
div.widget-liquid-left {
	float: left;
	clear: left;
	width: 100%;
	margin-right: -325px;
}

div#widgets-left {
	margin-left: 5px;
	margin-right: 325px;
}

div#widgets-right {
	width: 285px;
	margin: 0 auto;
}

div.widget-liquid-right {
	float: right;
	clear: right;
	width: 300px;
}

.widget-liquid-right .widget {
	position: relative;

}

.widget-liquid-right .widget,
.inactive-sidebar .widget,
.widget-liquid-right .sidebar-description {
	width: 250px;
	margin: 0 auto 20px;
	overflow: hidden;
}

.widget-liquid-right .sidebar-description {
	margin-bottom: 10px;
}

.inactive-sidebar .widget {
	margin: 0 10px 20px;
	display: inline-block;
}

div.sidebar-name h3 {
	font-weight: normal;
	font-size: 15px;
	margin: 0;
	padding: 8px 10px;
	overflow: hidden;
	white-space: nowrap;
}

div.sidebar-name {
	font-size: 13px;
	border-bottom-width: 1px;
	border-bottom-style: solid;
}

.js .sidebar-name {
	cursor: pointer;
}

.js .closed .sidebar-name {
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
}

.widget-liquid-right .widgets-sortables,
#widgets-left .widget-holder {
	border-width: 0 1px 1px;
	border-style: none solid solid;
	-webkit-border-bottom-right-radius: 3px;
	-webkit-border-bottom-left-radius: 3px;
	border-bottom-right-radius: 3px;
	border-bottom-left-radius: 3px;
}

.js .closed .widgets-sortables,
.js .closed .widget-holder,
.js .closed br.clear {
	display: none;
}

.widget-liquid-right .widgets-sortables {
	padding: 15px 0 0;
}

#available-widgets .widget-holder {
	padding: 7px 5px 0;
}

#available-widgets .widget {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.inactive-sidebar {
	padding: 5px 5px 0;
}

#widget-list .widget {
	width: 250px;
	margin: 0 10px 15px;
	border: 0 none;
	background: transparent;
	display: inline-block;
	vertical-align: top;
}

#widget-list .widget-description {
	padding: 5px 8px;
}

.widget-placeholder {
	border-width: 1px;
	border-style: dashed;
	margin: 0 auto 20px;
	height: 27px;
	width: 250px;
}

.inactive-sidebar .widget-placeholder {
	margin: 0 10px 20px;
	float: left;
}

div.widgets-holder-wrap {
	padding: 0;
	margin: 10px 0 20px;
}

#widgets-left #available-widgets {
	background-color: transparent;
	border: 0 none;
}

ul#widget-list {
	list-style: none;
	margin: 0;
	padding: 0;
	min-height: 100px;
}

.widget .widget-top {
	margin-bottom: -1px;
	font-size: 12px;
	font-weight: 600;
	height: 26px;
	overflow: hidden;
}

.widget .widget-top,
.menu-item-handle {
	margin-top: 0;
	padding: 4px;
}

.widget-top .widget-title {
	padding: 7px 9px;
}

.widget-top .widget-title-action {
	float: right;
}

a.widget-action {
	display: block;
	width: 24px;
	height: 26px;
}

#available-widgets a.widget-action {
	display: none;
}

.widget-top a.widget-action,
.widget-top a.widget-action:hover {
	background: none !important;
	border: none !important;
	width: 30px;
	margin-right: 0 !important;
	margin-top: 2px;
}

.nav-menus-php .item-edit:after,
.widget-top a.widget-action:after,
.control-section .accordion-section-title::after,
.accordion-section-title::after {
	right: 0;
	content: '\f140';
	border: none;
	background: none;
	font: normal 20px/1 'dashicons';
	speak: none;
	display: block;
	padding: 0;
	text-indent: 0;
	text-align: center;
	position: relative;
	-webkit-font-smoothing: antialiased;
	text-decoration: none !important;
}

.control-section .accordion-section-title::after,
.accordion-section-title::after {
	float: right;
	right: 20px;
	top: -2px;
}

.control-section.open .accordion-section-title::after,
.nav-menus-php .menu-item-edit-active .item-edit:after {
	content: '\f140';
}

.nav-menus-php .item-controls .item-type {
	padding: 12px;
	margin-right: 10px;
}


.widget .widget-inside,
.widget .widget-description {
	padding: 12px 12px 10px;
	font-size: 12px;
	line-height: 16px;
}

.widget-inside,
.widget-description {
	display: none;
}

#available-widgets .widget-description {
	display: block;
}

.widget .widget-inside p {
	margin: 0 0 1em;
	padding: 0;
}

.widget-title h4 {
	margin: 0;
	padding-bottom: 0.2em;
	line-height: 1;
	overflow: hidden;
	white-space: nowrap;
}

.widgets-sortables {
	min-height: 90px;
}

.widget-control-actions {
	margin-top: 8px;
}

.widget-control-actions a {
	text-decoration: none;
}

.widget-control-actions a:hover {
	text-decoration: underline;
}

.widget-control-actions div.alignleft {
	margin-top: 6px;
}

div#sidebar-info {
	padding: 0 1em;
	margin-bottom: 1em;
	font-size: 12px;
}

.widget-title a,
.widget-title a:hover {
	text-decoration: none;
	border-bottom: none;
}

	color: #464646;
.widget-control-edit {
	display: block;
	font-size: 12px;
	font-weight: normal;
	line-height: 26px;
	padding: 0 8px 0 0;
}

a.widget-control-edit {
	text-decoration: none;
}

.widget-control-edit .add,
.widget-control-edit .edit {
	display: none;
}

#available-widgets .widget-control-edit .add,
#widgets-right .widget-control-edit .edit,
.inactive-sidebar .widget-control-edit .edit {
	display: inline;
}

.editwidget {
	margin: 0 auto 15px;
}

.editwidget .widget-inside {
	display: block;
	padding: 10px;
}

.inactive p.description {
	margin: 5px 15px 10px;
}

#available-widgets p.description {
	margin: 0 12px 12px;
}

.widget-position {
	margin-top: 8px;
}

.inactive {
	padding-top: 2px;
}

.sidebar-name .spinner {
	float: none;
	margin: 0 3px -3px;
}

.sidebar-name-arrow {
	float: right;
	height: 29px;
	width: 26px;
}

.widget-title .in-widget-title {
	font-size: 12px;
	white-space: nowrap;
}

#removing-widget {
	display: none;
	font-weight: normal;
	padding-left: 15px;
	font-size: 12px;
	line-height: 1;
}

.widget-control-noform,
#access-off,
.widgets_access .widget-action,
.widgets_access .sidebar-name-arrow,
.widgets_access #access-on,
.widgets_access .widget-holder .description {
	display: none;
}

.widgets_access .widget-holder,
.widgets_access #widget-list {
	padding-top: 10px;
}

.widgets_access #access-off {
	display: inline;
}

.widgets_access #wpbody-content .widget-title-action,
.widgets_access #wpbody-content .widget-control-edit,
.widgets_access .closed .widgets-sortables,
.widgets_access .closed .widget-holder {
	display: block;
}

.widgets_access .closed .sidebar-name {
	-webkit-border-bottom-right-radius: 0;
	-webkit-border-bottom-left-radius: 0;
	border-bottom-right-radius: 0;
	border-bottom-left-radius: 0;
}

.widgets_access .sidebar-name,
.widgets_access .widget .widget-top {
	cursor: default;
}

/* Enable draggable on IE10 touch events until it's rolled into jQuery UI core */
.ui-sortable,
.ui-draggable {
	-ms-touch-action: none;
}

/* Accordion */

.accordion-section {
	border-bottom: 1px solid #dfdfdf;
	margin: 0;
}

.accordion-section.open .accordion-section-content,
.no-js .accordion-section .accordion-section-content {
	display: block;
}

.accordion-section.open:hover {
	border-bottom-color: #dfdfdf;
}

.accordion-section-content {
	display: none;
	padding: 10px 20px 15px;
	overflow: hidden;
	background: #fdfdfd;
	border-left: 1px solid #dfdfdf;
	border-right: 1px solid #dfdfdf;
}

.accordion-section-title {
	margin: 0;
	padding: 15px 20px;
	position: relative;
	border-left: 1px solid #dfdfdf;
	border-right: 1px solid #dfdfdf;

	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

.js .accordion-section-title {
	cursor: pointer;
}

.js .accordion-section-title:after {
	position: absolute;
	top: 12px;
	right: 10px;
	z-index: 1;
}

.accordion-section-title:focus {
	outline: none;
}

.accordion-section-title:hover:after,
.accordion-section-title:focus:after {
	border-color: #aaa transparent;
}

.cannot-expand .accordion-section-title {
	cursor: auto;
}

.cannot-expand .accordion-section-title:after {
	display: none;
}

.control-section .accordion-section-title {
	border-left: none;
	border-right: none;
	border-bottom: none !important;
	padding: 10px 10px 10px 14px;
	font-size: 15px;
	font-family: "Open Sans", sans-serif;
	font-weight: normal;
	background: #f5f5f5;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#eee), to(#f5f5f5));
	background-image: -webkit-linear-gradient(bottom, #eee, #f5f5f5);
	background-image:    -moz-linear-gradient(bottom, #eee, #f5f5f5);
	background-image:      -o-linear-gradient(bottom, #eee, #f5f5f5);
	background-image: linear-gradient(to top, #eee, #f5f5f5);
}

.control-section .accordion-section-title:after {
	top: 15px;
}

.js .control-section:hover .accordion-section-title,
.js .control-section .accordion-section-title:hover,
.js .control-section.open .accordion-section-title,
.js .control-section .accordion-section-title:focus {
	color: #000;
	background: #f9f9f9;
	background-image: -webkit-gradient(linear, left bottom, left top, from(#ececec), to(#f9f9f9));
	background-image: -webkit-linear-gradient(bottom, #ececec, #f9f9f9);
	background-image:    -moz-linear-gradient(bottom, #ececec, #f9f9f9);
	background-image:      -o-linear-gradient(bottom, #ececec, #f9f9f9);
	background-image: linear-gradient(to top, #ececec, #f9f9f9);
}

.control-section.open .accordion-section-title {
	border-bottom: 1px solid #dfdfdf;
}

.sticky-menu #TB_window .updated {
	margin: 16px 0 0;
}

/* =Media Queries
-------------------------------------------------------------- */

@media only screen and (max-width: 768px) {
	/* categories */
	#col-left {
		width: 100%;
	}

	#col-right {
		width: 100%;
	}
}

@media only screen and (min-width: 769px) {
	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (max-width: 860px) {

	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (min-width: 980px) {

	/* categories */
	#col-left {
		width: 35%;
	}

	#col-right {
		width: 65%;
	}
}

@media only screen and (max-width: 768px) {
	/* categories */
	#col-left {
		width: 100%;
	}

	#col-right {
		width: 100%;
	}

	.form-field input,
	.form-field textarea {
		width: 99%;
	}

	.form-wrap .form-field {
		padding:0;
	}

	/* users */
	#profile-page .form-table textarea {
		max-width: 400px;
		width: auto;
	}
}

/**
 * HiDPI Displays
 */
@media print,
  (-o-min-device-pixel-ratio: 5/4),
  (-webkit-min-device-pixel-ratio: 1.25),
  (min-resolution: 120dpi) {

	tr.wp-locked .locked-indicator  {
	}

	#content-resize-handle,
	#post-body .wp_themeSkin .mceStatusbar a.mceResize {
	}

	div.star-holder {
	}

	div.star-holder .star-rating {
	}

	.wp-full-overlay .collapse-sidebar-arrow {
	}

	.spinner,
	.imgedit-wait,
	.customize-loading #customize-container,
	.revision-tick.completed-false {
	}

}

/* =Localized CSS
-------------------------------------------------------------- */

/* zh_CN: Remove italic properties. */
.locale-zh-cn .howto,
.locale-zh-cn .tablenav .displaying-num,
.locale-zh-cn .js .input-with-default-title,
.locale-zh-cn .link-to-original,
.locale-zh-cn .inline-edit-row fieldset span.title,
.locale-zh-cn .inline-edit-row fieldset span.checkbox-title,
.locale-zh-cn #utc-time,
.locale-zh-cn #local-time,
.locale-zh-cn p.install-help,
.locale-zh-cn p.help,
.locale-zh-cn p.description,
.locale-zh-cn span.description,
.locale-zh-cn .form-wrap p {
	font-style: normal;
}

/* zh_CN: Enlarge dashboard widget 'Configure' link */
.locale-zh-cn .hdnle a { font-size: 12px; }

/* zn_CH: Enlarge font size, set font-size: normal */
.locale-zh-cn form.upgrade .hint { font-style: normal; font-size: 100%; }

/* Zn_CH: Distraction free writing.
 *  More beautiful font for "Just write."
 *  Larger text for HTML/Visual mode.
 */
.locale-zh-cn #wp-fullscreen-tagline { font-family: KaiTi, "楷体", sans-serif; }
.locale-zh-cn #wp-fullscreen-modes a { font-size: 12px; }

/* zh_CN: Enlarge font-size. */
.locale-zh-cn #sort-buttons { font-size: 1em !important; }

/* ru_RU: Text needs more room to breathe. */
.locale-ru-ru .inline-edit-row fieldset label span.title {
	width: auto; /* default 5em */
	min-width: 5em;
}
.locale-ru-ru.press-this .posting {
	margin-right: 257px; /* default 212px + 45px */
}
.locale-ru-ru.press-this #photo-add-url-div input[type="text"]  {
	width: 255px; /* default 300px - 45px */
}
.locale-ru-ru.press-this #side-sortables {
	width: 245px; /* default 200px + 45px */
}
.locale-ru-ru #customize-header-actions .button {
	padding: 0 8px 1px; /* default 0 10px 1px; */
}

/* lt_LT: QuickEdit */
.locale-lt-lt .inline-edit-row fieldset label span.title {
	width: 8em;
}
.locale-lt-lt .inline-edit-row fieldset label span.input-text-wrap {
	margin-left: 8em;
}


/* Thickbox styles */

.tb-close-icon {
	background: none;
	height: 16px;
	margin: -2px -3px 0 0;
	width: 16px;
}

.tb-close-icon:before {
	content: '\f158';
	color: #ccc;
	font: normal 20px/1 'dashicons';
	speak: none;
	vertical-align: middle;
	-webkit-font-smoothing: antialiased;
}

.tb-close-icon:hover:before {
	color: #fff;
}

#TB_closeAjaxWindow a {
	text-decoration: none;
}/* ----------------------------------------------------------------------------

Last merged revision: 22948

WordPress-style Buttons
=======================
Create a button by adding the `.button` class to an element. For backwards
compatibility, we support several other classes (such as `.button-secondary`),
but these will *not* work with the stackable classes described below.

Button Styles
-------------
To display a primary button style, add the `.button-primary` class to a button.

Button Sizes
------------
Adjust a button's size by adding the `.button-large` or `.button-small` class.

Button States
-------------
Lock the state of a button by adding the name of the pseudoclass as
an actual class (e.g. `.hover` for `:hover`).


TABLE OF CONTENTS:
------------------
 1.0 - Button Layouts
 2.0 - Default Button Style
 3.0 - Primary Button Style
 4.0 - Button Groups

---------------------------------------------------------------------------- */

/* ----------------------------------------------------------------------------
  1.0 - Button Layouts
---------------------------------------------------------------------------- */

.wp-core-ui .button,
.wp-core-ui .button-primary,
.wp-core-ui .button-secondary {
	display: inline-block;
	text-decoration: none;
	font-size: 13px;
	line-height: 22px;
	height: 24px;
	margin: 0;
	padding: 0 10px 1px;
	cursor: pointer;
	border-width: 1px;
	border-style: solid;
	-webkit-border-radius: 3px;
	-webkit-appearance: none;
	border-radius: 3px;
	white-space: nowrap;
	-webkit-box-sizing: border-box;
	-moz-box-sizing:    border-box;
	box-sizing:         border-box;
}

/* Remove the dotted border on :focus and the extra padding in Firefox */
.wp-core-ui button::-moz-focus-inner,
.wp-core-ui input[type="reset"]::-moz-focus-inner,
.wp-core-ui input[type="button"]::-moz-focus-inner,
.wp-core-ui input[type="submit"]::-moz-focus-inner {
	border-width: 1px 0;
	border-style: solid none;
	border-color: transparent;
	padding: 0;
}

.wp-core-ui .button.button-large,
.wp-core-ui .button-group.button-large .button {
	height: 30px;
    line-height: 28px;
    padding: 0 12px 2px;
}

.wp-core-ui .button.button-small,
.wp-core-ui .button-group.button-small .button {
	height: 21px;
	line-height: 20px;
	padding: 0 8px 1px;
}

.wp-core-ui .button.button-hero,
.wp-core-ui .button-group.button-hero .button {
	font-size: 14px;
	height: 46px;
	line-height: 44px;
	padding: 0 36px;
}

.wp-core-ui .button:active {
	outline: none;
}

.wp-core-ui .button.hidden {
	display: none;
}

/* Style Reset buttons as simple text links */

.wp-core-ui input[type="reset"],
.wp-core-ui input[type="reset"]:hover,
.wp-core-ui input[type="reset"]:active,
.wp-core-ui input[type="reset"]:focus {
	background: none;
	border: none;
	-moz-box-shadow: none;
	-webkit-box-shadow: none;
	box-shadow: none;
	padding-left: 2px;
	padding-right: 2px;
	width: auto;
}

/* ----------------------------------------------------------------------------
  2.0 - Default Button Style
---------------------------------------------------------------------------- */

.wp-core-ui .button,
.wp-core-ui .button-secondary {
	background: #fafafa;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fafafa), to(#e9e9e9));
	background-image: -webkit-linear-gradient(top, #fafafa, #e9e9e9);
	background-image:    -moz-linear-gradient(top, #fafafa, #e9e9e9);
	background-image:      -o-linear-gradient(top, #fafafa, #e9e9e9);
	background-image:   linear-gradient(to bottom, #fafafa, #e9e9e9);
	border-color: #adadad;
 	color: #333;
	text-shadow: 0 1px 0 #fff;

	-webkit-box-shadow: inset 0 1px 0 #fff;
	-moz-box-shadow: inset 0 1px 0 #fff;
	box-shadow: inset 0 1px 0 #fff;
}

.wp-core-ui .button.hover,
.wp-core-ui .button:hover,
.wp-core-ui .button-secondary:hover,
.wp-core-ui .button.focus,
.wp-core-ui .button:focus,
.wp-core-ui .button-secondary:focus {
	background: #f3f3f3;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#fff), to(#f3f3f3));
	background-image: -webkit-linear-gradient(top, #fff, #f3f3f3);
	background-image:    -moz-linear-gradient(top, #fff, #f3f3f3);
	background-image:     -ms-linear-gradient(top, #fff, #f3f3f3);
	background-image:      -o-linear-gradient(top, #fff, #f3f3f3);
	background-image:   linear-gradient(to bottom, #fff, #f3f3f3);
	border-color: #999;
	color: <?php echo $background;?>;
}

.wp-core-ui .button.focus,
.wp-core-ui .button:focus,
.wp-core-ui .button-secondary:focus {
	-webkit-box-shadow: 1px 1px 1px rgba(0,0,0,.2);
	box-shadow: 1px 1px 1px rgba(0,0,0,.2);
}

.wp-core-ui .button.active,
.wp-core-ui .button.active:hover,
.wp-core-ui .button.active:focus,
.wp-core-ui .button:active,
.wp-core-ui .button-secondary:active {
	background: #eee;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f4f4f4), to(#fefefe));
	background-image: -webkit-linear-gradient(top, #f4f4f4, #fefefe);
	background-image:    -moz-linear-gradient(top, #f4f4f4, #fefefe);
	background-image:     -ms-linear-gradient(top, #f4f4f4, #fefefe);
	background-image:      -o-linear-gradient(top, #f4f4f4, #fefefe);
	background-image:   linear-gradient(to bottom, #f4f4f4, #fefefe);
	border-color: #999;
	color: #333;
	text-shadow: 0 -1px 0 #fff;
	-webkit-box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
 	box-shadow: inset 0 2px 5px -3px rgba( 0, 0, 0, 0.5 );
}

.wp-core-ui .button[disabled],
.wp-core-ui .button:disabled,
.wp-core-ui .button-secondary[disabled],
.wp-core-ui .button-secondary:disabled,
.wp-core-ui .button-disabled {
	color: #aaa !important;
	border-color: #ddd !important;
	background-image: -webkit-gradient(linear, left top, left bottom, from(#f9f9f9), to(#f4f4f4)) !important;
	background-image: -webkit-linear-gradient(top, #f9f9f9, #f4f4f4) !important;
	background-image:    -moz-linear-gradient(top, #f9f9f9, #f4f4f4) !important;
	background-image:     -ms-linear-gradient(top, #f9f9f9, #f4f4f4) !important;
	background-image:      -o-linear-gradient(top, #f9f9f9, #f4f4f4) !important;
	background-image:   linear-gradient(to bottom, #f9f9f9, #f4f4f4) !important;
	-webkit-box-shadow: none !important;
	box-shadow:         none !important;
	text-shadow: 0 1px 0 #fff !important;
	cursor: default;
}

/* ----------------------------------------------------------------------------
  3.0 - Primary Button Style
---------------------------------------------------------------------------- */

.wp-core-ui .button-primary {

	background: #2ea2cc;
	background: -webkit-gradient(linear, left top, left bottom, from(#2ea2cc), to(#1e8cbe));
	background: -webkit-linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
	background: linear-gradient(top, #2ea2cc 0%,#1e8cbe 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=0 );
	border-color: #0074a2;
	-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
 	box-shadow: inset 0 1px 0 rgba(120,200,230,0.5);
 	color: #fff;
	text-decoration: none;
	text-shadow: 0 1px 0 rgba(0,86,132,0.7);
}

.wp-core-ui .button-primary.hover,
.wp-core-ui .button-primary:hover,
.wp-core-ui .button-primary.focus,
.wp-core-ui .button-primary:focus {
	background: #1e8cbe;
	background: -webkit-gradient(linear, left top, left bottom, from(#1e8cbe), to(#0074a2));
	background: -webkit-linear-gradient(top, #1e8cbe 0%,#0074a2 100%);
	background: linear-gradient(top, #1e8cbe 0%,#0074a2 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#1e8cbe', endColorstr='#0074a2',GradientType=0 );
	border-color: #0074a2;
	-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.6);
 	box-shadow: inset 0 1px 0 rgba(120,200,230,0.6);
	color: #fff;
}

.wp-core-ui .button-primary.focus,
.wp-core-ui .button-primary:focus {
	border-color: #0e3950;
	-webkit-box-shadow: inset 0 1px 0 rgba(120,200,230,0.6), 1px 1px 2px rgba(0,0,0,0.4);
	box-shadow: inset 0 1px 0 rgba(120,200,230,0.6), 1px 1px 2px rgba(0,0,0,0.4);
}

.wp-core-ui .button-primary.active,
.wp-core-ui .button-primary.active:hover,
.wp-core-ui .button-primary.active:focus,
.wp-core-ui .button-primary:active {
	background: #1e8cbe;
	background: -webkit-gradient(linear, left bottom, left top, from(#1e8cbe), to(#0074a2));
	background: -webkit-linear-gradient(bottom, #1e8cbe 0%,#0074a2 100%);
	background: linear-gradient(bottom, #1e8cbe 0%,#0074a2 100%);
	border-color: #005684;
	color: rgba(255,255,255,0.95);
	-webkit-box-shadow: inset 0 1px 0 rgba(0,0,0,0.1);
 	box-shadow: inset 0 1px 0 rgba(0,0,0,0.1);
	text-shadow: 0 1px 0 rgba(0,0,0,0.1);
}

.wp-core-ui .button-primary[disabled],
.wp-core-ui .button-primary:disabled,
.wp-core-ui .button-primary-disabled {
	color: #94cde7 !important;
	background: #298cba !important;
	border-color: #1b607f !important;
	-webkit-box-shadow: none !important;
	box-shadow:         none !important;
	text-shadow: 0 -1px 0 rgba(0,0,0,0.1) !important;
	cursor: default;
}

/* ----------------------------------------------------------------------------
  4.0 - Button Groups
---------------------------------------------------------------------------- */

.wp-core-ui .button-group {
	position: relative;
	display: inline-block;
	white-space: nowrap;
	font-size: 0;
	vertical-align: middle;
}

.wp-core-ui .button-group > .button {
	display: inline-block;
	border-radius: 0;
	margin-right: -1px;
	z-index: 10;
}

.wp-core-ui .button-group > .button-primary {
	z-index: 100;
}

.wp-core-ui .button-group > .button:hover {
	z-index: 20;
}

.wp-core-ui .button-group > .button:first-child {
	border-radius: 3px 0 0 3px;
}

.wp-core-ui .button-group > .button:last-child {
	border-radius: 0 3px 3px 0;
}
/*------------------------------------------------------------------------------

Last merged revision: 24761

Howdy! This is the CSS file that controls the
MP6 color style on the WordPress Dashboard.

This file contains both LTR and RTL styles.


TABLE OF CONTENTS:
------------------
 1.0 - Left to Right Styles
 2.0 - Right to Left Styles


------------------------------------------------------------------------------*/

/* Jetpack is retina-crazy. Their backgrounds are declared with !importants,
   so we have to use the .mp6 body class to trump their selectors.  */

@media print,
  (-o-min-device-pixel-ratio: 5/4),
  (-webkit-min-device-pixel-ratio: 1.25),
  (min-resolution: 120dpi) {
	.mp6 .curtime #timestamp,
	.mp6 #screen-meta-links a.show-settings,
	.mp6 .widget-top a.widget-action,
	.mp6 .widget-top a.widget-action:hover,
	.mp6 .sidebar-name-arrow,
	.mp6 .sidebar-name:hover .sidebar-name-arrow,
	.mp6 .meta-box-sortables .postbox:hover .handlediv,
	.mp6 .tagchecklist span a,
	.mp6 #bulk-titles div a,
	.mp6 .tagchecklist span a:hover,
	.mp6 #bulk-titles div a:hover,
	.mp6 .wp_themeSkin .mceToolbar span.mce_undo,
	.mp6 .wp_themeSkin .mceToolbar span.mce_redo,
	.mp6 .wp_themeSkin .mceToolbar span.mce_bullist,
	.mp6 .wp_themeSkin .mceToolbar span.mce_numlist,
	.mp6 .wp_themeSkin .mceToolbar span.mce_blockquote,
	.mp6 .wp_themeSkin .mceToolbar span.mce_charmap,
	.mp6 .wp_themeSkin .mceToolbar span.mce_bold,
	.mp6 .wp_themeSkin .mceToolbar span.mce_italic,
	.mp6 .wp_themeSkin .mceToolbar span.mce_underline,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyleft,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyright,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifycenter,
	.mp6 .wp_themeSkin .mceToolbar span.mce_justifyfull,
	.mp6 .wp_themeSkin .mceToolbar span.mce_indent,
	.mp6 .wp_themeSkin .mceToolbar span.mce_outdent,
	.mp6 .wp_themeSkin .mceToolbar span.mce_link,
	.mp6 .wp_themeSkin .mceToolbar span.mce_unlink,
	.mp6 .wp_themeSkin .mceToolbar span.mce_help,
	.mp6 .wp_themeSkin .mceToolbar span.mce_removeformat,
	.mp6 .wp_themeSkin .mceToolbar span.mce_fullscreen,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_fullscreen,
	.mp6 .wp_themeSkin .mceToolbar span.mce_media,
	.mp6 .wp_themeSkin .mceToolbar span.mce_pastetext,
	.mp6 .wp_themeSkin .mceToolbar span.mce_pasteword,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_help,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_adv,
	.mp6 .wp_themeSkin .mceToolbar span.mce_wp_more,
	.mp6 .wp_themeSkin .mceToolbar span.mce_strikethrough,
	.mp6 .wp_themeSkin .mceToolbar span.mce_spellchecker,
	.mp6 .wp_themeSkin .mceToolbar span.mce_forecolor,
	.mp6 .wp_themeSkin .mceToolbar .mce_forecolorpicker,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton .mce_spellchecker span.mce_spellchecker,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton .mce_forecolor span.mce_forecolor,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton span.mce_numlist,
	.mp6 .wp_themeSkin .mceToolbar .mceSplitButton span.mce_bullist
	{ background: none !important; }
}


/*------------------------------------------------------------------------------
  1.0 - Left to Right Styles
------------------------------------------------------------------------------*/

html {
	background: #eee;
}

/* Checkbooms */

input[type=checkbox],
input[type=radio] {
	background: #fff;
	border-color: #bbb !important;
	color: #555;

	-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.1);
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.1);
}

input[type=checkbox]:checked:before {
	color: #1e8cbe;
}

input[type=radio]:checked:before {
	background-color: #1e8cbe !important;
}

#wpbody select {
	border-color: #bbb !important;
}

.wp-core-ui input[type="reset"]:hover,
.wp-core-ui input[type="reset"]:active {
	color: #2ea2cc !important;
}

#adminmenu .wp-has-current-submenu .wp-submenu,
.no-js li.wp-has-current-submenu:hover .wp-submenu,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu {
	background-color: <?php echo $hbackground;?> !important;
}

#adminmenu .wp-has-current-submenu .wp-submenu a,
.no-js li.wp-has-current-submenu:hover .wp-submenu a,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open a,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu a {
	color: #bbb !important;
}

#adminmenu .wp-has-current-submenu .wp-submenu a:hover,
.no-js li.wp-has-current-submenu:hover .wp-submenu a:hover,
#adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover,
#adminmenu .wp-has-current-submenu .wp-submenu.sub-open a:hover,
#adminmenu .wp-has-current-submenu.opensub .wp-submenu a:hover,
#adminmenu .wp-submenu a:hover,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a:hover,
.folded #adminmenu .wp-has-current-submenu .wp-submenu a:hover {
	background: none;
	color: #2ea2cc !important;
}

ul#adminmenu a.wp-has-current-submenu:after,
ul#adminmenu > li.current > a.current:after {
	border-right-color: #eee !important;
}

#dashboard_right_now .t,
#dashboard_right_now .b {
	color: #777 !important;
}

#the-comment-list .comment-item p.row-actions,
#dashboard_recent_comments .subsubsub,
.plugins .row-actions-visible,
.row-actions {
	color: #ddd;
}

.find-box-search,
.find-box-buttons {
	background-color: #f7f7f7;
	border-top: 1px solid #dfdfdf;
}

.find-box {
	background-color: #444;
}

.find-box-head {
	color: #eee;
}

.find-box-inside {
	background-color: #fff;
}

a.page-numbers:hover {
	border-color: #999;
}

body,
#wpbody,
.form-table .pre,
.ui-autocomplete li a {
	color: #333;
}

body > #upload-menu {
	border-bottom-color: #fff;
}

#postcustomstuff table,
#your-profile fieldset,
#rightnow,
div.dashboard-widget,
#dashboard-widgets p.dashboard-widget-links {
	border-color: #ccc;
}

#poststuff .inside label.spam,
#poststuff .inside label.deleted {
	color: red;
}

#poststuff .inside label.waiting {
	color: orange;
}

#poststuff .inside label.approved {
	color: green;
}

#postcustomstuff table {
	border-color: #dfdfdf;
	background-color: #f9f9f9;
}

#postcustomstuff thead th {
	background-color: #f1f1f1;
}

table.widefat {
	border-color: #fff;
	background-color: #fff;
}

th .comment-grey-bubble:before {
	color: #444;
}

.sorting-indicator:before {
	color: #444;
}

div.dashboard-widget-error {
	background-color: #c43;
}

div.dashboard-widget-notice {
	background-color: #cfe1ef;
}

div.dashboard-widget-submit {
	border-top-color: #ccc;
}

ul.category-tabs li {
	border-color: transparent;
}

div.tabs-panel,
.wp-tab-panel,
ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	border-color: #dfdfdf;
	background-color: #fff;
}

ul.category-tabs li.tabs {
	border-color: #dfdfdf #dfdfdf #fff;
}

ul.category-tabs li.tabs,
ul.add-menu-item-tabs li.tabs,
.wp-tab-active {
	background-color: #fff;
}

kbd,
code {
	background: #eaeaea;
	background: rgba(0,0,0,0.07);
}

textarea,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="url"],
.titlewrap input {
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.07);
}

textarea,
input[type="text"],
input[type="password"],
input[type="email"],
input[type="number"],

input[type="search"],
input[type="tel"],
input[type="url"],
.titlewrap input,
select {
	border-color: #ccc;
}

.inside textarea,
.inside input[type="text"],
.inside input[type="password"],
.inside input[type="email"],
.inside input[type="number"],
.inside input[type="search"],
.inside input[type="tel"],
.inside input[type="url"] {
	border-color: #ddd;
}

textarea:focus,
input[type="text"]:focus,
input[type="password"]:focus,
input[type="email"]:focus,
input[type="number"]:focus,
input[type="search"]:focus,
input[type="tel"]:focus,
input[type="url"]:focus,
select:focus {
	border-color: #aaa;
}

input.disabled,
textarea.disabled {
	background-color: #ccc !important;
}

#plugin-information .action-button a,
#plugin-information .action-button a:hover,
#plugin-information .action-button a:visited {
	color: #fff !important;
}

.widget .widget-top,
.postbox h3,
.stuffbox h3,
.control-section .accordion-section-title,
h3.dashboard-widget-title,
h3.dashboard-widget-title span,
h3.dashboard-widget-title small,
.sidebar-name,
#nav-menu-header,
#nav-menu-footer,
.menu-item-handle,
.checkbox,
.side-info,
.widefat thead th,
.widefat tfoot th {
	background: #fcfcfc !important;
	border-top: none !important;
	border-bottom: 1px solid #e1e1e1 !important;
}

.accordion-section-content {
	border-left: none;
	border-right: none;
}

.js .control-section:hover .accordion-section-title,
.js .control-section .accordion-section-title:hover,
.js .control-section.open .accordion-section-title,
.js .control-section .accordion-section-title:focus {
	background: <?php echo $color;?> !important;
	border-color: #0074a2 !important;
}

.widefat tfoot th {
	border-bottom: none !important;
	border-top: 1px solid #e1e1e1 !important;
}

.form-table th,
.form-wrap label {
	color: <?php echo $background;?> !important;
}

.form-table th {
	border-bottom: 1px solid #dfdfdf !important;
}

.form-table td {
	border-bottom: 1px solid #dfdfdf !important;
}
.form-table.editcomment td {
	border-bottom: none;
}

.description,
.form-wrap p {
	color: #666 !important;
}


strong .post-com-count span {
	background-color: <?php echo $color;?> !important;
}

.post-com-count:after {		/* draw bubble connector using CSS! */
	border-top: 5px solid #bbbbbb !important;
	border-right: 5px solid transparent !important;
}

strong .post-com-count:after {
	border-top: 5px solid #0076a0 !important;
}

.post-com-count:hover:after {
	border-top: 5px solid #2ea2cc !important;
}

.sorthelper {
	background-color: #ccf3fa !important;
}

.ac_match,
.subsubsub a.current {
	color: #000;
}

.wrap h2 {
	color: #000;
}

.wrap .add-new-h2,
.wrap .add-new-h2:active,
#add-new-comment a {
	background: #e0e0e0 !important;
}

.wrap .add-new-h2:hover,
#add-new-comment a:hover {
	background: #2ea2cc !important;
	color: #fff !important;
}

.subtitle {
	color: #777;
}

.ac_over {
	background-color: #f0f0b8 !important;
}

.ac_results {
	background-color: #fff !important;
	border-color: #808080 !important;
}

.ac_results li {
	color: #101010;
}

.alternate,
.alt {
	background-color: #f9f9f9;
}

.available-theme a.screenshot {
	background-color: #fff;
	border-color: #ccc;
}

#current-theme {
	border-bottom-color: #dfdfdf;
}

.bar {
	background-color: #e8e8e8;
	border-right-color: #99d;
}

.form-invalid {
	background-color: #ffebe8 !important;
}

.form-invalid input,
.form-invalid select {
	border-color: #c00 !important;
}

.submit,
#commentsdiv #add-new-comment {
	border: none;
}

.highlight {
	background-color: #e4f2fd;
	color: #000;
}

.howto,
.nonessential,
#edit-slug-box,
.form-input-tip,
.subsubsub {
	color: #666;
}

.media-upload-form label.form-help,
td.help {
	color: #9a9a9a;
}

.ui-autocomplete {
	border-color: #aaa;
	background-color: #efefef;
}

.ui-autocomplete li a.ui-state-focus {
	background-color: #ddd;
}

.post-com-count {
	color: #fff;
}

.post-com-count span {
	background-color: #bbb;
	color: #fff;
}

.post-com-count:hover span {
	background-color: #2ea2cc;
}

.quicktags, .search {
	background-color: #ccc;
	color: #000;
}

.side-info h5 {
	border-bottom-color: #dadada;
}

.side-info ul {
	color: #666 !important;
}

a:hover,
a:active {
	color: <?php echo $hcolor;?> !important;
}

a:focus {
	color: <?php echo $color;?> !important;
}

#adminmenu a:hover,
#adminmenu li.menu-top > a:focus,
#adminmenu .wp-submenu a:hover,
#rightnow a:hover,
#media-upload a.del-link:hover,
div.dashboard-widget-submit input:hover,
.subsubsub a:hover,
.subsubsub a.current:hover,
.ui-tabs-nav a:hover {
	color: <?php echo $hcolor;?> !important;
}

#the-comment-list .comment-item,
#dashboard-widgets #dashboard_quick_press form p.submit {
	border: none;
}

#side-sortables .category-tabs .tabs a,
#side-sortables .add-menu-item-tabs .tabs a,
.wp-tab-bar .wp-tab-active a {
	color: #333;
}

#rightnow .rbutton {
	background-color: #ebebeb;
	color: #264761;
}

p.submit {
	border-top-color: #dfdfdf;
}

.submitbox .submit {
	background-color: #464646;
	color: #ccc;
}

table.widefat span.delete a,
table.widefat span.trash a,
table.widefat span.spam a,
#dashboard_recent_comments .delete a,
#dashboard_recent_comments .trash a,
#dashboard_recent_comments .spam a,
.plugins a.delete,
#all-plugins-table .plugins a.delete,
#search-plugins-table .plugins a.delete,
.submitbox .submitdelete,
#media-items a.delete,
#media-items a.delete-permanently,
#nav-menu-footer .menu-delete {
	color: #d00;
}

table.widefat span.delete a:hover,
table.widefat span.trash a:hover,
table.widefat span.spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover,
#dashboard_recent_comments .spam a:hover,
.plugins a.delete:hover,
#all-plugins-table .plugins a.delete:hover,
#search-plugins-table .plugins a.delete:hover,
.submitbox .submitdelete:hover,
#media-items a.delete:hover,
#media-items a.delete-permanently:hover,
#nav-menu-footer .menu-delete:hover {
	color: #f00;
}

#normal-sortables .submitbox .submitdelete:hover {
	color: #000;
	background-color: #f00;
	border-bottom-color: #f00;
}

.tablenav .dots {
	border-color: transparent;
}

.tablenav .next,
.tablenav .prev {
	border-color: transparent;
	color: <?php echo $color;?>;
}

.tablenav .next:hover,
.tablenav .prev:hover {
	border-color: transparent;
	color: <?php echo $hcolor;?>;
}

div.updated,
.login .message,
.press-this #message {
	background-color: #fff;
	border-left: 4px solid #7ad03a;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

#update-nag,
.update-nag {
	background-color: #fff;
	border-left: 4px solid #ffba00;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

div.error,
.login #login_error {
	background: #fff;
	border-left: 4px solid #dd3d36;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

.update-message {
	color: #000;
}

a.page-numbers {
	border-bottom-color: #b8d3e2;
}

.commentlist li {
	border-bottom-color: #ccc;
}

.widefat td,
.widefat th {
	color: #555;
}

.widefat p,
.widefat ol,
.widefat ul {
	color: #333;
}

.widefat thead tr th,
.widefat tfoot tr th,
h3.dashboard-widget-title,
h3.dashboard-widget-title span,
h3.dashboard-widget-title small {
	color: #333;
}

th.manage-column a,
th.sortable a:hover,
th.sortable a:active,
th.sortable a:focus {
	color: #333;
}

th.sortable a:focus {
	background: #e1e1e1;
}

h3.dashboard-widget-title small a {
	color: #d7d7d7;
}

h3.dashboard-widget-title small a:hover {
	color: #fff;
}

a,
#the-comment-list p.comment-author strong a,
#media-upload a.del-link,
#media-items a.delete,
#media-items a.delete-permanently,
.plugins a.delete,
.ui-tabs-nav a,
.plugins .inactive a {
	color: <?php echo $color;?>;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

.wp-list-table a,
.media-router a {
	-moz-transition: none;
	-webkit-transition: none;
	transition: none;
}

#adminmenu a {
	color: <?php echo $color;?> !important;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#adminmenu .awaiting-mod,
#adminmenu .update-plugins,
#sidemenu a .update-plugins,
#rightnow .reallynow {
	background-color: #d54e21 !important;
	color: #fff !important;
	box-shadow:none !important;
}
#plugin-information .action-button {
	background-color: #2ea2cc !important;
	color: #fff !important;
}

#adminmenu li.current a .awaiting-mod,
#adminmenu	li a.wp-has-current-submenu .update-plugins {
	background-color: #2ea2cc !important;
	color: #fff !important;
}

div#media-upload-header,
div#plugin-information-header {
	background-color: #f9f9f9 !important;
	border-bottom-color: #dfdfdf !important;
}

#currenttheme img {
	border-color: #666 !important;
}

#dashboard_secondary div.dashboard-widget-content ul li a {
	background-color: #f9f9f9 !important;
}

input.readonly, textarea.readonly {
	background-color: #ddd !important;
}

#editable-post-name {
	background-color: #fffbcc !important;
}

#edit-slug-box strong,
.tablenav .displaying-num,
#submitted-on,
.submitted-on {
	color: #777 !important;
}

.plugins .inactive a:hover {
	color: #2ea2cc !important;
}

#wpfooter {
	color: #777 !important;
	border-color: transparent;
}

.imgedit-group,
#media-items .media-item,
.media-item .describe {
	border-color: #dfdfdf !important;
}

.plugins .plugin-description p,
.plugins .plugin-version-author-uri {
	color: #333;
}

.plugins .inactive .plugin-title strong {
	color: #333;
}

.plugin-update-tr .plugin-update {
	border: none;
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
}

.plugin-update-tr .update-message {
	background-color: #f7f7f7;
	background-color: rgba(0,0,0,0.03);
}

tr.active.update + tr.plugin-update-tr .plugin-update .update-message {
	background-color: #fcf3ef;
}

.plugin-update-tr .update-message:before {
	color: #d54e21;
}

.plugins,
.plugins th,
.plugins td {
	color: #000;
}

.plugins .inactive a {
	color: #579;
}

.plugins tr {
	background: #fff;
}

.plugins .inactive td,
.plugins .inactive th,
.plugins .active td,
.plugins .active th,
.plugin-install #the-list td {
	-webkit-box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
	box-shadow: inset 0 -1px 0 rgba(0,0,0,0.1);
}

.plugins .update td,
.plugins .update th {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.plugins .active td,
.plugins .active th,
tr.active + tr.plugin-update-tr .plugin-update {
	background-color: #f7fcfe;
}

.plugins .active.update td,
.plugins .active.update th,
tr.active.update + tr.plugin-update-tr .plugin-update {
	background-color: #fefaf7;
}

.plugins tr.active.plugin-update-tr + tr.inactive th,
.plugins tr.active.plugin-update-tr + tr.inactive td,
.plugins tr.active + tr.inactive th,
.plugins tr.active + tr.inactive td {
	border-top: 1px solid rgba(0,0,0,0.03);

	-webkit-box-shadow: inset 0px 1px 0 rgba(0,0,0,0.02), inset 0 -1px 0 #e1e1e1;
	box-shadow: inset 0px 1px 0 rgba(0,0,0,0.02), inset 0 -1px 0 #e1e1e1;
}

.plugins tr.active + tr.inactive.update th,
.plugins tr.active + tr.inactive.update td {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.plugins .active th.check-column {
	border-left: 4px solid #2ea2cc;
}

.plugins .active.update th.check-column,
.plugins .active.update + .plugin-update-tr .plugin-update {
	border-left: 4px solid #d54e21;
}

.post-state-format:before,
.post-format-icon:before {
	color: #bbb;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

a.post-state-format:hover:before,
a.post-format-icon:hover:before {
	color: #2ea2cc;
}

#the-list tr:last-child td,
#the-list tr:last-child th {
	border-bottom: none !important;
	-webkit-box-shadow: none;
	box-shadow: none;
}

#the-comment-list tr.undo,
#the-comment-list div.undo {
	background-color: #f4f4f4;
}

#the-comment-list .unapproved {
	background-color: #ffffe0;
}

#the-comment-list .approve a {
	color: #006505;
}

#the-comment-list .unapprove a {
	color: #d98500;
}

.welcome-panel p {
	color: #777;
}

.welcome-panel a {
	text-decoration: none;
}

.welcome-panel-column p {
	color: #464646;
}

.welcome-panel .welcome-icon:before {
	color: #888;
}

.widget,
.menu-item-settings,
#widget-list .widget-top,
.postbox,
#menu-management .menu-edit,
.manage-menus,
table.widefat,
.stuffbox,
p.popular-tags,
.widgets-holder-wrap,
.welcome-panel,
.wp-editor-container,
#post-status-info,
.popular-tags,
.feature-filter {
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
	box-shadow: 0 1px 3px rgba(0,0,0,0.13);
}

.widget,
.menu-item-settings,
#widget-list .widget-top,
#widgets-right .widget-top {
	-webkit-box-shadow: 0 0 0 1px rgba(0,0,0,0.07) !important;
	box-shadow: 0 0 0 1px rgba(0,0,0,0.07) !important;
}

.postbox table.widefat {
	-webkit-box-shadow: none !important;
	box-shadow: none !important;
}

.welcome-panel,
.postbox,
table.widefat,
.wp-editor-container,
.stuffbox,
p.popular-tags,
.widgets-holder-wrap,
.popular-tags,
.feature-filter {
	background: #fff !important;
	box-shadow:none !important;
	border-bottom:none !important;
}

.postbox h3 {
	color: #666 !important;
}

.widget .widget-top,
.menu-item-handle {
	background: <?php echo $color;?> !important;
	color: #fff;
	border: none !important;
}

#widget-list .widget .widget-top,
#wp_inactive_widgets .widget .widget-top,
.menu-item-handle {
	background: #ddd !important;
	color: #333 !important;
}

.js .sidebar-name:hover h3,
.js .postbox h3:hover {
	color: #000 !important;
}

#misc-publishing-actions label[for="post_status"]:before,
#post-body #visibility:before,
.curtime #timestamp:before,
span.wp-media-buttons-icon:before,
span.jetpack-contact-form-icon:before {
	color: #888 !important;
}

#rightnow .youhave {
	background-color: #f0f6fb !important;
}

#rightnow a {
	color: #448abd !important;
}

#welcome-panel.welcome-panel .welcome-panel-close::before,
.tagchecklist span a:before,
#bulk-titles div a:before,
.wp-pointer-buttons a.close:before {
	background: none;
	color: #bbb;
}

#welcome-panel.welcome-panel .welcome-panel-close:hover:before,
.tagchecklist span a:hover:before,
#bulk-titles div a:hover:before,
.wp-pointer-buttons a.close:hover:before {
	color: #c00;
}

#screen-meta {
	background-color: #fff;

	-webkit-box-shadow: 0 1px 2px rgba(0,0,0,0.1);
	box-shadow: 0 1px 2px rgba(0,0,0,0.1);
}

#contextual-help-back {
	background: #f6fbfd;
}

.contextual-help-tabs a:hover {
	color: #333;
}

#contextual-help-back,
.contextual-help-tabs .active a {
	border-color: #e1e1e1;
}

.contextual-help-tabs .active {
	border-color: #2ea2cc;

	-webkit-box-shadow: 0px 2px 0 rgba(0,0,0,0.02), 0 1px 0 rgba(0,0,0,0.02);
	box-shadow: 0px 2px 0 rgba(0,0,0,0.02), 0 1px 0 rgba(0,0,0,0.02);
}

.contextual-help-tabs .active,
.contextual-help-tabs .active a,
.contextual-help-tabs .active a:hover {
	background: #f6fbfd;
	color: #333;
}

/* screen options and help tabs */
#screen-options-link-wrap,
#contextual-help-link-wrap {
	background: rgb(255,255,255);
	background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,rgba(255,255,255,1)), color-stop(100%,rgba(241,241,241,1)));
	background: -webkit-linear-gradient(top, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 100%);
	background: linear-gradient(to bottom, rgba(255,255,255,1) 0%,rgba(241,241,241,1) 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#ffffff', endColorstr='#f1f1f1',GradientType=0 );

	-webkit-box-shadow: 0 2px 2px rgba(0,0,0,0.1);
	box-shadow: 0 2px 2px rgba(0,0,0,0.1);
}

#screen-meta-links a {
	color: #777;
}

#screen-meta-links a:after {
	color: #bbb;
}

#screen-meta-links a:hover,
#screen-meta-links a:active {
	color: #333;
	background-color: transparent;
}
/* end screen options and help tabs */

#wphead {
	border-bottom-color: #dfdfdf;
}

#wphead h1 a {
	color: #464646;
}

.file-error,
abbr.required,
.widget-control-remove:hover,
table.widefat .delete a:hover,
table.widefat .trash a:hover,
table.widefat .spam a:hover,
#dashboard_recent_comments .delete a:hover,
#dashboard_recent_comments .trash a:hover
#dashboard_recent_comments .spam a:hover {
	color: #f00;
}

#pass-strength-result {
	background-color: #eee;
	border-color: #ddd !important;
}

#pass-strength-result.bad {
	background-color: #ffb78c;
	border-color: #ff853c !important;
}

#pass-strength-result.good {
	background-color: #ffec8b;
	border-color: #fc0 !important;
}

#pass-strength-result.short {
	background-color: #ffa0a0;
	border-color: #f04040 !important;
}

#pass-strength-result.strong {
	background-color: #c3ff88;
	border-color: #8dff1c !important;
}

#post-status-info {
	background-color: #f7f7f7;
}

.widget-inside,
.menu-item-settings {
	background: #fcfcfc;
}

#titlediv #title {
	background-color: #fff;
}

#tTips p#tTips_inside {
	background-color: #ddd;
	color: #333;
}

#poststuff .inside .the-tagcloud {
	border-color: #ddd;
}

/* menu */
#adminmenuback,
#adminmenuwrap {
	background-color: <?php echo $background;?> !important;
	border-color:#EEEEEE !important;
}

#adminmenu li.wp-menu-separator {
	background: transparent !important;
	border-color: transparent !important;
}

#adminmenu div.separator {
	border-color: transparent !important;
}

#adminmenu li.wp-menu-open {
	border-color: #dfdfdf !important;
}

#adminmenu li.menu-top,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top {
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#adminmenu li.menu-top:hover,
#adminmenu li.opensub > a.menu-top,
#adminmenu li > a.menu-top:focus {
	background-color: <?php echo $hbackground;?> !important;
	color: <?php echo $hcolor;?> !important;
}

/* flyout menu arrow */
#adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-right-color: <?php echo $background;?> !important;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
#adminmenu li.current a.menu-top,
.folded #adminmenu li.wp-has-current-submenu,
.folded #adminmenu li.current.menu-top,
#adminmenu .wp-menu-arrow,
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head,
#adminmenu .wp-menu-arrow div {
	background: <?php echo $hbackground;?> !important;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow {
	border-top-color: #f9f9f9;
	border-bottom-color: #dfdfdf;
	background: transparent;
}

#adminmenu li.wp-not-current-submenu .wp-menu-arrow div {
	background: #111;
	border-color: #111;
}

#adminmenu li.wp-has-current-submenu a.wp-has-current-submenu,
#adminmenu li.current a.menu-top,
#adminmenu .wp-has-current-submenu .wp-submenu .wp-submenu-head {
	color: <?php echo $color;?> !important;
}

.folded #adminmenu li.wp-has-current-submenu,
.folded #adminmenu li.current.menu-top {
	border-color: #666 !important;	/* Match the background color of the current menu item for a flat appearance */
}

#adminmenu .wp-submenu li.current,
#adminmenu .wp-submenu li.current a,
#adminmenu .wp-submenu li.current a:hover {
	color: #fff !important;
	background: transparent !important;
}

#adminmenu .wp-submenu,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	background-color: <?php echo $hbackground;?> !important;
	-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.3) !important;
	box-shadow: 0 3px 6px rgba(0,0,0,0.3) !important;
	border:none !important;
}

/* Apply these styles to auto-folded menus */
@media only screen and (max-width: 900px) {
	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu {
		background-color: <?php echo $hbackground;?> !important;
		-webkit-box-shadow: 0 3px 6px rgba(0,0,0,0.3) !important;
		box-shadow: 0 3px 6px rgba(0,0,0,0.3) !important;
	}
}

#adminmenu .wp-submenu a,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
.folded #adminmenu .wp-has-current-submenu .wp-submenu a {
	color: #bbb !important;
}

#adminmenu .wp-submenu li.current a,
.folded #adminmenu a.wp-has-current-submenu:focus + .wp-submenu li.current a,
.folded #adminmenu .wp-has-current-submenu .wp-submenu li.current a {
	color: #fff !important;
}

/* Apply these styles to auto-folded menus */
@media only screen and (max-width: 900px) {
	.auto-fold #adminmenu a.wp-has-current-submenu:focus + .wp-submenu a,
	.auto-fold #adminmenu .wp-has-current-submenu .wp-submenu a {
		color: #bbb !important;
	}
}

#adminmenu .wp-submenu .wp-submenu-head {
	color: #fff !important;
}

/* collapse menu button */
#collapse-menu {
	color: <?php echo $color;?> !important;
	-moz-transition: all .1s ease-in-out;
	-webkit-transition: all .1s ease-in-out;
	transition: all .1s ease-in-out;
}

#collapse-menu:hover {
	color: <?php echo $hcolor;?>;
}

#collapse-button div:after {
	color: #aaa;
}

#collapse-menu:hover #collapse-button div:after {
	color: <?php echo $hcolor;?>;
}

#adminmenu div.wp-menu-image:before {
	color: <?php echo $color;?>;
}

.icon16:before {
	color: <?php echo $hcolor;?>;
}

#adminmenu li.wp-has-current-submenu:hover div.wp-menu-image:before {
	color: #fff;
}

#adminmenu li:hover div.wp-menu-image:before {
	color: <?php echo $hcolor;?>;
}

#adminmenu .wp-has-current-submenu div.wp-menu-image:before,
#adminmenu .current div.wp-menu-image:before,
#adminmenu a.wp-has-current-submenu:hover div.wp-menu-image:before,
#adminmenu a.current:hover div.wp-menu-image:before {
	color: #fff;
}

/* Diff */

table.diff .diff-deletedline del {
	background-color: #f99;
}

.ui-tooltip, .arrow::after {
	background-color: #fff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.revisions-meta,
.revisions-diff,
.revisions.pinned .revisions-controls {
	background-color: #fff;
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

table.diff .diff-deletedline {
	background-color: #ffe9e9;
}

table.diff .diff-deletedline del {
	background-color: #faa;
}

table.diff .diff-addedline {
	background-color: #e9ffe9;
}

table.diff .diff-addedline ins {
	background-color: #afa;
}

.revisions-tooltip,
.revisions-tooltip-arrow span {
	border-color: #d7d7d7;
	background-color: #fff;
}

.revisions-tickmarks {
	background-color: #fff;
}

.revisions-tickmarks > div {
	border-color: #aaa;
}

.revisions.pinned .revisions-controls {
	background: #fff;
}

.revisions.pinned .revisions-meta {
	box-shadow: none;
}

/* jQuery UI Slider */

.wp-slider.ui-slider {
	border-color: #d7d7d7;
}

.wp-slider .ui-slider-handle,
.wp-slider .ui-slider-handle.ui-state-hover,
.wp-slider .ui-slider-handle.focus {
	background: #2ea2cc;
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#2ea2cc), color-stop(100%,#1e8cbe));
	background: -webkit-linear-gradient(-45deg, #2ea2cc 0%,#1e8cbe 100%);
	background: linear-gradient(135deg, #2ea2cc 0%,#1e8cbe 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#2ea2cc', endColorstr='#1e8cbe',GradientType=1 );
	box-shadow: 0 1px 3px rgba(0,0,0,0.1);
}

.wp-slider .ui-slider-handle:before {
	color: #fff;
	text-shadow: 0 1px 1px rgba(0,116,162,1);
}

.wp-slider .ui-slider-handle.ui-state-active {
	background: <?php echo $color;?>;
	background: -webkit-gradient(linear, left top, right bottom, color-stop(0%,#0074a2), color-stop(100%,#005684));
	background: -webkit-linear-gradient(-45deg,  #0074a2 0%,#005684 100%);
	background: linear-gradient(135deg,  #0074a2 0%,#005684 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#0074a2', endColorstr='#005684',GradientType=1 );
}

/* edit image */
#sidemenu a {
	background-color: #f9f9f9;
	border-color: #f9f9f9;
	border-bottom-color: #dfdfdf;
}

#sidemenu a.current {
	background-color: #fff;
	border-color: #dfdfdf #dfdfdf #fff;
	color: #2ea2cc;
}

#replyerror {
	border-color: #ddd;
	background-color: #f9f9f9;
}

/* table vim shortcuts */
.vim-current,
.vim-current th,
.vim-current td {
	background-color: #E4F2FD !important;
}

/* Install Plugins */

#plugin-information {
	height: auto;
}

#plugin-information .fyi ul {
	background-color: #eaf3fa;
}

#plugin-information .fyi h2.mainheader {
	background-color: #cee1ef;
}

#plugin-information pre,
#plugin-information code {
	background-color: #ededff;
}

#plugin-information pre {
	border-color: #ccc;
}

/* inline editor */
#bulk-titles {
	border-color: #ddd;
}

.inline-editor div.title {
	background-color: #eaf3fa;
}

.inline-editor ul.cat-checklist {
	background-color: #fff;
	border-color: #ddd;
}

.inline-editor .quick-edit-save {
	background-color: #f1f1f1;
}

fieldset.inline-edit-col-right .inline-edit-col {
	border-color: #dfdfdf;
}

.attention {
	color: #2ea2cc;
}

.js .meta-box-sortables .postbox:hover .handlediv:before {
	color: #888;
}

.tablenav .tablenav-pages {
	color: #555;
}

.tablenav .tablenav-pages a {
	background: #eee;
	background: rgba( 0, 0, 0, 0.05 );
}

.tablenav .tablenav-pages a:hover,
.tablenav .tablenav-pages a:focus {
	color: #fff;
	background: #2ea2cc;
}

.tablenav .tablenav-pages a.disabled,
.tablenav .tablenav-pages a.disabled:hover,
.tablenav .tablenav-pages a.disabled:focus {
	color: #aaa;
	background: #eee;
	background: rgba( 0, 0, 0, 0.05 );
}

.tablenav .tablenav-pages .current {
	background: #dfdfdf;
	border-color: #d3d3d3;
}

#availablethemes,
#availablethemes td {
	border-color: #ddd;
}

#current-theme img {
	border-color: #999;
}

#TB_window #TB_title a.tb-theme-preview-link,
#TB_window #TB_title a.tb-theme-preview-link:visited {
	color: #999;
}

#TB_window #TB_title a.tb-theme-preview-link:hover,
#TB_window #TB_title a.tb-theme-preview-link:focus {
	color: #ccc;
}

.misc-pub-section {
	border-top-color: #fff;
	border-bottom-color: #dfdfdf;
}

#minor-publishing {
	border-bottom-color: #dfdfdf;
}

#post-body .misc-pub-section {
	border-left-color: #eee;
}

.post-com-count span {
	background-color: #bbb;
}

.form-table .color-palette td {
	border-color: #fff;
}

.sortable-placeholder {
	border-color: #bbb;
	background-color: #f5f5f5;
}

#post-body ul.category-tabs li.tabs a,
#post-body ul.add-menu-item-tabs li.tabs a,
body.press-this ul.category-tabs li.tabs a {
	color: #333;
}

.view-switch>a:before {
	color: #bbb;
}

.view-switch a:hover:before {
	color: #727272;
}

.view-switch a.current:before {
	color: <?php echo $color;?>;
}

div.widgets-sortables,
#widgets-left .inactive,
#available-widgets .widget-holder {
	background-color: #fff;
	border-color: #fff;
}

#widgets-left #available-widgets {
	background: #fff;
}

#available-widgets .widget-description {
	color: #555;
}

.sidebar-name {
	color: #464646;
	border-bottom-color: #e1e1e1;
}

.js .sidebar-name:hover,
.js #removing-widget {
	color: #2ea2cc;
}

#removing-widget span {
	color: black;
}

.in-widget-title,
#widgets-right .widget-top a.widget-control-edit {
	color: #fff;
	color: rgba(255,255,255,0.7);
}

#widgets-right .widget-top a.widget-control-edit:hover {
	color: #fff;
}

#wp_inactive_widgets .in-widget-title {
	color: #666;
}

.deleting .widget-title * {
	color: #aaa;
}

.imgedit-menu div {
	border-color: #d5d5d5;
	background-color: #f1f1f1;
}

.imgedit-menu div:hover {
	border-color: #c1c1c1;
	background-color: #eaeaea;
}

.imgedit-menu div.disabled {
	border-color: #ccc;
	background-color: #ddd;
	filter: alpha(opacity=50);
	opacity: 0.5;
}

/* added from nav-menu.css */
#menu-management .menu-edit {
	border-color: #dfdfdf;
}

#menu-management #post-body {
	background: #fff;
	border-top-color: #fff;
	border-bottom-color: #dfdfdf;
}

#nav-menu-header {
	border-bottom-color: #dfdfdf;
}

#nav-menu-footer {
	border-top-color: #fff;
}

#menu-management .nav-tabs-arrow a {
	color: #c1c1c1;
}

#menu-management .nav-tabs-arrow a:hover {
	color: #2ea2cc;
}

#menu-management .nav-tabs-arrow a:active {
	color: #464646;
}

#menu-management .nav-tab-active {
	border-color: #dfdfdf;
}

#menu-management .nav-tab {
	background: #fbfbfb;
	border-color: #dfdfdf;
}

.js .input-with-default-title {
	color: #aaa;
}

#cancel-save {
	color: #f00;
}

#cancel-save:hover {
	background-color: #f00;
	color: #fff;
}

.list-container,
.menu-item-handle {
	border-color: #dfdfdf;
}

.menu li.deleting .menu-item-handle {
	background-color: #f66;
}

.item-type { /* Menu item controls */
	color: #777;
}

.item-controls .menu-item-delete:hover {
	color: #f00;
}

.widget-top a.widget-action:hover {
	color: <?php echo $color;?>;
}

.nav-menus-php .item-edit:after,
.widget-top a.widget-action:after,
.control-section .accordion-section-title::after,
.accordion-section-title::after {
	color: #fff;
}

#wp_inactive_widgets .widget .widget-top a.widget-action {
	color: #ddd;
}

.nav-menus-php .item-edit:after,
#wp_inactive_widgets .widget .widget-top a.widget-action:after {
	color: #888;
}

.control-section .accordion-section-title::after,
.accordion-section-title::after {
	color: #888;
}


.control-section.open .accordion-section-title::after,
.control-section:focus .accordion-section-title::after,
.control-section:hover .accordion-section-title::after,
.accordion-section-title::after {
	color: #fff;
}

/* Menu editing */

.link-to-original {
	color: #777;
	border-color: #dfdfdf;
}

#cancel-save:hover {
	color: #fff !important;
}

#update-menu-item {
	color: #fff !important;
}

#update-menu-item:hover,
#update-menu-item:active,
#update-menu-item:focus {
	color: #eaf2fa !important;
	border-color: #13455b !important;
}

.submitbox .submitcancel {
	color: <?php echo $color;?>;
	border-bottom-color: #0074a2;
}

.submitbox .submitcancel:hover {
	background: <?php echo $color;?>;
	color: #fff;
}

.manage-menus {
	background: #fbfbfb;
}

.menu-settings {
	border-top-color: #eeeeee;
}

.theme-location-set {
	color: #999999;
}

.nav-menus-php .delete-action a {
	color: #bc0b0b;
}

.is-submenu {
	color: #999999;
}

.nav-tab {
	color: <?php echo $color;?>;
	border-color: #ddd;
	background: #ddd;
}

.nav-tab:hover {
	background-color: #2ea2cc;
	color: #fff;
}

.nav-tab-active {
	color: #464646;
}

.nav-tab-active,
.nav-tab-active:hover {
	color: #000;
	background: none;
	border-color: #ccc;
	border-bottom-color: #eee;
}

h2.nav-tab-wrapper, h3.nav-tab-wrapper {
	border-bottom-color: #ccc;
}

#upload-form label {
	color: #777;
}

/* Begin About Pages */
.about-wrap h1 {
	color: #333;
}

.about-text {
	color: #777;
}

.wp-badge {
	background-color: <?php echo $color;?>;
	color: #78c8e6;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.2);
	box-shadow: 0 1px 3px rgba(0,0,0,0.2);
}

.about-wrap h2 .nav-tab-active {
	border-color: #ccc;
	border-bottom-color: #eee;
}

.about-wrap h3 {
	color: #333;
}

.about-wrap .feature-section h4 {
	color: #464646;
}

.about-wrap .feature-section img {
	background: #fff;
	border-color: #ccc;
}

.about-wrap .point-releases {
	border-bottom: 1px solid #dfdfdf;
}

.about-wrap .point-releases h3 {
	border-top-color: #dfdfdf;
}

.about-wrap li.wp-person img.gravatar {
	border-color: #ccc;
}

.about-wrap li.wp-person .title {
	color: #464646;
}

.freedoms-php .about-wrap ol li {
	color: #999;
}

.freedoms-php .about-wrap ol p {
	color: #464646;
}

/* End About Pages */

/******** pressthis and img editing icons ********/

.pressthis a span:before {
	color:#777;
}

.imgedit-menu div {
	color:#777;
}

.imgedit-menu div:hover {
	color:#333;
}

/******** end pressthis and img editing icons ********/

/* Media Manager */

.media-modal-content {
	background: #fcfcfc;
	box-shadow: 0 5px 15px rgba(0,0,0,0.7);
}

.media-menu {
	background: #f3f3f3;
	border-right-color: #ccc;
}

.media-menu > a {
	color: <?php echo $color;?>;
}

.media-menu .active,
.media-menu .active:hover {
	color: <?php echo $background;?>;
}

.media-frame-content {
	background: #fff;
	border-top-color: #ddd;
	border-bottom-color: #ddd;
}

.media-menu .separator {
	border-top-color: #ddd;
	border-bottom: none;
}

.media-sidebar {
	background: #f3f3f3;
	border-color: #ddd;
}

.media-router .active,
.media-router > a.active:last-child {
	background: #fff;
	border: 1px solid #ddd;
	border-bottom: none;
}

.details.attachment {
	box-shadow: 0 0 0 1px #fff, 0 0 0 5px #2ea2cc;
}

.attachment .check {
	background: #eee;
}

.attachment.details .check {
	box-shadow: 0 0 0 1px #2ea2cc;
	background: <?php echo $color;?>;
	background-image: none;
}

/* TinyMCE modal */

.mp6 .clearlooks2 {
	box-shadow: 0 5px 15px rgba(0,0,0,0.7);
}

.mp6 .clearlooks2 .mceMiddle span,
.mp6 .clearlooks2 .mceMiddle .mceLeft,
.mp6 .clearlooks2 .mceMiddle .mceRight,
.mp6 .clearlooks2 .mceBottom,
.mp6 .clearlooks2 .mceBottom .mceLeft,
.mp6 .clearlooks2 .mceBottom .mceCenter,
.mp6 .clearlooks2 .mceBottom .mceRight {
	background-color: #fcfcfc;
}

.mp6 .clearlooks2 .mceFocus .mceTop .mceLeft,
.mp6 .clearlooks2 .mceFocus .mceTop .mceRight {
	background-color: #f3f3f3;
}

.mp6 .clearlooks2 .mceTop span,
.mp6 .clearlooks2 .mceFocus .mceTop span {
	color: <?php echo $background;?>;
}

.mp6 .clearlooks2 .mceClose:before {
	color: #666;
}
.mp6 .clearlooks2 .mceClose:hover:before {
	color: #2ea2cc;
}


/* Lightbox */

.sticky-menu #TB_window {
	background: #f1f1f1;
}

/* tinymce */
a .mceIcon, .mceAction {
	color:#777;
}

a .mceIcon:hover {
	color:#333;
}

/* Log in page */

.login form .input,
.login input[type="text"],
.login form input[type="checkbox"] {
	border-color: #ddd !important; /* Override !important in checkbox style */
	-webkit-box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
	box-shadow: inset 1px 1px 2px rgba(0,0,0,0.08);
}

.login form input[type="checkbox"] {
	background-color: #fbfbfb;
}

.login form {
	background: #fff;
	-webkit-box-shadow: 0 1px 3px rgba(0,0,0,0.13);
	box-shadow: 0 1px 3px rgba(0,0,0,0.13);
}

body.login {
	background: #eee;
}

.login #nav a,
.login #backtoblog a {
	text-decoration: none;
	color: #999;
}

.login #nav a:hover,
.login #backtoblog a:hover {
	color: #2ea2cc;
}

.login h1 a:hover {
	color: #2ea2cc;
}

/*------------------------------------------------------------------------------
  2.0 - Right to Left Styles
------------------------------------------------------------------------------*/

.rtl .bar {
	border-right-color: transparent !important;
	border-left-color: #99d !important;
}

.rtl #adminmenu .wp-submenu .wp-submenu-head {
	border-right-color: transparent !important;
	border-left-color: #dfdfdf !important;
}

.rtl #adminmenu .wp-submenu,
.rtl.folded #adminmenu .wp-has-current-submenu .wp-submenu {
	-webkit-box-shadow: -2px 2px 5px rgba( 0, 0, 0, 0.4 );
	box-shadow: -2px 2px 5px rgba( 0, 0, 0, 0.4 );
}

.rtl #adminmenu .wp-has-current-submenu .wp-submenu {
	-webkit-box-shadow: none;
	box-shadow: none;
}

.rtl ul#adminmenu a.wp-has-current-submenu:after,
.rtl ul#adminmenu > li.current > a.current:after {
	border-right-color: transparent;
	border-left-color: #eee;
}

/* Flyout Menu Arrow */
.rtl #adminmenu li.wp-has-submenu.wp-not-current-submenu:hover:after {
	border-right-color: transparent;
	border-left-color: #333;
}

.rtl #post-body .misc-pub-section {
	border-right-color: transparent;
	border-left-color: #eee;
}

.rtl div.updated,
.rtl .login .message {
	border-left: none;
	border-right: 4px solid #7ad03a;
}

.rtl .plugins .active th.check-column,
.rtl tr.active + tr.plugin-update-tr .plugin-update {
	border-left: none;
	border-right: 4px solid #2ea2cc;
}
.rtl .plugins .update th.check-column,
.rtl tr.plugin-update-tr .plugin-update {
	border-left: none;
	border-right: 4px solid #d54e21;
}


/* To be merged */

/*------------------------------------------------------------------------------
	This is a rough example of using SVG for plugin icons.
	This will not be the final suggested method of implementation,
	but should provide an example of how SVGs can work with the new UI.
------------------------------------------------------------------------------*/

#toplevel_page_jetpack div.wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjOTk5OTk5IiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iIzk5OTk5OSIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjOTk5OTk5IiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiM5OTk5OTkiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU1LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiM5OTk5OTkiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
	background-position: center center !important;
	background-size: 20px 20px !important;
	margin-top: 2px;
}

#toplevel_page_jetpack.wp-has-current-submenu .wp-menu-image,
#toplevel_page_jetpack.wp-has-current-submenu:hover .wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjRkZGRkZGIiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iI0ZGRkZGRiIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjRkZGRkZGIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiNGRkZGRkYiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU0LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiNGRkZGRkYiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
}

#toplevel_page_jetpack:hover .wp-menu-image {
	background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0idXRmLTgiPz4NCjwhLS0gR2VuZXJhdG9yOiBBZG9iZSBJbGx1c3RyYXRvciAxNi4wLjAsIFNWRyBFeHBvcnQgUGx1Zy1JbiAuIFNWRyBWZXJzaW9uOiA2LjAwIEJ1aWxkIDApICAtLT4NCjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+DQo8c3ZnIHZlcnNpb249IjEuMSIgaWQ9IkxheWVyXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB3aWR0aD0iMjBweCIgaGVpZ2h0PSIyMHB4IiB2aWV3Qm94PSIwIDAgMjAgMjAiIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDIwIDIwIiB4bWw6c3BhY2U9InByZXNlcnZlIj4NCjxnIGlkPSJqZXRwYWNrIj4NCgk8cGF0aCBmaWxsPSIjMkVBMkNDIiBkPSJNOC41LDE3Ljk2M0w3Ljk0NiwxNy4yNWMtMC42ODgsMC4yNDMtMS41MjgsMC4zOTEtMi40NDYsMC4zOTFzLTEuNzU4LTAuMTQ2LTIuNDQ3LTAuMzkxTDIuNSwxNy45NjMNCgkJYzAsMC43MTEsMS4zNDMsMS4yODcsMywxLjI4N1M4LjUsMTguNjc0LDguNSwxNy45NjN6Ii8+DQoJPHBhdGggZmlsbD0iIzJFQTJDQyIgZD0iTTEwLjY3NSwxNi45NjNsMC41NTQtMC43MTNjMC42ODksMC4yNDMsMS41MjgsMC4zOTEsMi40NDYsMC4zOTFzMS43NTctMC4xNDYsMi40NDYtMC4zOTFsMC41NTQsMC43MTMNCgkJYzAsMC43MTEtMS4zNDMsMS4yODctMywxLjI4N1MxMC42NzUsMTcuNjc0LDEwLjY3NSwxNi45NjN6Ii8+DQoJPGc+DQoJCTxyZWN0IHg9IjQiIHk9IjEwIiBmaWxsPSIjMkVBMkNDIiB3aWR0aD0iMSIgaGVpZ2h0PSIxIi8+DQoJCTxwYXRoIGZpbGw9IiMyRUEyQ0MiIGQ9Ik0xNS4wNDMsMS4wNDNjLTAuNDEyLTAuMjI5LTAuOTA4LTAuMzc1LTEuNDU1LTAuMzc1Yy0wLjU1MywwLjAwMS0xLjA1MSwwLjE0OC0xLjQ2MywwLjM4MQ0KCQkJYy0wLjg3OCwwLjg4My0xLjU5OCwyLjU0Ni0yLjA0NSw0LjY0M0MxMC4xMDUsNS43ODksMTAuMTI1LDUuODk5LDEwLjE0OCw2SDguOTc3QzguNTE1LDQuMDgxLDcuODI0LDIuNTU4LDYuOTk0LDEuNzIzDQoJCQlDNi41NzIsMS40ODUsNi4wNjQsMS4zMzQsNS41LDEuMzM0QzQuOTM5LDEuMzMzLDQuNDM0LDEuNDgxLDQuMDE0LDEuNzE2Yy0xLjUyMSwxLjUyMS0yLjYwMiw1LjI5Ni0yLjYwMiw5LjcyMg0KCQkJYzAsMS42NDYsMC4xNTQsMy4xOTgsMC40Miw0LjU4NEMyLjU2MiwxNi42MDQsMy45MjIsMTcsNS41LDE3czIuOTM5LTAuMzk2LDMuNjY4LTAuOTc5QzkuMjkxLDE1LjM4MSw5LjM4NywxNC43MDQsOS40NTcsMTRoMS4xNTkNCgkJCWMtMC4wNDYsMC40NTEtMC4wOTEsMC45MDYtMC4xNTksMS4zMzNDMTEuMjE1LDE1LjczOCwxMi4zMjYsMTYsMTMuNTg4LDE2YzEuNTQ0LDAsMi44NzUtMC4zODksMy41OS0wLjk1OA0KCQkJYzAuMjYtMS4zNTQsMC40MS0yLjg3NCwwLjQxLTQuNDg1QzE3LjU4OCw2LjIyNSwxNi41MzEsMi41MzEsMTUuMDQzLDEuMDQzeiBNNiw5djNINS42MjNjMC4xMTcsMS4wNTUsMC4zMTksMi4wNzcsMC42MjcsM2gtMg0KCQkJYy0wLjMwOC0wLjkyMy0wLjUxLTEuOTQ1LTAuNjI3LTNIM1Y5aDAuNTM1QzMuNjEzLDcuNTkyLDMuODQ2LDYuMjEzLDQuMjUsNWgyQzUuODQ2LDYuMjEzLDUuNjEzLDcuNTkyLDUuNTM1LDlINnogTTUuNSwzLjYyNQ0KCQkJYy0wLjgyOCwwLTEuNS0wLjMzNi0xLjUtMC43NXMwLjY3Mi0wLjc1LDEuNS0wLjc1UzcsMi40NjEsNywyLjg3NVM2LjMyOCwzLjYyNSw1LjUsMy42MjV6IE05LjUzNSwxMw0KCQkJYzAuMDMxLTAuNTExLDAuMDUzLTEuMDI5LDAuMDUzLTEuNTYyQzkuNTg4LDkuODUsOS40NDMsOC4zNSw5LjE5NSw3aDEuMTc0YzAuMjUsMS4zNDYsMC4zOTMsMi44NDgsMC4zOTMsNC40MzgNCgkJCWMwLDAuNTM3LTAuMDI5LDEuMDU1LTAuMDYyLDEuNTYySDkuNTM1eiBNMTIuMTI1LDIuMTVjMC0wLjQxNCwwLjY3Mi0wLjc1LDEuNS0wLjc1czEuNSwwLjMzNiwxLjUsMC43NXMtMC42NzIsMC43NS0xLjUsMC43NQ0KCQkJUzEyLjEyNSwyLjU2NCwxMi4xMjUsMi4xNXogTTE2LDExaC0wLjYyM2MtMC4xMTcsMS4wNTUtMC4zMTgsMi4wNzctMC42MjcsM2gtMmMwLjMwOS0wLjkyMywwLjUxLTEuOTQ1LDAuNjI3LTNIMTNWOGgwLjQ2NQ0KCQkJYy0wLjA3OC0xLjQwOC0wLjMxMS0yLjc4Ny0wLjcxNS00aDJjMC40MDQsMS4yMTMsMC42MzcsMi41OTIsMC43MTUsNEgxNlYxMXoiLz4NCgkJPHJlY3QgeD0iMTQiIHk9IjkiIGZpbGw9IiMyRUEyQ0MiIHdpZHRoPSIxIiBoZWlnaHQ9IjEiLz4NCgk8L2c+DQo8L2c+DQo8L3N2Zz4NCg==) !important;
}
#collapse-menu{
	border-top-color: <?php echo $background;?> !important;
}
#adminmenushadow, #collapse-button div, #collapse-button,.js .meta-box-sortables .postbox:hover .handlediv{
	background:none !important;
}
#collapse-button{
	border:none !important;
}
#adminmenu .wp-submenu a:hover, #adminmenu .wp-submenu a:focus{
	color: #fff !important;
	background:<?php echo $color;?> !important;
}
#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input{
	background:<?php echo $background;?> !important;
	margin-left: -1px;
}
#wpadminbar .menupop .ab-sub-wrapper, #wpadminbar .shortlink-input{
	border-color:#555555;
}
#wpadminbar .menupop li:hover, #wpadminbar .menupop li.hover, #wpadminbar .quicklinks .menupop .ab-item:focus, #wpadminbar .quicklinks .ab-top-menu .menupop .ab-item:focus{
	color: #fff !important;
	background:<?php echo $color;?> !important;
}
#wpbody select{
	height: 26px !important;
    line-height: 26px !important;
	font-size:13px;
}
.search-box input[name="s"], #search-plugins input[name="s"], .tagsdiv .newtag{
	height:26px !important;
}
.tablenav .tablenav-pages a{
	box-shadow:none !important;
	border-color:#ADADAD !important;
}
.tablenav .tablenav-pages a:hover, .tablenav .tablenav-pages a:focus{
	color:#fff !important;
	border-color:#2EA2CC !important;
}
#wpadminbar .ab-top-menu > li:hover > .ab-item, #wpadminbar .ab-top-menu > li.hover > .ab-item, #wpadminbar .ab-top-menu > li > .ab-item:focus, #wpadminbar.nojq .quicklinks .ab-top-menu > li > .ab-item:focus {
    background: linear-gradient(to top, <?php echo $hbackground;?>, <?php echo $hbackground;?>) repeat scroll 0 0 <?php echo $hbackground;?>;
    color: #FAFAFA;
}