const loginForm = document.getElementById("login-form");
const errorMessage = document.getElementById("error-message");

loginForm.addEventListener("submit", function (e) {
    e.preventDefault();

    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;

    // Simulando verificação de login
    if (username === "usuario" && password === "senha") {
        errorMessage.textContent = "";
        showActivitiesPage();
    } else {
        errorMessage.textContent = "|Usuário|senha| estão incorretos ou não existem. Fazer o favor de concertar";
    }
});

function showActivitiesPage() {

    loginForm.style.display = "none";

    document.body.classList.add("activities-bg");

    // Cria as missões
    const activities = [
        "Comprar pasta de dente  -- medalha de bronze",
        "Estudar Assemble  -- medalha de bronze",
        "Fazer exercícios de radioatividade  -- medalha de prata",
        "Assistir Barbie  -- medalha de prata",
        "Resumir a Biblia em 30 linhas  -- medalha de prata",
        "Virar o rei dos piratas  -- medalha de ouro",
        "Traficar mel pro Zé Comeia  -- medaalha de mel",
        "fazer o TCC -- medalha de papel",
        "Derrotar os 7 pecados capitais  -- medalha de ouro",

    ];

    // Lista de missões
    const listContainer = document.createElement("div");
    listContainer.classList.add("list-container");
    document.body.appendChild(listContainer);

    const listHeader = document.createElement("h2");
    listHeader.textContent = "Missões semanais:";
    listContainer.appendChild(listHeader);

    const ul = document.createElement("ul");
    activities.forEach((activity) => {
        const li = document.createElement("li");
        li.textContent = activity;
        ul.appendChild(li);
    });
    listContainer.appendChild(ul);
}
