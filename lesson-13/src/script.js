var btn1 = document.getElementById("btn1");
var btn2 = document.getElementById("btn2");
var main = document.getElementById("main");
var myList = document.getElementById("list");
var ul = document.getElementsByTagName("ul");
var story = myList.getElementsByClassName("item");
var popup = document.getElementsByClassName("popup")[0];
var close = document.querySelector(".close");

function addItem() {
	 var newLi = document.createElement("li");
  newLi.innerHTML = "Новая задача!";
  newLi.className = "item";
  myList.appendChild(newLi);
  popup.style.display = "none"
  btn2.disabled = false;
}

function delItem() {
	 myList.removeChild(story[0]);

	 if (story.length == 0) {
	 	 popup.style.display = "block";
	 	 btn2.disabled = true;
	 }
}

function closePopUp() {
	 popup.style.display = "none";
}

btn1.addEventListener("click", addItem);
btn2.addEventListener("click", delItem);
close.addEventListener("click", closePopUp);

 /*Усложненное задание*/
 var userName = prompt("Как вас зовут?", ''); // имя пользователя
 var userAge = prompt("Сколько вам лет?", ''); //возраст пользователя
 var subscription = confirm ("Вы подписаны на наш сайт?", ''); // подписка на сайт

function welcome(name) {
	alert("Добро пожаловать " + name + ", Вы допущены на сайт:)");
	console.log("Пользователь: " + name + " допущен" );
}

if( (userAge > 18) && (subscription == true) ) {
	 welcome(userName);
} else {
	 alert("Доступ запрещён!!!");
	 document.location.href = "https://www.youtube.com/watch?v=tn7Wg9zQVTg";
}
