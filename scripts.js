'use strict'

(function() {
    const burger = document.querySelector('.burger');
    const menu = document.querySelector('.menu__list-mobile');
    
    burger.addEventListener('click', () => {
        burger.classList.toggle('burger__active');
        menu.classList.toggle('menu__list-mobile-active');
    })
}());

document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('form-header');
    form.addEventListener('submit', sendForm);

    async function sendForm(e) {
        e.preventDefault();

        let formData = new FormData(form);

        let response = await fetch('mail.php', {
            method: 'POST',
            body: formData
        });
        if (response.ok) {
            let result = await response.json();
            alert(result.message);
            formPreview.innerHTML = '';
            form.reset();
        } else {

        }
        //let error = formValidate();
    }

    function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll('._req');

        for (let index = 0; index < formReq.length; index++) {
            const input = formReq[index];
            removeFormError(input);

            if(input.classList.contains('_email')) {
                if(emailTest(input)) {
                    formAddError(input);
                    error++;
                }
            } else {
                if (input.value === '') {
                    formAddError(input);
                    error++;
                }
            }
        }
    }

    function addFormError(input) {
        input.parentElement.classList.add('_error');
        input.classList.add('_error');
    }

    function removeFormError(input) {
        input.parentElement.classList.remove('_error');
        input.classList.remove('_error');
    }

    function emailTest(input) {
        return !/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,8})+$/.test(input.value);
    }
});