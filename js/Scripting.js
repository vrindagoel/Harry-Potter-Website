// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

	

//Shopping
function cart(){
	var x=parseInt(document.getElementById('cost').value);
	var y=document.getElementById('type').value;
	var z=document.getElementById('book').value;
	
	alert("You have ordered for " + z + " book of Rs. " + x + " , " + y + " edition");
	window.open("frame2.html")
}

