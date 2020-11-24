baguetteBox.run('.gallery-items');

const galleryItems=document.querySelector(".gallery-items").children;
const prev=document.querySelector(".prev");
const next=document.querySelector(".next");
const un=document.querySelector(".un");
const deux=document.querySelector(".deux");

const maxItem=6;
let index=1;

 const pagination=Math.ceil(galleryItems.length/maxItem);
 console.log(pagination)

 prev.addEventListener("click",function(){
	 index--;
	 check();
	 showItems();
 })
 next.addEventListener("click",function(){
	index++;
	check();
	 showItems();
 })

 un.addEventListener("click",function(){

	 if (index==1) {

		 check();
		 showItems();
	 } else if (index==2) {

		 index--;
		 check();
		 showItems();
	 }else {
		 index-=2;
		 check();
		 showItems();
	 }
 })

 deux.addEventListener("click",function(){
	if (index==1) {
		index++;
		check();
		showItems();
	} else if (index==2) {
		check();
		showItems();
	}else {
		index--;
		check();
		showItems();
	}
 })



 function check(){
	 if(index==pagination){
		next.classList.add("disabled");
	 }
	 else{
		 next.classList.remove("disabled");
	 }

	 if(index==1){
		prev.classList.add("disabled");
	 }
	 else{
		 prev.classList.remove("disabled");
	 }
 }

 function showItems() {
	 for(let i=0;i<galleryItems.length; i++){
		galleryItems[i].classList.remove("show");
		galleryItems[i].classList.add("hide");


			if(i>=(index*maxItem)-maxItem && i<index*maxItem){
			// if i greater than and equal to (index*maxItem)-maxItem;
			// means  (1*8)-8=0 if index=2 then (2*8)-8=8
				 galleryItems[i].classList.remove("hide");
				 galleryItems[i].classList.add("show");
			}

	 }


 }

 window.onload=function(){
	showItems();
	check();
 }
