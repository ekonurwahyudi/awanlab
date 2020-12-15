"use strict";
var KTDatatableHtmlTableDemo = {
    init: function () {
        var t;
        (t = $("#kt_datatable").KTDatatable({
            data: { saveState: { cookie: !1 } },
            search: { input: $("#kt_datatable_search_query"), key: "generalSearch" },
            layout: { class: "datatable-bordered" },
            columns: [
                { field: "DepositPaid", type: "number" },
                { field: "OrderDate", type: "date", format: "YYYY-MM-DD" },
                {
                    field: "Lokasi",
                    title: "Lokasi",
                    autoHide: !1,
                    template: function (t) {
                        var e = {
                            1: { title: "Jakarta", class: " label-light-warning" },
                            2: { title: "Medan", class: " label-light-danger" },
                            3: { title: "Surabaya", class: " label-light-primary" },
                            4: { title: "Makassar", class: " label-light-success" },
                            5: { title: "Info", class: " label-light-info" },
                            6: { title: "Danger", class: " label-light-danger" },
                            7: { title: "Warning", class: " label-light-warning" },
                        };
                        return '<span class="label font-weight-bold label-lg' + e[t.Lokasi].class + ' label-inline">' + e[t.Lokasi].title + "</span>";
                    },
                },
                {
                    field: "Type",
                    title: "Type",
                    autoHide: !1,
                    template: function (t) {
                        var e = { 1: { title: "Online", state: "danger" }, 2: { title: "Retail", state: "primary" }, 3: { title: "Direct", state: "success" } };
                        return '<span class="label label-' + e[t.Type].state + ' label-dot mr-2"></span><span class="font-weight-bold text-' + e[t.Type].state + '">' + e[t.Type].title + "</span>";
                    },
                },
            ],
        })),
            $("#kt_datatable_search_lokasi").on("change", function () {
                t.search($(this).val().toLowerCase(), "Lokasi");
            }),
            $("#kt_datatable_search_type").on("change", function () {
                t.search($(this).val().toLowerCase(), "Type");
            }),
            $("#kt_datatable_search_lokasi, #kt_datatable_search_type").selectpicker();
    },
};
jQuery(document).ready(function () {
    KTDatatableHtmlTableDemo.init();
});
