import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();



let Swal = require('sweetalert2');

const Toast = Swal.mixin({
    toast: true,
    swal: true,
    position: "center",
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true,
    didOpen: (toast) => {
        toast.onmouseenter = Swal.stopTimer;
        toast.onmouseleave = Swal.resumeTimer;
    }
});
document.addEventListener('livewire:load', ()=>{
    Livewire.on('toast', (type, message)=>{
        Toast.fire({
            icon: type,
            title: message
        });
    })
})











