/**
 * @license Copyright (c) 2003-2015, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function(config) {
    // Define changes to default configuration here. For example:
    // config.language = 'fr';
    // config.uiColor = '#001941';
    // config.skin = 'kama';
    //config.extraPlugins = 'bootstrapVisibility';
    //config.extraPlugins = 'imageuploader';
    config.extraPlugins = 'youtube';
    config.filebrowserBrowseUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = 'http://localhost/agriculture_local/uesd/assets/js/kcfinder/upload.php?opener=ckeditor&type=flash';
    config.allowedContent = true;

};