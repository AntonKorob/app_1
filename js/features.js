
function Clipboard_CopyTo(value) {
    var tempInput = document.createElement("input");
    tempInput.value = value;
    document.body.appendChild(tempInput);
    tempInput.select();
    document.execCommand("copy");
    document.body.removeChild(tempInput);
    
}

document.querySelector('#Copy1').onclick = function() {
        Clipboard_CopyTo('Left');
      }
document.querySelector('#Copy2').onclick = function() {
        Clipboard_CopyTo('Middle');
      }
document.querySelector('#Copy3').onclick = function() {
        Clipboard_CopyTo('Right');
      }
document.querySelector('#Copy4').onclick = function() {
        Clipboard_CopyTo('Hello');
      }

