!function(e){var t={};function n(r){if(t[r])return t[r].exports;var o=t[r]={i:r,l:!1,exports:{}};return e[r].call(o.exports,o,o.exports,n),o.l=!0,o.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:r})},n.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},n.t=function(e,t){if(1&t&&(e=n(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var r=Object.create(null);if(n.r(r),Object.defineProperty(r,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var o in e)n.d(r,o,function(t){return e[t]}.bind(null,o));return r},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=6)}([function(e,t){e.exports=window.wp.htmlEntities},function(e,t){e.exports=window.wp.element},function(e,t){e.exports=window.wp.i18n},function(e,t){e.exports=window.wc.wcSettings},,,function(e,t,n){"use strict";n.r(t);var r=n(1),o=(n(2),n(0)),c=n(3);const{registerPlugin:a}=wp.plugins,{ExperimentalOrderMeta:i}=wc.blocksCheckout,l=Object(c.getSetting)("wc-affirm-block-cart_data",{}),u=Object(o.decodeEntities)(l.affirmColor),s=Object(o.decodeEntities)(l.learnmore),f=Object(o.decodeEntities)(l.script_url),d=Object(o.decodeEntities)(l.public_key),p=Object(o.decodeEntities)(l.public_key_ca),g=Object(o.decodeEntities)(l.enabled),b=Object(o.decodeEntities)(l.valid_use),m=Object(o.decodeEntities)(l.cart_ala),_=Object(o.decodeEntities)(l.language_selector);let w,y=Object(o.decodeEntities)(l.site_locale),O=!1,j="",E="";const v=e=>{let{cart:t,context:n}=e;const o=t.cartTotals.total_items;if("woocommerce/cart"!=n)return Object(r.createElement)("p",null);let c=t.cartTotals.currency_code;return w={USD:["US","USA"],CAD:["CA","CAN"]}[c],w&&g&&b&&m?(E=function(e){let t="en_US";if("USD"!==e)if("site_language"===_)y===t&&(t="en_CA");else{let e=(navigator.languages&&navigator.languages.length?navigator.languages[0]:navigator.language,browserLanguage.substring(0,2));y=e+"_"+w[0],y===t&&(t="en_CA")}return t}(c),j=function(e){return"CAN"===e?p:d}(w),O?affirm.ui.ready((function(){affirm.ui.refresh()})):(function(){if(void 0===e){var e={public_api_key:j,script:f,locale:E,country_code:w};!function(e,t,n,r,o,c,a){var i,l=e[n]||{},u=document.createElement(c),s=document.getElementsByTagName(c)[0],f=function(e,t,n){return function(){e[t]._.push([n,arguments])}};for(l[r]=f(l,r,"set"),i=l[r],l[o]={},l[o]._=[],i._=[],l[o][a]=f(l,o,a),o=0,a="set add save post open "+"empty reset on off trigger ready setProduct".split(" ");o<a.length;o++)i[a[o]]=f(l,r,a[o]);for(o=0,a=["get","token","url","items"];o<a.length;o++)i[a[o]]=function(){};u.async=!0,u.src=t[c],s.parentNode.insertBefore(u,s),delete t[c],i(t),e[n]=l}(window,e,"affirm","checkout","ui","script","ready")}}(),O=!0),Object(r.createElement)("p",{className:"class-affirm-ala-cart-block affirm-as-low-as","data-amount":o,"data-affirm-color":u,"data-learnmore-show":s,"data-page-type":"cart"})):Object(r.createElement)("p",null)};a("wc-affirm-block-cart",{render:()=>Object(r.createElement)(i,null,Object(r.createElement)(v,null)),scope:"woocommerce-checkout"})}]);