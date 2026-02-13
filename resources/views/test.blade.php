<html>
<head>
    <title>Test page</title>
</head>
<body>
<button id="test-btn">Test</button>
<div id="response"></div>
<script>
    document.getElementById('test-btn').addEventListener('click', () => {
        const formData = new FormData();
        formData.append('input', 'Hello from JS!');

        fetch('/', {
            method: 'POST',
            body: formData
        })
            .then(async response => {
                const respJson = await response.json();
                document.getElementById('response').innerHTML = respJson.message;
            });
    });
</script>
</body>
</html>
