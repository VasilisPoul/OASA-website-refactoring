/* 

JAVASCRIPT by: Maria Karamina (sdi1600059)

*/

var currentTab = 0; // Current step-screen is set to be the first step-screen (0)
showTab(currentTab); // Display the current step-screen


function showTab(n) {
  // This function will display the specified step-screen of the form ...
  var x = document.getElementsByClassName("step-screen");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Επαναφόρτιση";
  } else {
    document.getElementById("nextBtn").innerHTML = "Επόμενο";
  }

}

function nextPrev(n) {
  // This function will figure out which step-screen to display
  var x = document.getElementsByClassName("step-screen");


  if(currentTab === 2 && n === 1 && !validateEmail()) {
    return false;
  }

  // Increase or decrease the current step-screen by 1:
  if(currentTab === 2 && n === 1) {
    getProductsTable();
    document.getElementById("card-id-preview").textContent = localStorage.getItem("card_id");
  }

  //Going to submit screen
  if(currentTab === x.length-2 && n===1) {
    document.getElementById("card-id-to-send").value = localStorage.getItem("card_id");
    localStorage.removeItem("card_id");
    document.getElementById("card-pin-to-send").value = localStorage.getItem("card_pin");
    localStorage.removeItem("card_pin");
    document.getElementById("product-to-send").value = document.getElementsByClassName("buy-select")[0].value;
    document.getElementById("email-to-send").value = document.getElementById("buy-email-input").value;
  }

  // if you have reached the end of the form... :
  if(currentTab === x.length-1 && n===1) {
    //...the form gets submitted:
    document.getElementById("recharge-form").submit();
    document.getElementById("buy-loader").style.display = "block";
    document.getElementById("nextBtn").disabled = "true";
    document.getElementById("prevBtn").disabled = "true";
    showTab(currentTab);
    return true;
  }

  // Otherwise, hide the current step-screen
  x[currentTab].style.display = "none";

  //Display the correct step-screen
  currentTab = currentTab + n;
  showTab(currentTab);
}

function validateEmail() {
  // This function deals with validation of the form fields
  var field = document.getElementById("buy-email-input");
  var err = document.getElementById("email-error-div");
  if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w+)+$/.test(field.value))) {
    field.classList.remove("err");
    err.style.display = "none";
    return true;
  }
  else {
    field.classList.add("err");
    err.style.display = "inline";
    return false;
  }
}


function saveCardId() {
  var id = document.getElementById("buy-card-id-input").value;
  var pin = document.getElementById("buy-card-pin-input").value;
  localStorage.setItem("card_id", id);
  localStorage.setItem("card_pin", pin);
}