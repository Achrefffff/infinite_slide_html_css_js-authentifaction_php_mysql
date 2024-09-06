$(document).ready(function () {
  $("#registerForm").submit(function (event) {
    event.preventDefault();

    const username = $("#username").val();
    const email = $("#email").val();
    const password = $("#password").val();

    // Validation 
    if (username.length < 3) {
      $("#registerMessage").html(
        '<p style="color:red;">Le nom d\'utilisateur doit contenir au moins 3 caractères.</p>'
      );
      return;
    }

    if (!validateEmail(email)) {
      $("#registerMessage").html(
        '<p style="color:red;">Veuillez entrer une adresse email valide.</p>'
      );
      return;
    }

    if (password.length < 6) {
      $("#registerMessage").html(
        '<p style="color:red;">Le mot de passe doit contenir au moins 6 caractères.</p>'
      );
      return;
    }

    // AJAX
    $.ajax({
      url: "php/auth.php",
      method: "POST",
      data: {
        register: true,
        username: username,
        email: email,
        password: password,
      },
      success: function (response) {
        console.log("Réponse brute : ", response); 

        
        const data = response;

        if (data.success) {
          $("#registerMessage").html(
            '<p style="color:green;">Inscription réussie ! Redirection vers la page de connexion...</p>'
          );
          setTimeout(function () {
            window.location.href = "login.html";
          }, 2000);
        } else {
          $("#registerMessage").html(
            '<p style="color:red;">' + data.message + "</p>"
          );
        }
      },
      error: function (xhr, status, error) {
        console.error("Erreur AJAX : ", error); 
        $("#registerMessage").html(
          '<p style="color:red;">Erreur de communication avec le serveur. Veuillez réessayer plus tard.</p>'
        );
      },
    });
  });

  // Formulaire de connexion 
  $("#loginForm").submit(function (event) {
    event.preventDefault();

    const email = $("#email").val();
    const password = $("#password").val();

    if (!validateEmail(email)) {
      $("#loginMessage").html(
        '<p style="color:red;">Veuillez entrer une adresse email valide.</p>'
      );
      return;
    }

    if (password.length < 6) {
      $("#loginMessage").html(
        '<p style="color:red;">Le mot de passe doit contenir au moins 6 caractères.</p>'
      );
      return;
    }

    $.ajax({
      url: "php/auth.php",
      method: "POST",
      data: {
        login: true,
        email: email,
        password: password,
      },
      success: function (response) {
        console.log("Réponse brute : ", response); 

        
        const data = response;

        if (data.success) {
          $("#loginMessage").html(
            '<p style="color:green;">Connexion réussie ! Redirection...</p>'
          );
          setTimeout(function () {
            window.location.href = "/slide_test/index.php";
          }, 2000);
        } else {
          $("#loginMessage").html(
            '<p style="color:red;">' + data.message + "</p>"
          );
        }
      },
      error: function (xhr, status, error) {
        console.error("Erreur AJAX : ", error); 
        $("#loginMessage").html(
          '<p style="color:red;">Erreur de communication avec le serveur. Veuillez réessayer plus tard.</p>'
        );
      },
    });
  });

  // validation mail
  function validateEmail(email) {
    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return emailPattern.test(email);
  }
});
