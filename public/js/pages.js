


$(document).on("click", ".btn-block", function() {
    var itemid = $(this).attr('data-item');
    $("#lineitem").attr("src", itemid)
});

// Pagination on video
$(document).ready(function() {

    $(document).on('click', '.page-link', function(event) {
        event.preventDefault();
        var page = $(this).attr('href').split('page=')[1];
        fetch_data(page);
    });

});

