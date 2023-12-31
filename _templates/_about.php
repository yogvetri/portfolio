<?php
?>

<style>
  #sp1 {
    font-family: 'Teko', sans-serif;


  }
 .sp2{
  font-family: 'Teko', sans-seri;

 }

  .bad {
    background-color: #061321;

    border-width: 2px;
    border-color: #03A9F4;

  }

  .progress {
    height: 7px;
  }

  .progress-bar {
    border-top-right-radius: 40px !important;
    border-bottom-right-radius: 40px !important;
    -webkit-box-shadow: none !important;
    -moz-box-shadow: none !important;
    box-shadow: none !important;
  }

  .eh {
    border: none;
    height: 2px;
    background: linear-gradient(to right, #fb04ff 10%, #03A9F4 90%);
    border-radius: 5px;
    margin-top: -1px;
    width: 145px;

  }

  #hr1 {
   
    border-radius: 5px;
    margin-top: -9px;
  }

  #hrr1 {
    border: none;

    background: linear-gradient(to left, black 10%, black 90%);
    border-radius: 5px;
    margin-top: -1px;
  }

  @media only screen and (max-width: 767px) {
    #Dom {
      margin-top: 20px;
    }

    #hr2 {
      width: 150px;
      /* Adjust the width for small screens */
    }

    #hr3 {
      width: 200px;
      /* Adjust the width for small screens */
    }
  }


  #hr2 {
    border: none;
    height: 2px;
    background: linear-gradient(to right, #26D7FA 10%, gray 90%);
    border-radius: 5px;
    width: 250px;
  }

  #hr3 {
    border: none;
    height: 2px;
    background: linear-gradient(to right, #26D7FA 10%, gray 90%);
    border-radius: 5px;
    width: 330px;
  }

  /* .progress {
    
  } */

  .skill {
    color: white;
  }

  .progress-bar {
    background-color: " #001F3";
  }

  h2{
    color: white;
    margin-top: 40px;
    margin-bottom: 45px;
    
    
  }
  h5 {
    color: white;
    margin-top: 10px;
  }
</style>

<hr id="hr1">
<h2>About Me</h2>
<hr id="hr1">

<div class="container-fluid">

  <h3 class="skill"></h3>
  <hr id="hrr1">

  <div class="row mt-5">

    <div class="col-md ">

      <h4 class="lan">Programming Skills</h4>
      <hr id="hr2">

      <h5>C</h5>
      <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width: 58%"></div>
      </div>

      <h5>Python</h5>
      <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated " style="width: 70%"></div>
      </div>

      <h5>php</h5>
      <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 68%"></div>
      </div>

      <h5>html & css</h5>
      <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width: 80%"></div>
      </div>

      <h5>JavaScript</h5>
      <div class="progress" role="progressbar" aria-label="Danger striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width: 50%"></div>
      </div>

    </div>

    <div class=" col-md">

      <h4 id="Dom">Application Development</h4>
      <hr id="hr3">

      <h5>wep Appliaction</h5>
      <div class="progress" role="progressbar" aria-label="Default striped example" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 50%"></div>
      </div>

      <h5>Linux CLI Application</h5>
      <div class="progress" role="progressbar" aria-label="Success striped example" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped  progress-bar-animated" style="width: 38%"></div>
      </div>

      <h5>Sockets</h5>
      <div class="progress" role="progressbar" aria-label="Info striped example" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated " style="width: 10%"></div>
      </div>

      <h5> Customized Servers</h5>
      <div class="progress" role="progressbar" aria-label="Warning striped example" aria-valuenow="68" aria-valuemin="0" aria-valuemax="100">
        <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 18%"></div>
      </div>



    </div>

  </div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md mt-5">
        <h3>Education</h3>
        <hr class="eh">
        <div class="mt-2">
          <div class="bad badge  text-wrap rounded-pill border border-2" style="width: 6rem;">
            2023
          </div><span id="sp1"> &nbsp; Selfmade Ninja Academy </span>
          <div class="mt-3  ml-5">
            <h4>Defencive & Offencive</h4>
          </div>
          <div class="mt-1 ml-5"> Essential for software engineers, security professionals, and system administrators. Students will learn how to build full-stack web applications, work with legacy systems, develop and secure APIs, program advanced networking features using sockets, and automate tasks using Python on the command line.</div>
          <div  class="sp2 mt-1 ml-5"> &nbsp;I do various courses from time to time in SNA to understand and explore various practices of engineering and technology to keep myself updated in the field </div>
        </div>
        <div class="mt-2">
          <div class="bad badge  text-wrap rounded-pill border border-2" style="width: 6rem;">
            2020-2024
          </div><span id="sp1"> &nbsp; PABCET-Tiruchirappalli </span>
          <div class="mt-3  ml-5">
            <h4>B.TECH Information Technology</h4>
          </div>
          <div class="mt-1 ml-5">Embarking on this enriching collage journey, which not only equipped me with technical skills but also instilled in me a passion for continuous learning and innovation, has been transformative. The diverse experiences and opportunities provided by the program and the college have played a pivotal role in shaping my career trajectory in the field of IT.</div>

        </div>
        <div class="mt-4">
          <div class="bad badge  text-wrap rounded-pill border border-2" style="width: 6rem;">
            2019-2020
          </div><span id="sp1"> &nbsp; ST.JOSEPH.H.S.S,VENKIDAKULAM</span>
          <div class="mt-3  ml-5">
            <h4>Higher Secondary</h4>
          </div>
          <div class="mt-1 ml-5">
            <p>In a schooling environment where freedom and extra curricular is considered as equal as curricular and co-curricular activities, I was able to understand life.</p>
          </div>



        </div>
        <div class="mt-2"></div>
      </div>
      <div class=" col-md mt-5">
        <!-- <h3>Experience</h3> -->
        <!-- <hr class="eh"> -->
      </div>

    </div>

  </div>
</div>