//Dynamic Object Creation In Javascript,it's really fun..


let score;
let MyObj = {
    name:'Fahad Bin Munir',
    profession: "Software Engineer",
    university: "Premier University",
    score : 455,
    game(score) {
        console.log('your gaming score is '+this.score);
    }
}

console.log(MyObj.score);
MyObj.game(233);