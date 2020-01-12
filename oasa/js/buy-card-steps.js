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
    document.getElementById("nextBtn").innerHTML = "Αγορά";
  } else {
    document.getElementById("nextBtn").innerHTML = "Επόμενο";
  }

}

function nextPrev(n) {
  // This function will figure out which step-screen to display
  var x = document.getElementsByClassName("step-screen");

  //From info screen to PIN screen
  if(currentTab == 0 && n == 1 && !validateInfo()) {
    return false;
  }

  //From PIN screen to ticket selection screen
  if(currentTab === 1 && n === 1) {
    if(!verifyPin()) return false;
  }

  //From ticket selection screen to payment screen
  if(currentTab === 2 && n === 1) {
    getProductsTable();
    if(!validateAddress()) return false;
  }
  

  //Going to submit screen
  if(currentTab === x.length-2 && n===1) {
    document.getElementById("product-to-send").value = document.getElementsByClassName("buy-select")[0].value;
    document.getElementById("first_name-to-send").value = document.getElementById("buy-first_name").value;
    document.getElementById("last_name-to-send").value = document.getElementById("buy-last_name").value;
    document.getElementById("email-to-send").value = document.getElementById("buy-email").value;
    document.getElementById("dob-to-send").value = document.getElementById("buy-dob").value;
    document.getElementById("phone-to-send").value = document.getElementById("buy-phone").value;
    document.getElementById("discount_id-to-send").value = document.getElementById("buy-discount_id").value;
    document.getElementById("pin-to-send").value = document.getElementById("buy-card-pin-input").value;
    document.getElementById("address-to-send").value = document.getElementById("buy-address").value;

    var discount_cat;
    var radios = document.getElementsByClassName("radio");
    for(radio of radios) {
      if(radio.checked) {
        discount_cat = radio.value;
      }
    }

    document.getElementById("discount_cat-to-send").value = discount_cat;
  }

  // if you have reached the end of the form... :
  if(currentTab === x.length-1 && n===1) {
    //...the form gets submitted:
    document.getElementById("buy-form").submit();
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

//Check the values given in the input fields
function validateInfo() {
  var valid = true;
  if(!validateEmail()) valid = false;
  if(!validatePhone()) valid = false;
  if(!validateFilled()) valid = false;
  return valid;
}

//Check if all fields are filled
function validateFilled() {
  var field, err, valid = true;

  field = document.getElementById("buy-first_name");
  err = document.getElementById("buy-first_name-err");
  if(!(field.value.length > 0)) {                       //If error, write it
    field.classList.add("err");
    err.innerHTML = "Συμπληρώστε το πεδίο";
    valid = false;
  }
  else {                                                //Else restore it
    field.classList.remove("err");
    err.innerHTML = "";
  }

  field = document.getElementById("buy-last_name");
  err = document.getElementById("buy-last_name-err");
  if(!(field.value.length > 0)) {
    field.classList.add("err");
    err.innerHTML = "Συμπληρώστε το πεδίο";
    valid = false;
  }
  else {
    field.classList.remove("err");
    err.innerHTML = "";
  }

  field = document.getElementById("buy-email");
  err = document.getElementById("buy-email-err");
  if(!(field.value.length > 0)) {
    field.classList.add("err");
    err.innerHTML = "Συμπληρώστε το πεδίο";
    valid = false;
  }
  //Don't restore error in email and phone as they are being checked by other functions as well

  field = document.getElementById("buy-dob");
  err = document.getElementById("buy-dob-err");
  if(!(field.value.length > 0)) {
    field.classList.add("err");
    err.innerHTML = "Συμπληρώστε το πεδίο";
    valid = false;
  }
  else {
    field.classList.remove("err");
    err.innerHTML = "";
  }

  field = document.getElementById("buy-phone");
  err = document.getElementById("buy-phone-err");
  if(!(field.value.length > 0)) {
    field.classList.add("err");
    err.innerHTML = "Συμπληρώστε το πεδίο";
    valid = false;
  }

  return valid;
}

function validateEmail() {
  var field = document.getElementById("buy-email");
  var err = document.getElementById("buy-email-err");
  if((/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(field.value))) {
    field.classList.remove("err");
    err.innerHTML = "";
    return true;
  }
  else {
    field.classList.add("err");
    err.innerHTML = "Εσφαλμένη μορφή email";
    return false;
  }
}

function validatePhone() {
  var field = document.getElementById("buy-phone");
  var err = document.getElementById("buy-phone-err");

  if(!(/^\d+$/.test(field.value))) {
    field.classList.add("err");
    err.innerHTML = "Ο αριθμός τηλεφώνου πρέπει να περιέχει μόνο νούμερα";
    return false;
  }

  if(!(field.value.length == 10)) {
    field.classList.add("err");
    err.innerHTML = "Ο αριθμός τηλεφώνου πρέπει να αποτελείται από 10 ψηφία";
    return false;
  }

  field.classList.remove("err");
  err.innerHTML = "";
  return true;
}

function validateAddress() {
  var address = document.getElementById("buy-address");
  var err = document.getElementById("buy-address-error");
  if(!address) {
    address.classList.add("err");
    err.innerHTML = "Συμπληρώστε διεύθυνση αποστολής";
    return false;
  }

  address.classList.remove("err");
  err.innerHTML = "";
  return true;
}

//Verify that the two pins given match
function verifyPin() {
  var pin = document.getElementById("buy-card-pin-input");
  var verify = document.getElementById("buy-card-pin-check");
  var err = document.getElementById("buy-pin-error");

  if(!(pin.value.length == 4)) {
    pin.classList.add("err");
    verify.classList.add("err");
    err.innerHTML = "Το PIN πρέπει να αποτελείται από 4 ψηφία";
    return false;
  }

  if(!(/^\d+$/.test(pin.value))) {
    pin.classList.add("err");
    verify.classList.add("err");
    err.innerHTML = "Το PIN πρέπει να περιέχει μόνο νούμερα";
    return false;
  }

  if(!(pin.value === verify.value)) {
    verify.classList.add("err");
    err.innerHTML = "Οι αριθμοί PIN δεν ταιριάζουν";
    return false;
  }

  pin.classList.remove("err");
  verify.classList.remove("err");
  err.innerHTML = "";
  return true;
}
