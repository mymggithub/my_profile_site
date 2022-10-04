var font_size = 5;
var c_arr = [];
var ctx_arr = [];
var drops = [];
var str_arr = "";
$(".matrix").each(function(index, el) {
    c_arr[index] = $(this)[0];
    ctx_arr[index] = c_arr[index].getContext("2d");
    str_arr = $(c_arr[index]).text().split("");
});

matrix_resize_init();
$( window ).resize(function() {
    matrix_resize_init();
});

function matrix_resize_init(argument) {
    $(".matrix").each(function(index, el) {
        c_arr[index].height = $(c_arr[index]).parent().height()+20;
        c_arr[index].width = $(c_arr[index]).parent().width();
        var columns = c_arr[index].width/font_size;
        drops[index] = [];
        for(var x = 0; x < columns; x++)
            drops[index][x] = 1;
    });
}

function draw() {
    for (var i = 0; i < ctx_arr.length; i++) {
        ctx_arr[i].fillStyle = "rgba(0, 0, 0, 0.05)";
        ctx_arr[i].fillRect(0, 0, c_arr[i].width, c_arr[i].height);
        ctx_arr[i].fillStyle = "#42ecff";
        ctx_arr[i].font = font_size + "px arial";
        for(var j = 0; j < drops[i].length; j++) {
            var text = str_arr[Math.floor(Math.random()*str_arr.length)];
            ctx_arr[i].fillText(text, j*font_size, drops[i][j]*font_size);
            if(drops[i][j]*font_size > c_arr[i].height && Math.random() > 0.975)
                drops[i][j] = 0;

            drops[i][j]++;
        }
    }
}

setInterval(draw, 33);