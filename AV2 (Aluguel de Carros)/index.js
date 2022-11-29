function inserirCarro() 
{   
  let nome = document.getElementById("nome").value;
  let tipo = document.getElementById("tipo").value;
  let ano = document.getElementById("ano").value;
  let cidade = document.getElementById("cidade").value;
  let xmlHttp = new XMLHttpRequest();

  xmlHttp.open("GET", "http://localhost/3DAW2022/12/inserirCarro.php?nome=" + nome +
    "&tipo=" + tipo + "&ano=" + ano,"&cidade=" + cidade);
  
    xmlHttp.send();

  location.reload();
}

function buscarCarros() 
{
    let nome = document.getElementById("nome").value;
    let cidade = document.getElementById("cidade").value;
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function () 
    {
        console.log("mudou status: " + this.readyState);
        if (this.readyState == 4 && this.status == 200) 
        {
            let obj = JSON.parse(this.responseText);

            document.getElementById("nomeAlt").value = obj.nome;
            document.getElementById("cidade").value = obj.cidade;
        
            let formAlt = document.getElementById("formBuscar");
            formAlt.style.display = "block";
        }
    }

    xmlHttp.open("GET", "http://localhost/3DAW2022/12/buscarCarro.php?nome=" + nome);
    xmlHttp.send();

}
       
function carregaCarros() 
{
    let xmlHttp = new XMLHttpRequest();
    xmlHttp.onreadystatechange = function() 
    {
        if (this.readyState == 4 && this.status == 200) 
        {
            let obj = JSON.parse(this.responseText);
            let x = 0;
              
            let valor = (obj[x].local).localeCompare("undefined");
            if(valor!=0)
            {
                for (x=0;x<obj.length;x++) 
                {
                    let linha = obj[x];
                    criarLinhaTabela(linha);
                }
            }
        }
      }
      xmlHttp.open("GET", "http://localhost/3DAW2022/12/ListarCarros.php");
      xmlHttp.send();
}

function criarLinhaTabela(linha) 
{
  let tabela = document.getElementById("tabela");
  let tr = document.createElement("tr");

  let tdcarro = document.createElement("td"); 
  textnode = document.createTextNode(linha.Carro);
  tdcarro.appendChild(textnode); 
  tr.appendChild(tdcarro);

  let tdtipo = document.createElement("td"); 
  textnode = document.createTextNode(linha.tipo);
  tdtipo.appendChild(textnode); 
  tr.appendChild(tdtipo); 

  let tdano = document.createElement("td");
  textnode = document.createTextNode(linha.ano);
  tdano.appendChild(textnode); 
  tr.appendChild(tdano);

  let tcidade = document.createElement("td");
  textnode = document.createTextNode(linha.ano);
  tdano.appendChild(textnode); 
  tr.appendChild(tcidade);

}
function AlugarCarros()
{
    let nome = document.getElementById("nome").value;
    let tipo = document.getElementById("cpf").value;
    let periodo = document.getElementById("periodo").value;
    let xmlHttp = new XMLHttpRequest();
  
    xmlHttp.open("GET", "http://localhost/3DAW2022/12/AlugarCarros.php?nome=" + nome +
    "&tipo=" + tipo + "&periodo=" + periodo);
    xmlHttp.send();
  
    location.reload();
}

