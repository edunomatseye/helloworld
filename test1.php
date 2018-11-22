<div id="links"> <a href="test2.php" >Google Search</a></div>
<div id="link"> <a href="https://gmail.com" target='_blank'>click me Now</a></div>
<div class="wrapper row" id="content-wrapper"></div>

<script type='text/javascript'>
//import {uppc} from './library.js'



//console.log(uppc('lets play ball'))

 
function doSomethingAsync(){
	return new Promise((resolve)=> setTimeout(()=> resolve('This is a 5 minutes delay message'), 5000));
}

async function doSomething(){
	console.log(await doSomethingAsync());
	//return ds + 'Which looks great.';
	//return ds.then((res)=>console.log(res));
}

function doSomethingAsync2(){
	return new Promise((resolve)=> setTimeout(()=> resolve('All errors has been handled succes'), 4000));
}

async function doSomething2(){
	console.log(await  doSomethingAsync2() );
}
 

console.log('before');
doSomething();
console.log('after');

const car = new Object();
 // car = {id: 1, name: 'peter', age: 78}
const car1 = {};

console.log(car.__proto__);



class Person{
	constructor(name){
		this.name = name;
	}
	
	hello(){
		return 'Hello, my name is ' + this.name;
	}
}

class Programmer extends Person{
	salute(pg){
		return super.hello() + ' and i am a programmer that does ' + pg;
	}
	
	summit(v1=34, v2=23){
		return v1+v2;
	}
}

const nerd1 = new Programmer('Edun Omatseye');
const nerd2 = new Programmer('Edun Tuoyo');
console.log(nerd1.salute('Python'));
console.log(nerd2.salute('PHP'));
console.log(nerd2.salute('Angular'));
console.log(nerd2.summit());
console.log(nerd2.summit(12, 13));

try{
	console.log('shoy mush show');
}catch(e){
	alert (e + 'there is an error with code ${e}');
}finally{
	console.log( doSomething2())
	//return new Promise((resolve)=>setTimeout(()=>resolve('This is only a test o'), 3000));
}

const something = (bo=23, st = 'Maitama road') => {
	
}
console.log(something);

const doDestructure = function(){
	return [12, 'maitama', 2018];
}

 

 

const doDestructure2 =()=>{
	return {name: 'Jabi', street_no2: 345}
}
const {name, street_no2} = doDestructure2();


const cars ={
	brand: 'Mercedeze',
	make: 'E-Class',
	start: ()=>{
		console.log('Car Started');
	}
}


;(function callPeter(){
	return console.log('Money is calling you peter...IIFE');
})();

( () => console.log({name: 'Olowo baba'}))();


const res = 'and this is final';
const link = document.querySelector('#link');
link.addEventListener('click', ()=>{ console.warn(`The link selector has been choosen ${res}`)});


const ab = [1,2,3,4];
const ac= [2,45,4,3,4,6,4,5,7,56,4,45,];

console.log(ab.reduce((acc, curVal, curInd, array)=>{
	return acc * curVal ;
}, 2));



console.log('---------------------');
const b = ac.filter((ab)=>{console.log(ab);});


console.log('---------------------');

ac.forEach(v=>{
	console.log(v);
});

console.log('---------------------');

/*
for(let property in Object){
	console.lgo(Object[property]); //value
	console.log(property) //object name
}

<a href="" onClick="doSomething()" > clickme</a>
window.onload=()=>{
	//windows loaded
}

const mylink = document.getElementById('#mylink');
mylink.addEventListener('click', ()=>{
	
});


console.log('***********************');
window.addEventListener('keydown', (event)=>{
	//windows loaded
	console.log(event.key);
})

const mousec = document.querySelector('#link');
mousec.addEventListener('mousedown', function(event){
	console.log(event.button);
	event.stopPropagation();
});


const xhr = new XMLHttpRequest();
xhr.onreadystatechange = () => {
	if (xhr.readyState===4){
		if(status===200){
			console.log(xhr.responseText)
		}else{
			console.error('error')
		}
	}
}
xhr.open('GET', '/api/getdetails/');
xhr.send();


const xhr = new XMLHttpRequest();
xhr.onreadystatechange = () => {
	if(xhr.readyState===4){
		xhr.status===200 ? console.log(xhr.responseText) : console.error('error');
	}
}
xhr.open('GET', '/api/getdetails/')
xhr.send();

fs.readFile('/readfile.json', (err, data)=>{
	//process error
	if(err!==null){
		console.error('error');
		return
	}
	
	//continue
	console.log(data)
});

const s = new Set();
const m = new Map()
m.set('color', 'Red');
m.set('age', 23);

const color = m.get('age');

const done = true;
const isItDoneYet = new Promise((resolve, reject) => {
	done ? resolve(console.log('My code will come back in the right time')) : reject(console.error('Promise error'));
});

const checkIfItsDone =() =>{
	isItDoneYet
	.then((ok)=>{console.log(ok)})
	.catch((e) => {console.error(e)})
}


*/

