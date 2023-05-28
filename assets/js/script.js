function startLoad() {
    $(".gooey").removeClass("hidden");
    $("body").css("overflow", "hidden");
}

function endLoad() {
    $(".gooey").addClass("hidden");
    $("body").css("overflow", "");
}

function isNull(value) {
    return $.trim(value) === "";
}

function login() {
    let login = $("#login").val();
    let password = $("#password").val();

    if (isNull(login) || isNull(password)) {
        alert("Все поля должны быть заполнены");
        return;
    }

    startLoad();
    $.ajax({
        url: "../vendor/action/auth/loginAction.php",
        method: "post",
        dataType: "json",
        data: {
            login: login,
            password: password
        },
        success: function (response) {
            endLoad();
            setTimeout(function (response) {
                if (response.response === "Вы успешно вошли в аккаунт") {
                    document.location = "/admin/index.php";
                } else {
                    alert(response.response);
                }
            }, 100, response);
        }
    });
}

function logout() {
    $.ajax({
        url: "../vendor/action/auth/logoutAction.php",
        method: "post",
        success: function () {
            document.location = "/";
        }
    });
}

function addAppointment() {
    let date = $("#appointment-date");
    let time = $("#appointment-time");
    let complaints = $("#appointment-complaints");
    let fio = $("#appointment-fio");
    let phone = $("#appointment-phone");
    let email = $("#appointment-email");

    if (isNull(date.val()) || isNull(time.val()) || isNull(complaints.val()) || isNull(fio.val()) || isNull(phone.val()) || isNull(email.val())) {
        alert("Чтобы записаться к врачу, необходимо заполнить все поля");
        return;
    }

    startLoad();

    $.ajax({
        url: "../vendor/action/appointment/addAppointmentAction.php",
        method: "post",
        dataType: "json",
        data: {
            date: date.val(),
            time: time.val(),
            complaints: complaints.val(),
            fio: fio.val(),
            phone: phone.val(),
            email: email.val()
        },
        success: function (response) {
            endLoad();
            setTimeout(function (response) {
                alert(response.response);
                if (response.response === "Вы успешно записались к врачу. С вами свяжутся в ближайшее время, ожидайте") {
                    date.val("");
                    time.val("");
                    complaints.val("");
                    fio.val("");
                    phone.val("");
                    email.val("");
                }
            }, 100, response);
        }
    });
}

function getAppointments() {
    startLoad();
    $.ajax({
        url: "../vendor/action/appointment/getAppointmentsAction.php",
        dataType: 'json',
        method: "post",
        success: function (response) {
            if (response.data.length > 0) {
                response.data.map(function (obj) {
                    createAppointmentCard(
                        obj.date,
                        obj.time,
                        obj.complaints,
                        obj.fio,
                        obj.phone,
                        obj.email
                    );
                });
                endLoad();
            } else {
                endLoad();
            }
        }
    });
}

function createAppointmentCard(date, time, complaints, fio, phone, email) {
    let divAppointment = document.createElement("div");
    divAppointment.classList.add("col-lg-12");
    divAppointment.style.marginTop = "20px";

    let cardAppointment = document.createElement("div");
    cardAppointment.classList.add("card");
    cardAppointment.style.boxShadow = "0 0 10px rgba(0,0,0,0.5)";

    let cardBodyAppointment = document.createElement("div");
    cardBodyAppointment.classList.add("card-body");

    let divDate = document.createElement("div");
    divDate.classList.add("card-text");
    let dateHeader = document.createElement("span");
    dateHeader.style.fontWeight = "bold";
    dateHeader.innerText = "Дата: ";
    let dateP = document.createElement("span");
    dateP.innerText = date;

    divDate.appendChild(dateHeader);
    divDate.appendChild(dateP);

    let divTime = document.createElement("div");
    divTime.classList.add("card-text");
    let timeHeader = document.createElement("span");
    timeHeader.style.fontWeight = "bold";
    timeHeader.innerText = "Время: ";
    let timeP = document.createElement("span");
    timeP.innerText = time;

    divTime.appendChild(timeHeader);
    divTime.appendChild(timeP);

    let divComplaints = document.createElement("div");
    divComplaints.classList.add("card-text");
    let complaintsHeader = document.createElement("span");
    complaintsHeader.style.fontWeight = "bold";
    complaintsHeader.innerText = "Жалобы: ";
    let complaintsP = document.createElement("span");
    complaintsP.innerText = complaints;

    divComplaints.appendChild(complaintsHeader);
    divComplaints.appendChild(complaintsP);

    let divFio = document.createElement("div");
    divFio.classList.add("card-text");
    let fioHeader = document.createElement("span");
    fioHeader.style.fontWeight = "bold";
    fioHeader.innerText = "Ф.И.О: ";
    let fioP = document.createElement("span");
    fioP.innerText = fio;

    divFio.appendChild(fioHeader);
    divFio.appendChild(fioP);

    let divPhone = document.createElement("div");
    divPhone.classList.add("card-text");
    let phoneHeader = document.createElement("span");
    phoneHeader.style.fontWeight = "bold";
    phoneHeader.innerText = "Номер телефона: ";
    let phoneP = document.createElement("span");
    phoneP.innerText = phone;

    divPhone.appendChild(phoneHeader);
    divPhone.appendChild(phoneP);

    let divEmail = document.createElement("div");
    divEmail.classList.add("card-text");
    let emailHeader = document.createElement("span");
    emailHeader.style.fontWeight = "bold";
    emailHeader.innerText = "Email: ";
    let emailP = document.createElement("span");
    emailP.innerText = email;

    divEmail.appendChild(emailHeader);
    divEmail.appendChild(emailP);

    cardBodyAppointment.appendChild(divDate);
    cardBodyAppointment.appendChild(divTime);
    cardBodyAppointment.appendChild(divComplaints);
    cardBodyAppointment.appendChild(divFio);
    cardBodyAppointment.appendChild(divPhone);
    cardBodyAppointment.appendChild(divEmail);
    cardAppointment.appendChild(cardBodyAppointment);
    divAppointment.appendChild(cardAppointment);
    
    document.querySelector("#appointments").appendChild(divAppointment);
}