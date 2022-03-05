function mysettings(){
    document.getElementById("mySettings").style.display="block";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    if(document.getElementById("newservice").classList.contains("active")){
    document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
    document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
    document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
    document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
    document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
    document.getElementById("customer").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
    document.getElementById("dashboard1").classList.remove("active");
    }
    getdata();
}


function dashboard(){
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("dashboard").style.display="block";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("dashboard1").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
    document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
    document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
    document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
    document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
    document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
    document.getElementById("customer").classList.remove("active");
    }
}
function newservice(){
    document.getElementById("newservicerequests").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("newservice").classList.add("active");
    if(document.getElementById("upcoming").classList.contains("active")){
        document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
        document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
        document.getElementById("customer").classList.remove("active");
    }
    newservicerequestdata();
}

function upcoming(){
    document.getElementById("upcomingservice").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("upcoming").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
        document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
        document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
        document.getElementById("customer").classList.remove("active");
    }
}
       
function schedule(){
    document.getElementById("serviceschedule").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("schedule").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
        document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
        document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
        document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
        document.getElementById("customer").classList.remove("active");
    }
}

function history(){
    document.getElementById("servicehistory").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("history").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
        document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
        document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
        document.getElementById("ratings").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
        document.getElementById("customer").classList.remove("active");
    }
}

function ratings(){
    document.getElementById("myratings").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("bookcustomer").style.display="none";
    document.getElementById("ratings").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
        document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
        document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("customer").classList.contains("active")){
        document.getElementById("customer").classList.remove("active");
    }
}

function bookcustomer(){
    document.getElementById("bookcustomer").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("upcomingservice").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("newservicerequests").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("myratings").style.display="none";
    document.getElementById("customer").classList.add("active");
    if(document.getElementById("newservice").classList.contains("active")){
        document.getElementById("newservice").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("upcoming").classList.contains("active")){
        document.getElementById("upcoming").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("ratings").classList.contains("active")){
        document.getElementById("ratings").classList.remove("active");
    }
}

function details(){
    document.getElementById('nav-home').style.display="block";
    document.getElementById('nav-contact').style.display="none";
    document.getElementById('mdetail').classList.add("selected");
    document.getElementById('cpass').classList.remove("selected");
}
function changepass(){
    document.getElementById('nav-home').style.display="none";
    document.getElementById('nav-contact').style.display="block";
    document.getElementById('cpass').classList.add("selected");
    document.getElementById('mdetail').classList.remove("selected");
}
var img1 = document.getElementById("img1");
var img2 = document.getElementById("img2");
var img3 = document.getElementById("img3");
var img4 = document.getElementById("img4");
var img5 = document.getElementById("img5");
var img6 = document.getElementById("img6");
function image1(){
    // if(img1.checked){
    $(".imgall").attr("src","./assets/images/avatar-female.png");
    // }
}
function image2(){
    // if(img2.checked){
    $(".imgall").attr("src","./assets/images/avatar-car.png");
    // }
}
function image3(){
    // if(img3.checked){
    $(".imgall").attr("src","./assets/images/avatar-hat.png");
    // }
}
function image4(){
    // if(img4.checked){
    $(".imgall").attr("src","./assets/images/avatar-iron.png");
    // }
}
function image5(){
    // if(img5.checked){
    $(".imgall").attr("src","./assets/images/avatar-male.png");
    // }
}
function image6(){
    // if(img6.checked){
    $(".imgall").attr("src","./assets/images/avatar-ship.png");
    // }
}

