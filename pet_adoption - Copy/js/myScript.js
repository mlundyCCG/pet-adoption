/*Variables*/
let bannerZipInput = document.getElementById("zip");
let bannerSubmitBtn = document.getElementById("banner-form-submit-btn");
let petList = document.getElementById("pet-select");
let valid = false;
let currentPic = [];

/*Helper Functions*/
let fetchData = async (url,func) => {
  let res = await fetch(url);
  let data = await res.json();

  func(data);
}

let displayYear = () => {
  let year = document.getElementById("year");
  let d = new Date();

  year.innerHTML = d.getFullYear();
}

displayYear();

/*Functions*/
function showMenuLinks() {
  document.getElementById("mobile-nav").style.width = "250px";
}

function hideMenuLinks() {
  document.getElementById("mobile-nav").style.width = "0px";
}

function showSearchBar() {
  document.getElementById("header-search-box").style.display = "block";
  document.getElementById("header-search-box").style.width = "200px";
  document.getElementsByClassName("header-logo")[0].style.display = "none";
  document.getElementsByClassName("fa-search")[0].style.display = "none";
  document.getElementsByClassName("search-close")[0].style.display = "block";
  document.getElementsByClassName("fa-bars")[0].style.position = "absolute";
  document.getElementsByClassName("fa-bars")[0].style.top = "50%";
  document.getElementsByClassName("fa-bars")[0].style.right = "1.25em";
  document.getElementsByClassName("fa-bars")[0].style.transform = "translate(-50%, -50%)";
}

function hideSearchBar() {
  document.getElementById("header-search-box").style.display = "none";
  document.getElementById("header-search-box").style.width = "0";
  document.getElementsByClassName("header-logo")[0].style.display = "flex";
  document.getElementsByClassName("fa-search")[0].style.display = "block";
  document.getElementsByClassName("search-close")[0].style.display = "none";
  document.getElementsByClassName("fa-bars")[0].style.position = "static";
  document.getElementsByClassName("fa-bars")[0].style.top = "0%";
  document.getElementsByClassName("fa-bars")[0].style.transform = "translate(0%, 0%)";
}

let displayDogPics = (data) => {
  let pics = document.getElementById("dog-pics");

  pics.innerHTML = `
    <img src="${data.message}" style="width:250px !important; height:200px;">
  `;
}

let getDogPhoto = () => {
  fetchData("https://dog.ceo/api/breeds/image/random", displayDogPics);
}

getDogPhoto();

if(document.getElementsByTagName("title")[0].innerHTML == "Site Name | Home") {
  setInterval(getDogPhoto, 5000);
}

let contactFormFields = document.querySelectorAll(".c-form");

contactFormFields.forEach(field => {
  field.addEventListener('focus', (e) => {
    e.target.style.background = "#EADDCA";
  })
})

contactFormFields.forEach(field => {
  field.addEventListener('focusout', (e) => {
    e.target.style.background = "white";
  })
})