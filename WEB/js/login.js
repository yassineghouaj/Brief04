
//-----------login_page---------------------------
let login_btn = document.getElementById("login-btn");
let BTNemail = document.querySelector("body > div > div > div > input[type=text]:nth-child(1)");
let BTNpassword = document.querySelector("body > div > div > div > input[type=password]:nth-child(2)");
//----------profile_page--------------------------








//========================login-btn==================
login_btn.addEventListener('click', function () {
    let email = BTNemail.value;
    let password = BTNpassword.value;


    let email_RGX = /^[a-zA-Z0-9.!#$%&'+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:.[a-zA-Z0-9-]+)$/;
    let validation;

    if (email == "" || password == "") {
        alert('empty fields');
    } else {
        if (!email_RGX.test(email)) {
            alert('Please enter a valid email');
        } else {

            let login_info = { email: email, password: password };
            


            const result = fetch("http://localhost/brief04/inc/login.php", {
                headers: {
                    // 'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(login_info)
            }).then(response => response.json()).then(
                data => {
                    
                
                    if (data==true) {
                        
                      

                        location.href = "http://localhost/brief04/index.php";

    
                    } else {
                        
                        Swal.fire({
                            position: 'center',
                            icon: 'error',
                            title: 'enter a valide login info',
                            showConfirmButton: false,
                            timer: 1500
                        })
                        BTNemail.value = "";
                        BTNemail.style.border = "solid 2px red";
                        BTNpassword.value = "";
                        BTNpassword.style.border = "solid 2px red";

                    }
                }
            )


        }
    }
});

