define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('button[type="submit"]').on('click', function() {
				var username = $('input[name="username"]'),
					password = $('input[name="password"]');

				if (username.val().length === 0) {
					alert('请输入用户名');
					return false;

				} else if (password.val().length === 0) {
					alert('请输入密码');
					return false;
				}
			});
		}
	});

	module.exports = Page;
});