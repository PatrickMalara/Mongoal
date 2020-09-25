let goals; // This holds all the goals... I put it in the first line because he is so important lol

window.addEventListener("load", function () {

    getGoals();

    let createGoalsBtn = document.getElementById("createGoal");
    createGoalsBtn.addEventListener("click", function () {
        createGoal();
    });
});

//DOM Elements
let goalsTable = document.getElementById("gTable");
let monthYearInput = document.getElementById("dateOfGoals");
let progressBar = document.getElementById("progessBar");


//These lines control the default date that is loaded
let date = new Date();
if(date.getMonth() + 1 < 10){
    monthYearInput.defaultValue = date.getFullYear() + "-0" + (date.getMonth() + 1);
}else {
    monthYearInput.defaultValue = date.getFullYear() + "-" + (date.getMonth() + 1);
}


function updateProgressBar() {
    let totalCurr = 0;
    let totalOutOf = 0;

    for (let i = 0; i < goals.length; i++) {
        totalCurr = totalCurr + parseInt(goals[i].curr);
        totalOutOf = totalOutOf + parseInt(goals[i].outOf);
    }

    var percent = parseInt((totalCurr / totalOutOf) * 100);
    progressBar.style.width = "" + percent + "%";
    progressBar.innerText = "" + percent + "%";
}

function getGoals() {

    let params = "date=" + monthYearInput.value;

    fetch("getTable.php", {
        method: 'POST',
        credentials: 'include',
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: params
    })
        .then(response => response.json())
        .then(getGoalsSuccess);
}

function getGoalsSuccess(json) {
    goalsTable.innerHTML = "";
    goals = json;

    for (let i = 0; i < json.length; i++) {
        //Update the table, this is worst part of the site... I will try to fix this some time
        goalsTable.innerHTML += "<tr> <td colspan=\"7\" onclick=\"updateModal(" + i + ")\" data-toggle=\"modal\" data-target=\"#GoalModal\" >" + json[i].title + "</td>  <td><span class=\"badge " + (json[i].curr >= json[i].outOf ? "badge-primary" : "badge-light") + " badge-pill\">" + json[i].curr + "/" + json[i].outOf + "</span></td> <td onclick=\"updateCurr(" + json[i].id + ")\"><h4 class=\"increaseBtn\">+</h4></td> </tr>";
    }


    updateProgressBar();

}

function createGoal() {
    let createGoalTitleDom = document.getElementById("createGoalTitle");
    let createGoalOutOfDom = document.getElementById("createGoalOutOf");
    //																								we add the "-01" that way in works in our INSERT query :) 
    let params = "title=" + createGoalTitleDom.value + "&outOf=" + createGoalOutOf.value + "&monthYear=" + monthYearInput.value + "-01";

    fetch("createGoal.php", {
        method: 'POST',
        credentials: 'include',
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: params
    })
        .then(response => response.text())
        .then(createGoalSuccess);
}

function createGoalSuccess(text) {
    getGoals();
}

function updateCurr(id) {
    let params = "id=" + id;

    fetch("increaseCurr.php", {
        method: 'POST',
        credentials: 'include',
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: params
    })
        .then(response => response.text())
        .then(getUpdateCurrSuccess);

}
function getUpdateCurrSuccess(text) {
    getGoals();
}

function editGoal(deleteGoal) {
    if (deleteGoal) {
        if (!confirm("Are you sure you want to delete this Goal?")) {
            return;
        }
    }

    let id = document.getElementById("modalGoalId").value;
    let title = document.getElementById("modalTitle").value;
    let outOf = document.getElementById("modalOutOf").value;
    let curr = document.getElementById("modalCurr").value;
    let monthYear = document.getElementById("modalMonth").value + "-01";
    let params = "delete=" + deleteGoal + "&id=" + id + "&title=" + title + "&outOf=" + outOf + "&curr=" + curr + "&monthYear=" + monthYear;

    fetch("editGoal.php", {
        method: 'POST',
        credentials: 'include',
        headers: { "Content-Type": "application/x-www-form-urlencoded" },
        body: params
    })
        .then(response => response.text())
        .then(updateGoalsSuccess);
}

function updateGoalsSuccess(text) {
    getGoals();
}

function updateModal(goalIndex) {
    document.getElementById("modalGoalId").value = goals[goalIndex].id;
    document.getElementById("modalTitle").value = goals[goalIndex].title;
    document.getElementById("modalOutOf").value = goals[goalIndex].outOf;
    document.getElementById("modalCurr").value = goals[goalIndex].curr;
    document.getElementById("modalMonth").value = goals[goalIndex].date.substring(0, 7);
}
