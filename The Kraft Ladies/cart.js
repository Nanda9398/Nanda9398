let total = 0;
const original = document.body.innerHTML;

function addItem(name, price) {
    if (sessionStorage.getItem(name) == null) {
        qty_price = ['product', 1, price];
        window.sessionStorage.setItem(name, qty_price);
    } else {
        let items = sessionStorage.getItem(name);
        items = items.split(',')
        if (items[0] == 'product') {
            items[1] = parseInt(items[1]) + 1;
            sessionStorage.setItem(name, items);
        }
    }
}

function showCart() {
    let table = '';
    let rows = sessionStorage.length;
    let cols = 3;
    table += `
    <div class="close">
        <button onclick="returnToOriginal()">&larr; Go back</button>
        <span>Your Cart</span>
    </div>
    <thead>
        <th>Item Name</th>
        <th>Quantity</th>
        <th>Price</th>
    </thead>`;
    for (let r = 0; r < rows; r++) {
        let name = sessionStorage.key(r);
        let qty_price = sessionStorage.getItem(name);
        qty_price = qty_price.split(',');
        if (qty_price[0] == 'product') {
            qty_price[1] = parseInt(qty_price[1])
            qty_price[2] = parseInt(qty_price[2])
            total += qty_price[1] * qty_price[2]
            table += '<tr>';
            for (let c = 0; c < cols; c++) {
                if (c == 0) {
                    table += '<td>' + '<span>' + name + '</span>' + '</td>';
                } else if (c == 1) {
                    table += `<td><button class="qty-btn" onclick=addQty(${r},'true')>+</button><span class="qty" id="${name}">${qty_price[1]}</span><button onclick=addQty(${r},'false')>-</button></td>`;
                } else {
                    table += `<td><span id='${name}-amount'>${qty_price[2]*qty_price[1]}</span></td>`;
                }
            }
            table += '</tr>';
        }
    }
    document.body.innerHTML = `
    <div class="cart-container">
    <table> 
        ${table} 
        </table> 
        <div class="total">
            <span id="total-desc">Total Amount:</span>
            <span id="total-amount">${total}</</span>
        </div>
    <div class="payment">
        <button class="payment-btn">Make Payment</button>
    </div>
    </div>
    `;
    document.body.style.backgroundColor = "lavender";
}

function returnToOriginal() {
    document.body.innerHTML = original;
    document.body.style.backgroundColor = "rgb(209, 195, 235)";
    total = 0;
    clear_empty()
}

function addQty(index, add) {
    let name = sessionStorage.key(index);
    let qty_price = sessionStorage.getItem(name);
    qty_price = qty_price.split(',');
    qty_price[1] = parseInt(qty_price[1])
    qty_price[2] = parseInt(qty_price[2])
    if (add == 'true') {
        qty_price[1] = qty_price[1] + 1;
        total += qty_price[2];
    } else {
        if (qty_price[1] > 0) {
            qty_price[1] = qty_price[1] - 1;
            total -= qty_price[2];
        } else {
            return 0
        }
    }
    document.getElementById(name).innerText = qty_price[1];
    document.getElementById(`${name}-amount`).innerText = qty_price[1] * qty_price[2];
    document.getElementById('total-amount').innerText = total
    sessionStorage.setItem(name, qty_price);
}

function clear_empty() {
    let n = sessionStorage.length
    let index = 0;
    for (let i = 0; i < n; i++) {
        let name = sessionStorage.key(index);
        let qty_price = sessionStorage.getItem(name);
        qty_price = qty_price.split(',');
        if (qty_price[0] == 'product' && qty_price[1] == '0') {
            sessionStorage.removeItem(name)
            continue;
        }
        index += 1;
    }
}