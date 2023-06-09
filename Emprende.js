var nombre, correo, asunto, texto;
function funEnviar() {
    nombre = document.getElementById("nombre").value;
    correo = document.getElementById("correo").value;
    asunto = document.getElementById("asunto").value;
    texto = document.getElementById("tex").value;
    if (nombre == "" || correo == "" || asunto == "" || texto == "") {
        document.getElementById("alerta").style.backgroundColor = '#FFB266';
        document.getElementById("icon").innerHTML = '<i class="fa-solid fa-circle-exclamation"></i>';
        document.getElementById("alerTex").innerText = "Uno o más campos tienen un error. Por favor, revísalos e inténtalo de nuevo."
        document.getElementById("alerTex").style.font = '15px Arial, sans-serif';
        document.getElementById("alerta").style.color = '#FFFFFF';
    } else {
        document.getElementById("alerta").style.backgroundColor = '#4C9900';
        document.getElementById("icon").innerHTML = '<i class="fa-solid fa-check"></i>';
        document.getElementById("alerTex").innerText = "Gracias por tu mensaje. Ha sido enviado."
        document.getElementById("alerTex").style.font = '15px Arial, sans-serif';
        document.getElementById("alerta").style.color = '#FFFFFF';
    }
}
