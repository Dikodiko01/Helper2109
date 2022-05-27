<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home page</title>
    <link href="/css/moonbase.css" rel="stylesheet" />
</head>
<body>

    <h1 class="title-123"> Random User Generator</h1>
    <div class="user-profile">
        <img id="avatar" src="https://randomuser.me/api/portraits/med/women/6.jpg" />
        <div id="fullname">andrea sørensen</div>
      <div id="username">
        goldendog885
      </div>
        <div class="description">
          <div>Email: <span id="email">andrea.sørensen@example.com</span></div>
          <div>City: <span id="city">nr åby</span></div>
      </div>
      <div class="footer-123">
        <button class="btn-345">Next User!</button>
     </div>
    </div>
    <script>
        const url =' https://randomuser.me/api/ ';

let avatar = document.getElementById('avatar');
let fullname = document.getElementById('fullname');
let username = document.getElementById('username');
let email = document.getElementById('email');
let city = document.getElementById('city');
let btn = document.getElementById('btn');

btn.addEventListener("click", function() {
  fetch(url)
    .then(handleErrors)
    .then(parseJSON)
    .then(updateProfile)
    .catch(printError)
});

function handleErrors (res){
  if(!res.ok){
    throw error(res.status);
  }
  console.log(res);
  return res;
}

function parseJSON (res){
  return res.json();
}

function updateProfile (profile){
  avatar.src = profile.results[0].picture.medium;
  fullname.innerHTML = profile.results[0].name.first +" "+profile.results[0].name.last;
  username.innerHTML = profile.results[0].login.username;
  email.innerHTML = profile.results[0].email;
  city.innerHTML = profile.results[0].location.city;
  return 1;
}

function printError (error){
  console.log(error);
}
    </script>




    <div align="center">
      <form action="{{ url('upload')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div style="padding: 10px">
          <label for="">Name</label>
          <input type="text" name="name">
        </div>

        <div style="padding: 10px">
          <label for="">Email</label>
          <input type="email" name="email">
        </div>

        <div style="padding: 10px">
          <label for="">Image</label>
          <input type="file" name="file">
        </div>

        <div style="padding: 10px">
          <input type="submit">
        </div>

        <div style="padding: 10px; background: green">
          <a href="/diko">back to form</a>
        </div>


      </form>

    </div>

</body>
</html>
