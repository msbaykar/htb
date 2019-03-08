// mobil nav
function openNav() {

  document.getElementById("menuMobil").style.left = 0;
  document.getElementById("hambBtn").style.display = "none";
  document.getElementById("hambBtnClose").style.display = "block";
  document.getElementById("hambBtnClose").style.background = "#fff";
  console.log("acıldı");





}
function closeNav() {
  document.getElementById("menuMobil").style.left = "-200%";
  document.getElementById("hambBtn").style.display = "block";
  document.getElementById("hambBtnClose").style.display = "none";
  console.log("kapandı");


}
