define(function(require, exports, module) {
	seajs.config({
		paths: {
			'sea-modules': '/script/sea-modules',
			'noncmd-lib': '/script/noncmd-lib'
		},

		alias: {
			'$': 'sea-modules/jquery/jquery/1.10.1/jquery',

			'jsuri': 'sea-modules/gallery/jsuri/1.2.2/jsuri',
			'underscore': 'sea-modules/gallery/underscore/1.4.4/underscore',
			'placeholders': 'sea-modules/gallery/placeholders/2.1.0/placeholders',
			'handlebars': 'sea-modules/gallery/handlebars/1.0.2/handlebars',

			'ckeditor': 'sea-modules/gallery2/ckeditor/4.2.1/ckeditor',

			'base': 'sea-modules/arale/base/1.1.1/base',
			'cookie': 'sea-modules/arale/cookie/1.0.2/cookie',
			'position': 'sea-modules/arale/position/1.0.1/position',
			'validator': 'sea-modules/arale/validator/0.9.7/validator',
			'easing': 'sea-modules/arale/easing/1.0.0/easing',

			'ajaxform': 'sea-modules/jquery-plugin/form/3.44.0/form',
			'seajs-log': 'sea-modules/seajs/seajs-log/1.0.1/seajs-log'
		},

		// 调试模式
		debug: true,

		plugins: ['style'],

		map: [
			[/^(.*\.(?:css|js))(.*)$/i, '$1?2014032101']
		]
	});

	require.async('$', function($) {
		$(function() {
			if (JS_PATH) {
				seajs.use('/script/src/' + JS_PATH.toLowerCase(), function(Page) {
					new Page();
				});
			}
		});
	});
});