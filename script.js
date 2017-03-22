  window.onload = function () {
    (function () {
      var date = new Date();
      var time = date.getHours() + ':' + date.getMinutes() + ':' + date.getSeconds();
      document.getElementsByTagName('div')[0].innerHTML = "js aeg: " + time;
      window.setTimeout(arguments.callee, 1000);
    })();
  };

function greeting(){
    
    document.write("Zdrastje, ja funktsija JS")
}