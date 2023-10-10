// let mahasiswa = {
//   name: "Dhayus Syahri",
//   nrp: "2016230177",
//   email: "dhayus190997@gmail.com"
// }

// console.log(JSON.stringify(mahasiswa));


//  Vanila JavaScript
// let xhr = new XMLHttpRequest();
// xhr.onreadystatechange = function ()
// {
//   if (xhr.readyState == 4 && xhr.status == 200)
//   {
//     let mahasiswa = JSON.parse(this.responseText);
//     console.log(mahasiswa);
//     }
// }

// xhr.open('GET', 'coba.json', true);
// xhr.send();


// JQuery
$.getJSON('coba.json', function (data) {
  console.log(data)
});