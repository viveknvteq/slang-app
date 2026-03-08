import './bootstrap';

// MOBILE MENU TOGGLE

const btn = document.getElementById("menuBtn");
const menu = document.getElementById("mobileMenu");

if (btn && menu) {
    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
        menu.classList.toggle("flex");
    });
}


/* -------------------------
   SEARCH AUTOCOMPLETE
--------------------------*/

const input = document.getElementById("searchInput");
const results = document.getElementById("results");

const data = ["lit", "sus", "goat", "vibe", "flex", "no cap"];

if (input && results) {

    input.addEventListener("input", () => {

        const value = input.value.toLowerCase();
        results.innerHTML = "";

        if (value === "") return;

        const filtered = data.filter(item =>
            item.includes(value)
        );

        filtered.forEach(item => {

            results.innerHTML += `
                    <p class="p-3 border-b border-white/10 hover:bg-white/10 cursor-pointer">
                        ${item}
                    </p>`;

        });

    });

}


/* -------------------------
   TOAST MESSAGE
--------------------------*/

function showToast(message) {

    const toast = document.getElementById("toast");

    toast.innerText = message;
    toast.classList.remove("hidden");

    setTimeout(() => {
        toast.classList.add("hidden");
    }, 3000);

}


/* -------------------------
   AUTO WELCOME TOAST
--------------------------*/

const messages = [
    "Welcome to SlangDict 🚀",
    "Discover trending slang 🔥",
    "Learn internet language 😎",
    "Start exploring new slang ✨"
];

setTimeout(() => {
    showToast(messages[Math.floor(Math.random() * messages.length)])
}, 1000);

