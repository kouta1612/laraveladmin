var postId = 0;

$('.like').on('click', function (event) {
    event.preventDefault();
    var postId = event.target.parentNode.parentNode.dataset['postid'];
    var isLike = event.target.previousElementSibling == null;

    console.log(isLike);
    $.ajax({
        method: 'POST',
        url : urlLike,
        data : { isLike: isLike, postId: postId, _token: token }
    })
    .done(function() {
        event.target.innerText = isLike ? event.target.innerText == 'Like' ? 'You like this post' : 'Like' : event.target.innerText == 'Dislike' ? 'You Dont like this post' : 'Dislike'
        if (isLike) {
            event.target.nextElementSibling.innerText = 'Dislike';
        } else {
            event.target.preventElementSibling.innerText = 'like';
        }
    });
});
