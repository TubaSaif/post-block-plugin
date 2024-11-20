// 
// console.log( 'Hello World! (My load more functionality now)' );
// document.getElementById('load-more-button').addEventListener('click', function() {
//     alert('Button clicked! This is your alert message.');
// });

console.log('Hello World! (My load more functionality now)');

document.addEventListener('DOMContentLoaded', function() {
    const loadMoreButton = document.getElementById('load-more-button');
    if (loadMoreButton) {
        loadMoreButton.addEventListener('click', function() {
            alert('Button clicked! This is your alert message.');
        });
    }
});
