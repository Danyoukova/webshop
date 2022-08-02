"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["details"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js ***!
  \***********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Services_productService__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../Services/productService */ "./resources/js/Services/productService.js");
/* harmony import */ var _Cart__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Cart */ "./resources/js/components/Cart.vue");
/* harmony import */ var _Modal__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./Modal */ "./resources/js/components/Modal.vue");




/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  name: "ProductDetailView",
  components: {
    Cart: _Cart__WEBPACK_IMPORTED_MODULE_1__["default"],
    Modal: _Modal__WEBPACK_IMPORTED_MODULE_2__["default"]
  },
  props: {
    product: ['product'],
    id: {
      type: String
    }
  },
  data: function data() {
    return {
      isModalVisible: false,
      categories: [],
      products: [],
      item: null
    };
  },
  created: function created() {
    var _this = this;

    _Services_productService__WEBPACK_IMPORTED_MODULE_0__["default"].getProduct(this.id).then(function (response) {
      _this.item = response.data;
    });
  },
  methods: {
    closeModal: function closeModal() {
      this.isModalVisible = false;
    },
    increment: function increment(item) {
      this.$store.commit('INCREMENT_PRODUCT_QTY', item);
    },
    decrement: function decrement(item) {
      this.$store.commit('DECREMENT_PRODUCT_QTY', item);
    },
    addToCart: function addToCart() {
      this.$store.commit('ADD_PRODUCT', this.item);
      this.isModalVisible = true;
    }
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a":
/*!***************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "row"
};
var _hoisted_2 = {
  "class": "btn-light col-2 m-2"
};

var _hoisted_3 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" Back to shop ");

var _hoisted_4 = {
  "class": "container mt-5 pt-3"
};
var _hoisted_5 = {
  key: 0,
  "class": "container single_product_container"
};
var _hoisted_6 = {
  "class": "row gy-5"
};
var _hoisted_7 = {
  "class": "col-lg-7"
};
var _hoisted_8 = {
  "class": "single_product_pics"
};
var _hoisted_9 = {
  "class": "row"
};
var _hoisted_10 = {
  "class": "col-lg-9 image_col order-lg-2 order-1"
};
var _hoisted_11 = {
  "class": "single_product_image"
};
var _hoisted_12 = {
  "class": "single_product_image_background"
};
var _hoisted_13 = ["src"];
var _hoisted_14 = {
  "class": "col-lg-5"
};
var _hoisted_15 = {
  "class": "product_details"
};
var _hoisted_16 = {
  "class": "product_details_title"
};

var _hoisted_17 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("p", null, "Nam tempus turpis at metus scelerisque placerat nulla deumantos solicitud felis. Pellentesque diam dolor, elementum etos lobortis des mollis ut...", -1
/* HOISTED */
);

var _hoisted_18 = {
  "class": "m-2"
};
var _hoisted_19 = {
  "class": "row"
};
var _hoisted_20 = {
  "class": "col-md-8 order-1 mb-4"
};

var _hoisted_21 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
  "class": "col-3 align-items-center"
}, "Quantity:", -1
/* HOISTED */
);

var _hoisted_22 = {
  "class": "col align-items-center"
};
var _hoisted_23 = {
  "class": "col-md-4 order-2 mb-4"
};
var _hoisted_24 = ["product"];
var _hoisted_25 = ["src"];
var _hoisted_26 = {
  "class": "btn-light col-12 m-2"
};

