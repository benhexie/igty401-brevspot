$.ajax({
    url: "get_my_drinks.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".products").html(response);
    },
    error: function () {
        $(".products").html("Error loading data.");
    }
});