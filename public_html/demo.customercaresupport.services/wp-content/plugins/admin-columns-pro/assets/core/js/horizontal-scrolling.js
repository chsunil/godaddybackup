!function(t){var e={};function i(n){if(e[n])return e[n].exports;var s=e[n]={i:n,l:!1,exports:{}};return t[n].call(s.exports,s,s.exports,i),s.l=!0,s.exports}i.m=t,i.c=e,i.d=function(t,e,n){i.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},i.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},i.t=function(t,e){if(1&e&&(t=i(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(i.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var s in t)i.d(n,s,function(e){return t[e]}.bind(null,s));return n},i.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return i.d(e,"a",e),e},i.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},i.p="",i(i.s=14)}({14:function(t,e,i){"use strict";function n(t,e){if(!(t instanceof e))throw new TypeError("Cannot call a class as a function")}function s(t,e){for(var i=0;i<e.length;i++){var n=e[i];n.enumerable=n.enumerable||!1,n.configurable=!0,"value"in n&&(n.writable=!0),Object.defineProperty(t,n.key,n)}}function a(t,e,i){return e&&s(t.prototype,e),i&&s(t,i),t}jQuery(document).ready((function(t){var e=document.querySelector(".wp-list-table");e&&(AdminColumns.HorizontalScrolling=new d(e),jQuery("#acp_overflow_list_screen_table-yes").on("click",(function(){t(this).is(":checked")?(AdminColumns.HorizontalScrolling.enable(),AdminColumns.HorizontalScrolling.store()):(AdminColumns.HorizontalScrolling.disable(),AdminColumns.HorizontalScrolling.store())})))}));var r="acp-overflow-table",o="acp-hts-wrapper",l="-overflow",c="-more",u="-less",d=function(){function t(e){n(this,t),this.enabled=document.body.classList.contains(r),this.table=e,this.wrapper=new h(this.table),this.indicator=new f(this.table,this.wrapper),this.isEnabled()&&(this.wrapper.wrap(),this.wrapper.enable(),ACP_Horizontal_Scrolling.hasOwnProperty("indicator_enabled")&&ACP_Horizontal_Scrolling.indicator_enabled&&this.indicator.enable())}return a(t,[{key:"isEnabled",value:function(){return this.enabled}},{key:"enable",value:function(){document.body.classList.add(r),this.enabled=!0,this.wrapper.wrap(),this.wrapper.enable(),this.wrapper.checkWrapperState(),this.indicator.enable()}},{key:"disable",value:function(){this.wrapper.disable(),this.enabled=!1,this.indicator.disable(),document.body.classList.remove(r)}},{key:"checkWrapperState",value:function(){var t=this.table.scrollWidth,e=this.table.offsetWidth,i=this.table.scrollLeft,n=document.querySelector(".acp-table-wrapper");n.classList.remove("-overflow","-more","-less"),t>e&&(n.classList.add("-overflow"),i+e+10<t&&n.classList.add("-more"),i>0&&n.classList.add("-less"))}},{key:"store",value:function(){jQuery.post(ajaxurl,{action:"acp_update_table_option_overflow",value:this.isEnabled(),layout:AC.layout,list_screen:AC.list_screen,_ajax_nonce:AC.ajax_nonce})}}]),t}(),h=function(){function t(e){n(this,t),this.enabled=!1,this.table=e,this.wrapper=null,this.initEvents()}return a(t,[{key:"enable",value:function(){this.enabled=!0,this.checkWrapperState()}},{key:"disable",value:function(){this.enabled=!1}},{key:"initEvents",value:function(){var t=this;this.table.addEventListener("scroll",(function(){t.checkWrapperState()})),window.addEventListener("resize",(function(){clearTimeout(t.timeout),t.timeout=setTimeout((function(){t.checkWrapperState()}),100)}))}},{key:"wrap",value:function(){this.table.parentElement.classList.contains(o)||(this.wrapper=document.createElement("div"),this.wrapper.classList.add(o),this.table.parentNode.insertBefore(this.wrapper,this.table),this.wrapper.appendChild(this.table))}},{key:"setOffset",value:function(t){var e=(this.table.scrollWidth-this.table.offsetWidth)*(t/100);this.table.scrollLeft=Math.round(e)}},{key:"getOffsetPercentage",value:function(){var t=this.table.scrollWidth-this.table.offsetWidth,e=this.table.scrollLeft/t*100;return Math.round(e)}},{key:"checkWrapperState",value:function(){if(this.enabled){var t=this.table.scrollWidth,e=this.table.offsetWidth,i=this.table.scrollLeft;this.wrapper.classList.remove(u,c,l),t>e&&(this.wrapper.classList.add(l),i+e+10<t&&this.wrapper.classList.add(c),i>0&&this.wrapper.classList.add(u))}}}]),t}(),f=function(){function t(e,i){n(this,t),this.table=e,this.wrapper=i,this.initialX=0,this.xOffset=0,this.maxX=0,this.tempX=0,this.active=!1,this.create(),this.updateDraggerWidth(),this.updateWidth()}return a(t,[{key:"disable",value:function(){this.element.style.display="none"}},{key:"enable",value:function(){this.element.style.display="block"}},{key:"hide",value:function(){this.element.classList.add("-hidden")}},{key:"show",value:function(){this.element.classList.remove("-hidden")}},{key:"create",value:function(){var t=this,e=document.createElement("div"),i=document.createElement("div");e.classList.add("acp-scrolling-indicator"),e.classList.add("-start"),e.classList.add("-hidden"),i.classList.add("acp-scrolling-indicator__dragger"),e.appendChild(i),document.body.appendChild(e),this.element=e,this.dragger=i,setTimeout((function(){t.maxX=e.clientWidth-i.offsetWidth})),this.initEvents(),this.disable(),this.updateYPosition()}},{key:"updateWidth",value:function(){this.element.style.width=this.table.offsetWidth-2+"px"}},{key:"updateYPosition",value:function(){var t=this.table.getBoundingClientRect().bottom,e=window.innerHeight-t;e>this.element.offsetHeight?this.element.style.top=window.innerHeight-e+"px":this.element.style.top="inherit"}},{key:"updateDraggerWidth",value:function(){var t=Math.round(this.table.offsetWidth/this.table.scrollWidth*100);100===t?this.element.classList.add("-fits"):this.element.classList.remove("-fits"),this.dragger.style.width="".concat(t,"%"),this.maxX=this.element.clientWidth-this.dragger.offsetWidth}},{key:"initEvents",value:function(){var t=this;document.addEventListener("scroll",(function(){t.updateYPosition(),t.updateWidth()})),window.addEventListener("touchmove",(function(e){return t.drag(e)}),!1),window.addEventListener("mousemove",(function(e){return t.drag(e)}),!1),window.addEventListener("mouseup",(function(e){return t.dragEnd(e)})),this.dragger.addEventListener("touchstart",(function(e){return t.dragStart(e)})),this.dragger.addEventListener("touchend",(function(e){return t.dragEnd(e)})),this.dragger.addEventListener("mousedown",(function(e){return t.dragStart(e)})),this.dragger.addEventListener("mouseup",(function(e){return t.dragEnd(e)})),this.table.addEventListener("scroll",(function(){t.updateIndicator()})),window.addEventListener("resize",(function(){clearTimeout(t.timeout),t.timeout=setTimeout((function(){t.updateWidth(),t.updateDraggerWidth()}),100)})),document.querySelector("#show-settings-link").addEventListener("click",(function(){return t.refreshPosition(300)})),document.addEventListener("click",(function(){return t.refreshPosition()})),setTimeout((function(){t.refreshPosition(300)}),100)}},{key:"refreshPosition",value:function(){var t=this,e=arguments.length>0&&void 0!==arguments[0]?arguments[0]:100;setTimeout((function(){t.show(),t.updateYPosition()}),e)}},{key:"updateIndicator",value:function(){if(!this.active){var t=this.wrapper.getOffsetPercentage()/100,e=Math.round(this.maxX*t);this.xOffset=e,this.setTranslate(e)}}},{key:"getCurrentOffset",value:function(){return this.xOffset}},{key:"dragStart",value:function(t){this.initialX=p.getX(t),this.active=!0}},{key:"dragEnd",value:function(){this.active&&(this.initialX=!1,this.active=!1,this.xOffset=this.tempX,AdminColumns.HorizontalScrolling.wrapper.setOffset(this.percentage))}},{key:"drag",value:function(t){if(this.active){t.preventDefault();var e=p.getX(t)-this.initialX,i=this.getCurrentOffset()+e;i<0&&(i=0),i>this.maxX&&(i=this.maxX),this.tempX=i,this.percentage=i/this.maxX*100,this.setTranslate(i),AdminColumns.HorizontalScrolling.wrapper.setOffset(this.percentage)}}},{key:"setTranslate",value:function(t){0===t?this.element.classList.add("-start"):this.element.classList.remove("-start"),this.dragger.style.left="".concat(t,"px")}}]),t}(),p=function(){function t(){n(this,t)}return a(t,null,[{key:"getX",value:function(t){return"touchmove"===t.type?t.touches[0].clientX:t.clientX}},{key:"getY",value:function(t){return"touchmove"===t.type?t.touches[0].clientY:t.clientY}}]),t}()}});