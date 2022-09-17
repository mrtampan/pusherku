<!DOCTYPE html>
<head>
  <title>Pusher Test</title>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
  <script src="https://js.pusher.com/7.2/pusher.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/howler/2.2.3/howler.min.js" integrity="sha512-6+YN/9o9BWrk6wSfGxQGpt3EUK6XeHi6yeHV+TYD2GR0Sj/cggRpXr1BrAQf0as6XslxomMUxXp2vIl+fv0QRA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</head>
<body>
  <h1>Pusher Test</h1>
  <div class="">
  <img src="https://cdn-icons-png.flaticon.com/512/1827/1827272.png" width="50px"><span class="badge bg-danger">
  <i id="laknat">0</i>
    </span>
  </div>

  <div class="">
  <img src="https://cdn-icons-png.flaticon.com/512/1827/1827272.png" width="50px"><span class="badge bg-danger">
  <i id="laknat2">0</i>
    </span>
  </div>
 
  <p>
    Try publishing an event to channel <code>my-channel</code>
    with event name <code>my-event</code>.
  </p>
</body>


<script>

// Enable pusher logging - don't include this in production
Pusher.logToConsole = true;


var pusher = new Pusher('c53b8b3ddd47cb5b60c8', {
  cluster: 'ap1'
});

var audioku = new Howl({
  src: ['bell.mp3']
});




var channel = pusher.subscribe('my-channel');
channel.bind('my-event', function(data) {
  // alert(JSON.stringify(data));
  audioku.play();
  
  document.getElementById('laknat').innerHTML = JSON.stringify(data);
  
});

var channel2 = pusher.subscribe('my-channel2');
channel2.bind('my-event2', function(data2) {
  // alert(JSON.stringify(data));

  document.getElementById('laknat2').innerHTML = JSON.stringify(data2);
  
});
</script>


