$(document).ready(function() {
    let clicks = 0;
    $('#btnadd').click(function() {
        clicks++;
        $('#qty').html(clicks);
    });
    $('#btnmin').click(function() {
        clicks--;
        $('#qty').html(clicks);
    });
    $('#btnLogin').click(function() {
        alert("Oh tidak bisa login dong! hahah")
    });
})
