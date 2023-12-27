(self["webpackChunk"] = self["webpackChunk"] || []).push([["langues"],{

/***/ "./assets/js/langues.js":
/*!******************************!*\
  !*** ./assets/js/langues.js ***!
  \******************************/
/***/ ((__unused_webpack_module, __unused_webpack_exports, __webpack_require__) => {

/* provided dependency */ var $ = __webpack_require__(/*! jquery */ "./node_modules/jquery/dist/jquery.js");
$('.flag').on("click", function () {
  var langue = $(this).attr("value");
  $.ajax({
    type: "POST",
    url: 'changeLocale',
    data: {
      langue: langue
    },
    success: function success(data) {
      location.reload();
    }
  });
});

/***/ })

},
/******/ __webpack_require__ => { // webpackRuntimeModules
/******/ var __webpack_exec__ = (moduleId) => (__webpack_require__(__webpack_require__.s = moduleId))
/******/ __webpack_require__.O(0, ["vendors-node_modules_jquery_dist_jquery_js"], () => (__webpack_exec__("./assets/js/langues.js")));
/******/ var __webpack_exports__ = __webpack_require__.O();
/******/ }
]);
//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoibGFuZ3Vlcy5qcyIsIm1hcHBpbmdzIjoiOzs7Ozs7Ozs7QUFBQUEsQ0FBQyxDQUFDLE9BQU8sQ0FBQyxDQUFDQyxFQUFFLENBQUMsT0FBTyxFQUFFLFlBQ3ZCO0VBQ0MsSUFBSUMsTUFBTSxHQUFHRixDQUFDLENBQUMsSUFBSSxDQUFDLENBQUNHLElBQUksQ0FBQyxPQUFPLENBQUM7RUFDbENILENBQUMsQ0FBQ0ksSUFBSSxDQUFDO0lBQ05DLElBQUksRUFBRSxNQUFNO0lBQ1pDLEdBQUcsRUFBRSxjQUFjO0lBQ25CQyxJQUFJLEVBQUU7TUFBQ0wsTUFBTSxFQUFFQTtJQUFNLENBQUM7SUFDdEJNLE9BQU8sRUFBRSxTQUFBQSxRQUFVRCxJQUFJLEVBQ3ZCO01BQ0NFLFFBQVEsQ0FBQ0MsTUFBTSxDQUFDLENBQUM7SUFDbEI7RUFDRCxDQUFDLENBQUM7QUFDSCxDQUFDLENBQUMiLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9hc3NldHMvanMvbGFuZ3Vlcy5qcyJdLCJzb3VyY2VzQ29udGVudCI6WyIkKCcuZmxhZycpLm9uKFwiY2xpY2tcIiwgZnVuY3Rpb24gKClcbntcblx0dmFyIGxhbmd1ZSA9ICQodGhpcykuYXR0cihcInZhbHVlXCIpO1xuXHQkLmFqYXgoe1xuXHRcdHR5cGU6IFwiUE9TVFwiLFxuXHRcdHVybDogJ2NoYW5nZUxvY2FsZScsXG5cdFx0ZGF0YToge2xhbmd1ZTogbGFuZ3VlfSxcblx0XHRzdWNjZXNzOiBmdW5jdGlvbiAoZGF0YSlcblx0XHR7XG5cdFx0XHRsb2NhdGlvbi5yZWxvYWQoKTtcblx0XHR9XG5cdH0pO1xufSkiXSwibmFtZXMiOlsiJCIsIm9uIiwibGFuZ3VlIiwiYXR0ciIsImFqYXgiLCJ0eXBlIiwidXJsIiwiZGF0YSIsInN1Y2Nlc3MiLCJsb2NhdGlvbiIsInJlbG9hZCJdLCJzb3VyY2VSb290IjoiIn0=