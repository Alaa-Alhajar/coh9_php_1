const minAge = 18;
const maxAge = 35;
let age;
do {
    age = prompt("what is your age");
    age = Number.parseInt(age);
    if(age >= 18 && age <=35){
        alert("welcame")
    }else{
        alert("Your age does not allow")
    }
}while(confirm("is anay one else"))