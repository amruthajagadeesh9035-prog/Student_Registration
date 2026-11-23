$(document).ready(function () {

    // Live name validation
    $("#name").on("input", function () {
        let valid = /^[A-Za-z ]{2,50}$/.test($(this).val().trim());
        $(this).css("border-color", valid ? "#28a745" : "#dc3545");
    });

    // Live USN validation
    $("#usn").on("input", function () {
        let valid = /^[A-Za-z0-9]{5,20}$/.test($(this).val().trim());
        $(this).css("border-color", valid ? "#28a745" : "#dc3545");
    });

    // Live email validation
    $("#email").on("input", function () {
        let valid = /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test($(this).val().trim());
        $(this).css("border-color", valid ? "#28a745" : "#dc3545");
    });

    // Live phone validation
    $("#phone").on("input", function () {
        let valid = /^[0-9]{10}$/.test($(this).val());
        $(this).css("border-color", valid ? "#28a745" : "#dc3545");
    });

    // Submission validation
    $("#registrationForm").submit(function (event) {

        let phone = $("#phone").val().trim();
        let name = $("#name").val().trim();
        let usn = $("#usn").val().trim();
        let email = $("#email").val().trim();
        let address = $("#address").val().trim();

        if (!/^[A-Za-z ]{2,50}$/.test(name) ||
            !/^[A-Za-z0-9]{5,20}$/.test(usn) ||
            !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email) ||
            !/^[0-9]{10}$/.test(phone) ||
            !$("#department").val() ||
            !$("#semester").val() ||
            address.length < 5) {

            event.preventDefault();
            alert("Please check all fields and enter valid information.");
            return;
        }

        alert("All details verified! Submitting registration.");
    });

});