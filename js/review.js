$.ajax({
    url: "get_reviews.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".reviews").html(response);
    },
    error: function () {
        $(".reviews").html("Error loading data.");
    }
});