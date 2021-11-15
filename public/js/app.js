/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/whitecube-pluton/pluton.min.js":
/*!*****************************************************!*\
  !*** ./node_modules/whitecube-pluton/pluton.min.js ***!
  \*****************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Pluton; });
class Pluton{constructor(){this.classes=this.importAll(),this.instances={},this.setup()}clear(){this.instances={}}setup(s){for(var t in this.classes)this.setupComponent(t,this.classes[t],s)}setupComponent(s,t,e){t.selector&&[].forEach.call((e||document).querySelectorAll(t.selector),e=>{this.instances[s]||(this.instances[s]=[]),this.instances[s].push(new t(e))})}call(s,t,e){if(this.instances[s])for(var n=this.instances[s].length-1;n>=0;n--)this.instances[s][n][t](e)}importAll(){var s=__webpack_require__("./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$"),t={};return s.keys().forEach(e=>{let n=s(e);t[n.default.selector]=n.default}),t}}


/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/app.js":
/*!*********************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/app.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var whitecube_pluton__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! whitecube-pluton */ "./node_modules/whitecube-pluton/pluton.min.js");
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }


console.log('hi');

var DwTest = /*#__PURE__*/function () {
  function DwTest() {// TODO

    _classCallCheck(this, DwTest);
  }

  _createClass(DwTest, [{
    key: "load",
    value: function load() {
      // initialiser Pluton
      this.pluton = new whitecube_pluton__WEBPACK_IMPORTED_MODULE_0__["default"]();
    }
  }]);

  return DwTest;
}();

window.addEventListener('load', function (e) {
  window.DwTest = new DwTest();
  window.DwTest.load();
});

