
$(".has_acc").click(()=>{
    $(".signup").css("display", "none");
    $(".login").css("display", "flex");
})



$(".not_has_acc").click(()=>{
    $(".login").css("display", "none");
    $(".signup").css("display", "flex");
})