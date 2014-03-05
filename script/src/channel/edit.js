define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('button[type="submit"]').on("click", function(e) {
				var name = $('input[name="name"]').val(),
					chorder = $('input[name="chorder"]').val()
					ctype = $('select[name="ctype"]');

				if ($('option:selected', ctype).val() == '0') {
					ctype.next().removeClass("hide");
					ctype.get(0).focus();
					return false;
				}

				if (name.length === 0 || name.length > 32) {
					$('input[name="name"]').next().removeClass("hide");
					return false;
				}

				if (!$.isNumeric(chorder)) {
					$('input[name="chorder"]').next().removeClass("hide");
					return false;
				}

				return true;
			});
		}
	});

	module.exports = Page;
});