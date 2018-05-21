<? php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
   <head>
       <meta charset="utf-8">
       <title>My Home Page</title>
       <link rel= "stylesheet" type= "text/css" href = "css/site.css">
       <div class="header">
            <img class="logo" src = "images/logo.png"/>
           
           <div id="google_translate_element"></div><script type="text/javascript">
           function googleTranslateElementInit() {
               new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
           }
</script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
          

  <div class="dropdown">
      <p class="selectLanguageText" style="
   position:  relative;
    top: -222px;
    left: -100%;
    color:  white;
    font-size:  21px;
    margin-left: 46px;
">
        Please select the language you want to translate the website in: 

        </p>

      <p class="selectCountryText">
        Please select the country you are interested in: 

        </p>

         <select class="dropdown-content">
    <option selected="selected" value='17'>United Kingdom</option>
    </select>
            <img class="flagImage" src = "images/ukflag.png" />
     </div>
        <?php
            session_start();

           if (!isset($_SESSION['u_username'])) {
              echo '<p class="loginText">  
            
                Welcome guest. Click <a href= "loginRegister.php">here</a> to login or register.
                </p>';
           } else {
               echo '<p class="loginText">  
            
                Welcome '.$_SESSION['u_username']. '. Click <a href= "logout.php">here</a> to logout.
                </p>';
               
           }
        ?>
       
</div>
    </head>
    <body>

        
<nav class="navbar">
  <a href="#home" id="homeNav" val="0" onclick="showHome()">Home</a>
  <a href="#GI" id="GINav" val="1" onclick= "showGI()">General Information</a>
  <a href="#Map" id= "MapNav" val="2" onclick= "showMap()">Map</a>
  <a href="#History" id = "HistNav" val="3"onclick= "showHistory()">History</a>
<!--  <a href="#Places" id = "PlacesNav" val="4" onclick= "showPlacesToVisit()">Places to visit</a>-->
  <a href="#ToDo" id="todoNav" val="5" onclick= "showThingsToDo()">Things to do</a>
  <a href="#ToAvoid" id="toavoidNav" val="6" onclick= "showThingsToAvoid()">Things to avoid</a> 
  <a href="#WhereToStay" id = "whereNav" val="7" onclick= "showWhereToStay()">Where to Stay</a> 
  <a href="#forum" id= "forumNav" val="8" onclick= "showForum()">Forum</a>
</nav>
<div class="textDisplayed">
<div id="home">
        
        <label >Home</label>    
        <p class="homeText">

        Welcome to this website. Here you can select the country you are willing to learn more information about. Here is a list of all the things that are available for you:
        </p>
        <ul style="font-size:26px">
          <li>General Information</li>
          <li>Map</li>
          <li>History</li>
          <li>Things to do</li>
          <li>Things to avoid</li>
          <li>Where to stay</li>
          <li>Forum</li>
        </ul>
    
        <ol style="cursor: pointer;font-size:26px">
          <li><a onclick="showGI()"><b>General Information:</b></a> you can find information about a country, that include population, where its located at,etc... </li>
          <li><a onclick="showMap()"><b>Map:</b></a>a map of the country</li>
          <li><a onclick="showHistory()"><b>History:</b></a>A bried history of the country in question. It also has links to other sites so that you can learn more about it if you are interested.</li>
          <li><a onclick="showThingsToDo()"><b>Things to do:</b></a>Suggestions for activities to do while in the country.</li>
          <li><a onclick="showThingsToAvoid()"><b>Things to avoid:</b></a>There are some things that you should not do while in another country. Advice from users is included </li>
          <li><a onclick="showWhereToStay()"><b>Where to stay:</b></a>A list will all the best and affordable hotels in the country.</li>
            <li><a onclick="showForum()"><b>Forum:</b></a>A forum where you can talk with other people that are planning to go to this country or people that have already visited it. It allows allows you to share experiences with people from around the world</li>
        </ol>
</div>
        
<div id="information">
        
