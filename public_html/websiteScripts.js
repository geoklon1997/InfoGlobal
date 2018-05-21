/* When the user clicks on the button,
toggle between hiding and showing the dropdown content */
function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
            


            
function showHome() {
   hideAllText();
    document.getElementById("home").style.display = "block";
    changeTextColor();
    document.getElementById("homeNav").style.color = "grey";
}
            
function showGI() {
  hideAllText();
    document.getElementById("information").style.display = "block";
      changeTextColor();
    document.getElementById("GINav").style.color = "grey";
}
            
 function showMap() {
    hideAllText();
    document.getElementById("map").style.display = "block";
    changeTextColor();
    document.getElementById("MapNav").style.color = "grey";
}
            
function showHistory() {
     hideAllText();
    document.getElementById("history").style.display = "block";
  changeTextColor();
    document.getElementById("HistNav").style.color = "grey";
}
         
function showThingsToDo() {
    hideAllText();
    document.getElementById("thingsToDo").style.display = "block";
      changeTextColor();
    document.getElementById("todoNav").style.color = "grey";
   
}
function showThingsToAvoid() {
   hideAllText();
    document.getElementById("thingsToAvoid").style.display = "block";
      changeTextColor();
    document.getElementById("toavoidNav").style.color = "grey";
}
function showWhereToStay() {
   hideAllText();
   document.getElementById("whereToStay").style.display = "block";
      changeTextColor();
    document.getElementById("whereNav").style.color = "grey";
  
}
function showForum() {
    hideAllText();
    document.getElementById("forum").style.display="block";
      changeTextColor();
    document.getElementById("forumNav").style.color = "grey";
}
// function selectOption() {
//$("#myDropdown option").each(function() {
//  $("#myInput").val=this.selected.val;
//});
// }
function hideAllText() {
      document.getElementById("home").style.display = "none";
    document.getElementById("information").style.display = "none";
    document.getElementById("map").style.display = "none";
    document.getElementById("history").style.display = "none";
    document.getElementById("whereToStay").style.display = "none";
    document.getElementById("thingsToDo").style.display = "none";
    document.getElementById("thingsToAvoid").style.display = "none";
        document.getElementById("forum").style.display="none";

    
}
            
function changeTextColor() {
        document.getElementById("homeNav").style.color = "white";
        document.getElementById("GINav").style.color = "white";
        document.getElementById("MapNav").style.color = "white";
        document.getElementById("HistNav").style.color = "white";
        document.getElementById("todoNav").style.color = "white";
        document.getElementById("toavoidNav").style.color = "white";
        document.getElementById("whereNav").style.color = "white";
        document.getElementById("forumNav").style.color = "white";

}
      
function showLondonEyeMap () {
    hideAllMaps();
    if (document.getElementById("londoneyeMap").style.display == "none") {
     document.getElementById("londoneyeMap").style.display = "block";
    }
    else {
             document.getElementById("londoneyeMap").style.display = "none";

    }

}
            
function showbigbenMap () {
    hideAllMaps();
    if (document.getElementById("bigbenMap").style.display == "none") {
     document.getElementById("bigbenMap").style.display = "block";
    }
}
  
 function showStonehedgeMap () {
     hideAllMaps();
    if (document.getElementById("stonehengeMap").style.display == "none") {
     document.getElementById("stonehengeMap").style.display = "block";
    }
    
}
function showBuckinghamMap() {
      hideAllMaps();
    if (document.getElementById("buckinghamMap").style.display == "none") {
     document.getElementById("buckinghamMap").style.display = "block";
    }

}
            
            
function showtowerMap() {
      hideAllMaps();
    if (document.getElementById("towerMap").style.display == "none") {
     document.getElementById("towerMap").style.display = "block";
    }
   
}
 
function showhydeparkMap() {
      hideAllMaps();
    if (document.getElementById("hydeparkMap").style.display == "none") {
     document.getElementById("hydeparkMap").style.display = "block";
    }
   
}
function showbritishmuseumMap() {
      hideAllMaps();
    if (document.getElementById("britishmuseumMap").style.display == "none") {
     document.getElementById("britishmuseumMap").style.display = "block";
    }
   
}
function showstpaulMap() {
      hideAllMaps();
    if (document.getElementById("stpaulMap").style.display == "none") {
     document.getElementById("stpaulMap").style.display = "block";
    }
   
}
  function hideAllMaps() {
    document.getElementById("stonehengeMap").style.display = "none";
    document.getElementById("londoneyeMap").style.display = "none";
    document.getElementById("buckinghamMap").style.display = "none";
    document.getElementById("bigbenMap").style.display = "none";
    document.getElementById("towerMap").style.display = "none";
    document.getElementById("britishmuseumMap").style.display = "none";
    document.getElementById("hydeparkMap").style.display = "none";
    document.getElementById("stpaulMap").style.display = "none";
    }
