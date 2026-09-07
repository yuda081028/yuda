const menuButton = document.querySelector(".menu-btn");

const navigation = document.querySelector(".navbar nav");


// Membuka / menutup menu
menuButton.addEventListener("click", function () {

    navigation.classList.toggle("show");

});


// Menutup menu setelah link diklik
document.querySelectorAll("nav a").forEach(function (link) {

    link.addEventListener("click", function () {

        navigation.classList.remove("show");

    });

});