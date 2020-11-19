function view(val) {
    document.getElementById("output").value += val;
  }

  function clean() {
    document.getElementById("output").value = "";
  }

  function backspace() {
    var val = document.getElementById("output").value;
    document.getElementById("output").value = val.substring(
      0,
      val.length - 1
    );
  }

  function equal() {
    var val = document.getElementById("output").value;
    document.getElementById("output").value = eval(val);
  }

  function square(){
    var val = document.getElementById("output").value; 
    document.getElementById("output").value = Math.pow(val,2);
  }

  function percent(){
    var val = document.getElementById("output").value; 
    document.getElementById("output").value = eval(val/100);
  }