var deleteAction = (function() {

    var deleteButtonClicked = function( event ) {

        event.preventDefault();

        var url = $(this).attr('href');

        if ( confirm("Confirm to delete ?") ){
            doDeleteAction( url );
        }

    };

    var doDeleteAction = function( url ) {

        $.ajax({
            url: url,
            type: 'DELETE',
            // dataType: 'json',
            success: function (data) {
                window.location.reload(true);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
                alert("Error: " + xhr.responseText);
            }
        });
    };

    var bindFunctions = function() {
        $('.delete-link').on('click', deleteButtonClicked);
    }

    var init = function() {
        bindFunctions();
    };

    return {
        init: init
    };
})();

deleteAction.init();