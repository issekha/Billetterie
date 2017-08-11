jQuery(document).ready(function ($) {

	$('.datepicker').datepicker({
		startDate: '0',
		
		autoclose:"true",
		todayBtn: "linked",
    	language: "fr",
		todayHighlight: true
    	
	});
	
	$(':checkbox').change(function() {
            var id = 'msg_' + $(this).attr('id');
            if ($(this).is(':checked')) {
                $(this).after('<p id="' + id + '"><i>Un justificatif (carte d\'étudiant, carte militaire etc...) vous sera demandé, le jour de votre visite.</i></p>')
            } else if (!($(this).is(':checked'))) {
                $('#' + id).remove();
            }
        });
	
	 $('#la_ticketingbundle_order_nbTickets').change(function(e) {
            e.preventDefault();

            var nbTickets = $(this).val();
		 	
            $('#la_ticketingbundle_ticketsList_tickets').empty();
            var ticketsList = $('#la_ticketingbundle_ticketsList_tickets');

            for (var i = 1; i <= nbTickets; i++) {
				
              var newWidget = ticketsList.attr('data-prototype');
      
              newWidget = newWidget.replace(/__name__/g, 'Ticket-' + i);
              newWidget = newWidget.replace(/label__/, '');

              var newLi = $('<li></li>').html(newWidget);
              newLi.append('<hr class="ticket-separation"/>');
              newLi.appendTo(ticketsList);
            }

            // Info for the reduced price
            $('.reduced-info').change(function() {
              if ($(this).is(':checked')) {
                $('#modal-price').modal();
              };
            });
        });

	
})