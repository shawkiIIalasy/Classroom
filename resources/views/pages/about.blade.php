@extends('layouts.home')
@section('css')
<link href="{{ asset('css/framework.css') }}" rel="stylesheet">
<link href="{{ asset('css/about-us.css') }}" rel="stylesheet">

<script src="{{asset('js/jquery-1.9.0.min.js')}}" type="text/javascript"></script>
<script src="{{asset('js/jquery-ui-1.10.0.tabs.min.js')}}" type="text/javascript"></script>
@endsection
@section('content')
 




<div class="wrapper row2">
  <div id="container" class="clear">
    <div id="about-us" class="clear">

      <div id="about-intro" class="clear">
        <div class="one_half first"><img class="imgholder" src="{{asset('images/team-member.gif')}}" width="460px;" height="600px" alt="" /></div>
        <div class="one_half">
          <h2>Eng.Shawki Alasy</h2>
          <hr>
          <p>Web Developer, who developed a number of projects .Experienced in web development, databases, and enhancing web page speed. Currently studying machine learning and AI.</p>
        </div>
      </div>
      <!-- ####################################################################################################### -->
      <div id="statements" class="clear">
      
        <!-- #### -->
        <div id="skillset" class="one_half">
          <h2>Web Development Skills!</h2>
          <hr>
          <ul>
            <li class="size_1"><strong>Html - 99%</strong></li>
            <!--<li class="size_25"><strong>Text Here - 25%</strong></li>-->
            <li class="size_2"><strong>Css - 99%</strong></li>
            <!--<li class="size_35"><strong>Text Here - 35%</strong></li>-->
            <li class="size_3"><strong>Java Script - 70%</strong></li>
            <!--<li class="size_45"><strong>Text Here - 45%</strong></li>-->
            <li class="size_4"><strong>Bootstrap - 70%</strong></li>
            <!--<li class="size_55"><strong>Text Here - 55%</strong></li>-->
            <li class="size_5"><strong>PHP - 85%</strong></li>
            <!--<li class="size_65"><strong>Text Here - 65%</strong></li>-->
            <li class="size_6"><strong>FrameWork Php larvel - 99%</strong></li>
            <!--<li class="size_75"><strong>Text Here - 75%</strong></li>-->
            <li class="size_7"><strong>C++ - 80%</strong></li>
            <!--<li class="size_85"><strong>Text Here - 85%</strong></li>-->
            <li class="size_8"><strong>jquery - 60%</strong></li>
            <!--<li class="size_95"><strong>Text Here - 95%</strong></li>-->
            <li class="size_9"><strong>C# - 40%</strong></li>
          </ul>
        </div>
      </div>
<br>
      <div id="team">
        <h1>Components Team</h1>
        <hr>
        <ul class="clear">
          <li class="one_third first">
            <div class="figure"><img src="{{asset('images/team-member.gif')}}" width="200px;" height="150px" alt="" />
              <div class="figcaption">
                <p class="team_name">Zead Alnasha</p>
                <p class="team_title">Programmar && Designer</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
                <ul>
                  <li><a href="#"><img src="{{asset('images/social/social-icon.png')}}" alt="" /></a></li>
                  <li><a href="#"><img src="{{asset('images/social/social-icon1.png')}}" alt="" /></a></li>
                  <li><a href="#"><img src="{{asset('images/social/social-icon2.png')}}" alt="" /></a></li>
                  <li><a href="#"><img src="{{asset('images/social/social-icon3.png')}}" alt="" /></a></li>
                  <li><a href="#"><img src="{{asset('images/social/social-icon4.png')}}" alt="" /></a></li>
                </ul>
              </div>
            </div>

         <li class="one_third">
            <div class="figure"><img src="{{asset('images/zead.jpg')}}" width="200px;" height="150px" alt="" />
              <div class="figcaption">
                <p class="team_name">Shawki Alasy</p>
                <p class="team_title">Eng && Programmer && Devloper</p>
                <p class="team_description">Vestassapede et donec ut est liberos sus et eget sed eget. Quisqueta habitur augue magnisl magna phas ellus sagit titor ant curabi turpis.</p>
                <ul>
                  <li><a href="https://www.facebook.com/shawki.alase"><img src="{{asset('images/social/social-icon.png')}}" alt="" /></a></li>
                  <li><a href="https://twitter.com/ShawkiAlasy"><img src="{{asset('images/social/social-icon1.png')}}" alt="" /></a></li>
                  <li><a href="https://plus.google.com/u/0/116666021899626531106"><img src="{{asset('images/social/social-icon2.png')}}" alt="" /></a></li>
                  <li><a href="https://www.linkedin.com/in/shawki-alasy-62485a15a/"><img src="{{asset('images/social/social-icon3.png')}}" alt="" /></a></li>
                  <li><a href="https://www.instagram.com/shawki_alasy/"><img src="{{asset('images/social/social-icon4.png')}}" alt="" /></a></li>
                </ul>
              </div>
            </div>
          </li>
        </ul>
      </div>
      <!-- ####################################################################################################### -->
    </div>
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
    <!-- ####################################################################################################### -->
  </div>
</div>
@endsection