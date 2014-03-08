define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('./base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('button[type="submit"]').on('click', function() {
				var password_old = $('input[name="password_old"]'),
					password_new = $('input[name="password_new"]'),
					password = $('input[name="password"]');

				if (password_old.val().length === 0) {
					password_old.next().removeClass("hide");
					return false;

				} else if (password_new.val().length === 0) {
					password_new.next().removeClass("hide");
					return false;

				} else if (password.val().length === 0) {
					password.next().removeClass("hide");
					return false;

				} else if (password.val() != password_new.val()) {
					alert('您两次输入的新密码不一致！');
					return false;

				} else if (password_old.val() == password_new.val()) {
					alert('您输入的新密码不能和旧密码相同！');
					return false;
				}

				return true;
			});
		}
	});

	module.exports = Page;
});