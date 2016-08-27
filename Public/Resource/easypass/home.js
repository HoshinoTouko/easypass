/**
 * Created by touko on 16-8-27.
 */

$(function() {
    $("#generate").on("click",
        function() {

            var originPass = $("#origin-pass").val();
            var add1 = $("#add-1").val();
            var add2 = $("#add-2").val();
            var add3 = $("#add-3").val();

            $.getJSON(
                'api/test.php',
                {
                    originPass: originPass,
                    add1: add1,
                    add2: add2,
                    add3: add3
                },
                function(json)
                {

                }
            );
        }
    )
});