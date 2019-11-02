var $productTypeField = $('#product_type');
var $productSeriesField = $('#product_series');
var $productNumberField = $('#product_number');
var $productModelField = $("#product_model");
var $productConfiguartionField = $("#product_configuration");

// Product Type
function reloadProductTypeField( ) {

    var select = $productTypeField;

    var url = "/api/products/types";


    $.getJSON( url ).done(function ( data ) {

        var default_value = select.attr('data-init-val');
        var productTypes = data.product_types;

        select.empty();
        select.append('<option selected></option>');

        for (var i = 0; i < productTypes.length; i++) {
            var opt = document.createElement('option');
            opt.textContent = productTypes[i].name;
            opt.value = productTypes[i].id;
            opt.selected = (opt.value == default_value );
            select.append(opt);
        }

        if ( default_value ) {
            select.removeAttr('data-init-val');
        }


        //manually trigger a change event for the contry so that the change handler will get triggered
        select.change();

    });
}

// Product Series
$productTypeField.change(function() {


    var select = $productSeriesField;

    if ( $(this).val() ) {

        var url = "/api/products/series";

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

            select.change();
            select.closest('.row').show();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }

        });

    } else {
        select.closest('.row').hide();
        select.empty();
        select.change();
    }
});

// Product Number
$productSeriesField.change(function() {

    var select = $productNumberField;

    if ( $(this).val() ) {
        var url = "/api/products/numbers";

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

            select.change();
            select.closest('.row').show();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }
        });

    } else {
        select.closest('.row').hide();
        select.empty();
        select.change();
    }
});

// Product Model
$productNumberField.change(function() {

    var select = $productModelField;

    if ( $(this).val() ) {

        var url = "/api/products/models";

        $.getJSON( url, {
            product_number: $(this).val()
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


            select.change();
            select.closest('.row').show();

            if ( default_value ) {
                select.removeAttr('data-init-val');
            }
        });

    } else {
        select.closest('.row').hide();
        select.empty();
        select.change();
    }


});

$productModelField.change(function() {

    var textField = $productConfiguartionField;

    var config_text = $('option:selected', this).attr('data-configuration');
    textField.text(config_text);

    if (config_text ) {
        textField.closest('.row').show();
    } else {
        textField.closest('.row').hide();
    }




});





reloadProductTypeField();


