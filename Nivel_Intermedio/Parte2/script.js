function validarFormulario() {
    var username = document.getElementById('username').value;
    var password = document.getElementById('password').value;

    if (username.trim() === '' || password.trim() === '') {
        alert('Por favor, completa todos los campos.');
        return false; // Evita que el formulario se envíe
    }

    return true; // Permite que el formulario se envíe
}