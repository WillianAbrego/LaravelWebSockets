<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">

  <title>Simple Chat </title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script @vite(['resources/js/bootstrap.js', 'resources/js/app.js', 'public/js/chat.js'])></script>

  <link rel="stylesheet" href="/css/app.css">
  <link rel="stylesheet" href="/css/chat.css">
</head>

<body>
  <section class="msger">
    <header class="msger-header">
      <div class="msger-header-title">
        <i class="fas fa-comment-alt"></i>
        <span class="chatWith"></span>
        <span class="typing" style="display: none;"> está escribiendo</span>
      </div>
      <div class="msger-header-options">
        <span class="chatStatus offline">
          <i class="fas fa-globe"></i>
        </span>
      </div>
    </header>

    <div class="msger-chat"></div>

    <form method="POST" action=" {{ route('message.sent') }}" class="msger-inputarea">
      @csrf

      <input type="text" class="msger-input" oninput="sendTypingEvent()" placeholder="Enter your message...">
      <button type="submit" class="msger-send-btn">Send</button>

    </form>

  </section>

  <script src='https://use.fontawesome.com/releases/v5.0.13/js/all.js'></script>


</body>

</html>
