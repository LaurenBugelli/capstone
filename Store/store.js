//used console.log() to test
//ERROR HANDLER FOR JS
if (document.readyState == 'loading') { //check to see if the document is loading so that the js performs correctly and doesnt get lost
    document.addEventListener('DOMContentLoaded', ready)
} else {
    ready() //run the ready function no matter what
}
//FUNCTION TO INITIALIZE ELEMENTS
function ready() {
    var removeCartItemButtons = document.getElementsByClassName('btn-danger')
    for (var i = 0; i < removeCartItemButtons.length; i++) { //loop through all remove buttons within the cart
        var button = removeCartItemButtons[i]
        button.addEventListener('click', removeCartItem) //when mouse click go to removeCartItem function
    }

    var quantityInputButtons = document.getElementsByClassName('cart-quantity-input')
    for (var i = 0; i < quantityInputButtons.length; i++) { //loop through quantity inputs within the cart
        var input = quantityInputButtons[i]
        input.addEventListener('change', quantityUpdated) //when clicked go to quantityUpdated function
    }

    var addToCartButtons = document.getElementsByClassName('shop-item-button')
    for (var i = 0; i < addToCartButtons.length; i++) { //loop through all 'ADD TO CART' buttons within the store
        var button = addToCartButtons[i]
        button.addEventListener('click', addToCart) //When clicked go to addToCart function
    }

    document.getElementsByClassName('btn-purchase')[0].addEventListener('click', purchaseButtonClicked)
}
//SIMULATE A PURCHASE EVENT -for my capstone I dont want an actual purchase to happen so this doesn't connect to anyone's money
function purchaseButtonClicked() {
    alert('Thank you for your purchase') //meassage to simulate a purchase
    var cartItems = document.getElementsByClassName('cart-items')[0] //find container cart items are in
    while (cartItems.hasChildNodes()) { //while cart has items, delet them
        cartItems.removeChild(cartItems.firstChild)
    }
    updateCartTotal()//update total to 0$ as chart should now be empty
}
//REMOVE FROM CART FUNCTION
function removeCartItem(event) {
    var buttonClicked = event.target //target is whichever button the user clicks
    buttonClicked.parentElement.parentElement.remove() //grab first parent, than the second parent and remove that parent element ie the grandparent element if you would
    updateCartTotal() //update total automatically for the user
}
//QUANTITY FUNCTION
function quantityUpdated(event) {
    var input = event.target //targets the input for quantity
    //error handler, check if the input is valid
    if (isNaN(input.value) || input.value <= 0) { //isNan makes sure its a number, and then we makesure the value is more than 0
        input.value = 1 //the element value will always start at one
    }
    updateCartTotal() //Go to updateCartTotal to update automatically
}
//ADD TO CART FUNCTION
function addToCart(event) {
    var button = event.target
    var shopItem = button.parentElement.parentElement //Grab the parent, and then the parent of the first parent element which should be the shop-item
    var title = shopItem.getElementsByClassName('shop-item-title')[0].innerText //grab title of the element chosen, so we need only the first element in the array
    var price = shopItem.getElementsByClassName('shop-item-price')[0].innerText //grab the price of the element chosen, so we need only the first element in the array
    var imageSrc = shopItem.getElementsByClassName('shop-item-image')[0].src //grab the image used for the element in question - .src - will grab the url for the source of the image
    formatCartItems(title, price, imageSrc) //pass title, price, and image to the function formatCartItems
    updateCartTotal() //and update the cart total automatically
}
//FORMAT ITEMS IN CART FUNCTION
function formatCartItems(title, price, imageSrc) {
    var cartRow = document.createElement('div') //create a row for the cart element, specifically a div to add to the html later
    cartRow.classList.add('cart-row') //adds the class found in the html to each new row for the cart
    var cartItems = document.getElementsByClassName('cart-items')[0]
    //Error handler to allow only one cart item to be in the cart at a time, ie the quantity will have to be updated if multiple items are desired by user not just adding the same item over and over
    var cartItemNames = cartItems.getElementsByClassName('cart-item-title')
    for (var i = 0; i < cartItemNames.length; i++) {
        if (cartItemNames[i].innerText == title) { //if item is already added to the cart
            alert('This item is already added to the cart') //tell user the item is already in the cart
            return //exits out of the entire function if the item is already in the cart so no new row will be added to the cart
        }
    }
    //format for the new rows
      //back tick -> ` <- allow for the implimentation of -> ${} as a variable place holder for element in question
    var cartRowContents = `
        <div class="cart-item cart-column">
            <img class="cart-item-image" src="${imageSrc}" width="100" height="100">
            <span class="cart-item-title">${title}</span>
        </div>
        <span class="cart-price cart-column">${price}</span>
        <div class="cart-quantity cart-column">
            <input class="cart-quantity-input" type="number" value="1">
            <button class="btn btn-danger" type="button">REMOVE</button>
        </div>`
    cartRow.innerHTML = cartRowContents
    cartItems.append(cartRow) //add the new row to the end of the cart, so that the first element added will apear first, second will be second, and so on
    cartRow.getElementsByClassName('btn-danger')[0].addEventListener('click', removeCartItem) //add an event listener to these buttons because they are added after the document is loaded
    cartRow.getElementsByClassName('cart-quantity-input')[0].addEventListener('change', quantityUpdated) //again this quantity element is added after the doc is loaded so a new event handler is needed
}
//UPDATE CART AUTOMATICALLY FUNCTION
function updateCartTotal() {
    var cartItemContainer = document.getElementsByClassName('cart-items')[0] //grab only the first element in the array
    var cartRows = cartItemContainer.getElementsByClassName('cart-row') //grab all elements within the cart container
    var total = 0 //var to hold value of the cart total
    for (var i = 0; i < cartRows.length; i++) { //loop through the rows within the cart
        var cartRow = cartRows[i] //iterator
        var priceElement = cartRow.getElementsByClassName('cart-price')[0] //grab only the very first element in the cart-price array
        var quantityElement = cartRow.getElementsByClassName('cart-quantity-input')[0] //same as above
        //this next var will grab the text within the element. The above only grabed the element and not the value
        var price = parseFloat(priceElement.innerText.replace('$', '')) //replace attribute gets rid of the dollar sign so only the value is stored in price, parseFloat allows for the value to be a float and not a string
        var quantity = quantityElement.value //stores value of the quantity from the var quantityElement
        total = total + (price * quantity) //logic
    }
    total = Math.round(total * 100) / 100 //rounds to two decimal places so no rounding errors happen with our float value
    document.getElementsByClassName('cart-total-price')[0].innerText = '$' + total //re-add the '$' and grab only the first element in the array
}
