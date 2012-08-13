<!doctype html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 

	<title>Visual CSL Editor</title>

	<script type="text/javascript" src="../csledit/external/require.js"></script>

	<script>
		require.config({
			baseUrl: "../csledit",
			urlArgs : "bust=$GIT_COMMIT"
		});
		requirejs(['src/config'], function (config) {
			// load jquery first due to plugin errors ('hoverIntent' was undefined)
			require(['jquery'], function () {
				require(['../src/visualEditorPage'], function () {});
			});
		});
	</script>

	<script type="text/javascript" src="../src/analytics.js"></script>

	<link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.8.22/themes/ui-lightness/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="../csledit/external/jstree/themes/default/style.css" />

	<link rel="stylesheet" type="text/css" href="../csledit/css/base.css?bust=$GIT_COMMIT" />
	<link rel="stylesheet" type="text/css" href="../csledit/css/dropdown.css?bust=$GIT_COMMIT" />
	<link rel="stylesheet" type="text/css" href="../csledit/css/visualEditor.css?bust=$GIT_COMMIT" />

	<style>
		#visualEditorContainer {
			position: absolute;
<?php
if (isset($_GET['embedded']) && $_GET['embedded'] == "true") {
			echo("top: 0px;");
} else {
			echo("top: 40px;");
}
?>
			bottom: 0px;
			left: 0px;
			right: 0px;
		}
	</style>
</head>
<body id="visualEditor">
<?php
if (!isset($_GET['embedded']) || $_GET['embedded'] != "true") {
	include '../html/navigation.html';
}
?>
<div id="visualEditorContainer">
</div>
</body>
</html>
