const menuData = [
    { name: "Soto Ayam", category: "Makanan", price: "Rp 20,000" },
    { name: "Es Jeruk", category: "Minuman", price: "Rp 8,000" },
];

const menuTable = document.querySelector("table tbody");

menuData.forEach((menu) => {
    const row = document.createElement("tr");
    row.innerHTML = `
        <td>${menu.name}</td>
        <td>${menu.category}</td>
        <td>${menu.price}</td>
    `;
    menuTable.appendChild(row);
});