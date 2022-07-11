function myFunction() {
    // Declare variables
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("search");
    filter = input.value.toUpperCase();
    table = document.querySelector(".table");
    tr = table.querySelectorAll("tr");
    // tr.shift()
    
    
    // Loop through all table rows, and hide those who don't match the search query
    for (i = 0; i < tr.length; i++) {
      // td = tr[i].getElementsByTagName("td")[0];
      td1 = tr[i].getElementsByTagName("td")[1];
      // console.log(td)
      // console.log(td1)
      // if (td ) {
      if ( td1 ) {
        // txtValue = td.innerText; 
        txtValue =   td1.querySelector('a').innerText 
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        } else {
          tr[i].style.display = "none";
        }
      }
    }
    
    
  }