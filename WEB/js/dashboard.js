
let cat_name = document.querySelector('.cat-name');
let table = document.querySelector("body > div > div.content-container > div.table-dashboard > div.table-product > table");
let search = document.querySelector("body > div > div.content-container > div.table-dashboard > div.search > div > input[type=text]");
fetch("http://localhost/brief04/inc/read-prod.php", {
  headers: {
    // 'Accept': 'application/json',
    'Content-Type': 'application/json'
  },

}).then(response => response.json()).then(

  response => {
    response.forEach((element, index) => {
      let tr = `
            <tr>
            <td>${index + 1}</td>
            <td>${element.prod_name}</td>
            <td>${element.catg_name}</td>
            <td>${element.price}</td>
            <td>${element.quatity}</td>
            <td>${element.prod_desc}</td>
            </tr>
            `
      table.insertAdjacentHTML("beforeend", tr);

    })

  }

)

fetch("http://localhost/brief04/inc/dashboard.php", {
  headers: {
    // 'Accept': 'application/json',
    'Content-Type': 'application/json'
  },

}).then(response => response.json()).then(

  response => {
    let t = document.querySelector(".dashboard-content");


    let card = '';

    response.forEach(element => {

      let option = `<option value="${element.categ_id}">${element.catg_name}</option>`
      cat_name.insertAdjacentHTML("beforeend", option);


      card += `
               <div class="card">
               <h1>${element.product_count}</h1>
               <h4>${element.catg_name}</h4>
               </div>
               `


    });
    t.innerHTML = card;

  }

)

search.addEventListener('input', function () {
  let search_value = document.querySelector("body > div > div.content-container > div.table-dashboard > div.search > div > input[type=text]").value;
  console.log(search_value);
  let tr = document.getElementsByTagName("tr");


  for (let i = 1; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[1];
    let tb = [td.innerText];
  

    if (search_value == tb) {

      tr[i].style.display = "";

    } else {
      tr[i].style.display = "none";
    }
    if (search_value.trim() == "") {
      tr[i].style.display = "";
    }


  }



})

cat_name.addEventListener('click', function () {
  let value = cat_name.options[cat_name.selectedIndex].text;
  let tr = document.getElementsByTagName("tr");

  for (let i = 1; i < tr.length; i++) {
    let td = tr[i].getElementsByTagName("td")[2];
    let tb = [td.innerText];


    if (value == tb) {

      tr[i].style.display = "";

    } else {
      tr[i].style.display = "none";
    }
    if (value == "Select categorie:") {
      tr[i].style.display = "";
    }


  }




})