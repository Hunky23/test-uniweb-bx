document.addEventListener('DOMContentLoaded', function () {
    let personalForm = document.querySelector('.js-personal-form');
    personalForm.addEventListener('submit', function (event) {
        event.preventDefault();

        let personalFormValues = new FormData(personalForm);
        personalFormValues = Object.fromEntries(personalFormValues.entries());

        let personalResult =  document.querySelector('.js-personal-table-result');

        let request = BX.ajax.runComponentAction('hunky:personal', 'ajaxRequest', {
            mode: 'class',
            signedParameters: '',
            data: {
                query: personalFormValues
            }
        });
        request.then(function (response) {
            if (response.status === 'success') {
                personalResult.innerHTML = response.data;
            }
        });
    });
});