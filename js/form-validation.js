(function () {
  "use strict";

  window.addEventListener(
    "load",
    function () {
      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.getElementsByClassName("needs-validation");

      // Loop over them and prevent submission
      Array.prototype.filter.call(forms, function (form) {
        form.addEventListener(
          "submit",
          function (event) {
            if (form.checkValidity() === false) {
              event.preventDefault();
              event.stopPropagation();
            }
            form.classList.add("was-validated");
          },
          false
        );
      });
    },
    false
  );

  const checked = () => {
    if (
      document.getElementById("password1").value ==
      document.getElementById("password2").value
    ) {
      document.getElementById("message").style.color = "green";
      document.getElementById("message").innerHTML = "Passwords match";
      return true;
    } else {
      document.getElementById("message").style.color = "red";
      document.getElementById("message").innerHTML = "Passwords do not match";
      return false;
    }
  };
})();
