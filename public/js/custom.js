function sendData(){
console.log("function");
   var myName=  document.getElementById('myName').value;
   var myClass=  document.getElementById('myClass').value;
   var myRoll=  document.getElementById('myRoll').value;
   console.log(myName);
//    alert (myName+myClass+myRoll);

   const url='/insertData';
   const data ={name: myName ,class:myClass, roll:myRoll}

   axios.post(url,data)
  .then(function (response) {
    console.log(response.data);
  })
  .catch(function (error) {
    console.log(error.data);
  });

}

function DeleteData(){

    var myID=  document.getElementById('myID').value;

    const url='/deleteData';
   const data ={id: myID };

   axios.post(url,data)
   .then(function (response) {
     console.log(response.data);
   })
   .catch(function (error) {
     console.log(error.data);
   });
}


function updateData(){

    var myID=  document.getElementById('myID').value;
    var myName=  document.getElementById('myName').value;
    var myClass=  document.getElementById('myClass').value;
    var myRoll=  document.getElementById('myRoll').value;

    const url='/updateData';
   const data ={name: myName ,class:myClass, roll:myRoll,id: myID };

   axios.post(url,data)
   .then(function (response) {
     console.log(response.data);
   })
   .catch(function (error) {
     console.log(error.data);
   });
}
