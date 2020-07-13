$(document).ready(function() {
    var clicks = 0;
    $("#btnadd").click(function() {
        clicks++;
        $('#qty').html(clicks);
    });
    $("#btnmin").click(function() {
        clicks--;
        $('#qty').html(clicks);
    });

})