const dt = new Date();
console.log(dt.getDate());


const f = (m) => console.error(m);
const fpobj = {
	i:(m) =>{console.info(m)},
	e:(m) =>{console.error(m)}
}
fpobj.s = (m) =>{console.success(m)};


const fparr =[
(m)=> console.log(m),
(m)=> console.log(m),
24, 4, 6
];

const ffparr= fparr.filter((v, k)=> v<23);
const marr = fparr.map((v, k)=> v*k);



const rxx = new RegExp('\d{4}', 'i');
const rx = /^(<numba>\d{2})(<word>\w+)$/i
rx.test('88878');

let tstr = new String('Hello world, my dog is a good dog!');
tstr= tstr.replace(/dog/g, 'Special Cat');

/*
import package from 'module-package-name'
const mn = require('module-name');
export default str = str.toUpperCase();


const a1 =1;
const b1= 2;
const c1= 3;
const d1= 4;
export {a1, b1, c1, d1};



import {a, b, c, d} from '/uppercase.js'
import {a, b as bothers, c as sisters} from 'module'

exports.uppercase = str => str.toUppercase();
const package = require('module-name');
const uppercaseMod = require('uppercase.js');
uppercaseMode.uppercase('Testing');



const generateString=(noOfLinks, linkLength) =>{
	const randomGenerate = require('random');
	const s = new Set();
	let i=0;
	while(i <= noOfLinks){
		s.dd(randomGenerate.generate(linkLength));
		i++
	}
	
	return s;
}

const generatedString = generateString(5, 20);
for(const v of generatedString.values()){
	console.log(v);
}
*/

const sleeps = (microseconds) => {
	return new Promise(resolve => {
		setTimeout(resolve, microseconds);
	});
}
sleeps(5000).then(()=> {
	//carry out your function
});

const dsa = async (msg) => {
	await sleeps(6000); //async await
	return alert(msg);
}



const performSomethingA = (item) =>{
	item=item*2;
	return item
}
const items =[3,5,6,3,8,5,7,4,8,3];
const oitems = [{n: 'peter'}, {n1: 'John'}, {n2: 'Dolly'}, {n3: 'Dolly'}, {n4: 'Abigail'}, {n5: 'Bademi'}, {n6: 'Catherine'}, {n7: 'Dolly'}, {n8: 'Esther'}, {n9: 'Femi'}];
items.forEach((item)=>{
	console.log(performSomethingA(item))
});

const amap = items.map((i)=>{return performSomethingA(i)})
const afil = items.filter((i)=> i===5)
const ofil = oitems.filter((v, k)=> v=='Dolly')
const ared = items.reduce((a, v, k, array)=> {return a+v}, 0)


const arr1 = [2, 4]
const arr2 = [6, 2]
const arr3 = [3, 5]
const arr_xy = arr1.map(x=> {
	return arr2.map(y=> {
		return arr3.map(z=> {
			return x+y+z
		})
	})
})
console.log(arr_xy[0][0][1])

const some_var =2
const dict ={[some_var]: 'three'}
console.log(dict[2])

const add =(x, y) => {
	console.log(`Adding up ${x} and ${y}`)
	return x+y
}


const so ={'one':1, 'two':2, 'three':3}
const sj ='h,j,l,s,d,k,j,f,r,e,y,i'
const si =[1, 21, 3, 4, 51, 6, 34]
si.sort((a, b)=>{return b-a})
si.forEach(e=>{return console.log(e)})
const sio = sj.split(',');
const ass = si.join('-')
//sion.substring(2,5)
//delete so.two
Object.entries(so).forEach((e) => {
	console.log(`${e[0]} ${e[1]}`)
	//console.log(`${e[0]} ${e[1]}`)
})
const oi =so.hasOwnProperty('one')
const ai =si.includes(23)


