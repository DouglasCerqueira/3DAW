function carregarSelecao() {

    let nome = document.getElementById("nome").value;
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            let obj = JSON.parse(this.responseText);
            let x = 0;

            let valor = (obj[x].local).localeCompare("undefined");
            if (valor != 0) 
            {
                for (x = 0; x < obj.length; x++) 
                {
                    let linha = obj[x];
                    criarLinhaTabela(linha);
                }
            }
        }
    }
    
    xmlHttp.open("GET", "http://localhost/3DAW/copa/calendarioSelecao.php?nome=" + nome);
    xmlHttp.send();

}

function criarLinhaTabela(linha) 
{
    let tabela = document.getElementById("tabela");
    let tr = document.createElement("tr");

    let tdData = document.createElement("td");
    textnode = document.createTextNode(linha.data);
    tdData.appendChild(textnode);
    tr.appendChild(tdData);

    let tdHora = document.createElement("td");
    textnode = document.createTextNode(linha.hora);
    tdHora.appendChild(textnode);
    tr.appendChild(tdHora);

    let tdLocal = document.createElement("td");
    textnode = document.createTextNode(linha.local);
    tdLocal.appendChild(textnode);
    tr.appendChild(tdLocal);

    let tdSelA = document.createElement("td");
    textnode = document.createTextNode(linha.selecao1);
    tdSelA.appendChild(textnode);
    tr.appendChild(tdSelA);

    let tdGolA = document.createElement("td");
    textnode = document.createTextNode(linha.gols1);
    tdGolA.appendChild(textnode);
    tr.appendChild(tdGolA);

    let tdSelB = document.createElement("td");
    textnode = document.createTextNode(linha.selecao2);
    tdSelB.appendChild(textnode);
    tr.appendChild(tdSelB);

    let tdGolB = document.createElement("td");
    textnode = document.createTextNode(linha.gols2);
    tdGolB.appendChild(textnode);
    tr.appendChild(tdGolB);

    tabela.appendChild(tr);
    tabela.style.display = "table";
    let input = document.getElementById("nome");
    input.setAttribute("onclick", "location.reload();");
}
