function calcular() {
  let v1 = parseFloat(document.getElementById('v1').value);
  let v2 = parseFloat(document.getElementById('v2').value);
  let v3 = parseFloat(document.getElementById('v3').value);
  
  if (v1 && v2 && v3) {
    let resultado = (v2 * v3) / v1;
    document.getElementById('resultado').textContent = resultado.toFixed(2);
  } else {
    alert('Preencha todos os campos');
  }
}
