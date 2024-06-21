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
                document.getElementById('labcep').innerHTML = "CEP";
                document.getElementById('labcep').style.color = "rgb(0, 255, 42)";
                document.getElementById('idcep').style.border = "1.5px solid rgb(0, 255, 42)";
                // Retornar true para indicar que o CEP é válido
                return true;
            } else if (req.status === 404) {
                document.getElementById("idrua").value = "";
                document.getElementById("idcdd").value = "";
                document.getElementById('idest').value = "";
                document.getElementById('idbai').value = "";
                document.getElementById('idnum').value = "";
                document.getElementById('idcomp').value = "";
                let num = document.getElementById('idnum');
                num.setAttribute("readonly", true);
                let comp = document.getElementById('idcomp');
                comp.setAttribute("readonly", true);
                document.getElementById('labcep').innerHTML = "CEP inválido!";
                document.getElementById('labcep').style.color = "red";
                document.getElementById('idcep').style.border = "1.5px solid red";
                // Retornar false para indicar que o CEP é inválido
                return false;
            } else {
                alert('Erro ao fazer a requisição.');
                // Em caso de erro na requisição, retornar false
                return false;
            }
        }
    } else {
        // Retornar false se o campo CEP estiver vazio
        return false;
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