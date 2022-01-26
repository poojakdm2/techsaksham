<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

    

//  <!-- <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Welcome</title>
//     <style>
//         body
//             background-color: grey;
//             color:white;
            
        
//     </style>
// </head>
// <body>
    
    
//     <a href="logout.php">Logout</a>
// </body>
// </html> -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    
 
    <title>Document</title>
    <link rel="stylesheet" href="css/welcome.css">
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
                    <a class="nav-link" href="fapps.php">Our Services</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="blog.php">Blog</a>
                  </li>
                  
                </ul>
                <button class="btn btn-success text-dark"  onclick="document.location='logout.php'">Log Out</button>
                
               
              </div>
            </div>
          </nav>
          
          
            <!-- <input  class="input-group-text" type="text" name="" id="myInput" placeholder="Enter app name here" onkeyup="searchFun()">
           -->
           
          
               
          
         
    
        
    </header>
    
    <div class="mb-3">
    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
        
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
  <th scope="row">16</th>
<td>Crime City: Revenge </td><td>4c2b6e18516e0a7fd9ebdecc0c9f99c8dfe47d4ffc118bb7c92cd7d4bea31379 </td><td>de.crimecity.revengecity</td></tr>
<tr>
  <th scope="row">17</th>
<td>Reface Ultra </td><td>ad2cbfd3770a8568667a8837c6e64dc649f81964383c50517e90ef2f0ea38b35</td> <td>de.ultrareface.appreface</td></tr>
<tr>
  <th scope="row">18</th>
<td>Projector HD/AR Video Editor</td> <td>b6e5a539c0217b84a3e8cc275704933f2b20e6acbe93bc6592b54d42d4f3ec4d </td><td>de.projectorhdar.videoeditor</td></tr>
<tr>
  <th scope="row">19</th>
<td>LivePhoto Animator </td><td>1c89222baf62ec791134e15c0c2eb8fd96282adc0a056136e8ba3b095ebf64f3</td> <td>org.livephoto.animatorlive</td></tr>
<tr>
  <th scope="row">20</th>
<td>Ludo Masterpiece Online </td><td>45ef09e209fa8f696fec81db65ca6c1bfce369b1b25c448f81e4c3af5639d6d1</td> <td>org.ludomasterpiece.online</td></tr>
<tr>
  <th scope="row">21</th>
<td>Mobile Scanner Pro: PDF Scanner App, Scan to PDF </td><td>08d5adcc5fbd7cc228e534858c906562e64295d9ebc5e7117fc2de7d32a22ef1</td> <td>org.mobilescanner.pro</td>
</tr>
<tr>
  <th scope="row">22</th>
<td>Magic Mix Cut - Super Video Editor </td><td>fb0d5a4491275b7c23b46c8289d743dc2fed2406a0cb47e5bbe7e78d728361cc</td> <td>org.magicmixcut.supervideo</td>
</tr>
<tr>
  <th scope="row">23</th>
<td>Future Scanner FREE 2021 </td><td>2f0a8000ddba72fd5df322da4ff374de0ac1c04edda9fdd14f8d93a4cea9430a</td> <td>com.futuresca.nnerfree</td>
</tr>
<tr>
  <th scope="row">24</th>
<td>Pro Video Downloader 2021 </td><td>27cd56fedc2bd501ac2e24ab336ea558aa765effd7b8fcc85196371fcd23d696</td> <td>de.provideodow.nloa</td>
</tr>
<tr>
  <th scope="row">25</th>
<td>AmazeTranslate</td> <td>c4245da8d83b49a0287c977dccc8e86ca6e6e6349b4a23dc8d7951ab4105a1e1</td> <td>de.amaz.etranslate</td>
</tr>
<tr>
  <th scope="row">26</th>
  <td>Football Masters 2021 </td><td>bba94aad235e552af0682ed37028a0d4d5982823691add6d6222131349ded96d</td> <td>fr.footbal.lmast</td>
  </tr>
<tr>
  <th scope="row">27</th>
  <td>New Body Shape Editor</td> <td>4e100e20589f69fd54a26092986d6ac3c53eead2c43623738a0cfa2c7a8fd87e</td> <td>de.newbody.shapeeditor</td>
  </tr>
<tr>
  <th scope="row">28</th>
  <td>Call Voice Recording 2.0 </td><td>9ad0e06770258cc0a25471ae97958f0bccb15505b80ad36e5e4aa9b9a0569c88 </td><td>ca.llvoicereco.rdingvertwo</td>
  </tr>
<tr>
  <th scope="row">29</th>
  <td>Pro Tuber Ad Blocker for Video </td><td>d92b5ae82dd3c23229a7ef3de777055f9770c1fbfad02fe43c5e451bbbb88933</td><td> de.protuberad.blockerforad</td>
  </tr>
