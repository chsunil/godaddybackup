!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=4)}([,,function(e,t){function n(e,t){if(!e)throw new Error(t||"AssertionError")}n.notEqual=function(e,t,r){n(e!=t,r)},n.notOk=function(e,t){n(!e,t)},n.equal=function(e,t,r){n(e==t,r)},n.ok=n,e.exports=n},,function(e,t,n){"use strict";var r=i(n(5)),o=i(n(10));function i(e){return e&&e.__esModule?e:{default:e}}document.addEventListener("DOMContentLoaded",(function(){var e=this.querySelector(".sidebox.layouts");if(e){AdminColumns.OrderSidebox=new r.default(e);var t=document.querySelector(".layout-selector ul");t&&AdminColumns.OrderSidebox.events.on("ordered",(function(e){var n=document.createElement("div");e.forEach((function(e){var r=t.querySelector('[data-screen="'.concat(e,'"]'));r&&n.appendChild(r)})),n.querySelectorAll("li").forEach((function(e){t.appendChild(e)}))}))}document.querySelector(".ac-setbox")&&(AdminColumns.ListScreenSettings=new o.default(document.querySelector(".ac-setbox")));var n=document.querySelector('#listscreen_settings input[name="title"]');n&&n.addEventListener("keyup",(function(e){document.querySelectorAll('.layout-selector [data-screen="'.concat(AC.layout,'"] a')).forEach((function(e){e.innerHTML=n.value})),document.querySelectorAll('.layouts__items [data-screen="'.concat(AC.layout,'"] [data-label]')).forEach((function(e){e.innerHTML=n.value}))}))}))},function(e,t,n){"use strict";function r(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}function o(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}function i(e,t,n){return t&&o(e.prototype,t),n&&o(e,n),e}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var s=n(6),u=function(){function e(t){r(this,e),this.el=t,this.events=s(),this.Form=new a(this.el.querySelector(".new")),this.initEvents()}return i(e,[{key:"getListScreen",value:function(){return this.el.dataset.type}},{key:"initEvents",value:function(){var e=this,t=this.getButton();t&&t.addEventListener("click",(function(n){n.preventDefault(),t.classList.contains("open")?e.cancelNewLayout():e.addNewLayout()})),jQuery(this.el).find(".layouts__items").sortable({items:".layouts__item",axis:"y",containment:jQuery(this.el).find(".layouts__items"),handle:".cpacicon-move",stop:function(){e.setNewOrder()}})}},{key:"setNewOrder",value:function(){var e=this;this.storeLayoutOrder(this.getOrder()).done((function(t){e.events.emit("ordered",e.getOrder())}))}},{key:"getOrder",value:function(){var e=[];return this.el.querySelectorAll(".layouts__item").forEach((function(t){e.push(t.dataset.screen)})),e}},{key:"storeLayoutOrder",value:function(e){return jQuery.ajax({url:ajaxurl,method:"POST",data:{_ajax_nonce:AC._ajax_nonce,action:"acp_update_layout_order",list_screen:this.getListScreen(),order:e}})}},{key:"getButton",value:function(){return this.el.querySelector("a.add-new")}},{key:"addNewLayout",value:function(){this.getButton().classList.add("open"),this.Form.open()}},{key:"cancelNewLayout",value:function(){this.getButton().classList.remove("open"),this.Form.close()}}]),e}();t.default=u;var a=function(){function e(t){r(this,e),this.el=t,this.initEvents()}return i(e,[{key:"open",value:function(){jQuery(this.el).slideDown()}},{key:"close",value:function(){jQuery(this.el).slideUp()}},{key:"initEvents",value:function(){var e=this;this.el.querySelector(".new form").addEventListener("submit",(function(t){e.el.querySelector(".row.name input").value.trim()||(t.preventDefault(),e.el.querySelector(".row.name").classList.add("save-error"))}))}}]),e}()},function(e,t,n){var r=n(7),o=n(8),i=n(2);function s(e){if(!(this instanceof s))return new s(e);this._name=e||"nanobus",this._starListeners=[],this._listeners={}}e.exports=s,s.prototype.emit=function(e){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.emit: eventName should be type string or symbol");for(var t=[],n=1,r=arguments.length;n<r;n++)t.push(arguments[n]);var s=o(this._name+"('"+e.toString()+"')"),u=this._listeners[e];return u&&u.length>0&&this._emit(this._listeners[e],t),this._starListeners.length>0&&this._emit(this._starListeners,e,t,s.uuid),s(),this},s.prototype.on=s.prototype.addListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.on: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.on: listener should be type function"),"*"===e?this._starListeners.push(t):(this._listeners[e]||(this._listeners[e]=[]),this._listeners[e].push(t)),this},s.prototype.prependListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.prependListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.prependListener: listener should be type function"),"*"===e?this._starListeners.unshift(t):(this._listeners[e]||(this._listeners[e]=[]),this._listeners[e].unshift(t)),this},s.prototype.once=function(e,t){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.once: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.once: listener should be type function");var n=this;return this.on(e,(function r(){t.apply(n,arguments),n.removeListener(e,r)})),this},s.prototype.prependOnceListener=function(e,t){i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.prependOnceListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.prependOnceListener: listener should be type function");var n=this;return this.prependListener(e,(function r(){t.apply(n,arguments),n.removeListener(e,r)})),this},s.prototype.removeListener=function(e,t){return i.ok("string"==typeof e||"symbol"==typeof e,"nanobus.removeListener: eventName should be type string or symbol"),i.equal(typeof t,"function","nanobus.removeListener: listener should be type function"),"*"===e?(this._starListeners=this._starListeners.slice(),n(this._starListeners,t)):(void 0!==this._listeners[e]&&(this._listeners[e]=this._listeners[e].slice()),n(this._listeners[e],t));function n(e,t){if(e){var n=e.indexOf(t);return-1!==n?(r(e,n,1),!0):void 0}}},s.prototype.removeAllListeners=function(e){return e?"*"===e?this._starListeners=[]:this._listeners[e]=[]:(this._starListeners=[],this._listeners={}),this},s.prototype.listeners=function(e){var t="*"!==e?this._listeners[e]:this._starListeners,n=[];if(t)for(var r=t.length,o=0;o<r;o++)n.push(t[o]);return n},s.prototype._emit=function(e,t,n,r){if(void 0!==e&&0!==e.length){void 0===n&&(n=t,t=null),t&&(n=void 0!==r?[t].concat(n,r):[t].concat(n));for(var o=e.length,i=0;i<o;i++){var s=e[i];s.apply(s,n)}}}},function(e,t,n){"use strict";e.exports=function(e,t,n){var r,o=e.length;if(!(t>=o||0===n)){var i=o-(n=t+n>o?o-t:n);for(r=t;r<i;++r)e[r]=e[r+n];e.length=i}}},function(e,t,n){var r,o=n(9)(),i=n(2);s.disabled=!0;try{r=window.performance,s.disabled="true"===window.localStorage.DISABLE_NANOTIMING||!r.mark}catch(e){}function s(e){if(i.equal(typeof e,"string","nanotiming: name should be type string"),s.disabled)return u;var t=(1e4*r.now()).toFixed()%Number.MAX_SAFE_INTEGER,n="start-"+t+"-"+e;function a(i){var s="end-"+t+"-"+e;r.mark(s),o.push((function(){var o=null;try{var u=e+" ["+t+"]";r.measure(u,n,s),r.clearMarks(n),r.clearMarks(s)}catch(e){o=e}i&&i(o,e)}))}return r.mark(n),a.uuid=t,a}function u(e){e&&o.push((function(){e(new Error("nanotiming: performance API unavailable"))}))}e.exports=s},function(e,t,n){var r=n(2),o="undefined"!=typeof window;function i(e){this.hasWindow=e,this.hasIdle=this.hasWindow&&window.requestIdleCallback,this.method=this.hasIdle?window.requestIdleCallback.bind(window):this.setTimeout,this.scheduled=!1,this.queue=[]}i.prototype.push=function(e){r.equal(typeof e,"function","nanoscheduler.push: cb should be type function"),this.queue.push(e),this.schedule()},i.prototype.schedule=function(){if(!this.scheduled){this.scheduled=!0;var e=this;this.method((function(t){for(;e.queue.length&&t.timeRemaining()>0;)e.queue.shift()(t);e.scheduled=!1,e.queue.length&&e.schedule()}))}},i.prototype.setTimeout=function(e){setTimeout(e,0,{timeRemaining:function(){return 1}})},e.exports=function(){var e;return o?(window._nanoScheduler||(window._nanoScheduler=new i(!0)),e=window._nanoScheduler):e=new i,e}},function(e,t,n){"use strict";Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var r=s(n(11)),o=s(n(12)),i=s(n(13));function s(e){return e&&e.__esModule?e:{default:e}}function u(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}var a=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.element=t,this.settings=new Map,this.init()}var t,n,s;return t=e,(n=[{key:"init",value:function(){this.settings.set("sorting",new r.default(this.element)),this.settings.set("roles",new o.default(this.element)),this.settings.set("users",new i.default(this.element))}}])&&u(t.prototype,n),s&&u(t,s),e}();t.default=a},function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.Form=t,this.columns=AdminColumns.Form.columns,this.setting=this.Form.querySelector('[data-setting="sorting-preference"]'),this.select_columns=this.setting.querySelector('[name="settings[sorting]"]'),this.init()}var t,n,o;return t=e,o=[{key:"isSortable",value:function(e){var t=e.el.querySelector('table[data-setting="sort"]');return!!t&&t.querySelectorAll('input[value="on"]:checked').length>0}}],(n=[{key:"init",value:function(){var t=this;Object.keys(this.columns).forEach((function(n){var r=t.columns[n];if(e.isSortable(r)){var o=document.createElement("option");o.value=n,r.settings.hasOwnProperty("label")&&(o.innerText=r.el.querySelector(".column_label .toggle").innerText),""===o.innerText&&(o.innerText=r.el.querySelector(".column_type .inner").innerText),t.select_columns.appendChild(o)}}));var n=this.select_columns.dataset.sorting;this.select_columns.querySelectorAll('[value="'.concat(n,'"]')).forEach((function(e){return e.selected=!0}))}}])&&r(t.prototype,n),o&&r(t,o),e}();t.default=o},function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.Form=t,this.init()}var t,n,o;return t=e,(n=[{key:"init",value:function(){jQuery(this.Form.querySelector("select.roles")).ac_select2({placeholder:acp_layouts.roles,theme:"acs2"}).on("select2:select",(function(){jQuery(this).ac_select2("open")})).on("select2:open",(function(){setTimeout((function(){jQuery(".select2-container.select2-container--open .select2-dropdown li[role=group]").each((function(){jQuery(this).find("li[aria-selected=false]").length>0?jQuery(this).show():jQuery(this).hide()}))}),1)}))}}])&&r(t.prototype,n),o&&r(t,o),e}();t.default=o},function(e,t,n){"use strict";function r(e,t){for(var n=0;n<t.length;n++){var r=t[n];r.enumerable=r.enumerable||!1,r.configurable=!0,"value"in r&&(r.writable=!0),Object.defineProperty(e,r.key,r)}}Object.defineProperty(t,"__esModule",{value:!0}),t.default=void 0;var o=function(){function e(t){!function(e,t){if(!(e instanceof t))throw new TypeError("Cannot call a class as a function")}(this,e),this.Form=t,this.init()}var t,n,o;return t=e,(n=[{key:"init",value:function(){jQuery(this.Form.querySelector("select.users")).ac_select2({placeholder:acp_layouts.users,multiple:!0,theme:"acs2",minimumInputLength:0,escapeMarkup:function(e){return jQuery("<div>"+e+"</div>").text()},ajax:{type:"POST",url:ajaxurl,dataType:"json",delay:350,data:function(e){return{action:"acp_layout_get_users",_ajax_nonce:AC._ajax_nonce,search:e.term,page:e.page}},processResults:function(e){return e&&e.success&&e.data?e.data:{results:[]}},cache:!0}})}}])&&r(t.prototype,n),o&&r(t,o),e}();t.default=o}]);