function html_table_to_excel(type) {
    var data = document.getElementById("tblCustomers");

    var file = XLSX.utils.table_to_book(data, { sheet: "sheet1" });

    XLSX.write(file, { bookType: type, bookSST: true, type: "base64" });

    XLSX.writeFile(file, "history." + type);
}


$(function () {
 
    $(".rateYo").rateYo({
      rating: 1,
      halfStar: true,
      starWidth: "20px"
    });
 
});

$(function () {

$(".ontime").rateYo().on("rateyo.change",function(e,data1){
    $(".getvalue").val(data1.rating);
});
$(".friendly").rateYo().on("rateyo.change",function(e,data1){
    $(".getvalue1").val(data1.rating);
});  
$(".qos").rateYo().on("rateyo.change",function(e,data1){
    $(".getvalue2").val(data1.rating);
});  

});



var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#getdate1').attr('min',today);


function mysettings(){
    document.getElementById("mySettings").style.display="block";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("favouriteprones").style.display="none";
    document.getElementById("invoices").style.display="none";
    document.getElementById("notifications").style.display="none";
    document.getElementById("dashboard").style.display="none";
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("favprons").classList.contains("active")){
        document.getElementById("favprons").classList.remove("active");
    }
    if(document.getElementById("invoice").classList.contains("active")){
        document.getElementById("invoice").classList.remove("active");
    }
    if(document.getElementById("notification").classList.contains("active")){
        document.getElementById("notification").classList.remove("active");
    }
    getdata();
}

function dashboard(){
        document.getElementById("dashboard").style.display="block";
        document.getElementById("mySettings").style.display="none";
        document.getElementById("serviceschedule").style.display="none";
        document.getElementById("servicehistory").style.display="none";
        document.getElementById("favouriteprones").style.display="none";
        document.getElementById("invoices").style.display="none";
        document.getElementById("notifications").style.display="none";
        document.getElementById("dashboard1").classList.add("active");
        if(document.getElementById("history").classList.contains("active")){
            document.getElementById("history").classList.remove("active");
        }
        if(document.getElementById("schedule").classList.contains("active")){
            document.getElementById("schedule").classList.remove("active");
        }
        if(document.getElementById("favprons").classList.contains("active")){
            document.getElementById("favprons").classList.remove("active");
        }
        if(document.getElementById("invoice").classList.contains("active")){
            document.getElementById("invoice").classList.remove("active");
        }
        if(document.getElementById("notification").classList.contains("active")){
            document.getElementById("notification").classList.remove("active");
        }
        dashboardshowdata();
}
function geteditdatetime(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=geteditdatetime',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        data:$('#datetimeforreschedule').serialize(),
        success:function(data){
            var count = Object.keys(data).length;
            for(let i=0;i < count; i++){
                let d= new Date(data[i].ServiceStartDate);
                let hour = ("0"+d.getHours()).slice(-2);
                let minutes = ("0"+d.getMinutes()).slice(-2);
                let time =hour + ":" + minutes;
                var date = d.getDate();
                var month = d.getMonth()+1;
                var year = d.getFullYear();
                var dateString = year+ "-" +("0"+(month)).slice(-2)+"-"+date;
                $('#gettime1').val(time);
                $('#getdate1').val(dateString);
                
            }
        },
        error:function(err){
         console.error(err);
        }
    
      });
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




