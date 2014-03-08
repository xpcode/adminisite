define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('../base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('button[type="submit"]').on("click", function(e) {
				var name = $('input[name="name"]'),
					project = $('input[name="project"]'),
					tel = $('input[name="tel"]'),
					email = $('input[name="email"]'),
					channel = $('select[name="channel_id"]');

				if ($('option:selected', channel).val() == '0') {
					channel.next().removeClass("hide");
					return false;
				}

				if (project.val().length === 0 || project.val().length > 50) {
					project.next().removeClass("hide");
					return false;
				}

				if (name.val().length === 0 || name.val().length > 20) {
					name.next().removeClass("hide");
					return false;
				}

				if (tel.val().length === 0 || tel.val().length > 20) {
					tel.next().removeClass("hide");
					return false;
				}

				if (email.val().length === 0 || email.val().length > 50) {
					email.next().removeClass("hide");
					return false;
				}

				return true;
			});
		}
	});

	module.exports = Page;
});