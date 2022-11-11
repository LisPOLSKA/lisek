const switchButton = document.querySelector("header #upa");
let theme = localStorage.getItem("theme");
var myModal = new bootstrap.Modal(document.getElementById('akreg'), {
    keyboard: false
})

switchButton.addEventListener("click", () => {
    if (theme === "dark") {
        document.querySelector("body").classList.remove("dark");
        document.querySelector("body").classList.add("light");
        document.querySelector("header nav").classList.add("bg-primary");
        document.querySelector("header nav").classList.remove("bg-dark");
        theme = "light";
    } else {
        document.querySelector("body").classList.remove("light");
        document.querySelector("body").classList.add("dark");
        document.querySelector("header nav").classList.add("bg-dark");
        document.querySelector("header nav").classList.remove("bg-primary");
        theme = "dark";
    }

    localStorage.setItem("theme", theme);
});

if (theme === "dark") {
    document.querySelector("body").classList.add("dark");
    document.querySelector("body").classList.remove("light");
    document.querySelector("header nav").classList.add("bg-dark");
    document.querySelector("header nav").classList.remove("bg-primary");
}

if (theme === "light") {
    document.querySelector("body").classList.add("light");
    document.querySelector("body").classList.remove("dark");
    document.querySelector("header nav").classList.add("bg-primary");
    document.querySelector("header nav").classList.remove("bg-dark");
}

let akreg = localStorage.getItem("akreg");

if (akreg == "true") {
}
else {
    myModal.show();
}