const addo = ({a,b,c,d}) => {
	return a+b+c+d
}

const adddo =(a=3,b=4,c=5,d=6,e=7)=>{
	console.log(`${a}, ${b}, ${c}, ${d}, ${e}`)
	return a+b+c+d+e
}

const args =(a, b, ...args) =>{
	console.log(a)
	console.log(b)
	args.forEach(v =>{
		console.log(v)
	})
	return a+b+args
}


class Duck{
	constructor(name){
		this.name =name
	}
	
	fly(){
		console.log(`${this.name} can fly`)
		return this.name
	}
	
	create(name, kind){
		switch(kind){
			case 'mallard':
				return new MallardDuck(name)
			break
			case 'rubber':
				return new RubberDuck(name)
			break
			default:
				return new this(name)
		}
	}
}

class MallardDuck extends Duck{
	color(){
		return 'green'
	}
}

class RubberDuck extends Duck{
	constructor(name, eyeColor='black'){
		super()
		this.name = name
		this.eyeColor = eyeColor
	}
	

	fly(){
		console.log(`Just kidding, ${this.name} with ${this.eyeColor} eyes cannot fly`)
		return this.eyeColor
	}
	
	color(){
		return 'Yellow'
	}
}

const regduck = new Duck('Reggie')
console.log(regduck.fly())

const malduck =regduck.create('Biggie', 'mallard')
console.log(malduck.color())

const rubbduck = new RubberDuck('Ruggie', 'pink')
const rubduck =rubbduck.create('Ruggie', 'rubber')
console.log(rubduck.fly())
console.log(rubduck.eyeColor)



/*
split
join

splice
slice

push
pop

shift
unshift
*/

const entr ={one:11, two:22, three:33}
const ent = Object.entries(entr).forEach((e)=>{console.log(`${e[0]} ${e[1]}`)})


Object.keys(entr).forEach((e)=>{console.log(e)})

const greet = ({hello='Hello', world='World'}) => {
	console.log(`${hello} ${world}`)
}


const rest = (a, b, ...args) => {
	console.log(a)
	console.log(b)
	
	args.forEach((e)=>{
		console.log(e)
	})
}

//destructure method arguments
const ofun =({g,h,q})=>{
	console.log(g)
	console.log()
	console.log(q)
}



/*
query getOwner($id: String! ='1'){
	Person(id: $id){
		name,
		address: @include(if: $getAddress){
			street,
			city,
			state
		}
	}
}

{
	'id': '2',
	'getAddress': true
}
*/

const speaknow = async() => speechSynthesis.speak(new SpeechSynthesisUtterance('Hey baby girl'))
speechSynthesis.getVoices().forEach((e)=>{
	console.log(`Name: ${e.name} & Lang: ${e.lang}`)
})
console.log(speechSynthesis.getVoices())



localStorage.setItem('artist', 'French Montana')
localStorage.setItem('songTitle', 'Famous')

const art = localStorage.getItem('artist')
localStorage.removeItem('illi')

sessionStorage.setItem('artist', 'French Montana')

try{
	localStorage.setItem('song', 'Hope you dont get famous')
}catch(e){
	if(['ErrorExceeded','ExceededExpectedQuota'].includes(e.name)){
		console.error('Quota Error')
		throw e
	}
}



const div = document.createElement('div')
div.appendChild(document.createTextNode('Hennessy o'))
div.textContent='Hennessy mmmmo'

;(()=>{
	'use strict'
	if(!(window.indexedDB)){
		console.warn('IndexedDB not recognised by browser')
		return
	}else{
		console.log('Congratulation, we seriously support IndexedDB')
	}
})()



 

if(window.Notification && Notification.permission !== 'denied'){
	Notification.requestPermission(()=>{
		new Notification('Notification', {
			body: 'This is the Mirror on the wall',
			icon: ''
		})
	})
}








