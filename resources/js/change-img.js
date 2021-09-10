$(".list li a").hover( function() { // Changes the .image-holder's img src to the src defined in .list a's data attribute.
    var value=$(this).attr('data-src');
    $(".image-holder img").attr("src", value);
});