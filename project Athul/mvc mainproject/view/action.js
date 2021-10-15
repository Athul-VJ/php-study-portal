function TeachermyFunction(){
  /* Get the text field */
  var copyTextt = document.getElementById("Inputtusr");

  /* Select the text field */
  copyTextt.select();
  copyTextt.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the Username: " + copyTextt.value);
} 
function myFunction(){
    var copyText = document.getElementById("Inputsix");

  /* Select the text field */
  copyText.select();
  copyText.setSelectionRange(0, 99999); /* For mobile devices */

  /* Copy the text inside the text field */
  document.execCommand("copy");

  /* Alert the copied text */
  alert("Copied the text: " + copyText.value);
 
}
function usrnm()
{
   const namm=document.getElementById("Input").value;
  const nam=namm.split(/\s/).join('');
const yerr=document.getElementById("Inputtwo").value;
    const yer=yerr.split(/\s/).join('');
    const admssnnn=document.getElementById("Inputfour").value; 
    const admssnn=admssnnn.split(/\s/).join('');
    
document.getElementById("Inputsix").value=nam+"@"+yer+"_"+admssnn
    
        //+admsn+year

}
function usrnmm()
{
 const nmn=document.getElementById("Input").value;
   const nm=nmn.split(/\s/).join('');
const yea=document.getElementById("Inputtwo").value; 
    const year=yea.split(/\s/).join('');
    const admsss=document.getElementById("Inputfour").value; 
    const admss=admsss.split(/\s/).join('');

 document.getElementById("Inputsix").value=nm+"@"+year+"_"+admss
}
function usrnmme()
{
 const nmmm=document.getElementById("Input").value;
      const nmm=nmmm.split(/\s/).join('');

const yearrr=document.getElementById("Inputtwo").value;
          const yearr=yearrr.split(/\s/).join('');

const admssns=document.getElementById("Inputfour").value; 
          const admssn=admssns.split(/\s/).join('');

 document.getElementById("Inputsix").value=nmm+"@"+yearr+"_"+admssn
}
function loadfocus(){
    document.getElementById("Input").focus();
    setInterval(function(){
      document.getElementById("imgtgl").src = "../png/dev_final.png";
   
      
      setInterval(function(){
        
        document.getElementById("imgtgl").src = "../png/02-home.png";
        
      }, 2000);
  
  
    }, 1000);
    
}

function ValidateEmail(mail)
{
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
if(!document.form1.mail.value.match(mailformat))
{
alert("You have entered an invalid email address!");  
    document.form1.mail.focus();

return false;
}
}
function tchrnm(){
    
    const ttt=document.getElementById("tInputnm").value;
    const tnm=ttt.split(/\s/).join('');
    const emp=document.getElementById("Inputemnm").value;
    const emnm=emp.split(/\s/).join('');
    document.getElementById("Inputtusr").value=emnm+"_"+tnm
}
function SubmitValidation(){
  let pss=document.getElementById("Inputseven").value;
  let cpss=document.getElementById("Inputeight").value;
  let mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
  let dt = new Date();
       let yrr=   dt.getFullYear();
  if(document.getElementById("Input").value.length<2){
    alert("Enter The Valid Name");
    
    return false;
  }
  else if(document.getElementById("Inputtwo").value.length<4 && document.getElementById("Inputtwo").value>yrr){
    alert("Year is not Valid,Please Enter The Valid Year");
    return false;
  }else if(document.getElementById("Inputthree").value=="NotValid"){
    alert("Please Select Your Branch");
    return false;
  }else if(pss!=cpss && cpss!=pss ){
    alert("password and confirm password should be same");
    return false;
  }else if(document.getElementById("Inputseven").value.length<8 ){
    alert("password Must be 8 characters");
    return false;
  }
  else if(!document.getElementById("Inputfive").value.match(mailformat)){
    alert("enter valid email id");
    return false;
  }
  else{
    myFunction();
  }
}
// alert();const togglePassword = document.querySelector('#togglePassword');
 function psstgl(){
  const togglePassword = document.querySelector('#togglePassword');
  const password = document.querySelector('#id_password');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
 }
 function cpsstgl(){
  const togglePassword = document.querySelector('#ctogglePassword');
  const password = document.querySelector('#Inputeight');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
 }
 function ccpsstgl(){
  const togglePassword = document.querySelector('#cctogglePassword');
  const password = document.querySelector('#Inputseven');
 
  togglePassword.addEventListener('click', function (e) {
    // toggle the type attribute
    const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
    password.setAttribute('type', type);
    // toggle the eye slash icon
    this.classList.toggle('fa-eye-slash');
});
 }
function passch(){
    var fpass=document.getElementById("spass").value;
    //alert(fpass);
    var vid=document.getElementById("value").innerHTML;
   
    var dataJson={
        fpass:fpass,
        id:vid    }
    var data=JSON.stringify(dataJson);
//    alert(data);
    var xmlhttp = new XMLHttpRequest();
   
   
  xmlhttp.open( "POST","../controller/passwrdRest.php?q=" +data);
  xmlhttp.send();
          
               
                   alert("password updated successfully");
                 window.location.href = "index.php";
           }

 function validpass(){
     var fpass=document.getElementById("spass").value;
     var sspass=document.getElementById("fpass").value;
//     alert(sspass);
     if(fpass!=sspass && sspass!=fpass){
         alert("password and confirm password should be same");
    return false;
     }else if(document.getElementById("spass").value.length<8){
       alert("password Must be 8 characters");
    return false;  
     }else{
         passch();
     }
     
 }
function teacherValid(){
    let ss = new Date();
       let yr= ss.getFullYear();
    var spasss=document.getElementById("Input6").value;
    var fpasss=document.getElementById("Input7").value;
   if(document.getElementById("tInputnm").value.length<3){
       alert("name is not valid");
    document.getElementById("tInputnm").focus();
     return false;
   }
    else if(document.getElementById("Inputemnm").value.length<4){
         alert("employe id is not valid");
    document.getElementById("Inputemnm").focus();
         return false;
    }else if(document.getElementById("Input2").value.length<4){
        alert("college name is not valid");
    document.getElementById("Input2").focus();
         return false;
    }else if(document.getElementById("Input4").value!=yr){
         alert("year is not valid");
         document.getElementById("Input4").focus();
         return false;
    }else if(document.getElementById("Input6").value.length<8){
        alert("password contain minimum 8 characters");
    document.getElementById("Input6").focus();
         return false; 
    }else if(spasss!=fpasss && fpasss!=spasss){
        alert("password and confirm password should be same");
    document.getElementById("Input6").focus();
         return false; 
    }
    else{
     TeachermyFunction();
    }
}
 