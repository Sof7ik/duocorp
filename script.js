// function openArticle() {
// 	document.getElementById('article').style.webkitLineClamp = 0;
//     document.getElementById('article').style.overflow = 'none';
//     document.getElementById('article').style.textOverflow = 'none';
//     document.getElementById('lookMoreArticle').style.display = 'none';
//     document.getElementById('lookLessArticle').style.display = 'block';
//     document.getElementById('lookMoreArticle').style.color = 'red';
// }
// function closeArticle() {
// 	document.getElementById('article').style.webkitLineClamp = 4;
// 	document.getElementById('article').style.overflow = 'hidden';
//     document.getElementById('article').style.textOverflow = 'ellipsis';
//     document.getElementById('lookLessArticle').style.display = 'none';
//     document.getElementById('lookMoreArticle').style.display = 'block';
// }

var button = document.querySelector('#navButton')

var linkHref = document.querySelector('#linkStyle')
console.log(linkHref);


button.addEventListener('click', function () {
        if ( linkHref.getAttribute('href') == 'styles/style.css') 
                linkHref.setAttribute('href', 'styles/styleDark.css')
        else {
                linkHref.setAttribute('href', 'styles/style.css')
        }
})