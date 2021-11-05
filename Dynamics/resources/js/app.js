require('./bootstrap');
require('alpinejs');
require('jquery');

var countreponseid = 0;
  $( "#addreponse" ).on( "click", function() {
    $('#reponsemaster').append(
        '<div class="form-group"><label for="reponse">Réponse suggérer</label><input id="reponse'+countreponseid+'" aria-placeholder="reponseHelp" placeholder="Reponse aux choix" name="reponses[][reponse]"type="text" class="form-control" aria-describedby="reponseHelp"></div>'
        );countreponseid++;
  });
