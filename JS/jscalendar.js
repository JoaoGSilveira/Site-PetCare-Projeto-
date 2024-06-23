document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
      headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'dayGridMonth,timeGridWeek,timeGridDay,listMonth'
      },
      locale: 'pt-br',
      initialDate: '2024-01-12',
      navLinks: true,
      businessHours: true,
      editable: true,
      selectable: true,
      events: "listar_evento.php"});

    calendar.render();
});