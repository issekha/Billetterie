    $( function() {

    $.datepicker.regional['fr'] = {
    closeText: 'Fermer',
    prevText: '&#x3c;Préc',
    nextText: 'Suiv&#x3e;',
    currentText: 'Aujourd\'hui',
    monthNames: ['Janvier','Fevrier','Mars','Avril','Mai','Juin',
    'Juillet','Aout','Septembre','Octobre','Novembre','Decembre'],
    monthNamesShort: ['Jan','Fev','Mar','Avr','Mai','Jun',
    'Jul','Aou','Sep','Oct','Nov','Dec'],
    dayNames: ['Dimanche','Lundi','Mardi','Mercredi','Jeudi','Vendredi','Samedi'],
    dayNamesShort: ['Dim','Lun','Mar','Mer','Jeu','Ven','Sam'],
    dayNamesMin: ['Di','Lu','Ma','Me','Je','Ve','Sa'],
    weekHeader: 'Sm',
    dateFormat: 'dd/mm/yy',
    firstDay: 1,
    isRTL: false,
    showMonthAfterYear: false,
    yearSuffix: '',
    numberOfMonths: 1,
    showButtonPanel: true
    };
    $.datepicker.setDefaults($.datepicker.regional['fr']);
        //var dateJour = new Date();


          

          $( ".datepicker" ).datepicker({

          dateFormat: 'dd/mm/yy',

          beforeShowDay: function (date, inst) {
              var today = new Date();

              today = Date.parse(today.getMonth()+1+'/'+today.getDate()+'/'+today.getFullYear());

              var selDate = Date.parse(date);

              if (date.getDay() == 0 || date.getDay() == 2 || date.getMonth() == 11 && date.getDate() == 25 || date.getMonth() == 10 && date.getDate() == 1 || date.getMonth() == 4 && date.getDate() == 1 || selDate < today) { // La semaine commence à 0 = Dimanche
                  $('.datepicker').val('');
                  $(inst).datepicker('show');
                  return [false, ''];
              } 
              else {
                  return [true, ''];
              }

            }
        });

        

        
    });