<!--   <label class="mapLabel" >Map</label> -->
              
        <table style="width:100%">
            <tr>
                <th>Map</th>
                <th>Capital and largest city</th>
                <th>Official language</th> 
                <th>Recognised regional languages</th> 
                <th>Countries of the United Kingdom</th>
                <th>Total Area</th>
                <th>Population</th>
                <th>Currency</th>
                <th>Religion</th>
                <th>Ethnic Groups</th>
                <th>Drives on the</th>
                <th>Calling code</th>
                <th>Date Format</th>
                <th>Emergency Codes</th>
            </tr>
            <tr>
                <td>
                    <img id="mapImage" src = "images/UKmap.png" />
                </td>
                 <td>London</td>
                 <td>English</td>
                <td>
                   <ul>
                       <li>Scots</li>
                       <li>Ulster Scots</li>
                        <li>Welsh</li>
                        <li>Cornish</li>
                        <li>Scottish Gaelic</li>
                        <li>Irish</li>
                    </ul>
                </td>
                <td>
                   <ol>
                       <li>England</li>
                       <li>Scotland</li> 
                       <li>Wales</li>
                       <li>Northern Ireland</li>
                   </ol>
                </td>
                 <td>242,495 square kilometers</td>
                 <td>65,648,100(2016 estimate)</td>
                 <td>Pound Sterling(GBP,£)</td>
                 <td>
                   <ul>
                       <li>59.5% Christian</li>
                        <li>25.7% Irreligious</li>
                        <li>4.4% Muslim</li>
                        <li>1.3% Hindu</li>
                        <li>0.4% Jewish</li>
                        <li>1.5% other religions</li>
                        <li>7.2% unknown</li>
                    </ul>
                </td>
                <td>
                 <ul>
                        <li>87.1% White</li>
                        <li>7% Asian</li>
                        <li>3% Black</li>
                        <li>2% Mixed</li>
                        <li>0.9% others</li>
                
                    </ul>
                </td>
                <td>Left</td>
                <td>+44</td>
                <td>dd/mm/yyyy</td>
                <td>999</td>
            </tr>
</table>

    
</div>
        
 <div id="map">

     <label style="
        position:  relative;
        top: 190px;
        font-size:  25px;
        left: 0%;">Here is a list of places to visit while in the UK. Click on one of the options, to show its location on the map:</label>
        <ul style="font-size: 27px; position:relative; top: 300px;left: 22%;cursor: pointer;width:12%;">
          <li onclick="showLondonEyeMap()">London Eye</li>
          <li onclick= "showStonehedgeMap()">Stonehenge</li>
          <li onclick= "showBuckinghamMap()">Buckingham Palace</li>
          <li onclick= "showbigbenMap()" >Big Ben</li>
          <li onclick= "showtowerMap()">Tower of London</li>
          <li onclick= "showbritishmuseumMap()">The British Museum</li>
          <li onclick="showhydeparkMap()">Hyde Park</li>
          <li onclick="showstpaulMap()">St. Paul's Cathedral</li>
            
      <label style="position:relative; left:-24%; top :50px">For more great places to visit in the United Kingdom, please follow this <a href= "https://www.google.gr/destination/map/topsights?q=united%20kingdom%20best%20places%20to%20visit&sa=X&site=search&output=search&dest_mid=%2Fm%2F07ssc&dest_mid=%2Fm%2F07ssc&dest_mid=%2Fm%2F07ssc&tcfs">link</a></label>

        </ul>
     <div id="londoneyeMap" style=" display: none;">    
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.5389679175623!2d-0.1217370485877724!3d51.503327318721865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604b900d26973%3A0x4291f3172409ea92!2sCoca-Cola+London+Eye!5e0!3m2!1sen!2suk!4v1522843518243" width="800" height="600" class="Map" frameborder="0" allowfullscreen></iframe>
         </div>
     <div id = "stonehengeMap" style="display: none;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2501.1810796233494!2d-1.8284090485973052!3d51.17888534238993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4873e63b850af611%3A0x979170e2bcd3d2dd!2sStonehenge!5e0!3m2!1sen!2suk!4v1522847326454" width="800" height="600" frameborder="0" class="Map" allowfullscreen></iframe>
     </div>
     <div id = "buckinghamMap" style="display:none;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.6457860669343!2d-0.14408404858778942!3d51.5013673188652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760520cd5b5eb5%3A0xa26abf514d902a7!2sBuckingham+Palace!5e0!3m2!1sen!2suk!4v1522877416550" width="800" height="600" frameborder="0" class="Map" allowfullscreen></iframe>
      </div>
       <div id = "bigbenMap" style="display:none;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.680381444467!2d-0.1268194485878587!3d51.50073251891161!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604c38c8cd1d9%3A0xb78f2474b9a45aa9!2sBig+Ben!5e0!3m2!1sen!2suk!4v1522946225907" width="800" height="600" frameborder="0" class="Map" allowfullscreen>
    </iframe>
      </div>
    <div id = "towerMap" style="display:none;">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.3503722899213!2d-0.07784694858766994!3d51.50678771846896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48760349331f38dd%3A0xa8bf49dde1d56467!2sTower+of+London!5e0!3m2!1sen!2suk!4v1522950888340" width="800" height="600" frameborder="0" class="Map" allowfullscreen>
    </iframe>
      </div>
    <div id = "britishmuseumMap"  style="display:none;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.6620064221365!2d-0.1291506485873013!3d51.5194166175455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761b323093d307%3A0x2fb199016d5642a7!2sThe+British+Museum!5e0!3m2!1sen!2suk!4v1522956507680" width="800" height="600" frameborder="0" class="Map" allowfullscreen>
     </iframe>
    </div>
     <div id = "hydeparkMap" style="display:none;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.6145151613105!2d-0.16792434858764757!3d51.50727151843359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4876054929181a85%3A0xd1af6c4f49b4bd0c!2sHyde+Park!5e0!3m2!1sen!2suk!4v1522958048300" width="800" height="600" frameborder="0" class="Map" allowfullscreen></iframe>
     </div>
     <div id = "stpaulMap" style="display:none;">
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2482.9655173313413!2d-0.10054464858744969!3d51.513848617952675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604aca207bc87%3A0x3a1d3501a9af5fde!2sSt.+Paul&#39;s+Cathedral!5e0!3m2!1sen!2suk!4v1522959608050" width="800" height="600" frameborder="0" class="Map" allowfullscreen>
     </iframe>
     </div>
        </div>
    
        
