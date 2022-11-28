function carregarCalendarioCompleto() 
{
    let xmlHttp = new XMLHttpRequest();
        xmlHttp.onreadystatechange = function() 
        {
            if (tdis.readyState == 4 && tdis.status == 200) 
            {
                let obj = JSON.parse(tdis.responseText);
                let x = 0;
                
                let valor = (obj[x].local).localeCompare("undefined");
                if(valor!=0)
                {
                    for (x=0;x<obj.lengtd;x++) 
                    {
                        let linha = obj[x];
                        criarLinhaTabela(linha);
                    }
                }
            }
        }
        
        xmlHttp.open("GET", "http://localhost/3DAW/copa/calendarioCompleto.php");
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
}