function getdata(){
    
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var dob = document.getElementById("dob");
    var nationality = document.getElementById("nationality");
    var sname = document.getElementById("sname");
    var hnumber = document.getElementById("hnumber");
    var postalcode = document.getElementById("postalcode");
    var city = document.getElementById("city");
    
    $.ajax({
      url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=getdata',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      method: 'GET',
      dataType:'json',
      data : $('#datauser').serialize(),
      success:function(data){
        var count = Object.keys(data).length; //alert(count);
        
        for(let i=0;i < count; i++){
         $(".imgall").attr('src',"./assets/images/"+data[i].UserProfilePicture);  
         fname.setAttribute('value', data[i].FirstName);
         lname.setAttribute('value',  data[i].LastName);
         email.setAttribute('value',  data[i].Email);
         mobile.setAttribute('value',  data[i].Mobile);
         dob.setAttribute('value',  data[i].DateOfBirth);
         nationality.value =  data[i].NationalityId;
         if(data[i].Gender == 1){
            document.getElementById("exampleRadios1").checked = true;
         } 
         else{
            document.getElementById("exampleRadios1").checked = false;
         }
         if(data[i].Gender == 2){
            document.getElementById("exampleRadios2").checked = true;
         }
         else{
            document.getElementById("exampleRadios2").checked = false;
         }
          if(data[i].Gender == 3){
            document.getElementById("exampleRadios3").checked = true;
         }
         else{
            document.getElementById("exampleRadios3").checked = false;
         }
         
        if(data[i].UserProfilePicture == 'avatar-female.png'){
            document.getElementById("img1").checked = true;
        }
        else{
            document.getElementById("img1").checked = false;
        }
        if(data[i].UserProfilePicture == 'avatar-car.png'){
            document.getElementById("img2").checked = true;
        }
        else{
            document.getElementById("img2").checked = false;
        }
        if(data[i].UserProfilePicture == 'avatar-hat.png'){
            document.getElementById("img3").checked = true;
        }
        else{
            document.getElementById("img3").checked = false;
        }
        if(data[i].UserProfilePicture == 'avatar-iron.png'){
            document.getElementById("img4").checked = true;
        }
        else{
            document.getElementById("img4").checked = false;
        }
        if(data[i].UserProfilePicture == 'avatar-male.png'){
            document.getElementById("img5").checked = true;
        }
        else{
            document.getElementById("img5").checked = false;
        }
        if(data[i].UserProfilePicture == 'avatar-ship.png'){
            document.getElementById("img6").checked = true;
        }
        else{
            document.getElementById("img6").checked = false;
        }
        sname.setAttribute('value', data[i].AddressLine2);
         hnumber.setAttribute('value',  data[i].AddressLine1);
         postalcode.setAttribute('value',  data[i].PostalCode);
         city.setAttribute('value',  data[i].City);

        }
      },
      error:function(err){
       console.error(err);
      }
  
    });
}

$('#btnClick').on('click', function(event){
    var firstname = $('.firstname').val();
    var lastname = $('.lastname').val();
    var email1 = $('.email1').val();
    var number = $('.number').val();
    var dob1 = $('.dob1').val();
    var stname = $('.stname').val();
    var hno = $('.hno').val();
    var pcode = $('.pcode').val();
    var city1 = $('.city1').val();
    if(firstname == '' || lastname == '' || email1 == '' || dob1 == '' || number == '' || stname == '' || hno == '' || pcode == '' || city1 == ''){
        alert('All Fields are required');
        event.preventDefault();
    }else{
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=editspaddress',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:$('#datauser').serialize(),
        success:function(data){
            if(data == "yes"){
                swal("Good job!", "data updated SuccessFully", "success");
            }
            else{
                swal({
                  title: "Alert!",
                  text: "Out of service pls enter another postalcode",
                  icon: "warning",
                  dangerMode: true,
                });
            }
        },
        error:function(err){
         console.error(err);
        }
    });
    }
});


