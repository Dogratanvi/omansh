
    $(document).ready(function() {
        // Function to stop the video when the modal is closed
        $('#deleteLineItemModal').on('hidden.bs.modal', function() {
            // Find the iframe inside the modal body
            var iframe = $(this).find('iframe')[0];
            // Set the source attribute to an empty string to stop the video
            iframe.src = '';
        });
    });