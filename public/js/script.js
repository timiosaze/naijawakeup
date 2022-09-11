document.addEventListener("DOMContentLoaded", () => {

tinymce.init({
    selector: 'textarea#default-editor',
    height: 400,
    plugins: 'table searchreplace emoticons fullscreen advlist autolink lists link image charmap preview anchor pagebreak',
    toolbar: 'fullscreen searchreplace emoticons table',
    toolbar_mode: 'floating',
});

$('.selected-cat').hide();
$('.tt-icon').on( "click", function(event) {
    console.log("clicked");
    $(this).toggleClass('tt-icon-active');
    if($(this).hasClass('tt-icon-active')){
        $('.selected-cat').show();
    } else {
        $('.selected-cat').hide();
    }
});

const wrapper = document.querySelector(".wrapper"),
selectBtn = wrapper.querySelector(".select-btn"),
searchInp = wrapper.querySelector("input"),
options = wrapper.querySelector(".options");

let countries = ["Afghanistan", "Algeria", "Argentina", "Australia", "Bangladesh", "Belgium", "Bhutan",
                 "Brazil", "Canada", "China", "Denmark", "Ethiopia", "Finland", "France", "Germany",
                 "Hungary", "Iceland", "India", "Indonesia", "Iran", "Italy", "Japan", "Malaysia",
                 "Maldives", "Mexico", "Morocco", "Nepal", "Netherlands", "Nigeria", "Norway", "Pakistan",
                 "Peru", "Russia", "Romania", "South Africa", "Spain", "Sri Lanka", "Sweden", "Switzerland",
                 "Thailand", "Turkey", "Uganda", "Ukraine", "United States", "United Kingdom", "Vietnam"];

function addCountry(selectedCountry) {
    options.innerHTML = "";
    countries.forEach(country => {
        let isSelected = country == selectedCountry ? "selected" : "";
        let li = `<li onclick="updateName(this)" class="${isSelected}">${country}</li>`;
        options.insertAdjacentHTML("beforeend", li);
    });
}
addCountry();

function updateName(selectedLi) {
    searchInp.value = "";
    addCountry(selectedLi.innerText);
    wrapper.classList.remove("active");
    selectBtn.firstElementChild.innerText = selectedLi.innerText;
}

searchInp.addEventListener("keyup", () => {
    let arr = [];
    let searchWord = searchInp.value.toLowerCase();
    arr = countries.filter(data => {
        return data.toLowerCase().startsWith(searchWord);
    }).map(data => {
        let isSelected = data == selectBtn.firstElementChild.innerText ? "selected" : "";
        return `<li onclick="updateName(this)" class="${isSelected}">${data}</li>`;
    }).join("");
    options.innerHTML = arr ? arr : `<p style="margin-top: 10px;">Oops! Country not found</p>`;
});

selectBtn.addEventListener("click", () => wrapper.classList.toggle("active"));

const colors = ["#800000", "#008080", "#191970", "#4B0082", "#FFD700", "#E9967A", "#7289DA", "#23272A"];

function getColor(){
    var color = colors[Math.floor(Math.random()*colors.length)];
    document.getElementById("avatar").style.backgroundColor= '#4B0082';
}

$("#avatar").css("background-color", "lightgray");

});