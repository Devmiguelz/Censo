var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the crurrent tab
var elem = document.getElementById("myBar");
var aux = -1;

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
    elem.style.width = '100%';
    elem.innerHTML = '100% COMPLETADO';
    setTimeout(EnviarR, 1200);
    function EnviarR(){
      document.getElementById("Form_Registrar").submit();
      return false;
    }
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, i, valid = true;
  x = document.getElementsByClassName("tab");
  input = x[currentTab].getElementsByTagName("input");
  selec = x[currentTab].getElementsByTagName("select");
  

  // A loop that checks every input field in the current tab:
  /*for (i = 0; i < input.length; i++) {
    // If a field is empty...
    if (input[i].value == "") {
      // add an "invalid" class to the field:
      input[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
   for (i = 0; i < selec.length; i++) {
    // If a field is empty...
    if (selec[i].selectedIndex == 0) {
      // add an "invalid" class to the field:
      selec[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  if (currentTab == 2) {
    radioh = document.getElementById("h-button");
    radiom = document.getElementById("m-button");
    if (!radioh.checked && !radiom.checked) {
      valid = false;
    }else{
      valid = true;
    }
  }
  if (currentTab == 3) {
    si_ser = document.getElementById("si-button");
    no_ser = document.getElementById("no-button");
    if (!si_ser.checked && !no_ser.checked) {
      valid = false;
    }else{
      valid = true;
    }
  }
  if (currentTab == 5) {
    if ($("#pass1").val() === $("#pass2").val()){ 
      if ($("#pass1").val().length >= 8) {
        valid = true;
      }else{
        document.getElementById("tamaño1").style.display = "inline";
        document.getElementById("tamaño2").style.display = "inline";
        document.getElementById("igual1").style.display = "none";
        document.getElementById("igual2").style.display = "none";
        document.getElementById("pass2").className += " invalid";
        document.getElementById("pass1").className += " invalid";
        valid = false;
      }
    }else{
      document.getElementById("igual1").style.display = "inline";
      document.getElementById("igual2").style.display = "inline";
      document.getElementById("tamaño1").style.display = "none";
      document.getElementById("tamaño2").style.display = "none";
      document.getElementById("pass2").className += " invalid";
      document.getElementById("pass1").className += " invalid";
      valid = false;
    }
  }*/

  // If the valid status is true, mark the step as finished and valid:5
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
    if (currentTab == 0 && aux < currentTab) {
      aux = currentTab;
      Progress(15);
    }
    if (currentTab == 1 && aux < currentTab) {
      aux = currentTab;
      Progress(30);
    }
    if (currentTab == 2 && aux < currentTab) {
      aux = currentTab;
      Progress(45);
    }
    if (currentTab == 3 && aux < currentTab) {
      aux = currentTab;
      Progress(60);
    }
    if (currentTab == 4 && aux < currentTab) {
      aux = currentTab;
      Progress(75);
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

function Progress(x){
  elem.style.width = x+'%';
  elem.innerHTML = x+"% COMPLETADO";
  
}

