<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Material Design for Bootstrap</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap"
    />
    <!-- MDB ESSENTIAL -->
    <link rel="stylesheet" href="{{ asset('mdbootstrap/css/mdb.min.css') }}" />
    <!-- MDB PLUGINS -->
    <link rel="stylesheet" href="{{ asset('mdbootstrap/plugins/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('mdbootstrap/plugins/css/calendar.min.css') }}" />
    <!-- Custom styles -->
    <style></style>
  </head>

  <body>
    <!-- Start your project here-->
    <div class="container">
      <div class="calendar" data-mdb-calendar-init id="calendar"></div>
    </div>
    <!-- End your project here-->
  </body>

  <!-- MDB ESSENTIAL -->
  <script type="text/javascript" src="{{ asset('mdbootstrap/js/mdb.umd.min.js') }}"></script>
  <!-- MDB PLUGINS -->
  <script type="text/javascript" src="{{ asset('mdbootstrap/plugins/js/all.min.js') }}"></script>
  <!-- Custom scripts -->
  <script type="text/javascript">

const events = [
  {
    summary: 'JS Conference',
    start: {
      date: Calendar.dayjs().format('DD/MM/YYYY'),
    },
    end: {
      date: Calendar.dayjs().format('DD/MM/YYYY'),
    },
    color: {
      background: '#cfe0fc',
      foreground: '#0a47a9',
    },
  },
  {
    summary: 'Vue Meetup',
    start: {
      date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
    },
    end: {
      date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
    },
    color: {
      background: '#ebcdfe',
      foreground: '#6e02b1',
    },
  },
  {
    summary: 'Angular Meetup',
    description: 'Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur',
    start: {
      date: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().subtract(3, 'day').format('DD/MM/YYYY') + ' 10:00',
    },
    end: {
      date: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().add(3, 'day').format('DD/MM/YYYY') + ' 14:00',
    },
    color: {
      background: '#c7f5d9',
      foreground: '#0b4121',
    },
  },
  {
    summary: 'React Meetup',
    start: {
      date: Calendar.dayjs().add(5, 'day').format('DD/MM/YYYY'),
    },
    end: {
      date: Calendar.dayjs().add(8, 'day').format('DD/MM/YYYY'),
    },
    color: {
      background: '#fdd8de',
      foreground: '#790619',
    },
  },
  {
    summary: 'Meeting',
    start: {
      date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 8:00',
    },
    end: {
      date: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().add(1, 'day').format('DD/MM/YYYY') + ' 12:00',
    },
    color: {
      background: '#cfe0fc',
      foreground: '#0a47a9',
    },
  },
  {
    summary: 'Call',
    start: {
      date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 11:00',
    },
    end: {
      date: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY'),
      dateTime: Calendar.dayjs().add(2, 'day').format('DD/MM/YYYY') + ' 14:00',
    },
    color: {
      background: '#292929',
      foreground: '#f5f5f5',
    },
  }
  ];

  const calendarElement = document.getElementById('calendar');
  const calendarInstance = Calendar.getInstance(calendarElement);
  calendarInstance.addEvents(events);
  </script>
</html>
