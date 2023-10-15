const uuid = document.getElementById('uuid');
const remote = document.getElementById('remote');
const monto = document.getElementById('monto');
const uuidv = uuid.value;
const remotev = remote.value;
const montov = monto.value;
const appid = 'app_id=' + 'a8993193-7642-4035-9a11-603f4bfd2e17' + '&';
const appsecret = 'app_secret=' + '3jCjUVktrs6joPXE3Rp7CUXoOZ3uiV1owqa7zzhUPc6qA3Veqa';
const consultar = 'https://qvapay.com/api/v1/';
const detallesfactura = '&' + 'amount='+ montov + '&' + 'description=Compra de Saldo Starcopy' + '&' + 'remote_id=1' + '&' + 'signed=1';
const uuid = '?';
const factura = consultar + 'create_invoice?' + appid + appsecret + detallesfactura;
const transaccion = consultar + 'transaction/' + uuid + appid + appsecret;

if (monto != "") {
    crearfactura(factura);
}

function crearfactura(url) {
    var proxyUrl = 'https://cors-anywhere.herokuapp.com/';
    fetch(url,
{    
    mode: 'no-cors', // no-cors, *cors, same-origin
    headers: {
      'Content-Type': 'application/json',
      'Access-Control-Allow-Origin': '*'
    },
}).then(response => response.json()).then(data => {
        console.log(data.results);
        irapagar(data.results);

    })
}

function irapagar(data) {
    data.forEach(parametro => {

        var { signedUrl } = parametro;
        window.location.href = signedUrl;
    })

}