

function deposite(...money) {
    console.log(money);
    
    let balance = 0;
    for(let i = 0; i < money.length; i++) {
        balance += money[i];
    }
    return balance;
}


let MyMoney = deposite(100,233,34,555);

console.log(MyMoney);

let newBalance = [122,334,233,2432,3443];
console.log(...newBalance);
console.log(Math.max(...newBalance));


let myvar = ["fahad","mark","bill","steve","jobs"]

// for(let name of myvar) {
//     console.log(name);    
// }
console.log(...myvar);


