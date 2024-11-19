


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

// header
document.addEventListener('DOMContentLoaded', function () {
    const header = document.querySelector('header');

    window.addEventListener('scroll', function () {
        if (window.scrollY > 50) { // Adjust scroll threshold as needed
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
    });
});