self.addEventListener('load', ()=>{
	if(navigator.serviceWorker){
		navigator.serviceWorker.register('sw.js', {scope: ''}).then((reg)=>{
			 
				console.log('Congratulation, Service worker is now registered')
			 
		} , (err)=>{
			console.warn('Service worker could not be registered')
		})
	}else{
		console.error('Service Worker is not supported in this browser')
	}

})






const dsx = ()=> {
	return new Promise((resolve, reject)=>{
		resolve(setTimeout(()=>{
			console.log('Oliver twist loading.................')
		}, 5000))
		reject('I cant say why Oliver didnt load..')
	})
}
const dx = async()=>{
	return console.log(await dsx())

}






const ax = '34'
const bx = 34

const ex = (ax===bx)?console.log('Coercion is true'):console.warn('Coercion is false')

//closure inner and outer functions
const createBase = (baseNo)=> {
	return (N)=>{
		return N+baseNo
	}
}

const addSeven = createBase(7)
addSeven(10) //17


const showBrowser=()=>{
	var userAgent   = navigator.userAgent;
	var opera       = (userAgent.indexOf('Opera') != -1);
	var ie          = (userAgent.indexOf('MSIE') != -1);
	var gecko       = (userAgent.indexOf('Gecko') != -1);
	var netscape    = (userAgent.indexOf('Mozilla') != -1);
	var version     = navigator.appVersion;

	if (opera){
	   console.log("Opera based browser");
	   // Keep your opera specific URL here.
	}

	else if (gecko){
	   console.log("Mozilla based browser");
	   // Keep your gecko specific URL here.
	}

	else if (ie){
	   console.log("IE based browser");
	   // Keep your IE specific URL here.
	}

	else if (netscape){
	   console.log("Netscape based browser");
	   // Keep your Netscape specific URL here.
	}

	else{
	   console.log("Unknown browser");
	}
	// You can include version to along with any above condition.
	console.log("Browser version info : " + version );
}


// const Person2 = function(){
// 	function Person2(){

// 	}
// 	return Person2
// }()



// Interface iLoan{
// 	interest: number
// 	rebate: number
// }

// class AgriLoan implements iLoan {

// 	 interest: number
// 	 rebate: number
// 	 constructor(interest: number, rebate: number){
// 	 	this.interest = interest
// 	 	this.rebate = rebate
// 	 }
// }
// const obj = new AgriLoan(10, 500)

function users(){
	return new Promise((resolve)=>{resolve(fetch('data.json'))})
}
// const userCards = fetch('data.json')
// .then(users=>users.json())
// .catch(e){console.error(e)}

