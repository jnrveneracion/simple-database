

// Index load page
window.addEventListener('load', () => {
    getCovidEncounter();
    getVaccinated();
    getWithFever();
    getAdult();
    getMinor();
    getForeigner();
})



function getCovidEncounter() {

    fetch('./php/getCovidEncounter.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#WithCovidEncounter').innerHTML = result.WithCovidEncounter
    })

}

function getVaccinated() {

    fetch('./php/getVaccinated.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#Vaccinated').innerHTML = result.Vaccinated
    })

}

function getWithFever() {

    fetch('./php/getWithFever.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#WithFever').innerHTML = result.WithFever
    })

}

function getAdult() {

    fetch('./php/getAdult.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#Adult').innerHTML = result.Adult
    })

}

function getMinor() {

    fetch('./php/getMinor.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#Minor').innerHTML = result.Minor
    })

}

function getForeigner() {

    fetch('./php/getForeigner.php')
    .then(response => response.json())
    .then(result => {
        document.querySelector('#Foreigner').innerHTML = result.Foreigner
    })

}

