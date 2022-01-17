const blogger = document.querySelector("#blogger");
const menu = document.querySelector(".menu");
const analisis = document.querySelector("#anal");
const blog = document.querySelector("#blogg");
if (window.innerWidth > 600) {
    blogger.addEventListener("mouseover", function() {
        if (document.querySelector(".replegar")) {
            menu.classList.remove("replegar");
        }
        if (menu.getAttribute("flag") == "1") {
            menu.style.height = "79.563px";
            menu.setAttribute("flag", "0");
        } else {
            menu.classList.add("mostrar");
        }
    });
    blogger.addEventListener("mouseleave", function() {
        if (menu.style) {
            menu.removeAttribute("style");
        }
        menu.classList.remove("mostrar");
        menu.classList.add("replegar");
    });
    menu.addEventListener("mouseover", function() {
        menu.classList.remove("replegar");
        menu.style.height = "79.563px";
        menu.setAttribute("flag", "1");
    });
    menu.addEventListener("mouseleave", function() {
        menu.removeAttribute("style");
        menu.classList.add("replegar");
        setTimeout(() => {
            menu.setAttribute("flag", "0");
        }, 250);
    });
} else if (window.innerWidth < 600) {
    blogger.addEventListener("click", function() {
        if (menu.getAttribute("flag") == "0") {
            menu.classList.add("mostrar");
            menu.classList.add("borde");
            if (document.querySelector(".replegar")) {
                menu.classList.remove("replegar");
            }
            menu.setAttribute("flag", "1");
        } else if (menu.getAttribute("flag") == "1") {
            menu.classList.remove("mostrar");
            menu.classList.remove("borde");
            menu.classList.add("replegar");
            menu.setAttribute("flag", "0");
        }
        // menu.classList.toggle("mostrar");
        // menu.classList.toggle("borde");
        // menu.classList.toggle("replegar");
    });
    analisis.addEventListener("click", function() {
        menu.classList.add("replegar");
        menu.classList.remove("mostrar");
        menu.classList.remove("borde");
        menu.setAttribute("flag", "0");
        // menu.classList.toggle("mostrar");
        // menu.classList.toggle("borde");
        // menu.classList.toggle("replegar");
    });
    blog.addEventListener("click", function() {
        menu.classList.add("replegar");
        menu.classList.remove("mostrar");
        menu.classList.remove("borde");
        menu.setAttribute("flag", "0");
        // menu.classList.toggle("mostrar");
        // menu.classList.toggle("borde");
        // menu.classList.toggle("replegar");
    });
}