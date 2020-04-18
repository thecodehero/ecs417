function largestNumber() {
    var inputNo;
    var numbers = new Array(0,0,0,0,0)               
    for(i=0;i < 5; i++) {
        inputNo = window.prompt("Enter a number")
        numbers[i] = inputNo;             
    } 
    var largestNo = Math.max(numbers[0],numbers[1],numbers[2],numbers[3],numbers[4]);
    window.alert("Largest number is: " + largestNo);
}

