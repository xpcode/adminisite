define(function() {

	/**
	 * @external String
	 */

	/** 
	 * 格式化字符串模版
	 * @method external:String#format
	 * @param {String} template 字符串模版
	 * @return {String} 处理后的字符串
	 * @example String.format('hi, {0}, this is {1}.', 'jone', 'example')
	 */
	String.format = function(template) {
		if (arguments.length > 0) {
			var args = Array.prototype.slice.call(arguments, 1);

			return template.replace(/\{(\d+)\}/g, function(m, i) {
				return args[i];
			});
		}
		return null;
	};

	/** 
	 * 是否是非空字符串
	 * @method external:String#nonempty
	 * @param {String} str 字符串
	 * @return {Boolean} 是否非空
	 * @example String.nonempty('string')
	 */
	String.nonempty = function(str) {
		return typeof str === 'string' && str.trim().length > 0;
	};

	/** 
	 * 计算字节长度（中文和全角等字符算2个长度）
	 * @method external:String#byteLen
	 * @param {String} str 字符串
	 * @return {Int} 字符串长度
	 * @example String.nonempty('string')
	 */
	String.byteLen = function(str) {
		return str.replace(/[^\x00-\xff]/g, "--").length;
	};

	/** 
	 * 按字节长度取目标字符串的一部分
	 * @method external:String#subByte
	 * @param {String} str 需要处理的字符串
	 * @param {String} str 需要处理的字符串
	 * @param {String} str 需要处理的字符串
	 * @return {Boolean} 返回转化后的字符串
	 * @example String.dbc2sbc("发票号是ＢＢＣ１２３４５６，发票金额是１２.３５元")
	 */
	String.subByte = function(str, len, tail) {
		if (len < 0 || String.byteLen(str) <= len) {
			return str;
		}

		tail = tail || '';

		return str.substr(0, len)
			.replace(/([^\x00-\xff])/g, "$1 ") // 双字节字符替换成两个
		.substr(0, len) // 截取长度
		.replace(/[^\x00-\xff]$/, "") // 去掉临界双字节字符
		.replace(/([^\x00-\xff]) /g, "$1") + tail; // 还原
	};

	/** 
	 * 全角字符转半角字符
	 * 全角空格为12288，转化成" "；
	 * 全角句号为12290，转化成"."；
	 * 其他字符半角(33-126)与全角(65281-65374)的对应关系是：均相差65248。
	 * @method external:String#dbc2sbc
	 * @param {String} str 需要处理的字符串
	 * @return {Boolean} 返回转化后的字符串
	 * @example String.dbc2sbc("发票号是ＢＢＣ１２３４５６，发票金额是１２.３５元")
	 */
	String.dbc2sbc = function(str) {
		return multiReplace(str, [
			[/[\uff01-\uff5e]/g,
				function(a) {
					return String.fromCharCode(a.charCodeAt(0) - 65248);
				}
			],
			[/\u3000/g, ' '],
			[/\u3002/g, '.']
		]);
	};

	/** 
	 * 是否以 str 开头
	 * @method external:String#startWith
	 * @param {String} str 开头字符串
	 * @return {Boolean}
	 * @example 'equal'.startWith('al')
	 */
	String.prototype.startWith = function(str) {
		return String.nonempty(str) &&
			(this.length > str.length) &&
			(this.substr(0, str.length) == str);
	};

	/** 
	 * 是否以 str 结尾
	 * @method external:String#endWith
	 * @param {String} str 结尾字符串
	 * @return {Boolean}
	 * @example 'equal'.endWith('al')
	 */
	String.prototype.endWith = function(str) {
		return String.nonempty(str) &&
			(this.length > str.length) &&
			(this.substr(this.length - str.length) == str);
	};

	/** 
	 * 移除开头和结尾的 str
	 * @method external:String#trim
	 * @param {String} str 字符串
	 * @return {String}
	 * @example 'equal'.trim('al')
	 */
	String.prototype.trim = function(str) {
		var regExp;
		if (str.length > 0) {
			regExp = new RegExp("^[" + str + "]+|[" + str + "]+$", "g");
		} else {
			regExp = /^\s+|\s+$/g;
		}
		return this.replace(regExp, "");
	};

	/** 
	 * 移除结尾的 str
	 * @method external:String#trimEnd
	 * @param {String} str 结尾字符串
	 * @return {String}
	 * @example 'equal'.trimEnd('al')
	 */
	String.prototype.trimEnd = function(str) {
		var regExp;
		if (str.length > 0) {
			regExp = new RegExp("[" + str + "]+$", "g");
		} else {
			regExp = /\s+$/g;
		}
		return this.replace(regExp, "");
	};

	/** 
	 * 转换为Unicode编码的数组
	 * @method external:String#toCodeArray
	 * @param {String} str Unicode编码的数组
	 * @return {Array}
	 * @example var codeArr = 'equal'.toCodeArray()
	 */
	String.prototype.toCodeArray = function() {
		var len = this.length,
			codeArray = [];

		for (var i = 0; i < len; i++) {
			codeArray.push(this.charCodeAt(i));
		}
		return codeArray;
	};

	/** 
	 * 将Unicode编码的数组转换为当前字符串
	 * @method external:String#fromCodeArray
	 * @param {String} str Unicode编码的数组
	 * @return {String}
	 * @example 'equal'.fromCodeArray([115,34])
	 */
	String.prototype.fromCodeArray = function(codeArray) {
		var i = 0,
			len = codeArray.length,
			str = "";

		for (; i < len; i++) {
			str += String.fromCharCode(codeArray[i]);
		}
		return str;
	};

	/** 
	 * 判断当前字符串是否包含目标字符串
	 * @method external:String#contains
	 * @param {String} str 目标字符串
	 * @return {Boolean}
	 * @example "abcdefg".contains("ab"))
	 */
	String.prototype.contains = function(str) {
		return this.indexOf(str) != -1;
	};

	String.prototype.toString2 = function(x) {
		if (Number(this)) {
			var i = 0,
				len = this.length / 3,
				str = this;

			while (i++ < len) {
				str = str.replace(/(\d+)(\d{3})/, '$1,$2');
			}

			return str;
		}
		return this;
	};

	Date.prototype.toString2 = function(x) {
		var format = {
			1: '{0}年{1}月{2}日',
			2: '{0}-{1}-{2}',
			3: '{0}-{1}-{2} {3}:{4}:{5}'

		}[x] || '{0}{1}{2}';

		var month = String(this.getMonth() + 1),
			date = String(this.getDate()),
			hour = String(this.getHours()),
			minutes = String(this.getMinutes()),
			seconds = String(this.getSeconds());

		if (month.length < 2) {
			month = '0' + month;
		}
		if (date.length < 2) {
			date = '0' + date;
		}
		if (hour.length < 2) {
			hour = '0' + hour;
		}
		if (minutes.length < 2) {
			minutes = '0' + minutes;
		}
		if (seconds.length < 2) {
			seconds = '0' + seconds;
		}

		return String.format(format, this.getFullYear(), month, date, hour, minutes, seconds);
	};

});