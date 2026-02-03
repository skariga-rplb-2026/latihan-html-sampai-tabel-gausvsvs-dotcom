let skor_seri = 0;
let skor_user = 0;
let skor_com = 0;

function main(pilihan_user) {
    //alert(pilihan_user);
    //set pilihan komputer
    const komputer = ["batu", "gunting", "kertas"];
    const random = Math.floor(Math.random() * komputer.length);
    let pilihan_komputer = komputer[random];
    document.getElementById('pil_user').src = "img/" + pilihan_user + ".webp";
    document.getElementById('pil_com').src = "img/" + pilihan_komputer + ".webp";
    //seri, menang, kalah
    // kertas vs batu > menang
    //  batu vs gunting > menang
    //Gunting vs kertas > menang
    if (pilihan_user === pilihan_komputer) {
        skor_seri++;
        document.getElementById("hasil").innerHTML = "SERI";
    } else if (
        (pilihan_user === "kertas" && pilihan_komputer === "batu") ||
        (pilihan_user === "batu" && pilihan_komputer === "gunting") ||
        (pilihan_user === "gunting" && pilihan_komputer === "kertas")) {
        skor_user++;
        document.getElementById("hasil").innerHTML = "SKOR USER";
    } else {
        skor_com++;
        document.getElementById("hasil").innerHTML = "SKOR COM";

    }
    document.getElementById("Skor").innerHTML = "SKOR USER: " + skor_user + " | SKOR COM: " + skor_com + " | Seri: " + skor_seri;


}