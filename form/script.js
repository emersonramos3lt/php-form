const button = document.getElementById("toggleTheme");

button.addEventListener("click", function() {

    if(document.body.classList.contains("dark")) {
        lightMode();
    }

    else {
        darkMode();
    }

    function darkMode() {
        document.body.classList.add("dark");
        document.classList.remove("light");
    }

    function lightMode() {
        document.body.classList.add("light");
        document.body.classList.remove("dark");
    }

});