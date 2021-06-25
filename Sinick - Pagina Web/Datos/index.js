

function loader() {
  fetch("https://randomuser.me/api/?results=20")
    .then(res => res.json())
    .then(function(data) {
      render(data.results);
    });
}

function render(data) {
  console.log(data);

  let template = ``;
  data.forEach(e => {
    template += `<div class="listItem">
      <img src="${e.picture.medium}">
     <!-- ${data.indexOf(e)} -->
      <h3>${e.name.first} ${e.name.last}</h3>
      <p>${e.email}</p>
      <div class="controls">
        
      </div>
    </div>`;
  });

  document.getElementById("app").innerHTML = template;

  let element = document.getElementsByClassName("delete");
  console.log(element);
  for (let i = 0; i < element.length; i++) {
    element[i].addEventListener("click", function() {
      //  alert(this.getAttribute("data"));
      del(data, this.getAttribute("data"));
    });
  }
}

function del(data, index) {
  data.splice(index, 1);
  render(data);
}

loader();

function rand(x){
    return Math.floor(Math.random()*x)+1}
var off=true,r=255,g=255,b=255,R=rand(10),G=rand(10),B=rand(10),interval=null
function changeColor(id,r,g,b){
   x=document.getElementById(id)
   switch(id){
   case 'a':  x.style.color='rgb('+r+','+g+','+b+')'
    break
   default:    x.style.backgroundColor='rgb('+r+','+g+','+b+')'}}
function turn(off){
   R=Math.abs(R),G=Math.abs(G),B=Math.abs(B)
   if(off){
       R=-R,G=-G,B=-B}
    interval=setInterval(function(){
    changeColor('b',r,g,b)
    changeColor('c',255-r,255-g,255-b)
    changeColor('a',r,g,b)
    r+=R,g+=G,b+=B
    if(r>=255 && g>=255 && b>=255){
   clearInterval(interval)
   r=255,g=255,b=255}
    if(r<=0 && g<=0 && b<=0){
   clearInterval(interval)
   r=0,g=0,b=0}},10)}
function clk(){
       navigator.vibrate(30)     
       turn(off)
       off=!off}