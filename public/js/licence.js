$(document).ready(function(){
    new Formatter(document.getElementById('siret'), {
        'pattern': '{{999}} {{999}} {{999}} {{99999}}'
    });

    $('#code_naf').css({
        'text-transform': 'uppercase'
    });
    new Formatter(document.getElementById('code_naf'), {
        'pattern': '{{9999}}{{a}}'
    });

    document.getElementById('numero_tva').value = 'FR';
    new Formatter(document.getElementById('numero_tva'), {
        'pattern': 'FR{{99}} {{999}} {{999}} {{999}}'
    });

    new Formatter(document.getElementById('telephone'), {
        'pattern': '{{99}}.{{99}}.{{99}}.{{99}}.{{99}}'
    });

    new Formatter(document.getElementById('code_postal'), {
        'pattern': '{{99999}}'
    });

    document.getElementById('pays').value = 'FRANCE';
    new Formatter(document.getElementById('pays'), {
        'pattern': 'FRANCE'
    });


});