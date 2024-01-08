import './bootstrap';
import '~resources/scss/app.scss';
import * as bootstrap from 'bootstrap';
import.meta.glob([
    '../img/**'
])
// Get the modal
let modalCollection = document.getElementsByClassName("myModal");

// Get the button that opens the modal
let btnCollection = document.getElementsByClassName("myBtn");

// Get the <span> element that closes the modal
let spanCollection = document.getElementsByClassName("close");

for(let i=0; i<btnCollection.length; i++){

    // When the user clicks the button, open the modal 
    btnCollection[i].onclick = function(e) {
        e.preventDefault(); 
        modalCollection[i].style.display = "block";
    }
    // When the user clicks on <span> (x), close the modal
    spanCollection[i].onclick = function() {
        modalCollection[i].style.display = "none";
    }
}




// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {     
  for(let i=0; i<modalCollection.length; i++){         
    if (event.target == modalCollection[i]) {            
       modalCollection[i].style.display = "none";        
       }     
    } 
  }
