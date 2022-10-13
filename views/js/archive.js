// Get the modal
var modal = document.getElementById("myModal");
var popup = document.getElementById("popup");

// Get the button that opens the modal
//var btn = document.getElementById("myBtn");
const archives = document.querySelectorAll(".archive");

for (let i = 0; i < archives.length; i++) {
  const archive = archives[i];

  archive.addEventListener("click", () => {
    modal.style.display = "block";
    popup.appendChild(modal);
    const id = archive.dataset.id;
    console.log(archive);
    popup.querySelector(".supprimer").setAttribute("value", id);
    /* console.log(popup.querySelector(".supprimer").getAttribute("value")); */
  });
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
/*btn.onclick = function () {
  modal.style.display = "block";
};*/

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
