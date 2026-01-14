async function addTodo() {
    const title = document.getElementById('title').value;

    const response = await fetch('db-insert.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify({ title })
    });

    const data = await response.json();

    
}
