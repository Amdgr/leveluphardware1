

const themaknop = document.getElementById("lightdark-mode-button");

if (localStorage.getItem("thema") === "licht") {
    document.body.classList.add("light-mode");
}

if (themaknop) {
    themaknop.addEventListener("click", function() {
        document.body.classList.toggle("light-mode");

        const lichtModusAan = document.body.classList.contains("light-mode");
        localStorage.setItem("thema", lichtModusAan ? "licht" : "donker");
    });
}