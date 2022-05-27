<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title-title')</title>
    <link href="/css/moonbase.css" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/5a270ca97d.js" crossorigin="anonymous"></script>
</head>
<body>
  <nav>
      <div class="header">

          <div class="header__section">

               <div class="header__item headerButton"><a href="/notion"><img src="/img/wanloveLogo.jpeg" alt="" height="60" width="140"></a></div>
              <div class="block-1">

                  <div class="header__item headerButton"><a href="/notion">Notion</a></div>

                  <div class="header__item headerButton"><a href="/tools">Helper/Tools</a></div>

                  <div class="header__item headerButton"><a href="/community">Сommunity</a></div>

                  <div class="header__item headerButton"><a href="/posts">Posts</a></div>
              </div>

          </div>
          <div class="header__section">
              <div class="header__item headerButton"><a href="/register">Register</a></div>
              <div class="header__item headerButton"><a href="/login">Login</a></div>
          </div>

      </div>

      <div class="hr">
          <hr class="horizontal">
      </div>
      </nav>

  @yield('content')



</body>
</html>
