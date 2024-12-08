document.getElementById("alertButton").addEventListener("click", function() {
    alert("Você clicou no botão!");
    document.getElementById("feedback").textContent = "Obrigado pelo clique!";
    document.getElementById("feedback").classList.remove("hidden");
});

document.getElementById("toggleInfo").addEventListener("click", function() {
    const info = document.getElementById("info");
    if (info.classList.contains("hidden")) {
        info.classList.remove("hidden");
        this.textContent = "Esconder informações";
    } else {
        info.classList.add("hidden");
        this.textContent = "Mostrar mais informações";
    }
});
