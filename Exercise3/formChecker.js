function addressChecker()
{
  let address = document.getElementById("eadd").value;
  // Ragex Check
let test = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(address);
  if(test == false)
  {
    alert ("error email entered in incorrect format!");
  }

}

function passwordChecker()
{
  let pass= document.getElementById("pass").value;
  if(pass =="")
  {
    alert("You entered a blank field!");
  }
}
function shippingChecker()
{
  let myBool = false;
   let select = document.getElementsByName("free");
   for(let i=0;i<select.length;i++)
     {
       if( select[i].checked != false)
       {
         myBool = true;
       }

     }
     if(myBool == false)
     {
       alert("YOU DID NOT SELECT SHIPPING OPTION");
     }
}
function testCheck1()
{
  let val =  document.getElementById("shirtInput").value;
  if(val <0 || val == "")
  {
    alert("ERROR you may have left this field blank or entered a number less than 0!");

  }

}
function testCheck2()
{
  let val =  document.getElementById("pantsInput").value;
  if(val <0 || val == "")
  {
    alert("ERROR you may have left this field blank or entered a number less than 0!");

  }

}
function testCheck3()
{
  let val =  document.getElementById("jerseyInput").value;
  if(val <0 || val == "")
  {
    alert("ERROR you may have left this field blank or entered a number less than 0!");

  }

}

function resetShipping()
{

   let select = document.getElementsByName("free");

    for(let i=0;i<select.length;i++)
      {
    select[i].checked = false;
      }

      document.getElementById("m_form").reset();


   }
