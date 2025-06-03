document.querySelector('.load-more').addEventListener('click', function() {
    const hiddenCards = document.querySelectorAll('.card.hidden');
    const cardsToShow = Array.from(hiddenCards).slice(0, 2);
    
    if (hiddenCards.length <= 2) {
        this.style.display = 'none';
    }
    
    cardsToShow.forEach((card, index) => {
        setTimeout(() => {
            card.classList.remove('hidden');
            card.classList.add('show');
        }, index * 200);
    });
});
