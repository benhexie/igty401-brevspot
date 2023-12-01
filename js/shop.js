$.ajax({
    url: "get_brands.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".brands").html(response);
    },
    error: function () {
        $(".brands").html("Error loading data.");
    }
});

console.log("fuck")


$.ajax({
    url: "get_categories.php",  // Replace with the path to your PHP file
    type: "GET",
    success: function (response) {
        // Assuming the response is plain text or HTML content
        $(".categories").html(response);
    },
    error: function () {
        $(".categories").html("Error loading data.");
    }
});


// $.ajax({
//     url: "get_drinks.php",  // Replace with the path to your PHP file
//     type: "GET",
//     success: function (response) {
//         // Assuming the response is plain text or HTML content
//         $(".drinks").html(response);
//     },
//     error: function () {
//         $(".drinks").html("Error loading data.");
//     }
// });