<tr>
  <th scope="row">30</th>
  <td>Fitness Ultimate 2021 </td><td>2c57b99435bd8e43e7e6af69a70d656d12df21adff41e41618bc2f62d401824c</td><td> org.ultimatefit.ness</td>
  </tr>
<tr>
  <th scope="row">31</th>

<td>Wallpaper XYZ Pro</td>
<td> 8ed1f383b9dffeea3df2b829ef8323fdaea48c0bd9c3713b43b925d33a80b517 </td>
<td>de.wallpaper.xyzwallpapers</td>
</tr>
<tr>
  <th scope="row">32</th>
  <td>PhotoLab Pro +</td><td> c2e4edf68449ccee839a8c521b010a425111f8b41a4adc375dbcdfe55684eabc</td> <td>org.photola.bproplus</td>
</tr><tr>
  <th scope="row">33</th><td>iOS Launcher X 2021 </td><td>8b242cb6a040d1782cca08e11818119fe4e907acc8b08c99d026ef169037a0d6</td> <td>io.slauncherx.twentyone</td>
  </tr><tr>
  <th scope="row">34</th><td>Stay Fit: Home Fitness Plan</td> <td>5cbab5e0566c5449161239d0f47f0f1cb248614e30c64ddb427436d613cb2e19 </td><td>com.stayfithome.fitnessplan</td>
  </tr><tr>
  <th scope="row">35</th><td>Chat Translator Pro for WhatsApp</td> <td>a1d86064af20a5dc34eabb81460f49e9f6d26d304e0ded39a4ded55828ffe79f</td> <td>com.chattrans.latorpro</td>
  </tr><tr>
  <th scope="row">36</th><td>Roll Your Icons </td><td>0db6495f6c1dddf99667e4f72b358207caabb4794bfa912568e9cfe0fc6bcb35</td> <td>ro.rollyo.uricons</td>
  <tr>
  <th scope="row">37</th><td>CosmosVPN </td><td>b49a32878f1f5e8d2ffe79b28e2d7fdb1a1f9de016c41a560f8ee94b1a3c4475</td><td> cs.mos.vpncosmos</td>
