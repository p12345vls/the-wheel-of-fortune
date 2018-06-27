$(function () {
                $.ajaxSetup({
                    cache: false
                });
                var ajax_load = "<img id='startImage' src='img/giphy.gif' alt='loading...' />";

                $("#loadStart").click(function () {
                    $("#result").html(ajax_load);
                });
});

