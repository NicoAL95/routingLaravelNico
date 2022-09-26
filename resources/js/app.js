import './bootstrap';

const recipe = document.getElementById('recipe');
const recipeHover = document.getElementById('recipeHover');

const community = document.getElementById('community');
const communityHover = document.getElementById('communityHover');

recipe.addEventListener('click', () => {
    recipeHover.classList.toggle('hidden');
    recipeHover.classList.toggle('navHover');
})

community.addEventListener('click', () => {
    communityHover.classList.toggle('hidden');
    communityHover.classList.toggle('navHover');
})

