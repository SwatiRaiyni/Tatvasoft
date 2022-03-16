function html_table_to_excel(type) {
    var data = document.getElementById("tblCustomers");

    var file = XLSX.utils.table_to_book(data, { sheet: "sheet1" });

    XLSX.write(file, { bookType: type, bookSST: true, type: "base64" });

    XLSX.writeFile(file, "history." + type);
}


$(document).ready(function(){
    $(".menu-bar").click(function(){
        $('.nav-list').toggleClass("active");
        $('.menu-bar i').toggleClass("active");
    });
    $(window).scroll(function(){
        if(this.scrollY > 30){
            $(".navbar").addClass("sticky");
        }else{
            $(".navbar").removeClass("sticky");
        }
    });
});

function showLoader() {
    $.LoadingOverlay("show", {
      background: "rgba(0, 0, 0, 0.7)",
    });
  }

servicerequestdata();

function servicerequest(){
    document.getElementById("servicerequest").style.display="block";
    document.getElementById("usermanagement").style.display="none";
    document.getElementById("request").classList.add("active");
    if(document.getElementById("usermange").classList.contains("active")){
        document.getElementById("usermange").classList.remove("active");
    }
    servicerequestdata();
}

function usermanage(){
    document.getElementById("usermanagement").style.display="block";
    document.getElementById("servicerequest").style.display="none";
    document.getElementById("usermange").classList.add("active");
    if(document.getElementById("request").classList.contains("active")){
        document.getElementById("request").classList.remove("active");
    }
    usermanagementdata();
   
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

$(document).ready(function(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=getservicerequestcust',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            $('.cust_sel').html(data);
        },
        error:function(err){
         console.error(err);
        }
    
    });
});

$(document).ready(function(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=getservicerequestsp',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            $('.sp_sel').html(data);
        },
        error:function(err){
         console.error(err);
        }
    
    });
});




var dt2 = new DataTable(".mytable11", {

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
    columnDefs: [{ orderable: false, targets: 5 }],
});

var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0');
var yyyy = today.getFullYear();
today = yyyy + '-' + mm + '-' + dd;
$('#getdate1').attr('min',today);


function servicerequestdata(){

    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=servicerequestdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#servicerequestdata').empty();
            dt2.clear().draw();
            $("#forreset1").trigger('reset');
          
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                if( (data[i].Status) == 3 ){ 
                    var status = 'cancel';
                    var class1 = 'Canceled';
                }
                else if( (data[i].Status) == 2){ 
                    var status = 'complete';
                    var class1 = 'Completed';
                }
                else if( (data[i].Status) == 1){ 
                    var status = 'pending';
                    var class1 = 'Pending';
                }
                else if( (data[i].Status) == 4){ 
                    var status = 'assigned';
                    var class1 = 'Assigned';
                }
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
                dt2.row.add($(`<tr>
                <td>${data[i].ServiceRequestId}</td>
                <td>
                    <div><img src="./assets/images/calculator.png"><b>${totaltime.startdate}</b></div>
                    <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+totaltime.endtime}</div>
                </td>
                <td>
                    <div>${data[i].custfname+" "+data[i].custlname}</div>
                    <div><img src="./assets/images/layer-719.png">${data[i].AddressLine1+" "+data[i].AddressLine2+","+data[i].PostalCode+" "+data[i].City}</div>
                </td>
               
                    ${ data[i].ServiceProviderId != null ? ` <td><div class="td-rating"><div><img src="./assets/images/${data[i].UserProfilePicture}" style="width:50px;"></div><div class="rating-info"><div class="info-name">${data[i].FirstName+" "+data[i].LastName}</div> <div class="info-ratings"> ${starfilled+starfilled1+" "+sprating} </div> </div></div></td>` : `<td> </td>` }
                
                <td ><span class="${class1}"> ${ status }</span></td>
                ${ data[i].Status == 2 ?`<td></td>`:
                ` <td class="btn-raction">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button"
                        id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons" style="color:#646464;">&#xe5d4;</i>
                    </button>
                    <ul class="dropdown-menu">
                        <li><button class="dropdown-item" type="button"  data-bs-toggle="modal"
                            data-bs-target="#editServiceRequest" data-bs-dismiss="modal" onclick='getaddress($(this))' data-id='${data[i].ServiceRequestId}' data-add1='${data[i].AddressLine1}' data-add2='${data[i].AddressLine2}' data-pcode='${data[i].PostalCode}' data-city='${data[i].City}' data-sdate='${totaltime.startdate}' data-stime='${totaltime.starttime}'>Edit &
                                Reschedule
                        </button></li>
                    </ul>
                </div>
            </td>`};
                </tr>`
                )).draw();
                
               
            }
            
        },
        error:function(err){
         console.error(err);
        }
    
    });
}



