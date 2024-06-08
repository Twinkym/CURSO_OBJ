function showTextArea(value) {
    const textarea = document.getElementById("text2");
    const generar = document.getElementById("generar");
    if (value == "1") {
        textarea.style.display = "block";
        generar.style.display = "block";
    }
    else {
        textarea.style.display = "none";
        generar.style.display = "none";
    }
}


function generar() {
    const prompt = document.getElementById("text2").value;
    const url = `php/generador.php?prompt=${encodeURIComponent(prompt)}`;
    window.open(url, 'ChatGPT', 'width=800,height=600');
}
