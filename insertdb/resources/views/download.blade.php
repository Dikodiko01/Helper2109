@extends('layout-2.meta')

    @section('title-title') Download @endsection

    @section('content')

    <div class="section-22">
    <div class="sidenav">
      <a href="/notion">About</a>
      <a href="/download">Download</a>
      <!--<a href="/priceses">Product price</a>-->
    </div>

        <div class="container">
        <div class="wrapper">
           <div class="offer">
               <img src="./img/MicrosoftTeams-image%20(1).png" alt="">
                <h1 style="font-size: 60px; margin-top: 0;">Notion for iOS</h1>

                <div class="text">
                  <p style="font-size: 24px">Notes, tasks, knowledge base — <br>Notion is your team’s all-in-one <br>workspace on the go.</p>
                </div>

                <a href="https://apps.apple.com/us/app/notion-notes-docs-tasks/id1232780281" class="btn" style="margin-left: 110px">download</a>
           </div>
            <img src="./img/Iphone%20png.webp" alt="" width="620" height="620">

        </div>
      </div>
    </div>

    <div class="section-23">
        <div class="container">
        <div class="wrapper">

            <img src="./img/macbook.jpeg" alt="" width="590" height="390">

           <div class="offer">
               <img src="./img/MicrosoftTeams-image.png" alt="">
                <h1 style="font-size: 60px">Notion for Mac</h1>

                <div class="text">
                  <p style="font-size: 24px">Notes, tasks, knowledge base — <br>Notion is your team’s all-in-one <br> workspace on the go.</p>
                </div>

                <a href="https://apps.apple.com/us/app/notion-notes-docs-tasks/id1232780281" class="btn" style="margin-left: 110px; margin-bottom: 100px;">download</a>
           </div>

        </div>
      </div>
    </div>

    <div class="hr" style="margin-top: 100px">
        <hr class="horizontal">
    </div>

    <footer>
        <div class="footer">
            <div class="header footer">

                    <div class="header__section">

                        <div class="header__item headerLogo">
                            <p>IN</p>
                        </div>

                        <div class="header__item headerButton"><a href="index.html" style="font-weight: 900">Notion</a></div>
                        <div class="block-1">

                            <div class="header__item headerButton"><a href="#">Tools</a></div>

                            <div class="header__item headerButton"><a href="./download.html">Download</a></div>

                            <div class="header__item headerButton"><a href="prices.html">Product price</a></div>
                        </div>

                    </div>

                </div>
        </div>
    </footer>
@endsection