var _hoisted_27 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" To shopping cart");

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_fa = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("fa");

  var _component_router_link = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("router-link");

  var _component_modal = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("modal");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
    to: "/"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_fa, {
        icon: "arrow-left"
      }), _hoisted_3])];
    }),
    _: 1
    /* STABLE */

  })]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [$data.item ? ((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_7, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_9, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_11, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_12, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
    src: '/assets/' + $data.item.image,
    alt: "img"
  }, null, 8
  /* PROPS */
  , _hoisted_13)])])])])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_14, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_15, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_16, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.item.product_name), 1
  /* TEXT */
  ), _hoisted_17]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_18, "€" + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.item.price), 1
  /* TEXT */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_19, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_20, [_hoisted_21, (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
    "class": "minus col align-items-center",
    style: {
      "cursor": "pointer"
    },
    onClick: _cache[0] || (_cache[0] = function ($event) {
      return $options.decrement($data.item);
    })
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_fa, {
    icon: "minus"
  })]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", _hoisted_22, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.item.quantity), 1
  /* TEXT */
  ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("span", {
    "class": "plus col align-items-center",
    onClick: _cache[1] || (_cache[1] = function ($event) {
      return $options.increment($data.item);
    })
  }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_fa, {
    icon: "plus"
  })])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                            <button class=\"col-4 ml-2\">"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                                <add-to-cart-button></add-to-cart-button>"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                            </button>"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                        <button class=\"btn1 btn-outline-primary px-3\">"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                            <add-to-cart-button :product=\"item\"></add-to-cart-button>"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                        </button>"), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_23, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", {
    "class": "btn-close-white col align-items-center",
    product: $data.item,
    onClick: _cache[2] || (_cache[2] = function () {
      return $options.addToCart && $options.addToCart.apply($options, arguments);
    })
  }, " Add to cart ", 8
  /* PROPS */
  , _hoisted_24), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)(" Modal to show that product is added to your cart "), (0,vue__WEBPACK_IMPORTED_MODULE_0__.withDirectives)((0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_modal, {
    onClose: $options.closeModal
  }, {
    header: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [];
    }),
    body: (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
        src: '/assets/' + $data.item.image,
        alt: "img"
      }, null, 8
      /* PROPS */
      , _hoisted_25), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createTextVNode)(" " + (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)($data.item.product_name) + " is added to your cart! ", 1
      /* TEXT */
      )];
    }),
    _: 1
    /* STABLE */

  }, 8
  /* PROPS */
  , ["onClose"]), [[vue__WEBPACK_IMPORTED_MODULE_0__.vShow, $data.isModalVisible]]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("                            ")])])]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_router_link, {
    to: "/cart"
  }, {
    "default": (0,vue__WEBPACK_IMPORTED_MODULE_0__.withCtx)(function () {
      return [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("button", _hoisted_26, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_fa, {
        icon: "shopping-cart"
      }), _hoisted_27])];
    }),
    _: 1
    /* STABLE */

  })])])])) : (0,vue__WEBPACK_IMPORTED_MODULE_0__.createCommentVNode)("v-if", true)])], 64
  /* STABLE_FRAGMENT */
  );
}

/***/ }),

/***/ "./resources/js/components/ProductDetailView.vue":
/*!*******************************************************!*\
  !*** ./resources/js/components/ProductDetailView.vue ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _ProductDetailView_vue_vue_type_template_id_5cb7938a__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./ProductDetailView.vue?vue&type=template&id=5cb7938a */ "./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a");
/* harmony import */ var _ProductDetailView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./ProductDetailView.vue?vue&type=script&lang=js */ "./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js");
/* harmony import */ var C_Users_danyo_source_repos_st_2122_2_s4_ee_innovative_project_NataliyaDanyoukova_src_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,C_Users_danyo_source_repos_st_2122_2_s4_ee_innovative_project_NataliyaDanyoukova_src_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_ProductDetailView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_ProductDetailView_vue_vue_type_template_id_5cb7938a__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/ProductDetailView.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductDetailView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductDetailView_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./ProductDetailView.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductDetailView_vue_vue_type_template_id_5cb7938a__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_ProductDetailView_vue_vue_type_template_id_5cb7938a__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./ProductDetailView.vue?vue&type=template&id=5cb7938a */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/ProductDetailView.vue?vue&type=template&id=5cb7938a");


/***/ })

}]);