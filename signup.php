<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
  <link href="/styles/index.css" rel="stylesheet">
  <link href="/styles/fonts.css" rel="stylesheet" type="text/css">
  <script src="./scripts/script.js" defer></script>
  <!--JAVASCRIPT BOOTSTRAP-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"
    crossorigin="anonymous"></script>

  <title>Welcome to ThriftHub</title>
</head>

<body>
  <section id="login">
    <div class="container d-flex justify-content-center pb-5 pb-5">
      <div class="row">
        <div class="col">
          <img class="logo pt-5" src="/resources/Logo.png">
          <p class="welcometext text-start">Hello! Let's Get to know each other.</p>
          <form>
            <small>
              <p class="email">First Name:</p>
            </small>
            <input type="text" id="e-inpt">
            <small>
              <p class="email">Last Name:</p>
            </small>
            <input type="text" id="e-inpt">
            <small>
              <p class="email">Date of Birth:</p>
            </small>
            <input type="text" id="e-inpt">
            <small>
              <p class="email">Email-Address:</p>
            </small>
            <input type="text" id="e-inpt">
            <small>
              <p class="email">Username:</p>
          </small>
          <input type="text" id="e-inpt">
            <small>
              <p class="passw">Password:</p>
            </small>
            <input type="password" id="p-inpt">
            <button class="btn-hover1 color-1" onclick="window.open('login.php')">Let's GO!</button>
          </form>
        </div>
      </div>
    </div>
  </section>
 
</body>

</html>