define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');
	var ajax = require('./data');
	var ajaxForm = require('ajaxform');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			var txtintro, txtcontent;

			var options = {
				url: 'add',
				type: 'POST',
				dataType: 'json',
				success: function(result) {

				},
				error: function() {}
			};

			require.async('noncmd-lib/ckeditor/ckeditor', function() {
				txtintro = CKEDITOR.replace('txtintro');
				txtcontent = CKEDITOR.replace('txtcontent');

				$('button[type="submit"]').on("click", function(e) {

					$('#txtintro').val(txtintro.getData());
					$('#txtcontent').val(txtcontent.getData());

					$('form').ajaxSubmit(options);

					return false;
				});
			});

			$('input[name="img"]').on('change', function() {
				$(this).next().text(this.value);
			});
		}
	});

	module.exports = Page;
});