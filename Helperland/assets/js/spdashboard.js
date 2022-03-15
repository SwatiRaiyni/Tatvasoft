function html_table_to_excel(type) {
    var data = document.getElementById("mytable");

    var file = XLSX.utils.table_to_book(data, { sheet: "sheet1" });

    XLSX.write(file, { bookType: type, bookSST: true, type: "base64" });

    XLSX.writeFile(file, "history." + type);
}



var map = L.map("mappappend");

 
  async function getmap(zipcode) {
    map.setView([0, 0], 1);
    const attribution = '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors';
    const tileUrl = 'https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png';
    const tiles = L.tileLayer(tileUrl, { attribution });
    tiles.addTo(map);
  
    const response = await fetch('https://nominatim.openstreetmap.org/search?format=json&limit=1&q=india,' + zipcode);
    const data = await response.json();
    const { lat, lon } = data[0];
    map.flyTo([lat, lon], 15);
    L.marker([lat, lon]).addTo(map);

    //console.log(lat);
  }

 



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
    upcomingdata();
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
    historydata();
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
    showcustrating();
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
    showblockcustomerdata();
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
    $(".imgall").attr("src","./assets/images/avatar-female.png");
}
function image2(){
   $(".imgall").attr("src","./assets/images/avatar-car.png");
}
function image3(){
   $(".imgall").attr("src","./assets/images/avatar-hat.png");
}
function image4(){
   $(".imgall").attr("src","./assets/images/avatar-iron.png");
}
function image5(){
   $(".imgall").attr("src","./assets/images/avatar-male.png");
}
function image6(){
    $(".imgall").attr("src","./assets/images/avatar-ship.png");
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
        $(".imgall").attr('src',"./assets/images/"+data['UserProfilePicture']);  
         fname.setAttribute('value', data['FirstName']);
         lname.setAttribute('value',  data['LastName']);
         email.setAttribute('value',  data['Email']);
         mobile.setAttribute('value',  data['Mobile']);
         dob.setAttribute('value',  data['DateOfBirth']);
         nationality.value =  data['NationalityId'];
         if(data['Gender'] == 1){
            document.getElementById("exampleRadios1").checked = true;
         } 
         else{
            document.getElementById("exampleRadios1").checked = false;
         }
         if(data['Gender'] == 2){
            document.getElementById("exampleRadios2").checked = true;
         }
         else{
            document.getElementById("exampleRadios2").checked = false;
         }
          if(data['Gender'] == 3){
            document.getElementById("exampleRadios3").checked = true;
         }
         else{
            document.getElementById("exampleRadios3").checked = false;
         }
         
        if(data['UserProfilePicture'] == 'avatar-female.png'){
            document.getElementById("img1").checked = true;
        }
        else{
            document.getElementById("img1").checked = false;
        }
        if(data['UserProfilePicture'] == 'avatar-car.png'){
            document.getElementById("img2").checked = true;
        }
        else{
            document.getElementById("img2").checked = false;
        }
        if(data['UserProfilePicture'] == 'avatar-hat.png'){
            document.getElementById("img3").checked = true;
        }
        else{
            document.getElementById("img3").checked = false;
        }
        if(data['UserProfilePicture'] == 'avatar-iron.png'){
            document.getElementById("img4").checked = true;
        }
        else{
            document.getElementById("img4").checked = false;
        }
        if(data['UserProfilePicture'] == 'avatar-male.png'){
            document.getElementById("img5").checked = true;
        }
        else{
            document.getElementById("img5").checked = false;
        }
        if(data['UserProfilePicture'] == 'avatar-ship.png'){
            document.getElementById("img6").checked = true;
        }
        else{
            document.getElementById("img6").checked = false;
        }
        if(data['AddressLine2']){
            sname.setAttribute('value', data['AddressLine2']);}
        if(data['AddressLine1']){
            hnumber.setAttribute('value',  data['AddressLine1']);}
        if(data['PostalCode']){
            postalcode.setAttribute('value',  data['PostalCode']);}
        if(data['City']){
            city.setAttribute('value',  data['City']);}

       
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
    //debugger;
    var dateobj = new Date(sdate); //Thu Feb 24 2022 08:56:10 GMT+0530 (India Standard Time) 
    var startdate = dateobj.toLocaleDateString("en-IN"); // '24/2/2022'
    
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

var dt1 = new DataTable("#mytable1", {
    dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
    responsive: true,
    pagingType: "full_numbers",
    language: {
        paginate: {
        first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
        previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
        next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
        last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
        },
        info: "Total Record: _MAX_",
        lengthMenu: "Show_MENU_Entries",
    },
    buttons: ["excel"],
    columnDefs: [{ orderable: false, targets: 5}],
});

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
            $("#btn1").show();
            $("#btn2").hide();
            $("#btn3").hide();
           var postalcode;
            for(let i=0;i < count; i++){
                postalcode = data[i].PostalCode;
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                myTable.row.add($(  `<tr data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}" data-zcode="${data[i].PostalCode}" onclick="servicedetails($(this));" "data-bs-toggle="modal"
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
                                    <button data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}" data-zcode="${data[i].PostalCode}" onclick="servicedetails($(this));" "data-bs-toggle="modal"
                                    data-bs-target="#ServiceAcceptModal"
                                    data-bs-dismiss="modal">Accept</button>
                                </td>
                            </tr>`
                )).draw();
                

            }getmap(postalcode);
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

function showLoader() {
    $.LoadingOverlay("show", {
      background: "rgba(0, 0, 0, 0.7)",
    });
  }

function accept(){
    showLoader();
    var service_id1=document.getElementById("service_id1").value;
    var postalcode=document.getElementById("zipcode").value;
    
    var mydate=document.getElementById("mydate").value;
    var mystart_time=document.getElementById("mystart_time").value;
    var myend_time=document.getElementById("myend_time").value;// alert(mydate+" "+mystart_time+" "+myend_time); return false;
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=accept',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            mydate : mydate,
            postalcode : postalcode,
            service_id1 : service_id1,
            mystart_time : mystart_time,
            myend_time : myend_time
        },
        success:function(data){
            $.LoadingOverlay("hide");
            if(data.error === ""){
                
                swal("Good job!", "You have accept service Request", "success");
                newservicerequestdata();
            }
            else{
                swal({
                  title: "Alert!",
                  text: data.error,
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

function cancel(){
    var service_id1=document.getElementById("service_id1").value;
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=cancel',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            service_id1 : service_id1,
        },
        success:function(data){
            if(data == "yes"){
                swal("Good job!", "You have cancel service Request", "success");
                upcomingdata();
            }
            else{
                swal({
                  title: "Alert!",
                  text: "Service Request does not Cancelled",
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

function complete(){
    var service_id1=document.getElementById("service_id1").value;
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=complete',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            service_id1 : service_id1,
        },
        success:function(data){
            if(data == "yes"){
                swal("Good job!", "You have Complete service Request", "success");
                upcomingdata();
            }
            else{
                swal({
                  title: "Alert!",
                  text: "Service Request does not Completed",
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

var dt5 = new DataTable("#mytable4", {
    dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
    responsive: true,
    pagingType: "full_numbers",
    language: {
        paginate: {
        first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
        previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
        next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
        last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
        },
        info: "Total Record: _MAX_",
        lengthMenu: "Show_MENU_Entries",
    },
    buttons: ["excel"],
    columnDefs: [{ orderable: false, targets: 3}],
});

function showcustrating(){
    var myTable= $("#mytable4").DataTable();
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=showcustrating',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            myTable.clear().draw();
            $('#sprating').empty();
            
            
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                var sprating1 = (Number)(data[i].Ratings);
                let star=Math.round(sprating1);
						let remainning=5-star;
						var starfilled ="";
						var starfilled1="";
						for(let i=0;i<star;i++)
						{
							 starfilled +='<span class="fa fa-star"></span>';
							 
						}
						for(let i=0;i<remainning;i++)
						{
							 starfilled1 +='<span class="fa fa-star-o"></span>';
						}
                        var sprating = Math.round(data[i].Ratings * 100) / 100;
              
                            myTable.row.add($(
                            `<tr>
                            <td>
                                <h5 class="card-title">${data[i].ServiceId}</h5>
                                <h6 class="card-subtitle mb-2 text-muted">${data[i].FirstName+" "+data[i].LastName}</h6>
                            </td>
                            <td>
                                <div><img src="./assets/images/calculator.png">${totaltime.startdate}</b></div>
                                <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+totaltime.endtime}</div>
                            </td>
                            <td>
                                <span>ratings</span>
                               ${starfilled+starfilled1+" "+sprating}
                            </td>
                            <td>
                                <span><b>Customer Comments : </b></span>
                                <span>${data[i].Comments}</span>
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

var dt2 = new DataTable("#mytable2", {
    dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
    responsive: true,
    pagingType: "full_numbers",
    language: {
        paginate: {
        first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
        previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
        next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
        last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
        },
        info: "Total Record: _MAX_",
        lengthMenu: "Show_MENU_Entries",
    },
    buttons: ["excel"],
    columnDefs: [{ orderable: false, targets: 5}],
});


function upcomingdata(){
    var myTable2= $("#mytable2").DataTable();
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=upcomingdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#upcomingservicedata').empty();
            myTable2.clear().draw();
            $("#btn1").hide();
            $("#btn2").show();

           // alert()
           $("#btn3").show();

           
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
               
                myTable2.row.add($(  `<tr data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}"  data-sdatetime="${data[i].ServiceStartDate}"  data-subtotal="${data[i].SubTotal}" onclick="servicedetails($(this)); completeshowhide($(this)); "  "data-bs-toggle="modal"
                data-bs-target="#ServiceAcceptModal"
                data-bs-dismiss="modal">
                <td>${data[i].ServiceRequestId}</td>
                <td>
                    <div><img src="./assets/images/calculator.png"><b>${totaltime.startdate}</b></div>
                    <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+totaltime.endtime}</div>
                </td>
                <td>
                    <div>${data[i].FirstName+" "+data[i].LastName}</div>
                    <div><img src="./assets/images/layer-719.png">${data[i].AddressLine1+" "+data[i].AddressLine2+","+data[i].PostalCode+" "+data[i].City}</div>
                </td>
                <td> <i class="fa fa-eur"></i>${data[i].TotalCost}</td>
                <td></td>
                
                <td class="buttoncancel"><button  data-bs-toggle="modal" data-bs-target="#ServiceAcceptModal" data-bs-dismiss="modal" class="btncancel" data-sdatetime="${data[i].ServiceStartDate}"  data-subtotal="${data[i].SubTotal}" onclick="completeshowhide($(this));">Cancel</button></td>
            </tr>`
                )).draw();

            }
        },
        error:function(err){
         console.error(err);
        }
    
    });

}

function completeshowhide(obj){
    var subtotal = obj.attr('data-subtotal');
    var sdatetime = obj.attr('data-sdatetime');
    let totaltime = getTimeAndDate(sdatetime, subtotal);
    var sdate = totaltime.startdate;
    var etime = totaltime.endtime;
    var d = sdate.split("/"); 
    var day = d[0];
    var month = d[1];
    var year = d[2];
    var hours = etime.split(":")[0];
    var minute =  etime.split(":")[1];
    var currentDate = new Date();
    var endDate = new Date(year,month-1,day,hours,minute); 
    //debugger;
    if(currentDate < endDate){
        $("#btn3").hide();
    }
    else{
        $("#btn3").show();
    }
    
}


var dt = new DataTable("#mytable", {
    dom: 't<"table-bottom d-flex justify-content-between"<"table-bottom-inner d-flex"li>p>',
    responsive: true,
    pagingType: "full_numbers",
    language: {
        paginate: {
        first: "<img src='./assets/images/pagination-first.png' alt='first'/>",
        previous: "<img src='./assets/images/pagination-left.png' alt='previous' />",
        next: '<img src="./assets/images/pagination-left.png" alt="next" style="transform: rotate(180deg)" />',
        last: "<img src='./assets/images/pagination-first.png' alt='first' style='transform: rotate(180deg) ' />",
        },
        info: "Total Record: _MAX_",
        lengthMenu: "Show_MENU_Entries",
    },
    buttons: ["excel"],
    columnDefs: [{ orderable: false, targets: 2 }],
});

function historydata(){
    var myTable = $("#mytable").DataTable();
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=historydata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#historydata').empty();
            myTable.clear().draw();
            $("#btn1").hide();
            $("#btn2").hide();
            $("#btn3").hide();
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                myTable.row.add($(  `<tr data-etime="${totaltime.endtime}" data-time="${totaltime.starttime}" data-date="${totaltime.startdate}" data-id="${data[i].ServiceRequestId}" data-fname="${data[i].FirstName}" data-lname="${data[i].LastName}" onclick="servicedetails($(this));" "data-bs-toggle="modal"
                data-bs-target="#ServiceAcceptModal"
                data-bs-dismiss="modal">
                <td>${data[i].ServiceRequestId}</td>
                <td>
                    <div><img src="./assets/images/calculator.png"><b>${totaltime.startdate}</b></div>
                    <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+totaltime.endtime}</div>
                </td>
                <td>
                    <div>${data[i].FirstName+" "+data[i].LastName}</div>
                    <div><img src="./assets/images/layer-719.png">${data[i].AddressLine1+" "+data[i].AddressLine2+","+data[i].PostalCode+" "+data[i].City}</div>
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

function showblockcustomerdata(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Sp&function=blockcustomerdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('.blockcustmer').empty();
            for(let i=0;i < count; i++){
               
                        $('.blockcustmer').append(

                          `<div class="row m-20" >
                            <div class= "col m-20 m-2">
                              <div class="card">
                                <div class="card-body text-center">
                                 <div><img src="./assets/images/${data[i].UserProfilePicture}"></div>
                                  <h5 class="card-title">${data[i].FullName}</h5>
                                  ${ data[i].IsBlocked == 1 ? ` <button type='button' class='cancel' onclick='blockchange($(this))' data-uid='${data[i].UserId }' data-serUid='${data[i].TargetUserId}' >Unblock</button>` : ` <button type='button' class='cancel' onclick='blockchange($(this));'  data-uid='${data[i].UserId }' data-serUid='${data[i].TargetUserId}' >Block</button> ` }
                                </div>
                              </div>
                            </div>
                            </div>`);

            }
        },
        error:function(err){
         console.error(err);
        }
    
    });
}

function blockchange(obj){
    var u_id = obj.attr('data-uid');
    var s_id = obj.attr('data-serUid');
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=IsBlockSP',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            u_id : u_id ,
            s_id :s_id 
        }, 
        success:function(data){
            if(data == "yes"){
                showblockcustomerdata();
            }
            else{
                alert ("Not fav and block");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
}
  

// document.addEventListener('DOMContentLoaded', function() {
//     var calendarEl = document.getElementById('calendar');
//     var calendar = new FullCalendar.Calendar(calendarEl, {
//       initialView: 'dayGridMonth'
//     });
//     calendar.render();
//   });



  
            
 
