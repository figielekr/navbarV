const fs = require('fs');

const { readdirSync, rename } = require('fs');
const {resolve} = require('path');
const imageDirPath = resolve(__dirname, 'meme');
//fs.readdirSync() – Reads the content of a folder synchronously
// and returns the name of all the files inside the folder in an array format.
const path = './meme';
const files = readdirSync(path);

function readdirCallback (error, files) {
/*        console.log('Contents are...')
        console.log(files);
        console.log(files.length);*/
}

/*console.log(imageDirPath);
files.forEach(x => console.log(imageDirPath));*/


/*files.forEach(file => rename(          //jeden sposob
    imageDirPath +'/'+ file,
    imageDirPath +'/'+ file.toLowerCase(),
    err => console.log(err)
));*/



for (let i = 0; i<files.length; i++ ){          //drugi sposob
    files[i] = rename(imageDirPath+'/'+files[i],
        imageDirPath+'/'+(i+200)+'.jpg',
        err => console.log(err))
}











/*fs.readFile('test.txt', (err, data) => {
    console.log(data.toString())
});*/

/*
for (let i=200; i<230; i++){
    fs.appendFile('./testdirectory/'+i+'.txt', 'dzien dobry', (err) => {
        if (err){
            console.log(err);
        }
    })
}
*/


