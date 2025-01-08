<div class="container justify-content-center h-100">
    <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
        <h1 class="display-4 fw-normal text-body-emphasis">Проверка форм</h1>
        <p class="fs-5 text-body-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum quod aut aliquid nostrum vel esse labore fugit quasi, dignissimos molestias libero temporibus.</p>
    </div>
    <div class="row">
        <div class="col-2">
            
        </div>
        <div class="col">
            <!-- AJAX PHP tech -->
            <!-- <script src="../js/txtHint.js"></script> -->
            <script>
                function showHint(str) {
                    if (str.length == 0) {
                        document.getElementById("txtHint").innerHTML = "";
                        return;
                    } else {
                        var xmlhttp = new XMLHttpRequest();
                        xmlhttp.onreadystatechange = function() {
                            if (this.readyState == 4 && this.status == 200) {
                                document.getElementById("txtHint").innerHTML = this.responseText;
                            }
                        }
                        xmlhttp.open("GET", "../storeg/gethint.php?q=" + str, true);
                        xmlhttp.send();
                    }
                }
            </script>
            <p><b>Start typing a name in the input field below:</b></p>
            <form action="">
                <label for="fname">First name:</label>
                <input class="form-control border-4 w-50" type="text" id="fname" name="fname" onkeyup="showHint(this.value)">
            </form>
            <p>Suggestions: <span id="txtHint"></span></p>

            <button class="btn btn-outline-secondary" type="reset" name="reset"><a class="text-decoration-none text-dark" href="../pages/help_4.php">Сбросить</a></button>

        </div>
    </div>


</div>