</tr><tr>
  <th scope="row">38</th><td>Amore Live Random Chat </td><td>956c520ee8968fc18077070aa168377298ad47dd2137dae328ffbed318ca6476 </td><td>com.amoreliv.erandomchat</td>
  </tr><tr>
  <th scope="row">39</th><td>Game Center: Complete Edition </td><td>f5b9a089e4f2fb70fc09b6e9f750e87078d20cd690651edd62c1a6382a55f6df</td> <td>org.gamecenter.completeedition</td>
  </tr><tr>
  <th scope="row">40</th><td>All HD Video SX - Smart Player </td><td>975040beb9a9864b3d348722391c2de26d319d284b15e1c8b4eae752497492d6</td> <td>al.lhdvideo.sxsmart</td>
  </tr><tr>
  <th scope="row">41</th><td>Easy Smart Translator Pro </td><td>25d44e97460dc994efbeb606e21cf5df254267a0169a23c6ab72189a78be1e8f</td> <td>fr.easysmart.translatorpro</td>
  </tr><tr>
  <th scope="row">42</th><td>Easy Chat Translator for WhatsApp </td><td>a8b78367f3cf8ff9f3853a358ff0b0c4b0dff18b3a86d2eb392bff663fcc977f </td><td>com.easychattrans.latorwhatsapp</td>
  </tr><tr>
  <th scope="row">43</th><td>Spam Calls Buster</td> <td>f2dde535506a49ef1319ab47e5e118ad0053393f3d6134498bd8367e0e1e235a</td> <td>org.spamcalls.bustercalls</td>
  </tr><tr>
  <th scope="row">44</th><td>WhoCall Caller ID and Spam Blocker </td><td>bdf070f1554bba2a8a3e7b4b0610bad1c1ece75460258dadc0ff02d0c3f90f9f </td><td>de.whocaller.idspamblocker</td>
  </tr><tr>
  <th scope="row">45</th><td>Pulse Rate Checker </td><td>6c06afb6a9aedd7ad8a4e84c79c2bc2a7d0362d95d76c58f5937fb5ce51a091a</td> <td>org.pulserate.checkerrate</td>
  </tr><tr>
  <th scope="row">46</th><td>NOWDownloader and Private Apps </td><td>c092e91ede10a4faae3807b6988af848c65137377df401238a67b7f6d29109c3 </td><td>com.nowdownloader.privateapps</td>
  </tr><tr>
  <th scope="row">47</th><td>Video Saver & Private Browser </td><td>3aa554ebe7ef3ff1cd1318d14d5e408640c9b3b696627104da53abe48cf3622a </td><td> org.videosaverprivate.browser</td>
  </tr><tr>
  <th scope="row">48</th><td>Wallpaper Anime for Android </td><td>06e4f8a50b4bfe0171dfb9a8a5b24ea2741e2e04ec712d8014d792eab3930b03</td> <td>de.wallpaperanime.</td>
  </tr><tr>
  <th scope="row">49</th><td>Pixelize Art </td><td>8b125a991bb35458f9169622b3648405fc11d9cb20af1c6290356b04b3c7809a </td><td>com.pixeli.zeapp</td>
  </tr><tr>
  <th scope="row">50</th><td>Muslim Memoji & Stickers for Whatsapp </td><td>dc556b013544b2d6598d25801f99b304a98bfa1e41f119fef6ecce3079cf4dff </td><td>com.muslimemo.jistickers</td>
  </tr><tr>
  <th scope="row">51</th><td>Easy Chat Translator: All Language </td><td>8cc3a3af78e8f996bb0b66ddd22ad8a9294d92125319d646f3688a6b90c27c44 com.</td><td>easychattransla.torallang</td>
  </tr><tr>
  <th scope="row">52</th><td>SecVPN: Fast and Secure VPN </td><td>f9fcef2baca9a397488bfdb7490b935d0f50f06b7750cd0f8648b843de65f088</td> <td>de.secvpnfast.securevpn</td>
  </tr><tr>
  <th scope="row">53</th><td>LED Border</td> <td>19fc5b85dbe9d3c08544da8ce5590f14f083d3b12ab6cb343043028214a819a2</td><td> au.ledbor.derder</td>
  </tr><tr>
  <th scope="row">54</th><td>Smart Global Translator </td><td>9257a4d1f74f6522c7592186fc4dcbcca3b0e86ea4615cc3652c89d3e07c8bdb<td> org.smartglobal.translatorsmartg
  </tr><tr>
  <th scope="row">56</th><td>Free Launcher X Pro <td>6a0ba285a769151222e11894f8a61de99dddb876931eb2ca51cdc5d160826e77 </td><td>fr.eelauncherx.pro</td>
  </tr><tr>
  <th scope="row">57</th><td>ICall U - Online Video Hotchat</td> <td>605f12af2b169b33ff75b0be205443d7031b42df146733f0678793b8ee3c589f</td> <td>org.icall.uonline</td>
  </tr><tr>
  <th scope="row">58</th><td>Pure Tube PRO: Block Video Ads </td><td>2fab0806cb5b1a63ef72d3a343de188ba7ec964e83f60ec5a8d8c9c4fc18a71f</td><td> ar.puretu.bepro</td>
  </tr><tr>
  <th scope="row">59</th><td>Future AI Scan Free 2021 </td><td>c14b5313a61c0feffd80d5ccb7cec3482cd43be433b5d38c9a7d01d5c672e6c9</td> <td>fr.futurus.aiscanfree</td>
  </tr><tr>
  <th scope="row">60</th><td>Qibla Finder: Qibla Compass & Prayer Times 2021 </td><td>cceb0e27825dc2c0056cc33a651793c28c3eb3d0f9b4f6f4ccf9b84939cee2e1</td> <td>com.qiblacompass.prayertimes</td>
  </tr><tr>
  <th scope="row">61</th><td>EasyCode: QR and Barcode Scanner </td><td>9eea5177b2391a8d590013a3309e49a00e4c817c32a3ca4e95938343721b4a25 </td><td>de.easycode.qrscanner</td>
  </tr><tr>
  <th scope="row">62</th><td>Wi-Fi Opensignal </td><td>56137feb206903049d7cb66728febdb90cf4381a7e8beed9846d37d896344b44</td><td> de.wifisignal.connectionopensignal</td>
  </tr><tr>
  <th scope="row">63</th><td>Ano caller: Spam List & Caller ID </td><td>171a0cdda91b0af5e80dd1a2d0e80ba0e634867f5734ae3cd41a5788be81dae6 </td><td>au.anocaler.spamliist</td>
  </tr><tr>
  <th scope="row">64</th><td>Pro Calls Recorder </td><td>1d5cb5edfff5b287bb123164283cb504dd498cdc903836b0f65e4bd5ae97a4b1</td> <td>org.procalls.recorder</td>
  </tr><tr>
  <th scope="row">65</th><td>Amazing Arab Videos </td><td>40048c7239158f9edf1a4783ad41bf2e27b38d3afb490bd6d33875eaaf1dcbb8</td> <td>de.amazingarab.videos</td>

</tr>

          </tbody>
        </table>
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