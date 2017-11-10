
  <header>
   <nav class="navbar navbar-default navbar-fixed-top" data-offset-top="80" data-spy="affix">
    <div class="container">

      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#top-navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <a class="navbar-brand" href="/english"><img src="images/logo.png" alt="Fukuyama Transporting" width="170px" style="width:176px;"></a>
     
      </div>
      
      <style>
        #top-navbar ul {
          padding: 0;
          margin: 0;
          list-style: none;
          background-color: #fff;
        }

        #top-navbar{
          margin-top: 10px;
        }

        li {
          /*float: left;*/
          position: relative;
          /*width: 10em;*/
        }

        li ul {
          display: none;
          position: absolute; 
          top: 1em;
          left: 0;
        }

        li > ul {
          top: auto;
          left: auto;
        }

        li:hover ul { display: block; }
        li:hover ul{ display: block; }
        li:hover ul, li.over ul{ display: block; }
      </style>
      <script>
        startList = function() {
        if (document.all && document.getElementById) {
          navRoot = document.getElementById("nav");
          for (i=0; i;){
          if (node.nodeName=="LI") {
            node.onmouseover=function() {
              this.className+=" over";
            }
            node.onmouseout=function() {
              this.className=this.className.replace(" over", "");
            }
          }
        }
        }
      }
      window.onload=startList;
      </script>
      <div class="collapse navbar-collapse" id="top-navbar">
        <ul class="nav navbar-nav navbar-right mt-10">
          <li class="dropdown" id="dropdown-1"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Company Overview<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="about">About Us</a></li>
              <li><a href="ourmission">Our Mission</a></li>
              <li><a href="services">Services</a></li>
              <li><a href="contact">Contact Us</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Business Operations<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="transportationsystem">Transportation System</a></li>
              <li><a href="distrubutioncenters">Distribution Network</a></li>
              <li><a href="salesoffice">Sales Network</a></li>
              <li><a href="iso">ISO</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">CSR<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="csractivities">Activities Overview</a></li>
              <li><a href="codeofconduct">Code of Conduct</a></li>
              <li><a href="enviromental">Enviromental Measures</a></li>
              <li><a href="csrsociety">Relating to Society</a></li>
              <li><a href="csrsafety">Safety Measures</a></li>
              <li><a href="trafficsafety">Traffic Safety Education</a></li>
            </ul>
          </li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Investor Relations<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="profile">Company Profile</a></li>
              <li><a href="financeinfo">Information To Shareholders</a></li>
              <li><a href="groupcompanies">Group Companies</a></li>
              <li><a href="financereview">FY 2016 Review</a></li>
              <li><a href="thirdmidterm">Third Mid-Term</a></li>
            </ul>
          </li>
          <li><a href="/">“ú–{Œê</a></li>
        </ul>
      </div>
      
    </div>
  </nav>
 

  </header>