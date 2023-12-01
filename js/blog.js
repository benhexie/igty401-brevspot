$.ajax({
    url: "get_blog.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".stories").html(response);
    },
    error: function () {
        $(".stories").html("Error loading data.");
    }
});


$.ajax({
    url: "get_land.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".land").html(response);
    },
    error: function () {
        $(".land").html("Error loading data.");
    }
});