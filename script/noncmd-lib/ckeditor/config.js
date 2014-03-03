/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	// 
	config.filebrowserBrowseUrl = '/script/noncmd-lib/ckfinder/ckfinder.html';
	config.filebrowserImageBrowseUrl = '/script/noncmd-lib/ckfinder/ckfinder.html?type=Images';
	config.filebrowserFlashBrowseUrl = '/script/noncmd-lib/ckfinder/ckfinder.html?type=Flash';
	config.filebrowserUploadUrl = '/script/noncmd-lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=File';
	config.filebrowserImageUploadUrl = '/script/noncmd-lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images';
	config.filebrowserFlashUploadUrl = '/script/noncmd-lib/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash';
};