document.addEventListener('DOMContentLoaded', function() {
    // Inicializar Air Datepicker
    const calendarContainer = document.getElementById('calendar-inline');
    const calendarInput = document.getElementById('date-selected');
    
    if (calendarContainer && calendarInput) {
        new AirDatepicker(calendarContainer, {
            inline: true,
            minDate: new Date(),
            dateFormat: 'yyyy-MM-dd',
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
                }
            }
        });
    }
});
