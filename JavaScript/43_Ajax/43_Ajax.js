// const url = "https://picsum.photos/v2/list?page=1&limit=5";

const div1 = document.querySelector('#div1');
const btn1 = document.querySelector('#btn1');

function makeList(data) {
    div1.replaceChildren();
    // div1.innerHTML = '';
    data.forEach(item => {
    const tagImg = document.createElement('img');
    tagImg.classList.add('size')
    tagImg.setAttribute('src', item.download_url);
    div1.appendChild(tagImg);
    });
}

function getUrl(){
    let url = document.getElementById('input_url').value;
    fetch(url)
    .then(res => {return res.json()})
    .then(data => makeList(data))
    .catch(() => alert('왜뜸?'));
}

btn1.addEventListener('click', getUrl);
