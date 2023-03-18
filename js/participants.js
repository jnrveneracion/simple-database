function selector(selector) {
    return document.querySelector(selector);
}

// Add new participant
const btnSave = selector('#btnSave');
btnSave.addEventListener('click', (e) => {
    e.preventDefault();

    // let id = selector('#id').value;
    // let pname = selector('#pname').value;
    // let gender = selector('#gender').value;
    // let paddress = selector('#paddress').value;
    // let agency = selector('#agency').value;
    // let email = selector('#email').value;
    // let remarks = selector('#remarks').value;
    // let data = { id, pname, gender, paddress, agency, email, remarks };

    let data = new FormData();
    data.append('id', selector('#id').value);
    data.append('Patient_ID', selector('#Patient_ID').value);
    data.append('Given_name', selector('#Given_name').value);
    data.append('Last_name', selector('#Last_name').value);
    data.append('Birthdate', selector('#Birthdate').value);
    data.append('Age', selector('#Age').value);
    data.append('Sex', selector('#Sex').value);
    data.append('Address', selector('#Address').value);
    data.append('City', selector('#City').value);
    data.append('Phone_Number', selector('#Phone_Number').value);
    data.append('email', selector('#email').value);
    

    if (btnSave.innerHTML === 'Save') {
        saveParticipant(data);
    } else {
        updateParticipantRecord(data);
    }

})



function saveParticipant(data) {
   
    fetch('./php/saveParticipant.php', {
        method: 'POST',
        body: data
    })
        .then(response => response.text())
        .then(() => location.reload())

}


function updateParticipantRecord(data) {
   
    fetch('./php/updateParticipant.php', {
        method: 'POST',
        body: data
    })
        .then(response => response.text())
        .then(() => location.reload())

}


function clearModalForm() {
    selector('#id').value = '';
    selector('#Patient_ID').value = '';
    selector('#Given_name').value = '';
    selector('#Last_name').value = '';
    selector('#Birthdate').value = '';
    selector('#Age').value = '';
    selector('#Sex').value = '';
    selector('#Address').value = '';  
    selector('#City').value = '';    
    selector('#Phone_Number').value = '';    
    selector('#email').value = '';   
    selector('#exampleModalLabel').innerHTML = 'Add new participant';
    btnSave.innerHTML = 'Save';
}


function showModalForm(data = []) {
    selector('#id').value = data.length == 0 ? '' : data.id;
    selector('#Patient_ID').value = data.length == 0 ? '' : data.Patient_ID;
    selector('#Given_name').value = data.length == 0 ? '' : data.Given_name;
    selector('#Last_name').value = data.length == 0 ? '' : data.Last_name;
    selector('#Birthdate').value = data.length == 0 ? '' : data.Birthdate;
    selector('#Age').value = data.length == 0 ? '' : data.Age;
    selector('#Sex').value = data.length == 0 ? '' : data.Sex;
    selector('#Address').value = data.length == 0 ? '' : data.Address;    
    selector('#City').value = data.length == 0 ? '' : data.City; 
    selector('#Phone_Number').value = data.length == 0 ? '' : data.Phone_Number; 
    selector('#email').value = data.length == 0 ? '' : data.email; 
    selector('#exampleModalLabel').innerHTML = data.length == 0 ? 'Add new participant' :'Update participant';
    btnSave.innerHTML = data.length == 0 ? 'Save' : 'Update';
}



function updateParticipant(id) {

    fetch(`./php/getParticipant.php?id=${id}`)
        .then(response => response.json())
        .then(data => {
            new bootstrap.Modal(selector('#exampleModal'), {}).show();
            showModalForm(data);
        })

}


function deleteParticipant(id) {

    let response = confirm('Do you want to delete this participant with an ID: ' + id + '?');

    let formID = new FormData();
    formID.append('id', id);

    if (response) {
        fetch('./php/deleteParticipant.php', {
            method: 'POST',
            body: formID,
        })
            .then(response => response.text())
            .then(data => location.reload())
    }

}


// Search participant
function searchParticipant() {
    let keyword = document.querySelector('#keyword').value;

    $.ajax({
        url: './php/getParticipants.php',
        method: 'GET',
        data: { keyword: keyword },
        dataType: 'json',
        success: (response) => {
            $('#participantList').empty();

            $.each(response, (key, value) => {
                const data = {
                    id: value.id,
                    Patient_ID: value.Patient_ID,
                    Given_name: value.Given_name, 
                    Last_name: value.Last_name,
                    Birthdate: value.Birthdate,
                    Age: value.Age,
                    Sex: value.Sex,
                    Address: value.Address,
                    City: value.City,
                    Phone_Number: value.Phone_Number,
                    email: value.email
                }
                insertItemToTable(data);
            });
        }
    })
}
// End


function getParticipants() {
    
    fetch('./php/getParticipants.php')
        .then((response) => response.json())
        .then((data) => {
            data.forEach(item => {
                insertItemToTable(item)
            });
        });

}

function insertItemToTable(data) {
    let output = `
        <tr>
            <td>${data.Patient_ID}</td>
            <td>${data.Given_name}</td>
            <td>${data.Last_name}</td>
            <td>${data.Birthdate}</td>
            <td>${data.Age}</td>
            <td>${data.Sex}</td>
            <td>${data.Address}</td>
            <td>${data.City}</td>
            <td>${data.Phone_Number}</td>
            <td>${data.email}</td>
            <td>
                <input type="hidden" id="${data.id}" />
                <button type="button" class="btn btn-warning" onclick="updateParticipant(${data.id})">Update</button>
                <button type="button" class="btn btn-danger" onclick="deleteParticipant(${data.id})">Delete</button>
            </td>
        </tr>
    `;

    // let participantList = selector('#participantList');
    // participantList.innerHTML += output;

    let participantList = $('#participantList')
    participantList.append(output);
}


// During page load
window.addEventListener('load', () => {
    getParticipants();
})