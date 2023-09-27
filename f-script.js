console.log("Welcome to Spotify");

// Initialize the Variables
let songIndex = 0;
let audioElement = new Audio('songs/1.mp3');
let masterPlay = document.getElementById('masterPlay');
let myProgressBar = document.getElementById('myProgressBar');
let gif = document.getElementById('gif');
let masterSongName = document.getElementById('masterSongName');
let songItems = Array.from(document.getElementsByClassName('BusItem'));

// BusName.style.textAlign = "left";
let songs = [
    {BusName: "HP2157 -  Ambala to Baddi Bus - 09:30 Am to 02:00 Pm", filePath: "songs/1.mp3", coverPath: "covers/1.jpeg"},
    {BusName: "HP1248 -  Amritsar to Shahpur Bus - 06:40 Pm to 1011 Pm", filePath: "songs/2.mp3", coverPath: "covers/2.jpeg"},
    {BusName: "HP1482 -  Amritsar to Sarkaghat Bus - 07:40 Am to 05:30 Pm", filePath: "songs/3.mp3", coverPath: "covers/3.jpeg"},
    {BusName: "HP1235 -  Amritsar to Bilaspur Bus  - 08:45 Pm to 06:15 Am", filePath: "songs/4.mp3", coverPath: "covers/4.jpeg"},
    {BusName: "HP1486 -  Dharamshala to Chandigarh Bus - 06:45 Pm to 01:00 Am", filePath: "songs/5.mp3", coverPath: "covers/5.jpeg"},
    {BusName: "HP1647 -  Anni to Kullu Bus - 05:00 Am to 07:30 Pm", filePath: "songs/2.mp3", coverPath: "covers/6.jpeg"},
    {BusName: "HP2345 -  Baddi to Hamirpur Bus - 04:20 Am to 09:10 Am", filePath: "songs/2.mp3", coverPath: "covers/7.jpeg"},
    {BusName: "HP1873 -  Baddi to Delhi Bus  - 08:45 Pm to  03:30 Am", filePath: "songs/2.mp3", coverPath: "covers/8.jpeg"},
     
]

songItems.forEach((element, i)=>{ 
    element.getElementsByTagName("img")[0].src = songs[i].coverPath; 
    element.getElementsByClassName("BusName")[0].innerText = songs[i].BusName; 
})
 

// Handle play/pause click
// masterPlay.addEventListener('click', ()=>{
//     if(audioElement.paused || audioElement.currentTime<=0){
//         audioElement.play();
//         masterPlay.classList.remove('fa-play-circle');
//         masterPlay.classList.add('fa-pause-circle');
//         gif.style.opacity = 1;
//     }
//     else{
//         audioElement.pause();
//         masterPlay.classList.remove('fa-pause-circle');
//         masterPlay.classList.add('fa-play-circle');
//         gif.style.opacity = 0;
//     }
// })
// Listen to Events
// audioElement.addEventListener('timeupdate', ()=>{ 
//     // Update Seekbar
//     progress = parseInt((audioElement.currentTime/audioElement.duration)* 100); 
//     myProgressBar.value = progress;
// })

myProgressBar.addEventListener('change', ()=>{
    audioElement.currentTime = myProgressBar.value * audioElement.duration/100;
})

const makeAllPlays = ()=>{
    Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
        element.classList.remove('fa-pause-circle');
        element.classList.add('fa-play-circle');
    })
}

Array.from(document.getElementsByClassName('songItemPlay')).forEach((element)=>{
    element.addEventListener('click', (e)=>{ 
        makeAllPlays();
        songIndex = parseInt(e.target.id);
        e.target.classList.remove('fa-play-circle');
        e.target.classList.add('fa-pause-circle');
        audioElement.src = `songs/${songIndex+1}.mp3`;
        masterSongName.innerText = songs[songIndex].BusName;
        audioElement.currentTime = 0;
        audioElement.play();
        gif.style.opacity = 1;
        masterPlay.classList.remove('fa-play-circle');
        masterPlay.classList.add('fa-pause-circle');
    })
})

document.getElementById('next').addEventListener('click', ()=>{
    if(songIndex>=9){
        songIndex = 0
    }
    else{
        songIndex += 1;
    }
    audioElement.src = `songs/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].BusName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');

})

document.getElementById('previous').addEventListener('click', ()=>{
    if(songIndex<=0){
        songIndex = 0
    }
    else{
        songIndex -= 1;
    }
    audioElement.src = `songs/${songIndex+1}.mp3`;
    masterSongName.innerText = songs[songIndex].BusName;
    audioElement.currentTime = 0;
    audioElement.play();
    masterPlay.classList.remove('fa-play-circle');
    masterPlay.classList.add('fa-pause-circle');
})