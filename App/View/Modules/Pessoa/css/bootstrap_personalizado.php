<style>
    
.btn-personalizado {
    color: #fff;
    background-color: rgb(13, 73, 129);
    border-color: black;
}

.btn-personalizado:hover {
    color: #fff;
    background-color: rgb(41, 109, 173);
    border-color: black;
}

.btn-check:focus + .btn-personalizado, .btn-personalizado:focus {
    color: #fff;
    background-color: rgb(13, 73, 129);
    border-color: black;
    box-shadow: 0 0 0 0.25rem black;
}

.btn-check:checked + .btn-personalizado, .btn-check:active + .btn-personalizado, .btn-personalizado:active, .btn-personalizado.active, .show > .btn-personalizado.dropdown-toggle {
    color: #fff;
    background-color: rgb(13, 73, 129);
    border-color: black;
}

.btn-check:checked + .btn-personalizado:focus, .btn-check:active + .btn-personalizado:focus, .btn-personalizado:active:focus, .btn-personalizado.active:focus, .show > .btn-personalizado.dropdown-toggle:focus {
    box-shadow: 0 0 0 0.25rem black;
}

.btn-personalizado:disabled, .btn-personalizado.disabled {
    color: #fff;
    background-color: rgb(13, 73, 129);
    border-color: black;
}
  
</style>