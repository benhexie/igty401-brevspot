$.ajax({
    url: "get_cart.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".cart_container").html(response);
    },
    error: function () {
        $(".cart_container").html("Error loading data.");
    }
});