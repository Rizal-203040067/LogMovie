function hide_profile() {
    tampil = Boolean;
    tampil = document
        .getElementById("drop-profile")
        .classList.contains("hidden");

    if (tampil == true) {
        document.getElementById("drop-profile").classList.remove("hidden");
    } else {
        document.getElementById("drop-profile").classList.add("hidden");
    }
}

function hide_input() {
    tampil = Boolean;
    tampil = document
        .getElementById("items-button")
        .classList.contains("hidden");

    if (tampil == true) {
        document.getElementById("items-button").classList.remove("hidden");
    } else {
        document.getElementById("items-button").classList.add("hidden");
    }
}

function hide_input2() {
    tampil = Boolean;
    tampil = document
        .getElementById("items-button2")
        .classList.contains("hidden");

    if (tampil == true) {
        document.getElementById("items-button2").classList.remove("hidden");
    } else {
        document.getElementById("items-button2").classList.add("hidden");
    }
}