function changepassword(){

    var password1 =document.getElementById("password1").value;
    var newpassword=document.getElementById("newpassword").value;
    var confirmpassword=document.getElementById("confirmpassword").value;
    var regex= new RegExp(/^(?=.*[A-Za-z])(?=.*\d)(?=.*[@$!%*#?&])[A-Za-z\d@$!%*#?&]{8,}$/);
    if(password1 == "" || newpassword == "" || confirmpassword == "" ){
        swal({
          title: "Alert!",
          text: "pls enter required Fields",
          icon: "warning",
          dangerMode: true,
        });
    }
    else if(newpassword != confirmpassword ){
        swal({
            title: "Alert!",
            text: "new password and confirm password doesnot match",
            icon: "warning",
            dangerMode: true,
          });
    }
    else if(newpassword == password1 ){
        swal({
            title: "Alert!",
            text: "You enter password which is same for your previous password ! Pls Enter anthor Password! ",
            icon: "warning",
            dangerMode: true,
          });
    }
    else if(regex.test(newpassword) == false){
        swal({
            title: "Alert!",
            text: "Password must contain atleast 8 characters,one uppercase,one number,one special characters",
            icon: "warning",
            dangerMode: true,
          });
    }
    else{
        $.ajax({
            url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=changepassword',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            method: 'POST',
            dataType:'json',
            data:{
                password :password1 ,
                newpassword :newpassword , 
                confirmpassword :confirmpassword , 
            },
            success:function(data){
            if(data == "yes"){
            swal("Good job!", "password updated SuccessFully", "success");
            $("#forpassword").trigger('reset');
            }
            else{
                swal({
                    title: "Alert!",
                     text: "Old password doesnot match",
                    icon: "warning",
                    dangerMode: true,
                });
            } 
            },
            error:function(err){
            console.error(err);
            }
        });  
    }  

}

function getTimeAndDate(sdate, stime) {
    
    var dateobj = new Date(sdate);
    var startdate = dateobj.toLocaleDateString("en-IN");
    
    var starttime = ("0" + dateobj.getHours()).slice(-2) + ":" + ("0" + dateobj.getMinutes()).slice(-2);
    var totalhour = stime;

    var endhour = dateobj.getHours() + Math.floor(totalhour);
    var endmin = (totalhour - Math.floor(totalhour)) * 60 + dateobj.getMinutes();
    if (endmin >= 60) {
        endhour = endhour + Math.floor(endmin / 60);
        endmin = (endmin / 60 - Math.floor(endmin / 60)) * 60;
    }
    var endtime = ("0" + endhour).slice(-2) + ":" + ("0" + endmin).slice(-2);
    return { startdate: startdate, starttime: starttime, endtime: endtime };
}


function newservicerequestdata(){
    var myTable= $("#mytable1").DataTable();
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=newservicerequestdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#newservicerequestdata').empty();
            myTable.clear().draw();
            
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                myTable.row.add($(  `<tr data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}" onclick="servicedetails($(this));" "data-bs-toggle="modal"
                data-bs-target="#ServiceAcceptModal"
                data-bs-dismiss="modal">
               
                                <td>${data[i].ServiceRequestId}</td>
                                <td>
                                    <div><img src="./assets/images/calculator.png"><b>${totaltime.startdate}</b></div>
                                    <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+ totaltime.endtime}</div>
                                </td>
                                <td>
                                    <div>${data[i].FirstName +" "+ data[i].LastName}</div>
                                    <div><img src="./assets/images/layer-719.png">${data[i].AddressLine1+" "+data[i].AddressLine2+","+data[i].PostalCode+" "+data[i].City}</div>
                                </td>
                                <td> <i class="fa fa-eur"></i>${data[i].TotalCost}</td>
                                <td></td>
                                <td class="buttonaccept">
                                    <button data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}" onclick="servicedetails($(this));" "data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>`
                )).draw();

            }
        },
        error:function(err){
         console.error(err);
        }
    
    });
}
  
function getservicedetails(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=getservicedetails',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        data:$('#servicedetails').serialize(),

        success:function(data){
            
            var count = Object.keys(data).length; 
            
            
            for(let i=0; i<count; i++){
               
                $("#duration").text(data[i].SubTotal);
                $("#serviceid").text(data[i].ServiceId);
               $("#totalcost").text(data[i].TotalCost);
               var abc = data[i].AddressLine1 + ' '+ data[i].AddressLine2 +' ' + data[i].PostalCode +' ,' + data[i].City;
               $("#address").text(abc);
                $("#mobile1").text(data[i].Mobile);
               $("#email1").text(data[i].Email);
               $("#comments").text(data[i].Comments);
               if(data[i].HasPets == 1){
                   var comm = "I have pet at home";
               }
               else if(data[i].HasPets == 0){
                var comm = "I have not pet at home";
               }
               $("#haspets").text(comm) ;
               var e = data[i].ServiceExtraId;
             let myFunc = num => Number(num);
            var array = Array.from(String(e), myFunc);
             
               if(array.includes(1)){
                   var comm1 = "inside cabinet";
               }
               else{
                var comm1 = " ";
               }
                if(array.includes(2)){
                var comm2 = "inside Fridge";
               }
                else{
                var comm2 = " ";
               }
                if(array.includes(3)){
                var comm3 = "inside oven";
               }
               else{
                var comm3 = " ";
               }
             if(array.includes(4)){
                var comm4 = "laundary Wash & dry";
               }
               else{
                   var comm4 = " ";
               }
                if(array.includes(5)){
                var comm5 = "interior windows";
               }
               else{
                var comm5 = " "; 
               }
               
               var comm = comm1 +' '+comm2 +' '+comm3 +' '+comm4 +' '+comm5;
              $("#extra").text(comm) ;
            
            }
        },
        error:function(err){
         console.error(err);
        }
    
    });
}

function accept(){
    var service_id1=document.getElementById("service_id1").value;
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=accept',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            service_id1 : service_id1,
        },
        success:function(data){
            if(data == "yes"){
                swal("Good job!", "You have accept service Request", "success");
                newservicerequestdata();
            }
            else{
                swal({
                  title: "Alert!",
                  text: "Service Request does not Accepted",
                  icon: "warning",
                  dangerMode: true,
                });
            }
        },
        error:function(err){
         console.error(err);
        }
    });

}

  
            
 
