define(function(require, exports, module) {

    /**
     * utils 名字空间<br/><br/>
     *
     * @namespace
     * @name utils
     * @type Object
     * @description 引用方式 var utils=require('util');
     */
    var utils = {};


    /**
     * 对一个字符串进行多次replace。
     * @memberOf utils
     * @private
     * @function multiReplace
     * @param {String} 需要处理的字符串
     * @param {Array} 数组，每一个元素都是由replace两个参数组成的数组
     * @returns {String} 返回处理后的字符串
     * @description from QWrap
     */

    function multiReplace(str, arr) {
        for (var i = 0; i < arr.length; i++) {
            str = str.replace(arr[i][0], arr[i][1]);
        }
        return str;
    }

    /**
     * 是手机号吗。
     * @memberOf utils
     * @static
     * @function isMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isMobileNO = function(str) {
        return (/^1(30|31|32|33|34|35|36|37|38|39|47|50|51|52|53|55|56|57|58|59|82|83|87|88|85|86|80|89)[\d]{8}$/).test(str);
    };

    /**
     * 是中国移动手机号吗。
     * @memberOf utils
     * @static
     * @function isChinaMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isChinaMobileNO = function(str) {
        return (/^1(34|35|36|37|38|39|47|50|51|52|57|58|59|82|83|87|88)[\d]{8}$/).test(str);
    };

    /**
     * 是UT手机号吗。
     * @memberOf utils
     * @static
     * @function isUTMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isUTMobileNO = function(str) {
        return (/^1(30|31|32|33|53|55|56|80|85|86|89)[\d]{8}$/).test(str);
    };

    /**
     * 是中国联通手机号吗。
     * @memberOf utils
     * @static
     * @function isUnicomMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isUnicomMobileNO = function(str) {
        return (/^1(30|31|32|55|56|85|86|)[\d]{8}$/).test(str);
    };

    /**
     * 是中国电信手机号吗。
     * @memberOf utils
     * @static
     * @function isCHAMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isCHAMobileNO = function(str) {
        return (/^1(33|53|80|89)[\d]{8}$/).test(str);
    };

    /**
     * 是TXL手机号吗。
     * @memberOf utils
     * @static
     * @function isTXLMobileNO
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isTXLMobileNO = function(str) {
        return (/^(\+86)?1(34|35|36|37|38|39|47|50|51|52|57|58|59|82|83|87|88|30|31|32|55|56|85|86|33|53|80|89)[\d]{8}$/).test(str);
    };

    /**
     * 是邮箱吗。
     * @memberOf utils
     * @static
     * @function isEmail
     * @param {String} obj 字符串
     * @returns {Boolean}
     */
    utils.isEmail = function(str) {
        return (/^([\w]+[\-|_|\_|\.]?)*[\w]+@([\w]+[\-|_|\_|\.]?)*[\w]+\.[a-zA-Z]{2,3}$/).test(str);
    };

    /**
     * 为Html字符串转码。
     * @memberOf utils
     * @static
     * @function encode4Html
     * @param {String} obj 字符串
     * @returns {String} 转码后的字符串
     */
    utils.encode4Html = function(str) {
        var pre = document.createElement('pre'),
            text = document.createTextNode(str);

        pre.appendChild(text);

        return pre.innerHTML;
    };

    /**
     * 为Html转码后的字符串解码。
     * @memberOf utils
     * @static
     * @function decode4Html
     * @param {String} obj 字符串
     * @returns {String} 解码后的字符串
     */
    utils.decode4Html = function(str) {
        var div = document.createElement('div');

        div.innerHTML = str.replace(/<[^>]*>/gi, '');

        return div.childNodes[0] ?
            div.childNodes[0].nodeValue || '' :
            '';
    };

    /**
     * 根据 name 从 url的search 中获取参数值。
     * @memberOf utils
     * @static
     * @function queryString
     * @param {String} search url的search
     * @param {String} name 参数名
     * @returns {String} 参数值
     */
    utils.queryString = function(search, name) {
        var re = new RegExp("[?&]?" + name + "=([^&]+)", "i"),
            result = search.match(re);

        if (result === null || result.length < 1) {
            return "";
        }
        return result[1];
    };

    /**
     * 将一个QueryString转化成一个key/value的Object。
     * @memberOf utils
     * @static
     * @function objects
     * @param {String} queryStr url的search
     * @returns {String} 参数值
     */
    utils.objects = function(queryStr) {
        var obj = {};
        var re = /[\?\&]?([^=\^\&]+)=([^\&]+)/i;

        var querys = queryStr.split("&");
        for (var k = 0; k < querys.length; k++) {
            var result = querys[k].match(re);
            if (result === null) {
                continue;
            }

            var length = result.length;
            if (result !== null) {
                for (var i = 1; i < length; i += 2) {
                    if (i + 1 < length) {
                        obj[result[i]] = result[i + 1];
                    } else {
                        obj[result[i]] = "";
                    }
                }
            }
        }

        return obj;
    };

    //将一个URL添加至收藏夹
    utils.addFavourite = function(url, title) {

        function findKeys() {
            var isMSIE = /*@cc_on!@*/ false;

            // user agent sniffing is bad in general, but this is one of the times
            // when it's really necessary
            var ua = navigator.userAgent.toLowerCase(),
                isMac = (ua.indexOf('mac') != -1),
                isWebkit = (ua.indexOf('webkit') != -1),
                str = (isMac ? 'Command/Cmd' : 'CTRL');

            if (window.opera && (!opera.version || (opera.version() < 9))) {
                str += ' + T'; // Opera versions before 9
            } else if (ua.indexOf('konqueror') != -1) {
                str += ' + B'; // Konqueror
            } else if (window.opera || window.home || isWebkit || isMSIE || isMac) {
                // IE, Firefox, Netscape, Safari, Google Chrome, Opera 9+, iCab, IE5/Mac
                str += ' + D';
            } else {
                // default
                str += ' + D';
            }

            return str;
        }

        try {
            if (document.all) {
                window.external.addFavorite(url, title);
            } else if (window.sidebar) {
                window.sidebar.addPanel(title, url, "");
            } else {
                alert("浏览器不支持自动添加收藏夹。关闭本对话框后，请您手动使用组合快捷键'" + findKeys() + "'进行添加。");
            }
        } catch (e) {
            alert("浏览器不支持自动添加收藏夹。关闭本对话框后，请您手动使用组合快捷键'" + findKeys() + "'进行添加。");
        }
    };

    // 将选中的文本替换为指定的html。该方法一般用于html编辑器
    utils.replaceSelection = function(range, html) {
        if (range !== null) {
            if (range.pasteHTML) {
                // 当前选中html可能以为某种原因（例如点击了另一个DIV）而丢失，重新选中
                range.select();
                range.pasteHTML(html);
                return true;
            } else if (range.deleteContents && range.insertNode) {
                // 将文本html转换成DOM对象
                var temp = document.createElement("div");
                temp.innerHTML = html;

                // 将节点倒序缓存在数组中
                var elems = [];
                for (var i = temp.childNodes.length - 1; i >= 0; i--)
                    elems.push(temp.childNodes[i]);

                // 首先删除选中的节点
                range.deleteContents();

                // 将html对应的节点(即temp的所有子节点)逐个插入到range中，并从temp中删除
                for (var j = 0, length = elems.length; j < length; j++)
                    range.insertNode(elems[j]);

                // 重新设置光标位置
                if (elems.length > 0) {
                    range.setStartBefore(elems[elems.length - 1]);
                    range.setEndAfter(elems[0]);
                }

                range.collapse(false);

                temp = null;

                return true;
            }
        }

        return false;
    };

    /**
     * 停止事件冒泡。
     * @memberOf utils
     * @static
     * @function stopPropagation
     * @param {Event} e 事件
     */
    utils.stopPropagation = function(e) {
        e = window.event || e;

        if (window.event) {
            e.cancelBubble = true;
        } else {
            e.stopPropagation();
        }
    };

    /**
     * 阻止默认浏览器动作。
     * @memberOf utils
     * @static
     * @function preventDefault
     * @param {Event} e 事件
     */
    utils.preventDefault = function(e) {
        // 如果提供了事件对象，则这是一个非IE浏览器 
        if (e && e.preventDefault) {
            e.preventDefault(); // 阻止默认浏览器动作(W3C)
        } else {
            // IE中阻止函数器默认动作的方式 
            window.event.returnValue = false;
        }
        return false;
    };


    module.exports = utils;
});