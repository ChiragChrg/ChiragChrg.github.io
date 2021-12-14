// var url = "https://drive.google.com/file/d/1A8bftX6IbOJJIATkTVzfgHM1vu0HW0AI/view?usp=sharing";

function download() {
  // Converting Gdrive URL to Downloadable link
  var url = document.getElementById("download").value;
  var id = "";

  url = url.replace("https://drive.google.com/file/d/", "");

  if (url.includes("/view?usp=sharing"))
    id = url.replace("/view?usp=sharing", "");
  else id = url.replace("/view?usp=drivesdk", "");

  var link = "https://drive.google.com/uc?id=" + id + "&export=download";

  window.open(link, "_blank");
}
