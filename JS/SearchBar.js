

const navbarMenu = document.getElementById("menu"),
    burgerMenu = document.getElementById("burger"),
    bgOverlay = document.querySelector(".overlay");
burgerMenu &&
    bgOverlay &&
    (burgerMenu.addEventListener("click", () => {
        navbarMenu.classList.add("is-active"), bgOverlay.classList.toggle("is-active");
    }),
    bgOverlay.addEventListener("click", () => {
        navbarMenu.classList.remove("is-active"), bgOverlay.classList.toggle("is-active");
    })),
    document.querySelectorAll(".menu-link").forEach((e) => {
        e.addEventListener("click", () => {
            navbarMenu.classList.remove("is-active"), bgOverlay.classList.remove("is-active");
        });
    });
const searchBlock = document.querySelector(".search-block"),
    searchToggle = document.querySelector(".search-toggle"),
    searchCancel = document.querySelector(".search-cancel");
searchToggle &&
    searchCancel &&
    (searchToggle.addEventListener("click", () => {
        searchBlock.classList.add("is-active");
    }),
    searchCancel.addEventListener("click", () => {
        searchBlock.classList.remove("is-active");
    }));
const searchInput = document.querySelector(".search-input"),
    searchResults = document.querySelector("#search-results"),
    files = [
        { name: "Anjar", url: "../Pages/Anjar.php" },
        { name: "Baalbek", url: "../Pages/Baalbek.php" },
        { name: "BeitEddine", url: "../Pages/BeitEddine.php" },
        { name: "Byblos", url: "../Pages/Byblos.php" },
        { name: "Kadisha", url: "../Pages/Kadisha.php" },
        { name: "Tyre", url: "../Pages/Tyre.php" },
        { name: "Busses", url: "../Pages/Buses.php" },
        { name: "Restaurant", url: "../Pages/Restaurants.php" },
        { name: "Transportation", url: "../Pages/Transportation.php" },
        { name: "Map", url: "../Pages/Lebanon.php" },
        { name: "Lebanon", url: "../Pages/Lebanon.php" },
    ];
function sanitizeText(e) {
    return e.replace(/&/g, "&amp;").replace(/</g, "&lt;").replace(/>/g, "&gt;").replace(/"/g, "&quot;").replace(/'/g, "&#x27;");
}
function sanitizeUrl(e) {
    let a = new URL(e, window.location.href);
    return a.href;
}
searchInput.addEventListener("input", function () {
    let e = searchInput.value.toLowerCase(),
        a = [];
    for (let r = 0; r < files.length; r++) {
        let s = files[r].name.toLowerCase();
        s.startsWith(e) && a.push(files[r]);
    }
    let t = "";
    for (let l = 0; l < a.length; l++) {
        let n = sanitizeUrl(a[l].url),
            c = sanitizeText(a[l].name);
        t += `<a href="${n}">${c}<br></a>`;
    }
    "" == e && (t = ""), (searchResults.innerHTML = t);
});
