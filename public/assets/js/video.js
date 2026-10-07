


const videosList = [
    {
        video: 'assets/Video/CYEMCI - MIÔLAKÔLAKA (Official Video).mp4',
        title: 'Festival-Cyemci'
    },
    {
        video: 'assets/Video/HIGHLIGHTS LOKORACE_MAZAVAL RUN 2022.mp4',
        title: 'Live public'
    },
    {
        video: 'assets/Video/DJ 3d Animation.mp4',
        title: 'Animation'
    },
    {
        video: 'assets/Video/Fete prive.mp4',
        title: 'Fête privé-Schinchan'
    },
    {
        video: 'assets/Video/mbintsfotsiny.mp4',
        title: 'Mass up'
    },
];

document.getElementById('videosList').innerHTML = videosList.map(item => {
    var { video, title } = item;
    return `
        <div class="list">
            <video src="${video}" class="list-video" controls></video>
            <h3 class="list-title">${title}</h3>
        </div>
    `;
}).join('');

let videoList = document.querySelectorAll('.list');

videoList.forEach(vid => {
    vid.addEventListener('click', () => {
        videoList.forEach(remove => {
            remove.classList.remove('active');
        });

        vid.classList.add('active');
        let src = vid.querySelector('.list-video').src;
        let title = vid.querySelector('.list-title').innerHTML;

        let mainVideo = document.querySelector('.main-video-container .main-video');
        mainVideo.src = src;
        mainVideo.play();

        document.querySelector('.main-video-container .main-vid-title').innerHTML = title;
    });
});
