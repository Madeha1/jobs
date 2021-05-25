$(document).ready(function() {
    setInterval(() => {
        $.ajax({
            url: "getAdsAjax.php",
            type: "POST",
            success: function(result) {
                ads = result;
                setInterval(() => {
                    var index = i++ % ads.length;
                    $("#adv").attr("src", ads[index].img);
                    $("#advHref").attr("href", ads[index].link);

                }, 5000); //5 seconds

            },
            dataType: "json"
        });
    }, 10000); //15 seconds
});
var i = 0;