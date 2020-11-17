var btn = document.getElementsByClassName("pgBtn"); //variable for btns
var picture = document.getElementById("pic");
//shuffle through page btns
for(let i =0; i<btn.length; i++){
  btn[i].addEventListener('click', function(){
    let current = document.getElementsByClassName("active"); //find active button in array and assign it to current
    current[0].className = current[0].className.replace("active", ""); //remove active from button
    this.className += " active"; //add active to whichever button is clicked
  });

  btn[0].onclick = function(){
    picture.src = "http://laurenbugelli.com/Imgs/sketch.jpg";
  }
  btn[1].onclick = function(){
    picture.src = "http://laurenbugelli.com/Imgs/sketch2.jpg";
  }
  btn[2].onclick = function(){
    picture.src = "http://laurenbugelli.com/Imgs/sketch3.jpg";
  }
  btn[3].onclick = function(){
    picture.src = "http://laurenbugelli.com/Imgs/sketch4.jpg";
  }
  btn[4].onclick = function(){
    picture.src = "http://laurenbugelli.com/Imgs/sketch5.jpg";
  }
}
