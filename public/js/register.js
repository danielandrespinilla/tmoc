alert('hola');
$('#role').on('change', function () {
    var selectedRole = $(this).val();
    $('.cliente-field').toggle(selectedRole === 'cliente');
    $('.administrador-field').toggle(selectedRole === 'administrador');
});

$(document).ready(function () {
});


