function myFunction() {
    tampil = Boolean;
    tampil = document.getElementById("items-button").classList.contains("hidden");

    if (tampil == true) {
        document.getElementById("items-button").classList.remove("hidden");
    } else {
        document.getElementById("items-button").classList.add("hidden");
    }
}