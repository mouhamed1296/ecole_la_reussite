$statut = document.getElementById("statut");
$ens = document.getElementById("ens");

$statut.addEventListener("change", () => {
  //console.log(statut.value);
  if (statut.value === "enseignant") {
    $ens.classList.add("show");
    $ens.classList.remove("hide");
  } else {
    $ens.classList.remove("show");
    $ens.classList.add("hide");
  }
});
