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

const hamburger = document.getElementById('hamburger');
const navLinks = document.getElementById('navLinks');
const navClose = document.getElementById('navClose');

hamburger.addEventListener('click', () => {
    navLinks.classList.toggle('right-[-75%]');
    navLinks.classList.toggle('right-0');
})

navClose.addEventListener('click', () => {
    navLinks.classList.toggle('right-[-75%]');
    navLinks.classList.toggle('right-0');
})
