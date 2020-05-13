$('#planets').masonry({
    // options
    itemSelector: '.grid-item',
    columnWidth: '.grid-sizer',
    percentPosition: true
});

function playStory(element) {
    const audio = document.getElementById(element);
    audio.play();
}