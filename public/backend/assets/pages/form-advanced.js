!(function(e) {
    "use strict";
    var t = function() {};
    (t.prototype.init = function() {
        // e(".colorpicker-default").colorpicker({ format: "hex" }),
        //     e(".colorpicker-rgba").colorpicker(),
        //     e("#colorpicker-horizontal").colorpicker({
        //         color: "#88cc33",
        //         horizontal: !0
        //     }),
        //     e("#colorpicker-color-pattern").colorpicker({
        //         colorSelectors: {
        //             black: "#000000",
        //             white: "#ffffff",
        //             red: "#FF0000",
        //             default: "#777777",
        //             primary: "#337ab7",
        //             success: "#5cb85c",
        //             info: "#5bc0de",
        //             warning: "#f0ad4e",
        //             danger: "#d9534f"
        //         }
        //     }),
        //     e(".colorpicker-large").colorpicker({
        //         customClass: "colorpicker-2x",
        //         sliders: {
        //             saturation: { maxLeft: 200, maxTop: 200 },
        //             hue: { maxTop: 200 },
        //             alpha: { maxTop: 200 }
        //         }
        //     }),
        //     e("#date").bootstrapMaterialDatePicker({ weekStart: 0, time: !1 }),
        //     e("#time").bootstrapMaterialDatePicker({ date: !1 }),
        //     e("#date-format").bootstrapMaterialDatePicker({
        //         format: "dddd DD MMMM YYYY - HH:mm"
        //     }),
        //     e("#date-fr").bootstrapMaterialDatePicker({
        //         format: "DD/MM/YYYY HH:mm",
        //         lang: "fr",
        //         weekStart: 1,
        //         cancelText: "ANNULER"
        //     }),
        //     e("#min-date").bootstrapMaterialDatePicker({
        //         format: "DD/MM/YYYY HH:mm",
        //         minDate: new Date()
        //     }),
        //     e("#date-end").bootstrapMaterialDatePicker({ weekStart: 0 }),
        //     e("#date-start")
        //         .bootstrapMaterialDatePicker({ weekStart: 0 })
        //         .on("change", function(t, a) {
        //             e("#date-end").bootstrapMaterialDatePicker("setMinDate", a);
        //         }),
        //     e("input#defaultconfig").maxlength({
        //         warningClass: "badge badge-info",
        //         limitReachedClass: "badge badge-warning"
        //     }),
        //     e("input#thresholdconfig").maxlength({
        //         threshold: 20,
        //         warningClass: "badge badge-info",
        //         limitReachedClass: "badge badge-warning"
        //     }),
        //     e("input#moreoptions").maxlength({
        //         alwaysShow: !0,
        //         warningClass: "badge badge-success",
        //         limitReachedClass: "badge badge-danger"
        //     }),
        //     e("input#alloptions").maxlength({
        //         alwaysShow: !0,
        //         warningClass: "badge badge-success",
        //         limitReachedClass: "badge badge-danger",
        //         separator: " out of ",
        //         preText: "You typed ",
        //         postText: " chars available.",
        //         validate: !0
        //     }),
        //     e("textarea#textarea").maxlength({
        //         alwaysShow: !0,
        //         warningClass: "badge badge-info",
        //         limitReachedClass: "badge badge-warning"
        //     }),
        //     e("input#placement").maxlength({
        //         alwaysShow: !0,
        //         placement: "top-left",
        //         warningClass: "badge badge-info",
        //         limitReachedClass: "badge badge-warning"
        //     }),
        //     e(".vertical-spin").TouchSpin({
        //         verticalbuttons: !0,
        //         verticalupclass: "ion-plus-round",
        //         verticaldownclass: "ion-minus-round",
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo1']").TouchSpin({
        //         min: 0,
        //         max: 100,
        //         step: 0.1,
        //         decimals: 2,
        //         boostat: 5,
        //         maxboostedstep: 10,
        //         postfix: "%",
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo2']").TouchSpin({
        //         min: -1e9,
        //         max: 1e9,
        //         stepinterval: 50,
        //         maxboostedstep: 1e7,
        //         prefix: "$",
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo3']").TouchSpin({
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo3_21']").TouchSpin({
        //         initval: 40,
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo3_22']").TouchSpin({
        //         initval: 40,
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo5']").TouchSpin({
        //         prefix: "pre",
        //         postfix: "post",
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
        //     e("input[name='demo0']").TouchSpin({
        //         buttondown_class: "btn btn-primary",
        //         buttonup_class: "btn btn-primary"
        //     }),
            e(".select2").select2(),
            e(".select2-limiting").select2({ maximumSelectionLength: 2 });
    }),
        (e.AdvancedForm = new t()),
        (e.AdvancedForm.Constructor = t);
})(window.jQuery),
    (function(t) {
        "use strict";
        window.jQuery.AdvancedForm.init();
    })();
