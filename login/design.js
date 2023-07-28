$(document).ready(function () {
    $("#login1").click(function () {
        var username = $("#uname").val();
        var password = $("#pass").val();

        $.ajax({
            url: "login.php",
            type: "POST",
            data: {
                username: username,
                password: password
            },
            success: function (response) {
                if (response === "success") {
                    // Login successful
                    window.location.href = "dashboard.php"; // Redirect to the dashboard or logged-in page
                } else {
                    // Login failed
                    alert("Invalid username or password");
                }
            },
            error: function () {
                alert("An error occurred. Please try again later.");
            }
        });
    });
});
