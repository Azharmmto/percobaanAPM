const dashboard = document.querySelector(".container aside ul li:nth-child(1)");
const laporan = document.querySelector(".container aside ul li:nth-child(2)");
const dtLaporan = document.querySelector(".container aside ul li:nth-child(3)");
const logout = document.querySelector(".container aside ul li:nth-child(4)");

const mainDashboard = document.querySelector(".container main .dashboard");
const mainLaporan = document.querySelector(".container main .laporan");
const mainDTLaporan = document.querySelector(".container main .detail-laporan");

dashboard.addEventListener("click", function () {
  mainDashboard.style.display = "block";
  mainLaporan.classList.remove("active");
});

laporan.addEventListener("click", function () {
  mainLaporan.classList.add("active");
  mainDashboard.style.display = "none";
});
