document.addEventListener('DOMContentLoaded', function() {
    var sidenav = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(
        sidenav
    );

    var select = document.querySelectorAll('select');
    var SelectInstances = M.FormSelect.init(
        select
    );

    var toast = document.getElementById('toastMsg');
    if(toast){
        M.toast({html: "Evento criado com sucesso!"});
    }
});

$(document).ready(function(){
    $('.dropdown-trigger').dropdown();
});