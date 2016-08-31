window.addEventListener("load", function() {

	var square = document.getElementsByClassName("board__square");
    var darkSquare = document.getElementsByClassName("board__square--dark");

    for (i = 0; i < square.length; i++) {
        square[i].addEventListener("click", function() {

            square[0].style.display = "none";
            darkSquare[0].style.display = "block";

            var stay = new XMLHttpRequest();

        params.addEventListener("loadstart", function() {

            document.body.style.cursor = "wait";

        });

        params.addEventListener("load", function(e) {

            document.body.style.cursor = "default";
            alert("Done");

        });

        params.open("get", "game.php");
        params.send();

        });

    }

});