var $productTypeField = $('#product_type_field');
var $productSeriesField = $('#product_series_field');
var $productNumberField = $('#product_number_field');
var $marketingNumberField = $('#marketing_number_field');
var $productModelField = $("#product_model_field");
var $productConfiguartionField = $("#product_config_field");

// 1. Product Type
$productTypeField.on('init', function() {

    var url = "https://asp.avita.global/api/product/types";

    $.getJSON( url ).done(function ( data ) {


        var default_value = $productTypeField.attr('data-init-val');

        var productTypes = data.product_types;

        $productTypeField.empty();
        $productTypeField.append('<option selected></option>');

        for (var i = 0; i < productTypes.length; i++) {
            var opt = document.createElement('option');
            opt.textContent = productTypes[i].name;
            opt.value = productTypes[i].id;
            opt.selected = (opt.value == default_value );

            $productTypeField.append(opt);
        }

        if ( default_value ) {
            $productTypeField.removeAttr('data-init-val');
        }


        //manually trigger a change event for the contry so that the change handler will get triggered
        $productTypeField.change();

    });

});

$productTypeField.change(function() {


    var select = $productSeriesField;

    if ( $(this).val() ) {

        var url = "https://asp.avita.global/api/product/product-series?country=mu&brand=avita&type=1";

        $.getJSON( url, {
            type: $(this).val()
        } ).done(function ( data ) {



            var default_value = select.attr('data-init-val');

            select.empty();
            select.append('<option disabled selected></option>');

            for (var i = 0; i < data.length; i++) {
                var opt = document.createElement('option');
                opt.textContent = data[i];
                opt.value = data[i];
                opt.selected = ( opt.value == default_value );
                select.append(opt);
            }

            select.show();
            select.change();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }

        });

    } else {

        select.hide();
        select.empty();
        select.change();
    }
});

// 2.
$productSeriesField.change(function() {

    var select = $marketingNumberField;

    if ( $(this).val() ) {
        var url = "https://asp.avita.global/api/product/marketing-numbers?country=mu&brand=avita&series=liber";

        $.getJSON( url, {
            series: $(this).val()
        } ).done(function ( data ) {

            var default_value = select.attr('data-init-val');

            select.empty();

            select.append('<option disabled selected></option>');

            for (var i = 0; i < data.length; i++) {
                var opt = document.createElement('option');
                opt.textContent = data[i];
                opt.value = data[i];
                opt.selected = ( opt.value == default_value );
                select.append(opt);
            }

            select.show();
            select.change();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }
        });

    } else {

        select.hide();
        select.empty();
        select.change();
    }

});

// 3.
$marketingNumberField.change(function() {

    var select = $productNumberField;

    if ( $(this).val() ) {
        var url = "https://asp.avita.global/api/product/product-models?country=mu&brand=avita&marketing_number=NS13A1";

        $.getJSON( url, {
            marketing_number: $(this).val()
        } ).done(function ( data ) {

            var default_value = select.attr('data-init-val');

            select.empty();

            select.append('<option disabled selected></option>');

            for (var i = 0; i < data.length; i++) {
                var opt = document.createElement('option');
                opt.textContent = data[i].model_number;
                opt.value = data[i].model_number;
                opt.setAttribute('data-configuration', data[i].name);
                opt.selected = ( opt.value == default_value );
                select.append(opt);
            }

            select.show();
            select.change();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }
        });

    } else {

        select.hide();
        select.empty();
        select.change();
    }
});

// 4.
$productNumberField.change(function() {

    // var select = $productModelField;
    //
    // if ( $(this).val() ) {
    //
    //     var url = "/api/products/models";
    //
    //     $.getJSON( url, {
    //         product_number: $(this).val()
    //     } ).done(function ( data ) {
    //
    //         var default_value = select.attr('data-init-val');
    //
    //         select.empty();
    //
    //         select.append('<option disabled selected></option>');
    //
    //         for (var i = 0; i < data.length; i++) {
    //             var opt = document.createElement('option');
    //             opt.textContent = data[i].model_number;
    //             opt.value = data[i].model_number;
    //             opt.setAttribute('data-configuration', data[i].name);
    //             opt.selected = ( opt.value == default_value );
    //             select.append(opt);
    //         }
    //
    //         select.show();
    //         select.change();
    //
    //         if ( default_value ) {
    //             select.removeAttr('data-init-val');
    //         }
    //     });
    //
    // } else {
    //
    //     select.hide();
    //     select.empty();
    //     select.change();
    // }

    // var config_text = $('option:selected', this).attr('data-configuration');
    // $productConfiguartionField.text(config_text);

});

// // 5.
// $productModelField.change(function() {
//
//     var config_text = $('option:selected', this).attr('data-configuration');
//     $productConfiguartionField.text(config_text);
// });



$productTypeField.trigger('init');
