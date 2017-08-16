jQuery(document).ready(function ($) {

	$('.datepicker').datepicker({
		startDate: '0',
		
		autoclose:"true",
		todayBtn: "linked",
    	language: "fr",
		todayHighlight: true,
		daysOfWeekDisabled: "0,2",
		datesDisabled:[
			'01/01/yy',
			'01/05/yy',
			'08/05/yy',
			'17/07/yy',
			'15/08/yy',
			'01/11/yy',
			'11/11/yy',
			'25/12/yy'
		]
    	
	});
	
		
	$(':checkbox').change(function() {
            var id = 'msg_' + $(this).attr('id');
            if ($(this).is(':checked')) {
                $(this).after('<p id="' + id + '"><i>Un justificatif (carte d\'étudiant, carte militaire etc...) vous sera demandé, le jour de votre visite.</i></p>')
            } else if (!($(this).is(':checked'))) {
                $('#' + id).remove();
            }
        });
	
	
	var $form = $('#payment-form'); // On récupère le formulaire
	$form.submit(function (e) {
	  e.preventDefault();
	  $form.find('button').prop('disabled', true); // On désactive le bouton submit
	  Stripe.card.createToken({
		number: $('.card-number').val(),
		cvc: $('.card-cvc').val(),
		exp_month: $('.card-expiry-month').val(),
		exp_year: $('.card-expiry-year').val()
	  }, 
	  function (status, response) {
		if (response.error) { 
		  // On affiche les erreurs
		  $form.find('.payment-errors').text(response.error.message);
		  $form.find('button').prop('disabled', false); // On réactive le bouton
		} else { // Le token a bien été créé
		  var token = response.id; // On récupère le token
		  // On crée un champs cachée qui contiendra notre token
		  $form.append($('<input type="hidden" name="stripeToken" />').val(token));
		  $form.get(0).submit(); // On soumet le formulaire
    }
  });
});

})