// var users = [
//   {
//     "id": 1,
//     "name": "Leanne Graham",
//     "username": "Bret",
//     "email": "Sincere@april.biz",
//     "address": {
//       "street": "Kulas Light",
//       "suite": "Apt. 556",
//       "city": "Gwenborough",
//       "zipcode": "92998-3874",
//       "geo": {
//         "lat": "-37.3159",
//         "lng": "81.1496"
//       }
//     },
//     "phone": "1-770-736-8031 x56442",
//     "website": "hildegard.org",
//     "company": {
//       "name": "Romaguera-Crona",
//       "catchPhrase": "Multi-layered client-server neural-net",
//       "bs": "harness real-time e-markets"
//     }
//   },
//   {
//     "id": 2,
//     "name": "Ervin Howell",
//     "username": "Antonette",
//     "email": "Shanna@melissa.tv",
//     "address": {
//       "street": "Victor Plains",
//       "suite": "Suite 879",
//       "city": "Wisokyburgh",
//       "zipcode": "90566-7771",
//       "geo": {
//         "lat": "-43.9509",
//         "lng": "-34.4618"
//       }
//     },
//     "phone": "010-692-6593 x09125",
//     "website": "anastasia.net",
//     "company": {
//       "name": "Deckow-Crist",
//       "catchPhrase": "Proactive didactic contingency",
//       "bs": "synergize scalable supply-chains"
//     }
//   },
//   {
//     "id": 3,
//     "name": "Clementine Bauch",
//     "username": "Samantha",
//     "email": "Nathan@yesenia.net",
//     "address": {
//       "street": "Douglas Extension",
//       "suite": "Suite 847",
//       "city": "McKenziehaven",
//       "zipcode": "59590-4157",
//       "geo": {
//         "lat": "-68.6102",
//         "lng": "-47.0653"
//       }
//     },
//     "phone": "1-463-123-4447",
//     "website": "ramiro.info",
//     "company": {
//       "name": "Romaguera-Jacobson",
//       "catchPhrase": "Face to face bifurcated interface",
//       "bs": "e-enable strategic applications"
//     }
//   },
//   {
//     "id": 4,
//     "name": "Patricia Lebsack",
//     "username": "Karianne",
//     "email": "Julianne.OConner@kory.org",
//     "address": {
//       "street": "Hoeger Mall",
//       "suite": "Apt. 692",
//       "city": "South Elvis",
//       "zipcode": "53919-4257",
//       "geo": {
//         "lat": "29.4572",
//         "lng": "-164.2990"
//       }
//     },
//     "phone": "493-170-9623 x156",
//     "website": "kale.biz",
//     "company": {
//       "name": "Robel-Corkery",
//       "catchPhrase": "Multi-tiered zero tolerance productivity",
//       "bs": "transition cutting-edge web services"
//     }
//   },
//   {
//     "id": 5,
//     "name": "Chelsey Dietrich",
//     "username": "Kamren",
//     "email": "Lucio_Hettinger@annie.ca",
//     "address": {
//       "street": "Skiles Walks",
//       "suite": "Suite 351",
//       "city": "Roscoeview",
//       "zipcode": "33263",
//       "geo": {
//         "lat": "-31.8129",
//         "lng": "62.5342"
//       }
//     },
//     "phone": "(254)954-1289",
//     "website": "demarco.info",
//     "company": {
//       "name": "Keebler LLC",
//       "catchPhrase": "User-centric fault-tolerant solution",
//       "bs": "revolutionize end-to-end systems"
//     }
//   },
//   {
//     "id": 6,
//     "name": "Mrs. Dennis Schulist",
//     "username": "Leopoldo_Corkery",
//     "email": "Karley_Dach@jasper.info",
//     "address": {
//       "street": "Norberto Crossing",
//       "suite": "Apt. 950",
//       "city": "South Christy",
//       "zipcode": "23505-1337",
//       "geo": {
//         "lat": "-71.4197",
//         "lng": "71.7478"
//       }
//     },
//     "phone": "1-477-935-8478 x6430",
//     "website": "ola.org",
//     "company": {
//       "name": "Considine-Lockman",
//       "catchPhrase": "Synchronised bottom-line interface",
//       "bs": "e-enable innovative applications"
//     }
//   },
//   {
//     "id": 7,
//     "name": "Kurtis Weissnat",
//     "username": "Elwyn.Skiles",
//     "email": "Telly.Hoeger@billy.biz",
//     "address": {
//       "street": "Rex Trail",
//       "suite": "Suite 280",
//       "city": "Howemouth",
//       "zipcode": "58804-1099",
//       "geo": {
//         "lat": "24.8918",
//         "lng": "21.8984"
//       }
//     },
//     "phone": "210.067.6132",
//     "website": "elvis.io",
//     "company": {
//       "name": "Johns Group",
//       "catchPhrase": "Configurable multimedia task-force",
//       "bs": "generate enterprise e-tailers"
//     }
//   },
//   {
//     "id": 8,
//     "name": "Nicholas Runolfsdottir V",
//     "username": "Maxime_Nienow",
//     "email": "Sherwood@rosamond.me",
//     "address": {
//       "street": "Ellsworth Summit",
//       "suite": "Suite 729",
//       "city": "Aliyaview",
//       "zipcode": "45169",
//       "geo": {
//         "lat": "-14.3990",
//         "lng": "-120.7677"
//       }
//     },
//     "phone": "586.493.6943 x140",
//     "website": "jacynthe.com",
//     "company": {
//       "name": "Abernathy Group",
//       "catchPhrase": "Implemented secondary concept",
//       "bs": "e-enable extensible e-tailers"
//     }
//   },
//   {
//     "id": 9,
//     "name": "Glenna Reichert",
//     "username": "Delphine",
//     "email": "Chaim_McDermott@dana.io",
//     "address": {
//       "street": "Dayna Park",
//       "suite": "Suite 449",
//       "city": "Bartholomebury",
//       "zipcode": "76495-3109",
//       "geo": {
//         "lat": "24.6463",
//         "lng": "-168.8889"
//       }
//     },
//     "phone": "(775)976-6794 x41206",
//     "website": "conrad.com",
//     "company": {
//       "name": "Yost and Sons",
//       "catchPhrase": "Switchable contextually-based project",
//       "bs": "aggregate real-time technologies"
//     }
//   },
//   {
//     "id": 10,
//     "name": "Clementina DuBuque",
//     "username": "Moriah.Stanton",
//     "email": "Rey.Padberg@karina.biz",
//     "address": {
//       "street": "Kattie Turnpike",
//       "suite": "Suite 198",
//       "city": "Lebsackbury",
//       "zipcode": "31428-2261",
//       "geo": {
//         "lat": "-38.2386",
//         "lng": "57.2232"
//       }
//     },
//     "phone": "024-648-3804",
//     "website": "ambrose.net",
//     "company": {
//       "name": "Hoeger LLC",
//       "catchPhrase": "Centralized empowering task-force",
//       "bs": "target end-to-end models"
//     }
//   }
// ]
async function ucards(){
	await users().then(i=>{console.log(i)})
	// var userCards = resolve.map(function(user){
	// 	const { name, username, email, website } = user
	// 	const displayname = `${name} : (${username})`
	// 	const contact = `${email} : (${website})`
	// 	const displaystring = `${displayname}\n${contact}`
	// 	return displaystring
	// })
	// userCards.forEach((i)=>{console.log(`${i}`)})
}



