var items = [
    ['001', 'Keyboard Logitek', 60000, 'Keyboard yang mantap untuk kantoran', 'logitek.jpg'],
    ['002', 'Keyboard MSI', 300000, 'Keyboard gaming MSI mekanik', 'msi.jpg'],
    ['003', 'Mouse Genius', 50000, 'Mouse Genius biar lebih pinter', 'genius.jpeg'],
    ['004', 'Mouse Jerry', 30000, 'Mouse yang disukai kucing', 'jerry.jpg']
]

const DaftarBarang = document.getElementById("listBarang");
DaftarBarang.classList.add("d-flex");
DaftarBarang.classList.add("flex-wrap");
for (let i=0; i<items.length; i++){
    let card=document.createElement("div");
    card.setAttribute("class","card col-md-4");
    card.setAttribute("style","width:18rem");
    let img=document.createElement("img");
    img.setAttribute("src","img/"+items[i][4]);
    img.setAttribute("class","card-img-top mt-3");
    let cardbody=document.createElement("div");
    cardbody.setAttribute("class","card-body");
    let cardtitle=document.createElement("h5");
    cardtitle.setAttribute("class","card-title");
    cardtitle.setAttribute("id","itemName");
    let titletext=document.createTextNode(items[i][1]);
    let cardtext1=document.createElement("p");
    cardtext1.setAttribute("class","card-text");
    cardtext1.setAttribute("id","itemDesc");
    let text1=document.createTextNode(items[i][3]);
    let cardtext2=document.createElement("p");
    cardtext2.setAttribute("class","card-text");
    let text2=document.createTextNode(items[i][2]);
    let link=document.createElement("a");
    link.setAttribute("href","#");
    link.setAttribute("class","btn btn-primary");
    link.setAttribute("id", "addCart");
    let linktext=document.createTextNode("Tambahkan ke keranjang");

    cardtitle.appendChild(titletext);
    cardtext1.appendChild(text1);
    cardtext2.appendChild(text2);
    link.appendChild(linktext);

    cardbody.appendChild(cardtitle);
    cardbody.appendChild(cardtext1);
    cardbody.appendChild(cardtext2);
    cardbody.appendChild(link);

    card.appendChild(img);
    card.appendChild(cardbody);

    DaftarBarang.appendChild(card);
}

const submit=document.getElementById("searchItem");
const cardid=document.getElementsByClassName("card");
submit.addEventListener('click', function(){
  let searchBarang=document.getElementById("keyword").value.toUpperCase();
  for (i=0;i<items.length;i++){
    let namaBarang=items[i][1].toUpperCase();
    if(namaBarang.indexOf(searchBarang)>-1){
      cardid[i].style.display="";
    }
    else{
      cardid[i].style.display="none";
    }
  }
})
