/*global console, alert, prompt*/
/*------------------------------------------------------- */

/* -------------------------------------------*/
/* Mobile Validate */

    
function mobileValid(event) {
    "use strict";
    var mobile = document.getElementById("mob").value,
        mobileLen = mobile.length;
    if (mobile.match(/^[A-Za-z]{1,}$/)) {
        alert("Mobile Filed accept Only Numbers");
        return false;
    }
    if (mobileLen != 11) {
        alert("Mobile Filed accept Only 11 Numbers");
        return false;
    }
    
    event.preventDefault();

}

/* End of Validation Phone number */
/* ---------------------------------------------- */
/* Start Of Email Validation */
/*function emailValid(event) {
    "use strict";
    var emailVal = document.getElementById("email").value;
    if (!emailVal.match(/^[A-Za-z\._\-0-9]*@[A-Za-z]*[\.][a-z]{2,5}$/)) {
        alert("Email Not Valid");
        return false;
    }
    
    event.preventDefault();
}*/



/* End of Validation Email */
/* ----------------------------------- */
/* Call All Functions */
function allFn(event) {
    "use strict";
    emailValid(event);
    mobileValid(event);
    
    event.preventDefault();
}
/* End */