const parentObj = {
	name: 'Hillary',
	age: 45,
	origin: 'African'
}

const childObj = Object.create(parentObj)
childObj.name= 'Peter'
childObj.age = 12

const childObj2 = {...parentObj}
childObj2.name = 'John'
childObj2.age = 20

//🔥📚
const flatt = [['🔥', '📚'], ['🔥', '📚'], ['🔥', '📚'], ['🔥', '📚']]
const nameani = ['moew', 'bark', 'woe', 'woof', 'baa', 'moo', 'baa', 'moo']

const flattt = flatt.flat()
const flattmap = flattt.flatMap((e, i)=>{return [e, nameani[i]]})

const flatttmap = flattmap.flat()


function Animal(name, energy){
	this.name = name
	this.energy = energy
}

Animal.prototype.eat = function(amount){
	
	this.energy += amount
	console.log(`${this.name} is eating... now has ${this.energy}`)
}
Animal.prototype.sleep= function(amount){
	
	this.energy += amount
	console.log(`${this.name} is sleeping...  now has ${this.energy}`)
}
Animal.prototype.play = function(amount){
	
	this.energy -= amount
	console.log(`${this.name} is playing... now has ${this.energy}`)
}

const leo = new Animal('Bingo', 40)
leo.eat(70)
leo.sleep(10)
leo.play(20)

const blk = new Animal('Amaka', 50)
blk.sleep(-80)



class Animals{
	constructor(name, energy){
		this.name = name
		this.energy = energy
	}
	eat(amount){
		this.energy += amount
		console.log(`${this.name} is still very busy eating, given ${amount} calories of energy.. now currently has ${this.energy} % energy`)
	}
	sleep(length){
		this.energy += length
		console.log(`${this.name} is still very busy sleeping, given ${length} calories of energy.. now currently has ${this.energy} % energy`)
	}
	play(length){
		this.energy -= length
		console.log(`${this.name} is still very busy playing, given ${length} calories of energy.. now currently has ${this.energy} % energy`)
	}
	static nextToEat(animals){
		const sortedAnimal = animals.sort((a, b)=>{
			return a.energy - b.energy
		})
		return sortedAnimal[0]
	}
}

const beo = new Animals('Bingo', 490)
const meo = new Animals('Pingo', 50)
const neo = new Animals('Cingo', 70)
Animals.nextToEat([beo, meo, neo])


const newError = new Error('Unauthorized access')
console.log(`New Error msg: ${newError.message}`)


const err_a = 5
try{
	console.log(err_b)
}catch(err){
	console.error(err)
}


(async ()=>{
	try{
		await functionwithpromise()
	}catch(err){
		console.error(err)
	}
	console.error('Easy! Integration is so easy')

})()





























</script>