/**
 * Created by touko on 16-8-27.
 */

$(function() {
    $("#generate").on("click",
        function() {
            // Values initialize
            var check = false;
            var originPass = $("#origin-pass").val();
            var add1 = $("#add-1").val();
            var add2 = $("#add-2").val();
            var add3 = $("#add-3").val();
            var length = $("#length").val();

            // Check originPass form
            if (originPass == ""){
                check = false;
                $("#origin-pass-div").removeClass("has-success");
                $("#origin-pass-div").addClass("has-error");
            }
            else{
                check = true;
                $("#origin-pass-div").addClass("has-success");
                $("#origin-pass-div").removeClass("has-error");
            }
            // Check length form
            if (length == ""){
                check = false;
                $("#length-div").removeClass("has-success");
                $("#length-div").addClass("has-error");
            }
            else{
                check = true;
                $("#length-div").addClass("has-success");
                $("#length-div").removeClass("has-error");
            }

            // Get JSON
            if (check){
                $.getJSON(
                    'api/test.php',
                    {
                        originPass: originPass,
                        add1: add1,
                        add2: add2,
                        add3: add3,
                        length: length
                    },
                    function(json)
                    {

                    }
                );
            }

        }
    )
});