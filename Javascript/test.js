const users = [
        { id : 1, name : 'Bablu' },
        { id : 2, name : 'Kartic' },
        { id : 3, name : 'Juton' },
        { id : 4, name : 'Niloy' },
        { id : 5, name : 'Sajib' }
    ];



const userList = users.map(user=>{
    return user.id * 25;
});

console.log(userList);