const masonryOptions = {
    // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
};
let $container = $('#planets').masonry(masonryOptions);

function playStory(element) {
    const audioElements = document.getElementsByTagName('audio');
    const audio = document.getElementById(element);

    const paused = audio.paused;

    for(i=0; i<audioElements.length; i++) {
        if (audio.currentSrc != audioElements[i].currentSrc) {
            audioElements[i].pause();
            audioElements[i].controls = false;
        }
    }

    if (paused) {
        audio.currentTime = 0;
        audio.play()
        audio.controls = true;
    }
    else {
        audio.pause()
        audio.controls = false;
    }

    $container.masonry('destroy');
    $container.masonry(masonryOptions);
}