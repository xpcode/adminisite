define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('../base');

	require('ajaxform');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			var channel_id = $('input[name="channel_id"]').val();

			if (channel_id == 1) {
				this._initHomePageSubmitEvent();
			} else {
				this._initSubmitEvent();
			}
		},

		_getAjaxOptions: function(argument) {
			return {
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
		},

		_initSubmitEvent: function() {
			var that = this;
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

				$('form').ajaxSubmit(that._getAjaxOptions());

				return false;
			});

			$('input[name="filename"]').on('change', function() {
				$(this).next().text(this.value);
			});
		},

		_initHomePageSubmitEvent: function() {
			var that = this;
			var filenames = [
				$('input[name="filename_1"]'),
				$('input[name="filename_2"]'),
				$('input[name="filename_3"]'),
				$('input[name="filename_4"]'),
				$('input[name="filename_5"]')
			];

			for (var i = filenames.length - 1; i >= 0; i--) {
				filenames[i].val('').on('change', function() {
					$(this).next().text(this.value);
				});
			}

			$('button[type="submit"]').on("click", function(e) {
				var selected = false,
					selectedError = false;

				for (var i = filenames.length - 1; i >= 0; i--) {
					var img = filenames[i];
					var splits = img.val().split('.');

					if (img.val().length > 0) {
						if (!/gif|jpg|png/.test(splits[splits.length - 1])) {
							img.parent().next().removeClass("hide").text('只可以上传图片文件');
							img.get(0).focus();
							selectedError = true;
						} else {
							selected = true;
						}
					}
				}

				if (selected === true) {
					if (!selectedError) {
						$('form').ajaxSubmit(that._getAjaxOptions());
					}

				} else {
					var img1 = filenames[0];
					img1.parent().next().removeClass("hide").text('请选择图片');
					img1.get(0).focus();
				}

				return false;
			});
		}
	});

	module.exports = Page;
});