function dashboardshowdata(){
    var myTable= $("#dashboardforpagination").DataTable();
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=getdashboarddata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#dashboarddata').empty();
            myTable.clear().draw();
            $("#btn1").removeClass("d-none");
            $("#btn2").removeClass("d-none");
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                // document.getElementById("dashboarddata").innerHTML+=
                if(data[i].ServiceProviderId != null){ 
                    var sprating1 = (Number)(data[i].sprating);
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
                        var sprating = Math.round(data[i].sprating * 100) / 100;
                myTable.row.add($( '<tr><td> <a role="button" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))" data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">'+ data[i].ServiceRequestId + '</a></td><td><div><img src="./assets/images/calculator.png" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))"  data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"" ><b>'+ totaltime.startdate + '</b></div> <div><img src="./assets/images/layer-712.png">'+ totaltime.starttime +'-'+totaltime.endtime+ '</td><td> <div class="td-rating"> <div class="rating-user"><img src="./assets/images/'+ data[i].UserProfilePicture +'" style="width:50px;"></div> <div class="rating-info"><div class="info-name">'+data[i].FirstName + " " +data[i].LastName +'</div> '+starfilled+ starfilled1+ (sprating) +' </div></div> </div></td><td><div class="singlefont"><i class="fa fa-eur">'+ data[i].TotalCost + '</i></div></td><td class="buttoncenter"><button class="Reschedule" onclick="reschedule('+ data[i].ServiceRequestId + ')" data-bs-toggle="modal" data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button>  <button class="cancel" data-bs-toggle="modal" data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal" onclick="trash21('+ data[i].ServiceRequestId + ')"> cancel </button></td></tr>')).draw();
                }
                else{
                    myTable.row.add($( '<tr><td> <a role="button" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))" data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">'+ data[i].ServiceRequestId + '</a></td><td><div><img src="./assets/images/calculator.png" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))"  data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal"" ><b>'+ totaltime.startdate + '</b></div> <div><img src="./assets/images/layer-712.png">'+ totaltime.starttime +'-'+totaltime.endtime+ '</td><td></td><td><div class="singlefont"><i class="fa fa-eur">'+ data[i].TotalCost + '</i></div></td><td class="buttoncenter"><button class="Reschedule" onclick="reschedule('+ data[i].ServiceRequestId + ')" data-bs-toggle="modal" data-bs-target="#RescheduleServiceRequest" data-bs-dismiss="modal"> Reschedule </button> <button class="cancel" data-bs-toggle="modal" data-bs-target="#CancelServiceRequest" data-bs-dismiss="modal" onclick="trash21('+ data[i].ServiceRequestId + ')"> cancel </button></td></tr>')).draw();
                }

            }
        },
        error:function(err){
         console.error(err);
        }
    
    });
}
function editdatetime(){
    var edit_id =document.getElementById("reschedule_edit_id1").value;
    var getdate1 =document.getElementById("getdate1").value;
    var gettime1 =document.getElementById("gettime1").value;
    
    if(edit_id == '' || getdate1 == '' || gettime1 == ''){
        alert('All Fields are required');
       
    }
    else{ 
    $.ajax({

        url: 'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=editdatetime',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        type: 'post',
        dataType: 'Json',
        data:{
            edit_id : edit_id ,
            getdate1 : getdate1 ,
            gettime1 :gettime1 , 
           
        },
        success: function (data) {
            if(data.status == "yes"){
                swal("Good job!", "date and time updated SuccessFully", "success");
                dashboardshowdata();
            }
            else{
                alert ("date and time does not updated");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
    }

}

function cancelsr(){
    $.ajax({
        url: 'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=cancelsr',
        type: 'post',
        dataType: 'Json',
        data: $('#cancelsr').serialize() ,
        success: function (data) {
            if(data == "yes"){
                swal("Good job!", "Service Request status change pending to cancel", "success");
                dashboardshowdata();
            }
            else{
                alert ("address not deleted");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
}

dashboardshowdata();

function getservicedetails(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=getservicedetails',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        data:$('#servicedetails').serialize(),

        success:function(data){
            
            var count = Object.keys(data).length; 
            $('#appenddetails').empty();
            
            for(let i=0; i<count; i++){
               
                $("#duration").text(data[i].SubTotal);
                $("#serviceid").text(data[i].ServiceId);
               $("#totalcost").text(data[i].TotalCost);
               var abc = data[i].AddressLine1 + ' '+ data[i].AddressLine2 +' ' + data[i].PostalCode +' ' + data[i].City;
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

function history(){
    document.getElementById("servicehistory").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("favouriteprones").style.display="none";
    document.getElementById("serviceschedule").style.display="none";
    document.getElementById("invoices").style.display="none";
    document.getElementById("notifications").style.display="none";
    document.getElementById("history").classList.add("active");
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("schedule").classList.contains("active")){
        document.getElementById("schedule").classList.remove("active");
    }
    if(document.getElementById("favprons").classList.contains("active")){
        document.getElementById("favprons").classList.remove("active");
    }
    if(document.getElementById("invoice").classList.contains("active")){
        document.getElementById("invoice").classList.remove("active");
    }
    if(document.getElementById("notification").classList.contains("active")){
        document.getElementById("notification").classList.remove("active");
    }
    historyshowdata();
}


function historyshowdata(){
    var myTable1 = $("#tblCustomers").DataTable();
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=gethistorydata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#historydata').empty();
            myTable1.clear().draw();
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                if( (data[i].Status) == 3 ){ 
                    var status = 'cancel';
                    var class1 = 'Canceled';
                    var class2 = 'disabled';
                    var color = 'class4';
                }
                else if( (data[i].Status) == 2){ 
                    var status = 'complete';
                    var class1 = 'Completed';
                    var class2 = '';
                    var color = 'class3'; 
                    if(data[i].alreadyrated == true){
                        class2 = 'disabled';
                    }
                    else{
                        class2 = ' ';
                    }
                }
                $("#btn1").addClass("d-none");
                $("#btn2").addClass("d-none");
                if(data[i].ServiceProviderId != null){ 
                var sprating1 = (Number)(data[i].sprating);
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
                        var sprating = Math.round(data[i].sprating * 100) / 100;
                myTable1.row.add($('<tr><td><a role="button" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))" data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">'+ data[i].ServiceRequestId + '</a></td><td><div><img src="./assets/images/calculator.png"><b>'+ totaltime.startdate + '</b></div> <div><img src="./assets/images/layer-712.png">'+ totaltime.starttime +'-'+totaltime.endtime+ '</td><td class="abc"> <div class="td-rating"> <div class="rating-user"><img src="./assets/images/'+ data[i].UserProfilePicture +'" style="width:50px;"></div> <div class="rating-info"><div class="info-name">'+data[i].FirstName + " " +data[i].LastName +'</div> '+ starfilled + starfilled1 + (sprating) +' </div> </div></td><td><div class="singlefont"><i class="fa fa-eur">'+ data[i].TotalCost + '</i></div></td><td><span class="'+class1+'"> '+ status +'</span></td><td> <button id="s1" class="RateSP '+ color +'" data-bs-toggle="modal" data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal" '+ class2 +' onclick="ratesp('+ data[i].ServiceRequestId+')" > Rate SP </button></td></tr>')).draw();
                }
                else{
                    myTable1.row.add($('<tr><td><a role="button" data-etime="'+ totaltime.endtime + '" data-time="'+ totaltime.starttime + '" data-date="'+ totaltime.startdate + '" data-id="'+ data[i].ServiceRequestId + '" onclick="servicedetails($(this))" data-bs-toggle="modal" data-bs-target="#ModalServiceDetails" data-bs-dismiss="modal">'+ data[i].ServiceRequestId + '</a></td><td><div><img src="./assets/images/calculator.png"><b>'+ totaltime.startdate + '</b></div> <div><img src="./assets/images/layer-712.png">'+ totaltime.starttime +'-'+totaltime.endtime+ '</td><td></td><td><div class="singlefont"><i class="fa fa-eur">'+ data[i].TotalCost + '</i></div></td><td><span class="'+class1+'"> '+ status +'</span></td><td> <button class="RateSP '+ color +'" data-bs-toggle="modal" data-bs-target="#exampleModalRateSP" data-bs-dismiss="modal" '+ class2 +'> Rate SP </button></td></tr>')).draw();   
                }
            }
        },
        error:function(err){
         console.error(err);
        }
    
    });
}

function ratesp(id){
    $(".sid1").val(id);
}

$(document).on("click","#s1",function(e){
   var ratingdata = $(e.target).closest("tr").find(".abc").html();
   $(".abc1").html(ratingdata);
  
});


function checkrating(){
        var sid2 = document.getElementById("sid2").value;
        var ontime =document.getElementById("ontime").value;
        var friendly=document.getElementById("friendly").value;
        var qos=document.getElementById("qos").value;
        var comment1=document.getElementById("comment1").value;
        
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=checkrating',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            sid2:sid2,
            ontime : ontime ,
            friendly :friendly , 
            qos :qos , 
            comment :comment1             
        },
        success:function(data){
            if(data.status == "yes"){
                swal("Good job!", "Rating given to sp successfully!", "success");
                historyshowdata();
                $("#ratingcust").trigger('reset');
            }
            else{
                swal({
                  title: "Alert!",
                  text: "Data not updated",
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

function schedule(){
    document.getElementById("serviceschedule").style.display="block";
    document.getElementById("mySettings").style.display="none";
    document.getElementById("dashboard").style.display="none";
    document.getElementById("favouriteprones").style.display="none";
    document.getElementById("servicehistory").style.display="none";
    document.getElementById("invoices").style.display="none";
    document.getElementById("notifications").style.display="none";
    document.getElementById("schedule").classList.add("active");
    if(document.getElementById("favprons").classList.contains("active")){
        document.getElementById("favprons").classList.remove("active");
    }
    if(document.getElementById("dashboard1").classList.contains("active")){
        document.getElementById("dashboard1").classList.remove("active");
    }
    if(document.getElementById("invoice").classList.contains("active")){
        document.getElementById("invoice").classList.remove("active");
    }
    if(document.getElementById("history").classList.contains("active")){
        document.getElementById("history").classList.remove("active");
    }
    if(document.getElementById("notification").classList.contains("active")){
        document.getElementById("notification").classList.remove("active");
    }
    
}
function favprons(){
        document.getElementById("favouriteprones").style.display="block";
        document.getElementById("mySettings").style.display="none";
        document.getElementById("dashboard").style.display="none";
        document.getElementById("serviceschedule").style.display="none";
        document.getElementById("servicehistory").style.display="none";
        document.getElementById("invoices").style.display="none";
        document.getElementById("notifications").style.display="none";
        document.getElementById("favprons").classList.add("active");
        if(document.getElementById("invoice").classList.contains("active")){
            document.getElementById("invoice").classList.remove("active");
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
        if(document.getElementById("notification").classList.contains("active")){
            document.getElementById("notification").classList.remove("active");
        }
        favpronsdata();
    }
    function invoice(){
        document.getElementById("invoices").style.display="block";
        document.getElementById("mySettings").style.display="none";
        document.getElementById("favouriteprones").style.display="none";
        document.getElementById("dashboard").style.display="none";
        document.getElementById("serviceschedule").style.display="none";
        document.getElementById("servicehistory").style.display="none";
        document.getElementById("notifications").style.display="none";
        document.getElementById("invoice").classList.add("active");
        if(document.getElementById("favprons").classList.contains("active")){
            document.getElementById("favprons").classList.remove("active");
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
        if(document.getElementById("notification").classList.contains("active")){
            document.getElementById("notification").classList.remove("active");
        }
}
function notification(){
        document.getElementById("notifications").style.display="block";
        document.getElementById("mySettings").style.display="none";
        document.getElementById("invoices").style.display="none";
        document.getElementById("dashboard").style.display="none";
        document.getElementById("notifications").style.display="none";
        document.getElementById("serviceschedule").style.display="none";
        document.getElementById("servicehistory").style.display="none";
        
        document.getElementById("notification").classList.add("active");
        if(document.getElementById("invoice").classList.contains("active")){
            document.getElementById("invoice").classList.remove("active");
        }
        if(document.getElementById("dashboard1").classList.contains("active")){
            document.getElementById("dashboard1").classList.remove("active");
        }
        if(document.getElementById("favprons").classList.contains("active")){
            document.getElementById("favprons").classList.remove("active");
        }
        if(document.getElementById("schedule").classList.contains("active")){
            document.getElementById("schedule").classList.remove("active");
        }
        if(document.getElementById("history").classList.contains("active")){
            document.getElementById("history").classList.remove("active");
        }
}
$('#btnClick').on('click', function(event){
    var fname = $('.fname').val();
    var lname = $('.lname').val();
    var email = $('.email').val();
    var mobile = $('.mobile').val();
    var dob = $('.dob').val();
    var language = $('.language').val();

    if(fname == '' || mobile == '' || lname == '' || email == '' || dob == '' || language == ''){
        alert('All Fields are required');
        event.preventDefault();
    }else if(!$('.mobile').val().match("[0-9]{10}")){
        alert('Mobile no. should be 10 digits.');
        event.preventDefault();
    }else{
        $.ajax({
            url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=savedata',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            method: 'POST',
            dataType:'json',
            data:$('#datauser').serialize(),
            success:function(data){
                if(data.status == "yes"){
                    swal("Good job!", "data updated SuccessFully", "success");
                }
                else{
                    swal({
                      title: "Alert!",
                      text: "Data not updated",
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


function details(){
    document.getElementById('nav-home').style.display="block";
    document.getElementById('nav-profile').style.display="none";
    document.getElementById('nav-contact').style.display="none";
    document.getElementById('mdetail').classList.add("selected");
    document.getElementById('madd').classList.remove("selected");
    document.getElementById('cpass').classList.remove("selected");
    //getdata();
  }
function address(){
    document.getElementById('nav-contact').style.display="none";
    document.getElementById('nav-home').style.display="none";
    document.getElementById('nav-profile').style.display="block";
    document.getElementById('madd').classList.add("selected");
    document.getElementById('mdetail').classList.remove("selected");
    document.getElementById('cpass').classList.remove("selected");
    getaddress();
}
function changepass(){
        document.getElementById('nav-profile').style.display="none";
        document.getElementById('nav-home').style.display="none";
        document.getElementById('nav-contact').style.display="block";
        document.getElementById('cpass').classList.add("selected");
        document.getElementById('mdetail').classList.remove("selected");
        document.getElementById('madd').classList.remove("selected");
}
function getdata(){
    
    var fname = document.getElementById("fname");
    var lname = document.getElementById("lname");
    var email = document.getElementById("email");
    var mobile = document.getElementById("mobile");
    var date = document.getElementById("date");
    var language = document.getElementById("language1");
    $.ajax({
      url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=getdata',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      method: 'GET',
      dataType:'json',
      data : $('#datauser').serialize(),
      success:function(data){
        var count = Object.keys(data).length; //alert(count);
        
        for(let i=0;i < count; i++){
        fname.setAttribute('value', data[i].FirstName);
        lname.setAttribute('value',  data[i].LastName);
        email.setAttribute('value',  data[i].Email);
        mobile.setAttribute('value',  data[i].Mobile);
        date.setAttribute('value',  data[i].DateOfBirth);
        language.value =  data[i].LanguageId;
        }
      },
      error:function(err){
       console.error(err);
      }
  
    });
}

function getaddress(){
    var myTable2= $("#service").DataTable();
    $.ajax({
      url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=getaddress',
      contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
      method: 'GET',
      dataType:'json',
      data:$('#addressuser').serialize(),
      success:function(data){
      
      var count = Object.keys(data).length;
      $('#caddress1').empty();
      myTable2.clear().draw();
      for(let i=0;i < count; i++){ 
          
          myTable2.row.add($( '<tr><td><input type="hidden" name="hidden_id" value="'+ data[i].AddressId + '"><input type="radio" name="address" id="address'+ data[i].AddressId+' " value="'+' '+ data[i].AddressId + '"></td><td><label for="address' + data[i].AddressId +'"><p><b>Address:</b> '+ data[i].AddressLine2 +""+ data[i].AddressLine1 +','+data[i].City +" "+ data[i].PostalCode +'</p><p><b>Phone number:</b> '+ data[i].Mobile +'</p></label></td><td><button type="button" class="Reschedule" onclick="edit2('+ data[i].AddressId + ')" data-bs-toggle="modal" data-bs-target="#EditAddress" data-bs-dismiss="modal" > Edit </button> <button type="button" class="cancel"   onclick="trash2('+ data[i].AddressId + ')" id="delete"  data-bs-dismiss="modal" data-bs-toggle="modal" data-bs-target="#DeleteAddress" > Delete </button></td></tr>')).draw();
        }
      },
      error:function(err){
       console.error(err);
      }
  
    });
}

function trash(){
    $.ajax({
        url: 'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=deleteaddress',
        type: 'post',
        dataType: 'Json',
        data: $('#deletedata').serialize() ,
        success: function (data) {
            if(data == "yes"){
                swal("Good job!", "address deleted SuccessFully", "success");
                getaddress();
            }
            else{
                alert ("address not deleted");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
}


function geteditaddress(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=geteditaddress',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        data:$('#editdata').serialize(),
        success:function(data){
            var count = Object.keys(data).length;
            for(let i=0;i < count; i++){
                $('#addHouseno1').val(data[i].AddressLine1)
                $('#addStreetname1').val(data[i].AddressLine2);
                $('#addPostalcode1').val(data[i].PostalCode);
                $('#addPhoneno1').val(data[i].Mobile);
                $('#addCity1').val(data[i].City);
            }
        },
        error:function(err){
         console.error(err);
        }
    
      });
}

function edit(){
    var edit_id =document.getElementById("edit_id").value;
    var addStreetname =document.getElementById("addStreetname1").value;
    var addHouseno=document.getElementById("addHouseno1").value;
    var addPostalcode=document.getElementById("addPostalcode1").value;
    var addPhoneno=document.getElementById("addPhoneno1").value;
    var addCity=document.getElementById("addCity1").value;
    if(addStreetname == '' || addHouseno == '' || addPostalcode == '' || addPhoneno == '' || addCity == ''){
        alert('All Fields are required');
       // Event.preventDefault();
    }
    else{ 
    $.ajax({

        url: 'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=editaddress',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        type: 'post',
        dataType: 'Json',
        data:{
            edit_id : edit_id ,
            streetname : addStreetname ,
            houseno :addHouseno , 
            code :addPostalcode , 
            mobile :addPhoneno , 
            city :addCity
        },
        success: function (data) {
            if(data.status == "yes"){
                swal("Good job!", "address updated SuccessFully", "success");
                getaddress();
            }
            else{
                alert ("address not updated");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
    }
}

function addaddress(){
    var addStreetname =document.getElementById("addStreetname").value;
    var addHouseno=document.getElementById("addHouseno").value;
    var addPostalcode=document.getElementById("addPostalcode").value;
    var addPhoneno=document.getElementById("addPhoneno").value;
    var addCity=document.getElementById("addCity").value;
    if(addStreetname == '' || addHouseno == '' || addPostalcode == '' || addPhoneno == '' || addCity == ''){
        alert('All Fields are required');
       // Event.preventDefault();
    }
    else{   
        $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=AddAddress',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
        streetname : addStreetname ,
        houseno :addHouseno , 
        code :addPostalcode , 
        mobile :addPhoneno , 
        city :addCity
        },
        success:function(data){
        if(data == "yes"){
        getaddress();
        swal("Good job!", "data added SuccessFully", "success");
        }
        else{
        alert ("address doesnot added");
        } 
        },
        error:function(err){
        console.error(err);
        }
        });    
    }
}

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
            url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=changepassword',
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

function favpronsdata(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=favpronsdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){// alert(data);
            var count = Object.keys(data).length;
            $('.favpro').empty();
            for(let i=0;i < count; i++){
                var sprating1 = (Number)(data[i].AverageRating);
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
                        var sprating = Math.round(data[i].AverageRating * 100) / 100;
                        $('.favpro').append(

                            `<div class="row m-20" >
                            <div class= "col m-20 m-2">
                              <div class="card">
                                <div class="card-body text-center">
                                 <div class="td-rating" style="justify-content: center;">  <div class="rating-user"> <img src="./assets/images/${data[i].UserProfilePicture}"></div></div>
                                  <h5 class="card-title">${data[i].FullName}</h5>
                                  <p>${starfilled+starfilled1+" "+sprating}</p>
                                  <p class="card-text">${data[i].TotalCleaning} Cleanings</p>
                                    ${ data[i].IsFavorite == 1 ? ` <button type='button' class='fav' onclick='favchange($(this))' data-uid='${data[i].UserId }' data-serUid='${data[i].TargetUserId}' >Remove</button>` : ` <button type='button' class='fav' onclick='favchange($(this));'  data-uid='${data[i].UserId }' data-serUid='${data[i].TargetUserId}' >favourite</button> ` }
                                      
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

function favchange(obj){
    var u_id = obj.attr('data-uid');
    var s_id = obj.attr('data-serUid');
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Customer&function=IsFavSP',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            u_id : u_id ,
            s_id :s_id 
        }, 
        success:function(data){
            if(data == "yes"){
                favpronsdata();
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
                favpronsdata();
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
  

  