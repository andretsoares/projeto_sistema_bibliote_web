
grecaptcha.ready(function() {
grecaptcha.execute('6Lcro40UAAAAADzZoI_enHgSheTunNCpDlUfa-XC', {action: 'homepage'})
.then(function(token) {
document.getElementById('g-recaptcha-response').value=token;
});
});

