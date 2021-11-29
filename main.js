const btn_segundo_sabados = document.querySelector('#aplicar-segundo');

btn_segundo_sabados.addEventListener('click', function(){
    if (confirm("Este formulario es para los estudiantes que finalizaron 1er año y se graduaron correctamente. ¿Deseas continuar?")) {
        window.location.href = 'https://forms.gle/9qUSCZgt92rQF2Mz9';
    } else {
        
    }
});