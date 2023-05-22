
function scrollAppear() {
    var introText = document.querySelector('.side-text');
    var sideImage = document.querySelector('.sideImage');
    var introPosition = introText.getBoundingClientRect().top;
    var imagePosition = sideImage.getBoundingClientRect().top;
    
    var screenPosition = window.innerHeight / 1.2;
  
    if(introPosition < screenPosition) {
      introText.classList.add('side-text-appear');
    }
    if(imagePosition < screenPosition) {
      sideImage.classList.add('sideImage-appear');
    }
  }
  
  window.addEventListener('scroll', scrollAppear);
  
  // For switching between navigation menus in mobile mode
  var i = 2;
  function switchTAB() {
      var x = document.getElementById("list-switch");
      if(i%2 == 0) {
          document.getElementById("list-switch").style= "display: grid; height: 50vh; margin-left: 5%;";
          document.getElementById("search-switch").style= "display: block; margin-left: 5%;";
      }else {
          document.getElementById("list-switch").style= "display: none;";
          document.getElementById("search-switch").style= "display: none;";
      }
      i++;
  }


// CheckBox Function
function goFurther(){
  if (document.getElementById("chkAgree").checked == true) {
    document.getElementById('btnSubmit').style = 'background: rgb(68, 2, 2);';
  }
  else{
    document.getElementById('btnSubmit').style = 'background:  rgb(150, 8, 8);';
  }
}

function google() {
  	window.location.assign("https://accounts.google.com/signin/v2/identifier?service=accountsettings&continue=https%3A%2F%2Fmyaccount.google.com%2F%3Futm_source%3Dsign_in_no_continue&csig=AF-SEnbZHbi77CbAiuHE%3A1585466693&flowName=GlifWebSignIn&flowEntry=AddSession", "_blank");
}

  
function sideMenu(side) {
    var menu = document.getElementById('side-menu');
    if(side==0) {
      menu.style = 'transform: translateX(0vh); position:fixed;';
    }
    else {
      menu.style = 'transform: translateX(-100%);';
    }
    side++;
  }

  var theme = document.getElementById("theme");
  theme.onclick=function(){
    document.body.classList.toggle("dark-theme");
  }