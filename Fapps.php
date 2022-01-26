<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
 
    <title>Document</title>
    <link rel="stylesheet" href="css/fapps.css">
    <script src="https://kit.fontawesome.com/f634e3c3e4.js" crossorigin="anonymous"></script>
    
</head>

<body>


<header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Cyber Booster</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                      </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                  </li>
                  
                </ul>
                <button class="btn btn-success text-dark"  onclick="document.location='signin.php'">Sign In</button>
               
              </div>
            </div>
          </nav>
          
          
            <!-- <input  class="input-group-text" type="text" name="" id="myInput" placeholder="Enter app name here" onkeyup="searchFun()">
           -->
           
          
               
          
         
    
        
    </header>
    <div class="mb-3">
    <div class="ticker">
           
           <div class="news">
               <marquee class="news-content">
                  <a href="signin.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Click here to find more fake apps</button></a>
               </marquee>
           </div>
       </div>
            <h1>Search Fake Apps Here</h1>
            <input type="text" class="form-control" id="myInput" placeholder="Enter App Name Here   " onkeyup="searchFun()">
          </div>
    

    
    

      <div class="container table-responsive py-5"> 
        <table class="table table-bordered table-hover" id="myTable">
          <thead class="thead-dark">
            <tr>
              <th scope="col">Sr.no</th>
              <th scope="col">App Name</th>
              <th scope="col">SHA256</th>
              <th scope="col">Package Name</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">1</th>
              <td>Ultima Keyboard 3D Pro </td>
              <td>3abe3b8b1fcd9649fb990988705ab03d7377f6006691d4cd29af7e105fb8f22a</td>
              <td>org.ultimatekey.board</td>
            </tr>
            <tr>
              <th scope="row">2</th>
              <td>VideoMixer Editor Pro </td>
              <td>f11865b082890e17aa7c425be60bb3ab9609c1889fcd96f038207b079d5bc945 </td>
              <td>ga.vidieomi.xeredito</td>
            </tr>
            <tr>
              <th scope="row">3</th>
              <td>Battery Animation Charge 2021</td>
              <td>769cdc003356f62344ac36c34fbc0ce24809b574911690117028f8977b68874 </td>
              <td>de.bttranimch.arge</td>
            </tr>
             <tr>
              <th scope="row">4</th>
              <td>FX Animate Editor Pro</td>
              <td>42cacb7a356513af26f0e3621c672148c0988f14b01a2b98dec63b0f6d541ad1</td>
              <td>fr.animatedit.orpro</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Dynamic HD & 4K Wallpapers </td>
              <td>8bfad8e18bf285f644dbb0655b746fc5ad3bc365768ec561d19cb1ce4403cc65 </td>
              <td>da.nami.chdfourkwallp</td>
            </tr>
            <tr>
              <th scope="row">5</th>
              
            <td>RGB Neon HD Keyboard Background </td>
            <td>33d28d2bf74223e2ef86439c313952cfdc8743f28fd4d8db023ee4a0b5429b12 </td>
            <td>com.rgbneonhd.keyback</td>
            </tr>
            <tr>
              <th scope="row">6</th> 
<td>AppLock X FREE</td> 
<td>fa37bf52f1b2698e93dbca59a07f86d64acd6ea198fa6b8b77f5f479fed7de4a</td> <td>gr.applckx.free</td>
</tr>
<tr>
  <th scope="row">7</th> 
  <td>NewVision Camera </td>
  <td>1714a1739896fa34e0d6a0cb8c4e167a95fe89528aaed9b8b9696693c4cc60a3</td> 
  <td>fr.newvisio.ncam</td>
</tr>
<tr>
  <th scope="row">8</th> 
<td>Ultra Camera HD </td><td>ee59c0a1421d556a4e687b5e79b7c58d26d2cc0c891a52d8a04d5c1b0c669d70</td>
<td>de.ultracamera.hdcamera</td>
</tr>
<tr>
  <th scope="row">9</th>  
<td>Wi-Fi Password Unlock </td>
<td>f55e9cc9c31cb4a3fbfce670172153ade071ce0c6de9eac23cc9f17f8608af01</td> 
<td>de.wifipassword.unlockpass</td>
</tr>
<tr>
  <th scope="row">10</th> 
<td>Wi-Fi Around: All Wi-Fi and Hotspots Unlock</td> <td>daf5e922912d557647e24b8da89b5e8c81d2da433fa710aecdfc1de78d7b66d3</td>
<td>de.wifiaround.hotsposts</td> 
</tr>
<tr>
  <th scope="row">11</th> 
  

<td>Colorful Call Screen & Phone Flash</td> <td>d8c88b3b1e4bfc69aeb35c73720921deadd6780d3d51c131f3d05d4a13d1f413</td> <td>com.clrfulcall.scrphflash</td></tr>
<tr>
  <th scope="row">12</th>
<td>Waterdrinker Reminder </td><td>1a1d2ea5609f41426e2d71adb384fcc8c40abc990d1ecd32d3151610d6a417a3</td> <td>de.waterdrinker.reminder</td></tr>
<tr>
  <th scope="row">13</th>
<td>GT Sports Racing Online </td><td>e9ccd311513ac554a2f5e18311d9e61cdcecf2f9bf36a1b1aaaea5224fffedaa</td> <td>gt.sportraci.ngonline</td></tr>
<tr>
  <th scope="row">14</th>
<td>Magic Fonts and Keyboard 2021 </td><td>f55fda38bc0cb6ef71b45acfdabb4c54a4021cfc4d88fdeebcb4419c09e999e6</td> <td>de.magicfonts.keyboard</td></tr>
<tr>
  <th scope="row">15</th>
<td>All Language Photo and Voice Translator AI </td><td>29b4ef38002f593abde1f663f3683157572a0bca23cb563c9eca8d14e1df6ed8</td><td> de.alllanguagephoto.voicetranslatorai</td></tr>
<tr>
  

          </tbody>
        </table>

        <div class="news">
            <marquee class="news-content">
               <a href="signin.php"><button type="button" class="btn btn-secondary btn-lg btn-block">Click here to find more fake apps</button></a>
            </marquee>
        </div>
        </div>
        </div>
        <script>
        const searchFun = () =>{
          let filter= document.getElementById('myInput').value.toUpperCase();
          let myTable = document.getElementById('myTable');
          let tr = myTable.getElementsByTagName('tr');
          for(var i=0;i<tr.length;i++)
          {
            let td = tr[i].getElementsByTagName('td')[0];
            if(td){
              let textvlaue = td.textContent || td.innerHTML;
              if(textvlaue.toUpperCase().indexOf(filter) > -1 )
              {
                tr[i].style.display="";

              }
              else
              {
                tr[i].style.display = "none";
              }
            }
          }
        }
        </script>


        

   


    
    </body>
</html>