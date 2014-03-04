define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

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
					} else {
						alert('提交数据失败！');
					}
				},
				error: function() {
					alert('请确认网络正常后重新提交！');
				}
			};

			$('button[type="submit"]').on("click", function(e) {
				var title = $('input[name="title"]'),
					itype = $('select[name="itype"]'),
					img = $('input[name=filename]');

				if ($('option:selected', itype).val() == '1') {
					if (title.val().length === 0 || title.val().length > 80) {
						title.next().removeClass("hide");
						title.get(0).focus();
						return false;
					}
				}

				if (img.val().length === 0) {
					img.parent().next().removeClass("hide").text('请选择图片');
					img.get(0).focus();
					return false;

				} else if (img.val().length > 0) {
					var splits = img.val().split('.');

					if (!/gif|jpg|png/.test(splits[splits.length - 1])) {
						img.parent().next().removeClass("hide").text('只可以上传图片文件');
						img.get(0).focus();
						return false;
					}
				}

				$('form').ajaxSubmit(options);

				return false;
			});

			$('input[name="filename"]').on('change', function() {
				$(this).next().text(this.value);
			});
		}
	});

	module.exports = Page;
});