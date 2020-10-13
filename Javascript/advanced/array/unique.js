let nums = [3, 9, 1, 5, 9, 4, 56, 32, 12, 7];

let sortedArray = nums.sort((a, b)=>a-b);

let uniqueArray = sortedArray.filter((element, index, self)=>{
    return index === self.indexOf(element);
})

console.log(uniqueArray);