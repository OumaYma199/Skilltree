// Code JavaScript pour ouvrir la fenêtre modale correspondante
$(document).ready(function() {
    $('.skill-name').click(function(event) {
        event.preventDefault(); // Empêche le comportement par défaut du lien

        var skillId = $(this).parent().data('skill-id');
        var skillName = $(this).text();
        var skillDescription = $(this).attr('title');
        var skillLevel = ''; // Récupérez le niveau de compétence correspondant à l'aide de l'ID de compétence

        // Mettez à jour les éléments de la fenêtre modale avec les informations de la compétence
        $('#ModalInfos-' + skillId).find('.modal-title').text(skillName);
        $('#ModalInfos-' + skillId).find('.modal-description').text(skillDescription);
        $('#ModalInfos-' + skillId).find('.modal-level').text(skillLevel);

        // Affiche la fenêtre modale
        $('#ModalInfos-' + skillId).modal('show');


    });
});