<div id="history" style="display: none;font-size: 25px;">       
<div style="height: 50px"></div>

        The United Kingdom of Great Britain and Northern Ireland, commonly known as the United Kingdom (UK) or Britain, is a sovereign country in western Europe. Lying off the north-western coast of the European mainland, the UK includes the island of Great Britain, the north-eastern part of the island of Ireland and many smaller islands.Northern Ireland is the only part of the United Kingdom that shares a land border with another sovereign stat-the Republic of Ireland. Apart from this land border, the UK is surrounded by the Atlantic Ocean, with the North Sea to its east, the English Channel to its south and the Celtic Sea to its south-south-west, giving it the 12th-longest coastline in the world. The Irish Sea lies between Great Britain and Ireland. With an area of 242,500 square kilometres (93,600 sq mi), the UK is the 78th-largest sovereign state in the world. It is also the 21st-most populous country, with an estimated 65.5 million inhabitants in 2016.
<div style="height: 50px"></div>
        The UK is a constitutional monarchy with a parliamentary democracy. The monarch is Queen Elizabeth II, who has reigned since 1952, making her the longest-serving current head of state. The UK's capital and largest city is London, a global city and financial centre with an urban area population of 10.3 million. Other major urban areas in the UK include the conurbations centred on Manchester, Birmingham, Leeds, Glasgow and Liverpool. The UK consists of four countries—England, Scotland, Wales and Northern Ireland. All but England have devolved administrations, each with varying powers, based in their capitals Edinburgh, Cardiff and Belfast, respectively. The nearby Isle of Man, Bailiwick of Guernsey and Bailiwick of Jersey are not part of the UK, being Crown dependencies with the British Government responsible for defence and international representation.
