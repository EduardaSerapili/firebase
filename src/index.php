<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST</title>

    <script type="module">
  // Import the functions you need from the SDKs you need
  import { initializeApp } from "https://www.gstatic.com/firebasejs/10.12.1/firebase-app.js";
  import { getAuth, createUserWithEmailAndPassword } from "firebase/auth";
  // TODO: Add SDKs for Firebase products that you want to use
  // https://firebase.google.com/docs/web/setup#available-libraries

  // Your web app's Firebase configuration
  const firebaseConfig = {
    apiKey: "",
    authDomain: "primeirofirebase-827b0.firebaseapp.com",
    projectId: "primeirofirebase-827b0",
    storageBucket: "primeirofirebase-827b0.appspot.com",
    messagingSenderId: "990093444775",
    appId: "1:990093444775:web:0dcad05147f1247287fd82"
  };

  // Initialize Firebase
  window.fbApp = initializeApp(firebaseConfig);
  window.fbAuth = getAuth(window.fbApp)
  console.log(window.fbApp)
  
  const btnRegister = document.getElementById('btnRegister');
  btnRegister.addEventListener('click', () =>{
    const email= document.getElementById('email').value;
    const password = document.getElementById('password').value;
    console.log(email);
    console.log(password);
    try{
        const userCredential = await createUserWithEmailAndPassword(fbApp, email, password);
        console.log(userCredential);
    }catch(error){
        console.error(error);
    }
  })
</script>

</head>
<body>
    <h1>TODO LIST</h1>
    <?php
        include 'main.php' ?>

        <label for="email">Email</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" id="password" name="password"><br>
        <button class="btnRegister">Resgistrar</button>


</body>
</html>