<html>
<head>
    <script>

        function namevalidation(){
    var name=document.getElementById("fname").value;
    var na=document.getElementById("fn");
    var namepattern=/^[A-Za-z]+$/;
    if(name.match(namepattern)){
        na.innerHTML="Good Name";
        na.style.color="#00ff00";
    }
    else{
         na.innerHTML="Enter valid name";
        na.style.color="#ff0000";
    }
}


//////////////////// email onkeydown event

function emailvalidation(){
    var email=document.getElementById("email").value;
    var em=document.getElementById("em");
    var empattern= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;

    if(email.match(empattern)){
        em.innerHTML=" Good Email";
        em.style.color="#00ff00";
    }
    else{
         em.innerHTML="Enter valid Email";
        em.style.color="#ff0000";
    }
}

///////////// num validation
function numvalidation(){
    var phone=document.getElementById("mobile").value;
    var ph=document.getElementById("ph");
    var phonepattern= /^\(?([0-9]{3})\)?[-. ]?([0-9]{3})[-. ]?([0-9]{4})$/ ;

    if(phone.match(phonepattern)){
        ph.innerHTML="number Valid";
        ph.style.color="#00ff00";
    }
    else{
        ph.innerHTML="Invalid Number";
        ph.style.color="#ff0000";
    }
}



function datevalidation(){
     var date=document.getElementById("date").value;
    var da=document.getElementById("da");

    if(date==""){

    }
    else{
        da.innerHTML="good date";
        da.style.color="#00ff00";
    }

}


function eventvalidation(){
    var event=document.getElementsByName("event").value;
        var ev=document.getElementById("ev");
        if(event==""){

        }
        else{
            
        ev.innerHTML="event selected";
        ev.style.color="#00ff00";
        }

}

function eventstagevalidation(){
    var eventstg=document.getElementsByName("eventstg").value;
        var evs=document.getElementById("evs");
        if(eventstg==""){

        }
            else{
            
        evs.innerHTML="event stage selected";
        evs.style.color="#00ff00";
        }

}
function packagevalidation(){
    var eventpcg=document.getElementsByName("eventpcg").value;
        var evz=document.getElementById("evz");
        if(eventpcg==""){

        }
            else{
            
        evz.innerHTML="package selected";
        evz.style.color="#00ff00";
        }

}


/////////////////////////////////////////////////////////////////////////////////////////////////// submit validations

function formvalidation(){          
    debugger                     // calling by name

     let name = document.forms["myForm"]["fname"].value;
     let email = document.forms["myForm"]["email"].value;
     let phone = document.forms["myForm"]["mobile"].value;
    let date = document.forms["myForm"]["date"].value;

//
    let eventtype = document.forms["myForm"]["event"].value;


 // name validation in submit 
if (name == "") {
    document.getElementById('fn').innerHTML="fill name";
     return false;
  }
var namepattern=/^[A-Za-z]+$/;
if(name.match(namepattern)){ 

}
else{
    alert("Name Should Be Albhabets");
    return false;
}

///////////

/////////////////////////// email  validation after button click
   if (email == "") {
       document.getElementById('em').innerHTML="fill Email";
    return false;
  }

var empattern= /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
if(email.match(empattern)){ 

}
else{
    alert("'abc@gmail.com' should be email form");
    return false;
}




////////////////////////phone validation after submit
 if (phone == "") {
    document.getElementById('ph').innerHTML="fill Phone Number";
    //alert("Enter Phone number");
    return false;
  }

var phonepattern= /^((\+1)?[\s-]?)?\(?[1-9]\d\d\)?[\s-]?[1-9]\d\d[\s-]?\d\d\d\d/ ; // storing pattern

if(phone.match(phonepattern)){                                                      // checking patter

}
else{
    document.getElementById('ph').innerHTML="invalid phone number";                 //printing output to span
    return false; 
}

///////////////////////////////////////////////////date 
if (date == "") {
    document.getElementById('da').innerHTML="fill the date";
    return false;
  }
////////////////////////////////////// no of person

/////////////////////////////////////////event type
// var evnt=document.getElementsByName("event").value;
if (eventtype == "-1") {
    document.getElementById('ev').innerHTML="fill the event";
    return false;
  }


if (eventstage == "-1") {
    document.getElementById('evs').innerHTML="fill event stage";
    return false;
  }

  if (package== "-1") {
    document.getElementById('evz').innerHTML="fill package";
    return false;
  }

}

</script>

<title>Registration Form</title>
<link type="text/css" rel="stylesheet" href="../CSS/rgs.css"/>
<script src="/validation.js"></script>
</head>
 
