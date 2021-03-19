let add_categ = document.getElementById("add-cat");
let pop_up_cat = document.querySelector('.pop-up');
let close_cat = document.querySelector('.close');
let table1 = document.querySelector("body > div > div.content-container > div > div.table1 > table");
let add_cat_btn = document.getElementById("insert-cat");
let cat_name = document.querySelector(".cat_name");
let product_count = document.querySelector(".product_count");


let t = document.querySelector("body > div > div.content-container > div > div.table1 > table > tbody");

function loadData() {


  fetch("http://localhost/brief04/inc/dashboard.php", {
    headers: {
      // 'Accept': 'application/json',
      'Content-Type': 'application/json'
    },

  }).then(response => response.json()).then(

    response => {
      t.innerHTML = '';
      response.forEach((element, index) => {



        let tr = document.createElement("tr");
        tr.innerHTML = `
        <tr>
       
        <td><input type="text" value="${index + 1}"></td>
        <td><input type="text" value="${element.catg_name}"></td>
        <td><input type="text" value="${element.product_count}"></td>
        <td><i class="fa fa-trash-o delete" aria-hidden="true" value="${element.categ_id}"></i><i class="fa fa-pencil edit" aria-hidden="true"  value="${element.categ_id}"></i></td>
        </tr>
              `
        t.appendChild(tr);



      })
      //-----------delete categoeies---------------

      let del = Array.from(document.querySelectorAll(".delete"));
      del.forEach(element => {
        element.addEventListener('click', function () {

          Swal.fire({
            title: 'All product in this category will be deleted',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
          }).then((result) => {
            if (result.isConfirmed) {
              let id_value = +element.getAttribute("value");

              let data = { id: id_value };
              fetch("http://localhost/brief04/inc/deleteCat.php", {
                headers: {
                  // 'Accept': 'application/json',
                  'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(data)
              }).then(response => response.json()).then(

                response => {
                  if (response == true) {

                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Your category is deleted successfuly',
                      showConfirmButton: false,
                      timer: 1500

                    })


                    loadData();

                  } else {
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'some thing is rong',
                      showConfirmButton: false,
                      timer: 1500
                    })
                  }

                }



              )

            }
          })

        });


      })


      let edit = Array.from(document.querySelectorAll(".edit"));


      edit.forEach(element => {
        element.addEventListener('click', function () {
          let cat_value = +element.getAttribute("value");


          
          let row = element.parentElement.parentElement.children;
          row[1].children[0].style['pointer-events'] = "auto";
          row[1].children[0].style.border = "solid 1px red";
         
          

          let id_update = row[3].querySelector(".edit").getAttribute("value");

          row[3].innerHTML = `<i class="fa fa-times cancel" aria-hidden="true" ></i><i class="fa fa-check confirm" aria-hidden="true" value='${id_update}'></i>`;

          

          let confirmAll = [...document.querySelectorAll('.confirm')];
          let cancelAll = [...document.querySelectorAll('.cancel')];

          confirmAll.forEach(element => {
            element.addEventListener('click', function () {
              let input_update=row[1].children[0].value;
              let id = element.getAttribute('value');
              let update_info = {id:id,name:input_update};
              console.log(update_info);
              fetch("http://localhost/brief04/inc/updateCat.php", {
                headers: {
                  // 'Accept': 'application/json',
                  'Content-Type': 'application/json'
                },
                method: "POST",
                body: JSON.stringify(update_info)
              }).then(response => response.json()).then(

                response => {
                  
                  if (response == true) {

                    Swal.fire({
                      position: 'center',
                      icon: 'success',
                      title: 'Your category is uptated successfuly',
                      showConfirmButton: false,
                      timer: 1500

                    })


                    loadData();

                  } else {
                    Swal.fire({
                      position: 'center',
                      icon: 'error',
                      title: 'some thing is rong',
                      showConfirmButton: false,
                      timer: 1500
                    })
                  }

                }



              )

              
            })
          });

          cancelAll.forEach(element => {
            element.addEventListener('click', function () {
              loadData();
            })
          });






          
        });
      })
    })
}


loadData();














add_categ.addEventListener('click', function () {

  pop_up_cat.classList.add('pop-active');


});

close_cat.addEventListener('click', function () {
  Swal.fire({
    title: 'Are you sure?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then((result) => {
    if (result.isConfirmed) {
      pop_up_cat.classList.remove('pop-active');
      cat_name.value = "";
      product_count.value = "";
    }
  })

});



add_cat_btn.addEventListener('click', function () {

  let name = cat_name.value;
  let count = product_count.value;
  let count_RGX = /^[0-9]+$/;


  if (name.trim() == "" || !count_RGX.test(count)) {
    alert('empty fields');
  } else {


    let insert_cat = { name: name.trim(), count: count.trim() };
    fetch("http://localhost/brief04/inc/add.php", {
      headers: {
        // 'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      method: "POST",
      body: JSON.stringify(insert_cat)
    }).then(response => response.json()).then(

      data => {
        if (data == true) {

          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your category is added successfuly',
            showConfirmButton: false,
            timer: 1500

          })

          cat_name.value = "";
          product_count.value = "";
          loadData();

        } else {
          Swal.fire({
            position: 'center',
            icon: 'error',
            title: 'some thing is rong',
            showConfirmButton: false,
            timer: 1500
          })
        }

      }

    )



  }








});


let search = document.querySelector("body > div > div.content-container > div > div.cat-actions > div.search-input1 > input[type=text]");

search.addEventListener('input', function () {
  let search_value = search.value;

  let tr = document.getElementsByTagName("tr");


  for (let i = 1; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[1];

    let tb = [td.querySelector("input").value];

    //  console.log(td);
    //  console.log(tb);


    if (search_value == tb[0]) {

      tr[i].style.display = "";



    }
    else {
      tr[i].style.display = "none";
    }
    if (search_value.trim() == "") {
      tr[i].style.display = "";
    }


  }



})





