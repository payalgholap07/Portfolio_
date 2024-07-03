let menuIcon = document.querySelector('#menu-icon');
let navbar = document.querySelector('.navbar');
menuIcon.onclick = () => {
  navbar.classList.toggle('active');
  menuIcon.classList.toggle('bx-x')
};

//Scroll section
let section = document.querySelectorAll('section');
let navLinks = document.querySelectorAll('section');

window.onscroll = () => {
  section.forEach(sec => {
    let top = window.scrollY;
    let offset = sec.offsetTop-150;
    let height = sec.offsetHeight;
    let id = sec.getAttribute('id');
    if (top > offset && top < (offset + height)) {
      navLinks.forEach(link => {
        links.classList.remove('active');
        document.querySelector('header nav a[href*=' + id+ ']').classList.add('active');
        });
        }
  });

 let header = document.querySelector('header');
 header.classList.toggle('sticky' , window.scrollY>100);

 menuIcon.classList.remove('bx-x');
 navbar.classList.remove('active');
};

ScrollReveal({
  reset: true,
  distance: '50px',
  duration: 2000,
  delay: 200
});

ScrollReveal.reveal('.home-content, .heading',{origin: 'top'});
ScrollReveal.reveal('.home-img, .skills-container, .project-box, .contact form',{origin: 'bottom'});
ScrollReveal.reveal('.home-content h1, .about-img',{origin: 'left'});
ScrollReveal.reveal('.home-content p, .about-content',{origin: 'right'});

/***************************************************************************************************************************** */



// function saveAccount(){
//   var mysql = require('mysql');
  
//   var con = mysql.createConnection({
//     host: "localhost",
//     user: "root",
//     password: "abc123",
//     database: "PBSC_Parking_DB"
//   });
  
//   con.connect(function(err) {
//     if (err) throw err;
//   console.log("connected");
//   });
  
//   var firstName = document.getElementById("firstName");
//   var lastName = document.getElementById("lastName");
//   var psw = document.getElementById("psw");
//   var userName = document.getElementById("userName");
//   var email = document.getElementById("inputText");
  
  
  
//   var sql = "INSERT INTO accounts (UserName, FirstName, LastName, Email, UserPassword) VALUES ('"+userName+ "', '"+firstName+"','"+lastName+"','"+email+"','"+psw+"')";
//   con.query(sql, function (err, result) {
//       if (err) {
//           throw err;
  
//       }
  
//       console.log(result.affectedRows + " record(s) updated");




// const { Pool, Client } = require('pg');

// // Create a new PostgreSQL client
// const client = new Client({
//   user: "postgres",
//   host: "localhost",
//   database: "htmlForm",
//   password: "root",
//   port: 5432
// });

// // Connect to the PostgreSQL server
// client.connect();

// // Fetch form values using jQuery
// var name = $("#name").val();
// var email = $("#email").val();
// var number = $("#number").val();
// var emailSub = $("#emailSub").val();
// var message = $("#message").val();

// // Define the SQL query with parameter placeholders
// const query = "INSERT INTO company (name, email, number, emailSub, message) VALUES ($1, $2, $3, $4, $5)";
// const values = [name, email, number, emailSub, message];

// // Execute the query with the provided values
// client.query(query, values, function (err, result) {
//   if (err) {
//     console.error('Error executing query', err.stack);
//   } else {
//     console.log('Query result', result);
//   }
// });

// // Close the client connection
// client.end();


//var sql = "INSERT INTO form (name, email,description) VALUES ('"+name+"', '"+email+"','"+username+"')";
