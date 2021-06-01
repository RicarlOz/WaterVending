const phoneInputField = document.querySelector("#phone");
const phoneInput = window.intlTelInput(phoneInputField, {
    preferredCountries: ["mx", "us", "co", "in", "de"],
    utilsScript:
    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
});

const info = document.querySelector(".alert-info");

function process(event) {
    event.preventDefault();
    const phoneNumber = phoneInput.getNumber();

    info.style.display = "";
    info.innerHTML = `Phone number in E.164 format: <strong>${phoneNumber}</strong>`;
}  

function tabE(obj,e){ 
    var e=(typeof event!='undefined')?window.event:e;// IE : Moz 
    if(e.keyCode==13){ 
      var ele = document.forms[0].elements; 
      for(var i=0;i<ele.length;i++){ 
        var q=(i==ele.length-1)?0:i+1;// if last element : if any other 
        if(obj==ele[i]){ele[q].focus();break} 
      } 
   return false; 
    } 
   } 

   function openNav() {
    document.getElementById("mySidenav1").style.width = "250px";
  }
  
  function closeNav() {
    document.getElementById("mySidenav1").style.width = "0";
  }