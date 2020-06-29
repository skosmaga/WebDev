//DOM Selection
//document.getElementById() -> Element
const judul = document.getElementById("judul");
judul.style.color ="red";
judul.style.backgroundColor="yellow";
judul.innerHTML="Shinta";

//document.getElementsByTagName() -> HTML collection
const paragraf = document.getElementsByTagName("p"); //bentuknya array
for (let i=0; i<paragraf.length; i++){
  paragraf[i].style.backgroundColor="lightblue"
}

//document.getElementsByClassName('className') -> HTML collection
const par1=document.getElementsByClassName("p1");
par1[0].innerHTML="ini diubah dari JS";

//atau
const par2=document.getElementsByClassName("p2")[0];
par2.innerHTML="ini diubah dari JS";

//document.querySelector() -> Element (jika selectornya ternyata terdiri dari beberapa element, maka dia akan mengembalikan nilai element yang pertama ketemu)
const par4=document.querySelector("#b p");
par4.style.color="green";

const li2=document.querySelector("section#b ul li:nth-child(2)")
li2.style.backgroundColor="orange"

//document.querySelectorAll -> memilih semua element
const par=document.querySelectorAll("p");
par[2].style.backgroundColor="red"

//mengganti root
const secB=document.getElementById("b");
const p4=secB.querySelector("p");
p4.style.fontSize=("30px");
