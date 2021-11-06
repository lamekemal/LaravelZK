require('./bootstrap');
require('alpinejs');
require('jquery');

var countreponseid = 0;
  $( "#addreponse" ).on( "click", function() {
    $('#reponsemaster').append(
        '<div class="form-group"><label for="reponse">Réponse suggérer</label><input id="reponse'+countreponseid+'" aria-placeholder="reponseHelp" placeholder="Reponse aux choix" name="reponses['+countreponseid+'][reponse]"type="text" class="form-control" aria-describedby="reponseHelp"><input class="hidden" id="reponse_type" name="reponses['+countreponseid+'][reponse_type]" value="1" type="number" hidden></div>'
        );countreponseid++;
  });
