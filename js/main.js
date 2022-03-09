function ajaxGet(id,url,append=false,async=false) {
    
    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {//alert(url);
        if (this.readyState == 4 && this.status == 200) {
            if(append) document.getElementById(id).innerHTML += this.responseText;
            else document.getElementById(id).innerHTML = this.responseText;
       }
    };
    xhttp.open("GET", url, async);
    xhttp.send();
}

function show_snackbar(data) {

  var x = document.getElementById("snackbar")
  x.className = "show";
  x.innerHTML = data;
  setTimeout(function(){ x.className = x.className.replace("show", ""); }, 3000);
}

function confirmation(text, url)
{
    var chk = confirm(text);
    if(chk)
    {
        window.location.href = url;
    }
}

function rawurlencode (str) {

  str = (str + '')
  // Tilde should be allowed unescaped in future versions of PHP (as reflected below),
  // but if you want to reflect current
  // PHP behavior, you would need to add ".replace(/~/g, '%7E');" to the following.
  return encodeURIComponent(str)
    .replace(/!/g, '%21')
    .replace(/'/g, '%27')
    .replace(/\(/g, '%28')
    .replace(/\)/g, '%29')
    .replace(/\*/g, '%2A')
}