<div style="height: 50px"></div>

        Prior to the creation of the UK, Wales had been conquered and annexed by the Kingdom of England. This meant that the United Kingdom created in 1707 by the Treaty of Union between England and Scotland encompassed all of Great Britain. The Kingdom of Ireland merged with this state in 1801 to form the United Kingdom of Great Britain and Ireland. Five-sixths of Ireland seceded from the UK in 1922, leaving the present formulation of the United Kingdom of Great Britain and Northern Ireland. There are fourteen British Overseas Territories, the remnants of the British Empire which, at its height in the 1920s, encompassed almost a quarter of the world's land mass and was the largest empire in history. British influence can be observed in the language, culture and legal systems of many of its former colonies.
<div style="height: 50px"></div>

        The UK is a developed country and has the world's sixth-largest economy by nominal GDP and ninth-largest economy by purchasing power parity. It has a high-income economy and has a "very high" Human Development Index, ranking 16th in the world. It was the first industrialised country and the world's foremost power during the 19th and early 20th centuries. The UK remains a great power with considerable economic, cultural, military, scientific and political influence internationally. It is a recognised nuclear weapons state and is sixth in military expenditure in the world. It has been a permanent member of the United Nations Security Council since its first session in 1946. It has been a leading member state of the European Union (EU) and its predecessor, the European Economic Community (EEC), since 1973; however, a referendum in 2016 resulted in 51.9% of UK voters favouring leaving the EU, and the country's exit is being negotiated. The UK is also a member of the Commonwealth of Nations, the Council of Europe, the G7 finance ministers, the G7 forum, the G20, NATO, the Organisation for Economic Co-operation and Development (OECD), and the World Trade Organization (WTO).
<div style="height: 50px"></div>
      <label>For more information please follow this <a href= "https://en.wikipedia.org/wiki/United_Kingdom">link</a></label>
</div>
    
 <div id="thingsToDo">
        
        
     <label >Things to do</label>    
      <label style="
            position: relative;
            top: 190px;
            font-size: 25px;
            left: 20%;">Here is a list of things to do while visiting the UK.Click on them and it will direct you to a website for more information:</label>
     <ul style="font-size: 27px; position:relative; top: 300px;left: 44%;cursor: pointer;width:22%;">
          <li><a href= https://arbeiaromanfort.org.uk>Arbeia Roman Fort and Museum</a></li>
          <li><a href= http://www.birminghammuseums.org.uk/bmag>Birmingham Museum and Art Gallery</a></li>
         <li><a href= http://www.english-heritage.org.uk/visit/places/castlerigg-stone-circle>Castlerigg Stone Circle</a></li>
         <li><a href= https://www.nationaltrust.org.uk/cerne-giant?awc=3795_1523191634_7d22cbc3924098650a741e338096c626&campid=Affiliates_Central_Mem_AWIN_Standard&aff=78888>Cerne Abbas Giant</a></li>
         <li><a href= https://www.nationaltrust.org.uk/lacock-abbey-fox-talbot-museum-and-village?awc=3795_1523192161_15b6aed396ca31f0691c688550b9ef15&campid=Affiliates_Central_Mem_AWIN_Standard&aff=78888>Lacock Village</a></li>
         <li><a href= http://www.nrm.org.uk>National Railway Museum</a></li>
         <li><a href= http://www.english-heritage.org.uk/visit/places/silbury-hill/?utm_source=awin&utm_medium=Affiliate&utm_campaign=Affiliate&awc=5928_1523192506_b93198efc3a6c4dfca92111b1c462b45>Silbury Hill</a></li>
         <li><a href= http://www.english-heritage.org.uk/visit/places/houghton-house/?utm_source=awin&utm_medium=Affiliate&utm_campaign=Affiliate&awc=5928_1523192018_5ba55ae80ac9cec3525df2e9c6b5814b>Houghton House, Bedfordshire</a></li>
            
      <label style="position:relative; left:-24%; top :50px">For more great things to do in the United Kingdom, please follow this <a href= https://www.tripsavvy.com/free-activities-in-the-united-kingdom-1661825>link</a></label>

        </ul>
