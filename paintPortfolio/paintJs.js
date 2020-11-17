let galleryImages = document.querySelectorAll(".gallary-img"); //variable array for all gallery images
let getLatestOpenImg; //keep trak of which imgs are open
let windowWidth = window.innerWidth; //references the window width of the browser window
//error handler to make sure there are imgs in doc
if(galleryImages){
  galleryImages.forEach(function(image, index) {
    image.onclick = function(){
      //grab the image Style from css
      let getElementCss = window.getComputedStyle(image);
      //grab the background image attribute from css ie the url
      let getFullImgUrl = getElementCss.getPropertyValue("background-image");
      //break up the url
      let getImgUrlPos = getFullImgUrl.split("/Imgs/thumbs/");
      //grab second part and get rid of unwanted characters at the end
        //meaning this variable will just be th img name
      let setNewImgUrl = getImgUrlPos[1].replace('")', '');

      getLatestOpenImg = index + 1;

      //create popout window for higher rez pic
      let container = document.body;
      let newImgWindow = document.createElement("div");
      //attach it to Website
      container.appendChild(newImgWindow);
      //give the div a class called img-window
      newImgWindow.setAttribute("class", "img-window");
      //add an onclick event to the window that will close pop-out with the function closeImg() when clicked
      newImgWindow.setAttribute("onclick", "closeImg()");

      //create attributes for the new image that is higher rez, attach, and do the source
      let newImage = document.createElement("img");
      newImgWindow.appendChild(newImage);
      newImage.setAttribute("src", "Imgs/" + setNewImgUrl);
      newImage.setAttribute("id", "current-img");

      //creat on load to grab width of high rez image to space buttons correctly
      newImage.onload = function(){ //error handler to make sure img is finished loading before code is run
        let imgWidth = this.width;
        //logic for spacing
        let calcImgToEdge = ((windowWidth - imgWidth)/2)-80;
        //next
              //create buttons for navigation through high rez pics
              let newNextBtn = document.createElement("a");
              let btnNextText = document.createTextNode("Next");
              //insert the text within the anchor tag
              newNextBtn.appendChild(btnNextText);
              container.appendChild(newNextBtn);
              //give prev button attributes
              newNextBtn.setAttribute("class", "img-btn-next");
              newNextBtn.setAttribute("onclick", "changeImg(1)");
              //style button spacing
              newNextBtn.style.cssText = "right: " + calcImgToEdge + "px;";
        //previous
              //create buttons for navigation through high rez pics
              let newPrevBtn = document.createElement("a");
              let btnPrevText = document.createTextNode("Prev");
              //insert the text within the anchor tag
              newPrevBtn.appendChild(btnPrevText);
              container.appendChild(newPrevBtn);
              //give prev button attributes
              newPrevBtn.setAttribute("class", "img-btn-prev");
              newPrevBtn.setAttribute("onclick", "changeImg(0)");
              //style button spacing
              newPrevBtn.style.cssText = "left: " + calcImgToEdge + "px;";
      }
    }
  });
}
//function to remove pop-up window and buttons
function closeImg(){
  //close window
  document.querySelector(".img-window").remove();
  //close btns
  document.querySelector(".img-btn-next").remove();
  document.querySelector(".img-btn-prev").remove();
}
//function to change the image in the pop up window
function changeImg(changeDirection){
  //close previous image that was open before going to the next/prev
  document.querySelector("#current-img").remove();
  //generate a new img baised off the last one open
  let getImgWindow = document.querySelector(".img-window");
  let newImg = document.createElement("img");
  //add to popup
  getImgWindow.appendChild(newImg);
  //determin last img and which button was clicked
  let calcNewImg;
  if(changeDirection === 1){ //1 is forward/next
    calcNewImg = getLatestOpenImg + 1;
    //error handler for last photo in queue
    if(calcNewImg > galleryImages.length){
      calcNewImg = 1; //load first image
    }
  }else if (changeDirection === 0) { //0 is prev/backwards
    calcNewImg = getLatestOpenImg - 1;
    //error handler for last photo in queue
    if(calcNewImg < 1){
      calcNewImg = galleryImages.length; //load last image
    }
  }

  //attributes for navigating img
  newImg.setAttribute("src", "Imgs/Img" + calcNewImg + ".jpg");
  newImg.setAttribute("id", "current-img");

  //update img index
  getLatestOpenImg = calcNewImg;

  //error handler for button placement
  newImg.onload = function(){
      let imgWidth = this.width;
      let calcImgToEdge = ((windowWidth - imgWidth)/2)-80;

      let nextBtn = document.querySelector(".img-btn-next");
      nextBtn.style.cssText = "right: " + calcImgToEdge + "px;";

      let prevBtn = document.querySelector(".img-btn-prev");
      prevBtn.style.cssText = "left: " + calcImgToEdge + "px;";
  }

}
