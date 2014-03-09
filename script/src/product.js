define(function(require, exports, module) {

	var $ = require('$');
	var BasePage = require('base');

	var Page = BasePage.extend({
		initialize: function() {
			Page.superclass.initialize.call(this);

			$('div.imgblock-list-item').on('mouseenter', function(){
				$('img.att',this).show();
			}).on('mouseleave',function(){
				$('img.att',this).hide();
			})
		}
	});

	module.exports = Page;
});