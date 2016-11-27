/**
 * Created by touko on 16-8-27.
 */

$(function() {
    $("#copy").on("click",
        function(){
            $("#result").attr("type", "text");
            var clipboard = new Clipboard("#copy");

            clipboard.on('success', function(e) {
                console.log(e);
                $("#copy").text("Success");
            });

            clipboard.on('error', function(e) {
                console.log(e);
                $("#copy").text("Failed");
            });

            setTimeout(function(){
                $("#result").val("");
                $("#result").attr("type", "password");
            },50)

        }

    )
});

$(function() {
    $("#show").on("click",
        function(){
            $("#result").attr("type", "text");

            setTimeout(function(){
                $("#result").val("");
                $("#result").attr("type", "password");
            },10000)

        }

    )
});

$(function() {
    $("#generate").on("click",
        function() {
            // Hide the result
            $("#result").attr("type", "password");
            // Change the info.
            $("#copy").text("Copy!");
            // Values initialize
            var check = false;
            var originPass = $("#origin-pass").val();
            var add1 = $("#add-1").val();
            var add2 = $("#add-2").val();
            var add3 = $("#add-3").val();
            var length = $("#length").val();

            // Check hasPunctuation and hasNumber
            if ($("#punctuation-label").hasClass("checked")){
                var hasPunctuation = true;
            }
            else{
                var hasPunctuation = false;
            }
            if ($("#number-label").hasClass("checked")){
                var hasNumber = true;
            }
            else{
                var hasNumber = false;
            }

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

                // Check length form
                if (length == "" || length > 32 || length <= 0){
                    check = false;
                    $("#length-div").removeClass("has-success");
                    $("#length-div").addClass("has-error");
                }
                else{
                    check = true;
                    $("#length-div").addClass("has-success");
                    $("#length-div").removeClass("has-error");
                }

            }

            // Get JSON
            if (check){
                $.getJSON(
                    'api/encrypt.php', {
                        originPass: originPass,
                        add1: add1,
                        add2: add2,
                        add3: add3,
                        length: length,
                        hasNumber: hasNumber,
                        hasPunctuation: hasPunctuation
                    },
                    function(json) {
                        $("#result").attr('value',json.result);
                    }
                );
            }

        }
    )
});