<body>
<a href="loginphp.php"><font style="font-size:20px;">Back</font></a>
<h3 style="font-family:cursive; font-size: 25px;"><i>REGISTRATION FORM</i></h3>

    <form action="registrationPhp.php" method="POST" name="myForm">
     <!-- action="registrationPhp.php" method="post"> -->
<table align="center" cellpadding = "10">

 <!-- First Name -->
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="fname" id="fname" maxlength="30" autocomplete="off" onkeydown="namevalidation()"/>
    <span id="fn"></span> 

    <!-- given span to print output -->

</td> 
</tr>

<!-- Last Name -->
<tr>
<td>LAST NAME</td>
<td><input type="text" name="lname" id="lname" maxlength="30" />

</td>
</tr>
<!-- Date Of Birth  -->


 <!-- Email Id  -->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="email" id="email" maxlength="100" onkeydown="emailvalidation()" />
    <span id="em"></span>
</td>
</tr>

 <!-- Mobile Number  -->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="mobile" id="mobile" maxlength="11" onchange="numvalidation()" placeholder="10 digit number" 
    pattern ="[0-9]{10}" title="10 digit number"  required />
<span id="ph"></span>

</td>
</tr>

 <!-- date- -->
 <div class="form-group">

<tr>
<td>DATE/TIME</td>
<td>
<input class="form-control" type="date" name="date" min="2021-12-11" required="" onchange="datevalidation()" />

<span id="da"></span>
</td>
</tr>
</div>
 <!-- Gender  --> 
<tr>
<td>NO.OF PERSON</td>
<td>
<input type="number" min="0" name="person" id="person" maxlength="" />

</td>
</tr>
  <!-- Event type  -->
<tr>
<td>EVENT TYPE</td>
<td>

<select id="event" name="event"  onchange="eventvalidation()">

<option value="-1">                   </option>
<option value="Birthday">Birthday</option>
<option value="Holud">Holud</option>
<option value="Wedding">Wedding</option>
<option value="Office party">Office party</option>
<option value="House Party">House Party</option>

</select>
<span id="ev"></span>
</td>
</tr>

<tr>
<td>EVENT STAGE</td>
<td>

<select id="" name="event_stage" onchange="eventstagevalidation()">

<option value="-1">                   </option>
<option value="Langthu Rai Chinese">Langthu Rai Chinese</option>
<option value="Royal Chef Restaurant">Royal Chef Restaurant</option>
<option value="Mandari Chinese Garden">Mandari Chinese Garden</option>
<option value="Aman Ullah Convention Center">Aman Ullah Convention Center</option>
<option value="Sonargaon Centre">Sonargaon Centre</option>
<option value="Pallabi Community Center">Pallabi Community Center</option>
<option value="HillView Convention Center">HillView Convention Center</option>
<option value="Sunrise Community Center">Sunrise Community Center</option>
<option value="Agra Community Centre">Agra Community Centre</option>
<option value="Hafiz Complex">Hafiz Complex</option>
<option value="Boirati Community Centre">Boirati Community Centre</option>
<option value="Rose View Hotel">Rose View Hotel</option>
<option value="Nirvana Inn">Nirvana Inn</option>
<option value="Hotel Valley Garden">Hotel Valley Garden</option>
<option value="Hotel Noorjahan Grad">Hotel Noorjahan Grad</option>
<option value="Lulu Conventional Centre">Lulu Conventional Centre</option>
<option value="Mariot Hotel">Mariot Hotel</option>

</select>
<span id="evs"></span>

</td>
</tr>

<tr>
<td>PACKAGE</td>
<td>
<select id="" name="package" onchange="packagevalidation()">

<option value="-1">                   </option>
<option value="Diamond">Diamond</option>
<option value="Platinum">Platinum</option>
<option value="Golden">Golden</option>

</select>
<span id="evz"></span>

</td>
</tr>
<!-- decoration  -->
<tr>
<td>DECORATION</td>


<td>
<select name="decoration">
<option value="yes">Yes</option>
<option value="no">No</option>
</select>

</td>
</tr>

 <!-- FOOD  -->
<tr>
<td>FOOD</td>
<td>
<select name="food">
<option value="lunch">Lunch</option>
<option value="dinner">Dinner</option>
</select>

</td>
</tr>
<!-- Submit and Reset  -->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit" name="submit" onclick=" return  formvalidation()">
<input type="reset" value="Reset">
</td>
</tr>
</table>

</form>
 
</body>
</html>