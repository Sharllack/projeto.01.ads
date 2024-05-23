function buscaCEP() {
    let cep = document.getElementById('idcep').value;
    if (cep != "") {
        let url = "https://brasilapi.com.br/api/cep/v1/" + cep;
        let req = new XMLHttpRequest();
        req.open("GET", url);
        req.send();

        //tratar a resposta da requisição
        req.onload = function() {
            if (req.status === 200) {
                let endereco = JSON.parse(req.response);
                document.getElementById("idrua").value = endereco.street;
                document.getElementById("idcdd").value = endereco.city;
                document.getElementById('idest').value = endereco.state;
                document.getElementById('idbai').value = endereco.neighborhood;
                document.getElementById('rescep').innerHTML = "Tudo certo!";
                document.getElementById('rescep').style.color = "rgb(0, 255, 42)";
                document.getElementById('rescep').style.fontWeight = "bold";
                document.getElementById('rescep').style.float = "right";
                document.getElementById('idcep').style.border = "1.5px solid rgb(0, 255, 42)"
            } else if (req.status === 404) {
                document.getElementById('rescep').innerHTML = "CEP inválido!";
                document.getElementById('rescep').style.color = "red";
                document.getElementById('rescep').style.fontWeight = "bold";
                document.getElementById('rescep').style.float = "right";
                document.getElementById('idcep').style.border = "1.5px solid red"
            } else {
                alert('Erro ao fazer a requisição.')
            }
        }
    }
}

if (navigator.onLine == true) {
window.onload = function() {
    let idcep = document.getElementById('idcep');
    idcep.addEventListener("blur", buscaCEP);
    
    let rua = document.getElementById('idrua');
    rua.setAttribute("readonly", true);
    let cdd = document.getElementById('idcdd');
    cdd.setAttribute("readonly", true);
    let est = document.getElementById('idest');
    est.setAttribute("readonly", true);
    let bai = document.getElementById('idbai');
    bai.setAttribute("readonly", true);
}
}

function formataCep(v){
    v.value = v.value.replace(/(\d{5})(\d{3})/, '$1-$2')
}