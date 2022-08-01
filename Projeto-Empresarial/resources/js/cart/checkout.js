import { Cart } from "./Cart";

Cart.getProducts();

console.log("CART PRODUCTS: ", Cart.products);

const cartProducts = Cart.products;

const table = document.getElementById("checkout-cart-tbody");
const cartTotal = document.getElementById("cart-total");
const transactionInstallments = document.getElementById(
    "transaction_installments"
);
console.log("🚀 ~ table", table);

const cartTotalPrice = Cart.formatPriceToString(Cart.getTotalPrice());

cartTotal.innerHTML = `Total R$ ${cartTotalPrice}`;

cartProducts.forEach((cartProduct) => {
    const productPrice = Cart.formatPriceToString(cartProduct.price);
    const productSubtotal = Cart.formatPriceToString(
        cartProduct.quantity * cartProduct.price
    );

    table.innerHTML += `
    <tr class="table-tr">
        <td class="px-4 py-3">
            <img alt="${cartProduct.name}" class="object-cover object-center w-full h-[80px] block"
                src="${cartProduct.cover}" style="width: 150px; min-width: 150px;" />
        </td>
        <td class="px-4 py-3 text-center">${cartProduct.name}</td>
        <td class="px-4 py-3 text-center">${cartProduct.quantity}</td>
        <td class="px-4 py-3 text-center">R$${productPrice}</td>
        <td class="px-4 py-3 text-center">R$${productSubtotal}</td>
    </tr>`;
});

for (let i = 1; i <= 12; i++) {
    const value = i;

    const option = Cart.formatPriceToString(Cart.getTotalPrice() / i);

    transactionInstallments.innerHTML += `
    <option class="py-4" value="${value}">${i} x ${option}</option>
    `;
}
