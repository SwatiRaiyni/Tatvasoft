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

var dt2 = new DataTable("#mytable11", {
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

function servicerequestdata(){

    var myTable2 = $("#mytable11").DataTable();
    
    
    $.ajax({
        url:'http://localhost/TatvaSoft/Helperland/?controller=Admin&function=servicerequestdata',
        contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
        method: 'GET',
        dataType:'json',
        
        success:function(data){
            var count = Object.keys(data).length;
            $('#servicerequestdata').empty();
            myTable2.clear().draw();
           
          
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
                myTable2.row.add($(`<tr>
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
                <td class="btn-raction">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button"
                            id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="material-icons" style="color:#646464;">&#xe5d4;</i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button"  data-bs-toggle="modal"
                                data-bs-target="#editServiceRequest" data-bs-dismiss="modal">Edit &
                                    Reschedule
                            </button></li>
                            <li><button class="dropdown-item" type="button"> Inquiry</button></li>
                            <li><button class="dropdown-item" type="button">History Log</button>
                            <li><button class="dropdown-item" type="button"> Download Invoice</button></li>
                            <li><button class="dropdown-item" type="button">Other Transactions</button>
                            </li>
                        </ul>
                    </div>
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