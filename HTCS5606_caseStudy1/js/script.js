


// price of products
priceDogFood1 = 28.89;
priceCatFood1 = 34.99;
priceBirdFood1 = 5.99;
priceFishFood1 = 19.99;
priceReptileFood1 = 18.90;
priceSmallAnimalFood1 = 14.99;

//addToCart and invoice function taken from demo files 2020052012, edited to fit case study

// adds product to cart menu
function addToCart(e){
    cart = document.getElementById("cartList");
    switch(e.id){ //finds id of specific item id
        case "addDogFood1":
            qty = document.getElementById("dogFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceDogFood1* 100) /100; // rounds to 2 d.p

            cart.insertAdjacentHTML('beforeend', '<p>Dog food: <input type="number" class="cartInput" id = "cartDogFood1" price=priceDogFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        case "addCatFood1":
            qty = document.getElementById("catFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceCatFood1* 100) /100;

            cart.insertAdjacentHTML('beforeend', '<p>Cat food: <input type="number" class="cartInput" id = "cartCatFood1" price=priceCatFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        case "addFishFood1":
            qty = document.getElementById("fishFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceFishFood1* 100) /100;

            cart.insertAdjacentHTML('beforeend', '<p>Fish food: <input type="number" class="cartInput" id = "cartFishFood1" price=priceFishFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        case "addBirdFood1":
            qty = document.getElementById("birdFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceBirdFood1* 100) /100;

            cart.insertAdjacentHTML('beforeend', '<p>Bird food: <input type="number" class="cartInput" id = "cartBirdFood1" price=priceBirdFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        case "addReptileFood1":
            qty = document.getElementById("reptileFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceReptileFood1* 100) /100;

            cart.insertAdjacentHTML('beforeend', '<p>Reptile food: <input type="number" class="cartInput" id = "cartReptileFood1" price=priceReptileFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        case "addSmallAnimalFood1":
            qty = document.getElementById("smallAnimalFood1Qty").value; // gets item quantity
            price = Math.round(qty * priceSmallAnimalFood1* 100) /100;

            cart.insertAdjacentHTML('beforeend', '<p>Small Animal food: <input type="number" class="cartInput" id = "cartSmallAnimalFood1" price=priceSmallAnimalFood1 value="'
                + qty + '"> Price:$' + price + '</p>');
            break;
        default:
            //
    }
    rotateCart(); // triggers animation indicating cart has items within

}


function invoice() {

    invoicePage = document.getElementById("invoicePage");

    //get btn element to function on trigger
    var btn = document.getElementById("checkout");

    btn.onclick = function () {
        cart = document.getElementsByClassName("cartInput");
        invoiceContent = document.getElementById("invoiceContent");
        total = 0;
        var elems = document.getElementsByClassName("items");
        i = 0;
        while (i < elems.length) {
            elems[i].parentNode.removeChild(elems[i]);
        }
        i = 0;
        while (i < cart.length) {
            console.log(cart[i].id);
            qty = cart[i].value;
            switch (cart[i].id) { // analyses cart and matches id to form total cost
                case "cartDogFood1":
                    price = Math.round(qty * priceDogFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Dog Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;

                    break;
                case "cartCatFood1":
                    price = Math.round(qty * priceCatFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Cat Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;
                    break;
                case "cartFishFood1":
                    price = Math.round(qty * priceFishFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Fish Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;
                    break;
                case "cartBirdFood1":
                    price = Math.round(qty * priceBirdFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Bird Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;
                    break;
                case "cartReptileFood1":
                    price = Math.round(qty * priceReptileFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Reptile Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;
                    break;
                case "cartSmallAnimalFood1":
                    price = Math.round(qty * priceSmallAnimalFood1* 100) /100;
                    invoiceContent.insertAdjacentHTML(
                        'beforeend',
                        '<p class = "items">Small Animal Food: Qty:' + qty + ' Price:$' + price + '</p>');
                    total += price;
                    break;
                default:
                // code block
            }

            i++;

        }
        // error prevention
        //writes invoice to cart and calculates shipping
        if(total < 0){
            invoiceContent.insertAdjacentHTML(
                'beforeend',
                '<p class = "items">You cannot order a negative amount!</p>');
            }
        else
            {invoiceContent.insertAdjacentHTML('beforeend', '<p class = "items">Total: $'+ total+'</p>');
            if(total == 0){
                invoiceContent.insertAdjacentHTML(
                    'beforeend',
                    '<p class = "items">Please order something!</p>');
                }

            else if(total >300){ // shipping cost trigger
                invoiceContent.insertAdjacentHTML(
                    'beforeend',
                    '<p class = "items">shipping cost: FREE</p>');
                }
            else if (total <=300){ // shipping cost trigger
                invoiceContent.insertAdjacentHTML(
                    'beforeend',
                    '<p class = "items">shipping cost: $5</p>');
                }
            }
    }
}

// Rotates cart icon right and left 2 times after item added to cart
function rotateCart() {
    target = document.getElementById("rotateImg");
    i=0;

    changeDir = false;
    iterations = 1;

    var id = setInterval(frame, 4);

    function frame(){

        if (iterations ==1 || iterations ==3){
            if(i==0 && changeDir == true ) {
                iterations +=1;
                changeDir = false;
            }
            else if(i==45 && changeDir == false){
                changeDir = true;}
            else if(changeDir == true){
                i = i-1
            }
            else{
                i=i+1;
            }}
        else if (iterations ==2 || iterations ==4){
            if(i==0 && changeDir == true ) {
                iterations +=1;
                changeDir = false;
            }
            else if(i==-45 && changeDir == false){
                changeDir = true;}
            else if(changeDir == true){
                i = i+1
            }
            else{
                i=i-1;
            }}
        else {
            clearInterval(id);
        }
        target.style.transform = 'rotate('+i+'deg)';
    }
}