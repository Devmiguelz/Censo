var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab
var elem = document.getElementById("myBar");
document.getElementById("terminar").style.display = "none";
var aux = -1;
var val = 0;
var oldval = 0;
var width = 0;

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "ENVIAR";
  } else {
    document.getElementById("nextBtn").innerHTML = "SIGUIENTE";

  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {

  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm())   return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("terminar").style.display = "block";
    elem.style.width = '100%';
    elem.innerHTML = '100% COMPLETADO';
    setTimeout(EnviarV, 1500);
    function EnviarV(){
      document.getElementById("Form_Vivienda").submit();
      return false;
    }
    
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
    if (currentTab == 0 && aux < currentTab) {
      aux = currentTab;
      oldval = 0;
      val = 18;
      Progress();
    }
    if (currentTab == 1 && aux < currentTab) {
      aux = currentTab;
      oldval = 20;
      val = 35
      Progress();
    }
    if (currentTab == 2 && aux < currentTab) {
      aux = currentTab;
      oldval = 40;
      val = 50;
      Progress();
    }
    if (currentTab == 3 && aux < currentTab) {
      aux = currentTab;
      oldval = 60;
      val = 65;
      Progress();
    }
    if (currentTab == 4 && aux < currentTab) {
      aux = currentTab;
      oldval = 80;
      val = 80;
      Progress();
    }
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}

function Progress(){
  if (width >= val) {
  }else{
    width++;
    elem.style.width = width+'%';
    elem.innerHTML = width+"% COMPLETADO";
    setInterval(Progress, 20);
  }  
}