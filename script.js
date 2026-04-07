const tabela = document.getElementById("tabela");
const totalEl = document.getElementById("total");

let total = 0;

dados.forEach(item => {
    const tr = document.createElement("tr");

    if (item.tipo === "gasto") {
        total -= item.valor;
    } else {
        total += item.valor;
    }

    tr.innerHTML = `
        <td>${item.descricao}</td>
        <td>R$ ${item.valor}</td>
        <td>${item.tipo}</td>
        <td>${item.categoria}</td>
        <td>${item.autor}</td>
    `;

    tabela.appendChild(tr);
});

totalEl.innerText = total.toFixed(2);
