define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('../base');

	require('ajaxform');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			var txtintro, txtcontent;

			var options = {
				url: 'add',
				type: 'POST',
				dataType: 'json',
				success: function(result) {
					if (result.code === 200) {
						alert('提交数据成功！');
						location.href = result.href;
					}
				},
				error: function() {
					alert('请确认网络正常后重新提交！');
				}
			};

			require.async('noncmd-lib/ckeditor/ckeditor', function() {
				txtintro = CKEDITOR.replace('txtintro', {
					height: 200
				});
				txtcontent = CKEDITOR.replace('txtcontent');

				txtintro.setData($('#txtintro').val());
				txtcontent.setData($('#txtcontent').val());

				$('button[type="submit"]').on("click", function(e) {
					var title = $('input[name="title"]'),
						intro = $('#txtintro'),
						content = $('#txtcontent'),
						channel = $('select[name="channel_id"]'),
						img = $('input[name=img]');

					intro.val(txtintro.getData());
					content.val(txtcontent.getData());

					if ($('option:selected', channel).val() == '0') {
						channel.next().removeClass("hide");
						channel.get(0).focus();
						return false;
					}

					if (title.val().length === 0 || title.val().length > 80) {
						title.next().removeClass("hide");
						title.get(0).focus();
						return false;
					}

					if (content.val().length === 0) {
						content.next().next().removeClass("hide");
						content.get(0).focus();
						return false;
					}
					if (img.val().length > 0) {
						var splits = img.val().split('.');

						if (!/gif|jpg|png/.test(splits[splits.length - 1])) {
							img.parent().next().removeClass("hide");
							img.get(0).focus();
							return false;
						}
					}

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