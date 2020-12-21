// alert(
//   "Hello World\nThis lets us know the JavaScript\nsource is linked with this page.\n\nThis form is non-functional at the moment."
// );

// Grab references to the form and its input controls
const regForm = document.getElementById("registrationForm");
const registerButton = document.getElementById("register-button");
//
const userNameInput = document.getElementById("user-name");
const firstNameInput = document.getElementById("first-name");
const lastNameInput = document.getElementById("last-name");
const phoneNumberInput = document.getElementById("phone-number");
const addressLine1Input = document.getElementById("address-line-1");
const addressLine2Input = document.getElementById("address-line-2");
const cityInput = document.getElementById("city");
const stateCodeInput = document.getElementById("state-code");
const zipCodeInput = document.getElementById("zip-code");
const genderLabel = document.getElementById("gender-label");
const genderMaleRadio = document.getElementById("gender-male");
const genderFemaleRadio = document.getElementById("gender-female");
const genderOtherRadio = document.getElementById("gender-other");
const userPasswordInput = document.getElementById("user-password");
const verifyPasswordInput = document.getElementById("verify-password");
const acknowledgeLabel = document.getElementById("acknowledge-label");
const iAgreeCheckbox = document.getElementById("i-agree-box");

// Disable the registerButton by default. We will enable it later
// once all of the form fields pass validation.
registerButton.disabled = true;

// Perform an initial form validation to set the visual display
// of all fields requiring data
validateRegistrationFields();

// Create a keyup listener on the page. Everytime the user types
// a key, it will validate the form and enable/disable the
// registration button.
document.addEventListener("keyup", validateRegistrationFields);
// Also create one for clicking on the checkbox
iAgreeCheckbox.addEventListener("change", validateRegistrationFields);
// And one for each of the radio buttons
genderMaleRadio.addEventListener("change", validateRegistrationFields);
genderFemaleRadio.addEventListener("change", validateRegistrationFields);
genderOtherRadio.addEventListener("change", validateRegistrationFields);

// ==================================================================
// FUNCTIONS
// ==================================================================

function validateRegistrationFields() {
  // Set the canEnableButton flag to true; if we find any issues during
  // validation, set it to false to disable the registration button.
  let canEnableButton = true;

  // For each field requiring validation, check it's status for
  // validity. If there's an issue, add the required/error CSS class
  // to it. Otherwise remove it that class.

  // Username (email) Input Field
  if (userNameInput.value.length > 0) {
    userNameInput.classList.remove("input-field-issue");
  } else {
    userNameInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // First Name Input Field
  if (firstNameInput.value.length > 0) {
    firstNameInput.classList.remove("input-field-issue");
  } else {
    firstNameInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Last Name Input Field
  if (lastNameInput.value.length > 0) {
    lastNameInput.classList.remove("input-field-issue");
  } else {
    lastNameInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Phone Number Input Field
  if (phoneNumberInput.value.length > 0) {
    phoneNumberInput.classList.remove("input-field-issue");
  } else {
    phoneNumberInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Address Line 1 Input Field
  if (addressLine1Input.value.length > 0) {
    addressLine1Input.classList.remove("input-field-issue");
  } else {
    addressLine1Input.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // City Input Field
  if (cityInput.value.length > 0) {
    cityInput.classList.remove("input-field-issue");
  } else {
    cityInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // State Code Input Field
  if (stateCodeInput.value.length > 0) {
    stateCodeInput.classList.remove("input-field-issue");
  } else {
    stateCodeInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Zip Code Input Field
  if (zipCodeInput.value.length > 0) {
    zipCodeInput.classList.remove("input-field-issue");
  } else {
    zipCodeInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Gender Radio Buttons
  if (
    genderMaleRadio.checked ||
    genderFemaleRadio.checked ||
    genderOtherRadio.checked
  ) {
    genderLabel.classList.remove("please-acknowledge");
  } else {
    genderLabel.classList.add("please-acknowledge");
    canEnableButton = false;
  }

  // User Password Field
  if (userPasswordInput.value.length > 0) {
    userPasswordInput.classList.remove("input-field-issue");
  } else {
    userPasswordInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Verify Password Field
  if (verifyPasswordInput.value.length > 0) {
    verifyPasswordInput.classList.remove("input-field-issue");
  } else {
    verifyPasswordInput.classList.add("input-field-issue");
    canEnableButton = false;
  }

  // Check for password match if both password fields contain data
  if (
    userPasswordInput.value.length > 0 &&
    verifyPasswordInput.value.length > 0
  ) {
    let passwordMatch = passwordMatchVerification(
      userPasswordInput.value,
      verifyPasswordInput.value
    );
    if (passwordMatch) {
      userPasswordInput.classList.remove("password-field-issue");
      verifyPasswordInput.classList.remove("password-field-issue");
    } else {
      userPasswordInput.classList.add("password-field-issue");
      verifyPasswordInput.classList.add("password-field-issue");
      canEnableButton = false;
    }
  }

  // I Agree Checkbox
  if (iAgreeCheckbox.checked) {
    acknowledgeLabel.classList.remove("please-acknowledge");
  } else {
    acknowledgeLabel.classList.add("please-acknowledge");
    canEnableButton = false;
  }

  // Can we enable the Register button??? If so, do it!
  if (canEnableButton) {
    registerButton.disabled = false;
  } else {
    registerButton.disabled = true;
  }
}

function passwordMatchVerification(pWord, vWord) {
  // Make sure the Password and Verify field values match
  if (pWord === vWord) {
    return true;
  } else {
    return false;
  }
}
