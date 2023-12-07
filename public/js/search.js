function searchProducts() {
    const search = document.getElementById('search-input').value;
    const xhr = new XMLHttpRequest();

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            const productListDiv = document.getElementById('item-list');
            productListDiv.innerHTML = xhr.responseText;
        }
    };

    xhr.open('GET', `index.php?search=${search}`, true);
    xhr.send();
}

function searchByCategory() {
    console.log("123");
}