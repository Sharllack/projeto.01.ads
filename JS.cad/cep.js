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
            } else if (req.status === 404) {
                document.getElementById('idcep').value = "CEP inválido.";
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
    v.value = v.value.replace(/(\d{5})(\d)/, '$1-$2')
}