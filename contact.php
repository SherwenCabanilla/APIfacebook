<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
    crossorigin="anonymous" />
  <link rel="stylesheet" href="css/nav.css" />
  <link rel="stylesheet" href="css/contact.css" />
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <a class="navbar-brand ms-5 ps-5" href="#">Bnddvlpr</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarNav"
        aria-controls="navbarNav"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item me-5">
            <a class="nav-link active" aria-current="page" href="home.php">Home</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="about.php">About</a>
          </li>
          <li class="nav-item me-5">
            <a class="nav-link" href="work.php">Work</a>
          </li>
          <li class="nav-item me-5">
            <a
              class="nav-link"
              href="contact.php"
              tabindex="-1"
              aria-disabled="true">Contact</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://web.facebook.com/sherwen51"
              tabindex="-1"
              aria-disabled="true">
              <i style="font-size: 24px" class="fab">&#xf39e;</i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://x.com/purrrrrr09"
              tabindex="-1"
              aria-disabled="true">
              <i style="font-size: 24px" class="fab">&#xf099;</i>
            </a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link"
              href="https://www.instagram.com/_sheeer12/"
              tabindex="-1"
              aria-disabled="true">
              <i style="font-size: 24px" class="fab">&#xf16d;</i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    <div class="h1 d-flex justify-content-center align-items-center m-5 p-5">
      Contact
    </div>
    <div class="f container p-5">
      <div class="cons d-flex justify-content-around mt-5">
        <div>Katipunan purok 6, panabo city Davao Del Norte</div>
        <div>cabanillasherwen@gmail.com <br /><br />09913389722</div>
        <div class="">
          <a href="https://www.instagram.com/_sheeer12/">
            <i style="font-size: 24px" class="fab">&#xf16d;</i>
          </a>
          <a href="https://x.com/purrrrrr09">
            <i style="font-size: 24px" class="fab">&#xf099;</i></a>
          <a href="https://web.facebook.com/messages/e2ee/t/7917323798298930">
            <i style="font-size: 24px" class="fab">&#xf39e;</i></a>
        </div>
      </div>
      <div class="d-flex justify-content-center align-items-center mt-5 h3">
        You can also contact us by using this form:
      </div>
      <form action="">
        <div
          class="first d-flex justify-content-center gap-5 align-items-center mb-5">
          <div class="d-flex flex-column me-5">
            <label for="firstname">Firstname</label>
            <input class="wid" type="text" name="firstname" id="" />
          </div>
          <div class="d-flex flex-column">
            <label for="lastname">Lastname</label>
            <input class="wid" type="text" name="lastname" id="" />
          </div>
        </div>

        <div
          class="first d-flex justify-content-center gap-5 align-items-center">
          <div class="d-flex flex-column me-5">
            <label for="email">Email</label>
            <input class="wid" type="text" name="email" id="" />
          </div>
          <div class="d-flex flex-column">
            <label for="subject">Subject</label>
            <input class="wid" type="text" name="subject" id="" />
          </div>
        </div>
        <div
          class="d-flex justify-content-center align-items-center flex-column mt-5">
          <label for="message">Message</label><input class="message" type="text" />
        </div>
        <div
          class="d-flex justify-content-center align-items-center m-5 submit">
          <button class="btn btn-dark">Submit</button>
        </div>
      </form>
    </div>
  </div>

  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>