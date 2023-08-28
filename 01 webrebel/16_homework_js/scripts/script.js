$(function() {
    $('#form').on('submit', function(e) {
        e.preventDefault();
        const name = $('#name').val();
        const email = $('#email').val();
        const password = $('#password').val();
        const confirmPassword = $('#confirm-password').val();
        const errors = [];

        
        if (!name || !email || !password || ! confirmPassword) {
            errors.push('Každé políčko je povinné');
        }

        if (email.indexOf('@') < 0 || email.indexOf('.') < 0 ) {
            errors.push('Email musí obsahovať znaky @ a .')
        }
        
        if (password !== confirmPassword) {
            errors.push('Heslá sa musia zhodovať')
        }

        $('.errors-container').children().remove();

        const errorsContainer = $('<ul/>').appendTo('.errors-container')
        
        errors.forEach(error => {
            errorsContainer.append('<li>' + error + '</li>');

        });
        
    })
});
