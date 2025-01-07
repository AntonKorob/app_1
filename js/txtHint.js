function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHint").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("textHint").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "../storeg/gethint.php?q=" + str, true);
    xmlhttp.send();
  }
}
