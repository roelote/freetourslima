document.addEventListener('DOMContentLoaded', function() {
    // Inicializar Air Datepicker
    const calendarContainer = document.getElementById('calendar-inline');
    const calendarInput = document.getElementById('date-selected');
    const bookingForm = document.getElementById('bookingForm');
    
    if (calendarContainer && calendarInput) {
        const disableSundays = calendarContainer.dataset.disableSundays === 'true';
        new AirDatepicker(calendarContainer, {
            inline: true,
            minDate: new Date(),
            dateFormat: 'yyyy-MM-dd',
            onRenderCell: function({date, cellType}) {
                if (disableSundays && cellType === 'day' && date.getDay() === 0) {
                    return { disabled: true };
                }
            },
            locale: {
                days: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                daysShort: ['Dom', 'Lun', 'Mar', 'Mié', 'Jue', 'Vie', 'Sáb'],
                daysMin: ['Do', 'Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa'],
                months: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthsShort: ['Ene', 'Feb', 'Mar', 'Abr', 'May', 'Jun', 'Jul', 'Ago', 'Sep', 'Oct', 'Nov', 'Dic'],
                today: 'Hoy',
                clear: 'Limpiar',
                dateFormat: 'dd/MM/yyyy',
                timeFormat: 'HH:mm',
                firstDay: 1
            },
            onSelect: function({date, formattedDate, datepicker}) {
                // Actualizar el input con la fecha seleccionada en formato dd/mm/yyyy
                if (date) {
                    const day = String(date.getDate()).padStart(2, '0');
                    const month = String(date.getMonth() + 1).padStart(2, '0');
                    const year = date.getFullYear();
                    calendarInput.value = `${day}/${month}/${year}`;
                    // Remover mensaje de error si existe
                    calendarInput.setCustomValidity('');
                }
            }
        });
    }

    // Validar que se haya seleccionado una fecha antes de enviar el formulario
    if (bookingForm && calendarInput) {
        // Prevenir envío si no hay fecha seleccionada
        bookingForm.addEventListener('submit', function(e) {
            if (!calendarInput.value || calendarInput.value.trim() === '') {
                e.preventDefault();
                e.stopPropagation();
                
                const lang = document.documentElement.lang || 'es';
                const message = lang.includes('en') 
                    ? 'Please select a date from the calendar' 
                    : 'Selecciona una fecha';
                
                // Mostrar alerta
                alert(message);
                
                // Hacer scroll al calendario
                calendarContainer.scrollIntoView({ behavior: 'smooth', block: 'center' });
                
                return false;
            }
        });

        // Limpiar mensaje de validación cuando el usuario seleccione una fecha
        calendarInput.addEventListener('input', function() {
            this.setCustomValidity('');
        });

        calendarInput.addEventListener('change', function() {
            this.setCustomValidity('');
        });
    }
});
