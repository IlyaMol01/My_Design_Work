function searchGames() {
    let input = document.querySelector('.search-bar input').value.toLowerCase();
    let games = document.querySelectorAll('.product_shop p:first-of-type');
    let gameResults = document.getElementById('gamesResults');
    gameResults.innerHTML = '';

    if (input.trim() === '') {
        gameResults.style.display = 'none';
        return;
    }

    let count = 0;
    games.forEach(game => {
        let gameTitle = game.textContent.toLowerCase();
        if (gameTitle.includes(input)) {
            noResults = false; 
            count++;
            if (count <= 3) {
                showGamePreview(game, gameResults);
            } else {
                showGamePreview(game, gameResults, true);
            }
        }
    });

    if (count > 3) {
        gameResults.style.overflowY = 'scroll';
    }
    gameResults.style.display = 'block';
}
let noResults = true;
if (count === 0) {
    gameResults.innerText = 'По вашему результату ничего не найдено!';
} else {
    gameResults.style.overflowY = 'unset';
    gameResults.style.display = 'block';
}
function showGamePreview(gameElement, container, hidden = false) {
    let gameName = gameElement.textContent;
    let gameImg = gameElement.parentElement.querySelector('img').src;
    let gamePreview = `
        <div class="game-preview" style="display: ${hidden ? 'none' : 'block'};">
            <img src="${gameImg}">
            <p style="margin-left: 15px;">${gameName}</p>
        </div>
    `;
    container.innerHTML += gamePreview;
}
function showGamePreview(gameElement) {
    let gameName = gameElement.textContent;
    let gameImg = gameElement.parentElement.querySelector('img').src;   
    let gamePreview = `
        <div class="game-preview">
            <img src="${gameImg}">
            <p>${gameName}</p>
        </div>
    `;   
    document.getElementById('gamesResults').innerHTML += gamePreview;
}
document.addEventListener('click', function(event) {
    if (event.target.classList.contains('clear-text')) {
        document.getElementById('gamesResults').style.display = 'none';
        document.querySelector('.search-bar input').value = '';
        document.querySelector('.clear-text').style.display = 'none';
    }
});

document.addEventListener('input', function(event) {
    if (event.target.matches('.search-bar input')) {
        if (event.target.value !== '') {
            document.querySelector('.clear-text').style.display = 'inline-block';
        } else {
            document.querySelector('.clear-text').style.display = 'none';
        }
    }
});