</div>
        
 <div id="thingsToAvoid">
        
        
    <label >Things to Avoid</label> 
      <label style="
            position: relative;
            top: 190px;
            font-size: 25px;
            left: 28%;">Here is a list of things you should avoid doing while visiting the UK:</label>

            <ul style="font-size: 27px; position:relative; top: 300px;left: 44%;cursor: none;width:22%;">
            <li><b>Don't </b>drive in cities until You're confident you can</li>
          <li><b>Don't </b> block the escalators</li>
         <li><b>Don't </b> confuse England with the rest of the United Kingdom</li>
         <li><b>Don't </b> buy a single ticket on the metro, it is almost the same price to buy a day travel card. If you are going to stay longer, buy the Oyster travel card, where you can top up it and you only pay what you consumme (or use).</li>
         <li><b>Don't </b> eat food outside daily because it can be very expensive. Its better to buy food and cook if you can, so that you save some money</li>
<!--
         <li>National Railway Museum</li>
         <li>Silbury Hill</li>
         <li>Houghton House, Bedfordshire</li>
-->
        </ul>
</div>
        
 <div id="whereToStay">
        
                <label >Where to stay</label>
      <label style="
            position: relative;
            top: 190px;
            font-size: 25px;
            left: 25%;">Here is a list of the best hotels available in the UK. Click one of them for more information:</label>
            <ul style="font-size: 27px; position:relative; top: 300px;left: 44%;cursor: pointer;width:22%;">
          <li><a href= https://www.booking.com/country/gb.en-gb.html?aid=346426;label=london-top;sid=ab6cd0707d0e3bb3ef3165c3b0b5e5cb;breadcrumb=city>Booking.com</a></li>
          <li><a href="https://www.airbnb.co.uk">Airbnb</a></li>
          <li><a href= https://www.booking.com/hotel/gb/shangri-la-at-the-shard-london.en-gb.html?aid=346426&label=london-best-lux1>Best luxury hotel in London</a></li>
         <li><a href= https://www.booking.com/hotel/gb/montagueredcarnations.en-gb.html?aid=346426&label=london-best-bout2>Best Boutique Hotel in London</a></li>
         <li><a href= https://www.booking.com/hotel/gb/hiltonlondonheathrowairport.html?aid=346426&label=london-top6>Best Airport Hotel in London</a></li>
         
         <li><a href= https://www.booking.com/hotel/gb/jumeirah-carlton-tower.html?aid=346426&label=london-tops>Best london hotel with pool</a></li>
        
            
      <label style="position:relative; left:-24%; top :50px">For more hotels in the United Kingdom, please follow this <a href= https://santorinidave.com/best-places-london>link</a></label>
                
        </ul>
              
</div>
    
 <div id = "forum">
    <label>Forum</label>
     <div id="wrapper">
    <div id="menu">
        <?php
        if (isset($_SESSION['u_username'])) {
            echo '<p class="welcome">
            
                    Welcome, <b>' .$_SESSION['u_username']. '. </b></p>';
        } else {
            echo '<p class="welcome">Welcome guest. Click <a href= "loginRegister.php">here</a> to login or register, in order to use the forum.</p>';
        }
          
        ?>
                 <div style="clear:both"></div>
         </div>
     <div id="chatbox">
         <?php
         if(file_exists("log.html") && filesize("log.html") > 0){
    $handle = fopen("log.html", "r");
    $contents = fread($handle, filesize("log.html"));
    fclose($handle);
     
    echo $contents;
}
?></div>
    <form name="message" action="">
        <input name="usermsg" type="text" id="usermsg" size="63" />
        <input name="submitmsg" type="submit"  id="submitmsg" value="Send" />
        <input name="clearlog" type="submit"  id="clearlog" value="Clear" />

   </form>
</div>

 </div>

</div> 
    <script src="websiteScripts.js"></script>
    <script src="jquery-3.3.1.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3/jquery.min.js"></script>
        
<script>
 $("#clearlog").click(function(){	
     <?php
if(isset($_SESSION['u_username']) && ($_SESSION['u_id'])==6 ){
    echo '$.post("deleteChat.php");';
} else {
    echo '$(".welcome").attr("innerHTML", "Only the admin can clear the chat!")';
}
     ?>
     
});
    </script>
    <script type="text/javascript" src="jqueryScripts.js"></script>   

    
    </body>
</html>