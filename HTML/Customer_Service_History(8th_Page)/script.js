function dashboard(){
        document.getElementById("dashboard").style.display="block";
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
}
function history(){
    document.getElementById("servicehistory").style.display="block";
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
}

function schedule(){
    document.getElementById("serviceschedule").style.display="block";
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
    }
    function invoice(){
        document.getElementById("invoices").style.display="block";
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
function CountRows() {
    var totalRowCount = 0;
    var rowCount = 0;
    var table = document.getElementById("tblCustomers");
    var rows = table.getElementsByTagName("tr")
    for (var i = 0; i < rows.length; i++) {
        totalRowCount++;
        if (rows[i].getElementsByTagName("td").length > 0) {
            rowCount++;
        }
    }
   
    var message = "Total No. of row in table: " + rowCount;
    window.alert(message);
}
  