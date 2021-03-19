


let add_product = document.getElementById("add-product");
let pop_up = document.querySelector('.pop-up');
let close = document.querySelector('.close');
let table = document.querySelector("body > div > div.content-container > div > div.table1 > table");
let add_prod_btn = document.getElementById("insert-product");
let product_name = document.querySelector('.product-name');
let cat_name = document.querySelector('.cat-name');
let price = document.querySelector('.price');
let quantity = document.querySelector('.quantity');
let description = document.querySelector('.description');
let search = document.querySelector("body > div > div.content-container > div > div.cat-actions > div.search-input1 > input[type=text]");

let t = document.querySelector("body > div > div.content-container > div > div.table1 > table > tbody");




function loadProduct() {
  fetch("http://localhost/brief04/inc/read-prod.php", {
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
              <td><input type="text" value="${element.prod_name.trim()}"></td>
              <td><input type="text" value="${element.catg_name.trim()}"></td>
              <td><input type="text" value="${element.price}"></td>
              <td><input type="text" value="${element.quatity}"></td>
              <td><input type="text" value="${element.prod_desc}"></td>
              <td><i class="fa fa-trash-o delete" aria-hidden="true" value="${element.product_id}" data-id="${element.categ_id}"></i><i class="fa fa-pencil edit" aria-hidden="true"  value="${element.product_id}"></i></td>
              </tr>
              `
 
        t.appendChild(tr);





      })
      let del = Array.from(document.querySelectorAll(".delete"));
      del.forEach(element => {
        element.addEventListener('click', function () {

          Swal.fire({
            title: 'Are you sure',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes'
          }).then((result) => {
            if (result.isConfirmed) {
              let id_value = +element.getAttribute("value");
              let cat_id = +element.getAttribute("data-id");

              let data = { id_value: id_value, cat_id: cat_id };
              fetch("http://localhost/brief04/inc/deleteProd.php", {
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


                    loadProduct();









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
        //-----------------------update product--------------------
        let edit = Array.from(document.querySelectorAll(".edit"));


        edit.forEach(element => {
          element.addEventListener('click', function () {
            let cat_value = +element.getAttribute("value");
  
  
            
            let row = element.parentElement.parentElement.children;
           
            row[1].children[0].style['pointer-events'] = "auto";
            row[1].children[0].style.border = "solid 1px red";

            row[3].children[0].style['pointer-events'] = "auto";
            row[3].children[0].style.border = "solid 1px red";

            row[4].children[0].style['pointer-events'] = "auto";
            row[4].children[0].style.border = "solid 1px red";

            row[5].children[0].style['pointer-events'] = "auto";
            row[5].children[0].style.border = "solid 1px red";
           
            
  
            let id_update = row[6].querySelector(".edit").getAttribute("value");
  
            row[6].innerHTML = `<i class="fa fa-times cancel" aria-hidden="true" ></i><i class="fa fa-check confirm" aria-hidden="true" value='${id_update}'></i>`;
  
            
  
            let confirmAll = [...document.querySelectorAll('.confirm')];
            let cancelAll = [...document.querySelectorAll('.cancel')];
  
            confirmAll.forEach(element => {
              element.addEventListener('click', function () {

                let name_update=row[1].children[0].value;
                let price_update=row[3].children[0].value;
                let quant_update=row[4].children[0].value;
                let desc_update=row[5].children[0].value;

                let id = element.getAttribute('value');

                let update_info = {id:id,name:name_update,price:price_update,qunt:quant_update,desc:desc_update};
                console.log(update_info);
                fetch("http://localhost/brief04/inc/updateprod.php", {
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
  
  
                      loadProduct();
  
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
                loadProduct();
              })
            });
  
  
  
  
  
  
            
          });
        })
        ////----------------------------------------------------/////////


    }

  )
}


loadProduct();

fetch("http://localhost/brief04/inc/read-cat.php", {
  headers: {
    // 'Accept': 'application/json',
    'Content-Type': 'application/json'
  },

}).then(response => response.json()).then(
  response => {

    response.forEach(element => {

      let option = `<option value="${element.categ_id}">${element.catg_name}</option>`
      cat_name.insertAdjacentHTML("beforeend", option);



    });

  }
)



add_product.addEventListener('click', function () {

  pop_up.classList.add('pop-active');


});

close.addEventListener('click', function () {
  Swal.fire({
    title: 'Are you sure?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    confirmButtonText: 'Yes'
  }).then((result) => {
    if (result.isConfirmed) {
      pop_up.classList.remove('pop-active');
      product_name.value = "";
      cat_name.options.selectedIndex = 0;
      price.value = "";
      quantity.value = "";
      description.value = "";
    }
  })

});






add_prod_btn.addEventListener('click', function () {

  let name = product_name.value;
  let category = cat_name.options[cat_name.options.selectedIndex].value;


  let pric = price.value;
  let quant = quantity.value;
  let desc = description.value;
  // let string_RGX = /^\D\w+$/;
  //  let float_RGX=/^\d+\.\d+$/;

  // let number2_RGX = /^[0-9]+$/;



  if (name.trim() == ""
    || pric.trim() == "" ||
    quant.trim() == "" || desc.trim() == "" || category == 0) {
    alert('incorrect data');
  } else {
    let insert_product = { name: name.trim(), category: category.trim(), price: +pric, quant: +quant, desc: desc.trim() };
    console.log(insert_product);
    fetch("http://localhost/brief04/inc/add_prod.php", {
      headers: {
        // 'Accept': 'application/json',
        'Content-Type': 'application/json'
      },
      method: "POST",
      body: JSON.stringify(insert_product)
    }).then(response => response.json()).then(
      data => {
        
        if (data == true) {

          Swal.fire({
            position: 'center',
            icon: 'success',
            title: 'Your product is added successfuly',
            showConfirmButton: false,
            timer: 1500

          })

          loadProduct();



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

