// Define the Perfume class
class Perfume {
    constructor(name, companyName, type, price, description, imageUrl) {
        this.name = name;
        this.companyName = companyName;
        this.type = type;
        this.price = price;
        this.description = description;
        this.imageUrl = imageUrl;
    }
}

// Create an array of Perfume objects
const perfumes = [
    new Perfume("Scandal Le Parfum Her Eau de Parfum", "Jean Paul Gaultier", "Women Perfume", 555.99, "A delightful rose fragrance.", "views/images/017215775802_1.jpg"),
    new Perfume("Sans Ambages", "Maison Douze", "Women Perfume", 1009.99, "A delightful rose fragrance.", "views/images/517816562203_1.jpg"),
    new Perfume("Tutti Twilly d'Hermès Eau de Parfum", "Hermès", "Women Perfume", 565.99, "A delightful rose fragrance.", "views/images/014516510152_1.jpg"),
    new Perfume("Poison Girl Eau de Parfum", "Dior", "Women Perfume", 575.99, "A delightful rose fragrance.", "views/images/3348901293846.jpg"),
    
    new Perfume("Esencia Elixir", "Loewe", "Men Perfume", 1095.99, "A delightful rose fragrance.", "views/images/020516593323_1.jpg"),
    new Perfume("Aventus", "Creed", "Men Niche Perfume", 1745.99, "A delightful rose fragrance.", "views/images/058313810713_1.jpg"),
    new Perfume("Hacivat Eau De Parfum", "Nishane", "Women Private Collection", 1134.99, "A delightful rose fragrance.", "views/images/PM_NISHANE_hacivat_eau_de_parfum_1.jpg"),
    new Perfume("Love Story Eau de Parfum", "Chloe", "Women Perfume", 685.99, "A delightful rose fragrance.", "views/images/Chloe_Love Story Eau de Parfum_Women Perfume.jpg"),
    // Add more Perfume objects here...

    new Perfume("The Tragedy Of Lord George Eau De Parfum 75ml", "Penhaligons", "Men Niche Perfume", 1255.99, "A delightful rose fragrance.", "views/images/793675976069_1.jpg"),
    new Perfume("Apple Blend On The Rocks Eau de Parfum 50ml", "Kilian Paris", "Women Perfume", 1165.99, "A delightful rose fragrance.", "views/images/3700550231257_.jpg"),
    new Perfume("Oud For Greatness", "Initio Parfums Prives", "Unisex Niche Perfume", 1700.99, "A delightful rose fragrance.", "views/images/128316563386_1.jpg"),
    new Perfume("Vert Malachite Eau de Parfum 50ml", "Armani Beauty", "Women Private Collection", 1006.99, "A delightful rose fragrance.", "views/images/3614272610736.jpg"),
    //
    new Perfume("Libre Intense Eau de Parfum", "Yves Saint Laurent", "Women Perfume", 811.99, "A delightful rose fragrance.", "views/images/3614273069540_.jpg"),
    new Perfume("Emphasize Hair Mist 100ml", "Ex Nihilo", "Hair Mist & Hair Perfume", 543.99, "A delightful rose fragrance.", "views/images/3760264093220_.jpg"),
    new Perfume("Dior Homme Intense Eau de Parfum", "Dior", "Men Perfume", 660.99, "A delightful rose fragrance.", "views/images/3348900838178_1.jpg"),
    new Perfume("Paradoxe Eau De Parfum", "Prada", "Women Perfume", 385.99, "A delightful rose fragrance.", "views/images/PRADA_3614273760652_1.jpg"),
    //
    new Perfume("GABRIELLE CHANEL", "Chanel", "ESSENCE", 568.99, "A delightful rose fragrance.", "views/images/PM_Chanel_gabriel_essence_1.jpg"),
    new Perfume("Miss Dior Eau de Parfum", "Dior", "Women Perfume", 565.99, "A delightful rose fragrance.", "views/images/3348901581370_.jpg"),
    new Perfume("CHANCE EAU TENDRE", "Chanel", "EAU DE PARFUM SPRAY", 568.99, "PARFUM SPRAY", "views/images/5518448400218.jpg"),
    new Perfume("Insolence Eau de Toilette 75ml", "Guerlain", "Women Perfume", 605.99, "A delightful rose fragrance.", "views/images/3346470143241.jpg"),
    //
    new Perfume("Insolence Eau de Toilette 75ml", "Guerlain", "Women Perfume", 605.99, "A delightful rose fragrance.", "views/images/074916366979_11.jpg"),
    new Perfume("Unisex Perfume", "100 BON", "Women Perfume", 374.99, "A delightful rose fragrance.", "views/images/555216876977_1.jpg"),
    new Perfume("Hypnotic Poison Eau De Toilette", "Dior", "Women Perfume",485.99, "PARFUM SPRAY", "views/images/3348900378575.jpg"),
    new Perfume("Insolence Eau de Toilette 75ml", "Guerlain", "Women Perfume", 605.99, "A delightful rose fragrance.", "views/images/3346470143241.jpg"),
    //
    new Perfume("Barénia", "Hermès", "ESSENCE", 765.99, "A delightful rose fragrance.", "views/images/014516977842_1.jpg"),
    new Perfume("Libre Intense Eau de Parfum", "Yves Saint Laurent", "Women Perfume", 633.99, "A delightful rose fragrance.", "views/images/3614273069540_.jpg"),
    new Perfume("L'Interdit Absolu Intense", "Givenchy", "Women Perfume", 602.99, "PARFUM SPRAY", "views/images/pm013116401227_11.jpg"),
    new Perfume("Sauvage Eau Forte", "Dior", "Men Perfume", 600.99, "A delightful rose fragrance.", "views/images/pm009116603021_1.jpg"),

];

// Function to display products
function displayProducts() {
    const productsDiv = document.querySelector('.products');
    perfumes.forEach((perfume, index) => {
        const productDiv = document.createElement('div');
        productDiv.classList.add('product');
        productDiv.innerHTML = `
        <img src="${perfume.imageUrl}" alt="${perfume.name}">
            <h3>${perfume.name}</h3>
            <p>${perfume.companyName}</p>
            <p>${perfume.type}</p>
            <p>$${perfume.price.toFixed(2)}</p>
            <p>${perfume.description}</p>
            

             <button onclick="window.location.href='/perfuoms';">Add to Cart</button> 
        `;
        productsDiv.appendChild(productDiv);
        
    });

}



// Function to add item to cart
function addToCart(index) {
    const cartItems = document.getElementById('cart-items');
    const perfume = perfumes[index];
    const cartItem = document.createElement('li');
    cartItem.textContent = `${perfume.name} - $${perfume.price.toFixed(2)}`;
    cartItems.appendChild(cartItem);
    updateTotal();
}

// Function to update total price
function updateTotal() {
    const cartItems = document.querySelectorAll('#cart-items li');
    let total = 0;
    cartItems.forEach(item => {
        const price = parseFloat(item.textContent.split('$')[1]);
        total += price;
    });
    document.getElementById('total-price').textContent = total.toFixed(2);
}

// Initialize the product display
displayProducts();