/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$":
/*!*******************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts sync \.js$ ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var map = {
	"./diaporama.js": "./wp-content/themes/easyspacy/resources/js/parts/diaporama.js",
	"./hover.js": "./wp-content/themes/easyspacy/resources/js/parts/hover.js",
	"./languages.js": "./wp-content/themes/easyspacy/resources/js/parts/languages.js",
	"./search.js": "./wp-content/themes/easyspacy/resources/js/parts/search.js"
};


function webpackContext(req) {
	var id = webpackContextResolve(req);
	return __webpack_require__(id);
}
function webpackContextResolve(req) {
	if(!__webpack_require__.o(map, req)) {
		var e = new Error("Cannot find module '" + req + "'");
		e.code = 'MODULE_NOT_FOUND';
		throw e;
	}
	return map[req];
}
webpackContext.keys = function webpackContextKeys() {
	return Object.keys(map);
};
webpackContext.resolve = webpackContextResolve;
module.exports = webpackContext;
webpackContext.id = "./wp-content/themes/easyspacy/resources/js/parts sync recursive \\.js$";

/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/diaporama.js":
/*!*********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/diaporama.js ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return MenuToggle; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var MenuToggle = /*#__PURE__*/function () {
  function MenuToggle(element) {
    var _this = this;

    _classCallCheck(this, MenuToggle);

    console.log('ho');
    this.slider = element;
    this.diaporama = document.querySelector('.slider__container');
    this.div = document.querySelector('.slider__miniature');
    this.images = document.querySelectorAll('.slider__image');
    this.nb_img = this.images.length;
    this.position = 0;
    this.slider.addEventListener('click', function (e) {
      _this.openMenu(e); // links animation


      _this.links.forEach(function (link, index) {
        if (link.style.animation) {
          link.style.animation = '';
        } else {
          link.style.animation = "navLinkFade .5s ease forwards ".concat(index / 7 + 1.5, "s");
        }
      }); //burger animation


      _this.burger.classList.toggle('toggle');
    });
  }

  _createClass(MenuToggle, [{
    key: "openMenu",
    value: function openMenu(e) {
      e.preventDefault();
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.slider__container';
    }
  }]);

  return MenuToggle;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/hover.js":
/*!*****************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/hover.js ***!
  \*****************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return MenuToggle; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var MenuToggle = /*#__PURE__*/function () {
  function MenuToggle(element) {
    var _this = this;

    _classCallCheck(this, MenuToggle);

    console.log('hhihi');
    this.burger = element;
    this.menu = document.querySelector('.menu');
    this.close = document.querySelector('.menu__close');
    this.links = document.querySelectorAll('.menu__links');
    this.burger.addEventListener('click', function (e) {
      //toggle nav
      _this.openMenu(e); // links animation


      _this.links.forEach(function (link, index) {
        if (link.style.animation) {
          link.style.animation = '';
        } else {
          link.style.animation = "navLinkFade .5s ease forwards ".concat(index / 7 + 1.5, "s");
        }
      }); //burger animation


      _this.burger.classList.toggle('toggle');
    });
    /*this.close.addEventListener('click', (e)=>{
        this.closeMenu(e);
    })*/
  }

  _createClass(MenuToggle, [{
    key: "openMenu",
    value: function openMenu(e) {
      e.preventDefault();
      this.menu.classList.add('menu-active');
      this.menu.classList.toggle('menu-active');
    }
    /*closeMenu(e){
        e.preventDefault();
        this.menu.classList.remove('menu-active');
    }*/

  }], [{
    key: "selector",
    get: function get() {
      return '.burger';
    }
  }]);

  return MenuToggle;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/languages.js":
/*!*********************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/languages.js ***!
  \*********************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Languages; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Languages = /*#__PURE__*/function () {
  function Languages(element) {
    var _this = this;

    _classCallCheck(this, Languages);

    this.root = element;
    this.btn = element.querySelector('.languages__lang');
    this.isOpen = false;
    this.btn.addEventListener('click', function (e) {
      return _this.toggleDropdown(e);
    });
    document.addEventListener('click', function (e) {
      return _this.bodyClick(e);
    });
  }

  _createClass(Languages, [{
    key: "toggleDropdown",
    value: function toggleDropdown(event) {
      event.preventDefault();

      if (this.isOpen) {
        this.close();
      } else {
        this.open();
      }
    }
  }, {
    key: "bodyClick",
    value: function bodyClick(event) {
      if (event.target === this.root || this.root.contains(event.target)) {
        return;
      }

      if (this.isOpen) {
        event.preventDefault();
        this.close();
      }
    }
  }, {
    key: "open",
    value: function open() {
      this.isOpen = true;
      this.root.classList.add('languages--visible');
    }
  }, {
    key: "close",
    value: function close() {
      this.isOpen = false;
      this.root.classList.remove('languages--visible');
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.languages';
    }
  }]);

  return Languages;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/js/parts/search.js":
/*!******************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/js/parts/search.js ***!
  \******************************************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return SearchToggle; });
function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SearchToggle = /*#__PURE__*/function () {
  function SearchToggle(element) {
    var _this = this;

    _classCallCheck(this, SearchToggle);

    this.element = element;
    this.loupe = document.querySelector('.menu__search');
    this.loupe.addEventListener('click', function (e) {
      e.preventDefault();

      _this.toggleMenu();
    });
  }

  _createClass(SearchToggle, [{
    key: "toggleMenu",
    value: function toggleMenu() {
      var _this2 = this;

      if (!this.element.classList.contains('search__active')) {
        this.element.classList.add('search__active');
        this.element.addEventListener('animationend', function () {
          _this2.zIndex();
        });
      } else if (this.element.classList.contains('search__active')) {
        this.element.classList.remove('search__active');
        this.element.addEventListener('animationend', function () {
          _this2.zIndex();
        });
      }
    }
  }, {
    key: "zIndex",
    value: function zIndex() {
      if (this.element.classList.contains('search__active')) {
        this.element.style.zIndex = 1;
      } else if (!this.element.classList.contains('search__active') && this.element.zIndex === 1) {
        this.element.style.zIndex = -1;
      }
    }
  }], [{
    key: "selector",
    get: function get() {
      return '.search';
    }
  }]);

  return SearchToggle;
}();



/***/ }),

/***/ "./wp-content/themes/easyspacy/resources/sass/theme.scss":
/*!***************************************************************!*\
  !*** ./wp-content/themes/easyspacy/resources/sass/theme.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!***********************************************************************************************************************!*\
  !*** multi ./wp-content/themes/easyspacy/resources/js/app.js ./wp-content/themes/easyspacy/resources/sass/theme.scss ***!
  \***********************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /Applications/MAMP/htdocs/wordpress-easyspacy/wp-content/themes/easyspacy/resources/js/app.js */"./wp-content/themes/easyspacy/resources/js/app.js");
module.exports = __webpack_require__(/*! /Applications/MAMP/htdocs/wordpress-easyspacy/wp-content/themes/easyspacy/resources/sass/theme.scss */"./wp-content/themes/easyspacy/resources/sass/theme.scss");


/***/ })

/******/ });