function editaddress(){
    var id =document.getElementById("id").value;
    var getdate1 =document.getElementById("getdate1").value;
    var gettime1 =document.getElementById("time1").value;
    var sname1 = document.getElementById("sname1").value;
    var hnumber1 = document.getElementById("hnumber1").value;
    var pcode1 = document.getElementById("pcode1").value;
    var city = document.getElementById("city").value;
    
    if(getdate1 == '' || gettime1 == '' || sname1 == '' || hnumber1 == '' || pcode1 == '' || city == ''){
        alert('All Fields are required');
    }
    else{ 
    showLoader();
    $.ajax({

        url: 'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=editaddress',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        type: 'post',
        dataType: 'Json',
        data:{
            id : id ,
            getdate1 : getdate1 ,
            gettime1 :gettime1 ,
            sname1 : sname1,
            hnumber1 : hnumber1 ,
            pcode1 :pcode1 ,
            city : city
        },
        success: function (data) {
            $.LoadingOverlay("hide");
            if(data == "yes"){
                swal("Good job!", "date and time updated SuccessFully", "success");
                servicerequestdata();
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



function searchservicerequest(){
    var id_sel = $('.id_sel').val();
    var zip_sel = $('.zip_sel').val();
    var email_sel = $('.email1_sel').val();
    var cust_sel = $('.cust_sel').val();
    var sp_sel = $('.sp_sel').val();
    var status_sel = $('.status_sel').val();
    var check_sel = $('.check_sel').val();
    var fromd_sel = $('.fromd_sel').val();
    var tod_sel = $('.tod_sel').val();

    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=searchservicereq',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data :{
            id_sel :id_sel,
            zip_sel :zip_sel,
            email_sel :email_sel,
            cust_sel :cust_sel,
            sp_sel :sp_sel,
            status_sel :status_sel,
            check_sel :check_sel,
            fromd_sel :fromd_sel,
            tod_sel :tod_sel
           
        },
        success:function(data){
          
          if(data !== ""){
            var count = Object.keys(data).length;
            $('#servicerequestdata').empty();
            dt2.clear().draw();
           
          
            for(let i=0;i < count; i++){
                let totaltime = getTimeAndDate(data[i].ServiceStartDate, data[i].SubTotal);
                if( (data[i].Status) == 3 ){ 
                    var status = 'cancel';
                    var class1 = 'Canceled';
                }
                else if( (data[i].Status) == 2){ 
                    var status = 'complete';
                    var class1 = 'Completed';
                }
                else if( (data[i].Status) == 1){ 
                    var status = 'pending';
                    var class1 = 'Pending';
                }
                else if( (data[i].Status) == 4){ 
                    var status = 'assigned';
                    var class1 = 'Assigned';
                }
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
                dt2.row.add($(`<tr>
                <td>${data[i].ServiceRequestId}</td>
                <td>
                    <div><img src="./assets/images/calculator.png"><b>${totaltime.startdate}</b></div>
                    <div><img src="./assets/images/layer-712.png">${totaltime.starttime+"-"+totaltime.endtime}</div>
                </td>
                <td>
                    <div>${data[i].custfname+" "+data[i].custlname}</div>
                    <div><img src="./assets/images/layer-719.png">${data[i].AddressLine1+" "+data[i].AddressLine2+","+data[i].PostalCode+" "+data[i].City}</div>
                </td>
               
                    ${ data[i].ServiceProviderId != null ? ` <td><div class="td-rating"><div><img src="./assets/images/${data[i].UserProfilePicture}" style="width:50px;"></div><div class="rating-info"><div class="info-name">${data[i].FirstName+" "+data[i].LastName}</div> <div class="info-ratings"> ${starfilled+starfilled1+" "+sprating} </div> </div></div></td>` : `<td> </td>` }
                
                <td ><span class="${class1}"> ${ status }</span></td>
                ${ data[i].Status == 2 ?`<td></td>`:
                ` <td class="btn-raction">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button"
                        id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons" style="color:#646464;">&#xe5d4;</i>
                    </button>
                    <ul class="dropdown-menu">
                    <li><button class="dropdown-item" type="button"  data-bs-toggle="modal"
                    data-bs-target="#editServiceRequest" data-bs-dismiss="modal" onclick='getaddress($(this))' data-id='${data[i].ServiceRequestId}' data-add1='${data[i].AddressLine1}' data-add2='${data[i].AddressLine2}' data-pcode='${data[i].PostalCode}' data-city='${data[i].City}' data-sdate='${totaltime.startdate}' data-stime='${totaltime.starttime}'>Edit &
                        Reschedule
                </button></li>
                    </ul>
                </div>
            </td>`};
                </tr>`
                )).draw();
                
               
        }  
        }else{
            swal({
                title: "Alert!",
                text: "no data found",
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

const dt1 = new DataTable("#tblCustomers", {
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
  columnDefs: [{ orderable: false, targets: 6 }],
});

$(document).ready(function(){
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=getuserdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            $('.user_sel').html(data)
        },
        error:function(err){
         console.error(err);
        }
    
    });
});

function usermanagementdata(){

    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=usermanagementdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#usermanagment').empty();
            dt1.clear().draw();
            $("#forreset11").trigger('reset');
            for(let i=0;i < count; i++){
                if(data[i].IsApproved == 0){ 
                   // alert("if");
                    var status12 = 'InActive';
                    var class12 = 'Canceled';
                }
                else if(data[i].IsApproved == 1){
                   // alert("else if"); 
                    var status12 = 'Active';
                    var class12 = 'Completed';
                }
                if( (data[i].UserTypeId) == 1){ 
                     var role = 'Customer';
                }
                else if((data[i].UserTypeId) == 2){ 
                    var role = 'Service Provicer';
                }
                
                dt1.row.add($(`<tr>
                <td>${data[i].FirstName+" "+data[i].LastName}</td>
                <td><img src="./assets/images/calculator.png"><b>${data[i].CreatedDate}</b></td>
                <td>${role}</td>
                <td>${data[i].Mobile}</td>
                <td>${data[i].ZipCode}</td>
                <td><span class=${class12}> ${ status12 }</span></td>
                ${ data[i].UserTypeId == 2 ? 
                    `<td class="btn-raction">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons" style="color:#646464;">&#xe5d4;</i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                           
                            ${ data[i].IsApproved == 1 ? `<li><button class="dropdown-item" type="button" onclick='approvechange($(this));' data-uid='${data[i].UserId }' >InActive</button></li> ` : `<li><button class="dropdown-item" type="button" onclick='approvechange($(this));' data-uid='${data[i].UserId }' > Active</button></li> ` }
                        </ul> 
                    </div>
                </td>`: `<td></td>`}
            </tr>`
                )).draw();
                
               
            }
        },
        error:function(err){
         console.error(err);
        }
    
    });

}

function approvechange(obj){
    var u_id = obj.attr('data-uid');
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=IsApprovedSP',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'POST',
        dataType:'json',
        data:{
            u_id : u_id 
        }, 
        success:function(data){
            if(data == "yes"){
                usermanagementdata();
            }
            else{
                alert ("Not Approved and block");
            } 
        },
        error:function(err){
            console.error(err);
        }
    });
}

function search(){

    var user_sel = $('.user_sel').val();
    var type_sel = $('.type_sel').val();
    var mol_sel = $('.mol_sel').val();
    var pos_sel = $('.pos_sel').val();
    var email_sel = $('.email_sel').val();
    var from_sel = $('.from_sel').val();
    var to_sel = $('.to_sel').val();

    

$.ajax({
    url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=searchdata',
    contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
    method: 'POST',
    dataType:'json',
    data :{
        user_sel :user_sel,
        type_sel :type_sel,
        mol_sel :mol_sel,
        pos_sel :pos_sel,
        email_sel :email_sel,
        from_sel :from_sel,
        to_sel :to_sel
       
    },
        success:function(data){
       // $('#usermanagment').html(data)
      if(data !== ""){
        var count = Object.keys(data).length;
        $('#usermanagment').empty();
        dt1.clear().draw();
        for(let i=0;i < count; i++){
            if(data[i].IsApproved == 0){ 
               // alert("if");
                var status12 = 'InActive';
                var class12 = 'Canceled';
            }
            else if(data[i].IsApproved == 1){
               // alert("else if"); 
                var status12 = 'Active';
                var class12 = 'Completed';
            }
            if( (data[i].UserTypeId) == 1){ 
                 var role = 'Customer';
            }
            else if((data[i].UserTypeId) == 2){ 
                var role = 'Service Provicer';
            }
            var date = new Date(data[i].CreatedDate);
            var day = date.getDate(); //Date of the month: 2 in our example
            var month = date.getMonth() + 1; //Month of the Year: 0-based index, so 1 in our example
            var year = date.getFullYear();
            var full_date = day+"/"+month+"/"+year;
            
            dt1.row.add($(`<tr>
            <td>${data[i].FirstName+" "+data[i].LastName}</td>
            <td><img src="./assets/images/calculator.png"><b>${full_date}</b></td>
            <td>${role}</td>
            <td>${data[i].Mobile}</td>
            <td>${data[i].ZipCode}</td>
            <td><span class=${class12}> ${ status12 }</span></td>
            ${ data[i].UserTypeId == 2 ? 
                `<td class="btn-raction">
                <div class="dropdown">
                    <button class="dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="material-icons" style="color:#646464;">&#xe5d4;</i>
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu2">
                       
                        ${ data[i].IsApproved == 1 ? `<li><button class="dropdown-item" type="button" onclick='approvechange($(this));' data-uid='${data[i].UserId }' >InActive</button></li> ` : `<li><button class="dropdown-item" type="button" onclick='approvechange($(this));' data-uid='${data[i].UserId }' > Active</button></li> ` }
                    </ul> 
                </div>
            </td>`: `<td></td>`}
        </tr>`
            )).draw();
        }
           
        
    }else{
        swal({
            title: "Alert!",
            text: "no data found",
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
