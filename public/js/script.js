function myFunction() {
    const tampil = document.getElementById("items-button").classList.contains("hidden");

    tampil == true ? document.getElementById("items-button").classList.remove("hidden") : document.getElementById("items-button").classList.add("hidden");

    // if (tampil == true) {
    //     document.getElementById("items-button").classList.remove("hidden");
    // } else {
    //     document.getElementById("items-button").classList.add("hidden");
    // }
}
