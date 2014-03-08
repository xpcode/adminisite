define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('../base');

	require('noncmd-lib/jquery-ui-1.8.21.custom.min');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);
		},

		bindDeleteEvent: function() {
			$('a[data-action="delete"]').on('click', function() {
				return confirm('确实要删除吗?');
			});

			$('ul.gallery li').each(function() {
				var itemid = $(this).attr('data-itemid');
				var recommend = $(this).attr('data-recommend');

				$('.gallery-delete', this).on('click', function() {
					return confirm('确实要删除吗?');
				});

				$('.gallery-edit', this).on('click', function() {
					if (recommend == 0) {
						return confirm('确实要推荐到首页吗?');
					} else {
						return confirm('确实要取消推荐吗?');
					}
				});
			});
		}
	});

	module.exports = Page;
});