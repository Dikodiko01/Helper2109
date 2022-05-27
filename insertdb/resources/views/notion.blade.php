@extends('layout-2.meta')

    @section('title-title') Notion @endsection

    @section('content')
    <section>

    <div class="section-1">
    <div class="sidenav">
      <a href="/notion">About</a>
      <a href="/download">Download</a>
      <!--<a href="/priceses">Product price</a>-->

    </div>


      <div class="container main">

        <div class="wrapper">
           <div class="offer">
             <div class="wrapper-222">
               <div class="typing-demo">
                   <h1 style="font-size: 60px" class="main-main-h1" style=" width="300p"">Notion for</h1>
                   <h1 class="main-h1" style="font-size: 60px">Student's</h1>
                 </div>
              </div>

                <div class="text">
                  <p style="font-size: 24px">Help woth time-managment and  <br>with communicate </p>
                </div>

                <a href="https://www.notion.so/signup" class="btn" target="_blank">Try Notion free</a>
           </div>
            <img src="img/PROJ%20PIC%202.png" alt="" width="530" height="300">

        </div>
      </div>
    </div>
    </section>



    <section class="about-2">
    <div class="container main">
        <div class="wrapper">

           <div class="offer">
               <h2>All in One Space</h2>

                <p class="about-1">When you see a clear goal <br> it will be easier to go to it.</p>
           </div>

            <img src="./img/dark.png" alt="" width="800" height="500">
        </div>
    </div>
    </section>

    <section class="about">
    <div class="container main">
        <div class="wrapper">

            <img src="img/about-222.png" alt="" width="800" height="500" style="margin-right: 80px">

            <div class="offer">

               <img src="./img/to-do.png" alt="" height="250" width="300">
                <h4 style="margin-top: 0">Monitoring lecture and practice attendance</h4>
                <p class="about-1">  This is very important to improve your academic performance!</p>
           </div>

        </div>
    </div>
    </section>




    <section class="about-3">
    <div class="container main">
        <div class="wrapper">

            <div class="offer">
               <h4>Very flexible</h4>
                <p class="about-1">You can create pages however you want. And the design is very beautiful and comfortable</p>
           </div>

            <img src="img/about-3.png" alt="" width="800" height="500">
        </div>
    </div>
    </section>


    <hr>


    <section class="try-to-day" style="margin-bottom: 70px">
       <div class="container main">
           <div class="try">
              <img src="./img/logo-last.jpeg" alt="" style="margin-left: 450px">
              <div class="text-footer">
                   <p class="try-text">Try it today</p>
                  <!-- <p>Get your whole team and files in one place</p> -->
                  <a href="https://www.notion.so/signup"><button class="btn-1">Try Notion free</button></a>
               </div>
        </div>
    </div>


    </section>


    <div class="hr">
        <hr class="horizontal">
    </div>


    <footer>
        <div class="footer">
            <div class="header">

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
