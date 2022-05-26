const { default: Axios } = require('axios');

require('./bootstrap');

// button delete
window.confirmDelete = function confirmDelete() {
    let button = confirm("Are you sure you want to delete?");
    if (button) {
        return true;
    }else {
        return false;
    }
}


const btnSlug = document.getElementById('btn-slugger');
if(btnSlug) {
    btnSlug.addEventListener('click', function () {
        const elementSlug = document.querySelector('#slug');
        const elementTitle = document.querySelector('#title').value;
        console.log('ciao');

        Axios.post('/admin/actionSlug', {data: elementTitle}).then(function (response) {
            elementSlug.value = response.data.slug;
        });
        console.log('ciao');
    });
}